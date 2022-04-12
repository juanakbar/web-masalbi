<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/website/style.css">
    <link rel="shortcut icon" href="img/portal/logo-2.png" type="image/x-icon">
    {{-- AOS ANIMATION --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- OWL CAROUSEL --}}
    <link rel="stylesheet" href="/css/owl/owl.carousel.min.css">
    <title>MAS AL-BIDAYAH</title>
  </head>
  <body>
<header>
  <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top">
    <div class="container">
      <div class="navbar-brand">
        <img src="img/portal/logo.png" alt="" width="40" height="40" class="d-inline-block align-center" style="font-weight: 600">
        MAS AL-BIDAYAH
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="/beranda"> Beranda </a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" data-bs-toggle="dropdown"> Profile </a>
              <ul class="dropdown-menu dropdown-menu-start fade-down">
                <li><a class="dropdown-item" href="#"> Sejarah Singkat</a></li>
                <li><a class="dropdown-item" href="#"> Profile Madrasah</a></li>
                <li><a class="dropdown-item" href="#"> Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="#"> Sarana Prasana</a></li>
                <li><a class="dropdown-item" href="#"> Kerja Sama</a></li>
              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" data-bs-toggle="dropdown"> Akademik </a>
              <ul class="dropdown-menu dropdown-menu-start fade-down">
                <li><a class="dropdown-item" href="#"> Program Studi</a></li>
                <li><a class="dropdown-item" href="#"> Konsep Pendidikan</a></li>
                <li><a class="dropdown-item" href="#"> Kurikulum</a></li>
                <li><a class="dropdown-item" href="#"> Peraturan Akademik</a></li>
                <li><a class="dropdown-item" href="#"> Kalaender Akademik</a></li>

              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" data-bs-toggle="dropdown"> Kesiswaan </a>
              <ul class="dropdown-menu dropdown-menu-start fade-down">
                <li><a class="dropdown-item" href="#"> Esktrakurikuler</a></li>
                <li><a class="dropdown-item" href="#"> Web Osis</a></li>
                <li><a class="dropdown-item" href="#"> Menjadi Alumnus</a></li>
              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" data-bs-toggle="dropdown"> Aplikasi </a>
              <ul class="dropdown-menu dropdown-menu-start fade-down">
                <li><a class="dropdown-item" href="#"> E-Learning</a></li>
                <li><a class="dropdown-item" href="#"> Perpustakaan</a></li>
                <li><a class="dropdown-item" href="#"> Rapot Digital</a></li>
                <li><a class="dropdown-item" href="#"> CBT Seleksi Masuk</a></li>
                <li><a class="dropdown-item" href="#"> Web PPDB</a></li>

              </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#"> Galery </a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
    
    @yield('content')

    <footer class="footer-32892 pb-0">
      <div class="site-section">
        <div class="container">
    
          
          <div class="row">
    
            <div class="col-md pr-md-5 mb-4 mb-md-0">
              <h3>About Us</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam itaque unde facere repellendus, odio et iste voluptatum aspernatur ratione mollitia tempora eligendi maxime est, blanditiis accusamus. Incidunt, aut, quis!</p>
              <ul class="list-unstyled quick-info mb-4">
                <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-phone"></span> +1 291 3912 329</a></li>
                <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-envelope"></span> info@gmail.com</a></li>
              </ul>
    
              <form action="#" class="subscribe">
                <input type="text" class="form-control" placeholder="Enter your e-mail">
                <input type="submit" class="btn btn-submit" value="Send">
              </form>
            </div>
            <div class="col-md mb-4 mb-md-0">
              <h3>Latest Tweet</h3>
              <ul class="list-unstyled tweets">
                <li class="d-flex">
                  <div class="mr-4"><span class="icon icon-twitter"></span></div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam porro excepturi.</div>
                </li>
                <li class="d-flex">
                  <div class="mr-4"><span class="icon icon-twitter"></span></div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam porro excepturi.</div>
                </li>
                <li class="d-flex">
                  <div class="mr-4"><span class="icon icon-twitter"></span></div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam porro excepturi.</div>
                </li>
              </ul>
            </div>
    
    
            <div class="col-md-3 mb-4 mb-md-0">
              <h3>Instagram</h3>
              <div class="row gallery">
                <div class="col-6">
                  <a href="#"><img src="img/portal/no-image.png" alt="Image" class="img-fluid"></a>
                  <a href="#"><img src="img/portal/no-image.png" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-6">
                  <a href="#"><img src="img/portal/no-image.png" alt="Image" class="img-fluid"></a>
                  <a href="#"><img src="img/portal/no-image.png" alt="Image" class="img-fluid"></a>
                </div>
              </div>
            </div>
            
            <div class="col-12">
              <div class="py-5 footer-menu-wrap d-md-flex align-items-center">
                <ul class="list-unstyled footer-menu mr-auto">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Our works</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contacts</a></li>
                </ul>
                <div class="site-logo-wrap ml-auto">
                  <a href="#" class="site-logo">
                    Colorlib
                  </a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    {{-- Script Aos --}}
    <script>
      AOS.init({
        duration : 1200,
        easing: 'ease-in'
      });
    </script>
    {{-- Script Owl --}}
    {{-- <script src="js/jquery.min.js"></script> --}}
    <script src="js/owl.carousel.min.js"></script>
  </body>
</html>