<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\RentalCar;
use App\Models\ReturnCar;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Car::factory(5)->create();
        RentalCar::factory(2)->create();
        ReturnCar::factory(1)->create();
    }
}
