@extends('layout')
@section ('titre','Procédures')
@section('contenu')

    <div class="container-fluid marginNav">
        <div class="row g-0">
            <div class="col-8">
                <div class="container-fluid bgProc h-100">

                </div>
            </div>
            <div class="col-4">
                <div class="container-fluid h-100">
                    <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Départements</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          @foreach($departements as $departement)
                            <li><a class="dropdown-item" href="#">{{ $departement->nom }}</a></li>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection