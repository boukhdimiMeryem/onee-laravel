<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NormeSearchController extends Controller
{
    
    function index(Request $request)
    {
        /*if(request()->ajax())
        {
            if(!empty($request->filter_IC))
            {
                $data = DB::table('normes')
                    ->select('IC', 'Code NM', 'Version NM', 'Origine', 'Version Originale')
                    ->where('IC', $request->filter_IC)
                    ->get();
            }
            else
            {
                $data = DB::table('normes')
                    ->select('IC', 'Code NM', 'Version NM', 'Origine', 'Version Originale')
                    ->get();
            }
            return datatables()->of($data)->make(true);
        }

        $table = DB::table('normes')
                ->select('IC')
                ->groupBy('IC')
                ->get();*/
        //the get method returns the results of the query above and stores in the $table array
        
        
        //return view('adminDashboard',['table'=>'hello world']);
    }
}