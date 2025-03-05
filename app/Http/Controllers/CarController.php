<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = User::find(1)  // Encontrando o usuário com ID 1
            ->cars()  // Acessando o relacionamento com 'cars' (supondo que existe um método cars() no modelo User)
            ->orderBy("created_at", "desc")
            ->get();

        return view('car.index', ['cars' => $cars]);
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        //
    }

    // public function show(Car $car)
    // {
    //     return view('car.show');
    // }

    public function show($id)
    {
        $car = Car::find($id); // Ou algum método de busca
        return view('car.show', compact('car'));
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

    public function search()
    {
        $query = Car::where('published_at', '<', now()) // Use 'now()' sem aspas para pegar a data atual
            ->orderBy('published_at', 'desc');

        $carCount = $query->count();

        $cars = $query->limit(30)->get();

        // Passando o nome da variável para corresponder com o que você quer na view.
        return view('car.search', ['cars' => $cars, 'carCount' => $carCount]);
    }

    public function watchlist()
    {
        $cars = User::find(1)->favoriteCars()->get();  // Agora executa a consulta e retorna os dados
        return view('car.watchlist', ['cars' => $cars]);
    }


}
