<?php

namespace Database\Factories;

use App\Models\Comanda;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComandaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comanda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cerrada' => $this->faker->boolean(),
            'total' => $this->faker->randomFloat(2),
            'comentarios' => $this->faker->text(),
        ];
    }
}
