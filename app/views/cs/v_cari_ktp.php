<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan KTP Pemohon</title>

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





        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <!-- <div class="col-sm-6">
                            <h1 class="m-0">Cek No KTP</h1>
                        </div> -->

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

                            <form action="<?= BASEURL; ?>/cs/hasil_cari_ktp" method="POST">
                                <div class="row">
                                    <div class="col-sm-12 ">
                                        <div class="card">
                                            <div class="card-header">
                                                <h1 class="h4"><strong>Masukkan No. KTP Pemohon</strong></h1>
                                            </div>
                                            <div class="card-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="no_ktp" placeholder="Masukkan No. KTP Pemohon" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <!-- <button class=" btn btn-info btn-sm input-group-text" id="basic-addon2" name="btn_cari" value="cari">Cari</button> -->
                                                        <input type="submit" class="btn btn-info btn-sm input-group-text btn_cari" id="btn_modal_cari_ktp" name="btn_cari" value="cari">
                                                        <!-- <input type="submit" value="Cari"> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <?php
                            if ($_COOKIE['no_ktp'] != "kosong") {
                                if ($data['hasil'] > 0) {
                            ?>
                                    <?php $a = 1;
                                    foreach ($data['m_cari_ktp'] as $row) : ?>
                                        <tr>
                                            <!-- <td><?= $a++ ?></td> -->
                                            <!-- <td><?= $row['nama_pemohon'] ?></td> -->
                                            <!-- <td><?= $row['no_ktp'] ?></td> -->
                                            <!-- <td><?= $row['kode_cabang'] ?></td> -->
                                            <!-- <td><?= $row['status'] ?></td> -->

                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                    </table>
                        </div>

                </div>
        </div>
    </div>
    </div>

    <div class="modal fade modal_no_ktp" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="h4"><strong>Riwayat Permohonan</strong></h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                    <div class="row">
                        <div class="col-lg-12">
                            <div class="">
                                <div class="">

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-striped table-hover first display nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>
                                                        No Permohonan
                                                    </th>

                                                    <th>
                                                        Nama Pemohon
                                                    </th>
                                                    <th>
                                                        Instansi
                                                    </th>

                                                    <th>
                                                        No. KTP
                                                    </th>
                                                    <th>
                                                        Tanggal Masuk
                                                    </th>
                                                    <th>
                                                        Kode Cabang
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



                                                foreach ($data['m_cari_ktp'] as $row) : ?>
                                                    <tr>

                                                        <td><?= $a++ ?></td>
                                                        <td><?= $row['no_permohonan_kredit'] ?></td>
                                                        <td><?= $row['nama_pemohon'] ?></td>
                                                        <td><?= $row['nama_instansi'] ?></td>
                                                        <td><?= $row['no_ktp_pemohon'] ?></td>
                                                        <td><?= isset($row['tanggal_permohonan']) ? date('d-m-Y', strtotime($row['tanggal_permohonan'])) : ''   ?></td>

                                                        <td><?= $row['kode_cabang'] ?></td>
                                                        <td>
                                                            <?php

                                                            if ($row['tanggal_tolak'] == null and $row['tanggal_pencairan'] == null and $row['tanggal_batal'] == null) {
                                                                echo "PENDING";
                                                            } else {
                                                                if ($row['tanggal_tolak'] != null) {
                                                                    echo "TOLAK";
                                                                } else if ($row['tanggal_pencairan'] != null) {
                                                                    echo "CAIR";
                                                                } else if ($row['tanggal_batal'] != null) {
                                                                    echo "BATAL";
                                                                }
                                                            }



                                                            ?>

                                                        </td>

                                                        <td><button class="btn " style="background-color: <?= w_orange ?>; color:white" data-toggle="modal" data-target="#modal_detail" data-id="<?= $row['no_permohonan_kredit'] ?>">Lihat detail</button></td>

                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <?php

                                    echo "<br>";
                                    echo "KTP ditemukan apakah anda ingin melanjutkan inputan permohonan?";
                                    echo "<br>";

                    ?>
                    <a class="btn btn-success mt-2" href="<?= BASEURL ?>/cs/input_permohonan_kredit_lama">Klik untuk melanjutkan</a>



                </div>
            </div>
        </div>
    </div>



<?php
                                } else {

?>
    <!-- <p>Tidak ada</p> -->


    <div class="modal fade modal_no_ktp" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog   modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                                <h1 class="h4"><strong>Detail</strong></h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> -->
                <div class="modal-body">

                    <div class="card-body text-center">
                        <h1 class="h4 text-danger"><strong>No. KTP Tidak ditemukan</strong></h1>
                        <a class="btn btn-success mt-2" href="<?= BASEURL ?>/cs/input_permohonan_kredit">Klik untuk membuat permohonan baru</a>
                    </div>




                </div>
            </div>
        </div>
    </div>

<?php

                                }
                            }

