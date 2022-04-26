<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;

class StudentController extends Controller
{
    

    public function Role(){
    
    if(Auth::user()->role == 'recruiter'){
        return view('dashboard');
    } else if(Auth::user()->role == 'student'){
        return StudentController::DashboardApprenant();
    }
   }
    
    public function DashboardApprenant(){
        $currentUser = Auth::user();
        //var_dump($currentUser);
        $student = StudentController::studentByIdUser($currentUser);
        $projectsBystudent=StudentController::ProjectBystudent($currentUser);
        //($student)
        //$student->projects();
       
        $allTechnologiesStudent = [];
       foreach ($projectsBystudent as $project) {
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


    
    return view('dashboard',compact("student","projectsBystudent", "allTechnologiesStudent"));
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