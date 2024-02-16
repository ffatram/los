<div class="row mt-3">
    <div class="col-md-12">
        <div class="p-0">
            <table class="example3 table table-striped example1">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th style="width: 10px">No Permohonan Kredit</th>
                        <th style="width: 10px">Nama Pemohon</th>
                        <th style="width: 10px">Username</th>
                        <th style="width: 10px">Date</th>
                        <th style="width: 10px">Keterangan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $a = 1;
                    foreach ($data['log'] as $row) {
                    ?>
                        <tr>
                            <td><?= $a++ ?></td>
                            <td><?= $row['no_permohonan_kredit'] ?></td>
                            <td><?= $row['nama_pemohon'] ?></td>
                            <td><?= $row['username'] ?></td>


                            <td><?= isset($row['update_date']) ? date('d-m-Y H:i:s', strtotime($row['update_date'])) : '' ?></td>
                            <td><?= $row['keterangan'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


</div>


