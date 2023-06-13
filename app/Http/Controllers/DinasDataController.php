<?php

namespace App\Http\Controllers;

use App\Models\Dataternak;
use App\Models\Juduljadwal;
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
        if (auth()->user()->role_id != '3') {
            abort(403);
        }

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
        return view('dkpp.dinas.create', [
            'juduljadwal' => Juduljadwal::all()
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
            'dokter' => 'required',
            'tanggal_jadwal' => 'required',
            'juduljadwal_id' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Penjadwalanternak::create($validatedData);

        return redirect('/dkpp/datajadwal')->with('success', 'Data Ternak Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjadwalanternak  $datajadwal
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
     * @param  \App\Models\Penjadwalanternak  $datajadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjadwalanternak $datajadwal)
    {
        return view('dkpp.dinas.edit', [
            'datajadwal' => $datajadwal,
            'juduljadwal' => Juduljadwal::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjadwalanternak  $datajadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjadwalanternak $datajadwal)
    {
        $validatedData = $request->validate([
            'tanggal_jadwal' => 'required',
            'dokter' => 'required',
            'juduljadwal_id' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Penjadwalanternak::where('id', $datajadwal->id)->update($validatedData);

        return redirect('/dkpp/datajadwal')->with('success', 'Data Produk Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjadwalanternak  $datajadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjadwalanternak $datajadwal)
    {
        Penjadwalanternak::destroy($datajadwal->id);
        return redirect('/dkpp/datajadwal')->with('success', 'Data Jadwal Berhasil Dihapus!');
    }
}