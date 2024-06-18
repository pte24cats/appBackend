<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->remember)) {
            // Authentication passed...
            return redirect()->intended('/dashboard'); // Redirect to intended URL or any route
        }

        // Authentication failed...
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
}
