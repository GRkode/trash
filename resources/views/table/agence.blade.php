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
                                <th>Nom</th>
                                <th>Adrese</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Zones</th>
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
                                        <a href="{{route('programmations.show', $agence->id)}}" class="btn btn-xs btn-success btn-block">Voir programmation</a>
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