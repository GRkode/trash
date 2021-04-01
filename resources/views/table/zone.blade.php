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
                                <th>Arrondissement</th>
                                <th>Quartier</th>
                                <th>Zone</th>
                                <th>Les agences</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($zones as $zone)
                                <tr>
                                    <td>{{ $zone->id }}</td>
                                    <td>{{ $zone->quartier->arrondissement->title }}</td>
                                    <td>{{ $zone->quartier->title }}</td>
                                    <td>{{ $zone->title }}</td>
                                    <td>
                                        @forelse($zone->agences as $agence)
                                            <span class="badge badge-success">{{$agence->name}}</span>
                                        @empty
                                            <span class="badge badge-warning">Pas d'agence attribuée</span>
                                        @endforelse
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('poubelle.show', $zone->id)}}" class="btn btn-xs btn-success btn-block">Voir</a>
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