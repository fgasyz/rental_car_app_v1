<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function all_car_index(Car $car)
    {
        //
        $cars = $car::all();
        return view('layouts.dashboard.all-car', ['cars' => $cars]);
    }

    public function add_car_index()
    {
        //
        return view('layouts.dashboard.add-car');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCarRequest $request)
    {
        //
        $validate = $request->validated();
        
        $car = new Car();

        $car->no_plat = $validate['no_plat'];
        $car->merk = $validate['merk'];
        $car->model = $validate['model'];
        $car->image = 'images/car.png';
        $car->tarif_rental = $validate['tarif_rental'];
        $car->status = 0;


        $car->save();

        return redirect('/dashboard/addcar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
