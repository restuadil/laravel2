<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil
            return redirect('/movies')->with('success', 'Login successful');
        }

        // Jika otentikasi gagal
        return redirect()->back()->with('error', 'Invalid credentials');
    }
}
