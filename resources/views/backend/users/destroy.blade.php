@extends('layouts.app')

@section('content')
    <form id="deleteuser" action="{{ route('users.destroy', $user->id) }}" method="POST"
          style="display: none;">
        @csrf
        @method('DELETE')
    </form>
    <div class="row">
        <div class="col-sm-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
            <div class="card text-white bg-dark mb-3">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">
                        Vous êtes sur le point de supprimer l'utilisateur
                        <strong>{{ $user->name }}</strong>
                    </h5>
                    <p class="card-text">
                        <a class="btn btn-danger btn-lg btn-block" href="#" role="button"
                           onclick="event.preventDefault(); $('#deleteuser').submit();">
                            Je confirme la suppression
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection


