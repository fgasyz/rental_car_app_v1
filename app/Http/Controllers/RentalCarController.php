<?php

namespace App\Http\Controllers;

use App\Models\RentalCar;
use Illuminate\Http\Request;

class RentalCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_rental_car_index()
    {
        //
        return view('layouts.dashboard.add-rental-car');
    }
    
    public function rental_car_index()
    {
        //
        return view('layouts.dashboard.rental-car');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RentalCar $rentalCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RentalCar $rentalCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RentalCar $rentalCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RentalCar $rentalCar)
    {
        //
    }
}
