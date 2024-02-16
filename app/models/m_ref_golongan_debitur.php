<?php

class m_ref_golongan_debitur
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_golongan_debitur');
        return $this->db->resultSet();
    }




    public function get_data_where_kode($kode)
    {
        $this->db->query('SELECT * FROM tbl_ref_golongan_debitur WHERE kode_golongan_debitur = :a');
        $this->db->bind('a', $kode);
        return $this->db->single();
    }

    public function get_golongan_debitur($kode)
    {
        $this->db->query('SELECT * FROM tbl_ref_golongan_debitur WHERE kode_golongan_debitur = :a');
        $this->db->bind('a', $kode);
        return $this->db->single();
    }


    public function get_cek_data_golongan_debitur()
    {

        $this->db->query('SELECT * FROM tbl_ref_golongan_debitur WHERE kode_golongan_debitur = :data1');
        $this->db->bind('data1', $_POST['data1']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
