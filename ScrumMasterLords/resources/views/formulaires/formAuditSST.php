@extends('layout')
@section('contenu')

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row mt title text-center">
                <h1>Audit-SST</h1>
            </div>
        </div>

        <hr>

        <form action="post">
            <div class="container-fluid zone">
                <div class="row g-0 mt">
                    <header for="nomEmploye">nom de l'employé</header>
                    <input type="text" id="nomEmploye" class="border-3 mb-2">
                    <header for="lieux">Lieu(x) des travaux</header>
                    <input type="text" id="lieux" class="border-3 mb-2">
                    <header for="date">Date</header>
                    <input type="datetime-local" id="date" style="width: 150px;" class="mb-3">
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>EPI</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="epiConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="epiNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="epiNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>Tenue des lieux</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="lieuxConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="lieuxNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="lieuxNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>Comportement sécuritaire</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="compConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="compNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="compNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>Signalisation</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="signConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="signNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="signNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>Fiches signalétiques</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="fichesConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="fichesNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="fichesNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>Travaux - Excavation</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="travConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="travNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="travNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>Espace clos</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="espConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="espNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="espNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>Méthode de travail</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="methodeConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="methodeNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="methodeNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>Autre(s)</h1>
                    <input type="text" id="autre" class="border-3 mb-2">
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="autreConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="autreNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="autreNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <h1>Covid-19</h1>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>Respect de la distanciation</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="distanciationConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="distanciationNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="distanciationNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>Port des EPI (masque/visière)</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="epiConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="epiNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="epiNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt title text-center">
                    <h1>Respect des procédures établies</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="proceduresConf">
                    </div>
                    <div class="col-11">
                        <p>Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="proceduresNonConf">
                    </div>
                    <div class="col-11">
                        <p>Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" value="" id="proceduresNA">
                    </div>
                    <div class="col-11">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <h1>Description</h1>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0">
                    <textarea class="border-3 mt mb-2" aria-label="With textarea"></textarea>
                </div>
            </div>
        </form>
    </div>
    
@endsection