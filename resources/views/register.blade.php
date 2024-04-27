@extends('layouts.app')

<div class="container d-flex align-items-center justify-content-center" style="height: 100vh">
    <div class="card px-5 pt-2 pb-4" style="width: 40rem;">
        <h4 class="text-center my-4">Daftar</h4>
        <form class="row g-3" method="POST" action="/register">
            @csrf
            <div class="col-md-6">
                <label for="inputSim" class="form-label">No. SIM :</label>
                <input type="input" class="form-control @error('no_sim') is-invalid @enderror" id="inputSim"
                    name="no_sim" value="{{ old('no_sim') }}" required>
                @error('no_sim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputName" class="form-label">Nama :</label>
                <input type="input" class="form-control @error('name') is-invalid @enderror" id="inputName"
                    name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputPassword" class="form-label">Kata Sandi :</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword"
                    name="password" value="{{ old('password') }}" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Alamat :</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="inputAddress"
                    placeholder="Cth. Bangka Belitung" name="address" value="{{ old('address') }}" required>
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputTelp" class="form-label">No. Telp :</label>
                <input type="input" class="form-control @error('telp') is-invalid @enderror" id="inputTelp"
                    placeholder="08XXXXXXXXX" name="telp" value="{{ old('telp') }}" required>
                @error('telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-12 d-grid mt-4 mb-2">
                <button type="submit" class="btn py-2 w-100 text-dark" style="background-color: #f6d601;">Daftar</button>
            </div>
            <p class="text-center mb-0 w-100">Sudah punya akun? <a href="/login">Masuk</a></p>
        </form>
    </div>
</div>
