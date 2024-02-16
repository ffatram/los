<?php

class m_ref_instansi
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_instansi WHERE kode_cabang = :kode_cabang or kode_cabang= "00"');
        $this->db->bind('kode_cabang', isset($_POST['kode_cabang']) ? $_POST['kode_cabang'] : $_COOKIE['kode_cabang']);
        return $this->db->resultSet();
    }

    public function get_all_supervisor()
    {
        $this->db->query('SELECT * FROM tbl_ref_instansi order by kode_cabang, kode_instansi asc');
        return $this->db->resultSet();
    }
}
