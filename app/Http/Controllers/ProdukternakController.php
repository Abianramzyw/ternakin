<?php

namespace App\Http\Controllers;

use App\Models\Produkternak;
use App\Http\Requests\StoreProdukternakRequest;
use App\Http\Requests\UpdateProdukternakRequest;

class ProdukternakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produkternak', [
            'title' => 'Halaman Produk Ternak',
            "produkternaks" => Produkternak::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdukternakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdukternakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produkternak  $produkternak
     * @return \Illuminate\Http\Response
     */
    public function show(Produkternak $produkternak)
    {
        return view('produk', [
            "title" => "Halaman Produk",
            'produkternak' => $produkternak
            // "datatransaksis" => Datatransaksi::with(['pembayarantransaksi', 'dataproduk'])->latest()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produkternak  $produkternak
     * @return \Illuminate\Http\Response
     */
    public function edit(Produkternak $produkternak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukternakRequest  $request
     * @param  \App\Models\Produkternak  $produkternak
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdukternakRequest $request, Produkternak $produkternak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produkternak  $produkternak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produkternak $produkternak)
    {
        //
    }
}