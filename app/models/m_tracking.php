<?php


class m_tracking
{
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function posisi_berkas2()
    {

        $this->db->query('SELECT no_ktp_pemohon, nama_instansi,no_permohonan_kredit,lokasi_berkas,nama_pemohon FROM tbl_permohon_kredit WHERE  no_ktp_pemohon =:id ORDER BY id DESC LIMIT 1');
        $this->db->bind('id', $_POST['no_ktp']);
        return $this->db->single();
    }


    public function posisi_berkas1()
    {

        $this->db->query('SELECT * FROM tbl_kredit_online WHERE no_ktp_pemohon =:id ORDER BY id DESC LIMIT 1');
        $this->db->bind('id', $_POST['no_ktp']);
        return $this->db->single();
    }
}
