@extends('layouts.app')

@section('title', "Modifier la permission $permission->name")

@section('button')
    <a href='{{route('autorisations.index')}}' class='d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm'>
        <i class='fas fa-backspace fa-sm text-white-50'></i> Retour
    </a>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-left-warning">
                <form method="post" action="{{ route('autorisations.update', $permission->id) }}" >
                    @csrf
                    @method('put')
                        <div class="card-body ">
                            <div class="form-group @error('nomAutorisation') is-invalid @enderror">
                                <label class="font-weight-bold text-primary" for="name">Saisir le nom du rôle</label>
                                <input type="text" name="nomAutorisation" class="form-control" id="name" value="{{old('nomAutorisation') ?? $permission->name}}">
                                @error('nomAutorisation')
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