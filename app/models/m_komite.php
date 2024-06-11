<?php

class m_komite
{

    public $db;

    public function __construct()
    {

        date_default_timezone_set('Asia/Makassar');
        $this->db = new Database;
    }


    public function daftar_belum_komite()
    {





        $limit_direksi_awal = $_COOKIE['limit_direksi_awal'];
        $limit_direksi_akhir = $_COOKIE['limit_direksi_akhir'];

        // jika login sebagai komite pusat
        $komite = $_COOKIE['tipe_komite'];
        if ($komite == "PUSAT") {

            $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.tipe_komite,B.status,B.catatan_pending
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND (B.tipe_komite =:tipe_komite_1 OR B.tipe_komite=:tipe_komite_2)  AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3)");
            $this->db->bind('status1', 'DIAJUKAN');
            $this->db->bind('status2', 'KOMITE');
            $this->db->bind('tipe_komite_1', "PUSAT");
            $this->db->bind('tipe_komite_2', "DIAJUKAN PUSAT");
            $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
            $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
            $this->db->bind('komite_1', $_COOKIE['username']);
            $this->db->bind('komite_2', $_COOKIE['username']);
            $this->db->bind('komite_3', $_COOKIE['username']);
            return $this->db->resultSet();
        } else if ($komite == "CABANG" && $_COOKIE['kode_cabang'] == '00') {

            $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending,A.tipe_kredit
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE  (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND A.tipe_kredit = :tipe_kredit AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
            $this->db->bind('status1', 'DIAJUKAN');
            $this->db->bind('status2', 'KOMITE');
            $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
            $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
            $this->db->bind('tipe_kredit', $_COOKIE['tipe_kredit']);
            $this->db->bind('komite_1', $_COOKIE['username']);
            $this->db->bind('komite_2', $_COOKIE['username']);
            $this->db->bind('komite_3', $_COOKIE['username']);
            return $this->db->resultSet();
        }
        // jika login selain dari komite pusat atau jika ternyata login sebagai komite cabang
        else {


            //jika login sebagai cabang dan tipe komite permohonan kredit adalah pusat atau diatas limit maka batasi approve cabang hanya max 2 dan 1 komite pusat
            // jadi ketika telah sampai 2 di tbl_komite maka jangan tampilkan lagi daftar permohonan di user komite cabang yang belum approve
            // cek dlu bagian tabel komite berdasarkan no_registrasi dan user_tipe_komite apakah cabang jika ada 2 


            if ($_COOKIE['tipe_kredit'] == "ALL") {
                $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
                $this->db->bind('status1', 'DIAJUKAN');
                $this->db->bind('status2', 'KOMITE');
                $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
                $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
                $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                $this->db->bind('komite_1', $_COOKIE['username']);
                $this->db->bind('komite_2', $_COOKIE['username']);
                $this->db->bind('komite_3', $_COOKIE['username']);
                return $this->db->resultSet();
            } else {
                $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending,A.tipe_kredit
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND A.tipe_kredit = :tipe_kredit AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
                $this->db->bind('status1', 'DIAJUKAN');
                $this->db->bind('status2', 'KOMITE');
                $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
                $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
                $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                $this->db->bind('tipe_kredit', $_COOKIE['tipe_kredit']);
                $this->db->bind('komite_1', $_COOKIE['username']);
                $this->db->bind('komite_2', $_COOKIE['username']);
                $this->db->bind('komite_3', $_COOKIE['username']);
                return $this->db->resultSet();
            }
        }
    }




