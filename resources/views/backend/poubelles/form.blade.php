@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <form method="POST"
                      action="@isset($poubelle) {{ route('poubelles.update', $poubelle->id) }} @else {{ route('poubelles.store') }} @endisset"
                      enctype="multipart/form-data">
                    <div class="card-body">
                        @isset($poubelle) @method('PUT') @endisset
                        @csrf

                        <x-inputbs4
                                name="numero"
                                type="text"
                                label="Numéro"
                                :value="isset($poubelle) ? $poubelle->numero : ''"
                        ></x-inputbs4>

                        <x-inputbs4
                                name="latitude"
                                type="text"
                                label="Coordonnée latitude"
                                :value="isset($poubelle) ? $poubelle->latitude : ''"
                        ></x-inputbs4>

                        <x-inputbs4
                                name="longitude"
                                type="text"
                                label="Coordonnée Longitude"
                                :value="isset($poubelle) ? $poubelle->longitude : ''"
                        ></x-inputbs4>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="public" name="public"
                                       @if(old('public', isset($poubelle) ? $poubelle->public : false)) checked @endif>
                                <label class="custom-control-label" for="public">Poubelle pubique</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Zone</label>
                            <select id="zone_id" name="zone_id" class="custom-select custom-select-md mb-3">
                                <option value="#" selected>--- Choisir une zone ---</option>
                                @foreach($zones as $zone)
                                    <option value=" {{ $zone->id }}"
                                            @if(old('zone_id', isset($poubelle) ? $poubelle->zone_id : '') == $zone->id) selected @endif>
                                        {{ $zone->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6">
                                <a class="btn btn-mat btn-inverse btn-block" href="{{ route('poubelles.index') }}" role="button">
                                    <i class="fas fa-arrow-left"></i>
                                    Retour à la liste des poubelles
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