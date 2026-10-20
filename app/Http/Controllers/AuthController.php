<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginview()
    {
        return view('auth.login');
    }

    public function loginpost(Request $request)
    {
        // // Validasi input
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

        // // Coba login
        // if (auth()->attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard');
        // }

        // // Jika gagal login
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
    }

    public function registerview()
    {
        return view('auth.register');
    }

    public function registerpost(Request $request)
    {
        // // Validasi input
        // $validatedData = $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);

        // // Buat user baru
        // $user = \App\Models\User::create([
        //     'name' => $validatedData['name'],
        //     'email' => $validatedData['email'],
        //     'password' => bcrypt($validatedData['password']),
        // ]);

        // // Login user baru
        // auth()->login($user);

        // return redirect('/dashboard');
    }
}
