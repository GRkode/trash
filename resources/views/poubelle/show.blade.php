@extends('layouts.app')

@section('ban')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-file-code bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{$title ?? ''}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item icon-list-demo">
                            <a href="{{route('departement.poub', ['id'=>$poubelle->departement_id])}}"
                               data-toggle="tooltip" data-placement="left" title="retour">
                                <i class="ti-arrow-left"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td class="font-weight-bold">Departement: </td>
                            <td>{{$poubelle->departement->title}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Commune: </td>
                            <td>{{$poubelle->commune->title}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Arrondissement: </td>
                            <td>{{$poubelle->arrondissement->title}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td class="font-weight-bold">Quartier: </td>
                            <td>{{$poubelle->quartier->title}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Zone: </td>
                            <td>{{$poubelle->zone->title}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Numéro: </td>
                            <td>{{$poubelle->numero}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td class="font-weight-bold">Etat actuel: </td>
                            <td>
                                @if($poubelle->history->etat == "pleine")
                                    <span class="badge badge-danger">
                                        {{$poubelle->history->etat}}
                                    </span>
                                @else
                                    <span class="badge badge-success">
                                        {{$poubelle->history->etat}}
                                    </span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Durée état actuel: </td>
                            <td>
                                {{\Carbon\Carbon::parse($poubelle->history->created_at)->diffForHumans()}}
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Amortissement: </td>
                            <td>
                                @if($poubelle->age >= 1)
                                    {{$poubelle->age}} ans
                                @else
                                    {{\Carbon\Carbon::parse($poubelle->created_at)->diffForHumans()}}
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Line chart</h5>
                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                </div>
                <div class="card-block">
                    <div id="line-example"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Bar chart</h5>
                    <span>Evolution d'état de la poubelle</span>
                    <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                </div>
                <div class="card-block">
                    <div id="morris-bar-chart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('assets/js/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/js/morris.js/morris.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('assets/pages/chart/morris/morris-custom-chart.js')}}"></script>
@endsection
