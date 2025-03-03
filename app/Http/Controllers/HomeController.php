<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarFeatures;
use App\Models\FuelType;
use App\Models\carType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

// Encontrar o carro com id 4
$car = Car::find(4);

// Encontrar o tipo de carro 'Hatchback'
$carType = CarType::where('name', 'Hatchback')->first();

// Buscar os carros pertencentes ao tipo de carro encontrado
$cars = Car::whereBelongsTo($carType)->get();

dd($cars);


        return view("home.index");
    }
}
