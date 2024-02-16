<?php









class login_tes extends Controller
{



    public function index()
    {
        // if (isset($_SESSION['username'])) {
        //     if ($_SESSION['username'] == 'slik') {
        //         header('Location:' . BASEURL . '/slik_tes');
        //     } else if ($_SESSION['username'] == 'komite') {
        //         header('Location:' . BASEURL . '/komite_tes');
        //     }
        // } else {
        //     $this->view('login/v_login_tes');
        // }
    }

    public function cek_login()
    {

        $username =  $_POST['username'];

        if (isset($username)) {
            if ($username == "komite") {
                $_SESSION['username'] = $username;
                header('Location:' . BASEURL . '/komite_tes');
            } else if ($username == "slik") {
                $_SESSION['username'] = $username;
                header('Location:' . BASEURL . '/slik_tes');
            } else {
                echo "salah";
            }
        }
    }
}
