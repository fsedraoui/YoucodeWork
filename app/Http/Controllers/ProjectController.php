<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Student;
use App\Models\Instructor;
use App\Models\ProjectStudent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;



class ProjectController extends Controller
{
    //

    public function create(){

        $students = Student::all();
        $instructors = Instructor::all();

        return view('post-project', compact('students', 'instructors'));
    }



    public function store(Request $request){
        $instructor = Instructor::where('email', $request->instructor)->first();

        $project = new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->repoLink = $request->repoLink;
        $project->lienImage1 = $request->lienImage1;
        $project->tags = json_encode( $request->technologies);
        $project->technologies = json_encode(['golang','php']);
        $project->authorId = Auth::user()->id;
        $project->status = 'PENDING';
        $project->instructor_id = $instructor->id;



        

        if ($project->save()) {

            foreach($request->contributors as $contributor_email){
                $student = Student::where('email', $contributor_email)->first();
    
                $project->students()->attach($student);        
    
    
            }
            
        }

        $project_id = DB::getPdo()->lastInsertId();


       /* $student = Student::find([3, 4]);
        $product->categories()->attach($category);*/
        return redirect()->route('dashboard');
    }
//all project
    public function allProjects(Request $request){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $projects = Project::where('name', 'LIKE', '%'. $request->keyword .'%')
                                ->orWhere('description', 'LIKE', '%'. $request->keyword .'%')
                                ->orWhere('technologies', 'LIKE', '%'. $request->keyword .'%')
                                ->orWhere('tags', 'LIKE', '%'. $request->keyword .'%')
                                ->get();


        } else {
            $projects = Project::all();

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

}
