<option value="">Commune</option>
@if(!empty($states))
    @foreach($states as $state)
        <option value="{{ $state->id }}"
                @if(old('commune', isset($communeSelect) ? $communeSelect : '') == $state->id) selected @endif>
            {{ $state->title }}
        </option>
    @endforeach
@else
    <option value="" >
        Pas de ressources enregistrées
    </option>
@endif