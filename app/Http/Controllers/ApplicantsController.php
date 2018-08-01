<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Applicant;

class ApplicantsController extends Controller
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
        return view('applicants.index')->with('applicants', Applicant::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applicants.create');
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
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
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

        if($request->hasFile('image')) {

            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('/images/', $fileNameToStore);
        }else {
            $fileNameToStore = 'default.png';
        }

        $applicant= new \App\Applicant;

        $applicant->fname=$request->get('fname');
        $applicant->mname=$request->get('mname');
        $applicant->lname=$request->get('lname');
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $applicant->date = strtotime($format);
        $applicant->gender=$request->get('gender');
        $applicant->fathers_name=$request->get('fathers_name');
        $applicant->mothers_name=$request->get('mothers_name');
        $applicant->marital=$request->get('marital');
        $applicant->husband_name=$request->get('husband_name');
        $applicant->husband_idno=$request->get('husband_idno');
        $applicant->tribe=$request->get('tribe');
        $applicant->clan=$request->get('clan');
        $applicant->district=$request->get('district');
        $applicant->division=$request->get('division');
        $applicant->constituency=$request->get('constituency');
        $applicant->location=$request->get('location');
        $applicant->sub_location=$request->get('sub_location');
        $applicant->village=$request->get('village');
        $applicant->home_address=$request->get('home_address');
        $applicant->occupation=$request->get('occupation');
        $applicant->image=$fileNameToStore;
        $applicant->number = $this->getApplicantNumber();
        $applicant->save();

        return redirect('dashboard')->with('success', 'Application done Successfully');
    }

    public function getApplicantNumber()
    {
         do{
             $rand = $this->generateRandomString(8);
          }while(!empty(Applicant::where('number',$rand)->first()));
           return $rand;
    }

    public function generateRandomString($length) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
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
        $applicant = \App\Applicant::find($id);
        return view('applicants.edit',compact('applicant','id'));
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
        $applicant= \App\applicant::find($id);
        $applicant->name=$request->get('name');
        $applicant->email=$request->get('email');
        $applicant->number=$request->get('number');
        $applicant->office=$request->get('office');
        $applicant->save();
        return redirect('applicants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $applicant = \App\Applicant::find($id);
        $applicant->delete();
        return redirect('applicants')->with('success','Information has been  deleted');
    }
}
