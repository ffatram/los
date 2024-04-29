<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Belum Analisa </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" <?= BASEURL ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href=" <?= BASEURL ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href=" <?= BASEURL ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href=" <?= BASEURL ?>/assets/plugins/jqvmap/jqvmap.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href=" <?= BASEURL ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href=" <?= BASEURL ?>/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href=" <?= BASEURL ?>/assets/plugins/summernote/summernote-bs4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/dist/css/adminlte.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>



<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">


        <?php $this->view('wawancara/navbar') ?>


        <!-- Side Bar -->
        <?php $this->view('wawancara/side_bar') ?>
        <!-- Side Bar -->




        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- container fluid -->
                <div class="container-fluid">



                    <main class="content">
                        <div class="container-fluid p-0">



                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">


                                            <ul class="nav nav-tabs mt-2 daftar_belum_wawancara" id="myTab_daftar_belum_wawancara" role="tablist">

                                                <li class="nav-item">
                                                    <a class="nav-link active" id="li_daftar_belum_wawacara" data-toggle="tab" href="#daftar_belum_wawacara">Daftar Belum Analisa (<?= $data['jumlah_daftar_belum_wawancara'] ?>) </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="li_daftar_tolak_ro" data-toggle="tab" href="#daftar_tolak_ro">Daftar Tolak <?= level_3?></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="li_daftar_batal" data-toggle="tab" href="#daftar_batal">Daftar Batal <?= level_3?></a>
                                                </li>
                                            </ul>




                                            <div class="tab-content">
                                                <div class="tab-pane active" id="daftar_belum_wawacara">
                                                    <h1 class="h3 mt-3 mb-3 text-center"><strong> Daftar Belum Analisa</strong> </h1>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <table id="example1" class="table table-striped table-hover first display nowrap">
                                                                            <thead>
                                                                                <tr>

                                                                                    <th>
                                                                                        No.
                                                                                    </th>

                                                                                    <th>
                                                                                        No. Reg
                                                                                    </th>

                                                                                    <th>
                                                                                        Nama Pemohon
                                                                                    </th>
                                                                                    <th>
                                                                                        Instansi
                                                                                    </th>
                                                                                    <th>
                                                                                        Tgl. Masuk
                                                                                    </th>
                                                                                    <th>
                                                                                        Plafond
                                                                                    </th>

                                                                                    <th>
                                                                                        JW (Bln)
                                                                                    </th>

                                                                                    <th>
                                                                                        Aksi
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="">
                                                                                <?php $a = 1;
                                                                                foreach ($data['get_daftar_belum_wawancara'] as $row) : ?>
                                                                                    <tr>

                                                                                        <td><?= $a++ ?></td>
                                                                                        <td><?= $row['no_permohonan_kredit'] ?></td>
                                                                                        <td><?= $row['nama_pemohon'] ?></td>
                                                                                        <td><?= $row['nama_instansi'] ?></td>
                                                                                        <td><?= date('d-m-Y', strtotime($row['tanggal_permohonan']))  ?></td>
                                                                                        <td><?= number_format($row['plafond_dimohon'], 0, ",", "."); ?></td>

                                                                                        <td><?= $row['jangka_waktu'] ?></td>
                                                                                        <td>
                                                                                            <a href="<?= BASEURL; ?>/wawancara/input_data_wawancara/<?= $row['no_permohonan_kredit'] ?>" class="btn btn-success">Proses Analisa</a>
                                                                                            <button class="btn btn_detail_all" style="background-color: <?= w_orange ?>; color:white" data-toggle="modal" data-target="#detail_all" data-id="<?= $row['no_permohonan_kredit'] ?>">Lihat detail</button>
                                                                                        </td>

                                                                                    </tr>
                                                                                <?php endforeach; ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="tab-pane" id="daftar_tolak_ro">
                                                    <h1 class="h3 mt-3 mb-3 text-center"><strong> Daftar Tolak RO</strong> </h1>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <table id="example2" class="table table-striped table-hover first display nowrap">
                                                                            <thead>
                                                                                <tr>

                                                                                    <th>
                                                                                        No.
                                                                                    </th>

                                                                                    <th>
                                                                                        No. Reg
                                                                                    </th>
                                                                                    <th>
                                                                                        Nama Pemohon
                                                                                    </th>
                                                                                    <th>
                                                                                        Instansi
                                                                                    </th>

                                                                                    <th>
                                                                                        Tgl. Masuk
                                                                                    </th>
                                                                                    <th>
                                                                                        Tgl. Tolak
                                                                                    </th>


                                                                                    <th>
                                                                                        Plafond
                                                                                    </th>

                                                                                    <th>
                                                                                        JW (Bln)
                                                                                    </th>

                                                                                    <th>
                                                                                        Aksi
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="">
                                                                                <?php $a = 1;
                                                                                foreach ($data['daftar_tolak_wawancara'] as $row) : ?>
                                                                                    <tr>

                                                                                        <td><?= $a++ ?></td>
                                                                                        <td><?= $row['no_permohonan_kredit'] ?></td>
                                                                                        <td><?= $row['nama_pemohon'] ?></td>
                                                                                        <td><?= $row['nama_instansi'] ?></td>
                                                                                        <td><?= date('d-m-Y', strtotime($row['tanggal_permohonan']))  ?></td>
                                                                                        <td><?= date('d-m-Y', strtotime($row['tanggal_tolak']))  ?></td>


                                                                                        <td><?= number_format($row['plafond_dimohon'], 0, ",", "."); ?></td>

                                                                                        <td><?= $row['jangka_waktu'] ?></td>
                                                                                        <td>
                                                                                            <button class='btn btn-success btn-m  btn_aktifkan_tolak_wawancara' data-no_permohonan_kredit="<?= $row['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $row['nama_pemohon'] ?>" data-nama_instansi="<?= $row['nama_instansi'] ?>">Aktifkan Analisa</button>
                                                                                            <button class="btn btn_detail_all" style="background-color: <?= w_orange ?>; color:white" data-toggle="modal" data-target="#detail_all" data-id="<?= $row['no_permohonan_kredit'] ?>">Lihat detail</button>
                                                                                    </tr>
                                                                                <?php endforeach; ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="tab-pane" id="daftar_batal">
                                                    <h1 class="h3 mt-3 mb-3 text-center"><strong> Daftar Batal</strong> </h1>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <table id="example3" class="table table-striped table-hover first display nowrap">
                                                                            <thead>
                                                                                <tr>

                                                                                    <th>
                                                                                        No.
                                                                                    </th>

                                                                                    <th>
                                                                                        No. Reg
                                                                                    </th>
                                                                                    <th>
                                                                                        Nama Pemohon
                                                                                    </th>
                                                                                    <th>
                                                                                        Instansi
                                                                                    </th>

                                                                                    <th>
                                                                                        Tgl. Masuk
                                                                                    </th>
                                                                                    <th>
                                                                                        Tgl. Batal
                                                                                    </th>


                                                                                    <th>
                                                                                        Plafond
                                                                                    </th>

                                                                                    <th>
                                                                                        JW (Bln)
                                                                                    </th>

                                                                                    <th>
                                                                                        Aksi
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="">
                                                                                <?php $a = 1;
                                                                                foreach ($data['daftar_batal_wawancara'] as $row) : ?>
                                                                                    <tr>

                                                                                        <td><?= $a++ ?></td>
                                                                                        <td><?= $row['no_permohonan_kredit'] ?></td>
                                                                                        <td><?= $row['nama_pemohon'] ?></td>
                                                                                        <td><?= $row['nama_instansi'] ?></td>
                                                                                        <td><?= date('d-m-Y', strtotime($row['tanggal_permohonan']))  ?></td>
                                                                                        <td><?= date('d-m-Y', strtotime($row['tanggal_batal']))  ?></td>


                                                                                        <td><?= number_format($row['plafond_dimohon'], 0, ",", "."); ?></td>
                                                                                        <td><?= $row['jangka_waktu'] ?></td>
                                                                                        <td>
                                                                                            <!-- <a onclick="btn_aktif_batal_wanwancara(event); return false" href="<?= BASEURL; ?>/wawancara/aktifkan_wawancara_batal/<?= $row['no_permohonan_kredit'] ?>" class="btn btn-m" style="background-color: #EC994B; color:white; " data-no_permohonan_kredit="<?= $row['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $row['nama_pemohon'] ?>" data-nama_instansi="<?= $row['nama_instansi'] ?>">Aktifkan Analisa</a> -->
                                                                                            <button class='btn btn-success btn-m  btn_aktifkan_batal_wawancara' data-no_permohonan_kredit="<?= $row['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $row['nama_pemohon'] ?>" data-nama_instansi="<?= $row['nama_instansi'] ?>">Aktifkan Analisa</button>
                                                                                            <button class="btn btn_detail_all" style="background-color: <?= w_orange ?>; color:white" data-toggle="modal" data-target="#detail_all" data-id="<?= $row['no_permohonan_kredit'] ?>">Lihat detail</button>
                                                                                            <!-- <button type="button" data-toggle="modal" data-target="#detail" class="btn btn-success btn-m" data-id="<?= $row['id'] ?>" data-no_permohonan_kredit="<?= $row['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $row['nama_pemohon'] ?>" data-nama_instansi="<?= $row['nama_instansi'] ?>" data-tempat_lahir_pemohon="<?= $row['tempat_lahir_pemohon'] ?>">Detail</button> -->
                                                                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail" data-id="<?= $row['id'] ?>" data-no_permohonan_kredit="<?= $row['no_permohonan_kredit'] ?>">Detail Pemohon</button> -->
                                                                                        </td>

                                                                                    </tr>
                                                                                <?php endforeach; ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>












                        </div>
                    </main>








                    <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">

                                <div class="modal-body">

                                    <div class="row ">
                                        <div class="col-lg-6 ">
                                            <div class="">
                                                <!-- 1 Data Pemohon -->

                                                <table class="table-hover" cellpadding=5 cellspacing=15>
                                                    <h3 class="h5"><strong>Data Pemohon</strong> </h3>

                                                    <tbody>

                                                        <tr>
                                                            <td>No. Permohonan</td>
                                                            <td>:</td>
                                                            <td id="no_permohonan_kredit"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Pemohon</td>
                                                            <td>:</td>
                                                            <td id="1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tempat Lahir </td>
                                                            <td>:</td>
                                                            <td id="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Lahir Pemohon</td>
                                                            <td>:</td>
                                                            <td id="3"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Kelamin Pemohon</td>
                                                            <td>:</td>
                                                            <td id="4"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Ibu Kandung Pemohon</td>
                                                            <td>:</td>
                                                            <td id="5"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>No. KTP Pemohon</td>
                                                            <td>:</td>
                                                            <td id="6"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>NPWP Pemohon</td>
                                                            <td>:</td>
                                                            <td id="7"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat Sesuai KTP Pemohon</td>
                                                            <td>:</td>
                                                            <td id="8"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat Sekarang Pemohon</td>
                                                            <td>:</td>
                                                            <td id="9"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Telepon Pemohon</td>
                                                            <td>:</td>
                                                            <td id="10"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Media Sosial Pemohon</td>
                                                            <td>:</td>
                                                            <td id="11"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status Kepemilikan Rumah Pemohon</td>
                                                            <td>:</td>
                                                            <td id="12"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pendidikan Terakhir Pemohon</td>
                                                            <td>:</td>
                                                            <td id="13"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gelar Pemohon</td>
                                                            <td>:</td>
                                                            <td id="14"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status Perkawinan Pemohon</td>
                                                            <td>:</td>
                                                            <td id="15"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jumlah Tanggungan Pemohon</td>
                                                            <td>:</td>
                                                            <td id="16"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Keluarga Yang Dapat Dihubungi</td>
                                                            <td>:</td>
                                                            <td id="17"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat</td>
                                                            <td>:</td>
                                                            <td id="18"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hubungan</td>
                                                            <td>:</td>
                                                            <td id="19"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Telepon/Hp Yang Dapat Dihubngi</td>
                                                            <td>:</td>
                                                            <td id="20"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>



                                        <div class="col-lg-6">
                                            <div class="">
                                                <table class="table-hover" cellpadding=5 cellspacing=15>
                                                    <h3 class="h5"><strong>Data Pekerjaan</strong> </h3>

                                                    <tbody>
                                                        <tr>
                                                            <td>Jenis Pekerjaan</td>
                                                            <td>:</td>
                                                            <td id="21"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Instansi</td>
                                                            <td>:</td>
                                                            <td id="22"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat</td>
                                                            <td>:</td>
                                                            <td id="23"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Telepon</td>
                                                            <td>:</td>
                                                            <td id="24"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tahun Mulai Bekerja</td>
                                                            <td>:</td>
                                                            <td id="25"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jabatan Saat Ini</td>
                                                            <td>:</td>
                                                            <td id="26"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Atasan Langsung</td>
                                                            <td>:</td>
                                                            <td id="27"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Telp/Hp Bendahara</td>
                                                            <td>:</td>
                                                            <td id="28"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>








                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <!-- 1 Data Pemohon Pasangan -->

                                                <table class="table-hover" cellpadding=5 cellspacing=15>
                                                    <h3 class="h5"><strong>Data Pasangan</strong> </h3>

                                                    <tbody>
                                                        <tr>
                                                            <td>Nama Pasangan</td>
                                                            <td>:</td>
                                                            <td id="29"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tempat Lahir Pasangan</td>
                                                            <td>:</td>
                                                            <td id="30"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Lahir Pasangan</td>
                                                            <td>:</td>
                                                            <td id="31"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>No. KTP Pasangan</td>
                                                            <td>:</td>
                                                            <td id="32"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Alamat KTP</td>
                                                            <td>:</td>
                                                            <td id="33"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat Sekarang</td>
                                                            <td>:</td>
                                                            <td id="34"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Telepon/HP</td>
                                                            <td>:</td>
                                                            <td id="telepon_pasangan"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="">
                                                <table class="table-hover" cellpadding=5 cellspacing=15>

                                                    <h3 class="h5"><strong>Data Pekerjaan Pasangan</strong> </h3>


                                                    <tbody>
                                                        <tr>
                                                            <td>Jenis Pekerjaan</td>
                                                            <td>:</td>
                                                            <td id="35"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Instansi</td>
                                                            <td>:</td>
                                                            <td id="36"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tahun Mulai Bekerja</td>
                                                            <td>:</td>
                                                            <td id="37"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jabatan Saat Ini</td>
                                                            <td>:</td>
                                                            <td id="38"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat Kantor</td>
                                                            <td>:</td>
                                                            <td id="39"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Telepon Kantor</td>
                                                            <td>:</td>
                                                            <td id="40"></td>
                                                        </tr>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Data Kredit -->
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <table class="table-hover" cellpadding=5 cellspacing=15>
                                                <h3 class="h5"><strong>Data Kredit</strong> </h3>
                                                <tbody>
                                                    <tr>
                                                        <td>Tanggal Permohonan</td>
                                                        <td>:</td>
                                                        <td id="41"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Perjanjian Kerjasama</td>
                                                        <td>:</td>
                                                        <td id="42"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Permohonan</td>
                                                        <td>:</td>
                                                        <td id="43"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Kredit Yang Dimohon (Rp)</td>
                                                        <td>:</td>
                                                        <td id="44"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jangka Waktu (Bln)</td>
                                                        <td>:</td>
                                                        <td id="45"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tujuan Penggunaan Kredit</td>
                                                        <td>:</td>
                                                        <td id="46"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Jaminanan</td>
                                                        <td>:</td>
                                                        <td id="47"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai Perkiraan Jaminan</td>
                                                        <td>:</td>
                                                        <td id="48"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Nama Marketing</td>
                                                        <td>:</td>
                                                        <td id="49"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Analis</td>
                                                        <td>:</td>
                                                        <td id="50"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                    </div>


                                    <div class="row mt-3">
                                        <div class="col-lg-6">

                                            <table class="table-hover" cellpadding=5 cellspacing=15>
                                                <h3 class="h5"><strong>Penghasilan Perbulan</strong> </h3>
                                                <tbody>
                                                    <tr>
                                                        <td>Penghasilan Pemohon (Rp)</td>
                                                        <td>:</td>
                                                        <td id="51"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penghasilan Pasangan (Rp)</td>
                                                        <td>:</td>
                                                        <td id="52"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penghasilan Tambahan (Rp)</td>
                                                        <td>:</td>
                                                        <td id="53"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penghasilan Tambahan Lainnya (Rp)</td>
                                                        <td>:</td>
                                                        <td id="54"></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                        <div class="col-lg-6">
                                            <table class="table-hover" cellpadding=5 cellspacing=15>
                                                <h3 class="h5"><strong>Pengeluaran Perbulan</strong> </h3>

                                                <tr>
                                                    <td>Biaya Hidup (Rp)</td>
                                                    <td>:</td>
                                                    <td id="55"></td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya Pendidikan (Rp)</td>
                                                    <td>:</td>
                                                    <td id="56"></td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya PAM/Listrik/Tlp/Hp (Rp)</td>
                                                    <td>:</td>
                                                    <td id="57"></td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya Transport (Rp)</td>
                                                    <td>:</td>
                                                    <td id="58"></td>
                                                </tr>
                                                <tr>
                                                    <td>Angsuran Bang Lain (Rp)</td>
                                                    <td>:</td>
                                                    <td id="59"></td>
                                                </tr>
                                                <tr>
                                                    <td>Angsuran Perumahan (Rp)</td>
                                                    <td>:</td>
                                                    <td id="60"></td>
                                                </tr>
                                                <tr>
                                                    <td>Angsuran Kendaraan (Rp)</td>
                                                    <td>:</td>
                                                    <td id="61"></td>
                                                </tr>
                                                <tr>
                                                    <td>Angsuran Barang Elektronik (Rp)</td>
                                                    <td>:</td>
                                                    <td id="62"></td>
                                                </tr>
                                                <tr>
                                                    <td>Angsuran Koperasi (Rp)</td>
                                                    <td>:</td>
                                                    <td id="63"></td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya Lainnya (Rp)</td>
                                                    <td>:</td>
                                                    <td id="64"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>



                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <h3 class="h5"><strong>Data Aset Yang Dimiliki</strong> </h3>
                                            <table class="table-hover" cellpadding=5 cellspacing=15>
                                                <tr>
                                                    <td>Aset Yang Dimiliki</td>
                                                    <td>:</td>
                                                    <td id="65"></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Aset</td>
                                                    <td>:</td>
                                                    <td id="66"></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Sertifikat</td>
                                                    <td>:</td>
                                                    <td id="67"></td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah Kendaraan</td>
                                                    <td>:</td>
                                                    <td id="68"></td>
                                                </tr>
                                                <tr>
                                                    <td>Merk Kendaraan</td>
                                                    <td>:</td>
                                                    <td id="69"></td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun Kendaraan</td>
                                                    <td>:</td>
                                                    <td id="70"></td>
                                                </tr>
                                                <tr>
                                                    <td>Atas Nama Kendaraan</td>
                                                    <td>:</td>
                                                    <td id="71"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>



                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <!-- <h3 class="h5"><strong>Catatan Cs</strong> </h3> -->
                                            <table class="table-hover" cellpadding=5 cellspacing=15>
                                                <tr>
                                                    <td>Catatan CS</td>
                                                    <td>:</td>
                                                    <td id="catatan_cs"></td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi Berkas</td>
                                                    <td>:</td>
                                                    <td id="lokasi_berkas"></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- bagian modal ketika tekan tombol  proses komite -->
                    <div class="modal fade modal_1" id="detail_all" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="h4"><strong>Detail Komite</strong></h1>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                </div>
                                <div class="modal-body data_modal">
                                </div>
                            </div>
                        </div>
                    </div>









                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="<?= BASEURL ?>">LOS HASAMITRA</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->














    <!-- jQuery -->
    <script src="<?= BASEURL ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= BASEURL ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Bootstrap 4 -->
    <script src="<?= BASEURL ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= BASEURL ?>/assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= BASEURL ?>/assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= BASEURL ?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= BASEURL ?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= BASEURL ?>/assets/plugins/moment/moment.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= BASEURL ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= BASEURL ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= BASEURL ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= BASEURL ?>/assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= BASEURL ?>/assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= BASEURL ?>/assets/dist/js/pages/dashboard.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= BASEURL ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= BASEURL ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>





    <!-- fungsi untuk aktigkan format datatables -->
    <script>
        $(function() {
            $("#example1").DataTable({})
            $("#example2").DataTable({})
            $("#example3").DataTable({})
        });
    </script>


    <script>
        $(document).ready(function() {

            $('#detail_all').on('show.bs.modal', function(e) {


                // $('.huruf').removeClass('text-primary')
                // $('.data_modal').addClass('active')

                var id = $(e.relatedTarget).data('id')
                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/modal/modal_detail_all' ?>',
                    data: 'no_permohonan_kredit=' + id,
                    success: function(data) {
                        var a = $('.data_modal').html(data)


                        a.find('#rekomendasi_komite').removeClass('active')
                        a.find('#detail_analisa').addClass('active')

                        a.find('#d').removeClass('active')
                        a.find('#c  ').addClass('active')





                        // data_detail_analisa.addClass('active')
                        // data_rekomendasi_komite.removeClass('active')

                        $('.tabel_slik_pemohon').DataTable({});
                        $('.tabel_slik_pasangan').DataTable({});
                    }
                })
            })
        })
    </script>





    <script>
        function btn_tolak(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
            var userId = ev.currentTarget.getAttribute('nameId');
            var nama_pemohon = ev.currentTarget.getAttribute('nama_pemohon');
            console.log(userId);
            console.log(urlToRedirect); // verify if this is the right URL
            Swal.fire({
                title: "Anda yakin tolak permohonan?",
                html: '<div class="text-left">No. Permohonan Kredit : ' +
                    userId + '<br>' +
                    'Nama Pemohon : ' +
                    nama_pemohon + '</div>',
                // text: 'No. Permohonan Kredit : ' + userId + '<br> Nama Pemohon : ' + nama_pemohon,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                showLoaderOnConfirm: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = urlToRedirect;
                }
            })
        }
    </script>




    <script>
        function btn_batal(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
            var userId = ev.currentTarget.getAttribute('nameId');
            var nama_pemohon = ev.currentTarget.getAttribute('nama_pemohon');
            console.log(userId);
            console.log(urlToRedirect); // verify if this is the right URL
            Swal.fire({
                title: "Anda yakin batal permohonan?",
                html: '<div class="text-left">No. Permohonan Kredit : ' +
                    userId + '<br>' +
                    'Nama Pemohon : ' +
                    nama_pemohon + '</div>',
                // text: 'No. Permohonan Kredit : ' + userId,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                showLoaderOnConfirm: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = urlToRedirect;
                }
            })
        }
    </script>





    <script>
        $(document).on('click', '.btn_aktifkan_tolak_wawancara', function(e) {
            var no_permohonan_kredit = $(this).data('no_permohonan_kredit')
            var nama_pemohon = $(this).data('nama_pemohon')
            var nama_instansi = $(this).data('nama_instansi')
            Swal.fire({
                icon: 'info',
                title: '<strong>Yakin aktifkan data ini ? </strong>',
                html: 'No. Permohonan : <b> ' + no_permohonan_kredit + '</b>' +
                    '<br>' +
                    'Nama Pemohon : <b> ' + nama_pemohon + '</b>' +
                    '<br>' +
                    'Nama Instansi : <b> ' + nama_instansi + '</b>' +
                    '<br>',
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",
                showLoaderOnConfirm: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'post',
                        url: '<?= BASEURL; ?>/wawancara/aktifkan_wawancara_tolak/' + no_permohonan_kredit,
                        data: {
                            'no_permohonan_kredit': no_permohonan_kredit,
                            'lokasi_berkas': "ANALISA"
                        },
                        success: function(res) {
                            if (res.trim() == 'sukses') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Data berhasil diaktifkan',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    window.location.href = "<?= BASEURL; ?>/wawancara/daftar_sudah_wawancara/";
                                })

                            } else if (res.trim() == 'gagal')
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Erorr : ' + res.trim(),
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            console.log(res.trim())
                            
                        },

                        error: function(res) {
                            Swal.fire({
                                icon: 'info',
                                title: 'Error' + res.trim(),
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    })
                }
            })
        })
    </script>




    <script>
        $(document).on('click', '.btn_aktifkan_batal_wawancara', function(e) {
            var no_permohonan_kredit = $(this).data('no_permohonan_kredit')
            var nama_pemohon = $(this).data('nama_pemohon')
            var nama_instansi = $(this).data('nama_instansi')
            Swal.fire({
                icon: 'info',
                title: '<strong>Yakin aktifkan data ini ? </strong>',
                html: 'No. Permohonan : <b> ' + no_permohonan_kredit + '</b>' +
                    '<br>' +
                    'Nama Pemohon : <b> ' + nama_pemohon + '</b>' +
                    '<br>' +
                    'Nama Instansi : <b> ' + nama_instansi + '</b>' +
                    '<br>',
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",
                showLoaderOnConfirm: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'post',
                        url: '<?= BASEURL; ?>/wawancara/aktifkan_wawancara_batal/' + no_permohonan_kredit,
                        data: {
                            'no_permohonan_kredit': no_permohonan_kredit,
                            'lokasi_berkas': "ANALISA"
                        },
                        success: function(res) {
                            if (res.trim() == 'sukses') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Data berhasil diaktifkan',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    window.location.href = "<?= BASEURL; ?>/wawancara/daftar_sudah_wawancara/";
                                })

                            } else if (res.trim() == 'gagal')
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Erorr : ' + res.trim(),
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            console.log(res.trim())
                        },

                        error: function(res) {
                            Swal.fire({
                                icon: 'info',
                                title: 'Error ' + res.trim(),
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    })
                }
            })
        })
    </script>



</body>

</html>