<?php 

namespace App\Http;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Student;


class Initialize {

    public static function user(){
        Auth::user()->firstName = Session::get('user')->first_name;
        Auth::user()->lastName = Session::get('user')->last_name;

    }

    public static function student(Student $student){
        $student->github_username =  Session::get('user')->github_username;

    }    

}