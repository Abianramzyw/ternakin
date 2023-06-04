<?php

namespace App\Http\Controllers;

use App\Models\Datatransaksi;
use App\Http\Requests\StoreDatatransaksiRequest;
use App\Http\Requests\UpdateDatatransaksiRequest;

class DatatransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datatransaksi', [
            'title' => 'Halaman Data Transaksi',
            "datatransaksis" => Datatransaksi::all()
            // "datatransaksis" => Datatransaksi::with(['pembayarantransaksi', 'dataproduk'])->latest()->get()
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
     * @param  \App\Http\Requests\StoreDatatransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDatatransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datatransaksi  $datatransaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Datatransaksi $datatransaksi)
    {
        return view('transaksi', [
            "title" => "Halaman Transaksi",
            'datatransaksi' => $datatransaksi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datatransaksi  $datatransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Datatransaksi $datatransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDatatransaksiRequest  $request
     * @param  \App\Models\Datatransaksi  $datatransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDatatransaksiRequest $request, Datatransaksi $datatransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datatransaksi  $datatransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datatransaksi $datatransaksi)
    {
        //
    }
}