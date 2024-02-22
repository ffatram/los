<?php


class slik2 extends Controller
{


    public function index()
    {
        $this->view('slik2/v_slik2');
    }


    public function cek()
    {

        // $file_path = 'upload/KTP_7371136811540001.txt';

        // // Membaca beberapa byte pertama dari file
        // $bytes_to_read = 1024 * 1024 *5;
        // $file_handle = fopen($file_path, 'r');
        // $file_content = fread($file_handle, $bytes_to_read);
        // fclose($file_handle);

        // // Memeriksa jenis encoding
        // $detected_encoding = mb_detect_encoding($file_content, 'UTF-8, ISO-8859-1, Windows-1252', true);
        // if ($detected_encoding !== false) {
        //     echo "File menggunakan encoding: " . $detected_encoding;
        // } else {
        //     echo "Tidak dapat menentukan jenis encoding.";
        // }
    }

    public function upload_data_slik()
    {

        date_default_timezone_set('Asia/Makassar');

        $namafile = basename($_FILES["fileToUpload"]["name"]);
        $split_namafile = explode('_', $namafile);
        $ketfile = $split_namafile[0];


        if ($ketfile == 'NPWP') {
            $this->slik_npwp($namafile);
        } else if ($ketfile == 'KTP') {
            $this->slik_ktp($namafile);
        }



        // if (isset($_POST["submit"])) {

        //     if ($_POST['ktp2'] == $_POST['ktp3']) {


        //         $target_dir = "upload/"; // Direktori tempat menyimpan file yang diunggah
        //         $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        //         $uploadOk = 1;
        //         $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        //         // Cek apakah file adalah file txt
        //         if ($fileType != "txt") {
        //             echo "File harus dalam format txt.";
        //             $uploadOk = 0;
        //         }

        //         // Cek apakah file telah diunggah dengan benar
        //         if ($uploadOk == 0) {
        //             echo "File tidak diunggah.";
        //         } else {
        //             if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //                 // echo "File " . basename($_FILES["fileToUpload"]["name"]) . " berhasil diunggah.";

        //                 // Baca isi file JSON
        //                 $file_content = file_get_contents($target_file);

        //                 // Konversi ke UTF-8 jika diperlukan
        //                 $file_content = mb_convert_encoding($file_content, 'UTF-8', 'ISO-8859-1');



        //                 $data = json_decode($file_content, true, 512, JSON_BIGINT_AS_STRING);

        //                 if ($data !== null) {
        //                     // Lakukan pemrosesan data JSON sesuai kebutuhan
        //                     // Contoh: Mengakses data individu
        //                     if ($data === null) {
        //                         echo "Gagal menguraikan JSON.";
        //                     } else {


        //                         // Mengakses data pada berbagai tingkatan dalam array
        //                         $individual = $data['individual'];
        //                         $fasilitas = $individual['fasilitas'];
        //                         $ringkasanFasilitas = $individual['ringkasanFasilitas'];
        //                         $kreditPembiayan = $fasilitas['kreditPembiayan'];



        //                         $a = 0;
        //                         $b = 0;
        //                         // $c =  0;
        //                         $jenis_jaminan = array();
        //                         // $jenis_jaminan_temp = array();
        //                         // $jenis_jaminan_fix = array();


        //                         foreach ($kreditPembiayan as $kredit) {

        //                             if ($kredit['kondisiKet'] == "Lunas") {
        //                                 $a++;
        //                                 continue;
        //                             }



        //                             $_POST["nama_bank"] = $kredit['ljkKet'];
        //                             $_POST["jenis_fasilitas"] = $kredit['jenisKreditPembiayaanKet'];
        //                             $_POST["plafond"] = $kredit['plafonAwal'];
        //                             $_POST["bakidebet"] = $kredit['bakiDebet'];
        //                             $_POST["kolektibilitas"] = $kredit['kualitas'];

        //                             // Tanggal dalam format "20171114"
        //                             $tanggalAwalKredit = $kredit['tanggalMulai'];

        //                             // Konversi ke format "YYYY-MM-DD"
        //                             $tanggalAwalKreditFormatted = substr($tanggalAwalKredit, 0, 4) . "-" . substr($tanggalAwalKredit, 4, 2) . "-" . substr($tanggalAwalKredit, 6, 2);


        //                             // Tanggal dalam format "20271114"
        //                             $tanggalJatuhTempo = $kredit['tanggalJatuhTempo'];

        //                             // Konversi ke format "YYYY-MM-DD"
        //                             $tanggalJatuhTempoFormatted = substr($tanggalJatuhTempo, 0, 4) . "-" . substr($tanggalJatuhTempo, 4, 2) . "-" . substr($tanggalJatuhTempo, 6, 2);


        //                             $_POST["waktu_awal"] = $tanggalAwalKreditFormatted;
        //                             $_POST["waktu_akhir"] = $tanggalJatuhTempoFormatted;
        //                             $_POST["suku_bunga"] = $kredit['sukuBungaImbalan'];


        //                             // Loop melalui setiap agunan

        //                             // echo "Data ke " . $a;

        //                             echo "<br>";
        //                             echo "data ke " . $a;
        //                             echo "<br>";


        //                             // var_dump($kredit['agunan']);

        //                             $dataJenisAgunanTemp = array();
        //                             $nilaiAgunanMenurutLJKTemp = array();

        //                             $namaPemilikAgunan = array();
        //                             $alamatAgunan = array();
        //                             $jenisPengikatanKet = array();

        //                             foreach ($kredit['agunan']  as $agunanData) {

        //                                 $dataJenisAgunanTemp[] = $agunanData['jenisAgunanKet'];
        //                                 $nilaiAgunanMenurutLJKTemp[] = $agunanData['nilaiAgunanMenurutLJK'];

        //                                 $namaPemilikAgunan[] = $agunanData['namaPemilikAgunan'];
        //                                 $alamatAgunan[] = $agunanData['alamatAgunan'];
        //                                 $jenisPengikatanKet[] = $agunanData['jenisPengikatanKet'];

        //                                 // $_POST["pemilik_jaminan"] =  $agunanData['namaPemilikAgunan'];
        //                                 // $_POST["alamat_jaminan"] =  $agunanData['alamatAgunan'];
        //                                 // $_POST["pengikatan"] =  $agunanData['jenisPengikatanKet'];

        //                             }



        //                             $_POST['jenis_jaminan'] = "";
        //                             $_POST['nilai_jaminan'] = "";
        //                             $_POST["pemilik_jaminan"] = "";
        //                             $_POST["alamat_jaminan"] = "";
        //                             $_POST["pengikatan"] = "";
        //                             foreach ($dataJenisAgunanTemp as $row) {
        //                                 $jenisAgunanKet = $row;
        //                                 $_POST['jenis_jaminan'] = $row;
        //                                 break;
        //                             }

        //                             foreach ($nilaiAgunanMenurutLJKTemp as $row) {
        //                                 $nilaiAgunanMenurutLJK = $row;
        //                                 $_POST['nilai_jaminan'] = $row;
        //                                 break;
        //                             }

        //                             foreach ($namaPemilikAgunan as $row) {
        //                                 $_POST["pemilik_jaminan"] = $row;
        //                                 break;
        //                             }

        //                             foreach ($alamatAgunan as $row) {
        //                                 $_POST["alamat_jaminan"] = $row;
        //                                 break;
        //                             }


        //                             foreach ($jenisPengikatanKet as $row) {

        //                                 $_POST["pengikatan"]  = $row;
        //                                 break;
        //                             }




        //                             $_POST["keterangan"] = "Kondisi: " . $kredit['kondisiKet'] . ' | Denda : ' . number_format($kredit['denda'], 0, ',', '.') . ' | ' . $individual['nomorLaporan'] . " | Data Hasil Upload";


        //                             $_POST["user_create"] = $_COOKIE['username'];;




        //                             if ($_POST['submit'] == "btn_upload_file_slik_pemohon") {
        //                                 $_POST['pemohon_pasangan'] = "PEMOHON";
        //                             } else if ($_POST['submit'] == "btn_upload_file_slik_pasangan") {
        //                                 $_POST['pemohon_pasangan'] = "PASANGAN";
        //                             }
        //                             $_POST["tgl_create"] = date('Y-m-d H:i:s');
        //                             $_POST["tanggal_slik"] = date('Y-m-d H:i:s');
        //                             $_POST["lokasi_berkas"] = "RO";



        //                             $res[$a] = $this->model('m_slik')->simpan_slik_pemohon($_POST);
        //                             $ress[$a] = $this->model('m_slik')->update_tgl_slik_tbl_permohon_kredit($_POST);

        //                             if ($res[$a] . $a > 0 && $ress[$a] > 0) {
        //                                 echo "berhasil insert";
        //                             } else {
        //                                 echo "gagal insert";
        //                             }

        //                             echo "<br>";
        //                             echo $a;
        //                             echo "<br>";


        //                             $a++;
        //                         }
        //                         $this->model('m_log')->upload_slik();
        //                         header('Location:' . BASEURL . '/slik/input_data_slik/' .  $_POST['no_permohonan_kredit']);
        //                     }





        //                     // Hapus file setelah pemrosesan selesai
        //                     unlink($target_file);
        //                     echo "File telah dihapus.";
        //                 } else {
        //                     echo "Tidak dapat mendekode JSON.";
        //                 }
        //             } else {
        //                 echo "Maaf, terjadi kesalahan saat mengunggah file.";
        //             }
        //         }
        //     } else {
        //         $data['pesan'] = "KTP SALAH";
        //         $data['no_permohonan_kredit'] = $_POST['no_permohonan_kredit'];
        //         $this->view('slik/alert', $data);
        //     }
        // }







        // echo "KTP 2 " . $_POST['ktp2'];
        // echo "<br>";
        // echo "KTP 3 " . $_POST['ktp3'];
    }

