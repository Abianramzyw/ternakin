@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    {{-- <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                This content is a little bit longer.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
    </div> --}}
    @foreach ($produkternaks as $produk)
        <article>
            <h2><a href="/produkternak/{{ $produk->id }}">{{ $produk->kategori_produk }}</a></h2>
        </article>
    @endforeach
@endsection
