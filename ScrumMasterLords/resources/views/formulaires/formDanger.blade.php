@extends('layout')
@section ('titre','Situation dangereuse')
@section('contenu')

<div class="container-fluid">
    <div class="container-fluid g-0 mb-2 sign mb-3">
        <div class="mt-3 bigTitleForm">
            <div class="row g-0 mb-2">
                <div class="col-10 offset-col-3 text-center m-4 g-0 mb-2 mx-auto">
                    <h3 style="color: white;">Signalement d'une situation dangereuse, d'un acte de violence ou d'un "passé proche"<h3>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('store.danger', $username) }}">
        <div class="container-fluid zoneForm">
            <div class="row g-0 mt mb-2 text-center">
                <h3 class="titleForm">Identification<h3>
            </div>
            
            <div class="row g-0 mb-3">
                <header class="textForm" for="nom" id="header">Nom</header>
                <input class="inputForm" type="text" id="nom" class="champ">

                <header class="textForm" for="prenom" id="header">Prénom</header>
                <input class="inputForm" type="text" id="prenom" class="champ">

                <header class="textForm" for="matricule" id="header">Matricule</header>
                <input class="inputForm" type="text" id="matricule" class="champ">
            </div>

            <div class="row g-0 mb-3">
                <header class="textForm" for="fonction" id="header">Fonction au moment de l'évènement</header>
                <input class="inputForm" type="text" id="fonction" class="champ">

                <header class="textForm" for="secteur" id="header">Secteur d'activité</header>
                <input class="inputForm" type="text" id="secteur" class="champ">
            </div>
        </div>

        <div class="container-fluid zoneForm">
            <div class="row g-0 mt mb-2 text-center">
                <h3 class="titleForm">Description de la situation ou du "passé proche"<h3>
            </div>

            <div class="row g-0 mb-3">
                <header class="textForm" for="dateHeure" id="header">Date et heure de l'observation :</header>
                <input class="inputForm" type="text" type="datetime-local" id="dateHeure" class="champ">

                <header class="textForm" for="lieu" id="header">Lieu</header>
                <input class="inputForm" type="text" id="lieu" class="champ">
            </div>

            <div class="row g-0 mb-3">
                <header class="textForm" for="dTemoin" id="header">Témoins :</header>
                <textarea id="dTemoin" class="resize inputForm"></textarea>
            </div>

            <div class="row g-0 mb-3">
                <header class="textForm" for="dEvent" id="header">Description :</header>
                <textarea id="dEvent" class="resize inputForm"></textarea>
            </div>

            <div class="row g-0 mb-3">
                <header class="textForm" for="dCorrection" id="header">Correction(s) ou amélioraions proposées:</header>
                <textarea id="dCorrection" class="resize inputForm"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <button type="submit" class="btn btn-outline-light btn-lg">Envoyer</button>
            </div>
        </div>
    </form>

</div>
@endsection

