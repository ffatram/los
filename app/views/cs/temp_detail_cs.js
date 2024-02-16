$('#detail').on('show.bs.modal', function (e) {
    var button = $(e.relatedTarget);
    // var no_permohonan_kredit = button.data('no_permohonan_kredit');
    var no_permohonan_kredit = button.data('id');


    $.ajax({
        method: "POST",
        url: 'http://192.168.51.13/los/cs/detail_data_kredit',
        data: {
            no_permohonan_kredit: no_permohonan_kredit
        },
        dataType: "JSON",
        success: function (response) {


            const plafond_dimohon = response[0].plafond_dimohon.toLocaleString().replaceAll(',', '.');
            const nilai_jaminan = response[0].nilai_jaminan.toLocaleString().replaceAll(',', '.');
            const penghasilan_pemohon = response[0].penghasilan_pemohon.toLocaleString().replaceAll(',', '.');
            const penghasilan_pasangan = response[0].penghasilan_pasangan.toLocaleString().replaceAll(',', '.');
            const penghasilan_tambahan = response[0].penghasilan_tambahan.toLocaleString().replaceAll(',', '.');
            const penghasilan_tambahan_lainnya = response[0].penghasilan_tambahan_lainnya.toLocaleString().replaceAll(',', '.');
            const biaya_hidup_perbulan = response[0].biaya_hidup_perbulan.toLocaleString().replaceAll(',', '.');
            const biaya_pendidikan = response[0].biaya_pendidikan.toLocaleString().replaceAll(',', '.');
            const biaya_pam_listrik_telepon = response[0].biaya_pam_listrik_telepon.toLocaleString().replaceAll(',', '.');
            const biaya_transport = response[0].biaya_transport.toLocaleString().replaceAll(',', '.');
            const angsuran_bank_lain = response[0].angsuran_bank_lain.toLocaleString().replaceAll(',', '.');
            const angsuran_perumahan = response[0].angsuran_perumahan.toLocaleString().replaceAll(',', '.');
            const angsuran_kendaraan = response[0].angsuran_kendaraan.toLocaleString().replaceAll(',', '.');
            const angsuran_barang_elektronik = response[0].angsuran_barang_elektronik.toLocaleString().replaceAll(',', '.');
            const angsuran_koperasi = response[0].angsuran_koperasi.toLocaleString().replaceAll(',', '.');
            const biaya_lainnya = response[0].biaya_lainnya.toLocaleString().replaceAll(',', '.');


            $('#no_permohonan_kredit').text(response[0].no_permohonan_kredit);
            $('#1').text(response[0].nama_pemohon);
            $('#2').text(response[0].tempat_lahir_pemohon);
            $('#3').text(response[0].tgl_lahir_pemohon);
            $('#4').text(response[0].jenis_kelamin_pemohon);
            $('#5').text(response[0].nama_ibu_kandung_pemohon);
            $('#6').text(response[0].no_ktp_pemohon);
            $('#7').text(response[0].npwp_pemohon);
            $('#8').text(response[0].alamat_ktp_pemohon);
            $('#9').text(response[0].alamat_sekarang_pemohon);
            $('#10').text(response[0].telepon_pemohon);

            $('#11').text(response[0].media_sosial);
            $('#12').text(response[0].status_kepemilikan_rumah_pemohon);
            $('#13').text(response[0].pendidikan_terakhir_pemohon);
            $('#14').text(response[0].gelar_pemohon);
            $('#15').text(response[0].status_perkawinan);
            $('#16').text(response[0].jumlah_tanggungan);
            $('#17').text(response[0].nama_keluarga_dapat_dihubungi);
            $('#18').text(response[0].alamat_keluarga_dapat_dihubungi);
            $('#19').text(response[0].hubungan_keluarga_dapat_dihubungi);
            $('#20').text(response[0].telepon_keluarga_dapat_dihubungi);

            $('#21').text(response[0].jenis_pekerjaan);
            $('#22').text(response[0].nama_instansi);
            $('#23').text(response[0].alamat_instansi);
            $('#24').text(response[0].telepon_instansi);
            $('#25').text(response[0].tahun_mulai_bekerja);
            $('#26').text(response[0].jabatan_saat_ini);
            $('#27').text(response[0].atasan_langsung);
            $('#28').text(response[0].telepon_bendahara);
            $('#29').text(response[0].nama_pasangan);
            $('#30').text(response[0].tempat_lahir_pasangan);
            $('#31').text(response[0].tgl_lahir_pasangan);
            $('#32').text(response[0].no_ktp_pasangan);
            $('#33').text(response[0].alamat_ktp_pasangan);
            $('#34').text(response[0].alamat_sekarang_pasangan);
            $('#telepon_pasangan').text(response[0].telepon_pasangan);


            $('#35').text(response[0].jenis_pekerjaan_pasangan);
            $('#36').text(response[0].nama_instansi_pasangan);
            $('#37').text(response[0].tahun_mulai_bekerja_pasangan);
            $('#38').text(response[0].jabatan_saat_ini_pasangan);
            $('#39').text(response[0].alamat_kantor_pasangan);
            $('#40').text(response[0].telepon_kantor_pasangan);





            $('#41').text(response[0].tanggal_permohonan);
            $('#42').text(response[0].perjanjian_kerjasama);
            $('#43').text(response[0].jenis_permohonan);


            $('#44').text(plafond_dimohon);
            $('#45').text(response[0].jangka_waktu);
            $('#46').text(response[0].tujuan_penggunaan_kredit);
            $('#47').text(response[0].jenis_jaminan);

            $('#48').text(nilai_jaminan);
            $('#49').text(response[0].id_marketing);
            $('#50').text(response[0].id_analis);


            $('#51').text(penghasilan_pemohon);
            $('#52').text(penghasilan_pasangan);
            $('#53').text(penghasilan_tambahan);
            $('#54').text(penghasilan_tambahan_lainnya);

            $('#55').text(biaya_hidup_perbulan);
            $('#56').text(biaya_pendidikan);
            $('#57').text(biaya_pam_listrik_telepon);
            $('#58').text(biaya_transport);
            $('#59').text(angsuran_bank_lain);
            $('#60').text(angsuran_perumahan);
            $('#61').text(angsuran_kendaraan);
            $('#62').text(angsuran_barang_elektronik);
            $('#63').text(angsuran_koperasi);
            $('#64').text(biaya_lainnya);


            $('#65').text(response[0].aset_yang_dimiliki);
            $('#66').text(response[0].alamat_aset);
            $('#67').text(response[0].jenis_sertifikat);
            $('#68').text(response[0].jumlah_kendaraan);
            $('#69').text(response[0].merek_kendaraan);
            $('#70').text(response[0].tahun_kendaraan);
            $('#71').text(response[0].atas_nama_kendaraan);


            $('#catatan_cs').text(response[0].catatan_cs);
            $('#lokasi_berkas').text(response[0].lokasi_berkas);


        },

        error: function (data) {

            console.log('errror')
        }

    })
})
