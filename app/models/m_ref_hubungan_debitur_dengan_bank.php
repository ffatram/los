<?php

class m_ref_hubungan_debitur_dengan_bank
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_hubungan_debitur_dengan_bank');
        return $this->db->resultSet();
    }

    public function get_data_where_kode($kode)
    {
        $this->db->query('SELECT * FROM tbl_ref_hubungan_debitur_dengan_bank WHERE kode_hubungan_debitur_dengan_bank = :a');
        $this->db->bind('a', $kode);
        return $this->db->single();
    }

    public function get_cek_data_hubungan_debitur()
    {
        $this->db->query('SELECT * FROM tbl_ref_hubungan_debitur_dengan_bank WHERE kode_hubungan_debitur_dengan_bank = :data1');
        $this->db->bind('data1', $_POST['data1']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
