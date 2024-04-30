<div id="right-panel" class="right-panel">

    @include('layouts.dashboard.navbar')

    <div class="content mt-3">

        @session('message')
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show mx-3">
                <span class="badge badge-pill badge-success">Success</span>
                {{ $value }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div>
        @endsession
<div class="d-flex flex-wrap justify-content-center">
    @yield('dashboard-content-item', 'tidak ada konten')
</div>

    </div>
</div>
