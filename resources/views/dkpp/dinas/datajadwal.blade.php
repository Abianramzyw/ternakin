@extends('dkpp.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-lg-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Penjadwalan Ternak
        </h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role='alert'>
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/dkpp/datajadwal/create" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Jadwal Ternak</th>
                    <th scope="col">Tanggal Jadwal</th>
                    <th scope="col">Dokter</th>
                    {{-- <th scope="col">Judul Jadwal</th> --}}
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwals as $jadwal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $jadwal->id }}</td>
                        <td>{{ $jadwal->tanggal_jadwal }}</td>
                        <td>{{ $jadwal->dokter }}</td>
                        {{-- <td>{{ $jadwal->dokter }}</td> --}}
                        <td><a href="/dkpp/datajadwal/{{ $jadwal->id }}" class="badge bg-info"><span
                                    data-feather='eye'></span></a>
                            <a href="/dkpp/datajadwal/{{ $jadwal->id }}/edit" class="badge bg-warning"><span
                                    data-feather='edit'></span></a>
                            <form action="/dkpp/datajadwal/{{ $jadwal->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span
                                        data-feather='x-circle'></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
