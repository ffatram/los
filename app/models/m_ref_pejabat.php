<?php
class m_ref_pejabat
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all()
    {

        $this->db->query('SELECT * FROM tbl_ref_pejabat where kode_cabang =:kode_cabang or kode_cabang="00"');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        return $this->db->resultSet();
    }


    public function get()
    {
        $this->db->query('SELECT * FROM tbl_ref_pejabat order by kode_cabang asc');
        return $this->db->resultSet();
    }
    public function getPejabatId()
    {
        $this->db->query('SELECT * FROM tbl_ref_pejabat WHERE id=:id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }
}
