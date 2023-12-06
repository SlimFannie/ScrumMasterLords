@extends ('layout')

@section('titre', 'ScrumMasterLords')

@section('contenu')
        <div class="container-fluid d-flex align-items-center justify-content-center g-0">
            <div class="row g-0">
                <div class="col-12">
                    @if (Session::get('user.superieur') == true)
                    <div class="zoneAttention text-center p-2 mt-4">
                        <h1 class="m-auto">À votre attention !</h1>
                    </div>
                        @if (count(Helper::getNotif()))
                            @foreach (Helper::getNotif() as $notification)
                            <div class="card d-inline-flex m-2">
                                <div class="card-header">
                                    <h5 class="card-title m-0">{{ $notification->titre }}</h5>
                                </div>
                                <div class="card-body">
                                    <a href="">Voir le formulaire.</a>  
                                </div>
                                <div class="card-footer text-muted">
                                    {{ $notification->created_at->format('d/m/Y') }}
                                </div>
                            </div>
                            @endforeach
                        @else
                        <div class="zoneTitre p-2 text-center">
                            <h5 class="m-auto">Vous n'avez <span class="line">aucun formulaire</span> à traiter.</h5>
                        </div>
                        @endif
                    @endif
                    <div class="zoneTitre text-center p-2 mt-4">
                        <h1 class="m-auto">Vos formulaires en attente.</h1>
                    </div>
                    @if ($formulaires->count())
                        @foreach ($formulaires as $formulaire)
                        <div class="card d-inline-flex m-2">
                            <div class="card-header">
                                <h4 class="card-title m-0">{{ $formulaire->titre }}</h4>
                            </div>
                            <div class="card-body text-center">
                                <a href="{{ route('show.accident', [$formId = $formulaire->id]) }}" class="my-auto" style="font-size:20px;"><i class="fa-solid fa-magnifying-glass"></i> Voir le formulaire</a>
                            </div>
                            <div class="card-footer text-muted">
                                {{ $formulaire->created_at->format('d/m/Y') }}
                            </div>
                        </div>
                        @endforeach
                    @else
                    <div class="zoneTitre p-2 text-center">
                        <h5 class="m-auto">Vous n'avez <span class="line">aucun formulaire</span> en attente.</h5>
                    </div>
                    @endif
                    <div class="zoneTitre text-center p-2 mt-4">
                        <h1 class="m-auto">Votre historique.</h1>
                    </div>
                    @if ($historiques->count())
                        @foreach ($historiques as $historique)
                        <div class="card d-inline-flex m-2">
                            <div class="card-header">
                                <h4 class="card-title m-0">{{ $historique->titre }}</h4>
                            </div>
                            <div class="card-body text-center">
                                <a href="{{ route('show.accident', [$formId = $formulaire->id]) }}" class="my-auto" style="font-size:20px;"><i class="fa-solid fa-magnifying-glass"></i> Voir le formulaire</a>
                            </div>
                            <div class="card-footer text-muted">
                                {{ $historique->created_at->format('d/m/Y') }}
                            </div>
                        </div>
                        @endforeach
                    @else
                    <div class="zoneTitre p-2 text-center">
                        <h5 class="m-auto">Il n'y a <span class="line">aucun formulaire</span> dans votre historique.</h5>
                    </div>
                    @endif
                </div>
            </div>
        </div>
@endsection