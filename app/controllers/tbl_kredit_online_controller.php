<?php

class tbl_kredit_online_controller extends Controller
{


    public function store()
    {

        $data = $this->model('m_tbl_kredit_online')->store();

        if ($data > 0) {
            echo 'success';
        } else {
            echo 'error';
        }

    }
}
