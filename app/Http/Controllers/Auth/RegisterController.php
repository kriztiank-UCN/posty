<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

// class
class RegisterController extends Controller
{
    // index method
    public function index()
    {
        return view('auth.register');
    }

    // store method
    public function store(Request $request)
    {
        // validation
        // dd($request->email);
        $this->validate($request, [
            'name' => 'required|max:255',
            // 'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            // 'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        // store user (import User model & the create method will create a user in the database)
        User::create([
            'name' => $request->name,
            // 'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // sign the user in
        return redirect()->route('dashboard');
        // redirect

    }
}
