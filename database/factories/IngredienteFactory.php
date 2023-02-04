<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IngredienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($this->faker));
        return [
            'nombre' => $this->faker->vegetableName(),
            'cantidad' => $this->faker->numberBetween(0, 100),
            'costo' => $this->faker->numberBetween(0,1000),
            'id_proveedor' => 0
        ];
    }
}
