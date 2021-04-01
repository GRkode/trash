@extends('auth.app')

@section('title', 'Dashboard | Confirmer mot de passe')

@section('content')
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <div class="text-center">
                                <img src="{{asset('assets/images/auth/logo-dark.png')}}" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">{{ __('Reset Password') }}</h3>
                                    </div>
                                </div>
                                <hr/>
                                <p class="mb-4 text-dark">
                                    Procéder ci-dessous au changement de mot de passe
                                </p>

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user  @error('email') is-invalid @enderror"
                                           name="email" aria-describedby="emailHelp"
                                           placeholder="Enter email..." required autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user  @error('password') is-invalid @enderror"
                                           name="password" aria-describedby="passwordHelp"
                                           placeholder="Enter mot de passe..." required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" placeholder="Confirmation du mot de passe..."
                                           class="form-control form-control-user" name="password_confirmation"
                                           required>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Reset Password') }}
                                        </button>
                                        <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Se connecter</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Merci d'avoir choisi GestTrash.</p>
                                        <p class="text-inverse text-left"><b>@RGCA</b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{asset('assets/images/auth/Logo-small-bottom.png')}}" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
