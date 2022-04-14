  @extends('layouts.web.navbar')
  @section('content')
  @foreach ($prestasis as $prestasi)
  <div class="container berita recent-blog-posts mt-5 mb-5">
    <div class="col-sm-6 col-md-4 mt-2 mb-3">
        <div class="post-box">
        <div class="post-img"><img src="img/portal/no-image.png" class="img-fluid" alt=""></div>
        <span class="post-date">{{$prestasi-> created_at}}</span>
        <h3 class="post-title">{{$prestasi -> judul}}</h3>
        <a href="#" class="mt-auto btn btn-primary"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>
  @endforeach
    
  
  @endsection