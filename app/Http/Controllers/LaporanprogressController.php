<?php

namespace App\Http\Controllers;

use App\Models\Laporanprogress;
use App\Http\Requests\StoreLaporanprogressRequest;
use App\Http\Requests\UpdateLaporanprogressRequest;

class LaporanprogressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporanprogress', [
            'title' => 'Halaman Laporan Progress',
            "laporanprogresses" => Laporanprogress::all()
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
     * @param  \App\Http\Requests\StoreLaporanprogressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporanprogressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporanprogress  $laporanprogress
     * @return \Illuminate\Http\Response
     */
    public function show(Laporanprogress $laporanprogress)
    {
        return view('laporan', [
            "title" => "Halaman Laporan",
            'laporanprogress' => $laporanprogress
            // "datatransaksis" => Datatransaksi::with(['pembayarantransaksi', 'dataproduk'])->latest()->get()

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporanprogress  $laporanprogress
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporanprogress $laporanprogress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanprogressRequest  $request
     * @param  \App\Models\Laporanprogress  $laporanprogress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanprogressRequest $request, Laporanprogress $laporanprogress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporanprogress  $laporanprogress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporanprogress $laporanprogress)
    {
        //
    }
}