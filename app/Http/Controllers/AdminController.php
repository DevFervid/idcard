<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use PDF;
use App\Applicant;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

    	$applicants = DB::table('applicants')
         ->where('user_id','=', $request->user_id)
         ->get(['id', 'user_id', 'fname',]);

        return view('admin.index')->with('applicants', Applicant::all());
    }

    public function applicants(){
        return view('admin.applicants')->with('applicants', Applicant::all());
    }
    
    public function reports(){
    	
    	return view('admin.reports');
    }

    public function downloadPDF($id){
        $applicant = Applicant::find($id);

        $pdf = PDF::loadView('admin.pdf', compact('applicant'));
        return $pdf->download('applicant.pdf');
    }

    public function chart()
    {
        $result = \DB::table('applicants')
                    ->where('gender','=','male')
                    ->orderBy('date', 'ASC')
                    ->get();
        return view('admin.reports');
    }
}
