@extends('layouts.dashboard.app')

@section('dashboard-content-item')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title d-flex justify-content-center my-0">Tabel sewa</strong>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.Plat</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Model</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Tanggal Mulai Sewa</th>
                            <th scope="col">Tanggal Akhir Sewa</th>
                            <th scope="col">Total Tarif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><img src="{{ asset('images/car.png') }}" alt="" width="70"></td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><img src="{{ asset('images/car.png') }}" alt="" width="70"></td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><img src="{{ asset('images/car.png') }}" alt="" width="70"></td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
