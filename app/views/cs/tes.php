
<form id="form_cs_simpan_data_kredit" action="<?= BASEURL; ?>/cs/simpan_data" method="POST">
    <main class="content">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 3"><strong>Input Permohonan Kredit</strong> </h1>
                    <!-- <h1 class="h3 d-inline align-middle"><?= $data['judul'] ?></h1> -->
                </div>
            </div>

            <div class="row ">
                <div class="col-12 col-lg-6 col-xxl-6 ">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h1 class="h4 mb-0"><strong>Data Pemohon</strong></h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="validate-error"></div>
                                <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama</label><span class="ml-1" style="color:red;">*</span>
                                <input type="text" class="form-control" name="nama_pemohon" required />
                                <label class="mt-2 mb-2">Tempat Lahir</label><span class="ml-1" style="color:red;">*</span>
                                <input type="text" class="form-control" name="tempat_lahir_pemohon" required />
                                <label class="mt-2 mb-2">Tanggal Lahir</label><span class="ml-1" style="color:red;">*</span>
                                <input type="date" class="form-control" name="tgl_lahir_pemohon" required />
                                <label class="mt-2 mb-2">Jenis Kelamin</label><span class="ml-1" style="color:red;">*</span>
                                <select name="jenis_kelamin_pemohon" class="form-select" required>
                                    <option value="jenis_kelamin_pemohon" disabled selected>- Silahkan Pilih -</option>
                                    <option>Pria</option>
                                    <option>Wanita</option>
                                </select>

                                <label class="mt-2 mb-2">Nama Ibu Kandung</label><span class="ml-1" style="color:red;">*</span>
                                <input type="text" class="form-control" name="nama_ibu_kandung_pemohon" required />
                                <label class="mt-2 mb-2">No. KTP</label><span class="ml-1" style="color:red;">*</span>
                                <input type="text" class="form-control" name="no_ktp_pemohon" required />
                                <label class="mt-2 mb-2">NPWP</label>
                                <input type="text" class="form-control" name="npwp_pemohon" />
                                <label class="mt-2 mb-2">Alamat (Sesuai KTP)</label><span class="ml-1" style="color:red;">*</span>
                                <input type="text" class="form-control" name="alamat_ktp_pemohon" required />
                                <label class="mt-2 mb-2">Alamat Sekarang</label><span class="ml-1" style="color:red;">*</span>
                                <input type="text" class="form-control" name="alamat_sekarang_pemohon" required />
                                <label class="mt-2 mb-2">Telepon</label><span class="ml-1" style="color:red;">*</span>
                                <input type="text" class="form-control" name="telepon_pemohon" required />
                                <label class="mt-2 mb-2">Media Sosial</label>
                                <input type="text" class="form-control" name="media_sosial" />

                                <label class="mt-2 mb-2">Status Kepemilikan Rumah</label><span class="ml-1" style="color:red;">*</span>
                                <select name="status_kepemilikan_rumah_pemohon" class="form-select" required>
                                    <option value="" disabled selected>- Silahkan Pilih -</option>
                                    <option>Pribadi</option>
                                    <option>Keluarga</option>
                                    <option>Dinas</option>
                                    <option>Sewa</option>
                                    <option>Kost</option>
                                    <option>Lainnya</option>
                                </select>

                                <label class="mt-2 mb-2">Pendidikan Terakhir</label><span class="ml-1" style="color:red;">*</span>
                                <select name="pendidikan_terakhir_pemohon" class="form-select" required>
                                    <option value="" disabled selected>- Silahkan Pilih -</option>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                    <option>D3</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                    <option>Lainnya</option>
                                </select>

                                <label class="mt-2 mb-2">Gelar</label>
                                <input type="text" class="form-control" name="gelar_pemohon" />


                                <label class="mt-2 mb-2">Status Perkawinan</label><span class="ml-1" style="color:red;">*</span>
                                <select name="status_perkawinan" class="form-select" required>
                                    <option value="" disabled selected>- Silahkan Pilih -</option>
                                    <option>Belum Menikah</option>
                                    <option>Menikah</option>
                                    <option>Duda</option>
                                    <option>Janda</option>
                                </select>

                                <label class="mt-2 mb-2">Jumlah Tanggungan (Orang)</label>
                                <input type="text" class="form-control" name="jumlah_tanggungan" />
                                <br>
                                <label class="mt-2 mb-2">Keluarga tidak serumah yang dapat dihubungi atau teman :</label>
                                <br>
                                <label class="mt-2 mb-2">Nama</label>
                                <input type="text" class="form-control" name="nama_keluarga_dapat_dihubungi" />
                                <label class="mt-2 mb-2">Alamat</label>
                                <input type="text" class="form-control" name="alamat_keluarga_dapat_dihubungi" />
                                <label class="mt-2 mb-2">Hubungan</label>
                                <input type="text" class="form-control" name="hubungan_keluarga_dapat_dihubungi" />
                                <label class="mt-2 mb-2">Telepon/Hp Yang Dapat Dihubungi</label>
                                <input type="text" class="form-control" name="telepon_keluarga_dapat_dihubungi" />

                            </div>
                            <!-- <div class="mt-3">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <button type="reset" class="btn btn-secondary me-2">Batal</button>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 ">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h1 class="h4 mb-0"><strong>Data Pekerjaan</strong></h1>

                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="mt-2 mb-2">Jenis Pekerjaan</label><span class="ml-1" style="color:red;">*</span>
                                <select name="jenis_pekerjaan" class="form-select" required>
                                    <option value="" disabled selected>- Silahkan Pilih -</option>
                                    <option>PNS/TNI/POLRI</option>
                                    <option>Pegawai Swasta</option>
                                    <option>Wiraswasta</option>
                                    <option>Pensiunan</option>
                                    <option>Lainnya</option>

                                </select>
                                <label class="mt-2 mb-2">Nama Instansi</label><span class="ml-1" style="color:red;">*</span>
                                <input type="text" class="form-control" name="nama_instansi" required />

                                <label class="mt-2 mb-2">Alamat</label><span class="ml-1" style="color:red;">*</span>
                                <input type="text" class="form-control" name="alamat_instansi" required />
                                <label class="mt-2 mb-2">Telepon</label>
                                <input type="text" class="form-control" name="telepon_instansi" />
                                <label class="mt-2 mb-2">Tahun Mulai Bekerja</label>
                                <input type="text" class="form-control" name="tahun_mulai_bekerja" />
                                <label class="mt-2 mb-2">Jabatan Saat Ini</label>
                                <input type="text" class="form-control" name="jabatan_saat_ini" />
                                <label class="mt-2 mb-2">Atasan Langsung</label>
                                <input type="text" class="form-control" name="atasan_langsung" />
                                <label class="mt-2 mb-2">Telp/Hp Bendahara</label>
                                <input type="text" class="form-control" name="telepon_bendahara" />
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row ">
                <div class="col-12 col-lg-6 col-xxl-6 ">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h1 class="h4 mb-0"><strong>Data Pasangan</strong></h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="mt-2 mb-2">Nama </label>
                                <input type="text" class="form-control" name="nama_pasangan" />
                                <label class="mt-2 mb-2">Tempat Lahir </label>
                                <input type="text" class="form-control" name="tempat_lahir_pasangan" />
                                <label class="mt-2 mb-2">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir_pasangan" />
                                <label class="mt-2 mb-2">No KTP </label>
                                <input type="text" class="form-control" name="no_ktp_pasangan" />
                                <label class="mt-2 mb-2">Alamat KTP</label>
                                <input type="text" class="form-control" name="alamat_ktp_pasangan" />
                                <label class="mt-2 mb-2">Alamat Sekarang</label>
                                <input type="text" class="form-control" name="alamat_sekarang_pasangan" />
                                <label class="mt-2 mb-2">Telepon / Hp</label>
                                <input type="text" class="form-control" name="telepon_pasangan" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 ">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h1 class="h4 mb-0"><strong>Data Pekerjaan Pasangan</strong></h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="mt-2 mb-2">Jenis Pekerjaan</label>
                                <select name="jenis_pekerjaan_pasangan" class="form-select">
                                    <option value="" disabled selected>- Silahkan Pilih -</option>
                                    <option>PNS/TNI/POLRI</option>
                                    <option>Pegawai Swasta</option>
                                    <option>Wiraswasta</option>
                                    <option>Pensiunan</option>
                                    <option>Lainnya</option>
                                </select>
                                <label class="mt-2 mb-2">Nama Instansi</label>
                                <input type="text" class="form-control" name="nama_instansi_pasangan" />
                                <label class="mt-2 mb-2">Tahun Mulai Bekerja</label>
                                <input type="text" class="form-control" name="tahun_mulai_bekerja_pasangan" />
                                <label class="mt-2 mb-2">Jabatan Saat Ini</label>
                                <input type="text" class="form-control" name="jabatan_saat_ini_pasangan" />
                                <label class="mt-2 mb-2">Alamat Kantor</label>
                                <input type="text" class="form-control" name="alamat_kantor_pasangan" />
                                <label class="mt-2 mb-2">Telepon Kantor</label>
                                <input type="text" class="form-control" name="telepon_kantor_pasangan" />
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="h4 mb-0"><strong>Data Kredit</strong></h1>

                        </div>
                        <div class="card-body">
                            <label class="mt-2 mb-2">Tanggal Permohonan </label><span class="ml-1" style="color:red;">*</span>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" id="" class="form-control" name="tanggal_permohonan" required />

                            <label class="mt-2 mb-2">Perjanjian Kerjasama</label><span class="ml-1" style="color:red;">*</span>
                            <select name="perjanjian_kerjasama" class="form-select" required>
                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                <option>Ada</option>
                                <option>Belum Ada</option>
                            </select>
                            <label class="mt-2 mb-2">Jenis Permohonan</label><span class="ml-1" style="color:red;">*</span>
                            <select name="jenis_permohonan" class="form-select" required>
                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                <option>Baru</option>
                                <option>Penambahan</option>
                            </select>
                            <label class="mt-2 mb-2">Jumlah Kredit Yang Dimohon (Rp) </label><span class="ml-1" style="color:red;">*</span>
                            <input type="text" id="1" class="form-control input" name="plafond_dimohon" onwheel="return false;" required />
                            <label class="mt-2 mb-2">Jangka Waktu (Bulan) </label><span class="ml-1" style="color:red;">*</span>
                            <input type="number" onkeypress="return isNumberKey(event)" class="form-control" name="jangka_waktu" onwheel="return false;" required/>

                            <label class="mt-2 mb-2">Tujuan Pengaduan Kredit </label><span class="ml-1" style="color:red;">*</span>
                            <select name="tujuan_penggunaan_kredit" class="form-select" required>
                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                <?php foreach ($data['get_all_tujuan_penggunaan_kredit'] as $i) : ?>
                                    <option value="<?= $i['kode'] ?>"><?php echo $i['kode'] . ' - ' . $i['keterangan'] ?></option>
                                <?php endforeach; ?>

                                <!-- <option>Lainnya</option> -->
                            </select>
                            <label class="mt-2 mb-2">Jenis Jaminan</label><span class="ml-1" style="color:red;">*</span>
                            <select name="jenis_jaminan" class="form-select" required>
                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                <option>Tanah & Bangunan</option>
                                <option>Kendaraan Bermotor</option>
                                <option>Simpanan</option>
                                <option>Lainnya</option>
                            </select>

                            <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                            <input type="text" id="2" class="form-control input" name="nilai_jaminan" />
                            <label class="mt-2 mb-2">Nama Marketing</label><span class="ml-1" style="color:red;">*</span>
                            <select name="id_marketing" class="form-select" required>
                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                            </select>

                            <label class="mt-2 mb-2">Nama RO</label><span class="ml-1" style="color:red;">*</span>
                            <select name="id_analis" class="form-select" required>
                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                            </select>

                        </div>
                    </div>
                </div>
            </div>




            <div class="row ">
                <div class="col-12 col-lg-6 col-xxl-6 ">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h1 class="h4 mb-0"><strong>Penghasilan Perbulan</strong></h1>

                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="mt-2 mb-2">Penghasilan Pemohon (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                <input type="text" class="form-control input" id="3" name="penghasilan_pemohon" onwheel="return false;" required />
                                <label class="mt-2 mb-2">Penghasilan Pasangan (Rp)</label>
                                <input type="text" class="form-control input" id="4" class="form-control" name="penghasilan_pasangan" />
                                <label class="mt-2 mb-2">Penghasilan Tambahan (Rp)</label>
                                <input type="text" class="form-control input" id="5" class="form-control" name="penghasilan_tambahan" />
                                <label class="mt-2 mb-2">Penghasilan Tambahan Lainnya (Rp)</label>
                                <input type="text" class="form-control input" id="6" class="form-control" name="penghasilan_tambahan_lainnya" />
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 ">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h1 class="h4 mb-0"><strong>Pengeluaran Perbulan</strong></h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="mt-2 mb-2">Biaya Hidup (Rp)</label><span class="ml-1" style="color:red;" >*</span>
                                <input type="text" class="form-control input" id="7" class="form-control" name="biaya_hidup_perbulan" required />
                                <label class="mt-2 mb-2">Biaya Pendidikan (Rp)</label>
                                <input type="text" class="form-control input" id="8" class="form-control" name="biaya_pendidikan" />
                                <label class="mt-2 mb-2">Biaya PAM/Listrik/Tlp/Hp (Rp)</label>
                                <input type="text" class="form-control input" id="9" class="form-control" name="biaya_pam_listrik_telepon" />
                                <label class="mt-2 mb-2">Biaya Transport (Rp)</label>
                                <input type="text" class="form-control input" id="9" class="form-control" name="biaya_transport" />
                                <label class="mt-2 mb-2">Angsuran Bank Lain (Rp)</label>
                                <input type="text" class="form-control input" id="10" class="form-control" name="angsuran_bank_lain" />
                                <label class="mt-2 mb-2">Angsuran Perumahan (Rp)</label>
                                <input type="text" class="form-control input" id="11" class="form-control" name="angsuran_perumahan" />
                                <label class="mt-2 mb-2">Angsuran Kendaraan (Rp)</label>
                                <input type="text" class="form-control input" id="12" class="form-control" name="angsuran_kendaraan" />
                                <label class="mt-2 mb-2">Angsuran Barang Elektronik (Rp)</label>
                                <input type="text" class="form-control input" id="13" class="form-control" name="angsuran_barang_elektronik" />
                                <label class="mt-2 mb-2">Angsuran Koperasi (Rp)</label>
                                <input type="text" class="form-control input" id="14" class="form-control" name="angsuran_koperasi" />
                                <label class="mt-2 mb-2">Biaya Lainnya (Rp)</label>
                                <input type="text" class="form-control input" id="15" class="form-control" name="biaya_lainnya" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="h4 mb-0"><strong>Data Aset yang Dimiliki</strong></h1>

                        </div>
                        <div class="card-body">
                            <label class="mt-2 mb-2">Aset Yang Dimiliki</label>
                            <select name="aset_yang_dimiliki" class="form-select">
                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                <option>Rumah</option>
                                <option>Tanah</option>
                                <option>Lainnya</option>
                            </select>
                            <label class="mt-2 mb-2">Alamat Aset</label>
                            <input type="text" class="form-control" name="alamat_aset" />

                            <label class="mt-2 mb-2">Jenis Sertifikat</label>
                            <select name="jenis_sertifikat" class="form-select">
                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                <option>HGB</option>
                                <option>Hak Milik</option>
                                <option>Lainnya</option>
                            </select>
                            <label class="mt-2 mb-2">Jumlah Kendaraan</label>
                            <input type="text" class="form-control" name="jumlah_kendaraan" />
                            <label class="mt-2 mb-2">Merk Kendaraan</label>
                            <input type="text" class="form-control" name="merek_kendaraan" />
                            <label class="mt-2 mb-2">Tahun Kendaraan</label>
                            <input type="text" class="form-control" name="tahun_kendaraan" />
                            <label class="mt-2 mb-2">Atas Nama Kendaraan</label>
                            <input type="text" class="form-control" name="atas_nama_kendaraan" />
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- <div class="card-header">
                                <h1 class="h4 mb-0"><strong>Konfirmasi</strong></h1>
                            </div> -->
                        <div class="card-body">

                            <label class="mt-2 mb-2">Catatan CS</label>
                            <textarea name="catatan_cs" class="form-control h-25" rows="5" placeholder=""></textarea>

                            <label class="mt-2 mb-2">Lokasi Berkas</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input name="lokasi_berkas" class="form-check-input" type="radio" id="cs" value="CS">
                                <label class="form-check-label" for="cs">CS</label>
                            </div>
                            <div class="form-check form-check-inline">

                                <input class="form-check-input" type="radio" name="lokasi_berkas" id="slik" value="SLIK" checked>
                                <label class="form-check-label" for="slik">SLIK</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button id="btn_form_cs_simpan_data_kredit" type="submit" class="btn btn-primary me-2">Simpan</button>
        <a onclick="btn_batal_input_kredit(event); return false" href="<?= BASEURL; ?>/cs/data_kredit" class="btn btn-secondary me-2">Batal</a>
        <!-- <button type="reset" >Batal</button> -->


    </main>

</form>