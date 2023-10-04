<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titre')</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleAT.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleSST.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid g-0 h-100 d-flex flex-column">
  <nav class="navbar navbar-expand-lg bg-light position-top h-15">
      <div class="row text-center align-items-center px-5 w-100">
        <div class="col-2">
          <a class="navbar-brand " href="#">
            <img src="/img/logo_v3r_n_et_blanc.jpg" class="d-inline-flex" alt="Ville de Trois-Rivières" height="80px" width="70px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="col-8">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
              <li class="nav-item">
                <button class="nav-link nav-link-lg noBtn" href="#" type="button" data-bs-toggle="collapse" data-bs-target="#newForm" aria-controls="newForm" aria-expanded="false" aria-label="Toggle navigation">Nouveau formulaire <i class="fa-solid fa-pen-to-square"></i></button>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-lg" href="#">Mes formulaires <i class="fa-solid fa-list-check"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-2">
          <img src="/img/saladeProfil.jpg" alt="Ville de Trois-Rivières" class="rounded-3" height="80px" width="80px">
        </div>
      </div>
  </nav>
  
  @yield('contenu')

    <!--
      <div class="row g-0 h-85">
        <div class="col-12 h-100">
          <div class="bgApp collapse collapse-horizontal show h-100" id="newForm">@yield('contenu')</div>
          <div class="collapse collapse-horizontal bgNav h-100 d-flex align-items-center justify-content-center" id="newForm">
            <ul class="noBullet">
              <li>
                Formulaire SST
              </li>
              <li>
                Situation dangereuse
              </li>
              <li>
                Audit SST
              </li>
              <li>
                Atelier mécanique
              </li>
            </ul>
          </div>
        </div>
      </div>
-->
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/59d2871224.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/script.js') }}" crossorigin="anonymous"></script>
</body>
</html>