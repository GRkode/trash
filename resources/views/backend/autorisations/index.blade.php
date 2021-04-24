@extends('layouts.app')

@section('ban2')
    <a href="{{ route('autorisations.create') }}" data-toggle="tooltip" title="ajouter permission">
        <i class="ti-medall"></i>
    </a>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">N°</th>
                                    <th class="text-center">Libellé</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->id }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td class="text-center">
                                            @can('permission-delete')
                                                <a href="{{ route('autorisations.destroy.alert', $permission->id) }}" class="btn btn-xs btn-danger btn-block">Supprimer</a>';
                                            @endcan
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