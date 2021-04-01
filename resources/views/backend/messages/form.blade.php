@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <form method="POST" action="">
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label>Choisir les agences</label>
                            <select id="agence_id" name="agence[]" class="custom-select custom-select-md mb-3 {{ $errors->has('agence') ? ' is-invalid' : '' }}" multiple>
                                @foreach($agences as $agence)
                                    <option value=" {{ $agence->id }}"
                                                {{ (collect(old('agence'))->contains($agence->id)) ? 'selected':'' }}>
                                        {{ $agence->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('agence'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('agence') }}
                                </div>
                            @endif
                        </div>

                        <x-textareabs4
                                name="message"
                                label="Message"
                                rows="5"
                        ></x-textareabs4>

                        <div class="row justify-content-end mb-0">
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-success">Envoyer message</button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection