<style>
    td {
        padding: 5px !important;
        margin: 0 !important;
    }
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
                            <td style="width: 200px; background-color: #F4F4F4; ">Biaya Pendidikan</td>
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
                            <td><?= date('d-m-Y', strtotime($data['detail']['tgl_create']))   ?></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>