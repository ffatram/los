<?php

class m_ref_jaminan
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {
        $this->db->query("SELECT * FROM tbl_ref_jaminan ORDER BY CASE WHEN nama_jaminan = 'LAINNYA' THEN 1 ELSE 0 END, nama_jaminan");
        return $this->db->resultSet();
    }

    public function get_cek_data_jaminan()
    {
        $this->db->query('SELECT * FROM tbl_ref_jaminan WHERE nama_jaminan = :data1');
        $this->db->bind('data1', $_POST['data1']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
