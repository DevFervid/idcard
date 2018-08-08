<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PdfReport;
use Auth;
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

    public function displayReport(Request $request) {
        // Retrieve any filters
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        $sortBy = $request->input('sort_by');

        // Report title
        $title = 'Applicants Report';

        // For displaying filters description on header
        $meta = [
            'Applied on' => $fromDate . ' To ' . $toDate,
            'Sort By' => $sortBy
        ];

        // Do some querying..
        $queryBuilder = Applicant::select(['fname', 'number', 'registered_at'])
                            ->whereBetween('registered_at', [$fromDate, $toDate])
                            ->orderBy($sortBy);

        // Set Column to be displayed
        $columns = [
            'First Name' => 'fname',
            'Registered At', // if no column_name specified, this will automatically seach for snake_case of column name (will be registered_at) column from query result
            'NATIONAL ID' => 'number',
            // 'Status' => function($result) { // You can do if statement or any action do you want inside this closure
            //     return ($result->balance > 100000) ? 'Rich Man' : 'Normal Guy';
            }
        ];

        /*
            Generate Report with flexibility to manipulate column class even manipulate column value (using Carbon, etc).

            - of()         : Init the title, meta (filters description to show), query, column (to be shown)
            - editColumn() : To Change column class or manipulate its data for displaying to report
            - editColumns(): Mass edit column
            - showTotal()  : Used to sum all value on specified column on the last table (except using groupBy method). 'point' is a type for displaying total with a thousand separator
            - groupBy()    : Show total of value on specific group. Used with showTotal() enabled.
            - limit()      : Limit record to be showed
            - make()       : Will producing DomPDF / SnappyPdf instance so you could do any other DomPDF / snappyPdf method such as stream() or download()
        */
        return PdfReport::of($title, $meta, $queryBuilder, $columns)
                        ->editColumn('Registered At', [
                            'displayAs' => function($result) {
                                return $result->registered_at->format('d M Y');
                            }
                        ])
                        // ->editColumn('Total Balance', [
                        //     'displayAs' => function($result) {
                        //         return thousandSeparator($result->balance);
                        //     }
                        // ])
                        // ->editColumns(['Total Balance', 'Status'], [
                        //     'class' => 'right bold'
                        // ])
                        // ->showTotal([
                        //     'Total Balance' => 'point'
                        // ])
                        ->limit(20)
                        ->stream(); // or download('filename here..') to download pdf
    }
}
