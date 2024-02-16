<?php
// ingat pada file ini data model harus di deklarasi bagian sini kalau tidak tidak bisa

$detail = $data['get_tbl_wawancara'];
$daftar_slik_pemohon =  $data['daftar_slik_pemohon'];
$daftar_slik_pasangan =  $data['daftar_slik_pasangan'];

$data_slik_single = $data['data_slik_single'];

$get_tbl_wawancara_berkas_id = $data['get_tbl_wawancara_berkas_id'];




// penghasilan pemohon
for ($a = 1; $a <= 3; $a++) {

    $penghasilan_pemohon_ket[$a] = $detail['penghasilan_pemohon_tambahan_' . $a . '_ket'] != '' ? $detail['penghasilan_pemohon_tambahan_' . $a . '_ket'] : '-';
    $penghasilan_pasangan_ket[$a] = $detail['penghasilan_pasangan_tambahan_' . $a . '_ket'] != '' ? $detail['penghasilan_pasangan_tambahan_' . $a . '_ket'] : '-';
}

$biaya_hidup_sebulan_ket = $detail['biaya_hidup_sebulan_ket'] != '' ? $detail['biaya_hidup_sebulan_ket'] : '-';
$biaya_pendidikan_ket    = $detail['biaya_pendidikan_ket'] != '' ? $detail['biaya_pendidikan_ket'] : '-';

$biaya_pam_listrik_telepon_ket = $detail['biaya_pam_listrik_telepon_ket'] != '' ? $detail['biaya_pam_listrik_telepon_ket'] : '-';
$biaya_transport_ket = $detail['biaya_transport_ket'] != '' ? $detail['biaya_transport_ket'] : '-';

$biaya_lainnya_ket = $detail['biaya_lainnya_ket'] != '' ? $detail['biaya_lainnya_ket'] : '-';

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




$data  = $data['get_tbl_permohon_kredit'];




?>


<!-- css -->
<style>
    #tabel_modal {

        border-collapse: collapse;
        width: 100%;
    }

    #td_tabel_modal_ket {
        border: 1px solid #dddddd;
        background-color: #F4F4F4;
        vertical-align: baseline;
        width: 40%;

    }

    #td_tabel_modal {
        border: 1px solid #dddddd;
        vertical-align: baseline;
    }
</style>



