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
        @csrf
        <div>
            @if ($errors->any())
            <div class="alert alert-warning" role="alert">
                <h5>{{$errors->first()}}</h5>
            </div>
            @endif
        </div>
        <div class="container-fluid zoneForm">
            <div class="row g-0 mb-2 text-center">
                <h4 class="titleForm">Identification<h4>
            </div>
            <div class="row g-0 mb-3">

                <p class="textForm"><span class="underline textForm">Nom complet:</span> {{Session::get('user.prenom')}} {{Session::get('user.nom')}}</p>
                <p class="textForm"><span class="underline textForm">Numéro d'employé:</span> {{Session::get('user.matricule')}}</p>
                <!-- Bouton modal identifiant inexacte -->
                <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ces identifiants sont inexactes?  
                </button>
                <!---->
            </div>
        

                <div class="row g-0 mb-3">
                    <header class="textForm" for="fonction" id="header">Fonction au moment de l'évènement</header>
                    <input class="inputForm" type="text" class="champ" name="fonction" id="fonction" placeholder="Menuisier" value="{{ old('fonction') }}">

                    <header class="textForm" for="secteur" id="header">Secteur d'activité</header>
                    <input class="inputForm" type="text" name="secteur" id="secteur" value="{{ old('secteur') }}" placeholder="Secteur" class="champ">
                </div>
            </div>
        </div>

        <div class="container-fluid zoneForm">
            <div class="row g-0 mt mb-2 text-center">
                <h3 class="titleForm">Description de la situation ou du "passé proche"<h3>
            </div>

            <div class="row g-0 mb-3">
                <header class="textForm" for="dateHeure" id="header">Date et heure de l'observation :</header>
                <input class="inputForm" type="datetime-local" name="dateHeure" id="dateHeure" value="{{ old('dateHeure') }}">

                <header class="textForm" for="endroit" id="header">Lieu</header>
                <input class="inputForm" type="text" name="endroit" id="endroit" value="{{ old('endroit') }}" placeholder="Dans l'entrée de l'hôtel de ville." class="champ">
            </div>

            <div class="row g-0 mb-3">
                <header class="textForm" for="dTemoin" id="header">Témoins :</header>
                <textarea id="dTemoin" class="resize inputForm" name="dTemoin" id="dTemoin" value="{{ old('dTemoin') }}"></textarea>
            </div>

            <div class="row g-0 mb-3">
                <header class="textForm" for="dEvent" id="header">Description :</header>
                <textarea id="dEvent" class="resize inputForm" name="dEvent" id="dEvent" value="{{ old('dEvent') }}"></textarea>
            </div>

            <div class="row g-0 mb-3">
                <header class="textForm" for="dCorrection" id="header">Correction(s) ou améliorations proposées:</header>
                <textarea id="dCorrection" class="resize inputForm" name="dCorrection" id="dCorrection" value="{{ old('dCorrection') }}"></textarea>
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

