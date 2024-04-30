<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left" style="background-color: #f6d601;"><i class="fa fa fa-tasks"></i></a>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <div class="d-flex align-items-center justify-content-end">
                    @if (session('currentuser'))
                        <h6 class="mr-2">{{ session('currentuser') ?? 'Guest' }} </h6>
                    @endif
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{ asset('images/user.jpg') }}" alt="User Avatar">
                    </a </div>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="/dashboard/users/{{ session('no_sim') }}/profile"><i class="fa fa-user"></i> Profil Saya</a>
                        <a class="nav-link" href="/logout"><i class="fa fa-power-off"></i> Keluar</a>
                    </div>
                </div>
            </div>
        </div>

</header>
