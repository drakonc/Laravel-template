<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LoginLayout extends Component
{

    public function __construct(){
        
    }

    
    public function render(){
        return view('layout.login-layout');
    }
}
