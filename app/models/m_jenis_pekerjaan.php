<?php
class m_jenis_pekerjaan
{

    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all_jenis_pekerjaan()
    {
        $this->db->query('SELECT * FROM tbl_ref_jenis_pekerjaan');
        return $this->db->resultSet();
    }

    public function get_jenis_pekerjaan_id()
    {
        $id = $_POST['id'];
        $this->db->query('SELECT * FROM tbl_ref_jenis_pekerjaan WHERE  id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }



    public function simpan()
    {
        $query = "INSERT INTO tbl_ref_jenis_pekerjaan (jenis_pekerjaan) VALUES(:jenis_pekerjaan)";
        $this->db->query($query);
        $this->db->bind('jenis_pekerjaan',  $_POST['jenis_pekerjaan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update()
    {
        $query = "UPDATE tbl_ref_jenis_pekerjaan SET 
        jenis_pekerjaan = :jenis_pekerjaan
        WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('jenis_pekerjaan', $_POST['jenis_pekerjaan']);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM tbl_ref_jenis_pekerjaan WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }



    // supervisor
    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_jenis_pekerjaan');
        return $this->db->resultSet();
    }
}
