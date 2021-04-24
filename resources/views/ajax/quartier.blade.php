<option value="">Quartier/Village</option>
@if(!empty($states))
    @foreach($states as $state)
        <option value="{{ $state->id }}"
                @if(old('quartier', isset($quartierSelect) ? $quartierSelect : '') == $state->id) selected @endif>
            {{ $state->title }}
        </option>
    @endforeach
@else
    <option value="" >
        Pas de ressources enregistrées
    </option>
@endif
