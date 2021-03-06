<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request) 
    {
        // Validate log in
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Sign the user in
        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }

        // Redirect user
        return redirect()->route('home');
    }
}
