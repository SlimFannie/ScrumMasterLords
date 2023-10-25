@extends ('layout')
@section ('titre','Atelier mécanique')
@section ('contenu')

    <div class="container-fluid">
        <div class="container-fluid g-0 sign">
            <div class="mt-3 bigTitleAM mb-3">
                <div class="row g-0">
                    <div class="col-10 offset-col-3 text-center m-4 g-0">
                        <h3 style="color; rgb(11, 35, 65)">Atelier mécanique - Rapport d'accident (véhicule)<h3>
                    </div>
                </div>
            </div>
        </div>

        <div  class="row align-items-center strech" style="background-color: white; color: rgb(0, 118, 213)">
            <p>Bonjour, NomUser. Lorsque vous soumettez ce formulaire, le propriétaire verra votre nom et votre adresse e-mail.</p>
        </div>

        <form methode="post" action="{{route('atelier.store')}}">
            @csrf
            <div class="container-fluid zoneAM">
                <div class="row g-0 mt">
                    <header class="textAM" for="num">Numéro(s) d'unité(s) impliqué(s)</header>
                        <input type="text" id="num" class="border-3 mb-2 inputAM" name="no_unite">

                    <header class="textAM" for="dep" class="mt">Département</header>
                        <input type="text" id="dep" class="border-3 mb-2 inputAM" name="departement">

                    <header class="textAM" for="nom" class="mt">Nom complet de l'employé</header>
                        <input type="text" id="nom" class="border-3 mb-2 inputAM" name="nom_complet_employer">

                    <header class="textAM" for="nomSup" class="mt">Nom complet du supérieur</header>
                        <input type="text" id="nomSup" class="border-3 mb-2 inputAM" name="nom_complet_superieur">

                    <header class="textAM" for="numPermis" class="mt">Numéro du permis de conduire</header>
                        <input type="text" id="numPermis" class="border-3 mb-2 inputAM" name="no_permis_conduite_employer">

                    <header class="textAM" for="autre" class="mt">Autre véhicules impliqués (citoyen)</header>
                        <div class="form-check">
                            <input class="form-check-input inputAM" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="true">
                            <label class="form-check-label textAM" for="flexRadioDefault1">
                            Oui
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input inputAM" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="false">
                            <label class="form-check-label textAM" for="flexRadioDefault2">
                            Non
                            </label>
                        </div>
                </div>
                <div class="row g-0 mb-3 mt">
                    <div class="col-7"></div>
                    <div class="col-5">
                        <button type="submit" class="btn btn-outline-light btn-lg">Envoyer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection