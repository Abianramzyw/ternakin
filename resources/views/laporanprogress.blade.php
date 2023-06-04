@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    @foreach ($laporanprogresses as $laporan)
        <div class="card mb-3" style="max-width: 2080px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://source.unsplash.com/1200x400?/cow" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $laporan->id }}</h5>
                        <p class="card-text">{{ $laporan->tanggal_progress }}</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        <a href="" class="btn btn-primary">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach




    <article>
        <h2><a href="/laporanprogress/{{ $laporan->id }}">{{ $laporan->tanggal_progress }}</a></h2>
        <p>{{ $laporan->deskripsi_progress }}</p>
    </article>
@endsection
