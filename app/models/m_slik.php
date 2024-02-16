<?php
date_default_timezone_set('Asia/Makassar');
class m_slik
{


    public function __construct()
    {
        $this->db = new Database;
    }

    // halaman daftar belum slik
    public function daftar_belum_slik()
    {
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_slik IS NULL AND kode_cabang =:kode_cabang AND tanggal_batal IS NULL ORDER BY tanggal_permohonan DESC,no_permohonan_kredit DESC');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        return $this->db->resultSet();
    }

    public function daftar_sudah_slik()
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE kode_cabang =:kode_cabang AND tanggal_slik IS NOT NULL ORDER BY tanggal_slik DESC');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        return $this->db->resultSet();
    }

    public function get_daftar_sudah_slik()
    {
        $this->db->query('SELECT * FROM view_slik WHERE kode_cabang =:kode_cabang AND date(tanggal_slik) >= :tanggal_awal AND date(tanggal_slik) <= :tanggal_akhir  ORDER BY tanggal_slik ASC');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('tanggal_awal', $_POST['tanggal_awal']);
        $this->db->bind('tanggal_akhir', $_POST['tanggal_akhir']);
        return $this->db->resultSet();
    }







    // halaman input data slik

    // get data

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
        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit AND pemohon_pasangan =:pemohon_pasangan');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('pemohon_pasangan', "PEMOHON");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_jumlah_data_slik_pasangan()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit AND pemohon_pasangan = :pemohon_pasangan');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('pemohon_pasangan', "PASANGAN");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function  get_daftar_slik_pemohon_where_no_req()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit AND pemohon_pasangan = :pemohon_pasangan ');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('pemohon_pasangan', "PEMOHON");
        return $this->db->resultSet();
    }


    public function  get_daftar_slik_pasangan_where_no_req()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit AND pemohon_pasangan = :pemohon_pasangan');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('pemohon_pasangan', "PASANGAN");
        return $this->db->resultSet();
    }

    public function cek_daftar_belum_slik()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit =:no_permohonan_kredit AND tanggal_slik IS NULL');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function simpan_slik_pemohon()
    {
        $query = "INSERT INTO tbl_slik
                (
                no_permohonan_kredit,
                nama_bank,
                jenis_fasilitas,
                plafond,
                bakidebet,
                kolektibilitas,
                waktu_awal,
                waktu_akhir,
                suku_bunga,
                jenis_jaminan,
                nilai_jaminan,
                pemilik_jaminan,
                alamat_jaminan,
                pengikatan,
                keterangan,
                pemohon_pasangan,
                user_create,
                tgl_create
                ) 
                
                VALUES
                ( 
                :no_permohonan_kredit,
                :nama_bank,
                :jenis_fasilitas,
                :plafond,
                :bakidebet,
                :kolektibilitas,
                :waktu_awal,
                :waktu_akhir,
                :suku_bunga,
                :jenis_jaminan,
                :nilai_jaminan,
                :pemilik_jaminan,
                :alamat_jaminan,
                :pengikatan,
                :keterangan,
                :pemohon_pasangan,
                :user_create,
                :tgl_create
                )";


        $this->db->query($query);

        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('nama_bank',  $_POST['nama_bank']);
        $this->db->bind('jenis_fasilitas',  $_POST['jenis_fasilitas']);
        $this->db->bind('plafond',  $_POST['plafond']);
        $this->db->bind('bakidebet',  $_POST['bakidebet']);
        $this->db->bind('kolektibilitas',  $_POST['kolektibilitas']);
        $this->db->bind('waktu_awal',  $_POST['waktu_awal']);
        $this->db->bind('waktu_akhir',  $_POST['waktu_akhir']);
        $this->db->bind('suku_bunga',  $_POST['suku_bunga']);
        $jenis_jaminan = isset($_POST['jenis_jaminan']) ? $_POST['jenis_jaminan'] : '';
        $this->db->bind('jenis_jaminan', $jenis_jaminan);
        $this->db->bind('nilai_jaminan',  $_POST['nilai_jaminan']);
        $this->db->bind('pemilik_jaminan',  $_POST['pemilik_jaminan']);
        $this->db->bind('alamat_jaminan',  $_POST['alamat_jaminan']);
        $pengikatan = isset($_POST['pengikatan']) ? $_POST['pengikatan'] : '';
        $this->db->bind('pengikatan',  $pengikatan);
        $this->db->bind('keterangan',  $_POST['keterangan']);
        $this->db->bind('pemohon_pasangan', $_POST['pemohon_pasangan'] ? $_POST['pemohon_pasangan'] : 'PEMOHON');
        $this->db->bind('user_create', $_POST['user_create']);
        $this->db->bind('tgl_create', $_POST['tgl_create']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_tgl_slik_tbl_permohon_kredit()
    {

        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_slik = :tanggal_slik,
        lokasi_berkas = :lokasi_berkas
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->bind('tanggal_slik', $_POST['tanggal_slik']);
        $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function simpan_slik_pasangan()
    {


        $query = "INSERT INTO tbl_slik
                (
                no_permohonan_kredit,
                nama_bank,
                jenis_fasilitas,
                plafond,
                bakidebet,
                kolektibilitas,
                waktu_awal,
                waktu_akhir,
                suku_bunga,
                jenis_jaminan,
                nilai_jaminan,
                pemilik_jaminan,
                alamat_jaminan,
                pengikatan,
                keterangan,
                pemohon_pasangan,
                user_create,
                tgl_create
                
                ) 
                
                VALUES
                ( 
                :no_permohonan_kredit,
                :nama_bank,
                :jenis_fasilitas,
                :plafond,
                :bakidebet,
                :kolektibilitas,
                :waktu_awal,
                :waktu_akhir,
                :suku_bunga,
                :jenis_jaminan,
                :nilai_jaminan,
                :pemilik_jaminan,
                :alamat_jaminan,
                :pengikatan,
                :keterangan,
                :pemohon_pasangan,
                :user_create,
                :tgl_create
                )";


        $this->db->query($query);

        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('nama_bank',  $_POST['nama_bank']);
        $this->db->bind('jenis_fasilitas',  $_POST['jenis_fasilitas']);
        $this->db->bind('plafond',  $_POST['plafond']);
        $this->db->bind('bakidebet',  $_POST['bakidebet']);
        $this->db->bind('kolektibilitas',  $_POST['kolektibilitas']);
        $this->db->bind('waktu_awal',  $_POST['waktu_awal']);
        $this->db->bind('waktu_akhir',  $_POST['waktu_akhir']);
        $this->db->bind('suku_bunga',  $_POST['suku_bunga']);
        $jenis_jaminan = isset($_POST['jenis_jaminan']) ? $_POST['jenis_jaminan'] : '';
        $this->db->bind('jenis_jaminan', $jenis_jaminan);
        $this->db->bind('nilai_jaminan',  $_POST['nilai_jaminan']);
        $this->db->bind('pemilik_jaminan',  $_POST['pemilik_jaminan']);
        $this->db->bind('alamat_jaminan',  $_POST['alamat_jaminan']);
        $pengikatan = isset($_POST['pengikatan']) ? $_POST['pengikatan'] : '';
        $this->db->bind('pengikatan',  $pengikatan);
        $this->db->bind('keterangan',  $_POST['keterangan']);
        $this->db->bind('pemohon_pasangan',  "PASANGAN");
        $this->db->bind('user_create', $_POST['user_create']);
        $this->db->bind('tgl_create', $_POST['tgl_create']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_tgl_slik_tbl_pasangan_kredit()
    {

        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_slik = :tanggal_slik,
        lokasi_berkas = :lokasi_berkas
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->bind('tanggal_slik', $_POST['tanggal_slik']);
        $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function edit_data_pemohon_where_id()
    {
        $id = $_POST['id'];
        $this->db->query('SELECT * FROM tbl_slik WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function edit_data_pasangan_where_id()
    {
        $id = $_POST['id'];
        $this->db->query('SELECT * FROM tbl_slik WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }


    public function update_slik_pemohon()
    {
        $query = "UPDATE tbl_slik SET 
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
        keterangan=:keterangan,
        user_edit = :user_edit,
        tgl_edit = :tgl_edit

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
        $this->db->bind('user_edit', $_POST['user_create']);
        $this->db->bind('tgl_edit', $_POST['tgl_create']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function update_slik_pasangan()
    {
        $query = "UPDATE tbl_slik SET 
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
        keterangan=:keterangan,
        user_edit = :user_edit,
        tgl_edit = :tgl_edit

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
        $this->db->bind('user_edit', $_POST['user_create']);
        $this->db->bind('tgl_edit', $_POST['tgl_create']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus_pemohon_slik()
    {
        $id = $_POST['id'];
        $query = "DELETE FROM tbl_slik WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus_pasangan_slik()
    {
        $id = $_POST['id'];
        $query = "DELETE FROM tbl_slik WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapus_pemohon_slik_all()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $query = "DELETE FROM tbl_slik WHERE no_permohonan_kredit= :no_permohonan_kredit";
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

    public function update_tbl_cs_hapus_slik()
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

    public function detail_slik_cs()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        // header('Content-type: application/json');
        // return json_encode($this->db->resultSet());

        return $this->db->single();
    }

    public function get_data_slik_single()
    {

        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        // header('Content-type: application/json');
        // return json_encode($this->db->resultSet());

        return $this->db->single();
    }

    public function daftar_slik_pemohon()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit AND (pemohon_pasangan = :pemohon_pasangan OR pemohon_pasangan = :pemohon_pasangan2 ) order by  pemohon_pasangan,tgl_create ASC');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('pemohon_pasangan', "PEMOHON");
        $this->db->bind('pemohon_pasangan2', "TIDAK ADA");
        return $this->db->resultSet();
    }

    public function daftar_slik_pasangan()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit AND (pemohon_pasangan = :pemohon_pasangan OR pemohon_pasangan = :pemohon_pasangan2) order by pemohon_pasangan,tgl_create ASC');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('pemohon_pasangan', "PASANGAN");
        $this->db->bind('pemohon_pasangan2', "TIDAK ADA");
        return $this->db->resultSet();
    }

    public function slik_pemohon_tidak_ditemukan()
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_slik = :tanggal_slik,
        lokasi_berkas =:lokasi_berkas
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('tanggal_slik', $_POST['tanggal_slik']);
        $this->db->bind('lokasi_berkas',  $_POST['lokasi_berkas']);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    // tambahan
    public function slik_pemohon_tidak_ditemukan_2()
    {

        $query = "INSERT INTO tbl_slik 
        (
        no_permohonan_kredit,
        pemohon_pasangan,
        user_create, 
        tgl_create
        )
        VALUES

        (
        :no_permohonan_kredit,
        :pemohon_pasangan,
        :user_create, 
        :tgl_create
        )";
        $this->db->query($query);
        $this->db->bind('pemohon_pasangan', 'TIDAK ADA');
        $this->db->bind('user_create', $_COOKIE['username']);
        $this->db->bind('tgl_create', date("Y-m-d H:i:s"));
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function tes_cari()
    {
        $this->db->query('SELECT * FROM tbl_uji');


        return $this->db->resultSet();
    }

    public function ambil_daftar_slik_pemohon($id)
    {


        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit AND pemohon_pasangan = :pemohon_pasangan');
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->bind('pemohon_pasangan', "PEMOHON");
        return $this->db->resultSet();
    }
}
