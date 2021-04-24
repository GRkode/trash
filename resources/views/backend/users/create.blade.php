@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-left-success">
                    <form method="post" action="{{ route('users.store') }}">
                        @csrf
                        <div class="card-body ">
                            <div class="form-group @error('name') is-invalid @enderror">
                                <label class="font-weight-bold text-primary" for="name">Saisir le name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group @error('firstname') is-invalid @enderror">
                                <label class="font-weight-bold text-primary" for="firstname">Saisir le prénom</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" value="{{old('firstname')}}">
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group @error('email') is-invalid @enderror">
                                <label class="font-weight-bold text-primary" for="email">Saisir l'adresse mail</label>
                                <input type="text" name="email" class="form-control" id="email" value="{{old('email')}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group @error('password') is-invalid @enderror">
                                <label class="font-weight-bold text-primary" for="password">Saisir mot de passe</label>
                                <input type="password" name="password" class="form-control" id="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold text-primary" for="password_confirmation">
                                    Confirmer mot de passe
                                </label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                            </div>

                            <div class="form-group">
                                <label for="roleUser">Selectionnez les rôles de l'utilisateur</label>
                                <select multiple class="form-control" id="roleUser" name="roles[]">
                                    @foreach($roles as $role)
                                        <option value="{{$role}}" {{ (collect(old('roles'))->contains($role)) ? 'selected':'' }}>
                                            {{$role}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('roles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    @can('user-list')
                                        <a class="btn btn-mat btn-inverse btn-block" href="{{ route('users.index') }}" role="button">
                                            Retour à la liste
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
    </div>
@endsection