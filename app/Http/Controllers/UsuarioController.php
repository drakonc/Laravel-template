<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\Usuario\CrearUsuarioRequest;
use App\Repositories\UsuarioRepository;

class UsuarioController extends Controller
{
    private $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepository){
        $this->usuarioRepository = $usuarioRepository;
    }

    public function index(){
        $usuarios = $this->usuarioRepository->ObtenerTodo();
        return view('usuarios.index')->with('usuarios', $usuarios);
    }

    public function create(){
        $roles = Role::pluck('name','name');
        return view('usuarios.crear')->with('roles',$roles);
    }

    public function store(CrearUsuarioRequest $request){
        $role = $request->input('role');
       $respuesta = $this->usuarioRepository->CrearRegistro($request, $role);
       if ($respuesta['status'] == 200){
           return redirect('/usuarios')->with('message',$respuesta['message'])->with('typealert',$respuesta['typealert'])->withInput();
        }else{
            return back()->with('message',$respuesta['message'])->with('typealert',$respuesta['typealert'])->withInput();
        }
    }
}
