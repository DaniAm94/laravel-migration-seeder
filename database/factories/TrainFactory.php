<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Train;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agency' => fake()->word(),
            'starting_station' => fake()->word(),
            'arrival_station' => fake()->word(),
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'train_code' => fake()->ean8(),
            'wagons_num' => fake()->randomDigitNotNull(),
            'delayed' => fake()->boolean(),
            'deleted' => fake()->randomElement(['SI', 'NO'])
        ];
    }
}
