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
        Categoria::factory()->create([
            'nombre' => 'Tecnología',
            'descripcion' => 'Productos tecnológicos',
        ]);
        Categoria::factory()->create([
            'nombre' => 'Aseo',
            'descripcion' => 'Productos para el aseo',
        ]);
        Categoria::factory()->create([
            'nombre' => 'Entretenimiento',
            'descripcion' => 'Productos que son entretenidos para los clientes',
        ]);
    }
}
