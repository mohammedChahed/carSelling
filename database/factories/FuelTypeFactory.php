<?php

namespace Database\Factories;

use App\Models\FuelType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FuelType>
 */
class FuelTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = FuelType::class;
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Petrol', 'Diesel', 'Electric', 'Hybrid']),
        ];
    }
}
