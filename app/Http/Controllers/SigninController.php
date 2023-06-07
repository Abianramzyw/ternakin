<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function index()
    {
        return view('signin.signin', [
            'title' => 'Halaman Masuk',
            // 'active' => "Masuk"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email_akun' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dataternak');
        }

        return back()->with('gagal', 'Email/Password yang anda masukkan Salah!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}