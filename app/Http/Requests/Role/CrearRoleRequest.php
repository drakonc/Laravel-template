<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class CrearRoleRequest extends FormRequest
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
            'nombre' => 'required|unique:App\Models\Role,nombre'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Se Requiere un nombre para el rol',
            'nombre.unique' => 'El rol que intenta Crear ya Exite'
        ];
    }

    public function attributes(){
        return [
            'nombres' => 'Nombres del Rol'
        ];
    }
}
