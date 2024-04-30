@extends('layouts.dashboard.app')

@section('dashboard-content-item')
    <div class="col-lg-12 align-items-center justify-content-center">
        @if (session('add-rental-car-message'))
            <div class="alert alert-success" role="alert">
                {{ session('add-rental-car-message') }}
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
            <h4 class="text-center my-4">Masukkan data sewa</h4>
            <form class="row g-3" method="POST" action="#">
                @csrf
                <div class="col-12 mb-2">
                    <label for="inputNoPlat" class="form-label">No. Plat :</label>
                    <input type="input" class="form-control  @error('no_plat') is-invalid @enderror" id="inputNoPlat"
                        name="no_plat" placeholder="EX12R" value="{{ $no_plat }}" required>
                    @error('no_plat')
                        <div class="invalid-feedback">
                            {{ $message ?? $error }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6  mb-2">
                    <label for="inputStartDate" class="form-label">Tanggal Mulai :</label>
                    <input type="date" class="form-control  @error('tgl_rental') is-invalid @enderror"
                        id="inputStartDate" name="tgl_rental" value="{{ \Carbon\Carbon::now()->toDateString() }}" required>
                    @error('tgl_rental')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6  mb-2">
                    <label for="inputEndDate" class="form-label">Tanggal Selesai :</label>
                    <input type="date" class="form-control @error('tgl_return') is-invalid @enderror" id="inputEndDate"
                        name="tgl_return" value="{{ \Carbon\Carbon::now()->toDateString() }}" required>
                    @error('tgl_return')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 d-grid my-2">
                    <button type="submit" class="btn py-2 text-dark" style="background-color: #f6d601;">Sewa</button>
                </div>
            </form>
        </div>
    </div>
@endsection
