@extends('layouts.app')

@section('ban2')
    <a href="{{ route('roles.create') }}" data-toggle="tooltip" title="ajouter rôle">
        <i class="ti-user"></i>
    </a>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">N°</th>
                                    <th class="text-center">Libellé</th>
                                    <th class="text-center">Autorisation(s)</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @if(!is_null($role->getPermissionNames()))
                                                <ul class="list-unstyled list-inline">
                                                    @foreach($role->getPermissionNames() as $permission)
                                                        <li>
                                                            <label class="badge badge-warning">{{ $permission }}</label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <p>pas de permission</p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @can('role-edit')
                                                <a class="btn btn-sm btn-warning btn-block"
                                                   href="{{ route('roles.edit',$role->id) }}">
                                                    <i class="ti-pencil h5"></i>
                                                </a>
                                            @endcan
                                        </td>
                                        <td class="text-center">
                                            @can('role-delete')
                                                <a class="btn btn-sm btn-danger btn-block"
                                                   href="{{ route('roles.destroy.alert',$role->id) }}">
                                                    <i class="ti-trash h5"></i>
                                                </a>
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