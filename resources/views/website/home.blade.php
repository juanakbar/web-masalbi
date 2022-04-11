@extends('layouts.web.navbar')


@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner mt-3">
    <div class="carousel-item active">
      <img src="img/portal/no-image.png" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/portal/no-image.png" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/portal/no-image.png" class="d-block w-100" alt="...">
      <div class="carousel-caption">
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

<div class="container mt-5" data-aos="slide-up">
  <div class="row judul">
    <h1 class="">Berita</h1>
  </div>
  <div class="row mt-3">
    <div class="col-sm-6 col-md-4 mt-2 mb-3">
      <div class="card">
        <img src="img/portal/no-image.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <hr class="hr-content">
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 mt-2 mb-3">
      <div class="card">
        <img src="img/portal/no-image.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <hr class="hr-content">
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 mt-2 mb-3">
      <div class="card">
        <img src="img/portal/no-image.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <hr class="hr-content">
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
      <div class="col-sm text-center mb-4 mt-5">
        <a href="#" class="btn btn-outline-primary"> Tampilkan Semua Berita </a>
      </div>
  </div>
</div>
@endsection