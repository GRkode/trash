@extends('layouts.app')

@section('title', "Liste des rôles")

@section('button')
    <a href='{{route('home')}}' class='d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm'>
        <i class='fas fa-backspace fa-sm text-white-50'></i> Retour
    </a>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 text-right">
                    @can('role-create')
                        <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary">
                            {{ __('Ajouter un rôle') }}
                        </a>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">N°</th>
                                    <th class="text-center">Libellé</th>
                                    <th class="text-center">Autorisation(s)</th>
                                    <th class="text-center">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @if(!is_null($role->getPermissionNames()))
                                                @foreach($role->getPermissionNames() as $permission)
                                                    <label class="badge badge-warning">{{ $permission }}</label>
                                                @endforeach
                                            @else
                                                <p>pas de permission</p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-info btn-circle" href="{{ route('roles.show',$role->id) }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </li>
                                                @can('role-edit')
                                                    <li class="list-inline-item">
                                                        <a class="btn btn-sm btn-warning btn-circle" href="{{ route('roles.edit',$role->id) }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                    </li>
                                                @endcan
                                                @can('role-delete')
                                                    <li class="list-inline-item">
                                                        <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="button" class="btn btn-sm btn-danger btn-circle" onclick="confirm('{{ __("Cette action est irreversible. supprimer cet élément?") }}') ? this.parentElement.submit() : ''">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                @endcan
                                            </ul>
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