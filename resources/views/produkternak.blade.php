@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    @foreach ($produkternaks as $produk)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $produk->id }}</h5>
                <p class="card-text">{{ $produk->nama_produk }}</p>
                <p class="card-text">Harga Rp : {{ $produk->harga_produk }}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    @endforeach
@endsection
