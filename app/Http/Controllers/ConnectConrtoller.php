<?php

namespace App\Http\Controllers;

use Validator,Auth;
use Illuminate\Http\Request;

class ConnectConrtoller extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except(['getLogout']);
    }
    
    public function GetLogin(){
        return view('login.login');
    }

    public function PostLogin(Request $request){
        $rules = [
            'usuario' => 'required|min:6',
            'password' => 'required|min:8',
          ];

          $messages = [
            'usuario.required' => 'Su Usuario es Requerido.',
            'usuario.min' => 'El Usuario debe tener minimo 6 Caracteres.',
            'password.required' => 'Por Favor Escriba una Contraseña.',
            'password.min' => 'La Contraseña Debe Tener al Menos 8 Caracteres.',
        ];

        $validator = Validator::make($request->all(),$rules,$messages);

        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se Ha Producido Un Herror')->with('typealert','danger')->withInput();
        else:
            if(Auth::attempt(['usuario'=>$request->input('usuario'),'password'=>$request->input('password')],false)):
                return redirect('/');
            else:
                return back()->withErrors($validator)->with('message','Usuario o Contraseña Erronea')->with('typealert','danger')->withInput();
            endif;
        endif;
    }

    public function GetLogout() {
        Auth::logout();
        return redirect('/login');
    }
}
