
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScrumMasterLords - Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleCO.css') }}">
</head>
<body>
    <div class="container-fluid h-100 accueilText g-0" id="videoFrame">
        <video id="videoBG" autoplay muted loop src="{{ asset('img/bgFleuve.mp4') }}" class="d-none d-lg-block"></video>
        <div class="wrapper">
            <div class="overlay"></div>
            <div class="row text-center">
                <div class="col-12">
                    <div class="cloudDiv">
                        <div id="cloud">
                            <img src="/img/logo_v3r_n_et_blanc.jpg" class="logoAccueil">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="formDiv">
                            <form method="POST" id="FormUsager" action="{{ route('usagers.login') }}">
                            @csrf
                            <div>
                                @if ($errors->any())
                                <div class="alert alert-warning mx-auto w-75" role="alert">
                                    <h5 class="bleuFonceText">{{$errors->first()}}</h5>
                                </div>
                                @endif
                            </div>
                            <div class="form-floating mx-auto inputWidth text-center">
                                <input type="text" class="form-control inputWidth m-auto" name="matricule" id="matricule" placeholder="1000001">
                                <label for="matricule" id="labelMatricule" class="px-4">Votre numéro d'employé</label>
                            </div>
                            <div class="form-floating mx-auto input-group text-center inputWidth">
                                <input type="password" name="motdepasse" id="motdepasse" class="form-control" placeholder="Votre mot de passe">
                                    <span class="input-group-text coBorder d-flex justify-content-center p-0" onclick="passwordShowHide();">
                                        <i class="fa-solid fa-eye fa-lg" id="showEye"></i>
                                        <i class="fa-solid fa-eye-slash d-none fa-lg" id="hideEye"></i>
                                    </span>
                                <label for="motdepasse" id="labelPassword" class="px-4">Votre mot de passe</label>
                            </div>
                            <div class="py-lg-5 px-2 px-lg-0 p-stupid-0">
                                <h5 class="alerteMDP mb-1"><i class="fa-solid fa-user-shield"></i> Les administrateurs de l'application ne vous demanderons <span class="dramaLine">JAMAIS</span> votre mot de passe!<h5>
                                <button class="btn btn-co hover mt-3 mt-lg-5 py-lg-3 m-0" id="submitConnexion"><h3>Connexion <i class="fa-solid fa-door-closed hoverHide"></i><i class="fa-solid fa-door-open hoverShow"></i></h3></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/59d2871224.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scriptCO.js') }}"></script>
</body>
</html>
