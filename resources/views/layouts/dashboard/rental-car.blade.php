@extends('layouts.dashboard.app')

@section('dashboard-content-item')
    <div class="col-lg-12">
        <div class="animated fadeIn">
            <div class="row justify-content-between">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar mobil sewaan</strong>
                        </div>
                        <div class="card-body">
                            <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                    <label>Cari:<input type="search" class="form-control form-control-lg mt-2"
                                            placeholder="" aria-controls="bootstrap-data-table-export" style="height: 35px;"></label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="bootstrap-data-table-export"
                                            class="table table-striped table-bordered dataTable no-footer table-responsive" role="grid"
                                            aria-describedby="bootstrap-data-table-export_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1" aria-label="Name: activate to sort column ascending"
                                                        style="width: 333px;">No. Plat</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="width: 539px;">Merk</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 249px;">Model</th>
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column descending"
                                                        style="width: 201px;" aria-sort="ascending">Gambar</th>
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column descending"
                                                        style="width: 201px;" aria-sort="ascending">Tgl. Mulai</th>
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column descending"
                                                        style="width: 201px;" aria-sort="ascending">Tgl. Kembali</th>
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column descending"
                                                        style="width: 201px;" aria-sort="ascending">Total Tarif</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allrentalcar as $item)
                                                    <tr role="row" class="odd">
                                                        <td class="">{{ $item->no_plat }}</td>
                                                        <td>{{ $item->merk }}</td>
                                                        <td>{{ $item->model }}</td>
                                                        <td><img src="{{ asset('images/car.png') }}" alt="" height="50"></td>
                                                        <td>{{ \Carbon\Carbon::parse($item->tgl_rental)->toDateString() }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($item->tgl_return)->toDateString() }}</td>
                                                        <td class="sorting_1">Rp. {{ number_format($item->total_tarif_rental) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-9">
                                        <div class="dataTables_info me-auto" id="bootstrap-data-table-export_info" role="status"
                                            aria-live="polite">1 - 10 dari 57 total data</div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="bootstrap-data-table-export_paginate">
                                            <ul class="pagination justify-content-end">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="bootstrap-data-table-export_previous"><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="0"
                                                        tabindex="0" class="page-link">Sebelumnya</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="1"
                                                        tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="2"
                                                        tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="3"
                                                        tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item next"
                                                    id="bootstrap-data-table-export_next"><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="7"
                                                        tabindex="0" class="page-link">Selanjutnya</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
