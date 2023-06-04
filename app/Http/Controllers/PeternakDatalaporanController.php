<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporanprogress;
use App\Http\Controllers\Controller;

class PeternakDatalaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('peternak.ternak.datalaporan', [
            'laporanprogresses' => Laporanprogress::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peternak.ternak.createlaporan', [
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporanprogress  $laporanprogress
     * @return \Illuminate\Http\Response
     */
    public function show(Laporanprogress $datalaporan)
    {
        return view('peternak.ternak.showlaporan', [
            "laporanprogresses" => $datalaporan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporanprogress  $laporanprogress
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporanprogress $datalaporan)
    {
        return view('peternak.ternak.editlaporan', [
            'datalaporans' => $datalaporan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporanprogress  $laporanprogress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporanprogress $laporanprogress)
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