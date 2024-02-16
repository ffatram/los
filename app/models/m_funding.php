<?php

class m_funding
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all_tbl_user()
    {
        $this->db->query('SELECT * FROM tbl_user');
        return $this->db->resultSet();
    }


    public function get_id_tbl_user()
    {
        $this->db->query('SELECT * FROM tbl_user WHERE username =:username');
        $this->db->bind('username', $_POST['username']);
        return $this->db->single();
    }
}
