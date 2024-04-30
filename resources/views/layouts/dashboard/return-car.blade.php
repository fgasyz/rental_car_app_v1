@extends('layouts.dashboard.app')

@section('dashboard-content-item')
    <div class="col-lg-12 align-items-center justify-content-center">
        @if (session('add-return-car-message'))
            <div class="alert alert-success" role="alert">
                {{ session('add-return-car-message') }}
            </div>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div class="card px-5 pt-2 pb-4">
            <h4 class="text-center my-4">Masukkan no plat mobil</h4>
            <form class="row g-3" method="POST" action="/dashboard/returncar">
                @csrf
                <div class="col-lg-12">
                    <label for="inputNoPlat" class="form-label">No. Plat :</label>
                    <input type="NoPlat" class="form-control @error('no_plat') is-invalid @enderror" id="inputNoPlat"
                        name="no_plat" placeholder="0ACX" required>
                    @error('no_plat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-lg-12 d-grid my-2 ">
                    <button type="submit" class="btn py-2 text-dark" style="background-color: #f6d601;">Kembalikan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
