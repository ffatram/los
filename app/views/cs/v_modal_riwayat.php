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
                                    <th>
                                        Aksi
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="">
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

                                        <td><button class="btn btn_detail_all" style="background-color: <?= w_orange ?>; color:white" data-toggle="modal" data-target="#detail_all" data-id="<?= $row['no_permohonan_kredit'] ?>">Lihat detail</button></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

