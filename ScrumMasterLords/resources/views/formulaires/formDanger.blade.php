@extends('layout')
@section ('titre','Situation dangereuse')
@section('contenu')

<div class="container-fluid g-0">

    <div class="container-fluid g-0" id="sign">
        <div class="mt-3" id="bgtitre1" >
            <div class="row g-0">
                <div class="col-10 offset-col-3 text-center m-4 g-0">
                    <h3>Signalement d'une situation dangereuse, d'un acte de violence ou d'un "passé proche"<h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid g-0">
        <div class="mt-3" id="bgtitre2">
            <div class="row g-0">
                    <div class="col text-center m-2 g-0">
                        <h3 id="titre2">Identification<h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="post" action="{{route('danger.store')}}">
        @csrf
        <div class="container-fluid g-0" id="bgID">
            
                <div class="row g-0">
                    <div class="col-lg-3 offset-lg-1 col-6 mt-3 g-0">
                        <header for="nom" id="header">Nom</header>
                        <input id="nom" class="champ" name="nom">
                    </div>
                    <div class="col-lg-3 col-6 mt-3 g-0">
                        <header for="prenom" id="header">Prénom</header>
                        <input id="prenom" class="champ" name="prenom">
                    </div>

                    <div class="col-lg-3 col-12 mt-3 g-0" id="Mat">
                        <header for="matricule" id="header">Matricule</header>
                        <input id="matricule" class="champ" name="user_matricule">
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-3 offset-lg-2 col-6 mt-5 g-0">
                        <header for="fonction" id="header">Fonction au moment de l'évènement</header>
                        <input id="fonction" class="champ" name="fonction">
                    </div>
                    <div class="col-lg-4 col-6 g-0 mt-5" id="divSecteur">
                        <header for="secteur" id="header">Secteur d'activité</header>
                        <input id="secteur" class="champ" name="secteur">
                    </div>
                </div>
            
        </div>

        <div class="container-fluid g-0">
            <div class="g-0" id="bgtitre2">
                <div class="row g-0">
                    <div class="col text-center m-4 g-0">
                        <h3 id="titre2">Description de la situation ou du "passé proche"<h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid g-0 description">
            <div class="row g-0">
                <div class="col g-0">
                    <header for="dateHeure" id="header">Date et heure de l'observation :</header>
                    <input type="datetime-local" id="dateHeure" class="champ" name="date_observation">
                </div>
                <div class="col g-0" id="divLieu">
                    <header for="lieu" id="header">Lieu</header>
                    <input id="lieu" class="champ" name="lieu">
                </div>
            </div>

            <div class="row g-0">
                <div class="col text-center g-0" id="iTemoin">
                <header for="dTemoin" id="header">Témoins :</header>
                    <textarea id="dTemoin" name="temoin"></textarea>
                </div>
            </div>

            <div class="row g-0" id="iEvent">
                <div class="col text-center g-0">
                    <header for="dEvent" id="header">Description :</header>
                    <textarea id="dEvent" name="description"></textarea>
                </div>
            </div>

            <div class="row g-0">
                <div class="col text-center g-0" id="iCorrection">
                    <header for="dCorrection" id="header">Correction(s) ou amélioraions proposées:</header>
                    <textarea id="dCorrection" name="correction_amelioration"></textarea>
                </div>
            </div>
        </div>

        <div class="row g-0">
            <div class="col g-0">
                <div id="separation"></div>
            </div>
        </div>
        
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-1 g-0">
                    <input type="checkbox" id="checkSup" name="avis_superieur">
                </div>
                <div class="col g-0" id="Sup">
                    <header for="nameSup" id="headerSup">Nom du superviseur</header>
                    <label for="nameSup" id="labelSup">, j'ai avisé mon supérieur immédiat</label>
                    <input type="text" id="nameSup" name="nom_superieur">
                    <label for="dateHeure" id="headerHeureSup">Date :</label>
                    <input type="datetime-local" id="dateHeureSup" class="champ" name="date_avis">
                </div>
            </div>
        </div>

        <hr style="height: 3px;">

        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <button type="submit" class="btn btn-outline-light btn-lg">Envoyer</button>
            </div>
        </div>
    </form>

</div>
@endsection









