<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\habitacionController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\reportesController;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\ventasController;
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

Route::get("/dashboard", [dashboardController::class, "mostrarDashboard"])->name("dashboard");

Route::get("/usuarios", [usuariosController::class, "listarUsuarios"])->name("usuarios");

Route::post("/crearUsuario", [usuariosController::class, "crearUsuario"])->name("creandoUsuario");

Route::post("/", [loginController::class, "login"])->name("login");

Route::get("/habitacion/{numero_habitacion}", [habitacionController::class, "formularioHabitacion"])->name("habitacion");

Route::post("/habitacion/{numero_habitacion}", [habitacionController::class, "alquilarHabitacion"])->name("alquilarHabitacion");

Route::get("/devolverHabitacion/{numero_habitacion}", [habitacionController::class, "devolverHabitacion"])->name("devolverHabitacion");

Route::get("/habilitarHabitacion/{numero_habitacion}", [habitacionController::class, "habilitarHabitacion"])->name("habilitarHabitacion");

Route::post("/editarUsuario", [usuariosController::class, "editarUsuario"])->name("editarUsuario");

Route::post("/eliminarUsuario/", [usuariosController::class, "eliminarUsuario"])->name("eliminarUsuario");

Route::get("/listarhabitacion", [habitacionController::class, "listarHabitacion"])->name("listarhabitacion");

Route::post("/crearHabitacion", [habitacionController::class, "crearHabitacion"])->name("crearHabitacion");

Route::post("/editarHabitacion", [habitacionController::class, "editarHabitacion"])->name("editarHabitacion");

Route::post("/eliminarHabitacion", [habitacionController::class, "eliminarHabitacion"])->name("eliminarHabitacion");

Route::get("/listarProducto", [productosController::class, "listarProducto"])->name("listarProducto");

Route::post("/crearProducto", [productosController::class, "crearProducto"])->name("crearProducto");

Route::post("/editarProducto", [productosController::class, "editarProducto"])->name("editarProducto");

Route::post("/eliminarProducto", [productosController::class, "eliminarProducto"])->name("eliminarProducto");

Route::get("/ventas", [ventasController::class, "ventas"])->name("ventas");

Route::post("/realizarVenta", [ventasController::class, "realizarVenta"])->name("realizarVenta");

Route::get("/reporte", [reportesController::class, "reporte"])->name("reporte");

Route::post("/filtrarReporte", [reportesController::class, "filtrar"])->name("filtrarReporte");

Route::get("cerrarSesion", [loginController::class, "logout"])->name("cerrarSesion");
