<?php

class m_tbl_permohonan_kredit
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_data_where_no_permohonan_kerdit($no_permohonan_kredit)
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :a');
        $this->db->bind('a', $no_permohonan_kredit);
        return $this->db->single();
    }

    public function m_getWhereIdSigle($id)
    {

        $this->db->query('SELECT no_permohonan_kredit,nama_pemohon FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :a');
        $this->db->bind('a', $id);
        return $this->db->single();
    }
}
