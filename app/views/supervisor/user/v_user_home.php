<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data['title'] ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assetsplugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <!-- Navbar -->
        <?= $this->view('supervisor/navbar') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->view('supervisor/side_bar') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">



                                <div class="card-header">
                                    <div class="title">
                                        <h2><b><?= $data['nama_halaman'] ?></b></h2>
                                    </div>
                                </div>

                                <div class="container-fluid p-3">


                                    <button type="button" class="btn btn-primary mb-2 float-right btn-tambah" data-toggle="modal" data-target="#mymodaltambah"> <i class="fas fa-plus"></i> Tambah User</button>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">



                                        <table id="example1" class="table table-head-fixed table-striped text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Level</th>
                                                    <th>Kode Cabang</th>
                                                    <th>Tipe Komite</th>
                                                    <th>Tipe Kredit</th>
                                                    <th>Limit Direksi Awal</th>
                                                    <th>Limit Direksi Akhir</th>

                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                foreach ($data['get_tbl_user'] as $i) :

                                                ?>

                                                    <tr>
                                                        <td><?= $i['username'] ?></td>
                                                        <td><?= $i['nama_lengkap'] ?></td>
                                                        <td><?= $i['level'] ?></td>
                                                        <td><?= $i['kode_cabang'] ?></td>
                                                        <td><?= $i['tipe_komite'] ?></td>
                                                        <td><?= $i['tipe_kredit'] ?></td>
                                                        <td><?= number_format($i['limit_direksi_awal'], 0, ',', '.')  ?></td>
                                                        <td><?= number_format($i['limit_direksi_akhir'], 0, ',', '.')  ?></td>
                                                        <td>

                                                            <div class="text-center">

                                                                <button type="button" class="btn btn-info btn-sm btn-reset-password" data-id="<?= $i['id_user'] ?>" data-username="<?= $i['username'] ?>" title="Reset Password"><i class="fas fa-unlock-alt"></i></button>
                                                                <button type="button" class="btn btn-success btn-sm btn-reset-pin" data-id="<?= $i['id_user'] ?>" data-username="<?= $i['username'] ?>" title="Reset PIN"><i class="fas fa-unlock-alt"></i></button>
                                                                <button type="button" class="btn btn-primary btn-sm btn-user-edit" data-id="<?= $i['id_user'] ?>" title="Edit"><i class="fas fa-edit"></i></button>
                                                                <button type="button" class="btn btn-danger btn-sm btn-user-hapus" data-id="<?= $i['id_user'] ?>" data-username="<?= $i['username'] ?>" data-nama_lengkap="<?= $i['nama_lengkap'] ?>" data-nama_cabang="<?= $i['nama_cabang'] ?>" title="Hapus"><i class="fas fa-trash-alt"></i></button>

                                                            </div>


                                                        </td>
                                                    </tr>

                                                <?php endforeach ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>






        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 IT HASAMITRA</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->





    <!-- Modal Tambah Data-->
    <div class="modal fade" id="mymodaltambah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mymodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mymodalLabel">Tambah <?= $data['title'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <form id="myformtambah">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Level</label>

                                    <select name="level" class="form-control level" required>
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['level'] as $i) {
                                        ?>
                                            <option><?= $i['level'] ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kode Cabang</label>
                                    <select name="kode_cabang" class="form-control" required>
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['daftar_cabang'] as $i) {
                                        ?>
                                            <option value="<?= $i['kode_cabang'] ?>"><?= $i['kode_cabang'] . ' - ' . $i['nama_cabang'] ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tipe Komite</label>
                                    <select name="tipe_komite" class="form-control tipe_komite">
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['tipe_komite'] as $i) {
                                        ?>
                                            <option><?= $i ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tipe Kredit</label>
                                    <select name="tipe_kredit" class="form-control tipe_kredit">
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['tipe_kredit'] as $i) {
                                        ?>
                                            <option><?= $i ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Limit Direksi Awal</label>
                                    <input type="text" name="limit_direksi_awal" class="form-control limit_direksi_awal">
                                </div>
                                <div class="form-group">
                                    <label>Limit Direksi Akhir</label>
                                    <input type="text" name="limit_direksi_akhir" class="form-control limit_direksi_akhir">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" form="myformtambah" class="btn btn-secondary modal-batal" data-dismiss="modal">Batal</button>
                    <button type="submit" form="myformtambah" class="btn btn-primary btn-simpan-tambah">Simpan</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal Tambah Edit-->
    <div class="modal fade" id="mymodaledit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mymodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mymodalLabel">Edit <?= $data['title'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <form id="myformedit">
                                <div class="form-group">
                                    <input type="hidden" name="id" id="id">
                                    <label>Username</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Level</label>

                                    <select name="level" id="level" class="form-control level" required>
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['level'] as $i) {
                                        ?>
                                            <option><?= $i ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kode Cabang</label>
                                    <select name="kode_cabang" id="kode_cabang" class="form-control" required>
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['daftar_cabang'] as $i) {
                                        ?>
                                            <option value="<?= $i['kode_cabang'] ?>"><?= $i['kode_cabang'] . ' - ' . $i['nama_cabang'] ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tipe Komite</label>
                                    <select name="tipe_komite" id="tipe_komite" class="form-control tipe_komite">
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['tipe_komite'] as $i) {
                                        ?>
                                            <option><?= $i ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tipe Kredit</label>
                                    <select name="tipe_kredit" id="tipe_kredit" class="form-control tipe_kredit">
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['tipe_kredit'] as $i) {
                                        ?>
                                            <option><?= $i ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Limit Direksi Awal</label>
                                    <input type="text" name="limit_direksi_awal" id="limit_direksi_awal" class="form-control limit_direksi_awal">
                                </div>
                                <div class="form-group">
                                    <label>Limit Direksi Akhir</label>
                                    <input type="text" name="limit_direksi_akhir" id="limit_direksi_akhir" class="form-control limit_direksi_akhir">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" form="myformedit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" form="myformedit" class="btn btn-primary btn-simpan-edit">Update</button>
                </div>
            </div>
        </div>
    </div>






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
    <!-- SweetAlert2 -->
    <script src="<?= BASEURL ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
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




    <!-- bagian untuk hendle tabel datatable -->
    <script>
        $(function() {
            $('#example1').DataTable({
                // "responsive": true,
            });

            // reset isian pada modal ketika posisi modal dalam keaddan terclose
            $('#mymodaltambah').on('hidden.bs.modal', function() {
                $(this).find('#myformtambah').trigger('reset');
            })
        });
    </script>


    <!-- bagian untuk select level -->
    <!-- jika level yang terpilih adalah komite maka aktfikan mode required -->

    <script>
        $(function() {
            $('.level').on('change', function() {
                var pilihan_level = $(this).val();
                if (pilihan_level == "KOMITE") {
                    required_aktif()

                } else {
                    required_of()
                }
            })
        })


        function required_aktif() {
            // $('.tipe_kredit').attr("required", "true");
            $(".tipe_kredit").prop('required', true);
            $(".tipe_komite").prop('required', true);
            $(".limit_direksi_awal").prop('required', true);
            $(".limit_direksi_akhir").prop('required', true);
        }

        function required_of() {
            $('.tipe_kredit').attr("required", false);
            $('.tipe_komite').attr("required", false);
            $(".limit_direksi_awal").prop('required', false);
            $(".limit_direksi_akhir").prop('required', false);
        }
    </script>






    <!--  btn simpan -->
    <script>
        $('#myformtambah').on('submit', function(e) {
            var myform = $('#myformtambah').serialize();
            e.preventDefault()
            Swal.fire({
                title: "Yakin data sudah benar?",
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",
            }).then((respon) => {
                if (respon.isConfirmed) {



                    $.ajax({
                        type: 'POST',
                        url: '<?= BASEURL . '/supervisor/user_cek_username' ?>',
                        data: myform,
                        success: function(res) {
                            console.log(res)

                            // jika gagal maka data username tidak ditemukan artinya belum ada yang gunakan
                            if (res == "gagal") {

                                $.ajax({
                                    type: 'POST',
                                    url: '<?= BASEURL . '/supervisor/user_tambah' ?>',
                                    data: myform,
                                    success: function(res) {
                                        console.log(res)

                                        if (res.trim() == "sukses") {

                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Data berhasil disimpan',
                                                showConfirmButton: false,
                                                timer: 1500
                                            }).then(() => {
                                                // fungsi untuk menghide modal atau mengclose
                                                $('#mymodaltambah').modal('hide');
                                                // fungsi ini untuk hapus isi inputan pada modal setelah modal terhide atau close
                                                $('#mymodaltambah').on('hidden.bs.modal', function() {
                                                    $(this).find('#myformtambah').trigger('reset');
                                                })
                                                location.reload();
                                            })
                                        } else {
                                            alert('gagal : ' + res)
                                        }
                                    },
                                    error: function(res) {
                                        console.log("Ajax Error: " + res);
                                    }
                                })

                            } else {

                                Swal.fire(
                                    'Username yang anda input telah digunakan',
                                    'Silahkan masukkan username yang berbeda',
                                    'info'
                                )

                            }


                        },
                        error: function(res) {
                            console.log("Ajax Error: " + res);
                        }
                    })



                }
            })
        })
    </script>






    <!-- btn update -->
    <script>
        var username_old;
        var username_new;
        var hasil_cek_data_field = "tidak_berubah";
        $('#mymodaledit').on('shown.bs.modal', function() {
            username_old = $('#username').val();

            $("#username").on('keyup', function() {
                var username_new = $('#username').val();
                if (username_old == username_new) {
                    hasil_cek_data_field = "sama";
                    console.log(hasil_cek_data_field)
                } else {
                    hasil_cek_data_field = "beda";
                    console.log(hasil_cek_data_field)
                }
            })


        })






        $('#myformedit').on('submit', function(e) {
            var myform = $('#myformedit').serialize();
            e.preventDefault()
            Swal.fire({
                title: "Yakin data sudah benar?",
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",
            }).then((respon) => {
                if (respon.isConfirmed) {



                    if (hasil_cek_data_field == "sama") {
                        $.ajax({
                            type: 'POST',
                            url: '<?= BASEURL . '/supervisor/user_update' ?>',
                            data: myform,
                            success: function(res) {
                                console.log(res)

                                if (res.trim() == "sukses") {

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Data berhasil diupdate',
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then(() => {
                                        // fungsi untuk menghide modal atau mengclose
                                        $('#mymodaledit').modal('hide');
                                        // fungsi ini untuk hapus isi inputan pada modal setelah modal terhide atau close
                                        $('#mymodaledit').on('hidden.bs.modal', function() {
                                            $(this).find('#mymodaledit').trigger('reset');
                                        })
                                        location.reload();
                                    })
                                } else {
                                    alert('Belum ada data yang di update')
                                }
                            },
                            error: function(res) {
                                console.log("Ajax Error: " + res);
                            }
                        })
                    } else if (hasil_cek_data_field == "beda") {


                        $.ajax({
                            type: 'POST',
                            url: '<?= BASEURL . '/supervisor/user_cek_username' ?>',
                            data: myform,
                            success: function(res) {
                                console.log(res)

                                // jika gagal maka data username tidak ditemukan artinya belum ada yang gunakan
                                if (res == "gagal") {

                                    $.ajax({
                                        type: 'POST',
                                        url: '<?= BASEURL . '/supervisor/user_update' ?>',
                                        data: myform,
                                        success: function(res) {
                                            console.log(res)

                                            if (res.trim() == "sukses") {

                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Data berhasil diupdate',
                                                    showConfirmButton: false,
                                                    timer: 1500
                                                }).then(() => {
                                                    // fungsi untuk menghide modal atau mengclose
                                                    $('#mymodaledit').modal('hide');
                                                    // fungsi ini untuk hapus isi inputan pada modal setelah modal terhide atau close
                                                    $('#mymodaledit').on('hidden.bs.modal', function() {
                                                        $(this).find('#mymodaledit').trigger('reset');
                                                    })
                                                    location.reload();
                                                })
                                            } else {
                                                alert('Belum ada data yang di update')
                                            }
                                        },
                                        error: function(res) {
                                            console.log("Ajax Error: " + res);
                                        }
                                    })

                                } else {

                                    Swal.fire(
                                        'Username yang anda input telah digunakan',
                                        'Silahkan masukkan username yang berbeda',
                                        'info'
                                    )


                                }


                            },
                            error: function(res) {
                                console.log("Ajax Error: " + res);
                            }
                        })




                    } else if (hasil_cek_data_field == "tidak_berubah") {

                        $.ajax({
                            type: 'POST',
                            url: '<?= BASEURL . '/supervisor/user_update' ?>',
                            data: myform,
                            success: function(res) {
                                console.log(res)

                                if (res.trim() == "sukses") {

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Data berhasil diupdate',
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then(() => {
                                        // fungsi untuk menghide modal atau mengclose
                                        $('#mymodaledit').modal('hide');
                                        // fungsi ini untuk hapus isi inputan pada modal setelah modal terhide atau close
                                        $('#mymodaledit').on('hidden.bs.modal', function() {
                                            $(this).find('#mymodaledit').trigger('reset');
                                        })
                                        location.reload();
                                    })
                                } else {
                                    alert('Belum ada data yang di update')
                                }
                            },
                            error: function(res) {
                                console.log("Ajax Error: " + res);
                            }
                        })

                    }







                }
            })
        })
    </script>




    <!-- btn edit -->
    <script>
        $('.btn-user-edit').on('click', function() {
            var id = $(this).attr('data-id')



            $.ajax({
                url: '<?= BASEURL ?>/supervisor/get_data_user_edit_id',
                type: 'post',
                data: {
                    id: id
                },
                success: function(data, status) {
                    var i = JSON.parse(data);
                    $('#id').val(i.id_user);
                    $('#username').val(i.username);
                    $('#nama_lengkap').val(i.nama_lengkap);
                    $('#level').val(i.level);
                    $('#kode_cabang').val(i.kode_cabang);
                    $('#tipe_komite').val(i.tipe_komite);
                    $('#tipe_kredit').val(i.tipe_kredit);
                    $('#limit_direksi_awal').val(i.limit_direksi_awal);
                    $('#limit_direksi_akhir').val(i.limit_direksi_akhir);

                },
            });
            $('#mymodaledit').modal('show');
        })
    </script>


    <!-- btn reset password -->
    <script>
        $('.btn-reset-password').on('click', function() {

            var id = $(this).attr('data-id')
            var username = $(this).attr('data-username')

            Swal.fire({

                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",
                title: '<strong>Yakin reset password?</strong>',
                html: 'Data : <b> ' + username + '</b>' +
                    '<br>'
            }).then((respon) => {
                if (respon.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '<?= BASEURL . '/supervisor/user_reset_password' ?>',
                        data: {
                            id: id,
                            username: username
                        },
                        success: function(res) {
                            console.log(res)

                            if (res.trim() == "sukses") {

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Password berhasil direset',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(() => {
                                    location.reload();
                                })
                            }
                        },
                        error: function(res) {
                            console.log("Response Error: " + res);
                        }
                    })


                }
            })
        })
    </script>
    <!-- btn reset pin -->
    <script>
        $('.btn-reset-pin').on('click', function() {

            var id = $(this).attr('data-id')
            var username = $(this).attr('data-username')


            Swal.fire({
                title: "Yakin reset password?",
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",
                title: '<strong>Yakin reset pin?</strong>',
                html: 'Data : <b> ' + username + '</b>' +
                    '<br>'
            }).then((respon) => {
                if (respon.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '<?= BASEURL . '/supervisor/user_reset_pin' ?>',
                        data: {
                            id: id,
                            username: username
                        },
                        success: function(res) {
                            console.log(res)

                            if (res.trim() == "sukses") {

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Pin berhasil direset',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(() => {
                                    location.reload();
                                })
                            }
                        },
                        error: function(res) {
                            console.log("Response Error: " + res);
                        }
                    })


                }
            })
        })
    </script>



    <!-- btn hapus -->
    <script>
        $('.btn-user-hapus').on('click', function() {

            var id = $(this).attr('data-id')
            var username = $(this).attr('data-username')
            var nama_lengkap = $(this).attr('data-nama_lengkap')
            var nama_cabang = $(this).attr('data-nama_cabang')

            Swal.fire({
                title: "Yakin hapus data?",
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",
                title: '<strong>Yakin hapus data?</strong>',
                html: 'Username : <b> ' + username + '</b>' +
                    '<br>' +
                    'Nama Lengkap : <b> ' + nama_lengkap + '</b>' +
                    '<br>' +
                    'Cabang     : <b> ' + nama_cabang + '</b>' +
                    '<br>'

            }).then((respon) => {
                if (respon.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '<?= BASEURL . '/supervisor/user_hapus' ?>',
                        data: {
                            id: id,
                            username: username
                        },
                        success: function(res) {
                            console.log(res)

                            if (res.trim() == "sukses") {

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Data berhasil dihapus',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(() => {
                                    location.reload();
                                })
                            }
                        },
                        error: function(res) {
                            console.log("Response Error: " + res);
                        }
                    })


                }
            })
        })
    </script>














    <!-- library inpuran -->

    <!-- fungsi agar inputan merubah format angka dan melarang inpuran selain angka -->
    <script>
        $('.limit_direksi_awal,.limit_direksi_akhir').keyup(function(event) {

            // skip for arrow keys
            if (event.which >= 37 && event.which <= 40) return;

            // format number
            $(this).val(function(index, value) {
                return value
                    .replace(/\D/g, "")
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            });
        });
    </script>




    <!-- bagian untuk atur active manu sidebar -->
    <!-- <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("mybtnsidebar");
        var btns = header.getElementsByClassName("nav-link");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script> -->






</body>

</html>