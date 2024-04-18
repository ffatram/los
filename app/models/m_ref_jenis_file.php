<?php

class m_ref_jenis_file
{

    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_jenis_file');
        return $this->db->resultSet();
    }

    
}
