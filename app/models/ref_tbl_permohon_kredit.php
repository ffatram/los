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

    public function cek_tolak_where_nik()
    {
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_ktp_pemohon = :p1 AND tanggal_tolak IS NOT NULL');
        $this->db->bind('p1',$_POST['no_ktp_pemohon']); 
        $this->db->execute();
        return $this->db->rowCount();
    }
}
