<?php
include 'tabel_all.php';
require 'vendor/autoload.php';
class users extends Controller
{

    private $obj_tbl_all;

    // inisialisasi class menjadi objeck baru di sini
    public function __construct()
    {
        // class tabel_all
        $this->obj_tbl_all = new tabel_all();
    }


    // user RO
    public function index()
    {
        $session = $_SESSION['level'];
        
        if ($session == "MARKETING") {
            $this->get_view();
        } else {
            echo "gagal";
        }
    }




    public function get_view()
    {

        $session = $_SESSION['level'];
        if ($session == "MARKETING") {
            $this->obj_tbl_all->index();
        } else {
            echo "gagal";
        }
    }
}
