<?php
if (!isset($_COOKIE['username'])) {
    header('Location:' . BASEURL . '/login');
    exit;
}
class wawancara_detail_wawancara extends Controller
{




    public function data_sudah_wawancara_no_permohonan_kredit($no_permohonan_kredit)
    {

        $hasil = $this->model('m_wawancara')->data_sudah_wawancara_no_permohonan_kredit($no_permohonan_kredit);

        return $hasil;
    }
}
