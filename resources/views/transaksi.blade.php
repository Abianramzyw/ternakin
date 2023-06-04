@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $datatransaksi->tanggal_transaksi }}</h1>
    <p>Pembayaran Transaksi : <a
            href="/pembayarantransaksi/{{ $datatransaksi->pembayarantransaksi->slug }}">{{ $datatransaksi->pembayarantransaksi->biaya_admin }}</a>
    </p>
    <p>Alamat Transaksi : {{ $datatransaksi->alamat_transaksi }}</p>
    <p>No. Rekening : {{ $datatransaksi->no_rekening }}</p>
    <a href="/datatransaksi">Kembali</a>
@endsection
