@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-signup">
                <h1 class="h3 mb-3 fw-normal text-center">Daftar</h1>

                <form action="/daftar" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email_akun"
                            class="form-control rounded-top @error('email_akun')is-invalid @enderror" id="email_akun"
                            placeholder="email@example.com" autofocus required value="{{ old('email_akun') }}">
                        <label for="email_akun">Email</label>
                        @error('email_akun')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="nama_akun" class="form-control @error('nama_akun')is-invalid @enderror"
                            id="nama_akun" placeholder="nama anda" required value="{{ old('nama_akun') }}">
                        <label for="nama_akun">Nama</label>
                        @error('nama_akun')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="alamat_akun"
                            class="form-control @error('alamat_akun')is-invalid @enderror" id="alamat_akun"
                            placeholder="alamat anda" required value="{{ old('alamat_akun') }}">
                        <label for="alamat_akun">Alamat</label>
                        @error('alamat_akun')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror"
                            id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-floating">
                        <input type="password" name="password_konfirmasi"
                            class="form-control rounded-bottom @error('password_konfirmasi')is-invalid @enderror"
                            id="password_konfirmasi" placeholder="Konfirmasi Password" required>
                        <label for="password">Konfirmasi Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    <div class="form-floating">
                        <select tyoe=role_id class="form-control @error('role_id')is-invalid @enderror" name="role_id">
                            <option value="">Pilih</option>
                            <option value="1">User</option>
                            <option value="2">Peternak</option>
                            <option value="3">Dinas Ketahanan Pakan dan Ternak</option>
                        </select>
                        <label for="role_id">Pilih Role Anda :</label>
                        @error('role_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Masuk</button>
                </form>
                <small class="d-block text-center mt-3">Sudah terdaftar? <a href="/masuk">Masuk disini!</a></small>
            </main>
        </div>
    </div>
@endsection
