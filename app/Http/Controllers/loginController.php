<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            "usuario" => ["required"],
            "password" => ["required"],
        ]);
        if (Auth::attempt($credentials)) {
            if (\auth()->user()->status == 1) {
                $request->session()->regenerate();
                return redirect("/dashboard");
            }
        }
        return redirect("/");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect("/");
    }
}
