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
        alamat_sekarang_pasangan =:alamat_sekarang_pasangan,
        telepon_pasangan =:telepon_pasangan,
        jenis_pekerjaan_pasangan =:jenis_pekerjaan_pasangan,
        nama_instansi_pasangan =:nama_instansi_pasangan,
        tahun_mulai_bekerja_pasangan =:tahun_mulai_bekerja_pasangan,
        jabatan_saat_ini_pasangan =:jabatan_saat_ini_pasangan,
        alamat_kantor_pasangan =:alamat_kantor_pasangan,
        telepon_kantor_pasangan =:telepon_kantor_pasangan,
        tanggal_permohonan =:tanggal_permohonan,
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
        lokasi_berkas =:lokasi_berkas
















        $this->db->bind('id', $id);
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
        $this->db->bind('catatan_cs',   $_POST['catatan_cs']);
        $this->db->bind('lokasi_berkas',   $_POST['lokasi_berkas']);





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
            kode_cabang,
            jumlah_kendaraan,
            merek_kendaraan,
            tahun_kendaraan,  penghasilan_pemohon,
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
            atas_nama_kendaraan,
            urutan_terakhir,
            no_permohonan_kredit,
            catatan_cs,
            lokasi_berkas



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
            :kode_cabang,
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
            :urutan_terakhir,
            :no_permohonan_kredit,
            -- tambahan
            -- 1
            :catatan_cs,
            :lokasi_berkas


