<?php

use App\Http\Controllers\loginController;
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

Route::get("/dashboard", function () {
    return view("dashboard");
});

Route::get("/crearUsuario", function () {
    return view("crearUsuario");
})->name("crearUsuario");

Route::post("/crearUsuario", function (){

})->name("creandoUsuario");

Route::post("/", [loginController::class, "login"])->name("login");
