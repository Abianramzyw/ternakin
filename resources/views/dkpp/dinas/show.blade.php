@extends('dkpp.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3"> {{ $penjadwalanternaks->id }}</h1>

                <a href="/dkpp/datajadwal" class="btn btn-success">Kembali</a>
                <a href="/dkpp/datajadwal/{{ $penjadwalanternaks->slug }}/edit" class="btn btn-warning"><span
                        data-feather="edit"></span> Edit Data</a>
                <form action="/dkpp/datajadwal/{{ $penjadwalanternaks->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus data?')"><span
                            data-feather='x-circle'></span> Hapus Data</button>
                </form>

                {{-- <h5 class="mt-3">Jenis : {{ $penjadwalanternaks->jenis_ternak }}</h5> --}}
                <h5>Tanggal : {{ $penjadwalanternaks->tanggal_jadwal }}</h5>
                {{-- <h5>Tanggal Lahir :{{ $penjadwalanternaks->tanggal_lahir }}</h5>
                <h5>Status : {{ $penjadwalanternaks->status_terjual }}</h5> --}}
                {{-- <h5>Foto : {{ $penjadwalanternaks->foto_ternak }}</h5> --}}

                {{-- @if ($penjadwalanternaks->image)
                    <img src="{{ asset('storage/' . $penjadwalanternaks->image) }}"
                        alt="{{ $penjadwalanternaks->jenisternak->nama_jenis_ternak }}" class="img-fluid mt-3">
                @else
                    <img src="https://source.unsplash.com/1000x500/?{{ $penjadwalanternaks->jenisternak->nama_jenis_ternak }}"
                        alt="{{ $penjadwalanternaks->jenisternak->nama_jenis_ternak }}" class="img-fluid mt-3">
                @endif --}}


                {{-- {{ $penjadwalanternaks-> }} --}}

            </div>
        </div>
    </div>
@endsection
