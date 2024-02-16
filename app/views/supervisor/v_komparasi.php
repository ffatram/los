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
                        <button type="button" class="btn btn-primary float-right modal-xl" data-target="#modal" data-toggle="modal"><i class="fas fa-plus"></i> Tambah</button>
                    </div>
                    <div class=" card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped first display nowrap">
                                    <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td>Nama Pejabat</td>
                                            <td>Jabatan</td>
                                            <td>Nomor Surat</td>
                                            <td>Tanggal Surat</td>
                                            <td>Kode Cabang</td>
                                            <!-- <td>Nama Cabang</td> -->
                                            <td>Aksi</td>
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php
                                        $a = 1;
                                        foreach ($data['ref_pejabat'] as $row) {
                                        ?>
                                            <tr>
                                                <td><?= $a++ ?></td>
                                                <td><?= $row['nama_pejabat'] ?></td>
                                                <td><?= $row['jabatan'] ?></td>
                                                <td><?= $row['nomor_surat'] ?></td>
                                                <td><?= $row['tanggal_surat'] ?></td>
                                                <td><?= $row['kode_cabang'] ?></td>
                                                <!-- <td><?= $row['kode_cabang'] ?></td> -->
                                                <td>
                                                    <button class='btn btn-success btn_edit' data-id='<?= $row['id'] ?>' data-toggle="modal" data-target="#modal_edit">Edit</button>
                                                </td>

                                            </tr>
                                        <?php } ?>


                                    </tbody>
                                </table>


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



    <div class="modal fade" id="modal_edit">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>




                <div class="modal-body">

                    <form id='myForm'>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nama Pejabat</label>
                                    <input type="input" name="nama_pejabat" class="form-control nama_pejabat">
                                </div>
                                <div class="form-group">
                                    <label>Sebutan</label>
                                    <input type="input" nama='sebutan' class="form-control sebutan">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="input" name='tempat_lahir' class="form-control tempat_lahir">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name='tanggal_lahir' class="form-control tanggal_lahir">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="input" name='alamat' class="form-control alamat">
                                </div>
                                <div class="form-group">
                                    <label>Kota Pejabat</label>
                                    <input type="input" name='kota_pejabat' class="form-control kota_pejabat">
                                </div>

                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="input" name='jabatan' class="form-control jabatan">
                                </div>
                            </div>




                            <div class="col-6">

                                <div class="form-group">
                                    <label>Jenis Surat</label>
                                    <input type="input" name='jenis_surat' class="form-control jenis_surat">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input type="input" name='nomor_surat' class="form-control nomor_surat">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <input type="date" name='tanggal_surat' class="form-control tanggal_surat">
                                </div>
                                <div class="form-group">
                                    <label>Perihal Surat</label>
                                    <input type="input" name='perihal_surat' class="form-control perihal_surat">
                                </div>
                                <div class="form-group">
                                    <label>Tipe Pejabat</label>


                                    <select name="tipe_pejabat" class='form-control'>
                                        <option value="" selected disabled hidden>- Silahkan Pilih -</option>

                                        <?php
                                        foreach ($data['ref_cabang'] as $row) :
                                        ?>
                                            <option value="<?= $row['kode_cabang'] ?>"><?= $row['kode_cabang'] . ' - ' . $row['nama_cabang'] ?></option>
                                        <?php endforeach ?>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label>Kode Cabang</label>
                                    <select name="kode_cabang" id='kode_cabang' class='form-control kode_cabang'>


                                    </select>

                                </div>
                            </div>
                        </div>



                    </form>

                    <div class="modal-footer">
                        <button type="submit" class='btn btn-primary btn-lg btn_simpan' form="myForm">Simpan</button>
                        <button class='btn btn-default btn-lg btn-reset'>Reset</button>
                    </div>
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

    <!-- jquery-validation -->
    <script src="<?= BASEURL ?>/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?= BASEURL ?>/assets/plugins/jquery-validation/additional-methods.min.js"></script>


    <script>
        var btn_edit = $('.btn_edit');
        var btn_simpan = $('.btn_simpan')
        var btn_reset = $('.btn-reset')




        btn_edit.on('click', function() {
            var id = $(this).data('id')
            $.ajax({
                url: '<?= BASEURL ?>/supervisor/getPejabatId',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    console.log(response)
                    var data = JSON.parse(response)



                    $('.nama_pejabat').val(data.ref_pejabat.nama_pejabat)
                    $('.sebutan').val(data.ref_pejabat.sebutan)
                    $('.tempat_lahir').val(data.ref_pejabat.tempat_lahir)
                    $('.tanggal_lahir').val(data.ref_pejabat.tanggal_lahir)

                    $('.alamat').val(data.ref_pejabat.alamat)
                    $('.kota_pejabat').val(data.ref_pejabat.kota_pejabat)
                    $('.jabatan').val(data.ref_pejabat.jabatan)

                    $('.jenis_surat').val(data.ref_pejabat.jenis_surat)
                    $('.nomor_surat').val(data.ref_pejabat.nomor_surat)
                    $('.tanggal_surat').val(data.ref_pejabat.tanggal_surat)
                    $('.perihal_surat').val(data.ref_pejabat.perihal_surat)
                    $('.tipe_pejabat').val(data.ref_pejabat.tipe_pejabat)


                    selectHTML = '<option value="" selected disabled hidden>' + '-Silahkan Pilih-' + data.ref_pejabat.kode_cabang + '</option>'
                    for (var key in data.ref_cabang) {
                        selectHTML += '<option value="' + data.ref_cabang[key]['kode_cabang'] + '">' + data.ref_cabang[key]['kode_cabang'] + ' - ' + data.ref_cabang[key]['nama_cabang'] + '</option>';
                    }

                    $('.kode_cabang').val('01');
                    $('.kode_cabang').html(selectHTML);





                    // $('.kode_cabang').val(data.kode_cabang)
                }
            })

        })
    </script>

    <script>
        $('.btn_simpan').on('click', function(e) {
            // $.validator.setDefaults({
            //     submitHandler: function() {
            //         alert("Form successful submitted!");
            //     }
            // });

            $('#myForm').validate({
                rules: {
                    kode_cabang: {
                        required: true,
                    },

                },
                messages: {
                    kode_cabang: {
                        required: "Inputan tidak boleh kosong",
                    },

                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        })
    </script>

    <script>
        btn_reset.on('click', function() {
            $('.myForm').trigger('reset')
        })
    </script>






</body>

</html>