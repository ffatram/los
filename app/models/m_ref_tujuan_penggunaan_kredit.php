<?php
class m_ref_tujuan_penggunaan_kredit
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_data_where_kode($kode)
    {
        $this->db->query('SELECT * FROM tbl_ref_tujuan_penggunaan_kredit WHERE kode = :a');
        $this->db->bind('a', $kode);
        return $this->db->single();
    }

    public function get_all()
    {

        $this->db->query('SELECT * FROM tbl_ref_tujuan_penggunaan_kredit');
        return $this->db->resultSet();
    }
}
