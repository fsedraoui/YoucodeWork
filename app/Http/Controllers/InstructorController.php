<?php

namespace App\Http\Controllers;
use App\Http\Initialize;
use App\Models\Instructor;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function projectsByInstructor(){
        if(Auth::user()->role != 2){
            return redirect('/redirectafterlogin');
        }
        
        Initialize::user();

        $user = Auth::user();

            $instructor = Instructor::where('id_user', $user->id)->firstOrFail();
           // Initialize::instructor($instructor);
        return view('admin.projects', compact('instructor','user'));
    }
}
