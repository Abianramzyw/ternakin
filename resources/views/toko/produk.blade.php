@extends('layouts.main')

@section('container')
    <h1>Nama : {{ $produkternak->nama_produk }}</h1>
    <p>Kategori : {{ $produkternak->kategori_produk }}</p>
    <p>Harga : {{ $produkternak->harga_produk }}</p>
    <p>Stok : {{ $produkternak->stok_produk }}</p>
    <p>Deksripsi : {!! $produkternak->deskripsi_produk !!}</p>
    <a href="/produkternak">Kembali</a>
@endsection
