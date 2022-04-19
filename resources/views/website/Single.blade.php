@extends('layouts.web.navbar')

@section('content')
    <div class="container berita mt-4 mb-4 border rounded isi shadow">
        <h1 class="text-center mt-1 bt">{{$berita-> judul}}</h1>
        <img src="/img/website/maxresdefault.jpeg" class="img-fluid mt-3 rounded" alt=" {{$berita->judul}} ">
        <p class="text-muted mt-2"><i class="fa-regular fa-calendar"></i> {{$berita-> created_at}} </p>
        <p class="fs-5"> {{$berita-> isi}} </p>
        </div>
    </div>
@endsection