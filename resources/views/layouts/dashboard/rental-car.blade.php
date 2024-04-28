@extends('layouts.dashboard.app')

{{-- <th scope="col">No.Plat</th>
<th scope="col">Merk</th>
<th scope="col">Model</th>
<th scope="col">Gambar</th>
<th scope="col">Tanggal Mulai Sewa</th>
<th scope="col">Tanggal Akhir Sewa</th>
<th scope="col">Total Tarif</th> --}}

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
                                <div class="row">
                                    <div class="col-sm-12 col-md-10">
                                        <div class="dataTables_length" id="bootstrap-data-table-export_length"><label>Show
                                                <select name="bootstrap-data-table-export_length"
                                                    aria-controls="bootstrap-data-table-export"
                                                    class="custom-select custom-select-sm form-control form-control-sm mt-2">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="-1">All</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-2">
                                        <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-lg mt-2"
                                                    placeholder="" aria-controls="bootstrap-data-table-export" style="height: 35px;"></label>
                                        </div>
                                    </div>
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
                                                <tr role="row" class="odd">
                                                    <td class="">Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td><img src="{{ asset('images/car.png') }}" alt="" height="50"></td>
                                                    <td>Edinburgh</td>
                                                    <td>Edinburgh</td>
                                                    <td class="sorting_1">$75,650</td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="">Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td><img src="{{ asset('images/car.png') }}" alt="" height="50"></td>
                                                    <td>Edinburgh</td>
                                                    <td>Edinburgh</td>
                                                    <td class="sorting_1">$85,600</td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="">Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td><img src="{{ asset('images/car.png') }}" alt="" height="50"></td>
                                                    <td>Edinburgh</td>
                                                    <td>Edinburgh</td>
                                                    <td class="sorting_1">$85,675</td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="">Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td><img src="{{ asset('images/car.png') }}" alt="" height="50"></td>
                                                    <td>Edinburgh</td>
                                                    <td>Edinburgh</td>
                                                    <td class="sorting_1">$86,000</td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="">Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td><img src="{{ asset('images/car.png') }}" alt="" height="50"></td>
                                                    <td>Edinburgh</td>
                                                    <td>Edinburgh</td>
                                                    <td class="sorting_1">$86,500</td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="">Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td><img src="{{ asset('images/car.png') }}" alt="" height="50"></td>
                                                    <td>Edinburgh</td>
                                                    <td>Edinburgh</td>
                                                    <td class="sorting_1">$87,500</td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="">Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td><img src="{{ asset('images/car.png') }}" alt="" height="50"></td>
                                                    <td>Edinburgh</td>
                                                    <td>Edinburgh</td>
                                                    <td class="sorting_1">$90,560</td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="">Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td><img src="{{ asset('images/car.png') }}" alt="" height="50"></td>
                                                    <td>Edinburgh</td>
                                                    <td>Edinburgh</td>
                                                    <td class="sorting_1">$92,575</td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="">Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td><img src="{{ asset('images/car.png') }}" alt="" height="50"></td>
                                                    <td>Edinburgh</td>
                                                    <td>Edinburgh</td>
                                                    <td class="sorting_1">$95,400</td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="">Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td><img src="{{ asset('images/car.png') }}" alt="" height="50"></td>
                                                    <td>Edinburgh</td>
                                                    <td>Edinburgh</td>cd
                                                    <td class="sorting_1">$98,540</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-9">
                                        <div class="dataTables_info me-auto" id="bootstrap-data-table-export_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="bootstrap-data-table-export_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="bootstrap-data-table-export_previous"><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="0"
                                                        tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="1"
                                                        tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="2"
                                                        tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="3"
                                                        tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="4"
                                                        tabindex="0" class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="5"
                                                        tabindex="0" class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="6"
                                                        tabindex="0" class="page-link">6</a></li>
                                                <li class="paginate_button page-item next"
                                                    id="bootstrap-data-table-export_next"><a href="#"
                                                        aria-controls="bootstrap-data-table-export" data-dt-idx="7"
                                                        tabindex="0" class="page-link">Next</a></li>
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
