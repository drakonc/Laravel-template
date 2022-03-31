<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class RoleConrtoller extends Controller
{
  
    public function index(){
        $roles = Role::get();
        return view('roles.index')->with('roles', $roles);
    }

  
    public function create(){
        $permission = Permission::get();
        return view('roles.crear',compact('permission'));
    }


    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
    
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('roles.index');
    }



    public function edit($id){
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
    
        return view('roles.edit',compact('role','permission','rolePermissions'));
    }


    public function update(Request $request, $id){
        $this->validate($request, [
            'permission' => 'required',
        ]);
        $role = Role::find($id);
        $role->syncPermissions($request->input('permission'));    
        return redirect()->route('roles.index');
    }

  
    public function destroy($id){  
        try 
        {
            DB::table("roles")->where('id',$id)->delete();
            return back()->with('message','Role Eliminado Exitosamente')->with('typealert','success')->withInput();  
        }catch (Exception $e) {
            return back()->json($e->getMessage(), 500);
        }
    }
}
