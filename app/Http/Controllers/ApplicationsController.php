<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $applications=\App\Application::all();
        return view('applications.index',compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
        $applications= new \App\Application;
        $applications->middle_name=$request->get('middle_name');
        $applications->lname=$request->get('lname');
        $applications->dob=$request->get('dob');
        $applications->gender=$request->get('gender');
        $applications->fathers_name=$request->get('fathers_name');
        $applications->mothers_name=$request->get('mothers_name');
        $applications->marital=$request->get('marital');
        $applications->husband_name=$request->get('husband_name');
        $applications->husband_idno=$request->get('husband_idno');
        $applications->tribe=$request->get('tribe');
        $applications->clan=$request->get('clan');
        $applications->district=$request->get('district');
        $applications->division=$request->get('division');
        $applications->constituency=$request->get('constituency');
        $applications->location=$request->get('location');
        $applications->sub_location=$request->get('sub_location');
        $applications->village=$request->get('village');
        $applications->home_address=$request->get('home_address');
        $applications->occupation=$request->get('occupation');
        $applications->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
