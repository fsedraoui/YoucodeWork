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
    // protected $fillable = ['position','contract','tags','isRemote','contractType','description','responsibilities','authorId'];

        $job = new Job();
        $job->position = $request->input('position');
        $job->contract = $request->input('contract');
        $job->tags =json_encode($request->input('tags')) ;
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
    // // dd($offer);
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Offer  $offer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Offer $offer)
    // {
    //     return view('layouts.detailOffer', [
    //         'offer' => $offer
    //     ]);
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Offer  $offer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Offer $offer)
    // {
    // return view('layouts.editOffer', ['offer' => $offer]);
    // dd($offer);
    // }


    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Offer  $offer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Offer $offer)
    // {
    //     $request->validate([
    //         'OfferTitle' => 'required',
    //         'CompanyName' => 'required',
    //         'Remote' => 'required',
    //         'OfferDescription' => 'required',
    //         'TimeWork' => 'required',
    //         'SalaryRange' => 'required',
    //         'Requirement' => 'required',
    //         'WhoWeAre' => 'required',
    //         'County' => 'required',
    //         'City' => 'required',
    //         'Experience' => 'required',
    //         'Image' => 'required'
    //     ]);
    //         $offer = Offer::find($offer->id);
    //         $offer->OfferTitle = $request->input('OfferTitle');
    //         $offer->CompanyName = $request->input('CompanyName');
    //         $offer->Remote	 = $request->input('Remote');
    //         $offer->OfferDescription = $request->input('OfferDescription');
    //         $offer->TimeWork = $request->input('TimeWork');
    //         $offer->SalaryRange = $request->input('SalaryRange');
    //         $offer->Requirement = $request->input('Requirement');
    //         $offer->WhoWeAre = $request->input('WhoWeAre');
    //         $offer->County = $request->input('County');
    //         $offer->City = $request->input('City');
    //         $offer->Experience = $request->input('Experience');
    //         $offer->Image = $request->input('Image');
    //         if($request->hasfile('Image'))
    //         {
    //             dd($offer);
    //             $distination = 'uploads/companyImage/'.$offer->Image;
    //             if(File::exists($distination)){
    //                 File::delete($distination);
    //             }
    //             $file = $request->file('Image');
    //             $extention = $file->getClientOriginalExtension();
    //             $filename = time().'.'.$extention;
    //             $file->move('uploads/companyImage/', $filename);
    //             $offer->Image = $filename;
    //         }
    //         $offer->update();

    //         return redirect()->route('dashboard')
    //                 ->with('status','User updated successfully.');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Offer  $offer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Offer $offer)
    // {
    //     $offer->delete();
    //     return redirect()->route('dashboard')
    //                     ->with('status','User deleted successfully');
    // }
}
