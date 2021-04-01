@extends('layouts.app')

@section('title', "Liste des utilisateurs")

@section('button')
    <a href='{{route('home')}}' class='d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm'>
        <i class='fas fa-backspace fa-sm text-white-50'></i> Retour
    </a>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3 text-right">
                    @can('role-create')
                        <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">
                            {{ __('Ajouter un utilisateur') }}
                        </a>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class=" text-primary"    >
                                <tr>
                                    <th>N°</th>
                                    <th>{{ __('Nom') }}</th>
                                    <th>{{ __('Prénom') }}</th>
                                    <th>{{ __('Rôles') }}</th>
                                    <th class="text-right">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $user)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>
                                            @if(!is_null($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $role)
                                                    <label class="badge badge-success">{{ $role }}</label>
                                                @endforeach
                                            @else
                                                pas de rôle
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-info btn-circle" href="{{ route('users.show',$user->id) }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </li>
                                                @can('role-edit')
                                                    <li class="list-inline-item">
                                                        <a class="btn btn-sm btn-warning btn-circle" href="{{ route('users.edit',$user->id) }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                    </li>
                                                @endcan
                                                @can('role-delete')
                                                    <li class="list-inline-item">
                                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
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