<?php
date_default_timezone_set('Asia/Makassar');
class m_tbl_informasi
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getInformasi()
    {
        $this->db->query('SELECT * FROM tbl_informasi WHERE level =:level  ORDER BY id DESC limit 1');
        $this->db->bind('level', $_COOKIE['level']);
        return $this->db->resultSet();
    }
}
