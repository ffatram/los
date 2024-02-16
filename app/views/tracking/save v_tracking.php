<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <link rel="icon" type="image/png" href="<?= BASEURL ?>/assets/tracking/img/logobhm.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Lacak Permohonan Kredit
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- CSS Files -->
    <link href="<?= BASEURL ?>/assets/tracking/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= BASEURL ?>/assets/tracking/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <link href="<?= BASEURL ?>/assets/tracking/font-awesome/css/all.min.css" rel="stylesheet" />

    <!-- hilangkan scroll -->
    <style>
        html {
            overflow-y: hidden;
        }
    </style>

    <style>
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
    </style>




    <!-- ubah warna backround sidebar -->

    <style>
        /* .navbar {
            background-color: transparent;
        }

        .navbar-collapse.collapse {
            display: flex;
        } */

        .navbar-collapse.collapse,
        .collapse.show {
            background: white;
        }

        /* 
        .navbar-collapse {
            background-color: white;
        } */
    </style>


    <style>
        body {
            /* height: 1000px;

            width: 1000px;

            overflow: hidden; */

        }
    </style>
</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
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
    <!-- End Navbar -->
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
    </div>
    <!-- End .section-navbars  -->

    <!-- End Section Tabs -->
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

                </div>
            </div>
        </div>
    </div>




    </footer>
    </div>


    <script src="<?= BASEURL ?>/assets/tracking/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?= BASEURL ?>/assets/tracking/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?= BASEURL ?>/assets/tracking/js/core/bootstrap.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL ?>/assets/tracking/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
    <script src="<?= BASEURL ?>/assets/tracking/font-awesome/js/fontawesome.min.js" type="text/javascript"></script>
    <script>
        function scrollToDownload() {

            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
    </script>


    <script>
        $('.btn_cari').on('click', function() {
            var no_ktp = $('.input_ktp').val()


            $.ajax({
                type: 'POSt',
                url: '<?= BASEURL ?>/tracking/data',
                data: {
                    no_ktp: no_ktp
                },
                success: function(res) {

                    console.log('Res : ' + res)


                    // $('#myModal').modal('show')

                },
                error: function(err) {
                    console.log(err)
                }
            })
        })

    </script>




</body>

</html>