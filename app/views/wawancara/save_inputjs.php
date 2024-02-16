
<!-- menghitung nilai plafond -->
<script>
    var plafond = document.getElementById('plafond');
    var plafond_string = 0;

    var biaya_provisi_persen = document.getElementById('biaya_provisi_persen');
    var biaya_provisi_nominal = document.getElementById('biaya_provisi_nominal');
    var biaya_provisi_persen_string = "";
    var hasil_nominal_akhir = 0;

    var os_sebelumnya = $('#os_sebelumnya');
    var nilai_os_sebelumnya = 0;
    var nilai_penambahan = 0;
    var penambahan = $('#penambahan');



    var biaya_administrasi_persen = document.getElementById('biaya_administrasi_persen');
    var biaya_administrasi_nominal = document.getElementById('biaya_administrasi_nominal');
    var biaya_administrasi_persen_string = "";
    var hasil_administrasi_nominal_akhir = 0;

    // jika pas load

    $(document).ready(function() {

        $('#plafond').val(formatplafond($('#plafond').val()))

        plafond_string = $('.plafond').val()

        console.log("NIlai plaofnd : " + plafond_string)




    })


    plafond.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatplafond() untuk mengubah angka yang di ketik menjadi format angka
        plafond.value = formatplafond(this.value, 'Rp. ');
        plafond_string = plafond.value.toString();
        plafond_string = plafond_string.replace(/[^,\d]/g, '');


        biaya_provisi_persen_string = biaya_provisi_persen.value.toString();
        biaya_provisi_persen_string = biaya_provisi_persen_string.replace(/[^,\d.]/g, '');

        // rumus mencari biaya nominal 
        hasil_nominal_akhir = parseFloat((parseInt(plafond_string) * parseFloat(biaya_provisi_persen_string)) / 100)
        biaya_provisi_nominal.value = formatplafond(hasil_nominal_akhir.toString(), 'Rp. ')




        plafond.value = formatplafond(this.value, 'Rp. ');
        plafond_string = plafond.value.toString();
        plafond_string = plafond_string.replace(/[^,\d]/g, '');


        biaya_administrasi_persen_string = biaya_administrasi_persen.value.toString();
        biaya_administrasi_persen_string = biaya_administrasi_persen_string.replace(/[^,\d.]/g, '');
        hasil_administrasi_nominal_akhir = parseFloat((parseInt(plafond_string) * parseFloat(biaya_administrasi_persen_string)) / 100)
        console.log("Biaya administrasi akhir : " + hasil_administrasi_nominal_akhir)

        biaya_administrasi_nominal.value = formatplafond(hasil_administrasi_nominal_akhir.toString(), 'Rp.');



        if (nilai_os_sebelumnya != 0) {
            penambahan.val(format_kemampuan_membayar((plafond_string - nilai_os_sebelumnya).toString()))

        } else {
            penambahan.val(0)
        }




    });

    os_sebelumnya.keyup(function(e) {
        os_sebelumnya.val(formatplafond(this.value, 'Rp. '));
        nilai_os_sebelumnya = os_sebelumnya.val().replace(/[^,\d]/g, '');



        if (nilai_os_sebelumnya != 0) {
            penambahan.val(format_kemampuan_membayar((plafond_string - nilai_os_sebelumnya).toString()))

        } else {
            penambahan.val(0)
        }

    })



    /* Fungsi formatplafond */
    function formatplafond(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            plafond = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            plafond += separator + ribuan.join('.');
        }

        plafond = split[1] != undefined ? plafond + ',' + split[1] : plafond;
        return prefix == undefined ? plafond : (plafond ? plafond : '');
    }



    function format_kemampuan_membayar(angka, prefix) {


        // tambahkan titik jika yang di input sudah menjadi angka ribuan


        if (parseFloat(angka) >= 0) {

            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                plafond = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);


            if (ribuan) {
                separator = sisa ? '.' : '';
                plafond += separator + ribuan.join('.');
            }

            plafond = split[1] != undefined ? plafond + ',' + split[1] : plafond;
            return prefix == undefined ? plafond : (plafond ? plafond : '');
        } else {



            angka = angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            return prefix == undefined ? angka : (angka ? angka : '');
        }

    }
