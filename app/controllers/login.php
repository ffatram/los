<?php

class login extends Controller
{


    // Fungsi untuk menghasilkan dan menyimpan token CSRF
    private function generateCsrfToken()
    {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
    }

    public function index()
    {
        // session_start();
        if (isset($_SESSION['level'])) {
            
            header('Location:' . BASEURL . '/login/cek_sesi_login');
        } else {

            $this->generateCsrfToken(); // Generate CSRF token
            $this->view('login/v_login');
        }

        // s$this->view('login/v_login');
    }

    public function cek_login()
    {



        // Verifikasi token CSRF
        if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            die("Token CSRF tidak valid");
        }



        $this->db = new Database;
        date_default_timezone_set('Asia/Makassar');
        $date = date('Y-m-d H:i:s');

        $data = $this->model('m_login')->cek_login($_POST);
        if ($data != "login_gagal" && $data != 'ubah_password') {
            if ($data['level'] == 'SUPERVISOR') {
                $username = $data['username'];
                $nama_lengkap =  $data['nama_lengkap'];
                $level =  $data['level'];
                $kode_cabang =  $data['kode_cabang'];
                $nama_cabang =  $data['nama_cabang'];
                $limit =  $data['limit'];
                $aturan_jumlah_komite =  $data['aturan_jumlah_komite'];

                $_SESSION['waktu_login'] = date("d M Y H:i:s");
                $_SESSION['level'] = $level;

                // Hapus token CSRF setelah digunakan
                unset($_SESSION['csrf_token']);


                setcookie('username', $username, time() + (60 * 60 * 60), '/');
                setcookie('nama_lengkap', $nama_lengkap, time() + (60 * 60 * 60), '/');
                setcookie('level', $level, time() + (60 * 60 * 60), '/');
                setcookie('kode_cabang', $kode_cabang, time() + (60 * 60 * 60), '/');
                setcookie('nama_cabang', $nama_cabang, time() + (60 * 60 * 60), '/');
                setcookie('limit', $limit, time() + (60 * 60 * 60), '/');
                setcookie('aturan_jumlah_komite', $aturan_jumlah_komite, time() + (60 * 60 * 60), '/');
                header('Location:' . BASEURL . '/supervisor');
                exit;
            }


            if ($data['level'] == 'CS') {
                $username = $data['username'];
                $nama_lengkap =  $data['nama_lengkap'];
                $level =  $data['level'];
                $kode_cabang =  $data['kode_cabang'];
                $nama_cabang =  $data['nama_cabang'];
                $limit =  $data['limit'];
                $aturan_jumlah_komite =  $data['aturan_jumlah_komite'];


                $_SESSION['waktu_login'] = date("d M Y H:i:s");
                $_SESSION['level'] = $level;

                // Hapus token CSRF setelah digunakan
                unset($_SESSION['csrf_token']);

                setcookie('username', $username, time() + (60 * 60 * 60), '/');
                setcookie('nama_lengkap', $nama_lengkap, time() + (60 * 60 * 60), '/');
                setcookie('level', $level, time() + (60 * 60 * 60), '/');
                setcookie('kode_cabang', $kode_cabang, time() + (60 * 60 * 60), '/');
                setcookie('nama_cabang', $nama_cabang, time() + (60 * 60 * 60), '/');
                setcookie('limit', $limit, time() + (60 * 60 * 60), '/');
                setcookie('aturan_jumlah_komite', $aturan_jumlah_komite, time() + (60 * 60 * 60), '/');
                header('Location:' . BASEURL . '/cs/beranda');
                exit;
            }


            if ($data['level'] == 'SLIK') {
                $username = $data['username'];
                $nama_lengkap =  $data['nama_lengkap'];
                $level =  $data['level'];
                $kode_cabang =  $data['kode_cabang'];
                $nama_cabang =  $data['nama_cabang'];
                $limit =  $data['limit'];
                $aturan_jumlah_komite =  $data['aturan_jumlah_komite'];

                $_SESSION['waktu_login'] = date("d M Y H:i:s");
                $_SESSION['level'] = $level;

                // Hapus token CSRF setelah digunakan
                unset($_SESSION['csrf_token']);


                setcookie('username', $username, time() + (60 * 60 * 60), '/');
                setcookie('nama_lengkap', $nama_lengkap, time() + (60 * 60 * 60), '/');
                setcookie('level', $level, time() + (60 * 60 * 60), '/');
                setcookie('kode_cabang', $kode_cabang, time() + (60 * 60 * 60), '/');
                setcookie('nama_cabang', $nama_cabang, time() + (60 * 60 * 60), '/');
                setcookie('limit', $limit, time() + (60 * 60 * 60), '/');
                setcookie('aturan_jumlah_komite', $aturan_jumlah_komite, time() + (60 * 60 * 60), '/');
                header('Location:' . BASEURL . '/slik/beranda');
                exit;
            }


            if ($data['level'] == 'RO') {
                $username = $data['username'];
                $nama_lengkap =  $data['nama_lengkap'];
                $level =  $data['level'];
                $kode_cabang =  $data['kode_cabang'];
                $nama_cabang =  $data['nama_cabang'];
                $limit =  $data['limit'];
                $aturan_jumlah_komite =  $data['aturan_jumlah_komite'];

                // set sesi login

                $_SESSION['waktu_login'] = date("d M Y H:i:s");
                $_SESSION['level'] = $level;

                // Hapus token CSRF setelah digunakan
                unset($_SESSION['csrf_token']);


                setcookie('username', $username, time() + (60 * 60 * 60), '/');
                setcookie('nama_lengkap', $nama_lengkap, time() + (60 * 60 * 60), '/');
                setcookie('level', $level, time() + (60 * 60 * 60), '/');
                setcookie('kode_cabang', $kode_cabang, time() + (60 * 60 * 60), '/');
                setcookie('nama_cabang', $nama_cabang, time() + (60 * 60 * 60), '/');
                // setcookie('limit', $limit, time() + (60 * 60 * 60), '/');
                // setcookie('aturan_jumlah_komite', $aturan_jumlah_komite, time() + (60 * 60 * 60), '/');
                header('Location:' . BASEURL . '/wawancara/beranda');
                exit;
            }









            if ($data['level'] == 'KOMITE') {
                $username = $data['username'];
                $tipe_kredit = $data['tipe_kredit'];
                $limit_direksi_awal = $data['limit_direksi_awal'];
                $limit_direksi_akhir = $data['limit_direksi_akhir'];

                $nama_lengkap =  $data['nama_lengkap'];
                $level =  $data['level'];
                $kode_cabang =  $data['kode_cabang'];
                $nama_cabang =  $data['nama_cabang'];
                $limit =  $data['limit'];
                $aturan_jumlah_komite =  $data['aturan_jumlah_komite'];
                $tipe_komite = $data['tipe_komite'];



                $_SESSION['waktu_login'] = date("d M Y H:i:s");
                $_SESSION['level'] = $level;

                // Hapus token CSRF setelah digunakan
                unset($_SESSION['csrf_token']);


                setcookie('nama_lengkap', $nama_lengkap, time() + (60 * 60 * 60), '/');
                setcookie('level', $level, time() + (60 * 60 * 60), '/');
                setcookie('kode_cabang', $kode_cabang, time() + (60 * 60 * 60), '/');
                setcookie('nama_cabang', $nama_cabang, time() + (60 * 60 * 60), '/');
                // setcookie('limit', $limit, time() + (60 * 60 * 60), '/');
                // setcookie('aturan_jumlah_komite', $aturan_jumlah_komite, time() + (60 * 60 * 60), '/');
                setcookie('tipe_komite', $tipe_komite, time() + (60 * 60 * 60), '/');

                setcookie('username', $username, time() + (60 * 60 * 60), '/');
                setcookie('tipe_kredit', $tipe_kredit, time() + (60 * 60 * 60), '/');
                setcookie('limit_direksi_awal', $limit_direksi_awal, time() + (60 * 60 * 60), '/');
                setcookie('limit_direksi_akhir', $limit_direksi_akhir, time() + (60 * 60 * 60), '/');
                header('Location:' . BASEURL . '/komite/beranda');
                exit;
            }






            if ($data['level'] == 'PENCAIRAN') {
                $username = $data['username'];
                $nama_lengkap =  $data['nama_lengkap'];
                $level =  $data['level'];
                $kode_cabang =  $data['kode_cabang'];
                $nama_cabang =  $data['nama_cabang'];
                $limit =  $data['limit'];
                $aturan_jumlah_komite =  $data['aturan_jumlah_komite'];

                $_SESSION['waktu_login'] = date("d M Y H:i:s");
                $_SESSION['level'] = $level;

                // Hapus token CSRF setelah digunakan
                unset($_SESSION['csrf_token']);

                setcookie('username', $username, time() + (60 * 60 * 60), '/');
                setcookie('nama_lengkap', $nama_lengkap, time() + (60 * 60 * 60), '/');
                setcookie('level', $level, time() + (60 * 60 * 60), '/');
                setcookie('kode_cabang', $kode_cabang, time() + (60 * 60 * 60), '/');
                setcookie('nama_cabang', $nama_cabang, time() + (60 * 60 * 60), '/');
                setcookie('limit', $limit, time() + (60 * 60 * 60), '/');
                setcookie('aturan_jumlah_komite', $aturan_jumlah_komite, time() + (60 * 60 * 60), '/');
                header('Location:' . BASEURL . '/pencairan/beranda');
                exit;
            }



            if ($data['level'] == 'MARKETING') {
                $username = $data['username'];
                $nama_lengkap =  $data['nama_lengkap'];
                $level =  $data['level'];
                $kode_cabang =  $data['kode_cabang'];
                $nama_cabang =  $data['nama_cabang'];
                $limit =  $data['limit'];
                $aturan_jumlah_komite =  $data['aturan_jumlah_komite'];

                // set sesi login

                $_SESSION['waktu_login'] = date("d M Y H:i:s");
                $_SESSION['level'] = $level;

                // Hapus token CSRF setelah digunakan
                unset($_SESSION['csrf_token']);


                setcookie('username', $username, time() + (60 * 60 * 60), '/');
                setcookie('nama_lengkap', $nama_lengkap, time() + (60 * 60 * 60), '/');
                setcookie('level', $level, time() + (60 * 60 * 60), '/');
                setcookie('kode_cabang', $kode_cabang, time() + (60 * 60 * 60), '/');
                setcookie('nama_cabang', $nama_cabang, time() + (60 * 60 * 60), '/');
                // setcookie('limit', $limit, time() + (60 * 60 * 60), '/');
                // setcookie('aturan_jumlah_komite', $aturan_jumlah_komite, time() + (60 * 60 * 60), '/');
                header('Location:' . BASEURL . '/users/index');
                exit;
            }


            $username = $data['username'];
            $nama_lengkap =  $data['nama_lengkap'];
            $level =  $data['level'];
            $kode_cabang =  $data['kode_cabang'];
            $nama_cabang =  $data['nama_cabang'];
            $limit =  $data['limit'];
            $aturan_jumlah_komite =  $data['aturan_jumlah_komite'];

            // set sesi login

            $_SESSION['waktu_login'] = date("d M Y H:i:s");
            $_SESSION['level'] = $level;

            // Hapus token CSRF setelah digunakan
            unset($_SESSION['csrf_token']);
            setcookie('username', $username, time() + (60 * 60 * 60), '/');
            setcookie('nama_lengkap', $nama_lengkap, time() + (60 * 60 * 60), '/');
            setcookie('level', $level, time() + (60 * 60 * 60), '/');
            setcookie('kode_cabang', $kode_cabang, time() + (60 * 60 * 60), '/');
            setcookie('nama_cabang', $nama_cabang, time() + (60 * 60 * 60), '/');
            // setcookie('limit', $limit, time() + (60 * 60 * 60), '/');
            // setcookie('aturan_jumlah_komite', $aturan_jumlah_komite, time() + (60 * 60 * 60), '/');
            header('Location:' . BASEURL . '/inquiry/beranda');
            exit;
        } else if ($data == "ubah_password") {
            // Hapus token CSRF setelah digunakan
            unset($_SESSION['csrf_token']);
            header('Location:' . BASEURL . '/login/ubah_password');
            exit;
        } else {
            // Hapus token CSRF setelah digunakan
            unset($_SESSION['csrf_token']);

            $_SESSION['login'] = "salah";
            // Flasher::setFlash('Login Gagal', '', 'danger');
            header('Location:' . BASEURL . '/login');
            exit;
        }
    }



    public function cek_sesi_login()
    {




        if (isset($_SESSION['level'])) {

            if ($_SESSION['level'] == 'SUPERVISOR') {
                header('Location:' . BASEURL . '/supervisor');
                exit;
            }

            if ($_SESSION['level'] == 'KOMITE') {
                header('Location:' . BASEURL . '/komite/daftar_belum_komite');
                exit;
            } else if ($_SESSION['level'] == 'SLIK') {
                header('Location:' . BASEURL . '/slik/daftar_belum_slik');
                exit;
            } else if ($_SESSION['level'] == 'RO') {
                header('Location:' . BASEURL . '/wawancara');
                exit;
            } else if ($_SESSION['level'] == 'CS') {
                header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
                exit;
            } else if ($_SESSION['level'] == 'PENCAIRAN') {
                header('Location:' . BASEURL . '/pencairan/beranda');
                exit;
            } else {
                header('Location:' . BASEURL . '/login');
                exit;
            }
        } else {

            header('Location:' . BASEURL . '/login');
            exit;
        }
    }



    public function ubah_password()
    {
        $this->view('login/v_ubah_password');
    }

    public function ubah_pin()
    {
        $this->view('login/v_ubah_pin');
    }


    public function ubah_pin_modal()
    {
        $this->view('login/v_ubah_pin_modal');
    }
    public function cek_ubah_password()
    {

        $data = $this->model('m_login')->cek_ubah_password();

        if ($data != 'salah') {
            echo $data['nama_lengkap'];
        } else {
            echo $data;
        }
    }


    public function cek_ubah_pin()
    {

        $data = $this->model('m_login')->cek_ubah_pin();

        if ($data != 'salah') {
            echo $data['nama_lengkap'];
        } else {
            echo $data;
        }
    }

    public function set_ubah_password()
    {


        $password = password_hash($_POST['password_baru1'], PASSWORD_DEFAULT);
        $_POST['password'] = $password;

        $data = $this->model('m_login')->set_ubah_password();

        if ($data > 0) {
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }



    public function set_ubah_pin()
    {


        $password = password_hash($_POST['password_baru1'], PASSWORD_DEFAULT);
        $_POST['password'] = $password;

        $data = $this->model('m_login')->set_ubah_pin();

        if ($data > 0) {
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }


    public function cek_login_pass_default()
    {
        $data = $this->model('m_login')->cek_login_pass_default();

        if ($data != "login_gagal") {
            echo $data['nama_lengkap'];

            if (password_verify('123', $data['password'])) {
                echo 'Password is valid!';
            } else {
                echo 'Invalid password.';
            }
        } else {
            echo $data;
        }
    }


    public function cek_pin_komite()
    {

        $data =  $this->model('m_login')->cek_pin_komite();



        if ($data == "pin_sama") {
            echo "pin_sama";
        } else if ($data == "pin_beda") {

            echo "pin_beda";
        }
    }

    public function tes()
    {
        $this->view('login/tes');
    }


    public function log_out()
    {

        setcookie('username', null, -1, '/');
        setcookie('nama_lengkap', null, 1, '/');
        setcookie('level', null, 1, '/');
        setcookie('kode_cabang', null, 1, '/');
        setcookie('nama_cabang', null, 1, '/');
        setcookie('limit', null, 1, '/');
        setcookie('aturan_jumlah_komite', null, 1, '/');
        setcookie('tipe_kredit', null, 1, '/');
        setcookie('limit_direksi_awal', null, 1, '/');
        setcookie('limit_direksi_akhir', null, 1, '/');
        setcookie('tipe_komite', null, 1, '/');




        // 

        session_destroy();

        header('Location:' . BASEURL . '/login');
        exit;
    }
}
