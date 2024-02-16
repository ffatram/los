<?php
date_default_timezone_set('Asia/Makassar');
class m_cs
{

    public function __construct()
    {
        $this->db = new Database;
    }


    public function simpan_data($data)
    {

        $query = "INSERT INTO tbl_permohon_kredit 
                (
                nama_pemohon,
                tempat_lahir_pemohon,
                tgl_lahir_pemohon,
                jenis_kelamin_pemohon,
                nama_ibu_kandung_pemohon,
                no_ktp_pemohon,
                npwp_pemohon,
                alamat_ktp_pemohon,
                alamat_sekarang_pemohon,
                telepon_pemohon,
                media_sosial,
                status_kepemilikan_rumah_pemohon,
                pendidikan_terakhir_pemohon,
                gelar_pemohon,
                status_perkawinan,
                jumlah_tanggungan,
                nama_keluarga_dapat_dihubungi,
                alamat_keluarga_dapat_dihubungi,
                hubungan_keluarga_dapat_dihubungi,
                telepon_keluarga_dapat_dihubungi,
                jenis_pekerjaan,
                nama_instansi,
                alamat_instansi,
                telepon_instansi,
                tahun_mulai_bekerja,
                jabatan_saat_ini,
                atasan_langsung,
                telepon_bendahara,
                nama_pasangan,
                tempat_lahir_pasangan,
                tgl_lahir_pasangan,
                no_ktp_pasangan,
                alamat_ktp_pasangan,
                alamat_sekarang_pasangan,
                telepon_pasangan,
                jenis_pekerjaan_pasangan,
                nama_instansi_pasangan,
                tahun_mulai_bekerja_pasangan,
                jabatan_saat_ini_pasangan,
                alamat_kantor_pasangan,
                telepon_kantor_pasangan,
                tanggal_permohonan,
                perjanjian_kerjasama,
                jenis_permohonan,
                plafond_dimohon,
                jangka_waktu,
                tujuan_penggunaan_kredit,
                jenis_jaminan,
                nilai_jaminan,
                id_marketing,
                id_analis,
                penghasilan_pemohon,
                penghasilan_pasangan,
                penghasilan_tambahan,
                penghasilan_tambahan_lainnya,
                biaya_hidup_perbulan,
                biaya_pendidikan,
                biaya_pam_listrik_telepon,
                biaya_transport,
                angsuran_bank_lain,
                angsuran_perumahan,
                angsuran_kendaraan,
                angsuran_barang_elektronik,
                angsuran_koperasi,
                biaya_lainnya,
                aset_yang_dimiliki,
                alamat_aset,
                jenis_sertifikat,
                jumlah_kendaraan,
                merek_kendaraan,
                tahun_kendaraan,
                atas_nama_kendaraan,
                catatan_cs,
                lokasi_berkas,
                kode_cabang,
                user_create,
                tgl_create,
                urutan_terakhir,
                no_permohonan_kredit,
                -- tambahan
                tipe_kredit,
                kode_instansi,
                kredit_online
                ) 
                
                VALUES
                ( 
                :nama_pemohon,
                :tempat_lahir_pemohon,
                :tgl_lahir_pemohon,
                :jenis_kelamin_pemohon,
                :nama_ibu_kandung_pemohon,
                :no_ktp_pemohon,
                :npwp_pemohon,
                :alamat_ktp_pemohon,
                :alamat_sekarang_pemohon,
                :telepon_pemohon,
                :media_sosial,
                :status_kepemilikan_rumah_pemohon,
                :pendidikan_terakhir_pemohon,
                :gelar_pemohon,
                :status_perkawinan,
                :jumlah_tanggungan,
                :nama_keluarga_dapat_dihubungi,
                :alamat_keluarga_dapat_dihubungi,
                :hubungan_keluarga_dapat_dihubungi,
                :telepon_keluarga_dapat_dihubungi,
                :jenis_pekerjaan,
                :nama_instansi,
                :alamat_instansi,
                :telepon_instansi,
                :tahun_mulai_bekerja,
                :jabatan_saat_ini,
                :atasan_langsung,
                :telepon_bendahara,
                :nama_pasangan,
                :tempat_lahir_pasangan,
                :tgl_lahir_pasangan,
                :no_ktp_pasangan,
                :alamat_ktp_pasangan,
                :alamat_sekarang_pasangan,
                :telepon_pasangan,
                :jenis_pekerjaan_pasangan,
                :nama_instansi_pasangan,
                :tahun_mulai_bekerja_pasangan,
                :jabatan_saat_ini_pasangan,
                :alamat_kantor_pasangan,
                :telepon_kantor_pasangan,
                :tanggal_permohonan,
                :perjanjian_kerjasama,
                :jenis_permohonan,
                :plafond_dimohon,
                :jangka_waktu,
                :tujuan_penggunaan_kredit,
                :jenis_jaminan,
                :nilai_jaminan,
                :id_marketing,
                :id_analis,
                :penghasilan_pemohon,
                :penghasilan_pasangan,
                :penghasilan_tambahan,
                :penghasilan_tambahan_lainnya,
                :biaya_hidup_perbulan,
                :biaya_pendidikan,
                :biaya_pam_listrik_telepon,
                :biaya_transport,
                :angsuran_bank_lain,
                :angsuran_perumahan,
                :angsuran_kendaraan,
                :angsuran_barang_elektronik,
                :angsuran_koperasi,
                :biaya_lainnya,
                :aset_yang_dimiliki,
                :alamat_aset,
                :jenis_sertifikat,
                :jumlah_kendaraan,
                :merek_kendaraan,
                :tahun_kendaraan,
                :atas_nama_kendaraan,
                :catatan_cs,
                :lokasi_berkas,
                :kode_cabang,
                :user_create,
                :tgl_create,
                :urutan_terakhir,
                :no_permohonan_kredit,
                -- tambahan

                :tipe_kredit,
                :kode_instansi,
                :kredit_online

                )";


        $this->db->query($query);



        $this->db->bind('nama_pemohon',  $_POST['nama_pemohon']);
        $this->db->bind('tempat_lahir_pemohon',  $_POST['tempat_lahir_pemohon']);
        $this->db->bind('tgl_lahir_pemohon',  $_POST['tgl_lahir_pemohon']);
        $this->db->bind('jenis_kelamin_pemohon',  $_POST['jenis_kelamin_pemohon']);
        $this->db->bind('nama_ibu_kandung_pemohon',  $_POST['nama_ibu_kandung_pemohon']);
        $this->db->bind('no_ktp_pemohon',  $_POST['no_ktp_pemohon']);
        $this->db->bind('npwp_pemohon',  $_POST['npwp_pemohon']);
        $this->db->bind('alamat_ktp_pemohon',  $_POST['alamat_ktp_pemohon']);
        $this->db->bind('alamat_sekarang_pemohon',  $_POST['alamat_sekarang_pemohon']);
        $this->db->bind('telepon_pemohon',  $_POST['telepon_pemohon']);
        $this->db->bind('media_sosial',  $_POST['media_sosial']);
        $this->db->bind('status_kepemilikan_rumah_pemohon',  $_POST['status_kepemilikan_rumah_pemohon']);
        $this->db->bind('pendidikan_terakhir_pemohon',  $_POST['pendidikan_terakhir_pemohon']);
        $this->db->bind('gelar_pemohon',  $_POST['gelar_pemohon']);
        $this->db->bind('status_perkawinan',  $_POST['status_perkawinan']);
        $this->db->bind('jumlah_tanggungan',  $_POST['jumlah_tanggungan']);
        $this->db->bind('nama_keluarga_dapat_dihubungi',  $_POST['nama_keluarga_dapat_dihubungi']);
        $this->db->bind('alamat_keluarga_dapat_dihubungi',  $_POST['alamat_keluarga_dapat_dihubungi']);
        $this->db->bind('hubungan_keluarga_dapat_dihubungi',  $_POST['hubungan_keluarga_dapat_dihubungi']);
        $this->db->bind('telepon_keluarga_dapat_dihubungi',  $_POST['telepon_keluarga_dapat_dihubungi']);
        $this->db->bind('jenis_pekerjaan',  $_POST['jenis_pekerjaan']);
        $this->db->bind('nama_instansi',  $_POST['nama_instansi']);
        $this->db->bind('alamat_instansi',  $_POST['alamat_instansi']);
        $this->db->bind('telepon_instansi',  $_POST['telepon_instansi']);
        $this->db->bind('tahun_mulai_bekerja',  $_POST['tahun_mulai_bekerja']);
        $this->db->bind('jabatan_saat_ini',  $_POST['jabatan_saat_ini']);
        $this->db->bind('atasan_langsung',  $_POST['atasan_langsung']);
        $this->db->bind('telepon_bendahara',  $_POST['telepon_bendahara']);
        $this->db->bind('nama_pasangan',  $_POST['nama_pasangan']);
        $this->db->bind('tempat_lahir_pasangan',  $_POST['tempat_lahir_pasangan']);
        $this->db->bind('tgl_lahir_pasangan',  $_POST['tgl_lahir_pasangan']);
        $this->db->bind('no_ktp_pasangan',  $_POST['no_ktp_pasangan']);
        $this->db->bind('alamat_ktp_pasangan',  $_POST['alamat_ktp_pasangan']);
        $this->db->bind('alamat_sekarang_pasangan',  $_POST['alamat_sekarang_pasangan']);
        $this->db->bind('telepon_pasangan',  $_POST['telepon_pasangan']);
        $this->db->bind('jenis_pekerjaan_pasangan',  $_POST['jenis_pekerjaan_pasangan']);
        $this->db->bind('nama_instansi_pasangan',  $_POST['nama_instansi_pasangan']);
        $this->db->bind('tahun_mulai_bekerja_pasangan',  $_POST['tahun_mulai_bekerja_pasangan']);
        $this->db->bind('jabatan_saat_ini_pasangan',  $_POST['jabatan_saat_ini_pasangan']);
        $this->db->bind('alamat_kantor_pasangan',  $_POST['alamat_kantor_pasangan']);
        $this->db->bind('telepon_kantor_pasangan',  $_POST['telepon_kantor_pasangan']);
        $this->db->bind('tanggal_permohonan',  $_POST['tanggal_permohonan']);
        $this->db->bind('perjanjian_kerjasama',  $_POST['perjanjian_kerjasama']);
        $this->db->bind('jenis_permohonan',  $_POST['jenis_permohonan']);
        $this->db->bind('plafond_dimohon',  $_POST['plafond_dimohon']);
        $this->db->bind('jangka_waktu',  $_POST['jangka_waktu']);
        $this->db->bind('tujuan_penggunaan_kredit',  $_POST['tujuan_penggunaan_kredit']);
        $this->db->bind('jenis_jaminan',  $_POST['jenis_jaminan']);
        $this->db->bind('nilai_jaminan',  $_POST['nilai_jaminan']);
        $this->db->bind('id_marketing',  $_POST['id_marketing']);
        $this->db->bind('id_analis',  $_POST['id_analis']);
        $this->db->bind('penghasilan_pemohon',  $_POST['penghasilan_pemohon']);
        $this->db->bind('penghasilan_pasangan',  $_POST['penghasilan_pasangan']);
        $this->db->bind('penghasilan_tambahan',  $_POST['penghasilan_tambahan']);
        $this->db->bind('penghasilan_tambahan_lainnya',  $_POST['penghasilan_tambahan_lainnya']);
        $this->db->bind('biaya_hidup_perbulan',  $_POST['biaya_hidup_perbulan']);
        $this->db->bind('biaya_pendidikan',  $_POST['biaya_pendidikan']);
        $this->db->bind('biaya_pam_listrik_telepon',  $_POST['biaya_pam_listrik_telepon']);
        $this->db->bind('biaya_transport',  $_POST['biaya_transport']);
        $this->db->bind('angsuran_bank_lain',  $_POST['angsuran_bank_lain']);
        $this->db->bind('angsuran_perumahan',  $_POST['angsuran_perumahan']);
        $this->db->bind('angsuran_kendaraan',  $_POST['angsuran_kendaraan']);
        $this->db->bind('angsuran_barang_elektronik',  $_POST['angsuran_barang_elektronik']);
        $this->db->bind('angsuran_koperasi',  $_POST['angsuran_koperasi']);
        $this->db->bind('biaya_lainnya',  $_POST['biaya_lainnya']);
        $this->db->bind('aset_yang_dimiliki',  $_POST['aset_yang_dimiliki']);
        $this->db->bind('alamat_aset',  $_POST['alamat_aset']);
        $this->db->bind('jenis_sertifikat',  $_POST['jenis_sertifikat']);
        $this->db->bind('jumlah_kendaraan',  $_POST['jumlah_kendaraan']);
        $this->db->bind('merek_kendaraan',  $_POST['merek_kendaraan']);
        $this->db->bind('tahun_kendaraan',  $_POST['tahun_kendaraan']);
        $this->db->bind('atas_nama_kendaraan',  $_POST['atas_nama_kendaraan']);
        $this->db->bind('catatan_cs',  $_POST['catatan_cs']);

        $this->db->bind('lokasi_berkas',  $_POST['lokasi_berkas']);
        $this->db->bind('kode_cabang',  $_POST['kode_cabang']);
        $this->db->bind('user_create',  $_POST['user_create']);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('urutan_terakhir', $_POST['urutan_terakhir']);
        $this->db->bind('tgl_create',   $_POST['tgl_create']);
        $this->db->bind('user_create',  $_COOKIE['username']);

        // tambahan
        $this->db->bind('tipe_kredit',  $_POST['tipe_kredit']);
        $this->db->bind('kode_instansi',  $_POST['kode_instansi']);
        $this->db->bind('kredit_online',  $_POST['kredit_online']);


        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_data_cs()
    {
        $this->db->query('SELECT * FROM tbl_cabang');
        return $this->db->resultSet();
    }

    public function get_urutan_terakhir()
    {
        //         SELECT *
        // FROM foo
        // WHERE id IN (
        // SELECT Max(id)
        // FROM foo
        // WHERE value='XYZ'
        // GROUP BY u_id
        // )
        // LIMIT 0,30


        $kode_cabang = $_SESSION['kode_cabang'];
        $query2 = "SELECT *
        FROM tbl_permohon_kredit
        WHERE id IN (
        SELECT Max(id)
        FROM tbl_permohon_kredit
        WHERE kode_cabang =:kode_cabang
        GROUP BY kode_cabang
        )  
        ORDER BY id DESC
        LIMIT 0,30
        ";
        $query = "SELECT * FROM tbl_permohon_kredit WHERE urutan_terakhir in (SELECT MAX(urutan_terakhir) FROM tbl_permohon_kredit GROUP BY kode_cabang) ORDER BY urutan_terakhir DESC";
        $this->db->query($query2);
        $this->db->bind('kode_cabang', $kode_cabang);
        return $this->db->single();
    }

    public function get_nomor_urut_max()
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit ORDER BY id DESC LIMIT 1');
        return $this->db->single();
    }

