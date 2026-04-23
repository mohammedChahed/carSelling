<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarFeature;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Models;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CarType::factory()->sequence(
            ['name' => 'Sedan'],
            ['name' => 'SUV'],
            ['name' => 'Hatchback'],
            ['name' => 'Convertible'],
            ['name' => 'Coupe'],
            ['name' => 'Minivan'],
            ['name' => 'Pickup Truck'],
            ['name' => 'Station Wagon'],
            ['name' => 'Sports Car'],
        )->count(9)->create();

        FuelType::factory()->sequence(
            ['name' => 'Gasoline'],
            ['name' => 'Diesel'],
            ['name' => 'Electric'],
            ['name' => 'Hybrid'],
            
        )->count(4)->create();

        $states = [
            'California' => ['Los Angeles', 'San Francisco', 'San Diego', 'Sacramento'],
            'Texas' => ['Houston', 'San Antonio', 'Dallas', 'Austin', 'Fort Worth'],
            'Florida' => ['Miami', 'Orlando', 'Tampa', 'Jacksonville'],
            'New York' => ['New York City', 'Buffalo', 'Rochester', 'Yonkers'],
            'Illinois' => ['Chicago', 'Aurora', 'Naperville', 'Joliet'],
            'Pennsylvania' => ['Philadelphia', 'Pittsburgh', 'Allentown'],
            'Ohio' => ['Columbus', 'Cleveland', 'Cincinnati', 'Toledo', 'Akron'],
            'Georgia' => ['Atlanta', 'Augusta', 'Columbus', 'Savannah'],
            'North Carolina' => ['Charlotte', 'Raleigh', 'Greensboro', 'Durham'],
            'Michigan' => ['Detroit', 'Grand Rapids', 'Warren', 'Sterling Heights'],
        ];

        foreach($states as $state => $cities) {
            State::factory()
                ->has(
                    City::factory()
                    ->count(count($cities))
                    ->sequence(...array_map(fn($city) => ['name' => $city], $cities))
                )
                ->create(['name' => $state]); 
        }

        $makers = [
            'Toyota' => ['Camry', 'Corolla', 'Highlander', 'RAV4', 'Prius'],
            'Ford' => ['F-150', 'Escape', 'Explorer', 'Mustang', 'Fusion'],
            'Honda' => ['Civic', 'Accord', 'CR-V', 'Pilot', 'Odyssey', 'HR-V'],
            'Chevrolet' => ['Silverado', 'Equinox', 'Malibu', 'Impala', 'Cruze'],
            'Nissan' => ['Altima', 'Sentra', 'Rogue', 'Maxima', 'Murano'],
            'Lexus' => ['RX400', 'RX450', 'RX350', 'ES350', 'LS500', 'IS300'],
        ];

        foreach($makers as $maker => $models) {
            Maker::factory()
                ->has(
                    Models::factory()
                    ->count(count($models))
                    ->sequence(...array_map(fn($model) => ['name' => $model], $models))
                )
                ->create(['name' => $maker]);
        }

        User::factory()
            ->count(3)
            ->has(Car::factory()
                        ->count(50)
                        ->has(
                            CarImage::factory()->count(3)
                            ->sequence(fn (Sequence $sequence) => 
                            ['position' => $sequence->index + 1])
                            )
                        ->hasFeatures(), 'favouriteCars'
            )
            ->create();


        
    }
}
