<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Norme;

class DashboardController extends Controller
{
    public function index(){
        $normes=Norme::all();
        if(Auth::user()->hasRole('normal-user')){
            return view('normalUserDashboard');
        }
        elseif(Auth::user()->hasRole('admin')){
            return view('datatable',compact('normes'));
        }
        elseif(Auth::user()->hasRole('superadmin')){
            return view('dashboard');
        }
    }
}
