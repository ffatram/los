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


    <div style="font-size: 10px; text-align: center;"><b>LAPORAN PERMOHONAN KREDIT (TOLAK)</b></div>
    <div style="font-size: 10px; text-align: center;"><b>PERIODE : <?= date("d-m-Y", strtotime($data['dari_sampai'])) ?> s/d <?= date("d-m-Y", strtotime($data['sampai_tanggal'])) ?></b> </div>
    <br>


    <table id="tbl_slik" width="100%">
        <thead id="thead_slik">
            <tr>
                <th>
                    NO
                </th>
                <th>
                    NO. REG
                </th>

                <th>
                    NAMA PEMOHON
                </th>
                <th>
                    INSTANSI
                </th>

                <th>
                    PLAF
                </th>

                <th>
                    JW
                </th>
                <th>
                    RO
                </th>

                <th>
                    TGL. MASUK
                </th>

                <th>
                    TGL. SLIK

                </th>

                <th>
                    TGL. WWC

                </th>

                <th>
                    TGL. TOLAK

                </th>
                <th>
                <?= level_6?>

                </th>
                <th>
                <?= level_3?>

                </th>
                <th>
                    JENIS BERKAS
                </th>


            </tr>
        </thead>
        <tbody>

            <?php $a = 1;



            foreach ($data['hasil_laporan_cs'] as $row) :

            ?>

                <tr>
                    <td style="text-align: center;"><?= $a++ ?></td>
                    <td style="text-align: center;"><?= $row['no_permohonan_kredit'] ?></td>
                    <td><?= $row['nama_pemohon'] ?></td>
                    <td><?= $row['nama_instansi'] ?></td>
                    <td style="text-align: center;"><?= $row['plafond_dimohon'] / 1000000 ?></td>
                    <td style="text-align: center;"><?= $row['jangka_waktu'] ?></td>
                    <td style="text-align: center;"><?= $row['id_analis'] ?></td>
                    <td style="text-align: center;"><?= $row['tanggal_permohonan'] != "" ? date("d-m-Y", strtotime($row['tanggal_permohonan'])) : '';  ?></td>
                    <td style="text-align: center;"><?= $row['tanggal_slik'] != "" ? date("d-m-Y", strtotime($row['tanggal_slik'])) : '';  ?></td>
                    <td style="text-align: center;"><?= $row['tanggal_wawancara'] != "" ? date("d-m-Y", strtotime($row['tanggal_wawancara'])) : '';   ?></td>
                    <td style="text-align: center;"><?= $row['tanggal_tolak'] != "" ? date("d-m-Y", strtotime($row['tanggal_tolak'])) : '';  ?></td>
                    <td style="text-align: center;"><?= $row['id_marketing'] ?></td>
                    <td style="text-align: center;"><?= $row['id_analis'] ?></td>
                    <td style="text-align: center;"><?= $row['jenis_permohonan'] ?></td>






                </tr>
            <?php
            endforeach;
            ?>

        </tbody>
    </table>



  



    <script>
      
        document.title = 'LAPORAN PERMOHONAN KREDIT';



        function closePrintView() {
            window.location.href = '<?= BASEURL . '/cs/laporan_cs' ?>'
            
        }


        window.onafterprint = function(event) {
            closePrintView();
        };

        window.print();
    </script>

</body>

</html>