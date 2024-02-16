<?php
class m_ref_sk_limit_kewenangan
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get()
    {
        $this->db->query('SELECT * FROM tbl_ref_sk');
        return $this->db->resultSet();
    }
}
