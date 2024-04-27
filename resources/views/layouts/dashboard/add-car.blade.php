@extends('layouts.dashboard.app')

@section('dashboard-content-item')
    <div class="col-lg-12 align-items-center justify-content-center ">
        <div class="card px-5 pt-2 pb-4">
            <h4 class="text-center my-4">Masukkan data mobil</h4>
            <form class="row" method="POST" action="/dashboard/addcar">
                @csrf
                <div class="col-12 mb-2">
                    <label for="inputNoPlat" class="form-label">No. Plat :</label>
                    <input type="input" class="form-control" id="inputNoPlat" placeholder="0ACX" name="no_plat"
                        @required(true)>
                </div>
                <div class="col-12 mb-2">
                    <label for="inputMerk" class="form-label">Merk :</label>
                    <input type="input" class="form-control" id="inputMerk" placeholder="Mercedez-Benz" name="merk"
                        @required(true)>
                </div>
                <div class="col-12 mb-2">
                    <label for="inputModel" class="form-label">Model :</label>
                    <input type="input" class="form-control" id="inputModel" placeholder="Sedan, SUV, dll" name="model"
                        @required(true)>
                </div>

                <div class="col-12 mb-2">
                    <label for="inputTarifRental" class="form-label">Tarif Sewa / hari :</label>
                    <input type="input" class="form-control" id="inputTarifRental" placeholder="Rp. 250.000,-"
                        name="tarif_rental" @required(true)>
                </div>
                <div class="col-12 d-grid my-2">
                    <button type="submit" class="btn py-2 text-dark" style="background-color: #f6d601;">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection
