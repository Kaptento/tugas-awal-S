<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginview()
    {
        return view('auth.login');
    }

    public function loginpost(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba login
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('students.index');
        }

        // Jika gagal login
        return back()->withErrors([
            'email' => 'Email or Password do not match our records.',
        ]);
    }

    public function registerview()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        // Validate Request
        $validatedRequest = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Send Data
        User::create([
            'name' => $validatedRequest['name'],
            'email' => $validatedRequest['email'],
            'password' => bcrypt($validatedRequest['password']),
            'role' => 'student'
        ]);

        // Handle If Success
        return redirect()->route('login-view');
    
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login-view');
    }
}
