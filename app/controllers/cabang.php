<?php



class cabang extends Controller
{
    public function index()
    {
        $this->view('cabang/beranda');
    }

    public function daftar_cabang()
    {
        $data['data'] = $this->model('m_cabang')->daftar_cabang();
        $this->view('cabang/v_cabang', $data);
    }

    public function simpan()
    {

        $data = $this->model('m_cabang')->simpan();

        if ($data > 0) {
            echo 'sukses';
        } else {
            echo 'gagal';
        }
    }
    public function update()
    {
        $data = $this->model('m_cabang')->update();

        if ($data > 0) {
            echo 'sukses';
        } else {
            echo 'gagal';
        }
    }
}
