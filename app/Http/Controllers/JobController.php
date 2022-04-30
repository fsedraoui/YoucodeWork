<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        return view('post-job');
    }
    // public function index(Request $request)
    // {
    //     // $offers = Offer::where('OfferTitle','like','%'.$request->search.'%')->latest()->paginate(4);
    //     $offers = Offer::join('users', 'offers.user_id', '=', 'users.id')
    //         ->select('offers.*', 'users.name')
    //         ->latest()->paginate(4);

    //     return view('dashboard', ['offers' => $offers]);

    // }



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
        $job->contractType = $request->input('contractType');
        $job->description = $request->input('description');
        $job->responsibilities = $request->input('responsibilities');
        $job->authorId = 1;
        // dd($job);
        $job->save();
        return redirect()->route('post-job')->with('status','Offer Added Successfully');

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
