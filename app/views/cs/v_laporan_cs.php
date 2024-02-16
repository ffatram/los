<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Permohonan Kredit</title>

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
                            <h1 class="m-0">Cetak Laporan Permohonan Kredit</h1>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- container fluid -->
                <div class="container-fluid">



                <?php 
                
                
                
                
                ?>
                    




                    <?php
                    if ($_COOKIE['level'] == "INQUIRY" || $_COOKIE['level'] == "KOMITE") {
                    ?>
                        <main class="content">
                            <div class="container-fluid p-0">
                                <form action="<?= BASEURL; ?>/cs/cek_laporan_cs" method="POST">
                                    <div class="row">
                                        <div class="col-sm-12 d-flex justify-content-center">
                                            <div class="col-sm-6">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label for="inputEmail4">Dari Tanggal</label>
                                                            <input type="date" class="form-control" name="dari_tanggal" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputPassword4">Sampai Tanggal</label>
                                                            <input type="date" class="form-control" name="sampai_tanggal" required>
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="inputPassword4">Cabang</label>
                                                            <select class="form-control" name='kode_cabang'>
                                                                <option value="">- Silahkan Pilih -</option>
                                                                <?php
                                                                foreach ($data['cabang'] as $row) :
                                                                ?>
                                                                    <option value="<?= $row['kode_cabang'] ?>"><?= $row['kode_cabang'] . ' - ' . $row['nama_cabang'] ?></option>
                                                                <?php
                                                                endforeach;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-column">
                                                        <button type="submit" name="btn_cetak_rekap" value="rekap" class="btn btn-primary">CETAK REKAP</button>
                                                        <button type="submit" name="btn_cetak_cair" value="cair" class="btn btn-primary mt-2">CETAK CAIR</button>
                                                        <button type="submit" name="btn_cetak_tolak" value="tolak" class="btn btn-primary mt-2">CETAK TOLAK</button>
                                                        <button type="submit" name="btn_cetak_batal" value="batal" class="btn btn-primary mt-2">CETAK BATAL</button>
                                                        <button type="submit" name="btn_cetak_pending" value="pending" class="btn btn-primary mt-2">CETAK PENDING</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </main>




                    <?php } else { ?>


                        <main class="content">
                            <div class="container-fluid p-0">


                                <form action="<?= BASEURL; ?>/cs/cek_laporan_cs" method="POST">
                                    <div class="row">
                                        <div class="col-sm-12 d-flex justify-content-center">
                                            <div class="col-sm-6">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail4">Dari Tanggal</label>
                                                            <input type="date" class="form-control" name="dari_tanggal" required>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Sampai Tanggal</label>
                                                            <input type="date" class="form-control" name="sampai_tanggal" required>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-column">
                                                        <button type="submit" name="btn_cetak_rekap" value="rekap" class="btn btn-primary">CETAK REKAP</button>
                                                        <button type="submit" name="btn_cetak_cair" value="cair" class="btn btn-primary mt-2">CETAK CAIR</button>
                                                        <button type="submit" name="btn_cetak_tolak" value="tolak" class="btn btn-primary mt-2">CETAK TOLAK</button>
                                                        <button type="submit" name="btn_cetak_batal" value="batal" class="btn btn-primary mt-2">CETAK BATAL</button>
                                                        <button type="submit" name="btn_cetak_pending" value="pending" class="btn btn-primary mt-2">CETAK PENDING</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </main>



                    <?php } ?>




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

<script>
        // Fungsi untuk memuat data secara asinkron
        function loadData() {
            $.ajax({
                url: '<?= BASEURL ?>/cs/datatojson_getdatatodaftar_permohonan_kredit_online', // Gantilah dengan path ke controller Anda
                method: 'GET',
                dataType: 'json',
                success: function(data) {
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
    </script>

</body>

</html>