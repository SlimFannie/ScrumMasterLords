@extends('layout')
@section ('titre','Audit SST')
@section('contenu')

    <div class="container-fluid">
        <div class="container-fluid g-0 sign mb-3">
            <div class="mt-3 bigTitleForm">
                <div class="row g-0">
                    <div class="col-10 offset-col-3 text-center m-4 g-0">
                        <h3>Grille audit SST - formulaire simplifié<h3>
                    </div>
                </div>
            </div>
        </div>

        <form action="post">
            <div class="container-fluid zoneForm">
                <div class="row g-0 mt">
                    <header class="textForm" for="nomEmploye">nom de l'employé</header>
                    <input name="" type="text" id="nomEmploye" class="mb-2 inputForm">

                    <header class="textForm" for="lieux">Lieu(x) des travaux</header>
                    <input name="" type="text" id="lieux" class="mb-2 inputForm">

                    <header class="textForm" for="date">Date</header>
                    <input name="" type="datetime-local" id="date" style="width: 150px;" class="mb-3 inputForm">
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">EPI</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="epiConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="epiNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="epiNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">Tenue des lieux</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="lieuxConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="lieuxNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="lieuxNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">Comportement sécuritaire</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="compConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="compNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="compNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">Signalisation</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="signConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="signNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="signNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">Fiches signalétiques</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="fichesConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="fichesNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="fichesNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">Travaux - Excavation</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="travConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="travNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="travNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">Espace clos</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="espConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="espNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="espNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">Méthode de travail</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="methodeConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="methodeNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="methodeNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">Autre(s)</h3>
                    <input name="" type="text" id="autre" class=" mb-2 inputForm">
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="autreConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="autreNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="autreNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div  class="row align-items-center text-center strech" style="background-color: rgb(0, 118, 213);">
                <h3 class="textForm mt">Covid 19</h3>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">Respect de la distanciation</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="distanciationConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="distanciationNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="distanciationNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">Port des EPI (masque/visière)</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="epiConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="epiNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="epiNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt titleSST">
                    <h3 class="textForm text-center">Respect des procédures établies</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="proceduresConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="proceduresNonConf">
                    </div>
                    <div class="col-11">
                        <p class="textForm">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input name="" class="form-check-input inputForm" type="checkbox" value="1" id="proceduresNA">
                    </div>
                    <div class="col-11">
                        <p class="textForm">N/A</p>
                    </div>
                </div>
            </div>

            <div  class="row align-items-center text-center strech" style="background-color: rgba(30, 73, 45, 90%);">
                <h3 class="titreSecondaireSST mt">Description</h3>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0">
                    <textarea class="resize mt mb-2 textAreaSST" aria-label="With textarea" id="description"></textarea>
                </div>
            </div>

            <div class="row g-o mb-3">
                <div class="col-7"></div>
                <div class="col-5">
                    <button type="button" class="btn btn-outline-light btn-lg">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection