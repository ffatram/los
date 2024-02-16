<div class='row mt-2'>
    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' colspan='2'><b>Data Pemohon</b></td>
            </tr>

            <tr>
                <td id='td_tabel_modal_ket'>No. Permohonan </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['no_permohonan_kredit'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Nama Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Tempat Lahir </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tempat_lahir_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Tanggal Lahir Pemohon </td>
                <td id='td_tabel_modal'>" . date('d-m-Y', strtotime($detail_permohonan_kredit['tgl_lahir_pemohon'])) . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jenis Kelamin Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_kelamin_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Nama Ibu Kandung Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_ibu_kandung_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>No. KTP Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['no_ktp_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>NPWP Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['npwp_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Alamat Sesuai KTP Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_ktp_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Alamat Sekarang Pemhohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_sekarang_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Telepon Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_pemohon'] . "</td>
            </tr>


            <tr>
                <td id='td_tabel_modal_ket'>Media Sosial Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['media_sosial'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Status Kepemilikan Rumah Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['status_kepemilikan_rumah_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Pendidikan Terakhir Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['pendidikan_terakhir_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Gelar Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['gelar_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Status Perkawinan Pemohon</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['status_perkawinan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jumlah Tanggungan Pemohon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jumlah_tanggungan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Nama Keluarga Yang Dapat Dihubungi</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_keluarga_dapat_dihubungi'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Alamat </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_keluarga_dapat_dihubungi'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Hubungan </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['hubungan_keluarga_dapat_dihubungi'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Telepon/Hp Yang Dapat Dihubngi </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_keluarga_dapat_dihubungi'] . "</td>
            </tr>



        </table>
    </div>


    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' colspan='2'><b>Data Pekerjaan</b></td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jenis Pekerjaan </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_pekerjaan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Nama Instansi </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_instansi'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Alamat </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_instansi'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Telepon </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_instansi'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Tahun Mulai Bekerja </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tahun_mulai_bekerja'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jabatan Saat Ini </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jabatan_saat_ini'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Atasan Langsung</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['atasan_langsung'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Telp/Hp Bendahara </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_bendahara'] . "</td>
            </tr>
        </table>
    </div>
</div>


<div class='row mt-2'>

    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' colspan='2'><b>Data Pasangan</b></td>
            </tr>


            <tr>
                <td id='td_tabel_modal_ket'>Nama Pasangan</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_pasangan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Tempat Lahir Pasangan </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tempat_lahir_pasangan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Tanggal Lahir Pasangan </td>
                <td id='td_tabel_modal'>" . date('d-m-Y', strtotime($detail_permohonan_kredit['tgl_lahir_pasangan'])) . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>No. KTP Pasangan</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['no_ktp_pasangan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Alamat KTP</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_ktp_pasangan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Alamat Sekarang</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_sekarang_pasangan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Telepon/HP</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_pasangan'] . "</td>
            </tr>

        </table>
    </div>



    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' colspan='2'><b>Data Pekerjaan Pasangan</b></td>
            </tr>


            <tr>
                <td id='td_tabel_modal_ket'>Jenis Pekerjaan </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_pekerjaan_pasangan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Nama Instansi </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_instansi_pasangan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Tahun Mulai Bekerja </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tahun_mulai_bekerja_pasangan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jabatan Saat Ini </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jabatan_saat_ini_pasangan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Alamat Kantor </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_kantor_pasangan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Telepon Kantor </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_kantor_pasangan'] . "</td>
            </tr>

        </table>
    </div>
</div>


<div class='row mt-2'>

    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' colspan='2'><b>Data Kredit</b></td>
            </tr>


            <tr>
                <td id='td_tabel_modal_ket'>Tanggal Permohonan </td>
                <td id='td_tabel_modal'>" . date('d-m-Y', strtotime($detail_permohonan_kredit['tanggal_permohonan'])) . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Perjanjian Kerjasama </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['perjanjian_kerjasama'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jenis Permohonan </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_permohonan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jumlah Kredit Yang Dimohon </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['plafond_dimohon']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jangka Waktu (Bln) </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jangka_waktu'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Tujuan Penggunaan Kredit </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tujuan_penggunaan_kredit'] . ' - ' . $ref_tujuan_penggunaan_kredit['keterangan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jenis Jaminan </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_jaminan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Nilai Perkiraan Jaminan </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['nilai_jaminan']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Nama Marketing </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['id_marketing'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Nama Analis </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['id_analis'] . "</td>
            </tr>


        </table>
    </div>
</div>







<div class='row mt-2'>

    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' colspan='2'><b>Penghasilan Perbulan</b></td>
            </tr>


            <tr>
                <td id='td_tabel_modal_ket'>Penghasilan Pemohon </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['penghasilan_pemohon']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Penghasilan Pasangan </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['penghasilan_pasangan']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Penghasilan Tambahan </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['penghasilan_tambahan']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Penghasilan Tambahan Lainnya </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['penghasilan_tambahan_lainnya']), 0, ',', '.') . "</td>
            </tr>




        </table>
    </div>



    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' colspan='2'><b>Pengeluaran Perbulan</b></td>
            </tr>

            <tr>
                <td id='td_tabel_modal_ket'>Biaya Hidup </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['biaya_hidup_perbulan']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Biaya Pendidikan </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['biaya_pendidikan']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Biaya PAM/Listrik/Tlp/Hp </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['biaya_pam_listrik_telepon']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Biaya Transport </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['biaya_transport']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Angsuran Bang Lain </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['angsuran_bank_lain']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Angsuran Perumahan </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['angsuran_perumahan']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Angsuran Kendaraan </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['angsuran_kendaraan']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Angsuran Barang Elektronik </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['angsuran_barang_elektronik']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Angsuran Koperasi </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['angsuran_koperasi']), 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Biaya Lainnya </td>
                <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['biaya_lainnya']), 0, ',', '.') . "</td>
            </tr>




        </table>
    </div>





</div>



<div class='row mt-2'>

    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' colspan='2'><b>Data Aset Yang Dimiliki</b></td>
            </tr>

            <tr>
                <td id='td_tabel_modal_ket'>Aset Yang Dimiliki </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['aset_yang_dimiliki'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Alamat Aset </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_aset'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jenis Sertifikat</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_sertifikat'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jumlah Kendaraan </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jumlah_kendaraan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Merk Kendaraan </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['merek_kendaraan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Tahun Kendaraan</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tahun_kendaraan'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Atas Nama Kendaraan </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['atas_nama_kendaraan'] . "</td>
            </tr>




        </table>
    </div>
</div>


<div class='row mt-2'>

    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>



            <tr>
                <td id='td_tabel_modal_ket'>Catatan CS</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['catatan_cs'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Lokasi Berkas </td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['lokasi_berkas'] . "</td>
            </tr>




        </table>
    </div>



    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>



            <tr>
                <td id='td_tabel_modal_ket'>Diinput Oleh</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['user_create'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Tanggal Input </td>
                <td id='td_tabel_modal'>" . date('d-m-Y', strtotime($detail_permohonan_kredit['tgl_create'])) . "</td>
            </tr>
        </table>
    </div>
</div>