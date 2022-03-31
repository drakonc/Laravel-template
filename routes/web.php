<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleConrtoller;
use App\Http\Controllers\ConnectConrtoller;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Ruta Logeo
Route::get('/login',[ConnectConrtoller::class,'GetLogin'])->name('guest.login');

Route::get('/',[DashboardController::class,'getHome'])->name('admin.home');

Route::resource('roles', RoleConrtoller::class)->except(['destroy']);
Route::get('/roles/{id}/destroy',[RoleConrtoller::class,'destroy'])->name('roles.destroy');