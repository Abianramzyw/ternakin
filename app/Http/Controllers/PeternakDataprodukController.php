<?php

namespace App\Http\Controllers;

use App\Models\Produkternak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
     * @param  \App\Models\Produkternak  $produkternak
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produkternak  $produkternak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produkternak $produkternak)
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