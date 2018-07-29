<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Applicant;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
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

}
