<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjadwalanternak;
use App\Http\Controllers\Controller;

class DinasDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dkpp.dinas.datajadwal', [
            'jadwals' => Penjadwalanternak::where('user_id', auth()->user()->id)->get()
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
     * @param  \App\Models\Penjadwalanternak  $penjadwalanternak
     * @return \Illuminate\Http\Response
     */
    public function show(Penjadwalanternak $datajadwal)
    {
        return view('dkpp.dinas.show', [
            "penjadwalanternaks" => $datajadwal
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjadwalanternak  $penjadwalanternak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjadwalanternak $penjadwalanternak)
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