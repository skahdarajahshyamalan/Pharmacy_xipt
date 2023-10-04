<?php

namespace App\Http\Controllers;
use Auth;
use App\prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prescription.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
   public function uploadPrescription(Request $request){
    
    $request->validate([
        'deliveryaddress'=>'required',
        'note' =>'required',
        'delideliverytime'=>'required',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Max size of 2MB
        'images' => 'max:5', // Max 5 images
    ]);
    
    $array = [];
    foreach ($request->file('images') as $image) {
          $imageName = time() . '_' . $image->getClientOriginalName();
              $image->move(public_path('images'), $imageName);
             array_push($array,$imageName);
          }
          $flight = new prescription;
          $flight->images =  json_encode($array);
          $flight->deliveryaddress = $request->deliveryaddress;
          $flight->delideliverytime = $request->delideliverytime;
          $flight->user_id = Auth::user()->id;
          $flight->note = $request->note;
          $flight->save();
          return redirect()->back()->with('success', 'prescription Detail Sent');
   }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Thingsindex(Request $request){
        return view('Things.index');
    }
    public function store(Request $request)
    {
        //
    }
    public function editshow(Request $request){

    }
    public function Thingseditshow(Request $request,$id){
        $prescription = prescription::where('id',$id)->get();
        return view('prescription.Thingseditshow',compact('prescription'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function show(prescription $prescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(prescription $prescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prescription $prescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(prescription $prescription)
    {
        //
    }
}
