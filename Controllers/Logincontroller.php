<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phonenumber' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Menyimpan pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis setelah registrasi
        Auth::login($user);

        // Redirect ke halaman home setelah login
        return redirect()->route('home');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Menggunakan Auth::attempt untuk melakukan login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/'); // Redirect ke halaman yang dituju sebelumnya
        }

        return back()->withErrors(['email' => 'Invalid credentials.']); // Jika gagal
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

