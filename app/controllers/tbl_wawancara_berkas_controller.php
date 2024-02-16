<?php

class tbl_wawancara_berkas_controller extends Controller
{


    public function store()
    {


        // Mendapatkan data JSON dari request
        $json_data = file_get_contents('php://input');

        // Menguraikan JSON menjadi array
        $data = json_decode($json_data, true);

        $no_permohonan_kredit = $data['no_permohonan_kredit'];


        // print_r($data['data']);



        $semuaBerhasil = '';
        foreach ($data['data'] as $i => $row) {

            // Menyimpan nilai-nilai ke dalam $_POST dengan kunci yang unik
            $_POST['no_permohonan_kredit'] = $no_permohonan_kredit;
            $_POST['nama_file'] = $row['nama_file'];
            $_POST['jenis_file'] = $row['jenis_file'];

            $data = $this->model('m_file_wawancara')->simpan_file_wawancara();

            if ($data > 0) {
                $semuaBerhasil = 'success';
            } else {
                $semuaBerhasil = 'error';
            }
        }


        echo json_encode(['message' => $semuaBerhasil]);


        // // Mengakses data yang dikirim dari front-end
        // $dataFromFrontend = $data;



        // // Lakukan sesuatu dengan data yang diterima
        // // ...

        // // Menyiapkan respons untuk dikirim kembali ke front-end
        // $response = array( $dataFromFrontend);

        // // Mengubah respons ke format JSON
        // $json_response = json_encode($response);

        // // Mengirim respons kembali ke front-end
        // header('Content-Type: application/json');
        // echo $json_response;
    }
}
