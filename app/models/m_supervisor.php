<?php

class m_supervisor
{

    public function __construct()
    {
        $this->db = new Database;
    }


    public function user_simpan()
    {
        $query = "INSERT INTO tbl_user
        (
        username,
        password_default,
        password,
        pin,
        nama_lengkap,
        level,
        kode_cabang,
        tipe_kredit,
        tipe_komite,
        limit_direksi_awal,
        limit_direksi_akhir,
        date_create
        ) 
        VALUES
        ( 
        :username,
        :password_default,
        :password,
        :pin,
        :nama_lengkap,
        :level,
        :kode_cabang,
        :tipe_kredit,
        :tipe_komite,
        :limit_direksi_awal,
        :limit_direksi_akhir,
        :date_create
        )";


        $this->db->query($query);

        $this->db->bind('username',  $_POST['username']);
        $this->db->bind('password_default',  $_POST['password_default']);
        $this->db->bind('password',  $_POST['password']);
        $this->db->bind('pin',  $_POST['pin']);
        $this->db->bind('nama_lengkap',  $_POST['nama_lengkap']);
        $this->db->bind('level',  $_POST['level']);
        $this->db->bind('kode_cabang',  $_POST['kode_cabang']);
        $this->db->bind('tipe_kredit',  $_POST['tipe_kredit']);
        $this->db->bind('tipe_komite',  $_POST['tipe_komite']);
        $this->db->bind('limit_direksi_awal',  $_POST['limit_direksi_awal']);
        $this->db->bind('limit_direksi_akhir',  $_POST['limit_direksi_akhir']);
        $this->db->bind('date_create', $_POST['date_create']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function user_cek_username()
    {
        $this->db->query('SELECT * FROM tbl_user WHERE username = :username');
        $this->db->bind('username', $_POST['username']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function get_data_user_edit_id()
    {

        $this->db->query('SELECT * FROM tbl_user WHERE id_user = :id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }


    public function user_update()
    {
        $query = "UPDATE tbl_user SET
            username = :username,
            nama_lengkap = :nama_lengkap,
            level = :level,
            kode_cabang = :kode_cabang,
            tipe_kredit = :tipe_kredit,
            tipe_komite = :tipe_komite,
            limit_direksi_awal = :limit_direksi_awal,
            limit_direksi_akhir = :limit_direksi_akhir

            WHERE id_user=:id";

        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('username',  $_POST['username']);
        $this->db->bind('nama_lengkap',  $_POST['nama_lengkap']);
        $this->db->bind('level',  $_POST['level']);
        $this->db->bind('kode_cabang',  $_POST['kode_cabang']);
        $this->db->bind('tipe_kredit',  $_POST['tipe_kredit']);
        $this->db->bind('tipe_komite',  $_POST['tipe_komite']);
        $this->db->bind('limit_direksi_awal',  $_POST['limit_direksi_awal']);
        $this->db->bind('limit_direksi_akhir',  $_POST['limit_direksi_akhir']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function user_reset_password()
    {
        $query = "UPDATE tbl_user SET
        password = :password


        WHERE id_user=:id";

        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('password',  $_POST['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function user_reset_pin()
    {
        $query = "UPDATE tbl_user SET
        pin = :pin
        WHERE id_user=:id";
        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('pin',  $_POST['pin']);
        $this->db->execute();
        return $this->db->rowCount();
    }




    public function user_hapus()
    {
        $query = "DELETE FROM tbl_user WHERE id_user= :id";
        $this->db->query($query);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function bank_cek_nama_bank()
    {
        $this->db->query('SELECT * FROM tbl_ref_bank WHERE nama_bank = :nama_bank');
        $this->db->bind('nama_bank', $_POST['nama_bank']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function bank_simpan()
    {
        $query = "INSERT INTO tbl_ref_bank
        (
        nama_bank
       
        ) 
        VALUES
        ( 
        :nama_bank
        )";
        $this->db->query($query);
        $this->db->bind('nama_bank',  $_POST['nama_bank']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_data_bank_edit_id()
    {

        $this->db->query('SELECT * FROM tbl_ref_bank WHERE id = :id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }

    public function bank_update()
    {

        $query = "UPDATE tbl_ref_bank SET
        nama_bank = :nama_bank
        WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('nama_bank',  $_POST['nama_bank']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function bank_hapus()
    {
        $query = "DELETE FROM tbl_ref_bank WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function instansi_cek_data()
    {
        $this->db->query('SELECT * FROM tbl_ref_instansi WHERE kode_instansi = :data1 && kode_cabang =:data2');
        $this->db->bind('data1', $_POST['kode_instansi']);
        $this->db->bind('data2', $_POST['kode_cabang']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function instansi_simpan()
    {
        $query = "INSERT INTO tbl_ref_instansi
        (
        kode_cabang,
        kode_instansi,
        nama_instansi
        ) 
        VALUES
        ( 
        :data1,
        :data2,
        :data3
        )";

        $this->db->query($query);
        $this->db->bind('data1',  $_POST['kode_cabang']);
        $this->db->bind('data2',  $_POST['kode_instansi']);
        $this->db->bind('data3',  $_POST['nama_instansi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_data_instansi_edit_id()
    {

        $this->db->query('SELECT * FROM tbl_ref_instansi WHERE id = :id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }

    public function instansi_update()
    {
        $query = "UPDATE tbl_ref_instansi SET
        kode_instansi   = :data1,
        nama_instansi   = :data2,
        kode_cabang     = :data3
        WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('data1',  $_POST['kode_instansi']);
        $this->db->bind('data2',  $_POST['nama_instansi']);
        $this->db->bind('data3',  $_POST['kode_cabang']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function instansi_hapus()
    {
        $query = "DELETE FROM tbl_ref_instansi WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }




    public function tipe_pejabat_simpan()
    {
        $query = "INSERT INTO tbl_ref_pejabat
        (
        kode_cabang,
        nama_pejabat,
        sebutan,
        tempat_lahir,
        tanggal_lahir,
        alamat,
        kota_pejabat,
        jabatan,
        jenis_surat,
        nomor_surat,
        tanggal_surat,
        perihal_surat,
        tipe_pejabat
        ) 
        VALUES
        ( 
        :data1,
        :data2,
        :data3,
        :data4,
        :data5,
        :data6,
        :data7,
        :data8,
        :data9,
        :data10,
        :data11,
        :data12,
        :data13
        )";

        $this->db->query($query);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);
        $this->db->bind('data3',  $_POST['data3']);
        $this->db->bind('data4',  $_POST['data4']);
        $this->db->bind('data5',  $_POST['data5']);
        $this->db->bind('data6',  $_POST['data6']);
        $this->db->bind('data7',  $_POST['data7']);
        $this->db->bind('data8',  $_POST['data8']);
        $this->db->bind('data9',  $_POST['data9']);
        $this->db->bind('data10',  $_POST['data10']);
        $this->db->bind('data11',  $_POST['data11']);
        $this->db->bind('data12',  $_POST['data12']);
        $this->db->bind('data13',  $_POST['data13']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_data_pejabat_edit_id()
    {
        $this->db->query('SELECT * FROM tbl_ref_pejabat WHERE id = :id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }


    public function pejabat_bank_update()
    {
        $query = "UPDATE tbl_ref_pejabat SET

        kode_cabang =:data1,
        nama_pejabat =:data2,
        sebutan =:data3,
        tempat_lahir =:data4,
        tanggal_lahir =:data5,
        alamat =:data6,
        kota_pejabat =:data7,
        jabatan =:data8,
        jenis_surat =:data9,
        nomor_surat =:data10,
        tanggal_surat =:data11,
        perihal_surat =:data12,
        tipe_pejabat =:data13        
           
        WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);
        $this->db->bind('data3',  $_POST['data3']);
        $this->db->bind('data4',  $_POST['data4']);
        $this->db->bind('data5',  $_POST['data5']);
        $this->db->bind('data6',  $_POST['data6']);
        $this->db->bind('data7',  $_POST['data7']);
        $this->db->bind('data8',  $_POST['data8']);
        $this->db->bind('data9',  $_POST['data9']);
        $this->db->bind('data10',  $_POST['data10']);
        $this->db->bind('data11',  $_POST['data11']);
        $this->db->bind('data12',  $_POST['data12']);
        $this->db->bind('data13',  $_POST['data13']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function pejabat_bank_hapus()
    {
        $query = "DELETE FROM tbl_ref_pejabat WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function get_data_sk_limit_edit_id()
    {


        $this->db->query('SELECT * FROM tbl_ref_sk WHERE id_sk = :id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }


    public function sk_limit_kewenangan_update()
    {

        $query = "UPDATE tbl_ref_sk SET
        jenis_surat_limit = :data1,
        nomor_surat_limit = :data2,
        tanggal_surat_limit = :data3,
        perihal_surat_limit = :data4

        WHERE id_sk= :id";

        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);
        $this->db->bind('data3',  $_POST['data3']);
        $this->db->bind('data4',  $_POST['data4']);
        $this->db->execute();
        return $this->db->rowCount();
    }




    public function get_provisiadm_edit_id()
    {
        $this->db->query('SELECT * FROM tbl_ref_provisi_administrasi WHERE id = :id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }

    public function provisiadm_update()
    {

        $query = "UPDATE tbl_ref_provisi_administrasi SET
        provisi = :data1,
        administrasi = :data2
        WHERE id= :id";

        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);
        $this->db->execute();
        return $this->db->rowCount();
    }




    public function get_data_denda_edit_id()
    {
        $this->db->query('SELECT * FROM tbl_ref_denda WHERE id = :id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }

    public function denda_update()
    {

        $query = "UPDATE tbl_ref_denda SET
        denda = :data1
       

        WHERE id= :id";

        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function fasilitas_kredit_simpan()
    {
        $query = "INSERT INTO tbl_ref_fasilitas
        (
        nama_fasilitas
        ) 
        VALUES
        ( 
        :data1
        )";
        $this->db->query($query);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function get_data_faslitas_kredit_edit_id()
    {

        $this->db->query('SELECT * FROM tbl_ref_fasilitas WHERE id = :id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }

    public function fasilitas_kredit_update()
    {
        $query = "UPDATE tbl_ref_fasilitas SET
        nama_fasilitas = :data1

        WHERE id= :id";

        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function fasilitas_kredit_hapus()
    {
        $query = "DELETE FROM tbl_ref_fasilitas WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function golongan_debitur_tambah()
    {
        $query = "INSERT INTO tbl_ref_golongan_debitur
            (
            kode_golongan_debitur,
            golongan_debitur
            ) 
            VALUES
            ( 
            :data1,
            :data2

            )";
        $this->db->query($query);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function get_data_golongan_debitut_edit_id()
    {

        $this->db->query('SELECT * FROM tbl_ref_golongan_debitur WHERE id = :id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }

    public function golongan_debitur_update()
    {
        $query = "UPDATE 
        tbl_ref_golongan_debitur SET
        kode_golongan_debitur = :data1,
        golongan_debitur = :data2
        WHERE id= :id";

        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function golongan_debitur_hapus()
    {
        $query = "DELETE FROM tbl_ref_golongan_debitur WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hubungan_debitur_tambah()
    {

        $query = "INSERT INTO tbl_ref_hubungan_debitur_dengan_bank
        (
        kode_hubungan_debitur_dengan_bank,
        hubungan_debitur_dengan_bank
        ) 
        VALUES
        ( 
        :data1,
        :data2

        )";
        $this->db->query($query);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_data_hubungan_debitur_edit_id()
    {

        $this->db->query('SELECT * FROM tbl_ref_hubungan_debitur_dengan_bank WHERE id = :id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }



    public function hubungan_debitur_update()
    {


        $query = "UPDATE 
        tbl_ref_hubungan_debitur_dengan_bank SET
        kode_hubungan_debitur_dengan_bank = :data1,
        hubungan_debitur_dengan_bank = :data2
        WHERE id= :id";

        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hubungan_debitur_hapus()
    {

        $query = "DELETE FROM tbl_ref_hubungan_debitur_dengan_bank WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function data_ref_all_one_kolom_tambah()
    {

        $tbl = $_POST['tbl'];
        $kolom1 = $_POST['kolom1'];

        $query = "INSERT INTO $tbl
        (
        
        $kolom1
        ) 
        VALUES
        ( 
        :data1
        )";
        $this->db->query($query);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function data_ref_all_2_kolom_tambah()
    {

        $tbl = $_POST['tbl'];
        $kolom1 = $_POST['kolom1'];
        $kolom2 = $_POST['kolom2'];

        $query = "INSERT INTO $tbl
        (
        
        $kolom1,$kolom2

        ) 
        VALUES
        ( 
        :data1,
        :data2
       
        )";
        $this->db->query($query);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);
        $this->db->execute();
        return $this->db->rowCount();
    }




    public function data_ref_all_3_kolom_tambah()
    {

        $tbl = $_POST['tbl'];
        $kolom1 = $_POST['kolom1'];
        $kolom2 = $_POST['kolom2'];
        $kolom3 = $_POST['kolom3'];

        $query = "INSERT INTO $tbl
        (
        
        $kolom1,$kolom2,$kolom3

        ) 
        VALUES
        ( 
        :data1,
        :data2,
        :data3
        )";
        $this->db->query($query);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);
        $this->db->bind('data3',  $_POST['data3']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_data_ref_all_edit_id()
    {

        $tbl = $_POST['tbl'];
        $this->db->query("SELECT * FROM $tbl WHERE id = :id");
        $this->db->bind('id', $_POST['id']);
        return $this->db->single();
    }


    public function data_ref_all_one_kolom_update()
    {

        $tbl = $_POST['tbl'];
        $kolom1 = $_POST['kolom1'];
        $query = "UPDATE 
        $tbl SET
        $kolom1 = :data1
        WHERE id= :id";

        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function data_ref_all_2_kolom_update()
    {


        $tbl = $_POST['tbl'];
        $kolom1 = $_POST['kolom1'];
        $kolom2 = $_POST['kolom2'];

        $query = "UPDATE 
        $tbl SET
        $kolom1 = :data1,
        $kolom2 = :data2
    
        WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);

        $this->db->execute();
        return $this->db->rowCount();
    }


    public function data_ref_all_3_kolom_update()
    {


        $tbl = $_POST['tbl'];
        $kolom1 = $_POST['kolom1'];
        $kolom2 = $_POST['kolom2'];
        $kolom3 = $_POST['kolom3'];
        $query = "UPDATE 
        $tbl SET
        $kolom1 = :data1,
        $kolom2 = :data2,
        $kolom3 = :data3
        WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id',  $_POST['id']);
        $this->db->bind('data1',  $_POST['data1']);
        $this->db->bind('data2',  $_POST['data2']);
        $this->db->bind('data3',  $_POST['data3']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function data_ref_all_one_kolom_hapus()
    {

        $tbl = $_POST['tbl'];

        $query = "DELETE FROM $tbl WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
