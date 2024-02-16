<?php

class tablecontroller extends Controller
{


    // tbl_permohon_kredit


    public function kreditonline()
    {
        
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $data =  $this->model('m_tbl_permohonan_kredit')->get_data_where_no_permohonan_kerdit($no_permohonan_kredit);
        $response = ['status' => 'success', 'message' => 'Data received successfully', 'data' => $data];
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
