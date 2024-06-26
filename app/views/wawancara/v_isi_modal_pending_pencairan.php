<?php

$detail = $data['get_tbl_wawancara'];
$data_tbl_komite           = $data['rekomendasi_komite'];
$data_tbl_keputusan_komite           = $data['keputusan_komite'];
$data_tbl_wawancara     = $data['get_tbl_wawancara'];
$tbl_wawancara_berkas    = $data['tbl_wawancara_berkas'];


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


<main class="content">
    <div class="container-fluid p-0">

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
                        <a class="nav-link" id="" data-toggle="tab" href="#f">Detail Permohonan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="" data-toggle="tab" href="#g">Detail SLIK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="" data-toggle="tab" href="#h">Detail Analisa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="" data-toggle="tab" href="#hh">File Berkas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="" data-toggle="tab" href="#i">Rekomendasi Komite</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " id="" data-toggle="tab" href="#j">Keputusan Komite</a>
                    </li>

                </ul>



                <div class="tab-content">
                    <div class="tab-pane" id="f">

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
                                                    <td style="width: 200px; background-color: #F4F4F4; ">Nama Marketing</td>
                                                    <td><?= $data['detail']['id_marketing'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 200px; background-color: #F4F4F4; ">Nama Analis</td>
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
                    <div class="tab-pane " id="g">

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
                                        <td><?= date('d-m-Y', strtotime($data['detail']['tgl_lahir_pemohon'])) ?></td>
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
                                        <td><?= $data['detail']['alamat_ktp_pasangan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat saat ini</td>
                                        <td><?= $data['detail']['alamat_sekarang_pasangan'] ?></td>
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
                                                    <td><?= isset($data['data_slik_single']['user_create']) ? $data['data_slik_single']['user_create'] : '-' ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Input</td>
                                                    <td><?= isset($data['data_slik_single']['tgl_create']) ? date('d-m-Y H:i:s', strtotime($data['data_slik_single']['tgl_create']))  : '-'  ?></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>







                    </div>

                    <div class="tab-pane " id="h">
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
                                                <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['angsuran_kredit_sebelumnya'] ?></td>
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
                                </div>


                                <div class="row mt-3">
                                    <div class="col-6">
                                        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                            <tr>
                                                <td id='td_tabel_modal_ket'>Kemampuan Membayar </td>
                                                <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['kemampuan_membayar_angsuran'] ?></td>

                                            </tr>
                                            <tr>
                                                <td id='td_tabel_modal_ket'>Persentase Angsuran </td>
                                                <td id='td_tabel_modal'><?= $data['get_tbl_wawancara']['persentase_angsuran'] . ' % ' . $data['get_tbl_wawancara']['keterangan_persentase_angsuran'] ?></td>

                                            </tr>


                                        </table>
                                    </div>
                                </div>


                                <div class="row">

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
                                                <td id='td_tabel_modal'><?= isset($data['get_tbl_wawancara']['kode_golongan_debitur']) == '1' ? $data['get_tbl_wawancara']['kode_golongan_debitur'] . ' - ' . $kode_golongan_debitur['golongan_debitur'] : '' ?></td>

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
                                                <td id='td_tabel_modal'><?= isset($data['get_tbl_wawancara']['kode_sektor_ekonomi'])  == '1' ?  $data['get_tbl_wawancara']['kode_sektor_ekonomi'] . ' - ' . $kode_sektor_ekonomi['sektor_ekonomi'] : '' ?></td>

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

                                <div class="row">
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
                    <div class="tab-pane active" id="i">
                        <div class="row mt-3">
                            <?php

                            for ($a = 1; $a <= 3; $a++) {
                                if (isset($data_tbl_komite[$a - 1])) {
                            ?>
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <b>Komite <?= $a ?></b>
                                            </div>
                                            <div class="card-body">

                                                <table cellpadding=5 cellspacing=15 id='tabel_modal'>

                                                    <tr>
                                                        <td id='td_tabel_modal_ket'>Plafond 1 </td>

                                                        <?php
                                                        $plafond = $data['get_tbl_wawancara']['plafond'];
                                                        $data['get_tbl_wawancara']['plafond'] = str_replace('.', '', $plafond);
                                                        ?>
                                                        <!-- cek apakah plafond belum berubah anatar inpuran analis dengan persetujuan komite, jika berubah maka beri warna merah -->
                                                        <?php
                                                        if ($data['get_tbl_wawancara']['plafond'] == $data_tbl_komite[$a - 1]['plafond']) {
                                                        ?>
                                                            <td id='td_tabel_modal'><?= number_format(($data_tbl_komite[$a - 1]['plafond']), 0, ",", ".")   ?></td>
                                                        <?php  } else { ?>

                                                            <td id='td_tabel_modal' style="color:red; "><?= number_format(($data_tbl_komite[$a - 1]['plafond']), 0, ",", ".")   ?></td>
                                                        <?php } ?>
                                                    </tr>
                                                    <tr>

                                                        <td id='td_tabel_modal_ket'>Jangka Waktu </td>
                                                        <?php
                                                        if ($data['get_tbl_wawancara']['jangka_waktu'] == $data_tbl_komite[$a - 1]['jangka_waktu']) {
                                                        ?>
                                                            <td id='td_tabel_modal'><?= $data_tbl_komite[$a - 1]['jangka_waktu']  ?></td>

                                                        <?php  } else { ?>

                                                            <td id='td_tabel_modal' style="color:red; "><?= $data_tbl_komite[$a - 1]['jangka_waktu']  ?></td>

                                                        <?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <td id='td_tabel_modal_ket'>Catatan Komite</td>

                                                        <td id='td_tabel_modal'><textarea disabled style=" border: none; outline: none; background-color: white;" class='form-control h-25' rows='10'><?= $data_tbl_komite[$a - 1]['catatan_komite'] ?></textarea></td>
                                                    </tr>

                                                    <tr>
                                                        <td id='td_tabel_modal_ket'>Syarat Pencairan</td>

                                                        <td id='td_tabel_modal'><textarea disabled style=" border: none; outline: none; background-color: white;" class='form-control h-25' rows='10'><?= $data_tbl_komite[$a - 1]['syarat_lainnya'] ?></textarea></td>
                                                    </tr>

                                                    <?php

                                                    if ($data_tbl_komite[$a - 1]['status'] == "DISETUJUI") {

                                                    ?>
                                                        <tr>
                                                            <td id='td_tabel_modal_ket'>Status </td>
                                                            <td id='td_tabel_modal' style="background-color: blue; color:white; "> <b> <?= $data_tbl_komite[$a - 1]['status'] == "DISETUJUI" ? 'SETUJU' : ''  ?> </b></td>
                                                        </tr>


                                                    <?php } else if ($data_tbl_komite[$a - 1]['status'] == "DITOLAK") {

                                                    ?>

                                                        <tr>
                                                            <td id='td_tabel_modal_ket'>Status </td>
                                                            <td id='td_tabel_modal' style="background-color: red; color:white; "> <b> <?= $data_tbl_komite[$a - 1]['status']  == "DITOLAK" ? 'TOLAK' : '' ?> </b></td>
                                                        </tr>

                                                    <?php } else { ?>


                                                        <tr>
                                                            <td id='td_tabel_modal_ket'>Status </td>
                                                            <td id='td_tabel_modal' style="background-color: white; color:white; "> <b> <?= $data_tbl_komite[$a - 1]['status'] == 'DISETUJUI' ? 'SETUJU' : ''  ?> </b></td>
                                                        </tr>

                                                    <?php


                                                    }

                                                    ?>

                                                </table>



                                                </style>


                                            </div>


                                            <div class="card-footer">
                                                <table id='tabel_modal'>

                                                    <tr>
                                                        <td>Nama Komite </td>
                                                        <?php
                                                        $username = $this->model('m_komite')->nama_lengkap_username($data_tbl_komite[$a - 1]['user_create']);
                                                        ?>
                                                        <td><?= $username['nama_lengkap'] ?></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Komite</td>
                                                        <td><?= date('d-m-Y H:i:s', strtotime($data_tbl_komite[$a - 1]['tgl_create'])) ?></td>
                                                    </tr>


                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>

                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <b>Komite <?= $a ?></b>
                                            </div>
                                            <div class="card-body">

                                                <table cellpadding=5 cellspacing=15 id='tabel_modal'>

                                                    <tr>
                                                        <td id='td_tabel_modal_ket'>Plafond </td>
                                                        <td id='td_tabel_modal'><?= ""  ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td id='td_tabel_modal_ket'>Jangka Waktu </td>
                                                        <td id='td_tabel_modal'><?= ""  ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td id='td_tabel_modal_ket'>Catatan Komite</td>
                                                        <td id='td_tabel_modal'><textarea disabled style=" border: none; outline: none; background-color: white;" class='form-control' rows='10'><?= "" ?></textarea></td>
                                                    </tr>

                                                    <tr>
                                                        <td id='td_tabel_modal_ket'>Syarat Pencairan</td>

                                                        <td id='td_tabel_modal'><textarea disabled style=" border: none; outline: none; background-color: white;" class='form-control h-25' rows='10'></textarea></td>
                                                    </tr>


                                                    <?php

                                                    if (isset($data_tbl_komite[$a - 1]['status'])) {

                                                        if ($data_tbl_komite[$a - 1]['status'] == "DISETUJUI") {

                                                    ?>
                                                            <tr>
                                                                <td id='td_tabel_modal_ket'>Status </td>
                                                                <td id='td_tabel_modal' style="background-color: blue; color:white; "> <b> <?= isset($data_tbl_komite[$a - 1]['status']) ? $data_tbl_komite[$a - 1]['status']  : "" ?> </b></td>
                                                            </tr>


                                                        <?php } else if ($data_tbl_komite[$a - 1]['status'] == "DITOLAK") {

                                                        ?>

                                                            <tr>
                                                                <td id='td_tabel_modal_ket'>Status </td>
                                                                <td id='td_tabel_modal' style="background-color: red; color:white; "> <b> <?= isset($data_tbl_komite[$a - 1]['status']) ? $data_tbl_komite[$a - 1]['status']  : "" ?> </b></td>
                                                            </tr>

                                                        <?php } else { ?>


                                                            <tr>
                                                                <td id='td_tabel_modal_ket'>Status </td>
                                                                <td id='td_tabel_modal' style="background-color: white; color:white; "> <b> <?= isset($data_tbl_komite[$a - 1]['status']) ? $data_tbl_komite[$a - 1]['status']  : "" ?> </b></td>
                                                            </tr>

                                                        <?php


                                                        }
                                                    } else {


                                                        ?>


                                                        <tr>
                                                            <td id='td_tabel_modal_ket'>Status </td>
                                                            <td id='td_tabel_modal' style="background-color: white; color:white; "> <b> <?= isset($data_tbl_komite[$a - 1]['status']) ? $data_tbl_komite[$a - 1]['status']  : "" ?> </b></td>
                                                        </tr>



                                                    <?php } ?>
                                                </table>


                                            </div>


                                            <div class="card-footer">
                                                <table id='tabel_modal'>

                                                    <tr>
                                                        <td>Nama Komite </td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Komite </td>
                                                        <td></td>

                                                    </tr>


                                                </table>
                                            </div>


                                        </div>
                                    </div>






                            <?php }
                            } ?>

                        </div>
                    </div>


                    <div class="tab-pane" id="j">



                        <div class="row mt-2">
                            <div class="col">

                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Keputusan Komite</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Plafond</td>
                                            <td><?= number_format($data_tbl_keputusan_komite['plafond'], 0, ',', '.')  ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jangka Waktu</td>
                                            <td><?= $data_tbl_keputusan_komite['jangka_waktu'] ?></td>
                                        </tr>
                                        <tr style="height: 100px;  text-align: center;">
                                            <th class="keputusan_komite" colspan="2" style="vertical-align: middle; font-size: 30px; font-weight: bold;"></th>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                            <div class="col">

                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Syarat Pencairan di SPPK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><textarea id='syarat_lainnya' name="syarat_lainnya" class="form-control h-25" rows="13" style="margin: 0; padding: 0;"><?= $data['syarat_lainnya']['semua_syarat_lainnya'] ?></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>





                        <div class="row mt-5">
                            <div class="col">

                                <div class="d-flex flex-row-reverse">
                                    <button class="btn btn-danger mr-3 btn_ajukan_kembali" style="font-size: 20px;" data-id="<?= $data['detail']['no_permohonan_kredit'] ?>"> <span> <i class="fas fa-sync-alt"></i> </span> Mengusulkan Analisa Kembali</button>
                                </div>

                            </div>
                            <div class="col">
                                <div class="d-flex flex-row">
                                    <button class="btn btn-primary btn_lanjutkan" style="font-size: 20px;" data-id="<?= $data['detail']['no_permohonan_kredit'] ?>"> <span><i class="fas fa-check"></i></span> Melanjutkan Pencairan Kredit</button>
                                </div>


                            </div>
                        </div>









                    </div>



                    <div class="tab-pane" id="hh">
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
    </div>
</main>


<script>
    $(document).ready(function() {

        var data_tbl_keputusan_komite = "<?= $data_tbl_keputusan_komite['plafond'] ?>"
        var cek_tgl_tolak = "<?= $data['cek_tgl_tolak'] ?>"
        var ket_keputusan_komite = '';


        if (data_tbl_keputusan_komite !== null) {
            ket_keputusan_komite = "DISETUJUI";
        } else if (cek_tgl_tolak >= 1) {
            ket_keputusan_komite = "DITOLAK";
        } else {
            ket_keputusan_komite = "tess";
        }

        $('.keputusan_komite').text(ket_keputusan_komite);

        if (ket_keputusan_komite == "DISETUJUI") {
            $('.keputusan_komite').css('background-color', '#008DDA');
            $('.keputusan_komite').css('color', '#FFFFFF');
        } else if (ket_keputusan_komite == "DITOLAK") {
            $('.keputusan_komite').css('background-color', '#E72929');
            $('.keputusan_komite').css('color', '#FFFFFF');
        }

    });
</script>




<!-- fungsi untuk lanjutkan -->
<script>
    var btn_lanjutkan = $('.btn_lanjutkan');

    btn_lanjutkan.click(function() {

        var no_permohonan_kredit = $(this).data('id');
        var syarat_lainnya = $('#syarat_lainnya').val()




        Swal.fire({
            title: "Yakin ingin melanjutkan pencairan kredit?",
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Batal",
            confirmButtonColor: "#3EC59D",
            cancelButtonColor: "#BB2D3B",

        }).then((res) => {
            if (res.isConfirmed) {



                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/wawancara/btn_lanjutkan' ?>',
                    // simpan data jumlah komite dengan cara beri simbol dan & pada nama 
                    data: {
                        no_permohonan_kredit: no_permohonan_kredit,
                        syarat_lainnya: syarat_lainnya
                    },
                    success: function(res) {
                        console.log(res);

                        res = res.trim();

                        if (res == "sukses") {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Berhasil lanjutkan',
                                showConfirmButton: false,
                                timer: 1000
                            }).then((ok) => {
                                location.reload();
                            })
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Eror ' + res,
                                showConfirmButton: false,
                                timer: 1000
                            }).then((ok) => {
                                location.reload();
                            })
                        }


                    },
                    error: function(res) {
                        console.log("erorr : " + res);
                    }
                })

            }
        })

    })
