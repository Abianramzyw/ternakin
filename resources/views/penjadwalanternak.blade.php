@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    @foreach ($penjadwalanternaks as $penjadwalan)
    <article>
        <h2><a href="/penjadwalanternak/{{ $penjadwalan->id }}">{{ $penjadwalan->dokter }}</a></h2>
        <p>{{ $penjadwalan->juduljadwal->nama_judul_jadwal }}</p>

    </article>
        
    @endforeach
@endsection
