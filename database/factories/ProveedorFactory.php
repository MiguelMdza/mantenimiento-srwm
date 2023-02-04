<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'rfc' => Str::random(10),
            'direccion' => $this->faker->streetAddress(),
            'contacto' => $this->faker->unique()->safeEmail(), // password
            'updated_at' => now(),
            'created_at' => now()
        ];
    }
}
