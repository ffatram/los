<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry</title>

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


    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


</head>



<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">



        <!-- Navbar -->
        <?php $this->view('komite/navbar') ?>
        <!-- Navbar -->

        <!-- Side Bar -->
        <?php $this->view('komite/side_bar') ?>
        <!-- Side Bar -->



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- container fluid -->
                <div class="container-fluid">

                    <main class="content">
                        <div class="container-fluid p-0">


                            <form action="<?= BASEURL; ?>/komite/cari_data_credit_all_2" method="POST">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h1 class="h4"><strong>Cari Data Pemohon/Instansi</strong></h1>
                                            </div>
                                            <div class="card-body">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="data_cari" placeholder="Cari data " aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button class=" btn btn-info btn-sm input-group-text" id="basic-addon2" name="btn_cari">Cari</button>
                                                        <!-- <span class="input-group-text" id="basic-addon2" type="submit" name="btn_cari">Cari</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h1 class="h4"><strong>Filter Tampilan </strong></h1>
                                            </div>
                                            <div class="card-body">
                                                <div class="btn-group d-flex justify-content-center" role="group" aria-label="First group">
                                                    <button class="btn btn-info btn_hari_ini" name="btn_hari_ini">Hari ini</button>
                                                    <button class="btn btn-info btn_bulan_ini" name="btn_bulan_ini">Bulan ini</button>
                                                    <button class="btn btn-info btn_tahun_ini" name="btn_tahun_ini">Tahun ini</button>
                                                    <button class="btn btn-info btn_semuanya" name="btn_semuanya">Semuanya</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>



                            <div class="row">

                                <div class="col-6">

                                    <div class="mb-3">
                                        <!-- <a href="<?= BASEURL; ?>/cs/hasil_cari_ktp" class="btn btn-success btn-lg">Tambah Data</a> -->
                                        <a href="" class="btn btn-success btn-lg">Refresh</a>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="d-flex justify-content-center">

                                        <div style="font-size: 20px;" class="font-weight-bold">
                                            Total Record : <span class='jumlah_record'><?= isset($data['jumlah_record']) ? $data['jumlah_record']  : '' ?></span>
                                        </div>


                                    </div>



                                </div>

                            </div>

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
                                                        No. Reg
                                                    </th>
                                                    <th>
                                                        Nama Pemohon
                                                    </th>
                                                    <th>
                                                        Instansi
                                                    </th>
                                                    <th>
                                                        Plafond
                                                    </th>

                                                    <th>
                                                        JW (Bln)
                                                    </th>
                                                    <th>
                                                        Jenis Permohonan
                                                    </th>
                                                    <th>
                                                        <?= level_3 ?>
                                                    </th>
                                                    <th>
                                                        <?= level_6 ?>
                                                    </th>
                                                    <th>
                                                        Tgl. Masuk
                                                    </th>
                                                    <th>
                                                        Tgl. SLIK
                                                    </th>
                                                    <th>
                                                        Tgl. Wawancara
                                                    </th>
                                                    <th>
                                                        Tgl. Komite
                                                    </th>
                                                    <th>
                                                        Tgl. Batal
                                                    </th>
                                                    <th>
                                                        Tgl. Tolak
                                                    </th>
                                                    <th>
                                                        Tgl. Pencairan
                                                    </th>
                                                    <th>
                                                        Lokasi Berkas
                                                    </th>
                                                    <th>
                                                        Aksi
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="">

                                                <?php
                                                if (isset($data['data_kredit'])) {
                                                    $a = 1;
                                                    foreach ($data['data_kredit'] as $row) :


                                                ?>
                                                        <tr>

                                                            <td><?= $a++ ?></td>
                                                            <td><?= $row['no_permohonan_kredit'] ?></td>
                                                            <td><?= $row['nama_pemohon'] ?></td>
                                                            <td><?= $row['nama_instansi'] ?></td>

                                                            <td><?= number_format($row['plafond_dimohon'], 0, ",", "."); ?></td>
                                                            <td><?= $row['jangka_waktu'] ?></td>
                                                            <td><?= $row['jenis_permohonan'] ?></td>
                                                            <td><?= $row['id_analis'] ?></td>
                                                            <td><?= $row['id_marketing'] ?></td>

                                                            <td><?= isset($row['tanggal_permohonan']) ?  date('d-m-Y', strtotime($row['tanggal_permohonan'])) : ''  ?></td>

                                                            <td><?= isset($row['tanggal_slik']) ? date('d-m-Y', strtotime($row['tanggal_slik'])) : ''   ?></td>
                                                            <td><?= isset($row['tanggal_wawancara']) ? date('d-m-Y', strtotime($row['tanggal_wawancara']))  : ''  ?></td>
                                                            <td><?= isset($row['tanggal_komite']) ?  date('d-m-Y', strtotime($row['tanggal_komite'])) : ''   ?></td>
                                                            <td><?= isset($row['tanggal_batal']) ?  date('d-m-Y', strtotime($row['tanggal_batal'])) : ''   ?></td>
                                                            <td><?= isset($row['tanggal_tolak']) ? date('d-m-Y', strtotime($row['tanggal_tolak']))  : ''  ?></td>
                                                            <td><?= isset($row['tanggal_pencairan']) ?  date('d-m-Y', strtotime($row['tanggal_pencairan'])) : '' ?></td>





                                                            <td><?= $row['lokasi_berkas'] ?></td>

                                                            <td>
                                                                <!-- <button data-toggle="modal" data-target="#detail" class="btn btn-m" style="background-color: <?= w_orange ?>; color:white; " data-id="<?= $row['id'] ?>" data-no_permohonan_kredit="<?= $row['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $row['nama_pemohon'] ?>" data-nama_instansi="<?= $row['nama_instansi'] ?>" data-tempat_lahir_pemohon="<?= $row['tempat_lahir_pemohon'] ?>">Detail</button> -->
                                                                <button id="btn_modal_detail" class="btn btn-m" style="background-color: <?= w_orange ?>; color:white;" data-toggle="modal" data-target="#modal_detail" data-no_permohonan_kredit="<?= $row['no_permohonan_kredit'] ?>">Detail</button>
                                                                <button id="btn_modal_log" class="btn btn-m" style="background-color: <?= w_ungu ?>; color:white; " data-toggle="modal" data-target="#modal_log" data-no_permohonan_kredit="<?= $row['no_permohonan_kredit'] ?>">Log</button>
                                                                <button class='btn btn-success btn_riwayat' data-no_ktp_pemohon='<?= $row['no_ktp_pemohon'] ?>' data-toggle="modal" data-target="#riwayat" data-backdrop="static" data-keyboard="false">Riwayat </button>

                                                                <?php
                                                                if ($_COOKIE['level'] == 'CS') {
                                                                ?>
                                                                    <button class='btn btn-success btn_riwayat' data-no_ktp_pemohon='<?= $row['no_ktp_pemohon'] ?>' data-toggle="modal" data-target="#riwayat" data-backdrop="static" data-keyboard="false">Riwayat </button>
                                                                    <!-- <a href="<?= BASEURL; ?>/cs/edit_permohonan_kredit/<?= $row['no_permohonan_kredit'] ?>" class="btn btn-primary btn-m">Edit</a>
                                                                    <a onclick="delete_data_kredit(event); return false" href="<?= BASEURL; ?>/cs/delete/<?= $row['no_permohonan_kredit'] ?>" class="btn btn-danger btn-m ">Hapus</a> -->


                                                                <?php
                                                                }
                                                                ?>

                                                            </td>

                                                        </tr>
                                                <?php endforeach;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </main>




                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->



            <!-- Detail-->
            <!-- Modal -->
            <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h1 class="h4 "><strong>Detail Pemohon</strong></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal_detail">



                        </div>
                    </div>
                </div>
            </div>





            <!-- modal btn_riwayat -->
            <div class="modal fade" id="riwayat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h1 class="h4 "><strong>Detail Riwayat</strong></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal_riwayat">



                        </div>
                    </div>
                </div>
            </div>





            <!-- bagian modal ketika tekan tombol  proses komite -->
            <div class="modal fade modal_1" id="modal_riwayat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="h4"><strong>Detail Komite</strong></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body data_modal1">
                        </div>
                    </div>
                </div>
            </div>








            <div class="modal fade" id="edit_cs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="h4"><strong>Detail</strong></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <main class="content">
                                <div class="container-fluid p-0">
                                    <div class="card">
                                        <div class="card-header">
                                            <h1 class="h3 3"><strong>Detail Permohonan Kredit</strong> </h1>
                                            <!-- <h1 class="h3 d-inline align-middle"><?= $data['judul'] ?></h1> -->
                                        </div>
                                    </div>


                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-xxl-6 ">
                                            <div class="card flex-fill">
                                                <div class="card-header">
                                                    <h1 class="h4 mb-0"><strong>Data Pemohon</strong></h1>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="mt-2 mb-2">Nama</label>
                                                        <input type="text" class="form-control" name="nama_pemohon" id="nama_pemohon" required="true" />
                                                        <label class="mt-2 mb-2">Tempat Lahir</label>
                                                        <input type="text" class="form-control" name="tempat_lahir_pemohon" id="tempat_lahir_pemohon" />
                                                        <label class="mt-2 mb-2">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" name="tgl_lahir_pemohon" id="tgl_lahir_pemohon" />
                                                        <label class="mt-2 mb-2">Jenis Kelamin</label>
                                                        <select name="jenis_kelamin_pemohon" id="jenis_kelamin_pemohon" class="form-select">
                                                            <option value="jenis_kelamin_pemohon" disabled selected>- Silahkan Pilih -</option>
                                                            <option>Pria</option>
                                                            <option>Wanita</option>
                                                        </select>

                                                        <label class="mt-2 mb-2">Nama Ibu Kandung</label>
                                                        <input type="text" class="form-control" name="nama_ibu_kandung_pemohon" id="nama_ibu_kandung_pemohon" />
                                                        <label class="mt-2 mb-2">No. KTP</label>
                                                        <input type="text" class="form-control" name="no_ktp_pemohon" id="no_ktp_pemohon" />
                                                        <label class="mt-2 mb-2">NPWP</label>
                                                        <input type="text" class="form-control" name="npwp_pemohon" id="npwp_pemohon" />
                                                        <label class="mt-2 mb-2">Alamat (Sesuai KTP)</label>
                                                        <input type="text" class="form-control" name="alamat_ktp_pemohon" id="alamat_ktp_pemohon" />
                                                        <label class="mt-2 mb-2">Alamat Sekarang</label>
                                                        <input type="text" class="form-control" name="alamat_sekarang_pemohon" id="alamat_sekarang_pemohon" />
                                                        <label class="mt-2 mb-2">Telepon</label>
                                                        <input type="text" class="form-control" name="telepon_pemohon" id="telepon_pemohon" />
                                                        <label class="mt-2 mb-2">Media Sosial</label>
                                                        <input type="text" class="form-control" name="media_sosial" id="media_sosial" />

                                                        <label class="mt-2 mb-2">Status Kepemilikan Rumah</label>
                                                        <select name="status_kepemilikan_rumah_pemohon" id="status_kepemilikan_rumah_pemohon" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>Pribadi</option>
                                                            <option>Keluarga</option>
                                                            <option>Dinas</option>
                                                            <option>Sewa</option>
                                                            <option>Kost</option>
                                                            <option>Lainnya</option>
                                                        </select>

                                                        <label class="mt-2 mb-2">Pendidikan Terakhir</label>
                                                        <select name="pendidikan_terakhir_pemohon" id="pendidikan_terakhir_pemohon" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>SD</option>
                                                            <option>SMP</option>
                                                            <option>SMA</option>
                                                            <option>D3</option>
                                                            <option>S1</option>
                                                            <option>S2</option>
                                                            <option>S3</option>
                                                        </select>

                                                        <label class="mt-2 mb-2">Gelar</label>
                                                        <input type="text" class="form-control" name="gelar_pemohon" id="gelar_pemohon" />


                                                        <label class="mt-2 mb-2">Status Perkawinan</label>
                                                        <select name="status_perkawinan" id="status_perkawinan" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>

                                                        <label class="mt-2 mb-2">Jumlah Tanggungan (Orang)</label>
                                                        <input type="text" class="form-control" name="jumlah_tanggungan" id="jumlah_tanggungan" />
                                                        <br>
                                                        <label class="mt-2 mb-2">Keluarga tidak serumah yang dapat dihubungi atau teman :</label>
                                                        <br>
                                                        <label class="mt-2 mb-2">Nama</label>
                                                        <input type="text" class="form-control" name="nama_keluarga_dapat_dihubungi" />
                                                        <label class="mt-2 mb-2">Alamat</label>
                                                        <input type="text" class="form-control" name="alamat_keluarga_dapat_dihubungi" />
                                                        <label class="mt-2 mb-2">Hubungan</label>
                                                        <input type="text" class="form-control" name="hubungan_keluarga_dapat_dihubungi" />
                                                        <label class="mt-2 mb-2">Telepon/Hp Yang Dapat Dihubungi</label>
                                                        <input type="text" class="form-control" name="telepon_keluarga_dapat_dihubungi" />

                                                    </div>
                                                    <!-- <div class="mt-3">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <button type="reset" class="btn btn-secondary me-2">Batal</button>
                        </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-xxl-6 ">
                                            <div class="card flex-fill">
                                                <div class="card-header">
                                                    <h1 class="h4 mb-0"><strong>Data Pekerjaan</strong></h1>

                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="mt-2 mb-2">Jenis Pekerjaan</label>
                                                        <select name="jenis_pekerjaan" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>PNS/TNI/POLRI</option>
                                                            <option>Pegawai Swasta</option>
                                                            <option>Wiraswasta</option>
                                                            <option>Pensiunan</option>
                                                            <option>Lainnya</option>

                                                        </select>
                                                        <label class="mt-2 mb-2">Nama Instansi</label>
                                                        <input type="text" class="form-control" name="nama_instansi" />

                                                        <label class="mt-2 mb-2">Alamat</label>
                                                        <input type="text" class="form-control" name="alamat_instansi" />
                                                        <label class="mt-2 mb-2">Telepon</label>
                                                        <input type="text" class="form-control" name="telepon_instansi" />
                                                        <label class="mt-2 mb-2">Tahun Mulai Bekerja</label>
                                                        <input type="text" class="form-control" name="tahun_mulai_bekerja" />
                                                        <label class="mt-2 mb-2">Jabatan Saat Ini</label>
                                                        <input type="text" class="form-control" name="jabatan_saat_ini" />
                                                        <label class="mt-2 mb-2">Atasan Langsung</label>
                                                        <input type="text" class="form-control" name="atasan_langsung" />
                                                        <label class="mt-2 mb-2">Telp/Hp Bendahara</label>
                                                        <input type="text" class="form-control" name="telepon_bendahara" />
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-xxl-6 ">
                                            <div class="card flex-fill">
                                                <div class="card-header">
                                                    <h1 class="h4 mb-0"><strong>Data Pasangan</strong></h1>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="mt-2 mb-2">Nama </label>
                                                        <input type="text" class="form-control" name="nama_pasangan" />
                                                        <label class="mt-2 mb-2">Tempat Lahir </label>
                                                        <input type="text" class="form-control" name="tempat_lahir_pasangan" />
                                                        <label class="mt-2 mb-2">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" name="tgl_lahir_pasangan" />
                                                        <label class="mt-2 mb-2">No KTP </label>
                                                        <input type="text" class="form-control" name="no_ktp_pasangan" />
                                                        <label class="mt-2 mb-2">Alamat KTP</label>
                                                        <input type="text" class="form-control" name="alamat_ktp_pasangan" />
                                                        <label class="mt-2 mb-2">Alamat Sekarang</label>
                                                        <input type="text" class="form-control" name="alamat_sekarang_pasangan" />
                                                        <label class="mt-2 mb-2">Telepon / Hp</label>
                                                        <input type="text" class="form-control" name="telepon_pasangan" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-xxl-6 ">
                                            <div class="card flex-fill">
                                                <div class="card-header">
                                                    <h1 class="h4 mb-0"><strong>Data Pekerjaan Pasangan</strong></h1>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="mt-2 mb-2">Jenis Pekerjaan</label>
                                                        <select name="jenis_pekerjaan_pasangan" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>PNS/TNI/POLRI</option>
                                                            <option>Pegawai Swasta</option>
                                                            <option>Wiraswasta</option>
                                                            <option>Pensiunan</option>
                                                            <option>Lainnya</option>
                                                        </select>
                                                        <label class="mt-2 mb-2">Nama Instansi</label>
                                                        <input type="text" class="form-control" name="nama_instansi_pasangan" />
                                                        <label class="mt-2 mb-2">Tahun Mulai Bekerja</label>
                                                        <input type="text" class="form-control" name="tahun_mulai_bekerja_pasangan" />
                                                        <label class="mt-2 mb-2">Jabatan Saat Ini</label>
                                                        <input type="text" class="form-control" name="jabatan_saat_ini_pasangan" />
                                                        <label class="mt-2 mb-2">Alamat Kantor</label>
                                                        <input type="text" class="form-control" name="alamat_kantor_pasangan" />
                                                        <label class="mt-2 mb-2">Telepon Kantor</label>
                                                        <input type="text" class="form-control" name="telepon_kantor_pasangan" />
                                                        <br>
                                                        <br>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h1 class="h4 mb-0"><strong>Data Kredit</strong></h1>

                                                </div>
                                                <div class="card-body">
                                                    <!-- 1, bagian ini akan muncul di akhir pas klik simpan  -->
                                                    <!-- <label class="mt-2 mb-2">No Permohonan Kredit</label>
                            <input type="text" class="form-control" name="username"  /> -->

                                                    <label class="mt-2 mb-2">Tanggal Permohonan </label>
                                                    <input type="date" value="<?php echo date('Y-m-d'); ?>" id="" class="form-control" name="tanggal_permohonan" />

                                                    <label class="mt-2 mb-2">Perjanjian Kerjasama</label>
                                                    <select name="perjanjian_kerjasama" class="form-select">
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option>Ada</option>
                                                        <option>Belum Ada</option>
                                                    </select>
                                                    <label class="mt-2 mb-2">Jenis Permohonan</label>
                                                    <select name="jenis_permohonan" class="form-select">
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option>Baru</option>
                                                        <option>Penambahan</option>
                                                    </select>
                                                    <label class="mt-2 mb-2">Jumlah Kredit Yang Dimohon (Rp) </label>
                                                    <input type="text" id="1" class="form-control input" name="plafond_dimohon" />
                                                    <label class="mt-2 mb-2">Jangka Waktu (Bulan) </label>
                                                    <input type="number" onkeypress="return isNumberKey(event)" class="form-control" name="jangka_waktu" />

                                                    <label class="mt-2 mb-2">Tujuan Penggunaan Kredit </label>
                                                    <select name="tujuan_penggunaan_kredit" class="form-select">
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <!-- <option>Lainnya</option> -->
                                                    </select>
                                                    <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                    <select name="jenis_jaminan" class="form-select">
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option>Tanah & Bangunan</option>
                                                        <option>Kendaraan Bermotor</option>
                                                        <option>Simpanan</option>
                                                        <option>Lainnya</option>
                                                    </select>

                                                    <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                    <input type="text" id="2" class="form-control input" name="nilai_jaminan" />
                                                    <label class="mt-2 mb-2">Nama Marketing</label>
                                                    <select name="id_marketing" class="form-select">
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>

                                                    <label class="mt-2 mb-2">Nama RO</label>
                                                    <select name="id_analis" class="form-select">
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row ">
                                        <div class="col-12 col-lg-6 col-xxl-6 ">
                                            <div class="card flex-fill">
                                                <div class="card-header">
                                                    <h1 class="h4 mb-0"><strong>Penghasilan Perbulan</strong></h1>

                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="mt-2 mb-2">Penghasilan Pemohon (Rp)</label>
                                                        <input type="text" class="form-control input" id="3" name="penghasilan_pemohon" />
                                                        <label class="mt-2 mb-2">Penghasilan Pasangan (Rp)</label>
                                                        <input type="text" class="form-control input" id="4" class="form-control" name="penghasilan_pasangan" />
                                                        <label class="mt-2 mb-2">Penghasilan Tambahan (Rp)</label>
                                                        <input type="text" class="form-control input" id="5" class="form-control" name="penghasilan_tambahan" />
                                                        <label class="mt-2 mb-2">Penghasilan Tambahan Lainnya (Rp)</label>
                                                        <input type="text" class="form-control input" id="6" class="form-control" name="penghasilan_tambahan_lainnya" />
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-xxl-6 ">
                                            <div class="card flex-fill">
                                                <div class="card-header">
                                                    <h1 class="h4 mb-0"><strong>Pengeluaran Perbulan</strong></h1>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="mt-2 mb-2">Biaya Hidup (Rp)</label>
                                                        <input type="text" class="form-control input" id="7" class="form-control" name="biaya_hidup_perbulan" />
                                                        <label class="mt-2 mb-2">Biaya Pendidikan (Rp)</label>
                                                        <input type="text" class="form-control input" id="8" class="form-control" name="biaya_pendidikan" />
                                                        <label class="mt-2 mb-2">Biaya PAM/Listrik/Tlp/Hp (Rp)</label>
                                                        <input type="text" class="form-control input" id="9" class="form-control" name="biaya_pam_listrik_telepon" />
                                                        <label class="mt-2 mb-2">Biaya Transport (Rp)</label>
                                                        <input type="text" class="form-control input" id="9" class="form-control" name="biaya_transport" />
                                                        <label class="mt-2 mb-2">Angsuran Bank Lain (Rp)</label>
                                                        <input type="text" class="form-control input" id="10" class="form-control" name="angsuran_bank_lain" />
                                                        <label class="mt-2 mb-2">Angsuran Perumahan (Rp)</label>
                                                        <input type="text" class="form-control input" id="11" class="form-control" name="angsuran_perumahan" />
                                                        <label class="mt-2 mb-2">Angsuran Kendaraan (Rp)</label>
                                                        <input type="text" class="form-control input" id="12" class="form-control" name="angsuran_kendaraan" />
                                                        <label class="mt-2 mb-2">Angsuran Barang Elektronik (Rp)</label>
                                                        <input type="text" class="form-control input" id="13" class="form-control" name="angsuran_barang_elektronik" />
                                                        <label class="mt-2 mb-2">Angsuran Koperasi (Rp)</label>
                                                        <input type="text" class="form-control input" id="14" class="form-control" name="angsuran_koperasi" />
                                                        <label class="mt-2 mb-2">Biaya Lainnya (Rp)</label>
                                                        <input type="text" class="form-control input" id="15" class="form-control" name="biaya_lainnya" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h1 class="h4 mb-0"><strong>Data Aset yang Dimiliki</strong></h1>

                                                </div>
                                                <div class="card-body">
                                                    <label class="mt-2 mb-2">Aset Yang Dimiliki</label>
                                                    <select name="aset_yang_dimiliki" class="form-select">
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option>Rumah</option>
                                                        <option>Tanah</option>
                                                        <option>Lainnya</option>
                                                    </select>
                                                    <label class="mt-2 mb-2">Alamat Aset</label>
                                                    <input type="text" class="form-control" name="alamat_aset" />

                                                    <label class="mt-2 mb-2">Jenis Sertifikat</label>
                                                    <select name="jenis_sertifikat" class="form-select">
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option>HGB</option>
                                                        <option>Hak Milik</option>
                                                        <option>Lainnya</option>
                                                    </select>
                                                    <label class="mt-2 mb-2">Jumlah Kendaraan</label>
                                                    <input type="text" class="form-control" name="jumlah_kendaraan" />
                                                    <label class="mt-2 mb-2">Merk Kendaraan</label>
                                                    <input type="text" class="form-control" name="merek_kendaraan" />
                                                    <label class="mt-2 mb-2">Tahun Kendaraan</label>
                                                    <input type="text" class="form-control" name="tahun_kendaraan" />
                                                    <label class="mt-2 mb-2">Atas Nama Kendaraan</label>
                                                    <input type="text" class="form-control" name="atas_nama_kendaraan" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>








                                </div>
                                <button id="btn_cs_simpan_data_kredit" type="submit" class="btn btn-primary me-2">Simpan</button>
                                <button type="reset" class="btn btn-secondary me-2">Batal</button>
                            </main>
                        </div>
                        <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
                    </div>
                </div>
            </div>




            <!-- modal log -->
            <div class="modal fade" id="modal_log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="h4"><strong>Daftar LOG</strong></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="data_modal_log">

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





        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
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
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
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



    <script>
        $("#example1").DataTable({

        })
    </script>






    <script>
        var btn_riwayat = $('.btn_riwayat')
        btn_riwayat.on('click', function() {
            var id = $(this).data('no_ktp_pemohon')

            // $("#riwayat").modal('show')
            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/cs/modal_riwayat' ?>',
                data: {
                    'id': id
                },
                success: function(res) {
                    console.log(res)
                    $('.modal_riwayat').html(res)
                    $("#riwayat").modal('show')
                },
                error: function(e) {
                    console.log(e)
                }
            })
        })
    </script>


    <script>
        $(document).ready(function() {
            $('#detail_all').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('id')
                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/modal/modal_detail_all' ?>',
                    data: 'no_permohonan_kredit=' + id,
                    success: function(data) {
                        $('.data_modal').html(data)
                        $('.tabel_slik_pemohon').DataTable({
                            // "processing": true,
                            // "paging": true,
                        });

                        $('.tabel_slik_pasangan').DataTable({
                            // "processing": true,
                            // "paging": true,
                        });

                        // $('#modal_proses_komite').modal();
                    }
                })
            })
        })
    </script>



    <script>
        $(document).ready(function() {
            $('#modal_riwayat').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('id')
                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/komite/modal_proses_komite_2' ?>',
                    data: 'no_permohonan_kredit=' + id,
                    success: function(data) {
                        $('.data_modal1').html(data)
                        $('.tabel_slik_pemohon').DataTable({
                            // "processing": true,
                            // "paging": true,
                        });

                        $('.tabel_slik_pasangan').DataTable({
                            // "processing": true,
                            // "paging": true,
                        });

                        // $('#modal_proses_komite').modal();
                    }
                })
            })
        })
    </script>


    <!-- Detail Cs -->
    <script>
        $(document).on('click', '#btn_modal_detail', function(event) {
            var no_permohonan_kredit = $(this).data('no_permohonan_kredit')

            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/cs/modal_detail' ?>',
                data: {
                    'no_permohonan_kredit': no_permohonan_kredit
                },
                success: function(res) {
                    $('.modal_detail').html(res)
                    $("#modal_detail").modal('show')

                }
            })
        })
    </script>


    <!-- Btn modal log -->
    <script>
        $(document).on('click', '#btn_modal_log', function(event) {
            var no_permohonan_kredit = $(this).data('no_permohonan_kredit')

            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/cs/modal_log_cs' ?>',
                data: {
                    // username_komite: "<?= $_COOKIE['username'] ?>",
                    'no_permohonan_kredit': no_permohonan_kredit
                },
                success: function(res) {
                    $('#data_modal_log').html(res)
                    $("#modal_log").modal('show')

                }
            })
        })
    </script>




</body>

</html>