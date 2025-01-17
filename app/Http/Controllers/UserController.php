<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Method untuk menampilkan halaman home untuk guest
    public function index()
    {
        return view('index');
    }

    // Method untuk menampilkan form register
    public function showUserRegister()
    {
        return view('user.register');
    }

    // Method untuk memproses registrasi user baru
    public function userRegister(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|string|email|unique:users',
            'user_password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_password' => Hash::make($request->user_password),
            'user_role' => 'user'
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }

    // Method untuk menampilkan form login
    public function showUserLogin()
    {
        return view('user.login');
    }

    // Method untuk memproses login
    public function userLogin(Request $request)
    {
        $credentials = $request->validate([
            'user_email' => 'required|email',
            'user_password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $credentials['user_email'],
            'password' => $credentials['user_password']
        ])) {
            $request->session()->regenerate();

            // Redirect berdasarkan role
            if (auth()->user()->isAdmin()) {
                return redirect()->intended('/admin/dashboard');
            }
            return redirect()->intended('/komentar');
        }

        return back()->withErrors([
            'user_email' => 'The provided credentials do not match our records.',
        ])->withInput($request->except('user_password'));
    }

    // Method untuk logout
    public function userLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    // Method untuk halaman dashboard admin
    public function adminDashboard()
    {
        if (!auth()->user()->isAdmin()) {
            return redirect('/');
        }
        return view('admin.dashboard');
    }

    // Method untuk halaman dashboard user
    public function userDashboard()
    {
        return view('user.dashboard');
    }

    // Method untuk halaman about (guest accessible)
    public function about()
    {
        return view('about');
    }

    // Method untuk halaman contact (guest accessible)
    public function contact()
    {
        return view('contact');
    }

    // Method untuk mengirim pesan dari form contact
    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // Proses pengiriman pesan contact
        // ... implementasi sesuai kebutuhan

        return back()->with('success', 'Message sent successfully!');
    }
}
