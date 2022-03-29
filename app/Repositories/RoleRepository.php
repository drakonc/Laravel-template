<?php

namespace App\Repositories;

use App\Models\Role;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\Role\CrearRoleRequest;

class RoleRepository extends BaseRepository {

    public function __construct(Role $role) {
        parent::__construct($role);
    }

    public function CrearRegistro(CrearRoleRequest $request) {
        $datos['nombre'] = $request->nombre;
        $datos['permisos'] = json_encode($request->except(['_token','nombre']));
        $role = new Role();
        if(empty($request->except(['_token','nombre']))){
            $respuesta['status'] = 404;
            $respuesta['message'] = "Seleccione al menos un permiso";
            $respuesta['typealert'] = "warning";
            return $respuesta;
        }else{
            $role->nombre = $datos['nombre'];
            $role->permisos = $datos['permisos'];
            if($role->save()){
                $respuesta['status'] = 200;
                $respuesta['message'] = "Role Guardado Exitosamente";
                $respuesta['typealert'] = "success";
                return $respuesta;
            }else{
                $respuesta['status'] = 500;
                $respuesta['message'] = "Error al Guardar el Role";
                $respuesta['typealert'] = "danger";
                return $respuesta;
            }
        }
    }

    public function ActualizarRegistro(Request $request, Role $role) {
        $datos['permisos'] = json_encode($request->except(['_token','nombre']));
        if(empty($request->except(['_token','nombre']))){
            $respuesta['status'] = 404;
            $respuesta['message'] = "Seleccione al menos un permiso";
            $respuesta['typealert'] = "warning";
            return $respuesta;
        }else{
            if($role->whereEstado(true)->whereId($role->id)->update(['permisos'=>$datos['permisos']])){
                $respuesta['status'] = 200;
                $respuesta['message'] = "Role Actualizado Exitosamente";
                $respuesta['typealert'] = "success";
                return $respuesta;
            }else{
                $respuesta['status'] = 500;
                $respuesta['message'] = "Error al Actualizar el Role";
                $respuesta['typealert'] = "danger";
                return $respuesta;
            }
        }
    }

    public function EliminarRegistro(Role $role) {
        if($role->delete()){
            $respuesta['status'] = 200;
            $respuesta['message'] = "Role Eliminado Exitosamente";
            $respuesta['typealert'] = "success";
            return $respuesta;
        }else{
            $respuesta['status'] = 500;
            $respuesta['message'] = "Error al Eliminar el Role";
            $respuesta['typealert'] = "danger";
            return $respuesta;
        }
    }

}