<?php

class m_ref
{

    public $tbl_ref_level_user = 'tbl_ref_level_user';


    public function __construct()
    {
        $this->db = new Database;
    }

    // tbl_ref_level_user

    public function get_tbl_ref_level_user()
    {
        $this->db->query("SELECT * FROM $this->tbl_ref_level_user");
        return $this->db->resultSet();
    }
}
