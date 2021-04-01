<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgrammeResquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "date_debut" => ['required', 'date', 'before:date_fin'],
            "date_fin" => ['required', 'date', 'after:date_debut'],
            "jour" => ['required', 'array', 'min:1'],
            "entreprise_id" => ['required'],
            "zone_id" => ['required']
        ];
    }
}
