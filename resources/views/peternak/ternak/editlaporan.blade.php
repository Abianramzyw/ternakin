@extends('peternak.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Mengubah Data
        </h1>
    </div>

    <div class="col-lg-7">
        <form method="post" action="{{ route('datalaporan.update', $datalaporans->id) }}" class="mb-5"
            enctype="multipart/form-data">
            @method('put')
            @csrf
                <div class="mb-3">
                    <label for="tanggal_progress" class="form-label">Tanggal</label>
                    <input type="date" class="form-control @error('tanggal_progress') is-invalid
                    @enderror"
                        id="tanggal_progress" name="tanggal_progress" required value="{{ old('tanggal_progress', $datalaporans->tanggal_progress) }}">
                    @error('tanggal_progress')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="berat_ternak" class="form-label">Berat</label>
                    <input type="number" step="0.01" class="form-control @error('berat_ternak') is-invalid
                    @enderror"
                        id="berat_ternak" name="berat_ternak" required value="{{ old('berat_ternak', $datalaporans->berat_ternak) }}">
                    @error('berat_ternak')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kondisiternak_id" class="form-label">Kondisi</label>
                    <select class="form-select" name="kondisiternak_id">
                        <option selected>Pilih Kondisi</option>
                        @foreach ($kondisiternak as $kondisiternak)
                            @if (old('kondisiternak_id', $datalaporans->kondisiternak_id) == $kondisiternak->id)
                                <option value="{{ $kondisiternak->id }}" selected>{{ $kondisiternak->nama_kondisi_ternak }}
                                </option>
                            @else
                                <option value="{{ $kondisiternak->id }}">{{ $kondisiternak->nama_kondisi_ternak }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="hasilternak_id" class="form-label">Hasil Ternak</label>
                    <select class="form-select" name="hasilternak_id" required>
                        <option selected>Pilih Ternak</option>
                        @foreach ($hasilternak as $hasilternak)
                            @if (old('hasilternak_id', $datalaporans->hasilternak_id) == $hasilternak->id)
                                <option value="{{ $hasilternak->id }}" selected>{{ $hasilternak->nama_hasil_ternak }}
                                </option>
                            @else
                                <option value="{{ $hasilternak->id }}">{{ $hasilternak->nama_hasil_ternak }}</option>
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
                    <label for="image" class="form-label">Foto</label>
                    <input type="hidden" name="oldImage" value="{{ $datalaporans->image }}">
                    @if ($datalaporans->image)
                        <img src="{{ asset('storage/' . $datalaporans->image) }}"
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
                <!-- <div class="mb-3">
                    <label for="status_terjual" class="form-label">Status Terjual</label>
                    <input type="text" class="form-control @error('status_terjual') is-invalid
                @enderror"
                        id="status_terjual" name="status_terjual" required
                        value="{{ old('status_terjual', $datalaporans->status_terjual) }}">
                    @error('status_terjual')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> -->
                <div class="mb-3">
                    <label for="deskripsi_progress" class="form-label">Deskripsi</label>
                    @error('deskripsi_progress')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="deskripsi_progress" type="hidden" name="deskripsi_progress"
                        value="{{ old('deskripsi_progress', $datalaporans->deskripsi_progress) }}">
                    <trix-editor input="deskripsi_progress"></trix-editor>
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
