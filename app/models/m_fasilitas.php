<?php
class m_fasilitas
{

    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all_fasilitas()
    {
        $this->db->query('SELECT * FROM tbl_ref_fasilitas');
        return $this->db->resultSet();
    }

    public function get_fasilitas_id()
    {
        $id = $_POST['id'];
        $this->db->query('SELECT * FROM tbl_ref_fasilitas WHERE  id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }



    public function simpan()
    {
        $query = "INSERT INTO tbl_ref_fasilitas (nama_fasilitas) VALUES(:nama_fasilitas)";
        $this->db->query($query);
        $this->db->bind('nama_fasilitas',  $_POST['nama_fasilitas']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update()
    {
        $query = "UPDATE tbl_ref_fasilitas SET 
        nama_fasilitas = :nama_fasilitas
        WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('nama_fasilitas', $_POST['nama_fasilitas']);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM tbl_ref_fasilitas WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
