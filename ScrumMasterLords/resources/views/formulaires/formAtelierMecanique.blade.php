@extends ('layout')
@section ('titre','Atelier mécanique')
@section ('contenu')

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row mt titleAM text-center">
                <h1>Atelier mécanique</h1>
            </div>
        </div>

        <hr>

        <form methode="post" action="{{route('atelier.store')}}">
            @csrf
            <div class="container-fluid zoneAM">
                <div class="row g-0 mt">
                    <header for="num">Numéro(s) d'unité(s) impliqué(s)</header>
                    <input type="text" id="num" class="border-3 mb-2" name="no_unite">

                    <header for="dep">Département</header>
                    <input type="text" id="dep" class="border-3 mb-2" name="departement">

                    <header for="nom">Nom complet de l'employé</header>
                    <input type="text" id="nom" class="border-3 mb-2"name="nom_complet_employer">

                    <header for="nomSup">Nom complet du supérieur</header>
                    <input type="text" id="nomSup" class="border-3 mb-2"name="nom_complet_superieur"> 

                    <header for="numPermis">Numéro du permis de conduire</header>
                    <input type="text" id="numPermis" class="border-3 mb-2" name="numero_permis_conduire">

                    <header for="autre">Autre véhicules impliqués (citoyen)</header>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="autre_vehicule_vrai" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Oui
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="autre_vehicule_faux" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Non
                        </label>
                    </div>
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