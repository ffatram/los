<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR HASIL SLIK</title>


    <style type="text/css" media="screen, print">
        #footer,

        td {
            /* font-size: 8px; */
            text-align: left;
            border: 0px;
            border-collapse: collapse;
        }

        #tbl_slik,
        td {
            text-align: left;
            border: 1px solid;
            border-collapse: collapse;
        }

        #tbl_slik,
        th {

            text-align: center;
            border: 1px solid;
            border-collapse: collapse;
        }

        /* #tbl_slik,
        td {
            
        } */



        #thead_slik {
            font-size: 9px;
        }

        #tengah {
            text-align: center;
        }

        @page {
            size: landscape;

        }


        @media print {

            body {
                font-size: 9px;
                font-family: "TAHOMA";
                padding-bottom: 20px;
            }

            .divFooter {
                position: fixed;
                bottom: 0;
                font-size: 9px;
            }



        }

        @media screen {
            body {
                display: none;
            }
        }




        @media screen {
            body {
                display: none;
            }
        }
    </style>


</head>

<body>


    <h2 id="tengah">DAFTAR HASIL SLIK</h2>

    <table id="footer" style="border: none ;">

        <tr id="footer">
            <td id="footer">No. Permohonan Kredit</td>
            <td id="footer">:</td>
            <td id="footer"><?= $data['detail_slik_cs']['no_permohonan_kredit'] ?></td>
        </tr>
        <tr id="footer">
            <td id="footer">Tanggal Permohonan</td>
            <td id="footer">:</td>
            <td id="footer"><?= isset($data['detail_slik_cs']['tanggal_permohonan']) ? date('d-m-Y', strtotime($data['detail_slik_cs']['tanggal_permohonan'])) : '' ?></td>
        </tr>
        <tr id="footer">
            <td id="footer">Tanggal SLIK</td>
            <td id="footer">:</td>
            <td id="footer"><?= isset($data['detail_slik_cs']['tanggal_slik']) ? date('d-m-Y', strtotime($data['detail_slik_cs']['tanggal_slik'])) : '' ?></td>
        </tr>

    </table>



    <br>
    <td>Nama Pemohon</td>
    <td>:</td>
    <td><?= $data['detail_slik_cs']['nama_pemohon'] ?></td>
    <br>
    <td>Nama Instansi</td>
    <td>:</td>
    <td><?= $data['detail_slik_cs']['nama_instansi'] ?></td>
    <br>
    <table id="tbl_slik" width="100%">
        <thead id="thead_slik">
            <tr>
                <th>
                    #
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

            <?php

            $a = 1;
            foreach ($data['daftar_slik_pemohon'] as $row) :
            ?>

                <tr>
                    <td><?= $a++; ?></td>
                    <td><?= $row['nama_bank'] ?></td>
                    <td><?= $row['jenis_fasilitas'] ?></td>
                    <td><?= number_format($row['plafond'], 0, ',', '.') ?></td>
                    <td><?= number_format($row['bakidebet'], 0, ',', '.') ?></td>
                    <td><?= $row['kolektibilitas'] ?></td>
                    <td><?= date('d-m-Y', strtotime($row['waktu_awal'])) . ' s/d ' . date('d-m-Y', strtotime($row['waktu_akhir'])) ?></td>
                    <td><?= $row['suku_bunga'] ?></td>
                    <td><?= $row['jenis_jaminan'] ?></td>
                    <td><?= number_format($row['nilai_jaminan'], 0, ',', '.') ?></td>
                    <td><?= $row['alamat_jaminan'] ?></td>
                    <td><?= $row['pemilik_jaminan'] ?></td>
                    <td><?= $row['pengikatan'] ?></td>
                    <td><?= $row['keterangan'] ?></td>
                </tr>
            <?php
            endforeach;
            ?>

        </tbody>
    </table>




    <br>
    <td>Nama Pasangan</td>
    <td>:</td>
    <td><?= $data['detail_slik_cs']['nama_pasangan'] ?></td>
    <br>
    <table id="tbl_slik" width="100%">
        <thead id="thead_slik">
            <tr>
                <th>
                    #
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

            <?php
            $a = 1;
            foreach ($data['daftar_slik_pasangan'] as $row) :
            ?>

                <tr>
                    <td><?= $a++ ?></td>
                    <td><?= $row['nama_bank'] ?></td>
                    <td><?= $row['jenis_fasilitas'] ?></td>
                    <td><?= number_format($row['plafond'], 0, ',', '.') ?></td>
                    <td><?= number_format($row['bakidebet'], 0, ',', '.') ?></td>
                    <td><?= $row['kolektibilitas'] ?></td>
                    <td><?= date('d-m-Y', strtotime($row['waktu_awal'])) . ' s/d ' . date('d-m-Y', strtotime($row['waktu_akhir'])) ?></td>
                    <td><?= $row['suku_bunga'] ?></td>
                    <td><?= $row['jenis_jaminan'] ?></td>
                    <td><?= number_format($row['nilai_jaminan'], 0, ',', '.') ?></td>
                    <td><?= $row['alamat_jaminan'] ?></td>
                    <td><?= $row['pemilik_jaminan'] ?></td>
                    <td><?= $row['pengikatan'] ?></td>
                    <td><?= $row['keterangan'] ?></td>
                </tr>
            <?php
            endforeach;
            ?>

        </tbody>
    </table>
    <br>
    <br>

    <table id="tbl_slik">

        <tr>
            <td width="67px">Diinput Oleh :</td>
            <td style=" text-align: center; margin-right:10px"><?= $data['daftar_slik_pemohon'][0]['user_create'] ?? '' ?></td>
        </tr>

    </table>







    <script>
        document.title = 'DAFTAR SUDAH SLIK';



        function closePrintView() {
            window.location.href = '<?= BASEURL . '/pencairan/daftar_sudah_pencairan' ?>'
            // window.location = "google.com";
        }
        window.onafterprint = function(event) {
            closePrintView();
        };
        window.print();
    </script>

</body>

</html>