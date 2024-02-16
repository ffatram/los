<main class="content">

    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-header">
                <h1 class="h3 3"><strong><?= $data['judul'] ?></strong> </h1>

            </div>



        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-6">

                                <table class="table-hover" cellpadding=5 cellspacing=15>
                                    <tr>
                                        <td>No. Permohonan Kredit</td>
                                        <td>:</td>
                                        <td id="65"><?= $data['get_daftar_belum_slik_id']['no_permohonan_kredit'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tgl Permohonan</td>
                                        <td>:</td>
                                        <td id="66"><?= date("d-m-Y", strtotime($data['get_daftar_belum_slik_id']['tanggal_permohonan'])) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tgl SLIK</td>
                                        <td>:</td>
                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['tanggal_slik'] ?></td>
                                    </tr>

                                </table>
                            </div>
                        </div>



                        <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pemohon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pasangan Pemohon</a>
                            </li>

                        </ul>

                        <!-- Tab panes -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form id="form_update_slik_pemohon" action="<?= BASEURL; ?>/slik/update_slik_pemohon" method="POST">
                                    <div class="row mt-2">
                                        <div class="col-lg-6">

                                            <table class="table-hover" cellpadding=5 cellspacing=15>
                                                <tr>
                                                    <td>Nama Pemohon</td>
                                                    <td>:</td>
                                                    <td id="65"><?= $data['get_daftar_belum_slik_id']['nama_pemohon'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Instansi</td>
                                                    <td>:</td>
                                                    <td id="66"><?= $data['get_daftar_belum_slik_id']['nama_instansi'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No. KTP</td>
                                                    <td>:</td>
                                                    <td id="67"><?= $data['get_daftar_belum_slik_id']['no_ktp_pemohon'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat KTP</td>
                                                    <td>:</td>
                                                    <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_ktp_pemohon'] ?></td>
                                                </tr>

                                                <tr>
                                                    <td>Alamat Saat Ini</td>
                                                    <td>:</td>
                                                    <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_sekarang_pemohon'] ?></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-12 col-lg-6 col-xxl-6 ">
                                            <div class="">
                                                <div class="">
                                                    <div class="form-group">
                                                        <div class="validate-error"></div>
                                                        <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama Bank</label><span class="ml-1" style="color:red;">*</span>
                                                        <select name="nama_bank" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>BNI</option>
                                                            <option>BRI</option>
                                                            <option>MANDIRI</option>
                                                        </select>
                                                        <label class="mt-2 mb-2">Jenis Fasilitas</label>
                                                        <select name="jenis_fasilitas" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>HGB</option>
                                                            <option>HAK MILIK</option>
                                                            <option>LAINNYA</option>
                                                        </select>
                                                        <label class="mt-2 mb-2">Plafond (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                        <input value="<?= $data['edit_pemohon_slik']['nama_bank'] ?>" id="1" class="form-control input" name="plafond" onwheel="return false;" required />
                                                        <label type="text"  class="mt-2 mb-2">Bakidebet (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                        <input type="text" id="1" class="form-control input" name="bakidebet" onwheel="return false;" required />
                                                        <label class="mt-2 mb-2">Kolektibilitas</label><span class="ml-1" style="color:red;">*</span>
                                                        <select name="kolektibilitas" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                        <label class="mt-2 mb-2">Jangka Waktu</label><span class="ml-1" style="color:red;">*</span>
                                                        <div class="row">
                                                            <div class="col ">
                                                                <input type="date" class="form-control" name="waktu_awal" placeholder="Tanggal Awal" id="date_timepicker_end">

                                                            </div>
                                                            <div class="col col-1 text-center">
                                                                <p>S/D</p>
                                                            </div>

                                                            <div class="col">
                                                                <input type="date" class="form-control" name="waktu_akhir" placeholder="Tanggal Akhir">
                                                            </div>

                                                        </div>
                                                        <label class="mt-2 mb-2">Suka Bungaa % </label><span class="ml-1" style="color:red;">*</span>
                                                        <input type="text" class="form-control" name="suku_bunga" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-xxl-6 ">
                                            <div class="">

                                                <div class="">
                                                    <div class="form-group">
                                                        <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                        <select name="jenis_jaminan" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>TANAH & BANGUNAN</option>
                                                            <option>KENDARAAN BERMOTOR</option>
                                                            <option>SIMPANAN</option>
                                                            <option>LAINNYA</option>
                                                        </select>
                                                        <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                        <input type="text" id="2" class="form-control input" name="nilai_jaminan" />
                                                        <label class="mt-2 mb-2">Pemilik Jaminan </label>
                                                        <input type="text" id="2" class="form-control" name="pemilik_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                        <label class="mt-2 mb-2">Alamat Jaminan</label>
                                                        <input type="text" id="2" class="form-control" name="alamat_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                        <label class="mt-2 mb-2">Pengikatan </label>
                                                        <select name="pengikatan" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>A</option>
                                                            <option>B</option>
                                                            <option>C</option>
                                                            <option>LAINNYA</option>
                                                        </select>
                                                        <label class="mt-2 mb-2">Keterangan</label>

                                                        <textarea name="keterangan" class="form-control h-25" rows="4" placeholder="" oninput="this.value = this.value.toUpperCase()"></textarea>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3 mb-3">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                        <button type="reset" class="btn btn-secondary">Batal</button>
                                    </div>
                                </form>





                                <div class="table-responsive mt-5">
                                    <table id="daftar_pemohon_input_slik" class="table table-striped table-hover first display nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Aksi
                                                </th>
                                                <th>
                                                    Nama Bank
                                                </th>

                                                <th>
                                                    Jenis Fasilitas
                                                </th>
                                                <th>
                                                    Plafond
                                                </th>
                                                <th>
                                                    Bakidebet
                                                </th>
                                                <th>
                                                    Kolektibilitas
                                                </th>

                                                <th>
                                                    Jangka Waktu
                                                </th>
                                                <th>
                                                    Suku Bunga
                                                </th>
                                                <th>
                                                    Jenis Jaminan
                                                </th>
                                                <th>
                                                    Nilai Jaminan
                                                </th>
                                                <th>
                                                    Pemilik Jaminan
                                                </th>
                                                <th>
                                                    Alamat Jaminan
                                                </th>
                                                <th>
                                                    Pengikatan
                                                </th>
                                                <th>
                                                    Keterangan
                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            <?php $a = 1;
                                            foreach ($data['data_pemohon'] as $row) : ?>
                                                <tr>

                                                    <td>

                                                        <a href="<?= BASEURL; ?>/slik/edit_pemohon_slik/<?= $row['id'] ?>" class="btn btn-primary btn-m">Edit</a>
                                                        <button class="btn btn-danger">Hapus</button>

                                                    </td>

                                                    <td><?= $row['nama_bank'] ?></td>
                                                    <td><?= $row['jenis_fasilitas'] ?></td>
                                                    <td><?= $row['plafond'] ?></td>
                                                    <td><?= $row['bakidebet'] ?></td>
                                                    <td><?= $row['kolektibilitas'] ?></td>
                                                    <td><?= date("d-m-Y", strtotime($row['waktu_awal'])) . ' sampai ' . date("d-m-Y", strtotime($row['waktu_akhir'])) ?></td>
                                                    <td><?= $row['suku_bunga'] ?></td>
                                                    <td><?= $row['jenis_jaminan'] ?></td>
                                                    <td><?= $row['nilai_jaminan'] ?></td>
                                                    <td><?= $row['pemilik_jaminan'] ?></td>
                                                    <td><?= $row['alamat_jaminan'] ?></td>
                                                    <td><?= $row['pengikatan'] ?></td>
                                                    <td><?= $row['keterangan'] ?></td>


                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>



                            </div>



                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row mt-2">
                                    <div class="col-lg-6">

                                        <table class="table-hover" cellpadding=5 cellspacing=15>
                                            <tr>
                                                <td>Nama Pasangan</td>
                                                <td>:</td>
                                                <td id="65"><?= $data['get_daftar_belum_slik_id']['nama_pasangan'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Instansi Pasangan</td>
                                                <td>:</td>
                                                <td id="66"><?= $data['get_daftar_belum_slik_id']['nama_instansi_pasangan'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>No. KTP Pasangan</td>
                                                <td>:</td>
                                                <td id="67"><?= $data['get_daftar_belum_slik_id']['no_ktp_pasangan'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat KTP Pasangan</td>
                                                <td>:</td>
                                                <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_ktp_pasangan'] ?></td>
                                            </tr>

                                            <tr>
                                                <td>Alamat Saat Ini Pasangan</td>
                                                <td>:</td>
                                                <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_sekarang_pasangan'] ?></td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>



                                <form action="">
                                    <div class="row mt-3">
                                        <div class="col-12 col-lg-6 col-xxl-6 ">
                                            <div class="">
                                                <div class="">
                                                    <div class="form-group">
                                                        <div class="validate-error"></div>
                                                        <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama Bank</label><span class="ml-1" style="color:red;">*</span>
                                                        <select name="jenis_sertifikat" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>BNI</option>
                                                            <option>BRI</option>
                                                            <option>MANDIRI</option>
                                                        </select>
                                                        <label class="mt-2 mb-2">Jenis Fasilitas</label>
                                                        <select name="jenis_sertifikat" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>HGB</option>
                                                            <option>HAK MILIK</option>
                                                            <option>LAINNYA</option>
                                                        </select>
                                                        <label class="mt-2 mb-2">Plafond (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                        <input type="text" id="1" class="form-control input" name="plafond_dimohon" onwheel="return false;" required />
                                                        <label class="mt-2 mb-2">Bakidebet (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                        <input type="text" id="1" class="form-control input" name="plafond_dimohon" onwheel="return false;" required />
                                                        <label class="mt-2 mb-2">Kolektibilitas</label><span class="ml-1" style="color:red;">*</span>
                                                        <select name="jenis_sertifikat" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                        <label class="mt-2 mb-2">Jangka Waktu</label><span class="ml-1" style="color:red;">*</span>
                                                        <div class="row">
                                                            <div class="col ">
                                                                <input type="date" class="form-control" placeholder="Tanggal Awal">

                                                            </div>
                                                            <div class="col col-1 text-center">
                                                                <p>S/D</p>
                                                            </div>

                                                            <div class="col">
                                                                <input type="date" class="form-control" placeholder="Tanggal Akhir">
                                                            </div>

                                                        </div>
                                                        <label class="mt-2 mb-2">Suka Bungaa % </label><span class="ml-1" style="color:red;">*</span>
                                                        <input type="text" class="form-control" name="plafond_dimohon" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-xxl-6 ">
                                            <div class="">

                                                <div class="">
                                                    <div class="form-group">
                                                        <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                        <select name="jenis_jaminan" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>TANAH & BANGUNAN</option>
                                                            <option>KENDARAAN BERMOTOR</option>
                                                            <option>SIMPANAN</option>
                                                            <option>LAINNYA</option>
                                                        </select>
                                                        <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                        <input type="text" id="2" class="form-control input" name="nilai_jaminan" />
                                                        <label class="mt-2 mb-2">Pemilik Jaminan </label>
                                                        <input type="text" id="2" class="form-control" name="nilai_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                        <label class="mt-2 mb-2">Alamat Jaminan</label>
                                                        <input type="text" id="2" class="form-control" name="nilai_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                        <label class="mt-2 mb-2">Pengikatan </label>
                                                        <select name="jenis_jaminan" class="form-select">
                                                            <option value="" disabled selected>- Silahkan Pilih -</option>
                                                            <option>A</option>
                                                            <option>B</option>
                                                            <option>C</option>
                                                            <option>LAINNYA</option>
                                                        </select>
                                                        <label class="mt-2 mb-2">Keterangan</label>
                                                        <input type="text" id="2" class="form-control" name="nilai_jaminan" oninput="this.value = this.value.toUpperCase()" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3 mb-3">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                        <button type="reset" class="btn btn-secondary">Batal</button>
                                    </div>



                                </form>

                                <div class="table-responsive mt-5">
                                    <table id="daftar_pasangan_pemohon_input_slik" class="table table-striped table-hover first display nowrap">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Aksi
                                                </th>
                                                <th>
                                                    Nama Bank
                                                </th>

                                                <th>
                                                    Jenis Fasilitas
                                                </th>
                                                <th>
                                                    Plafond
                                                </th>
                                                <th>
                                                    Bakidebet
                                                </th>
                                                <th>
                                                    Kolektibilitas
                                                </th>

                                                <th>
                                                    Jangka Waktu
                                                </th>
                                                <th>
                                                    Suku Bunga
                                                </th>
                                                <th>
                                                    Jenis Jaminan
                                                </th>
                                                <th>
                                                    Nilai Jaminan
                                                </th>
                                                <th>
                                                    Pemilik Jaminan
                                                </th>
                                                <th>
                                                    Alamat Jaminan
                                                </th>
                                                <th>
                                                    Pengikatan
                                                </th>
                                                <th>
                                                    Keterangan
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            <!-- <?php $a = 1;
                                                    foreach ($data['lihat_daftar_belum_slik'] as $row) : ?>
                                            <tr>

                                                <td><?= $a++ ?></td>
                                                <td><?= $row['no_permohonan_kredit'] ?></td>
                                                <td><?= $row['nama_pemohon'] ?></td>
                                                <td><?= $row['nama_instansi'] ?></td>

                                                <td><?= number_format($row['plafond_dimohon'], 0, ",", "."); ?></td>
                                                <td><?= $row['jangka_waktu'] ?></td>





                                                <td>
                                                    <a href="<?= BASEURL; ?>/slik/proses_slik">Proses slik</a>
                                                    <button data-toggle="modal" data-target="#log" class="btn  btn-m" style="background-color: #EC994B; color:white; ">Proses Slik</button>
                                                    <button data-toggle="modal" data-target="#detail" class="btn btn-success btn-m" data-id="<?= $row['id'] ?>" data-no_permohonan_kredit="<?= $row['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $row['nama_pemohon'] ?>" data-nama_instansi="<?= $row['nama_instansi'] ?>" data-tempat_lahir_pemohon="<?= $row['tempat_lahir_pemohon'] ?>">Detail</button>


                                                </td>

                                            </tr>
                                        <?php endforeach; ?> -->
                                        </tbody>
                                    </table>
                                </div>





                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">3</div>
                            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">4</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>





















<!-- saveee input data slik asli -->



<?php

if (!isset($_SESSION['edit'])) {
    $_SESSION['edit'] = '';
}


if ($_SESSION['edit'] == "edit pemohon") :

?>
    <main class="content">

        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 3"><strong><?= $data['judul'] ?></strong> </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">

                                    <table class="table-hover" cellpadding=5 cellspacing=15>
                                        <tr>
                                            <td>No. Permohonan Kredit</td>
                                            <td>:</td>
                                            <td id="65"><?= $data['get_daftar_belum_slik_id']['no_permohonan_kredit'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Permohonan</td>
                                            <td>:</td>
                                            <td id="66"><?= date("d-m-Y", strtotime($data['get_daftar_belum_slik_id']['tanggal_permohonan'])) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl SLIK</td>
                                            <td>:</td>
                                            <td id="67"><?= date('d-m-Y') ?></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>

                            <?php $a = 1;
                            foreach ($data['data_pemohon'] as $row) :
                                $jumlah_fasilitas_pemohon = $a++;
                            endforeach;

                            ?>


                            <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pemohon <span class="text-success"><?= $jumlah_fasilitas_pemohon ?> Fasilitas</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pasangan Pemohon <span class="text-success"><?= 0 ?> Fasilitas</span></a>
                                </li>

                            </ul>

                            <!-- Tab panes -->

                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form id="form_update_slik_pemohon" action="<?= BASEURL; ?>/slik/update_slik_pemohon" method="POST">
                                        <div class="row mt-2">
                                            <div class="col-lg-6">

                                                <table class="table-hover" cellpadding=5 cellspacing=15>
                                                    <tr>
                                                        <td>Nama Pemohon</td>
                                                        <td>:</td>
                                                        <td id="65"><?= $data['get_daftar_belum_slik_id']['nama_pemohon'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Instansi</td>
                                                        <td>:</td>
                                                        <td id="66"><?= $data['get_daftar_belum_slik_id']['nama_instansi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. KTP</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['no_ktp_pemohon'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat KTP</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_ktp_pemohon'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Alamat Saat Ini</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_sekarang_pemohon'] ?></td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div class="validate-error"></div>
                                                            <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama Bank</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="nama_bank" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option value="BNI" <?= "BNI" == $data['edit_data_pemohon']['nama_bank'] ? 'selected="selected"' : ''; ?>><?= "BNI" ?></option>
                                                                <option value="BRI" <?= "BRI" == $data['edit_data_pemohon']['nama_bank'] ? 'selected="selected"' : ''; ?>><?= "BRI" ?></option>
                                                                <option value="MANDIRI" <?= "MANDIRI" == $data['edit_data_pemohon']['nama_bank'] ? 'selected="selected"' : ''; ?>><?= "MANDIRI" ?></option>

                                                            </select>
                                                            <label class="mt-2 mb-2">Jenis Fasilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="jenis_fasilitas" class="form-select" required>
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option value="HGB" <?= "HGB" == $data['edit_data_pemohon']['jenis_fasilitas'] ? 'selected="selected"' : ''; ?>><?= "HGB" ?></option>
                                                                <option value="HAK MILIK" <?= "HAK MILIK" == $data['edit_data_pemohon']['jenis_fasilitas'] ? 'selected="selected"' : ''; ?>><?= "HAK MILIK" ?></option>
                                                                <option value="LAINNYA" <?= "LAINNYA" == $data['edit_data_pemohon']['jenis_fasilitas'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option>

                                                            </select>
                                                            <label class="mt-2 mb-2">Plafond (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="plafond" onwheel="return false;" value="<?= $data['edit_data_pemohon']['plafond'] ?>" required />
                                                            <label class="mt-2 mb-2">Bakidebet (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="bakidebet" onwheel="return false;" value="<?= $data['edit_data_pemohon']['bakidebet'] ?>" required />
                                                            <label class="mt-2 mb-2">Kolektibilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="kolektibilitas" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option value="1" <?= "1" == $data['edit_data_pemohon']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "1" ?></option>
                                                                <option value="2" <?= "2" == $data['edit_data_pemohon']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "2" ?></option>
                                                                <option value="3" <?= "3" == $data['edit_data_pemohon']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "3" ?></option>
                                                                <option value="4" <?= "4" == $data['edit_data_pemohon']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "4" ?></option>
                                                                <option value="5" <?= "5" == $data['edit_data_pemohon']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "5" ?></option>

                                                            </select>
                                                            <label class="mt-2 mb-2">Jangka Waktu</label><span class="ml-1" style="color:red;">*</span>
                                                            <div class="row">
                                                                <div class="col ">

                                                                    <input type="date" class="form-control" name="waktu_awal" value="<?= $data['edit_data_pemohon']['waktu_awal'] ?>">

                                                                </div>
                                                                <div class="col col-1 text-center">
                                                                    <p>s/d</p>
                                                                </div>

                                                                <div class="col">
                                                                    <input type="date" class="form-control" name="waktu_akhir" value="<?= $data['edit_data_pemohon']['waktu_akhir'] ?>">
                                                                </div>

                                                            </div>
                                                            <label class="mt-2 mb-2">Suka Bungaa % </label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" class="form-control" name="suku_bunga" value="<?= $data['edit_data_pemohon']['suku_bunga'] ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">

                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                            <select name="jenis_jaminan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option value="TANAH & BANGUNAN" <?= "TANAH & BANGUNAN" == $data['edit_data_pemohon']['jenis_jaminan'] ? 'selected="selected"' : ''; ?>><?= "TANAH & BANGUNAN" ?></option>
                                                                <option value="KENDARAAN BERMOTOR" <?= "KENDARAAN BERMOTOR" == $data['edit_data_pemohon']['jenis_jaminan'] ? 'selected="selected"' : ''; ?>><?= "KENDARAAN BERMOTOR" ?></option>
                                                                <option value="SIMPANAN" <?= "SIMPANAN" == $data['edit_data_pemohon']['jenis_jaminan'] ? 'selected="selected"' : ''; ?>><?= "SIMPANAN" ?></option>
                                                                <option value="LAINNYA" <?= "LAINNYA" == $data['edit_data_pemohon']['jenis_jaminan'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                            <input type="text" id="2" class="form-control input" name="nilai_jaminan" value="<?= $data['edit_data_pemohon']['nilai_jaminan'] ?>" />
                                                            <label class="mt-2 mb-2">Pemilik Jaminan </label>
                                                            <input type="text" id="2" class="form-control" name="pemilik_jaminan" value="<?= $data['edit_data_pemohon']['pemilik_jaminan'] ?>" oninput="this.value = this.value.toUpperCase()" />
                                                            <label class="mt-2 mb-2">Alamat Jaminan</label>
                                                            <input type="text" id="2" class="form-control" name="alamat_jaminan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['edit_data_pemohon']['alamat_jaminan'] ?>" />
                                                            <label class="mt-2 mb-2">Pengikatan </label>
                                                            <select name="pengikatan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>

                                                                <option value="A" <?= "A" == $data['edit_data_pemohon']['pengikatan'] ? 'selected="selected"' : ''; ?>><?= "A" ?></option>
                                                                <option value="B" <?= "B" == $data['edit_data_pemohon']['pengikatan'] ? 'selected="selected"' : ''; ?>><?= "B" ?></option>
                                                                <option value="C" <?= "C" == $data['edit_data_pemohon']['pengikatan'] ? 'selected="selected"' : ''; ?>><?= "C" ?></option>
                                                                <option value="LAINNYA" <?= "LAINNYA" == $data['edit_data_pemohon']['pengikatan'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option>

                                                            </select>
                                                            <label class="mt-2 mb-2">Keterangan</label>

                                                            <textarea name="keterangan" class="form-control h-25" rows="4" placeholder="" oninput="this.value = this.value.toUpperCase()"><?= $data['edit_data_pemohon']['keterangan'] ?></textarea>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3 mb-3">
                                            <button type="submit" class="btn btn-info">Update</button>
                                            <a onclick="btn_batal_update_slik_pemohon(event); return false" href="<?= BASEURL; ?>/slik/input_data_slik/<?= $data['id_slik'] ?>" class="btn btn-secondary me-2">Batal</a>
                                            <!-- <button onclick="location.href = '<?= BASEURL; ?>/slik/input_data_slik/<?= $data['id_slik'] ?>';" class="btn btn-secondary">Batal</button> -->
                                            <!-- <a href="<?= BASEURL; ?>/slik/input_data_slik/<?= $data['id_slik'] ?>" class="btn btn-secondary">Batal</a> -->
                                        </div>
                                    </form>





                                    <div class="table-responsive mt-5">
                                        <table id="daftar_pemohon_input_slik" class="table table-striped table-hover first display nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        Aksi
                                                    </th>
                                                    <th>
                                                        Nama Bank
                                                    </th>

                                                    <th>
                                                        Jenis Fasilitas
                                                    </th>
                                                    <th>
                                                        Plafond
                                                    </th>
                                                    <th>
                                                        Bakidebet
                                                    </th>
                                                    <th>
                                                        Kolektibilitas
                                                    </th>

                                                    <th>
                                                        Jangka Waktu
                                                    </th>
                                                    <th>
                                                        Suku Bunga
                                                    </th>
                                                    <th>
                                                        Jenis Jaminan
                                                    </th>
                                                    <th>
                                                        Nilai Jaminan
                                                    </th>
                                                    <th>
                                                        Pemilik Jaminan
                                                    </th>
                                                    <th>
                                                        Alamat Jaminan
                                                    </th>
                                                    <th>
                                                        Pengikatan
                                                    </th>
                                                    <th>
                                                        Keterangan
                                                    </th>


                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <?php $a = 1;
                                                foreach ($data['data_pemohon'] as $row) : ?>
                                                    <tr>

                                                        <td>

                                                            <a href="<?= BASEURL; ?>/slik/edit_pemohon_slik/<?= $row['id'] ?>" class="btn btn-primary btn-m">Edit</a>
                                                            <button class="btn btn-danger">Hapus</button>

                                                        </td>

                                                        <td><?= $row['nama_bank'] ?></td>
                                                        <td><?= $row['jenis_fasilitas'] ?></td>
                                                        <td><?= number_format($row['plafond'], 0, ",", ".");  ?></td>
                                                        <td><?= number_format($row['bakidebet'], 0, ",", ".");  ?></td>
                                                        <td><?= $row['kolektibilitas'] ?></td>
                                                        <td><?= date("d-m-Y", strtotime($row['waktu_awal'])) . ' s/d ' . date("d-m-Y", strtotime($row['waktu_akhir'])) ?></td>
                                                        <td><?= $row['suku_bunga'] ?></td>
                                                        <td><?= $row['jenis_jaminan'] ?></td>
                                                        <td><?= number_format($row['nilai_jaminan'], 0, ",", "."); ?></td>
                                                        <td><?= $row['pemilik_jaminan'] ?></td>
                                                        <td><?= $row['alamat_jaminan'] ?></td>
                                                        <td><?= $row['pengikatan'] ?></td>
                                                        <td><?= $row['keterangan'] ?></td>


                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>



                                </div>



                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row mt-2">
                                        <div class="col-lg-6">

                                            <table class="table-hover" cellpadding=5 cellspacing=15>
                                                <tr>
                                                    <td>Nama Pasangan</td>
                                                    <td>:</td>
                                                    <td id="65"><?= $data['get_daftar_belum_slik_id']['nama_pasangan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Instansi Pasangan</td>
                                                    <td>:</td>
                                                    <td id="66"><?= $data['get_daftar_belum_slik_id']['nama_instansi_pasangan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No. KTP Pasangan</td>
                                                    <td>:</td>
                                                    <td id="67"><?= $data['get_daftar_belum_slik_id']['no_ktp_pasangan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat KTP Pasangan</td>
                                                    <td>:</td>
                                                    <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_ktp_pasangan'] ?></td>
                                                </tr>

                                                <tr>
                                                    <td>Alamat Saat Ini Pasangan</td>
                                                    <td>:</td>
                                                    <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_sekarang_pasangan'] ?></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>



                                    <form action="">
                                        <div class="row mt-3">
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div class="validate-error"></div>
                                                            <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama Bank</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="jenis_sertifikat" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>BNI</option>
                                                                <option>BRI</option>
                                                                <option>MANDIRI</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Jenis Fasilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="jenis_sertifikat" class="form-select" required>
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>HGB</option>
                                                                <option>HAK MILIK</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Plafond (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="plafond_dimohon" onwheel="return false;" required />
                                                            <label class="mt-2 mb-2">Bakidebet (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="plafond_dimohon" onwheel="return false;" required />
                                                            <label class="mt-2 mb-2">Kolektibilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="jenis_sertifikat" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Jangka Waktu</label><span class="ml-1" style="color:red;">*</span>
                                                            <div class="row">
                                                                <div class="col ">
                                                                    <input type="date" class="form-control" placeholder="Tanggal Awal">

                                                                </div>
                                                                <div class="col col-1 text-center">
                                                                    <p>s/d</p>
                                                                </div>

                                                                <div class="col">
                                                                    <input type="date" class="form-control" placeholder="Tanggal Akhir">
                                                                </div>

                                                            </div>
                                                            <label class="mt-2 mb-2">Suka Bungaa % </label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" class="form-control" name="plafond_dimohon" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">

                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                            <select name="jenis_jaminan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>TANAH & BANGUNAN</option>
                                                                <option>KENDARAAN BERMOTOR</option>
                                                                <option>SIMPANAN</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                            <input type="text" id="2" class="form-control input" name="nilai_jaminan" />
                                                            <label class="mt-2 mb-2">Pemilik Jaminan </label>
                                                            <input type="text" id="2" class="form-control" name="nilai_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                            <label class="mt-2 mb-2">Alamat Jaminan</label>
                                                            <input type="text" id="2" class="form-control" name="nilai_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                            <label class="mt-2 mb-2">Pengikatan </label>
                                                            <select name="jenis_jaminan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>A</option>
                                                                <option>B</option>
                                                                <option>C</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Keterangan</label>
                                                            <input type="text" id="2" class="form-control" name="nilai_jaminan" oninput="this.value = this.value.toUpperCase()" />

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3 mb-3">
                                            <button type="submit" class="btn btn-info">Simpan</button>

                                            <button type="reset" class="btn btn-secondary">Batal</button>

                                        </div>



                                    </form>

                                    <div class="table-responsive mt-5">
                                        <table id="daftar_pasangan_pemohon_input_slik" class="table table-striped table-hover first display nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Aksi
                                                    </th>
                                                    <th>
                                                        Nama Bank
                                                    </th>

                                                    <th>
                                                        Jenis Fasilitas
                                                    </th>
                                                    <th>
                                                        Plafond
                                                    </th>
                                                    <th>
                                                        Bakidebet
                                                    </th>
                                                    <th>
                                                        Kolektibilitas
                                                    </th>

                                                    <th>
                                                        Jangka Waktu
                                                    </th>
                                                    <th>
                                                        Suku Bunga
                                                    </th>
                                                    <th>
                                                        Jenis Jaminan
                                                    </th>
                                                    <th>
                                                        Nilai Jaminan
                                                    </th>
                                                    <th>
                                                        Pemilik Jaminan
                                                    </th>
                                                    <th>
                                                        Alamat Jaminan
                                                    </th>
                                                    <th>
                                                        Pengikatan
                                                    </th>
                                                    <th>
                                                        Keterangan
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <!-- <?php $a = 1;
                                                        foreach ($data['lihat_daftar_belum_slik'] as $row) : ?>
                                            <tr>

                                                <td><?= $a++ ?></td>
                                                <td><?= $row['no_permohonan_kredit'] ?></td>
                                                <td><?= $row['nama_pemohon'] ?></td>
                                                <td><?= $row['nama_instansi'] ?></td>

                                                <td><?= number_format($row['plafond_dimohon'], 0, ",", "."); ?></td>
                                                <td><?= $row['jangka_waktu'] ?></td>





                                                <td>
                                                    <a href="<?= BASEURL; ?>/slik/proses_slik">Proses slik</a>
                                                    <button data-toggle="modal" data-target="#log" class="btn  btn-m" style="background-color: #EC994B; color:white; ">Proses Slik</button>
                                                    <button data-toggle="modal" data-target="#detail" class="btn btn-success btn-m" data-id="<?= $row['id'] ?>" data-no_permohonan_kredit="<?= $row['no_permohonan_kredit'] ?>" data-nama_pemohon="<?= $row['nama_pemohon'] ?>" data-nama_instansi="<?= $row['nama_instansi'] ?>" data-tempat_lahir_pemohon="<?= $row['tempat_lahir_pemohon'] ?>">Detail</button>


                                                </td>

                                            </tr>
                                        <?php endforeach; ?> -->
                                            </tbody>
                                        </table>
                                    </div>





                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">3</div>
                                <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">4</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php
elseif ($_SESSION['edit'] == "edit pasangan") :

?>


    <main class="content">

        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 3"><strong><?= $data['judul'] ?></strong> </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">

                                    <table class="table-hover" cellpadding=5 cellspacing=15>
                                        <tr>
                                            <td>No. Permohonan Kredit</td>
                                            <td>:</td>
                                            <td id="65"><?= $data['get_daftar_belum_slik_id']['no_permohonan_kredit'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Permohonan</td>
                                            <td>:</td>
                                            <td id="66"><?= date("d-m-Y", strtotime($data['get_daftar_belum_slik_id']['tanggal_permohonan'])) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl SLIK</td>
                                            <td>:</td>
                                            <td id="67"><?= date('d-m-Y') ?></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>

                            <?php $a = 1;
                            foreach ($data['data_pemohon'] as $row) :
                                $jumlah_fasilitas_pemohon = $a++;
                            endforeach;

                            ?>


                            <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pemohon <span class="text-success"><?= $jumlah_fasilitas_pemohon ?> Fasilitas</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pasangan Pemohon <span class="text-success"><?= 0 ?> Fasilitas</span></a>
                                </li>

                            </ul>

                            <!-- Tab panes -->

                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form id="form_update_slik_pemohon" action="<?= BASEURL; ?>/slik/update_slik_pemohon" method="POST">
                                        <div class="row mt-2">
                                            <div class="col-lg-6">

                                                <table class="table-hover" cellpadding=5 cellspacing=15>
                                                    <tr>
                                                        <td>Nama Pemohon</td>
                                                        <td>:</td>
                                                        <td id="65"><?= $data['get_daftar_belum_slik_id']['nama_pemohon'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Instansi</td>
                                                        <td>:</td>
                                                        <td id="66"><?= $data['get_daftar_belum_slik_id']['nama_instansi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. KTP</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['no_ktp_pemohon'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat KTP</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_ktp_pemohon'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Alamat Saat Ini</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_sekarang_pemohon'] ?></td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div class="validate-error"></div>
                                                            <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama Bank</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="nama_bank" class="form-select" required>
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>BNI</option>
                                                                <option>BRI</option>
                                                                <option>MANDIRI</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Jenis Fasilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="jenis_fasilitas" class="form-select" required>
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>HGB</option>
                                                                <option>HAK MILIK</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Plafond (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="plafond" onwheel="return false;" required />
                                                            <label class="mt-2 mb-2">Bakidebet (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="bakidebet" onwheel="return false;" required />
                                                            <label class="mt-2 mb-2">Kolektibilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="kolektibilitas" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Jangka Waktu</label><span class="ml-1" style="color:red;">*</span>
                                                            <div class="row">
                                                                <div class="col ">
                                                                    <input type="date" class="form-control" name="waktu_awal" placeholder="Tanggal Awal" id="date_timepicker_end">

                                                                </div>
                                                                <div class="col col-1 text-center">
                                                                    <p>s/d</p>
                                                                </div>

                                                                <div class="col">
                                                                    <input type="date" class="form-control" name="waktu_akhir" placeholder="Tanggal Akhir">
                                                                </div>

                                                            </div>
                                                            <label class="mt-2 mb-2">Suka Bunga % </label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" class="form-control" id="suku_bunga" name="suku_bunga" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">

                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                            <select name="jenis_jaminan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>TANAH & BANGUNAN</option>
                                                                <option>KENDARAAN BERMOTOR</option>
                                                                <option>SIMPANAN</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                            <input type="text" id="nilai_jaminan" class="form-control input" name="nilai_jaminan" required />
                                                            <label class="mt-2 mb-2">Pemilik Jaminan </label>
                                                            <input type="text" id="2" class="form-control" name="pemilik_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                            <label class="mt-2 mb-2">Alamat Jaminan</label>
                                                            <input type="text" id="2" class="form-control" name="alamat_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                            <label class="mt-2 mb-2">Pengikatan </label>
                                                            <select name="pengikatan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>A</option>
                                                                <option>B</option>
                                                                <option>C</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Keterangan</label>

                                                            <textarea name="keterangan" class="form-control h-25" rows="4" placeholder="" oninput="this.value = this.value.toUpperCase()"></textarea>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3 mb-3">
                                            <button type="submit" class="btn btn-info">Update</button>
                                            <a onclick="btn_batal_update_slik_pemohon(event); return false" href="<?= BASEURL; ?>/slik/input_data_slik/<?= $data['id_slik'] ?>" class="btn btn-secondary me-2">Batal</a>
                                            <!-- <button onclick="location.href = '<?= BASEURL; ?>/slik/input_data_slik/<?= $data['id_slik'] ?>';" class="btn btn-secondary">Batal</button> -->
                                            <!-- <a href="<?= BASEURL; ?>/slik/input_data_slik/<?= $data['id_slik'] ?>" class="btn btn-secondary">Batal</a> -->
                                        </div>
                                    </form>





                                    <div class="table-responsive mt-5">
                                        <table id="daftar_pemohon_input_slik" class="table table-striped table-hover first display nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        Aksi
                                                    </th>
                                                    <th>
                                                        Nama Bank
                                                    </th>

                                                    <th>
                                                        Jenis Fasilitas
                                                    </th>
                                                    <th>
                                                        Plafond
                                                    </th>
                                                    <th>
                                                        Bakidebet
                                                    </th>
                                                    <th>
                                                        Kolektibilitas
                                                    </th>

                                                    <th>
                                                        Jangka Waktu
                                                    </th>
                                                    <th>
                                                        Suku Bunga
                                                    </th>
                                                    <th>
                                                        Jenis Jaminan
                                                    </th>
                                                    <th>
                                                        Nilai Jaminan
                                                    </th>
                                                    <th>
                                                        Pemilik Jaminan
                                                    </th>
                                                    <th>
                                                        Alamat Jaminan
                                                    </th>
                                                    <th>
                                                        Pengikatan
                                                    </th>
                                                    <th>
                                                        Keterangan
                                                    </th>


                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <?php $a = 1;
                                                foreach ($data['lihat_daftar_slik_pasangan'] as $row) : ?>
                                                    <tr>

                                                        <td>

                                                            <a href="<?= BASEURL; ?>/slik/edit_pemohon_slik/<?= $row['id'] ?>" class="btn btn-primary btn-m">Edit</a>
                                                            <button class="btn btn-danger">Hapus</button>

                                                        </td>

                                                        <td><?= $row['nama_bank'] ?></td>
                                                        <td><?= $row['jenis_fasilitas'] ?></td>
                                                        <td><?= number_format($row['plafond'], 0, ",", ".");  ?></td>
                                                        <td><?= number_format($row['bakidebet'], 0, ",", ".");  ?></td>
                                                        <td><?= $row['kolektibilitas'] ?></td>
                                                        <td><?= date("d-m-Y", strtotime($row['waktu_awal'])) . ' s/d ' . date("d-m-Y", strtotime($row['waktu_akhir'])) ?></td>
                                                        <td><?= $row['suku_bunga'] ?></td>
                                                        <td><?= $row['jenis_jaminan'] ?></td>
                                                        <td><?= number_format($row['nilai_jaminan'], 0, ",", "."); ?></td>
                                                        <td><?= $row['pemilik_jaminan'] ?></td>
                                                        <td><?= $row['alamat_jaminan'] ?></td>
                                                        <td><?= $row['pengikatan'] ?></td>
                                                        <td><?= $row['keterangan'] ?></td>


                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>



                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                    <form id="form_update_slik_pemohon" action="<?= BASEURL; ?>/slik/update_slik_pemohon" method="POST">
                                        <div class="row mt-2">
                                            <div class="col-lg-6">
                                                <table class="table-hover" cellpadding=5 cellspacing=15>
                                                    <tr>
                                                        <td>Nama Pasangan</td>
                                                        <td>:</td>
                                                        <td id="65"><?= $data['get_daftar_belum_slik_id']['nama_pasangan'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Instansi Pasangan</td>
                                                        <td>:</td>
                                                        <td id="66"><?= $data['get_daftar_belum_slik_id']['nama_instansi_pasangan'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. KTP Pasangan</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['no_ktp_pasangan'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat KTP Pasangan</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_ktp_pasangan'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Alamat Saat Ini Pasangan</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_sekarang_pasangan'] ?></td>
                                                    </tr>

                                                </table>

                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div class="validate-error"></div>
                                                            <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama Bank</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="nama_bank" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option value="BNI" <?= "BNI" == $data['edit_data_pemohon']['nama_bank'] ? 'selected="selected"' : ''; ?>><?= "BNI" ?></option>
                                                                <option value="BRI" <?= "BRI" == $data['edit_data_pemohon']['nama_bank'] ? 'selected="selected"' : ''; ?>><?= "BRI" ?></option>
                                                                <option value="MANDIRI" <?= "MANDIRI" == $data['edit_data_pemohon']['nama_bank'] ? 'selected="selected"' : ''; ?>><?= "MANDIRI" ?></option>

                                                            </select>
                                                            <label class="mt-2 mb-2">Jenis Fasilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="jenis_fasilitas" class="form-select" required>
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option value="HGB" <?= "HGB" == $data['edit_data_pemohon']['jenis_fasilitas'] ? 'selected="selected"' : ''; ?>><?= "HGB" ?></option>
                                                                <option value="HAK MILIK" <?= "HAK MILIK" == $data['edit_data_pemohon']['jenis_fasilitas'] ? 'selected="selected"' : ''; ?>><?= "HAK MILIK" ?></option>
                                                                <option value="LAINNYA" <?= "LAINNYA" == $data['edit_data_pemohon']['jenis_fasilitas'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option>

                                                            </select>
                                                            <label class="mt-2 mb-2">Plafond (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="plafond" onwheel="return false;" value="<?= $data['edit_data_pemohon']['plafond'] ?>" required />
                                                            <label class="mt-2 mb-2">Bakidebet (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="bakidebet" onwheel="return false;" value="<?= $data['edit_data_pemohon']['bakidebet'] ?>" required />
                                                            <label class="mt-2 mb-2">Kolektibilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="kolektibilitas" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option value="1" <?= "1" == $data['edit_data_pemohon']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "1" ?></option>
                                                                <option value="2" <?= "2" == $data['edit_data_pemohon']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "2" ?></option>
                                                                <option value="3" <?= "3" == $data['edit_data_pemohon']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "3" ?></option>
                                                                <option value="4" <?= "4" == $data['edit_data_pemohon']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "4" ?></option>
                                                                <option value="5" <?= "5" == $data['edit_data_pemohon']['kolektibilitas'] ? 'selected="selected"' : ''; ?>><?= "5" ?></option>

                                                            </select>
                                                            <label class="mt-2 mb-2">Jangka Waktu</label><span class="ml-1" style="color:red;">*</span>
                                                            <div class="row">
                                                                <div class="col ">

                                                                    <input type="date" class="form-control" name="waktu_awal" value="<?= $data['edit_data_pemohon']['waktu_awal'] ?>">

                                                                </div>
                                                                <div class="col col-1 text-center">
                                                                    <p>s/d</p>
                                                                </div>

                                                                <div class="col">
                                                                    <input type="date" class="form-control" name="waktu_akhir" value="<?= $data['edit_data_pemohon']['waktu_akhir'] ?>">
                                                                </div>

                                                            </div>
                                                            <label class="mt-2 mb-2">Suka Bungaa % </label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" class="form-control" name="suku_bunga" value="<?= $data['edit_data_pemohon']['suku_bunga'] ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">

                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                            <select name="jenis_jaminan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option value="TANAH & BANGUNAN" <?= "TANAH & BANGUNAN" == $data['edit_data_pemohon']['jenis_jaminan'] ? 'selected="selected"' : ''; ?>><?= "TANAH & BANGUNAN" ?></option>
                                                                <option value="KENDARAAN BERMOTOR" <?= "KENDARAAN BERMOTOR" == $data['edit_data_pemohon']['jenis_jaminan'] ? 'selected="selected"' : ''; ?>><?= "KENDARAAN BERMOTOR" ?></option>
                                                                <option value="SIMPANAN" <?= "SIMPANAN" == $data['edit_data_pemohon']['jenis_jaminan'] ? 'selected="selected"' : ''; ?>><?= "SIMPANAN" ?></option>
                                                                <option value="LAINNYA" <?= "LAINNYA" == $data['edit_data_pemohon']['jenis_jaminan'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                            <input type="text" id="2" class="form-control input" name="nilai_jaminan" value="<?= $data['edit_data_pemohon']['nilai_jaminan'] ?>" />
                                                            <label class="mt-2 mb-2">Pemilik Jaminan </label>
                                                            <input type="text" id="2" class="form-control" name="pemilik_jaminan" value="<?= $data['edit_data_pemohon']['pemilik_jaminan'] ?>" oninput="this.value = this.value.toUpperCase()" />
                                                            <label class="mt-2 mb-2">Alamat Jaminan</label>
                                                            <input type="text" id="2" class="form-control" name="alamat_jaminan" oninput="this.value = this.value.toUpperCase()" value="<?= $data['edit_data_pemohon']['alamat_jaminan'] ?>" />
                                                            <label class="mt-2 mb-2">Pengikatan </label>
                                                            <select name="pengikatan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>

                                                                <option value="A" <?= "A" == $data['edit_data_pemohon']['pengikatan'] ? 'selected="selected"' : ''; ?>><?= "A" ?></option>
                                                                <option value="B" <?= "B" == $data['edit_data_pemohon']['pengikatan'] ? 'selected="selected"' : ''; ?>><?= "B" ?></option>
                                                                <option value="C" <?= "C" == $data['edit_data_pemohon']['pengikatan'] ? 'selected="selected"' : ''; ?>><?= "C" ?></option>
                                                                <option value="LAINNYA" <?= "LAINNYA" == $data['edit_data_pemohon']['pengikatan'] ? 'selected="selected"' : ''; ?>><?= "LAINNYA" ?></option>

                                                            </select>
                                                            <label class="mt-2 mb-2">Keterangan</label>

                                                            <textarea name="keterangan" class="form-control h-25" rows="4" placeholder="" oninput="this.value = this.value.toUpperCase()"><?= $data['edit_data_pemohon']['keterangan'] ?></textarea>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3 mb-3">
                                            <button type="submit" class="btn btn-info">Update</button>
                                            <a onclick="btn_batal_update_slik_pemohon(event); return false" href="<?= BASEURL; ?>/slik/input_data_slik/<?= $data['id_slik'] ?>" class="btn btn-secondary me-2">Batal</a>
                                            <!-- <button onclick="location.href = '<?= BASEURL; ?>/slik/input_data_slik/<?= $data['id_slik'] ?>';" class="btn btn-secondary">Batal</button> -->
                                            <!-- <a href="<?= BASEURL; ?>/slik/input_data_slik/<?= $data['id_slik'] ?>" class="btn btn-secondary">Batal</a> -->
                                        </div>
                                    </form>

                                    <div class="table-responsive mt-5">
                                        <table id="daftar_pasangan_pemohon_input_slik" class="table table-striped table-hover first display nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Aksi
                                                    </th>
                                                    <th>
                                                        Nama Bank
                                                    </th>

                                                    <th>
                                                        Jenis Fasilitas
                                                    </th>
                                                    <th>
                                                        Plafond
                                                    </th>
                                                    <th>
                                                        Bakidebet
                                                    </th>
                                                    <th>
                                                        Kolektibilitas
                                                    </th>

                                                    <th>
                                                        Jangka Waktu
                                                    </th>
                                                    <th>
                                                        Suku Bunga
                                                    </th>
                                                    <th>
                                                        Jenis Jaminan
                                                    </th>
                                                    <th>
                                                        Nilai Jaminan
                                                    </th>
                                                    <th>
                                                        Pemilik Jaminan
                                                    </th>
                                                    <th>
                                                        Alamat Jaminan
                                                    </th>
                                                    <th>
                                                        Pengikatan
                                                    </th>
                                                    <th>
                                                        Keterangan
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <?php $a = 1;
                                                foreach ($data['lihat_daftar_slik_pasangan'] as $row) : ?>
                                                    <tr>

                                                        <td>

                                                            <a href="<?= BASEURL; ?>/slik/edit_pemohon_slik/<?= $row['id'] ?>" class="btn btn-primary btn-m">Edit</a>
                                                            <button class="btn btn-danger">Hapus</button>

                                                        </td>

                                                        <td><?= $row['nama_bank'] ?></td>
                                                        <td><?= $row['jenis_fasilitas'] ?></td>
                                                        <td><?= number_format($row['plafond'], 0, ",", ".");  ?></td>
                                                        <td><?= number_format($row['bakidebet'], 0, ",", ".");  ?></td>
                                                        <td><?= $row['kolektibilitas'] ?></td>
                                                        <td><?= date("d-m-Y", strtotime($row['waktu_awal'])) . ' s/d ' . date("d-m-Y", strtotime($row['waktu_akhir'])) ?></td>
                                                        <td><?= $row['suku_bunga'] ?></td>
                                                        <td><?= $row['jenis_jaminan'] ?></td>
                                                        <td><?= number_format($row['nilai_jaminan'], 0, ",", "."); ?></td>
                                                        <td><?= $row['pemilik_jaminan'] ?></td>
                                                        <td><?= $row['alamat_jaminan'] ?></td>
                                                        <td><?= $row['pengikatan'] ?></td>
                                                        <td><?= $row['keterangan'] ?></td>


                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>





                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">3</div>
                                <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">4</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php

else :

?>

    <main class="content">

        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 3"><strong><?= $data['judul'] ?></strong> </h1>

                </div>



            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">

                                    <table class="table-hover" cellpadding=5 cellspacing=15>
                                        <tr>
                                            <td>No. Permohonan Kredit</td>
                                            <td>:</td>
                                            <td id="65"><?= $data['get_daftar_belum_slik_id']['no_permohonan_kredit'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Permohonan</td>
                                            <td>:</td>
                                            <td id="66"><?= date("d-m-Y", strtotime($data['get_daftar_belum_slik_id']['tanggal_permohonan'])) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl SLIK</td>
                                            <td>:</td>
                                            <td id="67"><?= date("d-m-Y") ?></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>





                            <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pemohon (<span><?= $data['jumlah_data_tabel_slik_pemohon'] ?> Fasilitas)</span> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pasangan (<span class=""><?= $data['jumlah_data_tabel_slik_pasangan'] ?> Fasilitas)</span></a>
                                </li>

                            </ul>

                            <!-- Tab panes -->

                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form id="form_slik_simpan_data_pemohon" action="<?= BASEURL; ?>/slik/simpan_slik_pemohon" method="POST">
                                        <div class="row mt-2">
                                            <div class="col-lg-6">

                                                <table class="table-hover" cellpadding=5 cellspacing=15>
                                                    <tr>
                                                        <td>Nama Pemohon</td>
                                                        <td>:</td>
                                                        <td id="65"><?= $data['get_daftar_belum_slik_id']['nama_pemohon'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Instansi</td>
                                                        <td>:</td>
                                                        <td id="66"><?= $data['get_daftar_belum_slik_id']['nama_instansi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. KTP</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['no_ktp_pemohon'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat KTP</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_ktp_pemohon'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Alamat Saat Ini</td>
                                                        <td>:</td>
                                                        <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_sekarang_pemohon'] ?></td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div class="validate-error"></div>
                                                            <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama Bank</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="nama_bank" class="form-select" required>
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>BNI</option>
                                                                <option>BRI</option>
                                                                <option>MANDIRI</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Jenis Fasilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="jenis_fasilitas" class="form-select" required>
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>HGB</option>
                                                                <option>HAK MILIK</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Plafond (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="plafond" onwheel="return false;" required />
                                                            <label class="mt-2 mb-2">Bakidebet (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="bakidebet" onwheel="return false;" required />
                                                            <label class="mt-2 mb-2">Kolektibilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="kolektibilitas" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Jangka Waktu</label><span class="ml-1" style="color:red;">*</span>
                                                            <div class="row">
                                                                <div class="col ">
                                                                    <input type="date" class="form-control" name="waktu_awal" placeholder="Tanggal Awal" id="date_timepicker_end">

                                                                </div>
                                                                <div class="col col-1 text-center">
                                                                    <p>s/d</p>
                                                                </div>

                                                                <div class="col">
                                                                    <input type="date" class="form-control" name="waktu_akhir" placeholder="Tanggal Akhir">
                                                                </div>

                                                            </div>
                                                            <label class="mt-2 mb-2">Suka Bunga % </label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" class="form-control" id="suku_bunga" name="suku_bunga" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">

                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                            <select name="jenis_jaminan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>TANAH & BANGUNAN</option>
                                                                <option>KENDARAAN BERMOTOR</option>
                                                                <option>SIMPANAN</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                            <input type="text" id="nilai_jaminan" class="form-control input" name="nilai_jaminan" required />
                                                            <label class="mt-2 mb-2">Pemilik Jaminan </label>
                                                            <input type="text" id="2" class="form-control" name="pemilik_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                            <label class="mt-2 mb-2">Alamat Jaminan</label>
                                                            <input type="text" id="2" class="form-control" name="alamat_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                            <label class="mt-2 mb-2">Pengikatan </label>
                                                            <select name="pengikatan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>A</option>
                                                                <option>B</option>
                                                                <option>C</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Keterangan</label>

                                                            <textarea name="keterangan" class="form-control h-25" rows="4" placeholder="" oninput="this.value = this.value.toUpperCase()"></textarea>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group form-check mt-1">
                                            <input type="checkbox" name="cekbox" class="form-check-input" id="cekbox">
                                            <label class="form-check-label" for="cekbox">Data Tidak Ditemukan</label>
                                        </div> -->

                                        <div class="mt-3 mb-3 d-flex justify-content-between ">
                                            <div>
                                                <button type="submit" class="btn btn-info">Simpan</button>
                                                <button type="reset" class="btn btn-secondary">Batal</button>
                                            </div>


                                            <a onclick="btn_data_tidak_ditemukan(event); return false" id="btn_data_tidak_ditemukan" class="btn btn-danger d-flex justify-content-end" href="<?= BASEURL; ?>/slik/slik_pemohon_tidak_ditemukan/<?= $data['get_daftar_belum_slik_id']['no_permohonan_kredit'] ?>">Data SLIK Tidak Ditemukan</a>

                                        </div>

                                    </form>





                                    <div class="table-responsive mt-5">
                                        <table id="daftar_pemohon_input_slik" class="table table-striped table-hover first display nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        Aksi
                                                    </th>
                                                    <th>
                                                        Nama Bank
                                                    </th>

                                                    <th>
                                                        Jenis Fasilitas
                                                    </th>
                                                    <th>
                                                        Plafond
                                                    </th>
                                                    <th>
                                                        Bakidebet
                                                    </th>
                                                    <th>
                                                        Kolektibilitas
                                                    </th>

                                                    <th>
                                                        Jangka Waktu
                                                    </th>
                                                    <th>
                                                        Suku Bunga
                                                    </th>
                                                    <th>
                                                        Jenis Jaminan
                                                    </th>
                                                    <th>
                                                        Nilai Jaminan
                                                    </th>
                                                    <th>
                                                        Pemilik Jaminan
                                                    </th>
                                                    <th>
                                                        Alamat Jaminan
                                                    </th>
                                                    <th>
                                                        Pengikatan
                                                    </th>
                                                    <th>
                                                        Keterangan
                                                    </th>


                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <?php $a = 1;
                                                foreach ($data['data_pemohon'] as $row) : ?>
                                                    <tr>

                                                        <td>

                                                            <a href="<?= BASEURL; ?>/slik/edit_pemohon_slik/<?= $row['id'] ?>" class="btn btn-primary btn-m">Edit</a>

                                                            <a onclick="hapus_pemohon_slik(event); return false" href="<?= BASEURL; ?>/slik/hapus_pemohon_slik/<?= $row['id'] ?>" class="btn btn-danger btn-m ">Hapus</a>

                                                        </td>

                                                        <td><?= $row['nama_bank'] ?></td>
                                                        <td><?= $row['jenis_fasilitas'] ?></td>
                                                        <td><?= number_format($row['plafond'], 0, ",", ".");   ?></td>
                                                        <td><?= number_format($row['bakidebet'], 0, ",", ".");  ?></td>
                                                        <td><?= $row['kolektibilitas'] ?></td>
                                                        <td><?= date("d-m-Y", strtotime($row['waktu_awal'])) . ' s/d ' . date("d-m-Y", strtotime($row['waktu_akhir'])) ?></td>
                                                        <td><?= $row['suku_bunga'] ?></td>
                                                        <td><?= $row['jenis_jaminan'] ?></td>
                                                        <td><?= number_format($row['nilai_jaminan'], 0, ",", ".");  ?></td>
                                                        <td><?= $row['pemilik_jaminan'] ?></td>
                                                        <td><?= $row['alamat_jaminan'] ?></td>
                                                        <td><?= $row['pengikatan'] ?></td>
                                                        <td><?= $row['keterangan'] ?></td>


                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>



                                </div>



                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row mt-2">
                                        <div class="col-lg-6">

                                            <table class="table-hover" cellpadding=5 cellspacing=15>
                                                <tr>
                                                    <td>Nama Pasangan</td>
                                                    <td>:</td>
                                                    <td id="65"><?= $data['get_daftar_belum_slik_id']['nama_pasangan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Instansi Pasangan</td>
                                                    <td>:</td>
                                                    <td id="66"><?= $data['get_daftar_belum_slik_id']['nama_instansi_pasangan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No. KTP Pasangan</td>
                                                    <td>:</td>
                                                    <td id="67"><?= $data['get_daftar_belum_slik_id']['no_ktp_pasangan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat KTP Pasangan</td>
                                                    <td>:</td>
                                                    <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_ktp_pasangan'] ?></td>
                                                </tr>

                                                <tr>
                                                    <td>Alamat Saat Ini Pasangan</td>
                                                    <td>:</td>
                                                    <td id="67"><?= $data['get_daftar_belum_slik_id']['alamat_sekarang_pasangan'] ?></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>



                                    <form id="form_slik_simpan_data_pasangan" action="<?= BASEURL; ?>/slik/simpan_slik_pasangan" method="POST">
                                        <div class="row mt-3">
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div class="validate-error"></div>
                                                            <label class="mt-2 mb-2" data-toggle="tooltip" title="Hooray!">Nama Bank</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="nama_bank" class="form-select" required>
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>BNI</option>
                                                                <option>BRI</option>
                                                                <option>MANDIRI</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Jenis Fasilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="jenis_fasilitas" class="form-select" required>
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>HGB</option>
                                                                <option>HAK MILIK</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Plafond (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="plafond" onwheel="return false;" required />
                                                            <label class="mt-2 mb-2">Bakidebet (Rp)</label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" id="1" class="form-control input" name="bakidebet" onwheel="return false;" required />
                                                            <label class="mt-2 mb-2">Kolektibilitas</label><span class="ml-1" style="color:red;">*</span>
                                                            <select name="kolektibilitas" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Jangka Waktu</label><span class="ml-1" style="color:red;">*</span>
                                                            <div class="row">
                                                                <div class="col ">
                                                                    <input type="date" class="form-control" name="waktu_awal" placeholder="Tanggal Awal" id="date_timepicker_end">

                                                                </div>
                                                                <div class="col col-1 text-center">
                                                                    <p>s/d</p>
                                                                </div>

                                                                <div class="col">
                                                                    <input type="date" class="form-control" name="waktu_akhir" placeholder="Tanggal Akhir">
                                                                </div>

                                                            </div>
                                                            <label class="mt-2 mb-2">Suka Bunga % </label><span class="ml-1" style="color:red;">*</span>
                                                            <input type="text" class="form-control" id="suku_bunga" name="suku_bunga" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xxl-6 ">
                                                <div class="">
                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="mt-2 mb-2">Jenis Jaminan</label>
                                                            <select name="jenis_jaminan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>TANAH & BANGUNAN</option>
                                                                <option>KENDARAAN BERMOTOR</option>
                                                                <option>SIMPANAN</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Nilai Perkiraan Jaminan (Rp) </label>
                                                            <input type="text" id="nilai_jaminan" class="form-control input" name="nilai_jaminan" required />
                                                            <label class="mt-2 mb-2">Pemilik Jaminan </label>
                                                            <input type="text" id="2" class="form-control" name="pemilik_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                            <label class="mt-2 mb-2">Alamat Jaminan</label>
                                                            <input type="text" id="2" class="form-control" name="alamat_jaminan" oninput="this.value = this.value.toUpperCase()" />
                                                            <label class="mt-2 mb-2">Pengikatan </label>
                                                            <select name="pengikatan" class="form-select">
                                                                <option value="" disabled selected>- Silahkan Pilih -</option>
                                                                <option>A</option>
                                                                <option>B</option>
                                                                <option>C</option>
                                                                <option>LAINNYA</option>
                                                            </select>
                                                            <label class="mt-2 mb-2">Keterangan</label>
                                                            <textarea name="keterangan" class="form-control h-25" rows="4" placeholder="" oninput="this.value = this.value.toUpperCase()"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 mb-3 d-flex justify-content-between ">
                                            <div>
                                                <button type="submit" class="btn btn-info">Simpan</button>
                                                <button type="reset" class="btn btn-secondary">Batal</button>
                                            </div>
                                            <a onclick="btn_data_tidak_ditemukan(event); return false" id="btn_data_tidak_ditemukan" class="btn btn-danger d-flex justify-content-end" href="<?= BASEURL; ?>/slik/slik_pemohon_tidak_ditemukan/<?= $data['get_daftar_belum_slik_id']['no_permohonan_kredit'] ?>">Data SLIK Tidak Ditemukan</a>
                                        </div>
                                    </form>

                                    <div class="table-responsive mt-5">
                                        <table id="daftar_pasangan_pemohon_input_slik" class="table table-striped table-hover first display nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Aksi
                                                    </th>
                                                    <th>
                                                        Nama Bank
                                                    </th>

                                                    <th>
                                                        Jenis Fasilitas
                                                    </th>
                                                    <th>
                                                        Plafond
                                                    </th>
                                                    <th>
                                                        Bakidebet
                                                    </th>
                                                    <th>
                                                        Kolektibilitas
                                                    </th>

                                                    <th>
                                                        Jangka Waktu
                                                    </th>
                                                    <th>
                                                        Suku Bunga
                                                    </th>
                                                    <th>
                                                        Jenis Jaminan
                                                    </th>
                                                    <th>
                                                        Nilai Jaminan
                                                    </th>
                                                    <th>
                                                        Pemilik Jaminan
                                                    </th>
                                                    <th>
                                                        Alamat Jaminan
                                                    </th>
                                                    <th>
                                                        Pengikatan
                                                    </th>
                                                    <th>
                                                        Keterangan
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <?php $a = 1;
                                                foreach ($data['lihat_daftar_slik_pasangan'] as $row) : ?>
                                                    <tr>
                                                        <td>
                                                            <a href="<?= BASEURL; ?>/slik/edit_data_slik_pasangan/<?= $row['id'] ?>" class="btn btn-primary btn-m">Edit</a>
                                                            <a onclick="hapus_pemohon_slik(event); return false" href="<?= BASEURL; ?>/slik/hapus_pemohon_slik/<?= $row['id'] ?>" class="btn btn-danger btn-m ">Hapus</a>
                                                        </td>
                                                        <td><?= $row['nama_bank'] ?></td>
                                                        <td><?= $row['jenis_fasilitas'] ?></td>
                                                        <td><?= number_format($row['plafond'], 0, ",", ".");   ?></td>
                                                        <td><?= number_format($row['bakidebet'], 0, ",", ".");  ?></td>
                                                        <td><?= $row['kolektibilitas'] ?></td>
                                                        <td><?= date("d-m-Y", strtotime($row['waktu_awal'])) . ' s/d ' . date("d-m-Y", strtotime($row['waktu_akhir'])) ?></td>
                                                        <td><?= $row['suku_bunga'] ?></td>
                                                        <td><?= $row['jenis_jaminan'] ?></td>
                                                        <td><?= number_format($row['nilai_jaminan'], 0, ",", ".");  ?></td>
                                                        <td><?= $row['pemilik_jaminan'] ?></td>
                                                        <td><?= $row['alamat_jaminan'] ?></td>
                                                        <td><?= $row['pengikatan'] ?></td>
                                                        <td><?= $row['keterangan'] ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">3</div>
                                <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



<?php

endif
?>