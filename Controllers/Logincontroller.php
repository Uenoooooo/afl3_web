<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class Logincontroller extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('web')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ])->onlyInput('name');
    }

    
    public function showForm()
    {
        return view('auth.register'); // Pastikan ada view register
    }

    // Menangani proses registrasi
    public function register(Request $request)
    {
        // Validasi input pengguna
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:users,name',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // pastikan password_confirmation ada di form
        ]);

        // Buat pengguna baru dengan hash password
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']), // Hashing password
        ]);

        // Login otomatis setelah registrasi
        Auth::login($user);

        // Redirect ke halaman beranda atau halaman tujuan
        return redirect()->route('home')->with('success', 'Registration successful!');
    }

    public function logout()
    {
        Auth::logout(); // Logout user
        return redirect('/login'); // Redirect ke halaman login setelah logout
    }
}