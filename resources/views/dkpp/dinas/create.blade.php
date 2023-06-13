@extends('dkpp.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Membuat Data Baru
        </h1>
    </div>

    <div class="col-lg-7">
        <form method="post" action="/dkpp/datajadwal" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="juduljadwal_id" class="form-label">Judul</label>
                <select class="form-select" name="juduljadwal_id">
                    <option selected>Pilih Judul</option>
                    @foreach ($juduljadwal as $juduljadwal)
                        @if (old('juduljadwal_id') == $juduljadwal->id)
                            <option value="{{ $juduljadwal->id }}" selected>{{ $juduljadwal->nama_judul_jadwal }}</option>
                        @else
                            <option value="{{ $juduljadwal->id }}">{{ $juduljadwal->nama_judul_jadwal }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="tanggal_jadwal" class="form-label">Tanggal</label>
                    <input type="datetime-local"
                        class="form-control @error('tanggal_jadwal') is-invalid
                    @enderror"
                        id="tanggal_jadwal" name="tanggal_jadwal" required value="{{ old('tanggal_jadwal') }}">
                    @error('tanggal_jadwal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="dokter" class="form-label">Dokter</label>
                    <input type="text" class="form-control @error('dokter') is-invalid
                @enderror"
                        id="dokter" name="dokter" required value="{{ old('dokter') }}">
                    @error('dokter')
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
