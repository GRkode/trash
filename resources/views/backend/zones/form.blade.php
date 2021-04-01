@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form method="POST"
                      action="@isset($zone) {{ route('zones.update', $zone->id) }} @else {{ route('zones.store') }} @endisset"
                      enctype="multipart/form-data">
                    <div class="card-body">
                        @isset($zone) @method('PUT') @endisset
                        @csrf

                        <x-inputbs4
                                name="title"
                                type="text"
                                label="Nom"
                                :value="isset($zone) ? $zone->title : ''"
                        ></x-inputbs4>

                        <div class="form-group">
                            <label for="quartier_id">Quartier</label>
                            <select id="quartier_id" name="quartier_id" class="form-control">
                                <option value="#" selected>--- Choisir un quartier ---</option>
                                @foreach($quartiers as $quartier)
                                    <option value=" {{ $quartier->id }}"
                                            @if(old('quartier_id', isset($zone) ? $zone->quartier_id : '') == $quartier->id) selected @endif>
                                        {{ $quartier->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6">
                                <a class="btn btn-mat btn-inverse btn-block"
                                   href="{{ route('zones.index') }}" role="button">
                                    <i class="fas fa-arrow-left"></i>
                                    Retour à la liste des zone
                                </a>
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
@endsection