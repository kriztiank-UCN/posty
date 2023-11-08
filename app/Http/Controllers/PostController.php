<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function store(Request $request)
    {
        // dd('ok');
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create([
            // 'user_id' => auth()->id(),
            'body' => $request->body
        ]);

        return back();
    }
}
