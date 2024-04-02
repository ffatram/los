<?php


class ref_tbl_cabang
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function showsingle_kode_cabang($kode_cabang)
    {
        $this->db->query('SELECT * FROM tbl_cabang WHERE kode_cabang = :p1');
        $this->db->bind('p1', $kode_cabang);
        return $this->db->single();
    }
}
