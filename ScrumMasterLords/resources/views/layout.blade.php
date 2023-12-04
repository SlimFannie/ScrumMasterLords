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
    <link rel="stylesheet" href="{{ asset('css/styleProcedures.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid g-0">
        <div class="row p-lg-3 bg-light g-0 sticky-top blackText h-15">
            <div class="col-lg-2 col-4 g-0 ps-3 p-lg-0 d-flex align-items-center">
                <a class="d-inline" href="{{ route('dashboard', Session::get('username')) }}">
                    <div class ="row g-0">
                        <div class="col-2 g-0">
                        <img src="{{ asset('img/logo_v3r_sans_texte.jpg') }}" class="logoNav my-auto"> 
                        </div>
                        <div class="col-8 g-0 ms-4 d-none d-lg-block">
                            <h5 class="mb-0">Direction des ressources humaines</h5>
                            <p class="mb-0"><span class="line">Téléphone:</span> (819) 372-4603</p>
                            <p class="mb-0"><span class="line">Télécopie:</span> (819) 374-2016</p>
                        </div>
                    </div>  
                </a>
            </div>
            <div class="col-lg-6 col-4 g-0 d-flex align-items-center justify-content-lg-end justify-content-center">
                <div class="dropdown d-lg-none">
                    <button class="d-lg-none noBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><h3 class="mt-4"><i class="fa-solid fa-arrow-right"></i> <span class="line">Nouveau formulaire</span></h4></li>
                        <li><h3 class="my-5"><i class="fa-solid fa-arrow-right"></i> <span class="line">Procédures de travail</span></h4></li>
                        <li>
                            <h3 class="mb-4"><i class="fa-solid fa-arrow-right"></i> <a href="{{ route('dashboard', Session::get('username')) }}" class="noBorder p-0 line">Mes formulaires</a></h4>
                        </li>
                    </ul>
                </div>
                <div class="dropdown d-none d-lg-block">
                    <button class="btn noBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <h2 class="d-inline"><i class="fa-solid fa-file-pen"></i> <span class="line">Nouveau formulaire</span> <i class="fa-solid fa-chevron-down"></i></h2>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('formulaires.accident', Session::get('username')) }}">Accident de travail</a></li>
                        <li><a class="dropdown-item" href="{{ route('formulaires.danger', Session::get('username')) }}">Situation dangereuse</a></li>
                        @if (Session::get('user.superieur') == true)
                        <li><a class="dropdown-item" href="{{ route('formulaires.atelier', Session::get('username')) }}">Atelier mécanique</a></li>
                        <li><a class="dropdown-item" href="{{ route('formulaires.audit', Session::get('username')) }}">Audit SST</a></li>
                        @endif
                    </ul>
                </div>
                <div class="dropdown ms-4 d-none d-lg-block">
                    <button class="btn noBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <h2 class="d-inline"><i class="fa-solid fa-clipboard-list"></i> <span class="line">Procédure de travail</span> <i class="fa-solid fa-chevron-down"></i></h2>
                    </button>
                    <ul class="dropdown-menu">
                        @foreach(Helper::getDepartement() as $departement)
                            <li><a class="dropdown-item" href="#"><h5 class="mb-0">{{ $departement->nom }}</h5></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-4 g-0 p-lg-0 pe-3 d-flex justify-content-end">
                <a href="{{ route('usagers.logout') }}" class="my-auto me-2"><i class="fa-solid fa-power-off fa-lg"></i></a>
                <h2 class="d-none d-lg-inline-flex my-auto me-2">Bienvenue <span class="line ms-1">{{Session::get('user.prenom')}} {{Session::get('user.nom')}}</span></h2>
                <div class="btn-group">
                    <button type="button" class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (count(Helper::getNotif()))
                        <span class="position-absolute m-lg-0 mt-3 badge rounded-pill bg-danger">
                            {{count(Helper::getNotif())}}
                        </span>
                        @endif
                        <img class="avatarNav me-1">
                    </button>
                    <ul class="dropdown-menu">
                        @if (count(Helper::getNotif()))
                            @foreach (Helper::getNotif() as $notification)
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                            @endforeach
                        @else
                        <li><a class="dropdown-item">Rien ne nécéssite votre attention.</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="row g-0 bgForm3R">
            <div class="col-12 g-0">
                @yield('contenu')
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/59d2871224.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/script.js') }}" crossorigin="anonymous"></script>
</body>
</html>