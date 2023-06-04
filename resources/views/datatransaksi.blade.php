@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    @foreach ($datatransaksis as $transaksi)
    <article>
        <h2><a href="/datatransaksi/{{ $transaksi->id }}">{{ $transaksi->no_rekening }}</a></h2>
        <p>{{ $transaksi->alamat_transaksi }}</p>

    </article>
        
    @endforeach
@endsection
