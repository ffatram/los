<?php
class ref_jaminan extends Controller
{
    public function getAll()
    {
        return $this->model('m_ref_jaminan')->get_all();
    }
}
