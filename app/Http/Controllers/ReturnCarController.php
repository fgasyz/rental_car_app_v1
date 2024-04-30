<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReturnCarRequest;
use App\Models\Car;
use App\Models\RentalCar;
use App\Models\ReturnCar;
use App\Models\User;
use Illuminate\Http\Request;

class ReturnCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function return_car_index()
    {
        //
        return view('layouts.dashboard.return-car');
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
    public function store(CreateReturnCarRequest $request, Car $cars, RentalCar $rentalCars)
    {
        //
        $validate = $request->validated();
        $session = session()->get('no_sim');
        $rentalCar = $rentalCars::where('no_plat', $validate['no_plat'])->where('no_sim', $session)->first();
        $car = $cars::where('no_plat', $validate['no_plat'])->first();
        if(!$car) {
            return back()->withErrors(['add-return-car-error1' => 'nomor plat mobil tidak ditemukan!']);
        }
        if (!$rentalCar) {
            return back()->withErrors(['add-return-car-error2' => 'nomor plat mobil tidak ditemukan di daftar rental!']);
        }
        $returnCar = new ReturnCar();
        $returnCar['no_sim'] = $session;
        $returnCar['no_plat'] = $validate['no_plat'];
        $returnCar['total_tarif_rental'] = '2222';
        $returnCar->save();
        $rentalCar->delete();
        $cars::where('no_plat', $validate['no_plat'])->update(['status' => 1]);
        session()->flash('add-return-car-message', 'mobil berhasil dikembalikan!');
        return redirect('/dashboard/returncar');
    }

    /**
     * Display the specified resource.
     */
    public function show(ReturnCar $returnCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReturnCar $returnCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReturnCar $returnCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReturnCar $returnCar)
    {
        //

    }
}
