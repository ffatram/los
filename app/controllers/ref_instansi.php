<?php
class ref_instansi extends Controller
{

    public function get_all()
    {
        return $this->model('m_ref_instansi')->get_all();
    }
}
