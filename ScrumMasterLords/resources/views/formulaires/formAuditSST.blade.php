@extends('layout')
@section('contenu')

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row mt titleSST">
                <h1 class="fontSST">Audit-SST</h1>
            </div>
        </div>

        <form action="post">
            <div class="container-fluid zoneSST">
                <div class="row g-0 mt">
                    <header class="fontSST" for="nomEmploye">nom de l'employé</header>
                    <input type="text" id="nomEmploye" class="mb-2 inputSST">
                    <header class="fontSST" for="lieux">Lieu(x) des travaux</header>
                    <input type="text" id="lieux" class="mb-2 inputSST">
                    <header class="fontSST" for="date">Date</header>
                    <input type="datetime-local" id="date" style="width: 150px;" class="mb-3 inputSST">
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">EPI</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="epiConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="epiNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="epiNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">Tenue des lieux</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="lieuxConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="lieuxNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="lieuxNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">Comportement sécuritaire</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="compConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="compNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="compNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">Signalisation</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="signConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="signNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="signNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">Fiches signalétiques</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="fichesConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="fichesNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="fichesNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">Travaux - Excavation</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="travConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="travNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="travNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">Espace clos</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="espConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="espNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="espNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">Méthode de travail</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="methodeConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="methodeNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="methodeNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">Autre(s)</h1>
                    <input type="text" id="autre" class=" mb-2 inputSST">
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="autreConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="autreNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="autreNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <hr>

            <div class="container-fluid">
                <div class="row">
                    <h1 class="fontSST">Covid-19</h1>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">Respect de la distanciation</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="distanciationConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="distanciationNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="distanciationNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">Port des EPI (masque/visière)</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="epiConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="epiNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="epiNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h1 class="fontSST">Respect des procédures établies</h1>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="proceduresConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="proceduresNonConf">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value="" id="proceduresNA">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <hr>

            <div class="container-fluid">
                <div class="row">
                    <h1 class="fontSST">Description</h1>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0">
                    <textarea class="resize mt mb-2 inputSST" aria-label="With textarea" id="description"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-8"></div>
                <div class="col-4">
                    <button type="button" class="btn btn-outline-light btn-lg">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection