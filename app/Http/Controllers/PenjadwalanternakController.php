<?php

namespace App\Http\Controllers;

use App\Models\Penjadwalanternak;
use App\Http\Controllers\Controller;


class PenjadwalanternakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penjadwalanternak', [
            'title' => 'Halaman Penjadwalan Ternak',
            "penjadwalanternaks" => Penjadwalanternak::all()
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
     * @param  \App\Http\Requests\StorePenjadwalanternakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenjadwalanternakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjadwalanternak  $penjadwalanternak
     * @return \Illuminate\Http\Response
     */
    public function show(Penjadwalanternak $penjadwalanternak)
    {
        return view('penjadwalan', [
            "title" => "Halaman Jadwal",
            'penjadwalanternak' => $penjadwalanternak
            // "datatransaksis" => Datatransaksi::with(['pembayarantransaksi', 'dataproduk'])->latest()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjadwalanternak  $penjadwalanternak
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjadwalanternak $penjadwalanternak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenjadwalanternakRequest  $request
     * @param  \App\Models\Penjadwalanternak  $penjadwalanternak
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenjadwalanternakRequest $request, Penjadwalanternak $penjadwalanternak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjadwalanternak  $penjadwalanternak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjadwalanternak $penjadwalanternak)
    {
        //
    }
}