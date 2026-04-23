<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Models;
use App\Models\User;
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
    protected $model = Car::class;
    public function definition(): array
    {
        return [
            'maker_id' => Maker::inRandomOrder()->first()->id,
            'model_id' => function(array $attributes) {
                return Models::where('maker_id', $attributes['maker_id'])->inRandomOrder()->first()->id;
            },
            'year' => fake()->year(),
            'price' => fake()->numberBetween(10000, 80000),
            'vin' => fake()->unique()->bothify('VIN###???'),
            'mileage' => fake()->numberBetween(0, 200000),
            'car_type_id' => CarType::inRandomOrder()->first()->id ,
            'fuel_type_id' => FuelType::inRandomOrder()->first()->id ,
            'user_id' => User::inRandomOrder()->first()->id,
            'city_id' => City::inRandomOrder()->first()->id,
            'address' => fake()->address(),
            'phone' => function(array $attributes) {
                return User::find($attributes['user_id'])->phone ;
            },
            'description' => fake()->text(),
            'published_at' => now(),
        ];
    }
}
