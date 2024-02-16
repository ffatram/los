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


                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-primary mb-2 float-right btn-tambah" data-toggle="modal" data-target="#mymodaltambah"> <i class="fas fa-plus"></i> Tambah <?= $data['nama_halaman'] ?> </button>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">



                                                <table id="example1" class="table table-head-fixed table-striped text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Bank</th>
                                                            <th class="text-center">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                        foreach ($data['get_data'] as $i) :
                                                        ?>
                                                            <tr>
                                                                <td><?= $i['nama_bank'] ?></td>

                                                                <td>

                                                                    <div class="text-center">

                                                                        <button type="button" class="btn btn-primary btn-sm btn-edit" data-id="<?= $i['id'] ?>" title="Edit"><i class="fas fa-edit"></i></button>
                                                                        <button type="button" class="btn btn-danger btn-sm btn-hapus" data-id="<?= $i['id'] ?>" data-nama_bank="<?= $i['nama_bank'] ?>" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                                                                    </div>


                                                                </td>
                                                            </tr>

                                                        <?php endforeach ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
                                    <label>Nama Bank</label>
                                    <input type="text" name="nama_bank" class="form-control" required>
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
                                    <input type="text" name="nama_bank" id="data_edit" class="form-control" required>
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
        });
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
                        url: '<?= BASEURL . '/supervisor/bank_cek_nama_bank' ?>',
                        data: myform,
                        success: function(res) {
                            console.log(res)

                            // jika gagal maka data username tidak ditemukan artinya belum ada yang gunakan
                            if (res == "gagal") {

                                $.ajax({
                                    type: 'POST',
                                    url: '<?= BASEURL . '/supervisor/bank_tambah' ?>',
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
                                    'Nama Bank yang anda input telah digunakan',
                                    'Silahkan masukkan Nama Bank yang berbeda',
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



    <!-- btn edit -->
    <script>
        $('.btn-edit').on('click', function() {
            var id = $(this).attr('data-id')

            $.ajax({
                url: '<?= BASEURL ?>/supervisor/get_data_bank_edit_id',
                type: 'post',
                data: {
                    id: id
                },
                success: function(data, status) {
                    var i = JSON.parse(data);
                    $('#id').val(i.id);
                    $('#data_edit').val(i.nama_bank);
                },
            });
            $('#mymodaledit').modal('show');
        })
    </script>


    <!-- btn update -->
    <script>
        var data_old;
        var data_new;
        var cek_value_data = "sama";
        var cek;




        $('#mymodaledit').on('shown.bs.modal', function() {
            data_old = $('#data_edit').val();

            $('#data_edit').on('keyup', function() {
                data_new = $('#data_edit').val();

                if (data_old == data_new) {
                    cek_value_data = 'sama';
                } else {
                    cek_value_data = 'beda';
                }


            })



            $('#myformedit').on('submit', function(e) {
                var myform = $('#myformedit').serialize();
                var data_edit = $('#data_edit').val();
                e.preventDefault()



                if (cek_value_data == "sama") {

                    Swal.fire(
                        'Data tidak diupdate, belum ada perubahan',
                        '',
                        'info'
                    )

                    $('#mymodaledit').modal('hide');
                    // fungsi ini untuk hapus isi inputan pada modal setelah modal terhide atau close
                    $('#mymodaledit').on('hidden.bs.modal', function() {
                        $(this).find('#mymodaledit').trigger('reset');
                    })

                } else if (cek_value_data = "beda") {

                    var hasil_ajax = function() {
                        var temp = null;

                        $.ajax({
                            'async': false,
                            url: '<?= BASEURL ?>/supervisor/bank_cek_nama_bank',
                            type: 'post',
                            data: {
                                nama_bank: data_edit
                            },
                            success: function(res) {
                                temp = res;
                            },
                            error: function(res) {
                                temp = res;
                            }
                        });

                        return temp;

                    }();


                }



                if (hasil_ajax == "sukses") {
                    Swal.fire(
                        'Data ini telah ada, silahkan input data yang berbeda',
                        '',
                        'info'
                    )

                } else if (hasil_ajax == "gagal") {



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
                                url: '<?= BASEURL ?>/supervisor/bank_update',
                                type: 'post',
                                data: myform,
                                success: function(res) {

                                    if (res == "sukses") {
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
                                        alert.log("gagal : " + res)
                                    }

                                },
                            });

                        }

                    })


                }











            })

        })
    </script>



    <!-- btn hapus -->
    <script>
        $('.btn-hapus').on('click', function() {

            var id = $(this).attr('data-id')
            var nama_bank = $(this).attr('data-nama_bank')


            Swal.fire({
                title: "Yakin hapus data?",
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",
                title: '<strong>Yakin hapus data?</strong>',
                html: 'Data : <b> ' + nama_bank + '</b>' +
                    '<br>'


            }).then((respon) => {
                if (respon.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '<?= BASEURL . '/supervisor/bank_hapus' ?>',
                        data: {
                            id: id
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










</body>

</html>