<?php
class funding extends Controller
{
    public function index()
    {
        $this->view('funding/beranda');
    }

    public function halo()
    {
        $this->view('funding/halo');
    }

    public function coba()
    {
        $this->view('funding/coba');
    }

    public function approval_funding()
    {

        $_POST['username'] = "ASMA";

        $data['get_all_tbl_user'] =  $this->model('m_funding')->get_all_tbl_user();
        $data['get_id_tbl_user'] = $this->model('m_funding')->get_id_tbl_user();

        $this->view('funding/approval_funding', $data);
    }
    public function daftar_pengajuan()
    {
        $this->view('funding/daftar_pengajuan');
    }
    public function form_bebas_finalty()
    {
        $this->view('funding/form_bebas_finalty');
    }
    public function form_pembayaran_bunga()
    {
        $this->view('funding/form_pembayaran_bunga');
    }
    public function form_suku_bunga()
    {
        $this->view('funding/form_suku_bunga');
    }




    // model get_all_tbl_user

    public function get_all_tbl_user()
    {

        return  $this->model('m_funding')->get_all_tbl_user();
    }
}
