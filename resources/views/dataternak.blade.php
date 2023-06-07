@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/dataternak">
                @if (request('jenisternak'))
                    <input type="hidden" name="jenisternak" value="{{ request('jenisternak') }}">
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari.." name="cari"
                        value="{{ request('cari') }}">
                    <button class="btn btn-dark" type="submit">Cari</button>
                </div>

            </form>
        </div>
    </div>

    @if ($ternaks->count())
        <div class="card mb-3">
            @if ($ternaks[0]->image)
                <div style="max-height: 400px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $ternaks[0]->image) }}"
                        alt="{{ $ternaks[0]->jenisternak->nama_jenis_ternak }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $ternaks[0]->jenisternak->nama_jenis_ternak }}"
                    class="card-img-top" alt="{{ $ternaks[0]->jenisternak->nama_jenis_ternak }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title">Nomer Ternak : {{ $ternaks[0]->id }}</h3>
                <p>
                    <small class="text-muted">
                        Peternak <a href="/dataternak?user={{ $ternaks[0]->user->nama_akun }}" class="text-decoration-none">
                            {{ $ternaks[0]->user->nama_akun }} </a> Dari Jenis <a
                            href="/dataternak?jenisternak={{ $ternaks[0]->jenisternak->id }}"
                            class="text-decoration-none">{{ $ternaks[0]->jenisternak->nama_jenis_ternak }}</a>
                        {{ $ternaks[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">Status : {{ $ternaks[0]->statusterjual->nama_status_terjual }}</p>

                <a href="/dataternak/{{ $ternaks[0]->id }}" class="text-decoration-non btn btn-primary">
                    Baca selengkapnya</a>

            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($ternaks->skip(1) as $ternak)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="position-absolute px-3 py-1" style="background-color:rgba(0, 0, 0, 0.4)"><a
                                    href="/dataternak?jenisternak={{ $ternak->jenisternak->id }}"
                                    class="text-white text-decoration-none">{{ $ternak->jenisternak->nama_jenis_ternak }}</a>
                            </div>
                            @if ($ternak->image)
                                <img src="{{ asset('storage/' . $ternak->image) }}"
                                    alt="{{ $ternak->jenisternak->nama_jenis_ternak }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400/?{{ $ternak->jenisternak->nama_jenis_ternak }}"
                                    class="card-img-top" alt="{{ $ternak->jenisternak->nama_jenis_ternak }}">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">Nomer Ternak : {{ $ternak->id }}</h5>
                                <p>
                                    <small class="text-muted">
                                        Peternak : <a href="/dataternak?user={{ $ternak->user->nama_akun }}"
                                            class="text-decoration-none">
                                            {{ $ternak->user->nama_akun }} </a>
                                        {{ $ternak->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">Status : {{ $ternak->statusterjual->nama_status_terjual }}</p>
                                <a href="/dataternak/{{ $ternak->id }}" class="btn btn-primary">Baca
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">Ternak yang anda cari tidak ada..</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $ternaks->links() }}
    </div>

    </div>

@endsection
