@extends('peternak.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3"> {{ $laporanprogresses->id }}</h1>

                <a href="/peternak/dataternak" class="btn btn-success">Kembali</a>
                <a href="/peternak/dataternak/{{ $laporanprogresses->id }}/edit" class="btn btn-warning"><span
                        data-feather="edit"></span> Edit Data</a>
                <form action="/peternak/dataternak/{{ $laporanprogresses->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus data?')"><span
                            data-feather='x-circle'></span> Hapus Data</button>
                </form>

                {{-- <h5 class="mt-3">Jenis : {{ $laporanprogresses->jenis_ternak }}</h5> --}}
                {{-- <h5>Berat : {{ $laporanprogresses->berat_ternak }}</h5> --}}
                {{-- <h5>Tanggal Lahir :{{ $laporanprogresses->tanggal_lahir }}</h5>
                <h5>Status : {{ $laporanprogresses->status_terjual }}</h5> --}}
                {{-- <h5>Foto : {{ $laporanprogresses->foto_ternak }}</h5> --}}

                {{-- @if ($laporanprogresses->image)
                    <img src="{{ asset('storage/' . $laporanprogresses->image) }}"
                        alt="{{ $laporanprogresses->jenisternak->nama_jenis_ternak }}" class="img-fluid mt-3">
                @else
                    <img src="https://source.unsplash.com/1000x500/?{{ $laporanprogresses->jenisternak->nama_jenis_ternak }}"
                        alt="{{ $laporanprogresses->jenisternak->nama_jenis_ternak }}" class="img-fluid mt-3">
                @endif --}}


                {{-- {{ $laporanprogresses-> }} --}}
                <article class="my-3 fs-6">
                    Deskripsi : {!! $laporanprogresses->deskripsi_progress !!}
                </article>
            </div>
        </div>
    </div>
@endsection
