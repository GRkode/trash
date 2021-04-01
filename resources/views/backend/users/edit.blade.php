@extends('layouts.app')

@section('title', "Modifier l'utilisatuer $user->nom")

@section('button')
    <a href='{{route('users.index')}}' class='d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm'>
        <i class='fas fa-backspace fa-sm text-white-50'></i> Retour
    </a>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-left-warning">
                <form method="post" action="{{ route('users.update', $user->id) }}" >
                    @csrf
                    @method('put')
                    <div class="card-body ">

                        <div class="form-group @error('nom') is-invalid @enderror">
                            <label class="font-weight-bold text-primary" for="nom">Saisir le nom</label>
                            <input type="text" name="nom" class="form-control" id="nom" value="{{old('nom') ?? $user->nom}}">
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group @error('prenom') is-invalid @enderror">
                            <label class="font-weight-bold text-primary" for="prenom">Saisir le prénom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" value="{{old('prenom') ?? $user->prenom}}">
                            @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group @error('tel') is-invalid @enderror">
                            <label class="font-weight-bold text-primary" for="tel">Saisir le téléphone</label>
                            <input type="text" name="tel" class="form-control" id="tel" value="{{old('tel') ?? $user->tel}}">
                            @error('tel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group @error('email') is-invalid @enderror">
                            <label class="font-weight-bold text-primary" for="email">Saisir l'adresse mail</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{old('email') ?? $user->email}}">
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
                                    <option value="{{$role}}" {{ (collect(old('roles') ?: $userRole)->contains($role)) ? 'selected':'' }}>
                                        {{$role}}
                                    </option>
                                @endforeach
                            </select>
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