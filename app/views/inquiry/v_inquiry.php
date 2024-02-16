<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Belum SLIK</title>
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




        <!-- Navbar -->
        <?php $this->view('inquiry/navbar') ?>
        <!-- Navbar -->

        <!-- Side Bar -->
        <?php $this->view('inquiry/side_bar') ?>
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


                            <form action="<?= BASEURL; ?>/inquiry/cari_data_credit_all_2" method="POST">
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


    <script>
        $(function() {
            $("#example1").DataTable({

            })
        });
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