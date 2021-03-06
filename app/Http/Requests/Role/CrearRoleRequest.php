<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class CrearRoleRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Se Requiere un nombre para el rol',
            'name.unique' => 'El rol que intenta Crear ya Exite',
            'permission' => 'Seleccione un Permiso'
        ];
    }

    public function attributes(){
        return [
            'name' => 'Nombre',
            'permission' => "Permiso"
        ];
    }
}
