
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScrumMasterLords - Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
        <div class="row text-center">
            <div class="col-12">
                <form method="post" id="FormUsager" action="{{ route('usagers.login') }}" >
                    @csrf
                    <div class="mb-3">
                        <h1>Numéro d'employé</h1>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <h1>Mot de passe</h1>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <p><i class="fa-solid fa-user-shield"></i> Les administrateurs de l'application ne vous demanderons jamais votre mot de passe, ni par courriel ni par téléphone!<p>
                    <button type="submit" class="btn btn-primary hover"><h3>Connexion <i class="fa-solid fa-door-closed hoverHide"></i><i class="fa-solid fa-door-open hoverShow"></i></h3></button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/59d2871224.js" crossorigin="anonymous"></script>
</body>
</html>
