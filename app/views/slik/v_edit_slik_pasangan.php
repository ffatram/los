<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data SLIK Pasangan</title>

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

    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">



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
                            <h1 class="m-0">Edit Data SLIK Pasangan</h1>
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
                            <div class="card">
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <table class="table-hover" cellpadding=5 cellspacing=15>
                                                        <tr>
                                                            <td>No. Permohonan Kreditt</td>
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
                                                            <td id="67"><?= date('d-m-Y') ?></td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>

                                            <form id="form_update_slik_pemohon" action="<?= BASEURL; ?>/slik/update_slik_pasangan" method="POST">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <input type="hidden" name="id" id="" value="<?= $data['id'] ?>">
                                                        <input type="hidden" name="no_permohonan_kredit" value="<?= $data['no_permohonan_kredit'] ?>">
                                                        <table class="table-hover" cellpadding=5 cellspacing=15>

                                                            <tr>
                                                                <td>Nama Pasangan</td>
                                                                <td>:</td>
                                                                <input type="hidden" name='nama_pemohon' value="<?= $data['get_data_cs_where_no_req']['nama_pemohon'] ?>">
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
                                                                <td><?= $data['get_data_cs_where_no_req']['tempat_lahir_pasangan'] ?>, <?= date("d F Y", strtotime($data['get_data_cs_where_no_req']['tgl_lahir_pasangan']))  ?></td>
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
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-12 col-lg-6 col-xxl-6 ">
                                                        <div class="">
                                                            <div class="">
                                                                <div class="form-group">
                                                                    <div class="validate-error"></div>
                                                                    <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama Bank</label><span class="ml-1" style="color:red;">*</span>
                                                                    <select name="nama_bank" class="form-control select2bs4" required>
                                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                        <?php foreach ($data['nama_bank'] as $i) : ?>
                                                                            <option value="<?= $i['nama_bank'] ?>" <?= $i['nama_bank'] == $data['edit_data_pasangan_where_id']['nama_bank'] ? 'selected="selected"' : ''; ?>><?php echo $i['nama_bank'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                    <label class="mt-2 mb-2">Jenis Fasilitas</label><span class="ml-1" style="color:red;">*</span>
                                                                    <select name="jenis_fasilitas" class="form-control" required>
                                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                        <?php foreach ($data['nama_fasilitas'] as $i) : ?>
                                                                            <option value="<?= $i['nama_fasilitas'] ?>" <?= $i['nama_fasilitas'] == $data['edit_data_pasangan_where_id']['jenis_fasilitas'] ? 'selected="selected"' : ''; ?>><?php echo $i['nama_fasilitas'] ?></option>
                                                                        <?php endforeach; ?>
                                                                        <!-- <option value="LAINNYA" <?= "LAINNYA" == $data['edit_data_pasangan_where_id']['jenis_fasilitas'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option> -->

                                                                    </select>
                                                                    <label class="mt-2 mb-2">Plafond (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                                    <input type="text" id="1" class="form-control plafond" name="plafond" onwheel="return false;" value="<?= $data['edit_data_pasangan_where_id']['plafond'] ?>" required />
                                                                    <label class="mt-2 mb-2">Bakidebet (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                                    <input type="text" id="1" class="form-control bakidebet" name="bakidebet" onwheel="return false;" value="<?= $data['edit_data_pasangan_where_id']['bakidebet'] ?>" required />
                                                                    <label class="mt-2 mb-2">Kolektibilitas</label><span class="ml-1" style="color:red;">*</span>
                                                                    <select name="kolektibilitas" class="form-control" required>
                                                                        <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                        <option value="1" <?= "1" == $data['edit_data_pasangan_where_id']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "1" ?></option>
                                                                        <option value="2" <?= "2" == $data['edit_data_pasangan_where_id']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "2" ?></option>
                                                                        <option value="3" <?= "3" == $data['edit_data_pasangan_where_id']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "3" ?></option>
                                                                        <option value="4" <?= "4" == $data['edit_data_pasangan_where_id']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "4" ?></option>
                                                                        <option value="5" <?= "5" == $data['edit_data_pasangan_where_id']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "5" ?></option>

                                                                    </select>
                                                                    <label class="mt-2 mb-2">Jangka Waktu</label><span class="ml-1" style="color:red;">*</span>
                                                                    <div class="row">
                                                                        <div class="col ">

                                                                            <?php

                                                                            $a  = $data['edit_data_pasangan_where_id']['waktu_awal'];
                                                                            $b = explode("-", $a);


                                                                            $data['edit_data_pasangan_where_id']['waktu_awal'] = $b[2] . '-' . $b[1]  . '-' . $b[0];


                                                                            ?>

                                                                            <input type="text" name="waktu_awal" class="form-control date" placeholder="dd/mm/yyyy" value="<?= $data['edit_data_pasangan_where_id']['waktu_awal'] ?>" required>

                                                                            <!-- <input type="date" class="form-control" name="waktu_awal" value="<?= $data['edit_data_pasangan_where_id']['waktu_awal'] ?>" required> -->

                                                                        </div>
                                                                        <div class="col col-1 text-center">
                                                                            <p>-</p>
                                                                        </div>

                                                                        <div class="col">
                                                                            <?php

                                                                            $a  = $data['edit_data_pasangan_where_id']['waktu_akhir'];
                                                                            $b = explode("-", $a);


                                                                            $data['edit_data_pasangan_where_id']['waktu_akhir'] = $b[2] . '-' . $b[1]  . '-' . $b[0];


                                                                            ?>
                                                                            <input type="text" name="waktu_akhir" class="form-control date" placeholder="dd/mm/yyyy" value="<?= $data['edit_data_pasangan_where_id']['waktu_akhir'] ?>" required>
                                                                            <!-- <input type="date" class="form-control" name="waktu_akhir" value="<?= $data['edit_data_pasangan_where_id']['waktu_akhir'] ?>" required> -->
                                                                        </div>

                                                                    </div>
                                                                    <label class="mt-2 mb-2">Suka Bungaa % </label><span class="ml-1" style="color:red;">*</span>
                                                                    <input type="text" class="form-control" name="suku_bunga" value="<?= $data['edit_data_pasangan_where_id']['suku_bunga'] ?>" />
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
                                                                            <option value="<?= $i['nama_jaminan'] ?>" <?= $i['nama_jaminan'] == $data['edit_data_pasangan_where_id']['jenis_jaminan'] ? 'selected="selected"' : ''; ?>><?php echo $i['nama_jaminan'] ?></option>
                                                                        <?php endforeach; ?>
                                                                        <!-- <option value="LAINNYA" <?= "LAINNYA" == $data['edit_data_pasangan_where_id']['jenis_jaminan'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option> -->
                                                                    </select>
                                                                    <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                                    <input type="text" id="2" class="form-control nilai_jaminan" name="nilai_jaminan" value="<?= $data['edit_data_pasangan_where_id']['nilai_jaminan'] ?>" />
                                                                    <label class="mt-2 mb-2">Pemilik Jaminan </label>
                                                                    <input type="text" id="2" class="form-control" name="pemilik_jaminan" value="<?= $data['edit_data_pasangan_where_id']['pemilik_jaminan'] ?>" oninput="this.value = this.value.toUpperCase()" />
                                                                    <label class="mt-2 mb-2">Alamat Jaminan</label>
                                                                    <input type="text" id="2" class="form-control" name="alamat_jaminan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['edit_data_pasangan_where_id']['alamat_jaminan'] ?>" />
                                                                    <label class="mt-2 mb-2">Pengikatan </label>
                                                                    <select name="pengikatan" class="form-control">
                                                                        <option value="" disabled selected>- Silahkan Pilih -</option>

                                                                        <?php foreach ($data['nama_pengikatan'] as $i) : ?>
                                                                            <option value="<?= $i['nama_pengikatan'] ?>" <?= $i['nama_pengikatan'] == $data['edit_data_pasangan_where_id']['pengikatan'] ? 'selected="selected"' : ''; ?>><?php echo $i['nama_pengikatan'] ?></option>
                                                                        <?php endforeach; ?>
                                                                        <!-- <option value="LAINNYA" <?= "LAINNYA" == $data['edit_data_pasangan_where_id']['pengikatan'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option> -->

                                                                    </select>
                                                                    <label class="mt-2 mb-2">Keterangan</label>

                                                                    <textarea name="keterangan" class="form-control h-25" rows="4" placeholder="" oninput="this.value = this.value.toUpperCase()"><?= $data['edit_data_pasangan_where_id']['keterangan'] ?></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3 mb-3">
                                                    <button type="submit" class="btn btn-info">Update</button>
                                                    <a onclick="btn_batal_update_slik_pemohon(event); return false" href="<?= BASEURL; ?>/slik/input_data_slik/<?= $data['no_permohonan_kredit'] ?>" class="btn btn-secondary me-2">Batal</a>
                                                    <!-- <button onclick="location.href = '<?= BASEURL; ?>/slik/input_data_slik/<?= $data['id_slik'] ?>';" class="btn btn-secondary">Batal</button> -->
                                                    <!-- <a href="<?= BASEURL; ?>/slik/input_data_slik/<?= $data['id_slik'] ?>" class="btn btn-secondary">Batal</a> -->
                                                </div>
                                            </form>




                                            <!-- <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pemohon <span class="text-success"><?= $data['get_jumlah_data_slik_pasangan'] ?> Fasilitas</span></a>
                        </li>


                    </ul>



                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        </div>
                    </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>



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

    <script src="<?= BASEURL ?>/assets/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/moment/moment.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- jquery untuk mask tanggal -->
    <script src="<?= BASEURL ?>/assets/plugins/jquery/jquery.mask.min.js"></script>

</body>




<script>
    $(function() {

        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>


<!-- handel date -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.date').mask('00/00/0000');

    });
</script>



<!-- fungsi ubah input angka dalam pecahan ribuan -->
<script>
    var plafond = $('.plafond');
    var baki_debet = $('.bakidebet');
    var nilai_jaminan = $('.nilai_jaminan');
    $(document).ready(function(e) {
        plafond.val(ubah_input(plafond.val().toString()))
        baki_debet.val(ubah_input(baki_debet.val().toString()))
        nilai_jaminan.val(ubah_input(nilai_jaminan.val().toString()))
    })
    plafond.keyup(function(e) {
        plafond.val(ubah_input(plafond.val().toString()))
    })
    baki_debet.keyup(function(e) {
        baki_debet.val(ubah_input(baki_debet.val().toString()))
    })
    nilai_jaminan.keyup(function(e) {
        nilai_jaminan.val(ubah_input(nilai_jaminan.val().toString()))
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


</html>