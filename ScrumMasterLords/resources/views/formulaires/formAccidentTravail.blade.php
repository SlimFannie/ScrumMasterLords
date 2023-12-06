@extends ('layout')
@section ('titre','Accident de travail')
@section ('contenu')

<div class="container-fluid">
    <div class="container-fluid g-0 mb-2 sign mb-3">
        <div class="mt-3 bigTitleForm">
            <div class="row g-0 mb-2">
                <div class="col-10 text-center m-4 g-0 mb-2 mx-auto">
                    <h3 style="color: white;">Déclaration d'un accident de travail<h3>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('store.accident', $username) }}">
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
                        <h5 class="textForm"><span class="underline textForm">Nom complet:</span> {{Session::get('user.prenom')}} {{Session::get('user.nom')}}</h5>
                        <h5 class="textForm mb-3"><span class="underline textForm">Numéro d'employé:</span> {{Session::get('user.matricule')}}</h5>
                        <!-- Bouton modal identifiant inexacte -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Ces identifiants sont inexactes?  
                        </button>
                        <!---->
                    </div>
                </div>

                <div class="container-fluid zoneForm">
                    <div class="row g-0 mb-3">
                        <h4 class="titleForm text-center">Description de l'accident</h4>
                    </div>
                    <div class="row g-0 mb-3">
                        <div class="form-floating text-center mb-2">
                            <input type="text" class="form-control inputForm" name="fonction" id="fonction" placeholder="Menuisier" value="{{ old('fonction') }}">
                            <label for="fonction" id="labelFonction" class="px-4">Fonction lors de l'accident</label>
                        </div>
                        <div class="form-floating text-center mb-2">
                            <input type="datetime-local" class="form-control inputForm" name="dateHeure" id="dateHeure" value="{{ old('dateHeure') }}">
                            <label for="dateHeure" id="labelDateHeure" class="px-4 ">Date et heure de l'accident</label>
                        </div>
                        <div class="form-floating text-center mb-2">
                            <input type="text" class="form-control inputForm" name="endroit" id="endroit" value="{{ old('endroit') }}" placeholder="Dans l'entrée de l'hôtel de ville.">
                            <label for="endroit" id="labelEndroit" class="px-4">Endroit où l'accident s'est produit</label>
                        </div>
                        <div class="form-floating text-center mb-2">
                            <input type="text" class="form-control inputForm" name="secteur" id="secteur" value="{{ old('secteur') }}" placeholder="Secteur">
                            <label for="secteur" id="labelSecteur" class="px-4">Secteur d'activité</label>
                        </div>

                        <div class="input-group text-center">
                            <span class="input-group-text">
                                <label for="temoins" id="labelTemoins" class="px-2">Témoins(s)</label>
                                <input type="text" class="form-control inputForm" name="temoins1" id="temoin1" placeholder="Témoin 1" value="{{ old('temoins') }}">
                                <input type="text" class="form-control inputForm" name="temoins2" id="temoin2" placeholder="Témoin 2" value="{{ old('temoins') }}">    
                            </span>
                        </div>
                    </div>
                </div>

                <div class="container-fluid zoneForm">
                    <div class="row g-0 mb-3">
                        <h4 class="titleForm text-center">Nature et site de la blessure</h4>
                    </div>
                    <div class="row g-0 mb-3">
                        <p class="textForm text-center">Cochez, s'il y a lieu, le côté droit ou le côté gauche.</p>

                        <div class="input-group">
                            <span class="input-group-text row g-0">
                                <div class="input-group" name="latete">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="checkbox" id="tete" name="tete" value="tete">
                                        <label class="form-check-label" for="tete">Tête, visage, yeux, oreille</label>
                                    </div>
                                    <div class="form-check  form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="directionGauche" name="tete" value="gauche">
                                        <label class="form-check-label" for="directionGauche">Gauche</label>
                                    </div>
                                    <div class="form-check  form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="directionDroite" name="tete" value="droite">
                                        <label class="form-check-label" for="directionDroite">Droite</label>
                                    </div>
                                </div>
                                <div class="input-group" name="letorse">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="checkbox" id="torse" name="torse" value="1">
                                        <label class="form-check-label" for="torse">Torse</label>
                                    </div>
                                </div>
                                <div class="input-group" name="lespoumons">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="checkbox" id="poumon" name="poumon" value="1">
                                        <label class="form-check-label" for="poumon">Poumon</label>
                                    </div>
                                </div>
                                <div class="input-group" name="lesbras">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="checkbox" id="bras" name="bras" value="1">
                                        <label class="form-check-label" for="bras">Bras, épaule, coude</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="directionGauche" name="bras" value="1">
                                        <label class="form-check-label" for="directionGauche">Gauche</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="directionDroite" name="bras" value="1">
                                        <label class="form-check-label" for="directionDroite">Droite</label>
                                    </div>
                                </div>


                                <div class="input-group" name="lesmains">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="checkbox" id="main" name="main" value="1">
                                        <label class="form-check-label" for="main">Poignet, main, doigt</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="directionGauche" name="main" value="1">
                                        <label class="form-check-label" for="directionGauche">Gauche</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="directionDroite" name="main" value="1">
                                        <label class="form-check-label" for="directionDroite">Droite</label>
                                    </div>
                                </div>

                                <div class="input-group" name="ledos">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="checkbox" id="dos" name="dos" value="1">
                                        <label class="form-check-label" for="main">Dos</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="haut" name="dos" value="1">
                                        <label class="form-check-label" for="haut">Haut</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="bas" name="dos" value="1">
                                        <label class="form-check-label" for="directionDroite">Bas</label>
                                    </div>
                                </div>

                                <div class="input-group" name="leshanches">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="checkbox" id="hanche" name="hanche" value="1">
                                        <label class="form-check-label" for="hanche">Hanche</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="directionGauche" name="hanche" value="1">
                                        <label class="form-check-label" for="directionGauche">Gauche</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="directionDroite" name="hanche" value="1">
                                        <label class="form-check-label" for="directionDroite">Droite</label>
                                    </div>
                                </div>

                                <div class="input-group" name="lesjambes">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="checkbox" id="jambe" name="jambe" value="1">
                                        <label class="form-check-label" for="jambe">Jambe, genou</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="directionGauche" name="jambe" value="1">
                                        <label class="form-check-label" for="directionGauche">Gauche</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="radio" id="directionDroite" name="jambe" value="1">
                                        <label class="form-check-label" for="directionDroite">Droite</label>
                                    </div>
                                </div>

                                <div class="input-group" name="autre">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input inputForm" type="checkbox" id="autre" name="autre" value="1">
                                        <label class="form-check-label" for="autre">Autre</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-input inputForm" type="radio" id="directionGauche" name="jambe" value="1">
                                        <label class="form-check-label" for="directionGauche">Gauche</label>
                                    </div>
                                </div>
                            </span>
                        </div>    
                    </div>
                </div>

                <div class="container-fluid zoneForm">
                    <div class="row g-0 mb-3">
                        <h4 class="titleForm text-center">Description de la blessure (à cocher)</h4>
                    </div>
                    <div class="input-group" name="descriptionBlessure mb-3">
                        <span class="input-group-text row g-0 mb-3" style="text-align: left;">
                            <div class="form-check">
                                <input class="form-check-input inputForm" type="checkbox" id="brulure" name="brulure" value="1">
                                <label class="form-check-label" for="brulure">Brûlure, engelure</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input inputForm" type="checkbox" id="commotion" name="commotion" value="1">
                                <label class="form-check-label" for="commotion">Commotion cérébrale</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input inputForm" type="checkbox" id="corpsEtranger" name="corpsEtranger" value="1">
                                <label class="form-check-label" for="corpsEtranger">Corps étranger</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input inputForm" type="checkbox" id="coupure" name="coupure" value="1">
                                <label class="form-check-label" for="coupure">Coupure, lacération, déchirure</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input inputForm" type="checkbox" id="dos" name="dos" value="1">
                                <label class="form-check-label" for="dos">Douleur au dos</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input inputForm" type="checkbox" id="egratignure" name="egratignure" value="1">
                                <label class="form-check-label" for="egratignure">Égratignure, contusion, foulure</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input inputForm" type="checkbox" id="fracture" name="fracture" value="1">
                                <label class="form-check-label" for="fracture">Fracture, amputation</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input inputForm" type="checkbox" id="irritation" name="irritation" value="1">
                                <label class="form-check-label" for="irritation">Irritation, infection</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input inputForm" type="checkbox" id="inhalation" name="inhalation" value="1">
                                <label class="form-check-label" for="inhalation">Inhalation</label>
                            </div>
                        </span>
                        <div class="form-check input-group mb-3">
                            <div class="container-fluid mb-3">
                                <input class="form-check-input inputForm" type="checkbox" id="autre" name="autre" value="1">
                                <label class="form-check-label textForm" for="autre">Autre</label>
                            </div>
                            <div class="container-fluid">
                                <input class="form-control inputForm" type="text" id="autreText" name="autreText" placeholder="Décrivez">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid zoneForm">
                    <div class="row g-0 mb-3">
                        <h4 class="titleForm text-center">Violence (à cocher)</h4>
                    </div>
                    <div class="form-check input-group mb-3 row" name="violence">
                        <div class="container-fluid">
                            <input class="form-check-input inputForm" type="checkbox" id="physique" name="physique" value="1">
                            <label class="form-check-label textForm" for="physique">Physique</label>
                        </div>
                        <div class="container-fluid">
                            <input class="form-check-input inputForm" type="checkbox" id="verbale" name="verbale" value="1">
                            <label class="form-check-label textForm" for="verbale">Verbale</label>
                        </div>
                    </div>
                </div>

                <div class="container-fluid zoneForm">
                    <div class="row g-0 mb-3">
                        <h4 class="titleForm text-center">Décrivez la tâcher effectuée et comment s'est produit la blessure.</h4>
                    </div>
                    <input class="form-control inputForm mb-3" type="textarea" id="histoire" name="histoire">
                    <div class="form-check input-group mb-3 row">
                        <div class="container-fluid mb-3">
                            <input class="form-check-input inputForm" type="checkbox" id="secouriste" name="secouriste" value="1">
                            <label class="form-check-label textForm" for="secouriste">Secouriste</label>
                        </div>
                        <div class="container-fluid">
                            <input class="form-control inputForm" type="text" id="secouristeText" name="secouristeText" placeholder="Nom"">
                        </div>
                    </div>
                </div>

                <div class="container-fluid zoneForm">
                    <div class="row g-0 mb-3">
                        <h4 class="titleForm text-center">Détails sur la durée de l'absence</h4>
                    </div>
                    <div class="form-check input-group mb-3 row" name="absence">
                        <div class="container-fluid">
                            <input class="form-check-input inputForm" type="checkbox" id="aucune" name="aucune" value="1">
                            <label class="form-check-label textForm" for="aucune">Accident de nécessitant aucune absence</label>
                        </div>
                        <div class="container-fluid">
                            <input class="form-check-input inputForm" type="checkbox" id="consultation" name="consultation" value="1">
                            <label class="form-check-label textForm" for="consultation">Accident nécessitant une consultation médicale</label>
                        </div>
                    </div>
                </div>

                <div class="container-fluid zoneForm">
                    <div class="row g-0 mb-3">
                        <h4 class="titleForm text-center">Qui était votre supérieur au moment de l'accident?</h4>
                    </div>
                    <select class="form-select mb-3" name="superieur" id="superieur">
                        <option selected>Choisissez...</option>
                        @if (count((array)$superieurs))
                            @foreach ($superieurs as $superieur)
                            <option value="{{$superieur->matricule}}">{{$superieur->prenom}} {{$superieur->nom}}</option>
                            @endforeach
                        @else
                            <option>Erreur, veuillez contacter un administrateur.</option>
                        @endif
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Envoyer le formulaire</button>
                <!-- Modal identifiant inexacte -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Ces identifiants sont inexactes?</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="exampleModalLabel">Veuillez contacter un administrateur afin de procéder à la mise à jour de vos identifiants.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection