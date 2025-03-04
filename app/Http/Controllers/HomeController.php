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

        return view("home.index");
    }
}