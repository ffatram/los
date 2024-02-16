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





                                    <button type="button" class="btn btn-primary mb-2 float-right btn-tambah" data-toggle="modal" data-target="#mymodaltambah"> <i class="fas fa-plus"></i> Tambah <?= $data['nama_halaman'] ?> </button>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">

                                        <table id="example1" class="table table-head-fixed table-striped text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Kode Cabang</th>
                                                    <th>Nama Pejabat</th>
                                                    <th>Sebutan</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Alamat</th>
                                                    <th>Kota Pejabat</th>
                                                    <th>Jabatan</th>
                                                    <th>Jenis Surat</th>
                                                    <th>Nomor Surat</th>
                                                    <th>Tanggal Surat</th>
                                                    <th>Perihal Surat</th>
                                                    <th>Tipe Pejabat</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                foreach ($data['get_data'] as $i) :
                                                ?>
                                                    <tr>
                                                        <td><?= $i['kode_cabang'] ?></td>
                                                        <!-- <td><?= substr($i['nama_pejabat'], 0, 10) . '...'  ?></td> -->
                                                        <td><?= $i['nama_pejabat'] ?></td>
                                                        <td><?= $i['sebutan'] ?></td>
                                                        <td><?= $i['tempat_lahir'] ?></td>
                                                        <td><?= date('d-m-Y', strtotime($i['tanggal_lahir']))  ?></td>
                                                        <td><?= $i['alamat'] ?></td>
                                                        <td><?= $i['kota_pejabat'] ?></td>
                                                        <td><?= $i['jabatan'] ?></td>
                                                        <td><?= $i['jenis_surat'] ?></td>
                                                        <td><?= $i['nomor_surat'] ?></td>
                                                        <td><?= date('d-m-Y', strtotime($i['tanggal_surat'])) ?></td>
                                                        <td><?= $i['perihal_surat'] ?></td>
                                                        <td><?= $i['tipe_pejabat'] ?></td>

                                                        <td>

                                                            <div class="text-center">
                                                                <!-- <button type="button" class="btn btn-primary btn-sm btn-edit" data-id="<?= $i['id'] ?>" title="Edit"><i class="fas fa-edit"></i></button> -->
                                                                <button type="button" class="btn btn-primary btn-sm btn-edit" data-id="<?= $i['id'] ?>" title="Edit"><i class="fas fa-edit"></i></button>
                                                                <button type="button" class="btn btn-danger btn-sm btn-hapus" data-id="<?= $i['id'] ?>" data-data1="<?= $i['kode_cabang'] ?>" data-data2="<?= $i['nama_pejabat'] ?>" title="Hapus"><i class="fas fa-trash-alt"></i></button>
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

                                    <label>Kode Cabang</label>
                                    <select name="data1" class="form-control">
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
                                    <label>Nama Pejabat</label>
                                    <input type="text" name="data2" class="form-control username">
                                </div>

                                <div class="form-group">
                                    <label>Sebutan</label>
                                    <select name="data3" class="form-control">
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['sebutan'] as $i) {
                                        ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="data4" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="data5" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="data6" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Kota Pejabat</label>
                                    <input type="text" name="data7" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" name="data8" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Surat</label>
                                    <select name="data9" class="form-control">
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['ref_jenis_surat'] as $i) {
                                        ?>
                                            <option value="<?= $i['jenis_surat'] ?>"><?= $i['jenis_surat'] ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input type="text" name="data10" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <input type="date" name="data11" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Perihal Surat</label>
                                    <input type="text" name="data12" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tipe Pejabat</label>
                                    <select name="data13" class="form-control">
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['tipe_pejabat'] as $i) {
                                        ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
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
                                    <label>Kode Cabang</label>
                                    <select name="data1" id="data1" class="form-control">
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
                                    <label>Nama Pejabat</label>
                                    <input type="text" name="data2" id="data2" class="form-control username">
                                </div>

                                <div class="form-group">
                                    <label>Sebutan</label>
                                    <select name="data3" id="data3" class="form-control">
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['sebutan'] as $i) {
                                        ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="data4" id="data4" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="data5" id="data5" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="data6" id="data6" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Kota Pejabat</label>
                                    <input type="text" name="data7" id="data7" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" name="data8" id="data8" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Surat</label>
                                    <select name="data9" id="data9" class="form-control">
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>


                                        <?php
                                        foreach ($data['ref_jenis_surat'] as $i) {
                                        ?>
                                            <option value="<?= $i['jenis_surat'] ?>"><?= $i['jenis_surat'] ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input type="text" name="data10" id="data10" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <input type="date" name="data11" id="data11" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Perihal Surat</label>
                                    <input type="text" name="data12" id="data12" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tipe Pejabat</label>
                                    <select name="data13" id="data13" class="form-control">
                                        <option value="" selected="true" disabled="disabled">- Silahkan Pilih -</option>
                                        <?php
                                        foreach ($data['tipe_pejabat'] as $i) {
                                        ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
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
        $(document).ready(function() {
            $('#example1').DataTable({
                "ordering": false,
            });
        });
    </script>


    <!-- ajax untuk send data ke controller -->
    <script>
        function ajax_cek(url, dataform) {
            var temp = null;

            $.ajax({
                'async': false,
                url: '<?= BASEURL ?>' + url,
                type: 'post',
                data: dataform,
                success: function(res) {
                    temp = res;
                },
                error: function(res) {
                    temp = res;
                }
            });

            return temp;

        };
    </script>


    <!--  btn simpan -->
    <script>
        $('#myformtambah').on('submit', function(e) {
            // var myform = $('#myformtambah').serialize()
            var myform = $('#myformtambah').serialize() + '&username=' + $('.username').val();




            var cek_inkaso_kode_cabang;
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
                    // jika tidak ditemukan data kode instansi dan kode cabang yang sama maka lakukan inputan ke database tbl_ref_instansi
                    var res = ajax_cek("/supervisor/tipe_pejabat_tambah", myform);

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
                                $(this).find('#mymodaltambah').trigger('reset');
                            })
                            location.reload();
                        })
                    } else {
                        alert('gagal : ' + res)
                    }
                }
            })

        })
    </script>



    <!-- btn edit -->
    <script>
        $('.btn-edit').on('click', function() {
            var id = $(this).attr('data-id')



            console.log('id : ' + id)

            $.ajax({
                url: '<?= BASEURL ?>/supervisor/get_data_pejabat_edit_id',
                type: 'post',
                data: {
                    id: id
                },
                success: function(data) {
                    var i = JSON.parse(data);
                    $('#id').val(i.id);
                    $('[id=data1]').val(i.kode_cabang);
                    $('[id=data2]').val(i.nama_pejabat);
                    $('[id=data3]').val(i.sebutan);
                    $('[id=data4]').val(i.tempat_lahir);
                    $('[id=data5]').val(i.tanggal_lahir);
                    $('[id=data6]').val(i.alamat);
                    $('[id=data7]').val(i.kota_pejabat);
                    $('[id=data8]').val(i.jabatan);
                    $('[id=data9]').val(i.jenis_surat);
                    $('[id=data10]').val(i.nomor_surat);
                    $('[id=data11]').val(i.tanggal_surat);
                    $('[id=data12]').val(i.perihal_surat);
                    $('[id=data13]').val(i.tipe_pejabat);

                },
            });
            $('#mymodaledit').modal('show');
        })
    </script>


    <!-- btn update -->
    <script>
        var data1;
        var data2;
        var data3;



        $('#mymodaledit').on('shown.bs.modal', function() {
            data1 = $('#data1').val();
            data2 = $('#data2').val();
            data3 = $('#data3').val();

            console.log("data 1 : " + data1)
            console.log("data 2 : " + data2)
            console.log("data 3 : " + data3)
        })






        $('#myformedit').on('submit', function(e) {
            var myform = $('#myformedit').serialize() + '&username=' + $('#myformedit .username').val();

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

                    var hasil = ajax_cek("/supervisor/pejabat_bank_update", myform);


                    if (hasil == "sukses") {
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
                        alert(hasil)
                    }

                }
            })



        })
    </script>



    <!-- btn hapus -->
    <script>
        $('.btn-hapus').on('click', function() {

            var id = $(this).attr('data-id')
            var data1 = $(this).attr('data-data1')
            var data2 = $(this).attr('data-data2')
            var username = data2




            Swal.fire({
                title: "Yakin hapus data?",
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                confirmButtonColor: "#3EC59D",
                cancelButtonColor: "#BB2D3B",
                title: '<strong>Yakin hapus data?</strong>',
                html: 'Kode Cabang : <b class="text-danger"> ' + data1 + '</b> </br>' +
                    'Nama Pejabat : <b class="text-danger"> ' + data2 + '</b> </br>'
            }).then((respon) => {
                if (respon.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '<?= BASEURL . '/supervisor/pejabat_bank_hapus' ?>',
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










</body>

</html>