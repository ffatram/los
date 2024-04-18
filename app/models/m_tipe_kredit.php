<?php

class m_tipe_kredit
{
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all_tipe_kredit()
    {
        $this->db->query('SELECT * FROM tbl_ref_tipe_kredit');
        return $this->db->resultSet();
    }
}
