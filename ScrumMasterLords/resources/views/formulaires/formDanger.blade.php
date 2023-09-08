@extends('layout')
@section('contenu')

<div class="container-fluid g-0">

    <div class="container-fluid g-0" id="sign">
        <div class="mt-3 g-0" id="bgtitre1" >
            <div class="row g-0">
                <div class="col-10 offset-col-3 text-center m-4 g-0">
                    <h3>Signalement d'une situation dangereuse, d'un acte de violence ou d'un "passé proche"<h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid g-0">
        <div class="mt-3 g-0" id="bgtitre2">
            <div class="row g-0">
                    <div class="col text-center m-2 g-0">
                        <h3 id="titre2">Identification<h3>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <div class="container-fluid g-0" id="bgID">
        <form>
            <div class="row g-0">
                <div class="col-lg-3 offset-lg-2 col-6 mt-3 g-0">
                    <header for="nom" id="header">Nom</header>
                    <input id="nom" class="champ">
                </div>
                <div class="col-lg-3 col-6 mt-3 g-0">
                    <header for="prenom" id="header">Prénom</header>
                    <input id="prenom" class="champ">
                </div>

                <div class="col-lg-3 col-12 mt-5 g-0">
                    <header for="matricule" id="header">Matricule</header>
                    <input id="matricule" class="champ">
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-3 offset-lg-2 col-6 mt-5 g-0">
                    <header for="fonction" id="header">Fonction au moment de l'évènement</header>
                    <input id="fonction" class="champ">
                </div>
                <div class="col-lg-4 col-6 g-0" id="divSecteur">
                    <header for="secteur" id="header">Secteur d'activité</header>
                    <input id="secteur" class="champ">
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

    <div class="container-fluid g-0" id="description">
        <div class="row g-0">
            <div class="col g-0">
                <header for="dateHeure" id="header">Date et heure de l'observation :</header>
                <input type="datetime-local" id="dateHeure" class="champ">
            </div>
            <div class="col g-0" id="divLieu">
                <header for="lieu" id="header">Lieu</header>
                <input id="lieu" class="champ">
            </div>
        </div>

        <div class="row" id="iEvent">
            <div class="col text-center">
                <header for="dEvent" id="header">Description :</header>
                <textarea id="dEvent"></textarea>
            </div>
        </div>
    </div>
    </form>

</div>
@endsection









