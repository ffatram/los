<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sudah Pencairan</title>

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

<body>

    <div class="wrapper">

        <?php $this->view('pencairan/navbar') ?>

        <!-- Side Bar -->
        <?php $this->view('pencairan/side_bar') ?>
        <!-- Side Bar -->





        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Daftar Sudah Pencairan</h1>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

                <div class="card">
                    <div class="card-body">



                        <div class="table-responsive">
                            <table id="example1" class="table table-striped table-hover first display nowrap datatab">

                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No. Reg</th>
                                        <th scope="col">Nama Debitur</th>
                                        <th scope="col">Instansi</th>
                                        <th scope="col">Nomor PK</th>
                                        <th scope="col">Plafond</th>
                                        <th scope="col">JW (bln)</th>
                                        <th scope="col">Tgl. Masuk</th>
                                        <th scope="col">Tgl. Pencairan</th>
                                        <th scope="col">Aksi</th>

                                    </tr>
                                </thead>


                                <tbody>




                                </tbody>
                            </table>
                        </div>




                    </div>
                </div>




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


        <!-- modal -->

        <div class="modal fade" id="modal_cetak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <h4><b>Cetak Berkas Kredit</b></h4>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class='no'></div>


                        <?php
                        $text = array('Perjanjian Kredit', 'SPK (Asuransi)', 'Perjanjian Fiducia')
                        ?>
                        <div class="row">
                            <?php
                            for ($a = 0; $a < count($text); $a++) {
                            ?>
                                <div class="col">
                                    <div class="card card_btn card_1<?= $a ?>">
                                        <div class="card-body text text-center">
                                            <?= $text[$a] ?>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>



                        <?php
                        $text = array('Bukti Pemberian Kredit', 'SKKT (Asuransi)', 'Daftar Barang Fiducia')
                        ?>
                        <div class="row">
                            <?php
                            for ($a = 0; $a < count($text); $a++) {
                            ?>
                                <div class="col">
                                    <div class="card card_btn card_2<?= $a ?>">
                                        <div class="card-body text text-center">
                                            <?= $text[$a] ?>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>


                        <?php
                        $text = array('Surat Kuasa & Pernyataan ATM', 'Tanda Terima Jaminan', 'Surat Kuasa Menjual Jaminan')
                        ?>
                        <div class="row">
                            <?php
                            for ($a = 0; $a < count($text); $a++) {
                            ?>
                                <div class="col">
                                    <div class="card card_btn card_3<?= $a ?>">
                                        <div class="card-body text text-center">
                                            <?= $text[$a] ?>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>



                        <?php
                        $text = array('AFT BNI', 'Checklist Berkas Kredit', 'PK Back to Back ')
                        ?>
                        <div class="row">
                            <?php
                            for ($a = 0; $a < count($text); $a++) {
                            ?>
                                <div class="col">
                                    <div class="card card_btn card_4<?= $a ?>">
                                        <div class="card-body text text-center">
                                            <?= $text[$a] ?>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>







                        <?php
                        $text = array('Analisa & Keputusan Kredit', 'Cashflow', 'SPPK')
                        ?>
                        <div class="row">
                            <?php
                            for ($a = 0; $a < count($text); $a++) {
                            ?>
                                <div class="col">
                                    <div class="card card_btn card_6<?= $a ?>">
                                        <div class="card-body text text-center">
                                            <?= $text[$a] ?>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>



                        <!-- <?php
                                $text = array('Cash Flow')
                                ?>
                        <div class="row">
                            <?php
                            for ($a = 0; $a < count($text); $a++) {
                            ?>
                                <div class="col">
                                    <div class="card card_btn card_6<?= $a ?>">
                                        <div class="card-body text text-center">
                                            <?= $text[$a] ?>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div> -->


                        <?php
                        $text = array("Cetak SLIK", 'Format Surat Pernyataan',  'Format Surat Kuasa')
                        ?>
                        <div class="row">
                            <?php
                            for ($a = 0; $a < count($text); $a++) {
                            ?>
                                <div class="col">
                                    <div class="card card_btn card_5<?= $a ?>">
                                        <div class="card-body text text-center">
                                            <?= $text[$a] ?>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>





                    </div>
                </div>
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


        <!-- Modal detail all -->
        <div class="modal fade modal_1" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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




        <script>
            $(function() {
                $('#example1').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": {
                        "url": "<?= BASEURL . '/pencairan/get_data_daftar_sudah_pencairan' ?>",
                        "dataType": "json",
                        "type": "POST"
                    },
                    "columns": [{
                            "data": "id"
                        },
                        {
                            "data": "no_permohonan_kredit"
                        },
                        {
                            "data": "nama_debitur"
                        },
                        {
                            "data": "instansi"
                        },
                        {
                            "data": "no_pk"
                        },
                        {
                            "data": "plafond"
                        },
                        {
                            "data": "jw"
                        },
                        {
                            "data": "tgl_masuk"
                        },
                        {
                            "data": "tgl_pencairan"
                        },

                        {
                            "data": "btn_aksi"
                        },

                    ]

                });
            });
        </script>






        <script>
            $(document).ready(function() {
                $('#detail').on('show.bs.modal', function(e) {
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








     



        <!-- tombol hapus -->


        <script>
            $(document).on('click', '.btn_hapus', function() {
                var no_permohonan_kredit = $(this).data('id')
                var nama_pemohon = $(this).data('nama_pemohon')
                var nama_instansi = $(this).data('nama_instansi')
                Swal.fire({
                    icon: 'info',
                    title: '<strong>Yakin hapus data?</strong>',
                    html: 'No. Permohonan : <b> ' + no_permohonan_kredit + '</b>' +
                        '<br>' +
                        'Nama Pemohon : <b> ' + nama_pemohon + '</b>' +
                        '<br>' +
                        'Nama Instansi : <b> ' + nama_instansi + '</b>' +
                        '<br>',
                    // icon: 'success',
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
                            url: '<?= BASEURL . '/pencairan/btn_hapus' ?>',
                            data: {
                                'no_permohonan_kredit': no_permohonan_kredit,
                                'nama_pemohon': nama_pemohon
                            },
                            success: function(res) {

                                var data = res.trim()

                                if (data == "berhasil") {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Data berhasil dihapus',
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then((result) => {
                                        window.location.href = "<?= BASEURL; ?>/pencairan/daftar_sudah_pencairan";
                                    })
                                } else if (data == "gagal") {
                                    Swal.fire({
                                        icon: 'danger',
                                        title: 'Error gagal hapus',
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then((result) => {
                                        window.location.href = "<?= BASEURL; ?>/pencairan/daftar_sudah_pencairan";
                                    })
                                } else {
                                    Swal.fire({
                                        icon: 'danger',
                                        title: 'Error' + data,
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then((result) => {
                                        window.location.href = "<?= BASEURL; ?>/pencairan/daftar_sudah_pencairan";
                                    })
                                }

                            }
                        })

                    } else {

                    }
                })
            })
        </script>







        <script>
            $('#modal_cetak').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('no_permohonan_kredit');



                var card_1 = $('.card_10')
                card_1.on('click', function() {
                    console.log(id)
                    window.location.href = "<?= BASEURL ?>/cetak/cetak_pk/" + id;
                })

                var card_1 = $('.card_11')
                card_1.on('click', function() {
                    console.log(id)
                    window.location.href = "<?= BASEURL ?>/cetak/spk_asuransi/" + id;
                })

                var card_1 = $('.card_20')
                card_1.on('click', function() {
                    window.location.href = "<?= BASEURL ?>/cetak/bukti_pemberian_kredit/" + id;
                })


                var card_1 = $('.card_21')
                card_1.on('click', function() {
                    window.location.href = "<?= BASEURL ?>/cetak/skkt_asuransi/" + id;
                })

                var card_1 = $('.card_30')
                card_1.on('click', function() {
                    console.log(id)
                    window.location.href = "<?= BASEURL ?>/cetak/surat_kuasa_atm/" + id;
                })

                var card_1 = $('.card_31')
                card_1.on('click', function() {
                    console.log(id)
                    window.location.href = "<?= BASEURL ?>/cetak/cetak_tanda_terima_jaminan/" + id;
                })




                var card_1 = $('.card_40')
                card_1.on('click', function() {
                    console.log(id)
                    window.location.href = "<?= BASEURL ?>/cetak/aft_bni/" + id;
                })


                var card_1 = $('.card_41')
                card_1.on('click', function() {
                    console.log(id)
                    window.location.href = "<?= BASEURL ?>/cetak/ceklis_berkas/" + id;
                })


                // var card_1 = $('.card_42')
                // card_1.on('click', function() {
                //     console.log(id)
                //     window.location.href = "<?= BASEURL ?>/cetak/ceklis_berkas/" + id;
                // })


                var card_1 = $('.card_50')
                card_1.on('click', function() {
                    console.log(id)
                    window.location.href = "<?= BASEURL ?>/cetak/cetak_daftar_sudah_slik/" + id;
                })
                var card_1 = $('.card_51')
                card_1.on('click', function() {
                    console.log(id)
                    window.location.href = "<?= BASEURL ?>/cetak/surat_pernyataan/" + id;
                })


                var card_1 = $('.card_52')
                card_1.on('click', function() {
                    console.log(id)
                    window.location.href = "<?= BASEURL ?>/cetak/cetak_surat_kuasa/" + id;
                })






                // var card_1 = $('.card_60')
                // card_1.on('click', function() {
                //     console.log(id)
                //     window.location.href = "<?= BASEURL ?>/cetak/cash_flow/" + id;
                // })



                var card_0 = $('.card_60')
                card_0.on('click', function() {
                    window.location.href = "<?= BASEURL ?>/cetak/analisa_keputusan/" + id;
                })

                var card_1 = $('.card_61')
                card_1.on('click', function() {

                    window.location.href = "<?= BASEURL ?>/cetak/cash_flow/" + id;
                })

                var card_12 = $('.card_62')
                card_12.on('click', function() {
                    window.location.href = "<?= BASEURL ?>/cetak/cetak_sppk/" + id;
                })


            })
        </script>



        <script>
            var card_1 = $('.card_1')
            card_1.on('click', function() {
                alert('hero')
            })
        </script>

        <!-- <script>
            var card_1 = $('.card_31')
            card_1.on('click', function() {
                alert('ok')
            })
        </script> -->


</body>

</html>