<main class="content">
    <div class="container">

        <div class="text-center">
            <h4><b>Cek hasil analisa anda sebelum mengajukan ke komite</b></h4>

        </div>


        <!-- beri keterangan di bagian tombol ajukan dan cek di field tolak_batal-->
        <?php
        $ket_tombol_ajukan = "";
        if ($detail['tolak_batal'] == 'TOLAK') {
            $ket_tombol_ajukan = "Ajukan Tolak";
        } else if ($detail['tolak_batal'] == 'BATAL') {
            $ket_tombol_ajukan = "Ajukan Batal";
        } else {
            $ket_tombol_ajukan = "Ajukan Komite";
        }

        ?>



        <?php
        if ($detail['tipe_komite'] == 'CABANG') {
            if ($detail['status'] == 'BELUM DIAJUKAN' || $detail['status'] == "TIDAK SETUJU BATAL" || $detail['status'] == "TIDAK SETUJU TOLAK") {
        ?>
                <!-- tombol ajukan komite -->
                <div class="d-flex">
                    <div class="ml-auto p-1">
                        <div class="d-flex">
                            <div class=''>
                                <button class="btn btn_ajukan_komite" style='background-color: <?= w_orange ?>; color:white;' data-no_permohonan_kredit='<?= $data['no_permohonan_kredit'] ?>' data-tipe_komite='<?= $detail['tipe_komite'] ?>'><?= $ket_tombol_ajukan ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($detail['status'] == 'DIAJUKAN' || $detail['status'] == 'KOMITE') {
            ?>
                <!-- tombol ajukan komite pusat -->
                <div class=''>
                    <button class="btn btn_ajukan_komite_pusat" style='background-color: red; color:white;' data-no_permohonan_kredit='<?= $data['no_permohonan_kredit'] ?>'>Ajukan Komite Pusat</button>
                    <!-- <a onclick="btn_ajukan_pusat(event); return false" href="<?= BASEURL ?>/wawancara/btn_ajukan_pusat/<?= $data['no_permohonan_kredit'] ?>" style='background-color: red; color:white;' class="btn">Ajukan Komite Pusat</a> -->
                </div>
            <?php  } ?>

        <?php } else if ($detail['tipe_komite'] == 'DIAJUKAN PUSAT') { ?>

            <div class="d-flex">

                <div class="ml-auto p-1">
                    <div class="d-flex">

                        <div>
                            <div class="label">
                                <h3><b style="color:red"> Telah diajukan ke Komite Pusat</b></h3>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        <?php } else if ($detail['tipe_komite'] == 'PUSAT') { ?>

            <?php
            if ($detail['status'] == 'BELUM DIAJUKAN' || $detail['status'] == "TIDAK SETUJU BATAL" || $detail['status'] == "TIDAK SETUJU TOLAK") {
            ?>
                <!-- tombol ajukan komite -->
                <div class="d-flex">

                    <div class="ml-auto p-1">
                        <div class="d-flex">

                            <div class=''>
                                <!-- <a style='background-color: <?= w_orange ?>; color:white; ' onclick='btn_ajukan_komite(event); return false' href="<?= BASEURL ?>/wawancara/btn_ajukan_komite/<?= $data['no_permohonan_kredit'] . '|' . $detail['tipe_komite'] ?>" class='btn'>Ajukan Komite</a> -->

                                <button class="btn btn_ajukan_komite" style='background-color: <?= w_orange ?>; color:white;' data-no_permohonan_kredit='<?= $data['no_permohonan_kredit'] ?>' data-tipe_komite='<?= $detail['tipe_komite'] ?>'><?= $ket_tombol_ajukan ?></button>
                            </div>


                        </div>
                    </div>
                </div>
            <?php } else if ($detail['status'] == 'DIAJUKAN' || $detail['status'] == 'KOMITE') {
            ?>
                <div class="d-flex">
                    <div class="ml-auto p-1">
                        <div class="d-flex">
                            <div>
                                <div class="label">
                                    <h3><b style="color:red"> Komite Pusat</b></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } ?>

        <?php } ?>






        <div class="row mt-3">
            <div class="col-6">

                <table class='table table-bordered'>

                    <tr>
                        <td>No Permohonan Kredit</td>
                        <td><?= $data['no_permohonan_kredit'] ?></td>
                    </tr>
                    <tr>
                        <td>Tgl. Wawancara</td>
                        <td><?= date('d-m-Y', strtotime($data['tanggal_wawancara'])) ?></td>
                    </tr>
                    <tr>
                        <td>Nama RO</td>
                        <td><?= $data['id_analis'] ?></td>
                    </tr>

                </table>
            </div>

            <div class="col-6">

                <table class='table table-bordered'>
                    <tr>
                        <td>Nama Pemohon</td>
                        <td><?= $data['nama_pemohon'] ?></td>
                    </tr>
                    <tr>
                        <td>Instansi</td>
                        <td><?= $data['nama_instansi'] ?></td>

                    </tr>

                    <tr>
                        <td>Alamat Instansi</td>
                        <td><?= $data['alamat_instansi'] ?></td>
                    </tr>

                </table>
            </div>


        </div>

        <!-- tab -->


        <ul class="nav nav-tabs mt-2 justify-content-center " id="" role="tablist">
            <li class="nav-item">
                <a class="nav-link " id="" data-toggle="tab" href="#a">Detail Permohonan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="" data-toggle="tab" href="#b">Detail SLIK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="" data-toggle="tab" href="#c">Detail Wawancara</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="" data-toggle="tab" href="#d">File Berkas</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" id="" data-toggle="tab" href="#d">Rekomendasi Komite</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="" data-toggle="tab" href="#e">Keputusan Komite</a>
            </li> -->
        </ul>

        <div class="tab-content">
            <div class="tab-pane" id="a">
                <style>
                    /* td {
                        padding: 5px !important;
                        margin: 0 !important;
                    } */
                </style>


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
                                            <td><?= $data['no_permohonan_kredit'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Pemohon</td>
                                            <td><?= $data['nama_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tempat Lahir</td>
                                            <td><?= $data['tempat_lahir_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Lahir</td>
                                            <td><?= isset($data['tgl_lahir_pemohon']) ? date('d-m-Y', strtotime($data['tgl_lahir_pemohon'])) : ''   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jenis Kelamin</td>
                                            <td><?= $data['jenis_kelamin_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Ibu</td>
                                            <td><?= $data['nama_ibu_kandung_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">No. KTP</td>
                                            <td><?= $data['no_ktp_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">No. NPWP</td>
                                            <td><?= $data['npwp_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat sesuai KTP</td>
                                            <td><?= $data['alamat_ktp_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat Sekarang</td>
                                            <td><?= $data['alamat_sekarang_pemohon'] ?></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon</td>
                                            <td><?= $data['telepon_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Media Sosial</td>
                                            <td><?= $data['media_sosial'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Status Kepemilikan Rumah</td>
                                            <td><?= $data['status_kepemilikan_rumah_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Pendidikan Terakhir</td>
                                            <td><?= $data['pendidikan_terakhir_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Gelar</td>
                                            <td><?= $data['gelar_pemohon'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Status Perkawinan</td>
                                            <td><?= $data['status_perkawinan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jumlah Tanggungan</td>
                                            <td><?= $data['jumlah_tanggungan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Keluarga Yg Dapat Dihubungi</td>
                                            <td><?= $data['nama_keluarga_dapat_dihubungi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon/Hp Yg Dapat Dihubungi</td>
                                            <td><?= $data['telepon_keluarga_dapat_dihubungi'] ?></td>
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
                                            <td><?= $data['jenis_pekerjaan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Instansi</td>
                                            <td><?= $data['nama_instansi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat</td>
                                            <td><?= $data['alamat_instansi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon</td>
                                            <td><?= $data['telepon_instansi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tahun Mulai Bekerja</td>
                                            <td><?= $data['tahun_mulai_bekerja'] ?></td>
                                        </tr>


                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jabatan Saat Ini</td>
                                            <td><?= $data['jabatan_saat_ini'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Atasan Langsung</td>
                                            <td><?= $data['atasan_langsung'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon/Hp Bendahara</td>
                                            <td><?= $data['telepon_bendahara'] ?></td>
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
                                            <td><?= $data['nama_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tempat Lahir</td>
                                            <td><?= $data['tempat_lahir_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Lahir</td>
                                            <td><?= isset($data['tgl_lahir_pasangan']) ? date('d-m-Y', strtotime($data['tgl_lahir_pasangan'])) : ''   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat KTP</td>
                                            <td><?= $data['alamat_ktp_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat Sekarang</td>
                                            <td><?= $data['alamat_sekarang_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon/Hp</td>
                                            <td><?= $data['telepon_pasangan'] ?></td>
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
                                            <td><?= $data['jenis_pekerjaan_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Instansi</td>
                                            <td><?= $data['nama_instansi_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tahun Mulai Bekerja</td>
                                            <td><?= $data['tahun_mulai_bekerja_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jabatan Saat Ini</td>
                                            <td><?= $data['jabatan_saat_ini_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat Kantor</td>
                                            <td><?= $data['alamat_kantor_pasangan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Telepon Kantor</td>
                                            <td><?= $data['telepon_bendahara'] ?></td>
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
                                            <td><?= isset($data['tanggal_permohonan']) ? date('d-m-Y', strtotime($data['tanggal_permohonan'])) : ''   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Perjanjian Kerjasama</td>
                                            <td><?= $data['perjanjian_kerjasama'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jenis Permohonan</td>
                                            <td><?= $data['jenis_permohonan'] ?></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jumlah Kredit Yang Dimohon</td>
                                            <td><?= number_format(($data['plafond_dimohon']), 0, ',', '.');  ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jangka Waktu (Bulan)</td>
                                            <td><?= $data['jangka_waktu'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tujuan Penggunaan Kredit</td>
                                            <td><?= $data['tujuan_penggunaan_kredit'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nilai Perkiraan Jaminan</td>
                                            <td><?= number_format(($data['nilai_jaminan']), 0, ',', '.');  ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Marketing</td>
                                            <td><?= $data['id_marketing'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Nama Analis</td>
                                            <td><?= $data['id_analis'] ?></td>
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
                                            <td><?= number_format(($data['penghasilan_pemohon']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Penghasilan Pasangan</td>
                                            <td><?= number_format(($data['penghasilan_pasangan']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Penghasilan Tambahan</td>
                                            <td><?= number_format(($data['penghasilan_tambahan']), 0, ',', '.');   ?></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Penghasilan Tambahan Lainnya</td>
                                            <td><?= number_format(($data['penghasilan_tambahan_lainnya']), 0, ',', '.');   ?></td>
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
                                            <td><?= number_format(($data['biaya_hidup_perbulan']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">NBiaya Pendidikan</td>
                                            <td><?= number_format(($data['biaya_pendidikan']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Biaya PAM/Listrik/Telp/Hp</td>
                                            <td><?= number_format(($data['biaya_pam_listrik_telepon']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Angsuran Bank Lain</td>
                                            <td><?= number_format(($data['angsuran_bank_lain']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Angsuran Perumahan</td>
                                            <td><?= number_format(($data['angsuran_perumahan']), 0, ',', '.');   ?></td>
                                        </tr>


                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Angsuran Kendaraan</td>
                                            <td><?= number_format(($data['angsuran_kendaraan']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Angsuran Barang Elektronik</td>
                                            <td><?= number_format(($data['angsuran_barang_elektronik']), 0, ',', '.');   ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Angsuran Koperasi</td>
                                            <td><?= number_format(($data['angsuran_koperasi']), 0, ',', '.');  ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Biaya Lainnya</td>
                                            <td><?= number_format(($data['biaya_lainnya']), 0, ',', '.');   ?></td>
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
                                            <td><?= $data['aset_yang_dimiliki'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Alamat Aset</td>
                                            <td><?= $data['alamat_aset'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jenis Sertifikat</td>
                                            <td><?= $data['jenis_sertifikat'] ?></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Jumlah Kendaraan</td>
                                            <td><?= $data['jumlah_kendaraan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Merek Kendaraan</td>
                                            <td><?= $data['merek_kendaraan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Atas Nama Kendaraan</td>
                                            <td><?= $data['atas_nama_kendaraan'] ?></td>
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
                                            <td><?= $data['catatan_cs'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Posisi Alur Kredit</td>
                                            <td><?= $data['lokasi_berkas'] ?></td>
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
                                            <td><?= $data['user_create'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Input</td>
                                            <td><?= date('d-m-Y', strtotime($data['tgl_create']))   ?></td>
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
                                <td><?= $data['nama_pemohon'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Instansi</td>
                                <td><?= $data['nama_instansi'] ?></td>
                            </tr>
                            <tr>
                                <td>No. KTP</td>
                                <td><?= $data['no_ktp_pemohon'] ?></td>
                            </tr>

                        </table>
                    </div>


                    <div class="col-6">
                        <table class="table table-bordered">
                            <tr>
                                <td>Tempat, Tanggal Lahir</td>
                                <td><?= $data['nama_pemohon'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat KTP</td>
                                <td><?= $data['alamat_ktp_pemohon'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat saat ini</td>
                                <td><?= $data['alamat_sekarang_pemohon'] ?></td>
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
                                    foreach ($daftar_slik_pemohon as $row) :
                                    ?>

                                        <tr>
                                            <td><?= $row['nama_bank'] ?></td>
                                            <td><?= $row['jenis_fasilitas'] ?></td>
                                            <td><?= number_format($row['plafond'], 0, ',', '.') ?></td>
                                            <td><?= number_format($row['bakidebet'], 0, ',', '.') ?></td>
                                            <td><?= $row['kolektibilitas'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($row['waktu_awal'])) . ' s/d ' . date('d-m-Y', strtotime($row['waktu_akhir'])) ?></td>
                                            <td><?= $row['suku_bunga'] ?></td>
                                            <td><?= $row['jenis_jaminan'] ?></td>
                                            <td><?= $row['nilai_jaminan'] ?></td>
                                            <td><?= $row['pemilik_jaminan'] ?></td>
                                            <td><?= $row['alamat_jaminan'] ?></td>
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
                                <td><?= $data['nama_pemohon'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Instansi</td>
                                <td><?= $data['nama_instansi'] ?></td>
                            </tr>
                            <tr>
                                <td>No. KTP</td>
                                <td><?= $data['no_ktp_pemohon'] ?></td>
                            </tr>

                        </table>
                    </div>


                    <div class="col-6">
                        <table class="table table-bordered">
                            <tr>
                                <td>Tempat, Tanggal Lahir</td>
                                <td><?= $data['nama_pemohon'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat KTP</td>
                                <td><?= $data['alamat_ktp_pasangan'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat saat ini</td>
                                <td><?= $data['alamat_sekarang_pasangan'] ?></td>
                            </tr>

                        </table>
                    </div>
                </div>



                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover first display nowrap tabel_slik_pasangan">
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
                                    foreach ($daftar_slik_pasangan as $row) :
                                    ?>

                                        <tr>
                                            <td><?= $row['nama_bank'] ?></td>
                                            <td><?= $row['jenis_fasilitas'] ?></td>
                                            <td><?= number_format($row['plafond'], 0, ',', '.') ?></td>
                                            <td><?= number_format($row['bakidebet'], 0, ',', '.') ?></td>
                                            <td><?= $row['kolektibilitas'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($row['waktu_awal'])) . ' s/d ' . date('d-m-Y', strtotime($row['waktu_akhir'])) ?></td>
                                            <td><?= $row['suku_bunga'] ?></td>
                                            <td><?= $row['jenis_jaminan'] ?></td>
                                            <td><?= $row['nilai_jaminan'] ?></td>
                                            <td><?= $row['pemilik_jaminan'] ?></td>
                                            <td><?= $row['alamat_jaminan'] ?></td>
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
                                            <td><?= $data_slik_single['user_create'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px; background-color: #F4F4F4; ">Tanggal Input</td>
                                            <td><?= date('d-m-Y', strtotime($data_slik_single['tgl_create']))   ?></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>







            </div>

            <div class="tab-pane active" id="c">
                <ul class="nav nav-tabs mt-2 justify-content-center " id="" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="" data-toggle="tab" href="#aaa">Analisa dan Usulan Analis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="" data-toggle="tab" href="#bbb">Daftar Jaminan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="" data-toggle="tab" href="#ccc">Analisa Kemampuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="" data-toggle="tab" href="#ddd">Sandi Sandi</a>
                    </li>
                </ul>



                <div class="tab-content">

                    <div class="tab-pane active" id="aaa">


                        <div class="row mt-3">
                            <div class="col-6">

                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Karakter</td>

                                        <td id='td_tabel_modal'><?= $detail['karakter'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pertimbangan Karakter</td>

                                        <td id='td_tabel_modal'><?= $detail['pertimbangan_karakter'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Kemampuan</td>

                                        <td id='td_tabel_modal'><?= $detail['kemampuan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pertimbangan Kemampuan</td>

                                        <td id='td_tabel_modal'><?= $detail['pertimbangan_kemampuan'] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket'>Kekayaan</td>

                                        <td id='td_tabel_modal'><?= $detail['kekayaan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pertimbangan Kekayaan</td>

                                        <td id='td_tabel_modal'><?= $detail['pertimbangan_kekayaan'] ?></td>
                                    </tr>



                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan</td>

                                        <td id='td_tabel_modal'><?= $detail['jaminan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pertimbangan Jaminan</td>

                                        <td id='td_tabel_modal'><?= $detail['pertimbangan_jaminan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Kondsi</td>

                                        <td id='td_tabel_modal'><?= $detail['kondisi'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pertimbangan Karakter</td>

                                        <td id='td_tabel_modal'><?= $detail['pertimbangan_kondisi'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Tujuan Penggunaan Kredit</td>

                                        <td id='td_tabel_modal'><?= $detail['tujuan_penggunaan_kredit'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jaminan Utama</td>

                                        <td id='td_tabel_modal'><?= $detail['jaminan_utama'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Syarat Lainnya</td>
                                        <td id='td_tabel_modal'><?= $detail['syarat_lainnya'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Dasar Pertimbangan Analis</td>
                                        <td><textarea class='form-control h-25' rows='15'><?= $detail['dasar_pertimbangan_analis'] ?></textarea></td>
                                    </tr>




                                </table>

                            </div>

                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Plafond</td>

                                        <td id='td_tabel_modal'><?= $detail['plafond'] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jangka Waktu</td>

                                        <td id='td_tabel_modal'><?= $detail['jangka_waktu'] . ' Bulan' ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Suku Bunga </td>

                                        <td id='td_tabel_modal'><?= $detail['suku_bunga'] . ' ' . '% p.a' ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Sistem Bunga</td>

                                        <td id='td_tabel_modal'><?= $detail['sistem_bunga'] ?></td>
                                    </tr>




                                    <tr>
                                        <td id='td_tabel_modal_ket'>Angsuran Perbulan</td>

                                        <td id='td_tabel_modal'><?= $detail['angsuran_perbulan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Biaya Provisi</td>

                                        <td id='td_tabel_modal'><?= $detail['biaya_provisi_nominal'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Biaya Administrasi</td>

                                        <td id='td_tabel_modal'><?= $detail['biaya_administrasi_nominal'] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket'>Premi Asuransi</td>

                                        <td id='td_tabel_modal'><?= $detail['premi_asuransi'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Tabungan</td>

                                        <td id='td_tabel_modal'><?= $detail['tabungan'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Biaya Notaris</td>

                                        <td id='td_tabel_modal'><?= $detail['biaya_notaris'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Biaya Materai</td>

                                        <td id='td_tabel_modal'><?= $detail['biaya_materai'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Biaya APHT</td>

                                        <td id='td_tabel_modal'><?= $detail['biaya_apht'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Asuransi Kerugian</td>

                                        <td id='td_tabel_modal'><?= $detail['asuransi_kerugian'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Sistem Pembayaraan</td>

                                        <td id='td_tabel_modal'><?= $detail['sistem_pembayaran'] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Pejabat TTD SPPK</td>

                                        <td id='td_tabel_modal'><?= $detail['pejabat_ttd_sppk'] ?></td>
                                    </tr>


                                </table>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="bbb">
                        <div class="row mt-3">
                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>




                                    <?php
                                    for ($a = 1; $a <= 10; $a++) {
                                    ?>
                                        <tr>
                                            <td id='td_tabel_modal_ket'>Jaminan <?= $a ?></td>
                                            <td id='td_tabel_modal'><?= $detail['jaminan_' . $a] ?></td>

                                        </tr>
                                    <?php  } ?>

                                </table>
                            </div>

                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>




                                    <?php
                                    for ($a = 11; $a <= 20; $a++) {
                                    ?>
                                        <tr>
                                            <td id='td_tabel_modal_ket'>Jaminan <?= $a ?></td>
                                            <td id='td_tabel_modal'><?= $detail['jaminan_' . $a] ?></td>

                                        </tr>
                                    <?php  } ?>


                                </table>
                            </div>






                        </div>
                    </div>

                    <div class="tab-pane" id="ccc">
                        <div class="row mt-3">
                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Pemohon Perbulan</td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['penghasilan_pemohon_perbulan'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $detail['penghasilan_pemohon_perbulan_ket'] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pemohon 1 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['penghasilan_pemohon_tambahan_1'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $penghasilan_pemohon_ket[1] ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pemohon 2 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['penghasilan_pemohon_tambahan_2'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $penghasilan_pemohon_ket[2] ?></td>
                                    </tr>




                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pemohon 3 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['penghasilan_pemohon_tambahan_3'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $penghasilan_pemohon_ket[3] ?></td>
                                    </tr>



                                </table>
                            </div>


                            <div class='col-6'>
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Pasangan Perbulan</td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['penghasilan_pasangan_perbulan'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $detail['penghasilan_pasangan_perbulan_ket'] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pasangan 1 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['penghasilan_pasangan_tambahan_1'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $penghasilan_pasangan_ket[1] ?></td>
                                    </tr>


                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pasangan 2 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['penghasilan_pasangan_tambahan_2'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $penghasilan_pasangan_ket[2] ?></td>
                                    </tr>



                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pasangan 3 </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['penghasilan_pasangan_tambahan_3'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $penghasilan_pasangan_ket[3] ?></td>
                                    </tr>

                                </table>
                            </div>
                        </div>


                        <div class='row mt-3'>

                            <div class='col-6'>
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Biaya Rumah Tangga Sebulan </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['biaya_hidup_sebulan'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $biaya_hidup_sebulan_ket ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Biaya Pendidikan Sebulan </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['biaya_pendidikan'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $biaya_pendidikan_ket ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Biaya Listrik/Pam/Telepon Sebulan </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['biaya_pam_listrik_telepon'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $biaya_pam_listrik_telepon_ket ?></td>
                                    </tr>
                                </table>
                            </div>


                            <div class='col-6'>
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Biaya Transport Sebulan </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['biaya_transport'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $biaya_transport_ket ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Biaya Lain-lain Sebulan </td>
                                        <td id='td_tabel_modal' colspan='1'><?= number_format(($detail['biaya_lainnya'] * 1000), 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal' colspan='1'><?= $biaya_lainnya_ket ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class='row mt-3'>
                            <div class='col-6'>
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>
                                    <tr>
                                        <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Hasamitra sebelumnya </td>
                                        <td id='td_tabel_modal'><?= $detail['angsuran_kredit_sebelumnya'] ?></td>
                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal'><?= $detail['angsuran_kredit_sebelumnya_ket'] ?></td>
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
                                        <td id='td_tabel_modal_ket' rowspan='2'>Saldo Tabungan Terakhir </td>
                                        <td id='td_tabel_modal'><?= $detail['saldo_tabungan_terakhir'] ?></td>

                                    </tr>
                                </table>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Kemampuan Membayar </td>
                                        <td id='td_tabel_modal'><?= $detail['kemampuan_membayar_angsuran'] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Persentase Angsuran </td>
                                        <td id='td_tabel_modal'><?= $detail['persentase_angsuran'] . ' % ' . $detail['keterangan_persentase_angsuran'] ?></td>

                                    </tr>


                                </table>
                            </div>
                        </div>



                    </div>
                    <div class="tab-pane" id="ddd">
                        <div class="row">
                            <div class="col-6">
                                <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Golongan Debitur </td>
                                        <td id='td_tabel_modal'><?= $detail['kode_golongan_debitur'] . ' - ' . $kode_golongan_debitur['golongan_debitur'] ?></td>

                                    </tr>
                                    <tr>
                                        <td id='td_tabel_modal_ket'>Jenis Penggunaan </td>
                                        <?php if (isset($kode_jenis_penggunaan['jenis_penggunaan'])) { ?>
                                            <td id='td_tabel_modal'><?= $detail['kode_jenis_penggunaan'] . ' - ' . $kode_jenis_penggunaan['jenis_penggunaan'] ?></td>
                                        <?php } else { ?>
                                            <td id='td_tabel_modal'><?= $detail['kode_jenis_penggunaan'] . ' - '  ?></td>
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <td id='td_tabel_modal_ket'>Sektor Ekonomi </td>
                                        <td id='td_tabel_modal'><?= $detail['kode_sektor_ekonomi'] . ' - ' . $kode_sektor_ekonomi['sektor_ekonomi'] ?></td>

                                    </tr>

                                    <?php

                                    if (isset($kode_hubungan_debitur_dengan_bank['hubungan_debitur_dengan_bank'])) {


                                    ?>

                                        <tr>
                                            <td id='td_tabel_modal_ket'>Hubungan Debitur Dengan Bank </td>
                                            <td id='td_tabel_modal'><?= $detail['kode_hubungan_debitur_dengan_bank'] . ' - ' . $kode_hubungan_debitur_dengan_bank['hubungan_debitur_dengan_bank'] ?></td>
                                        </tr>


                                    <?php  } else { ?>

                                        <tr>
                                            <td id='td_tabel_modal_ket'>Hubungan Debitur Dengan Bank </td>
                                            <td id='td_tabel_modal'><?= $detail['kode_hubungan_debitur_dengan_bank'] . ' - ' ?></td>
                                        </tr>

                                    <?php } ?>

                                </table>
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
                                    foreach ($get_tbl_wawancara_berkas_id as $index => $row) : ?>

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


        <!-- akhit tab -->

    </div>
</main>



<!-- Detail-->
<!-- Modal -->
<div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h1 class="h4 "><strong>Detail Pemohon</strong></h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal_detail">



            </div>
        </div>
    </div>
</div>






<!-- handel tabel detail slik -->

<script>
    $('.tabel_slik_pemohon').DataTable();
    $('.tabel_slik_pasangan').DataTable();
    $('#example2').DataTable();
</script>