    public function lihat_data()
    {
        $this->db->query('SELECT * FROM tbl_permohon_kredit ORDER BY urutan_terakhir DESC LIMIT 1');
        return $this->db->single();
    }


    // btn_semuanya
    public function lihat_data_kredit()
    {
        $kode_cabang = $_COOKIE['kode_cabang'];

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE kode_cabang = :kode_cabang ORDER BY no_permohonan_kredit DESC');
        $this->db->bind('kode_cabang', $kode_cabang);
        return $this->db->resultSet();
    }
    public function count_lihat_data_kredit()
    {
        $kode_cabang = $_COOKIE['kode_cabang'];
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE kode_cabang = :kode_cabang ORDER BY no_permohonan_kredit DESC');
        $this->db->bind('kode_cabang', $kode_cabang);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function btn_hari_ini()
    {

        $kode_cabang = $_COOKIE['kode_cabang'];
        $hari_ini = date('Y-m-d');
        $query = "SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan = :tanggal_permohonan AND kode_cabang = :kode_cabang ORDER BY tanggal_permohonan DESC, no_permohonan_kredit DESC";
        $this->db->query($query);
        $this->db->bind('tanggal_permohonan', $hari_ini);
        $this->db->bind('kode_cabang', $kode_cabang);

        return $this->db->resultSet();
    }

    public function count_btn_hari_ini()
    {

        $kode_cabang = $_COOKIE['kode_cabang'];
        $hari_ini = date('Y-m-d');
        $query = "SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan = :tanggal_permohonan AND kode_cabang = :kode_cabang ORDER BY tanggal_permohonan DESC, no_permohonan_kredit DESC";
        $this->db->query($query);
        $this->db->bind('tanggal_permohonan', $hari_ini);
        $this->db->bind('kode_cabang', $kode_cabang);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function btn_bulan_ini()
    {


        $bulan_ini = date('m');
        $tahun_ini = date('Y');
        $kode_cabang = $_COOKIE['kode_cabang'];


        $query = "SELECT * FROM tbl_permohon_kredit WHERE  month(tanggal_permohonan) = :bulan_ini AND year(tanggal_permohonan) = :tahun_ini AND kode_cabang = :kode_cabang ORDER BY tanggal_permohonan DESC, no_permohonan_kredit DESC";
        $this->db->query($query);
        $this->db->bind('tahun_ini', $tahun_ini);
        $this->db->bind('bulan_ini', $bulan_ini);
        $this->db->bind('kode_cabang', $kode_cabang);
        return $this->db->resultSet();
    }

    public function count_btn_bulan_ini()
    {


        $bulan_ini = date('m');
        $tahun_ini = date('Y');
        $kode_cabang = $_COOKIE['kode_cabang'];


        $query = "SELECT * FROM tbl_permohon_kredit WHERE  month(tanggal_permohonan) = :bulan_ini AND year(tanggal_permohonan) = :tahun_ini AND kode_cabang = :kode_cabang ORDER BY tanggal_permohonan DESC, no_permohonan_kredit DESC";
        $this->db->query($query);
        $this->db->bind('tahun_ini', $tahun_ini);
        $this->db->bind('bulan_ini', $bulan_ini);
        $this->db->bind('kode_cabang', $kode_cabang);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function btn_tahun_ini()
    {

        $tahun_ini = date('Y');
        $kode_cabang = $_COOKIE['kode_cabang'];
        $query = "SELECT * FROM tbl_permohon_kredit WHERE year(tanggal_permohonan) = :tanggal_permohonan AND kode_cabang = :kode_cabang ORDER BY tanggal_permohonan DESC, no_permohonan_kredit DESC";
        $this->db->query($query);
        $this->db->bind('tanggal_permohonan', $tahun_ini);
        $this->db->bind('kode_cabang', $kode_cabang);
        return $this->db->resultSet();
    }

    public function count_btn_tahun_ini()
    {

        $tahun_ini = date('Y');
        $kode_cabang = $_COOKIE['kode_cabang'];
        $query = "SELECT * FROM tbl_permohon_kredit WHERE year(tanggal_permohonan) = :tanggal_permohonan AND kode_cabang = :kode_cabang ORDER BY tanggal_permohonan DESC, no_permohonan_kredit DESC";
        $this->db->query($query);
        $this->db->bind('tanggal_permohonan', $tahun_ini);
        $this->db->bind('kode_cabang', $kode_cabang);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function btn_cari()
    {

        $data_cari = "%" . $_SESSION['data_cari'] . "%";
        $kode_cabang = $_COOKIE['kode_cabang'];
        $query = "SELECT * FROM tbl_permohon_kredit WHERE  kode_cabang = :kode_cabang AND no_permohonan_kredit  =:no_permohonan_kredit OR nama_pemohon LIKE  :nama_pemohon OR nama_instansi LIKE :nama_instansi ORDER BY tanggal_permohonan DESC, no_permohonan_kredit DESC";
        $this->db->query($query);

        $this->db->bind('no_permohonan_kredit',  $_SESSION['data_cari']);
        $this->db->bind('nama_pemohon',  $data_cari);
        $this->db->bind('nama_instansi',  $data_cari);
        $this->db->bind('kode_cabang', $kode_cabang);

        return $this->db->resultSet();
    }

    public function count_btn_cari()
    {

        $data_cari = "%" . $_SESSION['data_cari'] . "%";
        $kode_cabang = $_COOKIE['kode_cabang'];
        $query = "SELECT * FROM tbl_permohon_kredit WHERE  kode_cabang = :kode_cabang AND no_permohonan_kredit  =:no_permohonan_kredit OR nama_pemohon LIKE  :nama_pemohon OR nama_instansi LIKE :nama_instansi ORDER BY no_permohonan_kredit,tanggal_permohonan DESC";
        $this->db->query($query);

        $this->db->bind('no_permohonan_kredit',  $_SESSION['data_cari']);
        $this->db->bind('nama_pemohon',  $data_cari);
        $this->db->bind('nama_instansi',  $data_cari);
        $this->db->bind('kode_cabang', $kode_cabang);

        $this->db->execute();
        return $this->db->rowCount();
    }


    // json lihat detail
    public function detail_data_kredit()
    {
        // "012200019"
        $data_id = $_POST['no_permohonan_kredit'];

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE id = :id');

        $this->db->bind('id', $data_id);
        header('Content-type: application/json');
        return json_encode($this->db->resultSet());
    }

    public function get_tbl_permohon_kredit($id)
    {
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }



    public function modal_detail()
    {
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }

    public function data_debitur($nopeg)
    {
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit',  $nopeg);
        return $this->db->single();
    }


    public function lihat_data_kredit_id()
    {


        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :no_permohonan_kredit ORDER BY tanggal_permohonan DESC, no_permohonan_kredit DESC');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }

    public function update()
    {


        $query = "UPDATE tbl_permohon_kredit SET 
        nama_pemohon = :nama_pemohon,
        tempat_lahir_pemohon = :tempat_lahir_pemohon,
        tgl_lahir_pemohon = :tgl_lahir_pemohon,
        jenis_kelamin_pemohon =:jenis_kelamin_pemohon,
        nama_ibu_kandung_pemohon = :nama_ibu_kandung_pemohon,
        no_ktp_pemohon = :no_ktp_pemohon,
        npwp_pemohon =:npwp_pemohon,
        alamat_ktp_pemohon =:alamat_ktp_pemohon,
        alamat_sekarang_pemohon =:alamat_sekarang_pemohon,
        telepon_pemohon =:telepon_pemohon,
        media_sosial =:media_sosial,
        status_kepemilikan_rumah_pemohon =:status_kepemilikan_rumah_pemohon,
        pendidikan_terakhir_pemohon =:pendidikan_terakhir_pemohon,
        gelar_pemohon =:gelar_pemohon,
        status_perkawinan =:status_perkawinan,
        jumlah_tanggungan=:jumlah_tanggungan,
        nama_keluarga_dapat_dihubungi =:nama_keluarga_dapat_dihubungi,
        alamat_keluarga_dapat_dihubungi =:alamat_keluarga_dapat_dihubungi,
        hubungan_keluarga_dapat_dihubungi =:hubungan_keluarga_dapat_dihubungi,
        telepon_keluarga_dapat_dihubungi =:telepon_keluarga_dapat_dihubungi,
        jenis_pekerjaan =:jenis_pekerjaan,
        nama_instansi =:nama_instansi,
        alamat_instansi =:alamat_instansi,
        telepon_instansi =:telepon_instansi,
        tahun_mulai_bekerja =:tahun_mulai_bekerja,
        jabatan_saat_ini =:jabatan_saat_ini,
        atasan_langsung=:atasan_langsung,
        telepon_bendahara=:telepon_bendahara,
        nama_pasangan=:nama_pasangan,
        tempat_lahir_pasangan =:tempat_lahir_pasangan,
        tgl_lahir_pasangan =:tgl_lahir_pasangan,
        no_ktp_pasangan =:no_ktp_pasangan,
        alamat_ktp_pasangan=:alamat_ktp_pasangan,
        alamat_sekarang_pasangan =:alamat_sekarang_pasangan,
        telepon_pasangan =:telepon_pasangan,
        jenis_pekerjaan_pasangan =:jenis_pekerjaan_pasangan,
        nama_instansi_pasangan =:nama_instansi_pasangan,
        tahun_mulai_bekerja_pasangan =:tahun_mulai_bekerja_pasangan,
        jabatan_saat_ini_pasangan =:jabatan_saat_ini_pasangan,
        alamat_kantor_pasangan =:alamat_kantor_pasangan,
        telepon_kantor_pasangan =:telepon_kantor_pasangan,
        -- tanggal_permohonan =:tanggal_permohonan,
        perjanjian_kerjasama =:perjanjian_kerjasama,
        jenis_permohonan =:jenis_permohonan,
        plafond_dimohon =:plafond_dimohon,
        jangka_waktu =:jangka_waktu,
        tujuan_penggunaan_kredit =:tujuan_penggunaan_kredit,
        jenis_jaminan =:jenis_jaminan,
        nilai_jaminan =:nilai_jaminan,
        id_marketing =:id_marketing,
        id_analis =:id_analis,
        penghasilan_pemohon =:penghasilan_pemohon,
        penghasilan_pasangan =:penghasilan_pasangan,
        penghasilan_tambahan =:penghasilan_tambahan,
        penghasilan_tambahan_lainnya =:penghasilan_tambahan_lainnya,
        biaya_hidup_perbulan =:biaya_hidup_perbulan,
        biaya_pendidikan =:biaya_pendidikan,
        biaya_pam_listrik_telepon =:biaya_pam_listrik_telepon,
        biaya_transport =:biaya_transport,
        angsuran_bank_lain =:angsuran_bank_lain,
        angsuran_perumahan =:angsuran_perumahan,
        angsuran_kendaraan =:angsuran_kendaraan,
        angsuran_barang_elektronik =:angsuran_barang_elektronik,
        angsuran_koperasi =:angsuran_koperasi,
        biaya_lainnya =:biaya_lainnya,
        aset_yang_dimiliki =:aset_yang_dimiliki,
        alamat_aset =:alamat_aset,
        jenis_sertifikat =:jenis_sertifikat,
        jumlah_kendaraan =:jumlah_kendaraan,
        merek_kendaraan =:merek_kendaraan,
        tahun_kendaraan =:tahun_kendaraan,  
        atas_nama_kendaraan =:atas_nama_kendaraan,
        catatan_cs =:catatan_cs,
        -- lokasi_berkas =:lokasi_berkas
        -- tambahan
        -- tanggal_batal =:tanggal_batal,
        user_edit = :user_edit,
        tgl_edit = :tgl_edit,
        tipe_kredit = :tipe_kredit,
        kode_instansi =:kode_instansi

        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->bind('nama_pemohon',  $_POST['nama_pemohon']);
        $this->db->bind('tempat_lahir_pemohon',  $_POST['tempat_lahir_pemohon']);
        $this->db->bind('tgl_lahir_pemohon',  $_POST['tgl_lahir_pemohon']);
        $this->db->bind('jenis_kelamin_pemohon',  $_POST['jenis_kelamin_pemohon']);
        $this->db->bind('nama_ibu_kandung_pemohon',  $_POST['nama_ibu_kandung_pemohon']);
        $this->db->bind('no_ktp_pemohon',  $_POST['no_ktp_pemohon']);
        $this->db->bind('npwp_pemohon',  $_POST['npwp_pemohon']);
        $this->db->bind('alamat_ktp_pemohon',  $_POST['alamat_ktp_pemohon']);
        $this->db->bind('alamat_sekarang_pemohon',  $_POST['alamat_sekarang_pemohon']);
        $this->db->bind('telepon_pemohon',  $_POST['telepon_pemohon']);
        $this->db->bind('media_sosial',  $_POST['media_sosial']);
        $this->db->bind('status_kepemilikan_rumah_pemohon',  $_POST['status_kepemilikan_rumah_pemohon']);
        $this->db->bind('pendidikan_terakhir_pemohon',  $_POST['pendidikan_terakhir_pemohon']);
        $this->db->bind('gelar_pemohon',  $_POST['gelar_pemohon']);
        $this->db->bind('status_perkawinan',  $_POST['status_perkawinan']);
        $this->db->bind('jumlah_tanggungan',  $_POST['jumlah_tanggungan']);
        $this->db->bind('nama_keluarga_dapat_dihubungi',  $_POST['nama_keluarga_dapat_dihubungi']);
        $this->db->bind('alamat_keluarga_dapat_dihubungi',  $_POST['alamat_keluarga_dapat_dihubungi']);
        $this->db->bind('hubungan_keluarga_dapat_dihubungi',  $_POST['hubungan_keluarga_dapat_dihubungi']);
        $this->db->bind('telepon_keluarga_dapat_dihubungi',  $_POST['telepon_keluarga_dapat_dihubungi']);
        $this->db->bind('jenis_pekerjaan',  $_POST['jenis_pekerjaan']);
        $this->db->bind('nama_instansi',  $_POST['nama_instansi']);
        $this->db->bind('alamat_instansi',  $_POST['alamat_instansi']);
        $this->db->bind('telepon_instansi',  $_POST['telepon_instansi']);
        $this->db->bind('tahun_mulai_bekerja',  $_POST['tahun_mulai_bekerja']);
        $this->db->bind('jabatan_saat_ini',  $_POST['jabatan_saat_ini']);
        $this->db->bind('atasan_langsung',  $_POST['atasan_langsung']);
        $this->db->bind('telepon_bendahara',  $_POST['telepon_bendahara']);
        $this->db->bind('nama_pasangan',  $_POST['nama_pasangan']);
        $this->db->bind('tempat_lahir_pasangan',  $_POST['tempat_lahir_pasangan']);
        $this->db->bind('tgl_lahir_pasangan',  $_POST['tgl_lahir_pasangan']);
        $this->db->bind('no_ktp_pasangan',  $_POST['no_ktp_pasangan']);
        $this->db->bind('alamat_ktp_pasangan',  $_POST['alamat_ktp_pasangan']);

        $this->db->bind('alamat_sekarang_pasangan',  $_POST['alamat_sekarang_pasangan']);
        $this->db->bind('telepon_pasangan',  $_POST['telepon_pasangan']);
        $this->db->bind('jenis_pekerjaan_pasangan',  $_POST['jenis_pekerjaan_pasangan']);
        $this->db->bind('nama_instansi_pasangan',  $_POST['nama_instansi_pasangan']);
        $this->db->bind('tahun_mulai_bekerja_pasangan',  $_POST['tahun_mulai_bekerja_pasangan']);
        $this->db->bind('jabatan_saat_ini_pasangan',  $_POST['jabatan_saat_ini_pasangan']);
        $this->db->bind('alamat_kantor_pasangan',  $_POST['alamat_kantor_pasangan']);
        $this->db->bind('telepon_kantor_pasangan',  $_POST['telepon_kantor_pasangan']);
        // $this->db->bind('tanggal_permohonan',  $_POST['tanggal_permohonan']);
        $this->db->bind('perjanjian_kerjasama',  $_POST['perjanjian_kerjasama']);
        $this->db->bind('jenis_permohonan',  $_POST['jenis_permohonan']);
        $this->db->bind('plafond_dimohon',  $_POST['plafond_dimohon']);
        $this->db->bind('jangka_waktu',  $_POST['jangka_waktu']);
        $this->db->bind('tujuan_penggunaan_kredit',  $_POST['tujuan_penggunaan_kredit']);
        $this->db->bind('jenis_jaminan',  $_POST['jenis_jaminan']);
        $this->db->bind('nilai_jaminan',  $_POST['nilai_jaminan']);
        $this->db->bind('id_marketing',  $_POST['id_marketing']);
        $this->db->bind('id_analis',  $_POST['id_analis']);
        $this->db->bind('penghasilan_pemohon',  $_POST['penghasilan_pemohon']);
        $this->db->bind('penghasilan_pasangan',  $_POST['penghasilan_pasangan']);
        $this->db->bind('penghasilan_tambahan',  $_POST['penghasilan_tambahan']);
        $this->db->bind('penghasilan_tambahan_lainnya',  $_POST['penghasilan_tambahan_lainnya']);
        $this->db->bind('biaya_hidup_perbulan',  $_POST['biaya_hidup_perbulan']);
        $this->db->bind('biaya_pendidikan',  $_POST['biaya_pendidikan']);
        $this->db->bind('biaya_pam_listrik_telepon',  $_POST['biaya_pam_listrik_telepon']);
        $this->db->bind('biaya_transport',  $_POST['biaya_transport']);
        $this->db->bind('angsuran_bank_lain',  $_POST['angsuran_bank_lain']);
        $this->db->bind('angsuran_perumahan',  $_POST['angsuran_perumahan']);
        $this->db->bind('angsuran_kendaraan',  $_POST['angsuran_kendaraan']);
        $this->db->bind('angsuran_barang_elektronik',  $_POST['angsuran_barang_elektronik']);
        $this->db->bind('angsuran_koperasi',  $_POST['angsuran_koperasi']);
        $this->db->bind('biaya_lainnya',  $_POST['biaya_lainnya']);
        $this->db->bind('aset_yang_dimiliki',  $_POST['aset_yang_dimiliki']);
        $this->db->bind('alamat_aset',  $_POST['alamat_aset']);
        $this->db->bind('jenis_sertifikat',  $_POST['jenis_sertifikat']);
        $this->db->bind('jumlah_kendaraan',  $_POST['jumlah_kendaraan']);
        $this->db->bind('merek_kendaraan',  $_POST['merek_kendaraan']);
        $this->db->bind('tahun_kendaraan',  $_POST['tahun_kendaraan']);
        $this->db->bind('atas_nama_kendaraan',  $_POST['atas_nama_kendaraan']);
        $this->db->bind('catatan_cs',   $_POST['catatan_cs']);
        // $this->db->bind('tanggal_batal',   $_POST['tanggal_batal']);
        // $this->db->bind('lokasi_berkas',   $_POST['lokasi_berkas']);
        $this->db->bind('user_edit',   $_POST['user_edit']);
        $this->db->bind('tgl_edit',   $_POST['tgl_edit']);
        $this->db->bind('tipe_kredit',   $_POST['tipe_kredit']);

        $this->db->bind('kode_instansi',   $_POST['kode_instansi']);





        $this->db->execute();
        return $this->db->rowCount();
    }

    public function delete()
    {


        $query = "DELETE FROM tbl_permohon_kredit WHERE no_permohonan_kredit= :no_permohonan_kredit";

        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    // table tujuan penggunaan kredit


    public function get_all_tujuan_penggunaan_kredit()
    {
        $query = "SELECT * FROM tbl_ref_tujuan_penggunaan_kredit";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function cari_ktp()
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_ktp_pemohon = :no_ktp_pemohon  AND no_ktp_pemohon IS NOT NULL ORDER BY id DESC');
        $this->db->bind('no_ktp_pemohon', $_POST['no_ktp']);
        return $this->db->resultSet();

        // $this->db->execute();
        // return $this->db->rowCount();
    }

    public function rowCount_cari_ktp()
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_ktp_pemohon = :no_ktp_pemohon  AND no_ktp_pemohon IS NOT NULL');
        $this->db->bind('no_ktp_pemohon', $_POST['no_ktp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_pemohon_where_no_ktp()
    {

        $query = "SELECT * FROM tbl_permohon_kredit WHERE no_ktp_pemohon =:no_ktp_pemohon ORDER BY id DESC LIMIT 1";
        $this->db->query($query);
        $this->db->bind('no_ktp_pemohon', $_POST['no_ktp_pemohon']);
        return $this->db->single();
    }

    public function cek_laporan_cs()
    {


        if ($_COOKIE['level'] == 'SKAI' ||  $_COOKIE['level'] == 'KOMITE') {

            if ($_POST['kode_cabang'] == '00') {
                $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan >= :dari_tanggal  AND tanggal_permohonan <= :sampai_tanggal');
                $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
                $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
                return $this->db->resultSet();
            } else {
                $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan >= :dari_tanggal  AND tanggal_permohonan <= :sampai_tanggal AND kode_cabang =:kode_cabang');
                $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
                $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
                $this->db->bind('kode_cabang', $_POST['kode_cabang']);
                return $this->db->resultSet();
            }
        } else {
            $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan >= :dari_tanggal  AND tanggal_permohonan <= :sampai_tanggal AND kode_cabang =:kode_cabang');
            $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
            $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            return $this->db->resultSet();
        }
    }



    public function cetak_cair_cs()
    {



        if ($_COOKIE['level'] == 'SKAI' ||  $_COOKIE['level'] == 'KOMITE') {

            if ($_POST['kode_cabang'] == '00') {
                $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_pencairan >= :dari_tanggal  AND tanggal_pencairan <= :sampai_tanggal');
                $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
                $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
                return $this->db->resultSet();
            } else {
                $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_pencairan >= :dari_tanggal  AND tanggal_pencairan <= :sampai_tanggal AND kode_cabang =:kode_cabang');
                $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
                $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
                $this->db->bind('kode_cabang', $_POST['kode_cabang']);
                return $this->db->resultSet();
            }
        } else {
            $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_pencairan >= :dari_tanggal  AND tanggal_pencairan <= :sampai_tanggal AND kode_cabang =:kode_cabang');
            $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
            $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            return $this->db->resultSet();
        }
    }

    public function cetak_tolak_cs()
    {
        if ($_COOKIE['level'] == 'SKAI' ||  $_COOKIE['level'] == 'KOMITE') {

            if ($_POST['kode_cabang'] == '00') {
                $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_tolak >= :dari_tanggal  AND tanggal_tolak <= :sampai_tanggal');
                $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
                $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
                return $this->db->resultSet();
            } else {
                $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_tolak >= :dari_tanggal  AND tanggal_tolak <= :sampai_tanggal AND kode_cabang =:kode_cabang ');
                $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
                $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
                $this->db->bind('kode_cabang', $_POST['kode_cabang']);
                return $this->db->resultSet();
            }
        } else {
            $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_tolak >= :dari_tanggal  AND tanggal_tolak <= :sampai_tanggal AND kode_cabang =:kode_cabang ');
            $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
            $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            return $this->db->resultSet();
        }
    }
    public function cetak_batal_cs()
    {


        if ($_COOKIE['level'] == 'SKAI' ||  $_COOKIE['level'] == 'KOMITE') {

            if ($_POST['kode_cabang'] == '00') {
                $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_batal >= :dari_tanggal  AND tanggal_batal <= :sampai_tanggal');
                $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
                $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
                return $this->db->resultSet();
            } else {
                $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_batal >= :dari_tanggal  AND tanggal_batal <= :sampai_tanggal AND kode_cabang =:kode_cabang ');
                $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
                $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
                $this->db->bind('kode_cabang', $_POST['kode_cabang']);
                return $this->db->resultSet();
            }
        } else {

            $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_batal >= :dari_tanggal  AND tanggal_batal <= :sampai_tanggal AND kode_cabang =:kode_cabang ');
            $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
            $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            return $this->db->resultSet();
        }
    }

    public function cetak_pending_cs()
    {


        if ($_COOKIE['level'] == 'SKAI' ||  $_COOKIE['level'] == 'KOMITE') {

            if ($_POST['kode_cabang'] == '00') {
                $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan >= :dari_tanggal  AND tanggal_permohonan <= :sampai_tanggal AND tanggal_pencairan IS NULL AND tanggal_tolak IS NULL AND tanggal_batal IS NULL');
                $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
                $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
                return $this->db->resultSet();
            } else {
                $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan >= :dari_tanggal  AND tanggal_permohonan <= :sampai_tanggal AND tanggal_pencairan IS NULL AND tanggal_tolak IS NULL AND tanggal_batal IS NULL AND kode_cabang =:kode_cabang');
                $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
                $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
                $this->db->bind('kode_cabang', $_POST['kode_cabang']);
                return $this->db->resultSet();
            }
        } else {
            $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan >= :dari_tanggal  AND tanggal_permohonan <= :sampai_tanggal AND tanggal_pencairan IS NULL AND tanggal_tolak IS NULL AND tanggal_batal IS NULL AND kode_cabang =:kode_cabang');
            $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
            $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            return $this->db->resultSet();
        }
    }


    public function modal_log()
    {


        $this->db->query('SELECT A.*, B.nama_pemohon, C.* FROM tbl_log A JOIN tbl_permohon_kredit B ON A.no_permohonan_kredit = B.no_permohonan_kredit JOIN tbl_ref_log C ON A.id_log = C.id WHERE A.no_permohonan_kredit =:no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->resultSet();
    }

    public function export_csv()
    {


        if ($_COOKIE['level'] == "SKAI" || $_COOKIE['level'] == 'KOMITE') {

            $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan >= :dari_tanggal  AND tanggal_permohonan <= :sampai_tanggal AND kode_cabang =:kode_cabang');
            $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
            $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
            $this->db->bind('kode_cabang', $_POST['kode_cabang']);
            return $this->db->resultSet();
        } else {

            $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan >= :dari_tanggal  AND tanggal_permohonan <= :sampai_tanggal AND kode_cabang =:kode_cabang AND id_analis=:id_analis');
            $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
            $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
            $this->db->bind('id_analis', $_POST['id_analis']);
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            return $this->db->resultSet();
        }
    }

    public function export_csv_all()
    {

        if ($_COOKIE['level'] == 'SKAI' || $_COOKIE['level'] == 'KOMITE') {

            $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan >= :dari_tanggal  AND tanggal_permohonan <= :sampai_tanggal');
            $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
            $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
            return $this->db->resultSet();
        } else {

            $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_permohonan >= :dari_tanggal  AND tanggal_permohonan <= :sampai_tanggal AND kode_cabang =:kode_cabang');
            $this->db->bind('dari_tanggal', $_POST['dari_tanggal']);
            $this->db->bind('sampai_tanggal', $_POST['sampai_tanggal']);
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            return $this->db->resultSet();
        }
    }

    public function log_user()
    {
        $this->db->query('SELECT A.*, B.no_permohonan_kredit, B.nama_pemohon, C.* FROM tbl_log A  JOIN tbl_permohon_kredit B on A.no_permohonan_kredit = B.no_permohonan_kredit JOIN tbl_ref_log C ON A.id_log = C.id WHERE  A.update_date >= :tanggal_mulai  AND A.update_date <= :tanggal_akhir AND A.username =:username ORDER BY A.update_date DESC');
        $this->db->bind('tanggal_mulai', $_POST['tanggal_mulai']);
        $this->db->bind('tanggal_akhir', $_POST['tanggal_akhir']);
        $this->db->bind('username', $_POST['username']);
        return $this->db->resultSet();
    }


    public function permohonan_bulan_ini()
    {
        $this->db->query('SELECT * from tbl_permohon_kredit WHERE MONTH(tanggal_permohonan) = MONTH(CURRENT_DATE()) AND YEAR(tanggal_permohonan) = YEAR(CURRENT_DATE())');
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function pencairan_bulan_ini()
    {
        $this->db->query('SELECT * from tbl_permohon_kredit WHERE tanggal_pencairan IS NOT NULL AND MONTH(tanggal_permohonan) = MONTH(CURRENT_DATE()) AND YEAR(tanggal_permohonan) = YEAR(CURRENT_DATE())');
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function batal_bulan_ini()
    {
        $this->db->query('SELECT * from tbl_permohon_kredit WHERE tanggal_batal IS NOT NULL AND MONTH(tanggal_permohonan) = MONTH(CURRENT_DATE()) AND YEAR(tanggal_permohonan) = YEAR(CURRENT_DATE())');
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function tolak_bulan_ini()
    {
        $this->db->query('SELECT * from tbl_permohon_kredit WHERE tanggal_tolak IS NOT NULL AND MONTH(tanggal_permohonan) = MONTH(CURRENT_DATE()) AND YEAR(tanggal_permohonan) = YEAR(CURRENT_DATE())');
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function pending_bulan_ini()
    {
        $this->db->query('SELECT * from tbl_permohon_kredit WHERE tanggal_pencairan IS NOT NULL AND tanggal_batal IS NOT NULL AND tanggal_tolak IS NOT NULL AND MONTH(tanggal_permohonan) = MONTH(CURRENT_DATE()) AND YEAR(tanggal_permohonan) = YEAR(CURRENT_DATE())');
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cek_btn_hapus()
    {

        $this->db->query('SELECT * FROM tbl_slik WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_nama_pemohon_where_id()
    {

        $query = "SELECT no_permohonan_kredit,nama_pemohon FROM tbl_permohon_kredit WHERE no_permohonan_kredit =:no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }

    public function update_lokasi_berkas()
    {

        $query = "UPDATE tbl_permohon_kredit SET 
        lokasi_berkas =:lokasi_berkas 
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function m_nik_ktp()
    {

        $query = "SELECT * FROM tbl_permohon_kredit WHERE no_ktp_pemohon =:no_ktp_pemohon ORDER BY id DESC";
        $this->db->query($query);
        $this->db->bind('no_ktp_pemohon', $_POST['no_ktp_pemohon']);
        return $this->db->single();
    }
}
