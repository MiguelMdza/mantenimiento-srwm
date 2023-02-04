<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipoAlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_alimento')->insert([
            'nombre' => 'Alimentos',
        ]);
        DB::table('tipo_alimento')->insert([
            'nombre' => 'Bebidas',
        ]);
    }
}
