@extends ('layout')

@section('titre', 'ScrumMasterLords')

@section('contenu')
    <div class="container-fluid h-100 g-0">
        <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0">
            <div class="row g-0">
                <div class="col-12">
                    @if ($formulaires->count())
                    <h1 class="pb-3">Formulaires en cours</h1>
                        @foreach ($formulaires as $formulaire)
                        <div class="card d-inline-flex">
                            <div class="card-header">
                                <h5 class="card-title m-0">{{ $formulaire->titre }}</h5>
                            </div>
                            <div class="card-body">
                                <a href="">Voir le formulaire.</a>  
                            </div>
                            <div class="card-footer text-muted">
                                {{ $formulaire->created_at->format('d/m/Y') }}
                            </div>
                        </div>
                        @endforeach
                    @else
                    <h4>Il n'y a aucun formulaire en attente de traitement.</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection