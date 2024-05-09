<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function login(){
        return view('admin.auth.login');
    }

    function dashboard(){
        return view('admin.dashboard');
    }
}
