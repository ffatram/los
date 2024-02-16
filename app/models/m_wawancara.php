<?php

class m_wawancara
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function daftar_belum_wawancara()
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE kode_cabang =:kode_cabang AND tanggal_wawancara IS NULL AND  tanggal_tolak IS NULL AND tanggal_batal IS NULL AND tanggal_slik IS NOT NULL AND id_analis =:id_analis order by tanggal_permohonan ASC');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('id_analis', $_COOKIE['username']);
        return $this->db->resultSet();
    }

    public function jumlah_daftar_belum_wawancara()
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE kode_cabang =:kode_cabang AND tanggal_wawancara IS NULL AND  tanggal_tolak IS NULL AND tanggal_batal IS NULL AND tanggal_slik IS NOT NULL AND id_analis =:id_analis order by tanggal_permohonan ASC');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('id_analis', $_COOKIE['username']);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function daftar_pending_komite()
    {


        // $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu,B.status,B.catatan_pending
        // FROM tbl_permohon_kredit A
        // JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND (B.plafond <=:plafond OR B.plafond >:plafond) AND (B.status =:status1 OR B.status =:status2 OR B.status LIKE '%DIPENDING%')  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3 ) ");
        // $this->db->bind('status1', 'DIAJUKAN');
        // $this->db->bind('status2', 'KOMITE');
        // $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        // $this->db->bind('plafond', $_COOKIE['limit']);
        // $this->db->bind('komite_1', $_COOKIE['username']);
        // $this->db->bind('komite_2', $_COOKIE['username']);
        // $this->db->bind('komite_3', $_COOKIE['username']);
        // return $this->db->resultSet();


        $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tanggal_permohonan, B.plafond,B.jangka_waktu,B.status, A.kode_cabang,A.id_analis, B.catatan_pending
        FROM tbl_permohon_kredit A 
        JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang =:kode_cabang AND B.status LIKE '%DIPENDING%' AND A.id_analis = :id_analis ORDER BY A.tanggal_permohonan DESC");
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('id_analis', $_COOKIE['username']);
        return $this->db->resultSet();
    }


    public function get_opsi_upload_file()
    {

        $this->db->query('SELECT nama_bank FROM tbl_ref_bank');
        return $this->db->resultSet();
        // return $this->db->single();
    }


    public function daftar_pending_pencairan()
    {

        $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tanggal_wawancara, A.kode_cabang,A.id_analis,C.status_cair, C.plafond, C.jangka_waktu
        FROM tbl_permohon_kredit A 
        JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit JOIN tbl_keputusan_kredit C ON C.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang =:kode_cabang AND C.status_cair =:status_cair AND A.id_analis = :id_analis ORDER BY A.tanggal_permohonan DESC");
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('status_cair', "TIDAK");
        $this->db->bind('id_analis', $_COOKIE['username']);
        return $this->db->resultSet();
    }









    public function tolak_wawancara($id)
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_tolak = :tanggal_tolak
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('tanggal_tolak', date('Y-m-d H:i:s'));
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function update_tgl_wawancara()
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_wawancara = :tanggal_wawancara,
        lokasi_berkas = :lokasi_berkas
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->bind('tanggal_wawancara', $_POST['tanggal_wawancara']);
        $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);

        $this->db->execute();
        return $this->db->rowCount();
    }



    // daftar tolak ro
    public function daftar_tolak_wawancara()
    {
        $this->db->query('SELECT A.* 
        FROM tbl_permohon_kredit A 
        JOIN tbl_wawancara B 
        ON A.no_permohonan_kredit = B.no_permohonan_kredit 
        WHERE A.kode_cabang =:kode_cabang AND A.tanggal_tolak IS NOT NULL 
        AND A.id_analis =:id_analis AND B.status=:status  order by A.tanggal_tolak desc');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('id_analis', $_COOKIE['username']);
        $this->db->bind('status', "SETUJU TOLAK");
        return $this->db->resultSet();
    }




    public function batal_wawancara($id)
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_batal = :tanggal_batal
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('tanggal_batal', date('Y-m-d H:i:s'));
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }



    // daftar batal ro
    public function daftar_batal_wawancara()
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE kode_cabang =:kode_cabang AND tanggal_batal IS NOT NULL AND id_analis =:id_analis order by tanggal_batal desc ');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('id_analis', $_COOKIE['username']);
        return $this->db->resultSet();
    }




    // public function daftar_sudah_wawancara()
    // {

    //     $this->db->query('SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi,A.tanggal_tolak,A.tanggal_batal, B.plafond,B.jangka_waktu, B.status, A.tanggal_wawancara
    //     FROM tbl_permohon_kredit A
    //     JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.tanggal_wawancara IS NOT NULL AND(A.tanggal_tolak IS NULL AND A.tanggal_batal IS NULL) AND A.kode_cabang =:kode_cabang AND A.id_analis=:id_analis order by A.tanggal_wawancara desc');
    //     $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
    //     $this->db->bind('id_analis', $_COOKIE['username']);
    //     return $this->db->resultSet();
    // }

    public function get_data_tbl_cs_where_noreg()
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }


    public function cetak_hasil_wawancara()
    {

        $this->db->query('SELECT * FROM tbl_wawancara WHERE no_permohonan_kredit=:no_reg');

        $this->db->bind('no_reg', "022200001");
        return $this->db->resultSet();
    }


    public function get_tbl_wawancara_where_id()
    {

        $this->db->query('SELECT * FROM tbl_wawancara WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }

    public function data_debitur($id)
    {
        $this->db->query('SELECT * FROM tbl_wawancara WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $id);
        return $this->db->single();
    }


    public function detail_data_kredit()
    {


        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        header('Content-type: application/json');
        return json_encode($this->db->resultSet());
    }

    //fungsi untuk ambil data dari table permohonan kredit
    public function data_input_cs($no_permohonan_kredit)
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :a');
        $this->db->bind('a', $no_permohonan_kredit);
        return $this->db->single();
    }


    public function simpan_data_wawancara()
    {

        $query = "INSERT INTO tbl_wawancara
                (
                no_permohonan_kredit,
                karakter,
                pertimbangan_karakter,
                kemampuan,
                pertimbangan_kemampuan,
                kekayaan,
                pertimbangan_kekayaan,
                jaminan,
                pertimbangan_jaminan,
                kondisi,
                pertimbangan_kondisi,
                kode_tujuan_penggunaan_kredit,  
                tujuan_penggunaan_kredit,
                jaminan_utama,
                syarat_lainnya,
                dasar_pertimbangan_analis,
                plafond,
                jangka_waktu,
                suku_bunga,
                os_sebelumnya,
                penambahan,
                sistem_bunga,
                angsuran_perbulan,
                biaya_provisi_nominal,
                biaya_administrasi_nominal,
                premi_asuransi,
                tabungan,
                biaya_notaris,
                biaya_materai,
                biaya_apht,
                asuransi_kerugian,
                sistem_pembayaran,
                pejabat_ttd_sppk,
                penghasilan_pemohon_perbulan,
                penghasilan_pemohon_perbulan_ket,
                penghasilan_pemohon_tambahan_1,
                penghasilan_pemohon_tambahan_2,
                penghasilan_pemohon_tambahan_3,
                penghasilan_pemohon_tambahan_1_ket,
                penghasilan_pemohon_tambahan_2_ket,
                penghasilan_pemohon_tambahan_3_ket,
                penghasilan_pasangan_perbulan,
                penghasilan_pasangan_perbulan_ket,
                penghasilan_pasangan_tambahan_1,
                penghasilan_pasangan_tambahan_2,
                penghasilan_pasangan_tambahan_3,
                penghasilan_pasangan_tambahan_1_ket,
                penghasilan_pasangan_tambahan_2_ket,
                penghasilan_pasangan_tambahan_3_ket,
                biaya_hidup_sebulan,
                biaya_hidup_sebulan_ket,
                biaya_pendidikan,
                biaya_pendidikan_ket,
                biaya_pam_listrik_telepon,
                biaya_pam_listrik_telepon_ket,
                biaya_transport,
                biaya_transport_ket,
                biaya_lainnya,
                biaya_lainnya_ket,
                angsuran_kredit_sebelumnya,
                angsuran_kredit_sebelumnya_ket,
                angsuran_pemohon_lainnya_1,
                angsuran_pemohon_lainnya_2,
                angsuran_pemohon_lainnya_3,
                angsuran_pemohon_lainnya_4,
                angsuran_pemohon_lainnya_5,
                angsuran_pemohon_lainnya_6,
                angsuran_pemohon_lainnya_7,
                angsuran_pemohon_lainnya_1_ket,
                angsuran_pemohon_lainnya_2_ket,
                angsuran_pemohon_lainnya_3_ket,
                angsuran_pemohon_lainnya_4_ket,
                angsuran_pemohon_lainnya_5_ket,
                angsuran_pemohon_lainnya_6_ket,
                angsuran_pemohon_lainnya_7_ket,
                pemohon_lunasi_1,
                pemohon_lunasi_2,
                pemohon_lunasi_3,
                pemohon_lunasi_4,
                pemohon_lunasi_5,
                pemohon_lunasi_6,
                pemohon_lunasi_7,
                angsuran_pasangan_lainnya_1,
                angsuran_pasangan_lainnya_2,
                angsuran_pasangan_lainnya_3,
                angsuran_pasangan_lainnya_4,
                angsuran_pasangan_lainnya_5,
                angsuran_pasangan_lainnya_6,
                angsuran_pasangan_lainnya_7,
                angsuran_pasangan_lainnya_1_ket,
                angsuran_pasangan_lainnya_2_ket,
                angsuran_pasangan_lainnya_3_ket,
                angsuran_pasangan_lainnya_4_ket,
                angsuran_pasangan_lainnya_5_ket,
                angsuran_pasangan_lainnya_6_ket,
                angsuran_pasangan_lainnya_7_ket,
                pasangan_lunasi_1,
                pasangan_lunasi_2,
                pasangan_lunasi_3,
                pasangan_lunasi_4,
                pasangan_lunasi_5,
                pasangan_lunasi_6,
                pasangan_lunasi_7,
                saldo_tabungan_terakhir,
                saldo_tabungan_terakhir_ket,
                kemampuan_membayar_angsuran,
                persentase_angsuran,
                keterangan_persentase_angsuran,
                jaminan_1,
                jaminan_2,
                jaminan_3,
                jaminan_4,
                jaminan_5,
                jaminan_6,
                jaminan_7,
                jaminan_8,
                jaminan_9,
                jaminan_10,
                jaminan_11,
                jaminan_12,
                jaminan_13,
                jaminan_14,
                jaminan_15,
                jaminan_16,
                jaminan_17,
                jaminan_18,
                jaminan_19,
                jaminan_20,
                kode_golongan_debitur,
                kode_jenis_penggunaan,
                kode_sektor_ekonomi,
                kode_hubungan_debitur_dengan_bank,
                status,
                tolak_batal,
                aturan_jumlah_komite,
                tipe_komite,
                user_create,
                tgl_create
                ) 
                
                VALUES
                ( 
                :no_permohonan_kredit,
                :karakter,
                :pertimbangan_karakter,
                :kemampuan,
                :pertimbangan_kemampuan,
                :kekayaan,
                :pertimbangan_kekayaan,
                :jaminan,
                :pertimbangan_jaminan,
                :kondisi,
                :pertimbangan_kondisi,
                :kode_tujuan_penggunaan_kredit,
                :tujuan_penggunaan_kredit,
                :jaminan_utama,
                :syarat_lainnya,
                :dasar_pertimbangan_analis,
                :plafond,
                :jangka_waktu,
                :suku_bunga,
                :os_sebelumnya,
                :penambahan,
                :sistem_bunga,
                :angsuran_perbulan,
                :biaya_provisi_nominal,
                :biaya_administrasi_nominal,
                :premi_asuransi,
                :tabungan,
                :biaya_notaris,
                :biaya_materai,
                :biaya_apht,
                :asuransi_kerugian,
                :sistem_pembayaran,
                :pejabat_ttd_sppk,
                :penghasilan_pemohon_perbulan,
                :penghasilan_pemohon_perbulan_ket,
                :penghasilan_pemohon_tambahan_1,
                :penghasilan_pemohon_tambahan_2,
                :penghasilan_pemohon_tambahan_3,
                :penghasilan_pemohon_tambahan_1_ket,
                :penghasilan_pemohon_tambahan_2_ket,
                :penghasilan_pemohon_tambahan_3_ket,
                :penghasilan_pasangan_perbulan,
                :penghasilan_pasangan_perbulan_ket,
                :penghasilan_pasangan_tambahan_1,
                :penghasilan_pasangan_tambahan_2,
                :penghasilan_pasangan_tambahan_3,
                :penghasilan_pasangan_tambahan_1_ket,
                :penghasilan_pasangan_tambahan_2_ket,
                :penghasilan_pasangan_tambahan_3_ket,
                :biaya_hidup_sebulan,
                :biaya_hidup_sebulan_ket,
                :biaya_pendidikan,
                :biaya_pendidikan_ket,
                :biaya_pam_listrik_telepon,
                :biaya_pam_listrik_telepon_ket,
                :biaya_transport,
                :biaya_transport_ket,
                :biaya_lainnya,
                :biaya_lainnya_ket,
                :angsuran_kredit_sebelumnya,
                :angsuran_kredit_sebelumnya_ket,
                :angsuran_pemohon_lainnya_1,
                :angsuran_pemohon_lainnya_2,
                :angsuran_pemohon_lainnya_3,
                :angsuran_pemohon_lainnya_4,
                :angsuran_pemohon_lainnya_5,
                :angsuran_pemohon_lainnya_6,
                :angsuran_pemohon_lainnya_7,
                :angsuran_pemohon_lainnya_1_ket,
                :angsuran_pemohon_lainnya_2_ket,
                :angsuran_pemohon_lainnya_3_ket,
                :angsuran_pemohon_lainnya_4_ket,
                :angsuran_pemohon_lainnya_5_ket,
                :angsuran_pemohon_lainnya_6_ket,
                :angsuran_pemohon_lainnya_7_ket,
                :pemohon_lunasi_1,
                :pemohon_lunasi_2,
                :pemohon_lunasi_3,
                :pemohon_lunasi_4,
                :pemohon_lunasi_5,
                :pemohon_lunasi_6,
                :pemohon_lunasi_7,
                :angsuran_pasangan_lainnya_1,
                :angsuran_pasangan_lainnya_2,
                :angsuran_pasangan_lainnya_3,
                :angsuran_pasangan_lainnya_4,
                :angsuran_pasangan_lainnya_5,
                :angsuran_pasangan_lainnya_6,
                :angsuran_pasangan_lainnya_7,
                :angsuran_pasangan_lainnya_1_ket,
                :angsuran_pasangan_lainnya_2_ket,
                :angsuran_pasangan_lainnya_3_ket,
                :angsuran_pasangan_lainnya_4_ket,
                :angsuran_pasangan_lainnya_5_ket,
                :angsuran_pasangan_lainnya_6_ket,
                :angsuran_pasangan_lainnya_7_ket,
                :pasangan_lunasi_1,
                :pasangan_lunasi_2,
                :pasangan_lunasi_3,
                :pasangan_lunasi_4,
                :pasangan_lunasi_5,
                :pasangan_lunasi_6,
                :pasangan_lunasi_7,
                :saldo_tabungan_terakhir,
                :saldo_tabungan_terakhir_ket,
                :kemampuan_membayar_angsuran,
                :persentase_angsuran,
                :keterangan_persentase_angsuran, 
                :jaminan_1,
                :jaminan_2,
                :jaminan_3,
                :jaminan_4,
                :jaminan_5,
                :jaminan_6,
                :jaminan_7,
                :jaminan_8,
                :jaminan_9,
                :jaminan_10,
                :jaminan_11,
                :jaminan_12,
                :jaminan_13,
                :jaminan_14,
                :jaminan_15,
                :jaminan_16,
                :jaminan_17,
                :jaminan_18,
                :jaminan_19,
                :jaminan_20,
                :kode_golongan_debitur,
                :kode_jenis_penggunaan,
                :kode_sektor_ekonomi,
                :kode_hubungan_debitur_dengan_bank,
                :status,
                :tolak_batal,
                :aturan_jumlah_komite,
                :tipe_komite,
                :user_create,
                :tgl_create
                )";


        $this->db->query($query);

        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('karakter',  $_POST['karakter']);
        $this->db->bind('pertimbangan_karakter',  $_POST['pertimbangan_karakter']);
        $this->db->bind('kemampuan',  $_POST['kemampuan']);
        $this->db->bind('pertimbangan_kemampuan',  $_POST['pertimbangan_kemampuan']);
        $this->db->bind('kekayaan',  $_POST['kekayaan']);
        $this->db->bind('pertimbangan_kekayaan',  $_POST['pertimbangan_kekayaan']);
        $this->db->bind('jaminan',  $_POST['jaminan']);
        $this->db->bind('pertimbangan_jaminan',  $_POST['pertimbangan_jaminan']);
        $this->db->bind('kondisi',  $_POST['kondisi']);
        $this->db->bind('pertimbangan_kondisi',  $_POST['pertimbangan_kondisi']);
        $this->db->bind('kode_tujuan_penggunaan_kredit',  $_POST['kode_tujuan_penggunaan_kredit']);

        $this->db->bind('tujuan_penggunaan_kredit',  $_POST['tujuan_penggunaan_kredit']);
        $this->db->bind('jaminan_utama',  $_POST['jaminan_utama']);
        $this->db->bind('syarat_lainnya',  $_POST['syarat_lainnya']);
        $this->db->bind('dasar_pertimbangan_analis',  $_POST['dasar_pertimbangan_analis']);
        $this->db->bind('plafond',  $_POST['plafond']);
        $this->db->bind('jangka_waktu',  $_POST['jangka_waktu']);
        $this->db->bind('os_sebelumnya',  $_POST['os_sebelumnya']);
        $this->db->bind('penambahan',  $_POST['penambahan']);
        $this->db->bind('suku_bunga',  $_POST['suku_bunga']);
        $this->db->bind('sistem_bunga',  $_POST['sistem_bunga']);
        $this->db->bind('angsuran_perbulan',  $_POST['angsuran_perbulan']);
        $this->db->bind('biaya_provisi_nominal',  $_POST['biaya_provisi_nominal']);
        $this->db->bind('biaya_administrasi_nominal',  $_POST['biaya_administrasi_nominal']);
        $this->db->bind('premi_asuransi',  $_POST['premi_asuransi']);
        $this->db->bind('tabungan',  $_POST['tabungan']);
        $this->db->bind('biaya_notaris',  $_POST['biaya_notaris']);
        $this->db->bind('biaya_materai',  $_POST['biaya_materai']);
        $this->db->bind('biaya_apht',  $_POST['biaya_apht']);
        $this->db->bind('asuransi_kerugian',  $_POST['asuransi_kerugian']);
        $this->db->bind('sistem_pembayaran',  $_POST['sistem_pembayaran']);
        $this->db->bind('pejabat_ttd_sppk',  $_POST['pejabat_ttd_sppk']);
        $this->db->bind('penghasilan_pemohon_perbulan',  $_POST['penghasilan_pemohon_perbulan']);
        $this->db->bind('penghasilan_pemohon_perbulan_ket',  $_POST['penghasilan_pemohon_perbulan_ket']);
        for ($a = 1; $a <= 3; $a++) {
            $this->db->bind('penghasilan_pemohon_tambahan_' . $a,  $_POST['penghasilan_pemohon_tambahan_' . $a]);
            $this->db->bind('penghasilan_pemohon_tambahan_' . $a . '_ket',  $_POST['penghasilan_pemohon_tambahan_' . $a . '_ket']);
        }
        $this->db->bind('penghasilan_pasangan_perbulan',  $_POST['penghasilan_pasangan_perbulan']);
        $this->db->bind('penghasilan_pasangan_perbulan_ket',  $_POST['penghasilan_pasangan_perbulan_ket']);

        for ($a = 1; $a <= 3; $a++) {
            $this->db->bind('penghasilan_pasangan_tambahan_' . $a,  $_POST['penghasilan_pasangan_tambahan_' . $a]);
            $this->db->bind('penghasilan_pasangan_tambahan_' . $a . '_ket',  $_POST['penghasilan_pasangan_tambahan_' . $a . '_ket']);
        }

        $this->db->bind('biaya_hidup_sebulan',  $_POST['biaya_hidup_sebulan']);
        $this->db->bind('biaya_hidup_sebulan_ket',  $_POST['biaya_hidup_sebulan_ket']);
        $this->db->bind('biaya_pendidikan',  $_POST['biaya_pendidikan']);
        $this->db->bind('biaya_pendidikan_ket',  $_POST['biaya_pendidikan_ket']);
        $this->db->bind('biaya_pam_listrik_telepon',  $_POST['biaya_pam_listrik_telepon']);
        $this->db->bind('biaya_pam_listrik_telepon_ket',  $_POST['biaya_pam_listrik_telepon_ket']);
        $this->db->bind('biaya_transport',  $_POST['biaya_transport']);
        $this->db->bind('biaya_transport_ket',  $_POST['biaya_transport_ket']);
        $this->db->bind('biaya_lainnya',  $_POST['biaya_lainnya']);
        $this->db->bind('biaya_lainnya_ket',  $_POST['biaya_lainnya_ket']);
        $this->db->bind('angsuran_kredit_sebelumnya',  $_POST['angsuran_kredit_sebelumnya']);
        $this->db->bind('angsuran_kredit_sebelumnya_ket',  $_POST['angsuran_kredit_sebelumnya_ket']);

        for ($a = 1; $a <= 7; $a++) {
            $this->db->bind('angsuran_pemohon_lainnya_' . $a,  $_POST['angsuran_pemohon_lainnya_' . $a]);
            $this->db->bind('angsuran_pemohon_lainnya_' . $a . '_ket',  $_POST['angsuran_pemohon_lainnya_' . $a . '_ket']);
            $this->db->bind('pemohon_lunasi_' . $a,  $_POST['pemohon_lunasi_' . $a]);

            $this->db->bind('angsuran_pasangan_lainnya_' . $a,  $_POST['angsuran_pasangan_lainnya_' . $a]);
            $this->db->bind('angsuran_pasangan_lainnya_' . $a . '_ket',  $_POST['angsuran_pasangan_lainnya_' . $a . '_ket']);
            $this->db->bind('pasangan_lunasi_' . $a,  $_POST['pasangan_lunasi_' . $a]);
        }
        $this->db->bind('saldo_tabungan_terakhir',  $_POST['saldo_tabungan_terakhir']);
        $this->db->bind('saldo_tabungan_terakhir_ket',  $_POST['saldo_tabungan_terakhir_ket']);
        $this->db->bind('kemampuan_membayar_angsuran',  $_POST['kemampuan_membayar_angsuran']);
        $this->db->bind('persentase_angsuran',  $_POST['persentase_angsuran']);
        $this->db->bind('keterangan_persentase_angsuran',  $_POST['keterangan_persentase_angsuran']);

        for ($a = 1; $a <= 20; $a++) {
            $this->db->bind('jaminan_' . $a,  $_POST['jaminan_' . $a]);
        }

        $this->db->bind('kode_golongan_debitur',  $_POST['kode_golongan_debitur']);
        $this->db->bind('kode_jenis_penggunaan',  $_POST['kode_jenis_penggunaan']);
        $this->db->bind('kode_sektor_ekonomi',  $_POST['kode_sektor_ekonomi']);
        $this->db->bind('kode_hubungan_debitur_dengan_bank',  $_POST['kode_hubungan_debitur_dengan_bank']);

        $this->db->bind('status', $_POST['status']);
        $this->db->bind('tolak_batal', $_POST['tolak_batal']);
        $this->db->bind('tipe_komite', $_POST['tipe_komite']);
        $this->db->bind('aturan_jumlah_komite', $_POST['aturan_jumlah_komite']);

        $this->db->bind('user_create', $_POST['user_create']);
        $this->db->bind('tgl_create', $_POST['tgl_create']);
        $this->db->execute();
        return $this->db->rowCount();
    }




    public function update_tbl_wawancara()
    {


        $query = "UPDATE tbl_wawancara SET 
        no_permohonan_kredit=:no_permohonan_kredit,
        karakter=:karakter,
        pertimbangan_karakter=:pertimbangan_karakter,
        kemampuan=:kemampuan,
        pertimbangan_kemampuan=:pertimbangan_kemampuan,
        kekayaan=:kekayaan,
        pertimbangan_kekayaan=:pertimbangan_kekayaan,
        jaminan=:jaminan,
        pertimbangan_jaminan=:pertimbangan_jaminan,
        kondisi=:kondisi,
        pertimbangan_kondisi=:pertimbangan_kondisi,
        tujuan_penggunaan_kredit=:tujuan_penggunaan_kredit,
        kode_tujuan_penggunaan_kredit = :kode_tujuan_penggunaan_kredit,
        jaminan_utama=:jaminan_utama,
        syarat_lainnya=:syarat_lainnya,
        dasar_pertimbangan_analis=:dasar_pertimbangan_analis,
        plafond=:plafond,
        os_sebelumnya = :os_sebelumnya,
        penambahan= :penambahan,
        jangka_waktu=:jangka_waktu,
        suku_bunga=:suku_bunga,
        sistem_bunga=:sistem_bunga,
        angsuran_perbulan=:angsuran_perbulan,
        biaya_provisi_nominal=:biaya_provisi_nominal,
        biaya_administrasi_nominal=:biaya_administrasi_nominal,
        premi_asuransi=:premi_asuransi,
        tabungan=:tabungan,
        biaya_notaris=:biaya_notaris,
        biaya_materai=:biaya_materai,
        biaya_apht=:biaya_apht,
        asuransi_kerugian=:asuransi_kerugian,
        sistem_pembayaran=:sistem_pembayaran,
        pejabat_ttd_sppk=:pejabat_ttd_sppk,
        penghasilan_pemohon_perbulan=:penghasilan_pemohon_perbulan,
        penghasilan_pemohon_perbulan_ket=:penghasilan_pemohon_perbulan_ket,
        penghasilan_pemohon_tambahan_1=:penghasilan_pemohon_tambahan_1,
        penghasilan_pemohon_tambahan_2=:penghasilan_pemohon_tambahan_2,
        penghasilan_pemohon_tambahan_3=:penghasilan_pemohon_tambahan_3,
        penghasilan_pemohon_tambahan_1_ket=:penghasilan_pemohon_tambahan_1_ket,
        penghasilan_pemohon_tambahan_2_ket=:penghasilan_pemohon_tambahan_2_ket,
        penghasilan_pemohon_tambahan_3_ket=:penghasilan_pemohon_tambahan_3_ket,
        penghasilan_pasangan_perbulan=:penghasilan_pasangan_perbulan,
        penghasilan_pasangan_perbulan_ket=:penghasilan_pasangan_perbulan_ket,
        penghasilan_pasangan_tambahan_1=:penghasilan_pasangan_tambahan_1,
        penghasilan_pasangan_tambahan_2=:penghasilan_pasangan_tambahan_2,
        penghasilan_pasangan_tambahan_3=:penghasilan_pasangan_tambahan_3,
        penghasilan_pasangan_tambahan_1_ket=:penghasilan_pasangan_tambahan_1_ket,
        penghasilan_pasangan_tambahan_2_ket=:penghasilan_pasangan_tambahan_2_ket,
        penghasilan_pasangan_tambahan_3_ket=:penghasilan_pasangan_tambahan_3_ket,
        biaya_hidup_sebulan=:biaya_hidup_sebulan,
        biaya_hidup_sebulan_ket=:biaya_hidup_sebulan_ket,
        biaya_pendidikan=:biaya_pendidikan,
        biaya_pendidikan_ket=:biaya_pendidikan_ket,
        biaya_pam_listrik_telepon=:biaya_pam_listrik_telepon,
        biaya_pam_listrik_telepon_ket=:biaya_pam_listrik_telepon_ket,
        biaya_transport=:biaya_transport,
        biaya_transport_ket=:biaya_transport_ket,
        biaya_lainnya=:biaya_lainnya,
        biaya_lainnya_ket=:biaya_lainnya_ket,
        angsuran_kredit_sebelumnya=:angsuran_kredit_sebelumnya,
        angsuran_kredit_sebelumnya_ket=:angsuran_kredit_sebelumnya_ket,
        angsuran_pemohon_lainnya_1=:angsuran_pemohon_lainnya_1,
        angsuran_pemohon_lainnya_2=:angsuran_pemohon_lainnya_2,
        angsuran_pemohon_lainnya_3=:angsuran_pemohon_lainnya_3,
        angsuran_pemohon_lainnya_4=:angsuran_pemohon_lainnya_4,
        angsuran_pemohon_lainnya_5=:angsuran_pemohon_lainnya_5,
        angsuran_pemohon_lainnya_6=:angsuran_pemohon_lainnya_6,
        angsuran_pemohon_lainnya_7=:angsuran_pemohon_lainnya_7,
        angsuran_pemohon_lainnya_1_ket=:angsuran_pemohon_lainnya_1_ket,
        angsuran_pemohon_lainnya_2_ket=:angsuran_pemohon_lainnya_2_ket,
        angsuran_pemohon_lainnya_3_ket=:angsuran_pemohon_lainnya_3_ket,
        angsuran_pemohon_lainnya_4_ket=:angsuran_pemohon_lainnya_4_ket,
        angsuran_pemohon_lainnya_5_ket=:angsuran_pemohon_lainnya_5_ket,
        angsuran_pemohon_lainnya_6_ket=:angsuran_pemohon_lainnya_6_ket,
        angsuran_pemohon_lainnya_7_ket=:angsuran_pemohon_lainnya_7_ket,
        pemohon_lunasi_1=:pemohon_lunasi_1,
        pemohon_lunasi_2=:pemohon_lunasi_2,
        pemohon_lunasi_3=:pemohon_lunasi_3,
        pemohon_lunasi_4=:pemohon_lunasi_4,
        pemohon_lunasi_5=:pemohon_lunasi_5,
        pemohon_lunasi_6=:pemohon_lunasi_6,
        pemohon_lunasi_7=:pemohon_lunasi_7,
        angsuran_pasangan_lainnya_1=:angsuran_pasangan_lainnya_1,
        angsuran_pasangan_lainnya_2=:angsuran_pasangan_lainnya_2,
        angsuran_pasangan_lainnya_3=:angsuran_pasangan_lainnya_3,
        angsuran_pasangan_lainnya_4=:angsuran_pasangan_lainnya_4,
        angsuran_pasangan_lainnya_5=:angsuran_pasangan_lainnya_5,
        angsuran_pasangan_lainnya_6=:angsuran_pasangan_lainnya_6,
        angsuran_pasangan_lainnya_7=:angsuran_pasangan_lainnya_7,
        angsuran_pasangan_lainnya_1_ket=:angsuran_pasangan_lainnya_1_ket,
        angsuran_pasangan_lainnya_2_ket=:angsuran_pasangan_lainnya_2_ket,
        angsuran_pasangan_lainnya_3_ket=:angsuran_pasangan_lainnya_3_ket,
        angsuran_pasangan_lainnya_4_ket=:angsuran_pasangan_lainnya_4_ket,
        angsuran_pasangan_lainnya_5_ket=:angsuran_pasangan_lainnya_5_ket,
        angsuran_pasangan_lainnya_6_ket=:angsuran_pasangan_lainnya_6_ket,
        angsuran_pasangan_lainnya_7_ket=:angsuran_pasangan_lainnya_7_ket,
        pasangan_lunasi_1=:pasangan_lunasi_1,
        pasangan_lunasi_2=:pasangan_lunasi_2,
        pasangan_lunasi_3=:pasangan_lunasi_3,
        pasangan_lunasi_4=:pasangan_lunasi_4,
        pasangan_lunasi_5=:pasangan_lunasi_5,
        pasangan_lunasi_6=:pasangan_lunasi_6,
        pasangan_lunasi_7=:pasangan_lunasi_7,
        saldo_tabungan_terakhir=:saldo_tabungan_terakhir,
        saldo_tabungan_terakhir_ket=:saldo_tabungan_terakhir_ket,
        kemampuan_membayar_angsuran=:kemampuan_membayar_angsuran,
        persentase_angsuran=:persentase_angsuran,
        keterangan_persentase_angsuran =:keterangan_persentase_angsuran, 
        jaminan_1=:jaminan_1,
        jaminan_2=:jaminan_2,
        jaminan_3=:jaminan_3,
        jaminan_4=:jaminan_4,
        jaminan_5=:jaminan_5,
        jaminan_6=:jaminan_6,
        jaminan_7=:jaminan_7,
        jaminan_8=:jaminan_8,
        jaminan_9=:jaminan_9,
        jaminan_10=:jaminan_10,
        jaminan_11=:jaminan_11,
        jaminan_12=:jaminan_12,
        jaminan_13=:jaminan_13,
        jaminan_14=:jaminan_14,
        jaminan_15=:jaminan_15,
        jaminan_16=:jaminan_16,
        jaminan_17=:jaminan_17,
        jaminan_18=:jaminan_18,
        jaminan_19=:jaminan_19,
        jaminan_20=:jaminan_20,
        kode_golongan_debitur=:kode_golongan_debitur,
        kode_jenis_penggunaan=:kode_jenis_penggunaan,
        kode_sektor_ekonomi=:kode_sektor_ekonomi,
        kode_hubungan_debitur_dengan_bank=:kode_hubungan_debitur_dengan_bank,
        status=:status,
        tolak_batal=:tolak_batal,
        tipe_komite=:tipe_komite,
        aturan_jumlah_komite=:aturan_jumlah_komite,
        user_edit=:user_edit,
        tgl_edit=:tgl_edit
        WHERE no_permohonan_kredit= :no_permohonan_kredit
        ";


        $this->db->query($query);

        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('karakter',  $_POST['karakter']);
        $this->db->bind('pertimbangan_karakter',  $_POST['pertimbangan_karakter']);
        $this->db->bind('kemampuan',  $_POST['kemampuan']);
        $this->db->bind('pertimbangan_kemampuan',  $_POST['pertimbangan_kemampuan']);
        $this->db->bind('kekayaan',  $_POST['kekayaan']);
        $this->db->bind('pertimbangan_kekayaan',  $_POST['pertimbangan_kekayaan']);
        $this->db->bind('jaminan',  $_POST['jaminan']);
        $this->db->bind('pertimbangan_jaminan',  $_POST['pertimbangan_jaminan']);
        $this->db->bind('kondisi',  $_POST['kondisi']);
        $this->db->bind('pertimbangan_kondisi',  $_POST['pertimbangan_kondisi']);
        $this->db->bind('tujuan_penggunaan_kredit',  $_POST['tujuan_penggunaan_kredit']);
        $this->db->bind('kode_tujuan_penggunaan_kredit',  $_POST['kode_tujuan_penggunaan_kredit']);
        $this->db->bind('jaminan_utama',  $_POST['jaminan_utama']);
        $this->db->bind('syarat_lainnya',  $_POST['syarat_lainnya']);
        $this->db->bind('dasar_pertimbangan_analis',  $_POST['dasar_pertimbangan_analis']);
        $this->db->bind('plafond',  $_POST['plafond']);
        $this->db->bind('os_sebelumnya',  $_POST['os_sebelumnya']);
        $this->db->bind('penambahan',  $_POST['penambahan']);
        $this->db->bind('jangka_waktu',  $_POST['jangka_waktu']);
        $this->db->bind('suku_bunga',  $_POST['suku_bunga']);
        $this->db->bind('sistem_bunga',  $_POST['sistem_bunga']);
        $this->db->bind('angsuran_perbulan',  $_POST['angsuran_perbulan']);

        $this->db->bind('biaya_provisi_nominal',  $_POST['biaya_provisi_nominal']);

        $this->db->bind('biaya_administrasi_nominal',  $_POST['biaya_administrasi_nominal']);
        $this->db->bind('premi_asuransi',  $_POST['premi_asuransi']);
        $this->db->bind('tabungan',  $_POST['tabungan']);
        $this->db->bind('biaya_notaris',  $_POST['biaya_notaris']);
        $this->db->bind('biaya_materai',  $_POST['biaya_materai']);
        $this->db->bind('biaya_apht',  $_POST['biaya_apht']);
        $this->db->bind('asuransi_kerugian',  $_POST['asuransi_kerugian']);
        $this->db->bind('sistem_pembayaran',  $_POST['sistem_pembayaran']);
        $this->db->bind('pejabat_ttd_sppk',  $_POST['pejabat_ttd_sppk']);
        $this->db->bind('penghasilan_pemohon_perbulan',  $_POST['penghasilan_pemohon_perbulan']);
        $this->db->bind('penghasilan_pemohon_perbulan_ket',  $_POST['penghasilan_pemohon_perbulan_ket']);
        for ($a = 1; $a <= 3; $a++) {
            $this->db->bind('penghasilan_pemohon_tambahan_' . $a,  $_POST['penghasilan_pemohon_tambahan_' . $a]);
            $this->db->bind('penghasilan_pemohon_tambahan_' . $a . '_ket',  $_POST['penghasilan_pemohon_tambahan_' . $a . '_ket']);
        }
        $this->db->bind('penghasilan_pasangan_perbulan',  $_POST['penghasilan_pasangan_perbulan']);
        $this->db->bind('penghasilan_pasangan_perbulan_ket',  $_POST['penghasilan_pasangan_perbulan_ket']);

        for ($a = 1; $a <= 3; $a++) {
            $this->db->bind('penghasilan_pasangan_tambahan_' . $a,  $_POST['penghasilan_pasangan_tambahan_' . $a]);
            $this->db->bind('penghasilan_pasangan_tambahan_' . $a . '_ket',  $_POST['penghasilan_pasangan_tambahan_' . $a . '_ket']);
        }

        $this->db->bind('biaya_hidup_sebulan',  $_POST['biaya_hidup_sebulan']);
        $this->db->bind('biaya_hidup_sebulan_ket',  $_POST['biaya_hidup_sebulan_ket']);
        $this->db->bind('biaya_pendidikan',  $_POST['biaya_pendidikan']);
        $this->db->bind('biaya_pendidikan_ket',  $_POST['biaya_pendidikan_ket']);
        $this->db->bind('biaya_pam_listrik_telepon',  $_POST['biaya_pam_listrik_telepon']);
        $this->db->bind('biaya_pam_listrik_telepon_ket',  $_POST['biaya_pam_listrik_telepon_ket']);
        $this->db->bind('biaya_transport',  $_POST['biaya_transport']);
        $this->db->bind('biaya_transport_ket',  $_POST['biaya_transport_ket']);
        $this->db->bind('biaya_lainnya',  $_POST['biaya_lainnya']);
        $this->db->bind('biaya_lainnya_ket',  $_POST['biaya_lainnya_ket']);
        $this->db->bind('angsuran_kredit_sebelumnya',  $_POST['angsuran_kredit_sebelumnya']);
        $this->db->bind('angsuran_kredit_sebelumnya_ket',  $_POST['angsuran_kredit_sebelumnya_ket']);

        for ($a = 1; $a <= 7; $a++) {
            $this->db->bind('angsuran_pemohon_lainnya_' . $a,  $_POST['angsuran_pemohon_lainnya_' . $a]);
            $this->db->bind('angsuran_pemohon_lainnya_' . $a . '_ket',  $_POST['angsuran_pemohon_lainnya_' . $a . '_ket']);
            $this->db->bind('pemohon_lunasi_' . $a,  $_POST['pemohon_lunasi_' . $a]);

            $this->db->bind('angsuran_pasangan_lainnya_' . $a,  $_POST['angsuran_pasangan_lainnya_' . $a]);
            $this->db->bind('angsuran_pasangan_lainnya_' . $a . '_ket',  $_POST['angsuran_pasangan_lainnya_' . $a . '_ket']);
            $this->db->bind('pasangan_lunasi_' . $a,  $_POST['pasangan_lunasi_' . $a]);
        }
        $this->db->bind('saldo_tabungan_terakhir',  $_POST['saldo_tabungan_terakhir']);
        $this->db->bind('saldo_tabungan_terakhir_ket',  $_POST['saldo_tabungan_terakhir_ket']);
        $this->db->bind('kemampuan_membayar_angsuran',  $_POST['kemampuan_membayar_angsuran']);
        $this->db->bind('persentase_angsuran',  $_POST['persentase_angsuran']);
        $this->db->bind('keterangan_persentase_angsuran',  $_POST['keterangan_persentase_angsuran']);

        for ($a = 1; $a <= 20; $a++) {
            $this->db->bind('jaminan_' . $a,  $_POST['jaminan_' . $a]);
        }

        $this->db->bind('kode_golongan_debitur',  $_POST['kode_golongan_debitur']);
        $this->db->bind('kode_jenis_penggunaan',  $_POST['kode_jenis_penggunaan']);
        $this->db->bind('kode_sektor_ekonomi',  $_POST['kode_sektor_ekonomi']);
        $this->db->bind('kode_hubungan_debitur_dengan_bank',  $_POST['kode_hubungan_debitur_dengan_bank']);

        $this->db->bind('status', $_POST['status']);
        $this->db->bind('tolak_batal', $_POST['tolak_batal']);

        $this->db->bind('tipe_komite', $_POST['tipe_komite']);
        $this->db->bind('aturan_jumlah_komite', $_POST['aturan_jumlah_komite']);

        $this->db->bind('user_edit', $_POST['user_edit']);
        $this->db->bind('tgl_edit', $_POST['tgl_edit']);
        $this->db->execute();
        return $this->db->rowCount();
    }




    public function hapus_data_wawancara($id)
    {
        $query = "DELETE FROM tbl_wawancara WHERE no_permohonan_kredit= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_tbl_permohonan_kredit()
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_wawancara = :tanggal_wawancara,
        lokasi_berkas = :lokasi_berkas
       
       
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->bind('tanggal_wawancara', $_POST['tanggal_wawancara']);
        $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);


        $this->db->execute();
        return $this->db->rowCount();
    }


    public function update_tbl_permohonan_kredit_tanggal_tolak()
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_wawancara = :tanggal_wawancara,
        lokasi_berkas = :lokasi_berkas
       
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->bind('tanggal_wawancara', $_POST['tanggal_wawancara']);
        $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);

        $this->db->execute();
        return $this->db->rowCount();
    }


    public function update_tbl_permohonan_kredit_tanggal_batal()
    {

        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_wawancara = :tanggal_wawancara,
        lokasi_berkas = :lokasi_berkas
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->bind('tanggal_wawancara', $_POST['tanggal_wawancara']);
        $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function btn_ajukan_komite($id)
    {

        $data = explode('|', $id);
        $nopeg = $data[0];


        $query = "UPDATE tbl_wawancara SET 
        status= :status 
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $nopeg);
        $this->db->bind('status', $_POST['status']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function btn_ajukan_komite_pusat($id)
    {
        $data = explode('|', $id);
        $nopeg = $data[0];





        $query = "UPDATE tbl_wawancara SET 
        status= :status,
        aturan_jumlah_komite =:aturan_jumlah_komite
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $nopeg);
        $this->db->bind('status', $_POST['status']);
        $this->db->bind('aturan_jumlah_komite', '3');
        $this->db->execute();
        return $this->db->rowCount();
    }






    public function btn_ajukan_pusat($id)
    {

        $query = "UPDATE tbl_wawancara SET 
        tipe_komite= :tipe_komite
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->bind('tipe_komite', 'DIAJUKAN PUSAT');
        $this->db->execute();
        return $this->db->rowCount();
    }



    // daftar sudah wawancara ambil data ketika pengajuan
    public function data_sudah_wawancara_no_permohonan_kredit($no_permohonan_kredit)
    {
        $this->db->query('SELECT * FROM tbl_wawancara WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        return $this->db->single();
    }

    public function detail_wawancara()
    {


        $this->db->query('SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, B.*
        FROM tbl_permohon_kredit A
        JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE B.no_permohonan_kredit =:no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }

    public function get_data_wawancara()
    {


        $this->db->query('SELECT plafond FROM tbl_wawancara WHERE no_permohonan_kredit =:no_permohonan_kredit');

        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }

    public function aktifkan_wawancara_tolak($id)
    {


        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_tolak = :tanggal_tolak,
        tanggal_komite = :tanggal_komite,
        tanggal_batal = :tanggal_batal,
        lokasi_berkas = :lokasi_berkas
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('tanggal_tolak', null);
        $this->db->bind('tanggal_komite', null);
        $this->db->bind('tanggal_batal', null);
        $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapus_record_tbl_komite($id)
    {

        $query = "DELETE FROM tbl_komite WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function aktifkan_wawancara_tolak_tbl_wawancara($id)
    {

        $query = "UPDATE tbl_wawancara SET 
        status = :status,
        tolak_Batal = :tolak_Batal
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->bind('status', "BELUM DIAJUKAN");
        $this->db->bind('tolak_Batal', "");
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function aktifkan_wawancara_batal($id)
    {

        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_tolak = :tanggal_tolak,
        tanggal_komite = :tanggal_komite,
        tanggal_batal = :tanggal_batal,
        lokasi_berkas = :lokasi_berkas
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('tanggal_tolak', null);
        $this->db->bind('tanggal_komite', null);
        $this->db->bind('tanggal_batal', null);
        $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }




    public function getCatatanPending()
    {

        $this->db->query('SELECT no_permohonan_kredit, catatan_pending FROM tbl_wawancara WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }

    // fungsi untuk halaman dafatr sudah analisa tombol detail komite

    public function cek_tgl_tolak()
    {
        $this->db->query('SELECT no_permohonan_kredit,tanggal_tolak FROM tbl_permohon_kredit WHERE no_permohonan_kredit = :no_permohonan_kredit AND tanggal_tolak !=:tanggal_tolak ');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->bind('tanggal_tolak', '');
        $this->db->execute();
        return $this->db->rowCount();
    }


    // btn_ajukan kembali 

    public function hapus_tbl_komite_where_id()
    {
        $query = "DELETE FROM tbl_komite WHERE no_permohonan_kredit= :id";
        $this->db->query($query);
        $this->db->bind('id', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapus_tbl_keputusan_kredit_where_id()
    {
        $query = "DELETE FROM tbl_keputusan_kredit WHERE no_permohonan_kredit= :id";
        $this->db->query($query);
        $this->db->bind('id', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // kosongkan tbl_komite kosongkan field nama user komite 
    public function update_wawancara()
    {

        $query = "UPDATE tbl_wawancara SET 
        komite_1 = :k1,
        komite_2 = :k2,
        komite_3 = :k3,
        status   = :k4 ,
        tipe_komite = :k5

        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('k1', "");
        $this->db->bind('k2', "");
        $this->db->bind('k3', "");
        $this->db->bind('k4', "BELUM DIAJUKAN");
        $this->db->bind('k5', $_POST['tipe_komite']);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // kosongkan tgl_komite tgl_tolak tbl_permohonan_kredit
    public function update_tbl_permohonan()
    {

        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_komite = :k1,
        tanggal_tolak = :k2,
        lokasi_berkas = :lokasi_berkas
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('k1', null);
        $this->db->bind('k2', null);
        $this->db->bind('lokasi_berkas', 'KOMITE');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function btn_lanjutkan()
    {
        $query = "UPDATE tbl_keputusan_kredit SET 
        status_cair = :k1
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('k1', "YA");
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function kode_tujuan_penggunaan_kredit()
    {

        $this->db->query('SELECT * FROM tbl_ref_tujuan_penggunaan_kredit');
        return $this->db->resultSet();
    }


    public function cek_status_debitur()
    {
        $this->db->query('SELECT no_permohonan_kredit, status FROM tbl_wawancara WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }


    public function update_status_wawancara()
    {

        $query = "UPDATE tbl_wawancara SET 
        status = :status,
        tipe_komite = :tipe_komite
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('status', "BELUM DIAJUKAN");
        $this->db->bind('tipe_komite', $_POST['tipe_komite']);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function cek_tipe_komite()
    {

        $this->db->query('SELECT no_permohonan_kredit,tipe_komite FROM tbl_wawancara where no_permohonan_kredit =:no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }


    public function cek_tbl_wawancara()
    {
        $this->db->query('SELECT no_permohonan_kredit,tipe_komite FROM tbl_wawancara where no_permohonan_kredit =:no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
