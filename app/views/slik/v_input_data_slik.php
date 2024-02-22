<!DOCTYPE html>
<html lang="en">
<?php $title = "Proses SLIK" ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

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

    <!-- Bootstrap Color Picker -->
    <!-- <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"> -->

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" /> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" /> -->








</head>



<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">


        <?php $this->view('slik/navbar') ?>


        <!-- Side Bar -->
        <?php $this->view('slik/side_bar') ?>
        <!-- Side Bar -->





        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $title ?></h1>
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

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <table class="table-hover" cellpadding=5 cellspacing=15>
                                                        <tr>
                                                            <td>No. Permohonan Kredit</td>
                                                            <td>:</td>
                                                            <td id="65"><?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tgl Permohonan</td>
                                                            <td>:</td>
                                                            <td id="66"><?= date("d-m-Y", strtotime($data['get_data_cs_where_no_req']['tanggal_permohonan'])) ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tgl SLIK</td>
                                                            <td>:</td>
                                                            <td id="67"><?= date("d-m-Y") ?></td>
                                                        </tr>

                                                    </table>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="d-flex">

                                                        <div class="ml-auto p-2">
                                                            <button id="btn_lihatfile" data-no_permohonan_kredit='<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>' class="btn btn-sm btn-success">Lihat Berkas Identitas</button>
                                                            <button id="btn_modal_detail" class="btn btn-sm" style="background-color: <?= w_orange ?>; color:white;" data-toggle="modal" data-target="#modal_detail" data-no_permohonan_kredit="<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>"><span>Detail Pemohon</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>






                                            <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pemohon (<span><?= $data['get_jumlah_data_slik_pemohon'] ?> Fasilitas)</span> </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pasangan (<span class=""><?= $data['get_jumlah_data_slik_pasangan'] ?> Fasilitas)</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false"><span>SLIK Tidak Ditemukan</span></span></a>
                                                </li>

                                            </ul>

                                            <!-- Tab panes -->

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                                    <div class="row mt-2">
                                                        <div class="col-lg-6">
                                                            <table class="table-hover" cellpadding=5 cellspacing=15>
                                                                <tr>
                                                                    <td>Nama Pemohon</td>
                                                                    <td>:</td>
                                                                    <input type="hidden" name='nama_pemohon' value="<?= $data['get_data_cs_where_no_req']['nama_pemohon'] ?>">
                                                                    <td id="65"><?= $data['get_data_cs_where_no_req']['nama_pemohon'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Instansi</td>
                                                                    <td>:</td>
                                                                    <td id="66"><?= $data['get_data_cs_where_no_req']['nama_instansi'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>No. KTP / NPWP</td>
                                                                    <td>:</td>
                                                                    <td id="67"><?= $data['get_data_cs_where_no_req']['no_ktp_pemohon'] . ' / ' .  $data['get_data_cs_where_no_req']['npwp_pemohon'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tempat Tanggal Lahir</td>
                                                                    <td>:</td>
                                                                    <td><?= $data['get_data_cs_where_no_req']['tempat_lahir_pemohon'] ?>, <?= date("d F Y", strtotime($data['get_data_cs_where_no_req']['tgl_lahir_pemohon']))  ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alamat KTP</td>
                                                                    <td>:</td>
                                                                    <td id="67"><?= $data['get_data_cs_where_no_req']['alamat_ktp_pemohon'] ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Alamat Saat Ini</td>
                                                                    <td>:</td>
                                                                    <td id="67"><?= $data['get_data_cs_where_no_req']['alamat_sekarang_pemohon'] ?></td>
                                                                </tr>

                                                            </table>
                                                        </div>



                                                        <div class="col-lg-6">
                                                            <form action="<?= BASEURL; ?>/slik2/upload_data_slik" method="post" enctype="multipart/form-data">
                                                                <input type="hidden" class="ktp2" name="ktp2">
                                                                <input type="hidden" name="nama_pemohon" value="<?= $data['get_data_cs_where_no_req']['nama_pemohon'] ?>">
                                                                <input type="hidden" value="<?= $data['get_data_cs_where_no_req']['no_ktp_pemohon'] ?>" name="ktp3">
                                                                <input type="hidden" name="no_permohonan_kredit" value="<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>">
                                                                <div>
                                                                    <label class="btn btn-success custom-file-button">
                                                                        <i class="fas fa-file-import mr-2"></i>
                                                                        Import File SLIK Pemohon
                                                                        <input type="file" name="fileToUpload" id="fileToUpload" class="d-none" onchange="fileSelected1()">
                                                                    </label>
                                                                </div>
                                                                <div id="selectedFileName" class="mt-2"></div>
                                                                <div id="uploadButton" style="display: none;">
                                                                    <button type="submit" name="submit" value="btn_upload_file_slik_pemohon" class="btn btn-primary mt-2">
                                                                        <i class="fas fa-upload mr-2"></i>
                                                                        Upload File
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>



                                                    </div>


                                                    <form id="form_slik_simpan_data_pemohon" action="<?= BASEURL; ?>/slik/simpan_slik_pemohon" method="POST" enctype="multipart/form-data">


                                                        <div class="row mt-3">
                                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                                <div class="">
                                                                    <div class="">
                                                                        <div class="form-group">
                                                                            <div class="validate-error"></div>
                                                                            <input type="hidden" name="nama_pemohon" value="<?= $data['get_data_cs_where_no_req']['nama_pemohon'] ?>">
                                                                            <input type="hidden" name="no_permohonan_kredit" value="<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>">
                                                                            <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama Bank</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select name="nama_bank" class="form-control select2bs4" required>
                                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['nama_bank'] as $i) : ?>
                                                                                    <option value="<?= $i['nama_bank'] ?>"><?php echo $i['nama_bank'] ?></option>
                                                                                <?php endforeach; ?>
                                                                                <!-- <option>BNI</option>
                                                        <option>BRI</option>
                                                        <option>MANDIRI</option> -->
                                                                            </select>
                                                                            <label class="mt-2 mb-2">Jenis Fasilitas</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select name="jenis_fasilitas" class="form-control" required>
                                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['nama_fasilitas'] as $i) : ?>
                                                                                    <option value="<?= $i['nama_fasilitas'] ?>"><?php echo $i['nama_fasilitas'] ?></option>
                                                                                <?php endforeach; ?>
                                                                                <!-- <option>HGB</option>
                                                        <option>HAK MILIK</option> -->
                                                                                <!-- <option>LAINNYA</option> -->
                                                                            </select>
                                                                            <label class="mt-2 mb-2">Plafond (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                                            <input type="text" id="1" class="form-control plafond" name="plafond" onkeypress="return hanyaAngka(event)" required />
                                                                            <label class="mt-2 mb-2">Bakidebet (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                                            <input type="text" id="1" class="form-control bakidebet" name="bakidebet" onkeypress="return hanyaAngka(event)" required />
                                                                            <label class="mt-2 mb-2">Kolektibilitas</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select name="kolektibilitas" class="form-control" required>
                                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                            </select>
                                                                            <label class="mt-2 mb-2">Jangka Waktu</label><span class="ml-1" style="color:red;">*</span>
                                                                            <div class="row">
                                                                                <div class="col ">
                                                                                    <input type="text" name="waktu_awal" class="form-control date" placeholder="dd/mm/yyyy" required>
                                                                                </div>
                                                                                <div class="col col-1 text-center">
                                                                                    <p>-</p>
                                                                                </div>

                                                                                <div class="col">
                                                                                    <input type="text" name="waktu_akhir" class="form-control date" placeholder="dd/mm/yyyy" required>
                                                                                </div>

                                                                            </div>
                                                                            <label class="mt-2 mb-2">Suka Bunga % </label>
                                                                            <input type="text" class="form-control" id="suku_bunga" name="suku_bunga" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                                <div class="">

                                                                    <div class="">
                                                                        <div class="form-group">
                                                                            <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                                            <select name="jenis_jaminan" class="form-control">
                                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['nama_jaminan'] as $i) : ?>
                                                                                    <option value="<?= $i['nama_jaminan'] ?>"><?php echo $i['nama_jaminan'] ?></option>
                                                                                <?php endforeach; ?>

                                                                            </select>
                                                                            <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                                            <input type="text" id="nilai_jaminan" class="form-control nilai_jaminan" onkeypress="return hanyaAngka(event)" name="nilai_jaminan" />
                                                                            <label class="mt-2 mb-2">Pemilik Jaminan </label>
                                                                            <input type="text" id="2" class="form-control" name="pemilik_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                                            <label class="mt-2 mb-2">Alamat Jaminan</label>
                                                                            <input type="text" id="2" class="form-control" name="alamat_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                                            <label class="mt-2 mb-2">Pengikatan </label>
                                                                            <select name="pengikatan" class="form-control">
                                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['nama_pengikatan'] as $i) : ?>
                                                                                    <option data-subtext='<?= $i['nama_pengikatan'] ?>' value="<?= $i['nama_pengikatan'] ?>"><?php echo $i['nama_pengikatan'] ?></option>
                                                                                <?php endforeach; ?>

                                                                            </select>
                                                                            <label class="mt-2 mb-2">Keterangan</label>

                                                                            <textarea name="keterangan" class="form-control h-25" rows="4" placeholder="" oninput="this.value = this.value.toUpperCase()"></textarea>



                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3 mb-3 d-flex justify-content-between ">
                                                            <div>
                                                                <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                                                                <button type="reset" class="btn btn-secondary btn-lg">Batal</button>
                                                            </div>



                                                        </div>

                                                    </form>





                                                    <div class="table-responsive mt-5">
                                                        <table id="example1" class="table table-striped table-hover first display nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">
                                                                        Aksi
                                                                    </th>
                                                                    <th>
                                                                        Nama Bank
                                                                    </th>

                                                                    <th>
                                                                        Jenis Fasilitas
                                                                    </th>
                                                                    <th>
                                                                        Plafond
                                                                    </th>
                                                                    <th>
                                                                        Bakidebet
                                                                    </th>
                                                                    <th>
                                                                        Kolektibilitas
                                                                    </th>

                                                                    <th>
                                                                        Jangka Waktu
                                                                    </th>
                                                                    <th>
                                                                        Suku Bunga
                                                                    </th>
                                                                    <th>
                                                                        Jenis Jaminan
                                                                    </th>
                                                                    <th>
                                                                        Nilai Jaminan
                                                                    </th>
                                                                    <th>
                                                                        Pemilik Jaminan
                                                                    </th>
                                                                    <th>
                                                                        Alamat Jaminan
                                                                    </th>
                                                                    <th>
                                                                        Pengikatan
                                                                    </th>
                                                                    <th>
                                                                        Keterangan
                                                                    </th>


                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                <?php $a = 1;
                                                                foreach ($data['get_daftar_slik_pemohon_where_no_req'] as $row) : ?>
                                                                    <tr>

                                                                        <td>

                                                                            <a href="<?= BASEURL; ?>/slik/edit_data_slik_pemohon/<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] . '-' . $row['id'] ?>" class="btn btn-primary btn-m">Edit</a>


                                                                            <!-- <a onclick="hapus_pemohon_slik(event); return false" href="<?= BASEURL; ?>/slik/hapus_pemohon_slik/<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] . '-' . $row['id'] ?>" class="btn btn-danger btn-m ">Hapus</a> -->
                                                                            <button class="btn btn-danger btn-m btn_hapus_slik_pemohon_id" data-no_permohonan_kredit='<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>' data-nama_pemohon='<?= $data['get_data_cs_where_no_req']['nama_pemohon'] ?>' data-id='<?= $row['id'] ?>'>Hapus</button>

                                                                        </td>

                                                                        <td><?= $row['nama_bank'] ?></td>
                                                                        <td><?= $row['jenis_fasilitas'] ?></td>
                                                                        <td><?= number_format($row['plafond'], 0, ",", ".");   ?></td>
                                                                        <td><?= number_format($row['bakidebet'], 0, ",", ".");  ?></td>
                                                                        <td><?= $row['kolektibilitas'] ?></td>
                                                                        <td><?= date("d-m-Y", strtotime($row['waktu_awal'])) . ' s/d ' . date("d-m-Y", strtotime($row['waktu_akhir'])) ?></td>
                                                                        <td><?= $row['suku_bunga'] ?></td>
                                                                        <td><?= $row['jenis_jaminan'] ?></td>
                                                                        <td><?= number_format($row['nilai_jaminan'], 0, ",", ".");  ?></td>
                                                                        <td><?= $row['pemilik_jaminan'] ?></td>
                                                                        <td><?= $row['alamat_jaminan'] ?></td>
                                                                        <td><?= $row['pengikatan'] ?></td>
                                                                        <td><?= $row['keterangan'] ?></td>


                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>



                                                </div>

                                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <div class="row mt-2">
                                                        <div class="col-lg-6">

                                                            <table class="table-hover" cellpadding=5 cellspacing=15>

                                                                <tr>
                                                                    <td>Nama Pasangan</td>
                                                                    <td>:</td>

                                                                    <td id="65"><?= $data['get_data_cs_where_no_req']['nama_pasangan'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Instansi Pasangan</td>
                                                                    <td>:</td>
                                                                    <td id="66"><?= $data['get_data_cs_where_no_req']['nama_instansi_pasangan'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>No. KTP Pasangan</td>
                                                                    <td>:</td>
                                                                    <td id="67"><?= $data['get_data_cs_where_no_req']['no_ktp_pasangan'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tempat Tanggal Lahir</td>
                                                                    <td>:</td>
                                                                    <td> <?= isset($data['get_data_cs_where_no_req']['tgl_lahir_pasangan']) ? $data['get_data_cs_where_no_req']['tempat_lahir_pasangan'] . ', ' . date("d F Y", strtotime($data['get_data_cs_where_no_req']['tgl_lahir_pasangan'])) : "" ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alamat KTP Pasangan</td>
                                                                    <td>:</td>
                                                                    <td id="67"><?= $data['get_data_cs_where_no_req']['alamat_ktp_pasangan'] ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Alamat Saat Ini Pasangan</td>
                                                                    <td>:</td>
                                                                    <td id="67"><?= $data['get_data_cs_where_no_req']['alamat_sekarang_pasangan'] ?></td>
                                                                </tr>

                                                            </table>
                                                        </div>


                                                        <?php
                                                        if ($data['get_data_cs_where_no_req']['status_perkawinan'] == "MENIKAH") {
                                                        ?>

                                                            <div class="col-lg-6">
                                                                <form action="<?= BASEURL; ?>/slik2/upload_data_slik" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" class="ktp_pasangan2" name="ktp2">
                                                                    <input type="hidden" name="nama_pemohon" value="<?= $data['get_data_cs_where_no_req']['nama_pemohon'] ?>">
                                                                    <input type="hidden" value="<?= $data['get_data_cs_where_no_req']['no_ktp_pasangan'] ?>" name="ktp3">
                                                                    <input type="hidden" name="no_permohonan_kredit" value="<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>">
                                                                    <div>
                                                                        <label class="btn btn-success custom-file-button">
                                                                            <i class="fas fa-file-import mr-2"></i>
                                                                            Import File SLIK Pasangan
                                                                            <input type="file" name="fileToUpload" id="fileToUpload2" class="d-none" onchange="fileSelected2()">
                                                                        </label>
                                                                    </div>
                                                                    <div id="selectedFileName2" class="mt-2"></div>
                                                                    <div id="uploadButton2" style="display: none;">
                                                                        <button type="submit" name="submit" value="btn_upload_file_slik_pasangan" class="btn btn-primary mt-2">
                                                                            <i class="fas fa-upload mr-2"></i>
                                                                            Upload File
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        <?php } ?>




                                                    </div>






                                                    <form id="form_slik_simpan_data_pasangan" action="<?= BASEURL; ?>/slik/simpan_slik_pasangan" method="POST">
                                                        <input type="hidden" name="no_permohonan_kredit" value="<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>">
                                                        <div class="row mt-3">
                                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                                <div class="">
                                                                    <div class="">
                                                                        <div class="form-group">
                                                                            <div class="validate-error"></div>
                                                                            <input type="hidden" name='nama_pemohon' value="<?= $data['get_data_cs_where_no_req']['nama_pemohon'] ?>">
                                                                            <input type="hidden" name="no_permohonan_kredit" value="<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>">

                                                                            <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama Bank</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select name="nama_bank" class="form-control select2bs4" required>
                                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['nama_bank'] as $i) : ?>
                                                                                    <option value="<?= $i['nama_bank'] ?>"><?php echo $i['nama_bank'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                            <label class="mt-2 mb-2">Jenis Fasilitas</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select name="jenis_fasilitas" class="form-control" required>
                                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['nama_fasilitas'] as $i) : ?>
                                                                                    <option value="<?= $i['nama_fasilitas'] ?>"><?php echo $i['nama_fasilitas'] ?></option>
                                                                                <?php endforeach; ?>
                                                                                <!-- <option>LAINNYA</option> -->
                                                                            </select>
                                                                            <label class="mt-2 mb-2">Plafond (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                                            <input type="text" id="1" class="form-control plafond_pasangan" name="plafond" onkeypress="return hanyaAngka(event)" required />
                                                                            <label class="mt-2 mb-2">Bakidebet (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                                            <input type="text" id="1" class="form-control bakidebet_pasangan" name="bakidebet" onkeypress="return hanyaAngka(event)" required />
                                                                            <label class="mt-2 mb-2">Kolektibilitas</label><span class="ml-1" style="color:red;">*</span>
                                                                            <select name="kolektibilitas" class="form-control" required>
                                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                            </select>



                                                                            <label class="mt-2 mb-2">Jangka Waktu</label><span class="ml-1" style="color:red;">*</span>
                                                                            <div class="row">
                                                                                <div class="col ">
                                                                                    <input type="text" name="waktu_awal" class="form-control date" placeholder="dd/mm/yyyy" required>

                                                                                </div>
                                                                                <div class="col col-1 text-center">
                                                                                    <span>-</span>
                                                                                </div>

                                                                                <div class="col">
                                                                                    <input type="text" name="waktu_akhir" class="form-control date" placeholder="dd/mm/yyyy" required>
                                                                                </div>

                                                                            </div>
                                                                            <label class="mt-2 mb-2">Suka Bunga % </label>
                                                                            <input type="text" class="form-control" id="suku_bunga" name="suku_bunga" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                                <div class="">
                                                                    <div class="">
                                                                        <div class="form-group">
                                                                            <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                                            <select name="jenis_jaminan" class="form-control">
                                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['nama_jaminan'] as $i) : ?>
                                                                                    <option value="<?= $i['nama_jaminan'] ?>"><?php echo $i['nama_jaminan'] ?></option>
                                                                                <?php endforeach; ?>
                                                                                <!-- <option>LAINNYA</option> -->
                                                                            </select>
                                                                            <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                                            <input type="text" id="nilai_jaminan" class="form-control nilai_jaminan_pasangan" name="nilai_jaminan" onkeypress="return hanyaAngka(event)" />
                                                                            <label class="mt-2 mb-2">Pemilik Jaminan </label>
                                                                            <input type="text" id="2" class="form-control" name="pemilik_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                                            <label class="mt-2 mb-2">Alamat Jaminan</label>
                                                                            <input type="text" id="2" class="form-control" name="alamat_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                                            <label class="mt-2 mb-2">Pengikatan </label>
                                                                            <select name="pengikatan" class="form-control">
                                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                                <?php foreach ($data['nama_pengikatan'] as $i) : ?>
                                                                                    <option value="<?= $i['nama_pengikatan'] ?>"><?php echo $i['nama_pengikatan'] ?></option>
                                                                                <?php endforeach; ?>
                                                                                <!-- <option>LAINNYA</option> -->
                                                                            </select>
                                                                            <label class="mt-2 mb-2">Keterangan</label>
                                                                            <textarea name="keterangan" class="form-control h-25" rows="4" placeholder="" oninput="this.value = this.value.toUpperCase()"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 mb-3 d-flex justify-content-between ">
                                                            <div>
                                                                <?php

                                                                if ($data['get_data_cs_where_no_req']['status_perkawinan'] == "MENIKAH") :
                                                                    echo '<button type="submit" class="btn btn-primary btn-lg">Simpan</button>';

                                                                else :
                                                                    echo ' <button type="submit" class="btn btn-primary btn-lg" disabled>Simpan</button>';


                                                                endif;

                                                                ?>

                                                                <button type="reset" class="btn btn-secondary btn-lg">Batal</button>
                                                            </div>

                                                        </div>
                                                    </form>

                                                    <div class="table-responsive mt-5">
                                                        <table id="example2" class="table table-striped table-hover first display nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Aksi
                                                                    </th>
                                                                    <th>
                                                                        Nama Bank
                                                                    </th>

                                                                    <th>
                                                                        Jenis Fasilitas
                                                                    </th>
                                                                    <th>
                                                                        Plafond
                                                                    </th>
                                                                    <th>
                                                                        Bakidebet
                                                                    </th>
                                                                    <th>
                                                                        Kolektibilitas
                                                                    </th>

                                                                    <th>
                                                                        Jangka Waktu
                                                                    </th>
                                                                    <th>
                                                                        Suku Bunga
                                                                    </th>
                                                                    <th>
                                                                        Jenis Jaminan
                                                                    </th>
                                                                    <th>
                                                                        Nilai Jaminan
                                                                    </th>
                                                                    <th>
                                                                        Pemilik Jaminan
                                                                    </th>
                                                                    <th>
                                                                        Alamat Jaminan
                                                                    </th>
                                                                    <th>
                                                                        Pengikatan
                                                                    </th>
                                                                    <th>
                                                                        Keterangan
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                <?php $a = 1;
                                                                foreach ($data['get_daftar_slik_pasangan_where_no_req'] as $row) : ?>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="<?= BASEURL; ?>/slik/edit_data_slik_pasangan/<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] . '-' . $row['id'] ?>" class="btn btn-primary btn-m">Edit</a>
                                                                            <!-- <a onclick="hapus_pasangan_slik(event); return false" href="<?= BASEURL; ?>/slik/hapus_pasangan_slik/<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] . '-' . $row['id'] ?>" class="btn btn-danger btn-m ">Hapus</a> -->
                                                                            <button class="btn btn-danger btn-m btn_hapus_slik_pasangan_id" data-no_permohonan_kredit='<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>' data-nama_pemohon='<?= $data['get_data_cs_where_no_req']['nama_pemohon'] ?>' data-id='<?= $row['id'] ?>'>Hapus</button>
                                                                        </td>
                                                                        <td><?= $row['nama_bank'] ?></td>
                                                                        <td><?= $row['jenis_fasilitas'] ?></td>
                                                                        <td><?= number_format($row['plafond'], 0, ",", ".");   ?></td>
                                                                        <td><?= number_format($row['bakidebet'], 0, ",", ".");  ?></td>
                                                                        <td><?= $row['kolektibilitas'] ?></td>
                                                                        <td><?= date("d-m-Y", strtotime($row['waktu_awal'])) . ' s/d ' . date("d-m-Y", strtotime($row['waktu_akhir'])) ?></td>
                                                                        <td><?= $row['suku_bunga'] ?></td>
                                                                        <td><?= $row['jenis_jaminan'] ?></td>
                                                                        <td><?= number_format($row['nilai_jaminan'], 0, ",", ".");  ?></td>
                                                                        <td><?= $row['pemilik_jaminan'] ?></td>
                                                                        <td><?= $row['alamat_jaminan'] ?></td>
                                                                        <td><?= $row['pengikatan'] ?></td>
                                                                        <td><?= $row['keterangan'] ?></td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">




                                                    <div class="vertical-center">

                                                        <div class="container">
                                                            <div class="text-center mt-4">
                                                                <?php

                                                                if (($data['get_jumlah_data_slik_pemohon'] == 0) && ($data['get_jumlah_data_slik_pasangan'] == 0)) :
                                                                ?>
                                                                    <?php
                                                                    if (($data['get_data_cs_where_no_req']['tanggal_slik'] != "")) :
                                                                    ?>
                                                                        <!-- <p>Jika Data SLIK Tidak Ditemukan Silahkan Klik Di Bawah Ini</p>
                                                                        <a onclick="return false" id="btn_data_tidak_ditemukan" class="btn btn-info" href="<?= BASEURL; ?>/slik/slik_pemohon_tidak_ditemukan/<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>">Data SLIK Tidak Ditemukan</a> -->

                                                                    <?php else : ?>
                                                                        <p>Jika Data SLIK Tidak Ditemukan Silahkan Klik Di Bawah Ini</p>
                                                                        <!-- <a onclick="btn_data_tidak_ditemukan(event); return false" id="btn_data_tidak_ditemukan" class="btn btn-danger btn-lg" href="#">Data SLIK Tidak Ditemukan</a> -->
                                                                        <button class="btn btn-danger btn-lg btn_slik_tidak_ditemukan" data-nama_pemohon='<?= $data['get_data_cs_where_no_req']['nama_pemohon'] ?>' data-no_permohonan_kredit='<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>'> Data SLIK Tidak Ditemukan</button>
                                                                    <?php endif ?>
                                                                <?php
                                                                elseif (($data['get_data_cs_where_no_req']['tanggal_slik'] != "")) :

                                                                ?>
                                                                    <!-- <p>Jika Data SLIK Tidak Ditemukan Silahkan Klik Di Bawah Ini</p>
                                                                    <a onclick="return false" id="btn_data_tidak_ditemukan" class="btn btn-info" href="<?= BASEURL; ?>/slik/slik_pemohon_tidak_ditemukan/<?= $data['get_data_cs_where_no_req']['no_permohonan_kredit'] ?>">Data SLIK Tidak Ditemukan</a> -->


                                                                <?php
                                                                endif
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12 d-flex justify-content-center">


                                                        <div class="">
                                                            <div class="">
                                                                <div class="form-group">

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



            <div class="modal fade" id="modal_btn_lihatfile" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h1 class="h4 "><strong>Berkas Identitas</strong></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal_detail">

                            <div class="row" id="imageContainer"></div>

                        </div>
                    </div>
                </div>
            </div>





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
    <!-- jquery untuk mask tanggal -->
    <script src="<?= BASEURL ?>/assets/plugins/jquery/jquery.mask.min.js"></script>
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

    <!-- handlde select  -->
    <script src="<?= BASEURL ?>/assets/plugins/select2/js/select2.full.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="<?= BASEURL ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="<?= BASEURL ?>/assets/plugins/moment/moment.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/inputmask/jquery.inputmask.min.js"></script>

    <script src="https://unpkg.com/panzoom@7.1.0/dist/panzoom.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script> -->


    <!-- fungsi untuk aktigkan format datatables -->
    <script>
        $(function() {
            $("#example1").DataTable({})

            $("#example2").DataTable({})

            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });
    </script>


    <script>
        $(document).on('click', '#btn_lihatfile', function() {
            var no_permohonan_kredit = $(this).data("no_permohonan_kredit");

            getfile(no_permohonan_kredit)
            $("#modal_btn_lihatfile").modal('show')
        })
    </script>



    <script>
        function getfile(no_permohonan_kredit) {

            // console.log(no_permohonan_kredit)
            // Ganti URL dengan URL API Laravel Anda
            var apiUrl = "<?= BASEURL ?>/lihatktp/show/" + no_permohonan_kredit; // Ganti dengan nomor permohonan atau nomor KTP yang sesuai

            $("#imageContainer").empty();
            // Lakukan permintaan AJAX
            $.ajax({
                url: apiUrl, // Gantilah dengan URL JSON Anda
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Loop melalui setiap path gambar dalam JSON

                    data.data.forEach(function(imagePath) {
                        // Buat elemen card dengan menggunakan Bootstrap
                        var card = $('<div>').addClass('col-6 mb-4');
                        var cardBody = $('<div>').addClass('card-body');
                        console.log(imagePath)
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
        function fileSelected1() {
            const input = document.getElementById('fileToUpload');
            const fileNameDisplay = document.getElementById('selectedFileName');
            const uploadButton = document.getElementById('uploadButton');

            if (input.files.length > 0) {
                fileNameDisplay.textContent = 'Selected file: ' + input.files[0].name;
                var no_ktp = input.files[0].name.split('_');
                var ktp_fix = no_ktp[1].split('.');

                var ktp2 = "<?= $data['get_data_cs_where_no_req']['no_ktp_pemohon'] ?>"

                $(".ktp2").val(ktp_fix[0]);

                uploadButton.style.display = 'block';
            } else {
                fileNameDisplay.textContent = '';
                uploadButton.style.display = 'none';
            }
        }


        function fileSelected2() {
            const input = document.getElementById('fileToUpload2');
            const fileNameDisplay = document.getElementById('selectedFileName2');
            const uploadButton = document.getElementById('uploadButton2');

            if (input.files.length > 0) {
                fileNameDisplay.textContent = 'Selected file: ' + input.files[0].name;

                var no_ktp = input.files[0].name.split('_');
                var ktp_fix = no_ktp[1].split('.');

                var ktp2 = "<?= $data['get_data_cs_where_no_req']['no_ktp_pemohon'] ?>"

                $(".ktp_pasangan2").val(ktp_fix[0]);
                uploadButton.style.display = 'block';
            } else {
                fileNameDisplay.textContent = '';
                uploadButton.style.display = 'none';
            }
        }
    </script>


    <!-- handel date -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
        });
    </script>

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



    <!-- ATUR TAB TETAP AKTIF PADA POSISI TERAKHIR -->
    <script>
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            console.log("tab shown...");
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });

        // read hash from page load and change tab
        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
        }
    </script>




    <!-- fungsi ubah input angka dalam pecahan ribuan -->
    <script>
        var plafond = $('.plafond');
        var baki_debet = $('.bakidebet');
        var nilai_jaminan = $('.nilai_jaminan');
        plafond.keyup(function(e) {
            plafond.val(ubah_input(plafond.val().toString()))
        })
        baki_debet.keyup(function(e) {
            baki_debet.val(ubah_input(baki_debet.val().toString()))
        })
        nilai_jaminan.keyup(function(e) {
            nilai_jaminan.val(ubah_input(nilai_jaminan.val().toString()))
        })




        var plafond_pasangan = $('.plafond_pasangan');
        var baki_debet_pasangan = $('.bakidebet_pasangan');
        var nilai_jaminan_pasangan = $('.nilai_jaminan_pasangan');
        plafond_pasangan.keyup(function(e) {
            plafond_pasangan.val(ubah_input(plafond_pasangan.val().toString()))
        })
        baki_debet_pasangan.keyup(function(e) {
            baki_debet_pasangan.val(ubah_input(baki_debet_pasangan.val().toString()))
        })
        nilai_jaminan_pasangan.keyup(function(e) {
            nilai_jaminan_pasangan.val(ubah_input(nilai_jaminan_pasangan.val().toString()))
        })
    </script>
    <!-- fungsi agar inputan hanya angka -->
    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>



    <!-- fungsi ubah input tambahkan titik jika yang di input sudah menjadi angka ribuan -->
    <script>
        function ubah_input(angka, prefix) {
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
    </script>





    <!-- prose jika data slik tidak ditemukan -->

    <script>
        $(document).ready(function() {
            $('.btn_slik_tidak_ditemukan').on('click', function(e) {
                var no_permohonan_kredit = $(this).data('no_permohonan_kredit')
                var nama_pemohon = $(this).data('nama_pemohon')


                Swal.fire({
                    title: "Anda yakin data SLIK tidak ditemukan?",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Ya",
                    cancelButtonText: "Batal",
                    showLoaderOnConfirm: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'post',
                            url: '<?= BASEURL . '/slik/slik_pemohon_tidak_ditemukan' ?>',
                            data: {
                                'no_permohonan_kredit': no_permohonan_kredit,
                                'nama_pemohon': nama_pemohon
                            },
                            success: function(res) {

                                if (res.trim() == 'sukses') {
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: 'Data berhasil disimpan',
                                        showConfirmButton: false,
                                        timer: 1000
                                    }).then((ok) => {
                                        location.href = "<?= BASEURL ?>/slik/daftar_sudah_slik";
                                    })

                                } else if (res.trim() == 'gagal') {

                                    Swal.fire({
                                        position: 'center',
                                        icon: 'warning',
                                        title: 'error',
                                        showConfirmButton: false,
                                        timer: 1000
                                    }).then((ok) => {
                                        location.href = "<?= BASEURL ?>/slik/daftar_sudah_slik";
                                    })

                                }
                            }
                        })
                    }
                })
            })
        })
    </script>


    <!-- hapus slik pemohon where id -->
    <script>
        $(document).ready(function() {

            // bagian disable tombol button hapus
            $('.btn_hapus_slik_pasangan_id').prop('disabled', true);
            $('.btn_hapus_slik_pemohon_id').prop('disabled', true);

            $('.btn_hapus_slik_pemohon_id').on('click', function(e) {
                var no_permohonan_kredit = $(this).data('no_permohonan_kredit')
                var nama_pemohon = $(this).data('nama_pemohon')
                var id = $(this).data('id')
                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/slik/hapus_pemohon_slik' ?>',
                    data: {
                        'no_permohonan_kredit': no_permohonan_kredit,
                        'nama_pemohon': nama_pemohon,
                        'id': id
                    },
                    success: function(res) {

                        if (res.trim() == 'sukses') {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Data berhasil dihapus',
                                showConfirmButton: false,
                                timer: 1000
                            }).then((ok) => {
                                location.href = "<?= BASEURL ?>/slik/input_data_slik/" + no_permohonan_kredit;
                            })

                        } else if (res.trim() == 'gagal') {

                            Swal.fire({
                                position: 'center',
                                icon: 'warning',
                                title: 'error',
                                showConfirmButton: false,
                                timer: 1000
                            }).then((ok) => {
                                location.href = "<?= BASEURL ?>/slik/input_data_slik/" + no_permohonan_kredit;
                            })

                        } else {
                            location.href = "<?= BASEURL ?>/slik/input_data_slik/" + no_permohonan_kredit;
                        }


                        console.log(res)
                    }
                })
            })
        })
    </script>



    <!-- hapus slik pasangan where id -->
    <script>
        $(document).ready(function() {
            $('.btn_hapus_slik_pasangan_id').on('click', function(e) {
                var no_permohonan_kredit = $(this).data('no_permohonan_kredit')
                var nama_pemohon = $(this).data('nama_pemohon')
                var id = $(this).data('id')
                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/slik/hapus_pasangan_slik' ?>',
                    data: {
                        'no_permohonan_kredit': no_permohonan_kredit,
                        'nama_pemohon': nama_pemohon,
                        'id': id
                    },
                    success: function(res) {

                        if (res.trim() == 'sukses') {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Data berhasil dihapus',
                                showConfirmButton: false,
                                timer: 1000
                            }).then((ok) => {
                                location.href = "<?= BASEURL ?>/slik/input_data_slik/" + no_permohonan_kredit;
                            })

                        } else if (res.trim() == 'gagal') {

                            Swal.fire({
                                position: 'center',
                                icon: 'warning',
                                title: 'error',
                                showConfirmButton: false,
                                timer: 1000
                            }).then((ok) => {
                                location.href = "<?= BASEURL ?>/slik/input_data_slik/" + no_permohonan_kredit;
                            })

                        } else {
                            location.href = "<?= BASEURL ?>/slik/input_data_slik/" + no_permohonan_kredit;
                        }


                        console.log(res)
                    }
                })
            })
        })
    </script>







    <!-- <button class='btn btn-danger btn-sm' data-no_permohonan_kredit="<?= $i['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $i['nama_pemohon'] ?>">Hapus</button> -->



</body>

</html>