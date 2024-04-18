<?php

date_default_timezone_set('Asia/Makassar');

class m_lihatktp
{


    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }



    public function showWhereNoreg($noreg)
    {

        $this->db->query('SELECT * FROM tbl_wawancara_berkas where no_permohonan_kredit =:no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $noreg);
        return $this->db->resultSet();
    }
}
