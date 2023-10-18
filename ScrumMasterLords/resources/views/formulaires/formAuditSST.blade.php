@extends('layout')
@section ('titre','Audit SST')
@section('contenu')

    <div class="container-fluid">
        <div class="container-fluid g-0 sign mb-3">
            <div class="mt-3 bigTitleSST">
                <div class="row g-0">
                    <div class="col-10 offset-col-3 text-center m-4 g-0">
                        <h3 class="fontSST">Grille audit SST - formulaire simplifié<h3>
                    </div>
                </div>
            </div>
        </div>

        <div  class="row align-items-center strech" style="background-color: white;">
            <p style="color: rgb(99, 188, 85);">Bonjour, NomUser. Lorsque vous soumettez ce formulaire, le propriétaire verra votre nom et votre adresse e-mail.</p>
        </div>

        <div class="row align-items-center text-center strech mt-3" style="background-color: rgba(30, 73, 45, 90%);">
            <h3 class="titreSecondaireSST mt">Identification</h3>
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

            <div  class="row align-items-center text-center strech" style="background-color: rgba(30, 73, 45, 90%);">
                <h3 class="titreSecondaireSST mt">Général</h3>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h3 class="fontSST">EPI</h3>
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
                    <h3 class="fontSST">Tenue des lieux</h3>
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
                    <h3 class="fontSST">Comportement sécuritaire</h3>
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
                    <h3 class="fontSST">Signalisation</h3>
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
                    <h3 class="fontSST">Fiches signalétiques</h3>
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
                    <h3 class="fontSST">Travaux - Excavation</h3>
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
                    <h3 class="fontSST">Espace clos</h3>
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
                    <h3 class="fontSST">Méthode de travail</h3>
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
                    <h3 class="fontSST">Autre(s)</h3>
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

            <div  class="row align-items-center text-center strech" style="background-color: rgba(30, 73, 45, 90%);">
                <h3 class="titreSecondaireSST mt">Covid 19</h3>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h3 class="fontSST">Respect de la distanciation</h3>
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
                    <h3 class="fontSST">Port des EPI (masque/visière)</h3>
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
                    <h3 class="fontSST">Respect des procédures établies</h3>
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

            <div  class="row align-items-center text-center strech" style="background-color: rgba(30, 73, 45, 90%);">
                <h3 class="titreSecondaireSST mt">Description</h3>
            </div>

            <div class="container-fluid zoneSST">
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