<?php

namespace Database\Factories;

use App\Models\CarImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarImage>
 */
class CarImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_path' => fake()->imageUrl(),
            'position' => function(array $attributes) {
                return CarImage::find('car_id' , $attributes['car_id'])->count() + 1;
            },
        ];
    }
}
