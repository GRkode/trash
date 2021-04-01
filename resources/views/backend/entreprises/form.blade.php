@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <form method="POST"
                      action="@isset($agence) {{ route('agences.update', $agence->id) }} @else {{ route('agences.store') }} @endisset"
                      enctype="multipart/form-data">
                    <div class="card-body">
                        @isset($agence) @method('PUT') @endisset
                        @csrf
                        <x-inputbs4
                                name="name"
                                type="text"
                                label="Nom"
                                :value="isset($agence) ? $agence->name : ''"
                        ></x-inputbs4>

                        <x-inputbs4
                                name="address"
                                type="text"
                                label="Adresse"
                                :value="isset($agence) ? $agence->address : ''"
                        ></x-inputbs4>

                        <x-inputbs4
                                name="phone"
                                type="text"
                                label="Téléphone"
                                :value="isset($agence) ? $agence->phone : ''"
                        ></x-inputbs4>

                        <x-inputbs4
                                name="email"
                                type="email"
                                label="Email"
                                :value="isset($agence) ? $agence->email : ''"
                        ></x-inputbs4>

                        <div class="form-group">
                            <label>Choisir les zones</label>
                            <select id="zone_id" name="zone_id" class="custom-select custom-select-md mb-3 {{ $errors->has('zone') ? ' is-invalid' : '' }}">
                                @foreach($zones as $zone)
                                    <option value=" {{ $zone->id }}"
                                            @if(old('zone_id', isset($agence) ? $agence->zone_id : '') == $zone->id) selected @endif>
                                        {{ $zone->title }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('zone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('zone') }}
                                </div>
                            @endif
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6">
                                <a class="btn btn-mat btn-inverse btn-block"
                                   href="{{ route('agences.index') }}" role="button">
                                    <i class="fas fa-arrow-left"></i>
                                    Retour à la liste des agences
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