@extends('layouts.dashboard.app')

@section('dashboard-content-item')
    <div class="col-lg-12 align-items-center justify-content-center">
        <div class="card px-5 pt-2 pb-4">
            <h4 class="text-center my-4">Masukkan data sewa</h4>
            <form class="row g-3" method="POST" action="/dashboard/addrentalcar">
                @csrf
                <div class="col-12 mb-2">
                    <label for="inputNoPlat" class="form-label">No. Plat :</label>
                    <input type="input" class="form-control" id="inputNoPlat" name="no_plat" placeholder="EX12R" @required(true)>
                </div>
                <div class="col-md-6  mb-2">
                    <label for="inputStartDate" class="form-label">Tanggal Mulai :</label>
                    <input type="date" class="form-control" id="inputStartDate" name="tgl_rental" @required(true)>
                </div>
                <div class="col-md-6  mb-2">
                    <label for="inputEndDate" class="form-label">Tanggal Selesai :</label>
                    <input type="date" class="form-control" id="inputEndDate" name="tgl_return" @required(true)>
                </div>
                <div class="col-12 d-grid my-2">
                    <button type="submit" class="btn py-2 text-dark" style="background-color: #f6d601;">Sewa</button>
                </div>
            </form>
        </div>
    </div>
@endsection
