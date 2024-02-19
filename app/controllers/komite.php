<?php

if (!isset($_SESSION['level'])) {
    header('Location:' . BASEURL . '/login');
    exit;
}

include 'cs.php';

class komite extends Controller
{


    public function index()
    {
        header('Location:' . BASEURL . '/komite/daftar_belum_komite');
        exit;
    }
    public function beranda()
    {
        $data['hitung_belum_komite'] = $this->model('m_komite')->hitung_daftar_belum_komite();
        $data['update'] = $this->model("m_tbl_informasi")->getInformasi();
        $data['quote'] = $this->model("m_tbl_quote")->getQuote();
        $this->view('komite/v_beranda', $data);
    }

    public function daftar_belum_komite()
    {

        $data['judul'] = 'Daftar Belum Komite';
        $data['title'] = $data['judul'];
        $data['data'] = $this->model('m_komite')->daftar_belum_komite();


        $this->view('komite/v_daftar_belum_komite', $data);
    }


    public function reload_tabel_daftar_belum_komite()
    {
        $data['data'] = $this->model('m_komite')->daftar_belum_komite();
        $a = 1;
        $rows = array();
        $rows2 = array();
        foreach ($data['data'] as $row) :
            $rows['no'] = $a++;
            $rows['no_permohonan_kredit'] = $row['no_permohonan_kredit'];
            $rows['kode_cabang'] = $row['kode_cabang'];
            $rows['nama_pemohon'] = $row['nama_pemohon'];
            $rows['nama_instansi'] = $row['nama_instansi'];
            $rows['tipe_kredit'] = $row['tipe_kredit'];
            $rows['tanggal_permohonan'] = date('d-m-Y', strtotime($row['tanggal_permohonan']));
            $rows['plafond'] = number_format(($row['plafond']), 0, ",", ".");
            $rows['jangka_waktu'] = $row['jangka_waktu'];
            $rows['id_analis'] = $row['id_analis'];
            $rows['status'] = $row['status'];
            $rows['aksi'] = "<button class='btn btn-success btn_modal_proses_komite' data-id='" . $row['no_permohonan_kredit'] . "'>Proses Komite</button>";
            $rows2[] = $rows;
        endforeach;

        echo json_encode($rows2);
    }



    public function daftar_sudah_komite()
    {



        $data['judul'] = 'Daftar Sudah Komite';
        $data['title'] = $data['judul'];
        $data['data'] = $this->model('m_komite')->daftar_sudah_komite();


        $this->view('komite/v_daftar_sudah_komite', $data);
    }


    public function modal_proses_komite()
    {


        $data['detail'] = $this->model('m_cs')->modal_detail();

        // handel bagian tab

        $data['get_tbl_wawancara'] = $this->model('m_wawancara')->detail_wawancara($_POST);

        if ($data['get_tbl_wawancara']['user_edit'] != '') {
            $data['get_tbl_wawancara']['user_create'] =  $data['get_tbl_wawancara']['user_edit'];
        } else {
            $data['get_tbl_wawancara']['user_create'] =  $data['get_tbl_wawancara']['user_create'];
        }

        $data['get_tbl_wawancara']['plafond'] = number_format(($data['get_tbl_wawancara']['plafond']), 0, ',', '.');
        $data['get_tbl_wawancara']['angsuran_perbulan'] = number_format(($data['get_tbl_wawancara']['angsuran_perbulan']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_provisi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_provisi_nominal']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_administrasi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_administrasi_nominal']), 0, ',', '.');
        $data['get_tbl_wawancara']['premi_asuransi'] = number_format(($data['get_tbl_wawancara']['premi_asuransi']), 0, ',', '.');
        $data['get_tbl_wawancara']['tabungan'] = number_format(($data['get_tbl_wawancara']['tabungan']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_notaris'] = number_format(($data['get_tbl_wawancara']['biaya_notaris']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_materai'] = number_format(($data['get_tbl_wawancara']['biaya_materai']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_apht'] = number_format(($data['get_tbl_wawancara']['biaya_apht']), 0, ',', '.');
        $data['get_tbl_wawancara']['asuransi_kerugian'] = number_format(($data['get_tbl_wawancara']['asuransi_kerugian']), 0, ',', '.');



        // penghasilan pemohon
        for ($a = 1; $a <= 3; $a++) {

            $data['penghasilan_pemohon_ket'][$a] = $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_' . $a . '_ket'] != '' ? $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_' . $a . '_ket'] : '-';
            $data['penghasilan_pasangan_ket'][$a] = $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_' . $a . '_ket'] != '' ? $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_' . $a . '_ket'] : '-';
        }



        $data['biaya_hidup_sebulan_ket'] = $data['get_tbl_wawancara']['biaya_hidup_sebulan_ket'] != '' ? $data['get_tbl_wawancara']['biaya_hidup_sebulan_ket'] : '-';
        $data['biaya_pendidikan_ket']    = $data['get_tbl_wawancara']['biaya_pendidikan_ket'] != '' ? $data['get_tbl_wawancara']['biaya_pendidikan_ket'] : '-';
        $data['biaya_pam_listrik_telepon_ket'] = $data['get_tbl_wawancara']['biaya_pam_listrik_telepon_ket'] != '' ? $data['get_tbl_wawancara']['biaya_pam_listrik_telepon_ket'] : '-';
        $data['biaya_transport_ket'] = $data['get_tbl_wawancara']['biaya_transport_ket'] != '' ? $data['get_tbl_wawancara']['biaya_transport_ket'] : '-';

        $data['biaya_lainnya_ket'] = $data['get_tbl_wawancara']['biaya_lainnya_ket'] != '' ? $data['get_tbl_wawancara']['biaya_lainnya_ket'] : '-';






        // detail tbl_permohon_kredit
        $data['no_permohonan_kredit'] = $_POST['no_permohonan_kredit'];
        $data['get_tbl_permohon_kredit'] = $this->model('m_cs')->get_tbl_permohon_kredit($data['no_permohonan_kredit']);

        // slik

        $data['daftar_slik_pemohon'] = $this->model('m_slik')->daftar_slik_pemohon($data['no_permohonan_kredit']);
        $data['daftar_slik_pasangan'] = $this->model('m_slik')->daftar_slik_pasangan($data['no_permohonan_kredit']);
        $data['data_slik_single'] = $this->model('m_slik')->get_data_slik_single($data['no_permohonan_kredit']);





        $data['kode_golongan_debitur'] =  $this->model('m_ref_golongan_debitur')->get_data_where_kode($data['get_tbl_wawancara']['kode_golongan_debitur']);
        $data['kode_jenis_penggunaan'] =   $this->model('m_ref_jenis_penggunaan')->get_data_where_kode($data['get_tbl_wawancara']['kode_jenis_penggunaan']);


        $data['kode_sektor_ekonomi'] = $this->model('m_ref_sektor_ekonomi')->get_data_where_kode($data['get_tbl_wawancara']['kode_sektor_ekonomi']);
        $data['kode_hubungan_debitur_dengan_bank'] = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_data_where_kode($data['get_tbl_wawancara']['kode_hubungan_debitur_dengan_bank']);
        $data['rekomendasi_komite'] = $this->model('m_komite')->rekomendasi_komite($data['no_permohonan_kredit']);


        // handel bagian tab







        // ambil data dari table referensi tabel referensi
        $data['nama_cabang'] = $this->model('m_ref_cabang')->get_data_where_kode($data['detail']['kode_cabang']);

        // ambil data riwayat dan tampikan di tab riwayat pemoho

        $_POST['no_ktp'] = $data['detail']['no_ktp_pemohon'];


        $data['modal_riwayat'] = $this->model('m_cs')->cari_ktp();

        $data['get_tbl_wawancara_berkas_id'] = $this->model('m_file_wawancara')->get_tbl_wawancara_berkas_id($data['no_permohonan_kredit']);


        $this->view('komite/v_isi_modal_proses_komite', $data);
    }





