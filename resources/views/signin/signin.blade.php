@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            @if (session()->has('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('sukses') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('gagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('gagal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Masuk</h1>
                <form action="/masuk" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email_akun"
                            class="form-control @error('email_akun')is-invalid @enderror" id="email_akun"
                            placeholder="email@example.com" autofocus required value="{{ old('email_akun') }}">
                        <label for="floatingInput">Email</label>
                        @error('email_akun')
                            <div class="invalid-feedack">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                </form>
                <small class="d-block text-center mt-3">Belum terdaftar? <a href="/daftar">Daftar disini!</a></small>
            </main>
        </div>
    </div>
@endsection
