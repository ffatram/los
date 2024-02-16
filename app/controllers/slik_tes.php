<?php

// if ($_SESSION['username'] != 'slik') {
//     header('Location:' . BASEURL . '/login_tes');
// }


class slik_tes extends Controller
{

    public function index()
    {

        echo "slik ok";
    }

    public function keluar()
    {
        session_destroy();
    }
}
