@extends('layouts.app')

<div class="container d-flex align-items-center justify-content-center" style="height: 100vh">
    <div class="card px-5 pt-2 pb-4" style="width: 30rem;">
        <h4 class="text-center my-4">Masuk</h4>
        @session('status')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <form class="row g-3" method="POST" action="/login">
            @csrf
            <div class="col-md-12">
                <label for="inputSim" class="form-label">No. SIM :</label>
                <input type="input" class="form-control @error('no_sim') is-invalid @enderror" id="inputSim"
                    name="no_sim" value="{{ old('no_sim') }}" required>
                @error('no_sim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputPassword" class="form-label">Kata Sandi :</label>
                <input type="password" class="form-control @error('no_sim') is-invalid @enderror" id="inputPassword"
                    name="password" value="{{ old('password') }}" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-12 d-grid mt-4 mb-2">
                <button type="submit" class="btn py-2 w-100 text-dark" style="background-color: #f6d601;">Masuk</button>
            </div>
            <p class="text-center w-100 mb-0">Belum punya akun? <a href="/register">Daftar</a></p>
        </form>
    </div>
</div>
