<?php

namespace App\Http\Controllers;
use Auth;
use App\invice;
use App\prescription;
use Mail;
use Illuminate\Http\Request;

class InviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function InviceSend(Request $request){
          $flight = new invice;
          $flight->status = 1;
          $flight->invice = json_encode($request->hgj);
          $flight->user_id = Auth::user()->id;
          $flight->prescrip_id = $request->id;
          $flight->save();
          prescription::where('id', $request->id)->update([
             'status' => '1', 
         ]);
         $data = array('name'=>"pamachy");
   
         Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
               ('Laravel Basic Testing Mail');
            $message->from('xyz@gmail.com','Virat Gandhi');
         });
          return response()->json([
            'redirect' => route('home'),
            'message' => 'Your success message here',
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\invice  $invice
     * @return \Illuminate\Http\Response
     */
    public function show(invice $invice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\invice  $invice
     * @return \Illuminate\Http\Response
     */
    public function edit(invice $invice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\invice  $invice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invice $invice)
    {
        //
    }
   public function adminStatus(Request $request){
    return $request->all();
   }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\invice  $invice
     * @return \Illuminate\Http\Response
     */
    public function destroy(invice $invice)
    {
        //
    }
}
