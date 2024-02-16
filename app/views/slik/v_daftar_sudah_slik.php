<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sudah SLIK</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" <?= BASEURL ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" /> -->

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
    <!-- table freeze -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/table-freeze/css/ScrollTabla.css" media="screen" />


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
                            <h1 class="m-0">Daftar Sudah SLIK</h1>
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

                            <div class="container">
                                <div class="row justify-content-md-center">





                                    <div class="col col-lg-6">


                                        <form id="myformcari">
                                            <div class="input-group mb-2">
                                                <input type="date" name="tanggal_awal" class="form-control tanggal_awal datemask" placeholder="Tanggal Awal" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask>
                                                <input type="date" name="tanggal_akhir" class="form-control tanggal_akhir datemask" placeholder="Tanggal Akhir" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask>

                                                <div class="input-group-prepend">
                                                    <button type="submit" class="btn btn-primary btn-cari">Cari</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="table-responsive">
                                                <table id="example1" class="table table-striped table-hover first display nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No Permohonan Kredit</th>
                                                            <th scope="col">Nama Pemohon</th>
                                                            <th scope="col">Nama Instansi</th>
                                                            <th scope="col">Plafond</th>
                                                            <th scope="col">Jangka Waktu</th>
                                                            <th scope="col">Tanggal SLIK</th>
                                                            <th scope="col">User Create</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>







                        </div>
                    </main>








                    <div class="modal fade" id="detail_slik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="h4"><strong>Detail SLIK</strong></h1>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="id_slik">

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
    <!-- table freeze -->
    <script src="<?= BASEURL ?>/assets/plugins/table-freeze/js/jquery.CongelarFilaColumna.js"></script>
    <!-- <script src="<?= BASEURL ?>/assets/plugins/table-freeze/js/jquery-1.11.0.min.js"></script> -->






    <!-- tampilakn isi tabel -->
    <script>
        $(document).ready(function() {

            $('.table').DataTable()

            var a;
            var b;

            function data_table(url) {

                var table = $('.table').DataTable({

                    "ajax": {
                        "url": "<?= BASEURL ?>" + url,
                        "type": 'POST',
                        "data": function(d) {
                            d.tanggal_awal = a;
                            d.tanggal_akhir = b;
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
                            "data": "nama_instansi"
                        },
                        {
                            "data": "plafond"
                        },
                        {
                            "data": "jangka_waktu"
                        },
                        {
                            "data": "tanggal_slik"
                        },
                        {
                            "data": "user_create"
                        },
                        {
                            "data": "aksi"
                        }
                    ]
                })

            }



            $(document).on('click', '.btn-cari', function(e) {
                e.preventDefault()
                $('.table').DataTable().clear();
                $('.table').DataTable().destroy();
                data_table('/slik/get_daftar_sudah_slik').table.ajax.reload(null, false);
            })







            $(document).ready(function() {


                var today = moment().format('YYYY-MM-DD');




                $(".tanggal_awal, .tanggal_akhir").on("change", function() {

                    a = $('.tanggal_awal').val();
                    b = $('.tanggal_akhir').val();
                    console.log("nilai b " + b)

                    if (a != null && b != null) {
                        sessionStorage.key1 = a;
                        sessionStorage.key2 = b;
                    }


                })






                if (sessionStorage.key1 == undefined) {

                    console.log('a 1 ' + sessionStorage.key1)
                    console.log('b 1 ' + sessionStorage.key2)
                    a = today
                    b = today
                } else if (sessionStorage.key2 == undefined) {
                    console.log('a 2 ' + sessionStorage.key1)
                    console.log('b 2 ' + sessionStorage.key2)

                    a = today
                    b = today
                } else {

                    console.log('a 3 ' + sessionStorage.key1)
                    console.log('b 3 ' + sessionStorage.key2)

                    a = sessionStorage.key1
                    b = sessionStorage.key2
                }


                $('.tanggal_awal').val(a);
                $('.tanggal_akhir').val(b);

                console.log("nilai a : " + a)
                console.log("nilai b : " + b)

                $('.table').DataTable().clear();
                $('.table').DataTable().destroy();
                data_table('/slik/get_daftar_sudah_slik').table.ajax.reload(null, false);

            });

        })
    </script>




    <!-- detail slik daftar sudah slik -->
    <script>
        $(document).on('click', '.detail_slik', function(event) {
            event.preventDefault();
            var no_permohonan_kredit = $(this).data('no_permohonan_kredit');


            $.ajax({
                method: "POST",
                url: '<?= BASEURL . '/slik/detail_slik_cs' ?>',
                deferRender: true,
                data: {
                    'no_permohonan_kredit': no_permohonan_kredit
                },
                // dataType: "JSON",
                success: function(data) {
                    $("#id_slik").html(data)
                    $('#daftar_slik').DataTable({
                        "processing": true,
                        "paging": true,
                    });
                    $('#daftar_slik_pasangan').DataTable({
                        "processing": true,
                        "paging": true,
                    });
                    $('#detail_slik').modal();
                },
                error: function(data) {
                    console.log('errror')
                }
            });
        })
    </script>

    <!-- hapus daftar sudah slik -->
    <script>
        function hapus_all_slik_where_req(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
            console.log(urlToRedirect); // verify if this is the right URL
            Swal.fire({
                title: "Yakin ingin hapus seluruh data SLIK pada pemohon ini?",
                // icon: 'success',
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",

                showLoaderOnConfirm: true,
            }).then((result) => {
                if (result.isConfirmed) {

                    Swal.fire({

                        icon: 'success',
                        title: 'Data berhasil dihapus',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        window.location.href = urlToRedirect;
                    })
                } else {

                }
            })
        }
    </script>



    <!-- hapus seluruh slik -->
    <script>
        $(document).on('click', '.btn_hapus_slik', function(event) {
            var no_permohonan_kredit = $(this).data('no_permohonan_kredit')
            var nama_pemohon = $(this).data('nama_pemohon')
            var nama_instansi = $(this).data('nama_instansi')


            Swal.fire({

                title: '<strong>Yakin ingin hapus seluruh data SLIK pada permohonan ini?</strong>',
                html: 'No. Permohonan : <b> ' + no_permohonan_kredit + '</b>' +
                    '<br>' +
                    'Nama Pemohon : <b> ' + nama_pemohon + '</b>' +
                    '<br>' +
                    'Nama Instansi : <b> ' + nama_instansi + '</b>' +
                    '<br>',
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
                        url: '<?= BASEURL . '/slik/hapus_daftar_sudah_slik' ?>',
                        data: {
                            'no_permohonan_kredit': no_permohonan_kredit,
                            'nama_pemohon': nama_pemohon
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