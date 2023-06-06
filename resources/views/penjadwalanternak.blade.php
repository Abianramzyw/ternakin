@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    @foreach ($penjadwalanternaks as $penjadwalan)
    <article>
        <h2>Dokter : <a href="/penjadwalanternak/{{ $penjadwalan->id }}" class="text-decoration-none">{{ $penjadwalan->dokter }}</a></h2>
        <p>Pada Tanggal : {{ $penjadwalan->tanggal_jadwal }}</p>
        <p>{{ $penjadwalan->juduljadwal->nama_judul_jadwal }}</p>

    </article>
        
    @endforeach
@endsection
