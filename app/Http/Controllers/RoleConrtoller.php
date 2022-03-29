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
        //
    }


    public function store(Request $request){
        //
    }


    public function show($id){
        //
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
        //
    }

  
    public function destroy($id){
        //
    }
}
