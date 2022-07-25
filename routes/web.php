<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\habitacionController;
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

Route::get("/habitacion/{numero_habitacion}", [habitacionController::class, "formularioHabitacion"])->name("habitacion");

Route::post("/habitacion/{numero_habitacion}", [habitacionController::class, "alquilarHabitacion"])->name("alquilarHabitacion");

Route::get("/devolverHabitacion/{numero_habitacion}", [habitacionController::class, "devolverHabitacion"])->name("devolverHabitacion");

Route::get("/habilitarHabitacion/{numero_habitacion}", [habitacionController::class, "habilitarHabitacion"])->name("habilitarHabitacion");

Route::post("/editarUsuario", [usuariosController::class, "editarUsuario"])->name("editarUsuario");

Route::post("/eliminarUsuario/", [usuariosController::class, "eliminarUsuario"])->name("eliminarUsuario");
