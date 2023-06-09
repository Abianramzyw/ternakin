@extends('peternak.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3"> {{ $ternaks->id }}</h1>

                <a href="/peternak/dataternak" class="btn btn-success">Kembali</a>
                <a href="/peternak/dataternak/{{ $ternaks->id }}/edit" class="btn btn-warning"><span
                        data-feather="edit"></span> Edit Data</a>
                <form action="/peternak/dataternak/{{ $ternaks->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus data?')"><span
                            data-feather='x-circle'></span> Hapus Data</button>
                </form>

                <h5 class="mt-3">Jenis : {{ $ternaks->jenis_ternak }}</h5>
                <h5>Berat : {{ $ternaks->berat_ternak }}</h5>
                <h5>Tanggal Lahir :{{ $ternaks->tanggal_lahir }}</h5>
                <h5>Status : {{ $ternaks->status_terjual }}</h5>
                <h5>Foto : {{ $ternaks->foto_ternak }}</h5>

                @if ($ternaks->image)
                    <img src="{{ asset('storage/' . $ternaks->image) }}"
                        alt="{{ $ternaks->jenisternak->nama_jenis_ternak }}" class="img-fluid mt-3">
                @else
                    <img src="https://source.unsplash.com/1000x500/?{{ $ternaks->jenisternak->nama_jenis_ternak }}"
                        alt="{{ $ternaks->jenisternak->nama_jenis_ternak }}" class="img-fluid mt-3">
                @endif


                {{-- {{ $ternaks-> }} --}}
                <article class="my-3 fs-6">
                    Deskripsi : {!! $ternaks->deskripsi_tambahan !!}
                </article>
            </div>
        </div>
    </div>
@endsection
