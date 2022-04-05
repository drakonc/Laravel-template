<?php

namespace App\Repositories;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Usuario\CrearUsuarioRequest;

class UsuarioRepository extends BaseRepository {

    public function __construct(Usuario $usuario) {
        parent::__construct($usuario);
    }

    public function ObtenerTodo() {
        return Usuario::get();
    }


    public function CrearRegistro(CrearUsuarioRequest $request,$role) {
        try{
            $request = $request->except(['_token']);
            $request['password'] = Hash::make($request['password']);
            $usuario = Usuario::create($request);
            $usuario->assignRole($role);
            $respuesta['status'] = 200;
            $respuesta['message'] = "Usuario Creado Con Exito";
            $respuesta['typealert'] = "success";
            return $respuesta;
        }catch(Exception $ex){
            $respuesta['status'] = 400;
            $respuesta['message'] = "Problemas al crear el usuario";
            $respuesta['typealert'] = "danger";
            return $respuesta; 
        }
    }

    public function ActualizarRegistro(Request $request, Usuario $usuario) {
       
    }

    public function EliminarRegistro(Usuario $usuario) {
        
    }

}