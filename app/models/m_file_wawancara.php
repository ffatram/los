<?php

class m_file_wawancara
{

    public $db;
    public function __construct()
    {
        date_default_timezone_set('Asia/Makassar');
        $this->db = new Database;
    }

    public function simpan_file_wawancara()
    {
        $query = "INSERT INTO tbl_wawancara_berkas
                (
                no_permohonan_kredit,
                nama_file,
                jenis_file
                ) 
                
                VALUES
                ( 
                :no_permohonan_kredit,
                :nama_file,
                :jenis_file
                )";

        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('nama_file',  $_POST['nama_file']);
        $this->db->bind('jenis_file',  $_POST['jenis_file']);

        $this->db->execute();
        return $this->db->rowCount();
    }


    public function get_tbl_wawancara_berkas_id($id)
    {
        $query = "SELECT * FROM tbl_wawancara_berkas WHERE no_permohonan_kredit= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }


    public function get_tbl_wawancara_berkas_id_single($id)
    {
        $query = "SELECT * FROM tbl_wawancara_berkas WHERE no_permohonan_kredit= :id ORDER BY id DESC LIMIT 1";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }


    public function hapus_file_id($id)
    {
        $query = "DELETE FROM tbl_wawancara_berkas WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
