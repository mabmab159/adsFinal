<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use Illuminate\Http\Client\Request;

class habitacionController extends Controller
{
    public function formularioHabitacion($numero_habitacion)
    {
        $habitacion = Habitacion::all()->where("numero_habitacion", $numero_habitacion)->first();
        return view("formularioHabitacion")->with("habitacion", $habitacion);
    }

    public function alquilarHabitacion($numero_habitacion)
    {
        $habitacion = Habitacion::all()->where("numero_habitacion", $numero_habitacion)->first();
        if ($habitacion->estado <= 1) {
            $habitacion->estado = $habitacion->estado + 1;
            $habitacion->save();
            return redirect("/dashboard");
        }
        if ($habitacion->estado >= 2) {
            $habitacion->estado = 0;
            $habitacion->save();
            return redirect("/dashboard");
        }
    }
}
