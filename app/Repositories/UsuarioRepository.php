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

    public function ObtenerTodoActivo() {
        return $this->model->get();
    }

    public function ObtenerUnoActivo(int $id) {
        return $this->model->whereId($id)->first();
    }

    public function CrearRegistro(CrearUsuarioRequest $request) {
       $request = $request->except(['_token']);
       $request['password'] =  Hash::make($request['password']);
       $usuario = Usuario::create($request);
       if(empty($usuario)){
            $respuesta['status'] = 400;
            $respuesta['message'] = "Problemas al crear el usuario";
            $respuesta['typealert'] = "danger";
            return $respuesta; 
       }else{
            $respuesta['status'] = 200;
            $respuesta['message'] = "Usuario Creado Con Exito";
            $respuesta['typealert'] = "success";
            return $respuesta;
       }
    }

    public function ActualizarRegistro(Request $request, Usuario $usuario) {
       
    }

    public function EliminarRegistro(Usuario $usuario) {
        
    }

}