<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\CarImage;
use App\Models\CarFeatures;
use App\Models\FuelType;
use App\Models\carType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

    // $car = Car::find(4);
    // dd($car->favouredUsers);

    // $user = User::find(1);
    // dd($user->favoriteCars);

    $user = User::find(1);

    $user ->favoriteCars() -> detach([4]);
    

    return view("home.index");
    }
}
