@extends('layouts.main')

@section('container')
<h1>{{ $pembayarantransaksi->biaya_admin }}</h1>
<p>{!! $pembayarantransaksi->biaya_pengiriman !!}</p>
<a href="/pembayarantransaksi">Kembali</a>

@endsection
