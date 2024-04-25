<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left bg-success"><i class="fa fa fa-tasks"></i></a>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="#shopping-cart" class="mr-5 position-relative"><i class="fa fa-shopping-cart text-grey" style="font-size: 20px"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle text-white bg-warning" style="height: 20px">
                            99</a>
                    @if (session('currentuser'))
                        <h6 class="mr-2">{{ session('currentuser') ?? 'Guest' }} </h6>
                    @endif
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{ asset('images/user.jpg') }}" alt="User Avatar">
                    </a </div>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Profil Saya</a>
                        <a class="nav-link" href="/logout"><i class="fa fa-power-off"></i> Keluar</a>
                    </div>
                </div>
            </div>
        </div>

</header>
