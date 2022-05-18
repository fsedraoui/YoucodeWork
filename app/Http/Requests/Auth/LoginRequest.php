<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Registered;

use App\Models\User;
use App\Models\Student;
use App\Models\Instructor;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }


    public function login(){

        $response = Http::post('http://admin.youcode.school/api/login', [
            'email' => $this->email,
            'password' => $this->password,
        ]);
        
        
        if($response->successful() == 1){
            $body = json_decode($response->body(), true); 
            $res = Http::withHeaders([
                'User-Agent' => 'testing/1.0',
                'Accept'     => 'application/json',
                'Authorization'      => 'Bearer ' . $body['access_token']
            ])->get('http://admin.youcode.school/api/profile');

            $user = json_decode($res->body(), true); 
            $user = (object) $user;
            Session::put('user', $user);
            
            if (!Auth::attempt(['email' => $this->email,'password' => 'youcode2022'], $this->boolean('remember'))) {
             
                $existing_user = User::where('email', $user->email)->get();
                if($existing_user->count() > 0){
                // Auth::user()->firstName = $user->first_name;

                } else {
                    $new_user = User::create([
                        'name' => $user->first_name . ' '. $user->last_name,
                        'email' => $user->email,
                        'password' => Hash::make('youcode2022'),
                        'role' => $user->role_id
                    ]);

                    if($user->role_id == 1){

                        $new_student = new Student;
                        
                        $new_student->firstName = $user->first_name;
                        $new_student->lastName = $user->last_name;
                        $new_student->email = $user->email;
                        $new_student->id_user = DB::getPdo()->lastInsertId();

                        $new_student->save();
                    } else if ($user->role_id == 2){
                        $new_instructor = new Instructor;
                        $new_instructor->firstName = $user->first_name;
                        $new_instructor->lastName = $user->last_name;
                        $new_instructor->email = $user->email;
                        $new_instructor->id_user = DB::getPdo()->lastInsertId();

                        $new_instructor->save();
                        
                    }
            
                    event(new Registered($new_user));
                    Auth::login($new_user);

        
                }
            } 
        } else if($response->failed() == 1) {


            if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {

                throw ValidationException::withMessages([
                    'email' => trans('auth.failed'),
                ]);
            }


        }


    //     $client = new \GuzzleHttp\Client();

            
    //     try {
    //         $response = $client->request('POST', 'http://admin.youcode.school/api/login', [
    //             'form_params' => [
    //                 'email' => $this->email,
    //                 'password' => $this->password,
    //             ]
    //         ]); 
    //             }
    //     catch (GuzzleHttp\Exception\ClientException $e) {
    //         $response = $e->getResponse();
    //         $responseBodyAsString = $response->getBody()->getContents();
    //     }
    //     echo $response->getStatusCode();
    //     if($response->getStatusCode() != 200)
    
    //     // echo $response->getStatusCode(); // 200
    //     // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
            
    }
    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {


        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::lower($this->input('email')).'|'.$this->ip();
    }
}
