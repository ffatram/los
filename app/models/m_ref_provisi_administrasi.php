<?php

class m_ref_provisi_administrasi
{

    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_provisi_administrasi');
        return $this->db->single();
    }
}
