<?php
class m_pengikatan
{

    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all_pengikatan()
    {
        $this->db->query('SELECT * FROM tbl_ref_pengikatan');
        return $this->db->resultSet();
    }

    public function get_pengikatan_id()
    {
        $id = $_POST['id'];
        $this->db->query('SELECT * FROM tbl_ref_pengikatan WHERE  id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }



    public function simpan()
    {
        $query = "INSERT INTO tbl_ref_pengikatan (nama_pengikatan) VALUES(:nama_pengikatan)";
        $this->db->query($query);
        $this->db->bind('nama_pengikatan',  $_POST['nama_pengikatan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update()
    {
        $query = "UPDATE tbl_ref_pengikatan SET 
        nama_pengikatan = :nama_pengikatan
        WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('nama_pengikatan', $_POST['nama_pengikatan']);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM tbl_ref_pengikatan WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }


    // bagian untuk supervisor


    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_pengikatan');
        return $this->db->resultSet();
    }
}
