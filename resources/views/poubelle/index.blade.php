@extends('layouts.app')

@section('ban')
    <div class="page-header card">
        <form method="post" action="{{route('poubelle.filtre')}}">
            @csrf
            <div class="form-row">
                <div class="col mb-2">
                    <select name="departement" id="ldepartement">
                        <option value="">Département</option>
                        @foreach($departements as $depart)
                            <option value="{{$depart->id}}"
                                    @if(old('departement', isset($departSelect) ? $departSelect : '') == $depart->id) selected @endif>
                                {{$depart->title}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col mb-2">
                    <select name="commune" id="lcommune">
                        <option value="">Commune</option>
                        @foreach($communes as $commune)
                            <option value="{{$commune->id}}"
                                    @if(old('commune', isset($communeSelect) ? $communeSelect : '') == $commune->id) selected @endif>
                                {{$commune->title}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col mb-2">
                    <select name="arrondissement" id="larrondissement">
                        <option value="">Arrondissement</option>
                    @isset($arrondissements)
                        @foreach($arrondissements as $arrondissement)
                            <option value="{{$arrondissement->id}}"
                                    @if(old('arrondissement', isset($arrondissementSelect) ? $arrondissementSelect : '') == $arrondissement->id) selected @endif>
                                {{$arrondissement->title}}
                            </option>
                        @endforeach
                    @endisset
                    </select>
                </div>
                <div class="col mb-2">
                    <select name="quartier" id="lquartier">
                        <option value="">Quartier</option>
                        @isset($quartiers)
                            @foreach($quartiers as $quartier)
                                <option value="{{$quartier->id}}"
                                        @if(old('quartier', isset($quartierSelect) ? $quartierSelect : '') == $quartier->id) selected @endif>
                                    {{$quartier->title}}
                                </option>
                            @endforeach
                        @endisset
                    </select>
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-warning btn-block" value=" Filtrer">
                </div>
            </div>
        </form>
    </div>
@stop

@section('content')
    @forelse($poubelles as $trash)
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                        <div class="card-block-small">
                            @if($trash->history->etat == "pleine")
                                <i class="icofont icofont-trash bg-danger card1-icon"></i>
                            @else
                                <i class="icofont icofont-trash bg-success card1-icon"></i>
                            @endif
                            <span class="text-c-blue f-w-600">
                                {{$trash->history->etat}}
                            </span>
                            <h4>N°: {{$trash->numero}}</h4>
                            <div>
                                <span class="f-left m-t-10 text-muted">
                                    <a href="{{route('poubelle.show', ['id'=>$trash->id])}}">Voir détails</a>
                                </span>
                                <span class="f-right m-t-10 text-muted">
                                    <a href="#">Voir sur carte</a>
                                </span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        {{ $poubelles->links() }}
    @empty
        <div class="row justify-content-center">
            <div class="col-md-6">
                Aucune poubelle ne répond à votre requête
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-6">
                <a class="btn btn-warning" href="{{route('poubelles.create')}}">Ajouter une poubelle</a>
            </div>
        </div>
    @endforelse
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            $("#ldepartement").change(function () {
                if ($(this).val() !== "") {
                    $.ajax({
                        /* the route pointing to the post function */
                        url: '{{route('getcommune')}}',
                        type: 'get',
                        data: {id:$(this).val()},
                        dataType: 'JSON',
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            $("#lcommune").empty().append(data.options);
                            // $("#lprefix").empty().append(data.prefixCode);
                            $("#larrondissement").empty('');
                            $("#lquartier").empty('');
                        }
                    });
                }else{
                    $("#lcommune").empty('');
                    // $("#lprefix").empty('');
                    $("#larrondissement").empty('');
                    $("#lquartier").empty('');
                }
            });
            $("#lcommune").change(function () {
                if ($(this).val() !== "") {
                    $.ajax({
                        /* the route pointing to the post function */
                        url: '{{route('getarrondissement')}}',
                        type: 'get',
                        data: {id:$(this).val()},
                        dataType: 'JSON',
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            $("#larrondissement").empty('').append(data.options);;
                            $("#lquartier").empty('').append('<option value="">Selectionner arrondissement</option>');
                        }
                    });
                } else {
                    $("#larrondissement").empty('');
                    $("#lquartier").empty('');
                }
            });
            $("#larrondissement").change(function () {
                if ($(this).val() !== "") {
                    $.ajax({
                        /* the route pointing to the post function */
                        url: '{{route('getquartier')}}',
                        type: 'get',
                        data: {id:$(this).val()},
                        dataType: 'JSON',
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            $("#lquartier").empty('').append(data.options);
                        }
                    });
                } else {
                    $("#lquartier").empty('');
                }
            });
        });
    </script>
@stop
