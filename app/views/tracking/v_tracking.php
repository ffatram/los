<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lacak Permohonan Kredit</title>

    <link rel="icon" type="image/png" href="<?= BASEURL ?>/assets/tracking/img/logobhm.png">

    <link href="<?= BASEURL ?>/assets/tracking/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= BASEURL ?>/assets/tracking/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <!-- <link href="<?= BASEURL ?>/assets/tracking/font-awesome/css/all.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-oS3vJW5lTtJctJqjiD9prrSVZ1P5+pLdY/6qPYi1Ei8aU3ii6jre49UJDOh4M5QQ" crossorigin="anonymous"> -->





    <style>
        html {
            overflow-y: hidden;
        }

        .input_ktp {
            height: 45px;
            border-radius: 100px;
            font-size: 18px;
            color: black;
        }

        .judul {
            font-weight: bold;
        }

        .h4-seo {
            margin-bottom: 100px;
        }

        h1 {
            margin: 0px;
            margin-bottom: 10px;
        }

        .cop {
            margin-bottom: 40px;
        }

        .navbar-collapse.collapse,
        .collapse.show {
            background: white;
        }


        .table-borderless>tbody>tr>td,
        .table-borderless>tbody>tr>th,
        .table-borderless>tfoot>tr>td,
        .table-borderless>tfoot>tr>th,
        .table-borderless>thead>tr>td,
        .table-borderless>thead>tr>th {
            border: none;
            padding: 0;
            padding-right: 5px;

        }



        /* Gaya CSS untuk tata letak horizontal */
        .horizontal-container {
            display: flex;
            justify-content: center;
        }

        /* Gaya CSS untuk setiap elemen data */
        .data-item {
            margin: 0 10px;
            /* Berikan margin di sisi kanan dan kiri elemen data */
        }

        /* Gaya CSS untuk memusatkan kontainer */
        .centered-container {
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            /* Sesuaikan tinggi kontainer dengan tinggi viewport */
        }


        /* Gaya CSS untuk elemen dengan warna hijau */
        .green-item {
            color: green;

            /* background-color: green; */
        }

        .modal-large .modal-content {
            width: 80%;
            /* Sesuaikan lebar modal sesuai kebutuhan Anda */
        }
    </style>





</head>

