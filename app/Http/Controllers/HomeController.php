<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $car = new Car();

        //select todos carros
        // $cars = Car::get();
        // com um where
        // $cars = Car::where('published_at','!=',null)->get();
        // //com um carro disponivel
        // $cars = Car::where('published_at','!=',null)->first();
        //com um carro com um id 2
        //$cars = Car::find(2);
        // $cars = Car::where('published_at','!=',null)
        //     ->where('user_id',1)
        //     ->orderBy('published_at','desc')
        //     ->limit(1)
        //     ->get();
        // dump($cars);

        // Inserte
        // $car = new Car();
        // $car->maker_id = 1;
        // $car->model_id = 1;
        // $car->year = 2023;
        // $car->price = 25000;
        // $car->vin = '1HGBH41JXMN109186';
        // $car->mileage = 15000;
        // $car->car_type_id = 2;
        // $car->fuel_type_id = 1;
        // $car->user_id = 1;
        // $car->city_id = 1;
        // $car->address = '123 Main St, Los Angeles, CA';
        // $car->phone = '555-1234';
        // $car->description = null;
        // $car->published_at = now();
        // $car->save();

        // $carData = [
        //     'maker_id' => 2,
        //     'model_id' => 1,
        //     'year' => 2023,
        //     'price' => 25000,
        //     'vin' => '1HGBH41JXMN109186',
        //     'mileage' => 15000,
        //     'car_type_id' => 2,
        //     'fuel_type_id' => 1,
        //     'user_id' => 1,
        //     'city_id' => 1,
        //     'address' => '123 Main St, Los Angeles, CA',
        //     'phone' => '555-1234',
        //     'description' => null,
        //     'published_at' => '2025-03-03 16:36:39',
        // ];

        //$car = Car::create($carData);

        // $car2 = new Car();
        // $car2->fill($carData); 
        // $car2->save();

        // $car3 = new Car($carData); 
        // $car3->save(); 

        //Update é
        // $car = Car ::find(1);
        // $car->price =1000;
        // $car->save();

        //    $car= Car::updateOrCreate(
        //     ['vin' => '999'],  // Condição para buscar o registro
        //     [
        //         'price' => 1000,  // Dados a serem atualizados ou criados
        //         'maker_id' => 1,  // Adicione o valor para maker_id
        //         'model_id' => 1   // Adicione o valor para model_id
        //     ]
        // );
        // dump($car);

        //    Car::where('published_at',null)
        //     ->where('user_id',1)
        //     ->Update(['published_at' =>now()]);
           
        // $car = Car::find(3,);
        // $car ->delete();

        //é para fazer um delete em massa
        //Car::destroy([3,4]);

        // Car::where('published_at',null)
        // ->where('user_id',1)
        // ->delete();

        // Car::truncate();

        // $cars = Car::where('price','>',200)->get();

        // $maker = Maker::where("name","Toyota")->first();

        // FuelType::create(['name'=>'nuclear']);

        // Car::where('id',1)->update(['price'=>15000]);

        // Car::where('year','<',2000)->delete();

        return view("home.index");
    }
}
