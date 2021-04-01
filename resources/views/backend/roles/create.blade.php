@extends('layouts.app')

@section('button')
    <a href='{{route('roles.index')}}' class='d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm'>
        <i class='fas fa-backspace fa-sm text-white-50'></i> Retour
    </a>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-left-success">
                <div class="card-body">
                    <form method="post" action="{{ route('roles.store') }}">
                        @csrf
                        <div class="form-group @error('nomRole') is-invalid @enderror">
                            <label class="font-weight-bold text-primary" for="name">Saisir le nom du rôle</label>
                            <input type="text" name="nomRole" class="form-control" id="name" value="{{old('nomRole')}}">
                            @error('nomRole')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold text-primary" for="list">Choisir les permissions du rôle</label>
                            <select class="form-control" name="permission[]" multiple>
                                @foreach($permission as $value)
                                    <option value="{{$value->id}}" {{ (collect(old('permission'))->contains($value->id)) ? 'selected':'' }}>
                                        {{ $value->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('permission')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection