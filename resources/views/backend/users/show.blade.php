@extends('layouts.app')

@section('title', "Information de $user->prenom")

@section('button')
    <a href='{{route('users.index')}}' class='d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm'>
        <i class='fas fa-backspace fa-sm text-white-50'></i> Retour
    </a>
@stop
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="font-weight-bold text-primary mr-3">Nom:</strong>
                    {{ $user->nom }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="font-weight-bold text-primary mr-3">Prénom:</strong>
                    {{ $user->prenom }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="font-weight-bold text-primary mr-3">Numéro de téléphone:</strong>
                    {{ $user->tel }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="font-weight-bold text-primary mr-3">Email:</strong>
                    {{ $user->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="font-weight-bold text-primary mr-3">Roles:</strong>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection