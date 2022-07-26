<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use App\Models\Ventas;
use Illuminate\Http\Request;

class reportesController extends Controller
{
    public function reporte()
    {
        $alquileres = Alquiler::whereBetween("created_at", [today(), date_add(today(), date_interval_create_from_date_string("1 day"))])->get();
        $ventas = Ventas::whereBetween("created_at", [today(), date_add(today(), date_interval_create_from_date_string("1 day"))])->get();
        return view("reportes")->with("alquileres", $alquileres)->with("ventas", $ventas);
    }

    public function filtrar(Request $request)
    {
        $alquileres = Alquiler::whereBetween('created_at', [$request->inicio, date_add(date_create($request->fin), date_interval_create_from_date_string("1 day"))])->get();
        $ventas = Ventas::whereBetween("created_at", [$request->inicio, date_add(date_create($request->fin), date_interval_create_from_date_string("1 day"))])->get();
        return view("reportes")->with("alquileres", $alquileres)->with("ventas", $ventas);
    }
}
