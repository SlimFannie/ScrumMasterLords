@extends('layout')
@section ('titre','Procédures')
@section('contenu')

    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-8">

            </div>
            <div class="col-4">
                @foreach($departements as $departement)
                    <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">{ $departement }</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection