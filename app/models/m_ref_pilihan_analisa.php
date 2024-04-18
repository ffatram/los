<?php
class m_ref_pilihan_analisa
{

    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {

        $this->db->query('SELECT * FROM tbl_ref_pilihan_analisa');
        return $this->db->resultSet();
    }
}
