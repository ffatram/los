<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
            margin-top: 15px;
            margin-bottom: 15px;
        }


        @media print {

            body {
                font-size: 9px;
                font-family: "TAHOMA";
                padding-top: 20px;
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


    <div style="font-size: 10px; text-align: center;"><b>LAPORAN WAWANCARA</b></div>
    <!-- <div style="font-size: 10px; text-align: center;"><b>PERIODE : <?= date("d-m-Y", strtotime($data['dari_sampai'])) ?> s/d <?= date("d-m-Y", strtotime($data['sampai_tanggal'])) ?></b> </div> -->
    <br>


    <!-- Menghitung nilai kemampuan bayar  -->
    <?php

    // penghasilan 
    $total_penghasilan_semua = 0;
    $total_pengasilan_pemohon = 0;
    $total_penghasilan_pasangan = 0;

    // biaya_biaya

    $total_biaya2_semua = 0;

    // angsuran 

    $total_angsuran_semua = 0;
    $total_angsuran_pemohon = 0;
    $total_angsuran_pasangan = 0;



    // penghaislan 
    $penghasilan_pemohon_perbulan = 0;
    $penghasilan_tambahan_pemohon = 0;
    $penghasilan_pasangan_perbulan = 0;
    $penghasilan_tambahan_pasangan = 0;
    $total_semua_penghasilan = 0;

    // biaya-biaya

    $biaya_rumah = 0;
    $biaya_pendidikan = 0;
    $biaya_listrik = 0;
    $biaya_transportasi = 0;
    $biaya_lain2 = 0;
    $total_semua_biaya = 0;


    // angsuran

    $angsuran_sebelumnya = 0;
    $angsuran_lain_pemohon = 0;
    $angsuran_lain_pasangan = 0;

    $total_semua_angsuran = 0;





    ?>





    <?php


    for ($a = 1; $a <= 3; $a++) {
        // penghasilan tambahan pemohon
        $ptp[$a] = 0;
        // penghasilan tambahan pasangan suami / istri
        $pts[$a] = 0;
    }


    foreach ($data['hasil_wawancara'] as $row) {
        for ($a = 1; $a <= 3; $a++) {
            if (($row['penghasilan_pemohon_tambahan_' . $a] != "") and ($row['penghasilan_pemohon_tambahan_' . $a] != 0)) {
                $penghasilan_tambahan_pemohon = $row[' $penghasilan_tambahan_pemohon_'.$a];
                $ptp[$a] = 1;
                $penghasilan_tambahan_pemohon += $penghasilan_tambahan_pemohon;
            } else {
                $ptp[$a] = 0;
            }

            if (($row['penghasilan_pasangan_tambahan_' . $a] != "") and ($row['penghasilan_pasangan_tambahan_' . $a] != 0)) {
                $pts[$a] = 1;
            } else {
                $pts[$a] = 0;
            }
        }
    }


    $p1 = 0;
    $p2 = 0;
    $p3 = 0;
    $batasUlang = 0;
    foreach ($data['hasil_wawancara'] as $row) {
        if (($row['penghasilan_pemohon_tambahan_1'] != "") and ($row['penghasilan_pemohon_tambahan_1'] != 0)) {
            $p1 = 1;
        }


        if (($row['penghasilan_pemohon_tambahan_2'] != "") and ($row['penghasilan_pemohon_tambahan_2'] != 0)) {
            $p2 = 1;
        }


        if (($row['penghasilan_pemohon_tambahan_3'] != "") and ($row['penghasilan_pemohon_tambahan_3'] != 0)) {
            $p3 = 1;
        }
    }
    $batasUlang = $p1 + $p2 + $p3;





    $ps1 = 0;
    $ps2 = 0;
    $ps3 = 0;

    $batasUlangPasangan = 0;

    foreach ($data['hasil_wawancara'] as $row) {
        if (($row['penghasilan_pasangan_tambahan_1'] != "") and ($row['penghasilan_pasangan_tambahan_1'] != 0)) {
            $ps1 = 1;
        }


        if (($row['penghasilan_pasangan_tambahan_2'] != "") and ($row['penghasilan_pasangan_tambahan_2'] != 0)) {
            $ps2 = 1;
        }


        if (($row['penghasilan_pasangan_tambahan_3'] != "") and ($row['penghasilan_pasangan_tambahan_3'] != 0)) {
            $ps3 = 1;
        }
    }

    $batasUlangPasangan = $ps1 + $ps2 + $ps3;





    // angsuran lain pemohon
    $asp1 = 0;
    $asp2 = 0;
    $asp3 = 0;
    $asp4 = 0;

    $batas_ulang_asp = 0;

    foreach ($data['hasil_wawancara'] as $row) {
        if (($row['angsuran_pemohon_lainnya_1'] != "") and ($row['angsuran_pemohon_lainnya_1'] != 0)) {
            $asp1 = 1;
        }


        if (($row['angsuran_pemohon_lainnya_2'] != "") and ($row['angsuran_pemohon_lainnya_2'] != 0)) {
            $asp2 = 1;
        }


        if (($row['angsuran_pemohon_lainnya_3'] != "") and ($row['angsuran_pemohon_lainnya_3'] != 0)) {
            $asp3 = 1;
        }

        if (($row['angsuran_pemohon_lainnya_4'] != "") and ($row['angsuran_pemohon_lainnya_4'] != 0)) {
            $asp4 = 1;
        }
    }

    $batas_ulang_asp =  $asp1 + $asp2 +  $asp3 + $asp4;




    // angsuran lain pemohon suami istri
    $asps1 = 0;
    $asps2 = 0;
    $asps3 = 0;
    $asps4 = 0;

    $batas_ulang_asps = 0;

    foreach ($data['hasil_wawancara'] as $row) {
        if (($row['angsuran_pasangan_lainnya_1'] != "") and ($row['angsuran_pasangan_lainnya_1'] != 0)) {
            $asps1 = 1;
        }


        if (($row['angsuran_pasangan_lainnya_2'] != "") and ($row['angsuran_pasangan_lainnya_2'] != 0)) {
            $asps2 = 1;
        }


        if (($row['angsuran_pasangan_lainnya_3'] != "") and ($row['angsuran_pasangan_lainnya_3'] != 0)) {
            $asps3 = 1;
        }

        if (($row['angsuran_pasangan_lainnya_4'] != "") and ($row['angsuran_pasangan_lainnya_4'] != 0)) {
            $asps4 = 1;
        }
    }

    $batas_ulang_asps =  $asps1 + $asps2 +  $asps3 + $asps4;






    // echo "p1 " . $p1;
    // echo "<br>";
    // echo "p2 " . $p2;
    // echo "<br>";
    // echo "p3 " . $p3;
    // echo "<br>";

    // echo "jumlah batas ulang " . $batasUlang;
    // echo "<br>";

    ?>

    <table id="tbl_slik" width="100%">
        <thead id="thead_slik">
            <tr>

                <th>
                    Aspek-Aspek
                </th>
                <th>
                    Jumlah (000)
                </th>
                <th>
                    Keterangan / Sumber Sumber Informasi
                </th>

                <!-- <?php
                        for ($a = 0; $a < $batasUlang; $a++) {
                        ?>

                    <th>
                        PENGHASILAN PEMOHON <?= $a + 1 ?>
                    </th>

                <?php
                        }
                ?> -->



            </tr>
        </thead>
        <tbody>

            <?php



            foreach ($data['hasil_wawancara'] as $row) :
            ?>

                <td>Penghasilan :</td>
                <td></td>
                <td></td>

                <tr>
                    <td>&nbsp; &nbsp; &nbsp;Penghasilan Permohonan Perbulan</td>
                    <td id="tengah"><?= $row['penghasilan_pemohon_perbulan'] / 1000 ?></td>
                    <td><?= $row['penghasilan_pemohon_perbulan_ket'] ?></td>
                </tr>


                <?php
                for ($a = 0; $a < $batasUlang; $a++) {

                    $total_pengasilan_pemohon = $total_pengasilan_pemohon + ($row['penghasilan_pemohon_tambahan_' . $a + 1] / 1000);
                ?>

                    <tr>
                        <td>
                            &nbsp; &nbsp; &nbsp;Penghasilan Pemohon <?= $a + 1 ?>
                        </td>
                        <td id="tengah"><?= number_format($row['penghasilan_pemohon_tambahan_' . $a + 1] / 1000, 0, ",", ".") ?></td>
                        <td><?= $row['penghasilan_pemohon_tambahan_' . $a + 1 . '_ket'] ?></td>
                    </tr>

                <?php
                }
                ?>
                <tr>
                    <td>&nbsp; &nbsp; &nbsp;Penghasilan Suami/Istri Sebulan</td>
                    <td id="tengah"><?= $row['penghasilan_pasangan_perbulan'] / 1000 ?></td>
                    <td><?= $row['penghasilan_pasangan_perbulan_ket'] ?></td>
                </tr>

                <?php
                for ($a = 0; $a < $batasUlangPasangan; $a++) {

                    $total_penghasilan_pasangan = $total_penghasilan_pasangan + ($row['penghasilan_pasangan_tambahan_' . $a + 1] / 1000);
                ?>
                    <tr>
                        <td>
                            &nbsp; &nbsp; &nbsp;Penghasilan Tambahan Suami/Istri<?= $a + 1 ?>
                        </td>
                        <td id="tengah"><?= number_format($row['penghasilan_pasangan_tambahan_' . $a + 1] / 1000, 0, ",", ".") ?></td>
                        <td><?= $row['penghasilan_pasangan_tambahan_' . $a + 1 . '_ket'] ?></td>
                    </tr>
                <?php
                }
                ?>



                <tr>
                    <td>Biaya-biaya:</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>&nbsp; &nbsp; &nbsp;Biaya Rumah Tangga Sebulan</td>
                    <td id="tengah"><?= $row['biaya_hidup_sebulan'] / 1000 ?></td>

                    <td><?= $row['biaya_hidup_sebulan_ket'] ?></td>
                </tr>
                <tr>
                    <td>&nbsp; &nbsp; &nbsp;Biaya Pendidikan Sebulan</td>
                    <td id="tengah"><?= $row['biaya_pendidikan'] / 1000 ?></td>
                    <td><?= $row['biaya_pendidikan_ket'] ?></td>
                </tr>
                <tr>
                    <td>&nbsp; &nbsp; &nbsp;Biaya Listrik/PAM/Telepon Sebulan</td>
                    <td id="tengah"><?= $row['biaya_pam_listrik_telepon'] / 1000 ?></td>
                    <td><?= $row['biaya_pam_listrik_telepon_ket'] ?></td>
                </tr>
                <tr>
                    <td>&nbsp; &nbsp; &nbsp;Biaya Transpoprt Sebulan</td>
                    <td id="tengah"><?= $row['biaya_trasnport'] / 1000 ?></td>
                    <td><?= $row['biaya_trasnport_ket'] ?></td>
                </tr>
                <tr>
                    <td>&nbsp; &nbsp; &nbsp;Biaya Lain-lain Sebulan</td>
                    <td id="tengah"><?= $row['biaya_lainnya'] / 1000 ?></td>
                    <td><?= $row['biaya_lainnya_ket'] ?></td>
                </tr>

                <?php $total_biaya2_semua = $row['biaya_hidup_sebulan'] + $row['biaya_pendidikan'] + $row['biaya_pam_listrik_telepon'] + $row['biaya_trasnport'] + $row['biaya_lainnya'] ?>

                <?php $total_biaya2_semua = $total_biaya2_semua / 1000 ?>



                <tr>
                    <td>Angsuran:</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>&nbsp; &nbsp; &nbsp;Angsuran Kredit Sebelumnya</td>
                    <td id="tengah"><?= $row['angsuran_kredit_sebelumnya'] / 1000 ?></td>
                    <td><?= $row['angsuran_kredit_sebelumnya_ket'] ?></td>
                </tr>

                <?php
                for ($a = 0; $a < $batas_ulang_asp; $a++) {
                    $total_angsuran_pemohon = $total_angsuran_pemohon + (($row['angsuran_pemohon_lainnya_' . $a + 1] * $row['pemohon_lunasi_' . $a + 1]) / 1000);
                ?>
                    <tr>
                        <td>
                            &nbsp; &nbsp; &nbsp;Angsuran Lain Pemohon <?= $a + 1 ?>
                        </td>
                        <td id="tengah"><?= number_format($row['angsuran_pemohon_lainnya_' . $a + 1] / 1000, 0, ",", ".") ?></td>
                        <td><?= $row['angsuran_pemohon_lainnya_' . $a + 1 . '_ket'] ?></td>
                    </tr>
                <?php
                }
                ?>


                <?php
                for ($a = 0; $a < $batas_ulang_asps; $a++) {
                    $total_angsuran_pasangan = $total_angsuran_pasangan + (($row['angsuran_pasangan_lainnya_' . $a + 1] * $row['pasangan_lunasi_' . $a + 1]) / 1000);
                ?>
                    <tr>
                        <td>
                            &nbsp; &nbsp; &nbsp;Angsuran Lain Suami/Istri <?= $a + 1 ?>
                        </td>
                        <td id="tengah"><?= number_format($row['angsuran_pasangan_lainnya_' . $a + 1] / 1000, 0, ",", ".") ?></td>
                        <td><?= $row['angsuran_pasangan_lainnya_' . $a + 1 . '_ket'] ?></td>
                    </tr>
                <?php
                }
                ?>



                <tr>
                    <th>Kemampuan Membayar Kredit</th>
                    <td id="tengah">1020</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Saldo Tabungan Terakhir</td>
                    <td>0</td>
                    <td></td>
                </tr>


                <tr>
                    <td>Total Penghasilan Pemohon</td>
                    <td><?= $total_pengasilan_pemohon ?></td>
                </tr>
                <tr>
                    <td>Total Penghasilan Pasangan</td>
                    <td><?= $total_penghasilan_pasangan ?></td>
                </tr>
                <tr>
                    <td>Total Biaya</td>
                    <td><?= $total_biaya2_semua ?></td>
                </tr>

                <tr>
                    <td>Total Angsuran Pemohon</td>
                    <td><?= $total_angsuran_pemohon ?></td>
                </tr>
                <tr>
                    <td>Total Angsuran Pasangan</td>
                    <td><?= $total_angsuran_pasangan ?></td>
                </tr>

            <?php
            endforeach;
            ?>


        </tbody>
    </table>


    <!-- <tr>
        <?php
        for ($a = 0; $a < $batasUlang; $a++) {
        ?>

            <td><?= $row['penghasilan_pemohon_tambahan_' . $a + 1] ?></td>

        <?php

        }
        ?>
    </tr> -->


    <div class="divFooter"><span>Dicetak Oleh : <?= $_COOKIE['username'] ?>
        </span>|
        <span>Tanggal Print :
            <?php date_default_timezone_set("Asia/Makassar");
            echo  date('l d F Y h:i:s '); ?>
        </span>
    </div>



    <script>
        var baseurl = "http://192.168.51.145/los/";
        var urlslik = "cs/laporan_cs";
        var urlcs = "cs";
        var url_wawancara = "wawancara/daftar_belum_wawancara";

        document.title = 'LAPORAN PERMOHONAN KREDIT';

        // window.onafterprint = function(event) {
        //     window.location.href = baseurl + urlslik;
        // };

        // window.print();
        // window.onafterprint = back;

        // function back() {
        //     window.history.back();
        // }


        function closePrintView() {
            window.location.href = baseurl + url_wawancara;
            // window.location = "google.com";
        }


        window.onafterprint = function(event) {
            closePrintView();
        };

        window.print();
    </script>

</body>

</html>