public function daftar_belum_slik()
    {
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE tanggal_slik IS NULL');
        return $this->db->resultSet();
    }


    public function daftar_sudah_slik()
    {
        $this->db->query('SELECT * FROM tbl_permohon_kredit');
        return $this->db->resultSet();
    }

    public function get_daftar_belum_slik_id($id)
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE id= :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // public function tampil_edit_data_pasangan($id)
    // {

    //     $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE id= :id');
    //     $this->db->bind('id', $id);
    //     return $this->db->single();
    // }

    // slik pemohon

    public function simpan_slik_pemohon()
    {
        $query = "INSERT INTO tbl_slik_pemohon
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
                keterangan
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
                :keterangan
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
        $this->db->execute();
        return $this->db->rowCount();
    }
    // update tabel cs_permohon_kredit bagian tgl_slik

    public function update_tgl_slik_tbl_permohon_kredit()
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



    // lihat daftar tabel data slik pemohon yang tealh dilakuakn inputan


    public function data_pemohon($no_permohonan_kredit)
    {

        $this->db->query('SELECT * FROM tbl_slik_pemohon WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        return $this->db->resultSet();
    }

    // lihat daftar tabel slik pasangan yang telah di input

    public function lihat_daftar_slik_pasangan($no_permohonan_kredit)
    {
        $this->db->query('SELECT * FROM tbl_slik_pasangan WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        return $this->db->resultSet();
    }



    public function data_pemohon_count($no_permohonan_kredit)
    {

        $this->db->query('SELECT * FROM tbl_slik_pemohon WHERE no_permohonan_kredit = :no_permohonan_kredit')->fetchColumn();
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        return $this->db->resultSet();
    }

    // edit

    public function edit_pemohon_slik($id)
    {

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

   





    // tbl_pemohon_pasangan

    public function simpan_slik_pasangan()
    {


        $query = "INSERT INTO tbl_slik_pasangan
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
                keterangan
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
                :keterangan
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
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_tgl_slik_tbl_pasangan_kredit()
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

    public function cek_daftar_belum_slik()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit =:no_permohonan_kredit AND tanggal_slik IS NULL');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // hitung jumlah data row pada tabel slik pasangan
    public function jumlah_data_tabel_slik_pasangan()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik_pasangan WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // hitung jumlah data row pada tabel slik pemohon
    public function jumlah_data_tabel_slik_pemohon()
    {
        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];
        $this->db->query('SELECT * FROM tbl_slik_pemohon WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // lihat data pasangan berdasarkan no_permohonan