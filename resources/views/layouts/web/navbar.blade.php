<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/website/style.css">
    <title>MAS AL-BIDAYAH</title>
  </head>
  <body>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
      <div class="navbar-brand">
        <img src="img/portal/logo.png" alt="" width="40" height="40" class="d-inline-block align-center" style="font-weight: 600">
        MAS AL-BIDAYAH
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="/beranda"> Beranda </a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" data-bs-toggle="dropdown"> Profile </a>
            <ul class="dropdown-menu dropdown-menu-start fade-down">
              <li><a class="dropdown-item" href="#"> Sejarah Madrasah</a></li>
              <li><a class="dropdown-item" href="#"> Tentang Madrasah</a></li>
              <li><a class="dropdown-item" href="#"> Tujuan Madrasah</a></li>
              <li><a class="dropdown-item" href="#"> Target Madrasah</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#"> Profile </a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
    
    @yield('content')
  
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>