<?php

include 'ref_instansi.php';
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Headers: *');

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: *");
class restapi_credit_online extends Controller
{
    public function cek_token($token)
    {
        if (isset($token) && $this->validate_token($token)) {
            return 'token valid';
        } else {
            $this->return_error('Error token tidak valid');
        }
    }

    

    public function pekerjaan()
    {


        $token = isset($_POST['token']) ? $_POST['token'] : null;

        $cek_token = $this->cek_token($token);

        if ($cek_token == 'token valid') {
            echo json_encode($this->model('m_jenis_pekerjaan')->get_all_jenis_pekerjaan());
        } else {
            echo $this->return_error($cek_token);
        }
    }

    public function nik_ktp()
    {

        $nik =  $this->model('m_cs')->m_nik_ktp();

        if (isset($nik)) {
            // if($nik==''){
            //     echo json_encode(["los_data_where_nik" => 'Data Belum Terdaftar']);
            // }else{
            //     echo json_encode(["los_data_where_nik" => $nik]);
            // }

            echo json_encode(["los_data_where_nik" => $nik]);
           
        } else {
            echo json_encode(["Error" => 'server eror']);
        }
    }


    public function kantor_cabang()
    {
        $nik =  $this->model('m_cabang')->daftar_cabang();

        if (isset($nik)) {
            echo json_encode(["kantor_cabang" => $nik]);
        } else {
            echo json_encode(["Error" => "Error"]);
        }
    }



// api for credit online fix

// url api instansi

    public function instansi()
    {
        $token = isset($_POST['token']) ? $_POST['token'] : null;

        $cek_token = $this->cek_token($token);

        if ($cek_token == 'token valid') {
            echo $this->get_tbl_ref_instansi();
        } else {
            echo $this->return_error($cek_token);
        }  
    }



    // url api jenis_jaminan
    public function jenis_jaminan()
    {

        try {
            $data =  $this->model('m_jaminan')->get_all_jaminan();


            if (isset($data)) {
                echo json_encode(["ref_jenis_jaminan" => $data]);
            } else {
                echo json_encode(["Error" => 'Data Kosong']);
            }
        } catch (Exception $e) {
            echo json_encode(["Error" => $e]);
        }
    }






    private function validate_token($token)
    {
        // Tambahkan validasi tambahan sesuai kebutuhan, misalnya panjang token dan karakter tertentu.
        return $token === 'faturungimuharram';
    }

    private function return_error($message)
    {
        http_response_code(401);
        echo json_encode(["Error" => $message]);
        exit();
    }

    private function get_tbl_ref_instansi()
    {
        $_COOKIE['kode_cabang'] = '01';

        $ref_instansi = new ref_instansi();
        $data = $ref_instansi->get_all();

        return json_encode($data);
    }


    
}
