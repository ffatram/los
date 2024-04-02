<?php


class ref_tbl_pejabat
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function showsingle_namapejabat($namapejabat)
    {
        $this->db->query('SELECT * FROM tbl_ref_pejabat WHERE nama_pejabat = :p1');
        $this->db->bind('p1', $namapejabat);
        return $this->db->single();
    }
}
