<?php

class ref extends Controller
{

    public function get_level()
    {
        $data =  $this->model("m_ref")->get_tbl_ref_level_user();
        return $data;
    }

    public function get_daftar_cabang()
    {

        $data = $this->model('m_cabang')->daftar_cabang();
        return $data;
    }

    public function get_tipe_komite()
    {
        $data = ["CABANG", "PUSAT"];
        return $data;
    }

    public function get_tipe_kredit()
    {
        $data = ["PRODUKTIF", "KONSUMTIF", "ALL"];
        return $data;
    }

    public function get_username()
    {

        $data = $this->model('m_user')->get_username();
        return $data;
    }


    public function get_tipe_pejabat()
    {
        $data = ["Cabang", "Direksi"];
        return $data;
    }


    public function get_sebutan_nama_pejabat()
    {
        $data = ["Tuan", "Nyonya"];
        return $data;
    }
    public function get_ref_jenis_surat()
    {
        $data = $this->model('m_ref_jenis_surat')->get_ref_jenis_surat();
        return $data;
    }

    public function get_surat_kuasa_pencairan()
    {
        $data = ["TASPEN", "ASABRI", "Saldo BPJS Ketenagakerjaan", "-"];
        return $data;
    }

    public function get_checklist_berkas()
    {
        $data = ["Wiraswasta", "TNI-POLRI", "PPPK", "PNS", "Pensiunan", "Pegawai Swasta-BUMN", "-"];
        return $data;
    }
}
