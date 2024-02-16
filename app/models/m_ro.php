<?php
class m_ro
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all_ro()
    {
        $this->db->query('SELECT username as nama_ro FROM tbl_user WHERE level ="RO" and kode_cabang=:kode_cabang');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        return $this->db->resultSet();
    }

    public function get_ro_id()
    {
        $id = $_POST['id'];
        $this->db->query('SELECT * FROM tbl_ref_ro WHERE  id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }


    



    public function simpan()
    {
        $query = "INSERT INTO tbl_ref_ro (nama_ro) VALUES(:nama_ro)";
        $this->db->query($query);
        $this->db->bind('nama_ro',  $_POST['nama_ro']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update()
    {
        $query = "UPDATE tbl_ref_ro SET 
        nama_ro = :nama_ro
        WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('nama_ro', $_POST['nama_ro']);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM tbl_ref_ro WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
