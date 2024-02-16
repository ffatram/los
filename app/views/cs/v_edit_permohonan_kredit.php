<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Permohonan Kredit</title>

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
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">



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
                            <h1 class="m-0">Edit Permohonan Kredit</h1>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- container fluid -->
                <div class="container-fluid">




                    <form id="form_cs_edit_data_kredit" id="form_update" action="<?= BASEURL; ?>/cs/update" method="POST">
                        <main class="content">
                            <div class="container-fluid p-0">
                                <div class="row ">
                                    <div class="col-12 col-lg-6 col-xxl-6 ">
                                        <div class="card flex-fill">
                                            <div class="card-header">
                                                <h1 class="h4 mb-0"><strong>Data Pemohon</strong></h1>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="validate-error"></div>
                                                    <input type="text" class="form-control" name="no_permohonan_kredit" value="<?= $data['data_kredit']['no_permohonan_kredit'] ?>" readonly />
                                                    <label class="mt-2 mb-2">Nama Pemohon</label><span class="ml-1" style="color:red;">*</span>
                                                    <input type="text" class="form-control" onkeypress="return hanyaHuruf(event)" name="nama_pemohon" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['nama_pemohon'] ?>" required />
                                                    <label class="mt-2 mb-2">Tempat Lahir</label><span class="ml-1" style="color:red;">*</span>
                                                    <input type="text" class="form-control" name="tempat_lahir_pemohon" required oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['tempat_lahir_pemohon'] ?>" />
                                                    <label class="mt-2 mb-2">Tanggal Lahir</label><span class="ml-1" style="color:red;">*</span>
                                                    <!-- fungsi untuk rombak tampilan tanggal di date mask -->
                                                    <?php
                                                    $a  = $data['data_kredit']['tgl_lahir_pemohon'];
                                                    $b = explode("-", $a);
                                                    $data['data_kredit']['tgl_lahir_pemohon'] = $b[2] . '-' . $b[1]  . '-' . $b[0];
                                                    ?>
                                                    <input type="text" class="form-control date" name="tgl_lahir_pemohon" placeholder="dd/mm/yyyy" value="<?= $data['data_kredit']['tgl_lahir_pemohon'] ?>" required />


                                                    <label class="mt-2 mb-2">Jenis Kelamin</label><span class="ml-1" style="color:red;">*</span>
                                                    <select name="jenis_kelamin_pemohon" class="form-control" required>
                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                        <option value="PRIA" <?= "PRIA" == $data['data_kredit']['jenis_kelamin_pemohon'] ? 'selected="selected"' : ''; ?>><?= "PRIA" ?></option>
                                                        <option value="WANITA" <?= "WANITA" == $data['data_kredit']['jenis_kelamin_pemohon'] ? 'selected="selected"' : ''; ?>><?= "WANITA" ?></option>

                                                    </select>

                                                    <label class="mt-2 mb-2">Nama Ibu Kandung</label>
                                                    <input type="text" class="form-control" onkeypress="return hanyaHuruf(event)" name="nama_ibu_kandung_pemohon" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['nama_ibu_kandung_pemohon'] ?>" />
                                                    <label class="mt-2 mb-2">No. KTP</label><span class="ml-1" style="color:red;">*</span>
                                                    <input type="text" class="form-control" name="no_ktp_pemohon" onkeypress="return hanyaAngka(event)" maxlength="16" value="<?= $data['data_kredit']['no_ktp_pemohon'] ?>" required />
                                                    <label class="mt-2 mb-2">NPWP</label>
                                                    <input type="text" class="form-control" name="npwp_pemohon" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['npwp_pemohon'] ?>" />
                                                    <label class="mt-2 mb-2">Alamat (Sesuai KTP)</label><span class="ml-1" style="color:red;">*</span>
                                                    <input type="text" class="form-control" name="alamat_ktp_pemohon" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['alamat_ktp_pemohon'] ?>" required />
                                                    <label class="mt-2 mb-2">Alamat Sekarang</label><span class="ml-1" style="color:red;">*</span>
                                                    <input type="text" class="form-control" name="alamat_sekarang_pemohon" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['alamat_sekarang_pemohon'] ?>" required />
                                                    <label class="mt-2 mb-2">Telepon</label><span class="ml-1" style="color:red;">*</span>
                                                    <input type="text" class="form-control" name="telepon_pemohon" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['telepon_pemohon'] ?>" required />
                                                    <label class="mt-2 mb-2">Email</label>
                                                    <input type="text" class="form-control" name="media_sosial" value="<?= $data['data_kredit']['media_sosial'] ?>" />

                                                    <label class="mt-2 mb-2">Status Kepemilikan Rumah</label>
                                                    <select name="status_kepemilikan_rumah_pemohon" class="form-control">
                                                        <option value="" selected>- Silahkan Pilih -</option>
                                                        <option value="PRIBADI" <?= "PRIBADI" == $data['data_kredit']['status_kepemilikan_rumah_pemohon'] ? 'selected="selected"' : ''; ?>><?= "PRIBADI" ?></option>
                                                        <option value="KELUARGA" <?= "KELUARGA" == $data['data_kredit']['status_kepemilikan_rumah_pemohon'] ? 'selected="selected"' : ''; ?>><?= "KELUARGA" ?></option>
                                                        <option value="DINAS" <?= "DINAS" == $data['data_kredit']['status_kepemilikan_rumah_pemohon'] ? 'selected="selected"' : ''; ?>><?= "DINAS" ?></option>
                                                        <option value="SEWA" <?= "SEWA" == $data['data_kredit']['status_kepemilikan_rumah_pemohon'] ? 'selected="selected"' : ''; ?>><?= "SEWA" ?></option>
                                                        <option value="KOST" <?= "KOST" == $data['data_kredit']['status_kepemilikan_rumah_pemohon'] ? 'selected="selected"' : ''; ?>><?= "KOST" ?></option>
                                                        <option value="LAINNYA" <?= "LAINNYA" == $data['data_kredit']['status_kepemilikan_rumah_pemohon'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option>
                                                    </select>

                                                    <label class="mt-2 mb-2">Pendidikan Terakhir</label>
                                                    <select name="pendidikan_terakhir_pemohon" class="form-control">
                                                        <option value="" selected>- Silahkan Pilih -</option>
                                                        <option value="SD" <?= "SD" == $data['data_kredit']['pendidikan_terakhir_pemohon'] ? 'selected="selected"' : ''; ?>><?= "SD" ?></option>
                                                        <option value="SMP" <?= "SMP" == $data['data_kredit']['pendidikan_terakhir_pemohon'] ? 'selected="selected"' : ''; ?>><?= "SMP" ?></option>
                                                        <option value="SMA" <?= "SMA" == $data['data_kredit']['pendidikan_terakhir_pemohon'] ? 'selected="selected"' : ''; ?>><?= "SMA" ?></option>
                                                        <option value="D3" <?= "D3" == $data['data_kredit']['pendidikan_terakhir_pemohon'] ? 'selected="selected"' : ''; ?>><?= "D3" ?></option>
                                                        <option value="S1" <?= "S1" == $data['data_kredit']['pendidikan_terakhir_pemohon'] ? 'selected="selected"' : ''; ?>><?= "S1" ?></option>
                                                        <option value="S2" <?= "S2" == $data['data_kredit']['pendidikan_terakhir_pemohon'] ? 'selected="selected"' : ''; ?>><?= "S2" ?></option>
                                                        <option value="S3" <?= "S3" == $data['data_kredit']['pendidikan_terakhir_pemohon'] ? 'selected="selected"' : ''; ?>><?= "S3" ?></option>
                                                        <option value="LAINNYA" <?= "LAINNYA" == $data['data_kredit']['pendidikan_terakhir_pemohon'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option>
                                                    </select>

                                                    <label class="mt-2 mb-2">Gelar</label>
                                                    <input type="text" class="form-control" name="gelar_pemohon" value="<?= $data['data_kredit']['gelar_pemohon'] ?>" />


                                                    <label class="mt-2 mb-2">Status Perkawinan</label><span class="ml-1" style="color:red;">*</span>
                                                    <select name="status_perkawinan" class="form-control status_perkawinan" required>
                                                        <option value="" selected>- Silahkan Pilih -</option>
                                                        <option value="BELUM MENIKAH" <?= "BELUM MENIKAH" == $data['data_kredit']['status_perkawinan'] ? 'selected="selected"' : ''; ?>><?= "BELUM MENIKAH" ?></option>
                                                        <option value="MENIKAH" <?= "MENIKAH" == $data['data_kredit']['status_perkawinan'] ? 'selected="selected"' : ''; ?>><?= "MENIKAH" ?></option>
                                                        <option value="DUDA" <?= "DUDA" == $data['data_kredit']['status_perkawinan'] ? 'selected="selected"' : ''; ?>><?= "DUDA" ?></option>
                                                        <option value="JANDA" <?= "JANDA" == $data['data_kredit']['status_perkawinan'] ? 'selected="selected"' : ''; ?>><?= "JANDA" ?></option>
                                                    </select>

                                                    <label class="mt-2 mb-2">Jumlah Tanggungan (Orang)</label>
                                                    <input type="text" class="form-control" name="jumlah_tanggungan" value="<?= $data['data_kredit']['jumlah_tanggungan'] ?>" />
                                                    <br>
                                                    <label class="mt-2 mb-2">Keluarga tidak serumah yang dapat dihubungi atau teman :</label>
                                                    <br>
                                                    <label class="mt-2 mb-2">Nama</label>
                                                    <input type="text" class="form-control" onkeypress="return hanyaHuruf(event)" name="nama_keluarga_dapat_dihubungi" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['nama_keluarga_dapat_dihubungi'] ?>" />
                                                    <label class="mt-2 mb-2">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat_keluarga_dapat_dihubungi" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['alamat_keluarga_dapat_dihubungi'] ?>" />
                                                    <label class="mt-2 mb-2">Hubungan</label>
                                                    <input type="text" class="form-control" name="hubungan_keluarga_dapat_dihubungi" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['hubungan_keluarga_dapat_dihubungi'] ?>" />
                                                    <label class="mt-2 mb-2">Telepon/Hp Yang Dapat Dihubungi</label>
                                                    <input type="text" class="form-control" name="telepon_keluarga_dapat_dihubungi" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['telepon_keluarga_dapat_dihubungi'] ?>" />

                                                </div>

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

                                                    <label class="mt-2 mb-2">Jenis Pekerjaan</label><span class="ml-1" style="color:red;">*</span>
                                                    <select name="jenis_pekerjaan" class="form-control" required>
                                                        <option value="" selected>- Silahkan Pilih -</option>
                                                        <?php foreach ($data['jenis_pekerjaan'] as $i) : ?>
                                                            <option value="<?= $i['jenis_pekerjaan'] ?>" <?= $i['jenis_pekerjaan'] == $data['data_kredit']['jenis_pekerjaan'] ? 'selected="selected"' : ''; ?>><?= $i['jenis_pekerjaan'] ?></option>
                                                        <?php endforeach; ?>

                                                    </select>


                                                    <label class="mt-2 mb-2">Kode Instansi</label><span class="ml-1" style="color:red;">*</span>
                                                    <select name="kode_instansi" class="form-control select2bs4 kode_instansi" required>
                                                        <option value="" selected>- Silahkan Pilih -</option>
                                                        <?php foreach ($data['ref_instansi'] as $i) : ?>
                                                            <option value="<?= $i['kode_instansi'] . '##' . $i['nama_instansi'] ?>" <?= $i['kode_instansi'] == $data['data_kredit']['kode_instansi'] ? 'selected="selected"' : ''; ?>><?php echo $i['kode_instansi'] . ' - ' . $i['nama_instansi'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>





                                                    <label class="mt-2 mb-2">Nama Instansi</label><span class="ml-1" style="color:red;">*</span>
                                                    <input type="text" class="form-control nama_instansi" name="nama_instansi" required oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['nama_instansi'] ?>" required />

                                                    <label class="mt-2 mb-2">Alamat Instansi</label>
                                                    <input type="text" class="form-control" name="alamat_instansi" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['alamat_instansi'] ?>" />
                                                    <label class="mt-2 mb-2">Telepon Kantor</label>
                                                    <input type="text" class="form-control" name="telepon_instansi" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['telepon_instansi'] ?>" />
                                                    <label class="mt-2 mb-2">Tahun Mulai Bekerja</label>
                                                    <input type="text" class="form-control" name="tahun_mulai_bekerja" onkeypress="return hanyaAngka(event)" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['tahun_mulai_bekerja'] ?>" />
                                                    <label class="mt-2 mb-2">Jabatan Saat Ini</label>
                                                    <input type="text" class="form-control" name="jabatan_saat_ini" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['jabatan_saat_ini'] ?>" />
                                                    <label class="mt-2 mb-2">Atasan Langsung</label>
                                                    <input type="text" class="form-control" name="atasan_langsung" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['atasan_langsung'] ?>" />
                                                    <label class="mt-2 mb-2">Telp/Hp Bendahara</label>
                                                    <input type="text" class="form-control" name="telepon_bendahara" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['telepon_bendahara'] ?>" />
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
                                                    <label class="mt-2 mb-2">Nama Pasangan </label>
                                                    <input type="text" class="form-control a1" onkeypress="return hanyaHuruf(event)" name="nama_pasangan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['nama_pasangan'] ?>" />
                                                    <label class="mt-2 mb-2">Tempat Lahir Pasangan </label>
                                                    <input type="text" class="form-control a2 " name="tempat_lahir_pasangan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['tempat_lahir_pasangan'] ?>" />
                                                    <label class="mt-2 mb-2">Tanggal Lahir Pasangan</label>
                                                    <!-- fungsi untuk rombak tampilan tanggal di date mask -->
                                                    <?php
                                                    if ($data['data_kredit']['tgl_lahir_pasangan']) {
                                                        $a  = $data['data_kredit']['tgl_lahir_pasangan'];
                                                        $b = explode("-", $a);
                                                        $data['data_kredit']['tgl_lahir_pasangan'] = $b[2] . '-' . $b[1]  . '-' . $b[0];
                                                    }

                                                    ?>
                                                    <input type="text" class="form-control a3 date" name="tgl_lahir_pasangan" placeholder="dd/mm/yyyy" value="<?= $data['data_kredit']['tgl_lahir_pasangan'] ?>" />
                                                    <label class="mt-2 mb-2">No. KTP Pasangan </label>
                                                    <input type="text" class="form-control a4 " name="no_ktp_pasangan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['no_ktp_pasangan'] ?>" />
                                                    <label class="mt-2 mb-2">Alamat KTP Pasangan</label>
                                                    <input type="text" class="form-control a5 " name="alamat_ktp_pasangan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['alamat_ktp_pasangan'] ?>" />
                                                    <label class="mt-2 mb-2">Alamat Sekarang Pasangan</label>
                                                    <input type="text" class="form-control a6 " name="alamat_sekarang_pasangan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['alamat_sekarang_pasangan'] ?>" />
                                                    <label class="mt-2 mb-2">Telepon / Hp Pasangan</label>
                                                    <input type="text" class="form-control a7 " name="telepon_pasangan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['telepon_pasangan'] ?>" />
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
                                                    <label class="mt-2 mb-2">Jenis Pekerjaan Pasangan</label>
                                                    <select name="jenis_pekerjaan_pasangan" class="form-control a8">
                                                        <option value="" selected>- Silahkan Pilih -</option>
                                                        <?php foreach ($data['jenis_pekerjaan'] as $i) : ?>
                                                            <option value="<?= $i['jenis_pekerjaan'] ?>" <?= $i['jenis_pekerjaan'] == $data['data_kredit']['jenis_pekerjaan_pasangan'] ? 'selected="selected"' : ''; ?>><?= $i['jenis_pekerjaan'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <label class="mt-2 mb-2">Nama Instansi Pasangan</label>
                                                    <input type="text" class="form-control a9 " name="nama_instansi_pasangan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['nama_instansi_pasangan'] ?>" />
                                                    <label class="mt-2 mb-2">Tahun Mulai Bekerja Pasangan</label>
                                                    <input type="text" class="form-control a10 " name="tahun_mulai_bekerja_pasangan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['tahun_mulai_bekerja_pasangan'] ?>" />
                                                    <label class="mt-2 mb-2">Jabatan Saat Ini Pasangan</label>
                                                    <input type="text" class="form-control a11 " name="jabatan_saat_ini_pasangan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['jabatan_saat_ini_pasangan'] ?>" />
                                                    <label class="mt-2 mb-2">Alamat Kantor Pasangan</label>
                                                    <input type="text" class="form-control a12 " name="alamat_kantor_pasangan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['alamat_kantor_pasangan'] ?>" />
                                                    <label class="mt-2 mb-2">Telepon Kantor Pasangan</label>
                                                    <input type="text" class="form-control a13 " name="telepon_kantor_pasangan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['telepon_kantor_pasangan'] ?>" />
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
                                                <label class="mt-2 mb-2">Tanggal Permohonan </label><span class="ml-1" style="color:red;">*</span>

                                                <?php
                                                if ($data['data_kredit']['tanggal_permohonan']) {
                                                    $a  = $data['data_kredit']['tanggal_permohonan'];
                                                    $b = explode("-", $a);
                                                    $data['data_kredit']['tanggal_permohonan'] = $b[2] . '-' . $b[1]  . '-' . $b[0];
                                                }

                                                ?>

                                                <input type="text" class="form-control date2" name="tanggal_permohonan" value="<?= $data['data_kredit']['tanggal_permohonan'] ?>" readonly required />

                                                <label class="mt-2 mb-2">Perjanjian Kerjasama</label><span class="ml-1" style="color:red;">*</span>
                                                <select name="perjanjian_kerjasama" class="form-control" required>
                                                    <option value="" selected>- Silahkan Pilih -</option>
                                                    <option value="ADA" <?= "ADA" == $data['data_kredit']['perjanjian_kerjasama'] ? 'selected="selected"' : ''; ?>><?= "ADA" ?></option>
                                                    <option value="BELUM ADA" <?= "BELUM ADA" == $data['data_kredit']['perjanjian_kerjasama'] ? 'selected="selected"' : ''; ?>><?= "BELUM ADA" ?></option>
                                                </select>
                                                <label class="mt-2 mb-2">Jenis Permohonan</label><span class="ml-1" style="color:red;">*</span>
                                                <select name="jenis_permohonan" class="form-control" required>
                                                    <option value="" selected>- Silahkan Pilih -</option>
                                                    <option value="BARU" <?= "BARU" == $data['data_kredit']['jenis_permohonan'] ? 'selected="selected"' : ''; ?>><?= "BARU" ?></option>
                                                    <option value="PENAMBAHAN" <?= "PENAMBAHAN" == $data['data_kredit']['jenis_permohonan'] ? 'selected="selected"' : ''; ?>><?= "PENAMBAHAN" ?></option>
                                                    <option value="FASILITAS KEDUA" <?= "FASILITAS KEDUA" == $data['data_kredit']['jenis_permohonan'] ? 'selected="selected"' : ''; ?>><?= "FASILITAS KEDUA" ?></option>

                                                </select>

                                                <label class="mt-2 mb-2">Tipe Kredit</label><span class="ml-1" style="color:red;">*</span>
                                                <select name="tipe_kredit" class="form-control" required>

                                                    <option value="" selected>- Silahkan Pilih -</option>

                                                    <option value="KONSUMTIF" <?= "KONSUMTIF" == $data['data_kredit']['tipe_kredit'] ? 'selected="selected"' : ''; ?>>KONSUMTIF</option>
                                                    <option value="PRODUKTIF" <?= "PRODUKTIF" == $data['data_kredit']['tipe_kredit'] ? 'selected="selected"' : ''; ?>>PRODUKTIF</option>

                                                    <!-- <option value="" selected>- Silahkan Pilih -</option> -->
                                                    <!-- <?php foreach ($data['tipe_kredit'] as $i) : ?>
                                                        <option value="<?= $i['tipe_kredit'] ?>" <?= $i['tipe_kredit'] == $data['data_kredit']['tipe_kredit'] ? 'selected="selected"' : ''; ?>><?= $i['tipe_kredit'] ?></option>
                                                    <?php endforeach; ?> -->
                                                </select>


                                                <label class="mt-2 mb-2">Jumlah Kredit Yang Dimohon (Rp) </label><span class="ml-1" style="color:red;">*</span>
                                                <input type="text" id="1" class="form-control plafond" name="plafond_dimohon" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['plafond_dimohon'] ?>" required />
                                                <label class="mt-2 mb-2">Jangka Waktu (Bulan) </label><span class="ml-1" style="color:red;">*</span>
                                                <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3" name="jangka_waktu" onwheel="return false;" value="<?= $data['data_kredit']['jangka_waktu'] ?>" required />
                                                <label class="mt-2 mb-2">Tujuan Penggunaan Kredit </label><span class="ml-1" style="color:red;">*</span>
                                                <input type="text" class="form-control" name="tujuan_penggunaan_kredit" onwheel="return false;" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['tujuan_penggunaan_kredit'] ?>" required />

                                                <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                <select name="jenis_jaminan" class="form-control">
                                                    <option value="" selected>- Silahkan Pilih -</option>
                                                    <?php foreach ($data['ref_jaminan'] as $i) : ?>
                                                        <option value="<?= $i['nama_jaminan'] ?>" <?= $i['nama_jaminan'] == $data['data_kredit']['jenis_jaminan'] ? 'selected="selected"' : ''; ?>>
                                                            <?= $i['nama_jaminan'] ?>
                                                        </option>
                                                    <?php endforeach; ?>


                                                </select>

                                                <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                <input type="text" id="2" class="form-control nilai_jaminan" name="nilai_jaminan" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['nilai_jaminan'] ?>" />
                                                <label class="mt-2 mb-2">Nama Marketing</label><span class="ml-1" style="color:red;">*</span>
                                                <select name="id_marketing" class="form-control" required>
                                                    <option value="" selected>- Silahkan Pilih -</option>
                                                    <?php foreach ($data['nama_marketing'] as $i) : ?>
                                                        <option value="<?= $i['nama_marketing'] ?>" <?= $i['nama_marketing'] == $data['data_kredit']['id_marketing'] ? 'selected="selected"' : ''; ?>><?= $i['nama_marketing'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                                <label class="mt-2 mb-2">Nama RO</label><span class="ml-1" style="color:red;">*</span>
                                                <select name="id_analis" class="form-control" required>
                                                    <option value="" selected>- Silahkan Pilih -</option>
                                                    <?php foreach ($data['nama_ro'] as $i) : ?>
                                                        <option value="<?= $i['nama_ro'] ?>" <?= $i['nama_ro'] == $data['data_kredit']['id_analis'] ? 'selected="selected"' : ''; ?>><?= $i['nama_ro'] ?></option>
                                                    <?php endforeach; ?>

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
                                                    <label class="mt-2 mb-2">Penghasilan Pemohon (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                    <input type="text" class="form-control penghasilan_pemohon" id="3" name="penghasilan_pemohon" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['penghasilan_pemohon'] ?>" required />
                                                    <label class="mt-2 mb-2">Penghasilan Pasangan (Rp)</label>
                                                    <input type="text" class="form-control penghasilan_pasangan a14" id="4" name="penghasilan_pasangan" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['penghasilan_pasangan'] ?>" />
                                                    <label class="mt-2 mb-2">Penghasilan Tambahan (Rp)</label>
                                                    <input type="text" class="form-control penghasilan_tambahan" id="5" name="penghasilan_tambahan" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['penghasilan_tambahan'] ?>" />
                                                    <label class="mt-2 mb-2">Penghasilan Tambahan Lainnya (Rp)</label>
                                                    <input type="text" class="form-control penghasilan_tambahan_lainnya" id="6" name="penghasilan_tambahan_lainnya" onkeypress=" return hanyaAngka(event)" value="<?= $data['data_kredit']['penghasilan_tambahan_lainnya'] ?>" />
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
                                                    <label class="mt-2 mb-2">Biaya Hidup Perbulan (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                    <input type="text" class="form-control biaya_hidup_perbulan" id="7" name="biaya_hidup_perbulan" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['biaya_hidup_perbulan'] ?>" required />
                                                    <label class="mt-2 mb-2">Biaya Pendidikan (Rp)</label>
                                                    <input type="text" class="form-control biaya_pendidikan" id="8" name="biaya_pendidikan" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['biaya_pendidikan'] ?>" />
                                                    <label class="mt-2 mb-2">Biaya PAM/Listrik/Tlp/Hp (Rp)</label>
                                                    <input type="text" class="form-control biaya_pam_listrik_telepon" id="9" name="biaya_pam_listrik_telepon" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['biaya_pam_listrik_telepon'] ?>" />
                                                    <label class="mt-2 mb-2">Biaya Transport (Rp)</label>
                                                    <input type="text" class="form-control biaya_transport" id="9" name="biaya_transport" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['biaya_transport'] ?>" />
                                                    <label class="mt-2 mb-2">Angsuran Bank Lain (Rp)</label>
                                                    <input type="text" class="form-control angsuran_bank_lain" id="10" name="angsuran_bank_lain" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['angsuran_bank_lain'] ?>" />
                                                    <label class="mt-2 mb-2">Angsuran Perumahan (Rp)</label>
                                                    <input type="text" class="form-control angsuran_perumahan" id="11" name="angsuran_perumahan" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['angsuran_perumahan'] ?>" />
                                                    <label class="mt-2 mb-2">Angsuran Kendaraan (Rp)</label>
                                                    <input type="text" class="form-control angsuran_kendaraan" id="12" name="angsuran_kendaraan" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['angsuran_kendaraan'] ?>" />
                                                    <label class="mt-2 mb-2">Angsuran Barang Elektronik (Rp)</label>
                                                    <input type="text" class="form-control angsuran_barang_elektronik" id="13" name="angsuran_barang_elektronik" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['angsuran_barang_elektronik'] ?>" />
                                                    <label class="mt-2 mb-2">Angsuran Koperasi (Rp)</label>
                                                    <input type="text" class="form-control angsuran_koperasi" id="14" name="angsuran_koperasi" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['angsuran_koperasi'] ?>" />
                                                    <label class="mt-2 mb-2">Biaya Lainnya (Rp)</label>
                                                    <input type="text" class="form-control biaya_lainnya" id="15" name="biaya_lainnya" onkeypress="return hanyaAngka(event)" value="<?= $data['data_kredit']['biaya_lainnya'] ?>" />
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
                                                <select name="aset_yang_dimiliki" class="form-control">
                                                    <option value="" selected>- Silahkan Pilih -</option>
                                                    <option value="RUMAH" <?= "RUMAH" == $data['data_kredit']['aset_yang_dimiliki'] ? 'selected="selected"' : ''; ?>><?= "RUMAH" ?></option>
                                                    <option value="TANAH" <?= "TANAH" == $data['data_kredit']['aset_yang_dimiliki'] ? 'selected="selected"' : ''; ?>><?= "TANAH" ?></option>
                                                    <option value="KENDARAAN RODA 2" <?= "KENDARAAN RODA 2" == $data['data_kredit']['aset_yang_dimiliki'] ? 'selected="selected"' : ''; ?>><?= "KENDARAAN RODA 2" ?></option>
                                                    <option value="KENDARAAN RODA 2" <?= "KENDARAAN RODA 4" == $data['data_kredit']['aset_yang_dimiliki'] ? 'selected="selected"' : ''; ?>><?= "KENDARAAN RODA 4" ?></option>
                                                    <option value="LAINNYA" <?= "LAINNYA" == $data['data_kredit']['aset_yang_dimiliki'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option>
                                                </select>
                                                <label class="mt-2 mb-2">Alamat Aset</label>
                                                <input type="text" class="form-control" name="alamat_aset" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['alamat_aset'] ?>" />

                                                <label class="mt-2 mb-2">Jenis Sertifikat</label>
                                                <select name="jenis_sertifikat" class="form-control">
                                                    <option value="" selected>- Silahkan Pilih -</option>
                                                    <option value="HGB" <?= "HGB" == $data['data_kredit']['jenis_sertifikat'] ? 'selected="selected"' : ''; ?>><?= "HGB" ?></option>
                                                    <option value="HAK MILIK" <?= "HAK MILIK" == $data['data_kredit']['jenis_sertifikat'] ? 'selected="selected"' : ''; ?>><?= "HAK MILIK" ?></option>
                                                    <option value="LAINNYA" <?= "LAINNYA" == $data['data_kredit']['jenis_sertifikat'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option>
                                                </select>
                                                <label class="mt-2 mb-2">Jumlah Kendaraan</label>
                                                <input type="text" class="form-control" name="jumlah_kendaraan" onkeypress="return hanyaAngka(event)" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['jumlah_kendaraan'] ?>" />
                                                <label class="mt-2 mb-2">Merk Kendaraan</label>
                                                <input type="text" class="form-control" name="merek_kendaraan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['merek_kendaraan'] ?>" />
                                                <label class="mt-2 mb-2">Tahun Kendaraan</label>
                                                <input type="text" class="form-control" name="tahun_kendaraan" onkeypress="return hanyaAngka(event)" maxlength="4" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['tahun_kendaraan'] ?>" />
                                                <label class="mt-2 mb-2">Atas Nama Kendaraan</label>
                                                <input type="text" class="form-control" onkeypress="return hanyaHuruf(event)" name="atas_nama_kendaraan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['data_kredit']['atas_nama_kendaraan'] ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <label class="mt-2 mb-2">Catatan CS</label>
                                                <textarea name="catatan_cs" class="form-control h-25" rows="5" placeholder="" oninput="this.value = this.value.toUpperCase()"><?= $data['data_kredit']['catatan_cs'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="btn_form_cs_edit_data_kredit" type="submit" class="btn btn-primary btn-lg">Update</button>
                            <a onclick="btn_batal_update_kredit(event); return false" href="<?= BASEURL; ?>/cs/data_kredit" class="btn btn-secondary btn-lg">Batal</a>
                        </main>

                    </form>




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




    <!-- jquery untuk mask tanggal -->
    <script src="<?= BASEURL ?>/assets/plugins/jquery/jquery.mask.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/moment/moment-with-locales.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= BASEURL ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- handlde select  -->
    <script src="<?= BASEURL ?>/assets/plugins/select2/js/select2.full.min.js"></script>





    <!-- untuk ubah tampilan inputan tanggal  -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.date').mask('00/00/0000');

            var a = '<?= $data['data_kredit']['tanggal_permohonan'] ?>';
            var tgl_permohonan = a.split('-');

            console.log(a)
            // $('.date2').val(moment(a).format('DD/MM/YYYY'))
            console.log(moment(a).format('DD-MM-YYYY'))
            // $('.date2').mask('00/00/0000')

            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });
    </script>

    <!-- cek jika terjadi perubahan di kode_instansi -->

    <script>
        var kode_instansi = $('.kode_instansi')
        var nama_instansi = $('.nama_instansi')

        kode_instansi.on('change', function() {
            var instansi = kode_instansi.val().split('##')
            nama_instansi.val(instansi[1])
        })
    </script>




    <!-- daftar nasabah lama -->
    <script>
        $(".modal_no_ktp").modal("show");

        $(".modal_cetak_laporan_cs").modal("show");

        $(".modal_cetak_laporan_cs").modal("show");

        $(document).ready(function() {
            $('#tabel_data_kredit').DataTable({
                "oLanguage": {

                    "sSearch": "Cari Data:",
                    "sShow": "Cari Data:",
                },

                responsive: true,
            });
        });




        $("#form_cs_edit_data_kredit").on('submit', function(e, params) {
            var localParams = params || {};

            if (!localParams.send) {
                e.preventDefault();
            }
            Swal.fire({
                title: "Yakin update data ?",
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",
                showLoaderOnConfirm: true,

            }).then((result) => {
                if (result.isConfirmed) {
                    $("#form_cs_edit_data_kredit").off("submit").submit();
                }
            })
        })

        function btn_batal_update_kredit(ev) {
            var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
            console.log(urlToRedirect); // verify if this is the right URL
            Swal.fire({
                title: "Yakin batal update?",
                // icon: 'success',
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",

                showLoaderOnConfirm: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = urlToRedirect;
                } else {

                }
            })

        }
    </script>



    <!-- ubah inputan ke dalam bentuk rupiah -->
    <script>
        var plafond = $('.plafond');
        var nilai_jaminan = $('.nilai_jaminan');

        var penghasilan_pemohon = $('.penghasilan_pemohon');
        var penghasilan_pasangan = $('.penghasilan_pasangan');
        var penghasilan_tambahan = $('.penghasilan_tambahan');
        var penghasilan_tambahan_lainnya = $('.penghasilan_tambahan_lainnya');

        var biaya_hidup_perbulan = $('.biaya_hidup_perbulan');
        var biaya_pendidikan = $('.biaya_pendidikan');
        var biaya_pam_listrik_telepon = $('.biaya_pam_listrik_telepon');
        var biaya_transport = $('.biaya_transport');
        var angsuran_bank_lain = $('.angsuran_bank_lain');
        var angsuran_perumahan = $('.angsuran_perumahan');
        var angsuran_kendaraan = $('.angsuran_kendaraan');
        var angsuran_barang_elektronik = $('.angsuran_barang_elektronik');
        var angsuran_koperasi = $('.angsuran_koperasi');
        var biaya_lainnya = $('.biaya_lainnya');


        $(document).ready(function() {
            plafond.val(ubah_input(plafond.val().toString()))
            nilai_jaminan.val(ubah_input(nilai_jaminan.val().toString()))
            penghasilan_pemohon.val(ubah_input(penghasilan_pemohon.val().toString()))
            penghasilan_pasangan.val(ubah_input(penghasilan_pasangan.val().toString()))
            penghasilan_tambahan.val(ubah_input(penghasilan_tambahan.val().toString()))
            penghasilan_tambahan_lainnya.val(ubah_input(penghasilan_tambahan_lainnya.val().toString()))
            biaya_hidup_perbulan.val(ubah_input(biaya_hidup_perbulan.val().toString()))
            biaya_pendidikan.val(ubah_input(biaya_pendidikan.val().toString()))
            biaya_pam_listrik_telepon.val(ubah_input(biaya_pam_listrik_telepon.val().toString()))
            biaya_transport.val(ubah_input(biaya_transport.val().toString()))
            angsuran_bank_lain.val(ubah_input(angsuran_bank_lain.val().toString()))
            angsuran_perumahan.val(ubah_input(angsuran_perumahan.val().toString()))
            angsuran_kendaraan.val(ubah_input(angsuran_kendaraan.val().toString()))
            angsuran_barang_elektronik.val(ubah_input(angsuran_barang_elektronik.val().toString()))
            angsuran_koperasi.val(ubah_input(angsuran_koperasi.val().toString()))
            biaya_lainnya.val(ubah_input(biaya_lainnya.val().toString()))
        })





        plafond.keyup(function() {
            plafond.val(ubah_input(plafond.val().toString()))
        })

        nilai_jaminan.keyup(function() {
            nilai_jaminan.val(ubah_input(nilai_jaminan.val().toString()))
        })

        penghasilan_pemohon.keyup(function() {
            penghasilan_pemohon.val(ubah_input(penghasilan_pemohon.val().toString()))
        })
        penghasilan_pasangan.keyup(function() {
            penghasilan_pasangan.val(ubah_input(penghasilan_pasangan.val().toString()))
        })
        penghasilan_tambahan.keyup(function() {
            penghasilan_tambahan.val(ubah_input(penghasilan_tambahan.val().toString()))
        })
        penghasilan_tambahan_lainnya.keyup(function() {
            penghasilan_tambahan_lainnya.val(ubah_input(penghasilan_tambahan_lainnya.val().toString()))
        })
        biaya_hidup_perbulan.keyup(function() {
            biaya_hidup_perbulan.val(ubah_input(biaya_hidup_perbulan.val().toString()))
        })
        biaya_pendidikan.keyup(function() {
            biaya_pendidikan.val(ubah_input(biaya_pendidikan.val().toString()))
        })
        biaya_pam_listrik_telepon.keyup(function() {
            biaya_pam_listrik_telepon.val(ubah_input(biaya_pam_listrik_telepon.val().toString()))
        })
        biaya_transport.keyup(function() {
            biaya_transport.val(ubah_input(biaya_transport.val().toString()))
        })
        angsuran_bank_lain.keyup(function() {
            angsuran_bank_lain.val(ubah_input(angsuran_bank_lain.val().toString()))
        })
        angsuran_perumahan.keyup(function() {
            angsuran_perumahan.val(ubah_input(angsuran_perumahan.val().toString()))
        })
        angsuran_kendaraan.keyup(function() {
            angsuran_kendaraan.val(ubah_input(angsuran_kendaraan.val().toString()))
        })
        angsuran_barang_elektronik.keyup(function() {
            angsuran_barang_elektronik.val(ubah_input(angsuran_barang_elektronik.val().toString()))
        })
        angsuran_koperasi.keyup(function() {
            angsuran_koperasi.val(ubah_input(angsuran_koperasi.val().toString()))
        })
        biaya_lainnya.keyup(function() {
            biaya_lainnya.val(ubah_input(biaya_lainnya.val().toString()))
        })
    </script>



    <!-- // tambahkan titik jika yang di input sudah menjadi angka ribuan -->
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



    <script>
        // onkeypress="return hanyaAngka(event)" 
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>





    <!-- sttus perkawinan jika belum menikah maka disable inputan data pasangan -->
    <script>
        var status_perkawinan = $('.status_perkawinan')
        var a1 = $('.a1');
        var a2 = $('.a2');
        var a3 = $('.a3');
        var a4 = $('.a4');
        var a5 = $('.a5');
        var a6 = $('.a6');
        var a7 = $('.a7');
        var a8 = $('.a8');
        var a9 = $('.a9');
        var a10 = $('.a10');
        var a11 = $('.a11');
        var a12 = $('.a12');
        var a13 = $('.a13');
        var a14 = $('.a14');









        $(document).ready(function() {

            if (status_perkawinan.val() != "MENIKAH") {
                a1.prop('readonly', true)
                a2.prop('readonly', true)
                a3.prop('readonly', true)
                a4.prop('readonly', true)
                a5.prop('readonly', true)
                a6.prop('readonly', true)
                a7.prop('readonly', true)
                a8.prop('disabled', true)
                a9.prop('readonly', true)
                a10.prop('readonly', true)
                a11.prop('readonly', true)
                a12.prop('readonly', true)
                a13.prop('readonly', true)
                a14.prop('readonly', true)
            } else {
                a1.prop('readonly', false)
                a2.prop('readonly', false)
                a3.prop('readonly', false)
                a4.prop('readonly', false)
                a5.prop('readonly', false)
                a6.prop('readonly', false)
                a7.prop('readonly', false)
                a8.prop('disabled', false)
                a9.prop('readonly', false)
                a10.prop('readonly', false)
                a11.prop('readonly', false)
                a12.prop('readonly', false)
                a13.prop('readonly', false)
                a14.prop('readonly', false)
            }

        })

        $(document).change(function() {

            if (status_perkawinan.val() != "MENIKAH") {
                a1.prop('readonly', true)
                a2.prop('readonly', true)
                a3.prop('readonly', true)
                a4.prop('readonly', true)
                a5.prop('readonly', true)
                a6.prop('readonly', true)
                a7.prop('readonly', true)
                a8.prop('disabled', true)
                a9.prop('readonly', true)
                a10.prop('readonly', true)
                a11.prop('readonly', true)
                a12.prop('readonly', true)
                a13.prop('readonly', true)
                a14.prop('readonly', true)


                a1.val('')
                a2.val('')
                a3.val('')
                a4.val('')
                a5.val('')
                a6.val('')
                a7.val('')
                a8.val('')
                a9.val('')
                a10.val('')
                a11.val('')
                a12.val('')
                a13.val('')
                a14.val('')
            } else {
                a1.prop('readonly', false)
                a2.prop('readonly', false)
                a3.prop('readonly', false)
                a4.prop('readonly', false)
                a5.prop('readonly', false)
                a6.prop('readonly', false)
                a7.prop('readonly', false)
                a8.prop('disabled', false)
                a9.prop('readonly', false)
                a10.prop('readonly', false)
                a11.prop('readonly', false)
                a12.prop('readonly', false)
                a13.prop('readonly', false)
                a14.prop('readonly', false)
            }
        })
    </script>

    <!-- sttus perkawinan jika belum menikah maka disable inputan data pasangan -->
    <!-- <script>
        var status_perkawinan = $('.status_perkawinan')
        var a1 = $('.a1');
        var a2 = $('.a2');
        var a3 = $('.a3');
        var a4 = $('.a4');
        var a5 = $('.a5');
        var a6 = $('.a6');
        var a7 = $('.a7');
        var a8 = $('.a8');
        var a9 = $('.a9');
        var a10 = $('.a10');
        var a11 = $('.a11');
        var a12 = $('.a12');
        var a13 = $('.a13');
        var a14 = $('.a14');

        $(document).change(function() {

            if (status_perkawinan.val() != "MENIKAH") {
                a1.prop('disabled', true)
                a2.prop('disabled', true)
                a3.prop('disabled', true)
                a4.prop('disabled', true)
                a5.prop('disabled', true)
                a6.prop('disabled', true)
                a7.prop('disabled', true)
                a8.prop('disabled', true)
                a9.prop('disabled', true)
                a10.prop('disabled', true)
                a11.prop('disabled', true)
                a12.prop('disabled', true)
                a13.prop('disabled', true)
                a14.prop('disabled', true)
            } else {
                a1.prop('disabled', false)
                a2.prop('disabled', false)
                a3.prop('disabled', false)
                a4.prop('disabled', false)
                a5.prop('disabled', false)
                a6.prop('disabled', false)
                a7.prop('disabled', false)
                a8.prop('disabled', false)
                a9.prop('disabled', false)
                a10.prop('disabled', false)
                a11.prop('disabled', false)
                a12.prop('disabled', false)
                a13.prop('disabled', false)
                a14.prop('disabled', false)
            }
        })
    </script> -->

</body>

</html>