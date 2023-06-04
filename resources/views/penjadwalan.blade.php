@extends('layouts.main')

@section('container')
    <h1>{{ $penjadwalanternak->dokter }}</h1>
    <p>{{ $penjadwalanternak->tanggal_jadwal }}</p>
    <p>{{ $penjadwalanternak->juduljadwal->nama_judul_jadwal }}</p>
    <a href="/penjadwalanternak">Kembali</a>
@endsection
