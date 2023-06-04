@extends('peternak.layouts.main')

@section('container')
    <div class="table-responsive">
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
                        <td><a href="/peternak/dataproduk/{{ $produk->slug }}" class="badge bg-info"><span
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
