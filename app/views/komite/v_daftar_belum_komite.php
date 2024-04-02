<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Belum Komite</title>

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
                            <h1 class="m-0">Daftar Belum Komite</h1>
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


                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-striped table-hover first display nowrap datatab tabel_reload">
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
                                                        Plafond
                                                    </th>

                                                    <th>
                                                        Jangka Waktu
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

                                            <tbody class="load-myData">

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>



                    <!-- Bagian modal -->


                    <!-- bagian modal ketika tekan tombol  proses komite -->
                    <div class="modal fade modal_1" id="modal_proses_komite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="h4"><strong>Proses Komite</strong></h1>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body data_modal">
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- bagian modal ketika tekan tombol  proses komite -->
                    <div class="modal fade" id="modal_ubah_pin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-xl modal-dialog-centered">
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







                    <!-- style untuk bagian modal approve bagian ketika tekan button approve -->
                    <style>
                        .modal_approve {
                            position: fixed;
                            top: 50% !important;
                            left: 45%;
                            transform: translate(-50%, -50%);
                        }

                        .modal_reject {
                            position: fixed;
                            top: 50% !important;
                            left: 45%;
                            transform: translate(-50%, -50%);
                        }


                        .modal_pending {
                            position: fixed;
                            top: 50% !important;
                            left: 45%;
                            transform: translate(-50%, -50%);
                        }

                        /* .modal_content_dialog_pin_keamaan {
                            height: 50% !important;
                            overflow: visible;
                        }

                        .modal_body_pin_keamaan {
                            height: 50%;
                            overflow: auto;
                        } */
                    </style>



                    <!-- modal jika ada dipending oleh -->
                    <div class="modal fade" id="modal_catatan_pending" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal_dialog_pin_keamaan modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Catatan Pending <span id="dipending_oleh"></span></h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="" id="catatan_pending" style="border: none; outline: none; width:250px" rows="15"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="modal fade modal_approve" id="modal_approve">
                        <div class="modal-dialog modal_dialog_pin_keamaan modal-dialog-centered">
                            <form id='form_modal'>
                                <div class="modal-content modal_content_dialog_pin_keamaan">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><span class="modal-action"></span> Permohonan</h5>
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
                                                            <!-- <input type="hidden" id='syarat_lainnya' name='syarat_lainnya'> -->

                                                            <textarea class="form-control h-50" rows='4' id="syarat_lainnya" name="syarat_lainnya" hidden></textarea>

                                                            <tbody>

                                                                <tr>
                                                                    <td style="vertical-align: baseline; width: 39%">No Permohonan</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>

                                                                    <td style="vertical-align: baseline;">
                                                                        <span id='no_permohonan_kredit2'></span>
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
                                                                    <td id=''>Plafond</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>

                                                                    <td id=''>
                                                                        <span id='plafond_disetujui'></span>
                                                                        <input type="hidden" id='plafond_disetujui_1' name="plafond_disetujui">

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td id=''>JW (Bulan)</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>
                                                                    <td id=''>
                                                                        <span id='jangka_waktu'></span>
                                                                        <input type="hidden" id='jangka_waktu_1' name="jangka_waktu">

                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td id=''>Suku Bunga</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>
                                                                    <td id=''>
                                                                        <span id='suku_bunga'></span>
                                                                        <input type="hidden" id='suku_bunga_1' name="suku_bunga">

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td id=''>Penambahan</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>
                                                                    <td id=''>
                                                                        <span id='penambahan'></span>
                                                                        <input type="hidden" id='penambahan_1' name="penambahan">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td id=''>Provisi Kredit</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>
                                                                    <td id=''>
                                                                        <span id='provisi_kredit'></span>
                                                                        <input type="hidden" id='provisi_kredit_1' name="provisi_kredit">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td id=''>Adm Kredit</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>

                                                                    <td id=''>
                                                                        <span id='administrasi_kredit'></span>
                                                                        <input type="hidden" id='administrasi_kredit_1' name="administrasi_kredit">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td id=''>Angs Perbulan</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>
                                                                    <td id=''>
                                                                        <span id='angsuran_perbulan'></span>
                                                                        <input type="hidden" id='angsuran_perbulan_1' name="angsuran_perbulan">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td id=''>Tabungan</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>
                                                                    <td id=''>
                                                                        <span id='tabungan'></span>
                                                                        <input type="hidden" id='tabungan_1' name="tabungan">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td id=''>Premi Asuransi</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>
                                                                    <td id=''>
                                                                        <span id='premi_asuransi'></span>
                                                                        <input type="hidden" id='premi_asuransi_1' name="premi_asuransi">
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td id=''>Biaya Notaris</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>
                                                                    <td id=''>
                                                                        <span id='biaya_notaris'></span>
                                                                        <input type="hidden" id='biaya_notaris_1' name="biaya_notaris">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td id=''>Biaya APHT</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>
                                                                    <td id=''>
                                                                        <span id='biaya_apht'></span>
                                                                        <input type="hidden" id='biaya_apht_1' name="biaya_apht">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td id=''>Asuransi Krugian</td>
                                                                    <td>
                                                                        <span>:</span>
                                                                    </td>
                                                                    <td id=''>
                                                                        <span id='asuransi_kerugian'></span>
                                                                        <input type="hidden" id='asuransi_kerugian_1' name="asuransi_kerugian">
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
                                                    <input type="password" name='password_approve' class="form-control password_approve" required autocomplete="current-password">
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
                                                    <button type="submit" class="btn btn_proses_approve2 btn-lg btn-primary p-3 btn-block"><span class="modal-action"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>




                    <!-- modal menampilkan catatan pending komite ketika klik tombol catatan pending komite -->
                    <div class="modal fade modal_catatan_pending_komite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="h4"><strong>Catatan Pending</strong></h1>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body catatan_pending_komite">
                                    <td><textarea id='catatan_pending_komite' class="form-control h-25" rows="9" style="margin: 0; padding: 0;"></textarea></td>
                                </div>
                            </div>
                        </div>
                    </div>






                    <!-- Modal Reject -->

                    <!-- style untuk bagian modal reject bagian ketika tekan button reject -->
                    <style>
                        .modal-dialog-centered {
                            position: fixed;
                            top: 0% !important;
                            left: 45%;
                            transform: translate(-50%, -50%);
                        }
                    </style>








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




    <!-- jika modal terclose maka hapus modal tersebut -->
    <script>
        $("#modal_proses_komite").on('hidden.bs.modal', function() {
            $(this).find('.modal-body').empty();
        });
    </script>


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
                    "url": "<?= BASEURL ?>/komite/reload_tabel_daftar_belum_komite",
                    "dataSrc": ""
                },
                "columns": [{
                        "data": "no"
                    },
                    {
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
        })

        setInterval(function() {
            table.ajax.reload(null, false);
            // alert('ok')
        }, 1500);
    </script>



    <!-- bagian modal approve ketika tekan tombol approve  -->
    <script>
        $(document).ready(function() {
            $('#form_modal').submit(function(e) {
                e.preventDefault();

                var pilihan_tombol = $("button[type='submit']").text();

                var no_permohonan_kredit = $('#no_permohonan_kredit').val();

                $('#plafond_disetujui_1').val($('#plafond_disetujui').text().toString())
                $('#jangka_waktu_1').val($('#jangka_waktu').val())
                $('#suku_bunga_1').val($('#suku_bunga').text().toString())
                $('#penambahan_1').val($('#penambahan').text().toString())
                $('#provisi_kredit_1').val($('#provisi_kredit').text().toString())
                $('#administrasi_kredit_1').val($('#administrasi_kredit').text().toString())
                $('#angsuran_perbulan_1').val($('#angsuran_perbulan').text().toString())
                $('#tabungan_1').val($('#tabungan').text().toString())
                $('#premi_asuransi_1').val($('#premi_asuransi').text().toString())
                $('#biaya_notaris_1').val($('#biaya_notaris').text().toString())
                $('#biaya_apht_1').val($('#biaya_apht').text().toString())
                $('#asuransi_kerugian_1').val($('#asuransi_kerugian').text().toString())
                $('#dasar_pertimbangan_analis_1').val($('#dasar_pertimbangan_analis').val())


                var passwordApprove = $('.password_approve');
                passwordApprove.keyup(function() {
                    console.log("Password : " + passwordApprove.val())

                })



                // cek terlebih dahulu password komite jika benar maka tampilkan alert konfirmasi
                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/komite/cek_pass_komite' ?>',
                    data: {
                        username_komite: "<?= $_COOKIE['username'] ?>",
                        password_komite: passwordApprove.val()
                    },
                    success: function(data) {
                        data = data.trim()
                        // cek jika pass komite bernilai benar maka tampilkan alert konfirmasi
                        if (data == 'pass_benar') {

                            Swal.fire({
                                title: "Yakin data sudah benar?",
                                showCancelButton: true,
                                confirmButtonText: "Ya",
                                cancelButtonText: "Batal",
                                confirmButtonColor: "#3EC59D",
                                cancelButtonColor: "#BB2D3B",

                            }).then((res) => {
                                if (res.isConfirmed) {

                                    // cek status permohonan di tabel wawancara jika tidak sama dengan BELUM DIAJUKAN MAKA boleh
                                    $.ajax({
                                        type: 'POST',
                                        url: '<?= BASEURL . '/komite/cek_status_tbl_wawancara' ?>',
                                        data: {
                                            no_permohonan_kredit: no_permohonan_kredit
                                        },

                                        success: function(res) {



                                            res = res.trim()
                                            // alert("Res : " + res + '| Pilihan : ' + pilihan_tombol + '| No Permohonan : ' + no_permohonan_kredit)



                                            if (pilihan_tombol == "Approve") {

                                                var url1 = '<?= BASEURL . '/komite/permohonan_disetujui' ?>'
                                                var url2 = '<?= BASEURL . '/komite/set_log_approve' ?>'
                                                var status = 'DISETUJUI'

                                                proses_approve(status, res, url1, url2)

                                            } else if (pilihan_tombol == "Reject") {
                                                var url1 = '<?= BASEURL . '/komite/permohonan_disetujui' ?>'
                                                var url2 = '<?= BASEURL . '/komite/set_log_reject' ?>'
                                                var status = 'DITOLAK'
                                                proses_approve(status, res, url1, url2)
                                            } else {

                                                var url1 = '<?= BASEURL . '/komite/permohonan_pending' ?>'
                                                var url2 = '<?= BASEURL . '/komite/set_log_pending' ?>'
                                                var status = 'PENDING KOMITE'
                                                proses_approve(status, res, url1, url2)

                                            }

                                        }
                                    })
                                }
                            })

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'PIN salah',
                                showConfirmButton: false,
                                timer: 1050
                            })
                        }
                    },
                    error: function(data) {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Koneksi Gagal',
                            showConfirmButton: false,
                            timer: 1050
                        })
                    }
                })

            })
        })
    </script>



    <script>
        function proses_approve(status, res, url1, url2) {

            if (res.trim() != 'BELUM DIAJUKAN') {

                $.ajax({
                    type: 'post',
                    url: url1,
                    // simpan data jumlah komite dengan cara beri simbol dan & pada nama 
                    data: $('#form_modal').serialize() + '&status=' + status,
                    success: function(res) {
                        res = res.trim()
                        if (res == "DISETUJUI" || res == "DITOLAK" || res == "DIPENDING") {
                            ajax(url2)
                            alert_berhasil()
                        } else if (res == "error_gagal_update_status_komite") {
                            alert_eror(res, 1000)
                        } else if (res == "error_gagal_disetujui") {
                            alert_eror(res, 1000)
                        } else if (res == "kuota_penuh") {
                            res = "Kuota komite pejabat cabang telah terpenuhi. Selanjutnya dibutuhkan komite direksi."
                            alert_eror(res, 5000)
                        } else {
                            alert(res)
                        }


                    },
                    error: function(e_data_disetujui) {
                        console.log("erorr disetujui");
                    }
                })

            } else {
                res = 'Permohonan ini dianalisa kembali oleh RO'
                alert_eror(res, 3000)
            }
        }




        function ajax(url) {
            $.ajax({
                type: 'post',
                url: url,
                data: $('#form_modal').serialize(),
                success: function(res) {}
            })
        }


        function alert_berhasil() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Data berhasil disimpan',
                showConfirmButton: false,
                timer: 1000
            }).then((ok) => {


                // hapus modal
                $('#modal_approve').remove();
                $('.modal-backdrop').remove(); // removes the overlay
                $('#modal_proses_komite').remove();
                // reload halaman 
                location.reload();
            })
        }

        function alert_eror(title, timer) {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: title,
                showConfirmButton: false,
                timer: timer
            })
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






    <!-- bagian modal proses komite ketika tekan proses komite -->
    <script>
        var username = "<?= $_COOKIE['username'] ?>"

        $(document).on('click', '.btn_modal_proses_komite', function(e) {
            var id = $(this).data('id')

            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/login/cek_pin_komite' ?>',
                data: 'username=' + username,
                success: function(res) {
                    if (res.trim() == "pin_sama") {
                        console.log(res.trim())


                        $('#modal_ubah_pin').modal('show');

                        $.ajax({
                            type: 'post',
                            url: '<?= BASEURL . '/login/ubah_pin_modal' ?>',
                            data: 'no_permohonan_kredit=' + id,
                            success: function(data) {
                                $('.data_modal_ubah_pin').html(data)
                            }
                        })


                    } else if (res.trim() == "pin_beda") {
                        console.log(res.trim())
                        console.log(id)
                        $('#modal_proses_komite').modal('show');
                        $.ajax({
                            type: 'post',
                            url: '<?= BASEURL . '/komite/modal_proses_komite' ?>',
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


                            }
                        })

                    }
                }
            })
        })
    </script>



    <script>
        $(document).ready(function() {
            $('#modal_catatan_pending').on('show.bs.modal', function(e) {
                var nilai = $(e.relatedTarget)
                var catatan_pending = nilai.data('catatan_pending')
                var status = nilai.data('status')
                var modal = $('#modal_catatan_pending');
                modal.find('textarea#catatan_pending').html(catatan_pending)
                modal.find('#dipending_oleh').html(status)
            })
        })
    </script>



    <script>
        $(document).on('click', '.lihat_catatan_pending', function(e) {

            var catatan_pending = $(this).data('catatan_pending')

            var modal = $('.modal_catatan_pending_komite')
            modal.find('textarea#catatan_pending_komite').html(catatan_pending) 

            $('.modal_catatan_pending_komite').modal('show');
            // Menambahkan gaya CSS langsung untuk modal berada di tengah
            // Ketika modal ditampilkan

            var modal = $('.modal_catatan_pending_komite');

            // Calculate the top margin to center the modal vertically
            var modalHeight = modal.find('.modal-dialog').outerHeight();
            var windowHeight = $(window).height();
            var marginTop = (windowHeight - modalHeight) / 2 - 200;

            // Apply the top margin to center the modal
            modal.find('.modal-dialog').css('margin-top', marginTop + 'px');
        });
    </script>


</body>

</html>