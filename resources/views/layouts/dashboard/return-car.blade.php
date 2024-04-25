@extends('layouts.dashboard.app')

@section('dashboard-content-item')
    <div class="col-lg-12 align-items-center justify-content-center">
        <div class="card px-5 pt-2 pb-4">
            <h4 class="text-center my-4">Masukkan no plat mobil</h4>
            <form class="row g-3" method="POST" action="/dashboard/returncar">
                @csrf
                <div class="col-lg-12">
                    <label for="inputNoPlat" class="form-label">No. Plat :</label>
                    <input type="NoPlat" class="form-control" id="inputNoPlat" name="no_plat" placeholder="0ACX" @required(true)>
                </div>

                <div class="col-lg-12 d-grid my-2 ">
                    <button type="submit" class="btn btn-success py-2">Kembalikan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
