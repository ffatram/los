<?php
class m_pencairan
{


    public function __construct()
    {
        date_default_timezone_set('Asia/Makassar');
        $this->db = new Database;
    }

    public function daftar_belum_pencairan()
    {

        $this->db->query('SELECT A.*, B.nama_pemohon, B.nama_instansi, B.tipe_kredit, B.tanggal_permohonan, B.tanggal_wawancara,  B.tanggal_komite FROM tbl_keputusan_kredit A join tbl_permohon_kredit B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.status_cair =:status_cair AND B.kode_cabang =:kode_cabang AND B.tanggal_pencairan IS NULL ORDER BY A.plafond DESC');
        $this->db->bind('status_cair', 'YA');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        return $this->db->resultSet();
    }

    public function jumlah_daftar_belum_pencairan()
    {


        $this->db->query('SELECT A.*, B.nama_pemohon, B.nama_instansi, B.tipe_kredit, B.tanggal_permohonan, B.tanggal_wawancara,  B.tanggal_komite FROM tbl_keputusan_kredit A join tbl_permohon_kredit B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.status_cair =:status_cair AND B.kode_cabang =:kode_cabang AND B.tanggal_pencairan IS NULL ORDER BY A.plafond DESC');
        $this->db->bind('status_cair', 'YA');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_tes()
    {


        $this->db->query('SELECT A.*, B.nama_pemohon, B.tanggal_permohonan, B.tanggal_pencairan FROM tbl_keputusan_kredit A join tbl_permohon_kredit B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.status_cair =:status_cair AND B.kode_cabang =:kode_cabang AND B.tanggal_pencairan IS NULL ORDER BY A.plafond DESC');
        $this->db->bind('status_cair', 'YA');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        return $this->db->resultSet();
    }

    public function get_data_komite_id()
    {
        $this->db->query('SELECT A.*, A.plafond AS a_plafond, A.jangka_waktu AS tbl_keputusan_jangka_waktu, B.*, C.* FROM tbl_keputusan_kredit A JOIN tbl_permohon_kredit B ON A.no_permohonan_kredit = B.no_permohonan_kredit JOIN tbl_wawancara C ON C.no_permohonan_kredit = A.no_permohonan_kredit WHERE  A.no_permohonan_kredit = :no_permohonan_kredit ');

        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }

    public function get_data_pencairan()
    {
        $this->db->query('SELECT * FROM tbl_pencairan_kredit  WHERE  no_permohonan_kredit = :no_permohonan_kredit ');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }


    public function cek_tbl_pencairan()
    {
        $this->db->query('SELECT * FROM tbl_pencairan_kredit  WHERE  no_permohonan_kredit = :no_permohonan_kredit ');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_tanggal_angsuran()
    {

        $this->db->query('SELECT * FROM tbl_ref_tgl_angsuran');
        return $this->db->single();
    }

    public function get_denda()
    {
        $this->db->query('SELECT * FROM tbl_ref_denda where id="1"');
        return $this->db->single();
    }

    public function get_id_sk()
    {

        $this->db->query('SELECT * FROM tbl_ref_sk where id_sk="1"');
        return $this->db->single();
    }


    public function get_jenis_no_pk()
    {

        $this->db->query('SELECT * FROM tbl_ref_jenis_no_pk');
        return $this->db->resultSet();
    }



    public function get_data_wawancara_id()
    {

        $this->db->query('SELECT * FROM tbl_wawancara WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }

    public function simpan_proses_pencairan()
    {

        $query = "INSERT INTO tbl_pencairan_kredit 
        (
            no_permohonan_kredit,
            kode_cabang,
            nama_debitur,
            nama_alias_debitur,
            tempat_lahir_debitur,
            tgl_lahir_debitur,
            jenis_kelamin_debitur,
            jenis_pekerjaan_debitur,
            instansi_debitur,
            no_ktp_debitur,
            alamat_ktp_debitur,
            alamat_domisili_debitur,
            nama_pasangan,
            nama_alias_pasangan,
            tempat_lahir_pasangan,
            tgl_lahir_pasangan,
            jenis_pekerjaan_pasangan,
            instansi_pasangan,
            no_ktp_pasangan,
            alamat_ktp_pasangan,
            alamat_domisili_pasangan,
            jenis_no_pk,
            no_pk,
            inkaso,

            no_pk_terakhir,

            plafond,
            os_sebelumnya,
            penambahan,
            jangka_waktu,
            tgl_mulai_jw,
            tgl_akhir_jw,
            suku_bunga,
            sistem_bunga,
            angsuran_perbulan,
            tgl_angsuran,
            tgl_mulai_angsuran,
            tgl_akhir_angsuran,
            jenis_kredit,
            no_sppk,
            tujuan_penggunaan_kredit,
            persen_provisi,
            biaya_provisi,
            persen_administrasi,
            biaya_administrasi,
            asuransi_jiwa,
            asuransi_kredit,
            asuransi_kerugian,
            biaya_notaris,
            biaya_materai,
            bunga_berjalan,
            tabungan_simitra,
            angsuran_pertama,

            denda,

            pejabat_ttd,
            kode_jenis_penggunaan,
            kode_sektor_ekonomi,
            id_sk,

            tgl_surat_kuasa_pasangan,

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
            user_create,
            tgl_create,
            telepon_pemohon,
            media_sosial
        ) 
        VALUES
        (
            :no_permohonan_kredit,
            :kode_cabang,
            :nama_debitur,
            :nama_alias_debitur,
            :tempat_lahir_debitur,
            :tgl_lahir_debitur,
            :jenis_kelamin_debitur,
            :jenis_pekerjaan_debitur,
            :instansi_debitur,
            :no_ktp_debitur,
            :alamat_ktp_debitur,
            :alamat_domisili_debitur,
            :nama_pasangan,
            :nama_alias_pasangan,
            :tempat_lahir_pasangan,
            :tgl_lahir_pasangan,
            :jenis_pekerjaan_pasangan,
            :instansi_pasangan,
            :no_ktp_pasangan,
            :alamat_ktp_pasangan,
            :alamat_domisili_pasangan,
            :jenis_no_pk,
            :no_pk,
            :inkaso,
            :no_pk_terakhir,
            :plafond,
            :os_sebelumnya,
            :penambahan,
            :jangka_waktu,
            :tgl_mulai_jw,
            :tgl_akhir_jw,
            :suku_bunga,
            :sistem_bunga,
            :angsuran_perbulan,
            :tgl_angsuran,
            :tgl_mulai_angsuran,
            :tgl_akhir_angsuran,
            :jenis_kredit,
            :no_sppk,
            :tujuan_penggunaan_kredit,
            :persen_provisi,
            :biaya_provisi,
            :persen_administrasi,
            :biaya_administrasi,
            :asuransi_jiwa,
            :asuransi_kredit,
            :asuransi_kerugian,
            :biaya_notaris,
            :biaya_materai,
            :bunga_berjalan,
            :tabungan_simitra,
            :angsuran_pertama,
            :denda,
            :pejabat_ttd,
            :kode_jenis_penggunaan,
            :kode_sektor_ekonomi,
            :id_sk,
            :tgl_surat_kuasa_pasangan,
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
            :user_create,
            :tgl_create,
            :telepon_pemohon,
            :media_sosial
        )";
        $this->db->query($query);

        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->bind('kode_cabang', $_POST['kode_cabang']);
        $this->db->bind('nama_debitur', $_POST['nama_debitur']);
        $this->db->bind('nama_alias_debitur', $_POST['nama_alias_debitur']);
        $this->db->bind('tempat_lahir_debitur', $_POST['tempat_lahir_debitur']);
        $this->db->bind('tgl_lahir_debitur', $_POST['tgl_lahir_debitur']);
        $this->db->bind('jenis_kelamin_debitur', $_POST['jenis_kelamin_debitur']);
        $this->db->bind('jenis_pekerjaan_debitur', $_POST['jenis_pekerjaan_debitur']);
        $this->db->bind('instansi_debitur', $_POST['instansi_debitur']);
        $this->db->bind('no_ktp_debitur', $_POST['no_ktp_debitur']);
        $this->db->bind('alamat_ktp_debitur', $_POST['alamat_ktp_debitur']);
        $this->db->bind('alamat_domisili_debitur', $_POST['alamat_domisili_debitur']);
        $this->db->bind('nama_pasangan', $_POST['nama_pasangan']);
        $this->db->bind('nama_alias_pasangan', $_POST['nama_alias_pasangan']);
        $this->db->bind('tempat_lahir_pasangan', $_POST['tempat_lahir_pasangan']);
        $this->db->bind('tgl_lahir_pasangan', $_POST['tgl_lahir_pasangan']);
        $this->db->bind('jenis_pekerjaan_pasangan', $_POST['jenis_pekerjaan_pasangan']);
        $this->db->bind('instansi_pasangan', $_POST['instansi_pasangan']);
        $this->db->bind('no_ktp_pasangan', $_POST['no_ktp_pasangan']);
        $this->db->bind('alamat_ktp_pasangan', $_POST['alamat_ktp_pasangan']);
        $this->db->bind('alamat_domisili_pasangan', $_POST['alamat_domisili_pasangan']);
        $this->db->bind('jenis_no_pk', $_POST['jenis_no_pk']);
        $this->db->bind('no_pk', $_POST['no_pk']);
        $this->db->bind('inkaso', $_POST['inkaso']);
        $this->db->bind('no_pk_terakhir', $_POST['no_pk_terakhir']);
        $this->db->bind('plafond', $_POST['plafond']);
        $this->db->bind('os_sebelumnya', $_POST['os_sebelumnya']);
        $this->db->bind('penambahan', $_POST['penambahan']);
        $this->db->bind('jangka_waktu', $_POST['jangka_waktu']);
        $this->db->bind('tgl_mulai_jw', $_POST['tgl_mulai_jw']);
        $this->db->bind('tgl_akhir_jw', $_POST['tgl_akhir_jw']);
        $this->db->bind('suku_bunga', $_POST['suku_bunga']);
        $this->db->bind('sistem_bunga', $_POST['sistem_bunga']);
        $this->db->bind('angsuran_perbulan', $_POST['angsuran_perbulan']);
        $this->db->bind('tgl_angsuran', $_POST['tgl_angsuran']);
        $this->db->bind('tgl_mulai_angsuran', $_POST['tgl_mulai_angsuran']);
        $this->db->bind('tgl_akhir_angsuran', $_POST['tgl_akhir_angsuran']);
        $this->db->bind('jenis_kredit', $_POST['jenis_kredit']);
        $this->db->bind('no_sppk', $_POST['no_sppk']);
        $this->db->bind('tujuan_penggunaan_kredit', $_POST['tujuan_penggunaan_kredit']);
        $this->db->bind('persen_provisi', $_POST['persen_provisi']);
        $this->db->bind('biaya_provisi', $_POST['biaya_provisi']);
        $this->db->bind('persen_administrasi', $_POST['persen_administrasi']);
        $this->db->bind('biaya_administrasi', $_POST['biaya_administrasi']);
        $this->db->bind('asuransi_jiwa', $_POST['asuransi_jiwa']);
        $this->db->bind('asuransi_kredit', $_POST['asuransi_kredit']);
        $this->db->bind('asuransi_kerugian', $_POST['asuransi_kerugian']);
        $this->db->bind('biaya_notaris', $_POST['biaya_notaris']);
        $this->db->bind('biaya_materai', $_POST['biaya_materai']);
        $this->db->bind('bunga_berjalan', $_POST['bunga_berjalan']);
        $this->db->bind('tabungan_simitra', $_POST['tabungan_simitra']);
        $this->db->bind('angsuran_pertama', $_POST['angsuran_pertama']);
        $this->db->bind('denda', $_POST['denda']);
        $this->db->bind('tgl_surat_kuasa_pasangan', $_POST['tgl_surat_kuasa_pasangan']);
        $this->db->bind('pejabat_ttd', $_POST['pejabat_ttd']);
        $this->db->bind('kode_jenis_penggunaan', $_POST['kode_jenis_penggunaan']);
        $this->db->bind('kode_sektor_ekonomi', $_POST['kode_sektor_ekonomi']);
        $this->db->bind('id_sk', $_POST['id_sk']);
        $this->db->bind('jaminan_1', $_POST['jaminan_1']);
        $this->db->bind('jaminan_2', $_POST['jaminan_2']);
        $this->db->bind('jaminan_3', $_POST['jaminan_3']);
        $this->db->bind('jaminan_4', $_POST['jaminan_4']);
        $this->db->bind('jaminan_5', $_POST['jaminan_5']);
        $this->db->bind('jaminan_6', $_POST['jaminan_6']);
        $this->db->bind('jaminan_7', $_POST['jaminan_7']);
        $this->db->bind('jaminan_8', $_POST['jaminan_8']);
        $this->db->bind('jaminan_9', $_POST['jaminan_9']);
        $this->db->bind('jaminan_10', $_POST['jaminan_10']);
        $this->db->bind('jaminan_11', $_POST['jaminan_11']);
        $this->db->bind('jaminan_12', $_POST['jaminan_12']);
        $this->db->bind('jaminan_13', $_POST['jaminan_13']);
        $this->db->bind('jaminan_14', $_POST['jaminan_14']);
        $this->db->bind('jaminan_15', $_POST['jaminan_15']);
        $this->db->bind('jaminan_16', $_POST['jaminan_16']);
        $this->db->bind('jaminan_17', $_POST['jaminan_17']);
        $this->db->bind('jaminan_18', $_POST['jaminan_18']);
        $this->db->bind('jaminan_19', $_POST['jaminan_19']);
        $this->db->bind('jaminan_20', $_POST['jaminan_20']);
        $this->db->bind('user_create', $_COOKIE['username']);
        $this->db->bind('tgl_create', date("Y-m-d H:i:s"));
        $this->db->bind('telepon_pemohon', $_POST['telepon_pemohon']);
        $this->db->bind('media_sosial', $_POST['media_sosial']);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function update_proses_pencairan()
    {




        $query = "UPDATE tbl_pencairan_kredit SET 
           
           
            nama_debitur = :nama_debitur,
            nama_alias_debitur = :nama_alias_debitur,
            tempat_lahir_debitur = :tempat_lahir_debitur,
            tgl_lahir_debitur = :tgl_lahir_debitur,
            jenis_kelamin_debitur = :jenis_kelamin_debitur,
            jenis_pekerjaan_debitur = :jenis_pekerjaan_debitur,
            instansi_debitur = :instansi_debitur,
            no_ktp_debitur = :no_ktp_debitur,
            alamat_ktp_debitur = :alamat_ktp_debitur,
            alamat_domisili_debitur = :alamat_domisili_debitur,
            nama_pasangan = :nama_pasangan,
            nama_alias_pasangan = :nama_alias_pasangan,
            tempat_lahir_pasangan = :tempat_lahir_pasangan,
            tgl_lahir_pasangan = :tgl_lahir_pasangan,
            jenis_pekerjaan_pasangan = :jenis_pekerjaan_pasangan,
            instansi_pasangan = :instansi_pasangan,
            no_ktp_pasangan = :no_ktp_pasangan,
            alamat_ktp_pasangan = :alamat_ktp_pasangan,
            alamat_domisili_pasangan = :alamat_domisili_pasangan,
            jenis_no_pk = :jenis_no_pk,
            no_pk = :no_pk,
            inkaso = :inkaso,
            no_pk_terakhir = :no_pk_terakhir,
            plafond = :plafond,
            os_sebelumnya = :os_sebelumnya,
            penambahan = :penambahan,
            jangka_waktu = :jangka_waktu,
            tgl_mulai_jw = :tgl_mulai_jw,
            tgl_akhir_jw = :tgl_akhir_jw,
            suku_bunga = :suku_bunga,
            sistem_bunga = :sistem_bunga,
            angsuran_perbulan = :angsuran_perbulan,
            tgl_angsuran = :tgl_angsuran,
            tgl_mulai_angsuran = :tgl_mulai_angsuran,
            tgl_akhir_angsuran = :tgl_akhir_angsuran,
            jenis_kredit = :jenis_kredit,
            no_sppk = :no_sppk,
            tujuan_penggunaan_kredit = :tujuan_penggunaan_kredit,
            persen_provisi = :persen_provisi,
            biaya_provisi = :biaya_provisi,
            persen_administrasi = :persen_administrasi,
            biaya_administrasi = :biaya_administrasi,
            asuransi_jiwa = :asuransi_jiwa,
            asuransi_kredit = :asuransi_kredit,
            asuransi_kerugian = :asuransi_kerugian,
            biaya_notaris = :biaya_notaris,
            biaya_materai = :biaya_materai,
            bunga_berjalan = :bunga_berjalan,
            tabungan_simitra = :tabungan_simitra,
            angsuran_pertama = :angsuran_pertama,
            denda = :denda,
            pejabat_ttd = :pejabat_ttd,
            kode_jenis_penggunaan = :kode_jenis_penggunaan,
            kode_sektor_ekonomi = :kode_sektor_ekonomi,
            id_sk = :id_sk,
            tgl_surat_kuasa_Pasangan =:tgl_surat_kuasa_pasangan,
            jaminan_1 = :jaminan_1,
            jaminan_2 = :jaminan_2,
            jaminan_3 = :jaminan_3,
            jaminan_4 = :jaminan_4,
            jaminan_5 = :jaminan_5,
            jaminan_6 = :jaminan_6,
            jaminan_7 = :jaminan_7,
            jaminan_8 = :jaminan_8,
            jaminan_9 = :jaminan_9,
            jaminan_10 = :jaminan_10,
            jaminan_11 = :jaminan_11,
            jaminan_12 = :jaminan_12,
            jaminan_13 = :jaminan_13,
            jaminan_14 = :jaminan_14,
            jaminan_15 = :jaminan_15,
            jaminan_16 = :jaminan_16,
            jaminan_17 = :jaminan_17,
            jaminan_18 = :jaminan_18,        
            jaminan_19 = :jaminan_19,
            jaminan_20 = :jaminan_20,
            user_edit = :user_edit,
            tgl_edit = :tgl_edit,
            telepon_pemohon = :telepon_pemohon,
            media_sosial = :media_sosial

            WHERE no_permohonan_kredit= :no_permohonan_kredit";

        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('nama_debitur', $_POST['nama_debitur']);
        $this->db->bind('nama_alias_debitur', $_POST['nama_alias_debitur']);
        $this->db->bind('tempat_lahir_debitur', $_POST['tempat_lahir_debitur']);
        $this->db->bind('tgl_lahir_debitur', $_POST['tgl_lahir_debitur']);
        $this->db->bind('jenis_kelamin_debitur', $_POST['jenis_kelamin_debitur']);
        $this->db->bind('jenis_pekerjaan_debitur', $_POST['jenis_pekerjaan_debitur']);
        $this->db->bind('instansi_debitur', $_POST['instansi_debitur']);
        $this->db->bind('no_ktp_debitur', $_POST['no_ktp_debitur']);
        $this->db->bind('alamat_ktp_debitur', $_POST['alamat_ktp_debitur']);
        $this->db->bind('alamat_domisili_debitur', $_POST['alamat_domisili_debitur']);
        $this->db->bind('nama_pasangan', $_POST['nama_pasangan']);
        $this->db->bind('nama_alias_pasangan', $_POST['nama_alias_pasangan']);
        $this->db->bind('tempat_lahir_pasangan', $_POST['tempat_lahir_pasangan']);
        $this->db->bind('tgl_lahir_pasangan', $_POST['tgl_lahir_pasangan']);
        $this->db->bind('jenis_pekerjaan_pasangan', $_POST['jenis_pekerjaan_pasangan']);
        $this->db->bind('instansi_pasangan', $_POST['instansi_pasangan']);
        $this->db->bind('no_ktp_pasangan', $_POST['no_ktp_pasangan']);
        $this->db->bind('alamat_ktp_pasangan', $_POST['alamat_ktp_pasangan']);
        $this->db->bind('alamat_domisili_pasangan', $_POST['alamat_domisili_pasangan']);
        $this->db->bind('jenis_no_pk', $_POST['jenis_no_pk']);
        $this->db->bind('no_pk', $_POST['no_pk']);
        $this->db->bind('inkaso', $_POST['inkaso']);
        $this->db->bind('no_pk_terakhir', $_POST['no_pk_terakhir']);
        $this->db->bind('plafond', $_POST['plafond']);
        $this->db->bind('os_sebelumnya', $_POST['os_sebelumnya']);
        $this->db->bind('penambahan', $_POST['penambahan']);
        $this->db->bind('jangka_waktu', $_POST['jangka_waktu']);
        $this->db->bind('tgl_mulai_jw', $_POST['tgl_mulai_jw']);
        $this->db->bind('tgl_akhir_jw', $_POST['tgl_akhir_jw']);
        $this->db->bind('suku_bunga', $_POST['suku_bunga']);
        $this->db->bind('sistem_bunga', $_POST['sistem_bunga']);
        $this->db->bind('angsuran_perbulan', $_POST['angsuran_perbulan']);
        $this->db->bind('tgl_angsuran', $_POST['tgl_angsuran']);
        $this->db->bind('tgl_mulai_angsuran', $_POST['tgl_mulai_angsuran']);
        $this->db->bind('tgl_akhir_angsuran', $_POST['tgl_akhir_angsuran']);
        $this->db->bind('jenis_kredit', $_POST['jenis_kredit']);
        $this->db->bind('no_sppk', $_POST['no_sppk']);
        $this->db->bind('tujuan_penggunaan_kredit', $_POST['tujuan_penggunaan_kredit']);
        $this->db->bind('persen_provisi', $_POST['persen_provisi']);
        $this->db->bind('biaya_provisi', $_POST['biaya_provisi']);
        $this->db->bind('persen_administrasi', $_POST['persen_administrasi']);
        $this->db->bind('biaya_administrasi', $_POST['biaya_administrasi']);
        $this->db->bind('asuransi_jiwa', $_POST['asuransi_jiwa']);
        $this->db->bind('asuransi_kredit', $_POST['asuransi_kredit']);
        $this->db->bind('asuransi_kerugian', $_POST['asuransi_kerugian']);
        $this->db->bind('biaya_notaris', $_POST['biaya_notaris']);
        $this->db->bind('biaya_materai', $_POST['biaya_materai']);
        $this->db->bind('bunga_berjalan', $_POST['bunga_berjalan']);
        $this->db->bind('tabungan_simitra', $_POST['tabungan_simitra']);
        $this->db->bind('angsuran_pertama', $_POST['angsuran_pertama']);
        $this->db->bind('denda', $_POST['denda']);
        $this->db->bind('pejabat_ttd', $_POST['pejabat_ttd']);
        $this->db->bind('kode_jenis_penggunaan', $_POST['kode_jenis_penggunaan']);
        $this->db->bind('kode_sektor_ekonomi', $_POST['kode_sektor_ekonomi']);
        $this->db->bind('id_sk', $_POST['id_sk']);
        $this->db->bind('tgl_surat_kuasa_pasangan', $_POST['tgl_surat_kuasa_pasangan']);
        $this->db->bind('jaminan_1', $_POST['jaminan_1']);
        $this->db->bind('jaminan_2', $_POST['jaminan_2']);
        $this->db->bind('jaminan_3', $_POST['jaminan_3']);
        $this->db->bind('jaminan_4', $_POST['jaminan_4']);
        $this->db->bind('jaminan_5', $_POST['jaminan_5']);
        $this->db->bind('jaminan_6', $_POST['jaminan_6']);
        $this->db->bind('jaminan_7', $_POST['jaminan_7']);
        $this->db->bind('jaminan_8', $_POST['jaminan_8']);
        $this->db->bind('jaminan_9', $_POST['jaminan_9']);
        $this->db->bind('jaminan_10', $_POST['jaminan_10']);
        $this->db->bind('jaminan_11', $_POST['jaminan_11']);
        $this->db->bind('jaminan_12', $_POST['jaminan_12']);
        $this->db->bind('jaminan_13', $_POST['jaminan_13']);
        $this->db->bind('jaminan_14', $_POST['jaminan_14']);
        $this->db->bind('jaminan_15', $_POST['jaminan_15']);
        $this->db->bind('jaminan_16', $_POST['jaminan_16']);
        $this->db->bind('jaminan_17', $_POST['jaminan_17']);
        $this->db->bind('jaminan_18', $_POST['jaminan_18']);
        $this->db->bind('jaminan_19', $_POST['jaminan_19']);
        $this->db->bind('jaminan_20', $_POST['jaminan_20']);
        $this->db->bind('tgl_edit', $_POST['tgl_edit']);
        $this->db->bind('user_edit', $_POST['user_edit']);
        $this->db->bind('telepon_pemohon', $_POST['telepon_pemohon']);
        $this->db->bind('media_sosial', $_POST['media_sosial']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_daftar_sudah_pencairan()
    {

        $this->db->query('SELECT * FROM tbl_pencairan_kredit A join tbl_permohon_kredit B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE B.kode_cabang =:kode_cabang ORDER BY A.no_permohonan_kredit DESC');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        return $this->db->resultSet();

        // $this->db->query('SELECT * FROM tbl_pencairan_kredit A JOIN tbl_permohon_kredit B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE B.kode_cabang =:kode_cabang');
        // return $this->db->resultSet();
    }


    public function update_tbl_permohonan_kredit()
    {


        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_pencairan = :tanggal_pencairan
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('tanggal_pencairan', $_POST['tgl_mulai_jw']);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_pencairan()
    {


        $query = "UPDATE tbl_pencairan_kredit SET 
        nama_debitur = :nama_debitur
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('nama_debitur', $_POST['nama_debitur']);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus($id)
    {

        $query = "DELETE FROM tbl_pencairan_kredit WHERE no_permohonan_kredit= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_hapus_pencairan($id)
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_komite = :tanggal_komite,
        tanggal_pencairan = :tanggal_pencairan

        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('tanggal_komite', NULL);
        $this->db->bind('tanggal_pencairan', NULL);
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function cek_no_inkaso($data)
    {
        $this->db->query('SELECT no_pk_terakhir FROM tbl_pencairan_kredit WHERE inkaso = :inkaso ORDER BY no_pk_terakhir DESC LIMIT 1');
        $this->db->bind('inkaso', $data);
        return $this->db->single();
    }

    public function cek_urutan_inkaso()
    {

        $this->db->query('SELECT inkaso,no_pk_terakhir FROM tbl_pencairan_kredit WHERE inkaso = :inkaso and kode_cabang=:kode_cabang ORDER BY no_pk_terakhir DESC LIMIT 1');
        $this->db->bind('inkaso', $_POST['inkaso']);
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        return $this->db->single();
    }


    public function btn_batal_pencairan()
    {

        $query = "UPDATE tbl_keputusan_kredit SET 
        status_cair = :status_cair
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('status_cair', 'TIDAK');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function btn_hapus()
    {

        $query = "DELETE FROM tbl_pencairan_kredit WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function btn_hapus_update_tanggal_pencairan()
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        tanggal_pencairan = :tanggal_pencairan
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('tanggal_pencairan', null);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
