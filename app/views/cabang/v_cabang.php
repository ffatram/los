<!DOCTYPE html>
<html lang="en">

<?= $title = "Daftar Cabang" ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

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


    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- SweetAlert2 -->
    <script src="<?= BASEURL ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>



<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">




        <!-- Navbar -->
        <?php $this->view('cabang/navbar') ?>
        <!-- Navbar -->

        <!-- Side Bar -->
        <?php $this->view('cabang/side_bar') ?>
        <!-- Side Bar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $title ?></h1>
                        </div>

                    </div>
                </div>
            </div>


            <section class="content">
                <div class="container-fluid">


                    <div class="d-flex">
                        <div class="mr-auto p-2 btn btn-sm btn-success mb-2" data-toggle="modal" data-target=".tambah-data">Tambah Cabang</div>
                    </div>


                    <div class="table-responsive">
                        <table id="example1" class="table table-striped table-hover first display nowrap">
                            <thead>
                                <tr>

                                    <th>
                                        No.
                                    </th>

                                    <th>
                                        Kode Cabang
                                    </th>
                                    <th>
                                        Nama Cabang
                                    </th>
                                    <th>
                                        Alamat
                                    </th>
                                    <th>
                                        Kota
                                    </th>

                                    <th>
                                        Telephone
                                    </th>
                                    <th>
                                        Limit
                                    </th>

                                    <th>
                                        Aturan Jumlah Komite
                                    </th>

                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <?php $a = 1;
                                foreach ($data['data'] as $row) : ?>
                                    <tr>
                                        <td>
                                            <?= $a++ ?>
                                        </td>

                                        <td>
                                            <?= $row['kode_cabang'] ?>
                                        </td>
                                        <td>
                                            <?= $row['nama_cabang'] ?>
                                        </td>
                                        <td>
                                            <?= $row['alamat'] ?>
                                        </td>
                                        <td>
                                            <?= $row['kota'] ?>
                                        </td>
                                        <td>
                                            <?= $row['telephone'] ?>
                                        </td>
                                        <td>
                                            <?= number_format($row['limit'], 0, ',', '.')  ?>
                                        </td>
                                        <td>
                                            <?= $row['aturan_jumlah_komite']  ?>
                                        </td>

                                        <td>
                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target=".edit-data" data-id="<?= $row['id'] ?>" data-kode_cabang="<?= $row['kode_cabang'] ?>" data-nama_cabang="<?= $row['nama_cabang'] ?>" data-alamat="<?= $row['alamat'] ?>" data-kota="<?= $row['kota'] ?>" data-telephone="<?= $row['telephone'] ?>" data-limit="<?= $row['limit'] ?>" data-aturan_jumlah_komite="<?= $row['aturan_jumlah_komite'] ?>">Edit</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </section>
        </div>



        <!-- modal -->


        <div class="modal fade tambah-data" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Cabang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="" class="form form_tambah_cabang">

                        <div class="modal-body">

                            <div class="form-group">
                                <label>Kode Cabang</label>
                                <input type="text" name="kode_cabang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Cabang</label>
                                <input type="text" name="nama_cabang" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat Cabang</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kota Cabang</label>
                                <input type="text" name="kota" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Telephone Cabang</label>
                                <input type="telephone" name="telephone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Limit Cabang</label>
                                <input type="text" name="limit" id="limit" onkeypress="return hanyaAngka(event)" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Aturan Jumlah Komite Cabang</label>
                                <input type="text" name="aturan_jumlah_komite" onkeypress="return hanyaAngka(event)" class="form-control">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary simpan">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade edit-data" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Cabang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="" class="form form_edit_cabang">

                        <div class="modal-body">

                            <div class="form-group">
                                <label>Kode Cabang</label>
                                <input type="text" name="kode_cabang" id="kode_cabang" class="form-control kode_cabang">
                            </div>
                            <div class="form-group">
                                <label>Nama Cabang</label>
                                <input type="text" name="nama_cabang" id="nama_cabang" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat Cabang</label>
                                <input type="text" name="alamat" id="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kota Cabang</label>
                                <input type="text" name="kota" id="kota" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Telephone Cabang</label>
                                <input type="telephone" name="telephone" id="telephone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Limit Cabang</label>
                                <input type="text" name="limit" id="limit" onkeypress="return hanyaAngka(event)" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Aturan Jumlah Komite Cabang</label>
                                <input type="text" name="aturan_jumlah_komite" onkeypress="return hanyaAngka(event)" id="aturan_jumlah_komite" class="form-control">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary simpan">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>



        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="<?= BASEURL ?>/cabang">LOS HASAMITRA</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>

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

    <!-- SweetAlert2 -->
    <script src="<?= BASEURL ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>


    <script>
        $(function() {
            $("#example1").DataTable({

            })
        });
    </script>



    <!-- prepare -->

    <!-- fungsi ini untuk mengatur inputan agar hanya angka saja yang di input -->
    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>


    <!-- bagian fungsi mengubah angka -->
    <script>
        function angka(angka, prefix) {
            if (parseFloat(angka) >= 0) {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    plafond = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    plafond += separator + ribuan.join('.');
                }
                plafond = split[1] != undefined ? plafond + ',' + split[1] : plafond;
                return prefix == undefined ? plafond : (plafond ? plafond : '');
            } else {
                angka = angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                return prefix == undefined ? angka : (angka ? angka : '');
            }

        }
    </script>


    <script>
        var n_limit = $('#limit');

        $(document).ready(function() {
            n_limit.val(angka(n_limit.val().toString()))
        })

        n_limit.keyup(function() {
            n_limit.val(angka(n_limit.val()))
        })
    </script>




    <!-- modal btn-simpan tambah cabang -->
    <script>
        var form_tambah_cabang = $('.form_tambah_cabang');
        form_tambah_cabang.on('submit', function(e) {
            e.preventDefault();
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
                        type: 'POST',
                        url: '<?= BASEURL ?>/cabang/simpan',
                        data: form_tambah_cabang.serialize(),
                        success: function(res) {
                            if (res == 'sukses') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil Menyimpan',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    location.reload()
                                })
                            } else {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Gagal menyimpan',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    location.reload()
                                })
                            }
                            console.log(res);
                        },
                        error: function() {
                            alert("eror server")
                        }
                    })
                }
            })
        })
    </script>

    <!-- modal btn edit  -->
    <script>
        // bagian untuk set data ke field edit
        $(document).ready(function() {
            $('.edit-data').on('show.bs.modal', function(e) {
                var data_modal = $(e.relatedTarget)
                var id = data_modal.data('id')
                var kode_cabang = data_modal.data('kode_cabang')
                var nama_cabang = data_modal.data('nama_cabang')
                var alamat = data_modal.data('alamat')
                var kota = data_modal.data('kota')
                var telephone = data_modal.data('telephone')
                var limit = data_modal.data('limit')
                var aturan_jumlah_komite = data_modal.data('aturan_jumlah_komite')
                var modal = $('.edit-data');


                modal.find('#kode_cabang').val(kode_cabang)
                modal.find('#nama_cabang').val(nama_cabang)
                modal.find('#alamat').val(alamat)
                modal.find('#kota').val(kota)
                modal.find('#telephone').val(telephone)
                modal.find('#limit').val(angka(limit.toString()))
                modal.find('#aturan_jumlah_komite').val(aturan_jumlah_komite)

            })
        })

        // bagian untuk proses submit
        var form_edit_cabang = $('.form_edit_cabang');
        form_edit_cabang.on('submit', function(e) {
            e.preventDefault();
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
                        type: 'POST',
                        url: '<?= BASEURL ?>/cabang/update',
                        data: form_edit_cabang.serialize() + '&id=' + id,
                        success: function(res) {
                            if (res == 'sukses') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil Menyimpan',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    location.reload()
                                })
                            } else {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Gagal menyimpan',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    location.reload()
                                })
                            }
                            console.log(res);
                        },
                        error: function() {
                            alert("eror server")
                        }
                    })
                }
            })
        })
    </script>




</body>

</html>