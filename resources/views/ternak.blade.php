@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3"> {{ $ternaks->id }}</h1>
                <p>Nama Peternak <a href="/dataternak?user={{ $ternaks->user->nama_akun }}" class="text-decoration-none">
                        {{ $ternaks->user->nama_akun }} </a> </a> Dari Jenis <a
                        href="/dataternak?jenisternak={{ $ternaks->jenisternak->id }}"
                        class="text-decoration-none">{{ $ternaks->jenisternak->nama_jenis_ternak }}</a>
                </p>
                <h5>Jenis : {{ $ternaks->jenisternak->nama_jenis_ternak }}</h5>
                <h5>Jenis Kelamin : {{ $ternaks->jeniskelamin->nama_jenis_kelamin }}</h5>
                <h5>Berat : {{ $ternaks->berat_ternak }} Kg</h5>
                <h5>Tanggal Lahir : {{ $ternaks->tanggal_lahir }}</h5>
                <h5>Status : {{ $ternaks->statusterjual->nama_status_terjual }}</h5>
                <h5>Foto :</h5>
                @if ($ternaks->image)
                    <img src="{{ asset('storage/' . $ternaks->image) }}"
                        alt="{{ $ternaks->jenisternak->nama_jenis_ternak }}" class="img-fluid mt-3">
                @else
                    <img src="https://source.unsplash.com/1000x500/?{{ $ternaks->jenisternak->nama_jenis_ternak }}"
                        alt="{{ $ternaks->jenisternak->nama_jenis_ternak }}" class="img-fluid">
                @endif
                {{-- {{ $ternaks-> }} --}}
                <article class="my-3 fs-6">
                    Deskripsi : {!! $ternaks->deskripsi_tambahan !!}
                </article>

                {{-- <h5>Jadwal {{ $ternaks->jadwalternak_juduljadwal->nama_judul_jadwal }}</h5> --}}

                <a href="/dataternak">Kembali</a>
            </div>
        </div>
    </div>
@endsection
