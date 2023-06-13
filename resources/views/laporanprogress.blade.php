@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    @foreach ($laporanprogresses as $laporan)
        <div class="card mb-3" style="max-width: 2080px;">
            <div class="row g-0">
                <div class="col-md-4">
                    @if ($laporan->image)
                        <img src="{{ asset('storage/' . $laporan->image) }}"
                            alt="{{ $laporan->hasilternak->nama_hasil_ternak }}" class="img-fluid mt-3">
                    @else
                        <img src="https://source.unsplash.com/1000x500/?{{ $laporan->hasilternak->nama_hasil_ternak }}"
                            alt="{{ $laporan->hasilternak->nama_hasil_ternak }}" class="img-fluid">
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Nomer Ternak : {{ $laporan->id }}</h5>
                        <p class="card-text">Tanggal Laporan : {{ $laporan->tanggal_progress }}</p>
                        <a href="/laporanprogress/{{ $laporan->id }}" class="btn btn-primary">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
