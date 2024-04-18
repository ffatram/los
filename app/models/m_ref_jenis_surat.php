<?php


class m_ref_jenis_surat
{
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_ref_jenis_surat()
    {
        $this->db->query('SELECT * from tbl_ref_jenis_surat');
        return $this->db->resultSet();
    }
}
