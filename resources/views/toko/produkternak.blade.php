@extends('layouts.main')


@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="container">
        <div class="row">
            @foreach ($produkternaks as $produk)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if ($produk->image)
                            <img src="{{ asset('storage/' . $produk->image) }}"
                                alt="{{ $produk->kategorihewanproduk->nama_kategori_hewan }}" class="img-fluid">
                        @else
                            <img src="https://source.unsplash.com/500x400/?{{ $produk->kategorihewanproduk->nama_kategori_hewan }}"
                                class="card-img-top" alt="{{ $produk->kategorihewanproduk->nama_kategori_hewan }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk : {{ $produk->nama_produk }}</h5>
                            <p class="card-text">Harga Rp : {{ $produk->harga_produk }}</p>
                            <p class="card-text">Stok : {{ $produk->stok_produk }}</p>
                            <form action="{{ url('produkternak', $produk->id) }}" method="post" class="d-inline">
                                <input type="submit" class="btn btn-warning" value="Beli">
                            </form>
                            <a href="/toko/produkternak/{{ $produk->id }}" class="btn btn-primary">Detail Produk</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
