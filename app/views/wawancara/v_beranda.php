<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

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

    <style>
        .scrollable-list {
            max-height: 500px;
            /* Atur tinggi maksimal sesuai keinginan */
            overflow-y: scroll;
            scrollbar-width: none;
            /* Untuk browser Firefox dan browser berbasis Chromium */
        }

        .scrollable-list::-webkit-scrollbar {
            display: none;
            /* Untuk browser Chrome, Opera, Safari, dan browser berbasis Chromium */
        }

        .card-opacity {
            opacity: 0.7;
            transition: opacity 0.10s ease-in-out;
        }

        .card-opacity:hover {
            opacity: 0.7;
        }

        /* Menghilangkan border pada textarea */
        .card-text-area {
            border: none;
            resize: none;
            /* Menghilangkan fitur resize */
            background: transparent;
            /* Menghilangkan latar belakang */
        }
    </style>

    <style>
        #particles-js {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            /* Mengatur elemen partikel di belakang */
        }

        #tes {
            position: absolute;
            top: 50%;
            /* Menempatkan textarea di tengah vertikal */
            left: 50%;
            /* Menempatkan textarea di tengah horizontal */
            transform: translate(-50%, -50%);
            /* Membuat posisi tepat di tengah */
            z-index: 0;
            /* Mengatur elemen textarea di atas */
        }
    </style>




</head>



<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">




        <!-- Navbar -->
        <?php $this->view('wawancara/navbar') ?>
        <!-- Navbar -->

        <!-- Side Bar -->
        <?php $this->view('wawancara/side_bar') ?>
        <!-- Side Bar -->









        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1 class="m-0">Beranda</h1> -->
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->









            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">



                    <!-- <textarea id="text-area"></textarea> -->

                    <!-- database get nama lengkap  -->
                    <?php
                    $this->db = new Database;
                    $username = $_COOKIE['username'];
                    $this->db->query('SELECT * FROM tbl_user WHERE  username =:username');
                    $this->db->bind('username', $username);
                    $res = $this->db->single();
                    ?>



                    <div class="container-fluid ">


                        <!-- <p>UPDATE</p> -->
                        <div class="row">
                            <div class="col">
                                <div class="scrollable-list">
                                    <div class="d-flex flex-column">

                                        <div class="text-center">
                                            <div class="mask p-5">
                                                <div class="d-flex justify-content-center align-items-center ">
                                                    <div style="color: rgba(0, 0, 0, 0.7);">
                                                        <h1 class="mb-3">Selamat Datang, <?= $res['nama_lengkap'] ?></h1>
                                                        <h5 class="mb-1">
                                                            <?php 
                                                            $res['level'] = level_3;
                                                            ?>
                                                            Anda login sebagai <?= $res['level'] ?>, Pada tanggal <?= $_SESSION['waktu_login'] ?>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php


                                        foreach ($data['update'] as $i) :

                                            if (date("Y-m-d") >= $i['tgl_mulai'] && date("Y-m-d") <= $i['tgl_akhir']) {
                                        ?>



                                                <div class="form-group" id="update">
                                                    <div class="container mt-4">
                                                        <div id="particles-js"></div>
                                                        <label for="exampleFormControlTextarea1" class="text-danger">Update LOS | <?= $i['tgl_mulai'] ?></label>
                                                        <textarea class="card-text-area form-control" id="exampleFormControlTextarea1" rows="15" style="background: transparent;" readonly><?= $i['informasi'] ?></textarea>
                                                    </div>
                                                </div>

                                        <?php }
                                        endforeach ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="text-center quote">
                    <h5>
                        <p class="text-primary" style="font-weight: bold;">"<?= $data['quote'][0]['quote'] ?>"</p>
                    </h5>
                </div>


            </section>
        </div>
    </div>


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

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 10,
                    density: {
                        enable: true,
                        value_area: 900
                    }
                },
                color: {
                    value: "#93B1A6"
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000"
                    },
                    polygon: {
                        nb_sides: 5
                    }
                },
                opacity: {
                    value: 0.5,
                    random: false,
                    anim: {
                        enable: false,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 5,
                    random: true,
                    anim: {
                        enable: false,
                        speed: 40,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 6,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200
                    }
                }
            }
        });
    </script>






</body>

</html>