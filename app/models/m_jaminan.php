<?php
class m_jaminan
{

    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all_jaminan()
    {
        $this->db->query('SELECT * FROM tbl_ref_jaminan');
        return $this->db->resultSet();
    }

    public function get_jaminan_id()
    {
        $id = $_POST['id'];
        $this->db->query('SELECT * FROM tbl_ref_jaminan WHERE  id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }



    public function simpan()
    {
        $query = "INSERT INTO tbl_ref_jaminan (nama_jaminan) VALUES(:nama_jaminan)";
        $this->db->query($query);
        $this->db->bind('nama_jaminan',  $_POST['nama_jaminan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update()
    {
        $query = "UPDATE tbl_ref_jaminan SET 
        nama_jaminan = :nama_jaminan
        WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('nama_jaminan', $_POST['nama_jaminan']);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM tbl_ref_jaminan WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
