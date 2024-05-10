<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(['nombre_categoria' => 'Sedán']);
        Categoria::create(['nombre_categoria' => 'Coupé']);
        Categoria::create(['nombre_categoria' => 'Hatchback']);
        Categoria::create(['nombre_categoria' => 'SUV']);
        Categoria::create(['nombre_categoria' => 'Crossover']);
        Categoria::create(['nombre_categoria' => 'Pick-up']);
        Categoria::create(['nombre_categoria' => 'Deportivo']);
        Categoria::create(['nombre_categoria' => 'Convertible']);
        Categoria::create(['nombre_categoria' => 'Eléctrico/Híbrido']);

    }
}
