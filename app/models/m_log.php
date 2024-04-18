<?php

date_default_timezone_set('Asia/Makassar');

class m_log
{

    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function simpan_pemohon()
    {

        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "1");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_pemohon()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "2");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus_pemohon()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "3");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }





    public function simpan_slik()
    {

        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "4");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function upload_slik()
    {
        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "21");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_slik()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "5");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus_slik()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "6");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }




    public function simpan_analisa()
    {

        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "7");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_analisa()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "8");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    // public function hapus_analisa()
    // {


    //     $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
    //     $this->db->query($query);
    //     $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
    //     $this->db->bind('id_log', "9");
    //     $this->db->bind('username', $_COOKIE['username']);
    //     $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
    //     $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
    //     $this->db->bind('update_date', date('Y-m-d H:i:s'));
    //     $this->db->execute();
    //     return $this->db->rowCount();
    // }





    public function ajukan_komite()
    {

        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "9");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ajukan_komite_pusat()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "10");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ajukan_komite_analisa_yg_pending()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "11");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }




    public function mengusulkan_analisa_kembali()
    {

        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "12");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function melanjutkan_pencairan_kredit()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "13");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function proses_komite_approve()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "14");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function proses_komite_reject()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "15");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function proses_komite_pending()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "16");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function input_pencairan()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "17");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function update_pencairan()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "18");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus_pencairan()
    {

        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "19");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cetak_perjanjian_kredit()
    {


        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('id_log', "20");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['nama_pemohon']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }




    public function get_tbl_log()
    {


        $this->db->query('SELECT * FROM view_log WHERE date(update_date) >= :tanggal_awal AND date(update_date) <= :tanggal_akhir AND username =:username ORDER BY id ASC');
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('tanggal_awal', $_POST['tanggal_awal']);
        $this->db->bind('tanggal_akhir', $_POST['tanggal_akhir']);
        return $this->db->resultSet();
    }



    public function get_tbl_log_all()
    {

        $this->db->query('SELECT * FROM view_log WHERE date(update_date)>= :tanggal_awal AND date(update_date) <= :tanggal_akhir ORDER BY id ASC');
        $this->db->bind('tanggal_awal', $_POST['tanggal_awal']);
        $this->db->bind('tanggal_akhir', $_POST['tanggal_akhir']);
        return $this->db->resultSet();
    }



    // supervisor

    public function log_simpan_user()
    {
        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  '-');
        $this->db->bind('id_log', "22");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['username']);
        $this->db->bind('kode_cabang', "-");
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function log_update_user()
    {
        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  '-');
        $this->db->bind('id_log', "23");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['username']);
        $this->db->bind('kode_cabang', "-");
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function log_hapus_user()
    {
        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  '-');
        $this->db->bind('id_log', "24");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['username']);
        $this->db->bind('kode_cabang', "-");
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function log_reset_password()
    {

        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  '-');
        $this->db->bind('id_log', "25");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['username']);
        $this->db->bind('kode_cabang', "-");
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function log_reset_pin()
    {

        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  '-');
        $this->db->bind('id_log', "26");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['username']);
        $this->db->bind('kode_cabang', "-");
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function log_simpan_pejabat()
    {

        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  '-');
        $this->db->bind('id_log', "27");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['username']);
        $this->db->bind('kode_cabang', "-");
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function log_update_pejabat()
    {
        // 28
        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  '-');
        $this->db->bind('id_log', "28");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['username']);
        $this->db->bind('kode_cabang', "-");
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function log_hapus_pejabat()
    {
    
        $query = "INSERT INTO tbl_log (no_permohonan_kredit,nama_pemohon,kode_cabang,id_log,username,update_date) VALUES(:no_permohonan_kredit, :nama_pemohon, :kode_cabang,:id_log,:username,:update_date)";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  '-');
        $this->db->bind('id_log', "29");
        $this->db->bind('username', $_COOKIE['username']);
        $this->db->bind('nama_pemohon', $_POST['username']);
        $this->db->bind('kode_cabang', "-");
        $this->db->bind('update_date', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }
}
