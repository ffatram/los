<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data['title'] ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assetsplugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <!-- Navbar -->
        <?= $this->view('supervisor/navbar') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->view('supervisor/side_bar') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">



                                <div class="card-header">
                                    <div class="title">
                                        <h2><b><?= $data['nama_halaman'] ?></b></h2>
                                    </div>
                                </div>

                                <div class="container-fluid p-3">



                                    <div class="container">
                                        <div class="row justify-content-md-center">





                                            <div class="col col-lg-6">


                                                <form id="myformcari">
                                                    <div class="input-group mb-2">
                                                        <input type="date" name="tanggal_awal" class="form-control tanggal_awal datemask" placeholder="Tanggal Awal" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask>
                                                        <input type="date" name="tanggal_akhir" class="form-control tanggal_akhir datemask" placeholder="Tanggal Akhir" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask>
                                                        <select name="username" class="form-control username">
                                                            <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                                            <option value="ALL">ALL</option>
                                                            <?php
                                                            foreach ($data['username'] as $i) {
                                                            ?>
                                                                <option value="<?= $i['username'] ?>"><?= $i['kode_cabang'] . " - " . $i['username'] . ' - ' . $i['level'] ?></option>

                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                        <div class="input-group-prepend">
                                                            <!-- <button type="submit" class="btn btn-primary btn-cari">Cari</button> -->
                                                        </div>
                                                    </div>

                                                </form>





                                            </div>

                                        </div>

                                    </div>

                                    <!-- <button type="button" class="btn btn-primary  float-right btn-tambah" data-toggle="modal" data-target="#mymodaltambah"> <i class="fas fa-plus"></i> Tambah User</button> -->
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table id="example1" class="table table-head-fixed table-striped text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No Permohonan Kredit</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Keterangan</th>
                                                    <th>Username</th>
                                                    <th>Kode Cabang</th>
                                                    <th>Update date</th>
                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>


                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>






        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 IT HASAMITRA</strong>
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
    <!-- InputMask -->
    <script src="<?= BASEURL ?>/assets/plugins/moment/moment.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/inputmask/jquery.inputmask.min.js"></script>




    <!-- bagian untuk hendle tabel datatable -->
    <script>
        // $(function() {
        //     $('#example1').DataTable({
        //         // "responsive": true,
        //     });
        // });
    </script>


    <!-- bagian untuk input datemask -->

    <script>
        //Datemask dd/mm/yyyy
        // $('.datemask').inputmask('dd-mm-yyyy', {
        //     'placeholder': 'dd-mm-yyyy'
        // })
    </script>


    <script>
        // var tanggal_awal = $('.tanggal_awal').val();
        // var tanggal_akhir = $('.tanggal_akhir').val();
        // var date1 = moment(tanggal_awal, 'DD-MM-YYYY')
        // var date2 = moment(tanggal_akhir, 'DD-MM-YYYY')

        // var username;

        // tanggal_awal = date1.format('YYYY-MM-DD');
        // tanggal_akhir = date2.format('YYYY-MM-DD');
        // username = $('.username').val();


        // var myform = $('#myformcari').serialize();
        // myform += "&tanggal_awal=" + tanggal_awal;
        // myform += "&tanggal_akhir=" + tanggal_akhir;

        // moment($('.tanggal_awal').val(), 'DD-MM-YYYY').format('YYYY-MM-DD')
        // moment($('.tanggal_akhir').val(), 'DD-MM-YYYY').format('YYYY-MM-DD')


        $(document).ready(function() {

            $('.table').DataTable()

            function data_table(url) {
                var table = $('.table').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                        //EXCEL
                        extend: 'csvHtml5',
                        className: 'btn btn-success export',
                        text: '<i class="fas fa-file-excel mr-2"></i>  EXPORT CSV',
                        fieldSeparator: '|'

                        // title: 'Data ',
                    }],

                    "ajax": {

                        "url": "<?= BASEURL ?>" + url,
                        "type": 'POST',
                        "data": function(d) {
                            d.tanggal_awal = $('.tanggal_awal').val();
                            d.tanggal_akhir = $('.tanggal_akhir').val();
                            d.username = $('.username').val();

                        },
                        "dataSrc": "",
                    },
                    "columns": [{
                            "data": "no_permohonan_kredit"
                        },

                        {
                            "data": "nama_pemohon"
                        },
                        {
                            "data": "keterangan"
                        },
                        {
                            "data": "username"
                        },
                        {
                            "data": "kode_cabang"
                        },
                        {
                            "data": "update_date"
                        }




                    ]

                })

            }





            $(document).on('change', '.tanggal_awal, .tanggal_akhir, .username', function() {

                var tanggal_awal = $('.tanggal_awal').val();
                var tanggal_akhir = $('.tanggal_akhir').val();
                var username = $('.username').val();



                if (username == "ALL") {
                    $('.table').DataTable().clear();
                    $('.table').DataTable().destroy();
                    data_table('/supervisor/log_get_data').table.ajax.reload(null, false);

                } else {

                }

                if (tanggal_awal != "" && tanggal_akhir != "" && (username != "" && username != "- Silahkan Pilih -")) {
                    $('.table').DataTable().clear();
                    $('.table').DataTable().destroy();
                    data_table('/supervisor/log_get_data').table.ajax.reload(null, false);

                }







            })


        })









        // $('#myformcari').on('submit', function(e) {





        //     $('.table').DataTable().clear();
        //     $('.table').DataTable().destroy();
        //     data_table('/supervisor/log_get_data').table.ajax.reload(null, false);

        // })
    </script>













    <!-- bagian untuk atur active manu sidebar -->
    <!-- <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("mybtnsidebar");
        var btns = header.getElementsByClassName("nav-link");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script> -->








</body>

</html>