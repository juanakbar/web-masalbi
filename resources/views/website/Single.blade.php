@extends('layouts.web.navbar')

@section('content')
    <div class="container berita">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$show -> judul}}</h5>
                    <p class="card-text"> Juan </p>
                    <hr class="hr-content">
                    <p class="card-text"><small class="text-muted">Juan</small></p>
                  </div>
            </div>
        </div>
    </div>
@endsection