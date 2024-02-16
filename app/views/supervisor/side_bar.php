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
        <nav id="mybtnsidebar" class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/user_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'user_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/marketing_create" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'marketing_create')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Marketing</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/log_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'log_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Log</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/bank_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'bank_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Bank</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/instansi_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'instansi_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Instansi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/pejabat_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'pejabat_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Pejabat Bank</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/sk_limit_kewenangan_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'sk_limit_kewenangan_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>SK Limit Kewenangan</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/provisi_adm_kredit_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'provisi_adm_kredit_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Provisi Administrasi Kredit</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/denda_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'denda_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Denda</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/fasilitas_kredit_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'fasilitas_kredit_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Fasilitas Kredit</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/golongan_debitur_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'golongan_debitur_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Golongan Debitur</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/hubungan_debitur_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'hubungan_debitur_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Hubungan Debitur</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/jaminan_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'jaminan_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Jaminan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/jenis_kredit_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'jenis_kredit_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Jenis Kredit</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/jenis_pekerjaan_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'jenis_pekerjaan_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Jenis Pekerjaan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/jenis_penggunaan_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'jenis_penggunaan_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Jenis Penggunaan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/sektor_ekonomi_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'sektor_ekonomi_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Sektor Ekonomi</p>
                    </a>
                </li>


                 <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/sistem_bunga_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'sistem_bunga_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Sistem Bunga</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/sistem_pembayaran_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'sistem_pembayaran_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Sistem Pembayaran</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/tujuan_penggunaan_kredit_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'tujuan_penggunaan_kredit_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Tujuan Penggunaan Kredit</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= BASEURL ?>/supervisor/pengikatan_home" class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'pengikatan_home')) { print('active'); } ?>">
                        <i class="nav-icon"></i>
                        <p>Pengikatan</p>
                    </a>
                </li>
                

            </ul>
        </nav>
        <!-- /.sidebar-menu -->



    </div>
    <!-- /.sidebar -->
</aside>