<?php

namespace App\Http\Controllers;

use App\invice;
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
    return $request->id;
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
