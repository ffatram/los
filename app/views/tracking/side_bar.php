<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= BASEURL ?>/assets/dist/img/logo-hasamitra.png" alt="LOS" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                    <a href="<?= BASEURL ?>/slik/beranda" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL ?>/slik/daftar_belum_slik" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Daftar Belum SLIK
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL ?>/slik/daftar_sudah_slik" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Daftar Sudah SLIK
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>