</script>


<script>
    function formatSukuBunga(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            plafond = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            plafond += separator + ribuan.join('.');
        }

        plafond = split[1] != undefined ? plafond + ',' + split[1] : plafond;
        return prefix == undefined ? plafond : (plafond ? plafond : '');
    }


    var suku_bunga = document.getElementById('suku_bunga');


    suku_bunga.addEventListener('keyup', function() {
        var ubah_suku_bunga = suku_bunga.value.replace(/[^\d.]/g, '').toString()


        console.log(ubah_suku_bunga);

        suku_bunga.value = ubah_suku_bunga
    })
</script>

<script>
    function formatAkhir(angka) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            plafond = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            plafond += separator + ribuan.join('.');
        }

        plafond = split[1] != undefined ? plafond + ',' + split[1] : plafond;
        return prefix == undefined ? plafond : (plafond ? plafond : '');
    }
</script>


<!-- perhitungan analisa kemampuan -->
<script>
    var arus_kas_masuk;
    var total_pemohon;
    var total_pasangan;

    var total_pemohon_pasangan;
    var total_biaya_rumah_tangga;



    var total_angsuran_lain_pemohon;
    var angsuran_pemohon_cek1 = parseInt(1);
    var angsuran_pemohon_cek2 = parseInt(1);
    var angsuran_pemohon_cek3 = parseInt(1);
    var angsuran_pemohon_cek4 = parseInt(1);
    var angsuran_pemohon_cek5 = parseInt(1);
    var angsuran_pemohon_cek6 = parseInt(1);
    var angsuran_pemohon_cek7 = parseInt(1);


    var total_angsuran_lain_pasangan;

    var angsuran_pasangan_cek1 = parseInt(1);
    var angsuran_pasangan_cek2 = parseInt(1);
    var angsuran_pasangan_cek3 = parseInt(1);
    var angsuran_pasangan_cek4 = parseInt(1);
    var angsuran_pasangan_cek5 = parseInt(1);
    var angsuran_pasangan_cek6 = parseInt(1);
    var angsuran_pasangan_cek7 = parseInt(1);

    var total_angsuran_pemohon_pasangan;


    var angsuran_perbulan;
    var total_persentase_angsuran;

    var total_kemampuan_membayar;








    $('input[id=cek_angsuran_pemohon1]').on('change', function() {

        if ($(this).is(':checked')) {
            console.log("Ceklis")
            angsuran_pemohon_cek1 = parseInt(0)
        } else {
            console.log("tidak ceklis")
            angsuran_pemohon_cek1 = parseInt(1)

        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }


        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })

    $('input[id=cek_angsuran_pemohon2]').on('change', function() {

        if ($(this).is(':checked')) {
            console.log("Ceklis")
            angsuran_pemohon_cek2 = parseInt(0)
        } else {
            console.log("tidak ceklis")
            angsuran_pemohon_cek2 = parseInt(1)

        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }

        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })


    $('input[id=cek_angsuran_pemohon3]').on('change', function() {

        if ($(this).is(':checked')) {
            console.log("Ceklis")
            angsuran_pemohon_cek3 = parseInt(0)
        } else {
            console.log("tidak ceklis")
            angsuran_pemohon_cek3 = parseInt(1)

        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }

        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })


    $('input[id=cek_angsuran_pemohon4]').on('change', function() {

        if ($(this).is(':checked')) {
            console.log("Ceklis")
            angsuran_pemohon_cek4 = parseInt(0)
        } else {
            console.log("tidak ceklis")
            angsuran_pemohon_cek4 = parseInt(1)

        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }

        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })


    $('input[id=cek_angsuran_pemohon5]').on('change', function() {

        if ($(this).is(':checked')) {
            console.log("Ceklis")
            angsuran_pemohon_cek5 = parseInt(0)
        } else {
            console.log("tidak ceklis")
            angsuran_pemohon_cek5 = parseInt(1)

        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }

        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })

    $('input[id=cek_angsuran_pemohon6]').on('change', function() {

        if ($(this).is(':checked')) {
            console.log("Ceklis")
            angsuran_pemohon_cek6 = parseInt(0)
        } else {
            console.log("tidak ceklis")
            angsuran_pemohon_cek6 = parseInt(1)

        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }

        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })


    $('input[id=cek_angsuran_pemohon7]').on('change', function() {

        if ($(this).is(':checked')) {
            console.log("Ceklis")
            angsuran_pemohon_cek7 = parseInt(0)
        } else {
            console.log("tidak ceklis")
            angsuran_pemohon_cek7 = parseInt(1)

        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }

        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })


    $('input[id=cek_angsuran_pasangan1]').on('change', function() {

        if ($(this).is(':checked')) {
            console.log("Ceklis")
            angsuran_pasangan_cek1 = parseInt(0)
        } else {
            console.log("tidak ceklis")
            angsuran_pasangan_cek1 = parseInt(1)

        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }


        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })

    $('input[id=cek_angsuran_pasangan2]').on('change', function() {

        if ($(this).is(':checked')) {
            console.log("Ceklis")
            angsuran_pasangan_cek2 = parseInt(0)
        } else {
            console.log("tidak ceklis")
            angsuran_pasangan_cek2 = parseInt(1)

        }


        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }



        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })





    $('input[id=cek_angsuran_pasangan3]').on('change', function() {
        if ($(this).is(':checked')) {
            angsuran_pasangan_cek3 = parseInt(0)
        } else {
            angsuran_pasangan_cek3 = parseInt(1)
        }


        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }



        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })

    $('input[id=cek_angsuran_pasangan4]').on('change', function() {
        if ($(this).is(':checked')) {
            angsuran_pasangan_cek4 = parseInt(0)
        } else {
            angsuran_pasangan_cek4 = parseInt(1)
        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }

        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })


    $('input[id=cek_angsuran_pasangan5]').on('change', function() {
        if ($(this).is(':checked')) {
            angsuran_pasangan_cek5 = parseInt(0)
        } else {
            angsuran_pasangan_cek5 = parseInt(1)
        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }

        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })


    $('input[id=cek_angsuran_pasangan6]').on('change', function() {
        if ($(this).is(':checked')) {
            angsuran_pasangan_cek6 = parseInt(0)
        } else {
            angsuran_pasangan_cek6 = parseInt(1)
        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }

        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
    })


    $('input[id=cek_angsuran_pasangan7]').on('change', function() {
        if ($(this).is(':checked')) {
            angsuran_pasangan_cek7 = parseInt(0)
        } else {
            angsuran_pasangan_cek7 = parseInt(1)
        }

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }

        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))
        $("#kemampuan_membayar").val(formatplafond(kemampuan_membayar().toString()))
        $("#temp_persentase_angsuran").val(formatplafond(Math.round(persentase_angsuran()).toString()))

    })







    document.addEventListener("keyup", function() {

        // var a = "<?= BASEURL; ?>"
        // console.log("BASEURL :" + a.toString());

        // console.log("pasangan pemohon :"+hitung_angsuran_pemohon_pasangan());
        console.log("Angsuran Lain Total : " + hitung_angsuran_pemohon_pasangan());
        console.log("Angsuran Kredid BPR : " + angsuran_perbulan_bpr());
        console.log("Arus Kas Masuk : " + arus_kas_masuk());
        console.log("Persentase angsuran : " + persentase_angsuran())
        console.log("Kemampuan Membayar : " + kemampuan_membayar())

        var persentase_angsuran_ket = Math.round(persentase_angsuran());

        console.log("Persentase Angsuran : " + persentase_angsuran_ket)
        if (persentase_angsuran_ket >= 0 && persentase_angsuran_ket <= 50) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Disarankan")
        } else if (persentase_angsuran_ket >= 51 && persentase_angsuran_ket <= 70) {
            document.getElementById("warna_ket_persentase").style.color = "blue"
            $("#warna_ket_persentase").html("Dipertimbangakn")
        } else if (persentase_angsuran_ket >= 71 && persentase_angsuran_ket <= 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Kurang Disarankan")
        } else if (persentase_angsuran_ket > 80) {
            document.getElementById("warna_ket_persentase").style.color = "red"
            $("#warna_ket_persentase").html("Ditolak")
        }


        $('#total').html(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $("#persentase_angsuran").html(formatplafond(Math.round(persentase_angsuran()).toString()))

        $("#kemampuan_membayar").val(format_kemampuan_membayar(kemampuan_membayar().toString()))
        $('#temp_persentase_angsuran').val(formatplafond(Math.round(persentase_angsuran()).toString()));









    })

    function arus_kas_masuk() {

        // pemohon
        var penghasilan_pemohon_perbulan = formatInput(document.getElementById('penghasilan_pemohon_perbulan'));
        var penghasilan_tambahan_pemohon1 = formatInput(document.getElementById('penghasilan_tambahan_pemohon1'));
        var penghasilan_tambahan_pemohon2 = formatInput(document.getElementById('penghasilan_tambahan_pemohon2'));
        var penghasilan_tambahan_pemohon3 = formatInput(document.getElementById('penghasilan_tambahan_pemohon3'));

        total_pemohon = penghasilan_pemohon_perbulan + penghasilan_tambahan_pemohon1 + penghasilan_tambahan_pemohon2 + penghasilan_tambahan_pemohon3;


        // pasangan
        var penghasilan_pasangan_perbulan = formatInput(document.getElementById('penghasilan_pasangan_perbulan'));
        var penghasilan_tambahan_pasangan1 = formatInput(document.getElementById('penghasilan_tambahan_pasangan1'));
        var penghasilan_tambahan_pasangan2 = formatInput(document.getElementById('penghasilan_tambahan_pasangan2'));
        var penghasilan_tambahan_pasangan3 = formatInput(document.getElementById('penghasilan_tambahan_pasangan3'));


        total_pasangan = penghasilan_pasangan_perbulan + penghasilan_tambahan_pasangan1 + penghasilan_tambahan_pasangan2 + penghasilan_tambahan_pasangan3;
        total_pemohon_pasangan = total_pemohon + total_pasangan;
        return total_pemohon_pasangan;
    }

    function hitung_biaya_rumah_tangga() {
        var biaya_rumah_tangga = formatInput(document.getElementById('biaya_rumah_tangga'));
        var biaya_pendidikan = formatInput(document.getElementById('biaya_pendidikan'));
        var biaya_listrik = formatInput(document.getElementById('biaya_listrik'));
        var biaya_transport = formatInput(document.getElementById('biaya_transport'));
        var biaya_lain = formatInput(document.getElementById('biaya_lain'));


        total_biaya_rumah_tangga = biaya_rumah_tangga + biaya_pendidikan + biaya_listrik + biaya_transport + biaya_lain;


        return total_biaya_rumah_tangga;

    }




    function hitung_angsuran_lain_pemohon() {

        var angsuran_lain_pemohon1 = formatInput(document.getElementById('angsuran_lain_pemohon1'));
        var angsuran_lain_pemohon2 = formatInput(document.getElementById('angsuran_lain_pemohon2'));
        var angsuran_lain_pemohon3 = formatInput(document.getElementById('angsuran_lain_pemohon3'));
        var angsuran_lain_pemohon4 = formatInput(document.getElementById('angsuran_lain_pemohon4'));
        var angsuran_lain_pemohon5 = formatInput(document.getElementById('angsuran_lain_pemohon5'));
        var angsuran_lain_pemohon6 = formatInput(document.getElementById('angsuran_lain_pemohon6'));
        var angsuran_lain_pemohon7 = formatInput(document.getElementById('angsuran_lain_pemohon7'));





        total_angsuran_lain_pemohon = (angsuran_lain_pemohon1 * angsuran_pemohon_cek1) + (angsuran_lain_pemohon2 * angsuran_pemohon_cek2) +
            (angsuran_lain_pemohon3 * angsuran_pemohon_cek3) + (angsuran_lain_pemohon4 * angsuran_pemohon_cek4) +
            (angsuran_lain_pemohon5 * angsuran_pemohon_cek5) + (angsuran_lain_pemohon6 * angsuran_pemohon_cek6) +
            (angsuran_lain_pemohon7 * angsuran_pemohon_cek7)




        // total_angsuran_lain_pemohon = (angsuran_lain_pemohon1 * nilai_cek_pemohon1) + (angsuran_lain_pemohon2 * nilai_cek_pemohon2) + (angsuran_lain_pemohon3 * nilai_cek_pemohon3) +( angsuran_lain_pemohon4 * nilai_cek_pemohon4) + (angsuran_lain_pemohon5 *nilai_cek_pemohon5) + (angsuran_lain_pemohon6 * nilai_cek_pemohon6) + (angsuran_lain_pemohon7 * nilai_cek_pemohon7);

        return total_angsuran_lain_pemohon;

    }



    function hitung_angsuran_lain_pasangan() {

        var angsuran_lain_pasangan1 = formatInput(document.getElementById('angsuran_lain_pasangan1'));
        var angsuran_lain_pasangan2 = formatInput(document.getElementById('angsuran_lain_pasangan2'));
        var angsuran_lain_pasangan3 = formatInput(document.getElementById('angsuran_lain_pasangan3'));
        var angsuran_lain_pasangan4 = formatInput(document.getElementById('angsuran_lain_pasangan4'));
        var angsuran_lain_pasangan5 = formatInput(document.getElementById('angsuran_lain_pasangan5'));
        var angsuran_lain_pasangan6 = formatInput(document.getElementById('angsuran_lain_pasangan6'));
        var angsuran_lain_pasangan7 = formatInput(document.getElementById('angsuran_lain_pasangan7'));

        total_angsuran_lain_pasangan = (angsuran_lain_pasangan1 * angsuran_pasangan_cek1) + (angsuran_lain_pasangan2 * angsuran_pasangan_cek2) +
            (angsuran_lain_pasangan3 * angsuran_pasangan_cek3) + (angsuran_lain_pasangan4 * angsuran_pasangan_cek4) +
            (angsuran_lain_pasangan5 * angsuran_pasangan_cek5) + (angsuran_lain_pasangan6 * angsuran_pasangan_cek6) +
            (angsuran_lain_pasangan7 * angsuran_pasangan_cek7)
        return total_angsuran_lain_pasangan;

    }







    function hitung_angsuran_pemohon_pasangan() {

        total_angsuran_pemohon_pasangan = hitung_angsuran_lain_pemohon() + hitung_angsuran_lain_pasangan();

        return total_angsuran_pemohon_pasangan;
    }


    function angsuran_perbulan_bpr() {
        var angsuran = formatInput(document.getElementById('angsuran_perbulan'));
        angsuran_perbulan = (angsuran / 1000);
        return angsuran_perbulan;
    }

    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }

    function persentase_angsuran() {
        total_persentase_angsuran = (hitung_angsuran_pemohon_pasangan() + angsuran_perbulan_bpr()) / arus_kas_masuk() * 100 / 100 * 100;

        return total_persentase_angsuran;
    }

    function kemampuan_membayar() {
        total_kemampuan_membayar = (arus_kas_masuk() - hitung_biaya_rumah_tangga()) - hitung_angsuran_pemohon_pasangan();

        return total_kemampuan_membayar;
    }



    function formatInput(input) {

        var temp = input.value;
        var temp_s = "";
        input.value = formatplafond(input.value, 'Rp. ');
        temp_s = input.value.toString();

        temp_s = input.value.toString();

        temp_s = temp_s.replace(/[^,\d]/g, '');

        if (temp == "") {
            temp = 0;
        } else {
            temp = temp_s

        }

        if (isNaN(temp)) {
            temp = 0;
        }
        return parseFloat(temp);
    }
</script>


