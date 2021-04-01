@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class=" text-primary">
                            <tr>
                                <th>Id</th>
                                <th>Numéro</th>
                                <th>Type</th>
                                <th>Latitude</th>
                                <th>Longitutde</th>
                                <th>Zone</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($poubelles as $poubelle)
                                <tr>
                                    <td>{{$poubelle->id}}</td>
                                    <td>{{$poubelle->numero}}</td>
                                    <td>{{($poubelle->public) ? 'Publique' : 'Privée'}}</td>
                                    <td>{{$poubelle->latitude}}</td>
                                    <td>{{$poubelle->longitude}}</td>
                                    <td>
                                        <span class="badge badge-success">{{$poubelle->zone->title}}</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('poubelles.edit', $poubelle->id)}}" class="btn btn-xs btn-warning btn-block">Modifier</a>';
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('poubelles.destroy.alert', $poubelle->id)}}" class="btn btn-xs btn-danger btn-block">Supprimer</a>';
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