<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\CarImage;
use App\Models\CarFeatures;
use App\Models\FuelType;
use App\Models\carType;
use Illuminate\Http\Request;
use App\Models\Maker;
use Database\Factories\MakerFactory;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::where('published_at','<','now')
        ->orderBy('published_at','desc')
        ->limit(10)
        ->get();

        return view("home.index",['cars'=>$cars]);
    }
}