    public function hitung_daftar_belum_komite()
    {







        $limit_direksi_awal = $_COOKIE['limit_direksi_awal'];
        $limit_direksi_akhir = $_COOKIE['limit_direksi_akhir'];

        // jika login sebagai komite pusat
        $komite = $_COOKIE['tipe_komite'];
        if ($komite == "PUSAT") {

            $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.tipe_komite,B.status,B.catatan_pending
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND (B.tipe_komite =:tipe_komite_1 OR B.tipe_komite=:tipe_komite_2)  AND (B.status =:status1 OR B.status =:status2 )  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
            $this->db->bind('status1', 'DIAJUKAN');
            $this->db->bind('status2', 'KOMITE');
            $this->db->bind('tipe_komite_1', "PUSAT");
            $this->db->bind('tipe_komite_2', "DIAJUKAN PUSAT");
            $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
            $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
            $this->db->bind('komite_1', $_COOKIE['username']);
            $this->db->bind('komite_2', $_COOKIE['username']);
            $this->db->bind('komite_3', $_COOKIE['username']);
            $this->db->execute();
            return $this->db->rowCount();
        } else if ($komite == "CABANG" && $_COOKIE['kode_cabang'] == '00') {

            $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending,A.tipe_kredit
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE  (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND A.tipe_kredit = :tipe_kredit AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
            $this->db->bind('status1', 'DIAJUKAN');
            $this->db->bind('status2', 'KOMITE');
            $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
            $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
            $this->db->bind('tipe_kredit', $_COOKIE['tipe_kredit']);
            $this->db->bind('komite_1', $_COOKIE['username']);
            $this->db->bind('komite_2', $_COOKIE['username']);
            $this->db->bind('komite_3', $_COOKIE['username']);
            $this->db->execute();
            return $this->db->rowCount();
        }

        // jika login selain dari komite pusat atau jika ternyata login sebagai komite cabang
        else {


            //jika login sebagai cabang dan tipe komite permohonan kredit adalah pusat atau diatas limit maka batasi approve cabang hanya max 2 dan 1 komite pusat
            // jadi ketika telah sampai 2 di tbl_komite maka jangan tampilkan lagi daftar permohonan di user komite cabang yang belum approve
            // cek dlu bagian tabel komite berdasarkan no_registrasi dan user_tipe_komite apakah cabang jika ada 2 



            if ($_COOKIE['tipe_kredit'] == "ALL") {
                $this->db->query("SELECT A.no_permohonan_kredit,  A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND (B.status =:status1 OR B.status =:status2 )  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
                $this->db->bind('status1', 'DIAJUKAN');
                $this->db->bind('status2', 'KOMITE');

                $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
                $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
                $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                $this->db->bind('komite_1', $_COOKIE['username']);
                $this->db->bind('komite_2', $_COOKIE['username']);
                $this->db->bind('komite_3', $_COOKIE['username']);
                $this->db->execute();
                return $this->db->rowCount();
            } else {
                $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending,A.tipe_kredit
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND A.tipe_kredit = :tipe_kredit AND (B.status =:status1 OR B.status =:status2 )  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
                $this->db->bind('status1', 'DIAJUKAN');
                $this->db->bind('status2', 'KOMITE');
                $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
                $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
                $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                $this->db->bind('tipe_kredit', $_COOKIE['tipe_kredit']);
                $this->db->bind('komite_1', $_COOKIE['username']);
                $this->db->bind('komite_2', $_COOKIE['username']);
                $this->db->bind('komite_3', $_COOKIE['username']);
                $this->db->execute();
                return $this->db->rowCount();
            }
        }
    }


    public function temp()
    {
        // jika dia login cookie sebagai cabang maka tampilkan data yang hanya dibawa limit


        // if (isset($_COOKIE['tipe_komite']) && $_COOKIE['tipe_komite'] == "CABANG") {



        //     $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu
        //     FROM tbl_permohon_kredit A
        //     JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND B.plafond <=:plafond AND tipe_komite=:tipe_komite AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3 ) ");
        //     $this->db->bind('status1', 'DIAJUKAN');
        //     $this->db->bind('status2', 'KOMITE');
        //     $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        //     $this->db->bind('plafond', $_COOKIE['limit']);
        //     $this->db->bind('tipe_komite', $_COOKIE['tipe_komite']);
        //     $this->db->bind('komite_1', $_COOKIE['username']);
        //     $this->db->bind('komite_2', $_COOKIE['username']);
        //     $this->db->bind('komite_3', $_COOKIE['username']);
        //     return $this->db->resultSet();
        // }

        // jika dia login cookie sebagai pusat (direksi) maka tampilkan data diatas limit dan tampilkan data ke komite pusat dan komite cabang, namun 2 cabang dan 1 pusat yang akan di terima datanya sebagi keputusan


        // jika login sebagai pusat
        if ($_COOKIE['tipe_komite'] == "PUSAT") {




            $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.tipe_komite,B.status,B.catatan_pending
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE  (B.tipe_komite =:tipe_komite1 OR B.tipe_komite=:tipe_komite2)  AND (B.status =:status1 OR B.status =:status2 )  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
            $this->db->bind('status1', 'DIAJUKAN');
            $this->db->bind('status2', 'KOMITE');

            // $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            // $this->db->bind('plafond', 5000000000); // batas 0 sampai 5 miliyar
            $this->db->bind('tipe_komite1', "PUSAT");
            $this->db->bind('tipe_komite2', "DIAJUKAN PUSAT");
            $this->db->bind('komite_1', $_COOKIE['username']);
            $this->db->bind('komite_2', $_COOKIE['username']);
            $this->db->bind('komite_3', $_COOKIE['username']);
            return $this->db->resultSet();
            // } else {

            //     $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.tipe_komite,B.status,B.catatan_pending
            //     FROM tbl_permohon_kredit A
            //     JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND B.plafond >:plafond AND (B.tipe_komite =:tipe_komite1 OR B.tipe_komite=:tipe_komite2)  AND (B.status =:status1 OR B.status =:status2 )  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
            //     $this->db->bind('status1', 'DIAJUKAN');
            //     $this->db->bind('status2', 'KOMITE');

            //     $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            //     $this->db->bind('plafond', 5000000000); // batas 0 sampai 5 miliyar
            //     $this->db->bind('tipe_komite1', "PUSAT");
            //     $this->db->bind('tipe_komite2', "DIAJUKAN PUSAT");
            //     $this->db->bind('komite_1', $_COOKIE['username']);
            //     $this->db->bind('komite_2', $_COOKIE['username']);
            //     $this->db->bind('komite_3', $_COOKIE['username']);
            //     return $this->db->resultSet();
            // }
        }

        // jika dia login sebagi pak made maka batas plafond sampai 5 mili






        //    jika login sebagai cabang
        else if ($_COOKIE['tipe_komite'] == "CABANG") {


            // jika tipe krdit konsumtif atau produktif
            if ($_COOKIE['tipe_kredit'] == "KONSUMTIF" or $_COOKIE['tipe_kredit'] == "PRODUKTIF") {

                $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, A.tipe_kredit, B.plafond,B.jangka_waktu,B.status,B.catatan_pending
            FROM tbl_permohon_kredit A
            JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND A.tipe_Kredit = :tipe_kredit  AND (B.status =:status1 OR B.status =:status2 )  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3 )");
                $this->db->bind('status1', 'DIAJUKAN');
                $this->db->bind('status2', 'KOMITE');
                $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                // $this->db->bind('plafond', $_COOKIE['limit']);
                $this->db->bind('komite_1', $_COOKIE['username']);
                $this->db->bind('komite_2', $_COOKIE['username']);
                $this->db->bind('komite_3', $_COOKIE['username']);
                $this->db->bind('tipe_kredit', $_COOKIE['tipe_kredit']);
                return $this->db->resultSet();
            } else {

                $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, A.tipe_kredit, B.plafond,B.jangka_waktu,B.status,B.catatan_pending
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND (B.status =:status1 OR B.status =:status2 )  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3 )");
                $this->db->bind('status1', 'DIAJUKAN');
                $this->db->bind('status2', 'KOMITE');
                $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                // $this->db->bind('plafond', $_COOKIE['limit']);
                $this->db->bind('komite_1', $_COOKIE['username']);
                $this->db->bind('komite_2', $_COOKIE['username']);
                $this->db->bind('komite_3', $_COOKIE['username']);

                return $this->db->resultSet();
            }
        }










        // if (isset($_COOKIE['tipe_komite']) && $_COOKIE['tipe_komite'] == "PUSAT") {

        //     $this->db->query('SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu
        //     FROM tbl_permohon_kredit A
        //     JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE(B.status =:status1 OR B.status =:status2) AND (B.tipe_komite=:tipe_komite_pusat OR B.tipe_komite =:tipe_komite_diajukan_pusat) AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3 ) ');
        //     $this->db->bind('status1', 'DIAJUKAN');
        //     $this->db->bind('status2', 'KOMITE');
        //     $this->db->bind('tipe_komite_pusat', 'PUSAT');
        //     $this->db->bind('tipe_komite_diajukan_pusat', 'DIAJUKAN PUSAT');
        //     $this->db->bind('komite_1', $_COOKIE['username']);
        //     $this->db->bind('komite_2', $_COOKIE['username']);
        //     $this->db->bind('komite_3', $_COOKIE['username']);
        //     return $this->db->resultSet();
        // } else  if (isset($_COOKIE['tipe_komite']) && $_COOKIE['tipe_komite'] == "CABANG") {
        //     $this->db->query('SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu
        //     FROM tbl_permohon_kredit A
        //     JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3 )');
        //     $this->db->bind('status1', 'DIAJUKAN');
        //     $this->db->bind('status2', 'KOMITE');
        //     // $this->db->bind('tipe_komite_pusat', 'CABANG');
        //     // $this->db->bind('tipe_komite_diajukan_pusat', 'DIAJUKAN PUSAT');
        //     $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        //     $this->db->bind('komite_1', $_COOKIE['username']);
        //     $this->db->bind('komite_2', $_COOKIE['username']);
        //     $this->db->bind('komite_3', $_COOKIE['username']);
        //     return $this->db->resultSet();
        // }
    }


