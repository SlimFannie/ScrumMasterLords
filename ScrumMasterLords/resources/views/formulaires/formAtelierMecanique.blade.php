@extends ('layout')
@section ('titre','Atelier mécanique')
@section ('contenu')

    <div class="container-fluid">
        <div class="container-fluid g-0 sign">
            <div class="mt-3 bigTitleForm mb-3">
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

        <form action="post">
            <div class="container-fluid zoneForm">
                <div class="row g-0 mt">
                    <header class="textForm" for="num">Numéro(s) d'unité(s) impliqué(s)</header>
                        <input name="" type="text" id="num" class="border-3 mb-2 inputForm">

                    <header class="textForm" for="dep" class="mt">Département</header>
                        <input name="" type="text" id="dep" class="border-3 mb-2 inputForm">

                    <header class="textForm" for="nom" class="mt">Nom complet de l'employé</header>
                        <input name="" type="text" id="nom" class="border-3 mb-2 inputForm">

                    <header class="textForm" for="nomSup" class="mt">Nom complet du supérieur</header>
                        <input name="" type="text" id="nomSup" class="border-3 mb-2 inputForm">

                    <header class="textForm" for="numPermis" class="mt">Numéro du permis de conduire</header>
                        <input name="" type="text" id="numPermis" class="border-3 mb-2 inputForm">

                    <hr>

                    <header class="textForm" for="autre" class="mt">Autre véhicules impliqués (citoyen)</header>
                        <div class="form-check">
                            <input name="" class="form-check-input inputForm" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label textForm" for="flexRadioDefault1">
                            Oui
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input name="" class="form-check-input inputForm" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label textForm" for="flexRadioDefault2">
                            Non
                            </label>
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