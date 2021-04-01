@extends('layouts.app')

@section('button')
    <a href='{{route('home')}}' class='d-none d-sm-inline-block btn btn-sm btn-success shadow-sm'>
        <i class='fas fa-backspace fa-sm text-white-50'></i> Retour
    </a>
@stop


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class=" text-primary">
                            <tr>
                                <th>N°</th>
                                <th>Nom du arrondissement</th>
                                <th>Nom de l'arrondissement</th>
                                <th>Voir les quartiers</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($arrondissements as $arrondissement)
                                <tr>
                                    <td>{{ $arrondissement->id }}</td>
                                    <td>{{ $arrondissement->commune->title }}</td>
                                    <td>{{ $arrondissement->title }}</td>
                                    <td class="text-center">
                                        <a href="{{route('quartier.show', $arrondissement->id)}}" class="btn btn-xs btn-success btn-block">Voir</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection