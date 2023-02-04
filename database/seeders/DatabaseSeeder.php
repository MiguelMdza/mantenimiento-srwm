<?php

namespace Database\Seeders;

use App\Models\Ingrediente;
use App\Models\Mesa;
use App\Models\Platillo;
use App\Models\Proveedor;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Platillo::factory()->count(10)->create();
        $this->call(tipoAlimentoSeeder::class);
        Ingrediente::factory()->count(10)->create();
        Proveedor::factory()->count(10)->create();
        Mesa::factory()->count(30)->create();
    }
}
