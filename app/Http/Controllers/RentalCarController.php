<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRentalCarRequest;
use App\Models\Car;
use App\Models\RentalCar;
use Illuminate\Http\Request;

class RentalCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_rental_car_index(Request $request)
    {
        //
        return view('layouts.dashboard.add-rental-car', ['no_plat' => $request['no_plat'] ?? false]);
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
    public function store(CreateRentalCarRequest $request, Car $cars)
    {
        //
        $validate = $request->validated();
        $session = session()->get('no_sim');
        $car = $cars::where('no_plat', $request['no_plat'])->first();
        if (!$car) {
            return back()->withErrors(['add-rental-car-error' => 'nomor plat mobil tidak diketahui!']);
        }
        $rentalCar = new RentalCar();
        $rentalCar['no_sim'] = $session;
        $rentalCar['no_plat'] = $car->no_plat;
        $rentalCar['tgl_rental'] = $validate['tgl_rental'];
        $rentalCar['tgl_return'] = $validate['tgl_return'];
        $rentalCar->save();

        $cars::where('no_plat', $request['no_plat'])->update(['status' => 0]);

        session()->flash('add-rental-car-message', 'data rental mobil berhasil ditambahkan!');
        return redirect('/dashboard/addrentalcar');
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
