@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{ $dataTable->table(['class' => 'table table-bordered table-hover table-sm'], true) }}
            </div>
            @if(Route::currentRouteName() === 'zones.index')
                <a class="btn btn-primary" href="{{ route('zones.create') }}" role="button">Créer une nouvelle zone</a>
            @elseif(Route::currentRouteName() === 'entreprises.index')
                <a class="btn btn-primary" href="{{ route('entreprises.create') }}" role="button">Créer un nouveau PME</a>
            @elseif(Route::currentRouteName() === 'poubelles.index')
                <a class="btn btn-primary" href="{{ route('poubelles.create') }}" role="button">Créer une nouvelle poubelle</a>
            @endif
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    {{ $dataTable->scripts() }}

@endsection
