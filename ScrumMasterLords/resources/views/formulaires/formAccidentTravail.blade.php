@extends('layout')
@section('contenu')

    <div class="container-fluid">
        <form action="post">
            <div class="container-fluid zone">
                <div class="row text-center g-0 title mt">
                    <h1>Identification</h1>
                </div>

                <div class="row g-0 mb-3">
                    <header for="nom">Nom complet</header>
                    <input id="nom" type="text" class="border-3">

                    <header for="matricule">Matricule</header>
                    <input id="matricule" type="text" class="border-3">
                </div>

                <div class="row g-0 mb-3">
                    <header for="fonction">Fonction lors de l'évènement</header>
                    <input id="fonction" type="text" class="border-3">
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row text-center title g-0 mt">
                    <h1>Description de l'évènement</h1>
                </div>

                <div class="row g-0 mb-3">
                    <header for="date">Date</header>
                    <input type="datetime-local" id="date" style="width: 150px;">
                </div>

                <div class="row g-0 mb-3">
                    <header>Endroit de l'évènement</header>
                    <input type="text" class="border-3">
                    <header>Secteur d'activité</header>
                    <input type="text" class="border-3">
                </div>

                <div class="row g-0 mb-3">
                    <header for="temoin">Témoins(s)</header>
                    <input class="mb-1 border-3" type="text" placeholder="Nom témoin" id="temoin">
                    <input class="border-3" type="text" placeholder="Nom témoin" id="temoin2">
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row text-center g-0 title mt">
                    <h1>Nature et site de la blessure</h1>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Tête</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input" type="checkbox" value="" id="tete">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Visage</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input" type="checkbox" value="" id="visage">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Nez</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input" type="checkbox" value="" id="nez">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Yeux</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="oeilG">
                    </div>
                    <div class="col-2">
                        <p>G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="oeilD">
                    </div>
                    <div class="col-2">
                        <p>D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Oreilles</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="oreilleG">
                    </div>
                    <div class="col-2">
                        <p>G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="oreilleD">
                    </div>
                    <div class="col-2">
                        <p>D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Torse</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input" type="checkbox" value="" id="torse">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Poumons</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input" type="checkbox" value="" id="poumon">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Bras</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="brasG">
                    </div>
                    <div class="col-2">
                        <p>G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="brasD">
                    </div>
                    <div class="col-2">
                        <p>D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Épaules</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="epauleG">
                    </div>
                    <div class="col-2">
                        <p>G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="epauleD">
                    </div>
                    <div class="col-2">
                        <p>D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Coudes</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="coudeG">
                    </div>
                    <div class="col-2">
                        <p>G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="coudeD">
                    </div>
                    <div class="col-2">
                        <p>D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Poignets</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="poignetG">
                    </div>
                    <div class="col-2">
                        <p>G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="poignetD">
                    </div>
                    <div class="col-2">
                        <p>D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Mains</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="mainG">
                    </div>
                    <div class="col-2">
                        <p>G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="mainD">
                    </div>
                    <div class="col-2">
                        <p>D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Doigts</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input" type="checkbox" value="" id="doigts">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Dos</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input" type="checkbox" value="" id="dos">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Hanche</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input" type="checkbox" value="" id="hanche">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Jambes</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="jambeG">
                    </div>
                    <div class="col-2">
                        <p>G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="jambeD">
                    </div>
                    <div class="col-2">
                        <p>D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Genoux</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="genouG">
                    </div>
                    <div class="col-2">
                        <p>G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="genouD">
                    </div>
                    <div class="col-2">
                        <p>D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Pieds</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="piedG">
                    </div>
                    <div class="col-2">
                        <p>G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="piedD">
                    </div>
                    <div class="col-2">
                        <p>D</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Orteils</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input" type="checkbox" value="" id="orteil">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Chevilles</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="chevilleG">
                    </div>
                    <div class="col-2">
                        <p>G</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="chevilleD">
                    </div>
                    <div class="col-2">
                        <p>D</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row text-center g-0 title mt">
                    <h1>Description de la blessure</h1>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Brûlure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="brulure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Engelure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="engelure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Commotion cérébrale</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="commotion">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Corps étranger</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="corpsEtranger">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Coupure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="coupure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Lacération</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="laceration">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Déchirure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="dechirure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Douleur au dos</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="douleurDos">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Égratignure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="egratignure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Éraflure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="eraflure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Piqûre</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="piqure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Écharde</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="echarde">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Entorse</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="entorse">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Élongation</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="elongation">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Contusion</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="contusion">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Foulure</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="foulure">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Luxation</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="luxation">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Fracture</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="fracture">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Amputation</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="amputation">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Irritation</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="irritation">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Infection</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="infection">
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-10">
                        <p>Inhalation</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="inhalation">
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 text-center title mt">
                    <h1>Avez-vous subis de la violence</h1>
                </div>

                <div class="row g-0">
                    <div class="col-4">
                        <p>Physique</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="physique">
                    </div>
                    <div class="col-4">
                        <p>Verbale</p>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="checkbox" value="" id="verbale">
                    </div>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 text-center title mt">
                    <h1>Décriver la tâche effectuée et comment s'est produit la blessure</h1>
                </div>

                <div class="row g-0 mb-3">
                    <textarea class="border-3" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mb-3 mt">
                    <header for="premierSoin">Premier soins</header>
                    <input class="border-3" type="text" placeholder="Nom" id="premierSoin">
                    <header for="secouriste">Secouriste</header>
                    <input class="border-3" type="text" placeholder="Nom" id="secouriste">
                </div>
            </div>

            <div class="container-fluid zone">
                <div class="row g-0 mt">
                    <div class="col-10">
                        <p>Accident ne nécessitant aucune absence</p>
                    </div>
                    <div class="col-2 text-center">
                        <input class="form-check-input" type="checkbox" value="" id="aucuneAbsence" style="vertical-align:-webkit-baseline-middle;">
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-10">
                        <p>Accident nécessitant une consultation médicale</p>
                    </div>
                    <div class="col-2 text-center align-middle">
                        <input class="form-check-input" type="checkbox" value="" id="consultation" style="vertical-align:-webkit-baseline-middle;">
                    </div>
                </div>
            </div>
        </form>
    </div>
    
@endsection