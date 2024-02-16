<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Daftar Belum Pencairan</title>

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
                            <h1 class="m-0">Daftar Belum Pencairan</h1>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">


                    <main class="content">
                        <div class="container-fluid p-0">

                            <div class="card">
                                <div class="card-body">





                                    <div class="table-responsive">
                                        <table id="example1" class="table table-striped table-hover first display nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        No. Reg
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
                                                        Plafond
                                                    </th>
                                                    <th>
                                                        JW (bln)
                                                    </th>
                                                    <th>
                                                        Tgl. Masuk
                                                    </th>
                                                    <th>
                                                        Tgl. Analisa
                                                    </th>
                                                    <th>
                                                        Tgl. Komite
                                                    </th>

                                                    <th>
                                                        Aksi
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($data['daftar_belum_pencairan'] as $row) : ?>
                                                    <tr>
                                                        <td><?= $row['no_permohonan_kredit'] ?></td>
                                                        <td><?= $row['nama_pemohon'] ?></td>
                                                        <td><?= $row['nama_instansi'] ?></td>
                                                        <td><?= $row['tipe_kredit'] ?></td>
                                                        <td><?= number_format($row['plafond'], 0, ',', '.')  ?></td>
                                                        <td><?= $row['jangka_waktu'] ?></td>
                                                        <td><?php echo  isset($row['tanggal_permohonan']) ? date('d-m-Y', strtotime($row['tanggal_permohonan'])) : ''  ?></td>
                                                        <td><?php echo isset($row['tanggal_wawancara']) ? date('d-m-Y', strtotime($row['tanggal_wawancara'])) : ''  ?></td>
                                                        <td class='tanggal'><?php echo isset($row['tanggal_komite']) ? date('d-m-Y', strtotime($row['tanggal_komite'])) : ''  ?></td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm" id="btn_proses_pencairan" data-no_permohonan_kredit="<?= $row['no_permohonan_kredit'] ?>">Proses Pencairan</button>
                                                            <button class="btn btn-sm detail" style="background-color: <?= w_orange ?>; color :white" data-id="<?= $row['no_permohonan_kredit'] ?>" data-toggle="modal" data-target="#detail">Detail</button>
                                                            <button class="btn btn-sm btn-danger btn_batal_pencairan" data-id="<?= $row['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $row['nama_pemohon'] ?>" data-nama_instansi="<?= $row['nama_instansi'] ?>">Batal Persetujuan Pencairan</button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </main>
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

    <!-- handel bagian tangal agar di format -->
    <script src="<?= BASEURL ?>/assets/plugins/moment/moment-with-locales.js"></script>



    <!-- fungsi datatables -->
    <script>
        // $(document).ready(function() {
        //     // $('#example1').DataTable({
        //     //     // order: [
        //     //     //     [0, 'asc']
        //     //     // ],
        //     // });
        // });

        // $(function() {
        //     $("#example1").DataTable({})
        // });


        $(document).ready(function() {
            $('#example1').dataTable({
                // "aaSorting": [
                //     [4, "asc"]
                // ]
            });
        });
    </script>





    <script>
        $(document).on('click', '#btn_proses_pencairan', function(event) {
            var no_permohonan_kredit = $(this).data('no_permohonan_kredit')
            window.location = "<?= BASEURL . '/pencairan/proses_pencairan/' ?>" + no_permohonan_kredit;
        })
    </script>

    <!-- handel tanggal ketika berhasil di load -->



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


    <!-- batal pencairan  -->
    <script>
        var btn_batal_pencairan = $('.btn_batal_pencairan')

        btn_batal_pencairan.on('click', function() {
            var id = $(this).data('id')
            var nama_pemohon = $(this).data('nama_pemohon')
            var nama_instansi = $(this).data('nama_instansi')

            Swal.fire({
                icon: 'info',
                title: '<strong>Yakin batalkan persetujuan pencairan?</strong>',
                html: 'No. Permohonan : <b> ' + id + '</b>' +
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
                        url: '<?= BASEURL . '/pencairan/btn_batal_pencairan' ?>',
                        data: {
                            'no_permohonan_kredit': id
                        },
                        success: function(res) {

                            var data = res.trim()

                            if (data == 'sukses') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    window.location.href = "<?= BASEURL; ?>/pencairan/daftar_belum_pencairan";
                                })
                            } else if (data == 'gagal') {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Gagal',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    window.location.href = "<?= BASEURL; ?>/pencairan/daftar_belum_pencairan";
                                })
                            }

                        }
                    })

                } else {

                }
            })



        })
    </script>


</body>

</html>