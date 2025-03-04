<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\FuelType;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use App\Models\City;
use Illuminate\Support\Str;


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
            'maker_id' => Maker::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'city_id' => City::inRandomOrder()->first()->id,
            'phone' => function(array $attributes){return User::find($attributes['user_id'])->phone;},
            'model_id' => function(array $attributes){return Model::where('maker_id', $attributes['maker_id'])->inRandomOrder()->first()->id;},
            'vin'=> strtoupper(Str::random(17)),
            'price' => ((int)fake()->randomFloat(2,5,100) * 1000),
            'mileague'=>((int)fake()->randomFloat(2,5,500)),
            'car_type_id' => CarType::inRandomOrder()->first()->id,
            'fuel_type_id' => FuelType::inRandomOrder()->first()->id,
            'year'  => fake()->year(),
            'address'=> fake()->address(),    
            'description'=>fake()->text(2000),
            'published_at'=>fake()->optional(0.9)->dateTimeBetween('-1 month','+1 day')
        ];
    }
}
