<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pencairan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" <?= BASEURL ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/dist/css/adminlte.min.css">


    <!-- DataTables -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">




    <!-- hilangkan border table -->
    <style>
        .table-borderless td,
        .table-borderless th {
            border: 0;
        }

        td {
            padding: 5px !important;
            margin: 0 !important;
        }
    </style>


</head>

<body>

    <div class="wrapper">

        <?php $this->view('pencairan/navbar') ?>

        <!-- Side Bar -->
        <?php $this->view('pencairan/side_bar') ?>
        <!-- Side Bar -->





        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Proses Pencairan</h1>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">


                <form class="myForm">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">


                                    <ul class="nav nav-tabs mt-2 daftar_belum_wawancara" id="myTab_daftar_belum_wawancara" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="li_daftar_belum_wawacara" data-toggle="tab" href="#a">Identitas Debitur</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="li_daftar_tolak_ro" data-toggle="tab" href="#b">Data Kredit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="li_daftar_batal" data-toggle="tab" href="#c">Data Jaminan</a>
                                        </li>
                                    </ul>



                                    <div class="tab-content">
                                        <div class="tab-pane active" id="a">
                                            <h1 class="h3 mt-3 mb-3 text-center"><strong>Identitas Debitur</strong> </h1>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <table class="table table-borderless">
                                                        <tbody>

                                                            <!-- <input type="text" class="form-control no_pk" name="no_pk"> -->

                                                            <tr>
                                                                <td>No. Registrasi Debitur</td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="no_permohonan_kredit" value="<?= $data['data']['no_permohonan_kredit'] ?>" readonly>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:180px;">Nama Debitur<span class="ml-1" style="color:red;">*</span> </td>
                                                                <td><input type="text" class="form-control" name="nama_debitur" value="<?= $data['data']['nama_pemohon'] ?>" required></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Alias Debitur<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control" name='nama_alias_debitur' value="<?= $data['data']['nama_pemohon'] ?>" required></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tempat Lahir<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control" name="tempat_lahir_debitur" value="<?= $data['data']['tempat_lahir_pemohon'] ?>" oninput="this.value = this.value.toUpperCase()" required></td>
                                                            </tr>
                                                            <tr>


                                                                <td> Tanggal Lahir<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control tgl_lahir_pemohon" name="tgl_lahir_debitur" placeholder="dd/mm/yyyy" required /></td>




                                                                <!-- 
                                                                <td>Tgl Lahir</td>
                                                                <td><input type="date" class="form-control" value="<?= $data['data']['tgl_lahir_pemohon'] ?>" name="tgl_lahir_pemohon" placeholder="dd/mm/yyyy"></td> -->
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Kelamin<span class="ml-1" style="color:red;">*</span></td>
                                                                <td>
                                                                    <select name="jenis_kelamin_debitur" class="form-control" required>
                                                                        <option value="" disabled selected>- Silahkan Pilih -</option>

                                                                        <option value="PRIA" <?= "PRIA" == $data['data']['jenis_kelamin_pemohon'] ? 'selected="selected"' : ''; ?>><?= "PRIA" ?></option>
                                                                        <option value="WANITA" <?= "WANITA" == $data['data']['jenis_kelamin_pemohon'] ? 'selected="selected"' : ''; ?>><?= "WANITA" ?></option>

                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Pekerjaan<span class="ml-1" style="color:red;">*</span></td>
                                                                <td>
                                                                    <select name="jenis_pekerjaan_debitur" class="form-control" required>
                                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                        <?php foreach ($data['jenis_pekerjaan'] as $i) : ?>
                                                                            <!-- <option value="<?= $i['kode_instansi'] . '##' . $i['nama_instansi'] ?>" <?= $i['kode_instansi'] == $data['data_kredit']['kode_instansi'] ? 'selected="selected"' : ''; ?>><?php echo $i['kode_instansi'] . ' - ' . $i['nama_instansi'] ?></option> -->

                                                                            <option value="<?= $i['jenis_pekerjaan'] ?>" <?= $i['jenis_pekerjaan'] == $data['data']['jenis_pekerjaan'] ? 'selected="selected"' : ''; ?>><?= $i['jenis_pekerjaan'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                            </tr>


                                                            <tr>

                                                                <td> Kode Instansi<span class="ml-1" style="color:red;">*</span> </td>
                                                                <td>

                                                                    <select name="kode_instansi" class="form-control select2bs4 kode_instansi" required>
                                                                        <option value="" reaquired selected>- Silahkan Pilih -</option>
                                                                        <?php foreach ($data['ref_instansi'] as $i) : ?>

                                                                            <option value="<?= $i['kode_instansi'] . '##' . $i['nama_instansi'] ?>" <?= $i['kode_instansi'] == $data['data_kredit']['kode_instansi'] ? 'selected="selected"' : ''; ?>><?php echo $i['kode_instansi'] . ' - ' . $i['nama_instansi'] ?></option>

                                                                            <!-- <option value="<?= $i['kode_instansi'] . '##' . $i['nama_instansi'] ?>"><?php echo $i['kode_instansi'] . ' - ' . $i['nama_instansi'] ?></option> -->
                                                                        <?php endforeach; ?>
                                                                    </select>

                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td>Nama Instansi<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control nama_instansi" name='instansi_debitur' value="<?= $data['data']['nama_instansi'] ?>" oninput="this.value = this.value.toUpperCase()" required></td>
                                                            </tr>
                                                            <tr>
                                                                <td>No. KTP<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control" name="no_ktp_debitur" value="<?= $data['data']['no_ktp_pemohon'] ?>" onkeypress="return hanyaAngka(event)" maxlength="16" required></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat KTP<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control" name="alamat_ktp_debitur" value="<?= $data['data']['alamat_ktp_pemohon'] ?>" oninput="this.value = this.value.toUpperCase()" required></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat Domisili<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control" name="alamat_domisili_debitur" value="<?= $data['data']['alamat_sekarang_pemohon'] ?>" oninput="this.value = this.value.toUpperCase()" required></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Telepon<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control" name="telepon_pemohon" value="<?= $data['data']['telepon_pemohon'] ?>" oninput="this.value = this.value.toUpperCase()" required></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Email
                                                                <td><input type="text" class="form-control" name="media_sosial" value="<?= $data['data']['media_sosial'] ?>" ></td>
                                                            </tr>

                                                            <!-- <tr>
                                                                <td>Tgl Surat Kuasa Pasangan</td>
                                                                <td><input type="text" class="form-control tgl_surat_pasangan" placeholder="dd/mm/yyyy"></td>
                                                            </tr> -->

                                                        </tbody>
                                                    </table>

                                                </div>


                                                <div class="col-md-6">

                                                    <table class="table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:180px;">Nama Pasangan</td>
                                                                <td><input type="text" class="form-control" name="nama_pasangan" value="<?= $data['data']['nama_pasangan'] ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Alias Pasangan</td>
                                                                <td><input type="text" class="form-control" name="nama_alias_pasangan" value="<?= $data['data']['nama_pasangan'] ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tempat Lahir Pasangan</td>
                                                                <td>

                                                                    <input type="text" class="form-control" name="tempat_lahir_pasangan" value="<?= $data['data']['tempat_lahir_pasangan'] ?>" oninput="this.value = this.value.toUpperCase()">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tgl. Lahir Pasangan</td>
                                                                <td><input type="text" class="form-control tgl_lahir_pasangan" name="tgl_lahir_pasangan" value="<?= $data['data']['tgl_lahir_pasangan'] ?>" placeholder="dd/mm/yyyy"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Pekerjaan Pasangan</td>
                                                                <td>

                                                                    <select name="jenis_pekerjaan_pasangan" class="form-control">
                                                                        <option value="">- Silahkan Pilih -</option>
                                                                        <?php foreach ($data['jenis_pekerjaan'] as $i) : ?>


                                                                            <option value="<?= $data['data']['jenis_pekerjaan_pasangan'] ?>" <?= $data['data']['jenis_pekerjaan_pasangan'] == $i['jenis_pekerjaan']  ? 'selected="selected"' : ''; ?>><?= $i['jenis_pekerjaan'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>

                                                                    <!-- <input type="text" class="form-control" name="jenis_pekerjaan_pasangan" value="<?= $data['data']['jenis_pekerjaan_pasangan'] ?>" oninput="this.value = this.value.toUpperCase()"> -->
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Instansi Pasangan</td>
                                                                <td><input type="text" class="form-control" name="instansi_pasangan" value="<?= $data['data']['nama_instansi_pasangan'] ?>" oninput="this.value = this.value.toUpperCase()"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>No. KTP Pasangan</td>
                                                                <td><input type="text" class="form-control" name="no_ktp_pasangan" value="<?= $data['data']['no_ktp_pasangan'] ?>" onkeypress="return hanyaAngka(event)" maxlength="16"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat KTP Pasangan</td>
                                                                <td><input type="text" class="form-control" name="alamat_ktp_pasangan" value="<?= $data['data']['alamat_ktp_pasangan'] ?>" oninput="this.value = this.value.toUpperCase()"></td>
                                                            </tr>

                                                            <tr>
                                                                <td>ALamat Domisili Pasangan</td>
                                                                <td><input type="text" class="form-control" name="alamat_domisili_pasangan" value="<?= $data['data']['alamat_sekarang_pasangan'] ?>" oninput="this.value = this.value.toUpperCase()"></td>
                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                            </tr>


                                                            <tr>
                                                                <td>Tanggal Surat Kuasa Pasangan</td>
                                                                <td><input type="text" class="form-control tgl_surat_kuasa_pasangan" name="tgl_surat_kuasa_pasangan" placeholder="dd/mm/yyyy"></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="tab-pane" id="b">
                                            <h1 class="h3 mt-3 mb-3 text-center"><strong>Data Kredit</strong> </h1>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <table class="table table-borderless">
                                                        <tbody>

                                                            <!-- <tr>
                                                                <td style="width:180px;">No. Inkaso</td>
                                                                <td><input type="text" class="form-control no_inkaso" name="no_inkaso"></td>
                                                                <td><input type="hidden" class="form-control no_pk_terakhir" name="no_pk_terakhir"></td>
                                                            </tr> -->

                                                            <tr>
                                                                <td style="width:180px;">Jenis No. PK<span class="ml-1" style="color:red;">*</span></td>
                                                                <td>

                                                                    <select name="jenis_no_pk" class="form-control jenis_no_pk" required>
                                                                        <option value="" required selected>- Silahkan Pilih -</option>
                                                                        <?php foreach ($data['ref_jenis_no_pk'] as $i) : ?>
                                                                            <option value="<?= $i['jenis'] ?>"><?= $i['jenis'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>


                                                                </td>
                                                                <!-- <td><input type="text" class="form-control no_pk" name="no_pk"></td> -->
                                                            </tr>
                                                            <tr>
                                                                <td>Plafond<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control plafond" value="<?= $data['data']['a_plafond'] ?>" name="plafond" onkeypress="return hanyaAngka(event)" required></td>
                                                            </tr>
                                                            <tr>
                                                                <td>OS Sebelumnya</td>
                                                                <td><input type="text" class="form-control os_sebelumnya" name="os_sebelumnya" onkeypress="return hanyaAngka(event)" value="<?= $data['data_wawancara']['os_sebelumnya'] ?>"></td>
                                                            </tr>
                                                            <tr>

                                                                <?php $data['penambahan'] = ($data['data']['plafond_dimohon'] - $data['data_wawancara']['os_sebelumnya']) ?>

                                                                <td>Penambahan</td>
                                                                <td><input type="text" class="form-control penambahan" name="penambahan" onkeypress="return hanyaAngka(event)" value="<?= $data['penambahan'] ?>" readonly></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jangka Waktu (Bln)<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control jangka_waktu" name="jangka_waktu" value="<?= $data['data']['tbl_keputusan_jangka_waktu'] ?>" onkeypress="return hanyaAngka(event)" required></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tgl. Mulai JW<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control tgl_mulai_jw" name="tgl_mulai_jw" placeholder="dd/mm/yyyy" required></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tgl. Akhir JW<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control tgl_akhir_jw" name="tgl_akhir_jw" placeholder="dd/mm/yyyy" required></td>
                                                            </tr>
                                                            <tr>

                                                                <td>Suku Bunga (% p.a)<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control suku_bunga" name="suku_bunga" value="<?= $data['data_wawancara']['suku_bunga'] ?>" onkeypress="return hanya_angka_decimal(event)" required></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sistem Bunga<span class="ml-1" style="color:red;">*</span></td>
                                                                <td>
                                                                    <select name="sistem_bunga" class="form-control sistem_bunga" required>
                                                                        <option value="" required selected>- Silahkan Pilih -</option>
                                                                        <?php foreach ($data['ref_sistem_bunga'] as $i) : ?>
                                                                            <option value="<?= $i['sistem_bunga'] ?>" <?= $i['sistem_bunga'] == $data['data_wawancara']['sistem_bunga'] ? 'selected="selected"' : ''; ?>><?= $i['sistem_bunga'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>

                                                                </td>
                                                            </tr>




                                                            <tr>
                                                                <td>Angsuran Perbulan<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control angsuran_perbulan" name="angsuran_perbulan" onkeypress="return hanyaAngka(event)" required></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Tgl. Batas Bayar<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control tgl_angsuran" name="tgl_angsuran" value="<?= $data['data_tanggal_angsuran']['tanggal'] ?>" maxlength="2" onkeypress="return hanyaAngka(event)" required></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Tgl Mulai Angsuran<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control tgl_mulai_angsuran" name="tgl_mulai_angsuran" placeholder="dd/mm/yyyy" required></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tgl Akhir Angsuran <span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control tgl_akhir_angsuran" name="tgl_akhir_angsuran" placeholder="dd/mm/yyyy" required></td>
                                                            </tr>




                                                            <tr>
                                                                <td>Jenis Kredit<span class="ml-1" style="color:red;">*</span></td>
                                                                <td>
                                                                    <select name="jenis_kredit" class="form-control" required>
                                                                        <option value="" disabled selected>- Silahkan Pilih -</option>

                                                                        <?php foreach ($data['ref_jenis_kredit'] as $i) : ?>
                                                                            <option value="<?= $i['jenis_kredit'] ?>"><?= $i['jenis_kredit'] ?></option>
                                                                        <?php endforeach; ?>

                                                                    </select>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tujuan Kredit<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control" name="tujuan_penggunaan_kredit" value="<?= isset($data['data_wawancara']['tujuan_penggunaan_kredit']) ? strtoupper($data['data_wawancara']['tujuan_penggunaan_kredit'])  : '' ?>" oninput="this.value = this.value.toUpperCase()" required></td>
                                                            </tr>

                                                            <tr>
                                                                <td>No. SPPK<span class="ml-1" style="color:red;">*</span></td>
                                                                <td><input type="text" class="form-control" name="no_sppk" oninput="this.value = this.value.toUpperCase()" required></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>

                                                </div>


                                                <div class="col-md-6">

                                                    <table class="table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:180px;">Biaya Provisi</td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                        <div class="col-xs-0">
                                                                            <input type="text" name="persen_provisi" onkeypress="return hanya_angka_decimal(event)" style="max-width: 80px;" class='form-control biaya_pro' value='<?= $data['biaya_pro_adm']['provisi'] ?>' />
                                                                        </div>
                                                                        <div style="margin-top: 7px;"> %</div><input type="text" name="biaya_provisi" class="form-control h_biaya_pro" onkeypress="return hanyaAngka(event)" />
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Biaya Administrasi</td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center mt-1" style="column-gap: 10px;">

                                                                        <div class="col-xs-0">
                                                                            <input type="text" name="persen_administrasi" onkeypress="return hanya_angka_decimal(event)" style="max-width: 80px;" class='form-control biaya_adm' value='<?= $data['biaya_pro_adm']['administrasi'] ?>' />
                                                                        </div>
                                                                        <div style="margin-top: 7px;"> %</div><input type="text" name="biaya_administrasi" class="form-control h_biaya_adm" onkeypress="return hanyaAngka(event)" />
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Asuransi Jiwa</td>
                                                                <td><input type="text" class="form-control asuransi_jiwa" name="asuransi_jiwa" onkeypress="return hanyaAngka(event)"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Asuransi Kredit</td>
                                                                <td><input type="text" class="form-control asuransi_kredit" name="asuransi_kredit" onkeypress="return hanyaAngka(event)"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Asuransi Kerugian</td>
                                                                <td><input type="text" class="form-control asuransi_kerugian" name="asuransi_kerugian" onkeypress="return hanyaAngka(event)"></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Biaya Notaris</td>
                                                                <td><input type="text" class="form-control biaya_notaris" name="biaya_notaris" onkeypress="return hanyaAngka(event)" value="<?= $data['data_wawancara']['biaya_notaris'] ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Biaya Materai</td>
                                                                <td><input type="text" class="form-control biaya_materai" name="biaya_materai" onkeypress="return hanyaAngka(event)" value="<?= $data['data_wawancara']['biaya_materai'] ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bunga Berjalan</td>
                                                                <td><input type="text" class="form-control bunga_berjalan" name="bunga_berjalan" onkeypress="return hanyaAngka(event)"></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Tabungan SIMITRA</td>
                                                                <td><input type="text" class="form-control tabungan_simitra" name="tabungan_simitra" onkeypress="return hanyaAngka(event)" value="<?= $data['data_wawancara']['tabungan'] ?>"></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Angsuran Pertama</td>
                                                                <td><input type="text" class="form-control angsuran_pertama" name="angsuran_pertama" onkeypress="return hanyaAngka(event)"></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Denda Tunggakan (%)</td>
                                                                <td><input type="text" class="form-control denda" name="denda" value="<?= $data['denda']['denda'] ?>" onkeypress="return hanyaAngka(event)"></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Pejabat TTD<span class="ml-1" style="color:red;">*</span></td>
                                                                <td>

                                                                    <select name="pejabat_ttd" class="form-control pejabat_ttd_sppk" required>
                                                                        <option value="" required selected>- Silahkan Pilih -</option>
                                                                        <?php foreach ($data['ref_pejabat'] as $i) : ?>
                                                                            <option value="<?= $i['nama_pejabat'] ?>" <?= $i['nama_pejabat'] == $data['data_wawancara']['pejabat_ttd_sppk'] ? 'selected="selected"' : ''; ?>><?= $i['nama_pejabat'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>

                                                                </td>
                                                            </tr>




                                                            <tr>
                                                                <td>Jenis Penggunaan<span class="ml-1" style="color:red;">*</span></td>
                                                                <td>
                                                                    <select name="kode_jenis_penggunaan" class="form-control kode_jenis_penggunaan" required>
                                                                        <option value="" required selected>- Silahkan Pilih -</option>
                                                                        <?php foreach ($data['ref_jenis_penggunaan'] as $i) : ?>
                                                                            <option value="<?= $i['kode_jenis_penggunaan'] ?>" <?= $i['kode_jenis_penggunaan'] == $data['data_wawancara']['kode_jenis_penggunaan'] ? 'selected="selected"' : ''; ?>><?= $i['kode_jenis_penggunaan'] . ' - ' . $i['jenis_penggunaan'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Sektor Ekonomi<span class="ml-1" style="color:red;">*</span></td>
                                                                <td>

                                                                    <select name="kode_sektor_ekonomi" class="form-control select2bs4 kode_sektor_ekonomi" required>
                                                                        <option value="" required selected>- Silahkan Pilih -</option>
                                                                        <?php foreach ($data['ref_sektor_ekonomi'] as $i) : ?>
                                                                            <option value="<?= $i['kode_sektor_ekonomi'] ?>" <?= $i['kode_sektor_ekonomi'] == $data['data_wawancara']['kode_sektor_ekonomi'] ? 'selected="selected"' : ''; ?>><?= $i['kode_sektor_ekonomi'] . ' - ' . $i['sektor_ekonomi'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>


                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="tab-pane" id="c">
                                            <h1 class="h3 mt-3 mb-3 text-center"><strong>Data Jaminan</strong> </h1>
                                            <div class="row">

                                                <div class="col-md-6">

                                                    <table class="table table-borderless">
                                                        <tbody>

                                                            <?php

                                                            for ($a = 1; $a <= 10; $a++) {
                                                                if (isset($data['data_wawancara']['jaminan_' . $a])) {
                                                            ?>
                                                                    <tr>
                                                                        <td style="width:180px;">Jaminan <?= $a ?></td>
                                                                        <td><input type="text" class="form-control" value='<?= $data['data_wawancara']['jaminan_' . $a] ?>' name="jaminan_<?= $a ?>"></td>
                                                                    </tr>

                                                                <?php
                                                                } else {
                                                                ?>

                                                                    <tr>
                                                                        <td style="width:180px;">Jaminan <?= $a ?></td>
                                                                        <td><input type="text" class="form-control" value='<?= $data['data_wawancara']['jaminan_' . $a] ?>' name="jaminan_<?= $a ?>"></td>
                                                                    </tr>


                                                            <?php
                                                                }
                                                            } ?>




                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-md-6">

                                                    <table class="table table-borderless">
                                                        <tbody>


                                                            <?php

                                                            for ($a = 11; $a <= 20; $a++) {
                                                                if (isset($data['data_wawancara']['jaminan_' . $a])) {
                                                            ?>
                                                                    <tr>
                                                                        <td style="width:180px;">Jaminan <?= $a ?></td>
                                                                        <td><input type="text" class="form-control" value='<?= $data['data_wawancara']['jaminan_' . $a] ?>' name="jaminan_<?= $a ?>"></td>
                                                                    </tr>

                                                                <?php
                                                                } else {
                                                                ?>

                                                                    <tr>
                                                                        <td style="width:180px;">Jaminan <?= $a ?></td>
                                                                        <td><input type="text" class="form-control" value='<?= $data['data_wawancara']['jaminan_' . $a] ?>' name="jaminan_<?= $a ?>"></td>
                                                                    </tr>


                                                            <?php
                                                                }
                                                            } ?>




                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary btn-lg btn_simpan"> Simpan</button>
                                <button class="btn btn-secondary btn-lg btn_batal"> Batal</button>
                            </div>



                        </div>
                    </div>

                </form>








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
    <script src="<?= BASEURL ?>/asse`ts/plugins/summernote/summernote-bs4.min.js"></script>
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
    <!-- handlde select  -->
    <script src="<?= BASEURL ?>/assets/plugins/select2/js/select2.full.min.js"></script>

    <!-- Bootstrap 4 -->
    <!-- <script src="<?= BASEURL ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->



    <!-- fungsi untuk mengatur sorot tab ketika belum di isi bagian required wawancara -->
    <script>
        $(document).ready(function() {
            $('.btn_simpan').click(function() {
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
        var no_pk = '';
        var no_pk2 = "";

        var no_pk_terakhir = '';


        // var tgl_mulai_jw;

        // $('.tgl_mulai_jw').on('keyup', function() {
        //     tgl_mulai_jw = $('.tgl_mulai_jw').val()
        // })



        // fungsi ini jika mau update tanggal ansguran dari data inputan tangal mulau angsuran
        // $(document).on('keyup', ".tgl_mulai_angsuran", function() {
        //     var tgl_mulai_angsuran = $('.tgl_mulai_angsuran')
        //     var tgl_angsuran = $('.tgl_angsuran');
        //     var data_tgl_mulai_angsuran = tgl_mulai_angsuran.val().split('/')



        //     // alert('ok' + data_tgl_mulai_angsuran[0]);

        //     console.log('ok' + parseInt(data_tgl_mulai_angsuran[0]));

        //     if (isNaN(parseInt(data_tgl_mulai_angsuran[0]))) {
        //         tgl_angsuran.val('')
        //     } else {
        //         tgl_angsuran.val(parseInt(data_tgl_mulai_angsuran[0]))

        //     }
        // })






        $(document).on('change keyup', '.kode_instansi, .jenis_no_pk, .tgl_mulai_jw',
            function() {
                var kode_instansi = $('.kode_instansi').val().split('##')
                var jenis_no_pk = $('.jenis_no_pk').val()

                var tgl_mulai_jw = $('.tgl_mulai_jw');



                let text = tgl_mulai_jw.val()
                const myArray = text.split("/");
                let tgl_mulai_jw_fix = myArray[1];


                var id = tgl_mulai_jw.val();
                var tahun = id.substr(id.length - 2); // => "ambil 2 data terakhir pada string"


                tgl_mulai_jw_fix = tgl_mulai_jw_fix + tahun



                console.log("Data tanggal tahun : " + tgl_mulai_jw_fix)



                no_pk = '/' + jenis_no_pk + '-' + kode_instansi[0] + '/' + '<?= $_COOKIE['kode_cabang'] ?>' + '/' + tgl_mulai_jw_fix;







                var myForm = $('.myForm')


                myForm.on('submit', function(e) {
                    e.preventDefault()
                    Swal.fire({
                        title: "Yakin data sudah benar?",
                        showCancelButton: true,
                        confirmButtonText: "Ya",
                        cancelButtonText: "Batal",
                        confirmButtonColor: "#3EC59D",
                        cancelButtonColor: "#BB2D3B",
                        showLoaderOnConfirm: true,

                    }).then((res) => {

                        if (res.isConfirmed) {

                            $.ajax({
                                type: 'POST',
                                url: "<?= BASEURL . '/pencairan/cek_urutan_inkaso/' ?>",
                                data: {
                                    'inkaso': kode_instansi[0]
                                },
                                success: function(res) {
                                    var str = "" + (parseInt(parseInt(res) + 1))
                                    var pad = "0000"
                                    var ans = pad.substring(0, pad.length - str.length) + str
                                    res = ans
                                    no_pk_terakhir = res
                                    no_pk2 = res + no_pk
                                    $('.no_pk').val(res + no_pk)

                                    console.log("no pk : " + no_pk2)

                                    $.ajax({
                                        type: 'POST',
                                        url: "<?= BASEURL . '/pencairan/simpan_proses_pencairan/' ?>",
                                        data: $('.myForm').serialize() + '&no_pk_terakhir=' + no_pk_terakhir + '&no_pk=' + no_pk2 + '&inkaso=' + kode_instansi[0],
                                        success: function(res) {

                                            console.log(res);
                                            if (res == 'berhasil') {
                                                $('.no_pk').val(no_pk2)

                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Data berhasil disimpan',
                                                    html: 'Nomor PK : <b> ' + no_pk2 + '</b>',
                                                    showConfirmButton: false,
                                                    timer: 5000
                                                }).then((result) => {
                                                    window.location.replace("<?= BASEURL . '/pencairan/daftar_sudah_pencairan/' ?>");
                                                })
                                                if (res != 'berhasil') {
                                                    Swal.fire({
                                                        icon: 'warning',
                                                        title: 'Erorr',
                                                        showConfirmButton: false,
                                                        timer: 1500
                                                    })
                                                }
                                            }
                                        },
                                        error: function(e) {
                                            console.log(e)
                                        }

                                    });






                                },
                                error: function(e) {
                                    console.log(e)
                                }

                            });

                        }


                    })




                })

            })
    </script>







    <script type="text/javascript">
        $(document).ready(function() {


            $('.tgl_lahir_pemohon').mask('00/00/0000');
            const d = new Date('<?= $data['data']['tgl_lahir_pemohon'] ?>');
            $('.tgl_lahir_pemohon').val(moment(d).format("DD/MM/YYYY"))
            // $('.tgl_surat_pasangan').mask('00/00/0000');
            if ('<?= $data['data']['status_perkawinan'] ?>' != 'MENIKAH') {
                $('.tgl_lahir_pasangan').mask('00/00/0000');
            } else {

                $('.tgl_lahir_pasangan').mask('00/00/0000');
                const e = new Date('<?= $data['data']['tgl_lahir_pasangan'] ?>');
                $('.tgl_lahir_pasangan').val(moment(e).format("DD/MM/YYYY"))
            }







            $('.tgl_mulai_jw').mask('00/00/0000');
            $('.tgl_akhir_jw').mask('00/00/0000');

            $('.tgl_mulai_angsuran').mask('00/00/0000');
            $('.tgl_akhir_angsuran').mask('00/00/0000');
            $('.tgl_surat_kuasa_pasangan').mask('00/00/0000');






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

    <!-- hanya angak dan ubah ke formT rupiah -->
    <script>
        $(document).on('keyup', function() {
            digit()

        })

        $(document).ready(function() {
            digit()
        })



        function digit() {
            $('.plafond').val(ubah_input($('.plafond').val()))
            $('.os_sebelumnya').val(ubah_input($('.os_sebelumnya').val()))
            $('.penambahan').val(ubah_input($('.penambahan').val()))
            $('.angsuran_perbulan').val(ubah_input($('.angsuran_perbulan').val()))



            $('.h_biaya_pro').val(ubah_input($('.h_biaya_pro').val()))
            $('.h_biaya_adm').val(ubah_input($('.h_biaya_adm').val()))
            $('.asuransi_jiwa').val(ubah_input($('.asuransi_jiwa').val()))
            $('.asuransi_kredit').val(ubah_input($('.asuransi_kredit').val()))
            $('.asuransi_kerugian').val(ubah_input($('.asuransi_kerugian').val()))
            $('.biaya_notaris').val(ubah_input($('.biaya_notaris').val()))
            $('.biaya_materai').val(ubah_input($('.biaya_materai').val()))
            $('.bunga_berjalan').val(ubah_input($('.bunga_berjalan').val()))
            $('.tabungan_simitra').val(ubah_input($('.tabungan_simitra').val()))
            $('.angsuran_pertama').val(ubah_input($('.angsuran_pertama').val()))
            $('.os_sebelumnya').val(ubah_input($('.os_sebelumnya').val()))
            $('.os_sebelumnya').val(ubah_input($('.os_sebelumnya').val()))
            $('.os_sebelumnya').val(ubah_input($('.os_sebelumnya').val()))
        }
    </script>





    <!-- tombol simpan dan batal -->
    <script>
        $('.btn_batal').click(function() {
            window.location.replace("<?= BASEURL . '/pencairan/daftar_belum_pencairan/' ?>");
        })



        // $('.btn_simpan').click(function() {
        //     Swal.fire({
        //         title: "Yakin data sudah benar?",
        //         showCancelButton: true,
        //         confirmButtonText: "Ya",
        //         cancelButtonText: "Batal",
        //         confirmButtonColor: "#3EC59D",
        //         cancelButtonColor: "#BB2D3B",
        //         showLoaderOnConfirm: true,

        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             var data = $('#form').serialize();

        //             $.ajax({
        //                 type: 'POST',
        //                 url: "<?= BASEURL . '/pencairan/simpan_proses_pencairan/' ?>",
        //                 data: data,
        //                 success: function(res) {
        //                     if (res == "berhasil_insert") {
        //                         window.location.replace("<?= BASEURL . '/pencairan/daftar_sudah_pencairan/' ?>");
        //                     } else {
        //                         alert(res);
        //                     }
        //                 }
        //             });

        //         }
        //     })
        // })
    </script>

    <!-- inkaso -->
    <script>
        var inkaso = $('.no_inkaso');
        var no_pk = $('.no_pk');
        var no_pk_terakhir = $('.no_pk_terakhir')

        inkaso.keyup(function() {
            $.ajax({
                type: 'POST',
                url: "<?= BASEURL . '/pencairan/cek_no_inkaso/' ?>" + inkaso.val(),
                success: function(res) {
                    console.log(res)
                    no_pk.val(res);

                    let data = res;
                    const data_array = data;
                    let no_terakhir = data_array.split('/');

                    no_pk_terakhir.val(no_terakhir[0]);


                },
                error: function(e) {
                    console.log(e)
                }

            });
        })
    </script>



    <!-- handel biaya provisi dan adm -->
    <script>
        $(document).ready(function() {

            var plafond = hapus_titik($('.plafond').val())
            var biaya_prov = $('.biaya_pro').val()
            var biaya_adm = $('.biaya_adm').val()




            $('.h_biaya_pro').val(ubah_input((isNaN(biaya_prov * plafond / 100) ? '0' : biaya_prov * plafond / 100).toString()));
            $('.h_biaya_adm').val(ubah_input((isNaN(biaya_adm * plafond / 100) ? '0' : biaya_adm * plafond / 100).toString()));



            // $('.h_biaya_pro').val(ubah_input(parseFloat(biaya_prov.val() * plafond).toString()))
            // $('.h_biaya_adm').val(ubah_input(parseFloat(biaya_adm.val() * plafond).toString()))

        })


        $(document).on('keyup', '.plafond, .biaya_pro, .biaya_adm', function() {


            var plafond = hapus_titik($('.plafond').val())
            var biaya_prov = $('.biaya_pro').val()
            var biaya_adm = $('.biaya_adm').val()



            $('.h_biaya_pro').val(ubah_input((isNaN(biaya_prov * plafond / 100) ? '0' : biaya_prov * plafond / 100).toString()));
            $('.h_biaya_adm').val(ubah_input((isNaN(biaya_adm * plafond / 100) ? '0' : biaya_adm * plafond / 100).toString()));


            // $('.h_biaya_pro').val(ubah_input(isNaN(parseFloat(parseFloat(biaya_prov2.val()) * hapus_titik(plafond2)).toString()) ? '0' : parseFloat(parseFloat(biaya_prov2.val()) * hapus_titik(plafond2)).toString()))
            // $('.h_biaya_adm').val(ubah_input(isNaN(parseFloat(parseFloat(biaya_adm2.val()) * hapus_titik(plafond2)).toString()) ? '0' : parseFloat(parseFloat(biaya_adm2.val()) * hapus_titik(plafond2)).toString()))



        })
    </script>


    <!-- keyup penambahan -->

    <script>
        $(document).on('keyup', '.plafond, .os_sebelumnya', function() {
            var plafond = hapus_titik($('.plafond').val().toString())
            var os_sebelumnya = hapus_titik($('.os_sebelumnya').val().toString())
            var penambahan = plafond - os_sebelumnya;
            $('.penambahan').val(isNaN(penambahan) ? '0' : penambahan)
        })
    </script>





    <script>
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
        var b = $('.angsuran_pertama')

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


        $(document).ready(function() {
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
    </script>


    <script>
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
    </script>





    <!-- ubah input rupiah -->
    <!-- // tambahkan titik jika yang di input sudah menjadi angka ribuan -->

    <script>
        var plafond = $('.plafond');



        $(document).ready(function() {
            plafond.val(ubah_input(plafond.val()))
        })
        plafond.keyup(function() {
            plafond.val(ubah_input(plafond.val()))
        })
    </script>

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



    <!-- <script>
        $('.suku_bunga').keyup(function() {
            suku_bunga.val(suku_bunga.val().toString().replace(/[^\d.]/g, ''))
        })
    </script> -->


    <script>
        // fungsi khusus untuk suku bunga 
        function hanya_angka_decimal(event) {
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
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



    <script>
        function hapus_titik(angka) {
            return parseFloat(angka.replaceAll('.', ''));
        }
    </script>



</body>

</html>