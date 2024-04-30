@extends('layouts.dashboard.app')

@section('dashboard-content-item')
    <div class="col-lg-12">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Perhatian !</h4>
            <hr>
            <p>Anda tidak diperbolehkan melakukan perubahan informasi data diri, selama anda memiliki status sewa mobil yang sedang aktif!.</p>
        </div>
    </div>
    <div class="col-lg-4 pr-0">
        <div class="card p-4">
            <h4 class="text-center my-4">Informasi data diri anda</h4>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <img class="rounded-circle mx-auto d-block" src="{{ asset('images/user.jpg') }}" alt="Card image cap">
                    <h5 class="text-sm-center mt-2 mb-1">{{ $user->name }}</h5>
                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{ $user->address }}</div>
                </div>
                <hr>
                <div class="card-text text-sm-center flex-column">
                    <div class="d-flex justify-content-between">
                        <p>*No. Sim</p>
                        <p>{{ $user->no_sim }}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>*Nama</p>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>*No. Telp</p>
                        <p>{{ $user->no_telp }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        @if (session('add-car-message'))
            <div class="alert alert-success" role="alert">
                {{ session('add-car-message') }}
            </div>
        @endif
        <div class="card px-5 pt-2 pb-4">
            <h4 class="text-center my-4">Ubah data diri</h4>
            <form class="row" method="POST" action="/dashboard/users/{{ session('no_sim') }}">
                @csrf
                <div class="col-12 mb-2">
                    <label for="inputNoSim" class="form-label">No. Sim :</label>
                    <input type="input" class="form-control @error('no_sim') is-invalid @enderror" id="inputNoSim"
                        placeholder="XXXX-XXXX-XXXX" name="no_sim" value="{{ old('no_sim', $user->no_sim) }}" required>
                    @error('no_sim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mb-2">
                    <label for="inputName" class="form-label">Nama :</label>
                    <input type="input" class="form-control @error('name') is-invalid @enderror" id="inputName"
                        placeholder="Agus Supriadi" name="name" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mb-2">
                    <label for="inputPassword" class="form-label">Kata Sandi :</label>
                    <input type="input" class="form-control @error('password') is-invalid @enderror"" id="inputPassword"
                        placeholder="Kata Sandi" name="password" value="{{ old('password') }}" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mb-2">
                    <label for="inputAddress" class="form-label">Alamat :</label>
                    <input type="input" class="form-control @error('address') is-invalid @enderror" id="inputAddress"
                        placeholder="Cth. Bangka Belitung" name="address" value="{{ old('address', $user->address) }}"
                        required>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mb-2">
                    <label for="inputNoTelp" class="form-label">No. Telp:</label>
                    <input type="input" class="form-control @error('no_telp') is-invalid @enderror" id="inputAddress"
                        placeholder="08XXXXXXXXX" name="no_telp" value="{{ old('no_telp', $user->no_telp) }}" required>
                    @error('no_telp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 d-grid my-2">
                    <button type="submit" class="btn py-2 text-dark" style="background-color: #f6d601;">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
