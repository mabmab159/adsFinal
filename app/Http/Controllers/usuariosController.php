<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usuariosController extends Controller
{

    public function listarUsuarios()
    {
        return view("usuarios")->with("usuarios", User::all());
    }

    public function crearUsuario(Request $request)
    {
        $usuario = new User();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->cargo = $request->cargo;
        $usuario->usuario = $request->usuario;
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        return redirect("/dashboard");
    }
}
