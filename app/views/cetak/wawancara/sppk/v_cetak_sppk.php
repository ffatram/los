<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak SPPK</title>





    <style type="text/css" media="screen, print">
        /* hendel bagian tabel */
        #tabel,
        #tabel_th,
        #tabel_td {
            text-align: left;
            border: 1px solid;
            border-collapse: collapse;

        }

        #tabel_th {
            font-size: 11px;
            text-align: center;
        }

        /* buat garis di bagian total */
        hr {
            border-top: 1px solid black;
        }

        /* handel gambar */
        img {
            height: auto;
            width: 150px;
            /* max-width: 300px;
            max-height: 300px; */
        }

        /* hadel ttd penjabat */

        div.fixed_top_right {
            position: fixed;
            top: 20px;
            right: 10px;
        }


        div.fixed_left1 {
            position: fixed;
            bottom: 100px;
            left: 10px;
        }

        div.fixed_left2 {
            position: fixed;
            bottom: 20px;
            left: 10px;
            text-decoration: underline;
            font-weight: bold;

        }



        div.fixed_rigth1 {
            position: fixed;
            bottom: 100px;
            left: 486px;



        }

        div.fixed_rigth2 {
            position: fixed;
            bottom: 20px;
            left: 486px;
            text-decoration: underline;
            font-weight: bold;

        }

        div.fixed_rigth22 {
            position: fixed;
            font-size: 15px;
            bottom: 2px;
            margin-left: 478px;


        }

        /* handel logo hasamitra */

        #gambar {
            height: auto;
            width: auto;
            max-width: 100px;
            max-height: 100px;
        }



        /* handel bagian halaman di window print */
        @page {
            size: A4;

        }


        @media print {

            body,
            html {
                width: 100%;
            }

            body {
                font-size: 12.5px;
                font-family: "TAHOMA";
                padding-bottom: 20px;
            }
        }

        @media screen {
            body {
                display: none;
            }
        }
    </style>


</head>








<?php

function bulan($bulan)
{
    switch ($bulan) {
        case 1:
            $bulan = "Januari";
            break;
        case 2:
            $bulan = "Februari";
            break;
        case 3:
            $bulan = "Maret";
            break;
        case 4:
            $bulan = "April";
            break;
        case 5:
            $bulan = "Mei";
            break;
        case 6:
            $bulan = "Juni";
            break;
        case 7:
            $bulan = "Juli";
            break;
        case 8:
            $bulan = "Agustus";
            break;
        case 9:
            $bulan = "September";
            break;
        case 10:
            $bulan = "Oktober";
            break;
        case 11:
            $bulan = "November";
            break;
        case 12:
            $bulan = "Desember";
            break;
    }
    return $bulan;
}

$bln = date("m");

?>



