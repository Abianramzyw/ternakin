<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

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
            'password_akun' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        User::where('id', $user->id)->update($validatedData);

        return redirect('/profil')->with('success', 'Data Ternak Berhasil Diubah!');
    }

}