<body class="index-page sidebar-collapse">



    <nav class="navbar navbar-expand-lg  fixed-top navbar-transparent" color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://hasamitra.com/" rel="tooltip" title="LOAN ORIGINATION SYSTEM HASAMITRA" data-placement="bottom" target="_blank">
                    <img src="<?= BASEURL ?>/assets/tracking/img/logobhm3.png" width="auto" height="30" class="d-inline-block align-top" alt="">
                    <!-- LOS HASAMITRA -->
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar top-bar"></span>
                    <span class="navbar-toggler-bar middle-bar"></span>
                    <span class="navbar-toggler-bar bottom-bar"></span>
                </button>
            </div>
            <!-- <div class="collapse navbar-collapse" id="navigation" data-nav-image="<?= BASEURL ?>/assets/tracking/img/blurred-image-1.jpg"> -->
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Website" data-placement="bottom" href="https://hasamitra.com/" target="_blank">
                            <i class="now-ui-icons objects_globe" style="color : #00A859"></i>
                            <p class="d-lg-none d-xl-none" style="color : #666666">Website Hasamitra</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Youtube" data-placement="bottom" href="https://www.youtube.com/c/bprhasamitra" target="_blank">
                            <i class="fab fa-youtube" style="color : #00A859"></i>
                            <p class="d-lg-none d-xl-none" style="color : #666666">Youtube Hasamitra</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Facebook" data-placement="bottom" href="https://www.facebook.com/hasamitra" target="_blank">
                            <i class="fab fa-facebook-square" style="color : #00A859"></i>
                            <p class="d-lg-none d-xl-none" style="color : #666666">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/bankhasamitra/" target="_blank">
                            <i class="fab fa-instagram" style="color : #00A859"></i>
                            <p class="d-lg-none d-xl-none" style="color : #666666">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="wrapper">
        <div class="page-header clear-filter">
            <div class="page-header-image" data-parallax="true" style="background-image:url('<?= BASEURL ?>/assets/tracking/img/bg1.jpg');">
            </div>
            <div class="container">


                <div class="content-center brand">
                    <!-- <img class="n-logo" src="./assets/img/logobhm.png" alt=""> -->
                    <div class="cop">
                        <h3><b class="judul" style="color: #666;">Silahkan cek posisi kredit Anda</b></h3>
                        <!-- <p>LOAN ORIGINATION SYSTEM</p> -->
                    </div>
                    <!-- <h3>Masukkan KTP ANDA</h3> -->
                    <input type="text" style="border: 2px solid #00A859" class="form-control input_ktp" placeholder="Masukkan no ktp anda disini...">

                    <div class="mt-4">
                        <button class="btn btn-primary btn_cari" style="width: 150px; font-size: 20px; border-radius: 15px;"><b>Cari</b></button>

                    </div>
                </div>

                <h6 class="category category-absolute">LOS HASAMITRA
                    V1.0

                </h6>
            </div>
        </div>

    </div>









    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Pelacakan Proses Kredit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body data_modal">


                    <div class=" no_ktp_ditemukan mb-2">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                                <tr>
                                    <td>No Registrasi</td>
                                    <td>:</td>
                                    <td class="noreg"></td>
                                </tr>

                                <tr>
                                    <td>Nama Pemohon</td>
                                    <td>:</td>
                                    <td class="nama_pemohon"></td>
                                </tr>

                                <tr>
                                    <td>Instansi</td>
                                    <td>:</td>
                                    <td class="nama_instansi"></td>
                                </tr>
                                <tr>
                                    <td>No KTP</td>
                                    <td>:</td>
                                    <td class="no_ktp"></td>
                                </tr>
                            </table>
                        </div>
                    </div>



                    <div class="no_ktp_tidak_ditemukan">
                        <div class="text-center">
                            <b>No. KTP yang ada input tidak ditemukan</b>
                            <br>
                            <b>Silahkan menghubungi kantor cabang terdekat</b>
                        </div>
                    </div>


                    <div class="no_ktp_reject">
                        <div class="text-center">

                            <h5> <b>Permohonan kredit anda belum bisa disetujui</b></h5>

                            <p>Catatan : <span class="catatan_cs"></span></p>
                        </div>
                    </div>



                    <div id="data-container" class="no_ktp_ditemukan centered-container"></div>




                </div>
            </div>
        </div>
    </div>








    <script src="<?= BASEURL ?>/assets/tracking/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?= BASEURL ?>/assets/tracking/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?= BASEURL ?>/assets/tracking/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= BASEURL ?>/assets/tracking/js/now-ui-kit.js" type="text/javascript"></script>
    <!-- <script src="<?= BASEURL ?>/assets/tracking/font-awesome/js/fontawesome.min.js" type="text/javascript"></script> -->



    <script>
        $('.btn_cari').on('click', function() {
            var no_ktp = $('.input_ktp').val()





            $.ajax({
                type: 'POST',
                url: '<?= BASEURL ?>/tracking/posisi_berkas1',
                data: {
                    no_ktp: no_ktp
                },
                dataType: 'json',
                success: function(res) {


                    var status = res.data.status
                    var catatan_cs = res.data.catatan_cs


                    // cek jika apakaha ada di tbl_kredit_online

                    if (res.status == 'success') {
                        if (status == "APPROVE") {
                            console.log('data' + status)

                            posisi_berkas2(no_ktp, function(res) {
                                cek_tbl_permohon_kredit(res)
                            })


                        } else {

                            $('.catatan_cs').text(catatan_cs)
                            $('no_ktp_reject').show();


                            $('.no_ktp_ditemukan').hide()
                            $('.no_ktp_tidak_ditemukan').hide()


                        }
                    } else {
                        posisi_berkas2(no_ktp, function(res) {
                            cek_tbl_permohon_kredit(res)
                        })
                    }


                    $('#myModal').modal('show')


                },
                error: function(err) {
                    console.log(err)
                }

            })

        })
    </script>



    <script>
        function cek_tbl_permohon_kredit(res) {
            var data = ["CS", "SLIK", "ANALISA", "KOMITE", "PENCAIRAN"];
            if (res.status == 'success') {

                res = res.data
                var noreg = res.no_permohonan_kredit
                var nama_pemohon = res.nama_pemohon
                var nama_instansi = res.nama_instansi
                var no_ktp = res.no_ktp_pemohon

                var lokasi_berkas = res.lokasi_berkas

                if (lokasi_berkas == "ANALIS" || lokasi_berkas == "ANALISA" || lokasi_berkas == "RO") {
                    lokasi_berkas = 'ANALISA'
                }

                if (lokasi_berkas == "SYSTEM") {
                    lokasi_berkas = 'CS'
                }

                var posisiBerkas = data.indexOf(lokasi_berkas);




                $('.noreg').text(noreg)
                $('.nama_pemohon').text(nama_pemohon)
                $('.nama_instansi').text(nama_instansi)
                $('.no_ktp').text(no_ktp)





                var divContainer = $("<div>").addClass("horizontal-container");

                data.forEach(function(item, index) {
                    var dataItem = $("<div>").addClass("data-item").text(item);

                    if (index <= posisiBerkas || item === data[posisiBerkas]) {
                        dataItem.addClass("green-item");
                        dataItem.append('<span class="check-icon"> <i class="fas fa-check"></i></span>');
                    }

                    divContainer.append(dataItem);
                });


                $("#data-container").html(divContainer);
                $('.no_ktp_tidak_ditemukan').hide()
                $('.no_ktp_reject').hide();



            } else {
                $('.no_ktp_ditemukan').hide()
                $('.no_ktp_tidak_ditemukan').show()
                $('.no_ktp_reject').hide();
            }
        }
    </script>




    <script>
        function posisi_berkas2(no_ktp, callback) {

            $.ajax({
                type: 'POST',
                url: '<?= BASEURL ?>/tracking/posisi_berkas2',
                data: {
                    no_ktp: no_ktp
                },
                dataType: 'json',
                success: function(res) {
                    callback(res)
                },
                error: function(err) {
                    console.log(err)
                }
            })

        }
    </script>









</body>

</html>