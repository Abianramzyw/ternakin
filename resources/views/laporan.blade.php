@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $laporanprogress->tanggal_progress }}</h1>
    <p>Berat Ternak : {{ $laporanprogress->berat_ternak }}</p>
    <p>Kondisi Ternak : {{ $laporanprogress->kondisiternak->nama_kondisi_ternak }}</p>
    <p>Hasil Ternak : {{ $laporanprogress->hasilternak->nama_hasil_ternak }}</p>
    <p>Deskripsi Progress : {{ $laporanprogress->deskripsi_progress }}</p>
    <a href="/laporanprogress">Kembali</a>
@endsection
