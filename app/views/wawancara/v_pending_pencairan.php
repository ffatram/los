<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Persetujuan Pencairan</title>

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


        <?php $this->view('wawancara/navbar') ?>


        <!-- Side Bar -->
        <?php $this->view('wawancara/side_bar',) ?>
        <!-- Side Bar -->





        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Daftar Persetujuan Pencairan</h1>
                        </div>

                    </div>

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- container fluid -->
                <div class="container-fluid">


                    <?php

                    include 'app/controllers/wawancara_detail_wawancara.php';

                    $detail_wawancara = new wawancara_detail_wawancara();


                    ?>
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

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="table-responsive">
                                                <table id="example1" class="table table-striped table-hover first display nowrap datatab">

                                                    <thead>

                                                        <th>
                                                            No.
                                                        </th>

                                                        <th>
                                                            No. Reg
                                                        </th>
                                                        <th>
                                                            Nama Pemohon
                                                        </th>
                                                        <th>
                                                            Nama Instansi
                                                        </th>

                                                        <th>
                                                            Tanggal Analisa
                                                        </th>
                                                        <th>
                                                            Plafond
                                                        </th>


                                                        <th>
                                                            Jangka Waktu
                                                        </th>

                                                        <th>
                                                            Aksi
                                                        </th>

                                                    </thead>
                                                    <tbody>

                                                        <?php $a = 1;
                                                        foreach ($data['daftar_pending_pencairan'] as $row) : ?>
                                                            <tr>

                                                                <td><?= $a++ ?></td>
                                                                <td><?= $row['no_permohonan_kredit'] ?></td>
                                                                <td><?= $row['nama_pemohon'] ?></td>
                                                                <td><?= $row['nama_instansi'] ?></td>
                                                                <td><?= date('d-m-Y', strtotime($row['tanggal_wawancara']))  ?></td>
                                                                <td><?= number_format($row['plafond'], 0, ",", "."); ?></td>
                                                                <td><?= $row['jangka_waktu'] ?></td>
                                                                <td>
                                                                    <!-- <a onclick="btn_aktif_batal_wanwancara(event); return false" href="<?= BASEURL; ?>/wawancara/aktifkan_wawancara_batal/<?= $row['no_permohonan_kredit'] ?>" class="btn btn-m" style="background-color: #EC994B; color:white; ">Detail Wawancara</a> -->

                                                                    <!-- $btn_detail_komite = "<a href='' data-toggle='modal' data-target='#detail_komite' class='btn btn-sm btn-secondary detail_komite' data-id='" . $i[' no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false' style='pointer-events: none;'>Detail Komite</a>" ;  -->
                                                                    <a href="" data-toggle="modal" data-target="#detail_komite" data-id="<?= $row['no_permohonan_kredit'] ?>" class="btn detail_komite" style="background: <?= w_orange ?>; color:white" data-backdrop="static" data-keyboard="false">Persetujuan Pencairan</a>
                                                                </td>


                                                            </tr>
                                                        <?php endforeach; ?>






                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>




                    <div class="modal fade modal_1" id="detail_komite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="h4"><strong>Detail Komite</strong></h1>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body dataModal">

                                </div>


                            </div>
                        </div>
                    </div>
















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

    <!-- SweetAlert2 -->
    <script src="<?= BASEURL ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- fungsi untuk aktigkan format datatables -->
    <script>
        $(function() {
            $("#example1").DataTable({})  
        });
    </script>




    <!-- handel tombol detail komite -->
    <script>
        $(document).on('click', '.detail_komite', function(event) {
            event.preventDefault();
            var no_permohonan_kredit = $(this).data('id');






            $.ajax({
                method: "POST",
                url: '<?= BASEURL . '/wawancara/modal_pending_pencairan/' ?>',
                deferRender: true,
                data: {
                    'no_permohonan_kredit': no_permohonan_kredit
                },
                // dataType: "JSON",
                success: function(data) {
                    
                    $(".dataModal").html(data)
                },
                error: function(data) {
                    console.log('errror')
                }
            });

        })
    </script>









</body>

</html>