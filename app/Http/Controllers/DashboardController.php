<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use PDF;
use App\Applicant;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(Request $request){

        $applicants = DB::table('applicants')
         ->where('user_id','=', $request->user_id)
         ->get(['id', 'user_id', 'fname',]);

    	return view('dashboard.index')->with('applicants', Applicant::all());
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


    public function downloadPDF($id){
        $applicant = Applicant::find($id);

        $pdf = PDF::loadView('dashboard.pdf', compact('applicant'));
        return $pdf->download('applicant.pdf');
    }

     public function confirm(){
        return view('dashboard.confirm');
    }

     public function payment(){
        return view('dashboard.payment');
    }
}
