@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3"> {{ $ternaks->nama_pemilik }}</h1>
                <p>Nama Pemilik <a href="/dataternak?user={{ $ternaks->user->nama_akun }}" class="text-decoration-none">
                        {{ $ternaks->user->nama_akun }} </a> </a> Dari Jenis <a
                        href="/dataternak?jenisternak={{ $ternaks->jenisternak->nama_jenis_ternak }}"
                        class="text-decoration-none">{{ $ternaks->jenisternak->nama_jenis_ternak }}</a>
                </p>
                <h5>Jenis : {{ $ternaks->jenis_ternak }}</h5>
                <h5>Berat : {{ $ternaks->berat_ternak }}</h5>
                <h5>Tanggal Lahir :{{ $ternaks->tanggal_lahir }}</h5>
                <h5>Status : {{ $ternaks->status_terjual }}</h5>
                <h5>Foto : {{ $ternaks->foto_ternak }}</h5>
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

                <a href="/dataternak">Kembali</a>
            </div>
        </div>
    </div>
@endsection
