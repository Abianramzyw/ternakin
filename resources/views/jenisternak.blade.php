@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            @foreach ($jenisternaks as $jenis)
                <div class="col-md-4">
                    <a href="/dataternak?nama_jenis_ternak={{ $jenis->nama_jenis_ternak }}"
                        class="text-white text-decoration-none fs-3">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x400/?{{ $jenis->nama_jenis_ternak }}"
                                class="card-img" alt="{{ $jenis->nama_jenis_ternak }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-2 fs-3"
                                    style="background-color:rgba(0, 0, 0, 0.2)">
                                    {{ $jenis->nama_jenis_ternak }}</h5>
                            </div>
                    </a>
                </div>
        </div>
        @endforeach
    </div>
    </div>
@endsection