</script>






<!-- ajukan kembali -->
<script>
    $('.btn_ajukan_kembali').on('click', function() {
        var no_permohonan_kredit = $(this).data('id');


        $.ajax({
            method: "POST",
            url: '<?= BASEURL . '/wawancara/btn_ajukan_kembali' ?>',
            data: {
                'no_permohonan_kredit': no_permohonan_kredit
            },
            success: function(dataRes) {
                dataRes = dataRes.trim()
                if (dataRes == "sukses") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Berhasil ajukan kembali',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        location.reload();
                    })
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Gagal ' + dataRes,
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        location.reload();
                    })
                }
            },
            error: function(data) {
                console.log('errror ' + data)
            }
        });
    })
</script>









<!-- bagian fungsi mengubah angka -->
<script>
    function angka(angka, prefix) {
        if (parseFloat(angka) >= 0) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                plafond = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            if (ribuan) {
                separator = sisa ? '.' : '';
                plafond += separator + ribuan.join('.');
            }
            plafond = split[1] != undefined ? plafond + ',' + split[1] : plafond;
            return prefix == undefined ? plafond : (plafond ? plafond : '');
        } else {
            angka = angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            return prefix == undefined ? angka : (angka ? angka : '');
        }

    }
</script>


<!-- fungsi ini untuk mengatur inputan agar hanya angka saja yang di input -->
<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>