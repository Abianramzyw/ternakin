<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function create()
    {
        return view('signup.signup', [
            'title' => 'Halaman Daftar',
            // 'active' => "Daftar"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email_akun' => 'required|email:dns|unique:akun|max:30',
            'password' => 'required|min:6|max:12',
            'alamat_akun' => 'required|min:3|max:30',
            'nama_akun' => 'required|min:3|max:20',
            'role_id' => 'required|in:1,2,3',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/dataternak')->with('sukses', 'Daftar akun berhasil! Silahkan masuk.');
    }
}