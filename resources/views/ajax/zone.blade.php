<option value="">--- selectionner la zone ---</option>
@if(!empty($states))
    @foreach($states->zones as $state)
        <option value="{{ $state->id }}"
                @if(old('zone', isset($programme) ? $programme->zone_id : '') == $state->id) selected @endif>
            {{ $state->title }}
        </option>
    @endforeach
@else
    <option value="" >
        Zones non attribuées à l'agence
    </option>
@endif