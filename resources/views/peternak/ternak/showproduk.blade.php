@extends('peternak.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3"> {{ $produkternaks->id }}</h1>

                <a href="/peternak/dataproduk" class="btn btn-success">Kembali</a>
                <a href="/peternak/dataproduk/{{ $produkternaks->id }}/edit" class="btn btn-warning"><span
                        data-feather="edit"></span> Edit Data</a>
                <form action="/peternak/dataproduk/{{ $produkternaks->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus data?')"><span
                            data-feather='x-circle'></span> Hapus Data</button>
                </form>

                {{-- <h5 class="mt-3">Jenis : {{ $produkternaks->jenis_ternak }}</h5> --}}
                {{-- <h5>Nama Produk : {{ $produkternaks->nama_produk }}</h5> --}}
                {{-- <h5>Tanggal Lahir :{{ $produkternaks->tanggal_lahir }}</h5>
                <h5>Status : {{ $produkternaks->status_terjual }}</h5> --}}
                {{-- <h5>Foto : {{ $produkternaks->foto_ternak }}</h5> --}}

                {{-- @if ($produkternaks->image)
                    <img src="{{ asset('storage/' . $produkternaks->image) }}"
                        alt="{{ $produkternaks->jenisternak->nama_jenis_ternak }}" class="img-fluid mt-3">
                @else
                    <img src="https://source.unsplash.com/1000x500/?{{ $produkternaks->jenisternak->nama_jenis_ternak }}"
                        alt="{{ $produkternaks->jenisternak->nama_jenis_ternak }}" class="img-fluid mt-3">
                @endif --}}


                {{-- {{ $produkternaks-> }} --}}
                <article class="my-3 fs-6">
                    Deskripsi : {!! $produkternaks->deskripsi_produk !!}
                </article>
            </div>
        </div>
    </div>
@endsection
