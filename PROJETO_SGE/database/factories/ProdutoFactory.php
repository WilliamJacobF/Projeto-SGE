<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'produto' => fake()->word(),
            'codigo' => fake()->numberBetween(500, 5000),
            'data_de_recebimento' => fake()->dateTimeBetween( '-1 year', 'now'),
            'preço_unitario' => fake()->numberBetween(1, 9999),
        ];
    }
}