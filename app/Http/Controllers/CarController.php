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
        return view('car.search');
    }
}
