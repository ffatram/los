<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sudah Analisa</title>

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
                            <h1 class="m-0">Daftar Sudah Analisa</h1>
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
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">No. Reg</th>
                                                            <th scope="col">Nama Pemohon</th>
                                                            <th scope="col">Nama Instansi</th>
                                                            <th scope="col">Tanggal Analisa</th>
                                                            <th scope="col">Plafond</th>
                                                            <th scope="col">Jangka Waktu</th>
                                                            <th scope="col">Status</th>
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






















                </div><!-- /.container-fluid -->
            </section>


            <div class="modal fade modal_1" id="modal_pengajuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="h4"><strong>Pengajuan</strong></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body data_modal">

                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade modal_1" id="catatan_komite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Catatan Pending Komite</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body data_modal_catatan_komite">

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>

                        </div>

                    </div>
                </div>
            </div>






            <div class="modal fade modal_1" id="detail_komite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="h4"><strong>Detail Komite</strong></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body data_modal_detail_komite">

                        </div>


                    </div>
                </div>
            </div>



            <div class="modal fade " id="modal_cetak_analisa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="h4"><strong>Cetak Analisa</strong></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body data_moda_cetak_analisa">


                            <div class="row">

                                <div class="col btn_1">
                                    <div class="card card_btn">
                                        <div class="card-body text text-center">Cetak Permohonan Online</div>
                                    </div>
                                </div>
                                <div class="col btn_2">
                                    <div class="card card_btn ">
                                        <div class="card-body text text-center">Analisa & Cashflow</div>
                                    </div>
                                </div>
                                <div class="col btn_3">
                                    <div class="card card_btn">
                                        <div class="card-body text text-center">SPPK</div>
                                    </div>
                                </div>

                            </div>

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









    <!-- server side hanlde tabel daftar sudah wawancara  -->
    <script>
        $(function() {
            table = $('#example1').DataTable({
                // "processing": true,
                "serverSide": true,
                // searchable: true,
                // "aaSorting": [
                //     [2, "desc"]
                // ],
                "ajax": {
                    "url": "<?= BASEURL . '/wawancara/get_data_daftar_sudah_wawancara' ?>",
                    "dataType": "json",
                    "type": "POST",
                    "dataSrc": 'data',
                },

                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "no_permohonan_kredit"
                    },
                    {
                        "data": "nama_pemohon"

                    },
                    {
                        "data": "nama_instansi",
                        "name": "nama_instansi"

                    },
                    {
                        "data": "tanggal_wawancara"
                    },
                    {
                        "data": "plafond"
                    },
                    {
                        "data": "jangka_waktu"
                    },
                    {
                        "data": "status"
                    },

                    {
                        "data": "btn_aksi"
                    },
                ]

            });
        });


        setInterval(function() {
            table.ajax.reload(null, false);
            // alert('ok')
        }, 1500);
    </script>







    <script>
        function send(id, callback) {

            $.ajax({
                url: "<?= BASEURL . '/tablecontroller/kreditonline' ?>", // Ganti URL dengan endpoint yang sesuai
                type: 'POST',
                data: {
                    no_permohonan_kredit: id
                },
                success: function(res) {

                    var kredit_online = res.data.kredit_online

                    callback(kredit_online)

                },
                error: function(xhr, status, error) {

                    console.log('Eror : ' + error)
                }
            });


        }
    </script>










    <!-- modal cetak analisa-->
    <!-- tombol cetak analisa dan cashflow -->
    <script>
        var status = "";
        var id = "";
        $(document).on('click', '.modal_cetak_analisa', function(event) {

            status = $(this).data('status')
            id = $(this).data('id')



            send(id, function(res) {

                if (status == "DISETUJUI" && res == 'YA') {
                    $("#modal_cetak_analisa").modal('show');

                    $('.btn_1').on('click', function() {
                        window.location.href = "<?= BASEURL ?>/cetak/cetak_permohonankreditonline/" + id;
                    })

                    $('.btn_2').on('click', function() {
                        window.location.href = "<?= BASEURL ?>/cetak/analisa_keputusan/" + id;
                    })
                    $('.btn_3').on('click', function() {
                        window.location.href = "<?= BASEURL ?>/cetak/cetak_sppk/" + id;
                    })
                } else if (status == "DISETUJUI" && res != 'YA') {

                    $("#modal_cetak_analisa").modal('show');
                    $('.btn_1').hide()
                    $('.btn_2').on('click', function() {
                        window.location.href = "<?= BASEURL ?>/cetak/analisa_keputusan/" + id;
                    })
                    $('.btn_3').on('click', function() {
                        window.location.href = "<?= BASEURL ?>/cetak/cetak_sppk/" + id;
                    })
                } else if (status != "DISETUJUI" && res == 'YA') {
                    $("#modal_cetak_analisa").modal('show');
                    $('.btn_1').on('click', function() {
                        window.location.href = "<?= BASEURL ?>/cetak/cetak_permohonankreditonline/" + id;
                    })
                    $('.btn_2').on('click', function() {
                        window.location.href = "<?= BASEURL ?>/cetak/analisa_keputusan/" + id;
                    })
                    $('.btn_3').hide()
                } else if (status != "DISETUJUI" && res != 'YA') {
                    $("#modal_cetak_analisa").modal('show');
                    $('.btn_1').hide()
                    $('.btn_2').on('click', function() {
                        window.location.href = "<?= BASEURL ?>/cetak/analisa_keputusan/" + id;
                    })
                    $('.btn_3').hide()
                }
            })










            // else if (status == "DISETUJUI" && ko != 'YA') {

            //     $("#modal_cetak_analisa").modal('show');

            //     $('.btn_1').on('click', function() {
            //         window.location.href = "<?= BASEURL ?>/cetak/analisa_keputusan/" + id;
            //     })
            //     $('.btn_2').on('click', function() {
            //         window.location.href = "<?= BASEURL ?>/cetak/cetak_sppk/" + id;
            //     })

            //     $('.btn_3').hide()

            // } else if (status != "DISETUJUI" && ko == 'YA') {
            //     $("#modal_cetak_analisa").modal('show');
            //     $('.btn_1').on('click', function() {
            //         window.location.href = "<?= BASEURL ?>/cetak/analisa_keputusan/" + id;
            //     })

            //     $('.btn_3').on('click', function() {
            //         window.location.href = "<?= BASEURL ?>/cetak/cetak_permohonankreditonline/" + id;
            //     })
            //     $('.btn_2').hide()

            // } else if (status != "DISETUJUI" && ko != 'YA') {
            //     $("#modal_cetak_analisa").modal('show');
            //     $('.btn_1').on('click', function() {
            //         window.location.href = "<?= BASEURL ?>/cetak/analisa_keputusan/" + id;
            //     })

            //     $('.btn_2').hide()
            //     $('.btn_3').hide()

            // }

        })
    </script>





    <!-- jika klik btn batal ajukan -->
    <script>
        $(document).on('click', '.btn_batal_ajukan', function() {
            no_permohonan_kredit = $(this).data('id')


            Swal.fire({
                title: "Yakin batalkan pengajuan?",
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",
                showLoaderOnConfirm: true,
            }).then((result) => {
                if (result.isConfirmed) {



                    $.ajax({
                        method: "POST",
                        url: '<?= BASEURL . '/wawancara/btn_batal_ajukan/' ?>',
                        data: {
                            'no_permohonan_kredit': no_permohonan_kredit
                        },
                        success: function(res) {
                            var data = res.trim()

                            if (data == 'berhasil') {

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil batalkan ajuan',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    window.location.href = "<?= BASEURL; ?>/wawancara/daftar_sudah_wawancara";
                                })
                            } else if (data == 'gagal') {
                                alert('gagal ' + data)
                            }
                        },
                        error: function(res) {
                            alert(res.trim())
                        }
                    });



                }
            })
        })
    </script>





    <!-- handel tombol Penagjuan -->
    <script>
        $(document).on('click', '.btn_pengajuan', function(event) {
            event.preventDefault();
            var no_permohonan_kredit = $(this).data('id');

            $.ajax({
                method: "POST",
                url: '<?= BASEURL . '/wawancara/pengajuan_wawancara/' ?>',
                deferRender: true,
                data: {
                    'no_permohonan_kredit': no_permohonan_kredit
                },
                // dataType: "JSON",
                success: function(data) {



                    $(".data_modal").html(data)
                },
                error: function(data) {
                    console.log('errror')
                }
            });
        })
    </script>



    <!-- handel tombol detail komite -->
    <script>
        $(document).on('click', '.detail_komite', function(event) {
            event.preventDefault();
            var no_permohonan_kredit = $(this).data('id');
            $.ajax({
                method: "POST",
                url: '<?= BASEURL . '/modal/modal_detail_all' ?>',
                deferRender: true,
                data: {
                    'no_permohonan_kredit': no_permohonan_kredit
                },
                // dataType: "JSON",
                success: function(data) {
                    $(".data_modal_detail_komite").html(data)
                },
                error: function(data) {
                    console.log('errror')
                }
            });
        })
    </script>




    <!-- handel tombol catatan pending komite -->
    <script>
        $(document).on('click', '.btn_catatan_pending', function(event) {
            event.preventDefault();
            var no_permohonan_kredit = $(this).data('id');

            $.ajax({
                method: "POST",
                url: '<?= BASEURL . '/wawancara/catatan_pending/' ?>',
                deferRender: true,
                data: {
                    'no_permohonan_kredit': no_permohonan_kredit
                },
                // dataType: "JSON",
                success: function(data) {
                    $(".data_modal_catatan_komite").html(data)
                },
                error: function(data) {
                    console.log('errror')
                }
            });
        })
    </script>




    <!-- btn ajukan komite -->
    <script>
        $(document).on('click', '.btn_ajukan_komite', function() {
            var no_permohonan_kredit = $(this).data('no_permohonan_kredit');
            var tipe_komite = $(this).data('tipe_komite');
            var status = "";

            $.ajax({
                method: "POST",
                url: '<?= BASEURL . '/wawancara/cek_status_debitur/' ?>',
                data: {
                    'no_permohonan_kredit': no_permohonan_kredit
                },

                success: function(res) {


                    status = res.trim()
                    console.log("status : " + status)

                    if (status == 'DISETUJUI' || status == 'DITOLAK') {
                        Swal.fire({
                            position: 'center',
                            icon: 'info',
                            title: 'Permohonan ini telah ' + status.toLowerCase(),
                            showConfirmButton: false,
                            timer: 3000
                        })
                    } else {

                        Swal.fire({
                            title: "Anda yakin ajukan proses komite??",
                            showCancelButton: true,
                            confirmButtonText: "Ya",
                            cancelButtonText: "Batal",
                            confirmButtonColor: "#3EC59D",
                            cancelButtonColor: "#BB2D3B",

                            showLoaderOnConfirm: true,
                        }).then((result) => {
                            if (result.isConfirmed) {

                                $.ajax({
                                    method: "POST",
                                    url: '<?= BASEURL . '/wawancara/btn_ajukan_komite/' ?>' + no_permohonan_kredit + '|' + tipe_komite,
                                    data: {
                                        'no_permohonan_kredit': no_permohonan_kredit
                                    },
                                    success: function(res) {

                                        if (res.trim() == 'berhasil') {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Berhasil ajukan',
                                                showConfirmButton: false,
                                                timer: 1500
                                            }).then((result) => {
                                                window.location.href = "<?= BASEURL ?>/wawancara/daftar_sudah_wawancara"
                                            })

                                        } else {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'warning',
                                                title: 'Error' + res.trim(),
                                                showConfirmButton: false,
                                            })
                                        }

                                        console.log("Hasil res button ajukan komite :" + res)
                                    },
                                    error: function(res) {
                                        console.log('errror')
                                    }
                                });
                            }
                        })
                    }
                },
                error: function(res) {
                    console.log("Error : " + res.trim)
                }
            });
        })
    </script>




    <!-- btn ajukan komite pusat-->
    <script>
        $(document).on('click', '.btn_ajukan_komite_pusat', function() {
            var no_permohonan_kredit = $(this).data('no_permohonan_kredit');
            var status = "";

            $.ajax({
                method: "POST",
                url: '<?= BASEURL . '/wawancara/cek_status_debitur/' ?>',
                data: {
                    'no_permohonan_kredit': no_permohonan_kredit
                },

                success: function(res) {


                    status = res.trim()
                    console.log("status : " + status)

                    if (status == 'DISETUJUI' || status == 'DITOLAK') {
                        Swal.fire({
                            position: 'center',
                            icon: 'info',
                            title: 'Permohonan ini telah ' + status.toLowerCase(),
                            showConfirmButton: false,
                            timer: 3000
                        })
                    } else {

                        Swal.fire({
                            title: "Anda yakin ajukan proses komite??",
                            showCancelButton: true,
                            confirmButtonText: "Ya",
                            cancelButtonText: "Batal",
                            confirmButtonColor: "#3EC59D",
                            cancelButtonColor: "#BB2D3B",

                            showLoaderOnConfirm: true,
                        }).then((result) => {
                            if (result.isConfirmed) {

                                $.ajax({
                                    method: "POST",
                                    url: '<?= BASEURL . '/wawancara/btn_ajukan_pusat/' ?>' + no_permohonan_kredit,
                                    data: {
                                        'no_permohonan_kredit': no_permohonan_kredit
                                    },
                                    success: function(res) {

                                        if (res.trim() == 'berhasil') {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Berhasil ajukan',
                                                showConfirmButton: false,
                                                timer: 1500
                                            }).then((result) => {
                                                window.location.href = "<?= BASEURL ?>/wawancara/daftar_sudah_wawancara/"
                                            })

                                        } else {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'warning',
                                                title: 'Error' + res.trim(),
                                                showConfirmButton: false,
                                            })
                                        }
                                    },
                                    error: function(res) {
                                        console.log('errror')
                                    }
                                });
                            }
                        })
                    }
                },
                error: function(res) {
                    console.log("Error : " + res.trim)
                }
            });
        })
    </script>










    <script>
        function btn_ajukan_pusat(ev) {

            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
            console.log(urlToRedirect); // verify if this is the right URL
            Swal.fire({
                title: "Anda yakin ajukan ke komite pusat (komite direksi)?",
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
                        position: 'center',
                        icon: 'success',
                        title: 'Berhasil ajukan ke komite pusat',
                        showConfirmButton: false,
                        timer: 1000
                    }).then((result) => {
                        window.location.href = urlToRedirect;
                    })
                } else {

                }
            })
        }
    </script>

    <!-- handel tabel slik di modal proses komite -->
    <script>
        $("#tabel_slik_pemohon").DataTable({})
        $(".tabel_tes").DataTable({})
    </script>








</body>

</html>