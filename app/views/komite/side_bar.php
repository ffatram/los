<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= BASEURL ?>/assets/dist/img/logo-hasamitra.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LOS HASAMITRA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">

                <a href="#" class="d-block"><?= $_COOKIE['level'] . ' (' . $_COOKIE['nama_cabang'] . ')' ?> </a>
            </div>
        </div>


        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>





        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= BASEURL ?>/komite/beranda" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL ?>/komite/daftar_belum_komite" class="nav-link">
                        <i class="nav-icon fas fa-file-signature"></i>
                        <p>
                            <?php

                            $data['hitung_belum_komite'] =   $this->model('m_komite')->hitung_daftar_belum_komite();

                            ?>
                            Daftar Belum Komite (<?= $data['hitung_belum_komite'] ?>)
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL ?>/komite/daftar_sudah_komite" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Daftar Sudah Komite
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= BASEURL ?>/komite/persetujuan_tolak_batal" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Persetujuan Tolak/Batal (<?= $this->model('m_komite')->persetujuan_tolak_batal_hitung(); ?>)
                            <!-- Persetujuan Tolak/Batal (<span id="j_persetujuan_tolak_batal"></span>) -->
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="<?= BASEURL ?>/komite/inquiry" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Daftar Permohonan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL; ?>/cs/laporan_cs" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>Laporan CS</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL; ?>/cs/export_csv" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>Export CSV</p>
                    </a>
                </li>





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    // Saat halaman dimuat, periksa local storage dan perbarui nilai di sidebar
    // var storedDataCount = localStorage.getItem('dataCount');
    // if (storedDataCount) {
    //     $('#j_persetujuan_tolak_batal').text(storedDataCount);
    // }
</script>