<?php

namespace Database\Factories;

use App\Models\Comanda;
use App\Models\ComandaMesa;
use App\Models\Mesa;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComandaMesaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ComandaMesa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comanda_id' => Comanda::factory()->create()->id,
            'mesa_id' => Mesa::factory()->create()->id,
        ];
    }
}
