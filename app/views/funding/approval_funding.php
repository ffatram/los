<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Approval Funding</title>

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

</head>



<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">



        <!-- Navbar -->
        <?php $this->view('funding/navbar') ?>
        <!-- Navbar -->

        <!-- Side Bar -->
        <?php $this->view('funding/side_bar') ?>
        <!-- Side Bar -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="align-items: center; fonts-size:60px bold">PERMOHONAN NASABAH</h1>
                        </div>

                    </div>


                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- Main content -->
            <section class="content ">
                <!-- container fluid -->
                <div class="container-fluid">




                    <div class="row">
                        <div class="col-4">
                            <button class="btn btn-success btn-lg btn-block" style="padding: 100px 10px;" data-toggle="modal" data-target="#exampleModal">
                                Bebas Finalty
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-success btn-lg btn-block" style="padding: 100px 10px;" data-toggle="modal" data-target="#exampleBunga">
                                Pembayaran Bunga Berjalan
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-success btn-lg btn-block" style="padding: 100px 10px; fonts-size:100px" data-toggle="modal" data-target="#exampleSukuBunga">
                                Suku Bunga Khusus
                            </button>
                        </div>
                    </div>
                    <!-- pop up bebas finalty -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Data Bebas Finalty</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label class="col-form-label">Tanggal Permohonan</label>
                                            <input type="text" class="form-control" name="tanggal_permohonan" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Kantor Cabang</label>
                                            <input type="text" class="form-control" name="kantor-cabang" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Jenis Produk</label>
                                            <select name="jenis_produk" class="form-control" onchange="showDiv(this)">
                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                <option value="tabungan" id="tabungan">- Tabungan -</option>
                                                <option value="deposito" id="deposito">- Deposito -</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">CIF</label>
                                            <input type="text" class="form-control" name="cif">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Nama Nasabah</label>
                                            <input type="text" class="form-control" name="nama_nasabah" onkeypress="return hanyaHuruf(event)">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat-text" class="col-form-label">Alamat</label>
                                            <textarea class="form-control" name="alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="nomor_telepon" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Nominal</label>
                                            <input type="text" class="form-control" name="nominal">
                                        </div>
                                        <div class="form-group" style="display:none" id="hidden_div">
                                            <!-- <label class="col-form-label">Jangka Waktu</label>
                                            <input type="text" class="form-control" name="jangka_waktu"> -->
                                            <label class="col-form-label">Jangka Waktu</label>
                                            <select name="jangka_waktu" class="form-control">
                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                <option value="satu" id="satu">- 1 Bulan -</option>
                                                <option value="tiga" id="tiga">- 3 Bulan -</option>
                                                <option value="enam" id="enam">- 6 Bulan -</option>
                                                <option value="duabelas" id="duabelas">- 12 Bulan -</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Bebas_Finalty (%)</label>
                                            <input type="text" class="form-control" name="data_persen">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Nominal Finalty</label>
                                            <input type="text" class="form-control" name="nominal_finalty">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- pop up bunga -->
                    <div class="modal fade" id="exampleBunga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Data Pembayaran Bunga Berjalan </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label class="col-form-label">Tanggal Permohonan</label>
                                            <input type="text" class="form-control" name="tanggal_permohonan" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Kantor Cabang</label>
                                            <input type="text" class="form-control" name="kantor-cabang" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Jenis Produk</label>
                                            <select name="jenis_produk" class="form-control" onchange="showDiv1(this)">
                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                <option value="tabungan" id="tabungan">- Tabungan -</option>
                                                <option value="deposito" id="deposito">- Deposito -</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">CIF</label>
                                            <input type="text" class="form-control" name="nama-nasabah">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Nama Nasabah</label>
                                            <input type="text" class="form-control" name="nama-nasabah" onkeypress="return hanyaHuruf(event)">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat-text" class="col-form-label">Alamat</label>
                                            <textarea class="form-control" name="alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="nomor_telepon" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Nominal</label>
                                            <input type="text" class="form-control" name="nominal">
                                        </div>
                                        <div class="form-group" style="display:none" id="hidden_div1">
                                            <label class="col-form-label">Jangka Waktu</label>
                                            <select name="jangka_waktu" class="form-control">
                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                <option value="satu" id="satu">- 1 Bulan -</option>
                                                <option value="tiga" id="tiga">- 3 Bulan -</option>
                                                <option value="enam" id="enam">- 6 Bulan -</option>
                                                <option value="duabelas" id="duabelas">- 12 Bulan -</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Jumlah Hari</label>
                                            <input type="text" class="form-control" name="jumlah_hari">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Nominal Bunga Berjalan</label>
                                            <input type="text" class="form-control" name="nominal_bunga">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Jenis Pembayaran</label>
                                            <select name="jenis_pembayaran" class="form-control" onchange="showPembayaran(this)">
                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                <option value="tunai" id="tunai">- Tunai -</option>
                                                <option value="transfer" id="transfer">- Transfer Online -</option>
                                            </select>
                                        </div>
                                        <div class="form-group" style="display:none" id="hidden_div2">
                                            <label class="col-form-label">Rekening Tujuan</label>
                                            <input type="text" class="form-control" name="rekening_tujuan" onkeypress="hanyaAngka(event)">
                                            <label class="col-form-label">BANK Tujuan</label>
                                            <select name="bank" class="form-control">
                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                <option value="Bank BRI">- Bank BRI -</option>
                                                <option value="bank Mandiri">- Bank Mandiri -</option>
                                            </select>
                                            <label class="col-form-label">Nama Pemilik</label>
                                            <input type="text" class="form-control" name="nama_pemilik" onkeypress="hanyaHuruf(event)">
                                        </div>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pop up suku bunga -->
                <div class="modal fade" id="exampleSukuBunga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Suku Bunga Khusus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="col-form-label">Tanggal Permohonan</label>
                                        <input type="text" class="form-control" name="tanggal_permohonan" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Kantor Cabang</label>
                                        <input type="text" class="form-control" name="kantor-cabang" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Jenis Produk</label>
                                        <select name="jenis_produk" class="form-control" onchange="showDiv2(this)">
                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                            <option value="tabungan" id="tabungan">- Tabungan -</option>
                                            <option value="deposito" id="deposito">- Deposito -</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">CIF</label>
                                        <input type="text" class="form-control" name="nama-nasabah">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Nama Nasabah</label>
                                        <input type="text" class="form-control" name="nama-nasabah" onkeypress="return hanyaHuruf(event)">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat-text" class="col-form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Nomor Telepon</label>
                                        <input type="text" class="form-control" name="nomor_telepon" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Nominal</label>
                                        <input type="text" class="form-control" name="nominal">
                                    </div>
                                    <div class="form-group" style="display:none" id="hidden_div3">
                                        <label class="col-form-label">Jangka Waktu</label>
                                        <select name="jangka_waktu" class="form-control">
                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                            <option value="satu" id="satu">- 1 Bulan -</option>
                                            <option value="tiga" id="tiga">- 3 Bulan -</option>
                                            <option value="enam" id="enam">- 6 Bulan -</option>
                                            <option value="duabelas" id="duabelas">- 12 Bulan -</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Nilai Suku Bunga (%)</label>
                                        <input type="text" class="form-control" name="data_persen_approval">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>





                <!-- javascript -->



                <div class="card mt-5">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-striped table-hover first display nowrap datatab tabel_reload">
                                <thead>
                                    <tr>

                                        <th>
                                            No
                                        </th>


                                    </tr>
                                </thead>

                                <?php
                                foreach ($data['get_all_tbl_user'] as $row) :
                                ?>

                                    <tr>
                                        <td><?= $row['id_user'] ?></td>
                                    </tr>




                                <?php endforeach; ?>

                            </table>


                            <h1><?= $data['get_id_tbl_user']['level'] ?></h1>
                        </div>
                    </div>
                </div>








                <script type="text/javascript">
                    function showDiv(select) {
                        if (select.value == 'deposito') {
                            document.getElementById('hidden_div').style.display = "block";
                        } else {
                            document.getElementById('hidden_div').style.display = "none";
                        }
                    }

                    function showDiv1(select) {
                        if (select.value == 'deposito') {
                            document.getElementById('hidden_div1').style.display = "block";
                        } else {
                            document.getElementById('hidden_div1').style.display = "none";
                        }
                    }

                    function showDiv2(select) {
                        if (select.value == 'deposito') {
                            document.getElementById('hidden_div3').style.display = "block";
                        } else {
                            document.getElementById('hidden_div3').style.display = "none";
                        }
                    }

                    function showPembayaran(select) {
                        if (select.value == 'transfer') {
                            document.getElementById('hidden_div2').style.display = "block";
                        } else {
                            document.getElementById('hidden_div2').style.display = "none";
                        }
                    }

                    // var select = document.getElementById('jenis_produk'),
                    // onChange = function(event) {
                    //     var shown = this.options[this.selectedIndex].value == 'deposito';

                    //     document.getElementById('hidden_div').style.display = shown ? 'block' : 'none';
                    // };

                    // // attach event handler
                    // if (window.addEventListener) {
                    //     select.addEventListener('change', onChange, false);
                    // } else {
                    //     // of course, IE < 9 needs special treatment
                    //     select.attachEvent('onchange', function() {
                    //         onChange.apply(select, arguments);
                    //     });
                    // }
                </script>


        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer ">
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

    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }

        function hanyaHuruf(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32) {
                return false;
            }
            return true;
        }
    </script>













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
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>



    <script>
        $('#example1').DataTable();
    </script>


    <!-- daftar nasabah lama -->
    <script>
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
                    $("#form_cs_edit_data_kredit_lama").off("submit").submit();
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




    <!-- ubah inputan ke dalam bentuk rupiah -->
    <script>
        var plafond = $('.plafond');
        var nilai_jaminan = $('.nilai_jaminan');

        var penghasilan_pemohon = $('.penghasilan_pemohon');
        var penghasilan_pasangan = $('.penghasilan_pasangan');
        var penghasilan_tambahan = $('.penghasilan_tambahan');
        var penghasilan_tambahan_lainnya = $('.penghasilan_tambahan_lainnya');

        var biaya_hidup_perbulan = $('.biaya_hidup_perbulan');
        var biaya_pendidikan = $('.biaya_pendidikan');
        var biaya_pam_listrik_telepon = $('.biaya_pam_listrik_telepon');
        var biaya_transport = $('.biaya_transport');
        var angsuran_bank_lain = $('.angsuran_bank_lain');
        var angsuran_perumahan = $('.angsuran_perumahan');
        var angsuran_kendaraan = $('.angsuran_kendaraan');
        var angsuran_barang_elektronik = $('.angsuran_barang_elektronik');
        var angsuran_koperasi = $('.angsuran_koperasi');
        var biaya_lainnya = $('.biaya_lainnya');


        $(document).ready(function() {
            plafond.val(ubah_input(plafond.val().toString()))
            nilai_jaminan.val(ubah_input(nilai_jaminan.val().toString()))
            penghasilan_pemohon.val(ubah_input(penghasilan_pemohon.val().toString()))
            penghasilan_pasangan.val(ubah_input(penghasilan_pasangan.val().toString()))
            penghasilan_tambahan.val(ubah_input(penghasilan_tambahan.val().toString()))
            penghasilan_tambahan_lainnya.val(ubah_input(penghasilan_tambahan_lainnya.val().toString()))
            biaya_hidup_perbulan.val(ubah_input(biaya_hidup_perbulan.val().toString()))
            biaya_pendidikan.val(ubah_input(biaya_pendidikan.val().toString()))
            biaya_pam_listrik_telepon.val(ubah_input(biaya_pam_listrik_telepon.val().toString()))
            biaya_transport.val(ubah_input(biaya_transport.val().toString()))
            angsuran_bank_lain.val(ubah_input(angsuran_bank_lain.val().toString()))
            angsuran_perumahan.val(ubah_input(angsuran_perumahan.val().toString()))
            angsuran_kendaraan.val(ubah_input(angsuran_kendaraan.val().toString()))
            angsuran_barang_elektronik.val(ubah_input(angsuran_barang_elektronik.val().toString()))
            angsuran_koperasi.val(ubah_input(angsuran_koperasi.val().toString()))
            biaya_lainnya.val(ubah_input(biaya_lainnya.val().toString()))
        })





        plafond.keyup(function() {
            plafond.val(ubah_input(plafond.val().toString()))
        })

        nilai_jaminan.keyup(function() {
            nilai_jaminan.val(ubah_input(nilai_jaminan.val().toString()))
        })

        penghasilan_pemohon.keyup(function() {
            penghasilan_pemohon.val(ubah_input(penghasilan_pemohon.val().toString()))
        })
        penghasilan_pasangan.keyup(function() {
            penghasilan_pasangan.val(ubah_input(penghasilan_pasangan.val().toString()))
        })
        penghasilan_tambahan.keyup(function() {
            penghasilan_tambahan.val(ubah_input(penghasilan_tambahan.val().toString()))
        })
        penghasilan_tambahan_lainnya.keyup(function() {
            penghasilan_tambahan_lainnya.val(ubah_input(penghasilan_tambahan_lainnya.val().toString()))
        })
        biaya_hidup_perbulan.keyup(function() {
            biaya_hidup_perbulan.val(ubah_input(biaya_hidup_perbulan.val().toString()))
        })
        biaya_pendidikan.keyup(function() {
            biaya_pendidikan.val(ubah_input(biaya_pendidikan.val().toString()))
        })
        biaya_pam_listrik_telepon.keyup(function() {
            biaya_pam_listrik_telepon.val(ubah_input(biaya_pam_listrik_telepon.val().toString()))
        })
        biaya_transport.keyup(function() {
            biaya_transport.val(ubah_input(biaya_transport.val().toString()))
        })
        angsuran_bank_lain.keyup(function() {
            angsuran_bank_lain.val(ubah_input(angsuran_bank_lain.val().toString()))
        })
        angsuran_perumahan.keyup(function() {
            angsuran_perumahan.val(ubah_input(angsuran_perumahan.val().toString()))
        })
        angsuran_kendaraan.keyup(function() {
            angsuran_kendaraan.val(ubah_input(angsuran_kendaraan.val().toString()))
        })
        angsuran_barang_elektronik.keyup(function() {
            angsuran_barang_elektronik.val(ubah_input(angsuran_barang_elektronik.val().toString()))
        })
        angsuran_koperasi.keyup(function() {
            angsuran_koperasi.val(ubah_input(angsuran_koperasi.val().toString()))
        })
        biaya_lainnya.keyup(function() {
            biaya_lainnya.val(ubah_input(biaya_lainnya.val().toString()))
        })
    </script>


    <!-- // tambahkan titik jika yang di input sudah menjadi angka ribuan -->
    <script>
        function ubah_input(angka, prefix) {
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
        // onkeypress="return hanyaAngka(event)" 
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>




    <!-- validasi dari koreksi kak Eta -->

    <script>
        function hanyaHuruf(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || (charCode == 32))

                return true;
            return false;


        }
    </script>



    <!-- sttus perkawinan jika belum menikah maka disable inputan data pasangan -->
    <script>
        var status_perkawinan = $('.status_perkawinan')
        var a1 = $('.a1');
        var a2 = $('.a2');
        var a3 = $('.a3');
        var a4 = $('.a4');
        var a5 = $('.a5');
        var a6 = $('.a6');
        var a7 = $('.a7');
        var a8 = $('.a8');
        var a9 = $('.a9');
        var a10 = $('.a10');
        var a11 = $('.a11');
        var a12 = $('.a12');
        var a13 = $('.a13');
        var a14 = $('.a14');










        $(document).change(function() {

            if (status_perkawinan.val() != "MENIKAH") {
                a1.prop('disabled', true)
                a2.prop('disabled', true)
                a3.prop('disabled', true)
                a4.prop('disabled', true)
                a5.prop('disabled', true)
                a6.prop('disabled', true)
                a7.prop('disabled', true)
                a8.prop('disabled', true)
                a9.prop('disabled', true)
                a10.prop('disabled', true)
                a11.prop('disabled', true)
                a12.prop('disabled', true)
                a13.prop('disabled', true)
                a14.prop('disabled', true)
            } else {
                a1.prop('disabled', false)
                a2.prop('disabled', false)
                a3.prop('disabled', false)
                a4.prop('disabled', false)
                a5.prop('disabled', false)
                a6.prop('disabled', false)
                a7.prop('disabled', false)
                a8.prop('disabled', false)
                a9.prop('disabled', false)
                a10.prop('disabled', false)
                a11.prop('disabled', false)
                a12.prop('disabled', false)
                a13.prop('disabled', false)
                a14.prop('disabled', false)
            }
        })
    </script>







</body>

</html>