<?php

$detail = $data['get_tbl_wawancara'];
$data_tbl_komite           = $data['rekomendasi_komite'];
$data_tbl_wawancara     = $data['get_tbl_wawancara'];

$tbl_wawancara_berkas = $data['tbl_wawancara_berkas'];


for ($a = 1; $a <= 7; $a++) {
    if ($a == 1) {
        $detail['angsuran_kredit_sebelumnya'] = number_format(($detail['angsuran_kredit_sebelumnya'] * 1000), 0, ',', '.');
        $detail['saldo_tabungan_terakhir'] = number_format(($detail['saldo_tabungan_terakhir'] * 1000), 0, ',', '.');
    }
    $detail['angsuran_pemohon_lainnya_' . $a] =  number_format(($detail['angsuran_pemohon_lainnya_' . $a] * 1000), 0, ',', '.');
}


for ($a = 1; $a <= 7; $a++) {

    $detail['angsuran_pasangan_lainnya_' . $a] =  number_format(($detail['angsuran_pasangan_lainnya_' . $a] * 1000), 0, ',', '.');
}


$detail['kemampuan_membayar_angsuran'] = number_format(($detail['kemampuan_membayar_angsuran'] * 1000), 0, ',', '.');



for ($a = 1; $a <= 7; $a++) {

    if ($detail['pemohon_lunasi_' . $a] == "0") {
        $angsuran_pemohon[$a] = "<span style='color:red'>" . $detail['angsuran_pemohon_lainnya_' . $a] . "</span>";
        $ket_angsuran_pemohon[$a] = "<span style='color:red'>" . $detail['angsuran_pemohon_lainnya_' . $a . '_ket'] . "-----Dilunasi" . "</span>";
    } else if ($detail['pemohon_lunasi_' . $a] == "1") {
        $angsuran_pemohon[$a] = "<span>" . $detail['angsuran_pemohon_lainnya_' . $a] . "</span>";
        $ket_angsuran_pemohon[$a] = "<span>" . $detail['angsuran_pemohon_lainnya_' . $a . '_ket'] . "-----Dilanjutkan" . "</span>";
    } else {
        $angsuran_pemohon[$a] = "<span>" . $detail['angsuran_pemohon_lainnya_' . $a] . "</span>";
        $ket_angsuran_pemohon[$a] = "<span>" . $detail['angsuran_pemohon_lainnya_' . $a . '_ket'] . "-----Dilanjutkan" . "</span>";
    }

    if ($detail['pasangan_lunasi_' . $a] == "0") {
        $angsuran_pasangan[$a] = "<span style='color:red'>" . $detail['angsuran_pasangan_lainnya_' . $a] . "</span>";
        $ket_angsuran_pasangan[$a] = "<span style='color:red'>" . $detail['angsuran_pasangan_lainnya_' . $a . '_ket'] . "-----Dilunasi" . "</span>";
    } else if ($detail['pasangan_lunasi_' . $a] == "1") {
        $angsuran_pasangan[$a] = "<span>" . $detail['angsuran_pasangan_lainnya_' . $a] . "</span>";
        $ket_angsuran_pasangan[$a] = "<span>" . $detail['angsuran_pasangan_lainnya_' . $a . '_ket'] . "-----Dilanjutkan" . "</span>";
    } else {
        $angsuran_pasangan[$a] = "<span>" . $detail['angsuran_pasangan_lainnya_' . $a] . "</span>";
        $ket_angsuran_pasangan[$a] = "<span>" . $detail['angsuran_pasangan_lainnya_' . $a . '_ket'] . "-----Dilanjutkan" . "</span>";
    }
}



if ($detail['keterangan_persentase_angsuran'] = "Disarankan" or $detail['keterangan_persentase_angsuran'] = "Dipertimbangkan") {
    $detail['keterangan_persentase_angsuran'] = "<span style='color:blue'>" . $detail['keterangan_persentase_angsuran'] . "</span>";
} else if ($detail['keterangan_persentase_angsuran'] == "Ditolak" or $detail['keterangan_persentase_angsuran'] = "Kurang Disarankan") {
    $detail['keterangan_persentase_angsuran'] = "<span style='color:red'>" . $detail['keterangan_persentase_angsuran'] . "</span>";
}





$kode_golongan_debitur = $data['kode_golongan_debitur'];
$kode_jenis_penggunaan = $data['kode_jenis_penggunaan'];
$kode_sektor_ekonomi = $data['kode_sektor_ekonomi'];
$kode_hubungan_debitur_dengan_bank = $data['kode_hubungan_debitur_dengan_bank'];





?>


<style>
    .tbl_modal,
    .td_isi {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #dddddd;
    }

    .td_ket {
        border-collapse: collapse;
        border: 1px solid #dddddd;
        background-color: #f4f4f4;
        width: 33%;
    }
</style>


<style>
    #tabel_modal {

        border-collapse: collapse;
        width: 100%;
    }

    #td_tabel_modal_ket {
        border: 1px solid #dddddd;
        background-color: #F4F4F4;
        vertical-align: baseline;
        width: 45%;

    }

    #td_tabel_modal {
        border: 1px solid #dddddd;
        vertical-align: baseline;
    }
</style>



<div class="row">
    <div class="col-6">
        <table class="table-hover tbl_modal" cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td class="td_ket">No. Permohonan Kredit</td>
                <td class="td_isi"><?= $data['detail']['no_permohonan_kredit'] ?></td>
            </tr>
            <tr>
                <td class="td_ket">Nama Pemohon</td>
                <td class="td_isi"><?= $data['detail']['nama_pemohon'] ?></td>
            </tr>
            <tr>
                <td class="td_ket">Instansi</td>
                <td class="td_isi"><?= $data['detail']['nama_instansi'] ?></td>
            </tr>
        </table>
    </div>

    <div class="col-6">
        <table class="table-hover tbl_modal" cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td class="td_ket">Tipe Kredit</td>
                <td class="td_isi"><?= $data['detail']['tipe_kredit'] ?></td>
            </tr>
            <tr>
                <td class="td_ket">Jenis Permohonan</td>
                <td class="td_isi"><?= $data['detail']['jenis_permohonan'] ?></td>
            </tr>
            <tr>
                <td class="td_ket">Cabang</td>
                <td class="td_isi"><?= $data['detail']['kode_cabang'] . " - " . $data['nama_cabang']['nama_cabang'] ?></td>
            </tr>
        </table>
    </div>

