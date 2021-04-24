@extends('layouts.app')

@section('ban2')
    <a href="{{ route('users.create') }}"
       data-toggle="tooltip" data-placement="left" title="créer utilisateur">
        <i class="ti-user"></i>
    </a>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class=" text-primary"    >
                    <tr>
                        <th>N°</th>
                        <th>{{ __('Nom') }}</th>
                        <th>{{ __('Prénom') }}</th>
                        <th>{{ __('Rôles') }}</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $user)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>
                                @if(!is_null($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $role)
                                        <label class="badge badge-success">{{ $role }}</label>
                                    @endforeach
                                @else
                                    pas de rôle
                                @endif
                            </td>
                            <td>
                                @can('user-edit')
                                    <a class="btn btn-sm btn-warning btn-block"  data-toggle="tooltip" title="Modifier info"
                                       href="{{ route('users.edit',$user->id) }}">
                                        <i class="ti-pencil h5"></i>
                                    </a>
                                @endcan
                            </td>
                            <td cl>
                                @can('user-delete')
                                    <a class="btn btn-sm btn-danger btn-block"  data-toggle="tooltip" title="supprimer" href="{{ route('users.destroy.alert',$user->id) }}">
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
@endsection