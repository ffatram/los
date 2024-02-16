<?php
date_default_timezone_set('Asia/Makassar');
class m_tbl_kredit_online
{


    public function __construct()
    {
        $this->db = new Database;
    }


    public function store()
    {
        $query = "INSERT INTO tbl_kredit_online
                (
                no_ktp_pemohon,
                tgl_create,
                catatan_cs,
                status
                ) 
                
                VALUES
                ( 
                :no_ktp_pemohon,
                :tgl_create,
                :catatan_cs,
                :status

                )";

        $this->db->query($query);

        $this->db->bind('no_ktp_pemohon', $_POST['no_ktp_pemohon']);
        $this->db->bind('tgl_create', date('Y-m-d H:i:s'));
        $this->db->bind('catatan_cs', $_POST['catatan_cs']);
        $this->db->bind('status', $_POST['status']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
