<?php
class m_slik_daftar_slik
{
    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function daftar_slik_pemohon($no_permohonan_kredit)
    {
      
        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit AND pemohon_pasangan = :pemohon_pasangan ORDER BY id DESC' );
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('pemohon_pasangan', "PEMOHON");
        return $this->db->resultSet();
    }


    
    public function daftar_slik_pasangan($no_permohonan_kredit)
    {
        
        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit AND pemohon_pasangan = :pemohon_pasangan ORDER BY id DESC');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('pemohon_pasangan', "PASANGAN");
        return $this->db->resultSet();
    }


}