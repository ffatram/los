<?php

class tracking extends Controller
{

    public function index()
    {
        $this->view('tracking/v_tracking');
    }

    public function posisi_berkas2()
    {

        $data = $this->model('m_tracking')->posisi_berkas2($_POST);

        if ($data) {
            echo json_encode(['data' => $data, 'message' => 'Data Ditemukan', 'status' => 'success']);
        } else {
            echo json_encode(['data' => $data, 'message' => 'Data tidak ditemukan', 'status' => 'error']);
        }
    }

    public function posisi_berkas1()
    {

        $data = $this->model('m_tracking')->posisi_berkas1($_POST);

        if ($data) {
            echo json_encode(['data' => $data, 'message' => 'Data Ditemukan', 'status' => 'success']);
        } else {
            echo json_encode(['data' => $data, 'message' => 'Data tidak ditemukan', 'status' => 'error']);
        }
    }
}
