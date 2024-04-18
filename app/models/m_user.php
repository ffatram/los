<?php


class m_user
{

    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_tbl_user()
    {
        $this->db->query('SELECT a.*, b.nama_cabang FROM tbl_user a INNER JOIN tbl_cabang b ON a.kode_cabang = b.kode_cabang  order by a.date_create DESC');
        return $this->db->resultSet();
    }

    public function get_username()
    {
        $this->db->query('SELECT *FROM tbl_user order by kode_cabang ASC, level');
        return $this->db->resultSet();
    }

    
}
