@extends ('layout')
@section ('titre','Accident de travail')
@section ('contenu')

    <div class="container-fluid">
        <div class="container-fluid g-0 sign">
            <div class="mt-3 bigTitleAT">
                <div class="row g-0">
                    <div class="col-10 offset-col-3 text-center m-4 g-0">
                        <h3 class="fontAT">Déclaration d'un accident de travail<h3>
                    </div>
                </div>
            </div>
        </div>

        <form action="post">
            <div class="container-fluid zoneAT">
                <div class="row g-0 mt">
                    <h3 class="fontAT">Identification</h3>
                </div>

                <div class="row g-0 mb-3">
                    <header class="fontAT"for="nom">Nom complet</header>
                    <input id="nom" type="text" class="inputAT">

                    <header class="fontAT" for="matricule">Matricule</header>
                    <input id="matricule" type="text" class="inputAT">
                </div>

                <div class="row g-0 mb-3">
                    <header class="fontAT" for="fonction">Fonction lors de l'évènement</header>
                    <input id="fonction" type="text" class="inputAT">
                </div>
            </div>

            <div class="container-fluid zoneAT">
                <div class="row g-0 mt">
                    <h3 class="fontAT">Description de l'évènement</h3>
                </div>

                <div class="row g-0 mb-3">
                    <header class="fontAT" for="date">Date</header>
                    <input type="datetime-local" id="date" style="width: 150px;" class="inputAT">
                </div>

                <div class="row g-0 mb-3">
                    <header class="fontAT">Endroit de l'évènement</header>
                    <input type="text" class=" inputAT" id="endroit">
                    <header class="fontAT">Secteur d'activité</header>
                    <input type="text" class=" inputAT" id="secteur">
                </div>

                <div class="row g-0 mb-3">
                    <header class="fontAT" for="temoin">Témoins(s)</header>
                    <input class="mb-1  inputAT" type="text" placeholder="Nom témoin" id="temoin">
                    <input class=" inputAT" type="text" placeholder="Nom témoin" id="temoin2">
                </div>
            </div>

            <div class="container-fluid zoneAT">
                <div class="row g-0 mt">
                    <h3 class="fontAT">Nature et site de la blessure</h3>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Tête</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="tete">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Visage</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="visage">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Nez</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="nez">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Yeux</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="oeilG">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="oeilD">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Oreilles</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="oreilleG">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="oreilleD">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Torse</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="torse">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Poumon</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="poumon">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Bras</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="brasG">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="brasD">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Épaules</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="epauleG">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="epauleD">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Coudes</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="coudeG">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="coudeD">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Poignets</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="poignetG">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="poignetD">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Mains</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="mainG">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="mainD">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Doigts</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="doigts">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Dos</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="dos">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Hanche</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="hanche">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Jambes</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="jambeG">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="jambeD">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Genoux</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="genouG">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="genouD">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Pieds</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="piedG">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="piedD">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Orteils</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="orteil">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Chevilles</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="chevilleG">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="chevilleD">
                    </div>
                    <div class="col-2">
                        <p class="fontAT">D</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneAT">
                <div class="row g-0 mt">
                    <h3 class="fontAT">Description de la blessure</h3>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Brûlure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="brulure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Engelure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="engelure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Commotion cérébrale</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="commotion">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Corps étranger</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="corpsEtranger">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Coupure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="coupure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Lacération</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="laceration">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Déchirure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="dechirure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Douleur au dos</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="douleurDos">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Égratignure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="egratignure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Éraflure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="eraflure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Piqûre</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="piqure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Écharde</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="echarde">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Entorse</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="entorse">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Élongation</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="elongation">
                        <p class="fontAT">Élongation</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="elongation">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Contusion</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="contusion">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Foulure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="foulure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Luxation</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="luxation">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Fracture</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="fracture">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Amputation</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="amputation">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Irritation</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="irritation">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Infection</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="infection">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Inhalation</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="inhalation">
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneAT">
                <div class="row g-0 mt">
                    <h3 class="fontAT">Avez-vous subis de la violence</h3>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p class="fontAT">Physique</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="physique">
                    </div>
                    <div class="col-4">
                        <p class="fontAT">Verbale</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="verbale">
                    </div>
                </div>
            </div>

            <div class="container-fluid zoneAT">
                <div class="row g-0 mt">
                    <h3 class="fontAT">Décriver la tâche effectuée et comment s'est produit la blessure</h3>
                </div>

                <div class="row g-0 mb-3">
                    <textarea class="resize inputAT" aria-label="With textarea" id="tache"></textarea>
                </div>
            </div>

            <div class="container-fluid zoneAT">
                <div class="row g-0 mb-3 mt">
                    <header class="fontAT" for="premierSoin">Premier soins</header>
                    <input class=" inputAT" type="text" placeholder="Nom" id="premierSoin">
                    <header class="fontAT" for="secouriste">Secouriste</header>
                    <input class=" inputAT" type="text" placeholder="Nom" id="secouriste">
                </div>
            </div>

            <div class="container-fluid zoneAT">
                <div class="row g-0 mt">
                    <div class="col-10">
                        <p class="fontAT">Accident ne nécessitant aucune absence</p>
                    </div>
                    <div class="col-2 text-center">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="aucuneAbsence" style="vertical-align:-webkit-baseline-middle;">
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-10">
                        <p class="fontAT">Accident nécessitant une consultation médicale</p>
                    </div>
                    <div class="col-2 text-center align-middle">
                        <input class="form-check-input inputAT" type="checkbox" value="" id="consultation" style="vertical-align:-webkit-baseline-middle;">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8"></div>
                <div class="col-4">
                    <button type="button" class="btn btn-outline-light btn-lg">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection