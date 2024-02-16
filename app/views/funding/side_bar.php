<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= BASEURL ?>/assets/dist/img/logo-hasamitra.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">APPROVAL FUNDING</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">

                <a href="#" class="d-block"><?= "FUNDING" . ' (' . "KPNO" . ')' ?> </a>
            </div>
        </div>


        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <!-- <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div> -->
        </div>










        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/funding/form_bebas_finalty" class="nav-link">
                            <i class="nav-icon fas fa-folder-open"></i>
                            <p>
                                Bebas Finalty
                            </p>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/funding/form_pembayaran_bunga" class="nav-link">
                            <i class="nav-icon fas fa-folder-open"></i>
                            <p>
                                Pembayaran Bunga Berjalan
                            </p>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/funding/form_suku_bunga" class="nav-link">
                            <i class="nav-icon fas fa-folder-open"></i>
                            <p>
                                Suku Bunga Khusus
                            </p>
                        </a>
                    </li> 


                </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>