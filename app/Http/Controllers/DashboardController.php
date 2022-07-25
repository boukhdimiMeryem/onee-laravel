<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('normal-user')){
            return view('normalUserDashboard');
        }
        elseif(Auth::user()->hasRole('admin')){
            return view('adminDashboard');
        }
        elseif(Auth::user()->hasRole('superadmin')){
            return view('dashboard');
        }
    }
}
