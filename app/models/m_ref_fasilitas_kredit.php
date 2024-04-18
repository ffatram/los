<?php

class m_ref_fasilitas_kredit
{

    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get()
    {
        $this->db->query('SELECT * FROM tbl_ref_fasilitas');
        return $this->db->resultSet();
    }

    public function get_data_where_nama_fasilitas()
    {
        $this->db->query('SELECT * FROM tbl_ref_fasilitas WHERE nama_fasilitas=:id');
        $this->db->bind('id', $_POST['data1']);
        return $this->db->single();
    }
}
