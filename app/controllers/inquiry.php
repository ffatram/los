<?php


class inquiry extends Controller
{

    public function index()
    {

        $this->view('inquiry/v_inquiry');
    }

    public function beranda()
    {
        $this->view('inquiry/v_beranda');
    }






    public function cari_data_credit_all_2()
    {
        if (isset($_POST['btn_hari_ini'])) {
            $_SESSION['btn_hari_ini'] = 'btn_hari_ini';
            header('Location:' . BASEURL . '/inquiry/inquiry');
            exit;
        } else if (isset($_POST['btn_bulan_ini'])) {
            $_SESSION['btn_bulan_ini'] = 'btn_bulan_ini';
            header('Location:' . BASEURL . '/inquiry/inquiry');
            exit;
        } else if (isset($_POST['btn_tahun_ini'])) {

            $_SESSION['btn_tahun_ini'] = 'btn_tahun_ini';
            header('Location:' . BASEURL . '/inquiry/inquiry');
            exit;
        } else if (isset($_POST['btn_semuanya'])) {
            $_SESSION['btn_semuanya'] = 'btn_semuanya';
            header('Location:' . BASEURL . '/inquiry/inquiry');
            exit;
        } else if (isset($_POST['btn_pending'])) {
            $_SESSION['btn_pending'] = 'btn_pending';
            header('Location:' . BASEURL . '/inquiry/inquiry');
            exit;
        } else if (isset($_POST['btn_cari'])) {
            $_SESSION['data_cari'] = $_POST['data_cari'];
            $_SESSION['btn_cari'] = $_POST['btn_cari'];
            header('Location:' . BASEURL . '/inquiry/inquiry');
            exit;
        }
    }



    public function inquiry()
    {

        if (isset($_SESSION['btn_hari_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_hari_ini();
            $this->view('inquiry/v_inquiry', $data);
            unset($_SESSION['btn_hari_ini']);
        } else if (isset($_SESSION['btn_bulan_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_bulan_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_bulan_ini();
            $this->view('inquiry/v_inquiry', $data);
            unset($_SESSION['btn_bulan_ini']);
        } else if (isset($_SESSION['btn_tahun_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_tahun_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_tahun_ini();
            $this->view('inquiry/v_inquiry', $data);
            unset($_SESSION['btn_tahun_ini']);
        } else if (isset($_SESSION['btn_semuanya'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->lihat_data_kredit();
            $data['jumlah_record'] = $this->model('m_cs')->count_lihat_data_kredit();
            $this->view('inquiry/v_inquiry', $data);
            unset($_SESSION['btn_semuanya']);
        } else if (isset($_SESSION['btn_pending'])) {

            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();

            $this->view('inquiry/v_inquiry', $data);
            unset($_SESSION['btn_pending']);
        } else if (isset($_SESSION['btn_cari'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";

            if ($_SESSION['data_cari'] != '') {
                $data['data_kredit'] = $this->model('m_cs')->btn_cari();
                $data['jumlah_record'] = $this->model('m_cs')->count_btn_cari();
            }

            $this->view('inquiry/v_inquiry', $data);
            unset($_SESSION['btn_cari']);
        } else {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $this->view('inquiry/v_inquiry', $data);
        }
    }
}
