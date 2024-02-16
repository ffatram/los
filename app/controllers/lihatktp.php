<?php

class lihatktp extends Controller
{

    public function show($noreg)
    {

        $data = $this->model('m_lihatktp')->showWhereNoreg($noreg);

        $nama_file_array = array();
        foreach ($data as $item) {
            $nama_file_array[] = BASEURL.'/upload/file_upload_wawancara/'.$item['nama_file'];
        }
        
        

        if ($data) {
            echo json_encode(['message' => 'success', 'data'=> $nama_file_array]);
        } else {
            echo json_encode(array('message' => 'Data not found'));
        }
    }
}