?>






</div>
</main>





</div><!-- /.container-fluid -->
</section>
<!-- /.content -->


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

                    // $('#modal_proses_komite').modal();
                }
            })
        })
    })
</script>







<!-- daftar nasabah lama -->
<script>
    // $('#btn_modal_cari_ktp').click(function() {
    //     $(".modal_no_ktp").modal("show");
    // })


    $(".modal_no_ktp").modal("show");





    $(".modal_cetak_laporan_cs").modal("show");

    $(".modal_cetak_laporan_cs").modal("show");

    $(document).ready(function() {
        $('#tabel_data_kredit').DataTable({
            "oLanguage": {

                "sSearch": "Cari Data:",
                "sShow": "Cari Data:",
            },

            responsive: true,
        });
    });












    $("#form_cs_edit_data_kredit_lama").on('submit', function(e, params) {
        var localParams = params || {};

        if (!localParams.send) {
            e.preventDefault();
        }
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
                Swal.fire(
                    'Data berhasil disimpan',
                    '',
                    'success'
                ).then((ok) => {
                    $("#form_cs_edit_data_kredit_lama").off("submit").submit();
                })
            }
        })
    })

    function btn_batal_input_kredit_lama(ev) {
        var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
        console.log(urlToRedirect); // verify if this is the right URL
        Swal.fire({
            title: "Yakin batal input?",
            // icon: 'success',
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            confirmButtonColor: "#3EC59D",
            cancelButtonColor: "#BB2D3B",

            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = urlToRedirect;
            } else {

            }
        })

    }
</script>









<script>
    // $(document).ready(function() {
    //     $('#tabel_data_kredit').DataTable({
    //         "oLanguage": {

    //             "sSearch": "Cari Data:",
    //             "sShow": "Cari Data:",
    //         },

    //         // dom: 'Bfrtip',
    //         // buttons: [
    //         //     'print',
    //         //     'csv',
    //         //     'excel',
    //         //     'pdf'
    //         // ],
    //         // buttons: {
    //         //     dom: {
    //         //         button: {
    //         //             className: 'btn btn-outline-info mr-2'
    //         //         }
    //         //     },
    //         //     buttons: [{
    //         //         extend: 'excelHtml5',
    //         //         // title: 'Student Letter Request List',
    //         //     }]

    //         // }

    //         responsive: true,
    //         buttons: {
    //             dom: {
    //                 button: {
    //                     className: 'btn btn-outline-info mr-2'
    //                 }
    //             },
    //             buttons: [{
    //                     //EXCEL
    //                     extend: 'excelHtml5',
    //                     //text: '<i class="fas fa-file-excel"></i> EXCEL', //u can define a diferent text or icon
    //                     // title: 'Student Letter Request List',
    //                 },
    //                 {
    //                     //PRINT
    //                     extend: 'print',
    //                     //text: '<i class="fas fa-print"></i> IMPRIMIR',
    //                     // title: 'Student Letter Request List',
    //                 },
    //                 {
    //                     //COPY
    //                     extend: 'copy',
    //                     //text: '<i class="fas fa-print"></i> IMPRIMIR',
    //                     // title: 'Student Letter Request List',
    //                 },
    //                 {
    //                     //COPY
    //                     extend: 'pdf',
    //                     //text: '<i class="fas fa-print"></i> IMPRIMIR',
    //                     // title: 'Student Letter Request List',
    //                 }
    //             ]
    //         },


    //     });
    // });
</script>







</body>

</html>