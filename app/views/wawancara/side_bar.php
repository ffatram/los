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

                <a href="#" class="d-block"><?= level_3. ' (' . $_COOKIE['nama_cabang'] . ')' ?> </a>
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


                <!-- jika saya login sebagi level Cs -->

                <?php

                if ($_COOKIE['level'] == "CS") {
                ?>

                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/cs/beranda" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Beranda
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/cs/daftar_permohonan_kredit" class="nav-link">
                            <i class=" nav-icon fas fa-list-alt"></i>

                            <p>
                                Daftar Permohonan
                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/cs/daftar_permohonan_kredit_online" class="nav-link">
                            <i class=" nav-icon fas fa-list-alt"></i>
                            <p>
                                Kredit Online (<span class="jumlahdata_sidebar_kreditonline"></span>)
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
                        <a href="<?= BASEURL ?>/slik/daftar_belum_slik" class="nav-link">
                            <i class="nav-icon fas fa-file-signature"></i>


                            <?php

                            $this->db = new Database;
                            $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_slik IS NULL AND kode_cabang =:kode_cabang AND tanggal_batal IS NULL ORDER BY tanggal_permohonan DESC,no_permohonan_kredit DESC');
                            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                            $this->db->execute();
                            $jumlah_belum_wawacara =  $this->db->rowCount();
                            ?>
                            <p>
                                Daftar Belum SLIK (<?= $jumlah_belum_wawacara ?>)
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/slik/daftar_sudah_slik" class="nav-link">
                            <i class="nav-icon fas fa-folder-open"></i>
                            <p>
                                Daftar Sudah SLIK
                            </p>
                        </a>
                    </li>



                <?php }
                ?>



                <!-- jika posisi login level sebagi slik -->
                <?php
                if ($_COOKIE['level'] == 'SLIK') {
                ?>

                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/slik/beranda" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Beranda
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/slik/daftar_belum_slik" class="nav-link">
                            <i class="nav-icon fas fa-file-signature"></i>


                            <?php

                            $this->db = new Database;
                            $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_slik IS NULL AND kode_cabang =:kode_cabang AND tanggal_batal IS NULL ORDER BY tanggal_permohonan DESC,no_permohonan_kredit DESC');
                            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                            $this->db->execute();
                            $jumlah_belum_wawacara =  $this->db->rowCount();
                            ?>


                            <p>
                                Daftar Belum SLIK (<?= $jumlah_belum_wawacara ?>)
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/slik/daftar_sudah_slik" class="nav-link">

                            <!-- <i class="nav-icon fas fa-file-signature"></i> -->

                            <!-- <i class=" nav-icon  fas fa-file"></i> -->
                            <i class="nav-icon fas fa-folder-open"></i>



                            <p>
                                Daftar Sudah SLIK
                            </p>
                        </a>
                    </li>




                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/cs/daftar_permohonan_kredit" class="nav-link">
                            <i class=" nav-icon fas fa-list-alt"></i>

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


                <?php } ?>








                <!-- jika login sebagai level RO -->

                <?php

                if ($_COOKIE['level'] == "RO") {
                ?>
                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/wawancara/beranda" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Beranda
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/wawancara/daftar_belum_wawancara" class="nav-link">
                            <i class="nav-icon fas fa-file-signature"></i>
                            <p>

                                <?php

                                $this->db = new Database;
                                $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE kode_cabang =:kode_cabang AND tanggal_wawancara IS NULL AND  tanggal_tolak IS NULL AND tanggal_batal IS NULL AND tanggal_slik IS NOT NULL AND id_analis =:id_analis order by tanggal_permohonan desc');
                                $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                                $this->db->bind('id_analis', $_COOKIE['username']);
                                $this->db->execute();
                                $jumlah_belum_wawacara =  $this->db->rowCount();
                                ?>

                                Daftar Belum Analisa (<?= $jumlah_belum_wawacara ?>)
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/wawancara/daftar_sudah_wawancara" class="nav-link">


                            <i class="nav-icon fas fa-folder-open"></i>
                            <p>
                                Daftar Sudah Analisa
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/wawancara/pending_pencairan" class="nav-link">

                            <i class="nav-icon fas fa-thumbs-up"></i>
                            <!-- <i class="nav-icon fas fa-tasks"></i> -->
                            <p>

                                <?php

                                $this->db = new Database;
                                $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tanggal_wawancara, A.kode_cabang,A.id_analis,C.status_cair, C.plafond, C.jangka_waktu
FROM tbl_permohon_kredit A 
JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit JOIN tbl_keputusan_kredit C ON C.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang =:kode_cabang AND C.status_cair =:status_cair AND A.id_analis = :id_analis ORDER BY A.tanggal_permohonan DESC");
                                $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                                $this->db->bind('status_cair', "TIDAK");
                                $this->db->bind('id_analis', $_COOKIE['username']);
                                $this->db->execute();
                                $data['jumlah_persetujuan_pencairan'] = $this->db->rowCount();

                                ?>

                                Persetujuan Pencairan (<?= $data['jumlah_persetujuan_pencairan'] ?>)
                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/wawancara/daftar_pending_komite" class="nav-link">

                            <i class=" nav-icon fas fa-hand-paper"></i>
                            <!-- <i class="nav-icon fas fa-tasks"></i> -->
                            <p>

                                <?php

                                $this->db = new Database;

                                $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tanggal_permohonan, B.plafond,B.jangka_waktu,B.status, A.kode_cabang,A.id_analis, B.catatan_pending
FROM tbl_permohon_kredit A 
JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang =:kode_cabang AND B.status LIKE '%DIPENDING%' AND A.id_analis = :id_analis ORDER BY A.tanggal_permohonan DESC");
                                $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                                $this->db->bind('id_analis', $_COOKIE['username']);
                                $this->db->execute();
                                $jumlah_daftar_pending =  $this->db->rowCount();

                                ?>

                                Pending Komite (<?= $jumlah_daftar_pending ?>)
                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/cs/daftar_permohonan_kredit" class="nav-link">
                            <i class=" nav-icon fas fa-list-alt"></i>

                            <p>
                                Daftar Permohonan
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/cs/daftar_permohonan_kredit_online" class="nav-link">
                            <i class=" nav-icon fas fa-list-alt"></i>
                            <p>
                                Kredit Online (<span class="jumlahdata_sidebar_kreditonline"></span>)
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


                <?php
                }
                ?>




            </ul>
        </nav>
        <!-- /.sidebar-menu -->


    </div>
    <!-- /.sidebar -->
</aside>