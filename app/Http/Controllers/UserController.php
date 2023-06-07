<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        return view('profil.show', compact('user'), [
            'title' => 'Halaman Profil'
        ]);
    }

    public function edit(User $user)
    {
        $user = Auth::user();
        return view('profil.edit', [
            'title' => 'Halaman Edit Profil',
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'nama_akun' => 'required',
            'alamat_akun' => 'required',
            'email_akun' => 'required|email:dns',
            'password' => 'required',
        ]);


        User::where('id', auth()->user()->id)->update($validatedData);

        return redirect('/profil/'.auth()->user()->id)->with('success', 'Data Ternak Berhasil Diubah!');
    }

}