<style>
    .table-borderless>tbody>tr>td,
    .table-borderless>tbody>tr>th,
    .table-borderless>tfoot>tr>td,
    .table-borderless>tfoot>tr>th,
    .table-borderless>thead>tr>td,
    .table-borderless>thead>tr>th {
        border: none;
        padding: 0;
        padding-right: 5px;

    }
</style>


<?php

if (isset($data['data'][0]['lokasi_berkas'])) {
    echo "Data ditemukan";


?>




    <div class="mb-2">
        <div class="table-responsive text-nowrap">
            <table class="table table-borderless">
                <tr>
                    <td>No Registrasi</td>
                    <td>:</td>
                    <td><?= $data['data'][0]['no_permohonan_kredit'] ?? "Data Kosong" ?></td>
                </tr>

                <tr>
                    <td>Nama Pemohon</td>
                    <td>:</td>
                    <td><?= $data['data'][0]['nama_pemohon'] ?? "Data kosong" ?></td>
                </tr>

                <tr>
                    <td>Instansi</td>
                    <td>:</td>
                    <td><?= $data['data'][0]['nama_instansi'] ?? "Data Kosong" ?></td>
                </tr>
                <tr>
                    <td>No KTP</td>
                    <td>:</td>
                    <td><?= $data['data'][0]['no_ktp_pemohon'] ?? "Data Kosong" ?></td>
                </tr>
            </table>
        </div>
    </div>


    <!-- data lokasi berkas  -->
    <?php

    $lokasi_berkas = array("CS", "SLIK", "ANALISA", "KOMITE", "PENCAIRAN");

    $jumlah_data = (int)count($lokasi_berkas);
    $posisi_berkas = $data['data'][0]['lokasi_berkas'] ?? "Data Kosong";
    $batas_posisi_berkas = -1;







    for ($a = 0; $a < $jumlah_data; $a++) {

        if ($posisi_berkas == "RO" || $posisi_berkas =='ANALISA'  || $posisi_berkas =='ANALIS') {
            $posisi_berkas = "ANALISA";
        }



        if ($posisi_berkas == $lokasi_berkas[$a]) {
            $batas_posisi_berkas = $a;
        }
    }
    ?>

    <table class="table table-borderless">
        <tr class="text-center">
            <?php
            if ($batas_posisi_berkas != -1) {
                for ($a = 0; $a < $jumlah_data; $a++) {
                    if ($a <= $batas_posisi_berkas) {

                        echo "<td>" . "<span style='color:#00A859; font-size:12px; font-weight: bold;'>" . $lokasi_berkas[$a] . "</span>" . "</td> ";

                        echo "<td>" . "<span class='text-success'>" . "<i class='fas fa-check'></span></i></td>";
                    } else {
                        echo "<td> <span style='font-size:12px; font-weight: bold;'> "  . $lokasi_berkas[$a] .  "</span>" . "</td> ";
                    }
                }
            } else {
                for ($a = 0; $a < $jumlah_data; $a++) {

                    echo "<td> <span style='font-size:12px; font-weight: bold;'> "  . $lokasi_berkas[$a]  . "</span>" . "</td> ";
                }
            }

            ?>
        </tr>
        </tr>
    </table>



<?php

} else {
?>

    <div>
        <div class="text-center">
            <div style="font-size: 50px;">
                <span><i class="fas fa-exclamation-circle"></i></span>
            </div>

            <b>No. KTP yang ada input tidak ditemukan</b>
            <br>
            <b>Silahkan menghubungi kantor cabang terdekat</b>

        </div>

    </div>

<?php
}
?>



















<script>
    var btn_detail = $('.btn_detail')
    var modal1 = $("#myModal1")
    $(document).ready(function() {
        btn_detail.click(function() {
            modal1.modal('show')
        })
    })
</script>