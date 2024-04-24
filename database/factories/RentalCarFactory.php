<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RentalCar>
 */
class RentalCarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::factory()->create();
        $car = Car::factory()->create();

        return [
            //
            "no_sim" => $user->no_sim,
            "no_plat" => $car->no_plat,
            "tgl_rental" => fake()->dateTime(),
            "tgl_return" => fake()->dateTime(),
        ];
    }
}
