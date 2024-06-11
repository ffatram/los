<thead>
    <tr>

        <th>
            No.
        </th>

        <th>
            No. Reg
        </th>

        <th>
            Cabang
        </th>

        <th>
            Nama Pemohon
        </th>
        <th>
            Instansi
        </th>

        <th>
            Tipe Kredit
        </th>

        <th>
            Tgl. Masuk
        </th>

        <th>
            Plafond
        </th>

        <th>
            Jangka Waktu
        </th>

        <th>
            <?= level_3?>
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

    if (isset($data['data'])) {
        foreach ($data['data'] as $row) : ?>
            <tr>

                <td><?= $a++ ?></td>
                <td><?= $row['no_permohonan_kredit'] ?></td>
                <td><?= $row['kode_cabang'] ?></td>
                <td><?= $row['nama_pemohon'] ?></td>
                <td><?= $row['nama_instansi'] ?></td>
                <td><?= $row['tipe_kredit'] ?></td>
                <td><?= date('d-m-Y', strtotime($row['tanggal_permohonan']))  ?></td>
                <td><?= number_format(($row['plafond']), 0, ",", "."); ?></td>
                <td><?= $row['jangka_waktu'] ?></td>
                <td><?= $row['id_analis'] ?></td>

                <?php
                if (strpos($row['status'], "DIPENDING") !== false) {

                    $pecah = explode(" ", $row['status']);
                    //mencari element array 0
                    $hasil = $pecah[2];

                ?>
                    <td> <a href="" data-toggle="modal" data-target="#modal_catatan_pending" data-catatan_pending="<?= $row['catatan_pending'] ?>" data-status="<?= $hasil ?>"><?= $row['status'] ?> </a> </td>

                <?php } else { ?>

                    <td> <?= $row['status'] ?> </td>

                <?php } ?>

                <td>
                    <!-- <button type="button" id="btn_modal_proses_komite" data-toggle="modal" data-target="#modal_proses_komite" data-id="<?= $row['no_permohonan_kredit'] ?>" class="btn btn-success" data-backdrop="static" data-keyboard="false">Proses Komite</button> -->
                    <button type="button" class="btn btn-success btn_modal_proses_komite" data-id="<?= $row['no_permohonan_kredit'] ?>">Proses Komite</button>
                </td>

            </tr>
    <?php endforeach;
    }
    ?>
</tbody>



