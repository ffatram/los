<table class='table-hover' cellpadding=5 cellspacing=15>
    <h3 class='h5'><strong>Data Pemohon</strong> </h3>
    <tbody>
        <tr>
            <td>Nama Pemohon</td>
            <td>:</td>
            <td></td>
        </tr>
    </tbody>
</table>

<div class='card'>
    <div class='card-body'>

    </div>
</div>



<div class='table-responsive mt-5'>
    <table id='daftar_pemohon_input_slik' class='table table-striped table-hover first display nowrap'>
        <thead>
            <tr>
                <th class='text-center'>
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
        <tbody>
            
        </tbody>
    </table>
</div>



<?php $a = 1;
            foreach ($data['get_daftar_slik_pemohon_where_no_req'] as $row) : ?>
                <tr>

                    <td>

                        <a href='<?= BASEURL; ?>/slik/edit_data_slik_pemohon/<?= $row['id'] ?>' class='btn btn-primary btn-m'>Edit</a>

                        <a onclick='hapus_pemohon_slik(event); return false' href='<?= BASEURL; ?>/slik/hapus_pemohon_slik/<?= $row['id'] ?>' class='btn btn-danger btn-m '>Hapus</a>

                    </td>

                    <td><?= $row['nama_bank'] ?></td>
                    <td><?= $row['jenis_fasilitas'] ?></td>
                    <td><?= number_format($row['plafond'], 0, ',', '.');   ?></td>
                    <td><?= number_format($row['bakidebet'], 0, ',', '.');  ?></td>
                    <td><?= $row['kolektibilitas'] ?></td>
                    <td><?= date('d-m-Y', strtotime($row['waktu_awal'])) . ' s/d ' . date('d-m-Y', strtotime($row['waktu_akhir'])) ?></td>
                    <td><?= $row['suku_bunga'] ?></td>
                    <td><?= $row['jenis_jaminan'] ?></td>
                    <td><?= number_format($row['nilai_jaminan'], 0, ',', '.');  ?></td>
                    <td><?= $row['pemilik_jaminan'] ?></td>
                    <td><?= $row['alamat_jaminan'] ?></td>
                    <td><?= $row['pengikatan'] ?></td>
                    <td><?= $row['keterangan'] ?></td>


                </tr>
            <?php endforeach; ?>