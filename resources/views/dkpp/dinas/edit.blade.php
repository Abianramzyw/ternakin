@extends('dkpp.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Mengubah Data
        </h1>
    </div>

    <div class="col-lg-7">
        <form method="post" action="/peternak/dataproduk?{{ $datajadwal->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label">Tanggal
                </label>
                <input type="text" class="form-control @error('nama_pemilik') is-invalid
                @enderror"
                    id="nama_pemilik" name="nama_pemilik" required autofocus
                    value="{{ old('nama_pemilik', $datajadwal->id) }}"
                    @error('nama_pemilik')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                    </div>
                <div class="mb-3">
                    <label for="berat_ternak" class="form-label">Dokter</label>
                    <input type="text" class="form-control @error('berat_ternak') is-invalid
                @enderror"
                        id="berat_ternak" name="berat_ternak" required
                        value="{{ old('berat_ternak', $datajadwal->berat_ternak) }}">
                    @error('berat_ternak')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jenis_ternak" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('jenis_ternak') is-invalid
                @enderror"
                        id="jenis_ternak" name="jenis_ternak" required
                        value="{{ old('jenis_ternak', $datajadwal->jenis_ternak) }}">
                    @error('jenis_ternak')
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