    public function daftar_sudah_komite()
    {
        $query = "SELECT A.no_permohonan_kredit, A.nama_pemohon, A.kode_cabang,A.id_analis, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu,B.tgl_create,B.status,B.user_create
        FROM tbl_permohon_kredit A
        JOIN tbl_komite B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE B.user_create =:user_create ORDER BY B.tgl_create DESC";
        $this->db->query($query);
        $this->db->bind('user_create', $_COOKIE['username']);
        return $this->db->resultSet();
    }


    public function modal_detail_rekomendasi_komite()
    {

        $this->db->query('SELECT * FROM tbl_permohon_kredit WHERE no_permohonan_kredit=:no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['id']);
        return $this->db->single();
    }

    public function cek_pass_komite()
    {
        $username_komite = $_POST['username_komite'];
        $password_komite = $_POST['password_komite'];

        $this->db->query('SELECT * FROM tbl_user WHERE username=:username');
        $this->db->bind('username', $username_komite);

        $pass_komite = $this->db->single();

        if ($pass_komite && password_verify($password_komite, $pass_komite['pin'])) {
            return 'sukses';
        } else {
            return "pass_komite_salah";
        }
    }

    public function permohonan_disetujui()
    {
        date_default_timezone_set('Asia/Makassar');




        $query = "INSERT INTO tbl_komite 
        (
        no_permohonan_kredit,
        plafond,
        jangka_waktu,
        suku_bunga,
        penambahan,
        biaya_provisi_nominal,
        biaya_administrasi_nominal,
        angsuran_perbulan,
        tabungan,
        premi_asuransi,
        biaya_notaris,
        biaya_apht,
        asuransi_kerugian,
        catatan_komite,
        user_create,
        tgl_create,
        syarat_lainnya,
        status,
        keterangan,
        user_tipe_komite
        ) 
        VALUES
        (
        :no_permohonan_kredit,               
        :plafond,
        :jangka_waktu,
        :suku_bunga,
        :penambahan,
        :biaya_provisi_nominal,
        :biaya_administrasi_nominal,
        :angsuran_perbulan,
        :tabungan,
        :premi_asuransi,
        :biaya_notaris,
        :biaya_apht,
        :asuransi_kerugian,
        :catatan_komite,
        :user_create,
        :tgl_create,
        :syarat_lainnya,
        :status,
        :keterangan,
        :user_tipe_komite 
        )";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('plafond',  $_POST['plafond']);
        $this->db->bind('jangka_waktu',  $_POST['jangka_waktu']);
        $this->db->bind('suku_bunga',  $_POST['suku_bunga']);
        $this->db->bind('penambahan',  $_POST['penambahan']);
        $this->db->bind('biaya_provisi_nominal',  $_POST['biaya_provisi_nominal']);
        $this->db->bind('biaya_administrasi_nominal',  $_POST['biaya_administrasi_nominal']);
        $this->db->bind('angsuran_perbulan',  $_POST['angsuran_perbulan']);
        $this->db->bind('tabungan',  $_POST['tabungan']);
        $this->db->bind('premi_asuransi',  $_POST['premi_asuransi']);
        $this->db->bind('biaya_notaris',  $_POST['biaya_notaris']);
        $this->db->bind('biaya_apht',  $_POST['biaya_apht']);
        $this->db->bind('asuransi_kerugian',  $_POST['asuransi_kerugian']);
        $this->db->bind('catatan_komite',  $_POST['dasar_pertimbangan_analis']);
        $this->db->bind('user_create',  $_COOKIE['username']);
        $this->db->bind('tgl_create',  date("Y-m-d H:i:s"));
        $this->db->bind('syarat_lainnya',  $_POST['syarat_lainnya']);
        $this->db->bind('status',  $_POST['status']);
        $this->db->bind('keterangan',  $_POST['keterangan']);
        $this->db->bind('user_tipe_komite',  $_POST['user_tipe_komite']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hitung_jumlah_komite()
    {
        $this->db->query('SELECT * FROM tbl_komite WHERE  no_permohonan_kredit =:no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hitung_jumlah_komite_pusat()
    {
        $this->db->query('SELECT * FROM tbl_komite WHERE  no_permohonan_kredit =:no_permohonan_kredit AND user_tipe_komite ="PUSAT"');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hitung_jumlah_komite_cabang()
    {
        $this->db->query('SELECT * FROM tbl_komite WHERE  no_permohonan_kredit =:no_permohonan_kredit AND user_tipe_komite ="CABANG"');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function rekomendasi_komite($id)
    {

        $this->db->query('SELECT * FROM tbl_komite WHERE  no_permohonan_kredit =:no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $id);
        return $this->db->resultSet();
    }

    public function keputusan_komite($id)
    {

        $this->db->query('SELECT * FROM tbl_keputusan_kredit WHERE  no_permohonan_kredit =:no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $id);
        return $this->db->single();
    }

    public function syarat_lainnya($id)
    {

        $this->db->query('SELECT GROUP_CONCAT(syarat_lainnya SEPARATOR \'\n\') AS semua_syarat_lainnya FROM tbl_komite WHERE no_permohonan_kredit = :no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $id);
        return $this->db->single();
    }


    public function cek_aturan_komite($id)
    {
        $this->db->query('SELECT aturan_jumlah_komite, tipe_komite FROM tbl_wawancara WHERE  no_permohonan_kredit =:no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $id);
        return $this->db->single();
    }




    public function update_status_komite($no_permohonan_kredit, $status)
    {
        $query = "UPDATE tbl_wawancara SET
        status =:status
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('status', $status);
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_komite($username_komite, $no_permohonan_kredit, $komite)
    {
        $query = "UPDATE tbl_wawancara SET 
        komite_$komite = :komite,
        status =:status
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('komite', $username_komite);
        $this->db->bind('status', "KOMITE");
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_tgl_komite($no_permohonan_kredit)
    {

        $query = "UPDATE tbl_permohon_kredit SET
        tanggal_komite =:tanggal_komite,
        lokasi_berkas = :lokasi_berkas
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('tanggal_komite', date('Y-m-d H:i:s'));
        $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function update_tgl_tolak($no_permohonan_kredit)
    {

        $query = "UPDATE tbl_permohon_kredit SET
        tanggal_tolak =:tanggal_tolak,
        tanggal_komite = :tanggal_komite
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);

        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('tanggal_tolak', date('Y-m-d H:i:s'));
        $this->db->bind('tanggal_komite', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function nama_lengkap_username($nama)
    {
        $this->db->query('SELECT nama_lengkap FROM tbl_user WHERE  username =:username');
        $this->db->bind('username', $nama);
        return $this->db->single();
    }

    public function cek_plafond_jangka_waktu($id)
    {

        $this->db->query('SELECT min(plafond) as plafond,min(jangka_waktu) as jangka_waktu from tbl_komite where no_permohonan_kredit =:no_permohonan_kredit  group by plafond having min(plafond) limit 1');
        $this->db->bind('no_permohonan_kredit', $id);
        return $this->db->single();
    }


    public function cek_tolak($id)
    {
        $this->db->query('SELECT * FROM tbl_komite WHERE  no_permohonan_kredit =:no_permohonan_kredit AND status = :status ');
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->bind('status', "DITOLAK");
        $this->db->execute();
        return $this->db->rowCount();
    }




    // nanti bisa di hapuss bagian ini hanya fungsi untuk set ulang tes intputan

    public function kosongkan_tgl_komite($no_permohonan_kredit)
    {
        $query = "UPDATE tbl_permohon_kredit SET
        tanggal_komite =:tanggal_komite
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);

        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('tanggal_komite', null);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function kosongkan_tgl_tolak($no_permohonan_kredit)
    {
        $query = "UPDATE tbl_permohon_kredit SET
        tanggal_tolak =:tanggal_tolak
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);

        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->bind('tanggal_tolak', null);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function status_nama_komite($no_permohonan_kredit)
    {
        $query = "UPDATE tbl_wawancara SET 
        status =:status,
        komite_1 = :komite_1,
        komite_2 = :komite_2,
        komite_3 = :komite_3
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('status', "DIAJUKAN");
        $this->db->bind('komite_1', NULL);
        $this->db->bind('komite_2', NULL);
        $this->db->bind('komite_3', NULL);
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function kosongkan_nama_komite($no_permohonan_kredit)
    {
        $query = "UPDATE tbl_wawancara SET 
        komite_1 = :komite_1,
        komite_2 = :komite_2,
        komite_3 = :komite_3
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('komite_1', NULL);
        $this->db->bind('komite_2', NULL);
        $this->db->bind('komite_3', NULL);
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapus_record($no_permohonan_kredit)
    {

        $query = "DELETE FROM tbl_komite WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }
    // nanti bisa di hapuss bagian ini hanya fungsi untuk set ulang tes intputan


    // bagian ini akan menghapus record bagian tabel komite jika komite menekan tombol pending 
    public function hapus_keputusan_pending($no_permohonan_kredit)
    {

        $query = "DELETE FROM tbl_komite WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $no_permohonan_kredit);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_tbl_wawancara_status()
    {
        $query = "UPDATE tbl_wawancara SET 
        status =:status
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('status', "DIPENDING OLEH " . $_COOKIE['username']);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_tbl_wawancara_catatan_pending($id, $catatan)
    {

        $query = "UPDATE tbl_wawancara SET 
        catatan_pending =:catatan_pending
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit', $id);
        $this->db->bind('catatan_pending', $catatan);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function cek_status_tbl_wawancara()
    {

        $this->db->query('SELECT no_permohonan_kredit, status from tbl_wawancara where no_permohonan_kredit =:no_permohonan_kredit');
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        return $this->db->single();
    }


    public function persetujuan_tolak_batal()
    {

        $limit_direksi_awal = $_COOKIE['limit_direksi_awal'];
        $limit_direksi_akhir = $_COOKIE['limit_direksi_akhir'];

        // jika login sebagai komite pusat
        $komite = $_COOKIE['tipe_komite'];
        if ($komite == "PUSAT") {

            $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.tipe_komite,B.status,B.catatan_pending
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND (B.tipe_komite =:tipe_komite_1 OR B.tipe_komite=:tipe_komite_2)  AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3)");
            $this->db->bind('status1', 'DIAJUKAN TOLAK');
            $this->db->bind('status2', 'DIAJUKAN BATAL');
            $this->db->bind('tipe_komite_1', "PUSAT");
            $this->db->bind('tipe_komite_2', "DIAJUKAN PUSAT");
            $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
            $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
            $this->db->bind('komite_1', $_COOKIE['username']);
            $this->db->bind('komite_2', $_COOKIE['username']);
            $this->db->bind('komite_3', $_COOKIE['username']);
            return $this->db->resultSet();
        }
        // jika login selain dari komite pusat atau jika ternyata login sebagai komite cabang
        else {


            //jika login sebagai cabang dan tipe komite permohonan kredit adalah pusat atau diatas limit maka batasi approve cabang hanya max 2 dan 1 komite pusat
            // jadi ketika telah sampai 2 di tbl_komite maka jangan tampilkan lagi daftar permohonan di user komite cabang yang belum approve
            // cek dlu bagian tabel komite berdasarkan no_registrasi dan user_tipe_komite apakah cabang jika ada 2 



            if ($_COOKIE['tipe_kredit'] == "ALL") {
                $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
                $this->db->bind('status1', 'DIAJUKAN TOLAK');
                $this->db->bind('status2', 'DIAJUKAN BATAL');
                $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
                $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
                $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                $this->db->bind('komite_1', $_COOKIE['username']);
                $this->db->bind('komite_2', $_COOKIE['username']);
                $this->db->bind('komite_3', $_COOKIE['username']);
                return $this->db->resultSet();
            } else {

                if ($_COOKIE['kode_cabang'] == "00") {
                    $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending,A.tipe_kredit
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND A.tipe_kredit = :tipe_kredit AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
                    $this->db->bind('status1', 'DIAJUKAN TOLAK');
                    $this->db->bind('status2', 'DIAJUKAN BATAL');
                    $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
                    $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
                    $this->db->bind('tipe_kredit', $_COOKIE['tipe_kredit']);
                    $this->db->bind('komite_1', $_COOKIE['username']);
                    $this->db->bind('komite_2', $_COOKIE['username']);
                    $this->db->bind('komite_3', $_COOKIE['username']);
                    return $this->db->resultSet();
                } else {

                    $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending,A.tipe_kredit
                    FROM tbl_permohon_kredit A
                    JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND A.tipe_kredit = :tipe_kredit AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
                    $this->db->bind('status1', 'DIAJUKAN TOLAK');
                    $this->db->bind('status2', 'DIAJUKAN BATAL');
                    $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
                    $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
                    $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                    $this->db->bind('tipe_kredit', $_COOKIE['tipe_kredit']);
                    $this->db->bind('komite_1', $_COOKIE['username']);
                    $this->db->bind('komite_2', $_COOKIE['username']);
                    $this->db->bind('komite_3', $_COOKIE['username']);
                    return $this->db->resultSet();
                }
            }
        }
    }

    public function persetujuan_tolak_batal_hitung()
    {

        $limit_direksi_awal = $_COOKIE['limit_direksi_awal'];
        $limit_direksi_akhir = $_COOKIE['limit_direksi_akhir'];

        // jika login sebagai komite pusat
        $komite = $_COOKIE['tipe_komite'];
        if ($komite == "PUSAT") {

            $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.tipe_komite,B.status,B.catatan_pending
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND (B.tipe_komite =:tipe_komite_1 OR B.tipe_komite=:tipe_komite_2)  AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3)");
            $this->db->bind('status1', 'DIAJUKAN TOLAK');
            $this->db->bind('status2', 'DIAJUKAN BATAL');
            $this->db->bind('tipe_komite_1', "PUSAT");
            $this->db->bind('tipe_komite_2', "DIAJUKAN PUSAT");
            $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
            $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
            $this->db->bind('komite_1', $_COOKIE['username']);
            $this->db->bind('komite_2', $_COOKIE['username']);
            $this->db->bind('komite_3', $_COOKIE['username']);
            $this->db->execute();
            return $this->db->rowCount();
        }
        // jika login selain dari komite pusat atau jika ternyata login sebagai komite cabang
        else {


            if ($_COOKIE['tipe_kredit'] == "ALL") {
                $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
                $this->db->bind('status1', 'DIAJUKAN TOLAK');
                $this->db->bind('status2', 'DIAJUKAN BATAL');
                $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
                $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
                $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                $this->db->bind('komite_1', $_COOKIE['username']);
                $this->db->bind('komite_2', $_COOKIE['username']);
                $this->db->bind('komite_3', $_COOKIE['username']);
                $this->db->execute();
                return $this->db->rowCount();
            } else {

                if ($_COOKIE['kode_cabang'] == "00") {
                    $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending,A.tipe_kredit
                FROM tbl_permohon_kredit A
                JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND A.tipe_kredit = :tipe_kredit AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
                    $this->db->bind('status1', 'DIAJUKAN TOLAK');
                    $this->db->bind('status2', 'DIAJUKAN BATAL');
                    $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
                    $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
                    $this->db->bind('tipe_kredit', $_COOKIE['tipe_kredit']);
                    $this->db->bind('komite_1', $_COOKIE['username']);
                    $this->db->bind('komite_2', $_COOKIE['username']);
                    $this->db->bind('komite_3', $_COOKIE['username']);
                    $this->db->execute();
                    return $this->db->rowCount();
                } else {

                    $this->db->query("SELECT A.no_permohonan_kredit, A.kode_cabang, A.id_analis, A.nama_pemohon, A.nama_instansi, A.tipe_kredit, A.tanggal_permohonan, A.tanggal_wawancara, B.plafond,B.jangka_waktu, B.status,B.catatan_pending,A.tipe_kredit
                    FROM tbl_permohon_kredit A
                    JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE A.kode_cabang=:kode_cabang AND (B.plafond >= :limit_direksi_awal AND B.plafond <= :limit_direksi_akhir) AND A.tipe_kredit = :tipe_kredit AND (B.status =:status1 OR B.status =:status2)  AND (B.komite_1 !=:komite_1 ) AND (B.komite_2 !=:komite_2 ) AND (B.komite_3 !=:komite_3) ");
                    $this->db->bind('status1', 'DIAJUKAN TOLAK');
                    $this->db->bind('status2', 'DIAJUKAN BATAL');
                    $this->db->bind('limit_direksi_awal', $limit_direksi_awal);
                    $this->db->bind('limit_direksi_akhir', $limit_direksi_akhir);
                    $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
                    $this->db->bind('tipe_kredit', $_COOKIE['tipe_kredit']);
                    $this->db->bind('komite_1', $_COOKIE['username']);
                    $this->db->bind('komite_2', $_COOKIE['username']);
                    $this->db->bind('komite_3', $_COOKIE['username']);
                    $this->db->execute();
                    return $this->db->rowCount();
                }
            }
        }
    }

    public function update_tbl_wawancara()
    {

        $query = "UPDATE tbl_wawancara SET 
        status =:status
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('status', $_POST['status']);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update_tbl_permohon_kredit()
    {




        if ($_POST['status'] == "SETUJU TOLAK") {

            $query = "UPDATE tbl_permohon_kredit SET 
            tanggal_komite =:tanggal_komite,
            tanggal_tolak = :tanggal_tolak,
            lokasi_berkas = :lokasi_berkas
            WHERE no_permohonan_kredit = :no_permohonan_kredit";
            $this->db->query($query);
            $this->db->bind('tanggal_komite', $_POST['tgl_create']);
            $this->db->bind('tanggal_tolak', $_POST['tgl_create']);
            $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);
            $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
            $this->db->execute();
            return $this->db->rowCount();
        } else if ($_POST['status'] == "SETUJU BATAL") {

            $query = "UPDATE tbl_permohon_kredit SET 
            tanggal_komite =:tanggal_komite,
            tanggal_batal = :tanggal_batal,
            lokasi_berkas = :lokasi_berkas
            WHERE no_permohonan_kredit = :no_permohonan_kredit";
            $this->db->query($query);
            $this->db->bind('tanggal_komite', $_POST['tgl_create']);
            $this->db->bind('tanggal_batal', $_POST['tgl_create']);
            $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);
            $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function insert_tbl_komite()
    {

        $query = "INSERT INTO tbl_komite 
        (
        no_permohonan_kredit,
        plafond,
        jangka_waktu,
        catatan_komite,
        status,
        user_create,
        user_tipe_komite,
        tgl_create
        
        ) 
        VALUES
        (
        :no_permohonan_kredit,
        :plafond,
        :jangka_waktu,
        :catatan_komite,
        :status,
        :user_create,
        :user_tipe_komite,
        :tgl_create
        
        )";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('plafond',  $_POST['plafond']);
        $this->db->bind('jangka_waktu',  $_POST['jangka_waktu']);
        $this->db->bind('catatan_komite',  $_POST['dasar_pertimbangan_analis']);
        $this->db->bind('status',  $_POST['status']);
        $this->db->bind('user_create',  $_POST['username']);
        $this->db->bind('user_tipe_komite',  $_POST['user_tipe_komite']);
        $this->db->bind('tgl_create',  $_POST['tgl_create']);


        $this->db->execute();
        return $this->db->rowCount();
    }



    public function tidak_setuju_tolak_batal_update_tbl_wawancara()
    {


        $query = "UPDATE tbl_wawancara SET 
        status =:status,
        tolak_batal =:tolak_batal
        WHERE no_permohonan_kredit= :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('status', $_POST['status']);
        $this->db->bind('tolak_batal', "");
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tidak_setuju_tolak_batal_update_tbl_permohon_kredit()
    {
        $query = "UPDATE tbl_permohon_kredit SET 
        lokasi_berkas = :lokasi_berkas
        WHERE no_permohonan_kredit = :no_permohonan_kredit";
        $this->db->query($query);
        $this->db->bind('lokasi_berkas', $_POST['lokasi_berkas']);
        $this->db->bind('no_permohonan_kredit', $_POST['no_permohonan_kredit']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
