@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    @foreach ($penjadwalanternaks as $penjadwalan)
        <div class="mb-4">
            <article>
                <h2>Dokter : {{ $penjadwalan->dokter }}</a></h2>
                <p>Pada Tanggal : {{ $penjadwalan->tanggal_jadwal }}</p>
                <p>{{ $penjadwalan->juduljadwal->nama_judul_jadwal }}</p>
                <a href="/penjadwalanternak/{{ $penjadwalan->id }}" class="btn btn-primary">Baca
                    Selengkapnya</a>
            </article>
        </div>
    @endforeach
@endsection
