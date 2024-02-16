<?php

class m_ref_jenis_kredit
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_ref_jenis_kredit()
    {
        $this->db->query('SELECT * FROM tbl_ref_jenis_kredit ');
        return $this->db->resultSet();
    }

    // unutk supervisor

    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_jenis_kredit ');
        return $this->db->resultSet();
    }
}
