<?php
class m_ref_jenis_no_pk
{
    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function get_jenis_berkas_pk($jenis)
    {
        $this->db->query('SELECT * FROM tbl_ref_jenis_no_pk WHERE jenis=:jenis');
        $this->db->bind('jenis', $jenis);
        return $this->db->single();
    }
}
