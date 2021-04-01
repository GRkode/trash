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
                                <th>Nom</th>
                                <th>Adrese</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Zones</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($agences as $agence)
                                <tr>
                                    <td>{{$agence->name}}</td>
                                    <td>{{$agence->address}}</td>
                                    <td>{{$agence->email}}</td>
                                    <td>{{$agence->phone}}</td>
                                    <td>
                                        <span class="badge badge-success">{{$agence->zone->title}}</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('agences.edit', $agence->id)}}" class="btn btn-xs btn-warning btn-block">Modifier</a>';
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('agences.destroy.alert', $agence->id)}}" class="btn btn-xs btn-danger btn-block">Supprimer</a>';
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