@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    @foreach ($pembayarantransaksis as $pembayaran)
        <article>
            <h2><a href="/pembayarantransaksi/{{ $pembayaran->id }}">{{ $pembayaran->harga_produk }}</a></h2>
            <p>{{ $pembayaran->biaya_admin }}</p>
        </article>
    @endforeach
@endsection
