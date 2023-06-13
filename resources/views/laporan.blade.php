@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Tanggal Progress : {{ $laporanprogress->tanggal_progress }}</h1>
    <p>Berat Ternak : {{ $laporanprogress->berat_ternak }}</p>
    <p>Kondisi Ternak : {{ $laporanprogress->kondisiternak->nama_kondisi_ternak }}</p>
    <p>Hasil Ternak : {{ $laporanprogress->hasilternak->nama_hasil_ternak }}</p>
    <h5>Foto :</h5>
    @if ($laporanprogress->image)
        <img src="{{ asset('storage/' . $laporanprogress->image) }}"
            alt="{{ $laporanprogress->hasilternak->nama_hasil_ternak }}" class="img-fluid mt-3">
    @else
        <img src="https://source.unsplash.com/1000x500/?{{ $laporanprogress->hasilternak->nama_hasil_ternak }}"
            alt="{{ $laporanprogress->hasilternak->nama_hasil_ternak }}" class="img-fluid">
    @endif
    <p>Deskripsi Progress : {{ $laporanprogress->deskripsi_progress }}</p>
    <a href="/laporanprogress">Kembali</a>
@endsection
