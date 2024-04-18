<?php
class m_ref_sistem_pembayaran
{
    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {

        $this->db->query('SELECT * FROM tbl_ref_sistem_pembayaran');
        return $this->db->resultSet();
    }
}
