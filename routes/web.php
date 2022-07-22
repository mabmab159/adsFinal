<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\usuariosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('inicio');
});

Route::get("/plantilla", function () {
    return view("plantillas.plantilla");
});

Route::get("/dashboard", [dashboardController::class, "mostrarDashboard"]);

Route::get("/usuarios", [usuariosController::class, "listarUsuarios"])->name("usuarios");

Route::post("/crearUsuario", [usuariosController::class, "crearUsuario"])->name("creandoUsuario");

Route::post("/", [loginController::class, "login"])->name("login");
