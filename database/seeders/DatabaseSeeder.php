<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Habitacion;
use App\Models\Producto;
use App\Models\User;
use Database\Factories\userFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            "nombre" => "Miguel",
            "apellido" => "Berrio",
            "cargo" => "administrador",
            "usuario" => "miguel",
            "password" => Hash::make("123")
        ]);

        User::factory()->create([
            "nombre" => "Luis",
            "apellido" => "Zapata",
            "cargo" => "recepcionista",
            "usuario" => "luis",
            "password" => Hash::make("123")
        ]);

        Habitacion::factory(20)->create();
        Producto::factory(5)->create();
    }
}
