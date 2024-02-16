<?php



// if ($_SESSION['username'] != 'komite') {
//     header('Location:' . BASEURL . '/login_tes');
// }

class komite_tes extends Controller
{

    public function index()
    {

        echo "komite ok";
    }

    public function keluar()
    {
        session_destroy();
    }
}
