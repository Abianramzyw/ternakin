@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1>Edit</h1>
                <form action="{{ route('profil.update', $user->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nama_akun" class="form-label">Nama</label>
                        <input class="form-control @error('nama_akun') is-invalid @enderror" type="text" name="nama_akun"
                            id="nama_akun" required value="{{ old('nama_akun', $user->nama_akun) }}">
                        @error('nama_akun')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat_akun" class="form-label">Alamat Akun</label>
                        <input class="form-control @error('alamat_akun') is-invalid @enderror" type="text"
                            name="alamat_akun" id="alamat_akun" required
                            value="{{ old('alamat_akun', $user->alamat_akun) }}">
                        @error('alamat_akun')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email_akun" class="form-label">Email</label>
                        <input class="form-control @error('email_akun') is-invalid @enderror" type="email"
                            name="email_akun" id="email_akun" required
                            value="{{ old('email_akun', $user->email_akun) }}">
                        @error('email_akun')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                            id="password" required value="{{ old('password', $user->password) }}">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
