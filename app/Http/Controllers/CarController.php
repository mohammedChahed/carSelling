<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function show(Car $car)
    {
        
        return view('cars/show',);
    }
    public function create(Car $car)
    {
        return view('cars/create');
    }
    public function cars(Car $car)
    {
        return view('cars/cars');
    }
    public function update(Request $request, Car $car)
    {
        
    }
    public function destroy(Car $car)
    {
        
    }
    public function search() {
        return view('cars.search');
    }
}

