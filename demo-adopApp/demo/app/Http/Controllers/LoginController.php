<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            // Authentication passed...
            return redirect()->intended('/dashboard'); // Redirect to dashboard or any protected route
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']); // Redirect back on failure
    }
}