<?php






class modal extends Controller
{

    public function modal_detail_all()
    {

        $data['detail'] = $this->model('m_cs')->modal_detail();

        // handel bagian tab

        $data['get_tbl_wawancara'] = $this->model('m_wawancara')->detail_wawancara($_POST);


        // cek data pada tabel wawancara jika data no_permohonan tersedia di tabel wawancara maka jalankan ifnya
        if ($data['get_tbl_wawancara']) {
            if ($data['get_tbl_wawancara']['user_edit'] != '') {
                $data['get_tbl_wawancara']['user_create'] =  $data['get_tbl_wawancara']['user_edit'];
            } else {
                $data['get_tbl_wawancara']['user_create'] =  $data['get_tbl_wawancara']['user_create'];
            }
        }
        

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
            // $data['get_tbl_wawancara']['plafond'] = number_format(($data['get_tbl_wawancara']['plafond']), 0, ',', '.');
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

        $data['halo'] = "Halo";

        $this->view('modal/v_modal_detail_all', $data);
    }
}
