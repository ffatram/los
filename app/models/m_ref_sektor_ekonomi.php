<?php

class m_ref_sektor_ekonomi
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_sektor_ekonomi');
        return $this->db->resultSet();
    }

    public function get_data_where_kode($kode)
    {
        $this->db->query('SELECT * FROM tbl_ref_sektor_ekonomi WHERE kode_sektor_ekonomi = :a');
        $this->db->bind('a', $kode);
        return $this->db->single();
    }

}
