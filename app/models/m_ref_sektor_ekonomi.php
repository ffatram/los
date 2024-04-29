<?php

class m_ref_sektor_ekonomi
{

    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {
        $this->db->query('SELECT * FROM tbl_ref_sektor_ekonomi');
        return $this->db->resultSet();
    }

    public function get_data_where_kode($kode)
    {
        $this->db->query('SELECT * FROM tbl_ref_sektor_ekonomi WHERE kode_sektor_ekonomi = :a');
        $this->db->bind('a', $kode);
        return $this->db->single();
    }

    // tambahan perbaikan pada pilihan sandi2 jika pilihan pada jenis penggunaan maka akan menampilkan data di sektor ekonomi sesuai golongan pada jenis penggunaan
    public function mapping_sektor_ekonomi()
    {

        $this->db->query('SELECT * FROM tbl_ref_sektor_ekonomi WHERE mapping_sektor_ekonomi = :mapping_sektor_ekonomi');
        $this->db->bind('mapping_sektor_ekonomi', $_POST['mapping_sektor_ekonomi']);
        return $this->db->resultSet();
    }
}
