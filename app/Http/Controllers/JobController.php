<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
   
    public function index(){
        return view('post-job');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('post-job');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $job = new Job();
        $job->position = $request->input('position');
        $job->contract = $request->input('contract');
        $job->tags =json_encode($request->input('tags')) ;
        $job->expiredDate =  $request->input('expiredDate');
        if($request->input('isRemote')=='on'){
            $job->isRemote = 1;
        }else{
            $job->isRemote = 0;
        }
        $job->emailCvs = $request->input('emailCvs');
        $job->description = $request->input('description');
        $job->responsibilities = $request->input('responsibilities');
        $job->authorId = Auth::user()->id;
        // dd($job);
        $job->save();
        return redirect()->route('post-job')->with('status','Offer Added Successfully');

    }

    public function allJobs()
    {

        
        $jobs = Job::paginate(4);
       
        $currentUser = Auth::user();
        return view('view-jobs',compact("jobs","currentUser"));

    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Offer  $offer
    //  * @return \Illuminate\Http\Response
    //  */


    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Offer  $offer
    //  * @return \Illuminate\Http\Response
    //  */

}
