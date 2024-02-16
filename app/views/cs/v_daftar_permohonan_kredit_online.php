<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>


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

    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">




    <style>
        /* CSS untuk gambar dengan efek zoom */
        .zoomable-image {
            transition: transform 0.3s ease;
            cursor: grab;
        }

        .zoomable-image:hover {
            transform: scale(1.2);
            /* Ganti faktor skala sesuai kebutuhan */
            cursor: grab;
        }

        .zoomable-image:active {
            cursor: grabbing;
        }
    </style>



    <style>
        .select2-container--bootstrap.select2-container--open {
            z-index: 10000;
            /* Adjust the value as needed */
        }
    </style>





    <style>
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .is-invalid {
            border: 1px solid red;
        }

        .required {
            color: red;
            /* Atur warna atau gaya lainnya sesuai kebutuhan */
            margin-left: 5px;
            /* Menambahkan spasi antara label dan tanda bintang */
            font-size: 15px;
        }


        /* Tambahkan animasi shake ke CSS Anda */


        /* Tambahkan animasi shake ke CSS Anda */

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            10%,
            90% {
                transform: translateX(-5px);
            }

            20%,
            80% {
                transform: translateX(5px);
            }

            30%,
            70% {
                transform: translateX(-3px);
            }

            40%,
            60% {
                transform: translateX(3px);
            }

            50% {
                transform: translateX(0);
            }
        }


        /* Tambahkan kelas shake ke elemen yang akan digoyangkan */

        .shake {
            animation: shake 0.8s ease;
            /* Ubah durasi menjadi 0.8s */
            border: 1px solid #ff0000;
            /* Tambahkan border merah untuk menandakan error */
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
            /* Tambahkan shadow merah untuk efek error */
        }
    </style>


    <style>
        #file-container {
            position: relative;
            overflow: hidden;
        }

        #loading-shine {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.8), transparent);
            background-size: 200% 100%;
            animation: loadingShine 1.5s linear infinite;
        }


        @keyframes loadingShine {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }
    </style>

</head>



