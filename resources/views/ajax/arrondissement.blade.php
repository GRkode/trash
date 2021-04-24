<option value="">Arrondissement</option>
@if(!empty($states))
    @foreach($states as $state)
        <option value="{{ $state->id }}"
                @if(old('arrondissement', isset($arrondissementSelect) ? $arrondissementSelect : '') == $state->id) selected @endif>
            {{ $state->title }}
        </option>
    @endforeach
@else
    <option value="" >
        Pas de ressources enregistrées
    </option>
@endif
