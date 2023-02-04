<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'disponible' => boolval($this->faker->numberBetween(1,1)),
            'cant_personas' => $this->faker->numberBetween(1, 20)
        ];
    }
}
