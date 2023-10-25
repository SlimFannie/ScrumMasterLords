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

        <form methode="post" action="{{route('audit.store')}}">
            <div class="container-fluid zoneSST">
                <div class="row g-0 mt">
                    <header class="fontSST" for="nomEmploye">nom de l'employé</header>
                    <input type="text" id="nomEmploye" class="mb-2 inputSST" name="nom_employer">

                    <header class="fontSST" for="lieux">Lieu(x) des travaux</header>
                    <input type="text" id="lieux" class="mb-2 inputSST" name="lieux_travail">

                    <header class="fontSST" for="date">Date</header>
                    <input type="datetime-local" id="date" style="width: 150px;" class="mb-3 inputSST" name="date">
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
                        <input class="form-check-input inputSST" type="checkbox" id="epiConf" name="epi_conforme" value = 1>
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" id="epiNonConf" name="epi_non_conforme" value = 1>
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" id="epiNA" name="epi_na" value = 1>
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
                        <input class="form-check-input inputSST" type="checkbox" value= 1 id="lieuxConf" name="tenue_lieux_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value= 1 id="lieuxNonConf" name="tenue_lieux_non_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value= 1 id="lieuxNA" name="tenue_lieux_na">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h3 class="fontSST">Comportement sécuritaire</h3>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="compConf" name="comportement_securitaire_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="compNonConf" name="comportement_securitaire_non_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="compNA" name="comportement_securitaire_na">
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
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="signConf" name="signalisation_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="signNonConf" name="signalisation_non_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="signNA" name="travaux_excavation_na">
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
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="fichesConf" name="fiches_signaletique_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="fichesNonConf" name="fiches_signaletique_non_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="fichesNA" name="fiches_signaletique_na">
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
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="travConf" name="travaux_excavation_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="travNonConf" name="travaux_excavation_non_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="travNA" name="travaux_excavation_na">
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
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="espConf" name="espace_clos_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="espNonConf" name="espace_clos_non_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="espNA" name="espace_clos_na">
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
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="methodeConf" name="methode_travail_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="methodeNonConf" name="methode_travail_non_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="methodeNA" name="methode_travail_na">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">N/A</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneSST">
                <div class="row g-0 mt titleSST">
                    <h3 class="fontSST">Autre(s)</h3>
                    <input type="text" id="autre" class=" mb-2 inputSST" name="autre">
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="autreConf" name="autre_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="autreNonConf" name="autre_non_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="autreNA" name="autre_na">
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
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="distanciationConf" name="respect_distanciation_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="distanciationNonConf" name="respect_distanciation_non_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="distanciationNA" name="respect_distanciation_na">
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
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="epiConf" name="port_epi_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="epiNonConf" name="port_epi_non_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="epiNA" name="port_epi_na">
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
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="proceduresConf" name="respect_procedures_etablies_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="proceduresNonConf" name="respect_procedures_etablies_non_conforme">
                    </div>
                    <div class="col-11">
                        <p class="fontSST">Non Conforme</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-1">
                        <input class="form-check-input inputSST" type="checkbox" value=1 id="proceduresNA" name="respect_procedures_etablies_na">
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
                    <textarea class="resize mt mb-2 textAreaSST" aria-label="With textarea" id="description" name="description"></textarea>
                </div>
            </div>

            <div class="row g-o mb-3">
                <div class="col-7"></div>
                <div class="col-5">
                    <button type="submit" class="btn btn-outline-light btn-lg">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection