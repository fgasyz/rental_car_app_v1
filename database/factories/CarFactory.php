<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'no_plat' => fake()->regexify('[A-Z]{5}[0-4]{3}'),
            'merk' => fake()->word(),
            'model' => fake()->word(),
            'image' => 'images/car.png',
            'tarif_rental' => '250000',
            'status' => true
        ];
    }
}
