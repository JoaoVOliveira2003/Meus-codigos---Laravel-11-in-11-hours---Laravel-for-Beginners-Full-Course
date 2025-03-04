<?php

namespace Database\Seeders;

use App\Models\CarImage;
use App\Models\Car;
use App\Models\Maker;
use App\Models\CarType;
use App\Models\State;
use App\Models\FuelType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // CarType::factory()
        // ->sequence(
        //     ['name' => 'Sedan'],
        //     ['name' => 'SUV'],
        //     ['name' => 'Hatchback'],
        //     ['name' => 'Pickup'],
        //     ['name' => 'Convertible'],
        //     ['name' => 'Minivan'],
        //     ['name' => 'Coupe'],
        //     ['name' => 'Wagon'],
        //     ['name' => 'Sports Car']
        // )
        // ->count(9)
        // ->create();

        // FuelType::factory()
        // ->count(4) // Defina a quantidade de registros que você quer criar
        // ->sequence(
        //     ['name' => 'Gasoline'],
        //     ['name' => 'Diesel'],
        //     ['name' => 'Electric'],
        //     ['name' => 'Hybrid']
        // )
        // ->create();



        // $states = [
        //     'California' => [
        //         'Los Angeles',
        //         'San Diego',
        //         'San Jose',
        //         'San Francisco',
        //         'Fresno',
        //         'Sacramento',
        //         'Long Beach',
        //         'Oakland',
        //         'Bakersfield',
        //         'Anaheim'
        //     ],
        //     'Texas' => [
        //         'Houston',
        //         'San Antonio',
        //         'Dallas',
        //         'Austin',
        //         'Fort Worth',
        //         'El Paso',
        //         'Arlington',
        //         'Corpus Christi',
        //         'Plano',
        //         'Laredo'
        //     ],
        //     'New York' => [
        //         'New York City',
        //         'Buffalo',
        //         'Rochester',
        //         'Yonkers',
        //         'Syracuse',
        //         'Albany',
        //         'New Rochelle',
        //         'Mount Vernon',
        //         'Schenectady',
        //         'Utica'
        //     ],
        //     'Florida' => [
        //         'Jacksonville',
        //         'Miami',
        //         'Tampa',
        //         'Orlando',
        //         'St. Petersburg',
        //         'Hialeah',
        //         'Tallahassee',
        //         'Port St. Lucie',
        //         'Fort Lauderdale',
        //         'Cape Coral'
        //     ],
        //     'Illinois' => [
        //         'Chicago',
        //         'Aurora',
        //         'Naperville',
        //         'Joliet',
        //         'Rockford',
        //         'Springfield',
        //         'Elgin',
        //         'Peoria',
        //         'Champaign',
        //         'Waukegan'
        //     ]
        // ];
        // foreach ($states as $stateName => $cities) {
        //     $state = State::create(['name' => $stateName]); // Cria o estado

        //     // Cria as cidades associadas a esse estado
        //     $state->cities()->createMany(
        //         array_map(fn($city) => ['name' => $city], $cities) // Não use o "..."
        //     );
        // }


        $makers = [
            'Toyota' => [
                'Corolla',
                'Camry',
                'RAV4',
                'Highlander',
                'Tacoma',
                'Tundra',
                'Sienna',
                'Prius',
                'Avalon',
                'Yaris'
            ],
            'Ford' => [
                'F-150',
                'Mustang',
                'Explorer',
                'Escape',
                'Edge',
                'Bronco',
                'Ranger',
                'Fusion',
                'Expedition',
                'Maverick'
            ],
            'Chevrolet' => [
                'Silverado',
                'Equinox',
                'Malibu',
                'Traverse',
                'Tahoe',
                'Camaro',
                'Blazer',
                'Colorado',
                'Suburban',
                'Impala'
            ],
            'Honda' => [
                'Civic',
                'Accord',
                'CR-V',
                'Pilot',
                'Odyssey',
                'Fit',
                'HR-V',
                'Passport',
                'Ridgeline',
                'Insight'
            ],
            'Nissan' => [
                'Altima',
                'Sentra',
                'Maxima',
                'Rogue',
                'Murano',
                'Pathfinder',
                'Armada',
                'Titan',
                'Versa',
                'Frontier'
            ]
        ];

        //aqui,talvez de b.o no 08:28
        foreach ($makers as $maker => $models) {
            $makerInstance = Maker::factory()->create(['name' => $maker]); // Cria o fabricante        
            // Associa os modelos ao fabricante
            $makerInstance->models()->createMany(
                array_map(fn($model) => ['name' => $model], $models)
            );
        }

        User::factory()
            ->count(3)
            ->create();

        User::factory()
            ->count(2)
            ->has(
                Car::factory()
                    ->count(50)
                    ->has(
                        CarImage::factory()
                            ->count(5)
                            ->sequence(fn(Sequence $sequence) => ['position' => $sequence->index + 1])
                    )
                    ->hasFeatures(),
                'favoriteCars'
            )
            ->create();
    }
}
