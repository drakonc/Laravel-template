<?php

namespace App\Repositories;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\Role\{CrearRoleRequest, EditarRoleRequest};

class RoleRepository extends BaseRepository {

    public function __construct(Role $role) {
        parent::__construct($role);
    }

    public function ObtenerTodosLosRoles() {
        return Role::get();
    }

    public function ObtenerUnoRole(int $id) {
        return Role::find($id);
    }

    public function ObtenerTodosLosPermisos() {
        return Permission::get();
    }

    public function ObtenerTodosLosPermisosDeUnRole(int $id) {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
        return  $rolePermissions;
    }

    public function CrearRegistro(CrearRoleRequest $request) {
       try{
            $role = Role::create(['name' => $request->name]);
            $role->syncPermissions($request->permission);
            $respuesta['status'] = 200;
            $respuesta['message'] = "Role Guardado Exitosamente";
            $respuesta['typealert'] = "success";
            return $respuesta;          
       }catch(Exception $ex){
            $respuesta['status'] = 500;
            $respuesta['message'] = "Error al Guardar el Role ".$ex->getMessage();
            $respuesta['typealert'] = "danger";
            return $respuesta;
       }
        
    }

    public function ActualizarRegistro(EditarRoleRequest $request, int $id) {
        try{
            $role = $this->ObtenerUnoRole($id);
            $role->syncPermissions($request->input('permission'));
            $respuesta['status'] = 200;
            $respuesta['message'] = "Role Actualizado Exitosamente";
            $respuesta['typealert'] = "success";
            return $respuesta;
        }catch(Exception $ex){
            $respuesta['status'] = 500;
            $respuesta['message'] = "Error al Actualizar el Role ".$ex->getMessage();
            $respuesta['typealert'] = "danger";
            return $respuesta;
        }
    }

    public function EliminarRegistro(int $id) {
        try 
        {
            DB::table("roles")->where('id',$id)->delete();
            $respuesta['status'] = 200;
            $respuesta['message'] = "Role Eliminado Exitosamente";
            $respuesta['typealert'] = "success";
            return $respuesta; 
        }catch (Exception $e) {
            $respuesta['status'] = 500;
            $respuesta['message'] = "Error al Eliminar el Role ".$ex->getMessage();
            $respuesta['typealert'] = "danger";
            return $respuesta;
        }
    }

}