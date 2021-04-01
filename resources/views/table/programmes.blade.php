@extends('layouts.app')

@section('button')
    <a href='{{route('programmations.index')}}' class='d-none d-sm-inline-block btn btn-sm btn-success shadow-sm'>
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
                                <th>Date début</th>
                                <th>Date fin</th>
                                <th>Jours de passage</th>
                                <th>Agence</th>
                                <th>Zone</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($programmes as $programme)
                                <tr>
                                    <td>{{\Carbon\Carbon::parse($programme->date_debut)->format('d-m-Y')}}</td>
                                    <td>{{\Carbon\Carbon::parse($programme->date_fin)->format('d-m-Y')}}</td>
                                    <td>{{$programme->jours}}</td>
                                    <td>{{$programme->entreprise->name}}</td>
                                    <td>{{$programme->zone->title}}</td>
                                    <td class="text-center">
                                        <a href="{{route('programmations.edit', $programme->id)}}" class="btn btn-xs btn-warning btn-block">Modifier</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('programmations.destroy.alert', $programme->id)}}" class="btn btn-xs btn-danger btn-block">Supprimer</a>
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