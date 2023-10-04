@extends ('layout')

@section('titre', 'ScrumMasterLords')

@section('contenu')
    <div class="container-fluid h-100 g-0">
        <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0">
            <div class="row g-0">
                <div class="col-12">
                    <h1 class="pb-3">Formulaires en cours</h1>
                    @if(count($activeForms))
                        @foreach($activeForms as $activeForm)
                        <div class="card d-inline-flex">
                            <div class="card-header">
                                <h5 class="card-title m-0">Type de formulaire</h5>
                            </div>
                            <div class="card-body">
                                Description    
                            </div>
                            <div class="card-footer text-muted">
                                Date
                            </div>
                        </div>
                        @endforeach
                    @else
                    <h4>Il n'y a aucun formulaire en attente de traitement.</h4>
                    @endif
                    <h1 class="py-3">Formulaires traités</h1>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-0">Type de formulaire</h5>
                        </div>
                        <div class="card-body">
                            Description    
                        </div>
                        <div class="card-footer text-muted">
                            Date
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection