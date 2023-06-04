@extends('dkpp.layouts.main')

@section('container')
    <div class="table-responsive">
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
                            <a href="#" class="badge bg-warning"><span data-feather='edit'></span></a>
                            <form action="#" method="post" class="d-inline">
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
