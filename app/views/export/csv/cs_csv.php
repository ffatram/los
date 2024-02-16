<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: sans-serif;
            text-align: center;
        }
    </style>
</head>



<body>


    <?php


    $filename = 'DAFTAR-PERMOHONAN-KREDIT-' . date('d-m-Y') . '.xls';

    header("Content-type: application/vnd-ms-excel");
    header('Content-Disposition: attachment; filename=' . $filename);


    ?>




    <table border="1" align="center" width="500">
        <thead>
            <tr>
                <th>No</th>
                <th>No Permohonan Kredit</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $a = 1;
            foreach ($data as $row) :
            ?>
                <tr>
                    <td> <?= $a++; ?></td>
                    <td><?= $row['no_permohonan_kredit'] ?></td>
                    <td><?= $row['nama_pemohon']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


   




</body>

</html>