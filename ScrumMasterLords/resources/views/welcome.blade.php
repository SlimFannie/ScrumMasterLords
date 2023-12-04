@extends ('layout')

@section('titre', 'ScrumMasterLords')

@section('contenu')
        <div class="container-fluid d-flex align-items-center justify-content-center g-0">
            <div class="row g-0">
                <div class="col-12">
                    <h1 class="pb-3">Vos formulaires en attente.</h1>
                    @if ($formulaires->count())
                        @foreach ($formulaires as $formulaire)
                        <div class="card d-inline-flex">
                            <div class="card-header">
                                <h5 class="card-title m-0">{{ $formulaire->titre }}</h5>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('show.accident', [$formId = $formulaire->id]) }}">Voir le formulaire.</a>  
                            </div>
                            <div class="card-footer text-muted">
                                {{ $formulaire->created_at->format('d/m/Y') }}
                            </div>
                        </div>
                        @endforeach
                    @else
                    <h4>Vous n'avez aucun formulaire en attente de traitement.</h4>
                    @endif
                    @if (Session::get('user.superieur') == true)
                    <h1>Ces formulaires sont en attente de traitement.</h1>
                        @if ($notifications->count())
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
                        <h4>Vous n'avez aucun formulaire à traiter.</h4>
                        @endif
                    @endif
                </div>
            </div>
        </div>
@endsection