<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // get all posts in a laravel collection
        // $posts = Post::get();
        // get all posts in a laravel collection with pagination
        $posts = Post::paginate(2);

        // dd($posts);

        return view('posts.index', [
            // send all post to posts.index view
            'posts' => $posts
        ]);
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
