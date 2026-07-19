<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Financia>
 */
class FinanciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descricao' => fake()->text(),
            'tipo' => fake()->name(),
            'valor' => fake()->numberBetween(1, 899),
            'data_de_pagamento' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}