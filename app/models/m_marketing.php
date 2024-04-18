<?php
class m_marketing
{

    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all_marketing()
    {
        $this->db->query('SELECT * FROM tbl_ref_marketing where kode_cabang =:kode_cabang OR kode_cabang=:kode_cabang00');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('kode_cabang00', '00');
        return $this->db->resultSet();
    }
    public function get_all_marketing_supervisor()
    {
        $this->db->query('SELECT * FROM tbl_ref_marketing ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function get_marketing_id()
    {
        $id = $_POST['id'];
        $this->db->query('SELECT * FROM tbl_ref_marketing WHERE  id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }



    public function simpan()
    {
        $query = "INSERT INTO tbl_ref_marketing (nama_marketing) VALUES(:nama_marketing)";
        $this->db->query($query);
        $this->db->bind('nama_marketing',  $_POST['nama_marketing']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update()
    {
        $query = "UPDATE tbl_ref_marketing SET 
        nama_marketing = :nama_marketing
        WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('nama_marketing', $_POST['nama_marketing']);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM tbl_ref_marketing WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
