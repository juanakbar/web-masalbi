@extends('layouts.web.navbar')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="img/website/maxresdefault.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption" data-aos="slide-left">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/website/maxresdefault.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption " data-aos="slide-left">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/website/maxresdefault.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption" data-aos="slide-left">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


{{-- Start Berita  --}}
<div class="container mt-5" data-aos="slide-up">
  <header class="section-header">
    <p>Berita</p>
  </header>
  <div class="row">
    @foreach ($beritas as $berita)
    <div class="col-sm-6 col-md-4 mt-2 mb-3">
      <div class="card">
        <img src="img/portal/no-image.png" class="card-img-top" alt="...">
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
      <div class="col-sm text-center mb-4 mt-5">
        <a href="/beranda/berita" class="btn btn-outline-primary"> Tampilkan Semua Berita </a>
      </div>
  </div>
</div>
{{-- End Berita --}}

{{-- Start Prestai --}}
    <div class="container recent-blog-posts mt-5 mb-5" data-aos="slide-up">
      <header class="section-header">
        <p>Prestasi</p>
      </header>
      {{-- @foreach ($prestasis as $prestasi) --}}
      <div class="container recent-blog-posts mt-3 mb-5">
          <div class="col-sm-6 col-md-4 mt-2 mb-3">
            <div class="post-box">
              <div class="post-img"><img src="img/portal/no-image.png" class="img-fluid" alt=""></div>
              <span class="post-date"> Judul </span>
              <h3 class="post-title">p</h3>
              <a href="#" class="mt-auto btn btn-primary"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
      </div>
    </div>
      {{-- @endforeach --}}
        <div class="col-sm text-center mb-4 mt-5">
          <a href="#" class="btn btn-outline-primary"> Tampilkan Semua Prestasi </a>
        </div>
      </div>
    </div>
{{-- End Prestasi --}}
@endsection
