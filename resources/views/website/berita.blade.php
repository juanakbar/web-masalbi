@extends('layouts.web.navbar')
@section('content')
<div class="container berita mt-2">
    <header class="section-header">
      <p>Berita</p>
    </header>
    <div class="row">
      @foreach ($beritas as $berita)
      <div class="col-sm-6 col-md-4 mt-2 mb-3">
        <div class="card">
          <img src="/img/portal/no-image.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$berita -> judul}}</h5>
            <p class="card-text"> {{$berita -> excerpt}} </p>
            <a href="/berita/{{$berita -> slug}}" class="btn btn-outline-primary"> Read More</a>
            <hr class="hr-content">
            <p class="card-text"><small class="text-muted">{{$berita -> created_at}}</small></p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection