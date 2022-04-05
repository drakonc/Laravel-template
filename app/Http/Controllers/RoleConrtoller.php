<?php

namespace App\Http\Controllers;


use App\Repositories\RoleRepository;
use App\Http\Requests\Role\{CrearRoleRequest, EditarRoleRequest};

class RoleConrtoller extends Controller
{

    private $roleRepository;

    public function __construct(RoleRepository $roleRepository){
        $this->roleRepository = $roleRepository;
    }
  
    public function index(){
        $roles = $this->roleRepository->ObtenerTodosLosRoles();
        return view('roles.index')->with('roles', $roles);
    }

  
    public function create(){
        $permission = $this->roleRepository->ObtenerTodosLosPermisos();
        return view('roles.crear')->with('permission', $permission);
    }


    public function store(CrearRoleRequest $request){
        $respuesta = $this->roleRepository->CrearRegistro($request);
        if ($respuesta['status'] == 200){
            return redirect('/roles')->with('message',$respuesta['message'])->with('typealert',$respuesta['typealert'])->withInput();
        }else{
            return back()->with('message',$respuesta['message'])->with('typealert',$respuesta['typealert'])->withInput();
        }
    }

    public function edit($id){
        $role = $this->roleRepository->ObtenerUnoRole($id); 
        $permission = $this->roleRepository->ObtenerTodosLosPermisos();
        $rolePermissions = $this->roleRepository->ObtenerTodosLosPermisosDeUnRole($id);
        return view('roles.edit')->with('role', $role)->with('permission', $permission)->with('rolePermissions', $rolePermissions);
    }


    public function update(EditarRoleRequest $request, $id){
        $respuesta = $this->roleRepository->ActualizarRegistro($request,$id);
        if ($respuesta['status'] == 200){
            return redirect('/roles')->with('message',$respuesta['message'])->with('typealert',$respuesta['typealert'])->withInput();
        }else{
            return back()->with('message',$respuesta['message'])->with('typealert',$respuesta['typealert'])->withInput();
        }
    }

  
    public function destroy($id){
        $respuesta = $this->roleRepository->EliminarRegistro($id);  
        if ($respuesta['status'] == 200){
            return back()->with('message',$respuesta['message'])->with('typealert',$respuesta['typealert'])->withInput();
        }else{
            return back()->json($respuesta['message'],$respuesta['status']);
        }
    }
}
