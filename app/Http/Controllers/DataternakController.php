<?php

namespace App\Http\Controllers;

use App\Models\Jenisternak;
use Illuminate\Http\Request;
use App\Models\Dataternak;
use App\Models\User;

class DataternakController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('jenisternak')) {
            $jenisternak = Jenisternak::firstWhere('nama_jenis_ternak', request('jenisternak'));
            $title = ' Jenis : ' . $jenisternak->nama_jenis_ternak;
        }

        if (request('user')) {
            $user = User::firstWhere('nama_akun', request('user'));
            $title = ' Milik : ' . $user->nama_akun;
        }

        return view('/dataternak', [
            "title" => "Data Ternak" . $title,
            // "ternaks" => Dataternak::all()
            "ternaks" => Dataternak::latest()->filter(request(['cari', 'jenisternak', 'user']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Dataternak $ternak)
    {
        return view('ternak', [
            "title" => "Ternak",
            "ternaks" => $ternak
        ]);
    }
}