<body>

    <img src="<?= BASEURL ?>/assets/dist/img/logo_bpr_2.png" alt="logo hasamitra">
    <p>Nomor : </p>
    <div class="fixed_top_right">
        Makassar, <?= date('d') . " " . bulan($bln) . " " . date('Y'); ?>
    </div>

    <table cellpadding="0" cellspacing="0">
        <tr>
            <td>Kepada Yth.</td>
        </tr>
        <tr>
            <td>Sdr. <?= $data['data_debitur']['nama_pemohon'] ?></td>
        </tr>
        <tr>
            <td><?= $data['data_debitur']['alamat_sekarang_pemohon'] ?></td>
        </tr>
    </table>


    <p><b>Perihal &nbsp; : Surat Persetujuan Pemberian Kredit</b></p>

    <p>Menunjuk surat permohonan kredit saudara kepada PT. BPR Hasa Mitra, pada prinsipnya kredit saudara dapat kami setujui dengan ketentuan sebagi berikut :</p>

    <table>
        <tr>
            <td style="width: 4px">1.</td>
            <td style="width: 130px">Nominal Kredit</td>
            <td style="width: 4px">:</td>
            <td>Rp. <?= number_format($data['data_debitur']['plafond_dimohon'], 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Jangka Waktu Kredit</td>
            <td>:</td>
            <td><?= $data['data_debitur']['jangka_waktu'] ?> Bulan</td>

        </tr>
        <tr>
            <td>3.</td>
            <td>Suku Bunga</td>
            <td>:</td>
            <td> <?= $data['data_debitur_wawancara']['suku_bunga'] . " % Pa. " . "( " . $data['data_debitur_wawancara']['sistem_bunga'] . " )" ?></td>

        </tr>

        <tr>
            <td>4.</td>
            <td>Angsuran Kredit</td>
            <td>:</td>
            <td>Rp. <?= number_format($data['data_debitur_wawancara']['angsuran_perbulan'], 0, ',', '.') ?></td>

        </tr>
        <tr>
            <td>5.</td>
            <td>Sistem Pembayaran</td>
            <td>:</td>
            <td><?= $data['data_debitur_wawancara']['sistem_pembayaran'] ?></td>

        </tr>

        <tr>
            <td>6.</td>
            <td>Jaminan Utama</td>
            <td>:</td>
            <td><?= $data['data_debitur_wawancara']['jaminan_utama'] ?></td>

        </tr>
        <tr>
            <td>7.</td>
            <td>Jaminan Tambahan</td>
            <td>:</td>
        </tr>
    </table>


    <div style="margin-top: 10px; ">

    </div>

    <div style="margin-left: 10px; margin-right:25px;">
        <div style="margin-left: 10px; margin-right:25px;">

            <table id="tabel" width="100%">
                <thead>
                    <tr>
                        <th id="tabel_th">
                            DOKUMENT / NOMOR
                        </th>
                        <th id="tabel_th">
                            KEADAAN
                        </th>


                    </tr>
                </thead>
                <tbody>

                    <?php

                    for ($a = 1; $a <= 20; $a++) {

                        if ($data['data_debitur_wawancara']['jaminan_' . $a] != "") {
                    ?>


                            <tr>
                                <td id="tabel_td"><span style="margin-left:5px"><?= $data['data_debitur_wawancara']['jaminan_' . $a] ?></span></td>
                                <td id="tabel_td" style="letter-spacing: 5px; text-align: center;">Asli</td>
                            </tr>

                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>



    <table style="margin-top: 10px;">
        <tr>
            <td style="width: 4px">8.</td>
            <td style="width: 130px">Syarat Lainnya</td>
            <td style="width: 4px">:</td>
            <td>- </td>
        </tr>
    </table>

    <!-- <p style="margin-left: 3px; margin-bottom:0px">9. <span style="margin-left: 1px;">Saudara wajib menyimpan saldo 1 kali angsuran kredit di rekening tabungan Si Mitra senilai : <b>4.252.000</b> Kredit Saudara dapat dicairakan bilamana telah membayar biaya-biaya sebagai berikut :</span></p> -->
    <!-- <p style="margin-left: 17px;">   <span style="margin-left: 1px;">Saudara wajib menyimpan saldo 1 kali angsuran kredit di rekening tabungan Si Mitra senilai : <b>4.252.000</b> :</span></p> -->


    <table>
        <tr>
            <td style="width: 4px">9.</td>
            <td style="width: 100%">Saudara wajib menyimpan saldo 1 kali angsuran kredit di rekening tabungan Si Mitra senilai : <b><?= number_format(round($data['data_debitur_wawancara']['angsuran_perbulan'], -3), 0, ',', '.')  ?></b> </td>
        </tr>
    </table>
    <table style="margin-left:15px;">
        <tr>

            <td style="width: 100%;">Kredit saudara dapat dicairkan bilamana telah membayar biaya-biaya sebagi berikut : </td>
        </tr>
    </table>


    <table style="margin-left: 14px; margin-top: 10px">
        <tr>
            <td style="width: 4px">1.</td>
            <td style="width: 150px">Biaya Provisi Kredit</td>
            <td style="width: 4px">:</td>
            <td>Rp. <?= number_format($data['data_debitur_wawancara']['biaya_provisi_nominal'], 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Biaya Administrasi Kredit</td>
            <td>:</td>
            <td>Rp. <?= number_format($data['data_debitur_wawancara']['biaya_administrasi_nominal'], 0, ',', '.') ?></td>

        </tr>
        <tr>
            <td>3.</td>
            <td>Premi Asuransi</td>
            <td>:</td>
            <td>Rp. <?= number_format($data['data_debitur_wawancara']['premi_asuransi'], 0, ',', '.') ?></td>

        </tr>

        <tr>
            <td>4.</td>
            <td>Biaya Notaris</td>
            <td>:</td>
            <td>Rp. <?= number_format($data['data_debitur_wawancara']['biaya_notaris'], 0, ',', '.') ?></td>

        </tr>
        <tr>
            <td>5.</td>
            <td>Biaya APHT</td>
            <td>:</td>
            <td>Rp. <?= number_format($data['data_debitur_wawancara']['biaya_apht'], 0, ',', '.') ?></td>

        </tr>

        <tr>
            <td>6.</td>
            <td>Asuransi Kerugian</td>
            <td>:</td>
            <td>Rp. <?= number_format($data['data_debitur_wawancara']['asuransi_kerugian'], 0, ',', '.') ?></td>

        </tr>
        <tr>
            <td>7.</td>
            <td>Biaya Materai</td>
            <td>:</td>
            <td>Rp. <?= number_format($data['data_debitur_wawancara']['biaya_materai'], 0, ',', '.') ?></td>
        </tr>
    </table>


    <div style="margin-left:190px; margin-right:350px;">
        <hr>
    </div>
    <div style="margin-left: 120px;">
        <table>
            <tr>
                <td><b><span>Total</span></b></td>
                <td><b><span style="margin-left: 28px;">:</span></b></td>
                <?php

                $totalbiaya = ($data['data_debitur_wawancara']['biaya_provisi_nominal']
                    + $data['data_debitur_wawancara']['biaya_administrasi_nominal']
                    + $data['data_debitur_wawancara']['premi_asuransi']
                    + $data['data_debitur_wawancara']['biaya_notaris']
                    + $data['data_debitur_wawancara']['biaya_apht']
                    + $data['data_debitur_wawancara']['asuransi_kerugian']
                    + $data['data_debitur_wawancara']['biaya_materai']
                )


                ?>
                <td><b>Rp. <?= number_format($totalbiaya, 0, ',', '.')  ?></b></td>
            </tr>

        </table>
    </div>




    <table cellpadding="0" cellspacing="0">
        <tr>
            <td>Demikian dari kami, bilamana saudara menyetujui syarat tersebut di atas harap menandatangani Surat Persetujuan Pemberian Kredit ini</td>
        </tr>
        <tr>
            <td>Sekian dan terima kasih.</td>
        </tr>

    </table>

    <div style="margin-top: 10px;">

    </div>



    <div class="fixed_left1">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td>Hormat Kami,</td>
            </tr>
            <tr>
                <td>PT. BPR Hasa Mitra</td>
            </tr>
        </table>
    </div>



    <div class="fixed_left2">
        <?php
        if ($data['data_debitur_wawancara']['pejabat_ttd_sppk'] != '') {
            echo $data['data_debitur_wawancara']['pejabat_ttd_sppk'];
        } else {
            echo "kosong";
        }
        ?>
    </div>




    <div class="fixed_rigth1">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td>Setuju dengan syarat tersebut</td>
            </tr>

        </table>
    </div>



    <div class="fixed_rigth2">
        <?= $data['data_debitur']['nama_pemohon'] ?>
    </div>

    <div class="fixed_rigth22">
        Debitur
    </div>
















    <script>
        document.title = 'LAPORAN PERMOHONAN KREDIT';

        function closePrintView() {
            window.location.href = '<?= BASEURL . '/wawancara/daftar_sudah_wawancara' ?>'
        }


        window.onafterprint = function(event) {
            closePrintView();
        };

        window.print();
    </script>






</body>

</html>