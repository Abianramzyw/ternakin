<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dataternak;
use App\Models\Jenisternak;
use App\Models\Jeniskelamin;
use Illuminate\Http\Request;
use App\Models\Statusterjual;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PeternakDataternakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('peternak.ternak.dataternak', [
            'ternaks' => Dataternak::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
        return view('peternak.ternak.create', [
            'jenisternak' => Jenisternak::all(),
            'jeniskelamin' => Jeniskelamin::all(),
            'statusterjual' => Statusterjual::all()
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
            'berat_ternak' => 'required',
            'tanggal_lahir' => 'required',
            'deskripsi_tambahan' => 'required',
            'image' => 'image|file|max:2048',
            'jenisternak_id' => 'required',
            'jeniskelamin_id' => 'required',
            'statusterjual_id' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('foto-ternak');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Dataternak::create($validatedData);

        return redirect('/peternak/dataternak')->with('success', 'Data Ternak Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataternak  $dataternak
     * @return \Illuminate\Http\Response
     */
    public function show(Dataternak $dataternak)
    {
        return view('peternak.ternak.show', [
            "ternaks" => $dataternak
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataternak  $dataternak
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataternak $dataternak)
    {
        return view('peternak.ternak.edit', [
            'dataternak' => $dataternak,
            'jenisternak' => Jenisternak::all(),
            'jeniskelamin' => Jeniskelamin::all(),
            'statusterjual' => Statusterjual::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataternak  $dataternak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataternak $dataternak)
    {
        $validatedData = $request->validate([
            'berat_ternak' => 'required',
            'tanggal_lahir' => 'required',
            'deskripsi_tambahan' => 'required',
            'image' => 'image|file|max:2048',
            'jenisternak_id' => 'required',
            'jeniskelamin_id' => 'required',
            'statusterjual_id' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('foto-ternak');
        }

        Dataternak::where('id', $dataternak->id)->update($validatedData);

        return redirect('/peternak/dataternak')->with('success', 'Data Ternak Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataternak  $dataternak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataternak $dataternak)
    {
        if ($dataternak->image) {
            Storage::delete($dataternak->image);
        }
        Dataternak::destroy($dataternak->id);
        return redirect('/peternak/dataternak')->with('success', 'Data Ternak Berhasil Dihapus!');
    }
}