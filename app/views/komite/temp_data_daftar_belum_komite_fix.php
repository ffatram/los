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
                                            <tbody class="">
                                                <?php $a = 1;

                                                if (isset($data['data'])) {
                                                    foreach ($data['data'] as $row) : ?>
                                                        <tr>

                                                            <td><?= $a++ ?></td>
                                                            <td><?= $row['no_permohonan_kredit'] ?></td>
                                                            <td><?= $row['kode_cabang'] ?></td>
                                                            <td><?= $row['nama_pemohon'] ?></td>
                                                            <td><?= $row['nama_instansi'] ?></td>
                                                            <td><?= $row['tipe_kredit'] ?></td>
                                                            <td><?= date('d-m-Y', strtotime($row['tanggal_permohonan']))  ?></td>
                                                            <td><?= number_format(($row['plafond']), 0, ",", "."); ?></td>
                                                            <td><?= $row['jangka_waktu'] ?></td>
                                                            <td><?= $row['id_analis'] ?></td>

                                                            <?php
                                                            if (strpos($row['status'], "DIPENDING") !== false) {

                                                                $pecah = explode(" ", $row['status']);
                                                                //mencari element array 0
                                                                $hasil = $pecah[2];

                                                            ?>
                                                                <td> <a href="" data-toggle="modal" data-target="#modal_catatan_pending" data-catatan_pending="<?= $row['catatan_pending'] ?>" data-status="<?= $hasil ?>"><?= $row['status'] ?> </a> </td>

                                                            <?php } else { ?>

                                                                <td> <?= $row['status'] ?> </td>

                                                            <?php } ?>

                                                            <td>
                                                                <button type="button" id="btn_modal_proses_komite" data-toggle="modal" data-target="#modal_proses_komite" data-id="<?= $row['no_permohonan_kredit'] ?>" class="btn btn-success" data-backdrop="static" data-keyboard="false">Proses Komite</button>
                                                            </td>

                                                        </tr>
                                                <?php endforeach;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>



                    <!-- Bagian modal -->


                    <!-- bagian modal ketika tekan tombol  proses komite -->
                    <div class="modal fade" id="modal_proses_komite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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







                    <!-- style untuk bagian modal approve bagian ketika tekan button approve -->
                    <style>
                        .modal_approve {
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
                            <form id='form_modal_approve'>
                                <div class="modal-content modal_content_dialog_pin_keamaan">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Approve Permohonan</h5>
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
                                                    <button id='submit_pin' type="submit" class="btn btn-lg btn-primary p-3 btn-block">Approve</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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









                    <!-- <div class="modal fade modal_reject" id="modal_reject">
                        <div class="modal-dialog modal_dialog_reject modal-dialog-centered">
                            <form id="form_modal_reject">
                                <div class="modal-content">
                                    <div class="modal-header modal_content_dialog_reject">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Reject Permohonan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body ">

                                        <input type="hidden" id='plafond_disetujui_2' name="plafond_disetujui">
                                        <input type="hidden" id='jangka_waktu_2' name="jangka_waktu">
                                        <input type="hidden" id='suku_bunga_2' name="suku_bunga">
                                        <input type="hidden" id='penambahan_2' name="penambahan">
                                        <input type="hidden" id='provisi_kredit_2' name="provisi_kredit">
                                        <input type="hidden" id='administrasi_kredit_2' name="administrasi_kredit">
                                        <input type="hidden" id='angsuran_perbulan_2' name="angsuran_perbulan">
                                        <input type="hidden" id='tabungan_2' name="tabungan">
                                        <input type="hidden" id='premi_asuransi_2' name="premi_asuransi">
                                        <input type="hidden" id='biaya_notaris_2' name="biaya_notaris">
                                        <input type="hidden" id='biaya_apht_2' name="biaya_apht">
                                        <input type="hidden" id='asuransi_kerugian_2' name="asuransi_kerugian">
                                        <textarea style="display:none;" id='dasar_pertimbangan_analis_2' name="dasar_pertimbangan_analis"></textarea>




                                        <div class="form-group">
                                            <label for="password">Masukkan Password</label>
                                            <div class="input-group" id="show_hide_password_reject">
                                                <input type="password" name='password_approve__reject' class="form-control password_reject" required autocomplete="current-password">
                                                <div class="input-group-append">
                                                    <a href="" class="btn btn-outline-primary"><i class="bi bi-eye-slash" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="no_permohonan_kredit" id="no_permohonan_kredit_reject">
                                        <button type="submit" class="btn btn-lg btn-danger p-3 btn-block">Reject</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->








                    <div class="modal fade modal_reject" id="modal_reject">
                        <div class="modal-dialog modal_dialog_pin_keamaan modal-dialog-centered">
                            <form id="form_modal_reject">
                                <div class="modal-content modal_content_dialog_pin_keamaan">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Reject Permohonan</h5>
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
                                                    <input type="password" name='password_approve' class="form-control password_reject" required autocomplete="current-password">
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
                                                    <button id='submit_pin' type="submit" class="btn btn-lg btn-danger btn-block">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>







                    <!-- modal pending -->



                    <div class="modal fade modal_pending" id="modal_pending">
                        <div class="modal-dialog modal_dialog_pin_keamaan modal-dialog-centered">
                            <form id='form_modal_pending'>
                                <div class="modal-content modal_content_dialog_pin_keamaan">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Pending Permohonan</h5>
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
                                                    <input type="password" name='password_pending' class="form-control password_pending" required autocomplete="current-password">
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
                                                    <button id='submit_pin' type="submit" class="btn btn-lg btn-info btn-block">Pending</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>





                    <!-- Bagian modal -->













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

    <!-- fungsi datatables -->
    <script>
        $(function() {
            $("#example1").DataTable({})
        });
    </script>
    <!-- hide password modal apporove-->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
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


    <!-- hide password modal reject-->
    <script>
        $(document).ready(function() {
            $("#show_hide_password_reject a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password_reject input').attr("type") == "text") {
                    $('#show_hide_password_reject input').attr('type', 'password');
                    $('#show_hide_password_reject i').addClass("bi bi-eye-slash");
                    $('#show_hide_password_reject i').removeClass("bi bi-eye");
                } else if ($('#show_hide_password_reject input').attr("type") == "password") {
                    $('#show_hide_password_reject input').attr('type', 'text');
                    $('#show_hide_password_reject i').removeClass("bi bi-eye-slash");
                    $('#show_hide_password_reject i').addClass("bi bi-eye");
                }
            });
        });
    </script>



    <!-- bagian modal proses komite ketika tekan proses komite -->
    <script>
        $(document).ready(function() {
            $('#modal_proses_komite').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('id')
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

                        // $('#modal_proses_komite').modal();
                    }
                })
            })
        })
    </script>

    <!-- bagian modal approve ketika tekan tombol approve  -->
    <script>
        $('#form_modal_approve').on('submit', function(e) {

            e.preventDefault();

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

                                $.ajax({
                                    type: 'post',
                                    url: '<?= BASEURL . '/komite/permohonan_disetujui' ?>',
                                    // simpan data jumlah komite dengan cara beri simbol dan & pada nama 
                                    data: $('#form_modal_approve').serialize() + '&status=' + "DISETUJUI",
                                    success: function(s_data_disetujui) {
                                        s_data_disetujui = s_data_disetujui.trim()
                                        if (s_data_disetujui == "disetujui") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Data berhasil disimpan',
                                                showConfirmButton: false,
                                                timer: 1000
                                            }).then((ok) => {
                                                // $("#form_modal_approve").off("submit").submit();

                                                // hapus modal
                                                $('#modal_approve').remove();
                                                $('.modal-backdrop').remove(); // removes the overlay
                                                $('#modal_proses_komite').remove();
                                                // reload halaman 
                                                location.reload();
                                            })
                                        }
                                        // jika telah di tolak
                                        else if (s_data_disetujui == "DITOLAK") {

                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Data berhasil disimpan',
                                                showConfirmButton: false,
                                                timer: 1000
                                            }).then((ok) => {
                                                // $("#form_modal_approve").off("submit").submit();

                                                // hapus modal
                                                $('#modal_approve').remove();
                                                $('.modal-backdrop').remove(); // removes the overlay
                                                $('#modal_proses_komite').remove();
                                                // reload halaman 
                                                location.reload();
                                            })

                                        } else if (s_data_disetujui == "error_gagal_update_status_komite") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'error',
                                                title: 'Error gagal update komite',
                                                showConfirmButton: false,
                                                timer: 1000
                                            })

                                        } else if (s_data_disetujui == "error_gagal_disetujui") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'error',
                                                title: 'Error gagal simpan data',
                                                showConfirmButton: false,
                                                timer: 1000
                                            })
                                        } else if (s_data_disetujui == "kuota_penuh") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'error',
                                                title: 'Kuota komite pejabat cabang telah terpenuhi. Selanjutnya dibutuhkan komite direksi.',
                                                showConfirmButton: false,
                                                timer: 5000
                                            })
                                        }
                                        console.log(s_data_disetujui);
                                    },
                                    error: function(e_data_disetujui) {
                                        console.log("erorr disetujui");
                                    }
                                })
                            }
                        })
                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Password salah',
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




            // $.ajax({
            //     type: 'post',
            //     url: '<?= BASEURL . '/komite/cek_pass_komite' ?>',
            //     data: {
            //         username_komite: "<?= $_COOKIE['username'] ?>",
            //         password_komite: password_komite.val()
            //     },
            //     success: function(pass) {
            //         if (pass == "pass_benar") {
            //             Swal.fire({
            //                 title: "Yakin data sudah benar?",
            //                 showCancelButton: true,
            //                 confirmButtonText: "Ya",
            //                 cancelButtonText: "Batal",
            //                 confirmButtonColor: "#3EC59D",
            //                 cancelButtonColor: "#BB2D3B",
            //                 showLoaderOnConfirm: true,
            //             }).then((result) => {
            //                 if (result.isConfirmed) {
            //                     $.ajax({
            //                         type: 'post',
            //                         url: '<?= BASEURL . '/komite/permohonan_disetujui' ?>',
            //                         // simpan data jumlah komite dengan cara beri simbol dan & pada nama 
            //                         data: $('#form_modal_approve').serialize() + '&status=' + "DISETUJUI",
            //                         success: function(s_data_disetujui) {
            //                             if (s_data_disetujui == "disetujui") {
            //                                 Swal.fire({
            //                                     position: 'center',
            //                                     icon: 'success',
            //                                     title: 'Permohonan telah di setujui',
            //                                     showConfirmButton: false,
            //                                     timer: 1000
            //                                 }).then((ok) => {
            //                                     $("#form_modal_approve").off("submit").submit();
            //                                     $('#modal_approve').remove();
            //                                     $('.modal-backdrop').remove(); // removes the overlay
            //                                     $('#modal_proses_komite').remove();
            //                                     location.reload();
            //                                 })
            //                             } else if (s_data_disetujui == "error_gagal_update_status_komite") {
            //                                 Swal.fire({
            //                                     position: 'center',
            //                                     icon: 'error',
            //                                     title: 'Error gagal update komite',
            //                                     showConfirmButton: false,
            //                                     timer: 1000
            //                                 })

            //                             } else if (s_data_disetujui == "error_gagal_disetujui") {
            //                                 Swal.fire({
            //                                     position: 'center',
            //                                     icon: 'error',
            //                                     title: 'Error gagal simpan data',
            //                                     showConfirmButton: false,
            //                                     timer: 1000
            //                                 })
            //                             } else if (s_data_disetujui == "kuota_penuh") {
            //                                 Swal.fire({
            //                                     position: 'center',
            //                                     icon: 'error',
            //                                     title: 'Kuota Komite telah terpenuhi',
            //                                     showConfirmButton: false,
            //                                     timer: 1000
            //                                 })
            //                             }
            //                             console.log(s_data_disetujui);
            //                         },
            //                         error: function(e_data_disetujui) {
            //                             console.log("erorr disetujui");
            //                         }
            //                     })
            //                 }
            //             })
            //         } else {
            //             console.log(pass)
            //             Swal.fire({
            //                 position: 'center',
            //                 icon: 'error',
            //                 title: 'Password salah',
            //                 showConfirmButton: false,
            //                 timer: 1050
            //             })
            //         }
            //     }
            // })


        }) //akhir fungsi submit
    </script>








    <!-- bagian modal tombol reject  -->
    <script>
        $('#form_modal_reject').on('submit', function(e) {
            e.preventDefault();
            // $('#plafond_disetujui_2').val("0")
            // $('#jangka_waktu_2').val("0")
            // $('#suku_bunga_2').val("0")
            // $('#penambahan_2').val("0")
            // $('#provisi_kredit_2').val("0")
            // $('#administrasi_kredit_2').val("0")
            // $('#angsuran_perbulan_2').val("0")
            // $('#tabungan_2').val("0")
            // $('#premi_asuransi_2').val("0")
            // $('#biaya_notaris_2').val("0")
            // $('#biaya_apht_2').val("0")
            // $('#asuransi_kerugian_2').val("0")
            // $('#dasar_pertimbangan_analis_2').val("0")

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


            var passwordApprove = $('.password_reject');
            passwordApprove.keyup(function() {
                console.log("Password : " + passwordApprove.val())

            })

            // console.log($('#no_permohonan_kredit_reject').val())
            // console.log("Password : " + passwordApprove.val())


            // cek terlebih dahulu password komite jika benar maka tampilkan alert konfirmasi
            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/komite/cek_pass_komite' ?>',
                data: {
                    username_komite: "<?= $_COOKIE['username'] ?>",
                    password_komite: passwordApprove.val()
                },
                success: function(data) {
                    // cek jika pass komite bernilai benar maka tampilkan alert konfirmasi

                    data = data.trim();
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

                                $.ajax({
                                    type: 'post',
                                    url: '<?= BASEURL . '/komite/permohonan_disetujui' ?>',
                                    // simpan data jumlah komite dengan cara beri simbol dan & pada nama 
                                    data: $('#form_modal_reject').serialize() + '&status=' + "DITOLAK",
                                    success: function(s_data_disetujui) {
                                        s_data_disetujui = s_data_disetujui.trim()
                                        if (s_data_disetujui == "DITOLAK") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Data berhasil disimpan',
                                                showConfirmButton: false,
                                                timer: 1000
                                            }).then((ok) => {
                                                // $("#form_modal_approve").off("submit").submit();
                                                // $('#modal_approve').remove();
                                                // $('.modal-backdrop').remove(); // removes the overlay
                                                // $('#modal_proses_komite').remove();
                                                location.reload();
                                            })
                                        } else if (s_data_disetujui == "error_gagal_update_status_komite") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'error',
                                                title: 'Error gagal update komite',
                                                showConfirmButton: false,
                                                timer: 1000
                                            })

                                        } else if (s_data_disetujui == "error_gagal_disetujui") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'error',
                                                title: 'Error gagal simpan data',
                                                showConfirmButton: false,
                                                timer: 1000
                                            })
                                        } else if (s_data_disetujui == "kuota_penuh") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'error',
                                                title: 'Kuota komite pejabat cabang telah terpenuhi. Selanjutnya dibutuhkan komite direksi.',
                                                showConfirmButton: false,
                                                timer: 5000
                                            })
                                        }


                                        console.log('Hasil ajax :' + s_data_disetujui);

                                    }
                                    // ,
                                    // error: function(e_data_disetujui) {
                                    //     console.log("erorr disetujui");
                                    // }
                                })
                            }
                        })
                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Password salah',
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





        }) //akhir fungsi submit
    </script>



    <!-- modal reject -->


    <script>
        $('#form_modal_pending').on('submit', function(e) {
            e.preventDefault();

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


            var passwordApprove = $('.password_pending');
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
                    // cek jika pass komite bernilai benar maka tampilkan alert konfirmasi

                    data = data.trim()
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

                                $.ajax({
                                    type: 'post',
                                    url: '<?= BASEURL . '/komite/permohonan_pending' ?>',
                                    // simpan data jumlah komite dengan cara beri simbol dan & pada nama 
                                    data: $('#form_modal_pending').serialize() + '&status=' + "PENDING KOMITE",
                                    success: function(res) {

                                        res = res.trim()
                                        if (res == 'berhasil') {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Data berhasil disimpan',
                                                showConfirmButton: false,
                                                timer: 1000
                                            }).then((ok) => {
                                                location.reload();
                                            })

                                        } else if (res == 'gagal') {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Data gagal disimpan',
                                                showConfirmButton: false,
                                                timer: 1000
                                            }).then((ok) => {
                                                // location.reload();
                                            })
                                        } else if ('kuota_penuh') {

                                            Swal.fire({
                                                position: 'center',
                                                icon: 'error',
                                                title: 'Kuota komite pejabat cabang telah terpenuhi. Selanjutnya dibutuhkan komite direksi.',
                                                showConfirmButton: false,
                                                timer: 5000
                                            })

                                        } else {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Erorr',
                                                showConfirmButton: false,
                                                timer: 1000
                                            }).then((ok) => {
                                                // location.reload();
                                            })
                                        }

                                    }
                                })
                            }
                        })
                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Password salah',
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

        }) //akhir fungsi submit
    </script>








    <!-- <script>
        //form modal reject


        $('#form_modal_approve').on('submit', function(e) {

            e.preventDefault();
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



            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/komite/cek_pass_komite' ?>',
                data: {
                    username_komite: "<?= $_COOKIE['username'] ?>",
                    password_komite: password_komite.val()
                },
                success: function(pass) {
                    if (pass == "pass_benar") {
                        Swal.fire({
                            title: "Yakin data sudah benar?",
                            showCancelButton: true,
                            confirmButtonText: "Ya",
                            cancelButtonText: "Batal",
                            confirmButtonColor: "#3EC59D",
                            cancelButtonColor: "#BB2D3B",
                            showLoaderOnConfirm: true,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    type: 'post',
                                    url: '<?= BASEURL . '/komite/permohonan_disetujui' ?>',
                                    // simpan data jumlah komite dengan cara beri simbol dan & pada nama 
                                    data: $('#form_modal_approve').serialize() + '&status=' + "DISETUJUI",
                                    success: function(s_data_disetujui) {
                                        if (s_data_disetujui == "disetujui") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Permohonan  di setujui',
                                                showConfirmButton: false,
                                                timer: 1000
                                            }).then((ok) => {
                                                $("#form_modal_approve").off("submit").submit();
                                                $('#modal_approve').remove();
                                                $('.modal-backdrop').remove(); // removes the overlay
                                                $('#modal_proses_komite').remove();
                                                location.reload();
                                            })
                                        } else if (s_data_disetujui == "error_gagal_update_status_komite") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'error',
                                                title: 'Error gagal update komite',
                                                showConfirmButton: false,
                                                timer: 1000
                                            })

                                        } else if (s_data_disetujui == "error_gagal_disetujui") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'error',
                                                title: 'Error gagal simpan data',
                                                showConfirmButton: false,
                                                timer: 1000
                                            })
                                        } else if (s_data_disetujui == "kuota_penuh") {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'error',
                                                title: 'Kuota Komite  terpenuhi',
                                                showConfirmButton: false,
                                                timer: 1000
                                            })
                                        }
                                        console.log(s_data_disetujui);
                                    },
                                    error: function(e_data_disetujui) {
                                        console.log("erorr disetujui");
                                    }
                                })
                            }
                        })
                    } else {
                        console.log(pass)
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Password salah',
                            showConfirmButton: false,
                            timer: 1050
                        })
                    }
                }
            })


        }) //akhir fungsi submit


        $('#form_modal_reject').on('submit', function(e) {
            e.preventDefault();


            $('#plafond_disetujui_2').val("0")
            $('#jangka_waktu_2').val("0")
            $('#suku_bunga_2').val("0")
            $('#penambahan_2').val("0")
            $('#provisi_kredit_2').val("0")
            $('#administrasi_kredit_2').val("0")
            $('#angsuran_perbulan_2').val("0")
            $('#tabungan_2').val("0")
            $('#biaya_notaris_2').val("0")
            $('#biaya_apht_2').val("0")
            $('#asuransi_kerugian_2').val("0")
            $('#dasar_pertimbangan_analis_2').val("0")


            $.ajax({
                type: 'post',
                url: '<?= BASEURL . '/komite/cek_pass_komite' ?>',
                data: {
                    username_komite: "<?= $_COOKIE['username'] ?>",
                    password_komite: $('#pin_pass_reject').val()
                },
                success: function(pass) {

                    if (pass == "pass_benar") {
                        Swal.fire({
                            title: "Yakin reject?",
                            showCancelButton: true,
                            confirmButtonText: "Ya",
                            cancelButtonText: "Batal",
                            confirmButtonColor: "#3EC59D",
                            cancelButtonColor: "#BB2D3B",
                            showLoaderOnConfirm: true,
                        }).then((result) => {
                            $.ajax({
                                type: 'post',
                                url: '<?= BASEURL . '/komite/permohonan_disetujui' ?>',
                                data: $('#form_modal_reject').serialize() + '&status=' + "DITOLAK",
                                success: function(s_data_disetujui) {
                                    if (s_data_disetujui == "disetujui") {
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: 'Permohonan  di reject',
                                            showConfirmButton: false,
                                            timer: 1000
                                        }).then((ok) => {
                                            // $("#form_modal_approve").off("submit").submit();
                                            // $('#modal_approve').remove();
                                            // $('.modal-backdrop').remove(); // removes the overlay
                                            // $('#modal_proses_komite').remove();
                                            // location.reload();
                                        })
                                    } else if (s_data_disetujui == "error_gagal_update_status_komite") {
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'error',
                                            title: 'Error gagal update komite',
                                            showConfirmButton: false,
                                            timer: 1000
                                        })

                                    } else if (s_data_disetujui == "error_gagal_disetujui") {
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'error',
                                            title: 'Error gagal simpan data',
                                            showConfirmButton: false,
                                            timer: 1000
                                        })
                                    } else if (s_data_disetujui == "kuota_penuh") {
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'error',
                                            title: 'Kuota Komite  terpenuhi',
                                            showConfirmButton: false,
                                            timer: 1000
                                        })
                                    }
                                    console.log(s_data_disetujui);
                                },
                                error: function(e) {
                                    console.log(e)
                                }
                            })



                        })

                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Password salah',
                            showConfirmButton: false,
                            timer: 1050
                        })
                    }
                }
            })
        })
    </script>
 -->


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






</body>

</html>