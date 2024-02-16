<?php $a = 1;
foreach ($data['data'] as $row) : ?>
    <tr>

        <td><?= $a++ ?></td>

        <td><?= $row['no_permohonan_kredit'] ?></td>
        <td><?= $row['nama_debitur'] ?></td>


        <td><?= $row['nama_instansi'] ?></td>
        <td><?= $row['no_pk'] ?></td>
        <td><?= number_format($row['plafond'], 0, ',', '.')  ?></td>
        <td><?= $row['jangka_waktu'] ?></td>

        <td><?= isset($row['tanggal_permohonan']) ? date('d-m-Y', strtotime($row['tanggal_permohonan'])) : ''  ?></td>
        <td><?= isset($row['tgl_mulai_jw']) ? date('d-m-Y', strtotime($row['tgl_mulai_jw'])) : ''  ?></td>



        <td>


            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_cetak" data-no_permohonan_kredit='<?= $row['no_permohonan_kredit'] ?>'>Cetak Berkas Kredit</button>
            <!-- <a href="<?= BASEURL; ?>/cetak/cetak_pk/<?= $row['no_permohonan_kredit'] ?>" class='btn btn-sm' style="background: <?= w_ungu ?>;  color:white;" target='_blank'>CETAK PK</a> -->
            <a href="<?= BASEURL; ?>/pencairan/edit_pencairan/<?= $row['no_permohonan_kredit'] ?>" class="btn btn-primary btn-sm">Edit</a>
            <!-- <a onclick='hapus(event); return false' href="<?= BASEURL; ?>/pencairan/hapus/<?= $row['no_permohonan_kredit'] ?>" class="btn btn-danger btn-sm">Hapus</a> -->
            <button class="btn btn-sm detail" style="background-color: <?= w_orange ?>; color :white" data-id="<?= $row['no_permohonan_kredit'] ?>" data-toggle="modal" data-target="#detail">Detail</button>



        </td>

    </tr>
<?php endforeach; ?>





<div class="table-responsive">
    <table id="example1" class="table table-striped table-hover first display nowrap ">
        <thead>
            <tr>

                <th>
                    No
                </th>


                <th>
                    No. Reg
                </th>

                <th>
                    Nama Debitur
                </th>

                <th>
                    Instansi
                </th>
                <th>
                    Nomor PK
                </th>
                <th>
                    Plafond
                </th>
                <th>
                    JW (bln)
                </th>
                <th>
                    Tgl. Masuk
                </th>
                <th>
                    Tgl. Pencairan
                </th>


                <th>
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>