<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Initialize;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;

class StudentController extends Controller
{
    public function Role(){
        if(Auth::user()->role == 1 ){

            return redirect('/dashboard');

        } else if(Auth::user()->role == 2){
            //TODO 
            return redirect('admin.projects');
            echo 'this is trainer';
        } else if(Auth::user()->role == 3){
            //TODO
            // return redirect('/dashboard-recruiter');
            return redirect('/freelancer-dashboard');
        }




    // Session::flush();
    

    //     if(Session::get('user')->role_id == '2'){
    //     return view('dashboard');
    // } else if (Session::get('user')->role_id == '1'){
    //     return StudentController::DashboardApprenant();
    // } 
   }
   public function projetByStudent(){
        if(Auth::user()->role != 1){
            return redirect('/redirectafterlogin');
        }
        
        Initialize::user();

        $user = Auth::user();

            $student = Student::where('id_user', $user->id)->firstOrFail();
            Initialize::student($student);
        return view('freelancer-project-proposals', compact('student','user'));
}
    


public function DashboardApprenant(){

        if(Auth::user()->role != 1){
            return redirect('/redirectafterlogin');
        }
        
        Initialize::user();



       
        $user = Auth::user();

        $student = Student::where('id_user', $user->id)->firstOrFail();
        Initialize::student($student);
        
        $allTechnologiesStudent = [];

        foreach ($student->projects as $project) {

        $tags = trim($project->tags,'"');
        $tags = explode(',', $tags);
        $project->tags = $tags;
        $technologies = trim($project->technologies,'"');
        $technologies = explode(',', $technologies);
        $project->technologies = $technologies;  
        foreach($technologies as $technology){
            array_push($allTechnologiesStudent, $technology);    

        }
        $allTechnologies = array_unique($allTechnologiesStudent);
    }


    return view('dashboard',compact("user", "student", "allTechnologiesStudent"));
}

/*public function projectsByTechnology($technology){


        $projects = Project::where('technologies', 'like', '%'.$technology.'%')->get();

        $allTechnologies = [];

        $allProjects = Project::all();


   foreach ($projects as $project) {
        $tags = trim($project->tags,'"');
        $tags = explode(',', $tags);
        $project->tags = $tags;
        $technologies = trim($project->technologies,'"');
        $technologies = explode(',', $technologies);
        $project->technologies = $technologies;  
        
    }

    foreach ($allProjects as $project) {
        $technologies = trim($project->technologies,'"');
        $technologies = explode(',', $technologies);
        $project->technologies = $technologies;  
        foreach($technologies as $technology){
            array_push($allTechnologies, $technology);    

        }
        $allTechnologies = array_unique($allTechnologies);
    }


    $currentUser = Auth::user();
    return view('blog-grid',compact("projects","currentUser", "allTechnologies"));
}
*/

public function studentByIdUser($currentUser){
    $student = Student::where('user',$currentUser);
    //var_dump($student);
    return $student;
    //whereHas var_dump($student);
   /* $allTechnologies = [];

    if( $project != null)

 {   $tags = trim($project->tags,'"');
    $tags = explode(',', $tags);
    $project->tags = $tags;
    $technologies = trim($project->technologies,'"');
    $technologies = explode(',', $technologies);
    $project->technologies = $technologies;  
    
}
*/
}
public function ProjectBystudent($currentUser){
    //$student = Student::where('id_user',$currentUser->id)->get();;
     //DB::table('students')->where('id_user', $currentUser->id)->first();
     $idStudent =Student::select('id')->where('id_user', $currentUser->id)->pluck('id');
    //$ = $student[0]->id_user;
    $projectBystudent = Project::with('students')->whereHas('students')->get();
    /* {
        $query->where('project_student.student_id','$idStudent');
    }*/
  
    return $projectBystudent;
    //whereHas var_dump($student);
   /* $allTechnologies = [];

    if( $project != null)

 {   $tags = trim($project->tags,'"');
    $tags = explode(',', $tags);
    $project->tags = $tags;
    $technologies = trim($project->technologies,'"');
    $technologies = explode(',', $technologies);
    $project->technologies = $technologies;  
    
}
*/
}

}