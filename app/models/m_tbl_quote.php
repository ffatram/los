<?php

class m_tbl_quote
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getQuote()
    {

        $this->db->query('SELECT * FROM tbl_quote ORDER BY RAND()');
        return $this->db->resultSet();
    }
}
