<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;

class habitacionController extends Controller
{
    public function formularioHabitacion($numero_habitacion)
    {
        $habitacion = Habitacion::all()->where("numero_habitacion", $numero_habitacion)->first();
        return view("formularioHabitacion")->with("habitacion", $habitacion);
    }
}
