<?php

namespace App\Http\Controllers;

use App\Models\Dataternak;
use App\Models\Hasilternak;
use Illuminate\Http\Request;
use App\Models\Kondisiternak;
use App\Models\Laporanprogress;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PeternakDatalaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role_id != '2') {
            abort(403);
        }
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
            'kondisiternak' => Kondisiternak::all(),
            'hasilternak' => Hasilternak::all(),
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
        // return $request;
        $validatedData = $request->validate([
            'tanggal_progress' => 'required',
            'berat_ternak' => 'required|between:0,999.99',
            'kondisiternak_id' => 'required',
            'hasilternak_id' => 'required',
            'deskripsi_progress' => 'required',
            'image' => 'image|file|max:2048',
            // 'statuskesehatan_id' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('foto-ternak');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Laporanprogress::create($validatedData);

        return redirect('/peternak/datalaporan')->with('success', 'Data Laporan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporanprogress  $datalaporan
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
     * @param  \App\Models\Laporanprogress  $datalaporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporanprogress $datalaporan)
    {
        return view('peternak.ternak.editlaporan', [
            'datalaporans' => $datalaporan,
            'kondisiternak' => Kondisiternak::all(),
            'hasilternak' => Hasilternak::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporanprogress  $datalaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporanprogress $datalaporan)
    {
        $validatedData = $request->validate([
            'tanggal_progress' => 'required',
            'berat_ternak' => 'required|between:0,999.99',
            'kondisiternak_id' => 'required|numeric',
            'hasilternak_id' => 'required|numeric',
            'deskripsi_progress' => 'required',
            'image' => 'image|file|max:2048',
            // 'statuskesehatan_id' => 'required',
        ]);
        
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('foto-ternak');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Laporanprogress::where('id', $datalaporan->id)
            ->update($validatedData);

        return redirect('/peternak/datalaporan')->with('success', 'Data Laporan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporanprogress  $datalaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporanprogress $datalaporan)
    {
        if ($datalaporan->image) {
            Storage::delete($datalaporan->image);
        }
        Laporanprogress::destroy($datalaporan->id);
        return redirect('/peternak/datalaporan')->with('success', 'Data Laporan Berhasil Dihapus!');
    }
}