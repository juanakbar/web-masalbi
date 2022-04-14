@extends('layouts.web.navbar')

@section('content')
    <div class="container berita">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$item -> judul}}</h5>
                    <p class="card-text"> {{$item -> excerpt}} </p>
                    <a href="/berita/{{$item -> slug}}" class="btn btn-outline-primary"> Read More</a>
                    <hr class="hr-content">
                    <p class="card-text"><small class="text-muted">{{$item -> created_at}}</small></p>
                  </div>
            </div>
        </div>
    </div>
@endsection