<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
             'stock' => $this->faker->numberBetween(1, 200), 
             'Descripcion' => $this->faker->paragraph(),
             'precio' => $this->faker->numberBetween(1000, 1000000),
             'categoria_id' => $this->faker->numberBetween(1, 3)
        ];
    }
}
