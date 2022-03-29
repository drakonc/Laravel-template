<?php

namespace App\Http\Controllers;

use Str;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function __construct(){ }

    public function getHome() {       
        return view('dashboards.home');
    }
}