    public function slik_ktp($namafile)
    {

        if (isset($_POST["submit"])) {

            if ($_POST['ktp_npwp_file'] == $_POST['ktp_npwp_db']) {


                $target_dir = "upload/"; // Direktori tempat menyimpan file yang diunggah
                $target_file = $target_dir . $namafile;
                $uploadOk = 1;
                $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // Cek apakah file adalah file txt
                if ($fileType != "txt") {
                    echo "File harus dalam format txt.";
                    $uploadOk = 0;
                }

                // Cek apakah file telah diunggah dengan benar
                if ($uploadOk == 0) {
                    echo "File tidak diunggah.";
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        // echo "File " . basename($_FILES["fileToUpload"]["name"]) . " berhasil diunggah.";

                        // Baca isi file JSON
                        $file_content = file_get_contents($target_file);

                        // Konversi ke UTF-8 jika diperlukan
                        $file_content = mb_convert_encoding($file_content, 'UTF-8', 'ISO-8859-1');



                        $data = json_decode($file_content, true, 512, JSON_BIGINT_AS_STRING);



                        if ($data != null) {
                            // Lakukan pemrosesan data JSON sesuai kebutuhan
                            // Contoh: Mengakses data individu
                            if ($data === null) {
                                echo "Gagal menguraikan JSON.";
                            } else {


                                // Mengakses data pada berbagai tingkatan dalam array
                                $individual = $data['individual'];
                                $fasilitas = $individual['fasilitas'];
                                $ringkasanFasilitas = $individual['ringkasanFasilitas'];
                                $kreditPembiayan = $fasilitas['kreditPembiayan'];



                                $a = 0;
                                $b = 0;
                                // $c =  0;
                                $jenis_jaminan = array();
                                // $jenis_jaminan_temp = array();
                                // $jenis_jaminan_fix = array();


                                foreach ($kreditPembiayan as $kredit) {

                                    if ($kredit['kondisiKet'] == "Lunas") {
                                        $a++;
                                        continue;
                                    }



                                    $_POST["nama_bank"] = $kredit['ljkKet'];
                                    $_POST["jenis_fasilitas"] = $kredit['jenisKreditPembiayaanKet'];
                                    $_POST["plafond"] = $kredit['plafonAwal'];
                                    $_POST["bakidebet"] = $kredit['bakiDebet'];
                                    $_POST["kolektibilitas"] = $kredit['kualitas'];

                                    // Tanggal dalam format "20171114"
                                    $tanggalAwalKredit = $kredit['tanggalMulai'];

                                    // Konversi ke format "YYYY-MM-DD"
                                    $tanggalAwalKreditFormatted = substr($tanggalAwalKredit, 0, 4) . "-" . substr($tanggalAwalKredit, 4, 2) . "-" . substr($tanggalAwalKredit, 6, 2);


                                    // Tanggal dalam format "20271114"
                                    $tanggalJatuhTempo = $kredit['tanggalJatuhTempo'];

                                    // Konversi ke format "YYYY-MM-DD"
                                    $tanggalJatuhTempoFormatted = substr($tanggalJatuhTempo, 0, 4) . "-" . substr($tanggalJatuhTempo, 4, 2) . "-" . substr($tanggalJatuhTempo, 6, 2);


                                    $_POST["waktu_awal"] = $tanggalAwalKreditFormatted;
                                    $_POST["waktu_akhir"] = $tanggalJatuhTempoFormatted;
                                    $_POST["suku_bunga"] = $kredit['sukuBungaImbalan'];


                                    // Loop melalui setiap agunan

                                    // echo "Data ke " . $a;

                                    echo "<br>";
                                    echo "data ke " . $a;
                                    echo "<br>";


                                    // var_dump($kredit['agunan']);

                                    $dataJenisAgunanTemp = array();
                                    $nilaiAgunanMenurutLJKTemp = array();

                                    $namaPemilikAgunan = array();
                                    $alamatAgunan = array();
                                    $jenisPengikatanKet = array();

                                    foreach ($kredit['agunan']  as $agunanData) {

                                        $dataJenisAgunanTemp[] = $agunanData['jenisAgunanKet'];
                                        $nilaiAgunanMenurutLJKTemp[] = $agunanData['nilaiAgunanMenurutLJK'];

                                        $namaPemilikAgunan[] = $agunanData['namaPemilikAgunan'];
                                        $alamatAgunan[] = $agunanData['alamatAgunan'];
                                        $jenisPengikatanKet[] = $agunanData['jenisPengikatanKet'];

                                        // $_POST["pemilik_jaminan"] =  $agunanData['namaPemilikAgunan'];
                                        // $_POST["alamat_jaminan"] =  $agunanData['alamatAgunan'];
                                        // $_POST["pengikatan"] =  $agunanData['jenisPengikatanKet'];

                                    }



                                    $_POST['jenis_jaminan'] = "";
                                    $_POST['nilai_jaminan'] = "";
                                    $_POST["pemilik_jaminan"] = "";
                                    $_POST["alamat_jaminan"] = "";
                                    $_POST["pengikatan"] = "";
                                    foreach ($dataJenisAgunanTemp as $row) {
                                        $jenisAgunanKet = $row;
                                        $_POST['jenis_jaminan'] = $row;
                                        break;
                                    }

                                    foreach ($nilaiAgunanMenurutLJKTemp as $row) {
                                        $nilaiAgunanMenurutLJK = $row;
                                        $_POST['nilai_jaminan'] = $row;
                                        break;
                                    }

                                    foreach ($namaPemilikAgunan as $row) {
                                        $_POST["pemilik_jaminan"] = $row;
                                        break;
                                    }

                                    foreach ($alamatAgunan as $row) {
                                        $_POST["alamat_jaminan"] = $row;
                                        break;
                                    }


                                    foreach ($jenisPengikatanKet as $row) {

                                        $_POST["pengikatan"]  = $row;
                                        break;
                                    }




                                    $_POST["keterangan"] = "Kondisi: " . $kredit['kondisiKet'] . ' | Denda : ' . number_format($kredit['denda'], 0, ',', '.') . ' | ' . $individual['nomorLaporan'] . " | Data Hasil Upload";


                                    $_POST["user_create"] = $_COOKIE['username'];;




                                    if ($_POST['submit'] == "btn_upload_file_slik_pemohon") {
                                        $_POST['pemohon_pasangan'] = "PEMOHON";
                                    } else if ($_POST['submit'] == "btn_upload_file_slik_pasangan") {
                                        $_POST['pemohon_pasangan'] = "PASANGAN";
                                    }
                                    $_POST["tgl_create"] = date('Y-m-d H:i:s');
                                    $_POST["tanggal_slik"] = date('Y-m-d H:i:s');
                                    $_POST["lokasi_berkas"] = "RO";



                                    $res[$a] = $this->model('m_slik')->simpan_slik_pemohon($_POST);
                                    $ress[$a] = $this->model('m_slik')->update_tgl_slik_tbl_permohon_kredit($_POST);

                                    if ($res[$a] . $a > 0 && $ress[$a] > 0) {
                                        echo "berhasil insert";
                                    } else {
                                        echo "gagal insert";
                                    }

                                    echo "<br>";
                                    echo $a;
                                    echo "<br>";


                                    $a++;
                                }
                                $this->model('m_log')->upload_slik();
                                header('Location:' . BASEURL . '/slik/input_data_slik/' .  $_POST['no_permohonan_kredit']);
                            }





                            // Hapus file setelah pemrosesan selesai
                            unlink($target_file);
                            echo "File telah dihapus.";
                        } else {
                            echo "Tidak dapat mendekode JSON.";
                        }
                    } else {
                        echo "Maaf, terjadi kesalahan saat mengunggah file.";
                    }
                }
            } else {
                $data['pesan'] = "Identitas SLIK Tidak Sesuai";
                $data['no_permohonan_kredit'] = $_POST['no_permohonan_kredit'];
                $this->view('slik/alert', $data);
            }
        }
    }

    public function slik_npwp($namafile)
    {





        if (isset($_POST["submit"])) {

            // ktp2 adalah ktp yang di ambil dari nama file dedangkan ktp3 adalah data dari database permohon_kredit
            if ($_POST['ktp_npwp_file'] == $_POST['ktp_npwp_db']) {


                $target_dir = "upload/"; // Direktori tempat menyimpan file yang diunggah
                $target_file = $target_dir . $namafile;
                $uploadOk = 1;
                $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // Cek apakah file adalah file txt
                if ($fileType != "txt") {
                    echo "File harus dalam format txt.";
                    $uploadOk = 0;
                }

                // Cek apakah file telah diunggah dengan benar
                if ($uploadOk == 0) {
                    echo "File tidak diunggah.";
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        // echo "File " . basename($_FILES["fileToUpload"]["name"]) . " berhasil diunggah.";

                        // Baca isi file JSON
                        $file_content = file_get_contents($target_file);

                        // Konversi ke UTF-8 jika diperlukan
                        $file_content = mb_convert_encoding($file_content, 'UTF-8', 'ISO-8859-1');



                        $data = json_decode($file_content, true, 512, JSON_BIGINT_AS_STRING);



                        if ($data != null) {
                            // Lakukan pemrosesan data JSON sesuai kebutuhan
                            // Contoh: Mengakses data individu
                            if ($data === null) {
                                echo "Gagal menguraikan JSON.";
                            } else {


                                // Mengakses data pada berbagai tingkatan dalam array
                                $individual = $data['perusahaan'];
                                $fasilitas = $individual['fasilitas'];
                                $ringkasanFasilitas = $individual['ringkasanFasilitas'];
                                $kreditPembiayan = $fasilitas['kreditPembiayan'];



                                $a = 0;
                                $b = 0;
                                // $c =  0;
                                $jenis_jaminan = array();
                                // $jenis_jaminan_temp = array();
                                // $jenis_jaminan_fix = array();


                                foreach ($kreditPembiayan as $kredit) {

                                    if ($kredit['kondisiKet'] == "Lunas") {
                                        $a++;
                                        continue;
                                    }



                                    $_POST["nama_bank"] = $kredit['ljkKet'];
                                    $_POST["jenis_fasilitas"] = $kredit['jenisKreditPembiayaanKet'];
                                    $_POST["plafond"] = $kredit['plafonAwal'];
                                    $_POST["bakidebet"] = $kredit['bakiDebet'];
                                    $_POST["kolektibilitas"] = $kredit['kualitas'];

                                    // Tanggal dalam format "20171114"
                                    $tanggalAwalKredit = $kredit['tanggalMulai'];

                                    // Konversi ke format "YYYY-MM-DD"
                                    $tanggalAwalKreditFormatted = substr($tanggalAwalKredit, 0, 4) . "-" . substr($tanggalAwalKredit, 4, 2) . "-" . substr($tanggalAwalKredit, 6, 2);


                                    // Tanggal dalam format "20271114"
                                    $tanggalJatuhTempo = $kredit['tanggalJatuhTempo'];

                                    // Konversi ke format "YYYY-MM-DD"
                                    $tanggalJatuhTempoFormatted = substr($tanggalJatuhTempo, 0, 4) . "-" . substr($tanggalJatuhTempo, 4, 2) . "-" . substr($tanggalJatuhTempo, 6, 2);


                                    $_POST["waktu_awal"] = $tanggalAwalKreditFormatted;
                                    $_POST["waktu_akhir"] = $tanggalJatuhTempoFormatted;
                                    $_POST["suku_bunga"] = $kredit['sukuBungaImbalan'];


                                    // Loop melalui setiap agunan

                                    // echo "Data ke " . $a;

                                    echo "<br>";
                                    echo "data ke " . $a;
                                    echo "<br>";


                                    // var_dump($kredit['agunan']);

                                    $dataJenisAgunanTemp = array();
                                    $nilaiAgunanMenurutLJKTemp = array();

                                    $namaPemilikAgunan = array();
                                    $alamatAgunan = array();
                                    $jenisPengikatanKet = array();

                                    foreach ($kredit['agunan']  as $agunanData) {

                                        $dataJenisAgunanTemp[] = $agunanData['jenisAgunanKet'];
                                        $nilaiAgunanMenurutLJKTemp[] = $agunanData['nilaiAgunanMenurutLJK'];

                                        $namaPemilikAgunan[] = $agunanData['namaPemilikAgunan'];
                                        $alamatAgunan[] = $agunanData['alamatAgunan'];
                                        $jenisPengikatanKet[] = $agunanData['jenisPengikatanKet'];

                                        // $_POST["pemilik_jaminan"] =  $agunanData['namaPemilikAgunan'];
                                        // $_POST["alamat_jaminan"] =  $agunanData['alamatAgunan'];
                                        // $_POST["pengikatan"] =  $agunanData['jenisPengikatanKet'];

                                    }



                                    $_POST['jenis_jaminan'] = "";
                                    $_POST['nilai_jaminan'] = "";
                                    $_POST["pemilik_jaminan"] = "";
                                    $_POST["alamat_jaminan"] = "";
                                    $_POST["pengikatan"] = "";
                                    foreach ($dataJenisAgunanTemp as $row) {
                                        $jenisAgunanKet = $row;
                                        $_POST['jenis_jaminan'] = $row;
                                        break;
                                    }

                                    foreach ($nilaiAgunanMenurutLJKTemp as $row) {
                                        $nilaiAgunanMenurutLJK = $row;
                                        $_POST['nilai_jaminan'] = $row;
                                        break;
                                    }

                                    foreach ($namaPemilikAgunan as $row) {
                                        $_POST["pemilik_jaminan"] = $row;
                                        break;
                                    }

                                    foreach ($alamatAgunan as $row) {
                                        $_POST["alamat_jaminan"] = $row;
                                        break;
                                    }


                                    foreach ($jenisPengikatanKet as $row) {

                                        $_POST["pengikatan"]  = $row;
                                        break;
                                    }




                                    $_POST["keterangan"] = "Kondisi: " . $kredit['kondisiKet'] . ' | Denda : ' . number_format($kredit['denda'], 0, ',', '.') . ' | ' . $individual['nomorLaporan'] . " | Data Hasil Upload";


                                    $_POST["user_create"] = $_COOKIE['username'];;




                                    if ($_POST['submit'] == "btn_upload_file_slik_pemohon") {
                                        $_POST['pemohon_pasangan'] = "PEMOHON";
                                    } else if ($_POST['submit'] == "btn_upload_file_slik_pasangan") {
                                        $_POST['pemohon_pasangan'] = "PASANGAN";
                                    }
                                    $_POST["tgl_create"] = date('Y-m-d H:i:s');
                                    $_POST["tanggal_slik"] = date('Y-m-d H:i:s');
                                    $_POST["lokasi_berkas"] = "RO";



                                    $res[$a] = $this->model('m_slik')->simpan_slik_pemohon($_POST);
                                    $ress[$a] = $this->model('m_slik')->update_tgl_slik_tbl_permohon_kredit($_POST);

                                    if ($res[$a] . $a > 0 && $ress[$a] > 0) {
                                        echo "berhasil insert";
                                    } else {
                                        echo "gagal insert";
                                    }

                                    echo "<br>";
                                    echo $a;
                                    echo "<br>";


                                    $a++;
                                }
                                $this->model('m_log')->upload_slik();
                                header('Location:' . BASEURL . '/slik/input_data_slik/' .  $_POST['no_permohonan_kredit']);
                            }





                            // Hapus file setelah pemrosesan selesai
                            unlink($target_file);
                            echo "File telah dihapus.";
                        } else {
                            echo "Tidak dapat mendekode JSON.";
                        }
                    } else {
                        echo "Maaf, terjadi kesalahan saat mengunggah file.";
                    }
                }
            } else {
                $data['pesan'] = "Identitas SLIK Tidak Sesuai";
                $data['no_permohonan_kredit'] = $_POST['no_permohonan_kredit'];
                $this->view('slik/alert', $data);
            }
        }
    }
}
