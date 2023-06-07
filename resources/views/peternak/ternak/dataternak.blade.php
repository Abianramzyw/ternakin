@extends('peternak.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-lg-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Data Ternak
        </h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role='alert'>
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/peternak/dataternak/create" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Sapi</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Status Terjual</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ternaks as $ternak)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ternak->id }}</td>
                        <td>{{ $ternak->jenisternak->nama_jenis_ternak }}</td>
                        <td>{{ $ternak->berat_ternak }} Kg</td>
                        <td>{{ $ternak->tanggal_lahir }}</td>
                        <td>{{ $ternak->statusterjual->nama_status_terjual }}</td>
                        <td><a href="/peternak/dataternak/{{ $ternak->id }}" class="badge bg-info"><span
                                    data-feather='eye'></span></a>
                            <a href="/peternak/dataternak/{{ $ternak->id }}/edit" class="badge bg-warning"><span
                                    data-feather='edit'></span></a>
                            <form action="/peternak/dataternak/{{ $ternak->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Yakin untuk menghapus data?')"><span
                                        data-feather='x-circle'></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
