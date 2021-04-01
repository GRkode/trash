@extends('layouts.app')

@section('title', "Liste des permissions")

@section('button')
    <a href='{{route('home')}}' class='d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm'>
        <i class='fas fa-backspace fa-sm text-white-50'></i> Retour
    </a>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 text-right">
                    @can('permission-create')
                        <a href="{{ route('autorisations.create') }}" class="btn btn-sm btn-primary">
                            {{ __('Ajouter une autorisation') }}
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
                                    <th class="text-center">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->id }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td class="text-center">
                                            <ul class="list-inline">
                                                @can('permission-edit')
                                                    <li class="list-inline-item">
                                                        <a class="btn btn-sm btn-warning btn-circle" href="{{ route('autorisations.edit',$permission->id) }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                    </li>
                                                @endcan
                                                @can('permission-delete')
                                                    <li class="list-inline-item">
                                                        <form action="{{ route('autorisations.destroy', $permission->id) }}" method="post">
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