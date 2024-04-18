<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">





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
                            <h1 class="m-0"><?= $data['judul'] ?></h1>
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


                    <style>
                        .tengah {
                            display: flex;
                            align-items: center;
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







                                            </tbody>
                                        </table>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </main>
                </div><!-- /.container-fluid -->
            </section>


            <!-- modal btn persetujuan_tolak_batal -->

            <div class="modal fade persetujuan_tolak_batal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="h4"><strong>Proses Persetujuan Tolak/Batal</strong></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body data_modal">
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal btn modal_setuju -->
            <div class="modal fade modal_setuju" id="modal_setuju">
                <div class="modal-dialog modal_dialog_pin_keamaan modal-dialog-centered">
                    <form id='form_modal_1'>
                        <div class="modal-content modal_content_dialog_pin_keamaan">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">SETUJU <span id="ket_modal_header"></span></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body modal_body_pin_keamaan">

                                <div class="form-group">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <table id='tabel_modal2'>
                                                    <!-- inoutttttt  -->
                                                    <input type="hidden" id='no_permohonan_kredit' name="no_permohonan_kredit">

                                                    <tbody>

                                                        <tr>
                                                            <td style="vertical-align: baseline; width: 39%">No Permohonan</td>
                                                            <td>
                                                                <span>:</span>
                                                            </td>

                                                            <td style="vertical-align: baseline;">
                                                                <span id='no_permohonan_kredit4'></span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="vertical-align: baseline;">Nama Pemohon</td>
                                                            <td>
                                                                <span>:</span>
                                                            </td>

                                                            <td style="vertical-align: baseline;">

                                                                <style>
                                                                    .tanpa_border {
                                                                        padding-left: 0px;
                                                                        background-color: transparent;
                                                                        border: 0px solid;
                                                                    }

                                                                    .tanpa_border:focus {
                                                                        outline: none;
                                                                    }
                                                                </style>


                                                                <input class="tanpa_border" id="nama_pemohon" type="text">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="vertical-align: baseline;">Instansi</td>
                                                            <td><span>:</span></td>

                                                            <td style="vertical-align: baseline;">
                                                                <span id='nama_instansi'></span>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td style="vertical-align: baseline;">Plafond</td>
                                                            <td><span>:</span></td>

                                                            <td style="vertical-align: baseline;">
                                                                <span id='plafond'></span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="vertical-align: baseline;">Jangka Waktu</td>
                                                            <td><span>:</span></td>

                                                            <td style="vertical-align: baseline;">
                                                                <span id='jangka_waktu'></span>
                                                            </td>
                                                        </tr>




                                                        <style>
                                                            .dasar_pertimbangan_analis2 {
                                                                padding: 1px;
                                                                padding-left: 1px;

                                                            }

                                                            .dasar_pertimbangan_analis2:focus {
                                                                border: none;
                                                                overflow: auto;
                                                                outline: none;

                                                                -webkit-box-shadow: none;
                                                                -moz-box-shadow: none;
                                                                box-shadow: none;

                                                                resize: none;
                                                                /*remove the resize handle on the bottom right*/
                                                            }
                                                        </style>

                                                        <tr>
                                                            <td id='' style="vertical-align: baseline;">Catatan</td>
                                                            <td style="vertical-align: baseline;">
                                                                <span>:</span>
                                                            </td>
                                                            <td>
                                                                <textarea style=" border: none; outline: none;" class="form-control h-50 dasar_pertimbangan_analis2" rows='4' id="dasar_pertimbangan_analis" name="dasar_pertimbangan_analis"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="password">Masukkan PIN</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" name='password_approve' class="form-control password_approve" required>
                                            <div class="input-group-append">
                                                <a href="" class="btn btn-outline-primary"><i class="bi bi-eye-slash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">

                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" form="form_modal_1" class="btn btn-lg btn-primary p-3 btn-block btn_modal_form_1">SETUJU <span id="ket_modal_footer"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



            <!-- modal btn modal_tidak_setuju -->
            <div class="modal fade modal_tidak_setuju" id="modal_tidak_setuju">
                <div class="modal-dialog modal_dialog_pin_keamaan modal-dialog-centered">
                    <form id='form_modal_2'>
                        <div class="modal-content modal_content_dialog_pin_keamaan">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">TIDAK SETUJU <span id="ket_modal_header"></span></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body modal_body_pin_keamaan">

                                <div class="form-group">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <table id='tabel_modal2'>
                                                    <!-- inoutttttt  -->
                                                    <input type="hidden" id='no_permohonan_kredit2' name="no_permohonan_kredit">

                                                    <tbody>

                                                        <tr>
                                                            <td style="vertical-align: baseline; width: 39%">No Permohonan</td>
                                                            <td>
                                                                <span>:</span>
                                                            </td>

                                                            <td style="vertical-align: baseline;">
                                                                <span id='no_permohonan_kredit5'></span>

                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="vertical-align: baseline;">Nama Pemohon</td>
                                                            <td>
                                                                <span>:</span>
                                                            </td>

                                                            <td style="vertical-align: baseline;">

                                                                <style>
                                                                    .tanpa_border {
                                                                        padding-left: 0px;
                                                                        background-color: transparent;
                                                                        border: 0px solid;
                                                                    }

                                                                    .tanpa_border:focus {
                                                                        outline: none;
                                                                    }
                                                                </style>


                                                                <input class="tanpa_border" id="nama_pemohon" type="text">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="vertical-align: baseline;">Instansi</td>
                                                            <td><span>:</span></td>

                                                            <td style="vertical-align: baseline;">
                                                                <span id='nama_instansi'></span>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td style="vertical-align: baseline;">Plafond</td>
                                                            <td><span>:</span></td>

                                                            <td style="vertical-align: baseline;">
                                                                <span id='plafond'></span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="vertical-align: baseline;">Jangka Waktu</td>
                                                            <td><span>:</span></td>

                                                            <td style="vertical-align: baseline;">
                                                                <span id='jangka_waktu'></span>
                                                            </td>
                                                        </tr>




                                                        <style>
                                                            .dasar_pertimbangan_analis2 {
                                                                padding: 1px;
                                                                padding-left: 1px;

                                                            }

                                                            .dasar_pertimbangan_analis2:focus {
                                                                border: none;
                                                                overflow: auto;
                                                                outline: none;

                                                                -webkit-box-shadow: none;
                                                                -moz-box-shadow: none;
                                                                box-shadow: none;

                                                                resize: none;
                                                                /*remove the resize handle on the bottom right*/
                                                            }
                                                        </style>

                                                        <tr>
                                                            <td id='' style="vertical-align: baseline;">Catatan</td>
                                                            <td style="vertical-align: baseline;">
                                                                <span>:</span>
                                                            </td>
                                                            <td>
                                                                <textarea style=" border: none; outline: none;" class="form-control h-50 dasar_pertimbangan_analis2" rows='4' id="dasar_pertimbangan_analis" name="dasar_pertimbangan_analis"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="password">Masukkan PIN</label>
                                        <div class="input-group" id="show_hide_password2">
                                            <input type="password" name='tidak_password_approve' class="form-control tidak_password_approve" required>
                                            <div class="input-group-append">
                                                <a href="" class="btn btn-outline-primary"><i class="bi bi-eye-slash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">

                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" form="form_modal_2" class="btn btn-lg btn-danger p-3 btn-block btn_modal_form_2">TIDAK SETUJU <span id="ket_modal_footer_2"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>





            <!-- style untuk bagian modal reject bagian ketika tekan button reject -->
            <style>
                .modal-dialog-centered {
                    position: fixed;
                    top: 0% !important;
                    left: 45%;
                    transform: translate(-50%, -50%);
                }
            </style>


            <!-- bagian modal ketika pin masih sama dengan pin bhm123 -->
            <div class="modal fade" id="modal_ubah_pin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="h4"><strong>UBAH PIN</strong></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center data_modal_ubah_pin">
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
        var table
        $(document).ready(function() {
            table = $("#example1").DataTable({
                // "processing": true,
                // "language": {
                //     processing: "<p class='mt-3'>Memuat data</p>"
                // },
                // stateSave: true,
                "ajax": {
                    "url": "<?= BASEURL ?>/komite//reload_table_persetujuan_tolak_batal",
                    "dataSrc": ""
                },
                "columns": [{
                        "data": "no_permohonan_kredit"
                    },
                    {
                        "data": "kode_cabang"
                    },
                    {
                        "data": "nama_pemohon"
                    },
                    {
                        "data": "nama_instansi"
                    },
                    {
                        "data": "tipe_kredit"
                    },
                    {
                        "data": "tanggal_permohonan"
                    },
                    {
                        "data": "plafond"
                    },
                    {
                        "data": "jangka_waktu"
                    },
                    {
                        "data": "id_analis"
                    },
                    {
                        "data": "status"
                    },
                    {
                        "data": "aksi"
                    }
                ]
            })

            setInterval(function() {
                table.ajax.reload(null, false);
                // alert('ok')
            }, 1000);



        })
    </script>





    <!-- inisialisasi variavel -->
    <script>
        var username = "<?= $_COOKIE['username'] ?>"
    </script>




    <!-- fungsi ajax template kirim data ke controller -->
    <script>
        function send_ajax(type, url, data) {

            var temp = null;
            $.ajax({
                'async': false,
                type: type,
                url: url,
                data: data,
                success: function(res) {
                    temp = res;
                },
                error: function(res) {
                    temp = res;
                }
            });

            return temp;

        }
    </script>


    <!-- hide password modal apporove-->
    <script>
        $(document).ready(function() {
            $("#show_hide_password").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi bi-eye-slash");
                    $('#show_hide_password i').removeClass("bi bi-eye");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi bi-eye-slash");
                    $('#show_hide_password i').addClass("bi bi-eye");
                }
            });
        });
    </script>



    <script>
        $(document).ready(function() {
            $("#show_hide_password2").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password2 input').attr("type") == "text") {
                    $('#show_hide_password2 input').attr('type', 'password');
                    $('#show_hide_password2 i').addClass("bi bi-eye-slash");
                    $('#show_hide_password2 i').removeClass("bi bi-eye");
                } else if ($('#show_hide_password2 input').attr("type") == "password") {
                    $('#show_hide_password2 input').attr('type', 'text');
                    $('#show_hide_password2 i').removeClass("bi bi-eye-slash");
                    $('#show_hide_password2 i').addClass("bi bi-eye");
                }
            });
        });
    </script>

    <script>
        $("#myButoon").on("click", function() {
            alert("halo");
        })
    </script>



    <!-- tombol persetujuan_tolak_batal -->
    <script>
        $(document).on('click', '.btn_proses_tolak_batal', function() {

            var id = $(this).attr('data-id')

            // alert("ok")


            var cek_pin_komite = send_ajax('post', '<?= BASEURL . '/login/cek_pin_komite' ?>', 'username=' + username)


            if (cek_pin_komite == "pin_sama") {
                $('#modal_ubah_pin').modal('show');

                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/login/ubah_pin_modal' ?>',
                    data: 'no_permohonan_kredit=' + id,
                    success: function(data) {
                        $('.data_modal_ubah_pin').html(data)
                    }
                })


            } else if (cek_pin_komite == "pin_beda") {
                $('.persetujuan_tolak_batal').modal('show')
                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/komite/modal_persetujuan_tolak_batal' ?>',
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

                    }
                })

            } else {

            }






        })
    </script>


    <!-- modal form 1 -->
    <script>
        $('#form_modal_1').on('submit', function(e) {



            $('#no_permohonan_kredit').val($('#no_permohonan_kredit4').text().toString())

            var username = "<?= $_COOKIE['username'] ?>"
            var user_tipe_komite = "<?= $_COOKIE['tipe_komite'] ?>"
            var tgl_create = "<?= date('Y-m-d H:i:s') ?>"
            var status = "SETUJU " + $('#ket_modal_footer').text().toString();

            var lokasi_berkas = "ANALISA";
            var newplafond = $('#plafond').text().toString()
            var plafond
            plafond = String(newplafond.replace(/\./g, ''))
            var jangka_waktu = $('#jangka_waktu').text().toString()






            var passwordApprove = $('.password_approve');
            passwordApprove.keyup(function() {
                console.log("Password : " + passwordApprove.val())

            })


            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/komite/cek_pass_komite' ?>',
                data: {
                    username_komite: username,
                    password_komite: passwordApprove.val()
                },
                success: function(res) {

                    res = res.trim()

                    console.log("Res : " + res)

                    if (res == "pass_benar") {
                        Swal.fire({
                            title: "Yakin data sudah benar?",
                            showCancelButton: true,
                            confirmButtonText: "Ya",
                            cancelButtonText: "Batal",
                            confirmButtonColor: "#3EC59D",
                            cancelButtonColor: "#BB2D3B",
                        }).then((res) => {
                            if (res.isConfirmed) {
                                $.ajax({
                                    type: 'post',
                                    url: '<?= BASEURL . '/komite/setuju_tolak_batal' ?>',
                                    data: $('#form_modal_1').serialize() + "&username=" + username + "&user_tipe_komite=" + user_tipe_komite + "&tgl_create=" + tgl_create + "&status=" + status + "&lokasi_berkas=" + lokasi_berkas + '&plafond=' + plafond + '&jangka_waktu=' + jangka_waktu,
                                    success: function(res) {
                                        if (res.trim() == "sukses") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Data berhasil disimpan',
                                                showConfirmButton: false,
                                                timer: 1000
                                            }).then((ok) => {
                                                $('#modal_setuju').remove();
                                                $('#persetujuan_tolak_batal').remove(); // removes the overlay
                                                location.reload();
                                            })
                                        } else {
                                            alert("Gagal : " + res.trim())
                                        }
                                    }
                                })
                            }
                        })
                    } else if (res == "pass_salah") {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'PIN salah',
                            showConfirmButton: false,
                            timer: 1050
                        })
                    }
                }
            })


            e.preventDefault();
        })
    </script>

    <!-- modal form 2 -->
    <script>
        $('#form_modal_2').on('submit', function(e) {

            e.preventDefault();

            $('#no_permohonan_kredit2').val($('#no_permohonan_kredit5').text().toString())


            var username = "<?= $_COOKIE['username'] ?>"
            var user_tipe_komite = "<?= $_COOKIE['tipe_komite'] ?>"
            var tgl_create = "<?= date('Y-m-d H:i:s') ?>"
            var status = "TIDAK SETUJU " + $('#ket_modal_footer_2').text().toString();
            // var status = "TIDAK SETUJU tes " + "Halo";

            var lokasi_berkas = "ANALISA";
            var newplafond = $('#plafond').text().toString()
            var plafond
            plafond = String(newplafond.replace(/\./g, ''))
            var jangka_waktu = $('#jangka_waktu').text().toString()






            var passwordApprove = $('.tidak_password_approve');
            passwordApprove.keyup(function() {
                console.log("Password : " + passwordApprove.val())

            })


            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/komite/cek_pass_komite' ?>',
                data: {
                    username_komite: username,
                    password_komite: passwordApprove.val()
                },
                success: function(res) {

                    res = res.trim()

                    console.log("Res : " + res)

                    if (res == "pass_benar") {
                        Swal.fire({
                            title: "Yakin data sudah benar?",
                            showCancelButton: true,
                            confirmButtonText: "Ya",
                            cancelButtonText: "Batal",
                            confirmButtonColor: "#3EC59D",
                            cancelButtonColor: "#BB2D3B",
                        }).then((res) => {
                            if (res.isConfirmed) {
                                $.ajax({
                                    type: 'post',
                                    url: '<?= BASEURL . '/komite/tidak_setuju_tolak_batal' ?>',
                                    data: $('#form_modal_2').serialize() + "&username=" + username + "&user_tipe_komite=" + user_tipe_komite + "&tgl_create=" + tgl_create + "&status=" + status + "&lokasi_berkas=" + lokasi_berkas + '&plafond=' + plafond + '&jangka_waktu=' + jangka_waktu,
                                    success: function(res) {

                                        if (res.trim() == "sukses") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Data berhasil disimpan',
                                                showConfirmButton: false,
                                                timer: 1000
                                            }).then((ok) => {
                                                $('#modal_setuju').remove();
                                                $('#persetujuan_tolak_batal').remove(); // removes the overlay
                                                location.reload();
                                            })
                                        } else {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'error',
                                                title: 'Error : ' + res.trim(),
                                                showConfirmButton: false,
                                                timer: 1050
                                            })
                                        }


                                    }
                                })
                            }

                        })
                    } else if (res == "pass_salah") {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'PIN salah',
                            showConfirmButton: false,
                            timer: 1050
                        })
                    }
                }
            })



        })
    </script>

    <!-- <script>
        setInterval(function() {
            location.reload();
        }, 1500);
    </script> -->




</body>

</html>