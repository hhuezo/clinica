<?php

namespace App\Http\Requests\seguridad;

use Illuminate\Foundation\Http\FormRequest;

class RolesFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function true()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Nombre' => 'name|max:150',
        ];
    }
}
