@extends('auth.app')

@section('title', 'Administrateur | Mot de passe oublié')

@section('content')
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="text-center">
                                <img src="{{asset('assets/images/auth/logo-dark.png')}}" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Mot de passe oublié ?</h3>
                                    </div>
                                </div>
                                <hr/>
                                <p class="mb-4 text-dark">
                                    Entrez simplement votre adresse e-mail ci-dessous et
                                    nous vous enverrons un lien pour réinitialiser votre mot de passe!
                                </p>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                           id="exampleInputEmail" aria-describedby="emailHelp"
                                           placeholder="Enter email..." required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Envoyer le lien de renouvellement
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Merci d'avoir choisi GestTrash.</p>
                                        <p class="text-inverse text-left"><b>@RGCA</b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{asset('assets/images/auth/Logo-small-bottom.png')}}"
                                             alt="small-logo.png">
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
