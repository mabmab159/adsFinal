<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\habitacion>
 */
class habitacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "numero_habitacion" => $this->faker->unique()->numberBetween(1, 20),
            "piso" => $this->faker->randomElement([1, 2, 3]),
            "precio" => $this->faker->numberBetween(50, 100),
            "estado" => $this->faker->randomElement([0, 1, 2])
        ];
    }
}
