<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>

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

    <!--  -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

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
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $data['judul'] ?></h1>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- container fluid -->
                <div class="container-fluid">

                    <form id="myForm" class="form myForm">

                        <main class="content">

                            <div class="container-fluid p-0">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="d-flex">
                                                    <div class="p-0">
                                                        <table class="table-hover" cellpadding=5 cellspacing=15>
                                                            <tr>
                                                                <td class="p-2">No. Permohonan Kredit</td>
                                                                <td>:</td>
                                                                <td><?= $data['data_cs']['no_permohonan_kredit'] ?></td>
                                                                <input type="hidden" name="no_permohonan_kredit" value="<?= $data['data_cs']['no_permohonan_kredit'] ?>">
                                                                <td> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tgl. Analisa</td>
                                                                <td>:</td>
                                                                <td><?= date("d-m-Y") ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="ml-auto p-1">
                                                        <div class="d-flex">
                                                            <div class="p-1"><button style="background-color: <?= w_orange ?>; color:white; " type="button" class="btn btn-sm" id="btn_modal_detail" data-toggle="modal" data-target="#modal_detail" data-no_permohonan_kredit="<?= $data['data_cs']['no_permohonan_kredit'] ?>">Detail Permohonan</button></div>
                                                            <div class="p-1"><button style="background-color: <?= w_orange ?>; color:white; " type="button" class="btn btn-sm  detail_slik" data-toggle="modal" data-target="#detail_slik" data-no_permohonan_kredit="<?= $data['data_cs']['no_permohonan_kredit']  ?>">Detail SLIK</button></div>
                                                        </div>
                                                    </div>

                                                </div>




                                                <div class="row">
                                                    <div class="col-4">
                                                        <table class="table-hover" cellpadding=5 cellspacing=15>

                                                            <tr>
                                                                <td>Nama Pemohon</td>
                                                                <td>:</td>
                                                                <input type="hidden" name='nama_pemohon' value="<?= $data['data_cs']['nama_pemohon'] ?>">
                                                                <td><?= $data['data_cs']['nama_pemohon'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat KTP</td>
                                                                <td>:</td>
                                                                <td><?= $data['data_cs']['alamat_ktp_pemohon'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat Sekarang</td>
                                                                <td>:</td>
                                                                <td><?= $data['data_cs']['alamat_sekarang_pemohon'] ?></td>
                                                            </tr>



                                                        </table>
                                                    </div>
                                                    <div class="col-4 ">
                                                        <table class="table-hover" cellpadding=5 cellspacing=15>
                                                            <tr>
                                                                <td>Tgl. Lahir</td>
                                                                <td>:</td>

                                                                <?php

                                                                $tanggal_lahir = new DateTime($data['data_cs']['tgl_lahir_pemohon']);
                                                                $sekarang = new DateTime("today");
                                                                if ($tanggal_lahir > $sekarang) {
                                                                    $thn = "0";
                                                                    $bln = "0";
                                                                    $tgl = "0";
                                                                }
                                                                $thn = $sekarang->diff($tanggal_lahir)->y;
                                                                $bln = $sekarang->diff($tanggal_lahir)->m;
                                                                $tgl = $sekarang->diff($tanggal_lahir)->d;
                                                                // echo $thn . " tahun " . $bln . " bulan " . $tgl . " hari";


                                                                ?>
                                                                <td><?= date('d-m-Y', strtotime($data['data_cs']['tgl_lahir_pemohon']))   . ' (' . $thn . ' Tahun)' ?></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Telepon</td>
                                                                <td>:</td>
                                                                <td><?= $data['data_cs']['telepon_pemohon'] ?></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Jenis Permohonan</td>
                                                                <td>:</td>
                                                                <td><?= $data['data_cs']['jenis_permohonan'] ?></td>
                                                            </tr>

                                                        </table>
                                                    </div>


                                                    <div class="col-4 ">
                                                        <table class="table-hover" cellpadding=5 cellspacing=15>
                                                            <tr>
                                                                <td>Instansi</td>
                                                                <td>:</td>
                                                                <td><?= $data['data_cs']['nama_instansi'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat Instansi</td>
                                                                <td>:</td>
                                                                <td><?= $data['data_cs']['alamat_instansi'] ?></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Telepon Instansi</td>
                                                                <td>:</td>
                                                                <td><?= $data['data_cs']['telepon_instansi'] ?></td>
                                                            </tr>

                                                        </table>
                                                    </div>




                                                </div>






                                                <ul class="nav nav-tabs mt-2 " id="myTab" role="tablist">

                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="tab-wawancara-1-tab" data-toggle="tab" href="#tab-wawancara-1">Analisa dan Usulan Analis </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="tab-daftar-jaminan-2-tab" data-toggle="tab" href="#tab-daftar-jaminan-2">Daftar Jaminan</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages">Analisa Kemampuan (Dalam Ribuan)</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="tab-sandi-sandi-4-tab" data-toggle="tab" href="#tab-sandi-sandi-4">Sandi-Sandi</a>
                                                    </li>

                                                </ul>

                                                <!-- Tab panes -->


                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-wawancara-1">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                                <div class="">
                                                                    <div class="">
                                                                        <div class="form-group">
                                                                            <div class="validate-error"></div>
                                                                            <label class="mt-2 mb-2">Karakter</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select id="karakter" name="karakter" class="form-control karakter">
                                                                                <option value="" selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['ref_pilihan_analisa'] as $i) : ?>
                                                                                    <option value="<?= $i['keterangan'] ?>" <?= $i['keterangan'] == $data['data_wawancara']['karakter'] ? 'selected="selected"' : ''; ?>><?= $i['keterangan'] ?></option>
                                                                                <?php endforeach; ?>

                                                                            </select>

                                                                            <label class="mt-2 mb-2">Pertimbangan Karakter</label><span class="ml-1" style="color:red;">*</span>
                                                                            <input type="text" name="pertimbangan_karakter" style="background-color: #F9F9C5;" class="form-control pertimbangan_karakter" value='<?= $data['data_wawancara']['pertimbangan_karakter'] ?>' />


                                                                            <label class="mt-2 mb-2">Kemampuan</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select name="kemampuan" class="form-control kemampuan">
                                                                                <option value="" selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['ref_pilihan_analisa'] as $i) : ?>
                                                                                    <option value="<?= $i['keterangan'] ?>" <?= $i['keterangan'] == $data['data_wawancara']['kemampuan'] ? 'selected="selected"' : ''; ?>><?= $i['keterangan'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>

                                                                            <label class="mt-2 mb-2">Pertimbangan Kemampuan</label><span class="ml-1" style="color:red;">*</span>
                                                                            <input type="text" name="pertimbangan_kemampuan" style="background-color: #F9F9C5;" class="form-control pertimbangan_kemampuan" value='<?= $data['data_wawancara']['pertimbangan_kemampuan'] ?>' />


                                                                            <label class="mt-2 mb-2">Kekayaan</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select name="kekayaan" class="form-control kekayaan">
                                                                                <option value="" selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['ref_pilihan_analisa'] as $i) : ?>
                                                                                    <option value="<?= $i['keterangan'] ?>" <?= $i['keterangan'] == $data['data_wawancara']['kekayaan'] ? 'selected="selected"' : ''; ?>><?= $i['keterangan'] ?></option>

                                                                                <?php endforeach; ?>
                                                                            </select>

                                                                            <label class="mt-2 mb-2">Pertimbangan Kekayaan</label><span class="ml-1" style="color:red;">*</span>
                                                                            <input type="text" name="pertimbangan_kekayaan" style="background-color: #F9F9C5;" class="form-control pertimbangan_kekayaan" value='<?= $data['data_wawancara']['pertimbangan_kekayaan'] ?>' />


                                                                            <label class="mt-2 mb-2">Jaminan</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select name="jaminan" class="form-control jaminan">
                                                                                <option value="" required selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['ref_pilihan_analisa'] as $i) : ?>
                                                                                    <option value="<?= $i['keterangan'] ?>" <?= $i['keterangan'] == $data['data_wawancara']['jaminan'] ? 'selected="selected"' : ''; ?>><?= $i['keterangan'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>

                                                                            <label class="mt-2 mb-2">Pertimbangan Jaminan</label><span class="ml-1" style="color:red;">*</span>
                                                                            <input type="text" name="pertimbangan_jaminan" style="background-color: #F9F9C5;" class="form-control pertimbangan_jaminan" value='<?= $data['data_wawancara']['pertimbangan_jaminan'] ?>' required />



                                                                            <label class="mt-2 mb-2">Kondisi</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select name="kondisi" class="form-control kondisi">
                                                                                <option value="" required selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['ref_pilihan_analisa'] as $i) : ?>
                                                                                    <option value="<?= $i['keterangan'] ?>" <?= $i['keterangan'] == $data['data_wawancara']['kondisi'] ? 'selected="selected"' : ''; ?>><?= $i['keterangan'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>

                                                                            <label class="mt-2 mb-2">Pertimbangan Kondisi</label><span class="ml-1" style="color:red;">*</span>
                                                                            <input type="text" name="pertimbangan_kondisi" style="background-color: #F9F9C5;" class="form-control pertimbangan_kondisi" value='<?= $data['data_wawancara']['pertimbangan_kondisi'] ?>' required />


                                                                            <label class="mt-2 mb-2">Kode Tujuan Penggunaan Kredit</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select name="kode_tujuan_penggunaan_kredit" class="form-control kode_tujuan_penggunaan_kredit" required>
                                                                                <option value="" required selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['kode_tujuan_penggunaan_kredit'] as $i) : ?>
                                                                                    <option value="<?= $i['kode'] ?>" <?= $i['kode'] == $data['data_wawancara']['kode_tujuan_penggunaan_kredit']    ? 'selected="selected"' : ''; ?>><?= $i['kode'] . ' - ' . $i['keterangan'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>


                                                                            <label class="mt-2 mb-2">Keterangan Tujuan Penggunaan Kredit</label><span class="ml-1" style="color:red;">*</span>
                                                                            <input type="text" name="tujuan_penggunaan_kredit" class="form-control tujuan_penggunaan_kredit" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_wawancara']['tujuan_penggunaan_kredit'] ?>" required />

                                                                            <label class="mt-2 mb-2">Jaminan Utama</label>
                                                                            <input type="text" name="jaminan_utama" class="form-control" oninput="this.value = this.value.toUpperCase()" value='<?= $data['data_wawancara']['jaminan_utama'] ?>' />

                                                                            <label class="mt-2 mb-2">Syarat Lainnya</label>
                                                                            <input type="text" name="syarat_lainnya" class="form-control" oninput="this.value = this.value.toUpperCase()" value='<?= $data['data_wawancara']['syarat_lainnya'] ?>' />

                                                                            <label class="mt-2 mb-2">Dasar Pertimbangan Analis</label>
                                                                            <textarea name="dasar_pertimbangan_analis" class="form-control h-25" rows="15"><?= $data['data_wawancara']['dasar_pertimbangan_analis'] ?></textarea>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-lg-6 col-xxl-6 ">

                                                                <label class="mt-2 mb-2">Plafond</label><span class="ml-1" style="color:red;">*</span>
                                                                <input type="text" id="plafond" name="plafond" class="form-control plafond" value="<?= $data['data_wawancara']['plafond'] ?>" onkeypress="return hanyaAngka(event)" />

                                                                <label class="mt-2 mb-2">JW (Bulan)</label><span class="ml-1" style="color:red;">*</span>
                                                                <input type="text" name="jangka_waktu" class="form-control jangka_waktu" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_wawancara']['jangka_waktu'] ?>" onkeypress="return hanyaAngka(event)" />

                                                                <label class="mt-2 mb-2">Suku Bunga (% P.a)</label><span class="ml-1" style="color:red;">*</span>
                                                                <input type="text" id="suku_bunga" name="suku_bunga" class="form-control suku_bunga" oninput="this.value = this.value.toUpperCase()" value='<?= $data['data_wawancara']['suku_bunga'] ?>' />

                                                                <label class="mt-2 mb-2">OS Sebelumnya</label>
                                                                <input type="text" id="os_sebelumnya" name="os_sebelumnya" class="form-control os_sebelumnya" onkeypress="return hanyaAngka(event)" value='<?= $data['data_wawancara']['os_sebelumnya'] ?>' />


                                                                <label class="mt-2 mb-2">Penambahan</label>
                                                                <input type="text" id="penambahan" name="penambahan" class="form-control penambahan" value='<?= $data['data_wawancara']['penambahan'] ?>' readonly />



                                                                <label class="mt-2 mb-2">Sistem Bunga</label><span class="ml-1" style="color:red;">*</span>
                                                                <select name="sistem_bunga" class="form-control sistem_bunga">
                                                                    <option value="" required selected>- Silahkan Pilih -</option>
                                                                    <?php foreach ($data['ref_sistem_bunga'] as $i) : ?>
                                                                        <option value="<?= $i['sistem_bunga'] ?>" <?= $i['sistem_bunga'] == $data['data_wawancara']['sistem_bunga'] ? 'selected="selected"' : ''; ?>><?= $i['sistem_bunga'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>




                                                                <label class="mt-2 mb-2">Angsuran Perbulan (Wajib Sesuai Tabel Angsr)</label><span class="ml-1" style="color:red;">*</span>
                                                                <input type="text" id="angsuran_perbulan" name="angsuran_perbulan" onkeypress="return hanyaAngka(event)" class="form-control angsuran_perbulan" oninput="this.value = this.value.toUpperCase()" value='<?= number_format(($data['data_wawancara']['angsuran_perbulan']), 0, ',', '.')  ?>' required />

                                                                <label class="mt-2 mb-2">Biaya Provisi</label>
                                                                <input type="text" id="biaya_provisi_nominal" name="biaya_provisi_nominal" class="form-control biaya_provisi_nominal" onkeypress="return hanyaAngka(event)" />
                                                                <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">
                                                                    <div class="col-xs-0">
                                                                        <input type="hidden" id="biaya_provisi_persen" name="biaya_provisi_persen" style="max-width: 100px;" class="form-control biaya_provisi_persen" oninput="this.value = this.value.toUpperCase()" value="<?= $data['hasil_ref_provisi_administrasi']['provisi'] ?>" readonly />
                                                                    </div>
                                                                </div>

                                                                <label class="mt-2 mb-2">Biaya Admin</label>
                                                                <input type="text" id="biaya_administrasi_nominal" name="biaya_administrasi_nominal" class="form-control biaya_administrasi_nominal" oninput="this.value = this.value.toUpperCase()" onkeypress="return hanyaAngka(event)" value="<?= number_format(($data['data_wawancara']['biaya_provisi_nominal']), 0, ',', '.') ?>" />
                                                                <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">
                                                                    <div class="col-xs-0">
                                                                        <input type="hidden" style="max-width: 100px;" id="biaya_administrasi_persen" name="biaya_administrasi_persen" class="form-control biaya_administrasi_persen" oninput="this.value = this.value.toUpperCase()" value="<?php echo $data['hasil_ref_provisi_administrasi']['administrasi']  ?>" readonly />
                                                                    </div>
                                                                </div>


                                                                <label class="mt-2 mb-2">Premi Asuransi</label>
                                                                <input type="text" name="premi_asuransi" class="form-control premi_asuransi" oninput="this.value = this.value.toUpperCase()" onkeypress="return hanyaAngka(event)" value="<?= number_format(($data['data_wawancara']['premi_asuransi']), 0, ',', '.') ?>" />

                                                                <label class="mt-2 mb-2">Tabungan</label>
                                                                <input type="text" name="tabungan" class="form-control input tabungan" oninput="this.value = this.value.toUpperCase()" onkeypress="return hanyaAngka(event)" value="<?= number_format(($data['data_wawancara']['tabungan']), 0, ',', '.') ?>" />

                                                                <label class="mt-2 mb-2">Biaya Notaris</label>
                                                                <input type="text" name="biaya_notaris" class="form-control biaya_notaris" oninput="this.value = this.value.toUpperCase()" onkeypress="return hanyaAngka(event)" value="<?= number_format(($data['data_wawancara']['biaya_notaris']), 0, ',', '.') ?>" />

                                                                <label class="mt-2 mb-2">Biaya Materai</label>
                                                                <input type="text" name="biaya_materai" class="form-control biaya_materai" oninput="this.value = this.value.toUpperCase()" onkeypress="return hanyaAngka(event)" value="<?= number_format(($data['data_wawancara']['biaya_materai']), 0, ',', '.') ?>" />

                                                                <label class="mt-2 mb-2">Biaya APHT</label>
                                                                <input type="text" name="biaya_apht" class="form-control biaya_apht" oninput="this.value = this.value.toUpperCase()" onkeypress="return hanyaAngka(event)" value="<?= number_format(($data['data_wawancara']['biaya_apht']), 0, ',', '.') ?>" />

                                                                <label class="mt-2 mb-2">Asuransi Kerugian</label>
                                                                <input type="text" name="asuransi_kerugian" class="form-control asuransi_kerugian" oninput="this.value = this.value.toUpperCase()" onkeypress="return hanyaAngka(event)" value="<?= number_format(($data['data_wawancara']['asuransi_kerugian']), 0, ',', '.') ?>" />



                                                                <label class="mt-2 mb-2">Sistem Pembayaran</label><span class="ml-1" style="color:red;">*</span>
                                                                <select name="sistem_pembayaran" class="form-control sistem_pembayaran">
                                                                    <option value="" required selected>- Silahkan Pilih -</option>
                                                                    <?php foreach ($data['ref_sistem_pembayaran'] as $i) : ?>
                                                                        <option value="<?= $i['sistem_pembayaran'] ?>" <?= $i['sistem_pembayaran'] == $data['data_wawancara']['sistem_pembayaran'] ? 'selected="selected"' : ''; ?>><?= $i['sistem_pembayaran'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>




                                                                <label class="mt-2 mb-2">Pejabat TTD SPPK</label><span class="ml-1" style="color:red;">*</span>
                                                                <select name="pejabat_ttd_sppk" class="form-control pejabat_ttd_sppk">
                                                                    <option value="" required selected>- Silahkan Pilih -</option>
                                                                    <?php foreach ($data['ref_pejabat'] as $i) : ?>
                                                                        <option value="<?= $i['nama_pejabat'] ?>" <?= $i['nama_pejabat'] == $data['data_wawancara']['pejabat_ttd_sppk'] ? 'selected="selected"' : ''; ?>><?= $i['nama_pejabat'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="tab-pane" id="tab-daftar-jaminan-2">

                                                        <div class="row">
                                                            <div class="col-12 col-lg-6">
                                                                <div class="form-group">

                                                                    <?php
                                                                    for ($a = 1; $a <= 10; $a++) {
                                                                    ?>

                                                                        <label class="mt-2 mb-2">Jaminan <?= $a ?></label>
                                                                        <input type="text" name="jaminan_<?= $a ?>" class="form-control" value="<?= $data['data_wawancara']['jaminan_' . $a] ?>" />

                                                                    <?php  } ?>

                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-lg-6">
                                                                <?php
                                                                for ($a = 11; $a <= 20; $a++) {
                                                                ?>

                                                                    <label class="mt-2 mb-2">Jaminan <?= $a ?></label>
                                                                    <input type="text" name="jaminan_<?= $a ?>" class="form-control" value="<?= $data['data_wawancara']['jaminan_' . $a] ?>" />

                                                                <?php  } ?>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="tab-pane" id="messages">

                                                        <div class="row">
                                                            <div class="col-12 col-lg-6">

                                                                <label class="mt-2">Penghasilan Pemohon Perbulan </label><span class="ml-1" style="color:red;">*</span>
                                                                <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                    <div class="col-xs-0">
                                                                        <input type="text" onkeypress="return hanyaAngka(event)" style="max-width: 100px;" id="penghasilan_pemohon_perbulan" name="penghasilan_pemohon_perbulan" class="form-control penghasilan_pemohon" oninput="this.value = this.value.toUpperCase()" value='<?= $data['data_wawancara']['penghasilan_pemohon_perbulan'] ?>' />

                                                                    </div>
                                                                    <input type="text" style="background-color: #F9F9C5;" id="penghasilan_pemohon_perbulan_ket" name="penghasilan_pemohon_perbulan_ket" class="form-control penghasilan_pemohon_perbulan_ket" value='<?= $data['data_wawancara']['penghasilan_pemohon_perbulan_ket'] ?>' required />
                                                                </div>


                                                                <?php
                                                                $batas_penghasilan_pemohon = 0;
                                                                for ($a = 1; $a <= 3; $a++) {
                                                                ?>

                                                                    <label class="mt-2">Penghasilan Tambahan Pemohon <?= $a ?> </label>
                                                                    <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                        <div class="col-xs-0">
                                                                            <input type="text" onkeypress="return hanyaAngka(event)" style="max-width: 100px;" id="penghasilan_tambahan_pemohon<?= $a ?>" name="penghasilan_pemohon_tambahan_<?= $a ?>" class="form-control penghasilan_pemohon_tambahan_<?= $a ?>" oninput="this.value = this.value.toUpperCase()" value='<?= $data['data_wawancara']['penghasilan_pemohon_tambahan_' . $a] ?>' required />
                                                                        </div>
                                                                        <input type="text" style="background-color: #F9F9C5;" id="penghasilan_tambahan_pemohon_ket<?= $a ?>" name="penghasilan_pemohon_tambahan_<?= $a ?>_ket" class="form-control" value='<?= $data['data_wawancara']['penghasilan_pemohon_tambahan_' . $a . '_ket'] ?>' />
                                                                    </div>

                                                                <?php


                                                                }

                                                                ?>

                                                            </div>

                                                            <div class="col-lg-6">

                                                                <label class="mt-2">Penghasilan Pasangan Perbulan </label>
                                                                <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                    <div class="col-xs-0">
                                                                        <input type="text" onkeypress="return hanyaAngka(event)" style="max-width: 100px;" id="penghasilan_pasangan_perbulan" name="penghasilan_pasangan_perbulan" class="form-control penghasilan_pasangan" oninput="this.value = this.value.toUpperCase()" value='<?= $data['data_wawancara']['penghasilan_pasangan_perbulan'] ?>' />
                                                                    </div>
                                                                    <input type="text" style="background-color: #F9F9C5;" name="penghasilan_pasangan_perbulan_ket" class="form-control" value='<?= $data['data_wawancara']['penghasilan_pasangan_perbulan_ket'] ?>' />
                                                                </div>

                                                                <?php
                                                                for ($a = 1; $a <= 3; $a++) {
                                                                ?>


                                                                    <label class="mt-2">Penghasilan Tambahan Pasangan <?= $a ?> </label>
                                                                    <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                        <div class="col-xs-0">
                                                                            <input type="text" onkeypress="return hanyaAngka(event)" style="max-width: 100px;" id="penghasilan_tambahan_pasangan<?= $a ?>" name="penghasilan_pasangan_tambahan_<?= $a ?>" class="form-control penghasilan_pasangan_tambahan_<?= $a ?>" value='<?= $data['data_wawancara']['penghasilan_pasangan_tambahan_' . $a] ?>' oninput="this.value = this.value.toUpperCase()" />
                                                                        </div>
                                                                        <input type="text" style="background-color: #F9F9C5;" name="penghasilan_pasangan_tambahan_<?= $a ?>_ket" class="form-control" value='<?= $data['data_wawancara']['penghasilan_pasangan_tambahan_' . $a . '_ket'] ?>' />
                                                                    </div>

                                                                <?php

                                                                }
                                                                ?>


                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-lg-6">

                                                                <label class="mt-5">Biaya Rumah Tangga Sebulan </label><span class="ml-1" style="color:red;">*</span>
                                                                <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                    <div class="col-xs-0">

                                                                        <input type="text" onkeypress="return hanyaAngka(event)" style="max-width: 100px;" id="biaya_rumah_tangga" name="biaya_hidup_sebulan" class="form-control biaya_hidup_sebulan" oninput="this.value = this.value.toUpperCase()" value='<?= $data['data_wawancara']['biaya_hidup_sebulan'] ?>' />
                                                                    </div>
                                                                    <input type="text" style="background-color: #F9F9C5;" name="biaya_hidup_sebulan_ket" class="form-control biaya_hidup_sebulan_ket" value='<?= $data['data_wawancara']['biaya_hidup_sebulan_ket'] ?>' />
                                                                </div>

                                                                <label class="mt-2">Biaya Pendidikan Sebulan</label>
                                                                <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                    <div class="col-xs-0">
                                                                        <input type="text" onkeypress="return hanyaAngka(event)" style="max-width: 100px;" id="biaya_pendidikan" name="biaya_pendidikan" class="form-control biaya_pendidikan" oninput="this.value = this.value.toUpperCase()" value='<?= $data['data_wawancara']['biaya_pendidikan'] ?>' />
                                                                    </div>
                                                                    <input type="text" style="background-color: #F9F9C5;" name="biaya_pendidikan_ket" class="form-control" value='<?= $data['data_wawancara']['biaya_pendidikan_ket'] ?>' />
                                                                </div>

                                                                <label class="mt-2">Biaya Listrik/Pam/Telepon Sebulan </label>
                                                                <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                    <div class="col-xs-0">
                                                                        <input type="text" onkeypress="return hanyaAngka(event)" style="max-width: 100px;" id="biaya_listrik" name="biaya_pam_listrik_telepon" class="form-control biaya_pam_listrik_telepon" oninput="this.value = this.value.toUpperCase()" value='<?= $data['data_wawancara']['biaya_pam_listrik_telepon'] ?>' />
                                                                    </div>
                                                                    <input type="text" style="background-color: #F9F9C5;" name="biaya_pam_listrik_telepon_ket" class="form-control" value='<?= $data['data_wawancara']['biaya_pam_listrik_telepon_ket'] ?>' />
                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6 mt-5">


                                                                <label class="mt-2">Biaya Transport Sebulan </label>
                                                                <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                    <div class="col-xs-0">
                                                                        <input type="text" onkeypress="return hanyaAngka(event)" style="max-width: 100px;" id="biaya_transport" name="biaya_transport" class="form-control biaya_transport" oninput="this.value = this.value.toUpperCase()" value='<?= $data['data_wawancara']['biaya_transport'] ?>' />
                                                                    </div>
                                                                    <input type="text" style="background-color: #F9F9C5;" name="biaya_transport_ket" class="form-control" value='<?= $data['data_wawancara']['biaya_transport_ket'] ?>' />
                                                                </div>

                                                                <label class="mt-2">Biaya Lain-lain Sebulan </label>
                                                                <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                    <div class="col-xs-0">
                                                                        <input type="text" onkeypress="return hanyaAngka(event)" style="max-width: 100px;" id="biaya_lain" name="biaya_lainnya" class="form-control biaya_lainnya" oninput="this.value = this.value.toUpperCase()" value='<?= $data['data_wawancara']['biaya_lainnya'] ?>' />
                                                                    </div>
                                                                    <input type="text" style="background-color: #F9F9C5;" name="biaya_lainnya_ket" class="form-control" value='<?= $data['data_wawancara']['biaya_lainnya_ket'] ?>' />
                                                                </div>


                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label class="mt-5">Angsuran di Hasamitra Sebelumnya</label>
                                                                <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                    <div class="col-xs-0">
                                                                        <input type="text" style="max-width: 100px;" id="angsuran_sebelumnya" name="angsuran_kredit_sebelumnya" class="form-control angsuran_kredit_sebelumnya" value='<?= $data['data_wawancara']['angsuran_kredit_sebelumnya'] ?>' oninput="this.value = this.value.toUpperCase()" onkeypress="return hanyaAngka(event)" />
                                                                    </div>
                                                                    <input type="text" style="background-color: #F9F9C5;" name="angsuran_kredit_sebelumnya_ket" class="form-control" value='<?= $data['data_wawancara']['angsuran_kredit_sebelumnya_ket'] ?>' />
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-lg-6">

                                                                <?php

                                                                $a = 0;
                                                                foreach ($data['daftar_slik_pemohon'] as $i) {
                                                                    $daftar_slik_pemohon[$a] = $i['nama_bank'] . ' (Sisa Bakidebet: ' . number_format(($i['bakidebet']), 0, ',', '.') . ' Kolek: ' . $i['kolektibilitas'] . ')';
                                                                    $a++;
                                                                }

                                                                $a = 0;
                                                                foreach ($data['daftar_slik_pasangan'] as $i) {
                                                                    $daftar_slik_pasangan[$a] = $i['nama_bank'] . ' (Sisa Bakidebet: ' . number_format(($i['bakidebet']), 0, ',', '.') . ' Kolek: ' . $i['kolektibilitas'] . ')';


                                                                    $a++;
                                                                }

                                                                for ($a = 1; $a <= 7; $a++) {


                                                                ?>

                                                                    <label class="mt-2">Angsuran lain Pemohon <?= $a ?></label>
                                                                    <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                        <div class="col-xs-0">
                                                                            <input type="text" style="max-width: 100px;" id="angsuran_lain_pemohon<?= $a ?>" name="angsuran_pemohon_lainnya_<?= $a ?>" class="form-control angsuran_lain_pemohon<?= $a ?>" value='<?= $data['data_wawancara']['angsuran_pemohon_lainnya_' . $a] ?>' oninput="this.value = this.value.toUpperCase()" onkeypress="return hanyaAngka(event)" />
                                                                        </div>
                                                                        <input type="text" style="background-color: #F9F9C5;" name="angsuran_pemohon_lainnya_<?= $a ?>_ket" class="form-control" value='<?= $data['data_wawancara']['angsuran_pemohon_lainnya_' . $a . '_ket'] ?>' />


                                                                        <div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input type="checkbox" class="form-check-input pemohon_lunasi_<?= $a ?>" style="width: 20px; height: 20px;" id=" cek_angsuran_pemohon<?= $a ?>" name="pemohon_lunasi_<?= $a ?>" value='<?= $data['data_wawancara']['pemohon_lunasi_' . $a] ?>' <?= $data['data_wawancara']['pemohon_lunasi_' . $a] == "0" ? 'checked="checked"' : ''; ?>>
                                                                                <label class="form-check-label">Lunasi</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                <?php } ?>

                                                            </div>
                                                            <div class="col-lg-6">

                                                                <?php

                                                                for ($a = 1; $a <= 7; $a++) {

                                                                ?>

                                                                    <label class="mt-2">Angsuran lain Pasangan <?= $a ?></label>
                                                                    <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                        <div class="col-xs-0">
                                                                            <input type="text" style="max-width: 100px;" id="angsuran_lain_pasangan<?= $a ?>" name="angsuran_pasangan_lainnya_<?= $a ?>" value='<?= $data['data_wawancara']['angsuran_pasangan_lainnya_' . $a] ?>' class="form-control angsuran_lain_pasangan<?= $a ?>" oninput="this.value = this.value.toUpperCase()" onkeypress="return hanyaAngka(event)" />
                                                                        </div>
                                                                        <input type="text" style="background-color: #F9F9C5;" name="angsuran_pasangan_lainnya_<?= $a ?>_ket" class="form-control" value='<?= $data['data_wawancara']['angsuran_pasangan_lainnya_' . $a . '_ket'] ?>' />

                                                                        <div>
                                                                            <div class="form-check form-check-inline">

                                                                                <input type="checkbox" class="form-check-input pasangan_lunasi_<?= $a ?>" style="width: 20px; height: 20px;" id="cek_angsuran_pasangan<?= $a ?>" name="pasangan_lunasi_<?= $a ?>" value='<?= $data['data_wawancara']['pasangan_lunasi_' . $a] ?>' <?= $data['data_wawancara']['pasangan_lunasi_' . $a] == "0" ? 'checked="checked"' : ''; ?>>

                                                                                <label class="form-check-label">Lunasi</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>




                                                                <?php } ?>

                                                            </div>
                                                        </div>

                                                        <div class="row mt-4 mb-5">
                                                            <div class="col-lg-6">
                                                                <label class="mt-2">Saldo Tabungan Terakhir </label>
                                                                <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                    <div class="col-xs-0">
                                                                        <input type="text" id="tes" style="max-width: 100px;" id="saldo_tabungan_terakhir" name="saldo_tabungan_terakhir" class="form-control saldo_tabungan_terakhir" oninput="this.value = this.value.toUpperCase()" onkeypress="return hanyaAngka(event)" value='<?= $data['data_wawancara']['saldo_tabungan_terakhir'] ?>' />
                                                                    </div>
                                                                    <input type="text" style="background-color: #F9F9C5;" name="saldo_tabungan_terakhir_ket" class="form-control" value='<?= $data['data_wawancara']['saldo_tabungan_terakhir_ket'] ?>' />
                                                                </div>
                                                            </div>


                                                        </div>



                                                        <div class="row">
                                                            <div class="col-6">

                                                                <table class="table-hover" cellpadding=5 cellspacing=15 style="font-size: 27px;">
                                                                    <tr>
                                                                        <td><b> KEMAMPUAN MEMBAYAR ANGSURAN </b></td>
                                                                        <td>:</td>
                                                                        <td><b class="kemampuan_membayar"></b></td>
                                                                        <input type="hidden" id="kemampuan_membayar" name="kemampuan_membayar_angsuran">
                                                                    </tr>
                                                                    <tr>
                                                                        <td><b> PERSENTASE ANGSURAN </b></td>
                                                                        <td>:</td>
                                                                        <td><b class='persentase_angsuran'> </b><b> %</b></td>
                                                                        <input type="hidden" id="persentase_angsuran" name="persentase_angsuran">
                                                                        <td>
                                                                            <div></div>
                                                                        </td>
                                                                        <td><b class='ket_persentase'></b></td>
                                                                        <input type="hidden" id="temp_keterangan_persentase_angsuran" name="keterangan_persentase_angsuran">
                                                                        <!-- <input type="hidden" id="temp_keterangan_persentase_angsuran" name="keterangan_persentase_angsuran"> -->

                                                                    </tr>
                                                                </table>

                                                            </div>


                                                            <!-- <div class="col-6">

                                                                <div class="d-flex">

                                                                    <div class="ml-auto p-1">
                                                                        <div class="d-flex">
                                                                            <span class="mr-1">
                                                                                <div class="btn btn-sm" style="background-color: <?= w_orange ?>; color:white;" id="btn_modal_detail" data-toggle="modal" data-target="#modal_detail" data-no_permohonan_kredit="<?= $data['data_wawancara']['no_permohonan_kredit']  ?>">Detail Pemohon</div>
                                                                            </span>
                                                                            <span>
                                                                                <div class='btn btn-sm detail_slik' style="background-color: <?= w_orange ?>; color:white;" data-toggle='modal' data-target='#detail_slik' data-no_permohonan_kredit='<?= $data['data_wawancara']['no_permohonan_kredit']  ?>'>DETAIL SLIK</div>
                                                                            </span>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div> -->





                                                        </div>








                                                    </div>

                                                    <div class="tab-pane" id="tab-sandi-sandi-4">
                                                        <div class="row">
                                                            <div class="col-lg-6">

                                                                <label class="mt-2 mb-2">Golongan Debitur</label><span class="ml-1" style="color:red;">*</span>
                                                                <select name="kode_golongan_debitur" class="form-control select2bs4 kode_golongan_debitur">
                                                                    <option value="" required selected>- Silahkan Pilih -</option>
                                                                    <?php foreach ($data['ref_golongan_debitur'] as $i) : ?>
                                                                        <option value="<?= $i['kode_golongan_debitur'] ?>" <?= $i['kode_golongan_debitur'] == $data['data_wawancara']['kode_golongan_debitur'] ? 'selected="selected"' : ''; ?>><?= $i['kode_golongan_debitur'] . ' - ' . $i['golongan_debitur'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>

                                                                <label class="mt-2 mb-2">Jenis Penggunaan</label><span class="ml-1" style="color:red;">*</span>
                                                                <select name="kode_jenis_penggunaan" class="form-control select2bs4 kode_jenis_penggunaan">
                                                                    <option value="" required selected>- Silahkan Pilih -</option>
                                                                    <?php foreach ($data['ref_jenis_penggunaan'] as $i) : ?>
                                                                        <option value="<?= $i['kode_jenis_penggunaan'] ?>" <?= $i['kode_jenis_penggunaan'] == $data['data_wawancara']['kode_jenis_penggunaan'] ? 'selected="selected"' : ''; ?>><?= $i['kode_jenis_penggunaan'] . ' - ' . $i['jenis_penggunaan'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>



                                                                <label class="mt-2 mb-2">Sektor Ekonomi</label><span class="ml-1" style="color:red;">*</span>
                                                                <select name="kode_sektor_ekonomi" class="form-control select2bs4 kode_sektor_ekonomi">
                                                                    <option value="" required selected>- Silahkan Pilih -</option>
                                                                    <?php foreach ($data['ref_sektor_ekonomi'] as $i) : ?>
                                                                        <option value="<?= $i['kode_sektor_ekonomi'] ?>" <?= $i['kode_sektor_ekonomi'] == $data['data_wawancara']['kode_sektor_ekonomi'] ? 'selected="selected"' : ''; ?>><?= $i['kode_sektor_ekonomi'] . ' - ' . $i['sektor_ekonomi'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>


                                                                <label class="mt-2 mb-2">Hubungan Debitur Dengan Bank</label><span class="ml-1" style="color:red;">*</span>
                                                                <select name="kode_hubungan_debitur_dengan_bank" class="form-control select2bs4 kode_hubungan_debitur_dengan_bank">
                                                                    <option value="" required selected>- Silahkan Pilih -</option>
                                                                    <?php foreach ($data['ref_hubungan_debitur_dengan_bank'] as $i) : ?>
                                                                        <option value="<?= $i['kode_hubungan_debitur_dengan_bank'] ?>" <?= $i['kode_hubungan_debitur_dengan_bank'] == $data['data_wawancara']['kode_hubungan_debitur_dengan_bank'] ? 'selected="selected"' : ''; ?>><?= $i['kode_hubungan_debitur_dengan_bank'] . ' - ' . $i['hubungan_debitur_dengan_bank'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>

                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>


                                            </div>
                                        </div>



                                        <div class="d-flex">
                                            <?php
                                            if (isset($data['nama_btn'])) {
                                            ?>
                                                <input type="hidden" value="DIAJUKAN" name="status">
                                                <div class="p-1"><button id="btn_update_ajukkan_komite" class="btn btn-lg btn-primary">Ajukan Komite </button></div>
                                                <div class="p-1"><a href="<?= BASEURL; ?>/wawancara/daftar_pending_komite" class="btn btn-lg btn-secondary">Batal</a></div>

                                            <?php } else { ?>

                                                <input type="hidden" value="<?= $data['data_wawancara']['status'] ?>" name="status">
                                                <div class="p-1"><button id="btn_update" type="submit" class="btn btn-lg btn-primary">Update</button></div>
                                                <div class="p-1"><a href="<?= BASEURL; ?>/wawancara/daftar_sudah_wawancara" class="btn btn-lg btn-secondary">Batal</a></div>


                                            <?php } ?>



                                            <div class="ml-auto p-2">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" style="width: 28px; height: 28px; " class="mr-1 tolak_permohonan">
                                                    <label class="form-check-label text-red" style="font-size: 20px;"><b>Tolak Permohonan</b></label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" style="width: 28px; height: 28px; " class="mr-1 batal_permohonan">
                                                    <label class="form-check-label text-red" style="font-size: 20px;"><b>Batal Permohonan</b></label>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                        </main>
                    </form>


                    <!-- <form class="tes_input" class="form" action="" method="POST">
                        <input type="text" name="tes" class="form-control tes" required>
                        <button type="submit">simpan</button>
                    </form> -->






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











    <!-- Detail-->
    <!-- Modal -->
    <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
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

    <!-- Detail SLIK -->
    <div class="modal fade" id="detail_slik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="h4"><strong>Detail SLIK</strong></h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="id_slik">

                </div>
            </div>
        </div>
    </div>












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

    <!-- SweetAlert2 -->
    <script src="<?= BASEURL ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- handlde select  -->
    <script src="<?= BASEURL ?>/assets/plugins/select2/js/select2.full.min.js"></script>


</body>






<!-- untuk ubah tampilan inputan tanggal  -->
<script type="text/javascript">
    $(document).ready(function() {


        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>



<!-- jika button ajukan komite di klik -->





<!-- Detail Cs -->
<script>
    $(document).on('click', '#btn_modal_detail', function(event) {
        var no_permohonan_kredit = $(this).data('no_permohonan_kredit')
        console.log(no_permohonan_kredit);

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





<!-- detail slik daftar sudah slik -->
<script>
    $(document).on('click', '.detail_slik', function(event) {
        event.preventDefault();
        var no_permohonan_kredit = $(this).data('no_permohonan_kredit');


        $.ajax({
            method: "POST",
            url: '<?= BASEURL . '/slik/detail_slik_cs' ?>',
            deferRender: true,
            data: {
                'no_permohonan_kredit': no_permohonan_kredit
            },
            // dataType: "JSON",
            success: function(data) {
                $("#id_slik").html(data)
                $('#daftar_slik').DataTable({
                    "processing": true,
                    "paging": true,
                });
                $('#daftar_slik_pasangan').DataTable({
                    "processing": true,
                    "paging": true,
                });
                $('#detail_slik').modal();
            },
            error: function(data) {
                console.log('errror')
            }
        });
    })
</script>


<!-- fungsi untuk mengatur sorot tab ketika belum di isi bagian required wawancara -->
<script>
    $(document).ready(function() {
        $('#btn_update').click(function() {
            $('input:invalid,select:invalid').each(function() {
                var $closest = $(this).closest('.tab-pane');
                var id = $closest.attr('id');
                $('.nav a[href="#' + id + '"]').tab('show');
                return false;
            })
        })
    });
</script>





<!-- check jika pilihan batal atau tolak permohonan -->
<!-- <script>
    var pil_tolak = $('.tolak_permohonan')
    var pil_batal = $('.batal_permohonan')

    $(pil_tolak).change(function() {
        if ($(this).prop('checked')) {
            pil_batal.prop("checked", false);
        }
    })
    $(pil_batal).change(function() {
        if ($(this).prop('checked')) {
            pil_tolak.prop("checked", false);
        }
    })
</script> -->

<!-- tolak permohonan  dan simpan-->
<script>
    var formInput = $('.myForm');
    var tolak_permohonan = $('.tolak_permohonan');

    // inutan yang dihilangkan required
    var r_karakter = $('.karakter')
    var r_pertimbangan_karakter = $('.pertimbangan_karakter')
    var r_kemampuan = $('.kemampuan')
    var r_pertimbangan_kemampuan = $('.pertimbangan_kemampuan')
    var r_kekayaan = $('.kekayaan')
    var r_pertimbangan_kekayaan = $('.pertimbangan_kekayaan')
    var r_jaminan = $('.jaminan')
    var r_pertimbangan_jaminan = $('.pertimbangan_jaminan')
    var r_kondisi = $('.kondisi')
    var r_pertimbangan_kondisi = $('.pertimbangan_kondisi')
    var r_kode_tujuan_penggunaan_kredit = $('.kode_tujuan_penggunaan_kredit')
    var r_tujuan_penggunaan_kredit = $('.tujuan_penggunaan_kredit')
    var r_pertimbangan_kondisi = $('.pertimbangan_kondisi')
    var r_plafond = $('.plafond')
    var r_jangka_waktu = $('.jangka_waktu')
    var r_suku_bunga = $('.suku_bunga')
    var r_sistem_bunga = $('.sistem_bunga')
    var r_angsuran_perbulan = $('.angsuran_perbulan')
    var r_sistem_pembayaran = $('.sistem_pembayaran')
    var r_pejabat_ttd_sppk = $('.pejabat_ttd_sppk')
    var r_penghasilan_pemohon = $('.penghasilan_pemohon')
    var r_penghasilan_pemohon_perbulan_ket = $('.penghasilan_pemohon_perbulan_ket')
    var r_biaya_hidup_sebulan = $('.biaya_hidup_sebulan')
    var r_biaya_hidup_sebulan_ket = $('.biaya_hidup_sebulan_ket')
    var r_kode_golongan_debitur = $('.kode_golongan_debitur')
    var r_kode_jenis_penggunaan = $('.kode_jenis_penggunaan')
    var r_kode_sektor_ekonomi = $('.kode_sektor_ekonomi')
    var r_kode_hubungan_debitur_dengan_bank = $('.kode_hubungan_debitur_dengan_bank')
    var r_penambahan = $('.penambahan')

    var pil_tolak = $('.tolak_permohonan')
    var pil_batal = $('.batal_permohonan')
    var keterangan;


    required_of()
    // required_on();
    $(pil_tolak).change(function() {
        if ($(this).prop('checked')) {
            pil_batal.prop("checked", false);
            keterangan = "tolak";
            required_of()
        } else {

            // required_on()
        }
    })
    $(pil_batal).change(function() {
        if ($(this).prop('checked')) {
            pil_tolak.prop("checked", false);
            keterangan = "batal";
            required_of()

        } else {
            // required_on()
        }
    })












    formInput.on('submit', function(e) {
        e.preventDefault()

        if (keterangan == "tolak") {
            tolak()
            console.log("tolak")


        } else if (keterangan == "batal") {
            batal()
            console.log("batal")

        } else {
            console.log("update")
            update_wawancara();
        }







    })


    function tolak() {


        Swal.fire({
            title: "Apakah permohonan kredit ini ditolak?",
            // icon: 'success',
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Batal",
            confirmButtonColor: "#3EC59D",
            cancelButtonColor: "#BB2D3B",

            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {



                $.ajax({
                    method: "POST",
                    url: '<?= BASEURL; ?>/wawancara/update_data_wawancara_tolak',
                    data: formInput.serialize() + '&status=' + "DITOLAK RO",
                    success: function(res) {

                        // cek apakah hasil res memiliki nilai karakter atau tidak

                        var hasilRes = res.includes("berhasil");
                        var hasilRes2 = res.includes("gagal");

                        if (hasilRes == true) {

                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Data berhasil disimpan',
                                showConfirmButton: false,
                                timer: 1000
                            }).then((ok) => {
                                location.href = "<?= BASEURL ?>/wawancara/daftar_sudah_wawancara";
                            })

                        } else if (hasilRes2 == 'gagal') {
                            Swal.fire({
                                position: 'center',
                                icon: 'warning',
                                title: 'Error',
                                showConfirmButton: false,
                                timer: 1000
                            })
                        }
                        console.log(res);
                    }

                })



            }
        })


    }

    function batal() {


        Swal.fire({
            title: "Apakah permohonan kredit ini dibatalkan?",
            // icon: 'success',
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Batal",
            confirmButtonColor: "#3EC59D",
            cancelButtonColor: "#BB2D3B",

            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {


                $.ajax({
                    method: "POST",
                    url: '<?= BASEURL; ?>/wawancara/update_data_wawancara_batal',
                    data: formInput.serialize() + '&status=' + "DIBATALKAN",
                    success: function(res) {

                        // cek apakah hasil res memiliki nilai karakter atau tidak

                        var hasilRes = res.includes("berhasil");
                        var hasilRes2 = res.includes("gagal");

                        if (hasilRes == true) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Data berhasil disimpan',
                                showConfirmButton: false,
                                timer: 1000
                            }).then((ok) => {
                                location.href = "<?= BASEURL ?>/wawancara/daftar_sudah_wawancara";
                            })

                        } else if (hasilRes2 == true) {
                            Swal.fire({
                                position: 'center',
                                icon: 'warning',
                                title: 'Error',
                                showConfirmButton: false,
                                timer: 1000
                            })
                        }
                        console.log(hasilRes);
                    }

                })



            }
        })



    }

    function update_wawancara() {



        Swal.fire({
            title: "Anda yakin data sudah benar?",
            // icon: 'success',
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Batal",
            confirmButtonColor: "#3EC59D",
            cancelButtonColor: "#BB2D3B",

            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    method: "POST",
                    url: '<?= BASEURL; ?>/wawancara/update_data_wawancara',
                    data: formInput.serialize() + '&status=' + "BELUM DIAJUKAN",
                    success: function(res) {

                        // cek apakah hasil res memiliki nilai karakter atau tidak

                        var hasilRes = res.includes("berhasil");

                        if (hasilRes == true) {

                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Data berhasil disimpan',
                                showConfirmButton: false,
                                timer: 1000
                            }).then((ok) => {
                                location.href = "<?= BASEURL ?>/wawancara/daftar_sudah_wawancara";
                            })

                        } else if ('gagal') {
                            Swal.fire({
                                position: 'center',
                                icon: 'warning',
                                title: 'Error',
                                showConfirmButton: false,
                                timer: 1000
                            })
                        }
                        console.log(res);
                    }

                })




            }
        })







    }







    function required_on() {

        // hapus required pada input field yang ada requirednya
        r_karakter.prop('required', true)
        r_pertimbangan_karakter.prop('required', true)
        r_kemampuan.prop('required', true)
        r_pertimbangan_kemampuan.prop('required', true)
        r_kekayaan.prop('required', true)
        r_pertimbangan_kekayaan.prop('required', true)
        r_jaminan.prop('required', true)
        r_pertimbangan_jaminan.prop('required', true)
        r_kondisi.prop('required', true)
        r_pertimbangan_kondisi.prop('required', true)
        r_kode_tujuan_penggunaan_kredit.prop('required', true)
        r_tujuan_penggunaan_kredit.prop('required', true)
        r_pertimbangan_kondisi.prop('required', true)
        r_plafond.prop('required', true)
        r_jangka_waktu.prop('required', true)
        r_suku_bunga.prop('required', true)
        r_sistem_bunga.prop('required', true)
        r_angsuran_perbulan.prop('required', true)
        r_sistem_pembayaran.prop('required', true)
        r_pejabat_ttd_sppk.prop('required', true)
        r_penghasilan_pemohon.prop('required', true)
        r_penghasilan_pemohon_perbulan_ket.prop('required', true)
        r_biaya_hidup_sebulan.prop('required', true)
        r_biaya_hidup_sebulan_ket.prop('required', true)
        r_kode_golongan_debitur.prop('required', true)
        r_kode_jenis_penggunaan.prop('required', true)
        r_kode_sektor_ekonomi.prop('required', true)
        r_kode_hubungan_debitur_dengan_bank.prop('required', true)

        r_penambahan.prop('disabled', false);




    }

    function required_of() {
        // hapus required pada input field yang ada requirednya
        r_karakter.prop('required', false)
        r_pertimbangan_karakter.prop('required', false)
        r_kemampuan.prop('required', false)
        r_pertimbangan_kemampuan.prop('required', false)
        r_kekayaan.prop('required', false)
        r_pertimbangan_kekayaan.prop('required', false)
        r_jaminan.prop('required', false)
        r_pertimbangan_jaminan.prop('required', false)
        r_kondisi.prop('required', false)
        r_pertimbangan_kondisi.prop('required', false)
        r_kode_tujuan_penggunaan_kredit.prop('required', false)
        r_tujuan_penggunaan_kredit.prop('required', false)
        r_pertimbangan_kondisi.prop('required', false)
        r_plafond.prop('required', false)
        r_jangka_waktu.prop('required', false)
        r_suku_bunga.prop('required', false)
        r_sistem_bunga.prop('required', false)
        r_angsuran_perbulan.prop('required', false)
        r_sistem_pembayaran.prop('required', false)
        r_pejabat_ttd_sppk.prop('required', false)
        r_penghasilan_pemohon.prop('required', false)
        r_penghasilan_pemohon_perbulan_ket.prop('required', false)
        r_biaya_hidup_sebulan.prop('required', false)
        r_biaya_hidup_sebulan_ket.prop('required', false)
        r_kode_golongan_debitur.prop('required', false)
        r_kode_jenis_penggunaan.prop('required', false)
        r_kode_sektor_ekonomi.prop('required', false)
        r_kode_hubungan_debitur_dengan_bank.prop('required', false)

        r_penambahan.prop('disabled', false);

    }
</script>


<!-- tidak boleh ada inputan huruf -->

<script>
    $(document).on('keyup', '.jangka_waktu', function() {
        var jw = $('.jangka_waktu');

        jw.val()
    })
</script>







<!-- Ubah format angka ketika mecapai ribuan -->
<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }

    // fungsi untuk menambahkan titik jika yang diinput sudah menjadi angka ribuan
    function angka(angka, prefix) {
        if (parseFloat(angka) >= 0) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                plafond = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            if (ribuan) {
                separator = sisa ? '.' : '';
                plafond += separator + ribuan.join('.');
            }
            plafond = split[1] != undefined ? plafond + ',' + split[1] : plafond;
            return prefix == undefined ? plafond : (plafond ? plafond : '');
        } else {
            angka = angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            return prefix == undefined ? angka : (angka ? angka : '');
        }

    }

    // fungsi khusus untuk suku bunga 
    function f_suku_bunga(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            plafond = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            plafond += separator + ribuan.join('.');
        }

        plafond = split[1] != undefined ? plafond + ',' + split[1] : plafond;
        return prefix == undefined ? plafond : (plafond ? plafond : '');
    }


    function hapus_titik(angka) {
        return parseFloat(angka.replaceAll('.', ''));
    }






    // tab analisa dan ususlan analis
    var plafond = $('.plafond')
    var suku_bunga = $('.suku_bunga')
    var os_sebelumnya = $('.os_sebelumnya')
    var penambahan = $('.penambahan')
    var angsuran_perbulan = $('.angsuran_perbulan')
    var biaya_provisi_nominal = $('.biaya_provisi_nominal')
    var biaya_provisi_persen = $('.biaya_provisi_persen')
    var biaya_administrasi_nominal = $('.biaya_administrasi_nominal')
    var biaya_administrasi_persen = $('.biaya_administrasi_persen')

    var premi_asuransi = $('.premi_asuransi')
    var tabungan = $('.tabungan')
    var biaya_notaris = $('.biaya_notaris')
    var biaya_materai = $('.biaya_materai')
    var biaya_apht = $('.biaya_apht')
    var asuransi_kerugian = $('.asuransi_kerugian')

    var saldo_tabungan_terakhir = $('.saldo_tabungan_terakhir');



    // kemampuan_membayar
    var kemampuan_membayar = 0;
    var total_penghasilan = 0;
    var total_biaya = 0;


    // menghitung  angsuran perbulan

    // $(document).ready(function() {
    //     tampil_angsuran_perbulan()
    // })




    function angsuran_annuitas() {


        var p1 = $('.plafond')
        var p2 = $('.suku_bunga')
        var p3 = $('.jangka_waktu')
        var b1 = parseInt(hapus_titik(p1.val()))
        var b2 = parseFloat(p2.val())
        var b3 = parseInt(hapus_titik(p3.val()))
        var hasil;

        hasil = parseInt(b1 * (b2 / 12 / 100) * 1 / (1 - (1 / ((1 + (b2 / 12 / 100)) ** b3))))

        var mod;
        mod = hasil + 100 - (hasil % 100);
        return mod;
    }


    function angsuran_flat() {

        var p1 = $('.plafond')
        var p2 = $('.suku_bunga')
        var p3 = $('.jangka_waktu')
        var b1 = parseInt(hapus_titik(p1.val()))
        var b2 = parseFloat(p2.val())
        var b3 = parseInt(hapus_titik(p3.val()))
        var hasil;

        hasil = parseInt((b1 / b3) + (b1 * (b2 / 12 / 100)))

        var mod;
        mod = hasil + 100 - (hasil % 100);
        return mod;
    }


    var sistem_bungaa = '';
    var a = $('.angsuran_perbulan')

    $(document).on("keyup change", ".plafond, .jangka_waktu, .suku_bunga,select", function() {
        var sistem_bunga = $('.sistem_bunga').val();

        if (sistem_bunga == 'FLAT') {
            a.val(angka(angsuran_flat().toString()));
            if (isNaN(angsuran_flat())) {
                a.val(0);
            }
        } else if (sistem_bunga == 'ANNUITAS') {
            a.val(angka(angsuran_annuitas().toString()));
            if (isNaN(angsuran_annuitas())) {
                a.val(0);
            }
        } else {
            a.val("0");
        }
    })


    // biaya provisi


    function biaya_provisi() {
        $(document).on("keyup", ".plafond, .jangka_waktu, .suku_bunga", function() {
            var biaya_provisi_nominal = $('.biaya_provisi_nominal');
            var biaya_provisi_persen = $('.biaya_provisi_persen').val()
            var biaya_administrasi_nominal = $('.biaya_administrasi_nominal')
            var biaya_administrasi_persen = $('.biaya_administrasi_persen').val()
            var plafond = hapus_titik($('.plafond').val());
            var hasil1 = parseFloat(plafond * biaya_provisi_persen / 100)
            var hasil2 = parseFloat(plafond * biaya_administrasi_persen / 100)

            biaya_provisi_nominal.val(angka(hasil1.toString()));
            biaya_administrasi_nominal.val(angka(hasil2.toString()));

            if (isNaN(hasil1)) {
                biaya_provisi_nominal.val(0);
            }

            if (isNaN(hasil2)) {
                biaya_administrasi_nominal.val(0);
            }

        })

        var biaya_provisi_nominal = $('.biaya_provisi_nominal');
        var biaya_provisi_persen = $('.biaya_provisi_persen').val()
        var biaya_administrasi_nominal = $('.biaya_administrasi_nominal')
        var biaya_administrasi_persen = $('.biaya_administrasi_persen').val()
        var plafond = hapus_titik($('.plafond').val());
        var hasil1 = parseFloat(plafond * biaya_provisi_persen / 100)
        var hasil2 = parseFloat(plafond * biaya_administrasi_persen / 100)

        biaya_provisi_nominal.val(angka(hasil1.toString()));
        biaya_administrasi_nominal.val(angka(hasil2.toString()));


        if (isNaN(hasil1)) {
            biaya_provisi_nominal.val(0);
        }

        if (isNaN(hasil2)) {
            biaya_administrasi_nominal.val(0);
        }




    }

    $(document).ready(function() {
        biaya_provisi()


        saldo_tabungan_terakhir.val(angka(saldo_tabungan_terakhir.val()))
        os_sebelumnya.val(angka(os_sebelumnya.val()))
    })




















    plafond.keyup(function() {
        plafond.val(angka(plafond.val().toString()));
    })

    suku_bunga.keyup(function() {
        suku_bunga.val(suku_bunga.val().toString().replace(/[^\d.]/g, ''))
    })

    os_sebelumnya.keyup(function() {
        os_sebelumnya.val(angka(os_sebelumnya.val().toString()))

        console.log(plafond.val())
        console.log(os_sebelumnya.val())

    })
    angsuran_perbulan.keyup(function() {
        console.log("agsuran perbulan 1: " + angsuran_perbulan.val().toString())
        angsuran_perbulan.val(angka(angsuran_perbulan.val().toString()));
    })

    biaya_provisi_nominal.keyup(function() {
        biaya_provisi_nominal.val(angka(biaya_provisi_nominal.val().toString()));
    })

    biaya_administrasi_nominal.keyup(function() {
        biaya_administrasi_nominal.val(angka(biaya_administrasi_nominal.val().toString()))
    })

    premi_asuransi.keyup(function() {
        premi_asuransi.val(angka(premi_asuransi.val().toString()))
    })
    tabungan.keyup(function() {
        tabungan.val(angka(tabungan.val().toString()))
    })


    biaya_notaris.keyup(function() {
        biaya_notaris.val(angka(biaya_notaris.val().toString()))
    })

    biaya_materai.keyup(function() {
        biaya_materai.val(angka(biaya_materai.val().toString()))
    })

    biaya_apht.keyup(function() {
        biaya_apht.val(angka(biaya_apht.val().toString()))
    })


    asuransi_kerugian.keyup(function() {
        asuransi_kerugian.val(angka(asuransi_kerugian.val().toString()))
    })

    saldo_tabungan_terakhir.keyup(function() {
        saldo_tabungan_terakhir.val(angka(saldo_tabungan_terakhir.val().toString()))
    })



    // tab analisa kemampuan membayar

    var penghasilan_pemohon = $('.penghasilan_pemohon');
    var penghasilan_pemohon_tambahan_1 = $('.penghasilan_pemohon_tambahan_1')
    var penghasilan_pemohon_tambahan_2 = $('.penghasilan_pemohon_tambahan_2')
    var penghasilan_pemohon_tambahan_3 = $('.penghasilan_pemohon_tambahan_3')


    var penghasilan_pasangan = $('.penghasilan_pasangan');
    var penghasilan_pasangan_tambahan_1 = $('.penghasilan_pasangan_tambahan_1')
    var penghasilan_pasangan_tambahan_2 = $('.penghasilan_pasangan_tambahan_2')
    var penghasilan_pasangan_tambahan_3 = $('.penghasilan_pasangan_tambahan_3')

    var biaya_hidup_sebulan = $('.biaya_hidup_sebulan')
    var biaya_pendidikan = $('.biaya_pendidikan')
    var biaya_pam_listrik_telepon = $('.biaya_pam_listrik_telepon')
    var biaya_transport = $('.biaya_transport')
    var biaya_lainnya = $('.biaya_lainnya')
    var angsuran_kredit_sebelumnya = $('.angsuran_kredit_sebelumnya')

    var angsuran_lain_pemohon1 = $('.angsuran_lain_pemohon1');
    var angsuran_lain_pemohon2 = $('.angsuran_lain_pemohon2');
    var angsuran_lain_pemohon3 = $('.angsuran_lain_pemohon3');
    var angsuran_lain_pemohon4 = $('.angsuran_lain_pemohon4');
    var angsuran_lain_pemohon5 = $('.angsuran_lain_pemohon5');
    var angsuran_lain_pemohon6 = $('.angsuran_lain_pemohon6');
    var angsuran_lain_pemohon7 = $('.angsuran_lain_pemohon7');
    var angsuran_lain_pasangan1 = $('.angsuran_lain_pasangan1');
    var angsuran_lain_pasangan2 = $('.angsuran_lain_pasangan2');
    var angsuran_lain_pasangan3 = $('.angsuran_lain_pasangan3');
    var angsuran_lain_pasangan4 = $('.angsuran_lain_pasangan4');
    var angsuran_lain_pasangan5 = $('.angsuran_lain_pasangan5');
    var angsuran_lain_pasangan6 = $('.angsuran_lain_pasangan6');
    var angsuran_lain_pasangan7 = $('.angsuran_lain_pasangan7');
    var saldo_tabungan_terakhir = $('.saldo_tabungan_terakhir');


    // variabel tampung nilai

    var n_penghasilan_pemohon;
    var n_penghasilan_pemohon_tambahan_1;
    var n_penghasilan_pemohon_tambahan_2;
    var n_penghasilan_pemohon_tambahan_3;

    var n_penghasilan_pasangan;
    var n_penghasilan_pasangan_tambahan_1;
    var n_penghasilan_pasangan_tambahan_2;
    var n_penghasilan_pasangan_tambahan_3;


    var n_biaya_hidup_sebulan;
    var n_biaya_pendidikan;
    var n_biaya_pam_listrik_telepon;
    var n_biaya_transport;
    var n_biaya_lainnya;
    var n_angsuran_kredit_sebelumnya;

    var n_angsuran_lain_pemohon1;
    var n_angsuran_lain_pemohon2;
    var n_angsuran_lain_pemohon3;
    var n_angsuran_lain_pemohon4;
    var n_angsuran_lain_pemohon5;
    var n_angsuran_lain_pemohon6;
    var n_angsuran_lain_pemohon7;
    var n_angsuran_lain_pasangan1;
    var n_angsuran_lain_pasangan2;
    var n_angsuran_lain_pasangan3;
    var n_angsuran_lain_pasangan4;
    var n_angsuran_lain_pasangan5;
    var n_angsuran_lain_pasangan6;
    var n_angsuran_lain_pasangan7;

    var pemohon_lunasi_1 = $('.pemohon_lunasi_1')
    var pemohon_lunasi_2 = $('.pemohon_lunasi_2')
    var pemohon_lunasi_3 = $('.pemohon_lunasi_3')
    var pemohon_lunasi_4 = $('.pemohon_lunasi_4')
    var pemohon_lunasi_5 = $('.pemohon_lunasi_5')
    var pemohon_lunasi_6 = $('.pemohon_lunasi_6')
    var pemohon_lunasi_7 = $('.pemohon_lunasi_7')


    var pasangan_lunasi_1 = $('.pasangan_lunasi_1')
    var pasangan_lunasi_2 = $('.pasangan_lunasi_2')
    var pasangan_lunasi_3 = $('.pasangan_lunasi_3')
    var pasangan_lunasi_4 = $('.pasangan_lunasi_4')
    var pasangan_lunasi_5 = $('.pasangan_lunasi_5')
    var pasangan_lunasi_6 = $('.pasangan_lunasi_6')
    var pasangan_lunasi_7 = $('.pasangan_lunasi_7')


    var n_pemohon_lunasi_1;
    var n_pemohon_lunasi_2;
    var n_pemohon_lunasi_3;
    var n_pemohon_lunasi_4;
    var n_pemohon_lunasi_5;
    var n_pemohon_lunasi_6;
    var n_pemohon_lunasi_7;


    var n_pasangan_lunasi_1;
    var n_pasangan_lunasi_2;
    var n_pasangan_lunasi_3;
    var n_pasangan_lunasi_4;
    var n_pasangan_lunasi_5;
    var n_pasangan_lunasi_6;
    var n_pasangan_lunasi_7;


    var ket_persentase = $('.ket_persentase');
    var temp_keterangan_persentase_angsuran = $('#temp_keterangan_persentase_angsuran');






    $(document).ready(function() {

        f_os_sebelumnya()
    })

    plafond.keyup(function() {
        f_os_sebelumnya()
    })
    os_sebelumnya.keyup(function() {
        f_os_sebelumnya()
    })




    $(document).ready(function() {

        // 

        plafond.val(angka(plafond.val()))



        // 

        n_penghasilan_pemohon = penghasilan_pemohon.val(angka(penghasilan_pemohon.val().toString()))
        n_penghasilan_pemohon_tambahan_1 = penghasilan_pemohon_tambahan_1.val(angka(penghasilan_pemohon_tambahan_1.val().toString()))
        n_penghasilan_pemohon_tambahan_2 = penghasilan_pemohon_tambahan_2.val(angka(penghasilan_pemohon_tambahan_2.val().toString()))
        n_penghasilan_pemohon_tambahan_3 = penghasilan_pemohon_tambahan_3.val(angka(penghasilan_pemohon_tambahan_3.val().toString()))
        n_penghasilan_pasangan = penghasilan_pasangan.val(angka(penghasilan_pasangan.val().toString()))
        n_penghasilan_pasangan_tambahan_1 = penghasilan_pasangan_tambahan_1.val(angka(penghasilan_pasangan_tambahan_1.val().toString()))
        n_penghasilan_pasangan_tambahan_2 = penghasilan_pasangan_tambahan_2.val(angka(penghasilan_pasangan_tambahan_2.val().toString()))
        n_penghasilan_pasangan_tambahan_3 = penghasilan_pasangan_tambahan_3.val(angka(penghasilan_pasangan_tambahan_3.val().toString()))


        n_biaya_hidup_sebulan = biaya_hidup_sebulan.val(angka(biaya_hidup_sebulan.val().toString()))
        n_biaya_pendidikan = biaya_pendidikan.val(angka(biaya_pendidikan.val().toString()))
        n_biaya_pam_listrik_telepon = biaya_pam_listrik_telepon.val(angka(biaya_pam_listrik_telepon.val().toString()))
        n_biaya_transport = biaya_transport.val(angka(biaya_transport.val().toString()))
        n_biaya_lainnya = biaya_lainnya.val(angka(biaya_lainnya.val().toString()))
        n_angsuran_kredit_sebelumnya = angsuran_kredit_sebelumnya.val(angka(angsuran_kredit_sebelumnya.val().toString()))


        n_angsuran_lain_pemohon1 = angsuran_lain_pemohon1.val(angka(angsuran_lain_pemohon1.val().toString()))
        n_angsuran_lain_pemohon2 = angsuran_lain_pemohon2.val(angka(angsuran_lain_pemohon2.val().toString()))
        n_angsuran_lain_pemohon3 = angsuran_lain_pemohon3.val(angka(angsuran_lain_pemohon3.val().toString()))
        n_angsuran_lain_pemohon4 = angsuran_lain_pemohon4.val(angka(angsuran_lain_pemohon4.val().toString()))
        n_angsuran_lain_pemohon5 = angsuran_lain_pemohon5.val(angka(angsuran_lain_pemohon5.val().toString()))
        n_angsuran_lain_pemohon6 = angsuran_lain_pemohon6.val(angka(angsuran_lain_pemohon6.val().toString()))
        n_angsuran_lain_pemohon7 = angsuran_lain_pemohon7.val(angka(angsuran_lain_pemohon7.val().toString()))
        n_angsuran_lain_pasangan1 = angsuran_lain_pasangan1.val(angka(angsuran_lain_pasangan1.val().toString()))
        n_angsuran_lain_pasangan2 = angsuran_lain_pasangan2.val(angka(angsuran_lain_pasangan2.val().toString()))
        n_angsuran_lain_pasangan3 = angsuran_lain_pasangan3.val(angka(angsuran_lain_pasangan3.val().toString()))
        n_angsuran_lain_pasangan4 = angsuran_lain_pasangan4.val(angka(angsuran_lain_pasangan4.val().toString()))
        n_angsuran_lain_pasangan5 = angsuran_lain_pasangan5.val(angka(angsuran_lain_pasangan5.val().toString()))
        n_angsuran_lain_pasangan6 = angsuran_lain_pasangan6.val(angka(angsuran_lain_pasangan6.val().toString()))
        n_angsuran_lain_pasangan7 = angsuran_lain_pasangan7.val(angka(angsuran_lain_pasangan7.val().toString()))


        // jalankan fungsi lunasi pertama ketika halamab berhasil di load

        lunasi();

    })


    // atur os_sebelumnya dan penambahan

    function f_os_sebelumnya() {

        if (os_sebelumnya.val() != 0) {

            penambahan.val(angka((parseFloat(hapus_titik(plafond.val())) - parseFloat(hapus_titik(os_sebelumnya.val()))).toString()))
        } else {
            penambahan.val('');
        }


    }






    // atur tampilan angka agar berubah menjadi format rupiah


    function temp_f_total_penghasilan() {

        penghasilan_pemohon.val(angka(penghasilan_pemohon.val().toString()))
        penghasilan_pemohon_tambahan_1.val(angka(penghasilan_pemohon_tambahan_1.val().toString()))
        penghasilan_pemohon_tambahan_2.val(angka(penghasilan_pemohon_tambahan_2.val().toString()))
        penghasilan_pemohon_tambahan_3.val(angka(penghasilan_pemohon_tambahan_3.val().toString()))
        penghasilan_pasangan.val(angka(penghasilan_pasangan.val().toString()))
        penghasilan_pasangan_tambahan_1.val(angka(penghasilan_pasangan_tambahan_1.val().toString()))
        penghasilan_pasangan_tambahan_2.val(angka(penghasilan_pasangan_tambahan_2.val().toString()))
        penghasilan_pasangan_tambahan_3.val(angka(penghasilan_pasangan_tambahan_3.val().toString()))

    }

    function temp_f_total_biaya() {
        biaya_hidup_sebulan.val(angka(biaya_hidup_sebulan.val().toString()))
        biaya_pendidikan.val(angka(biaya_pendidikan.val().toString()))
        biaya_pam_listrik_telepon.val(angka(biaya_pam_listrik_telepon.val().toString()))
        biaya_transport.val(angka(biaya_transport.val().toString()))
        biaya_lainnya.val(angka(biaya_lainnya.val().toString()))
        angsuran_kredit_sebelumnya.val(angka(angsuran_kredit_sebelumnya.val().toString()))
    }


    function temp_f_total_angsuran_lain() {
        angsuran_lain_pemohon1.val(angka(angsuran_lain_pemohon1.val().toString()))
        angsuran_lain_pemohon2.val(angka(angsuran_lain_pemohon2.val().toString()))
        angsuran_lain_pemohon3.val(angka(angsuran_lain_pemohon3.val().toString()))
        angsuran_lain_pemohon4.val(angka(angsuran_lain_pemohon4.val().toString()))
        angsuran_lain_pemohon5.val(angka(angsuran_lain_pemohon5.val().toString()))
        angsuran_lain_pemohon6.val(angka(angsuran_lain_pemohon6.val().toString()))
        angsuran_lain_pemohon7.val(angka(angsuran_lain_pemohon7.val().toString()))
        angsuran_lain_pasangan1.val(angka(angsuran_lain_pasangan1.val().toString()))
        angsuran_lain_pasangan2.val(angka(angsuran_lain_pasangan2.val().toString()))
        angsuran_lain_pasangan3.val(angka(angsuran_lain_pasangan3.val().toString()))
        angsuran_lain_pasangan4.val(angka(angsuran_lain_pasangan4.val().toString()))
        angsuran_lain_pasangan5.val(angka(angsuran_lain_pasangan5.val().toString()))
        angsuran_lain_pasangan6.val(angka(angsuran_lain_pasangan6.val().toString()))
        angsuran_lain_pasangan7.val(angka(angsuran_lain_pasangan7.val().toString()))
    }



    // perhitungan
    function f_total_penghasilan() {

        var hasil = parseFloat(
            hapus_titik(n_penghasilan_pemohon.val() || "0") +
            hapus_titik(n_penghasilan_pemohon_tambahan_1.val() || "0") +
            hapus_titik(n_penghasilan_pemohon_tambahan_2.val() || "0") +
            hapus_titik(n_penghasilan_pemohon_tambahan_3.val() || "0") +

            hapus_titik(n_penghasilan_pasangan.val() || "0") +
            hapus_titik(n_penghasilan_pasangan_tambahan_1.val() || "0") +
            hapus_titik(n_penghasilan_pasangan_tambahan_2.val() || "0") +
            hapus_titik(n_penghasilan_pasangan_tambahan_3.val() || "0")
        )

        return hasil
    }

    function f_total_biaya() {

        var hasil = parseFloat(
            hapus_titik(n_biaya_hidup_sebulan.val() || "0") +
            hapus_titik(n_biaya_pendidikan.val() || "0") +
            hapus_titik(n_biaya_pam_listrik_telepon.val() || "0") +
            hapus_titik(n_biaya_transport.val() || "0") +
            hapus_titik(n_biaya_lainnya.val() || "0")
        )

        return hasil
    }




    function f_total_angsuran_lain() {
        var hasil = parseFloat(

            (hapus_titik(angsuran_lain_pemohon1.val() || "0") * n_pemohon_lunasi_1) +
            (hapus_titik(angsuran_lain_pemohon2.val() || "0") * n_pemohon_lunasi_2) +
            (hapus_titik(angsuran_lain_pemohon3.val() || "0") * n_pemohon_lunasi_3) +
            (hapus_titik(angsuran_lain_pemohon4.val() || "0") * n_pemohon_lunasi_4) +
            (hapus_titik(angsuran_lain_pemohon5.val() || "0") * n_pemohon_lunasi_5) +
            (hapus_titik(angsuran_lain_pemohon6.val() || "0") * n_pemohon_lunasi_6) +
            (hapus_titik(angsuran_lain_pemohon7.val() || "0") * n_pemohon_lunasi_7) +

            (hapus_titik(angsuran_lain_pasangan1.val() || "0") * n_pasangan_lunasi_1) +
            (hapus_titik(angsuran_lain_pasangan2.val() || "0") * n_pasangan_lunasi_2) +
            (hapus_titik(angsuran_lain_pasangan3.val() || "0") * n_pasangan_lunasi_3) +
            (hapus_titik(angsuran_lain_pasangan4.val() || "0") * n_pasangan_lunasi_4) +
            (hapus_titik(angsuran_lain_pasangan5.val() || "0") * n_pasangan_lunasi_5) +
            (hapus_titik(angsuran_lain_pasangan6.val() || "0") * n_pasangan_lunasi_6) +
            (hapus_titik(angsuran_lain_pasangan7.val() || "0") * n_pasangan_lunasi_7)




            // hapus_titik((parseFloat(n_angsuran_lain_pemohon1.val() * n_pemohon_lunasi_1)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pemohon2.val() * n_pemohon_lunasi_2)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pemohon3.val() * n_pemohon_lunasi_3)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pemohon4.val() * n_pemohon_lunasi_4)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pemohon5.val() * n_pemohon_lunasi_5)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pemohon6.val() * n_pemohon_lunasi_6)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pemohon7.val() * n_pemohon_lunasi_7)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pasangan1.val() * n_pasangan_lunasi_1)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pasangan2.val() * n_pasangan_lunasi_2)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pasangan3.val() * n_pasangan_lunasi_3)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pasangan4.val() * n_pasangan_lunasi_4)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pasangan5.val() * n_pasangan_lunasi_5)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pasangan6.val() * n_pasangan_lunasi_6)).toString() || "0") +
            // hapus_titik((parseFloat(n_angsuran_lain_pasangan7.val() * n_pasangan_lunasi_7)).toString() || "0")
        )
        return hasil
    }



    function lunasi() {
        if (pemohon_lunasi_1.is(':checked')) {
            n_pemohon_lunasi_1 = 0
            console.log("Pemohon Lunas ceklis : " + n_pemohon_lunasi_1)

        } else {
            n_pemohon_lunasi_1 = 1
            console.log("Pemohon Lunas tidak ceklis : " + n_pemohon_lunasi_1)
        }



        if (pemohon_lunasi_2.is(':checked')) {
            n_pemohon_lunasi_2 = 0
            console.log("Pemohon Lunas ceklis : " + n_pemohon_lunasi_2);
        } else {
            n_pemohon_lunasi_2 = 1
            console.log("Pemohon Lunas tidak ceklis : " + n_pemohon_lunasi_2);
        }


        if (pemohon_lunasi_3.is(':checked')) {
            n_pemohon_lunasi_3 = parseInt(0)
            console.log("Pemohon Lunas ceklis : " + n_pemohon_lunasi_3);
        } else {
            n_pemohon_lunasi_3 = parseInt(1)
            console.log("Pemohon Lunas tidak ceklis : " + n_pemohon_lunasi_3);
        }


        if (pemohon_lunasi_4.is(':checked')) {
            n_pemohon_lunasi_4 = parseInt(0)
            console.log("Pemohon Lunas ceklis : " + n_pemohon_lunasi_4);
        } else {
            n_pemohon_lunasi_4 = parseInt(1)
            console.log("Pemohon Lunas tidak ceklis : " + n_pemohon_lunasi_4);
        }


        if (pemohon_lunasi_5.is(':checked')) {
            n_pemohon_lunasi_5 = parseInt(0)
            console.log("Pemohon Lunas ceklis : " + n_pemohon_lunasi_5);
        } else {
            n_pemohon_lunasi_5 = parseInt(1)
            console.log("Pemohon Lunas tidak ceklis : " + n_pemohon_lunasi_5);
        }

        if (pemohon_lunasi_6.is(':checked')) {
            n_pemohon_lunasi_6 = parseInt(0)
            console.log("Pemohon Lunas ceklis : " + n_pemohon_lunasi_6);
        } else {
            n_pemohon_lunasi_6 = parseInt(1)
            console.log("Pemohon Lunas tidak ceklis : " + n_pemohon_lunasi_6);
        }

        if (pemohon_lunasi_7.is(':checked')) {
            n_pemohon_lunasi_7 = parseInt(0)
            console.log("Pemohon Lunas ceklis : " + n_pemohon_lunasi_7);
        } else {
            n_pemohon_lunasi_7 = parseInt(1)
            console.log("Pemohon Lunas tidak ceklis : " + n_pemohon_lunasi_7);
        }

        // batasss


        if (pasangan_lunasi_1.is(':checked')) {
            n_pasangan_lunasi_1 = parseInt(0)
            console.log("Pasangan Lunas ceklis : " + n_pasangan_lunasi_1)

        } else {
            n_pasangan_lunasi_1 = parseInt(1)
            console.log("Pasangan Lunas tidak ceklis : " + n_pasangan_lunasi_1)
        }



        if (pasangan_lunasi_2.is(':checked')) {
            n_pasangan_lunasi_2 = parseInt(0)
            console.log("Pasangan Lunas ceklis : " + n_pasangan_lunasi_2);
        } else {
            n_pasangan_lunasi_2 = parseInt(1)
            console.log("Pasangan Lunas tidak ceklis : " + n_pasangan_lunasi_2);
        }


        if (pasangan_lunasi_3.is(':checked')) {
            n_pasangan_lunasi_3 = parseInt(0)
            console.log("Pasangan Lunas ceklis : " + n_pasangan_lunasi_3);
        } else {
            n_pasangan_lunasi_3 = parseInt(1)
            console.log("Pasangan Lunas tidak ceklis : " + n_pasangan_lunasi_3);
        }


        if (pasangan_lunasi_4.is(':checked')) {
            n_pasangan_lunasi_4 = parseInt(0)
            console.log("Pasangan Lunas ceklis : " + n_pasangan_lunasi_4);
        } else {
            n_pasangan_lunasi_4 = parseInt(1)
            console.log("Pasangan Lunas tidak ceklis : " + n_pasangan_lunasi_4);
        }


        if (pasangan_lunasi_5.is(':checked')) {
            n_pasangan_lunasi_5 = parseInt(0)
            console.log("Pasangan Lunas ceklis : " + n_pasangan_lunasi_5);
        } else {
            n_pasangan_lunasi_5 = parseInt(1)
            console.log("Pasangan Lunas tidak ceklis : " + n_pasangan_lunasi_5);
        }

        if (pasangan_lunasi_6.is(':checked')) {
            n_pasangan_lunasi_6 = parseInt(0)
            console.log("Pasangan Lunas ceklis : " + n_pasangan_lunasi_6);
        } else {
            n_pasangan_lunasi_6 = parseInt(1)
            console.log("Pasangan Lunas tidak ceklis : " + n_pasangan_lunasi_6);
        }

        if (pasangan_lunasi_7.is(':checked')) {
            n_pasangan_lunasi_7 = parseInt(0)
            console.log("Pasangan Lunas ceklis : " + n_pasangan_lunasi_7);
        } else {
            n_pasangan_lunasi_7 = parseInt(1)
            console.log("Pasangan Lunas tidak ceklis : " + n_pasangan_lunasi_7);
        }





    }


    function f_angsuran_perbulan() {
        var hasil = parseFloat(
            (hapus_titik(angsuran_perbulan.val()) / 1000)
        )

        return hasil;
    }

    function f_ket_dan_warna_persentase() {

        var persentase = f_persentase_angsuran();
        if (persentase <= 50) {
            ket_persentase.html("Disarankan");
            temp_keterangan_persentase_angsuran.val('Disarankan');
            ket_persentase.css('color', 'blue');
        } else if (persentase > 50 && persentase <= 70) {
            ket_persentase.html("Dipertimbangkan");
            temp_keterangan_persentase_angsuran.val('Dipertimbangkan');
            ket_persentase.css('color', 'blue');
        } else if (persentase > 70 && persentase <= 80) {
            ket_persentase.html("Kurang Disarankan");
            temp_keterangan_persentase_angsuran.val('Kurang Disarankan');
            ket_persentase.css('color', 'red');
        } else if (persentase > 80) {
            ket_persentase.html("Ditolak");
            temp_keterangan_persentase_angsuran.val('Ditolak');
            ket_persentase.css('color', 'red');
        }

    }

    $(document).change(function(e) {
        // let el = e.target.id;
        // alert(el);

        lunasi();
        f_kemampuan_membayar_angsuran();
        f_tampil();
        f_ket_dan_warna_persentase()
    })



    function f_kemampuan_membayar_angsuran() {
        return (angka(parseFloat((f_total_penghasilan() - f_total_biaya()) - f_total_angsuran_lain()).toString()))
    }

    function f_persentase_angsuran() {
        console.log("angsuran lain : " + f_total_angsuran_lain())
        console.log("angsuran perbulan: " + f_angsuran_perbulan())
        console.log("penghasilan : " + f_total_penghasilan())
        console.log("persentas : " + Math.round((f_total_angsuran_lain() + f_angsuran_perbulan()) / f_total_penghasilan() * 100 / 100 * 100))
        return Math.round((f_total_angsuran_lain() + f_angsuran_perbulan()) / f_total_penghasilan() * 100 / 100 * 100)
    }

    function f_tampil() {
        $('.kemampuan_membayar').html(f_kemampuan_membayar_angsuran())
        $('.persentase_angsuran').html(f_persentase_angsuran())

        // isi field hidden dan simpan ke database
        f_ket_dan_warna_persentase()
        $('#kemampuan_membayar').val(f_kemampuan_membayar_angsuran())
        $('#persentase_angsuran').val(f_persentase_angsuran())


    }



    // atur nilai dan tampilkan perubahan jika  terjadi perubahan input
    $(document).keyup(function() {
        temp_f_total_penghasilan();
        temp_f_total_biaya();
        temp_f_total_angsuran_lain()
        f_tampil();
        f_ket_dan_warna_persentase()


    })

    // tampilkan nilai saat pertama kali di load halaman
    $(document).ready(function() {
        f_tampil()
        f_ket_dan_warna_persentase()
    })
</script>










</html>