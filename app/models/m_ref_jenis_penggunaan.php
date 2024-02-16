<?php

class m_ref_jenis_penggunaan
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_jenis_penggunaan');
        return $this->db->resultSet();
    }


    public function get_data_where_kode($kode)
    {
        $this->db->query('SELECT * FROM tbl_ref_jenis_penggunaan WHERE kode_jenis_penggunaan = :a');
        $this->db->bind('a', $kode);
        return $this->db->single();
    }

}
