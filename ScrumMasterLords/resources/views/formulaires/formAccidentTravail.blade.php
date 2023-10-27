@extends ('layout')
@section ('titre','Accident de travail')
@section ('contenu')

    <div class="container-fluid">
        <div class="container-fluid g-0 mb-2 sign mb-3">
            <div class="mt-3 bigTitleForm">
                <div class="row g-0 mb-2">
                    <div class="col-10 offset-col-3 text-center m-4 g-0 mb-2">
                        <h3>Déclaration d'un accident de travail<h3>
                    </div>
                </div>
            </div>
        </div>

        <form action="post">
            <div class="container-fluid zoneForm">
                <div class="row g-0 mt mb-2 text-center">
                    <h3 class="titleForm">Identification</h3>
                </div>

                <div class="row g-0 mb-3">
                    <header class="textForm"for="nom">Nom complet</header>
                    <input id="nom" type="text" class="inputForm">

                    <header class="textForm" for="matricule">Matricule</header>
                    <input id="matricule" type="text" class="inputForm">
                </div>

                <div class="row g-0 mb-3">
                    <header class="textForm" for="fonction">Fonction lors de l'évènement</header>
                    <input id="fonction" type="text" class="inputForm">
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt mb-2 text-center">
                    <h3 class="titleForm">Description de l'évènement</h3>
                </div>

                <div class="row g-0 mb-3">
                    <header class="textForm" for="date">Date</header>
                    <input type="datetime-local" id="date" style="width: 150px;" class="inputForm">
                </div>

                <div class="row g-0 mb-3">
                    <header class="textForm">Endroit de l'évènement</header>
                    <input type="text" class=" inputForm" id="endroit">
                    <header class="textForm">Secteur d'activité</header>
                    <input type="text" class=" inputForm" id="secteur">
                </div>

                <div class="row g-0 mb-3">
                    <header class="textForm" for="temoin">Témoins(s)</header>
                    <input class="mb-1  inputForm" type="text" placeholder="Nom témoin" id="temoin">
                    <input class=" inputForm" type="text" placeholder="Nom témoin" id="temoin2">
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mt mb-2 text-center">
                    <h3 class="titleForm">Nature et site de la blessure</h3>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="tete">
                    </div>
                    <div class="col-10">
                        <label for="tete" class="textForm">Tête</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="visage">
                    </div>
                    <div class="col-10">
                        <label for="visage" class="textForm">Visage</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="nez">
                    </div>
                    <div class="col-10">
                        <label for="nez" class="textForm">Nez</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="yeux">
                    </div>
                    <div class="col-5">
                        <label for="yeux" class="textForm">Yeux</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="oeilG">
                    </div>
                    <div class="col-2">
                        <label for="oeilG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="oeilD">
                    </div>
                    <div class="col-1">
                        <label for="oeilD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="oreilles">
                    </div>
                    <div class="col-5">
                        <label for="oreilles" class="textForm">Oreilles</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="oreilleG">
                    </div>
                    <div class="col-2">
                        <label for="oreilleG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="oreilleD">
                    </div>
                    <div class="col-1">
                        <label for="oreilleD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="torse">
                    </div>
                    <div class="col-10">
                        <label for="torse" class="textForm">Torse</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="poumon">
                    </div>
                    <div class="col-10">
                        <label for="poumon" class="textForm">Poumon</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="bras">
                    </div>
                    <div class="col-5">
                        <label for="bras" class="textForm">Bras</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="brasG">
                    </div>
                    <div class="col-2">
                        <label for="brasG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="brasD">
                    </div>
                    <div class="col-1">
                        <label for="brasD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="epaules">
                    </div>
                    <div class="col-5">
                        <label for="epaules" class="textForm">Épaules</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="epauleG">
                    </div>
                    <div class="col-2">
                        <label for="epauleG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="epauleD">
                    </div>
                    <div class="col-1">
                        <label for="epauleD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="coudes">
                    </div>
                    <div class="col-5">
                        <label for="coudes" class="textForm">Coudes</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="coudeG">
                    </div>
                    <div class="col-2">
                        <label for="coudeG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="coudeD">
                    </div>
                    <div class="col-1">
                        <label for="coudeD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="poignets">
                    </div>
                    <div class="col-5">
                        <label for="poignets" class="textForm">Poignets</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="poignetG">
                    </div>
                    <div class="col-2">
                        <label for="poignetG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="poignetD">
                    </div>
                    <div class="col-1">
                        <label for="poignetD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="mains">
                    </div>
                    <div class="col-5">
                        <label for="mains" class="textForm">Mains</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="mainG">
                    </div>
                    <div class="col-2">
                        <label for="mainG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="mainD">
                    </div>
                    <div class="col-1">
                        <label for="mainD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="doigts">
                    </div>
                    <div class="col-10">
                        <label for="doigts" class="textForm">Doigts</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="dos">
                    </div>
                    <div class="col-10">
                        <label for="dos" class="textForm">Dos</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="hanche">
                    </div>
                    <div class="col-10">
                        <label for="hanche" class="textForm">Hanche</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="jambes">
                    </div>
                    <div class="col-5">
                        <label for="jambes" class="textForm">Jambes</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="jambeG">
                    </div>
                    <div class="col-2">
                        <label for="jambeG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="jambeD">
                    </div>
                    <div class="col-1">
                        <label for="jambeD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="genoux">
                    </div>
                    <div class="col-5">
                        <label for="genoux" class="textForm">Genoux</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="genouG">
                    </div>
                    <div class="col-2">
                        <label for="genouG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="genouD">
                    </div>
                    <div class="col-1">
                        <label for="genouD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="pieds">
                    </div>
                    <div class="col-5">
                        <label for="pieds" class="textForm">Pieds</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="piedG">
                    </div>
                    <div class="col-2">
                        <label for="piedG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="piedD">
                    </div>
                    <div class="col-1">
                        <label for="piedD" class="textForm">D</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="orteils">
                    </div>
                    <div class="col-10">
                        <label for="orteils" class="textForm">Orteils</label>
                    </div>
                </div>

                <div class="row g-0 mb-3">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="chevilles">
                    </div>
                    <div class="col-5">
                        <label for="chevilles" class="textForm">Chevilles</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="chevilleG">
                    </div>
                    <div class="col-2">
                        <label for="chevilleG" class="textForm">G</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="chevilleD">
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
                        <input class="form-check-input inputForm" type="checkbox" value="" id="brulure">
                    </div>
                    <div class="col-10">
                        <label for="brulure" class="textForm">Brûlure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="engelure">
                    </div>
                    <div class="col-10">
                        <label for="engelure" class="textForm">Engelure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="commotion">
                    </div>
                    <div class="col-10">
                        <label for="commotion" class="textForm">Commotion cérébrale</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="corpsEtranger">
                    </div>
                    <div class="col-10">
                        <label for="corpsEtranger" class="textForm">Corps étranger</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="coupure">
                    </div>
                    <div class="col-10">
                        <label for="coupure" class="textForm">Coupure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="laceration">
                    </div>
                    <div class="col-10">
                        <label for="laceration" class="textForm">Lacération</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="dechirure">
                    </div>
                    <div class="col-10">
                        <label for="dechirure" class="textForm">Déchirure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="douleurDos">
                    </div>
                    <div class="col-10">
                        <label for="douleurDos" class="textForm">Douleur au dos</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="egratignure">
                    </div>
                    <div class="col-10">
                        <label for="egratignure" class="textForm">Égratignure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="eraflure">
                    </div>
                    <div class="col-10">
                        <label for="eraflure" class="textForm">Éraflure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="piqure">
                    </div>
                    <div class="col-10">
                        <label for="piqure" class="textForm">Piqûre</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="echarde">
                    </div>
                    <div class="col-10">
                        <label for="echarde" class="textForm">Écharde</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="entorse">
                    </div>
                    <div class="col-10">
                        <label for="entorse" class="textForm">Entorse</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="elongation">
                    </div>
                    <div class="col-10">
                        <label for="elongation" class="textForm">Élongation</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="contusion">
                    </div>
                    <div class="col-10">
                        <label for="contusion" class="textForm">Contusion</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="foulure">
                    </div>
                    <div class="col-10">
                        <label for="foulure" class="textForm">Foulure</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="luxation">
                    </div>
                    <div class="col-10">
                        <label for="luxation" class="textForm">Luxation</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="fracture">
                    </div>
                    <div class="col-10">
                        <label for="fracture" class="textForm">Fracture</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="amputation">
                    </div>                    <div class="col-10">
                        <label for="amputation" class="textForm">Amputation</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="irritation">
                    </div>
                    <div class="col-10">
                        <label for="irritation" class="textForm">Irritation</label>
                    </div>
                </div>

                <div class="row g-0 mb-2">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="infection">
                    </div>
                    <div class="col-10">
                        <label for="infection" class="textForm">Infection</label>
                    </div>
                </div>

                <div class="row g-0 mb-3">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="inhalation">
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
                        <input class="form-check-input inputForm" type="checkbox" value="" id="physique">
                    </div>
                    <div class="col-10 mb-2">
                        <label for="physique" class="textForm">Physique</label>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="verbale">
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
                    <textarea class="resize inputForm" aria-label="With textarea" id="tache"></textarea>
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mb-3 mt">
                    <header class="textForm" for="premierSoin">Premier soins</header>
                    <input class=" inputForm mb-2" type="text" placeholder="Nom" id="premierSoin">
                    <header class="textForm" for="secouriste">Secouriste</header>
                    <input class=" inputForm" type="text" placeholder="Nom" id="secouriste">
                </div>
            </div>

            <div class="container-fluid zoneForm">
                <div class="row g-0 mb-2 mt">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="aucuneAbsence" style="vertical-align:-webkit-baseline-middle;">
                    </div>
                    <div class="col-10">
                        <label for="aucuneAbsence" class="textForm">Accident ne nécessitant aucune absence</label>
                    </div>
                </div>
                <div class="row g-0 mb-3">
                    <div class="col-2">
                        <input class="form-check-input inputForm" type="checkbox" value="" id="consultation" style="vertical-align:-webkit-baseline-middle;">
                    </div>
                    <div class="col-10">
                        <label for="" class="textForm">Accident nécessitant une consultation médicale</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-7"></div>
                <div class="col-5">
                    <button type="button" class="btn btn-outline-light btn-lg">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection