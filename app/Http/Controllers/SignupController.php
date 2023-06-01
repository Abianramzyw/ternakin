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
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('sukses', 'Daftar akun berhasil! Silahkan masuk.');

        return redirect('/masuk')->with('sukses', 'Daftar akun berhasil! Silahkan masuk.');
    }
}