@extends('layouts.app')

@section('title', "Modifier le role $role->name")

@section('button')
    <a href='{{route('roles.index')}}' class='d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm'>
        <i class='fas fa-backspace fa-sm text-white-50'></i> Retour
    </a>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-left-warning">
                <form method="post" action="{{ route('roles.update', $role->id) }}" >
                    @csrf
                    @method('put')
                        <div class="card-body ">
                            <div class="form-group @error('nomRole') is-invalid @enderror">
                                <label class="font-weight-bold text-primary" for="name">Saisir le nom du rôle</label>
                                <input type="text" name="nomRole" class="form-control" id="name" value="{{old('nomRole') ?? $role->name}}">
                                @error('nomRole')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold text-primary" for="autorisations">Choisir les permissions du rôle</label>
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
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">{{ __('Modifier') }}</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection