@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form method="post" action="{{ route('roles.update', $role->id) }}">
                    @csrf
                    @method('put')
                    <div class="card-body ">
                        <div class="form-group @error('nomRole') is-invalid @enderror">
                            <label class="font-weight-bold text-primary" for="name">Saisir le nom du rôle</label>
                            <input type="text" name="nomRole" class="form-control" id="name"
                                   value="{{old('nomRole') ?? $role->name}}">
                            @error('nomRole')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold text-primary" for="autorisations">Choisir les permissions du
                                rôle</label>
                            <select class="form-control" name="permission[]" multiple>
                                @foreach($permission as $value)
                                    <option value="{{$value->id}}" {{ (collect(old('permission') ?: $rolePermissions)->contains($value->id)) ? 'selected':'' }}>
                                        {{ $value->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('permission[]')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                @can('role-list')
                                    <a class="btn btn-mat btn-inverse btn-block" href="{{ route('roles.index') }}" role="button">
                                        Retour à la liste des roles
                                    </a>
                                @endcan
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-mat btn-success btn-block">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection