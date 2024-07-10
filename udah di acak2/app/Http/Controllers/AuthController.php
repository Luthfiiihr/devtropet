<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba untuk autentikasi pengguna
        if (Auth::attempt($credentials)) {
            // Jika berhasil login, arahkan ke admin.index
            return redirect()->intended(route('admin.index'));
        } else {
            // Jika gagal, kembalikan dengan pesan error
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    
}