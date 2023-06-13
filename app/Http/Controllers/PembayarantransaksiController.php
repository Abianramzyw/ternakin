<?php

namespace App\Http\Controllers;

use App\Models\Pembayarantransaksi;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePembayarantransaksiRequest;
use App\Http\Requests\UpdatePembayarantransaksiRequest;

class PembayarantransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembayarantransaksi', [
            'title' => 'Halaman Pembayaran Transaksi',
            "pembayarantransaksis" => Pembayarantransaksi::all()
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
     * @param  \App\Http\Requests\StorePembayarantransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePembayarantransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembayarantransaksi  $pembayarantransaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayarantransaksi $pembayarantransaksi)
    {
        return view('pembayaran', [
            "title" => "Halaman Pembayaran",
            'pembayarantransaksi' => $pembayarantransaksi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayarantransaksi  $pembayarantransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayarantransaksi $pembayarantransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePembayarantransaksiRequest  $request
     * @param  \App\Models\Pembayarantransaksi  $pembayarantransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePembayarantransaksiRequest $request, Pembayarantransaksi $pembayarantransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayarantransaksi  $pembayarantransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayarantransaksi $pembayarantransaksi)
    {
        //
    }

    public function add_cart($id)
    {
        if (Auth::id()) {
            return redirect()->back();
        } else {
            return redirect('/masuk');
        }
    }
}