</div>



<div class="row mt-3">

    <div class="col-12">


        <ul class="nav nav-tabs mt-2 justify-content-center " id="" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="" data-toggle="tab" href="#a">Detail Permohonan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="" data-toggle="tab" href="#b">Detail SLIK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="" data-toggle="tab" href="#c">Detail Analisa</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="" data-toggle="tab" href="#d">File Berkas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="" data-toggle="tab" href="#f">Cetak Hasil Analisa</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" id="" data-toggle="tab" href="#e">Keputusan Komite</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="" data-toggle="tab" href="#g">Riwayat Permohonan</a>
            </li>
        </ul>



        <div class="tab-content">
            <div class="tab-pane" id="a">

                <div class="row">
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header " style="background-color: #F4F4F4; ">
                                <h3 class="card-title "> <span class="font-weight-bold">Data Pemohon</span> </h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200px;  background-color: #F4F4F4;">No. Permohonan Kredit</td>
                                            <td><?= $data['detail']['no_permohonan_kredit'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Pemohon</td>
                                            <td><?= $data['detail']['nama_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tempat Lahir</td>
                                            <td><?= $data['detail']['tempat_lahir_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Lahir</td>
                                            <td><?= isset($data['detail']['tgl_lahir_pemohon']) ? date('d-m-Y', strtotime($data['detail']['tgl_lahir_pemohon'])) : ''   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jenis Kelamin</td>
                                            <td><?= $data['detail']['jenis_kelamin_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Ibu</td>
                                            <td><?= $data['detail']['nama_ibu_kandung_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">No. KTP</td>
                                            <td><?= $data['detail']['no_ktp_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">No. NPWP</td>
                                            <td><?= $data['detail']['npwp_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat sesuai KTP</td>
                                            <td><?= $data['detail']['alamat_ktp_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat Sekarang</td>
                                            <td><?= $data['detail']['alamat_sekarang_pemohon'] ?></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon</td>
                                            <td><?= $data['detail']['telepon_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Email</td>
                                            <td><?= $data['detail']['media_sosial'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Status Kepemilikan Rumah</td>
                                            <td><?= $data['detail']['status_kepemilikan_rumah_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Pendidikan Terakhir</td>
                                            <td><?= $data['detail']['pendidikan_terakhir_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Gelar</td>
                                            <td><?= $data['detail']['gelar_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Status Perkawinan</td>
                                            <td><?= $data['detail']['status_perkawinan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jumlah Tanggungan</td>
                                            <td><?= $data['detail']['jumlah_tanggungan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Keluarga Yg Dapat Dihubungi</td>
                                            <td><?= $data['detail']['nama_keluarga_dapat_dihubungi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon/Hp Yg Dapat Dihubungi</td>
                                            <td><?= $data['detail']['telepon_keluarga_dapat_dihubungi'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header" style="background-color: #F4F4F4; ">
                                <h3 class="card-title "> <span class="font-weight-bold">Data Pekerjaan</span> </h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jenis Pekerjaan</td>
                                            <td><?= $data['detail']['jenis_pekerjaan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Instansi</td>
                                            <td><?= $data['detail']['nama_instansi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat</td>
                                            <td><?= $data['detail']['alamat_instansi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon</td>
                                            <td><?= $data['detail']['telepon_instansi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tahun Mulai Bekerja</td>
                                            <td><?= $data['detail']['tahun_mulai_bekerja'] ?></td>
                                        </tr>


                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jabatan Saat Ini</td>
                                            <td><?= $data['detail']['jabatan_saat_ini'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Atasan Langsung</td>
                                            <td><?= $data['detail']['atasan_langsung'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon/Hp Bendahara</td>
                                            <td><?= $data['detail']['telepon_bendahara'] ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header " style="background-color: #F4F4F4; ">
                                <h3 class="card-title "> <span class="font-weight-bold">Data Pasangan</span> </h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200px;  background-color: #F4F4F4;">Nama Pasangan</td>
                                            <td><?= $data['detail']['nama_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tempat Lahir</td>
                                            <td><?= $data['detail']['tempat_lahir_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Lahir</td>
                                            <td><?= isset($data['detail']['tgl_lahir_pasangan']) ? date('d-m-Y', strtotime($data['detail']['tgl_lahir_pasangan'])) : ''   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat KTP</td>
                                            <td><?= $data['detail']['alamat_ktp_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat Sekarang</td>
                                            <td><?= $data['detail']['alamat_sekarang_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon/Hp</td>
                                            <td><?= $data['detail']['telepon_pasangan'] ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header" style="background-color: #F4F4F4; ">
                                <h3 class="card-title "> <span class="font-weight-bold">Data Pekerjaan Pasangan</span> </h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jenis Pekerjaan</td>
                                            <td><?= $data['detail']['jenis_pekerjaan_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Instansi</td>
                                            <td><?= $data['detail']['nama_instansi_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tahun Mulai Bekerja</td>
                                            <td><?= $data['detail']['tahun_mulai_bekerja_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jabatan Saat Ini</td>
                                            <td><?= $data['detail']['jabatan_saat_ini_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat Kantor</td>
                                            <td><?= $data['detail']['alamat_kantor_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon Kantor</td>
                                            <td><?= $data['detail']['telepon_kantor_pasangan'] ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="row">
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header " style="background-color: #F4F4F4; ">
                                <h3 class="card-title "> <span class="font-weight-bold">Data Kredit</span> </h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200px;  background-color: #F4F4F4;">Tanggal Permohonan</td>
                                            <td><?= isset($data['detail']['tanggal_permohonan']) ? date('d-m-Y', strtotime($data['detail']['tanggal_permohonan'])) : ''   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Perjanjian Kerjasama</td>
                                            <td><?= $data['detail']['perjanjian_kerjasama'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jenis Permohonan</td>
                                            <td><?= $data['detail']['jenis_permohonan'] ?></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jumlah Kredit Yang Dimohon</td>
                                            <td><?= number_format(($data['detail']['plafond_dimohon']), 0, ',', '.');  ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jangka Waktu (Bulan)</td>
                                            <td><?= $data['detail']['jangka_waktu'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tujuan Penggunaan Kredit</td>
                                            <td><?= $data['detail']['tujuan_penggunaan_kredit'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nilai Perkiraan Jaminan</td>
                                            <td><?= number_format(($data['detail']['nilai_jaminan']), 0, ',', '.');  ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama <?= level_6 ?></td>
                                            <td><?= $data['detail']['id_marketing'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama <?= level_3 ?></td>
                                            <td><?= $data['detail']['id_analis'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header " style="background-color: #F4F4F4; ">
                                <h3 class="card-title "> <span class="font-weight-bold">Penghasilan Perbulan</span> </h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200px;  background-color: #F4F4F4;">Penghasilan Pemohon</td>
                                            <td><?= number_format(($data['detail']['penghasilan_pemohon']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Penghasilan Pasangan</td>
                                            <td><?= number_format(($data['detail']['penghasilan_pasangan']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Penghasilan Tambahan</td>
                                            <td><?= number_format(($data['detail']['penghasilan_tambahan']), 0, ',', '.');   ?></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Penghasilan Tambahan Lainnya</td>
                                            <td><?= number_format(($data['detail']['penghasilan_tambahan_lainnya']), 0, ',', '.');   ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header" style="background-color: #F4F4F4; ">
                                <h3 class="card-title "> <span class="font-weight-bold">Pengeluaran Perbulan</span> </h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Biaya Hidup</td>
                                            <td><?= number_format(($data['detail']['biaya_hidup_perbulan']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">NBiaya Pendidikan</td>
                                            <td><?= number_format(($data['detail']['biaya_pendidikan']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Biaya PAM/Listrik/Telp/Hp</td>
                                            <td><?= number_format(($data['detail']['biaya_pam_listrik_telepon']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Angsuran Bank Lain</td>
                                            <td><?= number_format(($data['detail']['angsuran_bank_lain']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Angsuran Perumahan</td>
                                            <td><?= number_format(($data['detail']['angsuran_perumahan']), 0, ',', '.');   ?></td>
                                        </tr>


                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Angsuran Kendaraan</td>
                                            <td><?= number_format(($data['detail']['angsuran_kendaraan']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Angsuran Barang Elektronik</td>
                                            <td><?= number_format(($data['detail']['angsuran_barang_elektronik']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Angsuran Koperasi</td>
                                            <td><?= number_format(($data['detail']['angsuran_koperasi']), 0, ',', '.');  ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Biaya Lainnya</td>
                                            <td><?= number_format(($data['detail']['biaya_lainnya']), 0, ',', '.');   ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header " style="background-color: #F4F4F4; ">
                                <h3 class="card-title "> <span class="font-weight-bold">Data Aset Yang Dimiliki</span> </h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200px;  background-color: #F4F4F4;">Aset Yang Dimiliki</td>
                                            <td><?= $data['detail']['aset_yang_dimiliki'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat Aset</td>
                                            <td><?= $data['detail']['alamat_aset'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jenis Sertifikat</td>
                                            <td><?= $data['detail']['jenis_sertifikat'] ?></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jumlah Kendaraan</td>
                                            <td><?= $data['detail']['jumlah_kendaraan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Merek Kendaraan</td>
                                            <td><?= $data['detail']['merek_kendaraan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Atas Nama Kendaraan</td>
                                            <td><?= $data['detail']['atas_nama_kendaraan'] ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6">

                        <div class="card">


                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200px;  background-color: #F4F4F4;">Catatan CS</td>
                                            <td><?= $data['detail']['catatan_cs'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Posisi Alur Kredit</td>
                                            <td><?= $data['detail']['lokasi_berkas'] ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="card">

                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Diinput Oleh</td>
                                            <td><?= $data['detail']['user_create'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Input</td>
                                            <td><?= date('d-m-Y H:i:s', strtotime($data['detail']['tgl_create']))   ?></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane " id="b">

                <div class="row">
                    <div class="col-12">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item font-weight-bold">Daftar SLIK Pemohon</li>
                            <li class="list-group-item"></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <table class="table table-bordered">
                            <tr>
                                <td>Nama Pemohon</td>
                                <td><?= $data['detail']['nama_pemohon'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Instansi</td>
                                <td><?= $data['detail']['nama_instansi'] ?></td>
                            </tr>
                            <tr>
                                <td>No. KTP</td>
                                <td><?= $data['detail']['no_ktp_pemohon'] ?></td>
                            </tr>

                        </table>
                    </div>


                    <div class="col-6">
                        <table class="table table-bordered">
                            <tr>
                                <td>Tempat, Tanggal Lahir</td>
                                <td><?= $data['detail']['tempat_lahir_pemohon'] . ', ' . date('d-m-Y', strtotime($data['detail']['tgl_lahir_pemohon']))   ?></td>
                            </tr>
                            <tr>
                                <td>Alamat KTP</td>
                                <td><?= $data['detail']['alamat_ktp_pemohon'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat saat ini</td>
                                <td><?= $data['detail']['alamat_sekarang_pemohon'] ?></td>
                            </tr>

                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover first display nowrap tabel_slik_pemohon">
                                <thead>
                                    <tr>
                                        <td>
                                            Nama Bank
                                        </td>

                                        <td>
                                            Jenis Fasilitas
                                        </td>
                                        <td>
                                            Plafond
                                        </td>
                                        <td>
                                            Bakidebet
                                        </td>
                                        <td>
                                            Kolektibilitas
                                        </td>

                                        <td>
                                            Jangka Waktu
                                        </td>
                                        <td>
                                            Suku Bunga
                                        </td>
                                        <td>
                                            Jenis Jaminan
                                        </td>
                                        <td>
                                            Nilai Jaminan
                                        </td>
                                        <td>
                                            Pemilik Jaminan
                                        </td>
                                        <td>
                                            Alamat Jaminan
                                        </td>
                                        <td>
                                            Pengikatan
                                        </td>
                                        <td>
                                            Keterangan
                                        </td>

                                    </tr>
                                </thead>

                                <tbody>


                                    <?php
                                    foreach ($data['daftar_slik_pemohon'] as $row) :
                                    ?>

                                        <tr>
                                            <td><?= $row['nama_bank'] ?></td>
                                            <td><?= $row['jenis_fasilitas'] ?></td>
                                            <td><?= number_format($row['plafond'], 0, ',', '.')  ?></td>
                                            <td><?= number_format($row['bakidebet'], 0, ',', '.') ?></td>
                                            <td><?= $row['kolektibilitas'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($row['waktu_awal'])) . ' s/d ' . date('d-m-Y', strtotime($row['waktu_akhir'])) ?></td>
                                            <td><?= $row['suku_bunga']  ?></td>
                                            <td><?= $row['jenis_jaminan'] ?></td>
                                            <td><?= number_format($row['nilai_jaminan'], 0, ',', '.') ?></td>
                                            <td><?= $row['pemilik_jaminan'] ?></td>
                                            <td><?= $row['nama_bank'] ?></td>
                                            <td><?= $row['pengikatan'] ?></td>
                                            <td><?= $row['keterangan'] ?></td>
                                        </tr>


                                    <?php endforeach ?>

                                </tbody>



                            </table>
                        </div>
                    </div>


                </div>






                <div class="row">
                    <div class="col-12">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item font-weight-bold">Daftar SLIK Pasangan</li>
                            <li class="list-group-item"></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <table class="table table-bordered">
                            <tr>
                                <td>Nama Pemohon</td>
                                <td><?= $data['detail']['nama_pasangan'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Instansi</td>
                                <td><?= $data['detail']['nama_instansi_pasangan'] ?></td>
                            </tr>
                            <tr>
                                <td>No. KTP</td>
                                <td><?= $data['detail']['no_ktp_pasangan'] ?></td>
                            </tr>

                        </table>
                    </div>


                    <div class="col-6">
                        <table class="table table-bordered">




                            <tr>
                                <td>Tempat, Tanggal Lahir</td>
                                <td><?= $data['detail']['tempat_lahir_pasangan'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat KTP</td>
                                <td><?= $data['detail']['alamat_sekarang_pasangan'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat saat ini</td>
                                <td><?= $data['detail']['alamat_ktp_pasangan'] ?></td>
                            </tr>

                        </table>
                    </div>
                </div>



                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover first display nowrap tabel_slik_pemohon">
                                <thead>
                                    <tr>
                                        <td>
                                            Nama Bank
                                        </td>

                                        <td>
                                            Jenis Fasilitas
                                        </td>
                                        <td>
                                            Plafond
                                        </td>
                                        <td>
                                            Bakidebet
                                        </td>
                                        <td>
                                            Kolektibilitas
                                        </td>

                                        <td>
                                            Jangka Waktu
                                        </td>
                                        <td>
                                            Suku Bunga
                                        </td>
                                        <td>
                                            Jenis Jaminan
                                        </td>
                                        <td>
                                            Nilai Jaminan
                                        </td>
                                        <td>
                                            Pemilik Jaminan
                                        </td>
                                        <td>
                                            Alamat Jaminan
                                        </td>
                                        <td>
                                            Pengikatan
                                        </td>
                                        <td>
                                            Keterangan
                                        </td>

                                    </tr>
                                </thead>

                                <tbody>


                                    <?php
                                    foreach ($data['daftar_slik_pasangan'] as $row) :
                                    ?>

                                        <tr>
                                            <td><?= $row['nama_bank'] ?></td>
                                            <td><?= $row['jenis_fasilitas'] ?></td>
                                            <td><?= number_format($row['plafond'], 0, ',', '.')  ?></td>
                                            <td><?= number_format($row['bakidebet'], 0, ',', '.') ?></td>
                                            <td><?= $row['kolektibilitas'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($row['waktu_awal'])) . ' s/d ' . date('d-m-Y', strtotime($row['waktu_akhir'])) ?></td>
                                            <td><?= $row['suku_bunga']  ?></td>
                                            <td><?= $row['jenis_jaminan'] ?></td>
                                            <td><?= number_format($row['nilai_jaminan'], 0, ',', '.') ?></td>
                                            <td><?= $row['pemilik_jaminan'] ?></td>
                                            <td><?= $row['nama_bank'] ?></td>
                                            <td><?= $row['pengikatan'] ?></td>
                                            <td><?= $row['keterangan'] ?></td>
                                        </tr>


                                    <?php endforeach ?>

                                </tbody>



                            </table>
                        </div>
                    </div>


                </div>
                <div class="row mt-3">

                    <div class="col-md-6">

                        <div class="card">

                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Diinput Oleh</td>
                                            <td><?= $data['data_slik_single']['user_create'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Input</td>
                                            <td><?= date('d-m-Y H:i:s', strtotime($data['data_slik_single']['tgl_create']))   ?></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>







            </div>

            <div class="tab-pane " id="c">
                <ul class="nav nav-tabs mt-2 justify-content-center " id="" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="" data-toggle="tab" href="#aa">Analisa dan Usulan Analis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="" data-toggle="tab" href="#bb">Daftar Jaminan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="" data-toggle="tab" href="#cc">Analisa Kemampuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="" data-toggle="tab" href="#dd">Sandi Sandi</a>
                    </li>
                </ul>



                <div class="tab-content">

                    <div class="tab-pane active" id="aa">


                        <div class="row mt-3">
                            <div class="col-6">

                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Karakter</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['karakter'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pertimbangan Karakter</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['pertimbangan_karakter'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Kemampuan</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['kemampuan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pertimbangan Kemampuan</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['pertimbangan_kemampuan'] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket'>Kekayaan</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['kekayaan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pertimbangan Kekayaan</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['pertimbangan_kekayaan'] ?></td>
                                    </tr>



                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pertimbangan Jaminan</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['pertimbangan_jaminan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Kondsi</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['kondisi'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pertimbangan Karakter</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['pertimbangan_kondisi'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Tujuan Penggunaan Kredit</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['tujuan_penggunaan_kredit'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan Utama</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_utama'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Syarat Lainnya</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['syarat_lainnya'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Dasar Pertimbangan Analis</td>
                                        <td><textarea class='form-control h-25' rows='15'><?= $data['get_tbl_wawancara']['dasar_pertimbangan_analis'] ?></textarea></td>
                                    </tr>




                                </table>

                            </div>

                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Plafond</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['plafond'] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jangka Waktu</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jangka_waktu'] . ' Bulan' ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Suku Bunga </td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['suku_bunga'] . ' ' . '% p.a' ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Sistem Bunga</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['sistem_bunga'] ?></td>
                                    </tr>




                                    <tr>
                                        <td id='td_tabel_modal_ket'>Angsuran Perbulan</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['angsuran_perbulan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Biaya Provisi</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['biaya_provisi_nominal'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Biaya Administrasi</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['biaya_administrasi_nominal'] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket'>Premi Asuransi</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['premi_asuransi'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Tabungan</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['tabungan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Biaya Notaris</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['biaya_notaris'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Biaya Materai</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['biaya_materai'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Biaya APHT</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['biaya_apht'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Asuransi Kerugian</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['asuransi_kerugian'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Sistem Pembayaraan</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['sistem_pembayaran'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pejabat TTD SPPK</td>

                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['pejabat_ttd_sppk'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Informasi Pihak Ketiga</td>
                                        <td><textarea class='form-control h-22' rows='12'><?= $detail['informasi_pihak_ketiga'] ?></textarea></td>
                                    </tr>


                                </table>
                            </div>


                            <div class="col-md-6 mt-3">

                                <div class="card">

                                    <div class="card-body p-0">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 200px; background-color: #F4F4F4; ">Dianalisa Oleh</td>
                                                    <td><?= $data_tbl_wawancara['user_create'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Analisa</td>
                                                    <td><?= date('d-m-Y H:i:s', strtotime($data_tbl_wawancara['tgl_create']))   ?></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>




                        </div>

                    </div>

                    <div class="tab-pane" id="bb">
                        <div class="row mt-3">
                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>




                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 1</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_1'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 2</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_2'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 3</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_3'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 4</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_4'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 5</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_5'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 6</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_6'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 7</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_7'] ?></td>
                                    </tr>




                                </table>
                            </div>

                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 1</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_8'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 2</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_9'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 3</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_10'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 4</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_11'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 5</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_12'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 6</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_13'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan 7</td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['jaminan_14'] ?></td>
                                    </tr>
                                </table>
                            </div>




                            <div class="col-md-6 mt-3">

                                <div class="card">

                                    <div class="card-body p-0">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 200px; background-color: #F4F4F4; ">Dianalisa Oleh</td>
                                                    <td><?= $data_tbl_wawancara['user_create'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Analisa</td>
                                                    <td><?= date('d-m-Y H:i:s', strtotime($data_tbl_wawancara['tgl_create']))   ?></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>

                    <div class="tab-pane" id="cc">
                        <div class="row mt-3">
                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Pemohon Perbulan</td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['penghasilan_pemohon_perbulan'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['get_tbl_wawancara']['penghasilan_pemohon_perbulan_ket'] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pemohon 1 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_1'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['penghasilan_pemohon_ket'][1] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pemohon 2 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_2'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['penghasilan_pemohon_ket'][2] ?></td>
                                    </tr>




                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pemohon 3 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_3'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['penghasilan_pemohon_ket'][3] ?></td>
                                    </tr>



                                </table>
                            </div>


                            <div class='col-6'>
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Pasangan Perbulan</td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['penghasilan_pasangan_perbulan'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['get_tbl_wawancara']['penghasilan_pasangan_perbulan_ket'] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pasangan 1 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_1'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['penghasilan_pasangan_ket'][1] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pasangan 2 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_2'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><? $data['penghasilan_pasangan_ket'][2] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pasangan 3 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_3'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['penghasilan_pasangan_ket'][3] ?></td>
                                    </tr>

                                </table>
                            </div>





                        </div>


                        <div class='row mt-3'>

                            <div class='col-6'>
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Biaya Rumah Tangga Sebulan </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['biaya_hidup_sebulan'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['biaya_hidup_sebulan_ket'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Biaya Pendidikan Sebulan </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['biaya_pendidikan'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['biaya_pendidikan_ket'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Biaya Listrik/Pam/Telepon Sebulan </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['biaya_pam_listrik_telepon'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['biaya_pam_listrik_telepon_ket'] ?></td>
                                    </tr>
                                </table>
                            </div>


                            <div class='col-6'>
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Biaya Transport Sebulan </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['biaya_transport'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['biaya_transport_ket'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Biaya Lain-lain Sebulan </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($data['get_tbl_wawancara']['biaya_lainnya'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $data['biaya_lainnya_ket'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class='row mt-3'>
                            <div class='col-6'>
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>
                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Hasamitra sebelumnya </td>
                                        <td id='td_tabel_modal'><?= number_format(($data['get_tbl_wawancara']['angsuran_kredit_sebelumnya'] * 1000), 0, ',', '.')  ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['angsuran_kredit_sebelumnya_ket'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>


                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 1 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pemohon[1] ?></td>



                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pemohon[1] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 2 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pemohon[2] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pemohon[2] ?></td>
                                    </tr>



                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 3 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pemohon[3] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pemohon[3] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 4 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pemohon[4] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pemohon[4] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 5 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pemohon[5] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pemohon[5] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 6 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pemohon[6] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pemohon[6] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 7 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pemohon[7] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pemohon[7] ?></td>
                                    </tr>
                                </table>
                            </div>





                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>


                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 1 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pasangan[1] ?></td>


                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pasangan[1] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 2 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pasangan[2] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pasangan[2] ?></td>
                                    </tr>



                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 3 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pasangan[3] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pasangan[3] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 4 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pasangan[4] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pasangan[4] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 5 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pasangan[5] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pasangan[5] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 6 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pasangan[6] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pasangan[6] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 7 </td>
                                        <td id='td_tabel_modal'><?= $angsuran_pasangan[7] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $ket_angsuran_pasangan[7] ?></td>
                                    </tr>
                                </table>
                            </div>


                            <div class='col-6'>
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>
                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Saldo Tabungan Terakhir </td>
                                        <td id='td_tabel_modal'><?= number_format(($data['get_tbl_wawancara']['saldo_tabungan_terakhir'] * 1000), 0, ',', '.')  ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['saldo_tabungan_terakhir_ket'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>




                        <div class="row mt-3">
                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>
                                            <h4><b>Kemampuan Membayar</b></h4>
                                        </td>
                                        <td id='td_tabel_modal'>
                                            <h4><b><?= isset($data['get_tbl_wawancara']['kemampuan_membayar_angsuran']) ? (number_format(($data['get_tbl_wawancara']['kemampuan_membayar_angsuran'] * 1000), 0, ',', '.'))  : '-' ?></b></h4>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>
                                            <h4><b>Persentase Angsuran</b></h4>
                                        </td>
                                        <td id='td_tabel_modal'>
                                            <h4><b><?= isset($data['get_tbl_wawancara']['persentase_angsuran']) ? $data['get_tbl_wawancara']['persentase_angsuran'] . ' % ' . '&ensp; &ensp;' . $data['get_tbl_wawancara']['keterangan_persentase_angsuran'] : '-' ?></b></h4>
                                        </td>

                                    </tr>


                                </table>
                            </div>
                        </div>






                        <div class="row mt-3">

                            <div class="col-md-6 mt-3">

                                <div class="card">

                                    <div class="card-body p-0">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 200px; background-color: #F4F4F4; ">Dianalisa Oleh</td>
                                                    <td><?= $data_tbl_wawancara['user_create'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Analisa</td>
                                                    <td><?= date('d-m-Y H:i:s', strtotime($data_tbl_wawancara['tgl_create']))   ?></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="tab-pane" id="dd">
                        <div class="row">
                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Golongan Debitur </td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['kode_golongan_debitur'] . ' - ' . $kode_golongan_debitur['golongan_debitur'] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jenis Penggunaan </td>
                                        <?php if (isset($kode_jenis_penggunaan['jenis_penggunaan'])) { ?>
                                            <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['kode_jenis_penggunaan'] . ' - ' . $kode_jenis_penggunaan['jenis_penggunaan'] ?></td>
                                        <?php } else { ?>
                                            <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['kode_jenis_penggunaan'] . ' - '  ?></td>
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Sektor Ekonomi </td>
                                        <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['kode_sektor_ekonomi'] . ' - ' . $kode_sektor_ekonomi['sektor_ekonomi'] ?></td>

                                    </tr>

                                    <?php

                                    if (isset($kode_hubungan_debitur_dengan_bank['hubungan_debitur_dengan_bank'])) {


                                    ?>

                                        <tr>
                                            <td id='td_tabel_modal_ket'>Hubungan Debitur Dengan Bank </td>
                                            <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['kode_hubungan_debitur_dengan_bank'] . ' - ' . $kode_hubungan_debitur_dengan_bank['hubungan_debitur_dengan_bank'] ?></td>
                                        </tr>


                                    <?php  } else { ?>

                                        <tr>
                                            <td id='td_tabel_modal_ket'>Hubungan Debitur Dengan Bank </td>
                                            <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['kode_hubungan_debitur_dengan_bank'] . ' - ' ?></td>
                                        </tr>

                                    <?php } ?>

                                </table>
                            </div>









                        </div>


                        <div class="row mt-3">

                            <div class="col-md-6 mt-3">

                                <div class="card">

                                    <div class="card-body p-0">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 200px; background-color: #F4F4F4; ">Dianalisa Oleh</td>
                                                    <td><?= $data_tbl_wawancara['user_create'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Analisa</td>
                                                    <td><?= date('d-m-Y H:i:s', strtotime($data_tbl_wawancara['tgl_create']))   ?></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane active" id="e">


                <form id='form_proses_komite' action="<?= BASEURL; ?>/komite/proses_komite" method="POST">
                    <div class="row">
                        <div class="col-6">
                            <table class="table table-bordered  table-hover">
                                <thead>
                                    <tr class='text-center font-weight-bold'>
                                        <td scope="col" colspan="2" id=''>Permohonan</td>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='noPadding'>
                                        <td id='td_tabel_modal_ket_2'>Plafond</td>
                                        <td id='td_tabel_modal_2'><?= $detail['plafond']    ?> </td>

                                    </tr>

                                    <tr class='noPadding'>
                                        <td id='td_tabel_modal_ket_2'>Jangka Waktu (Bulan)</td>
                                        <td id='td_tabel_modal_2'><?= $detail['jangka_waktu']  ?></td>

                                    </tr>

                                    <tr class='noPadding'>
                                        <td id='td_tabel_modal_ket_2'>Usulan Analis</td>

                                        <td id='td_tabel_modal_2' class="font-weight-bold text-danger" style="font-size: 25px;"> <?= $data_tbl_wawancara['status'] ?> </td>

                                    </tr>




                                </tbody>
                            </table>

                        </div>
                        <div class="col-6">

                            <script>
                                var p1 = "success";
                            </script>




                            <table class="table table-bordered  table-striped table-hover">
                                <thead>
                                    <tr class='text-center font-weight-bold'>
                                        <td scope="col" id='td_tabel_modal_ket_head'>Catatan Komite</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id='td_tabel_modal_2'><textarea id='dasar_pertimbangan_analis' name="dasar_pertimbangan_analis" class="form-control h-50" rows="15"></textarea></td>
                                    </tr>
                                </tbody>
                            </table>



                            <!-- bagian ini buat variabel jika DIAJUKAN TOLAK = TOLAK selain itu BATAL -->

                            <?php
                            $status = "";

                            if ($data_tbl_wawancara['status'] == "DIAJUKAN TOLAK") {
                                $status = "TOLAK";
                            } else {
                                $status = "BATAL";
                            }



                            ?>


                            <div class="row d-flex justify-content-center">
                                <div class="col-5 text-uppercase">
                                    <a id='btn_modal_setuju' href="#modal_setuju" class='btn btn-lg btn-primary p-3 btn-block' data-no_permohonan_kredit="<?= $data_tbl_wawancara['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $data_tbl_wawancara['nama_pemohon'] ?>" data-nama_instansi="<?= $data_tbl_wawancara['nama_instansi'] ?>" data-plafond="<?= $data_tbl_wawancara['plafond'] ?>" data-jangka_waktu="<?= $data_tbl_wawancara['jangka_waktu'] ?>" data-backdrop="static" data-keyboard="false">Setuju <?= $status ?></a>
                                </div>
                                <div class="col-5 text-uppercase">

                                    <a id='btn_modal_tidak_setuju' href="#modal_tidak_setuju" class='btn btn-lg btn-danger p-3 btn-block' data-no_permohonan_kredit="<?= $data_tbl_wawancara['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $data_tbl_wawancara['nama_pemohon'] ?>" data-nama_instansi="<?= $data_tbl_wawancara['nama_instansi'] ?>" data-plafond="<?= $data_tbl_wawancara['plafond'] ?>" data-jangka_waktu="<?= $data_tbl_wawancara['jangka_waktu'] ?>" data-backdrop="static" data-keyboard="false">Tidak Setuju <?= $status ?></a>

                                    <!-- <a id='btn_modal_reject' href="#modal_reject" class='btn btn-lg btn-danger p-3 btn-block' data-no_permohonan_kredit="<?= $data_tbl_wawancara['no_permohonan_kredit'] ?>" data-no_permohonan_kredit2="<?= $data_tbl_wawancara['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $data_tbl_wawancara['nama_pemohon'] ?>" data-nama_instansi="<?= $data_tbl_wawancara['nama_instansi'] ?>" data-plafond-usulan="<?= $data_tbl_wawancara['plafond'] ?>" data-suku_bunga='<?= $data_tbl_wawancara['suku_bunga'] ?>' data-penambahan='<?= $data_tbl_wawancara['penambahan'] ?>' data-provisi_kredit='<?= $data_tbl_wawancara['biaya_provisi_nominal'] ?>' data-administrasi_kredit='<?= $data_tbl_wawancara['biaya_administrasi_nominal'] ?>' data-angsuran_perbulan='<?= $data_tbl_wawancara['angsuran_perbulan'] ?>' data-premi_asuransi='<?= $data_tbl_wawancara['premi_asuransi'] ?>' data-tabungan='<?= $data_tbl_wawancara['tabungan'] ?>' data-biaya_notaris='<?= $data_tbl_wawancara['biaya_notaris'] ?>' data-biaya_apht=<?= $data_tbl_wawancara['biaya_apht'] ?> data-asuransi_kerugian=<?= $data_tbl_wawancara['asuransi_kerugian'] ?> data-backdrop="static" data-keyboard="false">Tidak Setuju <?= $status ?></a> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <div class="tab-pane " id="f">



                <div class="row">
                    <div class="col-12">

                        <br>
                        <br>
                        <br>
                        <br>





                        <div class="text-center" style="text-align: center;">
                            <!-- $btn_cetak_analisa = "<button class='btn btn-sm modal_cetak_analisa' data-id='" . $i[' no_permohonan_kredit'] . "' data-status='" . $i['status'] . "' style='background-color:" . w_ungu . "; color: white'>" . "Cetak Analisa</button>" ;  -->
                            <!-- <button class="btn btn-sm modal_cetak_analisa" style="background-color: <?= w_ungu ?>; color:white; font-size:30px; border-radius: 8px;" data-id='<?= $data_tbl_wawancara['no_permohonan_kredit'] ?>' data-status='<?= $data_tbl_wawancara['status'] ?>'>Cetak Analisa</button> -->

                            <?php $text = array('Analisa & Cashflow') ?>
                            <div class="row">
                                <?php
                                for ($a = 0; $a < count($text); $a++) {
                                ?>
                                    <div class="col">
                                        <div class="card card_btn card_1<?= $a ?>">
                                            <div class="card-body text text-center">
                                                <?= $text[$a] ?>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>

                <br>
                <br>
                <br>
            </div>


            <div class="tab-pane " id="g">



                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="">

                                <div class="table-responsive">
                                    <table class="example1 table table-striped table-hover first display nowrap">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    No Permohonan
                                                </th>

                                                <th>
                                                    Nama Pemohon
                                                </th>
                                                <th>
                                                    Instansi
                                                </th>

                                                <th>
                                                    No. KTP
                                                </th>
                                                <th>
                                                    Tanggal Masuk
                                                </th>
                                                <th>
                                                    Kode Cabang
                                                </th>
                                                <th>
                                                    Status
                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody class="">

                                            <!-- <?php

                                                    echo $data['modal_riwayat'][0]['nama_pemohon'];

                                                    ?> -->


                                            <?php $a = 1;

                                            foreach ($data['modal_riwayat'] as $row) : ?>
                                                <tr>

                                                    <td><?= $a++ ?></td>
                                                    <td><?= $row['no_permohonan_kredit'] ?></td>
                                                    <td><?= $row['nama_pemohon'] ?></td>
                                                    <td><?= $row['nama_instansi'] ?></td>
                                                    <td><?= $row['no_ktp_pemohon'] ?></td>
                                                    <td><?= isset($row['tanggal_permohonan']) ? date('d-m-Y', strtotime($row['tanggal_permohonan'])) : ''   ?></td>

                                                    <td><?= $row['kode_cabang'] ?></td>
                                                    <td>
                                                        <?php

                                                        if ($row['tanggal_tolak'] == null and $row['tanggal_pencairan'] == null and $row['tanggal_batal'] == null) {
                                                            echo "PENDING";
                                                        } else {
                                                            if ($row['tanggal_tolak'] != null) {
                                                                echo "TOLAK";
                                                            } else if ($row['tanggal_pencairan'] != null) {
                                                                echo "CAIR";
                                                            } else if ($row['tanggal_batal'] != null) {
                                                                echo "BATAL";
                                                            }
                                                        }



                                                        ?>

                                                    </td>



                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="tab-pane" id="d">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-hover first display nowrap datatab tabel_reload">
                                <thead>
                                    <tr>
                                        <th>
                                            No.
                                        </th>

                                        <th>
                                            No. Reg
                                        </th>
                                        <th>
                                            Nama File
                                        </th>
                                        <th>
                                            Jenis File
                                        </th>
                                        <th>
                                            Aksi
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($tbl_wawancara_berkas as $index => $row) : ?>

                                        <tr>
                                            <td><?= ($index + 1) ?></td>
                                            <td><?= $row['no_permohonan_kredit'] ?></td>
                                            <td><?= $row['nama_file'] ?></td>
                                            <td><?= $row['jenis_file'] ?></td>
                                            <td>
                                                <a href="<?= BASEURL ?>/upload/file_upload_wawancara/<?= $row['nama_file'] ?>" class="btn btn-success btn-sm" download>Lihat</a>

                                            </td>
                                        </tr>



                                    <?php endforeach; ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $("#example2").DataTable({})
    })
</script>

<!-- tombol cetak analisa dan cashflow -->
<script>
    var status = "<?= $data_tbl_wawancara['status'] ?>";
    var id = "<?= $data_tbl_wawancara['no_permohonan_kredit'] ?>";
    $('.card_10').click(function() {
        window.location.href = "<?= BASEURL ?>/cetak/analisa_keputusan/" + id;
    })
</script>





<!-- bagian ini handel menampilkan data dari modal proses komite ke modal pin keamanan ketika tombol approve atau set di tekan -->
<script>
    $('#btn_modal_setuju').on('click', function(e) {
        if ($('#dasar_pertimbangan_analis').val() != '') {
            var nilai = $(this)
            var no_permohoan_kredit = nilai.data('no_permohonan_kredit')
            var nama_pemohon = nilai.data('nama_pemohon')
            var nama_instansi = nilai.data('nama_instansi')
            var plafond = nilai.data('plafond')
            var jangka_waktu = nilai.data('jangka_waktu')

            var modal = $('#modal_setuju');

            var status_modal_header


            if ("<?= $data_tbl_wawancara['status'] ?>" == "DIAJUKAN TOLAK") {
                status_modal_header = "TOLAK"
            } else {
                status_modal_header = "BATAL"
            }

            modal.find('#ket_modal_header').html(status_modal_header)
            modal.find('#ket_modal_footer').html(status_modal_header)
            modal.find('#no_permohonan_kredit4').html(no_permohoan_kredit)

            modal.find('#nama_pemohon').val(nama_pemohon)
            modal.find('#nama_instansi').html(nama_instansi)
            modal.find('#plafond').html(plafond)
            modal.find('#jangka_waktu').html(jangka_waktu)
            modal.find('textarea#dasar_pertimbangan_analis').html($('textarea#dasar_pertimbangan_analis').val())


            console.log(no_permohoan_kredit + "1|" + plafond)
            $('#modal_setuju').modal('show');
        } else {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Catatan Komite tidak boleh kosong',
                showConfirmButton: false,
                timer: 3000
            })
        }

    })
</script>


<script>
    $('#btn_modal_tidak_setuju').on('click', function(e) {


        if ($('#dasar_pertimbangan_analis').val() != '') {
            var nilai = $(this)
            var no_permohoan_kredit = nilai.data('no_permohonan_kredit')
            var nama_pemohon = nilai.data('nama_pemohon')
            var nama_instansi = nilai.data('nama_instansi')
            var plafond = nilai.data('plafond')
            var jangka_waktu = nilai.data('jangka_waktu')

            var modal = $('#modal_tidak_setuju');

            var status_modal_header


            if ("<?= $data_tbl_wawancara['status'] ?>" == "DIAJUKAN TOLAK") {
                status_modal_header = "TOLAK"
            } else {
                status_modal_header = "BATAL"
            }

            modal.find('#ket_modal_header').html(status_modal_header)
            modal.find('#ket_modal_footer_2').html(status_modal_header)
            modal.find('#no_permohonan_kredit5').html(no_permohoan_kredit)

            modal.find('#nama_pemohon').val(nama_pemohon)
            modal.find('#nama_instansi').html(nama_instansi)
            modal.find('#plafond').html(plafond)
            modal.find('#jangka_waktu').html(jangka_waktu)
            modal.find('textarea#dasar_pertimbangan_analis').html($('textarea#dasar_pertimbangan_analis').val())


            console.log(no_permohoan_kredit + "1|" + plafond)
            $('#modal_tidak_setuju').modal('show');
        } else {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Catatan Komite tidak boleh kosong',
                showConfirmButton: false,
                timer: 3000
            })
        }

    })
</script>