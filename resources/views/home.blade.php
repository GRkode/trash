@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card twitter-card">
                <div class="card-header">
                    <i class="icofont icofont-trash"></i>
                    <div class="d-inline-block">
                        <h5>POUBELLE</h5>
                        <span>
                            <a href="{{route('departement.list',['etat'=>'pas-pleinne'])}}" class="btn btn-inverse btn-outline-inverse btn-sm">
                                Consulter
                            </a>
                        </span>
                    </div>
                </div>
                <div class="card-block text-center">
                    <div class="row">
                        <div class="col-6 b-r-default">
                            <h2>1976</h2>
                            <p class="text-dark">Pas Pleinne</p>
                        </div>
                        <div class="col-6">
                            <h2>2379</h2>
                            <p class="text-dark">Total</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card fb-card">
                <div class="card-header">
                    <i class="icofont icofont-trash"></i>
                    <div class="d-inline-block">
                        <h5>POUBELLE</h5>
                        <span>
                            <a href="{{route('departement.list',['etat'=>'moitie-pleinne'])}}" class="btn btn-inverse btn-outline-inverse btn-sm">
                                Consulter
                            </a>
                        </span>
                    </div>
                </div>
                <div class="card-block text-center">
                    <div class="row">
                        <div class="col-6 b-r-default">
                            <h2>300</h2>
                            <p class="text-dark">A Moitié Pleinne</p>
                        </div>
                        <div class="col-6">
                            <h2>2379</h2>
                            <p class="text-dark">Total</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card dribble-card">
                <div class="card-header">
                    <i class="icofont icofont-trash"></i>
                    <div class="d-inline-block">
                        <h5>POUBELLE</h5>
                        <span>
                            <a href="{{route('departement.list',['etat'=>'pleinne'])}}" class="btn btn-inverse btn-outline-inverse btn-sm">
                                Consulter
                            </a>
                        </span>
                    </div>
                </div>
                <div class="card-block text-center">
                    <div class="row">
                        <div class="col-6 b-r-default">
                            <h2>103</h2>
                            <p class="text-dark">Pleinne</p>
                        </div>
                        <div class="col-6">
                            <h2>2379</h2>
                            <p class="text-dark">Total</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Statestics Start -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Données statistiques</h5>
                    <div class="card-header-left ">
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left "></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div id="statestics-chart" style="height:517px;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
