<?php


class ref_tbl_permohon_kredit
{

    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function showsingle_no_permohonan_kredit($no_permohonan_kredit)
    {
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :p1');
        $this->db->bind('p1', $no_permohonan_kredit);
        return $this->db->single();
    }
}
