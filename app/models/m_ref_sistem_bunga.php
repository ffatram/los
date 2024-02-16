<?php

class m_ref_sistem_bunga
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_sistem_bunga');
        return $this->db->resultSet();
    }
}
