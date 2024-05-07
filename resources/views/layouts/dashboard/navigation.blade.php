@can('add-car')
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="bi bi-plus-lg"></i>Manajemen Data Mobil</a>
        <ul class="sub-menu children dropdown-menu p-2">
            <li><a href="/dashboard/addcar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-plus-lg mr-4" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                    </svg>Tambah Mobil</a></li>
        </ul>
    </li>
@endcan

<li class="menu-item-has-children dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
            class="bi bi-plus-lg"></i>Manajemen Data Sewa Mobil</a>
    <ul class="sub-menu children dropdown-menu p-0">
        <li><a href="/dashboard/addrentalcar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-plus-lg mr-4" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                </svg>Tambah sewa mobil</a></li>
        <li><a href="/dashboard/rentalcar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-list-nested mr-4" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5m-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5" />
                </svg>Daftar mobil sewaan</a></li>
    </ul>
</li>
<li>
    <a href="/dashboard/returncar"> <i class="menu-icon fa fa-tasks"></i>Kembalikan Mobil</a>
</li>
