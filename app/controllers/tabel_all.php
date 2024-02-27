<?php

class tabel_all extends Controller
{


    public function index()
    {
        $session = $_SESSION['level'];
        if ($session == 'MARKETING') {
            $this->view('tabel/los/index');
        }
    }
}
