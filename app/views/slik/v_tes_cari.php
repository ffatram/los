<main class="content">
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-header">
                <h1 class="h3 3"><strong>Daftar Permohonan Kredit</strong> </h1>
                <!-- <h1 class="h3 d-inline align-middle"><?= $data['judul'] ?></h1> -->
            </div>
        </div>

        <form action="<?= BASEURL; ?>/slik/tes_cari" method="POST">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="h4"><strong>Cari Data Pemohon/Instansi</strong></h1>
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="no_ktp" placeholder="Cari data " aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class=" btn btn-info btn-sm input-group-text" id="basic-addon2" name="btn_cari">Cari</button>
                                    <!-- <span class="input-group-text" id="basic-addon2" type="submit" name="btn_cari">Cari</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="h4"><strong>Filter Tampilan </strong></h1>
                        </div>
                        <div class="card-body">
                            <div class="btn-group d-flex justify-content-center" role="group" aria-label="First group">
                                <button class="btn btn-info" name="btn_hari_ini">Hari ini</button>
                                <button class="btn btn-info" name="btn_bulan_ini">Bulan ini</button>
                                <button class="btn btn-info" name="btn_tahun_ini">Tahun ini</button>
                                <button class="btn btn-info" name="btn_semuanya">Semuanya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>





        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="tbl_slik_sudah_slik" class="table table-striped table-hover first display nowrap">
                                <thead>
                                    <tr>

                                        <th>
                                            #
                                        </th>
                                        <th>
                                            No Pemohon
                                        </th>

                                        <th>
                                            No. no_ktp
                                        </th>
                                        <th>
                                            Kode Cababang
                                        </th>
                                        <th>
                                            Status
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="">
                                    <?php $a = 1;



                                    foreach ($data['dataok'] as $row) : ?>
                                        <tr>

                                            <td><?= $a++ ?></td>
                                            <td><?= $row['nama_pemohon'] ?></td>
                                            <td><?= $row['no_ktp'] ?></td>
                                            <td><?= $row['kode_cabang'] ?></td>
                                            <td><?= $row['status'] ?></td>

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
</main>