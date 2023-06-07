<?php

namespace App\Http\Controllers;

use App\Models\Dataternak;
use App\Models\Produkternak;
use Illuminate\Http\Request;
use App\Models\Kategorihewanproduk;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PeternakDataprodukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('peternak.ternak.dataproduk', [
            'produks' => Produkternak::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peternak.ternak.createproduk', [
            'kategorihewanproduk' => Kategorihewanproduk::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'kategori_produk' => 'required',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
            'image' => 'image|file|max:2048',
            'deskripsi_produk' => 'required',
            'kategorihewanproduk_id' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('foto-ternak');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Produkternak::create($validatedData);

        return redirect('/peternak/dataproduk')->with('success', 'Data Ternak Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produkternak  $dataproduk
     * @return \Illuminate\Http\Response
     */
    public function show(Produkternak $dataproduk)
    {
        return view('peternak.ternak.showproduk', [
            "produkternaks" => $dataproduk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produkternak  $dataproduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produkternak $dataproduk)
    {
        return view('peternak.ternak.editproduk', [
            'dataproduk' => $dataproduk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produkternak  $dataproduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produkternak $dataproduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produkternak  $dataproduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produkternak $dataproduk)
    {
        if ($dataproduk->image) {
            Storage::delete($dataproduk->image);
        }
        Produkternak::destroy($dataproduk->id);
        return redirect('/peternak/dataproduk')->with('success', 'Data Produk Berhasil Dihapus!');
    }
}