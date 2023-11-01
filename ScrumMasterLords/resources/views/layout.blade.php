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
    <link rel="stylesheet" href="{{ asset('css/styleFormulaires.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleNAV.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid g-0 h-100">
  <nav class="navbar navbar-expand-lg bgWhite h-10">
      <div class="row text-center px-5 w-100 d-flex align-items-center mx-auto">
        <div class="col-12 col-lg-2 d-inline-flex">
          <span class="navbar-brand d-flex align-items-center" href="#">
            <img src="/img/logo_v3r_sans_texte.jpg" class="logoNav" alt="Ville de Trois-Rivières">
            <h5 class="salute offsetTitre d-none d-lg-block">Form3R</h5>
          </span>
          <button class="menu-btn noBtn d-inline d-lg-none px-2 pt-2" onclick="toggleNav()">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
          </button>
          <div class="avatarNav d-lg-none position-absolute">
          </div>
          <span class="position-absolute z-4 start-100 translate-middle badge rounded-pill bg-danger">99+</span>
        </div>
        <div class="col-12 col-lg-6 justify-content-lg-end d-none d-lg-flex navOpen" id="navigation">
          <ul class="navbar-nav">
            <li>
              <button class="noBtn d-flex align-items-center" type="button" onclick="navControl()"><span class="line">Nouveau formulaire</span><i class="fa-solid fa-pen-to-square ps-2 noLine"></i></button>
            </li>
            <li>
              <a href="{{ route('formulaires.index', $username) }}" class="d-flex align-items-center" id="mesForms"><span class="line">Mes formulaires</span><i class="fa-solid fa-list-check ps-2 noLine"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-end d-none d-lg-flex">
          <form method="POST" action="{{ route('usagers.logout') }}">
            @csrf
            <button type="submit" class="noBtn noLine"><i class="d-inline fa-solid fa-power-off"></i></button>
          </form>
          <h5 class="d-inline salute">Bonjour {{Session::get('prenom')}} {{Session::get('nom')}}</h5>
          <div class="avatarNav"></div>
        </div>
      </div>
      <div class="custom-shape-divider-top-1698447314" id="navDivider">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
      </div>
  </nav>
      <div class="row g-0 h-90">
        <div class="col-12 h-100">
          <div class="bgApp h-100 d-block" id="panneau"><span class="overlay d-none" id="overlayNav"></span>@yield('contenu')</div>
          <div class="bgNav h-100 align-items-end justify-content-center d-none" id="menu">
            <ul class="noBullet">
              <li>
                <a href="{{ route('formulaires.accident', $username) }}">Accident de travail</a>
              </li>
              <li>
                <a href="{{ route('formulaires.danger', $username) }}">Situation dangereuse</a>
              </li>
              <li>
                <a href="{{ route('formulaires.audit', $username) }}">Audit SST</a>
              </li>
              <li>
                <a href="{{ route('formulaires.atelier', $username) }}">Atelier mécanique</a>
              </li>
              <li>
                <a href="{{ route('formulaires.index', $username) }}">Retour</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/59d2871224.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/script.js') }}" crossorigin="anonymous"></script>
</body>
</html>