<?php

namespace App\Http\Controllers;
use App\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('applications.index')->with('applications', Application::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'middle_name' => 'required',
            'lname' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'marital' => 'required',
            'tribe' => 'required',
            'clan' => 'required',
            'district' => 'required',
            'division' => 'required',
            'constituency' => 'required',
            'location' => 'required',
            'sub_location' => 'required',
            'home_address' => 'required',
            'occupation' => 'required'
        ]);

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
        $applications->filename=$request->get('filename');
        $applications->save();

        return redirect('applications')->with('success', 'Application done Successfully');
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
