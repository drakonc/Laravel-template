<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class EditarRoleRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'permission' => 'required',
        ];
    }

    public function messages(){
        return [
            'permission' => 'Seleccione un Permiso'
        ];
    }

    public function attributes(){
        return [
            'permission' => "Permiso"
        ];
    }
}
