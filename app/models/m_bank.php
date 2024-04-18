<?php
class m_bank
{
    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all_bank()
    {
        $this->db->query('SELECT * FROM tbl_ref_bank ');
        return $this->db->resultSet();
    }

    public function get_bank_id()
    {
        $id = $_POST['id'];
        $this->db->query('SELECT * FROM tbl_ref_bank WHERE  id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }



    public function simpan()
    {
        $query = "INSERT INTO tbl_ref_bank (nama_bank) VALUES(:nama_bank)";
        $this->db->query($query);
        $this->db->bind('nama_bank',  $_POST['nama_bank']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update()
    {
        $query = "UPDATE tbl_ref_bank SET 
        nama_bank = :nama_bank
        WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('nama_bank', $_POST['nama_bank']);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM tbl_ref_bank WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
