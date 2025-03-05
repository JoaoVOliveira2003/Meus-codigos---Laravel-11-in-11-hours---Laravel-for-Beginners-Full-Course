<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('car.index');
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Car $car)
    {
        return view('car.show');
    }

    public function edit(Car $car)
    {
        return view('car.edit');
    }

    public function update(Request $request, Car $car)
    {
        //
    }

    public function destroy(Car $car)
    {
        //
    }

    public function search(){
        $query = Car::where('published_at', '<', now()) // Use 'now()' sem aspas para pegar a data atual
                    ->orderBy('published_at', 'desc');
        
        $carCount = $query->count();
    
        $cars = $query->limit(30)->get();
    
        // Passando o nome da variável para corresponder com o que você quer na view.
        return view('car.search', ['cars' => $cars, 'carCount' => $carCount]);
    }
    
}
