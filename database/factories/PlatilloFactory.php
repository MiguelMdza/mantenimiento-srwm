<?php

namespace Database\Factories;

use App\Models\Platillo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlatilloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Platillo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($this->faker));
        return [
            'nombre' => $this->faker->foodName(),
            'precio' => $this->faker->numberBetween(1, 500),
            'descripcion' => $this->faker->realText(200, 2),
            'tipo_alimento_id' => $this->faker->numberBetween(1, 2)
        ];
    }
}
