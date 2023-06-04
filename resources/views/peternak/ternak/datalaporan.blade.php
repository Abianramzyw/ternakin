@extends('peternak.layouts.main')

@section('container')
    <div class="table-responsive">
        <a href="/peternak/datalaporan/create" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Laporan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporanprogresses as $laporan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $laporan->id }}</td>
                        <td>{{ $laporan->tanggal_progress }}</td>
                        <td>{{ $laporan->berat_ternak }} Kg</td>
                        <td><a href="/peternak/datalaporan/{{ $laporan->id }}" class="badge bg-info"><span
                                    data-feather='eye'></span></a>
                            <a href="/peternak/datalaporan/{{ $laporan->id }}/edit" class="badge bg-warning"><span
                                    data-feather='edit'></span></a>
                            <form action="/peternak/datalaporan/{{ $laporan->id }}" method="post" class="d-inline">
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