<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">




        <!-- Navbar -->
        <?php $this->view('cs/navbar') ?>
        <!-- Navbar -->

        <!-- Side Bar -->
        <?php $this->view('cs/side_bar') ?>
        <!-- Side Bar -->



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $data['title'] ?></h1>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">


                <div class="container-fluid">



                    <!-- tabel -->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-striped table-hover first display nowrap">
                                    <thead>
                                        <tr>

                                            <th>
                                                No
                                            </th>

                                            <th>
                                                Tanggal Masuk
                                            </th>
                                            <th>
                                                Nama Pemohon
                                            </th>
                                            <th>
                                                Instansi
                                            </th>
                                            <th>
                                                Plafond Dimohon
                                            </th>

                                            <th>
                                                JW (Bln)
                                            </th>
                                            <th>
                                                No. KTP
                                            </th>
                                            <th>
                                                No. HP
                                            </th>
                                            <th>
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div><!-- /.container-fluid -->



            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="<?= BASEURL ?>">LOS HASAMITRA</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>


        <!-- Modal -->
        <div class="modal fade" id="detailModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content" style="height: 90vh; overflow-y: auto;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="container mt-4">
                            <ul class="nav nav-tabs" id="myTabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1">Data Pemohon</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2">Data Pasangan</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3">Data Kredit</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4">Penghasilan dan Biaya Hidup</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab5">Aset Pemohon</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab6-tab" data-toggle="tab" href="#tab6">File Berkas</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab7-tab" data-toggle="tab" href="#tab7">Validasi CS</a>
                                </li>

                            </ul>

                            <!-- isi konten -->

                            <form class='form'>
                                <div class="tab-content mt-2">
                                    <div class="tab-pane fade show active" id="tab1">

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="mt-1">
                                                    <label class="form-label">Nama Pemohon</label><span class="required">*</span></label>
                                                    <input class="form-control nama_pemohon" name="nama_pemohon" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Tempat Lahir</label><span class="required">*</span>
                                                    <input class="form-control tempat_lahir_pemohon" name="tempat_lahir_pemohon" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Tanggal Lahir</label><span class="required">*</span>
                                                    <input class="form-control tgl_lahir_pemohon" name="tgl_lahir_pemohon" type="date" required>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="mt-2 mb-2">Jenis Kelamin</label><span class="required">*</span>
                                                    <select name="jenis_kelamin_pemohon" class="form-control jenis_kelamin_pemohon" required>
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option value="PRIA">PRIA</option>
                                                        <option value="WANITA">WANITA</option>
                                                    </select>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Nama Ibu Kandung</label><span class="required">*</span>
                                                    <input class="form-control nama_ibu_kandung_pemohon" name="nama_ibu_kandung_pemohon" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">No. KTP</label><span class="required">*</span>
                                                    <input class="form-control no_ktp_pemohon input-number ktp" name="no_ktp_pemohon" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-1">
                                                    <label class="form-label">NPWP</label>
                                                    <input class="form-control npwp_pemohon" name="npwp_pemohon" type="text">
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Alamat Sesuai KTP</label><span class="required">*</span>
                                                    <input class="form-control alamat_ktp_pemohon" name="alamat_ktp_pemohon" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Alamat Sekarang</label><span class="required">*</span>
                                                    <input class="form-control alamat_sekarang_pemohon" name="alamat_sekarang_pemohon" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Telepon/Hp</label><span class="required">*</span>
                                                    <input class="form-control telepon_pemohon" name="telepon_pemohon" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control media_sosial" name="media_sosial" type="text">
                                                </div>

                                                <div class="mt-1">
                                                    <label class="form-label">Status Kepemilikan Rumah</label>

                                                    <select class="form-control status_kepemilikan_rumah_pemohon" aria-label="" name="status_kepemilikan_rumah_pemohon">
                                                        <option selected disabled>- Silahkan Pilih -</option>
                                                        <option value="PRIBADI">PRIBADI</option>
                                                        <option value="KELUARGA">KELUARGA</option>
                                                        <option value="DINAS">DINAS</option>
                                                        <option value="SEWA">SEWA</option>
                                                        <option value="KOST">KOST</option>
                                                        <option value="LAINNYA">LAINNYA</option>
                                                    </select>

                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Pendidikan Terakhir</label>
                                                    <select class="form-control pendidikan_terakhir_pemohon" aria-label="" name="pendidikan_terakhir_pemohon">
                                                        <option selected disabled>- Silahkan Pilih -</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMP">SMP</option>
                                                        <option value="SMA">SMA</option>
                                                        <option value="D3">D3</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                        <option value="LAINNYA">LAINNYA</option>
                                                    </select>
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Gelar Pendidikan</label>
                                                    <input class="form-control gelar_pemohon" name="gelar_pemohon" type="text">
                                                </div>
                                                <div class="mt-2">

                                                    <label class="form-label">Status Perkawinan</label><span class="required">*</span>
                                                    <select class="form-control status_perkawinan" aria-label="" name="status_perkawinan" required>
                                                        <option selected disabled>- Silahkan Pilih -</option>
                                                        <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                                                        <option value="MENIKAH">MENIKAH</option>
                                                        <option value="DUDA">DUDA</option>
                                                        <option value="JANDA">JANDA</option>
                                                    </select>
                                                    <div class="error-message"></div>
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Jumlah Tanggungan (Orang)</label>
                                                    <input class="form-control jumlah_tanggungan input-number" name="jumlah_tanggungan" type="text">
                                                </div>

                                                <div class="mt-4">
                                                    <nav aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item active" aria-current="page">Keluarga tidak serumah yang dapat dihubungi atau teman</li>
                                                        </ol>
                                                    </nav>
                                                    <label class="form-label">Nama</label><span class="required">*</span>
                                                    <input class="form-control nama_keluarga_dapat_dihubungi" name="nama_keluarga_dapat_dihubungi" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Alamat</label><span class="required">*</span>
                                                    <input class="form-control alamat_keluarga_dapat_dihubungi" name="alamat_keluarga_dapat_dihubungi" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Hubungan</label><span class="required">*</span>
                                                    <input class="form-control hubungan_keluarga_dapat_dihubungi" name="hubungan_keluarga_dapat_dihubungi" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Telepon/Hp Yang Dapat Dihubungi</label><span class="required">*</span>
                                                    <input class="form-control telepon_keluarga_dapat_dihubungi" name="telepon_keluarga_dapat_dihubungi" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>


                                            </div>


                                            <div class="col md-6">
                                                <div class="mt-1">
                                                    <label class="form-label">Jenis Pekerjaan</label><span class="required">*</span>
                                                    <select name="jenis_pekerjaan" class="form-control jenis_pekerjaan" required>
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <?php foreach ($data['jenis_pekerjaan'] as $i) : ?>
                                                            <option value="<?= $i['jenis_pekerjaan'] ?>"><?php echo $i['jenis_pekerjaan'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>

                                                    <div class="error-message"></div>
                                                </div>


                                                <div class="mt-2">
                                                    <label class="form-label">Kode Instansi</label><span class="required">*</span>
                                                    <select name="kode_instansi" class="form-control select2bs4 kode_instansi" required>
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <?php foreach ($data['ref_instansi'] as $i) : ?>
                                                            <option value='<?= $i['kode_instansi'] ?>'><?php echo $i['kode_instansi'] . ' - ' . $i['nama_instansi'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Nama Instansi</label><span class="required">*</span>
                                                    <input class="form-control nama_instansi" name="nama_instansi" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>


                                                <div class="mt-2">
                                                    <label class="form-label">Alamat Instansi</label><span class="required">*</span>
                                                    <input class="form-control alamat_instansi" name="alamat_instansi" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Telepon Instansi</label>
                                                    <input class="form-control telepon_instansi" name="telepon_instansi" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Tahun Mulai Bekerja</label>
                                                    <input class="form-control tahun_mulai_bekerja" name="tahun_mulai_bekerja" type="text">
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Jabatan Saat Ini</label>
                                                    <input class="form-control jabatan_saat_ini" name="jabatan_saat_ini" type="text">
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Atasan Lansung</label>
                                                    <input class="form-control atasan_langsung" name="atasan_langsung" type="text">
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Telepon Bendahara</label>
                                                    <input class="form-control telepon_bendahara" name="telepon_bendahara" type="text">
                                                </div>
                                            </div>





                                        </div>



                                    </div>
                                    <div class="tab-pane fade" id="tab2">

                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="mt-1">
                                                    <label class="form-label">Nama Pasangan</label><span class="required">*</span>
                                                    <input class="form-control required_pasangan nama_pasangan" name="nama_pasangan" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>



                                                <div class="mt-2">
                                                    <label class="form-label">Tempat Lahir Pasangan</label><span class="required">*</span>
                                                    <input class="form-control required_pasangan tempat_lahir_pasangan" name="tempat_lahir_pasangan" type="text">
                                                    <div class="error-message"></div>
                                                </div>



                                                <div class="mt-2">
                                                    <label class="form-label">Tanggal Lahir Pasangan</label><span class="required">*</span>
                                                    <input class="form-control required_pasangan tgl_lahir_pasangan" name="tgl_lahir_pasangan" type="date">
                                                    <div class="error-message"></div>
                                                </div>


                                                <div class="mt-2">
                                                    <label class="form-label">No. KTP Pasangan</label><span class="required">*</span>
                                                    <input class="form-control input-number ktp required_pasangan no_ktp_pasangan" name="no_ktp_pasangan" type="text">
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Alamat KTP Pasangan</label><span class="required">*</span>
                                                    <input class="form-control required_pasangan alamat_ktp_pasangan" name="alamat_ktp_pasangan" type="text">
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Alamat Sekarang Pasangan</label><span class="required">*</span>
                                                    <input class="form-control required_pasangan alamat_sekarang_pasangan" name="alamat_sekarang_pasangan" type="text">
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Telepon/Hp Pasangan</label>
                                                    <input class="form-control telepon_pasangan" name="telepon_pasangan" type="text">
                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mt-2">
                                                    <label class="form-label">Jenis Pekerjaan Pasangan</label>
                                                    <input class="form-control jenis_pekerjaan_pasangan" name="jenis_pekerjaan_pasangan" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Nama Instansi Pasangan</label>
                                                    <input class="form-control nama_instansi_pasangan" name="nama_instansi_pasangan" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Tahun Mulai Bekerja Pasangan</label>
                                                    <input class="form-control tahun_mulai_bekerja_pasangan" name="tahun_mulai_bekerja_pasangan" type="text">
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Jabatan Saat Ini Pasangan</label>
                                                    <input class="form-control jabatan_saat_ini_pasangan" name="jabatan_saat_ini_pasangan" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Alamat Kanto Pasangan</label>
                                                    <input class="form-control alamat_kantor_pasangan" name="alamat_kantor_pasangan" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Telepon Kantor Pasangan</label>
                                                    <input class="form-control telepon_kantor_pasangan" name="telepon_kantor_pasangan" type="text">
                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="tab3">


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mt-1">
                                                    <label class="form-label">Jumlah Kredit Yang Dimohon</label><span class="required">*</span>
                                                    <input class="form-control input-number rupiah plafond_dimohon" name="plafond_dimohon" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Jangka Waktu (Bulan)</label><span class="required">*</span>
                                                    <input class="form-control input-number bulan jangka_waktu" name="jangka_waktu" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Tujuan Penggunaan Kredit</label><span class="required">*</span>
                                                    <input class="form-control tujuan_penggunaan_kredit" name="tujuan_penggunaan_kredit" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Jenis Jaminan</label>
                                                    <select name="jenis_jaminan" class="form-control jenis_jaminan">
                                                        <option value="" selected>- Silahkan Pilih -</option>
                                                        <?php foreach ($data['ref_jaminan'] as $i) : ?>
                                                            <option value="<?= $i['nama_jaminan'] ?>"><?php echo $i['nama_jaminan'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>


                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Nilai Perkiraaan Jaminan</label>
                                                    <input class="form-control input-number rupiah nilai_jaminan" name="nilai_jaminan" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Tanggal Permohonan</label>
                                                    <input class="form-control input-number tanggal_permohonan" name="tanggal_permohonan" type="date">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Kode Cabang</label>
                                                    <input class="form-control input-number kode_cabang" name="kode_cabang" type="text">
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="tab4">


                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="mt-1">
                                                    <label class="form-label">Penghasilan Pemohon (Rp)</label><span class="required">*</span>
                                                    <input class="form-control input-number rupiah penghasilan_pemohon" name="penghasilan_pemohon" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Penghasilan Pasangan (Rp)</label>
                                                    <input class="form-control input-number rupiah penghasilan_pasangan" name="penghasilan_pasangan" type="text">
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Penghasilan Tambahan (Rp)</label>
                                                    <input class="form-control input-number rupiah penghasilan_tambahan" name="penghasilan_tambahan" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Penghasilan Tambahan Lainnya (Rp)</label>
                                                    <input class="form-control input-number rupiah penghasilan_tambahan_lainnya" name="penghasilan_tambahan_lainnya" type="text">
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="mt-1">
                                                    <label class="form-label">Biaya Hidup Perbulan (Rp)</label><span class="required">*</span>
                                                    <input class="form-control input-number rupiah biaya_hidup_perbulan" name="biaya_hidup_perbulan" type="text" required>
                                                    <div class="error-message"></div>
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Biaya Pendidikan (Rp)</label>
                                                    <input class="form-control input-number rupiah biaya_pendidikan" name="biaya_pendidikan" type="text">
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Biaya PAM/Listrik/Telp/Hp (Rp)</label>
                                                    <input class="form-control input-number rupiah biaya_pam_listrik_telepon" name="biaya_pam_listrik_telepon" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Biaya Transport (Rp)</label>
                                                    <input class="form-control input-number rupiah biaya_transport" name="biaya_transport" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Angsuran Bank Lain (Rp)</label>
                                                    <input class="form-control input-number rupiah angsuran_bank_lain" name="angsuran_bank_lain" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Angsuran Perumahan (Rp)</label>
                                                    <input class="form-control input-number rupiah angsuran_perumahan" name="angsuran_perumahan" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Angsuran Kendaraan (Rp)</label>
                                                    <input class="form-control input-number rupiah angsuran_kendaraan" name="angsuran_kendaraan" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Angsuran Barang Elektronik (Rp)</label>
                                                    <input class="form-control input-number rupiah angsuran_barang_elektronik" name="angsuran_barang_elektronik" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Angsuran Koperasi (Rp)</label>
                                                    <input class="form-control input-number rupiah angsuran_koperasi" name="angsuran_koperasi" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Biaya Lainnya (Rp)</label>
                                                    <input class="form-control input-number rupiah biaya_lainnya" name="biaya_lainnya" type="text">
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="tab5">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mt-1">
                                                    <label class="form-label">Aset Yang Dimiliki</label>
                                                    <input class="form-control aset_yang_dimiliki" name="aset_yang_dimiliki" type="text">
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Alamat Aset</label>
                                                    <input class="form-control alamat_aset" name="alamat_aset" type="text">
                                                </div>
                                                <div class="mt-2">
                                                    <label class="form-label">Jenis Sertifikat</label>
                                                    <input class="form-control jenis_sertifikat" name="jenis_sertifikat" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Jumlah Kendaraan</label>
                                                    <input class="form-control jumlah_kendaraan" name="jumlah_kendaraan" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Merek Kendaran</label>
                                                    <input class="form-control merek_kendaraan" name="merek_kendaraan" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Tahun Kendaran</label>
                                                    <input class="form-control tahun_kendaraan" name="tahun_kendaraan" type="text">
                                                </div>

                                                <div class="mt-2">
                                                    <label class="form-label">Atas Nama Kendaraan</label>
                                                    <input class="form-control atas_nama_kendaraan" name="atas_nama_kendaraan" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                    <div class="tab-pane fade" id="tab6">
                                        <div class="row" id="imageContainer"></div>
                                    </div>


                                    <div class="tab-pane fade" id="tab7">

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="mt-1">
                                                    <label class="mt-2 mb-2">Perjanjian Kerjasama</label><span class="ml-1" style="color:red;">*</span>
                                                    <select name="perjanjian_kerjasama" class="form-control perjanjian_kerjasama" required>
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option>ADA</option>
                                                        <option>BELUM ADA</option>
                                                    </select>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="mt-2 mb-2">Jenis Permohonan</label><span class="ml-1" style="color:red;">*</span>
                                                    <select name="jenis_permohonan" class="form-control jenis_permohonan" required>
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option value="BARU">BARU</option>
                                                        <option value="PENAMBAHAN">PENAMBAHAN</option>
                                                        <option value="FASILITAS KEDUA">FASILITAS KEDUA</option>
                                                    </select>
                                                    <div class="error-message"></div>
                                                </div>



                                                <div class="mt-2">
                                                    <label class="mt-2 mb-2">Catatan CS</label><span class="ml-1" style="color:red;">*</span>
                                                    <textarea name="catatan_cs" class="form-control catatan_cs h-10" rows="3" placeholder="" oninput="this.value = this.value.toUpperCase()" required></textarea>
                                                    <div class="error-message"></div>
                                                </div>

                                                <!-- <div class="mt-2">
                                                </div> -->

                                            </div>

                                            <div class="col-md-6">
                                                <div class="mt-1">
                                                    <label class="mt-2 mb-2">Tipe Kredit</label><span class="ml-1" style="color:red;">*</span>
                                                    <select name="tipe_kredit" class="form-control tipe_kredit" required>
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option value="KONSUMTIF">KONSUMTIF</option>
                                                        <option value="PRODUKTIF">PRODUKTIF</option>
                                                    </select>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="mt-2 mb-2">Nama Marketing</label><span class="ml-1" style="color:red;">*</span>
                                                    <select name="id_marketing" class="form-control id_marketing" required>
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <?php foreach ($data['nama_marketing'] as $i) : ?>
                                                            <option value="<?= $i['nama_marketing'] ?>"><?php echo $i['nama_marketing'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <div class="error-message"></div>
                                                </div>

                                                <div class="mt-2">
                                                    <label class="mt-2 mb-2">Nama RO</label><span class="ml-1" style="color:red;">*</span>
                                                    <select name="id_analis" class="form-control id_analis" required>
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <?php foreach ($data['nama_ro'] as $i) : ?>
                                                            <option value="<?= $i['nama_ro'] ?>"><?php echo $i['nama_ro'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <div class="error-message"></div>
                                                </div>


                                            </div>


                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-12 text-center">
                                                <button type="button" class="btn btn-success btn-lg btn-approve" style="font-size: 30px; padding: 15px 50px;">Approve</button>
                                                <button type="button" class="btn btn-danger btn-lg btn-reject" style="font-size: 30px; padding: 15px 50px;">Reject</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>





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

    <!-- jquery untuk mask tanggal -->
    <script src="<?= BASEURL ?>/assets/plugins/jquery/jquery.mask.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/moment/moment-with-locales.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= BASEURL ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- handlde select  -->
    <script src="<?= BASEURL ?>/assets/plugins/select2/js/select2.full.min.js"></script>
    <script src="https://unpkg.com/panzoom@7.1.0/dist/panzoom.js"></script>




    <!-- untuk ubah tampilan inputan tanggal  -->
    <script>
        $(document).ready(function() {
            // $('#example1').DataTable()
            $('.select2bs4.kode_instansi').select2({
                theme: 'bootstrap4'
            });
        });
    </script>


    <script>
        $(document).ready(function() {

            // var dataTable = $("#example1").DataTable({})

            // Fungsi untuk memuat data secara asinkron
            function loadData() {
                $.ajax({
                    url: '<?= BASEURL ?>/cs/datatojson_getdatatodaftar_permohonan_kredit_online', // Gantilah dengan path ke controller Anda
                    method: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // Inisialisasi DataTable
                        var dataTable = $('#example1').DataTable();

                        // Hapus baris yang ada
                        dataTable.clear().draw();

                        // Tambahkan data baru ke DataTable
                        $.each(data.api, function(index, row) {

                            var formattedPlafond = parseFloat(row.plafond_dimohon).toLocaleString().replace(/,/g, '.');
                            dataTable.row.add([
                                (index + 1),
                                row.tgl_create,
                                row.nama_pemohon,
                                row.nama_instansi,
                                formattedPlafond,
                                row.jangka_waktu,
                                row.no_ktp_pemohon,
                                row.telepon_pemohon,
                                '<button class="btn btn-primary btn-detail" data-id="' + row.id + '" data-no_ktp_pemohon="' + row.no_ktp_pemohon + '">Lihat Detail</button>'
                                // Tambahkan kolom lainnya sesuai kebutuhan
                            ]).draw();
                        });

                        $('.jumlahdata_sidebar_kreditonline').html(data.jumlahData);
                    }
                });
            }

            // Memuat data pertama kali saat halaman dimuat
            loadData();

            // Set interval untuk memperbarui data setiap beberapa detik
            setInterval(function() {
                loadData();
            }, 5000); // Gantilah dengan interval yang diinginkan (dalam milidetik)
        });
    </script>




    <script>
        function fetchDataFromAPI(dataId, callback) {
            $.ajax({
                url: "<?= BASEURL ?>/kreditonlineapi/getpermohonanwhereid/" + dataId,
                method: "GET",
                dataType: "json",
                success: function(data) {
                    callback(data);
                },
                error: function(xhr, status, error) {
                    console.error("Error: " + status + " - " + error);
                }
            });
        }

        function simpan_data(dataForm, callback) {
            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/cs/simpan_data2' ?>',
                data: dataForm,
                processData: false, // Set to false to prevent jQuery from processing the data
                contentType: false, // Set to false to prevent jQuery from setting the content type
                success: function(data) {
                    callback(data.trim());
                },
                error: function(error) {
                    console.error("Error: " + status + " - " + error);
                }
            });
        }
    </script>

    <script>
        var isImageRequestInProgress = false; // Tambahkan variabel penanda

        $(document).ready(function() {
            // Tangani klik tombol
            $(document).on("click", ".btn-detail", function() {
                // Ambil nilai data-id
                var dataId = $(this).data("id");
                var no_ktp_pemohon = $(this).data("no_ktp_pemohon");


                // Check if the modal is already visible
                if ($("#detailModal").hasClass("show")) {
                    return; // Do nothing if the modal is already visible
                }
                fetchDataFromAPI(dataId, function(data) {


                    if (data.message === "success") {
                        var data = data.data;


                        // cek status status_perkawinan jika tidak MENIKAH maka hide dan lepas required di tap pasangan
                        if (data.status_perkawinan != 'MENIKAH') {
                            // $('#tab2').hide()
                            $('.required_pasangan').removeAttr('required')
                        } else {
                            $('.required_pasangan').attr('required', 'required')
                        }


                        field(data)
                        formatRupiahFieldByClass()

                        // Tambahkan pengecekan sebelum membuat permintaan gambar
                        if (!isImageRequestInProgress) {
                            isImageRequestInProgress = true; // Setel variabel penanda
                            getfile(no_ktp_pemohon);
                        }

                        $("#detailModal").modal("show");

                    } else {
                        console.error("Error: " + data.message);
                    }
                })



            });

            $("#detailModal").on("hidden.bs.modal", function() {
                // Membersihkan konten modal saat ditutup
                clearModalContent();
            });





            function clearModalContent() {
                // Hapus konten gambar atau elemen lainnya di dalam modal
                // Gantilah dengan kode sesuai kebutuhan Anda
                $("#imageContainer").empty();
            }

            function ifmodalshow(no_ktp_pemohon) {



                $("#detailModal").on("show.bs.modal", function() {

                });

                getfile(no_ktp_pemohon)
            }
        });
    </script>






    <script>
        function getfile(no_ktp_pemohon) {


            // Ganti URL dengan URL API Laravel Anda
            var apiUrl = "<?= BASEURL ?>/kreditonlineapi/getImages/" + no_ktp_pemohon; // Ganti dengan nomor permohonan atau nomor KTP yang sesuai

            $("#imageContainer").empty();
            // Lakukan permintaan AJAX
            $.ajax({
                url: apiUrl, // Gantilah dengan URL JSON Anda
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Loop melalui setiap path gambar dalam JSON
                    data.image_paths.forEach(function(imagePath) {
                        // Buat elemen card dengan menggunakan Bootstrap
                        var card = $('<div>').addClass('col-6 mb-4');
                        var cardBody = $('<div>').addClass('card-body');

                        var img = $('<img>').addClass('card-img-top zoomable-image').attr('src', imagePath);

                        cardBody.append(img);
                        card.append(cardBody);

                        $('#imageContainer').append(card);

                        // Inisialisasi panzoom pada setiap gambar
                        panzoom(img[0]);

                    });
                    isImageRequestInProgress = false;
                },
                error: function(error) {
                    console.log('Error:', error);
                    isImageRequestInProgress = false;
                }
            });
        }
    </script>




    <script>
        function no_ktp(no_ktp) {
            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/cs/cek_ktp_tbl_permohoan' ?>',
                data: {
                    'no_ktp': no_ktp
                },
                success: function(res) {
                    if (res.trim() > 0) {
                        $('.jenis_permohonan').val('PENAMBAHAN')
                    } else {
                        $('.jenis_permohonan').val('BARU')
                    }
                }
            })

        }
    </script>

    <script>
        function field(data) {
            $('.nama_pemohon').val(data.nama_pemohon)
            $('.tempat_lahir_pemohon').val(data.tempat_lahir_pemohon)
            $('.tgl_lahir_pemohon').val(formatdate(data.tgl_lahir_pemohon))
            $('.jenis_kelamin_pemohon').val(data.jenis_kelamin_pemohon)
            $('.nama_ibu_kandung_pemohon').val(data.nama_ibu_kandung_pemohon)
            $('.no_ktp_pemohon').val(data.no_ktp_pemohon)
            no_ktp(data.no_ktp_pemohon)
            $('.npwp_pemohon').val(data.npwp_pemohon)
            $('.alamat_ktp_pemohon').val(data.alamat_ktp_pemohon)
            $('.alamat_sekarang_pemohon').val(data.alamat_sekarang_pemohon)
            $('.telepon_pemohon').val(data.telepon_pemohon)
            $('.media_sosial').val(data.media_sosial)
            $('.status_kepemilikan_rumah_pemohon').val(data.status_kepemilikan_rumah_pemohon)
            $('.pendidikan_terakhir_pemohon').val(data.pendidikan_terakhir_pemohon)
            $('.gelar_pemohon').val(data.gelar_pemohon)
            $('.status_perkawinan').val(data.status_perkawinan)
            $('.jumlah_tanggungan').val(data.jumlah_tanggungan)
            $('.nama_keluarga_dapat_dihubungi').val(data.nama_keluarga_dapat_dihubungi)
            $('.alamat_keluarga_dapat_dihubungi').val(data.alamat_keluarga_dapat_dihubungi)
            $('.hubungan_keluarga_dapat_dihubungi').val(data.hubungan_keluarga_dapat_dihubungi)
            $('.telepon_keluarga_dapat_dihubungi').val(data.telepon_keluarga_dapat_dihubungi)
            $('.jenis_pekerjaan').val(data.jenis_pekerjaan)

            kode_instansi(data.kode_instansi)

            nama_instansi()
            $('.alamat_instansi').val(data.alamat_instansi)
            $('.telepon_instansi').val(data.telepon_instansi)
            $('.tahun_mulai_bekerja').val(data.tahun_mulai_bekerja)
            $('.jabatan_saat_ini').val(data.jabatan_saat_ini)
            $('.atasan_langsung').val(data.atasan_langsung)
            $('.telepon_bendahara').val(data.telepon_bendahara)
            $('.nama_pasangan').val(data.nama_pasangan)
            $('.tempat_lahir_pasangan').val(data.tempat_lahir_pasangan)
            $('.tgl_lahir_pasangan').val(formatdate(data.tgl_lahir_pasangan))
            $('.no_ktp_pasangan').val(data.no_ktp_pasangan)
            $('.alamat_ktp_pasangan').val(data.alamat_ktp_pasangan)
            $('.alamat_sekarang_pasangan').val(data.alamat_sekarang_pasangan)
            $('.telepon_pasangan').val(data.telepon_pasangan)
            $('.jenis_pekerjaan_pasangan').val(data.jenis_pekerjaan_pasangan)
            $('.nama_instansi_pasangan').val(data.nama_instansi_pasangan)
            $('.tahun_mulai_bekerja_pasangan').val(data.tahun_mulai_bekerja_pasangan)
            $('.jabatan_saat_ini_pasangan').val(data.jabatan_saat_ini_pasangan)
            $('.alamat_kantor_pasangan').val(data.alamat_kantor_pasangan)
            $('.telepon_kantor_pasangan').val(data.telepon_kantor_pasangan)
            $('.plafond_dimohon').val(data.plafond_dimohon)

            $('.jangka_waktu').val(data.jangka_waktu)
            $('.tujuan_penggunaan_kredit').val(data.tujuan_penggunaan_kredit)
            $('.jenis_jaminan').val(data.jenis_jaminan)
            $('.nilai_jaminan').val(data.nilai_jaminan)
            $('.penghasilan_pemohon').val(data.penghasilan_pemohon)
            $('.penghasilan_pasangan').val(data.penghasilan_pasangan)
            $('.penghasilan_tambahan').val(data.penghasilan_tambahan)
            $('.penghasilan_tambahan_lainnya').val(data.penghasilan_tambahan_lainnya)
            $('.biaya_hidup_perbulan').val(data.biaya_hidup_perbulan)
            $('.biaya_pendidikan').val(data.biaya_pendidikan)
            $('.biaya_pam_listrik_telepon').val(data.biaya_pam_listrik_telepon)
            $('.biaya_transport').val(data.biaya_transport)
            $('.angsuran_bank_lain').val(data.angsuran_bank_lain)
            $('.angsuran_perumahan').val(data.angsuran_perumahan)
            $('.angsuran_kendaraan').val(data.angsuran_kendaraan)
            $('.angsuran_barang_elektronik').val(data.angsuran_barang_elektronik)
            $('.angsuran_koperasi').val(data.angsuran_koperasi)
            $('.biaya_lainnya').val(data.biaya_lainnya)
            $('.aset_yang_dimiliki').val(data.aset_yang_dimiliki)
            $('.alamat_aset').val(data.alamat_aset)
            $('.jenis_sertifikat').val(data.jenis_sertifikat)
            $('.jumlah_kendaraan').val(data.jumlah_kendaraan)
            $('.merek_kendaraan').val(data.merek_kendaraan)
            $('.tahun_kendaraan').val(data.tahun_kendaraan)
            $('.atas_nama_kendaraan').val(data.atas_nama_kendaraan)
            $('.kode_cabang').val(data.kode_cabang)
            $('.tanggal_permohonan').val(formatdate2(formatdate(data.tgl_create)))

        }
    </script>


    <script>
        $(document).on("input", ".rupiah", function() {
            var inputValue = $(this).val();
            var formattedValue = formatRupiah(inputValue);
            $(this).val("Rp " + formattedValue);
        });

        function formatRupiahFieldByClass() {
            $(".rupiah").each(function() {
                var inputValue = $(this).val();
                var formattedValue = formatRupiah(inputValue);
                $(this).val("Rp " + formattedValue);
            });
        }

        // rupiah
        function formatRupiah(angka) {
            var number_string = angka.replace(/[^,\d]/g, "").toString(),
                split = number_string.split(","),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }

            // Tambahkan koma dan angka desimal jika ada
            rupiah = split[1] !== undefined ? rupiah + "," + split[1] : rupiah;

            return rupiah;
        }

        // Fungsi untuk menghapus format rupiah sebelum submit
        function unformatRupiah(rupiah) {
            return rupiah.replace(/[^\d]/g, ""); // Menghapus semua karakter selain digit
        }
    </script>




    <script>
        function kode_instansi(kodeInstansiValue) {

            $('.kode_instansi').val(kodeInstansiValue);
            $('.kode_instansi').trigger('change');
        }


        function nama_instansi() {

            $(document).ready(function() {

                $('.kode_instansi').val()

                var teksOption = $(".kode_instansi option:selected").text();
                // Menggunakan split() untuk memisahkan teks berdasarkan spasi
                var splitTeks = teksOption.split('-');

                // Menyimpan nilai kedua (indeks 1) ke dalam variabel
                var hasil = splitTeks[1];
                $('.nama_instansi').val(hasil)


            });

        }
    </script>


    <script>
        function formatdate(date) {
            // Buat objek moment dengan tanggal yang diberikan
            var date = moment(date);
            return date.format("YYYY-MM-DD");
        }

        function formatdate2(date) {
            var date = moment(date);
            return date.format("YYYY-MM-DD");
        }
    </script>



    <!-- fungsi untuk mengatur sorot tab ketika belum di isi bagian required wawancara -->
    <script>
        $(document).ready(function() {
            $('.btn-approve').click(function() {
                $('input:invalid,select:invalid').each(function() {
                    var $closest = $(this).closest('.tab-pane');
                    var id = $closest.attr('id');
                    $('.nav a[href="#' + id + '"]').tab('show');
                    return false;
                })
            })
        });
    </script>



    <script>
        $(document).ready(function() {

            $('.btn-approve').click(function(e) {

                e.preventDefault();

                var no_permohonan_kredit = '';

                // Hapus semua pesan kesalahan dan kelas yang tidak valid
                $(".is-invalid").removeClass("is-invalid");
                $(".error-message").text('');
                $(".shake").removeClass("shake");

                // Cek setiap input field
                var isValid = true;
                $(".btn-approve").closest("form").find("select[required], textarea[required], input[required]").each(function() {
                    if ($(this).is("select")) {
                        // Jika elemen adalah <select>
                        if ($(this).val() === "" || $(this).val() === null) {
                            // Jika tidak ada opsi yang dipilih, tampilkan pesan kesalahan
                            $(this).addClass("is-invalid");
                            $(this).siblings(".error-message").text('Pilih salah satu opsi.');
                            $(this).addClass("shake");
                            isValid = false;
                        }
                    } else {
                        // Jika elemen adalah input atau textarea
                        if ($(this).val() === "") {
                            // Jika field kosong, tampilkan pesan kesalahan
                            $(this).addClass("is-invalid");
                            $(this).siblings(".error-message").text('Field ini wajib diisi.');
                            $(this).addClass("shake");
                            isValid = false;
                        }
                    }
                });

                // Tampilkan pesan OK jika valid
                if (isValid) {
                    var no_ktp_pemohon = $('.no_ktp_pemohon').val()
                    var formData = new FormData($(".form")[0]);


                    // jika ada field yang berisi Rp maka format ke bentuk angka
                    formData.forEach(function(value, key) {
                        if (value.includes("Rp")) {
                            var unformattedValue = unformatRupiah(value);
                            formData.set(key, unformattedValue);
                        }
                    });



                    Swal.fire({
                        title: 'Yakin data sudah benar?',
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#3EC59D',
                        cancelButtonColor: '#BB2D3B',
                        confirmButtonText: 'Ya',
                        cancelButtonText: "Batal",
                        showLoaderOnConfirm: true,
                        preConfirm: () => {
                            return new Promise((resolve) => {


                                setTimeout(() => {
                                    // simpan ke tbl_permohon_kredit los
                                    simpan_data(formData, function(data) {

                                        data = JSON.parse(data)

                                        console.log(data)

                                        if (data.message == 'success') {
                                            no_permohonan_kredit = data.no_permohonan_kredit

                                            var status = 'APPROVE'
                                            store_tbl_kredit_online(status)
                                            getfileberkas(no_ktp_pemohon, no_permohonan_kredit)
                                            saveimages(no_ktp_pemohon)
                                            destroydata(no_ktp_pemohon)

                                            resolve();
                                        } else {
                                            Swal.fire({
                                                text: 'Error : Gagal simpan data ke tbl permohon kredit',
                                                icon: 'warning',
                                                toast: true,
                                                timer: 5000,
                                                position: 'top-end',
                                                showConfirmButton: false
                                            })
                                            // Reject the promise in case of an error
                                            resolve();
                                        }
                                    })
                                }, 2000);

                            });
                        },
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                                'Berhasil!',
                                'Data berhasil disimpan.',
                                'success'
                            ).then(() => {
                                // Refresh the page
                                location.reload();
                            });
                        }
                    });






                }
            })
        })
    </script>


    <script>
        $(document).ready(function() {
            $('.btn-reject').click(function(e) {
                e.preventDefault();
                var no_permohonan_kredit = '';

                // Cek setiap input field
                var isValid = true;
                $(".btn-approve").closest("form").find("textarea[required] ").each(function() {
                    if ($(this).is("select")) {
                        // Jika elemen adalah <select>
                        if ($(this).val() === "" || $(this).val() === null) {
                            // Jika tidak ada opsi yang dipilih, tampilkan pesan kesalahan
                            $(this).addClass("is-invalid");
                            $(this).siblings(".error-message").text('Pilih salah satu opsi.');
                            $(this).addClass("shake");
                            isValid = false;
                        }
                    } else {
                        // Jika elemen adalah input atau textarea
                        if ($(this).val() === "") {
                            // Jika field kosong, tampilkan pesan kesalahan
                            $(this).addClass("is-invalid");
                            $(this).siblings(".error-message").text('Field ini wajib diisi.');
                            $(this).addClass("shake");
                            isValid = false;
                        }
                    }
                });

                if (isValid) {
                    var no_ktp_pemohon = $('.no_ktp_pemohon').val()
                    var status = "REJECT"

                    Swal.fire({
                        title: 'Apakah anda ingin me-reject permohonan ini?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3EC59D',
                        cancelButtonColor: '#BB2D3B',
                        confirmButtonText: 'Ya',
                        cancelButtonText: "Batal",
                        showLoaderOnConfirm: true,
                        preConfirm: () => {
                            return new Promise((resolve) => {
                                // Simulate an AJAX request or any asynchronous operation
                                setTimeout(() => {

                                    store_tbl_kredit_online(status)
                                    destroydata(no_ktp_pemohon)
                                    resolve();
                                }, 2000); // Replace this with your actual logic


                            });
                        },
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            ).then(() => {
                                // Refresh the page
                                location.reload();
                            });
                        }
                    });

                }



            })
        })
    </script>




    <!-- simpan data tbl_kredit_online -->

    <script>
        function store_tbl_kredit_online(status) {
            var dataForm = getdataform(status)



            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/tbl_kredit_online_controller/store' ?>',
                data: dataForm,
                success: function(data) {
                    console.log(data)
                },
                error: function(error) {
                    console.error("Error: " + status + " - " + error);
                }
            });
        }
    </script>

    <script>
        function getdataform(status) {

            // var formDataArray = $(".form").serializeArray();
            var formDataArray = new FormData($(".form")[0]);;

            // Mendapatkan nilai dari field no_ktp_pemohon
            var noKtpPemohon = formDataArray.get('no_ktp_pemohon');

            // Mendapatkan nilai dari field catatan_cs
            var catatanCs = formDataArray.get('catatan_cs');

            // Membuat objek untuk menyimpan nilai field
            var dataToSend = {
                no_ktp_pemohon: noKtpPemohon,
                catatan_cs: catatanCs,
                status: status
            };
            return dataToSend;
        }
    </script>


    <script>
        // mengambil data file berkas di db kredit online
        function getfileberkas(no_ktp_pemohon, no_permohonan_kredit) {
            $.ajax({
                url: "<?= BASEURL ?>/kreditonlineapi/fileberkas/" + no_ktp_pemohon,
                type: 'GET',
                dataType: 'json',
                success: function(data) {

                    if (data.message === 'success') {
                        // data.data.no_permohonan_kredit = no_permohonan_kredit

                        // stelah di dapatkan data dari tbl kredit online maka masukkan ke fungsi di bawah ini untuk di simpan ke db los file berkas
                        data.no_permohonan_kredit = no_permohonan_kredit;
                        storefileberkas(data)

                    }


                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Gagal, menangani kesalahan
                    console.error('Gagal mengambil data. Status:', textStatus);
                }
            });
        }



        function storefileberkas(data) {

            $.ajax({
                url: '<?= BASEURL ?>/tbl_wawancara_berkas_controller/store',
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify(data),
                success: function(response) {

                    console.log(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Gagal mengirim data. Status:', textStatus);
                }
            });
        }
    </script>


    <script>
        function saveimages(no_ktp_pemohon) {
            $.ajax({
                url: '<?= BASEURL ?>/kreditonlineapi/saveimages/' + no_ktp_pemohon,
                type: 'GET',
                dataType: 'json',
                success: function(response) {

                    console.log(response.message);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Gagal mengirim data. Status:', textStatus);
                }
            });
        }
    </script>


    <script>
        function destroydata(no_ktp_pemohon) {
            $.ajax({
                url: '<?= BASEURL ?>/kreditonlineapi/destroydata/' + no_ktp_pemohon,
                type: 'GET',
                dataType: 'json',
                success: function(response) {

                    console.log(response.message);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Gagal mengirim data. Status:', textStatus);
                }
            });
        }
    </script>











</body>

</html>