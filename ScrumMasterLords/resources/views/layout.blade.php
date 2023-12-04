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
        <div class="row p-lg-3 bg-light g-0 sticky-top blackText">
            <div class="col-2 g-0 d-flex align-items-center">
                <a class="d-inline-flex" href="{{ route('dashboard', Session::get('username')) }}">
                    <img src="{{ asset('img/logo_v3r_sans_texte.jpg') }}" class="logoNav me-2">
                    <h2 class="my-auto">Form3R</h2>
                </a>
            </div>
            <div class="col-6 g-0 d-flex align-items-center justify-content-end">
                <div class="dropdown">
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
                <div class="dropdown ms-4">
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
            <div class="col-4 g-0 d-flex justify-content-end">
                <h2 class="d-inline-flex my-auto">Bienvenue <span class="line">{{Session::get('user.prenom')}} {{Session::get('user.nom')}}</span></h2>
                <div class="btn-group dropstart m-0">
                    <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (count(Helper::getNotif()))
                        <span class="position-absolute translate-middle badge rounded-pill bg-danger">
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
                <a href="{{ route('usagers.logout') }}" class="my-auto"><i class="fa-solid fa-power-off fa-lg"></i></a>
            </div>
        </div>
        <div class="row g-0">
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