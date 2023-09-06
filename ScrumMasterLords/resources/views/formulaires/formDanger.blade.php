@extends('layout')
@section('contenu')

<div class="container-fluid g-0">

    <div class="container-fluid g-0" id="titre1">
        <div class="card mt-3 g-0" style="width: 750px" >
            <div class="row g-0">
                <div class="col-10 offset-col-3 text-center m-4 g-0">
                    <h3 id="titre2">Signalement d'une situation dangereuse, d'un acte de violence ou d'un "passé proche"<h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid g-0">
        <div class="card mt-3 g-0">
            <div class="row g-0">
                    <div class="col text-center m-2 g-0">
                        <h3>Identification<h3>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <div class="container-fluid g-0">
        <form>
            <div class="row g-0">
                <div class="col-lg-3 offset-lg-2 col-6 mt-5 g-0">
                    <header for="nom">Nom</header>
                    <input id="nom">
                </div>
                <div class="col-lg-3 col-6 mt-5 g-0">
                    <header for="prenom">Prénom</header>
                    <input id="prenom">
                </div>

                <div class="col-lg-3 col-12 mt-5 g-0">
                    <header for="matricule">Matricule</header>
                    <input id="matricule">
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-3 offset-lg-2 col-6 mt-5 g-0">
                    <header for="fonction">Fonction au moment de l'évènement</header>
                    <input id="fonction" style="width: 270px">
                </div>
                <div class="col-lg-4 col-6 mt-5 g-0">
                    <header for="secteur">Secteur d'activité</header>
                    <input id="secteur">
                </div>
            </div>
           
    </div>

    <div class="container-fluid g-0">
        <div class="card mt-5 g-0">
            <div class="row g-0">
                <div class="col text-center m-4 g-0">
                    <h3>Description de la situation ou du "passé proche"<h3>
                </div>
            </div>
        </div>
    </div>

    </form>

</div>
@endsection









