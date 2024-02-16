<?php

class m_ref_denda
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get()
    {
        $this->db->query('SELECT * FROM tbl_ref_denda ');
        return $this->db->resultSet();
    }
}
