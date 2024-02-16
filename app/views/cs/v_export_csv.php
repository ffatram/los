<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export CSV</title>

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






        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row ">
                        <!-- <div class="col-sm-6">
                            <h1 class="m-0">Export CSV</h1>
                        </div> -->

                    </div>
                </div>
            </div>


            <section class="content ">
                <div class="container-fluid">
                    <!-- main -->
                    <div class="card mt-5">
                        <div class="card-header">
                            <h4>Export</h4>
                        </div>
                        <div class="card-header">
                            <div class="text-center">




                            </div>

                            <div class="d-flex">

                                <div class="ml-auto">
                                    <div class="row">
                                        <div class="col">
                                            <input type="date" class="form-control dari_tanggal" required>
                                        </div>
                                        <div class="col">
                                            <input type="date" class="form-control sampai_tanggal" required>
                                        </div>

                                        <div class='col'>






                                            <?php
                                            if ($_COOKIE['level'] == "SKAI" || $_COOKIE['level'] == "KOMITE") {
                                            ?>

                                                <select class="form-control kode_cabang" name='kode_cabang'>
                                                    <option value="">- Silahkan Pilih -</option>
                                                    <?php
                                                    foreach ($data['cabang'] as $row) :
                                                    ?>
                                                        <option value="<?= $row['kode_cabang'] ?>"><?= $row['kode_cabang'] . ' - ' . $row['nama_cabang'] ?></option>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </select>



                                            <?php
                                            } else {
                                            ?>

                                                <select class="form-control id_analis">
                                                    <option value="">- Silahkan Pilih -</option>
                                                    <option value="ALL"> ALL</option>

                                                    <?php
                                                    foreach ($data as $row) :
                                                    ?>
                                                        <option value="<?= $row['nama_ro'] ?>"><?= $row['nama_ro'] ?></option>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </select>


                                            <?php
                                            }
                                            ?>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">






                            <div class="table-responsive">
                                <table class="table table-striped table-hover first display nowrap" data-page-length='15'>
                                    <thead>
                                        <tr>
                                            <th scope="col">No. Reg</th>
                                            <th scope="col">Nama Pemohon</th>
                                            <th scope="col">Instansi</th>
                                            <th scope="col">Plaf</th>
                                            <th scope="col">Jw (Bln)</th>
                                            <th scope="col">Jenis Permohonan</th>
                                            <th scope="col">RO</th>
                                            <th scope="col">Marketing</th>
                                            <th scope="col">Tgl. Masuk</th>
                                            <th scope="col">Tgl. SLIK</th>
                                            <th scope="col">Tgl. Analisa</th>
                                            <th scope="col">Tgl. Komite</th>
                                            <th scope="col">Tgl. Pencairan</th>
                                            <th scope="col">Tgl. Tolak</th>
                                            <th scope="col">Tgl. Batal</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Lokasi Berkas</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </section>

        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="<?= BASEURL ?>">LOS HASAMITRA</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>


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




    <script>
        var id_analis = $('.id_analis');
        var dari_tanggal = $('.dari_tanggal')
        var sampai_tanggal = $('.sampai_tanggal')
        var pilihan = '';
    </script>

    <script>
        $(document).ready(function() {

            pilihan = id_analis.val();
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
                            d.dari_tanggal = $('.dari_tanggal').val();
                            d.sampai_tanggal = $('.sampai_tanggal').val();
                            d.id_analis = $('.id_analis').val();
                            d.kode_cabang = $('.kode_cabang').val();
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
                            "data": "instansi"
                        },
                        {
                            "data": "plafond"
                        },
                        {
                            "data": "jangka_waktu"
                        },

                        {
                            "data": "jenis_permohonan"
                        },

                        {
                            "data": "id_analis"
                        },

                        {
                            "data": "marketing"
                        },

                        {
                            "data": "tanggal_permohonan"
                        },
                        {
                            "data": "tgl_slik"
                        },
                        {
                            "data": "tgl_wwc"
                        },
                        {
                            "data": "tanggal_komite"
                        },
                        {
                            "data": "tanggal_pencairan"
                        },
                        {
                            "data": "tanggal_tolak"
                        },
                        {
                            "data": "tanggal_batal"
                        },
                        {
                            "data": "status"
                        },
                        {
                            "data": "lokasi_berkas"
                        }
                    ]

                })

            }





            $(document).on('change', '.id_analis,.kode_cabang, .dari_tanggal, .sampai_tanggal', function() {

                if (id_analis.val() != 'undefined') {

                    if ((dari_tanggal.val() != '' && sampai_tanggal.val() != '' && $('.id_analis') != '')) {
                        if (id_analis.val() == 'ALL' || $('.kode_cabang').val() == '00') {
                            $('.table').DataTable().clear();
                            $('.table').DataTable().destroy();
                            data_table('/cs/get_load_csv_all').table.ajax.reload(null, false);
                        } else {
                            $('.table').DataTable().clear();
                            $('.table').DataTable().destroy();
                            data_table('/cs/get_load_csv').table.ajax.reload(null, false);
                        }
                    }

                } else if ($('.kode_cabang').val() != 'undefined') {
                    if ((dari_tanggal.val() != '' && sampai_tanggal.val() != '' && $('.kode_cabang').val() != '')) {
                        if (id_analis.val() == 'ALL' || $('.kode_cabang').val() == '00') {
                            $('.table').DataTable().clear();
                            $('.table').DataTable().destroy();
                            data_table('/cs/get_load_csv_all').table.ajax.reload(null, false);
                        } else {
                            $('.table').DataTable().clear();
                            $('.table').DataTable().destroy();
                            data_table('/cs/get_load_csv').table.ajax.reload(null, false);
                        }
                    }

                } else {

                }


            })


            // $(document).on('change', '.kode_cabang, .dari_tanggal, .sampai_tanggal', function() {
            //     if (dari_tanggal.val() != '' && sampai_tanggal.val() != '' && $('.kode_cabang').val() != '') {
            //         if ($('.kode_cabang').val() == '00') {
            //             $('.table').DataTable().clear();
            //             $('.table').DataTable().destroy();
            //             data_table('/cs/get_load_csv_all').table.ajax.reload(null, false);
            //         } else {
            //             $('.table').DataTable().clear();
            //             $('.table').DataTable().destroy();
            //             data_table('/cs/    ').table.ajax.reload(null, false);
            //         }
            //     }
            // })



        })
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