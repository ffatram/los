<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sudah Komite</title>

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


        <?php $this->view('komite/navbar') ?>


        <!-- Side Bar -->
        <?php $this->view('komite/side_bar', $data) ?>
        <!-- Side Bar -->





        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Daftar Sudah Komite</h1>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- container fluid -->
                <div class="container-fluid">



                    <style>
                        .card_btn:hover {
                            box-shadow: 5px 5px 5px #0081C9;
                            transform: scale(1.0);
                            cursor: pointer;
                        }

                        .card_btn {
                            background-color: #0A2647;
                        }

                        .text {
                            color: white;
                            font-size: 13px;
                            font-weight: 900;
                            text-transform: uppercase;
                        }
                    </style>


                    <style>
                        .modal_1 {
                            padding: 0 !important;
                        }

                        .modal_1 .modal-dialog {

                            height: 100%;

                        }

                        .modal_1 .modal-content {
                            height: 100%;
                            border: 0;
                            border-radius: 15x;
                        }

                        .modal_1 .modal-body {
                            overflow-y: auto;
                        }
                    </style>

                    <style>
                        #tabel_modal {

                            border-collapse: collapse;
                            width: 100%;
                        }

                        #td_tabel_modal_ket {
                            border: 1px solid #dddddd;
                            background-color: #F4F4F4;
                            vertical-align: baseline;
                            width: 40%;

                        }

                        #td_tabel_modal {
                            border: 1px solid #dddddd;
                            vertical-align: baseline;
                        }
                    </style>




                    <main class="content">
                        <div class="container-fluid p-0">



                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-striped table-hover first display nowrap datatab">
                                            <thead>
                                                <tr>

                                                    <th>
                                                        No.
                                                    </th>

                                                    <th>
                                                        No. Reg
                                                    </th>
                                                    <th>
                                                        Cabang
                                                    </th>
                                                    <th>
                                                        Nama Pemohon
                                                    </th>

                                                    <th>
                                                        Instansi
                                                    </th>

                                                    <th>
                                                        Tipe Kredit
                                                    </th>

                                                    <th>
                                                        Tgl. Masuk
                                                    </th>


                                                    <th>
                                                        Tgl. Komite
                                                    </th>

                                                    <th>
                                                        Plafond
                                                    </th>

                                                    <th>
                                                        JW
                                                    </th>
                                                    <th>
                                                        RO
                                                    </th>
                                                    <th>
                                                        Status
                                                    </th>

                                                    <th>
                                                        Aksi
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <?php $a = 1;
                                                foreach ($data['data'] as $row) : ?>
                                                    <tr>

                                                        <td><?= $a++ ?></td>
                                                        <td><?= $row['no_permohonan_kredit'] ?></td>
                                                        <td><?= $row['kode_cabang'] ?></td>
                                                        <td><?= $row['nama_pemohon'] ?></td>
                                                        <td><?= $row['nama_instansi'] ?></td>
                                                        <td><?= $row['tipe_kredit'] ?></td>

                                                        <td><?= date('d-m-Y', strtotime($row['tanggal_permohonan']))  ?></td>

                                                        <td><?= date('d-m-Y', strtotime($row['tgl_create']))  ?></td>
                                                        <td><?= number_format(($row['plafond']), 0, ",", "."); ?></td>
                                                        <td><?= $row['jangka_waktu'] ?></td>
                                                        <td><?= $row['id_analis'] ?></td>

                                                        <td>
                                                            <?php

                                                            if ($row['status'] == "DISETUJUI") {
                                                                echo "SETUJU";
                                                            } else if ($row['status'] == "DITOLAK") {
                                                                echo "TOLAK";
                                                            }

                                                            ?>
                                                        </td>

                                                        <td>
                                                            <button class="btn" style="background: <?= w_orange ?>; color:white;" data-toggle="modal" data-target="#modal_detail" data-id="<?= $row['no_permohonan_kredit'] ?>" data-backdrop="static" data-keyboard="false">Lihat Detail Komite</button>
                                                        </td>
                                                    </tr>



                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </main>
                </div><!-- /.container-fluid -->
            </section>


            <!-- modal  -->

            <!-- bagian modal ketika tekan tombol  proses komite -->
            <div class="modal fade modal_1" id="modal_detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <!-- SweetAlert2 -->
    <script src="<?= BASEURL ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- fungsi datatables -->
    <script>
        $(function() {
            $("#example1").DataTable({})

        });
    </script>

    


    <script>
        $(document).ready(function() {
            $('#modal_detail').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('id')

                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/komite/modal_proses_komite_2' ?>',
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



                        // untuk berkas file
                        $('#example2').DataTable({});




                        // $('#modal_proses_komite').modal();
                    }
                })
            })
        })
    </script>

    

</body>

</html>