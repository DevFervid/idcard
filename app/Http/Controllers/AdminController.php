<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Applicant;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard(){

    	return view('admin.dashboard');
    }

    public function applicants(){
    	
    	return view('admin.applicants');
    }
    
    public function reports(){
    	
    	return view('admin.reports');
    }
}
