<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <?php
                date_default_timezone_set('Asia/Makassar');
                echo date('l, d-m-y H:i:s')
            ?>
                <?= "FUNDING" ?>
                <i class="far fa-user"></i>
                
                
                <!-- <span class="badge badge-danger navbar-badge">3</span> -->
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">



                <div class="dropdown-divider"></div>
                <a href="<?= BASEURL ?>/login/ubah_password" class="dropdown-item dropdown-footer"> UBAH PASSWORD
                    <span class="float-right text-muted text-sm">
                        <i class="fas fa-key"></i>
                    </span></a>





                <div class="dropdown-divider"></div>
                <a href="<?= BASEURL ?>/login/log_out" class="dropdown-item dropdown-footer"> LOGOUT
                    <span class="float-right text-muted text-sm">
                        <i class="fas fa-sign-out-alt"></i>
                    </span></a>
                <!-- <a href="#" class="dropdown-item dropdown-footer">See All Messages</a> -->
            </div>
        </li>


    </ul>

</nav>
<!-- /.navbar -->