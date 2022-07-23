<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use App\Models\Habitacion;
use Illuminate\Http\Request;

class habitacionController extends Controller
{
    public function formularioHabitacion($numero_habitacion)
    {
        $habitacion = Habitacion::all()->where("numero_habitacion", $numero_habitacion)->first();
        return view("formularioHabitacion")->with("habitacion", $habitacion);
    }

    public function alquilarHabitacion($numero_habitacion, Request $request)
    {
        $habitacion = Habitacion::all()->where("numero_habitacion", $numero_habitacion)->first();
        $habitacion->estado = 1;
        $habitacion->save();
        //Guardar el alquiler para la auditoria
        $alquiler = new Alquiler();
        $alquiler->numero_habitacion = $request->numero_habitacion;
        $alquiler->cliente = $request->cliente;
        $alquiler->dni = $request->dni;
        $alquiler->save();
        return redirect("/dashboard");
    }

    public function devolverHabitacion($numero_habitacion)
    {
        $habitacion = Habitacion::all()->where("numero_habitacion", $numero_habitacion)->first();
        $habitacion->estado = 2;
        $habitacion->save();
        return redirect("/dashboard");
    }

    public function habilitarHabitacion($numero_habitacion)
    {
        $habitacion = Habitacion::all()->where("numero_habitacion", $numero_habitacion)->first();
        $habitacion->estado = 0;
        $habitacion->save();
        return redirect("/dashboard");
    }
}
