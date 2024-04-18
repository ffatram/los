<?php

class m_slik_input_data_slik
{


    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    // pemohon
    public function get_data_cs_where_no_req()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        return $this->db->single();
    }

    public function get_jumlah_data_slik_pemohon()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_jumlah_data_slik_pasangan()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik_pasangan WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function  get_daftar_slik_pemohon_where_no_req()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        return $this->db->resultSet();
    }

    public function  get_daftar_slik_pasangan_where_no_req()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik_pasangan WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        return $this->db->resultSet();
    }

    public function edit_data_pemohon_where_id()
    {
        $id = $_POST['id'];
        $this->db->query('SELECT * FROM tbl_slik_pemohon WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function update_slik_pemohon()
    {
        $query = "UPDATE tbl_slik_pemohon SET 
        nama_bank = :nama_bank,
        jenis_fasilitas =:jenis_fasilitas,
        plafond =:plafond,
        bakidebet  =:bakidebet,
        kolektibilitas =:kolektibilitas,
        waktu_awal =:waktu_awal,
        waktu_akhir =:waktu_akhir,
        suku_bunga =:suku_bunga,
        jenis_jaminan =:jenis_jaminan,
        nilai_jaminan=:nilai_jaminan,
        pemilik_jaminan=:pemilik_jaminan,
        alamat_jaminan=:alamat_jaminan,
        pengikatan=:pengikatan,
        keterangan=:keterangan

        WHERE id= :id";
        $this->db->query($query);

        $this->db->bind('nama_bank',  $_POST['nama_bank']);
        $this->db->bind('jenis_fasilitas',  $_POST['jenis_fasilitas']);
        $this->db->bind('plafond',  $_POST['plafond']);
        $this->db->bind('bakidebet',  $_POST['bakidebet']);
        $this->db->bind('kolektibilitas',  $_POST['kolektibilitas']);
        $this->db->bind('waktu_awal',  $_POST['waktu_awal']);
        $this->db->bind('waktu_akhir',  $_POST['waktu_akhir']);
        $this->db->bind('suku_bunga',  $_POST['suku_bunga']);
        $this->db->bind('jenis_jaminan',  $_POST['jenis_jaminan']);
        $this->db->bind('nilai_jaminan',  $_POST['nilai_jaminan']);
        $this->db->bind('pemilik_jaminan',  $_POST['pemilik_jaminan']);
        $this->db->bind('alamat_jaminan',  $_POST['alamat_jaminan']);
        $this->db->bind('pengikatan',  $_POST['pengikatan']);
        $this->db->bind('keterangan',  $_POST['keterangan']);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }





    public function hapus_pemohon_slik()
    {
        $id = $_POST['id'];
        $query = "DELETE FROM tbl_slik_pemohon WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_tbl_cs_hapus_pemohon()
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_slik = :tanggal_slik
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('tanggal_slik', null);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    // pasangan

    public function edit_data_pasangan_where_id()
    {
        $id = $_POST['id'];
        $this->db->query('SELECT * FROM tbl_slik_pasangan WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function update_slik_pasangan()
    {
        $query = "UPDATE tbl_slik_pasangan SET 
        nama_bank = :nama_bank,
        jenis_fasilitas =:jenis_fasilitas,
        plafond =:plafond,
        bakidebet  =:bakidebet,
        kolektibilitas =:kolektibilitas,
        waktu_awal =:waktu_awal,
        waktu_akhir =:waktu_akhir,
        suku_bunga =:suku_bunga,
        jenis_jaminan =:jenis_jaminan,
        nilai_jaminan=:nilai_jaminan,
        pemilik_jaminan=:pemilik_jaminan,
        alamat_jaminan=:alamat_jaminan,
        pengikatan=:pengikatan,
        keterangan=:keterangan

        WHERE id= :id";
        $this->db->query($query);

        $this->db->bind('nama_bank',  $_POST['nama_bank']);
        $this->db->bind('jenis_fasilitas',  $_POST['jenis_fasilitas']);
        $this->db->bind('plafond',  $_POST['plafond']);
        $this->db->bind('bakidebet',  $_POST['bakidebet']);
        $this->db->bind('kolektibilitas',  $_POST['kolektibilitas']);
        $this->db->bind('waktu_awal',  $_POST['waktu_awal']);
        $this->db->bind('waktu_akhir',  $_POST['waktu_akhir']);
        $this->db->bind('suku_bunga',  $_POST['suku_bunga']);
        $this->db->bind('jenis_jaminan',  $_POST['jenis_jaminan']);
        $this->db->bind('nilai_jaminan',  $_POST['nilai_jaminan']);
        $this->db->bind('pemilik_jaminan',  $_POST['pemilik_jaminan']);
        $this->db->bind('alamat_jaminan',  $_POST['alamat_jaminan']);
        $this->db->bind('pengikatan',  $_POST['pengikatan']);
        $this->db->bind('keterangan',  $_POST['keterangan']);
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus_pasangan_slik()
    {
        $id = $_POST['id'];
        $query = "DELETE FROM tbl_slik_pasangan WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_tbl_cs_hapus_pasangan()
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_slik = :tanggal_slik
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('tanggal_slik', null);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapus_pemohon_slik_all()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $query = "DELETE FROM tbl_slik_pemohon WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapus_pasangan_slik_all()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $query = "DELETE FROM tbl_slik_pasangan WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function slik_pemohon_tidak_ditemukan()
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_slik = :tanggal_slik
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('tanggal_slik', $_POST['tanggal_slik']);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
