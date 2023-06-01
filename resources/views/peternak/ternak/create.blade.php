@extends('peternak.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Membuat Data Baru
        </h1>
    </div>

    <div class="col-lg-7">
        <form method="post" action="/peternak/dataternak" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label">Nama
                    Pemilik</label>
                <input type="text" class="form-control @error('nama_pemilik') is-invalid
                @enderror"
                    id="nama_pemilik" name="nama_pemilik" required autofocus value="{{ old('nama_pemilik') }}"
                    @error('nama_pemilik')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                    </div>
                <div class="mb-3">
                    <label for="berat_ternak" class="form-label">Berat Ternak</label>
                    <input type="text" class="form-control @error('berat_ternak') is-invalid
                @enderror"
                        id="berat_ternak" name="berat_ternak" required value="{{ old('berat_ternak') }}">
                    @error('berat_ternak')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jenis_ternak" class="form-label">Jenis Ternak</label>
                    <input type="text" class="form-control @error('jenis_ternak') is-invalid
                @enderror"
                        id="jenis_ternak" name="jenis_ternak" required value="{{ old('jenis_ternak') }}">
                    @error('jenis_ternak')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jenisternak_id" class="form-label">Jenis Ternak</label>
                    <select class="form-select" name="jenisternak_id">
                        <option selected>Pilih Jenis Ternak</option>
                        @foreach ($jenisternak as $jenis)
                            @if (old('jenisternak_id') == $jenis->id)
                                <option value="{{ $jenis->id }}" selected>{{ $jenis->nama_jenis_ternak }}</option>
                            @else
                                <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis_ternak }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                {{-- <div class="mb-3">
                <label for="status_terjual" class="form-label">Status Terjual</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Status</option>
                    <option value="1">Ada</option>
                    <option value="2">Terjual</option>
                </select>
            </div> --}}
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Ternak</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control  @error('image') is-invalid
                    @enderror" type="file"
                        id="image" name="image" onchange="previewImage">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status_terjual" class="form-label">Status Terjual</label>
                    <input type="text" class="form-control" id="status_terjual" name="status_terjual">
                </div>
                <div class="mb-3">
                    <label for="deskripsi_tambahan" class="form-label">Deskripsi Tambahan</label>
                    @error('deskripsi_tambahan')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="deskripsi_tambahan" type="hidden" name="deskripsi_tambahan"
                        value="{{ old('deskripsi_tambahan') }}">
                    <trix-editor input="deskripsi_tambahan"></trix-editor>
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
