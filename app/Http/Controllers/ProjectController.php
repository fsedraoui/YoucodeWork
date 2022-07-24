<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Student;
use App\Models\Instructor;
use App\Models\ProjectStudent;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Initialize;



class ProjectController extends Controller
{
     

    public function create(){

      
        $students = Student::all();
        $instructors = Instructor::all();

        return view('post-project', compact('students', 'instructors'));
    }



    public function store(Request $request){
       
  
       $instructor = Instructor::where('email', $request->instructor)->first();

        $project = new Project;
       if( isset($_POST["idProjet"]))
        {
            $project = Project::find($_POST["idProjet"]);
            $project->students()->detach();
        }
        
        
        $project->name = $request->name;
        $project->description = $request->description;
        $project->repoLink = $request->repoLink;
        $project->liensite = $request->liensite;
        $project->lienImage1 = $request->lienImage1;
        $project->tags = json_encode( $request->tags);
        $project->technologies = json_encode($request->technologies);
        $project->authorId = Auth::user()->id;
        $project->status = 'PENDING';
        $project->instructor_id = $instructor->id;

        $user = Auth::user();

        $studentConnecte = Student::where('id_user', $user->id)->firstOrFail();

       

        if ($project->save()) {
            $idsProjets = [];
            array_push( $idsProjets,$studentConnecte->id);
            foreach($request->contributors as $contributor_email){
                $student = Student::where('email', $contributor_email)->first();
    
                //$project->students()->syncWithoutDetaching($student); 
              
                array_push($idsProjets,$student->id);
               
    
            }
            $idsProjets = array_unique($idsProjets);

            $project->students()->attach($idsProjets);        
            
        }

        $project_id = DB::getPdo()->lastInsertId();


       /* $student = Student::find([3, 4]);
        $product->categories()->attach($category);*/
        return redirect()->route('dashboard');
    }
//all project
    public function allProjects(Request $request){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST' &&  $request->keyword !='' &&  $request->keyword != null && !empty($request->keyword)){
            $projects = Project::where('status', 'LIKE', 'ACCEPTED')
                                ->where('name', 'LIKE', '%'. $request->keyword .'%')
                                ->orWhere('description', 'LIKE', '%'. $request->keyword .'%')
                                ->orWhere('technologies', 'LIKE', '%'. $request->keyword .'%')
                                ->orWhere('tags', 'LIKE', '%'. $request->keyword .'%')
                                ->paginate(20);
                                // 


        } else {
            $projects = Project::where('status', 'LIKE', 'ACCEPTED')->paginate(20);

        }

            $allTechnologies = [];
           foreach ($projects as $project) {
            $tags = trim($project->tags,'"');
            $tags = explode(',', $tags);
            $project->tags = $tags;
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

    public function projectsByTechnology($technology){


            $projects = Project::where('technologies', 'like', '%'.$technology.'%')->paginate(20);

            $allTechnologies = [];

            $allProjects = Project::where('status', 'LIKE', 'ACCEPTED')->paginate(20);


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


    public function projectById($projectId){

        $project = Project::find($projectId);
        
        $allTechnologies = [];

        if( $project != null)
     {   
        $tags = trim($project->tags,'"');
        $tags = explode(',', $tags);
        $project->tags = $tags;
        $technologies = trim($project->technologies,'"');
        $technologies = explode(',', $technologies);
        $project->technologies = $technologies;  
        
    }

    $currentUser = Auth::user();

    return view('project-details',compact("project","currentUser"));
    }


    public function projectUpdateById(Request $request){

        $project = Project::find($request->idProjet);
        
     /*   $allTechnologies = [];

        if( $project != null)
     {   
        $tags = trim($project->tags,'"');
        $tags = explode(',', $tags);
        $project->tags = $tags;
        $technologies = trim($project->technologies,'"');
        $technologies = explode(',', $technologies);
        $project->technologies = $technologies;  
        
    }*/

    //$currentUser = Auth::user();
    $students = Student::all();
    $instructors = Instructor::all();

    return view('post-project', compact('project','students', 'instructors'));
    //return view('project-details',compact("project","currentUser"));
    }


    
    public function validerProjectById($projectId){

        $project = Project::find($projectId);
        $project->status = 'ACCEPTED';
        $project->save();
        if(Auth::user()->role != 2){
            return redirect('/redirectafterlogin');
        }
        
        Initialize::user();

        $user = Auth::user();

            $instructor = Instructor::where('id_user', $user->id)->firstOrFail();
           // Initialize::instructor($instructor);
           return redirect('/redirectafterlogin');
        //return view('admin.projects', compact('instructor','user'));
    }


    public function supprimerProjectById(Request $request){
   

     if( isset($_POST["projectId"]))
     {
       
        Project::destroy($_POST["projectId"]);
     }
       // Project::where('id',$request->projectId)->delete();
     // var_dump("heloooooooo");
        $user = Auth::user();
        Initialize::user();
        $instructor = Instructor::where('id_user', $user->id)->firstOrFail();
        // Initialize::instructor($instructor);
       // return redirect('/redirectafterlogin');
        return redirect('/admin/projectsAdmin');
     //return view('/admin.projects', compact('instructor','user'));
    }




}
