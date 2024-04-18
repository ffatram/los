<?php

class m_slik_daftar_sudah_slik
{

    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }


   
    public function get_daftar_sudah_slik()
    {
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_slik IS NOT NULL');
        return $this->db->resultSet();
    }


    public function ambil_daftar_slik_pemohon($id)
    {


        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit AND pemohon_pasangan = :pemohon_pasangan');
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->bind('pemohon_pasangan', "PEMOHON");
        return $this->db->resultSet();
    }



    public function ambil_daftar_slik_pasangan($id)
    {


        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit AND pemohon_pasangan = :pemohon_pasangan');
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->bind('pemohon_pasangan', "PASANGAN");
        return $this->db->resultSet();
    }
}
