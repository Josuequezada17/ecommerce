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
            'user_id' => $this->faker->numberBetween(1, 10),
            'categoria_id' => $this->faker->numberBetween(1, 9),
            'modelo' => $this->faker->word,
            'marca_id' => $this->faker->numberBetween(1, 82),
            'anio' => $this->faker->year,
            'version' => $this->faker->word,
            'color' => $this->faker->colorName,
            'cilindros' => $this->faker->numberBetween(3, 12),
            'descripcion' => $this->faker->text,
            'precio' => $this->faker->randomFloat(2, 1000, 10000),
        ];
    }

}
