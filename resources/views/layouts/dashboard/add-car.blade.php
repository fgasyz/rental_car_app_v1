@extends('layouts.dashboard.app')

@section('dashboard-content-item')
    <div class="col-lg-12 align-items-center justify-content-center ">
        <div class="card px-5 pt-2 pb-4">
            <h4 class="text-center my-4">Masukkan data mobil</h4>
            <form class="row" method="POST" action="/dashboard/addcar">
                @csrf
                <div class="col-12 mb-2">
                    <label for="inputNoPlat" class="form-label">No. Plat :</label>
                    <input type="input" class="form-control @error('no_plat') is-invalid @enderror" id="inputNoPlat"
                        placeholder="0ACX" name="no_plat" value="{{ old('no_plat') }}" required>
                    @error('no_plat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mb-2">
                    <label for="inputMerk" class="form-label">Merk :</label>
                    <input type="input" class="form-control @error('merk') is-invalid @enderror" id="inputMerk"
                        placeholder="Mercedez-Benz" name="merk" value="{{ old('merk') }}" required>
                    @error('merk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mb-2">
                    <label for="inputModel" class="form-label">Model :</label>
                    <input type="input" class="form-control @error('model') is-invalid @enderror"" id="inputModel"
                        placeholder="Sedan, SUV, dll" name="model" value="{{ old('model') }}" required>
                    @error('model')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-12 mb-2">
                    <label for="inputTarifRental" class="form-label">Tarif Sewa / hari :</label>
                    <input type="input" class="form-control @error('tarif_rental') is-invalid @enderror"
                        id="inputTarifRental" placeholder="Rp. 250.000,-" name="tarif_rental" value="{{ old('tarif_sewa') }}" required>
                    @error('tarif_rental')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 d-grid my-2">
                    <button type="submit" class="btn py-2 text-dark" style="background-color: #f6d601;">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection
