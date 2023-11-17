@extends ('layout')
@section ('titre','Accident de travail')
@section ('contenu')

    <div class="container-fluid">
        <div class="container-fluid g-0 mb-2 sign mb-3 marginNav">
            <div class="mt-3 bigTitleForm">
                <div class="row g-0 mb-2">
                    <div class="col-10 offset-col-3 text-center m-4 g-0 mb-2">
                        <h3>Déclaration d'un accident de travail<h3>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('store.accident', Session::get('username')) }}">
            @csrf
                <div class="container-fluid zoneForm">
                    <div class="row g-0 mt mb-2 text-center">
                        <h3 class="titleForm">Identification</h3>
                    </div>
       
                    <div class="row g-0 mb-3">
                        @if($errors->has('nom'))
                        <header class="textFormAlert"for="nom">{{ $errors->first('nom') }}</header>
                        <input name="nom" id="nom" type="text" class="inputFormAlert">
                        @else
                        <header class="textForm"for="nom">Nom de famille</header>
                        <input name="nom" id="nom" type="text" class="inputForm">
                        @endif
                        @if($errors->has('prenom'))
                        <header class="textFormAlert"for="prenom">{{ $errors->first('prenom') }}</header>
                        <input name="prenom" id="prenom" type="text" class="inputFormAlert">
                        @else
                        <header class="textForm"for="prenom">Prénom</header>
                        <input name="prenom" id="prenom" type="text" class="inputForm">
                        @endif
                        @if ($errors->has('matricule'))
                        <header class="textFormAlert" for="matricule">{{ $errors->first('matricule') }}</header>
                        <input name="matricule_usager" id="matricule" type="text" class="inputFormAlert">
                        @else
                        <header class="textForm" for="matricule">Matricule</header>
                        <input name="matricule_usager" id="matricule" type="text" class="inputForm">
                        @endif
                    </div>

                    <div class="row g-0 mb-3">
                        @if($errors->has('fonction'))
                        <header class="textFormAlert" for="fonction">{{ $errors->first('fonction') }}</header>
                        <input name="fonction" id="fonction" type="text" class="inputFormAlert">
                        @else
                        <header class="textForm" for="fonction">Fonction lors de l'évènement</header>
                        <input name="fonction" id="fonction" type="text" class="inputForm">
                        @endif
                    </div>
                </div>

                <div class="container-fluid zoneForm">
                    <div class="row g-0 mt mb-2 text-center">
                        <h3 class="titleForm">Description de l'évènement</h3>
                    </div>

                    <div class="row g-0 mb-3">
                        @if($errors->has('dateHeure'))
                        <header class="textFormAlert" for="date">{{ $errors->first('dateHeure') }}</header>
                        <input name="date_accident" type="datetime-local" id="date" style="width: 150px;" class="inputFormAlert">
                        @else
                        <header class="textForm" for="date">Date</header>
                        <input name="date_accident" type="datetime-local" id="date" style="width: 150px;" class="inputForm">
                        @endif
                    </div>

                    <div class="row g-0 mb-3">
                        @if($errors->has('lieu'))
                        <header class="textFormAlert">{{ $errors->first('lieu') }}</header>
                        <input name="endroit" type="text" class="inputFormAlert" id="endroit">
                        @else
                        <header class="textForm">Endroit de l'évènement</header>
                        <input name="endroit" type="text" class=" inputForm" id="endroit">
                        @endif
                        <header class="textForm">Secteur d'activité</header>
                        <input name="secteur" type="text" class=" inputForm" id="secteur">
                    </div>
                    <div class="row g-0 mb-3">
                        <header class="textForm" for="temoin">Témoins(s)</header>
                        <input name="nom_temoin1" class="mb-1  inputForm" type="text" placeholder="Nom témoin" id="temoin">
                        <input name="nom_temoin2" class=" inputForm" type="text" placeholder="Nom témoin" id="temoin2">
                    </div>
                </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt mb-2 text-center">
                    <h3 class="titleForm">Nature et site de la blessure</h3>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="tete" class="form-check-input inputForm" type="checkbox" value=1 id="tete">
                    </div>
                    <div class="col-10">
                        <label for="tete" class="textForm">Tête</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="visage" class="form-check-input inputForm" type="checkbox" value=1 id="visage">
                    </div>
                    <div class="col-10">
                        <label for="visage" class="textForm">Visage</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="nez" class="form-check-input inputForm" type="checkbox" value=1 id="nez">
                    </div>
                    <div class="col-10">
                        <label for="nez" class="textForm">Nez</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="yeux" class="form-check-input inputForm" type="checkbox" value=1 id="yeux">
                    </div>
                    <div class="col-5">
                        <label for="yeux" class="textForm">Yeux</label>
                    </div>
                    <div class="col-1">
                        <input name="oeil_gauche" class="form-check-input inputForm" type="checkbox" value=1 id="oeilG">
                    </div>
                    <div class="col-2">
                        <label for="oeilG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input name="oeil_droit" class="form-check-input inputForm" type="checkbox" value=1 id="oeilD">
                    </div>
                    <div class="col-1">
                        <label for="oeilD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="oreilles" class="form-check-input inputForm" type="checkbox" value=1 id="oreilles">
                    </div>
                    <div class="col-5">
                        <label for="oreilles" class="textForm">Oreilles</label>
                    </div>
                    <div class="col-1">
                        <input name="oreille_gauche" class="form-check-input inputForm" type="checkbox" value=1 id="oreilleG">
                    </div>
                    <div class="col-2">
                        <label for="oreilleG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input name="oreille_droite" class="form-check-input inputForm" type="checkbox" value=1 id="oreilleD">
                    </div>
                    <div class="col-1">
                        <label for="oreilleD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="torse" class="form-check-input inputForm" type="checkbox" value=1 id="torse">
                    </div>
                    <div class="col-10">
                        <label for="torse" class="textForm">Torse</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="poumon" class="form-check-input inputForm" type="checkbox" value=1 id="poumon">
                    </div>
                    <div class="col-10">
                        <label for="poumon" class="textForm">Poumon</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="bras" class="form-check-input inputForm" type="checkbox" value=1 id="bras">
                    </div>
                    <div class="col-5">
                        <label for="bras" class="textForm">Bras</label>
                    </div>
                    <div class="col-1">
                        <input name="bras_gauche" class="form-check-input inputForm" type="checkbox" value=1 id="brasG">
                    </div>
                    <div class="col-2">
                        <label for="brasG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input name="bras_droite" class="form-check-input inputForm" type="checkbox" value=1 id="brasD">
                    </div>
                    <div class="col-1">
                        <label for="brasD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="epaules" class="form-check-input inputForm" type="checkbox" value=1 id="epaules">
                    </div>
                    <div class="col-5">
                        <label for="epaules" class="textForm">Épaules</label>
                    </div>
                    <div class="col-1">
                        <input name="epaule_gauche" class="form-check-input inputForm" type="checkbox" value=1 id="epauleG">
                    </div>
                    <div class="col-2">
                        <label for="epauleG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input name="epaule_droite" class="form-check-input inputForm" type="checkbox" value=1 id="epauleD">
                    </div>
                    <div class="col-1">
                        <label for="epauleD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="coudes" class="form-check-input inputForm" type="checkbox" value=1 id="coudes">
                    </div>
                    <div class="col-5">
                        <label for="coudes" class="textForm">Coudes</label>
                    </div>
                    <div class="col-1">
                        <input name="coude_gauche" class="form-check-input inputForm" type="checkbox" value=1 id="coudeG">
                    </div>
                    <div class="col-2">
                        <label for="coudeG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input name="coude_droite" class="form-check-input inputForm" type="checkbox" value=1 id="coudeD">
                    </div>
                    <div class="col-1">
                        <label for="coudeD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="poignets" class="form-check-input inputForm" type="checkbox" value=1 id="poignets">
                    </div>
                    <div class="col-5">
                        <label for="poignets" class="textForm">Poignets</label>
                    </div>
                    <div class="col-1">
                        <input name="poignet_gauche" class="form-check-input inputForm" type="checkbox" value=1 id="poignetG">
                    </div>
                    <div class="col-2">
                        <label for="poignetG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input name="poignet_droite" class="form-check-input inputForm" type="checkbox" value=1 id="poignetD">
                    </div>
                    <div class="col-1">
                        <label for="poignetD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="mains" class="form-check-input inputForm" type="checkbox" value=1 id="mains">
                    </div>
                    <div class="col-5">
                        <label for="mains" class="textForm">Mains</label>
                    </div>
                    <div class="col-1">
                        <input name="main_gauche" class="form-check-input inputForm" type="checkbox" value=1 id="mainG">
                    </div>
                    <div class="col-2">
                        <label for="mainG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input name="main_droite" class="form-check-input inputForm" type="checkbox" value=1 id="mainD">
                    </div>
                    <div class="col-1">
                        <label for="mainD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="doigt" class="form-check-input inputForm" type="checkbox" value=1 id="doigts">
                    </div>
                    <div class="col-10">
                        <label for="doigts" class="textForm">Doigts</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="dos" class="form-check-input inputForm" type="checkbox" value=1 id="dos">
                    </div>
                    <div class="col-10">
                        <label for="dos" class="textForm">Dos</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="hanche" class="form-check-input inputForm" type="checkbox" value=1 id="hanche">
                    </div>
                    <div class="col-10">
                        <label for="hanche" class="textForm">Hanche</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="jambes" class="form-check-input inputForm" type="checkbox" value=1 id="jambes">
                    </div>
                    <div class="col-5">
                        <label for="jambes" class="textForm">Jambes</label>
                    </div>
                    <div class="col-1">
                        <input name="jambe_gauche" class="form-check-input inputForm" type="checkbox" value=1 id="jambeG">
                    </div>
                    <div class="col-2">
                        <label for="jambeG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input name="jambe_droite" class="form-check-input inputForm" type="checkbox" value=1 id="jambeD">
                    </div>
                    <div class="col-1">
                        <label for="jambeD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="genoux" class="form-check-input inputForm" type="checkbox" value=1 id="genoux">
                    </div>
                    <div class="col-5">
                        <label for="genoux" class="textForm">Genoux</label>
                    </div>
                    <div class="col-1">
                        <input name="genoux_gauche" class="form-check-input inputForm" type="checkbox" value=1 id="genouG">
                    </div>
                    <div class="col-2">
                        <label for="genouG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input name="genoux_droite" class="form-check-input inputForm" type="checkbox" value=1 id="genouD">
                    </div>
                    <div class="col-1">
                        <label for="genouD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="pieds" class="form-check-input inputForm" type="checkbox" value=1 id="pieds">
                    </div>
                    <div class="col-5">
                        <label for="pieds" class="textForm">Pieds</label>
                    </div>
                    <div class="col-1">
                        <input name="pied_gauche" class="form-check-input inputForm" type="checkbox" value=1 id="piedG">
                    </div>
                    <div class="col-2">
                        <label for="piedG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input name="pied_droite" class="form-check-input inputForm" type="checkbox" value=1 id="piedD">
                    </div>
                    <div class="col-1">
                        <label for="piedD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="orteils" class="form-check-input inputForm" type="checkbox" value=1 id="orteils">
                    </div>
                    <div class="col-10">
                        <label for="orteils" class="textForm">Orteils</label>
                    </div>
                </div>

                <div class="row g-0 mb-3">
                    <div class="col-2">
                        <input name="chevilles" class="form-check-input inputForm" type="checkbox" value=1 id="chevilles">
                    </div>
                    <div class="col-5">
                        <label for="chevilles" class="textForm">Chevilles</label>
                    </div>
                    <div class="col-1">
                        <input name="cheville_gauche" class="form-check-input inputForm" type="checkbox" value=1 id="chevilleG">
                    </div>
                    <div class="col-2">
                        <label for="chevilleG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input name="cheville_droite" class="form-check-input inputForm" type="checkbox" value=1 id="chevilleD">
                    </div>
                    <div class="col-1">
                        <label for="chevilleD" class="textForm">D</label>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt mb-2 text-center">
                    <h3 class="titleForm">Description de la blessure</h3>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="brulure" class="form-check-input inputForm" type="checkbox" value=1 id="brulure">
                    </div>
                    <div class="col-10">
                        <label for="brulure" class="textForm">Brûlure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="engelure" class="form-check-input inputForm" type="checkbox" value=1 id="engelure">
                    </div>
                    <div class="col-10">
                        <label for="engelure" class="textForm">Engelure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="commotion_cerebrale" class="form-check-input inputForm" type="checkbox" value=1 id="commotion">
                    </div>
                    <div class="col-10">
                        <label for="commotion" class="textForm">Commotion cérébrale</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="corps_etranger" class="form-check-input inputForm" type="checkbox" value=1 id="corpsEtranger">
                    </div>
                    <div class="col-10">
                        <label for="corpsEtranger" class="textForm">Corps étranger</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="coupure" class="form-check-input inputForm" type="checkbox" value=1 id="coupure">
                    </div>
                    <div class="col-10">
                        <label for="coupure" class="textForm">Coupure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="laceration" class="form-check-input inputForm" type="checkbox" value=1 id="laceration">
                    </div>
                    <div class="col-10">
                        <label for="laceration" class="textForm">Lacération</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="dechirure" class="form-check-input inputForm" type="checkbox" value=1 id="dechirure">
                    </div>
                    <div class="col-10">
                        <label for="dechirure" class="textForm">Déchirure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="douleur_dos" class="form-check-input inputForm" type="checkbox" value=1 id="douleurDos">
                    </div>
                    <div class="col-10">
                        <label for="douleurDos" class="textForm">Douleur au dos</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="egratignure" class="form-check-input inputForm" type="checkbox" value=1 id="egratignure">
                    </div>
                    <div class="col-10">
                        <label for="egratignure" class="textForm">Égratignure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="eraflure" class="form-check-input inputForm" type="checkbox" value=1 id="eraflure">
                    </div>
                    <div class="col-10">
                        <label for="eraflure" class="textForm">Éraflure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="piqure" class="form-check-input inputForm" type="checkbox" value=1 id="piqure">
                    </div>
                    <div class="col-10">
                        <label for="piqure" class="textForm">Piqûre</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="echarde" class="form-check-input inputForm" type="checkbox" value=1 id="echarde">
                    </div>
                    <div class="col-10">
                        <label for="echarde" class="textForm">Écharde</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="entorse" class="form-check-input inputForm" type="checkbox" value=1 id="entorse">
                    </div>
                    <div class="col-10">
                        <label for="entorse" class="textForm">Entorse</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="elongation" class="form-check-input inputForm" type="checkbox" value=1 id="elongation">
                    </div>
                    <div class="col-10">
                        <label for="elongation" class="textForm">Élongation</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="contusion" class="form-check-input inputForm" type="checkbox" value=1 id="contusion">
                    </div>
                    <div class="col-10">
                        <label for="contusion" class="textForm">Contusion</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="foulure" class="form-check-input inputForm" type="checkbox" value=1 id="foulure">
                    </div>
                    <div class="col-10">
                        <label for="foulure" class="textForm">Foulure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="luxation" class="form-check-input inputForm" type="checkbox" value=1 id="luxation">
                    </div>
                    <div class="col-10">
                        <label for="luxation" class="textForm">Luxation</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="fracture" class="form-check-input inputForm" type="checkbox" value=1 id="fracture">
                    </div>
                    <div class="col-10">
                        <label for="fracture" class="textForm">Fracture</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="amputation" class="form-check-input inputForm" type="checkbox" value=1 id="amputation">
                    </div>                    <div class="col-10">
                        <label for="amputation" class="textForm">Amputation</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="irritation" class="form-check-input inputForm" type="checkbox" value=1 id="irritation">
                    </div>
                    <div class="col-10">
                        <label for="irritation" class="textForm">Irritation</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input name="infection" class="form-check-input inputForm" type="checkbox" value=1 id="infection">
                    </div>
                    <div class="col-10">
                        <label for="infection" class="textForm">Infection</label>
                    </div>
                </div>

                <div class="row g-0 mb-3">
                    <div class="col-2">
                        <input name="inhalation" class="form-check-input inputForm" type="checkbox" value=1 id="inhalation">
                    </div>
                    <div class="col-10">
                        <label for="inhalation" class="textForm">Inhalation</label>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt mb-2 text-center">
                    <h3 class="titleForm">Avez-vous subis de la violence</h3>
                </div>

                <div class="row g-0 mb-3">
                    <div class="col-2">
                        <input name="violence_physique" class="form-check-input inputForm" type="checkbox" value=1 id="physique">
                    </div>
                    <div class="col-10 mb-2">
                        <label for="physique" class="textForm">Physique</label>
                    </div>
                    <div class="col-2">
                        <input name="violence_verbale" class="form-check-input inputForm" type="checkbox" value=1 id="verbale">
                    </div>
                    <div class="col-10">
                        <label for="verbale" class="textForm">Verbale</label>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mb-2 mt text-center">
                    <h3 class="titleForm">Décriver la tâche effectuée et comment s'est produit la blessure</h3>
                </div>

                <div class="row g-0 mb-3">
                    <textarea name="description" class="resize inputForm" aria-label="With textarea" id="tache"></textarea>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mb-3 mt">
                    <header class="textForm" for="premierSoin">Premier soins</header>
                    <input name="premiers_soins" class=" inputForm mb-2" type="text" placeholder="Nom" id="premierSoin">
                    <header class="textForm" for="secouriste">Secouriste</header>
                    <input name="nom_secouriste" class=" inputForm" type="text" placeholder="Nom" id="secouriste">
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mb-2 mt">
                    <div class="col-2">
                        <input name="accident_sans_absence" class="form-check-input inputForm" type="checkbox" value=1 id="aucuneAbsence" style="vertical-align:-webkit-baseline-middle;">
                    </div>
                    <div class="col-10">
                        <label for="aucuneAbsence" class="textForm">Accident ne nécessitant aucune absence</label>
                    </div>
                </div>
                <div class="row g-0 mb-3">
                    <div class="col-2">
                        <input name="accident_avec_consultation_medicale" class="form-check-input inputForm" type="checkbox" value=1 id="consultation" style="vertical-align:-webkit-baseline-middle;">
                    </div>
                    <div class="col-10">
                        <label for="consultation" class="textForm">Accident nécessitant une consultation médicale</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-7"></div>
                <div class="col-5">
                    <button type="submit" class="btn btn-outline-light btn-lg">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection