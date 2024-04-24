<div class="col-lg-3 col-md-6">
    <div class="card justify-content-center align-items-center p-4">
        <img src={{ $car['image'] ?? 'images/car.png' }} class="card-img-top mt-5 img-fluid" alt="...">
        <div class="card-body w-100">
            <h5 class="card-title text-center my-4">{{ $car['no_plat'] ?? 'CBDRE' }}</h5>
            <div class="d-flex justify-content-between">
                <p class="card-text">Merk</p>
                <p class="card-text">{{ $car['merk'] ?? 'merk'}}</p>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <p class="card-text">Model</p>
                <p class="card-text">{{ $car['model'] ?? 'model'}}</p>
            </div>
            <div class="mt-4">
                <h6 class="text-center">Rp. {{ $car['tarif_rental'] ?? '250.000' }},- / Hari</h6>
            </div>
        </div>
    </div>
</div>
