<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan User</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/plugins/toastr/toastr.min.css">
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
        <?php $this->view('supervisor/navbar') ?>
        <!-- Navbar -->

        <!-- Side Bar -->
        <?php $this->view('supervisor/side_bar') ?>
        <!-- Side Bar -->



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Pengelolaan User</h1>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">


                    <div class="clearfix mb-2">
                        <button type="button" class="btn btn-primary float-right modal-xl" data-target="#modal" data-toggle="modal"><i class="fas fa-plus"></i> Tambah User</button>

                    </div>
                    <div class=" card">
                        <div class="card-body">
                            <div class="table-responsive  data_tabel">



                            </div>
                        </div>
                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
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








    <!-- Modal Input-->
    <div class="modal fade" id="modal">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="form_tambah_user">
                   

                </form>

            </div>

        </div>

        <!-- /.modal-content -->
    </div>





    <!-- modal edit -->
    <div class="modal fade" id="modalEdit">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="form_update_user">
                    <div class="modal-body">

                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <div class="card-body">


                                <div class="row">

                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="hidden" name="id_user" id="id_user">
                                            <label>Username</label>
                                            <input type="text" class="form-control" id="username" name="username" oninput="this.value = this.value.toUpperCase()" required>
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" oninput="this.value = this.value.toUpperCase()" required>
                                            <label>Cabang</label>
                                            <select class="form-control" id="kode_cabang" name="kode_cabang" required>
                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                <?php
                                                foreach ($data['cabang'] as $i) :
                                                ?>
                                                    <option value="<?= $i['kode_cabang'] ?>"><?= $i['kode_cabang'] . ' - ' . $i['nama_cabang'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label>Level</label>
                                            <select class="form-control" id="levelEdit" name="level" required>
                                                <option value="" disabled selected>- Silahkan Pilih -</option>

                                                <?php
                                                foreach ($data['level_user'] as $i) :
                                                ?>
                                                    <option value="<?= $i['level'] ?>"><?= $i['level'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Tipe Komite</label>
                                            <select class="form-control tipe_komite" id="tipe_komite" name="tipe_komite" required>
                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                <?php
                                                foreach ($data['tipe_komite'] as $i) :
                                                ?>
                                                    <option value="<?= $i['tipe_komite'] ?>"><?= $i['tipe_komite'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label>Tipe Kredit</label>
                                            <select class="form-control tipe_kredit" id="tipe_kredit_edit" name="tipe_kredit" required>
                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                <?php
                                                foreach ($data['tipe_kredit'] as $i) :
                                                ?>
                                                    <option value="<?= $i['tipe_kredit'] ?>"><?= $i['tipe_kredit'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                            <label>Limit Awal</label>
                                            <input type="text" class="form-control limit_awal_edit" id="limit_awal" name="limit_direksi_awal" onkeypress="return hanyaAngka(event)" required>
                                            <label>Limit Akhir</label>
                                            <input type="text" class="form-control limit_akhir_edit" id="limit_akhir" name="limit_direksi_akhir" onkeypress="return hanyaAngka(event)" required>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-lg btn_update ml-2 mr-2">Update</button>
                                    <button type="submit" class="btn btn-secondary btn-lg btn_batal" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
    </div>







    <!-- jQuery -->
    <script src="<?= BASEURL ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= BASEURL ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= BASEURL ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?= BASEURL ?>/assets/plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= BASEURL ?>/assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= BASEURL ?>/assets/dist/js/demo.js"></script>
    <!-- Page specific script -->

    <!-- DataTables  & Plugins -->
    <script src="<?= BASEURL ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>






</body>

</html>