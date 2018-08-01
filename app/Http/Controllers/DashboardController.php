<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Applicant;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
    	return view('dashboard.index');
    }

    public function applicants(){
        return view('dashboard.applicants')->with('applicants', Applicant::all());
    }

    public function replace(){
    	return view('dashboard.replace');
    }

    public function particulars(){
        return view('dashboard.particulars');
    }

    public function new(){
    	return view('dashboard.new');
    }

    public function chart()
      {
        $result = \DB::table('applicants')
                    ->where('gender','=','male')
                    ->orderBy('date', 'ASC')
                    ->get();
        return view('dashboard.reports');
      }

}
