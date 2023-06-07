@extends('peternak.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-lg-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Data Produk
        </h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role='alert'>
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/peternak/dataproduk/create" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori Produk</th>
                    {{-- <th scope="col">Kategori Hewan</th> --}}
                    <th scope="col">Harga Produk</th>
                    <th scope="col">Stok Produk</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produks as $produk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $produk->id }}</td>
                        <td>{{ $produk->nama_produk }}</td>
                        <td>{{ $produk->kategori_produk }}</td>
                        {{-- <td>{{ $produk->id }}</td> --}}
                        <td>Rp. {{ $produk->harga_produk }}</td>
                        <td>{{ $produk->stok_produk }}</td>
                        <td><a href="/peternak/dataproduk/{{ $produk->id }}" class="badge bg-info"><span
                                    data-feather='eye'></span></a>
                            <a href="/peternak/dataproduk/{{ $produk->id }}/edit" class="badge bg-warning"><span
                                    data-feather='edit'></span></a>
                            <form action="/peternak/dataproduk/{{ $produk->id }}" method="post" class="d-inline">
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
