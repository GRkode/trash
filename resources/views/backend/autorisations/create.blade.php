@extends('layouts.app')

@section('title', "Creation d'autorisation")

@section('button')
    <a href='{{route('autorisations.index')}}' class='d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm'>
        <i class='fas fa-backspace fa-sm text-white-50'></i> Retour
    </a>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-left-success">
                <div class="card-body">
                    <form method="post" action="{{ route('autorisations.store') }}">
                        @csrf
                        <div class="form-group @error('nomAutorisation') is-invalid @enderror">
                            <label class="font-weight-bold text-primary" for="name">Saisir le nom de l'autorisation</label>
                            <input type="text" name="nomAutorisation" class="form-control" id="name" value="{{old('nomAutorisation')}}"
                            placeholder="Exemple: role-list">
                            @error('nomAutorisation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection