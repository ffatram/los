<?php
if (!isset($_COOKIE['username'])) {
    header('Location:' . BASEURL . '/login');
    exit;
}
class berkas_wawancara extends Controller
{

    public function get_tbl_wawancara_berkas()
    {
        $id = $_POST['no_permohonan_kredit'];

        $data['get_tbl_wawancara_berkas_id'] = $this->model('m_file_wawancara')->get_tbl_wawancara_berkas_id($id);
        
    }
}
