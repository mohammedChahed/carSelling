<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function carDetail($id)
    {
        $cars = Car::findOrFail($id) ;
        return view('cars/carDetail', ['cars'=>$cars]);
    }
    public function create(Car $car)
    {
        return view('cars/create');
    }
    public function cars(Car $car)
    {
        $cars = User::find(1)
        ->cars()
        ->latest()
        ->get() ;
        return view('cars/cars' , ['cars'=>$cars]);
    }
    public function update(Request $request, Car $car)
    {
        
    }
    public function destroy(Car $car)
    {
        
    }
    public function search() {

        $query = Car::where('published_at' , '<' , now())
        ->with(['carImage', 'city' , 'type' , 'fuel' , 'maker' , 'model'])
        ->orderByDesc('published_at', 'desc') ;
        
       


        
        
        $cars = $query->paginate(15);

        return view('cars.search' , ['cars' => $cars ]);
    }
}