    public function modal_proses_komite_2()
    {


        $data['detail'] = $this->model('m_cs')->modal_detail();

        // handel bagian tab

        $data['get_tbl_wawancara'] = $this->model('m_wawancara')->detail_wawancara($_POST);









        if (empty($data['get_tbl_wawancara'])) {

            // $data['get_tbl_wawancara']['plafond'] = '';
            // $data['get_tbl_wawancara']['angsuran_perbulan'] = '';
            // $data['get_tbl_wawancara']['biaya_provisi_nominal'] = '';
            // $data['get_tbl_wawancara']['biaya_administrasi_nominal'] = '';
            // $data['get_tbl_wawancara']['premi_asuransi'] = '';
            // $data['get_tbl_wawancara']['tabungan'] = '';
            // $data['get_tbl_wawancara']['biaya_notaris'] = '';
            // $data['get_tbl_wawancara']['biaya_materai'] = '';
            // $data['get_tbl_wawancara']['biaya_apht'] = '';
            // $data['get_tbl_wawancara']['asuransi_kerugian'] = '';


            // $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_1_ket'] = '';
            // $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_2_ket'] = '';
            // $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_3_ket'] = '';
            // $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_1_ket'] = '';
            // $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_2_ket'] = '';
            // $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_3_ket'] = '';

            // $data['get_tbl_wawancara']['biaya_hidup_sebulan_ket'] = '';
            // $data['get_tbl_wawancara']['biaya_pendidikan_ket'] = '';
            // $data['get_tbl_wawancara']['biaya_transport_ket'] = '';
            // $data['get_tbl_wawancara']['biaya_lainnya_ket'] = '';
            // $data['get_tbl_wawancara']['kode_golongan_debitur'] = '';
            // $data['get_tbl_wawancara']['kode_jenis_penggunaan'] = '';
            // $data['get_tbl_wawancara']['kode_sektor_ekonomi'] = '';
            // $data['get_tbl_wawancara']['kode_hubungan_debitur_dengan_bank'] = '';
            // $data['get_tbl_wawancara']['angsuran_kredit_sebelumnya'] = '';
            // $data['get_tbl_wawancara']['saldo_tabungan_terakhir'] = '';


            // $data['get_tbl_wawancara']['angsuran_pemohon_lainnya_1'] = '';
            // $data['get_tbl_wawancara']['angsuran_pemohon_lainnya_2'] = '';
            // $data['get_tbl_wawancara']['angsuran_pemohon_lainnya_3'] = '';
            // $data['get_tbl_wawancara']['angsuran_pemohon_lainnya_4'] = '';
            // $data['get_tbl_wawancara']['angsuran_pemohon_lainnya_5'] = '';
            // $data['get_tbl_wawancara']['angsuran_pemohon_lainnya_6'] = '';
            // $data['get_tbl_wawancara']['angsuran_pemohon_lainnya_7'] = '';

            // $data['get_tbl_wawancara']['angsuran_pasangan_lainnya_1'] = '';
            // $data['get_tbl_wawancara']['angsuran_pasangan_lainnya_2'] = '';
            // $data['get_tbl_wawancara']['angsuran_pasangan_lainnya_3'] = '';
            // $data['get_tbl_wawancara']['angsuran_pasangan_lainnya_4'] = '';
            // $data['get_tbl_wawancara']['angsuran_pasangan_lainnya_5'] = '';
            // $data['get_tbl_wawancara']['angsuran_pasangan_lainnya_6'] = '';
            // $data['get_tbl_wawancara']['angsuran_pasangan_lainnya_7'] = '';
            // $data['get_tbl_wawancara']['kemampuan_membayar_angsuran'] = '';
            // $data['get_tbl_wawancara']['biaya_pam_listrik_telepon_ket'] = '';
        } else {
            $data['get_tbl_wawancara']['plafond'] = number_format(($data['get_tbl_wawancara']['plafond']), 0, ',', '.');
            $data['get_tbl_wawancara']['angsuran_perbulan'] = number_format(($data['get_tbl_wawancara']['angsuran_perbulan']), 0, ',', '.');
            $data['get_tbl_wawancara']['biaya_provisi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_provisi_nominal']), 0, ',', '.');
            $data['get_tbl_wawancara']['biaya_administrasi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_administrasi_nominal']), 0, ',', '.');
            $data['get_tbl_wawancara']['premi_asuransi'] = number_format(($data['get_tbl_wawancara']['premi_asuransi']), 0, ',', '.');
            $data['get_tbl_wawancara']['tabungan'] = number_format(($data['get_tbl_wawancara']['tabungan']), 0, ',', '.');
            $data['get_tbl_wawancara']['biaya_notaris'] = number_format(($data['get_tbl_wawancara']['biaya_notaris']), 0, ',', '.');
            $data['get_tbl_wawancara']['biaya_materai'] = number_format(($data['get_tbl_wawancara']['biaya_materai']), 0, ',', '.');
            $data['get_tbl_wawancara']['biaya_apht'] = number_format(($data['get_tbl_wawancara']['biaya_apht']), 0, ',', '.');
            $data['get_tbl_wawancara']['asuransi_kerugian'] = number_format(($data['get_tbl_wawancara']['asuransi_kerugian']), 0, ',', '.');


            // penghasilan pemohon
            for ($a = 1; $a <= 3; $a++) {

                $data['penghasilan_pemohon_ket'][$a] = $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_' . $a . '_ket'] != '' ? $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_' . $a . '_ket'] : '-';
                $data['penghasilan_pasangan_ket'][$a] = $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_' . $a . '_ket'] != '' ? $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_' . $a . '_ket'] : '-';
            }



            $data['biaya_hidup_sebulan_ket'] = $data['get_tbl_wawancara']['biaya_hidup_sebulan_ket'] != '' ? $data['get_tbl_wawancara']['biaya_hidup_sebulan_ket'] : '-';
            $data['biaya_pendidikan_ket']    = $data['get_tbl_wawancara']['biaya_pendidikan_ket'] != '' ? $data['get_tbl_wawancara']['biaya_pendidikan_ket'] : '-';
            $data['biaya_pam_listrik_telepon_ket'] = $data['get_tbl_wawancara']['biaya_pam_listrik_telepon_ket'] != '' ? $data['get_tbl_wawancara']['biaya_pam_listrik_telepon_ket'] : '-';
            $data['biaya_transport_ket'] = $data['get_tbl_wawancara']['biaya_transport_ket'] != '' ? $data['get_tbl_wawancara']['biaya_transport_ket'] : '-';

            $data['biaya_lainnya_ket'] = $data['get_tbl_wawancara']['biaya_lainnya_ket'] != '' ? $data['get_tbl_wawancara']['biaya_lainnya_ket'] : '-';
            $data['kode_golongan_debitur'] =  $this->model('m_ref_golongan_debitur')->get_data_where_kode($data['get_tbl_wawancara']['kode_golongan_debitur']);
            $data['kode_jenis_penggunaan'] =   $this->model('m_ref_jenis_penggunaan')->get_data_where_kode($data['get_tbl_wawancara']['kode_jenis_penggunaan']);
            $data['kode_sektor_ekonomi'] = $this->model('m_ref_sektor_ekonomi')->get_data_where_kode($data['get_tbl_wawancara']['kode_sektor_ekonomi']);
            $data['kode_hubungan_debitur_dengan_bank'] = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_data_where_kode($data['get_tbl_wawancara']['kode_hubungan_debitur_dengan_bank']);
        }












        // detail tbl_permohon_kredit
        $data['no_permohonan_kredit'] = $_POST['no_permohonan_kredit'];
        $data['get_tbl_permohon_kredit'] = $this->model('m_cs')->get_tbl_permohon_kredit($data['no_permohonan_kredit']);

        // slik

        $data['daftar_slik_pemohon'] = $this->model('m_slik')->daftar_slik_pemohon($data['no_permohonan_kredit']);
        $data['daftar_slik_pasangan'] = $this->model('m_slik')->daftar_slik_pasangan($data['no_permohonan_kredit']);
        $data['data_slik_single'] = $this->model('m_slik')->get_data_slik_single($data['no_permohonan_kredit']);









        $data['rekomendasi_komite'] = $this->model('m_komite')->rekomendasi_komite($data['no_permohonan_kredit']);

        $data['keputusan_komite'] = $this->model('m_komite')->keputusan_komite($data['no_permohonan_kredit']);



        // handel bagian tab







        // ambil data dari table referensi tabel referensi
        $data['nama_cabang'] = $this->model('m_ref_cabang')->get_data_where_kode($data['detail']['kode_cabang']);


        $data['cek_tgl_tolak'] = $this->model('m_wawancara')->cek_tgl_tolak();

        $data['get_tbl_wawancara_berkas_id'] = $this->model('m_file_wawancara')->get_tbl_wawancara_berkas_id($data['no_permohonan_kredit']);


        $this->view('komite/v_isi_modal_proses_komite_2', $data);
    }







    public function proses_komite()
    {

        echo 'Jangka waktu : ' . $_POST['jangka_waktu'];
        echo "/n";
        echo 'Plafond :' . $_POST['plafond'];
        echo $_POST['btn_approve'];

        if ($_POST['btn_approve'] == 'Approve') {
            echo "approve";
        } else {
            echo "salah";
        }
    }

    public function detail()
    {
        $this->view('komite/detail');
    }


    public function cek_pass_komite()
    {

        $data = $this->model('m_komite')->cek_pass_komite($_POST);



        if ($data == 'sukses') {
            echo "pass_benar";
        } else {
            echo "pass_salah";
        }
    }


    public function permohonan_disetujui2()
    {

        // log
        $cs = new cs();
        $_POST['nama_pemohon'] = $cs->get_nama_pemohon_where_id()['nama_pemohon'];

        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];

        $_POST['plafond'] = str_replace(".", "", $_POST['plafond_disetujui']);
        $_POST['jangka_waktu'] = str_replace(".", "", $_POST['jangka_waktu']);
        $_POST['penambahan'] = str_replace(".", "", $_POST['penambahan']);
        $_POST['biaya_provisi_nominal'] = str_replace(".", "", $_POST['provisi_kredit']);
        $_POST['biaya_administrasi_nominal'] = str_replace(".", "", $_POST['administrasi_kredit']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['tabungan'] = str_replace(".", "", $_POST['tabungan']);
        $_POST['premi_asuransi'] = str_replace(".", "", $_POST['premi_asuransi']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_apht'] = str_replace(".", "", $_POST['biaya_apht']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);

        $batas_approve = $this->model('m_komite')->cek_aturan_komite($_POST['no_permohonan_kredit']);
        $tipe_komite_berkas  = $batas_approve['tipe_komite'];


        $komite_approve = $this->model('m_komite')->hitung_jumlah_komite($_POST['no_permohonan_kredit']);
        $hitung_komite_pusat = $this->model('m_komite')->hitung_jumlah_komite_pusat($_POST['no_permohonan_kredit']);
        $hitung_komite_cabang = $this->model('m_komite')->hitung_jumlah_komite_cabang($_POST['no_permohonan_kredit']);

        $_POST['keterangan'] = "Komite " . ((int)$komite_approve  + 1);


        // cek jumlah komite yang telah approve
        $jumlah_komite = ($komite_approve + 1);


        // set unutuk bagian update komite_1,komite_2,komite_3 tbl_wawancara ketika berhasil di simpan di tbl_komite
        $username_komite = $_COOKIE['username'];
        $tipe_komite     = $_COOKIE['tipe_komite'];
        $_POST['user_tipe_komite'] = $tipe_komite;


        if ($tipe_komite_berkas == "PUSAT" || $tipe_komite_berkas == "DIAJUKAN PUSAT") {
            if ($hitung_komite_pusat <= 1 && $tipe_komite = "PUSAT") {
                $this->komite_simpan_approve($_POST);
                $cek_tolak = $this->komite_cek_tolak($no_permohonan_kredit);

                $this->komite_simpan_keterangan_jumlah_komite($jumlah_komite, $username_komite, $no_permohonan_kredit);

                // cek jumlah komite apakah masih di bawah batas_approve-1
                if ($jumlah_komite <= ($batas_approve - 1)) {
                    $this->komite_pilihan_approve($_POST['status']);
                }
            }
        }
    }

    public function permohonan_disetujui()
    {


        // bagian semua ini adalah bagian permohonan_disetujui

        $_POST['plafond'] = str_replace(".", "", $_POST['plafond_disetujui']);
        $_POST['jangka_waktu'] = str_replace(".", "", $_POST['jangka_waktu']);
        $_POST['penambahan'] = str_replace(".", "", $_POST['penambahan']);
        $_POST['biaya_provisi_nominal'] = str_replace(".", "", $_POST['provisi_kredit']);
        $_POST['biaya_administrasi_nominal'] = str_replace(".", "", $_POST['administrasi_kredit']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['tabungan'] = str_replace(".", "", $_POST['tabungan']);
        $_POST['premi_asuransi'] = str_replace(".", "", $_POST['premi_asuransi']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_apht'] = str_replace(".", "", $_POST['biaya_apht']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);

        // log
        $cs = new cs();
        $_POST['nama_pemohon'] = $cs->get_nama_pemohon_where_id()['nama_pemohon'];



        $data['batas_approve'] = $this->model('m_komite')->cek_aturan_komite($_POST['no_permohonan_kredit']);
        $data['tipe_komite'] = $data['batas_approve']['tipe_komite'];

        $data['komite_approve'] = $this->model('m_komite')->hitung_jumlah_komite($_POST['no_permohonan_kredit']);
        $data['hitung_komite_pusat'] = $this->model('m_komite')->hitung_jumlah_komite_pusat($_POST['no_permohonan_kredit']);
        $data['hitung_komite_cabang'] = $this->model('m_komite')->hitung_jumlah_komite_cabang($_POST['no_permohonan_kredit']);

        $_POST['keterangan'] = "Komite " . ((int)$data['komite_approve'] + 1);


        $no_permohonan_kredit = $_POST['no_permohonan_kredit'];


        // jumlah komite yang telah approve
        $jumlah_komite = ($data['komite_approve'] + 1);
       

        // set unutuk bagian update komite_1,komite_2,komite_3 tbl_wawancara ketika berhasil di simpan di tbl_komite
        $username_komite = $_COOKIE['username'];
        $tipe_komite = $_COOKIE['tipe_komite'];
        $_POST['user_tipe_komite'] = $tipe_komite;

        // set batas approve pada permohonan sesuai batas dari cabang
        $batas_approve = $data['batas_approve']['aturan_jumlah_komite'];



        // model untuk simpan data ke tbl_komite ketika tombol approve di tekan dan disetujui

        // echo "Jumlah Komite pusat : " . $data['hitung_komite_pusat'];



        if ($data['tipe_komite'] == "PUSAT" or $data['tipe_komite'] == "DIAJUKAN PUSAT") {

            if ($data['hitung_komite_pusat'] <= 1 and $_COOKIE['tipe_komite'] == "PUSAT") {
                $data['simpan'] = $this->model('m_komite')->permohonan_disetujui($_POST);

                // modal untuk hitung apakah ada tolak di dalam tabel tbl_komite
                $cek_tolak = $this->model('m_komite')->cek_tolak($no_permohonan_kredit);
               




                // jika berhasil simpan ke tbl_komite maka update field status dan komite_1,komite_2,komite_3 tbl_wawancara
                if ($jumlah_komite == "1") {
                    $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
                } else if ($jumlah_komite == "2") {
                    $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
                } else if ($jumlah_komite == "3") {
                    $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
                }


                // proses update status di tbl_wawancara jika jumlah komite telah terpenuhi maka status berubah jadi disetujui atau tolak, dan jika belum cukup maka upadte status = komite
                // proses jika komite menekan tombol approve
                // echo "cek tolak : " . $cek_tolak . "\n";
                if ($jumlah_komite <= ($batas_approve - 1)) { // jika kondisi komite lebih kecil dari batas jumlah aprrove // echo "batas approve komite : " . $batas_approve . "\n" ; // echo "Komite sekarang : " . $jumlah_komite . "\n" ; // echo "Status : komite" ; // update status di tbl_wawancara $this->model('m_komite')->update_status_komite($no_permohonan_kredit, "KOMITE");
                    if ($_POST['status'] == 'DISETUJUI') {
                        echo "DISETUJUI";
                    } else if ($_POST['status'] == 'DITOLAK') {

                        echo "DITOLAK";
                    }
                } else if ($jumlah_komite == $batas_approve) {
                    // jika kondisi komite == dari batas jumlah aprrove

                    // echo "batas approve komite : " . $batas_approve . "\n";
                    // echo "Komite sekarang : " . $jumlah_komite . "\n";
                    // echo "Status : DISETUJUI/TOLAK";

                    // cek dlu tbl_komite apakah terdapat tolak di field status
                    if (!$cek_tolak > 0) {
                        // echo "tidak terdapat tolak";
                        // update status di tbl_wawancara
                        $this->model('m_komite')->update_status_komite($no_permohonan_kredit, "DISETUJUI");


                        // update tgl_komite tbl_permohonan dan update posisi berkas
                        $_POST['lokasi_berkas'] = "PENCAIRAN";

                        $this->model('m_komite')->update_tgl_komite($no_permohonan_kredit);

                        // cek plafond terkecil dan jangka waktu terkecil jika terdapat pafond terkecil maka itu yang akan di ambil keputusannya, dan jika plafond terkecil ada yang sama maka akan di cek jangkawaktu tekecil yang akan di amabil
                        $hasil_cek = $this->model('m_komite')->cek_plafond_jangka_waktu($_POST['no_permohonan_kredit']);
                        // ambil nilai model dari pengecekan plafond dan jangka waktu yang telah ditemukan
                        $_POST['plafond'] = $hasil_cek['plafond'];
                        $_POST['jangka_waktu'] = $hasil_cek['jangka_waktu'];


                        // simpan hasil plafond dan jangka waktu yang telah di dapatkan terkecil dan terbesar beserta post dari ajax
                        $data['simpan_keputusan'] = $this->model("m_keputusan_kredit")->simpan_keputusan_kredit($_POST);


                        // jika proses simpan_keputusan berhasil maka kirim data disetujui ke qjax agar di tampilan alert berhasil
                        if ($data['simpan_keputusan'] > 0) {
                            echo "DISETUJUI";
                        } else {
                        }
                    } else {

                        echo "DITOLAK";

                        // update status di tbl_wawancara
                        $this->model('m_komite')->update_status_komite($no_permohonan_kredit, "DITOLAK");
                        // update tgl_komite tbl_permohonan
                        $this->model('m_komite')->update_tgl_tolak($no_permohonan_kredit);
                    }
                } else {
                    echo "kuota_penuh";
                }
            } else if (($data['hitung_komite_cabang'] < ((int)$batas_approve - 1)) and $_COOKIE['tipe_komite'] == "CABANG") {
                $data['simpan'] = $this->model('m_komite')->permohonan_disetujui($_POST);

                // modal untuk hitung apakah ada tolak di dalam tabel tbl_komite
                $cek_tolak = $this->model('m_komite')->cek_tolak($no_permohonan_kredit);
               


                // jika berhasil simpan ke tbl_komite maka update field status dan komite_1,komite_2,komite_3 tbl_wawancara
                if ($jumlah_komite == "1") {
                    $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
                } else if ($jumlah_komite == "2") {
                    $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
                } else if ($jumlah_komite == "3") {
                    $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
                }




                // proses update status di tbl_wawancara jika jumlah komite telah terpenuhi maka status berubah jadi disetujui atau tolak, dan jika belum cukup maka upadte status = komite

                // proses jika komite menekan tombol approve

                // echo "cek tolak : " . $cek_tolak . "\n";
                if ($jumlah_komite <= ($batas_approve - 1)) { // jika kondisi komite lebih kecil dari batas jumlah aprrove // echo "batas approve komite : " . $batas_approve . "\n" ; // echo "Komite sekarang : " . $jumlah_komite . "\n" ; // echo "Status : komite" ; // update status di tbl_wawancara $this->model('m_komite')->update_status_komite($no_permohonan_kredit, "KOMITE");
                    if ($_POST['status'] == 'DISETUJUI') {

                        echo "DISETUJUI";
                    } else if ($_POST['status'] == 'DITOLAK') {

                        echo "DITOLAK";
                    }
                } else if ($jumlah_komite == $batas_approve) {
                    // jika kondisi komite == dari batas jumlah aprrove


                    // echo "batas approve komite : " . $batas_approve . "\n";
                    // echo "Komite sekarang : " . $jumlah_komite . "\n";
                    // echo "Status : DISETUJUI/TOLAK";

                    // cek dlu tbl_komite apakah terdapat tolak di field status
                    if (!$cek_tolak > 0) {
                        // echo "tidak terdapat tolak";
                        // update status di tbl_wawancara
                        $this->model('m_komite')->update_status_komite($no_permohonan_kredit, "DISETUJUI");


                        // update tgl_komite tbl_permohonan dan update posisi berkas
                        $_POST['lokasi_berkas'] = "PENCAIRAN";
                        $this->model('m_komite')->update_tgl_komite($no_permohonan_kredit);

                        // cek plafond terkecil dan jangka waktu terkecil jika terdapat pafond terkecil maka itu yang akan di ambil keputusannya, dan jika plafond terkecil ada yang sama maka akan di cek jangkawaktu tekecil yang akan di amabil
                        $hasil_cek = $this->model('m_komite')->cek_plafond_jangka_waktu($_POST['no_permohonan_kredit']);



                        // ambil nilai model dari pengecekan plafond dan jangka waktu yang telah ditemukan
                        $_POST['plafond'] = $hasil_cek['plafond'];
                        $_POST['jangka_waktu'] = $hasil_cek['jangka_waktu'];


                        // simpan hasil plafond dan jangka waktu yang telah di dapatkan terkecil dan terbesar beserta post dari ajax
                        $data['simpan_keputusan'] = $this->model("m_keputusan_kredit")->simpan_keputusan_kredit($_POST);


                        // jika proses simpan_keputusan berhasil maka kirim data disetujui ke qjax agar di tampilan alert berhasil
                        if ($data['simpan_keputusan'] > 0) {

                            echo "DISETUJUI";
                        } else {
                        }
                    } else {

                        echo "DITOLAK";

                        // update status di tbl_wawancara
                        $this->model('m_komite')->update_status_komite($no_permohonan_kredit, "DITOLAK");
                        // update tgl_komite tbl_permohonan
                        $this->model('m_komite')->update_tgl_tolak($no_permohonan_kredit);
                    }
                } else {
                    echo "kuota_penuh";
                }
            } else {
                echo "kuota_penuh";
            }
        } else if ($data['tipe_komite'] == "CABANG") {

            if ($data['hitung_komite_cabang'] < ($batas_approve - 0)) {
                $data['simpan'] = $this->model('m_komite')->permohonan_disetujui($_POST);

                // modal untuk hitung apakah ada tolak di dalam tabel tbl_komite
                $cek_tolak = $this->model('m_komite')->cek_tolak($no_permohonan_kredit);
               

                // setelah hasil komite di simpan maka cek kembali data di tbl komite apakah ada tolak atau tidak jika ada maka jangan simpan data ke keputusan
                $cek_tolak = $this->model('m_komite')->cek_tolak($no_permohonan_kredit);

                // jika berhasil simpan ke tbl_komite maka update field status dan komite_1,komite_2,komite_3 tbl_wawancara
                if ($jumlah_komite == "1") {
                    $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
                } else if ($jumlah_komite == "2") {
                    $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
                } else if ($jumlah_komite == "3") {
                    $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
                }


                // proses update status di tbl_wawancara jika jumlah komite telah terpenuhi maka status berubah jadi disetujui atau tolak, dan jika belum cukup maka upadte status = komite

                // proses jika komite menekan tombol approve

                // echo "cek tolak : " . $cek_tolak . "\n";
                if ($jumlah_komite <= ($batas_approve - 1)) { // jika kondisi komite lebih kecil dari batas jumlah aprrove // echo "batas approve komite : " . $batas_approve . "\n" ; // echo "Komite sekarang : " . $jumlah_komite . "\n" ; // echo "Status : komite" ; // update status di tbl_wawancara $this->model('m_komite')->update_status_komite($no_permohonan_kredit, "KOMITE");
                    if ($_POST['status'] == 'DISETUJUI') {
                        echo "DISETUJUI";
                    } else if ($_POST['status'] == 'DITOLAK') {

                        echo "DITOLAK";
                    }
                } else if ($jumlah_komite == $batas_approve) {
                    // jika kondisi komite == dari batas jumlah aprrove


                    // echo "batas approve komite : " . $batas_approve . "\n";
                    // echo "Komite sekarang : " . $jumlah_komite . "\n";
                    // echo "Status : DISETUJUI/TOLAK";

                    // cek dlu tbl_komite apakah terdapat tolak di field status
                    if (!$cek_tolak > 0) {
                        // echo "tidak terdapat tolak";
                        // update status di tbl_wawancara
                        $this->model('m_komite')->update_status_komite($no_permohonan_kredit, "DISETUJUI");



                        // update tgl_komite tbl_permohonan dan update posisi berkas
                        $_POST['lokasi_berkas'] = "PENCAIRAN";
                        $this->model('m_komite')->update_tgl_komite($no_permohonan_kredit);

                        // cek plafond terkecil dan jangka waktu terkecil jika terdapat pafond terkecil maka itu yang akan di ambil keputusannya, dan jika plafond terkecil ada yang sama maka akan di cek jangkawaktu tekecil yang akan di amabil
                        $hasil_cek = $this->model('m_komite')->cek_plafond_jangka_waktu($_POST['no_permohonan_kredit']);



                        // ambil nilai model dari pengecekan plafond dan jangka waktu yang telah ditemukan
                        $_POST['plafond'] = $hasil_cek['plafond'];
                        $_POST['jangka_waktu'] = $hasil_cek['jangka_waktu'];


                        // simpan hasil plafond dan jangka waktu yang telah di dapatkan terkecil dan terbesar beserta post dari ajax
                        $data['simpan_keputusan'] = $this->model("m_keputusan_kredit")->simpan_keputusan_kredit($_POST);


                        // jika proses simpan_keputusan berhasil maka kirim data disetujui ke qjax agar di tampilan alert berhasil
                        if ($data['simpan_keputusan'] > 0) {

                            echo "DISETUJUI";
                        } else {
                        }
                    } else {

                        echo "DITOLAK";

                        // update status di tbl_wawancara
                        $this->model('m_komite')->update_status_komite($no_permohonan_kredit, "DITOLAK");
                        // update tgl_komite tbl_permohonan
                        $this->model('m_komite')->update_tgl_tolak($no_permohonan_kredit);
                    }
                } else {
                    echo "kuota_penuh";
                }
            } else {
                echo "kuota_penuh";
            }
        }
    }


    public function komite_simpan_approve($data)
    {
        $data = $this->model('m_komite')->permohonan_disetujui($data);
    }

    public function komite_cek_tolak($no_permohonan_kredit)
    {

        return $this->model('m_komite')->cek_tolak($no_permohonan_kredit);
    }


    public function komite_simpan_keterangan_jumlah_komite($jumlah_komite, $username_komite, $no_permohonan_kredit)
    {
        // jika berhasil simpan ke tbl_komite maka update field status dan komite_1,komite_2,komite_3 tbl_wawancara
        if ($jumlah_komite == "1") {
            $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
        } else if ($jumlah_komite == "2") {
            $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
        } else if ($jumlah_komite == "3") {
            $this->model('m_komite')->update_komite($username_komite, $no_permohonan_kredit, $jumlah_komite);
        }
    }

    // fungsi ini untuk menetukan apakah komite tekan tombol approve reject atau pending
    public function komite_pilihan_approve($status)
    {

        $hasil = '';

        if ($status == 'DISETUJUI') {

            $hasil = "DISETUJUI";
        } else if ($status == 'DITOLAK') {

            $hasil = "DITOLAK";
        }

        return $hasil;
    }








    public function permohonan_ditolak()
    {
        echo $_POST['status'];
    }

    public function cek_jumlah_komite()
    {

        $jumlah_komite = $_POST['data_jumlah_komite'];
        if ($jumlah_komite == "0") {
            $_POST['keterangan'] = "Komite 1";
        } else if ($jumlah_komite == "1") {
            $_POST['keterangan'] = "Komite 2";
        } else if ($jumlah_komite == "2") {
            $_POST['keterangan'] = "Komite 3";
        } else {
            $_POST['keterangan'] = "komite " . $_POST['data_jumlah_komite'];
        }
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond_disetujui']);
        $_POST['jangka_waktu'] = str_replace(".", "", $_POST['jangka_waktu']);
        $_POST['penambahan'] = str_replace(".", "", $_POST['penambahan']);
        $_POST['biaya_provisi_nominal'] = str_replace(".", "", $_POST['provisi_kredit']);
        $_POST['biaya_administrasi_nominal'] = str_replace(".", "", $_POST['administrasi_kredit']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['tabungan'] = str_replace(".", "", $_POST['tabungan']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_apht'] = str_replace(".", "", $_POST['biaya_apht']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);

        $data['cek_aturan_jumlah_komite'] = $this->model('m_komite')->cek_aturan_jumlah_komite($_POST['no_permohonan_kredit']);
        $data['hitung'] = $this->model('m_komite')->hitung_jumlah_komite($_POST['no_permohonan_kredit']);


        if ($data['hitung'] >= $data['cek_aturan_jumlah_komite']['aturan_jumlah_komite']) {
            echo 'terpenuhi';
        } else {
            // $data['simpan'] = $this->model('m_komite')->permohonan_disetujui($_POST);
            echo "belum_terpenuhi";
        }
    }

    public function hitung_jumlah_komite()
    {
        $data['hitung'] = $this->model('m_komite')->hitung_jumlah_komite($_POST['no_permohonan_kredit']);
        echo $data['hitung'];
    }



    public function tampung_sementara()
    {
        $jumlah_komite = $_POST['data_jumlah_komite'];

        if ($jumlah_komite == "0") {
            $_POST['keterangan'] = "Komite 1";
        } else if ($jumlah_komite == "1") {
            $_POST['keterangan'] = "Komite 2";
        } else if ($jumlah_komite == "2") {
            $_POST['keterangan'] = "Komite 3";
        } else {
            $_POST['keterangan'] = "komite " . $_POST['data_jumlah_komite'];
        }




        $_POST['plafond'] = str_replace(".", "", $_POST['plafond_disetujui']);
        $_POST['jangka_waktu'] = str_replace(".", "", $_POST['jangka_waktu']);
        $_POST['penambahan'] = str_replace(".", "", $_POST['penambahan']);
        $_POST['biaya_provisi_nominal'] = str_replace(".", "", $_POST['provisi_kredit']);
        $_POST['biaya_administrasi_nominal'] = str_replace(".", "", $_POST['administrasi_kredit']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['tabungan'] = str_replace(".", "", $_POST['tabungan']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_apht'] = str_replace(".", "", $_POST['biaya_apht']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);
        // $_POST['premi_asuransi'] = str_replace(".", "", $_POST['premi_asuransi']);



        // cek dlu atruan jumlah komite cabang di tabel wawancara berdsarakan no_registasi_kredit sebelum melakukan simpan pada tabel komite..
        // jika aturan jumlah komite cabang masih lebih kecil dari jumlah komite yang telah melakukan komite maka sistem bisa menyimpan data ....
        // jika lebih atau sama dengan, maka jangan simpan ke tbl komite dan beri konfirmasi permohonan komite telah lebih
        $data['cek_aturan_jumlah_komite'] = $this->model('m_komite')->cek_aturan_jumlah_komite($_POST['no_permohonan_kredit']);
        $data['hitung'] = $this->model('m_komite')->hitung_jumlah_komite($_POST['no_permohonan_kredit']);



        // echo "Aturan cabang jumlah komite : " . $data['cek_aturan_jumlah_komite']['aturan_jumlah_komite'] . "\n";
        // echo "Jumlah Komite yang telah komite : " . $data['hitung'] . "\n";


        if ((int)$data['hitung'] < (int)$data['cek_aturan_jumlah_komite']['aturan_jumlah_komite']) {

            if ((int)$data['hitung'] == (int)($data['cek_aturan_jumlah_komite']['aturan_jumlah_komite'] - 1)) {
                // echo "Update tbl_wawancara status simpan ke tbl keputusan";

                $data['simpan'] = $this->model('m_komite')->permohonan_disetujui($_POST);
                $this->model('m_komite')->update_komite_3_tbl_wawancara($_COOKIE['username'], $_POST['no_permohonan_kredit']);
                if ($data['simpan'] > 0) {

                    echo "disetujui";
                } else {
                    echo "tidak_disetujui";
                }
            } else {
                $data['simpan'] = $this->model('m_komite')->permohonan_disetujui($_POST);

                if ($data['simpan'] > 0) {

                    if ($jumlah_komite == "0") {
                        $this->model('m_komite')->update_komite_1_tbl_wawancara($_COOKIE['username'], $_POST['no_permohonan_kredit']);
                    } else if ($jumlah_komite == "1") {
                        $this->model('m_komite')->update_komite_2_tbl_wawancara($_COOKIE['username'], $_POST['no_permohonan_kredit']);
                    }

                    echo "disetujui";
                } else {
                    echo "tidak_disetujui";
                }
                // echo "simpan data";
            }
        } else {
            echo "komite_terpenuhi";
        }
    }




    public function permohonan_pending()
    {

        $data['batas_approve']  = $this->model('m_komite')->cek_aturan_komite($_POST['no_permohonan_kredit']);
        $data['tipe_komite']    = $data['batas_approve']['tipe_komite'];
        $data['komite_approve'] = $this->model('m_komite')->hitung_jumlah_komite($_POST['no_permohonan_kredit']);
        $data['hitung_komite_pusat'] = $this->model('m_komite')->hitung_jumlah_komite_pusat($_POST['no_permohonan_kredit']);
        $data['hitung_komite_cabang'] = $this->model('m_komite')->hitung_jumlah_komite_cabang($_POST['no_permohonan_kredit']);
        // log
        $cs = new cs();
        $_POST['nama_pemohon'] = $cs->get_nama_pemohon_where_id()['nama_pemohon'];

        // jumlah komite yang telah approve 
        $jumlah_komite = ($data['komite_approve'] + 1);

        // set batas approve pada permohonan sesuai batas dari cabang
        $batas_approve = $data['batas_approve']['aturan_jumlah_komite'];


        if ($data['tipe_komite'] == "PUSAT" or $data['tipe_komite'] == "DIAJUKAN PUSAT") {
            if ($data['hitung_komite_pusat'] <= 1  and $_COOKIE['tipe_komite'] == "PUSAT") {

                if ($jumlah_komite <= ($batas_approve - 1)) {

                    ///////////////////
                    // panggil model hapus record bagian tbl_komite dan hapus berdasarkan nopeng
                    $model['hapus'] = $this->model('m_komite')->hapus_keputusan_pending($_POST['no_permohonan_kredit']);


                    if ($model['hapus'] >= 1 or $model['hapus'] == 0) {
                        // $this->model('m_log')->proses_komite_pending();
                        echo "DIPENDING";

                        // panggil model update tbl_wawancara bagian status menjadi pending komite
                        $this->model('m_komite')->update_tbl_wawancara_status($_POST['no_permohonan_kredit']);

                        // echo "Catatan : " . $_POST['dasar_pertimbangan_analis'];

                        // update tbl_wawancara bagian status_pending 
                        $this->model('m_komite')->update_tbl_wawancara_catatan_pending($_POST['no_permohonan_kredit'], $_POST['dasar_pertimbangan_analis']);
                        $this->model('m_komite')->kosongkan_nama_komite($_POST['no_permohonan_kredit']);
                    } else {
                        echo "gagal";
                    }
                    ///////////////////

                } else if (($jumlah_komite == $batas_approve)) {

                    ///////////////////
                    // panggil model hapus record bagian tbl_komite dan hapus berdasarkan nopeng
                    $model['hapus'] = $this->model('m_komite')->hapus_keputusan_pending($_POST['no_permohonan_kredit']);


                    if ($model['hapus'] >= 1 or $model['hapus'] == 0) {
                        // $this->model('m_log')->proses_komite_pending();
                        echo "DIPENDING";

                        // panggil model update tbl_wawancara bagian status menjadi pending komite
                        $this->model('m_komite')->update_tbl_wawancara_status($_POST['no_permohonan_kredit']);

                        // echo "Catatan : " . $_POST['dasar_pertimbangan_analis'];

                        // update tbl_wawancara bagian status_pending 
                        $this->model('m_komite')->update_tbl_wawancara_catatan_pending($_POST['no_permohonan_kredit'], $_POST['dasar_pertimbangan_analis']);
                        $this->model('m_komite')->kosongkan_nama_komite($_POST['no_permohonan_kredit']);
                    } else {
                        echo "gagal";
                    }
                    ///////////////////


                } else {
                    echo "kuota_penuh";
                }
            } else if (($data['hitung_komite_cabang'] < ((int)$batas_approve - 1)) and $_COOKIE['tipe_komite'] == "CABANG") {
                if ($jumlah_komite <= ($batas_approve - 1)) {
                    ///////////////////
                    // panggil model hapus record bagian tbl_komite dan hapus berdasarkan nopeng
                    $model['hapus'] = $this->model('m_komite')->hapus_keputusan_pending($_POST['no_permohonan_kredit']);


                    if ($model['hapus'] >= 1 or $model['hapus'] == 0) {
                        // $this->model('m_log')->proses_komite_pending();
                        echo "DIPENDING";

                        // panggil model update tbl_wawancara bagian status menjadi pending komite
                        $this->model('m_komite')->update_tbl_wawancara_status($_POST['no_permohonan_kredit']);

                        // echo "Catatan : " . $_POST['dasar_pertimbangan_analis'];

                        // update tbl_wawancara bagian status_pending 
                        $this->model('m_komite')->update_tbl_wawancara_catatan_pending($_POST['no_permohonan_kredit'], $_POST['dasar_pertimbangan_analis']);
                        $this->model('m_komite')->kosongkan_nama_komite($_POST['no_permohonan_kredit']);
                    } else {
                        echo "gagal";
                    }
                    ///////////////////

                } else if ($jumlah_komite == $batas_approve) {

                    ///////////////////
                    // panggil model hapus record bagian tbl_komite dan hapus berdasarkan nopeng
                    $model['hapus'] = $this->model('m_komite')->hapus_keputusan_pending($_POST['no_permohonan_kredit']);


                    if ($model['hapus'] >= 1 or $model['hapus'] == 0) {
                        // $this->model('m_log')->proses_komite_pending();
                        echo "DIPENDING";

                        // panggil model update tbl_wawancara bagian status menjadi pending komite
                        $this->model('m_komite')->update_tbl_wawancara_status($_POST['no_permohonan_kredit']);

                        // echo "Catatan : " . $_POST['dasar_pertimbangan_analis'];

                        // update tbl_wawancara bagian status_pending 
                        $this->model('m_komite')->update_tbl_wawancara_catatan_pending($_POST['no_permohonan_kredit'], $_POST['dasar_pertimbangan_analis']);
                        $this->model('m_komite')->kosongkan_nama_komite($_POST['no_permohonan_kredit']);
                    } else {
                        echo "gagal";
                    }
                    ///////////////////


                } else {
                    echo "kuota_penuh";
                }
            } else {
                echo "kuota_penuh";
            }
        } else if ($data['tipe_komite'] == "CABANG") {
            if ($data['hitung_komite_cabang'] < ($batas_approve - 0)) {
                if ($jumlah_komite <= ($batas_approve - 1)) {

                    ///////////////////
                    // panggil model hapus record bagian tbl_komite dan hapus berdasarkan nopeng
                    $model['hapus'] = $this->model('m_komite')->hapus_keputusan_pending($_POST['no_permohonan_kredit']);


                    if ($model['hapus'] >= 1 or $model['hapus'] == 0) {
                        // $this->model('m_log')->proses_komite_pending();
                        echo "DIPENDING";

                        // panggil model update tbl_wawancara bagian status menjadi pending komite
                        $this->model('m_komite')->update_tbl_wawancara_status($_POST['no_permohonan_kredit']);

                        // echo "Catatan : " . $_POST['dasar_pertimbangan_analis'];

                        // update tbl_wawancara bagian status_pending 
                        $this->model('m_komite')->update_tbl_wawancara_catatan_pending($_POST['no_permohonan_kredit'], $_POST['dasar_pertimbangan_analis']);
                        $this->model('m_komite')->kosongkan_nama_komite($_POST['no_permohonan_kredit']);
                    } else {
                        echo "gagal";
                    }
                    ///////////////////


                } else if ($jumlah_komite == $batas_approve) {
                    ///////////////////
                    // panggil model hapus record bagian tbl_komite dan hapus berdasarkan nopeng
                    $model['hapus'] = $this->model('m_komite')->hapus_keputusan_pending($_POST['no_permohonan_kredit']);


                    if ($model['hapus'] >= 1 or $model['hapus'] == 0) {
                        // $this->model('m_log')->proses_komite_pending();
                        echo "DIPENDING";

                        // panggil model update tbl_wawancara bagian status menjadi pending komite
                        $this->model('m_komite')->update_tbl_wawancara_status($_POST['no_permohonan_kredit']);

                        // echo "Catatan : " . $_POST['dasar_pertimbangan_analis'];

                        // update tbl_wawancara bagian status_pending 
                        $this->model('m_komite')->update_tbl_wawancara_catatan_pending($_POST['no_permohonan_kredit'], $_POST['dasar_pertimbangan_analis']);
                        $this->model('m_komite')->kosongkan_nama_komite($_POST['no_permohonan_kredit']);
                    } else {
                        echo "gagal";
                    }
                    ///////////////////
                } else {
                    echo "kuota_penuh";
                }
            } else {
                echo "kuota_penuh";
            }
        }
    }


    public function set_log_approve()
    {
        // log
        $cs = new cs();
        $_POST['nama_pemohon'] = $cs->get_nama_pemohon_where_id()['nama_pemohon'];

        $log = $this->model('m_log')->proses_komite_approve();

        if ($log > 0) {
            echo "insert";
        } else {
            echo "erorr";
        }
    }



    public function set_log_reject()
    {
        // log
        $cs = new cs();
        $_POST['nama_pemohon'] = $cs->get_nama_pemohon_where_id()['nama_pemohon'];

        $log = $this->model('m_log')->proses_komite_reject();

        if ($log > 0) {
            echo "insert";
        } else {
            echo "erorr";
        }
    }

    public function set_log_pending()
    {
        // log
        $cs = new cs();
        $_POST['nama_pemohon'] = $cs->get_nama_pemohon_where_id()['nama_pemohon'];

        $log = $this->model('m_log')->proses_komite_pending();

        if ($log > 0) {
            echo "insert";
        } else {
            echo "erorr";
        }
    }






    public function cari_data_credit_all_2()
    {
        if (isset($_POST['btn_hari_ini'])) {
            $_SESSION['btn_hari_ini'] = 'btn_hari_ini';
            header('Location:' . BASEURL . '/komite/inquiry');
            exit;
        } else if (isset($_POST['btn_bulan_ini'])) {
            $_SESSION['btn_bulan_ini'] = 'btn_bulan_ini';
            header('Location:' . BASEURL . '/komite/inquiry');
            exit;
        } else if (isset($_POST['btn_tahun_ini'])) {

            $_SESSION['btn_tahun_ini'] = 'btn_tahun_ini';
            header('Location:' . BASEURL . '/komite/inquiry');
            exit;
        } else if (isset($_POST['btn_semuanya'])) {
            $_SESSION['btn_semuanya'] = 'btn_semuanya';
            header('Location:' . BASEURL . '/komite/inquiry');
            exit;
        } else if (isset($_POST['btn_pending'])) {
            $_SESSION['btn_pending'] = 'btn_pending';
            header('Location:' . BASEURL . '/komite/inquiry');
            exit;
        } else if (isset($_POST['btn_cari'])) {
            $_SESSION['data_cari'] = $_POST['data_cari'];
            $_SESSION['btn_cari'] = $_POST['btn_cari'];
            header('Location:' . BASEURL . '/komite/inquiry');
            exit;
        }
    }



    public function inquiry()
    {

        if (isset($_SESSION['btn_hari_ini'])) {
            $data['title'] = "Menu inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_hari_ini();
            $this->view('komite/v_inquiry', $data);
            unset($_SESSION['btn_hari_ini']);
        } else if (isset($_SESSION['btn_bulan_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_bulan_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_bulan_ini();
            $this->view('komite/v_inquiry', $data);
            unset($_SESSION['btn_bulan_ini']);
        } else if (isset($_SESSION['btn_tahun_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_tahun_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_tahun_ini();
            $this->view('komite/v_inquiry', $data);
            unset($_SESSION['btn_tahun_ini']);
        } else if (isset($_SESSION['btn_semuanya'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->lihat_data_kredit();
            $data['jumlah_record'] = $this->model('m_cs')->count_lihat_data_kredit();
            $this->view('komite/v_inquiry', $data);
            unset($_SESSION['btn_semuanya']);
        } else if (isset($_SESSION['btn_pending'])) {

            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();

            $this->view('komite/v_inquiry', $data);
            unset($_SESSION['btn_pending']);
        } else if (isset($_SESSION['btn_cari'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";

            if ($_SESSION['data_cari'] != '') {
                $data['data_kredit'] = $this->model('m_cs')->btn_cari();
                $data['jumlah_record'] = $this->model('m_cs')->count_btn_cari();
            }

            $this->view('komite/v_inquiry', $data);
            unset($_SESSION['btn_cari']);
        } else {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $this->view('komite/v_inquiry', $data);
        }
    }


    public function cek_status_tbl_wawancara()
    {

        $data = $this->model('m_komite')->cek_status_tbl_wawancara();
        echo $data['status'];
    }



    public function persetujuan_tolak_batal()
    {

        $data['title'] = "Persetujuan Tolak Batal";
        $data['judul'] = "Persetujuan Tolak Batal";
        $data['res']   = $this->model('m_komite')->persetujuan_tolak_batal();

        $this->view('komite/v_persetujuan_tolak_batal', $data);
    }


    public function reload_table_persetujuan_tolak_batal()
    {
        $data   = $this->model('m_komite')->persetujuan_tolak_batal();

        $rows2 = array();
        foreach ($data as $i) :

            $res_data['no_permohonan_kredit'] = $i['no_permohonan_kredit'];
            $res_data['kode_cabang'] = $i['kode_cabang'];
            $res_data['nama_pemohon'] = $i['nama_pemohon'];
            $res_data['nama_instansi'] = $i['nama_instansi'];
            $res_data['tipe_kredit'] = $i['tipe_kredit'];
            $res_data['tanggal_permohonan'] = isset($i['tanggal_permohonan']) ? date('d-m-Y', strtotime($i['tanggal_permohonan'])) : '';
            $res_data['plafond'] = number_format(($i['plafond']), 0, ",", ".");
            $res_data['jangka_waktu'] = $i['jangka_waktu'];
            $res_data['id_analis'] = $i['id_analis'];
            $res_data['status'] = $i['status'];
            // $btn_1 = "<button class='btn bg-danger btn_proses_tolak_batal' data-id=" . $i['no_permohonan_kredit'] . ">Proses Tolak/Batal</button>";
            $res_data['aksi'] = "<button class='btn bg-danger btn_proses_tolak_batal' id='myButoon' data-id='" . $i['no_permohonan_kredit'] . "'>Proses Tolak/Batal</button>";
            // $res_data['aksi']   = $btn_1;
            $rows2[] = $res_data;


        endforeach;
        echo json_encode($rows2);
    }

    public function modal_persetujuan_tolak_batal()
    {

        $data['detail'] = $this->model('m_cs')->modal_detail();

        // handel bagian tab

        $data['get_tbl_wawancara'] = $this->model('m_wawancara')->detail_wawancara($_POST);

        if ($data['get_tbl_wawancara']['user_edit'] != '') {
            $data['get_tbl_wawancara']['user_create'] =  $data['get_tbl_wawancara']['user_edit'];
        } else {
            $data['get_tbl_wawancara']['user_create'] =  $data['get_tbl_wawancara']['user_create'];
        }

        $data['get_tbl_wawancara']['plafond'] = number_format(($data['get_tbl_wawancara']['plafond']), 0, ',', '.');
        $data['get_tbl_wawancara']['angsuran_perbulan'] = number_format(($data['get_tbl_wawancara']['angsuran_perbulan']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_provisi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_provisi_nominal']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_administrasi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_administrasi_nominal']), 0, ',', '.');
        $data['get_tbl_wawancara']['premi_asuransi'] = number_format(($data['get_tbl_wawancara']['premi_asuransi']), 0, ',', '.');
        $data['get_tbl_wawancara']['tabungan'] = number_format(($data['get_tbl_wawancara']['tabungan']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_notaris'] = number_format(($data['get_tbl_wawancara']['biaya_notaris']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_materai'] = number_format(($data['get_tbl_wawancara']['biaya_materai']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_apht'] = number_format(($data['get_tbl_wawancara']['biaya_apht']), 0, ',', '.');
        $data['get_tbl_wawancara']['asuransi_kerugian'] = number_format(($data['get_tbl_wawancara']['asuransi_kerugian']), 0, ',', '.');



        // penghasilan pemohon
        for ($a = 1; $a <= 3; $a++) {

            $data['penghasilan_pemohon_ket'][$a] = $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_' . $a . '_ket'] != '' ? $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_' . $a . '_ket'] : '-';
            $data['penghasilan_pasangan_ket'][$a] = $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_' . $a . '_ket'] != '' ? $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_' . $a . '_ket'] : '-';
        }



        $data['biaya_hidup_sebulan_ket'] = $data['get_tbl_wawancara']['biaya_hidup_sebulan_ket'] != '' ? $data['get_tbl_wawancara']['biaya_hidup_sebulan_ket'] : '-';
        $data['biaya_pendidikan_ket']    = $data['get_tbl_wawancara']['biaya_pendidikan_ket'] != '' ? $data['get_tbl_wawancara']['biaya_pendidikan_ket'] : '-';
        $data['biaya_pam_listrik_telepon_ket'] = $data['get_tbl_wawancara']['biaya_pam_listrik_telepon_ket'] != '' ? $data['get_tbl_wawancara']['biaya_pam_listrik_telepon_ket'] : '-';
        $data['biaya_transport_ket'] = $data['get_tbl_wawancara']['biaya_transport_ket'] != '' ? $data['get_tbl_wawancara']['biaya_transport_ket'] : '-';

        $data['biaya_lainnya_ket'] = $data['get_tbl_wawancara']['biaya_lainnya_ket'] != '' ? $data['get_tbl_wawancara']['biaya_lainnya_ket'] : '-';






        // detail tbl_permohon_kredit
        $data['no_permohonan_kredit'] = $_POST['no_permohonan_kredit'];
        $data['get_tbl_permohon_kredit'] = $this->model('m_cs')->get_tbl_permohon_kredit($data['no_permohonan_kredit']);

        // slik

        $data['daftar_slik_pemohon'] = $this->model('m_slik')->daftar_slik_pemohon($data['no_permohonan_kredit']);
        $data['daftar_slik_pasangan'] = $this->model('m_slik')->daftar_slik_pasangan($data['no_permohonan_kredit']);
        $data['data_slik_single'] = $this->model('m_slik')->get_data_slik_single($data['no_permohonan_kredit']);





        $data['kode_golongan_debitur'] =  $this->model('m_ref_golongan_debitur')->get_data_where_kode($data['get_tbl_wawancara']['kode_golongan_debitur']);
        $data['kode_jenis_penggunaan'] =   $this->model('m_ref_jenis_penggunaan')->get_data_where_kode($data['get_tbl_wawancara']['kode_jenis_penggunaan']);


        $data['kode_sektor_ekonomi'] = $this->model('m_ref_sektor_ekonomi')->get_data_where_kode($data['get_tbl_wawancara']['kode_sektor_ekonomi']);
        $data['kode_hubungan_debitur_dengan_bank'] = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_data_where_kode($data['get_tbl_wawancara']['kode_hubungan_debitur_dengan_bank']);
        $data['rekomendasi_komite'] = $this->model('m_komite')->rekomendasi_komite($data['no_permohonan_kredit']);


        // handel bagian tab







        // ambil data dari table referensi tabel referensi
        $data['nama_cabang'] = $this->model('m_ref_cabang')->get_data_where_kode($data['detail']['kode_cabang']);

        // ambil data riwayat dan tampikan di tab riwayat pemoho

        $_POST['no_ktp'] = $data['detail']['no_ktp_pemohon'];


        $data['modal_riwayat'] = $this->model('m_cs')->cari_ktp();


        $data['tbl_wawancara_berkas'] = $this->model('m_file_wawancara')->get_tbl_wawancara_berkas_id($data['no_permohonan_kredit']);


        $this->view('komite/v_modal_persetujuan_tolak_batal', $data);
    }


    public function setuju_tolak_batal()
    {



        // update tbl_permohon_kredit
        $query_1 = $this->model('m_komite')->update_tbl_wawancara();
        $query_2 = $this->model('m_komite')->update_tbl_permohon_kredit();
        $query_3 = $this->model('m_komite')->insert_tbl_komite();


        $hasil = $query_1 . $query_2 . $query_3;
        $output =  $hasil;


        if ($output == "111") {
            echo "sukses";
        } else {
            echo "gagal" . $output;
        }


        // var_dump($_POST);
    }


    public function tidak_setuju_tolak_batal()
    {

        $query_1 = $this->model('m_komite')->tidak_setuju_tolak_batal_update_tbl_wawancara();
        $query_2 = $this->model('m_komite')->tidak_setuju_tolak_batal_update_tbl_permohon_kredit();

        // $query_1 = 1;
        // $query_2 = 1;


        $hasil = $query_1 . $query_2;
        $output =  $hasil;

        if ($output == "11") {
            echo "sukses";
        } else {
            echo "gagal" . $output;
        }
    }
}
