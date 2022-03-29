<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;

class CrearUsuarioRequest extends FormRequest
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'usuario' => 'required|min:4|max:15|unique:App\Models\Usuario,usuario',
            'email' => 'required|email|unique:App\Models\Usuario,email',
            'rol_id' => 'required',
            'password' => 'required|min:8|max:25',
            'estado' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'Se Requiere los Nombres del Usuario',
            'apellidos.required' => 'Se Requiere los Apellidos del Usuario',
            'usuario.required' => 'El Usuario es Requerido.',
            'usuario.min' => 'El Usuario es Minimo de 4 caracteres .',
            'usuario.max' => 'El Usuario es Maximo de 15 caracteres.',
            'usuario.unique' => 'Ya Existe ese Usuario.',
            'email.required' => 'El Correo Electrónico es Requerido.',
            'email.email' => 'El Formato de su Correo Electrónico es Invalido.',
            'email.unique' => 'Ya Existe un Usuario Registrado con ese Correo Electrónico.',            
            'rol_id.required' => 'El Rol es Requerido.',
            'password.required' => 'La contraseña es Requerida',
            'password.min' => 'La Contraseña Debe Tener al Menos 8 Caracteres.',
            'password.max' => 'La Contraseña Debe Tener al Maximo 25 Caracteres.',
            'estado' => 'Seleccione un estado para el usuario'
        ];
    }

    public function attributes()
    {
        return [
            'nombres' => 'Nombres del Usuario',
            'apellidos' => 'Apellidos del usuario',
            'usuario' => 'Usuario del Sistema',
            'email' => 'Correo Electronico',
            'rol_id' => 'Role del usuario',
            'password' => 'Contraseña',
            'estado' => 'Estado'
        ];
    }

}
