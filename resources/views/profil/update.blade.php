@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1>Nama : {{ $user->nama_akun }}</h1>
                <h5>Role : {{ $user->role->nama_role }}</h5>
                <h5>Alamat : {{ $user->alamat_akun }}</h5>
                <h5>Email : {{ $user->email_akun }}</h5>
            </div>
        </div>
    </div>
@endsection
