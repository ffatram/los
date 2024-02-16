<?php

class m_ref_provisi_adm_kredit
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get()
    {
        $this->db->query('SELECT * FROM tbl_ref_provisi_administrasi ');
        return $this->db->resultSet();
    }
}
