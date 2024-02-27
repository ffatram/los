<?php

include 'terbilang.php';
include 'format_tanggal_indo.php';

require 'vendor/autoload.php';


class cetak extends Controller
{



    public function cetak_permohonankreditonline($noreg)
    {


        try {
            $namafile = 'Aplikasi Permohonan Kredit.docx';

            // library 
            $format = new terbilang();

            $data = new \PhpOffice\PhpWord\TemplateProcessor('cetak/cetakbaru/' . $namafile);

            $i = $this->model('m_cetak')->get_tbl_permohon_kredit($noreg);
            $j = $this->model('m_cetak')->tbl_cabang($i['kode_cabang']);

            // // tulis data ke file sesuai key nya
            $data->setValue('plafond_dimohon', number_format(htmlspecialchars($i['plafond_dimohon']), 0, ',', '.'));
            $data->setValue('jangka_waktu', htmlspecialchars($i['jangka_waktu']));
            $data->setValue('tujuan_penggunaan_kredit', htmlspecialchars($i['tujuan_penggunaan_kredit']));
            $data->setValue('jenis_jaminan', htmlspecialchars($i['jenis_jaminan']));
            $data->setValue('nilai_jaminan', htmlspecialchars($i['nilai_jaminan']));

            $data->setValue('nama_pemohon', htmlspecialchars($i['nama_pemohon']));
            $data->setValue('jenis_kelamin_pemohon', htmlspecialchars($i['jenis_kelamin_pemohon']));
            $data->setValue('tempat_lahir_pemohon',  htmlspecialchars($i['tempat_lahir_pemohon']));
            $data->setValue('tgl_lahir_pemohon', htmlspecialchars(date("d m Y", strtotime($i['tgl_lahir_pemohon']))));
            $data->setValue('nama_ibu_kandung_pemohon', htmlspecialchars($i['nama_ibu_kandung_pemohon']));
            $data->setValue('no_ktp_pemohon', htmlspecialchars($i['no_ktp_pemohon']));
            $data->setValue('alamat_ktp_pemohon', htmlspecialchars($i['alamat_ktp_pemohon']));
            $data->setValue('alamat_sekarang_pemohon', htmlspecialchars($i['alamat_sekarang_pemohon']));
            $data->setValue('telepon_pemohon', htmlspecialchars($i['telepon_pemohon']));
            $data->setValue('status_kepemilikan_rumah_pemohon', htmlspecialchars($i['status_kepemilikan_rumah_pemohon']));
            $data->setValue('pendidikan_terakhir_pemohon', htmlspecialchars($i['pendidikan_terakhir_pemohon']));
            $data->setValue('gelar_pemohon', htmlspecialchars($i['gelar_pemohon']));
            $data->setValue('status_perkawinan', htmlspecialchars($i['status_perkawinan']));
            $data->setValue('jumlah_tanggungan', htmlspecialchars($i['jumlah_tanggungan']));

            $data->setValue('nama_keluarga_dapat_dihubungi', htmlspecialchars($i['nama_keluarga_dapat_dihubungi']));
            $data->setValue('alamat_keluarga_dapat_dihubungi', htmlspecialchars($i['alamat_keluarga_dapat_dihubungi']));
            $data->setValue('hubungan_keluarga_dapat_dihubungi', htmlspecialchars($i['hubungan_keluarga_dapat_dihubungi']));
            $data->setValue('telepon_keluarga_dapat_dihubungi', htmlspecialchars($i['telepon_keluarga_dapat_dihubungi']));

            $data->setValue('jenis_pekerjaan', htmlspecialchars($i['jenis_pekerjaan']));
            $data->setValue('nama_instansi', htmlspecialchars($i['nama_instansi']));
            $data->setValue('alamat_instansi', htmlspecialchars($i['alamat_instansi']));
            $data->setValue('telepon_instansi', htmlspecialchars($i['telepon_instansi']));
            $data->setValue('tahun_mulai_bekerja', htmlspecialchars($i['tahun_mulai_bekerja']));
            $data->setValue('jabatan_saat_ini', htmlspecialchars($i['jabatan_saat_ini']));
            $data->setValue('atasan_langsung', htmlspecialchars($i['atasan_langsung']));
            $data->setValue('telepon_bendahara', htmlspecialchars($i['telepon_bendahara']));


            $data->setValue('nama_pasangan', htmlspecialchars($i['nama_pasangan']));
            $data->setValue('tempat_lahir_pasangan', htmlspecialchars($i['tempat_lahir_pasangan']));
            $data->setValue('tgl_lahir_pasangan', htmlspecialchars(date("d m Y", strtotime($i['tgl_lahir_pasangan']))));
            $data->setValue('no_ktp_pasangan', htmlspecialchars($i['no_ktp_pasangan']));
            $data->setValue('alamat_ktp_pasangan', htmlspecialchars($i['alamat_ktp_pasangan']));
            $data->setValue('alamat_sekarang_pasangan', htmlspecialchars($i['alamat_sekarang_pasangan']));
            $data->setValue('telepon_pasangan', htmlspecialchars($i['telepon_pasangan']));
            $data->setValue('jenis_pekerjaan_pasangan', htmlspecialchars($i['jenis_pekerjaan_pasangan']));
            $data->setValue('nama_instansi_pasangan', htmlspecialchars($i['nama_instansi_pasangan']));
            $data->setValue('tahun_mulai_bekerja_pasangan', htmlspecialchars($i['tahun_mulai_bekerja_pasangan']));
            $data->setValue('jabatan_saat_ini_pasangan', htmlspecialchars($i['jabatan_saat_ini_pasangan']));
            $data->setValue('alamat_kantor_pasangan', htmlspecialchars($i['alamat_kantor_pasangan']));
            $data->setValue('telepon_kantor_pasangan', htmlspecialchars($i['telepon_kantor_pasangan']));

            $data->setValue('penghasilan_pemohon', number_format(htmlspecialchars($i['penghasilan_pemohon']), 0, ',', '.'));
            $data->setValue('penghasilan_pasangan', number_format(htmlspecialchars($i['penghasilan_pasangan']), 0, ',', '.'));
            $data->setValue('penghasilan_tambahan', number_format(htmlspecialchars($i['penghasilan_tambahan']), 0, ',', '.'));
            $data->setValue('penghasilan_tambahan_lainnya', number_format(htmlspecialchars($i['penghasilan_tambahan_lainnya']), 0, ',', '.'));
            $data->setValue('biaya_hidup_perbulan', number_format(htmlspecialchars($i['biaya_hidup_perbulan']), 0, ',', '.'));
            $data->setValue('biaya_pendidikan', number_format(htmlspecialchars($i['biaya_pendidikan']), 0, ',', '.'));
            $data->setValue('biaya_pam_listrik_telepon', number_format(htmlspecialchars($i['biaya_pam_listrik_telepon']), 0, ',', '.'));
            $data->setValue('biaya_transport', number_format(htmlspecialchars($i['biaya_transport']), 0, ',', '.'));
            $data->setValue('angsuran_bank_lain', number_format(htmlspecialchars($i['angsuran_bank_lain']), 0, ',', '.'));
            $data->setValue('angsuran_perumahan', number_format(htmlspecialchars($i['angsuran_perumahan']), 0, ',', '.'));
            $data->setValue('angsuran_kendaraan', number_format(htmlspecialchars($i['angsuran_kendaraan']), 0, ',', '.'));
            $data->setValue('angsuran_barang_elektronik', number_format(htmlspecialchars($i['angsuran_barang_elektronik']), 0, ',', '.'));
            $data->setValue('angsuran_koperasi', number_format(htmlspecialchars($i['angsuran_koperasi']), 0, ',', '.'));
            $data->setValue('biaya_lainnya', number_format(htmlspecialchars($i['biaya_lainnya']), 0, ',', '.'));

            $data->setValue('aset_yang_dimiliki', htmlspecialchars($i['aset_yang_dimiliki']));
            $data->setValue('alamat_aset', htmlspecialchars($i['alamat_aset']));
            $data->setValue('jenis_sertifikat', htmlspecialchars($i['jenis_sertifikat']));
            $data->setValue('jumlah_kendaraan', htmlspecialchars($i['jumlah_kendaraan']));
            $data->setValue('merek_kendaraan', htmlspecialchars($i['merek_kendaraan']));
            $data->setValue('tahun_kendaraan', htmlspecialchars($i['tahun_kendaraan']));
            $data->setValue('atas_nama_kendaraan', htmlspecialchars($i['atas_nama_kendaraan']));

            $data->setValue('plafond_terbilang', htmlspecialchars($format->terbilang(strval($i['plafond_dimohon'])) . ' rupiah'));


            $data->setValue('no_permohonan_kredit', htmlspecialchars($i['no_permohonan_kredit']));
            $data->setValue('perjanjian_kerjasama', htmlspecialchars($i['perjanjian_kerjasama']));
            $data->setValue('jenis_permohonan', htmlspecialchars($i['jenis_permohonan']));
            $data->setValue('user_create', htmlspecialchars($i['user_create']));
            $data->setValue('tgl_create', htmlspecialchars(date("d m Y", strtotime($i['tgl_create']))));
            $data->setValue('kota_cabang', htmlspecialchars($j['kota']));

            $tp1 = [
                $i['penghasilan_pemohon'],
                $i['penghasilan_pasangan'],
                $i['penghasilan_tambahan'],
                $i['penghasilan_tambahan_lainnya']
            ];

            $tp2 = [
                $i['biaya_hidup_perbulan'],
                $i['biaya_pendidikan'],
                $i['biaya_pam_listrik_telepon'],
                $i['biaya_transport'],
                $i['angsuran_bank_lain'],
                $i['angsuran_perumahan'],
                $i['angsuran_kendaraan'],
                $i['angsuran_barang_elektronik'],
                $i['angsuran_koperasi'],
                $i['biaya_lainnya']
            ];

            $data->setValue('total_penghasilan', number_format(htmlspecialchars($this->total_penghasilan($tp1)), 0, ',', '.'));
            $data->setValue('total_pengeluaran', number_format(htmlspecialchars($this->total_pengeluaran($tp2)), 0, ',', '.'));
            $data->setValue('sisa_penghasilan', number_format(htmlspecialchars(($this->total_penghasilan($tp1) - $this->total_pengeluaran($tp2))), 0, ',', '.'));

            // Simpan hasilnya ke dalam file output.docx
            $outputFilePath = 'cetak/cetakbaru/' . '_download_' . $namafile;
            $data->saveAs($outputFilePath);

            // Setel header untuk pengunduhan
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . $namafile . '"');
            header('Content-Length: ' . filesize($outputFilePath));

            // Keluarkan isi file
            readfile($outputFilePath);

            // Hapus file yang dihasilkan setelah diunduh (opsional)
            unlink($outputFilePath);
            // Hentikan eksekusi script
            exit();
        } catch (\Exception $e) {
            // Tangani exception di sini
            echo 'Terjadi kesalahan: ' . $e->getMessage();
        }
    }


    public function total_penghasilan($tp1)
    {
        $total = array_sum($tp1);

        return $total;
    }

    public function total_pengeluaran($tp2)
    {
        $total = array_sum($tp2);

        return $total;
    }




    function translateMonthToIndonesian($englishMonth)
    {
        $englishMonths = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $indonesianMonths = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

        return str_replace($englishMonths, $indonesianMonths, $englishMonth);
    }


    public function format_time_id($date)
    {

        $oldDate = $date;
        $dateTime = new DateTime($oldDate);

        $monthName = $dateTime->format('F');
        $indonesianMonth = $this->translateMonthToIndonesian($monthName);

        $newDate = $dateTime->format('j ') . $indonesianMonth . $dateTime->format(' Y');

        return $newDate;
    }


    // cetak PK KSG Cabang Kawin
    public function cetak_pk($noreg)
    {
        try {


            $j = $this->model('m_cetak')->cetak_pk($noreg); // tbl tbl_pencairan_kredit
            $k = $this->model('m_cetak')->ref_pejabat($j['pejabat_ttd']);
            $l = $this->model('m_cetak')->ref_sk_limit($j['id_sk']);
            $m = $this->model('m_cetak')->tbl_cabang($j['kode_cabang']);
            $n = $this->model('m_ref_jenis_no_pk')->get_jenis_berkas_pk($j['jenis_no_pk']);




            $namafile = ''; //PK KSG Cabang Surat Kuasa.docx


            if ($n['jenis_berkas_pk'] == 'KSG') {
                if ($k['tipe_pejabat'] == "Cabang") {
                    if ($j['tgl_surat_kuasa_pasangan'] != '') {
                        $namafile = 'PK KSG Cabang Surat Kuasa.docx';
                    } else if ($j['nama_pasangan'] != '') {
                        $namafile = 'PK KSG Cabang Kawin.docx';
                    } else if ($j['nama_pasangan'] == '') {
                        $namafile = 'PK KSG Cabang Lajang.docx';
                    }
                } else if ($k['tipe_pejabat'] == "Direksi") {
                    if ($j['tgl_surat_kuasa_pasangan'] != '') {
                        $namafile = 'PK KSG Direksi Surat Kuasa.docx';
                    } else if ($j['nama_pasangan'] != '') {
                        $namafile = 'PK KSG Direksi Kawin.docx';
                    } else if ($j['nama_pasangan'] == '') {
                        $namafile = 'PK KSG Direksi Lajang.docx';
                    }
                }
            } else if ($n['jenis_berkas_pk'] == 'KMK') {
                if ($k['tipe_pejabat'] == "Cabang") {
                    if ($j['tgl_surat_kuasa_pasangan'] != '') {
                        $namafile = 'PK KMK Cabang Surat Kuasa.docx';
                    } else if ($j['nama_pasangan'] != '') {
                        $namafile = 'PK KMK Cabang Kawin.docx';
                    } else if ($j['nama_pasangan'] == '') {
                        $namafile = 'PK KMK Cabang Lajang.docx';
                    }
                } else if ($k['tipe_pejabat'] == "Direksi") {
                    if ($j['tgl_surat_kuasa_pasangan'] != '') {
                        $namafile = 'PK KMK Direksi Surat Kuasa.docx';
                    } else if ($j['nama_pasangan'] != '') {
                        $namafile = 'PK KMK Direksi Kawin.docx';
                    } else if ($j['nama_pasangan'] == '') {
                        $namafile = 'PK KMK Direksi Lajang.docx';
                    }
                }
            } else if ($n['jenis_berkas_pk'] == 'BTB') {
                if ($k['tipe_pejabat'] == "Cabang") {
                    if ($j['tgl_surat_kuasa_pasangan'] != '') {
                        $namafile = 'PK BTB Cabang Surat Kuasa.docx';
                    } else if ($j['nama_pasangan'] != '') {
                        $namafile = 'PK BTB Cabang Kawin.docx';
                    } else if ($j['nama_pasangan'] == '') {
                        $namafile = 'PK BTB Cabang Lajang.docx';
                    }
                } else if ($k['tipe_pejabat'] == "Direksi") {
                    if ($j['tgl_surat_kuasa_pasangan'] != '') {
                        $namafile = 'PK BTB Direksi Surat Kuasa.docx';
                    } else if ($j['nama_pasangan'] != '') {
                        $namafile = 'PK BTB Direksi Kawin.docx';
                    } else if ($j['nama_pasangan'] == '') {
                        $namafile = 'PK BTB Direksi Lajang.docx';
                    }
                }
            }





            $data = new \PhpOffice\PhpWord\TemplateProcessor('cetak/cetakbaru/' . $namafile);
            $t = new terbilang();



            $pasangan = '';

            if ($j['jenis_kelamin_debitur'] == "PRIA") {
                $pasangan = 'ISTRI';
            } else {
                $pasangan = 'SUAMI';
            }





            // Membuat fungsi untuk htmlspecialchars
            function sanitize($value)
            {
                return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            }

            // sanitize pada semua data yang ada pada array 
            $j = array_map('sanitize', $j);
            $k = array_map('sanitize', $k);
            $l = array_map('sanitize', $l);
            $m = array_map('sanitize', $m);




            // formar tanggal ke format tanggal 
            $k['tanggal_lahir'] = $this->format_time_id($k['tanggal_lahir']);
            $k['tanggal_surat'] =  $this->format_time_id($k['tanggal_surat']);
            $l['tanggal_surat_limit'] = $this->format_time_id($l['tanggal_surat_limit']);
            $j['tgl_lahir_debitur'] = date('d-m-Y', strtotime($j['tgl_lahir_debitur']));
            $j['tgl_lahir_pasangan'] = date('d-m-Y', strtotime($j['tgl_lahir_pasangan']));
            $j['tgl_mulai_jw'] = date('d-m-Y', strtotime($j['tgl_mulai_jw']));
            $j['tgl_akhir_jw'] = date('d-m-Y', strtotime($j['tgl_akhir_jw']));
            $j['tgl_mulai_angsuran'] = date('d-m-Y', strtotime($j['tgl_mulai_angsuran']));
            $j['tgl_akhir_angsuran'] = date('d-m-Y', strtotime($j['tgl_akhir_angsuran']));



            // tambahan field diakhir
            $data->setValue('pasangan', $pasangan);
            $data->setValue('tgl_surat_kuasa_pasangan',  $this->format_time_id($j['tgl_surat_kuasa_pasangan']));



            // j
            $data->setValue('no_pk', $j['no_pk']);

            //k
            $data->setValue('sebutan', $k['sebutan']);
            $data->setValue('nama_pejabat', $k['nama_pejabat']);
            $data->setValue('tempat_lahir', $k['tempat_lahir']);
            $data->setValue('tanggal_lahir', $k['tanggal_lahir']);
            $data->setValue('jabatan', $k['jabatan']);
            $data->setValue('nomor_surat', $k['nomor_surat']);
            $data->setValue('tanggal_surat', $k['tanggal_surat']);
            $data->setValue('perihal_surat', $k['perihal_surat']);
            $data->setValue('jenis_surat', $k['jenis_surat']);
            $data->setValue('kota_pejabat', $k['kota_pejabat']);
            $data->setValue('alamat_pejabat', $k['alamat']);

            // l
            $data->setValue('nomor_surat_limit', $l['nomor_surat_limit']);
            $data->setValue('tanggal_surat_limit', $l['tanggal_surat_limit']);
            $data->setValue('perihal_surat_limit', $l['perihal_surat_limit']);


            // j    
            $data->setValue('nama_alias_debitur', $j['nama_alias_debitur']);
            $data->setValue('tempat_lahir_debitur', $j['tempat_lahir_debitur']);
            $data->setValue('tgl_lahir_debitur', $j['tgl_lahir_debitur']);
            $data->setValue('jenis_pekerjaan_debitur', $j['jenis_pekerjaan_debitur']);


            // space untuk bagian variabel yang ingin di beri di awal
            $space = '';


            $data->setValue('instansi_debitur', $j['instansi_debitur'] ? $space . '(' . $j['instansi_debitur'] . ')' : '');
            $data->setValue('no_ktp_debitur', $j['no_ktp_debitur']);
            $data->setValue('alamat_ktp_debitur', $j['alamat_ktp_debitur']);
            $data->setValue('alamat_domisili_debitur', $j['alamat_domisili_debitur']);
            $data->setValue('nama_alias_pasangan', $j['nama_alias_pasangan']);
            $data->setValue('tempat_lahir_pasangan', $j['tempat_lahir_pasangan']);
            $data->setValue('tgl_lahir_pasangan', $j['tgl_lahir_pasangan']);
            $data->setValue('jenis_pekerjaan_pasangan', $j['jenis_pekerjaan_pasangan']);
            $data->setValue('instansi_pasangan', $j['instansi_pasangan'] ? $space . '(' . $j['instansi_pasangan'] . ')' : '');
            $data->setValue('no_ktp_pasangan', $j['no_ktp_pasangan']);
            $data->setValue('alamat_ktp_pasangan', $j['alamat_ktp_pasangan']);
            $data->setValue('alamat_domisili_pasangan', $j['alamat_domisili_pasangan']);
            $data->setValue('no_sppk', $j['no_sppk']);

            $data->setValue('plafond', number_format($j['plafond'], 0, ',', '.'));
            $data->setValue('terbilang_plafond', $t->terbilang(strval($j['plafond'])));
            $data->setValue('jenis_kredit', $j['jenis_kredit']);
            $data->setValue('tujuan_penggunaan_kredit', $j['tujuan_penggunaan_kredit']);
            $data->setValue('jangka_waktu', $j['jangka_waktu']);
            $data->setValue('terbilang_jangka_waktu', $t->terbilang(strval($j['jangka_waktu'])));
            $data->setValue('tgl_mulai_jw', $j['tgl_mulai_jw']);
            $data->setValue('tgl_akhir_jw', $j['tgl_akhir_jw']);
            $data->setValue('suku_bunga', $j['suku_bunga']);
            $data->setValue('terbilang_suku_bunga', $t->terbilang(strval($j['suku_bunga'])));
            $data->setValue('sistem_bunga', $j['sistem_bunga']);
            $data->setValue('persen_provisi', $j['persen_provisi']);
            $data->setValue('terbilang_persen_provisi', $t->terbilang(strval($j['persen_provisi'])));
            $data->setValue('persen_administrasi', $j['persen_administrasi']);
            $data->setValue('terbilang_persen_administrasi', $t->terbilang(strval($j['persen_administrasi'])));

            $data->setValue('angsuran_perbulan',  number_format($j['angsuran_perbulan'], 0, ',', '.'));
            $data->setValue('angsuran_perbulan_terbilang', $t->terbilang(strval($j['angsuran_perbulan'])));
            $data->setValue('tgl_angsuran', $j['tgl_angsuran']);
            $data->setValue('terbilang_tanggal_angsuran', $t->terbilang(strval($j['tgl_angsuran'])));
            $data->setValue('tgl_mulai_angsuran', $j['tgl_mulai_angsuran']);
            $data->setValue('tgl_akhir_angsuran', $j['tgl_akhir_angsuran']);
            $data->setValue('denda', $j['denda']);
            $data->setValue('terbilang_denda', $t->terbilang(strval($j['denda'])));

            if ($j) {
                $jumlah_data = 0;

                for ($a = 1; $a <= 20; $a++) {
                    if ($j['jaminan_' . $a] != '') {
                        $jumlah_data = $a;
                    }
                }
                $data->cloneRow('jaminan',  $jumlah_data);

                for ($a = 1; $a <= $jumlah_data; $a++) {
                    $data->setValue('urutan_jaminan#' . $a, '2.' . $a);
                    $data->setValue('jaminan#' . $a, $j['jaminan_' . $a]);
                }

                // var_dump($jumlah_data);
                // exit();
            }


            $data->setValue('alamat', $m['alamat']);
            $data->setValue('telephone', $m['telephone']);
            $data->setValue('email', $m['email']);



            $data->setValue('alamat_domisili_debitur', $j['alamat_domisili_debitur']);
            $data->setValue('telepon_pemohon', $j['telepon_pemohon']);
            $data->setValue('media_sosial', $j['media_sosial']);


            $data->setValue('kota', $m['kota']);
            $data->setValue('pengadilan_negeri', $m['pengadilan_negeri']);


            // Simpan hasilnya ke dalam file output.docx
            $outputFilePath = 'cetak/cetakbaru/' . '_download_' . $namafile;
            $data->saveAs($outputFilePath);


            // Pisahkan nama file dan ekstensi
            $nama_ekstensi = explode('.', $namafile);
            $nama = $nama_ekstensi[0]; // Nama file
            $ekstensi = $nama_ekstensi[1]; // Ekstensi file

            // Ubah nama file dengan menambahkan " oke" sebelum ekstensi
            $namafile = $nama . ' ' . trim($j['nama_debitur']) . '.' . trim($ekstensi);


            // Setel header untuk pengunduhan
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . $namafile . '"');
            header('Content-Length: ' . filesize($outputFilePath));

            // Keluarkan isi file
            readfile($outputFilePath);

            // Hapus file yang dihasilkan setelah diunduh (opsional)
            unlink($outputFilePath);
            // Hentikan eksekusi script
            exit();
        } catch (Exception $e) {

            print_r("Error :" . $e);
        }
    }







    // public function cetak_pk($id)
    // {

    //     $terbilang = new terbilang();
    //     $format_tgl = new format_tanggal_indo();
    //     $data = $this->model('m_cetak')->cetak_pk($id);

    //     $data2 = $this->model('m_cetak')->ref_pejabat($data['pejabat_ttd']);

    //     $data5 = $this->model('m_cetak')->ref_sk_limit($data['id_sk']);

    //     $data3 = $this->model('m_cetak')->tbl_cabang($_COOKIE['kode_cabang']);

    //     // $jaminan = $this->model('m_cetak')->jaminan_tbl_wawancara($id);

    //     // nama file ketika download file dengan memberi nama pemohon
    //     $data['tbl_permohon_kredit'] = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
    //     $nama_pemohon = $data['tbl_permohon_kredit']['nama_pemohon'];
    //     $nama_file1 = "PK";
    //     $ext = ".rtf";
    //     $nama_file2 = $nama_file1 . " " . $nama_pemohon . $ext;



    //     $jk = $data['jenis_kelamin_debitur'];


    //     if ($jk == "PRIA") {
    //         $jk2 = "ISTRI";
    //     } else {
    //         $jk2 = "SUAMI";
    //     }




    //     if ($data != null) {
    //         $temp = '';

    //         for ($a = 1; $a <= 20; $a++) {
    //             if ($data['jaminan_' . $a] != '') {
    //                 $jaminan[$a] = '- ' . $data['jaminan_' . $a] . '\par' . ' ';
    //                 $temp = $temp . $jaminan[$a];
    //             }
    //         }
    //     }




    //     if ($data['tgl_surat_kuasa_pasangan'] != "") {
    //         $document = file_get_contents("cetak/PK " . $data2['tipe_pejabat'] . " Surat Kuasa.rtf");
    //         // cetak untuk keterangan pasangan
    //         $document = str_replace("#pasangan", $jk2, $document);
    //         $document = str_replace("#tglsuratkuasa", $format_tgl->format_tgl($data['tgl_surat_kuasa_pasangan']), $document);
    //     } else {
    //         if ($data['nama_pasangan'] != '' || $data['nama_pasangan'] != null) {
    //             $document = file_get_contents("cetak/PK " . $data2['tipe_pejabat'] . " Kawin.rtf");
    //         } else {
    //             $document = file_get_contents("cetak/PK " . $data2['tipe_pejabat'] . " Lajang.rtf");
    //         }
    //     }






    //     // if ($data['nama_pasangan'] != '' || $data['nama_pasangan'] != null) {
    //     //     $document = file_get_contents("cetak/PK Kawin.rtf");
    //     // } else {
    //     //     $document = file_get_contents("cetak/Surat Pernyataan - Lajang.rtf");
    //     // }



    //     $document = str_replace("#no_pk", $data['no_pk'], $document);


    //     $document = str_replace("#sebutan", $data2['sebutan'], $document);
    //     $document = str_replace("#nama_pejabat", $data2['nama_pejabat'], $document);
    //     $document = str_replace("#temp_lahir", $data2['tempat_lahir'], $document);
    //     $document = str_replace("#kot_pejabat", $data2['kota_pejabat'], $document);
    //     $document = str_replace("#alamat_pejabat", $data2['alamat'], $document);
    //     $document = str_replace("#tanggal_lahir", $format_tgl->format_tgl($data2['tanggal_lahir']), $document);
    //     $document = str_replace("#jabatan_pejabat", $data2['jabatan'], $document);
    //     $document = str_replace("#jns_surat", $data2['jenis_surat'], $document);
    //     $document = str_replace("#no_surat", $data2['nomor_surat'], $document);
    //     $document = str_replace("#tg_surat", $format_tgl->format_tgl($data2['tanggal_surat']), $document);
    //     $document = str_replace("#perihal_surat", $data2['perihal_surat'], $document);

    //     $document = str_replace("#jenis_surat_limit", $data5['jenis_surat_limit'], $document);
    //     $document = str_replace("#nomor_surat_limit", $data5['nomor_surat_limit'], $document);

    //     $document = str_replace("#tg_s_limit",  $format_tgl->format_tgl($data5['tanggal_surat_limit']), $document);
    //     $document = str_replace("#ps_limit", $data5['perihal_surat_limit'], $document);








    //     $document = str_replace("#nama_alias_debitur", $data['nama_alias_debitur'], $document);
    //     $document = str_replace("#tempat_lahir", $data['tempat_lahir_debitur'], $document);
    //     $document = str_replace("#tgl_lahir_debitur", date('d-m-Y', strtotime($data['tgl_lahir_debitur'])), $document);
    //     $document = str_replace("#jenis_pekerjaan_debitur", $data['jenis_pekerjaan_debitur'], $document);
    //     $document = str_replace("#instansi_debitur", $data['instansi_debitur'], $document);
    //     $document = str_replace("#no_ktp_debitur", $data['no_ktp_debitur'], $document);
    //     $document = str_replace("#alamat_ktp_debitur", $data['alamat_ktp_debitur'], $document);
    //     $document = str_replace("#alamat_domisili_debitur", $data['alamat_domisili_debitur'], $document);
    //     $document = str_replace("#nama_alias_pasangan", $data['nama_alias_pasangan'], $document);
    //     $document = str_replace("#t_lahir_pasangan", $data['tempat_lahir_pasangan'], $document);
    //     $document = str_replace("#tgl_lahir_pasangan", date('d-m-Y', strtotime($data['tgl_lahir_pasangan'])),  $document);
    //     $document = str_replace("#jenis_pekerjaan_pasangan", $data['jenis_pekerjaan_pasangan'], $document);
    //     $document = str_replace("#instansi_pasangan", $data['instansi_pasangan'], $document);

    //     $document = str_replace("#no_ktp_pasangan", $data['no_ktp_pasangan'], $document);
    //     $document = str_replace("#alamat_ktp_pasangan", $data['alamat_ktp_pasangan'], $document);
    //     $document = str_replace("#alamat_domisili_pasangan", $data['alamat_domisili_pasangan'], $document);



    //     $document = str_replace("#plafond", number_format($data['plafond'], 0, ',', '.'), $document);
    //     $document = str_replace("#terbilang", preg_replace("/[[:blank:]]+/", " ", $terbilang->terbilang(strval($data['plafond']))), $document);
    //     $document = str_replace("#jwterbilang", preg_replace("/[[:blank:]]+/", " ", $terbilang->terbilang(strval($data['jangka_waktu']))), $document);
    //     $document = str_replace("#sbterbilang", $terbilang->terbilang($data['suku_bunga']), $document);
    //     $document = str_replace("#ppterbilang", $terbilang->terbilang($data['persen_provisi']), $document);
    //     $document = str_replace("#paterbilang", $terbilang->terbilang($data['persen_administrasi']), $document);
    //     $document = str_replace("#apterbilang", $terbilang->terbilang(strval($data['angsuran_perbulan'])), $document);
    //     $document = str_replace("#pdterbilang", $terbilang->terbilang(strval($data['denda'])), $document);
    //     // $document = str_replace("#terbilang",  $this->terbilang($data['plafond']), $document);
    //     $document = str_replace("#tipe_kredit", $data['jenis_kredit'], $document);
    //     $document = str_replace("#jangka_waktu", $data['jangka_waktu'], $document);
    //     $document = str_replace("#tgl_mulai_jw", date('d-m-Y', strtotime($data['tgl_mulai_jw'])), $document);
    //     $document = str_replace("#tgl_akhir_jw",  date('d-m-Y', strtotime($data['tgl_akhir_jw'])), $document);
    //     $document = str_replace("#jaminan", $temp, $document);

    //     $document = str_replace("#suku_bunga", $data['suku_bunga'], $document);
    //     $document = str_replace("#sistem_bunga", $data['sistem_bunga'], $document);
    //     $document = str_replace("#angsuran_perbulan", number_format($data['angsuran_perbulan'], 0, ',', '.'), $document);
    //     $document = str_replace("#persen_provisi", $data['persen_provisi'], $document);
    //     $document = str_replace("#persen_administrasi", $data['persen_administrasi'], $document);
    //     $document = str_replace("#tujuan_penggunaan_kredit", $data['tujuan_penggunaan_kredit'], $document);
    //     $document = str_replace("#kota", $data3['kota'], $document);

    //     $document = str_replace("#tgl_mulai_angsuran",  date('d-m-Y', strtotime($data['tgl_mulai_angsuran'])), $document);
    //     $document = str_replace("#tgl_angsuran",  $data['tgl_angsuran'], $document);
    //     $document = str_replace("#tgl_akhir_angsuran",  date('d-m-Y', strtotime($data['tgl_akhir_angsuran'])), $document);
    //     $document = str_replace("#persen_denda", $data['denda'], $document);
    //     $document = str_replace("#pejabat_ttd", $data['pejabat_ttd'], $document);
    //     $document = str_replace("#tujuan_penggunaan_kredit", $data['tujuan_penggunaan_kredit'], $document);
    //     $document = str_replace("#pengadilan_negeri", $data3['pengadilan_negeri'], $document);








    //     $document = str_replace("#jaminan1", $temp, $document);

    //     header("Content-type: application/vnd.ms-word");
    //     header("Content-Disposition: attachment; Filename=" . $nama_file2);
    //     header('Pragma: no-cache');
    //     header("Expires: 0");
    //     echo $document;
    // }

    public function cetak_tanda_terima_jaminan($id)
    {

        $data = $this->model('m_cetak')->cetak_pk($id);

        // nama file ketika download file dengan memberi nama pemohon
        $dataa['tbl_permohon_kredit'] = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
        $nama_pemohon = $dataa['tbl_permohon_kredit']['nama_pemohon'];
        $nama_file1 = "Tanda Terima Jaminan";
        $ext = ".rtf";
        $nama_file2 = $nama_file1 . " " . $nama_pemohon . $ext;


        $jumlah_data = 0;


        if ($data != null) {
            $temp = '';

            for ($a = 1; $a <= 20; $a++) {
                if ($data['jaminan_' . $a] != '') {
                    // $jaminan[$a ] = $data['jaminan_' . $a ] . '\par' . ' ';
                    // $temp = $temp . $jaminan[$a ];
                    $jumlah_data = $a;
                }
            }

            for ($a = 1; $a <= 20; $a++) {

                if ($a <= $jumlah_data - 1) {
                    $jaminan[$a] = $data['jaminan_' . $a] . '\par' . ' ';
                    $temp = $temp . $jaminan[$a];
                } else if ($a == $jumlah_data) {
                    $jaminan[$a] = $data['jaminan_' . $a];
                    $temp = $temp . $jaminan[$a];
                }
            }
        }

        $document = file_get_contents("cetak/Tanda Terima Jaminan.rtf");


        $document = str_replace("#nama_alias_debitur", $data['nama_alias_debitur'], $document);
        $document = str_replace("#jenis_pekerjaan_debitur", $data['jenis_pekerjaan_debitur'], $document);
        $document = str_replace("#instansi_debitur", $data['instansi_debitur'], $document);
        $document = str_replace("#tempat_lahir_debitur", $data['tempat_lahir_debitur'], $document);
        $document = str_replace("#tgl_lahir_debitur", date('d-m-Y', strtotime($data['tgl_lahir_debitur'])), $document);
        $document = str_replace("#alamat_ktp_debitur", $data['alamat_ktp_debitur'], $document);
        $document = str_replace("#alamat_domisili_debitur", $data['alamat_domisili_debitur'], $document);
        $document = str_replace("#no_pk", $data['no_pk'], $document);


        $document = str_replace("#jaminan", $temp, $document);



        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file2);
        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;
    }

    public function cetak_surat_kuasa($id)
    {



        $format_tgl = new format_tanggal_indo();
        $data = $this->model('m_cetak')->cetak_pk($id);
        $data2 = $this->model('m_cetak')->ref_pejabat($data['pejabat_ttd']);
        $data3 = $this->model('m_cetak')->tbl_cabang($_COOKIE['kode_cabang']);
        $data4 = $this->model('m_cetak')->tbl_jenis_pekerjaan($data['jenis_pekerjaan_debitur']);


        // nama file ketika download file dengan memberi nama pemohon
        $dataa['tbl_permohon_kredit'] = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
        $nama_pemohon = $dataa['tbl_permohon_kredit']['nama_pemohon'];
        $nama_file1 = "Surat Kuasa";
        $ext = ".rtf";
        $nama_file2 = $nama_file1 . " " . $nama_pemohon . $ext;






        if ($data['nama_pasangan'] != '' || $data['nama_pasangan'] != null) {
            $document = file_get_contents("cetak/Surat Kuasa - Kawin.rtf");
        } else {
            $document = file_get_contents("cetak/Surat Kuasa - Lajang.rtf");
        }




        $document = str_replace("#nama_alias_debitur", $data['nama_alias_debitur'], $document);
        $document = str_replace("#tempat_lahir_debitur", $data['tempat_lahir_debitur'], $document);
        $document = str_replace("#tgl_lahir_debitur", isset($data['tgl_lahir_debitur']) ?  $format_tgl->format_tgl($data['tgl_lahir_debitur']) : '', $document);
        $document = str_replace("#jenis_pekerjaan_debitur", $data['jenis_pekerjaan_debitur'], $document);
        $document = str_replace("#instansi_debitur", $data['instansi_debitur'], $document);
        $document = str_replace("#alamat_ktp_debitur", $data['alamat_ktp_debitur'], $document);
        $document = str_replace("#alamat_domisili_debitur", $data['alamat_domisili_debitur'], $document);
        $document = str_replace("#bukti", $data4['surat_kuasa_pencairan'], $document);

        $document = str_replace("#nama_pejabat", $data2['nama_pejabat'], $document);
        $document = str_replace("#tempat_lahir_pejabat", $data2['tempat_lahir'], $document);
        $document = str_replace("#tanggal_lahir", isset($data2['tanggal_lahir']) ? $format_tgl->format_tgl($data2['tanggal_lahir']) : '', $document);
        $document = str_replace("#jabatan", $data2['jabatan'], $document);
        $document = str_replace("#alamat", $data2['alamat'], $document);
        $document = str_replace("#kt_pejabat", $data2['kota_pejabat'], $document);
        $document = str_replace("#no_pk", $data['no_pk'], $document);
        $document = str_replace("#kota", $data3['kota'], $document);
        $document = str_replace("#tgl_mulai_jw", isset($data['tgl_mulai_jw']) ? $format_tgl->format_tgl($data['tgl_mulai_jw']) : '-Belum terisi-', $document);


        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file2);
        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;
    }



    public function surat_pernyataan($id)
    {


        $format_tgl = new format_tanggal_indo();
        $data = $this->model('m_cetak')->cetak_pk($id);
        $data3 = $this->model('m_cetak')->tbl_cabang($_COOKIE['kode_cabang']);

        // nama file ketika download file dengan memberi nama pemohon
        $dataa['tbl_permohon_kredit'] = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
        $nama_pemohon = $dataa['tbl_permohon_kredit']['nama_pemohon'];
        $nama_file1 = "Surat Pernyataan";
        $ext = ".rtf";
        $nama_file2 = $nama_file1 . " " . $nama_pemohon . $ext;




        if (!$this->validateDate($data['tgl_lahir_pasangan'])) {
            $data['tgl_lahir_pasangan'] = null;
        }








        if ($data['nama_pasangan'] != '' || $data['nama_pasangan'] != null) {
            $document = file_get_contents("cetak/Surat Pernyataan - Kawin.rtf");
        } else {
            $document = file_get_contents("cetak/Surat Pernyataan - Lajang.rtf");
        }




        $document = str_replace("#nama_alias_debitur", $data['nama_alias_debitur'], $document);
        $document = str_replace("#tempat_lahir_debitur", $data['tempat_lahir_debitur'], $document);
        $document = str_replace("#tgl_lahir_debitur", isset($data['tgl_lahir_debitur']) ? $format_tgl->format_tgl($data['tgl_lahir_debitur']) : '-Belum terisi-', $document);
        $document = str_replace("#jenis_pekerjaan_debitur", $data['jenis_pekerjaan_debitur'], $document);
        $document = str_replace("#instansi_debitur", $data['instansi_debitur'], $document);
        $document = str_replace("#no_ktp_debitur", $data['no_ktp_debitur'], $document);
        $document = str_replace("#alamat_ktp_debitur", $data['alamat_ktp_debitur'], $document);
        $document = str_replace("#alamat_domisili_debitur", $data['alamat_domisili_debitur'], $document);




        $document = str_replace("#nama_alias_pasangan", $data['nama_alias_pasangan'], $document);
        $document = str_replace("#tempat_lahir_pasangan", $data['tempat_lahir_pasangan'], $document);
        $document = str_replace("#tgl_lahir_pasangan", isset($data['tgl_lahir_pasangan']) ? $format_tgl->format_tgl($data['tgl_lahir_pasangan']) : '-Belum terisi-', $document);
        $document = str_replace("#jenis_pekerjaan_pasangan", $data['jenis_pekerjaan_pasangan'], $document);
        $document = str_replace("#instansi_pasangan", $data['instansi_pasangan'], $document);
        $document = str_replace("#no_ktp_pasangan", $data['no_ktp_pasangan'], $document);
        $document = str_replace("#alamat_ktp_pasangan", $data['alamat_ktp_pasangan'], $document);
        $document = str_replace("#alamat_domisili_pasangan", $data['alamat_domisili_pasangan'], $document);

        $document = str_replace("#kota", $data3['kota'], $document);
        $document = str_replace("#tgl_mulai_jw", isset($data['tgl_mulai_jw']) ? $format_tgl->format_tgl($data['tgl_mulai_jw']) : "-Belum terisi-", $document);

        $document = str_replace("#nama_pasangan", $data['nama_pasangan'], $document);

        if ($data['jenis_kelamin_debitur'] == 'PRIA') {
            $document = str_replace("#pasangan", "Istri", $document);
        } else {
            $document = str_replace("#pasangan", "Suami", $document);
        }
        $document = str_replace("#nama_debitur", $data['nama_debitur'], $document);











        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file2);

        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;
    }

    public function surat_kuasa_atm($id)
    {

        $format_tgl = new format_tanggal_indo();
        $data = $this->model('m_cetak')->cetak_pk($id);
        $data2 = $this->model('m_cetak')->ref_pejabat($data['pejabat_ttd']);
        $data3 = $this->model('m_cetak')->tbl_cabang($_COOKIE['kode_cabang']);

        // nama file ketika download file dengan memberi nama pemohon
        $dataa['tbl_permohon_kredit'] = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
        $nama_pemohon = $dataa['tbl_permohon_kredit']['nama_pemohon'];
        $nama_file1 = "Surat Kuasa ATM";
        $ext = ".rtf";
        $nama_file2 = $nama_file1 . " " . $nama_pemohon . $ext;



        $document = file_get_contents("cetak/Surat Kuasa ATM.rtf");

        $document = str_replace("#nama_alias_debitur", $data['nama_alias_debitur'], $document);
        $document = str_replace("#tempat_lahir_debitur", $data['tempat_lahir_debitur'], $document);
        $document = str_replace("#tgl_lahir_debitur", $format_tgl->format_tgl($data['tgl_lahir_debitur']), $document);
        $document = str_replace("#jenis_pekerjaan_debitur", $data['jenis_pekerjaan_debitur'], $document);
        $document = str_replace("#instansi_debitur", $data['instansi_debitur'], $document);
        $document = str_replace("#alamat_ktp_debitur", $data['alamat_ktp_debitur'], $document);
        $document = str_replace("#alamat_domisili_debitur", $data['alamat_domisili_debitur'], $document);

        $document = str_replace("#nama_pejabat", $data2['nama_pejabat'], $document);
        $document = str_replace("#tempat_lahir", $data2['tempat_lahir'], $document);
        $document = str_replace("#tanggal_lahir",  $format_tgl->format_tgl($data2['tanggal_lahir']), $document);
        $document = str_replace("#jabatan", $data2['jabatan'], $document);
        $document = str_replace("#alamat", $data2['alamat'], $document);
        $document = str_replace("#kota_pejabat", $data2['kota_pejabat'], $document);
        $document = str_replace("#kota", $data3['kota'], $document);
        $document = str_replace("#tgl_mulai_jw", isset($data['tgl_mulai_jw']) ? $format_tgl->format_tgl($data['tgl_mulai_jw']) : "-Belum terisi-", $document);

        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file2);
        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;
    }





    public function spk_asuransi($id)
    {


        $format_tgl = new format_tanggal_indo();
        $data = $this->model('m_cetak')->cetak_spk($id);
        $data3 = $this->model('m_cetak')->tbl_cabang($_COOKIE['kode_cabang']);
        // nama file ketika download file dengan memberi nama pemohon
        $dataa['tbl_permohon_kredit'] = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
        $nama_pemohon = $dataa['tbl_permohon_kredit']['nama_pemohon'];
        $nama_file1 = "SPK (Asuransi)";
        $ext = ".rtf";
        $nama_file2 = $nama_file1 . " " . $nama_pemohon . $ext;


        $document = file_get_contents("cetak/SPK.rtf");

        $document = str_replace("#nama_debitur", $data['nama_debitur'], $document);
        $document = str_replace("#jenis_kelamin_debitur", $data['jenis_kelamin_debitur'], $document);
        $document = str_replace("#tempat_lahir_debitur", $data['tempat_lahir_debitur'], $document);
        $document = str_replace("#tgl_lahir_debitur", $format_tgl->format_tgl($data['tgl_lahir_debitur']), $document);
        // $document = str_replace("#usia_debitur_tahun", $this->hitung_umur($data['tgl_lahir_debitur']), $document);
        // $document = str_replace("#jenis_pekerjaan_debitur", $data['jenis_pekerjaan_debitur'], $document);
        $document = str_replace("#instansi_debitur", $data['instansi_debitur'], $document);
        $document = str_replace("#alamat_instansi", $dataa['tbl_permohon_kredit']['alamat_instansi'], $document);
        $document = str_replace("#alamat_ktp_debitur", $data['alamat_ktp_debitur'], $document);
        $document = str_replace("#telepon_instansi", $dataa['tbl_permohon_kredit']['telepon_instansi'], $document);
        $document = str_replace("#telepon_pemohon", $dataa['tbl_permohon_kredit']['telepon_pemohon'], $document);
        // $document = str_replace("#alamat_domisili_debitur", $data['alamat_domisili_debitur'], $document);
        $document = str_replace("#plafond", number_format($data['plafond'], 0, ',', '.'), $document);
        $document = str_replace("#jw", number_format(($data['jangka_waktu'] / 12), 0, ',', '.'), $document);
        $document = str_replace("#tgl_mulai_jw", isset($data['tgl_mulai_jw']) ? $format_tgl->format_tgl($data['tgl_mulai_jw']) : "-Belum terisi-", $document);
        // $document = str_replace("#tgl_akhir_jw", isset($data['tgl_akhir_jw']) ?  $format_tgl->format_tgl($data['tgl_akhir_jw']) : "-Belum terisi-", $document);
        // $document = str_replace("#asuransi_jiwa", number_format($data['asuransi_jiwa'], 0, ',', '.'), $document);
        // $document = str_replace("#tahun_jw", (int)$this->hitung_waktu($data['tgl_mulai_jw'], $data['tgl_akhir_jw']), $document);
        $document = str_replace("#kota", $data3['kota'], $document);
        // $document = str_replace("#tgl_mulai_jw", isset($data['tgl_mulai_jw']) ? $format_tgl->format_tgl($data['tgl_mulai_jw']) : '-Belum terisi-', $document);

        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file2);
        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;
    }

    public function skkt_asuransi($id)
    {

        $format_tgl = new format_tanggal_indo();
        $data = $this->model('m_cetak')->cetak_pk($id);
        $data2 = $this->model('m_cetak')->ref_pejabat($data['pejabat_ttd']);
        $data3 = $this->model('m_cetak')->tbl_cabang($_COOKIE['kode_cabang']);

        // nama file ketika download file dengan memberi nama pemohon
        $dataa['tbl_permohon_kredit'] = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
        $nama_pemohon = $dataa['tbl_permohon_kredit']['nama_pemohon'];
        $nama_file1 = "SKKT Asuransi";
        $ext = ".rtf";
        $nama_file2 = $nama_file1 . " " . $nama_pemohon . $ext;

        $document = file_get_contents("cetak/SKKT Asuransi.rtf");

        $document = str_replace("#nama_debitur", $data['nama_debitur'], $document);
        $document = str_replace("#jenis_kelamin_debitur", $data['jenis_kelamin_debitur'], $document);
        $document = str_replace("#tempat_lahir_debitur", $data['tempat_lahir_debitur'], $document);
        $document = str_replace("#tgl_lahir_debitur", $format_tgl->format_tgl($data['tgl_lahir_debitur']), $document);
        $document = str_replace("#alamat_ktp_debitur", $data['alamat_ktp_debitur'], $document);
        $document = str_replace("#jenis_pekerjaan_debitur", $data['jenis_pekerjaan_debitur'], $document);
        $document = str_replace("#instansi_debitur", $data['instansi_debitur'], $document);
        $document = str_replace("#kota", $data3['kota'], $document);
        $document = str_replace("#tgl_mulai_jw", isset($data['tgl_mulai_jw']) ?  $format_tgl->format_tgl($data['tgl_mulai_jw']) : '-Belum terisi-', $document);

        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file2);
        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;
    }


    public function aft_bni($id)
    {




        $terbilang = new terbilang();
        $format_tgl = new format_tanggal_indo();
        $data = $this->model('m_cetak')->cetak_pk($id);

        $data3 = $this->model('m_cetak')->tbl_cabang($_COOKIE['kode_cabang']);

        // nama file ketika download file dengan memberi nama pemohon
        $dataa['tbl_permohon_kredit'] = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
        $nama_pemohon = $dataa['tbl_permohon_kredit']['nama_pemohon'];
        $nama_file1 = "AFT BNI";
        $ext = ".rtf";
        $nama_file2 = $nama_file1 . " " . $nama_pemohon . $ext;

        $document = file_get_contents("cetak/AFT BNI.rtf");

        $document = str_replace("#nama_debitur", $data['nama_debitur'], $document);
        $document = str_replace("#no_ktp_debitur", $data['no_ktp_debitur'], $document);
        $document = str_replace("#alamat_ktp_debitur", $data['alamat_ktp_debitur'], $document);
        $document = str_replace("#angsuran_perbulan", number_format($data['angsuran_perbulan'], 0, ',', '.'), $document);
        $document = str_replace("#terbilang_angsuran", $terbilang->terbilang(strval($data['angsuran_perbulan'])), $document);

        $document = str_replace("#kota", $data3['kota'], $document);
        $document = str_replace("#tgl_mulai_jw", isset($data['tgl_mulai_jw']) ? $format_tgl->format_tgl($data['tgl_mulai_jw']) : "-Belum terisi-", $document);

        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file2);
        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;
    }



    public function ceklis_berkas($id)
    {



        $data = $this->model('m_cetak')->cetak_pk($id);
        $data3 = $this->model('m_cetak')->tbl_cabang($_COOKIE['kode_cabang']);
        $data4 = $this->model('m_cetak')->tbl_jenis_pekerjaan($data['jenis_pekerjaan_debitur']);

        // nama file ketika download file dengan memberi nama pemohon
        $dataa['tbl_permohon_kredit'] = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
        $nama_pemohon = $dataa['tbl_permohon_kredit']['nama_pemohon'];
        $nama_file1 = "Checklist Berkas";
        $ext = ".rtf";
        $nama_file2 = $nama_file1 . " " . $data4['checklist_berkas'] . $nama_pemohon . $ext;




        $document = file_get_contents("cetak/Checklist Berkas " . $data4['checklist_berkas'] . ".rtf");



        $document = str_replace("#nama_debitur", $data['nama_debitur'], $document);
        $document = str_replace("#no_pk", $data['no_pk'], $document);
        $document = str_replace("#plafond", number_format($data['plafond'], 0, ',', '.'), $document);
        $document = str_replace("#jangka_waktu", $data['jangka_waktu'], $document);
        $document = str_replace("#suku_bunga", $data['suku_bunga'], $document);
        $document = str_replace("#sistem_bunga", $data['sistem_bunga'], $document);
        $document = str_replace("#instansi_debitur", $data['instansi_debitur'], $document);
        $document = str_replace("#kota", $data3['kota'], $document);

        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file2);
        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;
    }

    public function bukti_pemberian_kredit($id)
    {

        $format_tgl = new format_tanggal_indo();
        $data = $this->model('m_cetak')->cetak_pk($id);
        $data3 = $this->model('m_cetak')->tbl_cabang($_COOKIE['kode_cabang']);

        // nama file ketika download file dengan memberi nama pemohon
        $dataa['tbl_permohon_kredit'] = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
        $nama_pemohon = $dataa['tbl_permohon_kredit']['nama_pemohon'];
        $nama_file1 = "Bukti Pemberian Kredit";
        $ext = ".rtf";
        $nama_file2 = $nama_file1 . " " . $nama_pemohon . $ext;


        if ($data['nama_pasangan'] != '' || $data['nama_pasangan'] != null) {
            $document = file_get_contents("cetak/Bukti Pemberian Kredit Kawin.rtf");
        } else {
            $document = file_get_contents("cetak/Bukti Pemberian Kredit Lajang.rtf");
        }




        $total_potongan = $data['biaya_provisi'] +
            $data['biaya_administrasi'] +
            $data['asuransi_jiwa'] +
            $data['asuransi_kredit'] +
            $data['asuransi_kerugian'] +
            $data['biaya_notaris'] +
            $data['biaya_materai'] +
            $data['bunga_berjalan'] +
            $data['os_sebelumnya'];

        $total_diterima = $data['plafond'] - ($total_potongan + $data['tabungan_simitra'] + $data['angsuran_pertama']);



        $document = str_replace("#nama_alias_debitur", $data['nama_alias_debitur'], $document);
        $document = str_replace("#alamat_ktp_debitur", $data['alamat_ktp_debitur'], $document);
        $document = str_replace("#plafond", number_format($data['plafond'], 0, ',', '.'), $document);
        $document = str_replace("#pelunasan", number_format($data['os_sebelumnya'], 0, ',', '.'), $document);
        $document = str_replace("#sisa_plafond", number_format($data['penambahan'], 0, ',', '.'), $document);
        $document = str_replace("#nominal_provisi", number_format($data['biaya_provisi'], 0, ',', '.'), $document);
        $document = str_replace("#nominal_administrasi", number_format($data['biaya_administrasi'], 0, ',', '.'), $document);
        $document = str_replace("#asuransi_jiwa",  number_format($data['asuransi_jiwa'], 0, ',', '.'), $document);
        $document = str_replace("#asuransi_kredit", number_format($data['asuransi_kredit'], 0, ',', '.'), $document);
        $document = str_replace("#asuransi_kerugian", number_format($data['asuransi_kerugian'], 0, ',', '.'), $document);
        $document = str_replace("#biaya_notaris", number_format($data['biaya_notaris'], 0, ',', '.'), $document);
        $document = str_replace("#biaya_materai", number_format($data['biaya_materai'], 0, ',', '.'), $document);
        $document = str_replace("#bunga_berjalan", number_format($data['bunga_berjalan'], 0, ',', '.'), $document);
        $document = str_replace("#total_potongan", number_format($total_potongan, 0, ',', '.'), $document);
        $document = str_replace("#tabungan", number_format($data['tabungan_simitra'], 0, ',', '.'), $document);
        $document = str_replace("#angsuran_pertama", number_format($data['angsuran_pertama'], 0, ',', '.'), $document);
        $document = str_replace("#total_yang_diterima",  number_format($total_diterima, 0, ',', '.'), $document);
        $document = str_replace("#kode_jenis_penggunaan", $data['kode_jenis_penggunaan'], $document);
        $document = str_replace("#kode_sektor_ekonomi", $data['kode_sektor_ekonomi'], $document);
        $document = str_replace("#kota", $data3['kota'], $document);
        $document = str_replace("#tgl_mulai_jw", isset($data['tgl_mulai_jw']) ? $format_tgl->format_tgl($data['tgl_mulai_jw']) : "-Belum terisi-", $document);

        $document = str_replace("#no_pk", $data['no_pk'], $document);

        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file2);
        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;
    }



    public function cash_flow($id)
    {




        $terbilang = new terbilang();
        $format_tgl = new format_tanggal_indo();
        $data = $this->model('m_cetak')->cash_flow($id);

        $nama_pemohon =  $this->model('m_tbl_permohonan_kredit')->m_getWhereIdSigle($data['no_permohonan_kredit']);




        $ptt = 0;
        $akm = 0;

        $blt = 0;
        $akk = 0;
        $ka = 0;












        // pemohon
        if ($data != null) {


            $temp1 = '';
            $temp2 = '';
            $temp3 = '';


            $b = 0;
            $batas = 3;

            for ($a = 1; $a <= $batas; $a++) {
                if ($data['penghasilan_pemohon_tambahan_' . $a] != '' && $data['penghasilan_pemohon_tambahan_' . $a] != 0) {
                    $b++;
                }
            }

            $batas = $b;



            for ($a = 1; $a <= $batas; $a++) {
                if ($a <= $batas - 1) {
                    $label_ptm[$a] = 'Penghasilan Pemohon Tambahan ' . $this->getRomawi($a) . '\par' . ' ';
                    $ptm[$a] =  number_format($data['penghasilan_pemohon_tambahan_' . $a], 0, ',', '.')  . '\par' . ' ';
                    $ptt = $ptt + $data['penghasilan_pemohon_tambahan_' . $a];
                    $temp1 = $temp1 .  $label_ptm[$a];
                    $temp2 = $temp2 .  $ptm[$a];
                } else if ($a == $batas) {
                    $label_ptm[$a] = 'Penghasilan Pemohon Tambahan ' . $this->getRomawi($a);
                    $ptm[$a] = number_format($data['penghasilan_pemohon_tambahan_' . $a], 0, ',', '.');
                    $ptt = $ptt + $data['penghasilan_pemohon_tambahan_' . $a];
                    $temp1 = $temp1 .  $label_ptm[$a];
                    $temp2 = $temp2 . $ptm[$a];
                }

                if ($a <= $batas - 1) {

                    $k_ptm[$a] = $data['penghasilan_pemohon_tambahan_' . $a . '_ket'] . '\par' . ' ';
                    $temp3 = $temp3 .  $k_ptm[$a];
                } else if ($a == $batas) {

                    $k_ptm[$a] = $data['penghasilan_pemohon_tambahan_' . $a . '_ket'];
                    $temp3 = $temp3 .  $k_ptm[$a];
                }
            }
        }






        // pasangan

        if ($data != null) {
            $temp4 = '';
            $temp5 = '';
            $temp6 = '';
            $batas = 3;

            $b = 0;
            $batas = 3;

            for ($a = 1; $a <= $batas; $a++) {
                if ($data['penghasilan_pasangan_tambahan_' . $a] != '' && $data['penghasilan_pasangan_tambahan_' . $a] != 0) {
                    $b++;
                }
            }

            $batas = $b;



            for ($a = 1; $a <= $batas; $a++) {


                if ($batas != 0) {

                    if ($a <= $batas - 1) {
                        $label_ptm[$a] = 'Penghasilan Pasangan Tambahan ' . $this->getRomawi($a) . '\par' . ' ';
                        $ptm[$a] = number_format($data['penghasilan_pasangan_tambahan_' . $a], 0, ',', '.') . '\par' . ' ';
                        $ptt = $ptt + $data['penghasilan_pasangan_tambahan_' . $a];
                        $temp4 = $temp4 .  $label_ptm[$a];
                        $temp5 = $temp5 . $ptm[$a];
                    } else if ($a == $batas) {
                        $label_ptm[$a] = 'Penghasilan Pasangan Tambahan ' . $this->getRomawi($a);
                        $ptm[$a] = number_format($data['penghasilan_pasangan_tambahan_' . $a], 0, ',', '.');
                        $ptt = $ptt + $data['penghasilan_pasangan_tambahan_' . $a];
                        $temp4 = $temp4 .  $label_ptm[$a];
                        $temp5 = $temp5 . $ptm[$a];
                    }



                    if ($a <= $batas - 1) {

                        $k_ptm[$a] = $data['penghasilan_pasangan_tambahan_' . $a . '_ket'] . '\par' . ' ';
                        $temp6 = $temp6 .  $k_ptm[$a];
                    } else if ($a == $batas) {

                        $k_ptm[$a] = $data['penghasilan_pasangan_tambahan_' . $a . '_ket'];
                        $temp6 = $temp6 .  $k_ptm[$a];
                    }
                }
            }
        }






        // angsuran lain pemohon

        if ($data != null) {
            $temp7 = '';
            $temp8 = '';
            $temp9 = '';
            $temp99 = "";




            $b = 0;
            $batas = 7;

            for ($a = 1; $a <= $batas; $a++) {
                if ($data['angsuran_pemohon_lainnya_' . $a] != '' && $data['angsuran_pemohon_lainnya_' . $a] != 0) {
                    $b++;
                }
            }

            $batas = $b;





            for ($a = 1; $a <= $batas; $a++) {


                if ($a <= $batas - 1) {

                    $tigaaks[$a] =  'Angsuran Lain Pemohon ' . $this->getRomawi($a) . '\par' . ' ';
                    $tiga_h_aks[$a] = number_format($data['angsuran_pemohon_lainnya_' . $a], 0, ',', '.') . '\par' . ' ';
                    $blt = $blt + ($data['angsuran_pemohon_lainnya_' . $a] * $data['pemohon_lunasi_' . $a]);
                    $temp7 = $temp7 .  $tigaaks[$a];
                    $temp8 = $temp8 . $tiga_h_aks[$a];
                } else if ($a == $batas) {
                    $tigaaks[$a] =  'Angsuran Lain Pemohon ' . $this->getRomawi($a);
                    $tiga_h_aks[$a] = number_format($data['angsuran_pemohon_lainnya_' . $a], 0, ',', '.');
                    $blt = $blt + ($data['angsuran_pemohon_lainnya_' . $a] * $data['pemohon_lunasi_' . $a]);
                    $temp7 = $temp7 .  $tigaaks[$a];
                    $temp8 = $temp8 . $tiga_h_aks[$a];
                }


                if ($a <= $batas - 1) {


                    $data['pemohon_lunasi_' . $a] =  $data['pemohon_lunasi_' . $a] == '1' ? "Dilanjutkan" : 'Dilunasi';
                    $temp9 = $data['angsuran_pemohon_lainnya_' . $a . '_ket'] . '----------';
                    $tiga_ket_aks[$a] = $temp9 . $data['pemohon_lunasi_' . $a] . '\par' . ' ';
                    $temp99 = $temp99 .   $tiga_ket_aks[$a];
                } else if ($a == $batas) {

                    $data['pemohon_lunasi_' . $a] =  $data['pemohon_lunasi_' . $a] == '1' ? "Dilanjutkan" : 'Dilunasi';
                    $temp9 = $data['angsuran_pemohon_lainnya_' . $a . '_ket'] . '----------';
                    $tiga_ket_aks[$a] = $temp9 . $data['pemohon_lunasi_' . $a];
                    $temp99 = $temp99 .   $tiga_ket_aks[$a];
                }
            }
        }




        // angsuran lain pasangan

        if ($data != null) {
            $tempp1 = '';
            $tempp2 = '';
            $tempp3 = "";
            $tempp4 = "";



            $b = 0;
            $batas = 7;

            for ($a = 1; $a <= $batas; $a++) {
                if ($data['angsuran_pasangan_lainnya_' . $a] != '' &&  $data['angsuran_pasangan_lainnya_' . $a] != 0) {
                    $b++;
                }
            }

            $batas = $b;





            for ($a = 1; $a <= $batas; $a++) {



                if ($a <= $batas - 1) {

                    $aps[$a] =  'Angsuran Lain Pasangan ' . $this->getRomawi($a) . '\par' . ' ';
                    $hasil_aps[$a] = number_format($data['angsuran_pasangan_lainnya_' . $a], 0, ',', '.') . '\par' . ' ';
                    $blt = $blt + ($data['angsuran_pasangan_lainnya_' . $a] * $data['pasangan_lunasi_' . $a]);
                    $tempp1 = $tempp1 .  $aps[$a];
                    $tempp2 = $tempp2 . $hasil_aps[$a];
                } else if ($a == $batas) {
                    $aps[$a] =  'Angsuran Lain Pasangan ' . $this->getRomawi($a);
                    $hasil_aps[$a] = number_format($data['angsuran_pasangan_lainnya_' . $a], 0, ',', '.');
                    $blt = $blt + ($data['angsuran_pasangan_lainnya_' . $a] * $data['pasangan_lunasi_' . $a]);
                    $tempp1 = $tempp1 .  $aps[$a];
                    $tempp2 = $tempp2 . $hasil_aps[$a];
                }




                if ($a <= $batas - 1) {
                    $data['pasangan_lunasi_' . $a] =  $data['pasangan_lunasi_' . $a] == '1' ? "Dilanjutkan" : 'Dilunasi';
                    $tempp3 = $data['angsuran_pasangan_lainnya_' . $a . '_ket'] . '----------';
                    $ket_aps[$a] = $tempp3 . $data['pasangan_lunasi_' . $a] . '\par' . ' ';
                    $tempp4 = $tempp4 .   $ket_aps[$a];
                } else if ($a == $batas) {

                    $data['pasangan_lunasi_' . $a] =  $data['pasangan_lunasi_' . $a] == '1' ? "Dilanjutkan" : 'Dilunasi';
                    $tempp3 = $data['angsuran_pasangan_lainnya_' . $a . '_ket'] . '----------';
                    $ket_aps[$a] = $tempp3 . $data['pasangan_lunasi_' . $a];
                    $tempp4 = $tempp4 .   $ket_aps[$a];
                }
            }
        }




        $akm = $data['penghasilan_pemohon_perbulan'] + $data['penghasilan_pasangan_perbulan'] + $ptt;










        $nama_file1 = "Cash Flow";
        $ext = ".rtf";
        $nama_file2 = $nama_file1 . $ext;

        $nama_file3 = $nama_file1 . " " . $nama_pemohon['nama_pemohon'] . $ext;


        $document = file_get_contents("cetak/" . $nama_file2);


        $document = str_replace("#nama_pemohon", $nama_pemohon['nama_pemohon'], $document);
        $document = str_replace("#1_ppp", number_format($data['penghasilan_pemohon_perbulan'], 0, ',', '.'), $document);
        $document = str_replace("#1_k_ppp",  $data['penghasilan_pemohon_perbulan_ket'], $document);
        $document = str_replace("#1_ptp", $temp1, $document);
        $document = str_replace("#1_h_ptp",  $temp2, $document);
        $document = str_replace("#1_k_ptp", $temp3, $document);


        $document = str_replace("#2_ppp", number_format($data['penghasilan_pasangan_perbulan'], 0, ',', '.'), $document);
        $document = str_replace("#2_k_ppp", $data['penghasilan_pasangan_perbulan_ket'], $document);
        $document = str_replace("#2_ptp", $temp4, $document);
        $document = str_replace("#2_h_ptp", $temp5, $document);
        $document = str_replace("#2_k_ptp", $temp6, $document);

        $document = str_replace("#h_brts_1", number_format($data['biaya_hidup_sebulan'], 0, ',', '.'), $document);
        $document = str_replace("#h_brts_2", number_format($data['biaya_pendidikan'], 0, ',', '.'), $document);
        $document = str_replace("#h_brts_3", number_format($data['biaya_pam_listrik_telepon'], 0, ',', '.'), $document);
        $document = str_replace("#h_brts_4", number_format($data['biaya_transport'], 0, ',', '.'), $document);
        $document = str_replace("#h_brts_5", number_format($data['biaya_lainnya'], 0, ',', '.'), $document);



        $document = str_replace("#k_brts_1", $data['biaya_hidup_sebulan_ket'], $document);
        $document = str_replace("#k_brts_2", $data['biaya_pendidikan_ket'], $document);
        $document = str_replace("#k_brts_3", $data['biaya_pam_listrik_telepon_ket'], $document);
        $document = str_replace("#k_brts_4", $data['biaya_transport_ket'], $document);
        $document = str_replace("#k_brts_5", $data['biaya_lainnya_ket'], $document);


        $document = str_replace("#3_aks", number_format($data['angsuran_kredit_sebelumnya'], 0, ',', '.'), $document);
        $document = str_replace("#ket_3_aks", $data['angsuran_kredit_sebelumnya_ket'], $document);


        $document = str_replace("#3aks", $temp7, $document);
        $document = str_replace("#3_h_aks", $temp8, $document);
        $document = str_replace("#aks_ket", $temp99, $document);

        $document = str_replace("#aps", $tempp1, $document);
        $document = str_replace("#h_aps", $tempp2, $document);

        $document = str_replace("#ket_aps", $tempp4, $document);

        $document = str_replace("#kemampuan_membayar_angsuran", number_format($data['kemampuan_membayar_angsuran'], 0, ',', '.'), $document);

        $document = str_replace("#saldo_tabungan_terakhir", number_format($data['saldo_tabungan_terakhir'], 0, ',', '.'), $document);

        $document = str_replace("#ket_saldo_t_terakhir", $data['saldo_tabungan_terakhir_ket'], $document);




        $document = str_replace("#gbp", number_format($data['penghasilan_pemohon_perbulan'], 0, ',', '.'), $document);
        $document = str_replace("#psi", number_format($data['penghasilan_pasangan_perbulan'], 0, ',', '.'), $document);
        $document = str_replace("#ptt", number_format($ptt, 0, ',', '.'), $document);

        $document = str_replace("#akm", number_format($akm, 0, ',', '.'), $document);


        $document = str_replace("#brt", number_format($data['biaya_hidup_sebulan'], 0, ',', '.'), $document);
        $document = str_replace("#bp", number_format($data['biaya_pendidikan'], 0, ',', '.'), $document);
        $document = str_replace("#blpt", number_format($data['biaya_pam_listrik_telepon'], 0, ',', '.'), $document);
        $document = str_replace("#bt", number_format($data['biaya_transport'], 0, ',', '.'), $document);
        $document = str_replace("#bll", number_format($data['biaya_lainnya'], 0, ',', '.'), $document);
        $document = str_replace("#blt", number_format($blt, 0, ',', '.'), $document);
        $angsuran_perbulan = (int)($data['angsuran_perbulan'] / 1000);
        $document = str_replace("#akh",  number_format($angsuran_perbulan, 0, ',', '.'), $document);

        $akk =  $data['biaya_hidup_sebulan'] +
            $data['biaya_pendidikan'] +
            $data['biaya_pam_listrik_telepon'] +
            $data['biaya_transport'] +
            $data['biaya_lainnya'] +
            $angsuran_perbulan +
            $blt;



        $ka = $akm - $akk;
        $document = str_replace("#akk", number_format($akk, 0, ',', '.'), $document);

        $document = str_replace("#ka", number_format($ka, 0, ',', '.'), $document);


        $document = str_replace("#ak0", ($ka * 0), $document);
        $document = str_replace("#ak1", number_format(($ka * 1), 0, ',', '.'), $document);
        $document = str_replace("#ak2", number_format(($ka * 2), 0, ',', '.'), $document);
        $document = str_replace("#ak3", number_format(($ka * 3), 0, ',', '.'), $document);
        $document = str_replace("#ak4", number_format(($ka * 4), 0, ',', '.'), $document);


        $document = str_replace("#ak5", number_format(($ka * 5), 0, ',', '.'), $document);
        $document = str_replace("#ak6", number_format(($ka * 6), 0, ',', '.'), $document);
        $document = str_replace("#ak7", number_format(($ka * 7), 0, ',', '.'), $document);
        $document = str_replace("#ak8", number_format(($ka * 8), 0, ',', '.'), $document);
        $document = str_replace("#ak9", number_format(($ka * 9), 0, ',', '.'), $document);

        $document = str_replace("#10ak", number_format(($ka * 10), 0, ',', '.'), $document);
        $document = str_replace("#11ak", number_format(($ka * 11), 0, ',', '.'), $document);
        // $document = str_replace("#12ak", ($ka * 12), $document);




        $document = str_replace("#12mka", number_format(($akm * 12), 0, ',', '.'), $document);
        $document = str_replace("#12pbg", number_format(($data['penghasilan_pemohon_perbulan'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12isp", number_format(($data['penghasilan_pasangan_perbulan'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12ttp", number_format(($ptt * 12), 0, ',', '.'), $document);

        $document = str_replace("#12kka", number_format(($akk * 12), 0, ',', '.'), $document);
        $document = str_replace("#12trb", number_format(($data['biaya_hidup_sebulan'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12pb", number_format(($data['biaya_pendidikan'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12tplb", number_format(($data['biaya_pam_listrik_telepon'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12tb", number_format(($data['biaya_transport'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12llb", number_format(($data['biaya_lainnya'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12tla", number_format(($blt * 12), 0, ',', '.'), $document);
        $document = str_replace("#12hka", number_format(($angsuran_perbulan * 12), 0, ',', '.'), $document);

        $document = str_replace("#2kkaa", number_format(($ka * 2), 0, ',', '.'), $document);
        $document = str_replace("#3kkaa", number_format(($ka * 3), 0, ',', '.'), $document);
        $document = str_replace("#4kkaa", number_format(($ka * 4), 0, ',', '.'), $document);
        $document = str_replace("#5kkaa", number_format(($ka * 5), 0, ',', '.'), $document);
        $document = str_replace("#6kkaa", number_format(($ka * 6), 0, ',', '.'), $document);
        $document = str_replace("#7kkaa", number_format(($ka * 7), 0, ',', '.'), $document);
        $document = str_replace("#8kkaa", number_format(($ka * 8), 0, ',', '.'), $document);
        $document = str_replace("#9kkaa", number_format(($ka * 9), 0, ',', '.'), $document);
        $document = str_replace("#10kkaa", number_format(($ka * 10), 0, ',', '.'), $document);
        $document = str_replace("#kkaa11", number_format(($ka * 11), 0, ',', '.'), $document);
        $document = str_replace("#kkaa12", number_format(($ka * 12), 0, ',', '.'), $document);


        $document = str_replace("#persentasea", $data['persentase_angsuran'], $document);
        $document = str_replace("#pera", strtoupper($data['keterangan_persentase_angsuran']), $document);




        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file3);
        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;
    }




    public function analisa_keputusan($id)
    {








        $terbilang = new terbilang();
        $format_tgl = new format_tanggal_indo();
        $data = $this->model('m_cetak')->cash_flow($id);

        $nama_pemohon =  $this->model('m_tbl_permohonan_kredit')->m_getWhereIdSigle($data['no_permohonan_kredit']);




        $ptt = 0;
        $akm = 0;

        $blt = 0;
        $akk = 0;
        $ka = 0;












        // pemohon
        if ($data != null) {


            $temp1 = '';
            $temp2 = '';
            $temp3 = '';


            $b = 0;
            $batas = 3;

            for ($a = 1; $a <= $batas; $a++) {
                if ($data['penghasilan_pemohon_tambahan_' . $a] != '' && $data['penghasilan_pemohon_tambahan_' . $a] != 0) {
                    $b++;
                }
            }

            $batas = $b;



            for ($a = 1; $a <= $batas; $a++) {
                if ($a <= $batas - 1) {
                    $label_ptm[$a] = 'Penghasilan Pemohon Tambahan ' . $this->getRomawi($a) . '\par' . ' ';
                    $ptm[$a] =  number_format($data['penghasilan_pemohon_tambahan_' . $a], 0, ',', '.')  . '\par' . ' ';
                    $ptt = $ptt + $data['penghasilan_pemohon_tambahan_' . $a];
                    $temp1 = $temp1 .  $label_ptm[$a];
                    $temp2 = $temp2 .  $ptm[$a];
                } else if ($a == $batas) {
                    $label_ptm[$a] = 'Penghasilan Pemohon Tambahan ' . $this->getRomawi($a);
                    $ptm[$a] = number_format($data['penghasilan_pemohon_tambahan_' . $a], 0, ',', '.');
                    $ptt = $ptt + $data['penghasilan_pemohon_tambahan_' . $a];
                    $temp1 = $temp1 .  $label_ptm[$a];
                    $temp2 = $temp2 . $ptm[$a];
                }

                if ($a <= $batas - 1) {

                    $k_ptm[$a] = $data['penghasilan_pemohon_tambahan_' . $a . '_ket'] . '\par' . ' ';
                    $temp3 = $temp3 .  $k_ptm[$a];
                } else if ($a == $batas) {

                    $k_ptm[$a] = $data['penghasilan_pemohon_tambahan_' . $a . '_ket'];
                    $temp3 = $temp3 .  $k_ptm[$a];
                }
            }
        }






        // pasangan

        if ($data != null) {
            $temp4 = '';
            $temp5 = '';
            $temp6 = '';
            $batas = 3;

            $b = 0;
            $batas = 3;

            for ($a = 1; $a <= $batas; $a++) {
                if ($data['penghasilan_pasangan_tambahan_' . $a] != '' && $data['penghasilan_pasangan_tambahan_' . $a] != 0) {
                    $b++;
                }
            }

            $batas = $b;



            for ($a = 1; $a <= $batas; $a++) {


                if ($batas != 0) {

                    if ($a <= $batas - 1) {
                        $label_ptm[$a] = 'Penghasilan Pasangan Tambahan ' . $this->getRomawi($a) . '\par' . ' ';
                        $ptm[$a] = number_format($data['penghasilan_pasangan_tambahan_' . $a], 0, ',', '.') . '\par' . ' ';
                        $ptt = $ptt + $data['penghasilan_pasangan_tambahan_' . $a];
                        $temp4 = $temp4 .  $label_ptm[$a];
                        $temp5 = $temp5 . $ptm[$a];
                    } else if ($a == $batas) {
                        $label_ptm[$a] = 'Penghasilan Pasangan Tambahan ' . $this->getRomawi($a);
                        $ptm[$a] = number_format($data['penghasilan_pasangan_tambahan_' . $a], 0, ',', '.');
                        $ptt = $ptt + $data['penghasilan_pasangan_tambahan_' . $a];
                        $temp4 = $temp4 .  $label_ptm[$a];
                        $temp5 = $temp5 . $ptm[$a];
                    }



                    if ($a <= $batas - 1) {

                        $k_ptm[$a] = $data['penghasilan_pasangan_tambahan_' . $a . '_ket'] . '\par' . ' ';
                        $temp6 = $temp6 .  $k_ptm[$a];
                    } else if ($a == $batas) {

                        $k_ptm[$a] = $data['penghasilan_pasangan_tambahan_' . $a . '_ket'];
                        $temp6 = $temp6 .  $k_ptm[$a];
                    }
                }
            }
        }






        // angsuran lain pemohon

        if ($data != null) {
            $temp7 = '';
            $temp8 = '';
            $temp9 = '';
            $temp99 = "";




            $b = 0;
            $batas = 7;

            for ($a = 1; $a <= $batas; $a++) {
                if ($data['angsuran_pemohon_lainnya_' . $a] != '' && $data['angsuran_pemohon_lainnya_' . $a] != 0) {
                    $b++;
                }
            }

            $batas = $b;





            for ($a = 1; $a <= $batas; $a++) {


                if ($a <= $batas - 1) {

                    $tigaaks[$a] =  'Angsuran Lain Pemohon ' . $this->getRomawi($a) . '\par' . ' ';
                    $tiga_h_aks[$a] = number_format($data['angsuran_pemohon_lainnya_' . $a], 0, ',', '.') . '\par' . ' ';
                    $blt = $blt + ($data['angsuran_pemohon_lainnya_' . $a] * $data['pemohon_lunasi_' . $a]);
                    $temp7 = $temp7 .  $tigaaks[$a];
                    $temp8 = $temp8 . $tiga_h_aks[$a];
                } else if ($a == $batas) {
                    $tigaaks[$a] =  'Angsuran Lain Pemohon ' . $this->getRomawi($a);
                    $tiga_h_aks[$a] = number_format($data['angsuran_pemohon_lainnya_' . $a], 0, ',', '.');
                    $blt = $blt + ($data['angsuran_pemohon_lainnya_' . $a] * $data['pemohon_lunasi_' . $a]);
                    $temp7 = $temp7 .  $tigaaks[$a];
                    $temp8 = $temp8 . $tiga_h_aks[$a];
                }


                if ($a <= $batas - 1) {


                    $data['pemohon_lunasi_' . $a] =  $data['pemohon_lunasi_' . $a] == '1' ? "Dilanjutkan" : 'Dilunasi';
                    $temp9 = $data['angsuran_pemohon_lainnya_' . $a . '_ket'] . '----------';
                    $tiga_ket_aks[$a] = $temp9 . $data['pemohon_lunasi_' . $a] . '\par' . ' ';
                    $temp99 = $temp99 .   $tiga_ket_aks[$a];
                } else if ($a == $batas) {

                    $data['pemohon_lunasi_' . $a] =  $data['pemohon_lunasi_' . $a] == '1' ? "Dilanjutkan" : 'Dilunasi';
                    $temp9 = $data['angsuran_pemohon_lainnya_' . $a . '_ket'] . '----------';
                    $tiga_ket_aks[$a] = $temp9 . $data['pemohon_lunasi_' . $a];
                    $temp99 = $temp99 .   $tiga_ket_aks[$a];
                }
            }
        }




        // angsuran lain pasangan

        if ($data != null) {
            $tempp1 = '';
            $tempp2 = '';
            $tempp3 = "";
            $tempp4 = "";



            $b = 0;
            $batas = 7;

            for ($a = 1; $a <= $batas; $a++) {
                if ($data['angsuran_pasangan_lainnya_' . $a] != '' &&  $data['angsuran_pasangan_lainnya_' . $a] != 0) {
                    $b++;
                }
            }

            $batas = $b;






            for ($a = 1; $a <= $batas; $a++) {



                if ($a <= $batas - 1) {

                    $aps[$a] =  'Angsuran Lain Pasangan ' . $this->getRomawi($a) . '\par' . ' ';
                    $hasil_aps[$a] = number_format($data['angsuran_pasangan_lainnya_' . $a], 0, ',', '.') . '\par' . ' ';
                    $blt = $blt + ($data['angsuran_pasangan_lainnya_' . $a] * $data['pasangan_lunasi_' . $a]);
                    $tempp1 = $tempp1 .  $aps[$a];
                    $tempp2 = $tempp2 . $hasil_aps[$a];
                } else if ($a == $batas) {
                    $aps[$a] =  'Angsuran Lain Pasangan ' . $this->getRomawi($a);
                    $hasil_aps[$a] = number_format($data['angsuran_pasangan_lainnya_' . $a], 0, ',', '.');
                    $blt = $blt + ($data['angsuran_pasangan_lainnya_' . $a] * $data['pasangan_lunasi_' . $a]);
                    $tempp1 = $tempp1 .  $aps[$a];
                    $tempp2 = $tempp2 . $hasil_aps[$a];
                }




                if ($a <= $batas - 1) {
                    $data['pasangan_lunasi_' . $a] =  $data['pasangan_lunasi_' . $a] == '1' ? "Dilanjutkan" : 'Dilunasi';
                    $tempp3 = $data['angsuran_pasangan_lainnya_' . $a . '_ket'] . '----------';
                    $ket_aps[$a] = $tempp3 . $data['pasangan_lunasi_' . $a] . '\par' . ' ';
                    $tempp4 = $tempp4 .   $ket_aps[$a];
                } else if ($a == $batas) {

                    $data['pasangan_lunasi_' . $a] =  $data['pasangan_lunasi_' . $a] == '1' ? "Dilanjutkan" : 'Dilunasi';
                    $tempp3 = $data['angsuran_pasangan_lainnya_' . $a . '_ket'] . '----------';
                    $ket_aps[$a] = $tempp3 . $data['pasangan_lunasi_' . $a];
                    $tempp4 = $tempp4 .   $ket_aps[$a];
                }
            }
        }




        $akm = $data['penghasilan_pemohon_perbulan'] + $data['penghasilan_pasangan_perbulan'] + $ptt;










        $nama_file1 = "Analisa & Cashflow";
        $ext = ".rtf";
        $nama_file2 = $nama_file1 . $ext;

        $nama_file3 = $nama_file1 . " " . $nama_pemohon['nama_pemohon'] . $ext;


        $document = file_get_contents("cetak/" . $nama_file2);


        $document = str_replace("#nama_pemohon", $nama_pemohon['nama_pemohon'], $document);
        $document = str_replace("#1_ppp", number_format($data['penghasilan_pemohon_perbulan'], 0, ',', '.'), $document);
        $document = str_replace("#1_k_ppp",  $data['penghasilan_pemohon_perbulan_ket'], $document);
        $document = str_replace("#1_ptp", $temp1, $document);
        $document = str_replace("#1_h_ptp",  $temp2, $document);
        $document = str_replace("#1_k_ptp", $temp3, $document);


        $document = str_replace("#2_ppp", number_format($data['penghasilan_pasangan_perbulan'], 0, ',', '.'), $document);
        $document = str_replace("#2_k_ppp", $data['penghasilan_pasangan_perbulan_ket'], $document);
        $document = str_replace("#2_ptp", $temp4, $document);
        $document = str_replace("#2_h_ptp", $temp5, $document);
        $document = str_replace("#2_k_ptp", $temp6, $document);

        $document = str_replace("#h_brts_1", number_format($data['biaya_hidup_sebulan'], 0, ',', '.'), $document);
        $document = str_replace("#h_brts_2", number_format($data['biaya_pendidikan'], 0, ',', '.'), $document);
        $document = str_replace("#h_brts_3", number_format($data['biaya_pam_listrik_telepon'], 0, ',', '.'), $document);
        $document = str_replace("#h_brts_4", number_format($data['biaya_transport'], 0, ',', '.'), $document);
        $document = str_replace("#h_brts_5", number_format($data['biaya_lainnya'], 0, ',', '.'), $document);



        $document = str_replace("#k_brts_1", $data['biaya_hidup_sebulan_ket'], $document);
        $document = str_replace("#k_brts_2", $data['biaya_pendidikan_ket'], $document);
        $document = str_replace("#k_brts_3", $data['biaya_pam_listrik_telepon_ket'], $document);
        $document = str_replace("#k_brts_4", $data['biaya_transport_ket'], $document);
        $document = str_replace("#k_brts_5", $data['biaya_lainnya_ket'], $document);


        $document = str_replace("#3_aks", number_format($data['angsuran_kredit_sebelumnya'], 0, ',', '.'), $document);
        $document = str_replace("#ket_3_aks", $data['angsuran_kredit_sebelumnya_ket'], $document);


        $document = str_replace("#3aks", $temp7, $document);
        $document = str_replace("#3_h_aks", $temp8, $document);
        $document = str_replace("#aks_ket", $temp99, $document);

        $document = str_replace("#aps", $tempp1, $document);
        $document = str_replace("#h_aps", $tempp2, $document);

        $document = str_replace("#ket_aps", $tempp4, $document);

        $document = str_replace("#kemampuan_membayar_angsuran", number_format($data['kemampuan_membayar_angsuran'], 0, ',', '.'), $document);

        $document = str_replace("#saldo_tabungan_terakhir", number_format($data['saldo_tabungan_terakhir'], 0, ',', '.'), $document);

        $document = str_replace("#ket_saldo_t_terakhir", $data['saldo_tabungan_terakhir_ket'], $document);




        $document = str_replace("#gbp", number_format($data['penghasilan_pemohon_perbulan'], 0, ',', '.'), $document);
        $document = str_replace("#psi", number_format($data['penghasilan_pasangan_perbulan'], 0, ',', '.'), $document);
        $document = str_replace("#ptt", number_format($ptt, 0, ',', '.'), $document);

        $document = str_replace("#akm", number_format($akm, 0, ',', '.'), $document);


        $document = str_replace("#brt", number_format($data['biaya_hidup_sebulan'], 0, ',', '.'), $document);
        $document = str_replace("#bp", number_format($data['biaya_pendidikan'], 0, ',', '.'), $document);
        $document = str_replace("#blpt", number_format($data['biaya_pam_listrik_telepon'], 0, ',', '.'), $document);
        $document = str_replace("#bt", number_format($data['biaya_transport'], 0, ',', '.'), $document);
        $document = str_replace("#bll", number_format($data['biaya_lainnya'], 0, ',', '.'), $document);
        $document = str_replace("#blt", number_format($blt, 0, ',', '.'), $document);
        $angsuran_perbulan = (int)($data['angsuran_perbulan'] / 1000);
        $document = str_replace("#akh",  number_format($angsuran_perbulan, 0, ',', '.'), $document);

        $akk =  $data['biaya_hidup_sebulan'] +
            $data['biaya_pendidikan'] +
            $data['biaya_pam_listrik_telepon'] +
            $data['biaya_transport'] +
            $data['biaya_lainnya'] +
            $angsuran_perbulan +
            $blt;




        $ka = $akm - $akk;
        $document = str_replace("#akk", number_format($akk, 0, ',', '.'), $document);

        $document = str_replace("#ka", number_format($ka, 0, ',', '.'), $document);


        $document = str_replace("#ak0", ($ka * 0), $document);
        $document = str_replace("#ak1", number_format(($ka * 1), 0, ',', '.'), $document);
        $document = str_replace("#ak2", number_format(($ka * 2), 0, ',', '.'), $document);
        $document = str_replace("#ak3", number_format(($ka * 3), 0, ',', '.'), $document);
        $document = str_replace("#ak4", number_format(($ka * 4), 0, ',', '.'), $document);


        $document = str_replace("#ak5", number_format(($ka * 5), 0, ',', '.'), $document);
        $document = str_replace("#ak6", number_format(($ka * 6), 0, ',', '.'), $document);
        $document = str_replace("#ak7", number_format(($ka * 7), 0, ',', '.'), $document);
        $document = str_replace("#ak8", number_format(($ka * 8), 0, ',', '.'), $document);
        $document = str_replace("#ak9", number_format(($ka * 9), 0, ',', '.'), $document);

        $document = str_replace("#10ak", number_format(($ka * 10), 0, ',', '.'), $document);
        $document = str_replace("#11ak", number_format(($ka * 11), 0, ',', '.'), $document);
        // $document = str_replace("#12ak", ($ka * 12), $document);




        $document = str_replace("#12mka", number_format(($akm * 12), 0, ',', '.'), $document);
        $document = str_replace("#12pbg", number_format(($data['penghasilan_pemohon_perbulan'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12isp", number_format(($data['penghasilan_pasangan_perbulan'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12ttp", number_format(($ptt * 12), 0, ',', '.'), $document);

        $document = str_replace("#12kka", number_format(($akk * 12), 0, ',', '.'), $document);
        $document = str_replace("#12trb", number_format(($data['biaya_hidup_sebulan'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12pb", number_format(($data['biaya_pendidikan'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12tplb", number_format(($data['biaya_pam_listrik_telepon'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12tb", number_format(($data['biaya_transport'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12llb", number_format(($data['biaya_lainnya'] * 12), 0, ',', '.'), $document);
        $document = str_replace("#12tla", number_format(($blt * 12), 0, ',', '.'), $document);
        $document = str_replace("#12hka", number_format(($angsuran_perbulan * 12), 0, ',', '.'), $document);

        $document = str_replace("#2kkaa", number_format(($ka * 2), 0, ',', '.'), $document);
        $document = str_replace("#3kkaa", number_format(($ka * 3), 0, ',', '.'), $document);
        $document = str_replace("#4kkaa", number_format(($ka * 4), 0, ',', '.'), $document);
        $document = str_replace("#5kkaa", number_format(($ka * 5), 0, ',', '.'), $document);
        $document = str_replace("#6kkaa", number_format(($ka * 6), 0, ',', '.'), $document);
        $document = str_replace("#7kkaa", number_format(($ka * 7), 0, ',', '.'), $document);
        $document = str_replace("#8kkaa", number_format(($ka * 8), 0, ',', '.'), $document);
        $document = str_replace("#9kkaa", number_format(($ka * 9), 0, ',', '.'), $document);
        $document = str_replace("#10kkaa", number_format(($ka * 10), 0, ',', '.'), $document);
        $document = str_replace("#kkaa11", number_format(($ka * 11), 0, ',', '.'), $document);
        $document = str_replace("#kkaa12", number_format(($ka * 12), 0, ',', '.'), $document);


        $document = str_replace("#persentasea", $data['persentase_angsuran'], $document);
        $document = str_replace("#pera", strtoupper($data['keterangan_persentase_angsuran']), $document);


















        $format_tgl = new format_tanggal_indo();


        $data['tbl_permohon_kredit'] = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
        $data['tbl_wawancara']         = $this->model('m_cetak')->get_tbl_wawancara($id);
        $data['tbl_komite'] = $this->model('m_cetak')->get_tbl_komite($id);
        $data['tbl_keputusan_kredit'] = $this->model('m_cetak')->get_tbl_keputusan_kredit($id);

        $data['ref_kode_golongan_debitur'] = $this->model('m_ref_golongan_debitur')->get_golongan_debitur($data['tbl_wawancara']['kode_golongan_debitur']);
        $data['ref_jenis_penggunaan'] = $this->model('m_ref_jenis_penggunaan')->get_data_where_kode($data['tbl_wawancara']['kode_jenis_penggunaan']);




        $data['ref_sektor_ekonomi'] = $this->model('m_ref_sektor_ekonomi')->get_data_where_kode($data['tbl_wawancara']['kode_sektor_ekonomi']);
        $data['ref_hubungan_debitur_dengan_bank'] = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_data_where_kode($data['tbl_wawancara']['kode_hubungan_debitur_dengan_bank']);

        // data tbl_permohon_kredit
        $nama_pemohon = $data['tbl_permohon_kredit']['nama_pemohon'];
        $alamat_pemohon = $data['tbl_permohon_kredit']['alamat_ktp_pemohon'];
        $ttl_pemohon =      $data['tbl_permohon_kredit']['tempat_lahir_pemohon'] . ', ' . date('d-m-Y', strtotime($data['tbl_permohon_kredit']['tgl_lahir_pemohon']));
        $umur = $this->hitung_umur($data['tbl_permohon_kredit']['tgl_lahir_pemohon']);
        $no_telp_pemohon = $data['tbl_permohon_kredit']['telepon_pemohon'];
        $media_sosial_pemohon = $data['tbl_permohon_kredit']['media_sosial'];
        $no_permohonan_kredit = $data['tbl_permohon_kredit']['no_permohonan_kredit'];
        $instansi_pemohon = $data['tbl_permohon_kredit']['nama_instansi'];
        $alamat_instansi = $data['tbl_permohon_kredit']['alamat_instansi'];
        $jenis_berkas = $data['tbl_permohon_kredit']['jenis_permohonan'];
        $marketing = $data['tbl_permohon_kredit']['id_marketing'];

        if ($data['tbl_wawancara']['user_edit'] != '') {
            $nama_analis = $data['tbl_wawancara']['user_edit'];
        } else {
            $nama_analis = $data['tbl_wawancara']['user_create'];
        }

        $tujuan_penggunaan = $data['tbl_wawancara']['tujuan_penggunaan_kredit'];

        $old_date_timestamp = strtotime($data['tbl_wawancara']['tgl_create']);
        $tanggal_analisa_baru = date('Y-m-d', $old_date_timestamp);
        $tanggal_analisa = $format_tgl->format_tgl($tanggal_analisa_baru);


        $plafond = number_format($data['tbl_wawancara']['plafond'], 0, ',', '.');
        $jangka_waktu = number_format($data['tbl_wawancara']['jangka_waktu'], 0, ',', '.');
        $suku_bunga = $data['tbl_wawancara']['suku_bunga'];
        $os_sebelumnya = number_format($data['tbl_wawancara']['os_sebelumnya'], 0, ',', '.');
        $penambahan = number_format($data['tbl_wawancara']['penambahan'], 0, ',', '.');
        $provisi_kredit = number_format($data['tbl_wawancara']['biaya_provisi_nominal'], 0, ',', '.');
        $administrasi_kredit = number_format($data['tbl_wawancara']['biaya_administrasi_nominal'], 0, ',', '.');
        $angsuran_perbulan = number_format($data['tbl_wawancara']['angsuran_perbulan'], 0, ',', '.');
        $premi_asuransi = number_format($data['tbl_wawancara']['premi_asuransi'], 0, ',', '.');
        $tabungan = number_format($data['tbl_wawancara']['tabungan'], 0, ',', '.');
        $biaya_notaris = number_format($data['tbl_wawancara']['biaya_notaris'], 0, ',', '.');
        $biaya_apht = number_format($data['tbl_wawancara']['biaya_apht'], 0, ',', '.');
        $asuransi_kerugian = number_format($data['tbl_wawancara']['asuransi_kerugian'], 0, ',', '.');




        $komite1 = $data['tbl_komite'][0]['user_create'] ?? "-";
        $komite2 = $data['tbl_komite'][1]['user_create'] ?? "-";
        $komite3 = $data['tbl_komite'][2]['user_create'] ?? "-";

        $catatan_komite_1 = $data['tbl_komite'][0]['catatan_komite'] ?? '';
        $catatan_komite_2 = $data['tbl_komite'][1]['catatan_komite'] ?? '';
        $catatan_komite_3 = $data['tbl_komite'][2]['catatan_komite'] ?? '';

        $s_komite1 = $data['tbl_komite'][0]['status'] ?? "-";
        $s_komite2 = $data['tbl_komite'][1]['status'] ?? "-";
        $s_komite3 = $data['tbl_komite'][2]['status'] ?? "-";


        $t_komite = array();

        for ($a = 0; $a < 3; $a++) {

            $data['tbl_komite'][$a]['tgl_create'] =  $data['tbl_komite'][$a]['tgl_create'] ?? "";

            if ($data['tbl_komite'][$a]['tgl_create'] == '') {
                $t_komite[$a] = '-';
            } else {
                $old_date_timestamp = strtotime($data['tbl_komite'][$a]['tgl_create']);
                $t_komite[$a] = date('d-m-Y', $old_date_timestamp);
            }
        }





        $p_komite1 = number_format($data['tbl_komite'][0]['plafond'] ?? "0", 0, ',', '.');
        $p_komite2 = number_format($data['tbl_komite'][1]['plafond'] ?? "0", 0, ',', '.');
        $p_komite3 = number_format($data['tbl_komite'][2]['plafond'] ?? "0", 0, ',', '.');

        $jw_komite1 = $data['tbl_komite'][0]['jangka_waktu'] ?? "0";
        $jw_komite2 = $data['tbl_komite'][1]['jangka_waktu'] ?? "0";
        $jw_komite3 = $data['tbl_komite'][2]['jangka_waktu'] ?? "0";



        $ket = $data['tbl_wawancara']['dasar_pertimbangan_analis'];
        $komite_plafond = number_format($data['tbl_keputusan_kredit']['plafond'] ?? "0", 0, ',', '.');
        $komite_jw = $data['tbl_keputusan_kredit']['jangka_waktu'] ?? "0";
        $status = $data['tbl_wawancara']['status'];














        // data tbl_wawancara

        $karakter =  $data['tbl_wawancara']['karakter'];
        $pertimbangan_karakter =  $data['tbl_wawancara']['pertimbangan_karakter'];

        $kemampuan =  $data['tbl_wawancara']['kemampuan'];
        $pertimbangan_kemampuan =  $data['tbl_wawancara']['pertimbangan_kemampuan'];

        $kekayaan =  $data['tbl_wawancara']['kekayaan'];
        $pertimbangan_kekayaan =  $data['tbl_wawancara']['pertimbangan_kekayaan'];

        $jaminan =  $data['tbl_wawancara']['jaminan'];
        $pertimbangan_jaminan =  $data['tbl_wawancara']['pertimbangan_jaminan'];


        $kondisi =  $data['tbl_wawancara']['kondisi'];
        $pertimbangan_kondisi =  $data['tbl_wawancara']['pertimbangan_kondisi'];


        $golongan_debitur =  $data['tbl_wawancara']['kode_golongan_debitur'] . ' - ' . ($data['ref_kode_golongan_debitur']['golongan_debitur'] ?? "");
        $jenis_penggunaan = $data['tbl_wawancara']['kode_jenis_penggunaan'] . ' - ' . ($data['ref_jenis_penggunaan']['jenis_penggunaan'] ?? "");
        $sektor_ekonomi   = $data['tbl_wawancara']['kode_sektor_ekonomi'] . ' - ' . ($data['ref_sektor_ekonomi']['sektor_ekonomi'] ?? "");
        $hubungan_debitur_dengan_bank =  $data['tbl_wawancara']['kode_hubungan_debitur_dengan_bank'] . ' - ' .  ($data['ref_hubungan_debitur_dengan_bank']['hubungan_debitur_dengan_bank'] ?? "");



        $agunan = array();
        $batas = 0;

        for ($a = 1; $a <= 20; $a++) {

            if ($data['tbl_wawancara']['jaminan_' . $a] != '') {
                $batas++;
                $agunan[$a] = $data['tbl_wawancara']['jaminan_' . $a];
            }
        }










        // $ext = ".rtf";
        // $nama_file1 = "Analisa & Keputusan Kredit";


        // $document = file_get_contents("cetak/" . $nama_file1 . $ext);


        $document = str_replace("#nama_pemohon", $nama_pemohon, $document);
        $document = str_replace("#alamat_pemohon", $alamat_pemohon, $document);
        $document = str_replace("#ttl_pemohon",  $ttl_pemohon, $document);
        $document = str_replace("#umur", $umur . ' Tahun', $document);
        $document = str_replace("#no_telp_pemohon", $no_telp_pemohon, $document);
        $document = str_replace("#media_sosial_pemohon", $media_sosial_pemohon, $document);
        $document = str_replace("#no_permohonan_kredit", $no_permohonan_kredit, $document);
        $document = str_replace("#instansi_pemohon", $instansi_pemohon, $document);
        $document = str_replace("#alamat_instansi", $alamat_instansi, $document);
        $document = str_replace("#jenis_berkas", $jenis_berkas, $document);
        $document = str_replace("#marketing", $marketing, $document);

        // catatan komite

        $document = str_replace("#catatankomite1", $catatan_komite_1, $document);
        $document = str_replace("#catatankomite2", $catatan_komite_2, $document);
        $document = str_replace("#catatankomite3", $catatan_komite_3, $document);



        if ($karakter == "BAIK") {

            $document = str_replace("#a1", "V", $document);
            $document = str_replace("#a2", "", $document);
            $document = str_replace("#a3", "", $document);
        } else if ($karakter == "CUKUP BAIK") {


            $document = str_replace("#a1", "", $document);
            $document = str_replace("#a2", "V", $document);
            $document = str_replace("#a3", "", $document);
        } else if ($karakter == "TIDAK BAIK") {

            $document = str_replace("#a1", "", $document);
            $document = str_replace("#a2", "", $document);
            $document = str_replace("#a3", "V", $document);
        }
        $document = str_replace("#pertimbangan_karakter", $pertimbangan_karakter, $document);


        if ($kemampuan == "BAIK") {
            $document = str_replace("#b1", "V", $document);
            $document = str_replace("#b2", "", $document);
            $document = str_replace("#b3", "", $document);
        } else if ($kemampuan == "CUKUP BAIK") {
            $document = str_replace("#b1", "", $document);
            $document = str_replace("#b2", "V", $document);
            $document = str_replace("#b3", "", $document);
        } else if ($kemampuan == "TIDAK BAIK") {
            $document = str_replace("#b1", "", $document);
            $document = str_replace("#b2", "", $document);
            $document = str_replace("#b3", "V", $document);
        }
        $document = str_replace("#pertimbangan_kemampuan", $pertimbangan_kemampuan, $document);


        if ($kekayaan == "BAIK") {
            $document = str_replace("#c1", "V", $document);
            $document = str_replace("#c2", "", $document);
            $document = str_replace("#c3", "", $document);
        } else if ($kekayaan == "CUKUP BAIK") {
            $document = str_replace("#c1", "", $document);
            $document = str_replace("#c2", "V", $document);
            $document = str_replace("#c3", "", $document);
        } else if ($kekayaan == "TIDAK BAIK") {
            $document = str_replace("#c1", "", $document);
            $document = str_replace("#c2", "", $document);
            $document = str_replace("#c3", "V", $document);
        }
        $document = str_replace("#pertimbangan_kekayaan", $pertimbangan_kekayaan, $document);



        if ($jaminan == "BAIK") {
            $document = str_replace("#d1", "V", $document);
            $document = str_replace("#d2", "", $document);
            $document = str_replace("#d3", "", $document);
        } else if ($jaminan == "CUKUP BAIK") {
            $document = str_replace("#d1", "", $document);
            $document = str_replace("#d2", "V", $document);
            $document = str_replace("#d3", "", $document);
        } else if ($jaminan == "TIDAK BAIK") {
            $document = str_replace("#d1", "", $document);
            $document = str_replace("#d2", "", $document);
            $document = str_replace("#d3", "V", $document);
        }
        $document = str_replace("#pertimbangan_jaminan", $pertimbangan_jaminan, $document);



        if ($kondisi == "BAIK") {
            $document = str_replace("#e1", "V", $document);
            $document = str_replace("#e2", "", $document);
            $document = str_replace("#e3", "", $document);
        } else if ($kondisi == "CUKUP BAIK") {
            $document = str_replace("#e1", "", $document);
            $document = str_replace("#e2", "V", $document);
            $document = str_replace("#e3", "", $document);
        } else if ($kondisi == "TIDAK BAIK") {
            $document = str_replace("#e1", "", $document);
            $document = str_replace("#e2", "", $document);
            $document = str_replace("#e3", "V", $document);
        }
        $document = str_replace("#pertimbangan_kondisi", $pertimbangan_kondisi, $document);

        $document = str_replace("#tujuan_penggunaan", $tujuan_penggunaan, $document);





        $document = str_replace("#golongan_debitur", $golongan_debitur, $document);
        $document = str_replace("#jenis_penggunaan", $jenis_penggunaan, $document);
        $document = str_replace("#sektor_ekonomi", $sektor_ekonomi, $document);
        $document = str_replace("#hubungan_debitur_dengan_bank", $hubungan_debitur_dengan_bank, $document);





        $document = str_replace(("#jaminan_" . 1), ($agunan[1] ?? ""), $document);
        $document = str_replace(("#jaminan_" . 2), ($agunan[2] ?? ""), $document);
        $document = str_replace(("#jaminan_" . 3), ($agunan[3] ?? ""), $document);
        $document = str_replace(("#jaminan_" . 4), ($agunan[4] ?? ""), $document);
        $document = str_replace(("#jaminan_" . 5), ($agunan[5] ?? ""), $document);
        $document = str_replace(("#jaminan_" . 6), ($agunan[6] ?? ""), $document);
        $document = str_replace(("#jaminan_" . 7), ($agunan[7] ?? ""), $document);
        $document = str_replace(("#jaminan_" . 8), ($agunan[8] ?? ""), $document);
        $document = str_replace(("#jaminan_" . 9), ($agunan[9] ?? ""), $document);

        $document = str_replace(("#10jaminan"), ($agunan[10] ?? ""), $document);
        $document = str_replace(("#11jaminan"), ($agunan[11] ?? ""), $document);
        $document = str_replace(("#12jaminan"), ($agunan[12] ?? ""), $document);
        $document = str_replace(("#13jaminan"), ($agunan[13] ?? ""), $document);
        $document = str_replace(("#14jaminan"), ($agunan[14] ?? ""), $document);
        $document = str_replace(("#15jaminan"), ($agunan[15] ?? ""), $document);
        $document = str_replace(("#16jaminan"), ($agunan[16] ?? ""), $document);
        $document = str_replace(("#17jaminan"), ($agunan[17] ?? ""), $document);
        $document = str_replace(("#18jaminan"), ($agunan[18] ?? ""), $document);
        $document = str_replace(("#19jaminan"), ($agunan[19] ?? ""), $document);
        $document = str_replace(("#20jaminan"), ($agunan[20] ?? ""), $document);




        $document = str_replace("#nama_analis", $nama_analis, $document);
        $document = str_replace("#tanggal_analisa", $tanggal_analisa, $document);

        $document = str_replace("#plafond", $plafond, $document);
        $document = str_replace("#jangka_waktu", $jangka_waktu, $document);

        $document = str_replace("#suku_bunga", $suku_bunga, $document);
        $document = str_replace("#os_sebelumnya", $os_sebelumnya, $document);
        $document = str_replace("#penambahan", $penambahan, $document);
        $document = str_replace("#provisi_kredit", $provisi_kredit, $document);
        $document = str_replace("#administrasi_kredit", $administrasi_kredit, $document);
        $document = str_replace("#angsuran_perbulan", $angsuran_perbulan, $document);
        $document = str_replace("#premi_asuransi", $premi_asuransi, $document);
        $document = str_replace("#tabungan", $tabungan, $document);
        $document = str_replace("#biaya_notaris", $biaya_notaris, $document);
        $document = str_replace("#biaya_apht", $biaya_apht, $document);
        $document = str_replace("#asuransi_kerugian", $asuransi_kerugian, $document);



        $document = str_replace("#komite1", $komite1, $document);
        $document = str_replace("#komite2", $komite2, $document);
        $document = str_replace("#komite3", $komite3, $document);


        for ($a = 0; $a < 3; $a++) {
            $document = str_replace(("#tgl_k" . ($a + 1)), $t_komite[$a], $document);
        }


        $document = str_replace("#s_komite1", $s_komite1, $document);
        $document = str_replace("#s_komite2", $s_komite2, $document);
        $document = str_replace("#s_komite3", $s_komite3, $document);


        $document = str_replace("#p_komite1", $p_komite1, $document);
        $document = str_replace("#p_komite2", $p_komite2, $document);
        $document = str_replace("#p_komite3", $p_komite3, $document);



        $document = str_replace("#jw_komite1", $jw_komite1, $document);
        $document = str_replace("#jw_komite2", $jw_komite2, $document);
        $document = str_replace("#jw_komite3", $jw_komite3, $document);



        $document = str_replace("#ket", $ket, $document);

        $document = str_replace("#komite_plafond", $komite_plafond, $document);
        $document = str_replace("#komite_jw", $komite_jw, $document);
        $document = str_replace("#status", $status, $document);













        $nama_file2 = $nama_file1 . " " . $nama_pemohon . $ext;


        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file3);
        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;
    }



    public function cetak_sppk($id)
    {

        $format_tgl = new format_tanggal_indo();


        // cek tbl_pencairan jika terdapat noreg maka getdata dari tbl_pencairab, jika tidak ada maka ambik di tbl_wawabcara

        $_POST['no_permohonan_kredit'] = $id;
        $tbl_pencairan = $this->model('m_pencairan')->get_data_pencairan();




        $data['tbl_permohon_kredit']   = $this->model('m_cetak')->get_tbl_permohon_kredit($id);
        $data['tbl_wawancara']         = $this->model('m_cetak')->get_tbl_wawancara($id);
        $data['tbl_keputusan_kredit']  = $this->model('m_cetak')->get_tbl_keputusan_kredit($id);
        $data['kota'] = $this->model('m_cetak')->tbl_cabang($_COOKIE['kode_cabang']);
        $data['ref_jabatan'] = $this->model('m_cetak')->ref_pejabat($data['tbl_wawancara']['pejabat_ttd_sppk']);
        $data['hasil_ref_provisi_administrasi'] = $this->model('m_ref_provisi_administrasi')->get_all();
        $persen_provisi = $data['hasil_ref_provisi_administrasi']['provisi'];
        $persen_administrasi = $data['hasil_ref_provisi_administrasi']['administrasi'];


        $data_plafond =  $data['tbl_keputusan_kredit']['plafond'] ?? 0;
        $data_jangka_waktu = $data['tbl_keputusan_kredit']['jangka_waktu'] ?? 0;


        $nama_pemohon = $data['tbl_permohon_kredit']['nama_pemohon'];
        $alamat_ktp_pemohon = $data['tbl_permohon_kredit']['alamat_ktp_pemohon'];
        $plafond =  number_format($data_plafond, 0, ',', '.');
        $jangka_waktu = $data_jangka_waktu;
        $suku_bunga =    $data['tbl_wawancara']['suku_bunga'];
        $angsuran_perbulan =    number_format($data['tbl_wawancara']['angsuran_perbulan'], 0, ',', '.');
        $sistem_pembayaran =    $data['tbl_wawancara']['sistem_pembayaran'];
        $jaminan_utama =    $data['tbl_wawancara']['jaminan_utama'];
        $temp_jaminan = array();
        $jaminan = "";
        $keadaan = "";
        $kota = $data['kota']['kota'];

        $batas_jaminan = 0;


        for ($a = 1; $a <= 20; $a++) {

            if ($data['tbl_wawancara']['jaminan_' . $a] != "") {
                $batas_jaminan = $a;
            }
        }

        for ($a = 1; $a <= $batas_jaminan; $a++) {

            if ($a <= $batas_jaminan - 1) {
                $temp_jaminan[$a] = $data['tbl_wawancara']['jaminan_' . $a] . '\par' . ' ';
                $jaminan =  $jaminan . $temp_jaminan[$a];
                $keadaan = $keadaan . "Asli" . '\par' . ' ';
            } elseif ($a == $batas_jaminan) {
                $temp_jaminan[$a] = $data['tbl_wawancara']['jaminan_' . $a];
                $jaminan =  $jaminan . $temp_jaminan[$a];
                $keadaan = $keadaan . "Asli";
            }
        }





        $syarat_lainnya =  $data['tbl_wawancara']['syarat_lainnya'];




        $nama_pejabat = $data['tbl_wawancara']['pejabat_ttd_sppk'];
        $jabatan = $data['ref_jabatan']['jabatan'] ?? "";




        if (isset($data['tbl_keputusan_kredit']['tgl_create'])) {

            $old_date_timestamp = strtotime($data['tbl_keputusan_kredit']['tgl_create']);
            $tgl_keputusan_kredit = $format_tgl->format_tgl((date('Y-m-d', $old_date_timestamp)));
        } else {
            $tgl_keputusan_kredit = "";
        }




        // perhitungan hasil biaya

        if ($tbl_pencairan != '') {
            $data['tbl_pencairan_kredit']  = $this->model('m_pencairan')->get_data_pencairan();
            $hasil_biaya_provisi = $data['tbl_pencairan_kredit']['biaya_provisi'];
            $hasil_biaya_administrasi = $data['tbl_pencairan_kredit']['biaya_administrasi'];

            $biaya_provisi = number_format($hasil_biaya_provisi, 0, ',', '.');
            $biaya_administrasi = number_format($hasil_biaya_administrasi, 0, ',', '.');

            if ($data['tbl_pencairan_kredit']['asuransi_jiwa'] != '') {
                $premi_asuransi = number_format($data['tbl_pencairan_kredit']['asuransi_jiwa'], 0, ',', '.');
                $premi_asuransi_2 = $data['tbl_pencairan_kredit']['asuransi_jiwa'];
            } else if ($data['tbl_pencairan_kredit']['asuransi_kredit'] != '') {
                $premi_asuransi = number_format($data['tbl_pencairan_kredit']['asuransi_kredit'], 0, ',', '.');
                $premi_asuransi_2 = $data['tbl_pencairan_kredit']['asuransi_kredit'];
            } else {
                $premi_asuransi = 0;
                $premi_asuransi_2 = 0;
            }


            $biaya_notaris = number_format($data['tbl_pencairan_kredit']['biaya_notaris'], 0, ',', '.');
            $biaya_apht =  number_format($data['tbl_wawancara']['biaya_apht'], 0, ',', '.');
            $tabungan = number_format($data['tbl_pencairan_kredit']['tabungan_simitra'], 0, ',', '.');
            $asuransi_kerugian = number_format($data['tbl_pencairan_kredit']['asuransi_kerugian'], 0, ',', '.');
            $biaya_materai = number_format($data['tbl_pencairan_kredit']['biaya_materai'], 0, ',', '.');


            $total = $data['tbl_pencairan_kredit']['biaya_provisi'] +
                $data['tbl_pencairan_kredit']['biaya_administrasi'] +
                $premi_asuransi_2 +
                $data['tbl_pencairan_kredit']['biaya_notaris'] +
                $data['tbl_wawancara']['biaya_apht'] +
                $data['tbl_pencairan_kredit']['asuransi_kerugian'] +
                $data['tbl_pencairan_kredit']['biaya_materai'];

            $total = number_format($total, 0, ',', '.');
        } else {




            $hasil_biaya_provisi = ($data['tbl_keputusan_kredit']['plafond'] * $persen_provisi / 100);
            $hasil_biaya_administrasi = ($data['tbl_keputusan_kredit']['plafond'] * $persen_administrasi / 100);


            $biaya_provisi = number_format($hasil_biaya_provisi, 0, ',', '.');
            $biaya_administrasi = number_format($hasil_biaya_administrasi, 0, ',', '.');
            $premi_asuransi = number_format($data['tbl_wawancara']['premi_asuransi'], 0, ',', '.');
            $biaya_notaris = number_format($data['tbl_wawancara']['biaya_notaris'], 0, ',', '.');
            $biaya_apht = number_format($data['tbl_wawancara']['biaya_apht'], 0, ',', '.');
            $tabungan = number_format($data['tbl_wawancara']['tabungan'], 0, ',', '.');
            $asuransi_kerugian = number_format($data['tbl_wawancara']['asuransi_kerugian'], 0, ',', '.');
            $biaya_materai = number_format($data['tbl_wawancara']['biaya_materai'], 0, ',', '.');





            $total =  $hasil_biaya_provisi +
                $hasil_biaya_administrasi +
                $data['tbl_wawancara']['premi_asuransi'] +
                $data['tbl_wawancara']['biaya_notaris'] +
                $data['tbl_wawancara']['biaya_apht'] +
                $data['tbl_wawancara']['asuransi_kerugian'] +
                $data['tbl_wawancara']['biaya_materai'];

            $total = number_format($total, 0, ',', '.');
        }








        $ext = ".rtf";
        $nama_file1 = "SPPK";



        $document = file_get_contents("cetak/" . $nama_file1 . $ext);


        $document = str_replace("#kota", $kota, $document);
        $document = str_replace("#tgl_keputusan_kredit", $tgl_keputusan_kredit, $document);
        $document = str_replace("#nama_pemohon", $nama_pemohon, $document);
        $document = str_replace("#alamat_ktp_pemohon", $alamat_ktp_pemohon, $document);
        $document = str_replace("#plafond", $plafond, $document);
        $document = str_replace("#jangka_waktu", $jangka_waktu, $document);
        $document = str_replace("#suku_bunga", $suku_bunga, $document);
        $document = str_replace("#angsuran_perbulan", $angsuran_perbulan, $document);
        $document = str_replace("#sistem_pembayaran", $sistem_pembayaran, $document);
        $document = str_replace("#jmn_utama", $jaminan_utama, $document);
        $document = str_replace("#jaminan", $jaminan, $document);
        $document = str_replace("#keadaan", $keadaan, $document);
        $document = str_replace("#syarat_lainnya", $syarat_lainnya, $document);
        $document = str_replace("#tabungan", $tabungan, $document);

        $document = str_replace("#biaya_provisi", $biaya_provisi, $document);
        $document = str_replace("#biaya_administrasi", $biaya_administrasi, $document);
        $document = str_replace("#premi_asuransi", $premi_asuransi, $document);
        $document = str_replace("#biaya_notaris", $biaya_notaris, $document);
        $document = str_replace("#biaya_apht", $biaya_apht, $document);
        $document = str_replace("#asuransi_kerugian", $asuransi_kerugian, $document);
        $document = str_replace("#biaya_materai", $biaya_materai, $document);
        $document = str_replace("#total", $total, $document);
        $document = str_replace("#nama_pejabat", $nama_pejabat, $document);
        $document = str_replace("#jabatan", $jabatan, $document);







        $nama_file2 = $nama_file1 . " " . $nama_pemohon . $ext;

        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment; Filename=" . $nama_file2);
        header('Pragma: no-cache');
        header("Expires: 0");
        echo $document;



        $data['data_debitur'] = $this->model('m_cs')->data_debitur($id);
        $data['data_debitur_wawancara'] = $this->model('m_wawancara')->data_debitur($id);

        $this->view('cetak/wawancara/sppk/v_cetak_sppk', $data);
    }










    public function get_data()
    {
        echo "halo";
    }







    public function hitung_umur($tanggal_lahir)
    {
        $birthDate = new DateTime($tanggal_lahir);
        $today = new DateTime("today");
        if ($birthDate > $today) {
            exit("0 tahun 0 bulan 0 hari");
        }
        $y = $today->diff($birthDate)->y;
        $m = $today->diff($birthDate)->m;
        $d = $today->diff($birthDate)->d;
        return $y;
    }


    public function hitung_waktu($a, $b)
    {
        $datetime1 = new DateTime($a); //start time
        $datetime2 = new DateTime($b); //end time
        $durasi = $datetime1->diff($datetime2);
        // return $durasi->format('%Y tahun %m bulan %d hari %H jam %i menit %s detik');
        return $durasi->format('%Y');
    }



    public function cetak_daftar_sudah_slik($id)
    {


        $_POST['no_permohonan_kredit'] = $id;
        $data['detail_slik_cs'] = $this->model('m_slik')->detail_slik_cs($_POST);
        $data['daftar_slik_pemohon'] = $this->model('m_slik')->daftar_slik_pemohon($_POST);
        $data['daftar_slik_pasangan'] = $this->model('m_slik')->daftar_slik_pasangan($_POST);

        // $this->view('slik/nav');
        $this->view('slik/v_cetak_daftar_sudah_slik', $data);
        // $this->view('slik/foot');
    }



    function getRomawi($angka)
    {

        switch ($angka) {

            case 1:

                return "I";

                break;

            case 2:

                return "II";

                break;

            case 3:

                return "III";

                break;

            case 4:

                return "IV";

                break;

            case 5:

                return "V";

                break;

            case 6:

                return "VI";

                break;

            case 7:

                return "VII";

                break;

            case 8:

                return "VIII";

                break;

            case 9:

                return "IX";

                break;

            case 10:

                return "X";

                break;

            case 11:

                return "XI";

                break;

            case 12:

                return "XII";

                break;
        }
    }





    function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }
}
