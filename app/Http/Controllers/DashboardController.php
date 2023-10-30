<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index( ) {
        // were signed in when auth()->user() is returning an object
        // App\Models\User
        // dd(auth()->user());

        return view('dashboard');
    }
}
