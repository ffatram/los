<?php

class m_ref_all
{

    public function __construct()
    {
        $this->db = new Database;
    }


    public function get_cek_data_ref_all_one_kolom()
    {

        $tbl = $_POST['tbl'];
        $kolom1 = $_POST['kolom1'];


        $this->db->query("SELECT * FROM $tbl  WHERE $kolom1 = :data1");
        $this->db->bind('data1', $_POST['data1']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
