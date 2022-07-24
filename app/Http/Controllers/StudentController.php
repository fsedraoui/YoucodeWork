<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Initialize;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Validation\ValidationException;
use DB;

class StudentController extends Controller
{
    public function Role(){
        try{
            if(Auth::user()->role == 1 ){

                return redirect('/projects');
    
            } else if(Auth::user()->role == 2){
                //TODO 
                return redirect('/projects');
            } else if(Auth::user()->role == 3){
                return redirect('/projects');
            }else
            return redirect('/auth');
        }catch(\Throwable $t) 
       { 
           return redirect('/auth');
       }



    // Session::flush();
    

    //     if(Session::get('user')->role_id == '2'){
    //     return view('dashboard');
    // } else if (Session::get('user')->role_id == '1'){
    //     return StudentController::DashboardApprenant();
    // } 
   }
   public function projetByStudent(){
       /*  if(Auth::user()->role != 1){
            return redirect('/redirectafterlogin');
        } */
        
        Initialize::user();

        $user = Auth::user();

            $student = Student::where('id_user', $user->id)->firstOrFail();
            Initialize::student($student);
        return view('freelancer-project-proposals', compact('student','user'));
}
 


public function  allStudents(){
    if(Auth::user()->role != 2){
        return redirect('/redirectafterlogin');
    }
    
    Initialize::user();

    $user = Auth::user();

        $students = Student::all();
    return view('/admin/users', compact('students','user'));
}

public function  allDashAdmin(){
    if(Auth::user()->role != 2){
        return redirect('/redirectafterlogin');
    }
    
    Initialize::user();

    $user = Auth::user();

        $students = Student::all();
        $projects = Project::all();
        $studentsCount =  $students->count();
        $projetValideCount = 0;
        $projetAllCount = $projects->count();
        $projetInstanceCount = 0;
        $allTechnologiesStudent = [];
        $allTagsStudent = [];

        foreach ($projects as $project) {
            if($project->status == 'ACCEPTED')
                $projetValideCount++;
           else if($project->status == 'PENDING')
                 $projetInstanceCount++;
        }

    return view('/admin/index_admin', compact('studentsCount','projetValideCount','projetInstanceCount','projetAllCount','user'));
}


public function projetEnInstanceByStudent(){
    if(Auth::user()->role != 1){
        return redirect('/redirectafterlogin');
    }
    
    Initialize::user();

    $user = Auth::user();

        $student = Student::where('id_user', $user->id)->firstOrFail();
        Initialize::student($student);
    return view('enInstance-project-proposals', compact('student','user'));
}


public function DashboardApprenant(Request $request){

     /*    if(Auth::user()->role != 1 || Auth::user()->role != 2){
            return redirect('/redirectafterlogin');
        }
         */
        Initialize::user();

        

       
        $user = Auth::user();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $student = Student::where('id',$request->idApp )->firstOrFail();
            Initialize::student($student);
        }
        else 
            { 
                $student = Student::where('id_user',  $user->id )->firstOrFail();
                Initialize::student($student);
            }
        $projetValideCount = 0;
        $projetInstanceCount = 0;
        $allTechnologiesStudent = [];
        $allTagsStudent = [];
        $allTags  = [];

        foreach ($student->projects as $project) {
            if($project->status == 'ACCEPTED')
                $projetValideCount++;
           else if($project->status == 'PENDING')
                 $projetInstanceCount++;

        if($project->status == 'ACCEPTED')        
       {
            $tags = trim($project->tags,'"');
            $tags = explode(',', $tags);
            $project->tags = $tags;
            $technologies = trim($project->technologies,'"');
            $technologies = explode(',', $technologies);
            $project->technologies = $technologies;  
            foreach($technologies as $technology){
                array_push($allTechnologiesStudent, strtoupper($technology));    

            }
            foreach($tags as $tag){
                array_push($allTagsStudent, strtoupper($tag));    

            }
       }
        $allTags = array_unique($allTagsStudent);
        $allTechnologies = array_unique($allTechnologiesStudent);
        
    }

    $technology_count_values = array_count_values($allTechnologiesStudent);


    $color_array_source = [
        'violet' => '#8f158b',
        'pink' => '#e851e3',
        'yellow' => '#d4e637',
        'blue' => '#24C0DC',
        'red' => '#fa2323',
        'black' => '#000',
        'gray' => '#333',
        'pinky' => '#ff508b',
        'greeny' => '#00e65b',
        'gray' => '#333',
		'orange' =>'#ef4823'
    ];
    


    $technology_color_array = [];
    $technology_count_values_temp = $technology_count_values;
    for($i=0;$i<sizeOf($technology_count_values_temp);$i++){
        if(sizeOf($color_array_source) == 0){
            
        } else {
            $random_index = array_rand($color_array_source);																										
            $random_index_technology = array_rand($technology_count_values);	
            array_push($technology_color_array,[$random_index_technology, $technology_count_values[$random_index_technology], $random_index, $color_array_source[$random_index] ]);

            
            unset($color_array_source[$random_index]);
            unset($technology_count_values[$random_index_technology]);
        }

    }

    $student-> projetValideCount =  $projetValideCount;
    $student-> projetInstanceCount =  $projetInstanceCount;

    return view('dashboard',compact("user", "student", "allTechnologiesStudent","allTags", "technology_color_array"));
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