@extends('layouts.app')

@section('content')

    <div class="row">
        @forelse($poubelles as $trash)
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        @if($trash->history->etat == "vide")
                            <i class="icofont icofont-trash bg-default card1-icon"></i>
                        @else
                            <i class="icofont icofont-trash bg-danger card1-icon"></i>
                        @endif
                        <span class="text-c-blue f-w-600">
                            @if($trash->history->etat == "vide") vide @else Pleinne @endif
                        </span>
                        <h4>N°: {{$trash->numero}}</h4>
                        <div>
                            <span class="f-left m-t-10 text-muted">
                                <i class="text-c-blue f-16 icofont icofont-address-book m-r-10"></i>
                                <a href="">Voir détails</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-6 align-items-center">
                Pas de poubelle dans cette zone <br>
                <a class="btn btn-warning" href="{{route('poubelles.create')}}">Ajouter à cette zone</a>
            </div>
        @endforelse
    </div>
@endsection
