@extends('layouts.app')

    <nav class="navbar navbar-expand-lg">
        <!-- Navbar content -->
        <div class="container-fluid py-2 px-5">

            <a class="navbar-brand fw-bold" href="#">Sewa Mobil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    &nbsp;&nbsp;
                    <li class="nav-item">
                        <a class="btn btn-outline-secondary py-2 px-5" aria-current="page" href="/login">Masuk</a>
                    </li>
                    &nbsp;
                    <li class="nav-item">
                        <a class="btn btn-success py-2 px-5" aria-current="page" href="/register">Daftar</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="p-5 mb-4">
        <div class="container d-flex align-items-center" style="height: 80vh;">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <h1 class="display-5 fw-bold w-40 text-md-start text-sm-center">SEWA MOBIL</h1>
                    <p class=" fs-5 text-md-start text-sm-center">
                        Menyediakan berbagai jenis mobil yang dapat anda sewa kapan saja dengan proses yang cepat dan
                        mudah.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12 align-self-right">
                    <img src="images/hero.webp" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </div>

    <div class="container my-4">
        <div class="my-5">
            <h3 class="text-center">Daftar Mobil</h3>
        </div>
        <div class="row  g-4 row-col-gap-4">

            @include('layouts.car')
            @include('layouts.car')
            @include('layouts.car')
            @include('layouts.car')

        </div>
    </div>

    <div class="py-3" style="background-color: rgb(31, 29, 29)">
        <h6 class="text-center text-white">fgyz.dev</h6>
    </div>

