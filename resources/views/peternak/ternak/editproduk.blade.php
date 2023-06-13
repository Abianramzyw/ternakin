@extends('peternak.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Mengubah Data
        </h1>
    </div>

    <div class="col-lg-7">
        {{-- <form method="post" action="/peternak/dataproduk?{{ $dataproduk->id }}" class="mb-5" enctype="multipart/form-data"> --}}
        <form method="post" action="{{ route('dataproduk.update', $dataproduk->id) }}" class="mb-5"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control @error('nama_produk') is-invalid
            @enderror"
                    id="nama_produk" name="nama_produk" required value="{{ old('nama_produk', $dataproduk->nama_produk) }}">
                @error('nama_produk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kategorihewanproduk_id" class="form-label">Kategori Hewan</label>
                <select class="form-select" name="kategorihewanproduk_id">
                    <option selected>Pilih Kategori</option>
                    @foreach ($kategorihewanproduk as $kategorihewanproduk)
                        @if (old('kategorihewanproduk_id', $dataproduk->kategorihewanproduk_id) == $kategorihewanproduk->id)
                            <option value="{{ $kategorihewanproduk->id }}" selected>
                                {{ $kategorihewanproduk->nama_kategori_hewan }}
                            </option>
                        @else
                            <option value="{{ $kategorihewanproduk->id }}">{{ $kategorihewanproduk->nama_kategori_hewan }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="kategori_produk" class="form-label">Kategori Produk</label>
                <input type="text" class="form-control @error('kategori_produk') is-invalid
            @enderror"
                    id="kategori_produk" name="kategori_produk" required
                    value="{{ old('kategori_produk', $dataproduk->kategori_produk) }}">
                @error('kategori_produk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="text" class="form-control @error('harga_produk') is-invalid
            @enderror"
                    id="harga_produk" name="harga_produk" required
                    value="{{ old('harga_produk', $dataproduk->harga_produk) }}">
                @error('harga_produk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="stok_produk" class="form-label">Stok Produk</label>
                <input type="text" class="form-control @error('stok_produk') is-invalid
            @enderror"
                    id="stok_produk" name="stok_produk" required
                    value="{{ old('stok_produk', $dataproduk->stok_produk) }}">
                @error('harga_produk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                @error('deskripsi_produk')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="deskripsi_produk" type="hidden" name="deskripsi_produk"
                    value="{{ old('deskripsi_produk', $dataproduk->deskripsi_produk) }}">
                <trix-editor input="deskripsi_produk"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Foto</label>
                <input type="hidden" name="oldImage" value="{{ $dataproduk->image }}">
                @if ($dataproduk->image)
                    <img src="{{ asset('storage/' . $dataproduk->image) }}"
                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control  @error('image') is-invalid
                @enderror" type="file"
                    id="image" name="image" onchange="previewImage">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
