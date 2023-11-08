<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    // middleware - protected route auth
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        // were signed in when auth()->user() is returning an object
        // App\Models\User
        // dd(auth()->user()->posts);


        // dd(Post::find(1)->created_at->diffForHumans());

        return view('dashboard');
    }
}
