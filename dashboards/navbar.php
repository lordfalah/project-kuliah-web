<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard.php">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php?dashboard=data_kegiatan">
                    <span data-feather="layers"></span>
                    Kegiatan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php?dashboard=data_dosen">
                    <span data-feather="users"></span>
                    Data Dosen
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php?dashboard=data_mahasiswa">
                    <span data-feather="users"></span>
                    Data Mahasiswa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php?dashboard=data_user">
                    <span data-feather="users"></span>
                    Data User
                </a>
            </li>

            <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Laporan
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="dashboard.php?dashboard=laporan/laporanDosen">Laporan
                            Dosen</a></li>
                    <li><a class="dropdown-item" href="dashboard.php?dashboard=laporan/laporanMahasiswa">Laporan
                            Mahasiswa</a>
                    </li>
                    <li><a class="dropdown-item" href="dashboard.php?dashboard=laporan/laporanUser">Laporan
                            User</a></li>
                    <li><a class="dropdown-item" href="dashboard.php?dashboard=laporan/laporanKegiatan">Laporan
                            Kegiatan</a></li>
                </ul>
            </div>
        </ul>
    </div>
</nav>