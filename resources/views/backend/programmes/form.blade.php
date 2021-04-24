@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <form method="POST"
                      action="@isset($programme) {{ route('programmations.update', $programme->id) }}
                      @else {{ route('programmations.store') }} @endisset">
                    <div class="card-body">
                        @isset($programme) @method('PUT') @endisset
                        @csrf

                        <x-inputbs4
                                name="date_debut"
                                type="date"
                                label="Date de début programmation"
                                :value="isset($programme) ? $programme->date_debut : ''"
                                required="true"
                        ></x-inputbs4>

                        <x-inputbs4
                                name="date_fin"
                                type="date"
                                label="Date de fin programmation"
                                :value="isset($programme) ? $programme->date_fin : ''"
                                required="true"
                        ></x-inputbs4>

                        <div class="form-group">
                            <label>Jour de passage</label>
                            <select id="jour" name="jour[]" class="custom-select custom-select-md mb-3 {{ $errors->has('jour') ? ' is-invalid' : '' }}" multiple required>
                                @foreach($jours as $jour)
                                    @isset($programme)
                                        <option value="{{ $jour['title'] }}" {{ (collect(old('jour') ?: $programme->jours)->contains($jour['title'])) ? 'selected':'' }}>
                                    @else
                                        <option value=" {{ $jour['title'] }}"
                                                {{ (collect(old('jour'))->contains($jour['title'])) ? 'selected':'' }}>
                                    @endif
                                          {{$jour['title']}}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('jour'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jour') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Agence</label>
                            <select id="agence_id" name="agence_id" class="custom-select custom-select-md mb-3 {{ $errors->has('agence_id') ? ' is-invalid' : '' }}" required>
                                <option value="" selected>--- Choisir l'agence ---</option>
                                @foreach($entreprises as $entreprise)
                                    <option value=" {{ $entreprise->id }}"
                                            @if(old('agence_id', isset($programme) ? $programme->agence_id : '') == $entreprise->id) selected @endif>
                                        {{ $entreprise->name}}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('agence_id'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('agence_id') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <a class="btn btn-primary" href="{{ route('programmations.index') }}" role="button">
                                    <i class="fas fa-arrow-left"></i>
                                    Retour à la liste des programmes
                                </a>
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(function(){
            $("#agence_id").change(function () {
                if ($(this).val() !== "") {
                    $.ajax({
                        /* the route pointing to the post function */
                        url: '{{route('get.zone')}}',
                        type: 'get',
                        data: {id:$(this).val()},
                        dataType: 'JSON',
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            $("#zone_id").empty().append(data.options);
                        }
                    });
                }else{
                    $("#zone_id").empty('');
                }
            });
        });
    </script>
@stop