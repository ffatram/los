<?php

date_default_timezone_set('Asia/Makassar');
if (!isset($_SESSION['level'])) {
    header('Location:' . BASEURL . '/login');
    exit;
}

include "cs.php";


class wawancara extends Controller
{


    public function __construct()
    {
        // $wawancara = new cs();
    }


    public function index()
    {

        header('Location:' . BASEURL . '/wawancara/daftar_belum_wawancara/');
        exit;
    }

    public function beranda()
    {
        $data['update'] = $this->model("m_tbl_informasi")->getInformasi();
        $data['quote'] = $this->model("m_tbl_quote")->getQuote();
        $this->view('wawancara/v_beranda', $data);
    }


    public function daftar_belum_wawancara()
    {
        $data['judul'] = 'Daftar Belum Wawancara';
        $data['title'] = 'Daftar Belum Wawancara';

        // daftar belum wawancara
        $data['get_daftar_belum_wawancara'] = $this->model('m_wawancara')->daftar_belum_wawancara();
        $data['jumlah_daftar_belum_wawancara'] = $this->model('m_wawancara')->jumlah_daftar_belum_wawancara();

        $data['daftar_tolak_wawancara'] = $this->model('m_wawancara')->daftar_tolak_wawancara();
        $data['daftar_batal_wawancara'] = $this->model('m_wawancara')->daftar_batal_wawancara();


        $this->view('wawancara/v_daftar_belum_wawancara', $data);
    }

    public function daftar_sudah_wawancara()
    {

        $data['judul'] = 'Daftar Sudah Wawancara';
        $data['title'] = 'Daftar Sudah Wawancara';
        // $data['get_daftar_sudah_wawancara'] = $this->model('m_wawancara')->daftar_sudah_wawancara();


        $this->view('wawancara/v_daftar_sudah_wawancara', $data);
    }

    public function pending_pencairan()
    {
        $data['daftar_pending_pencairan'] = $this->model('m_wawancara')->daftar_pending_pencairan();

        $this->view('wawancara/v_pending_pencairan', $data);
    }


    public function daftar_pending_komite()
    {

        $data['data'] = $this->model('m_wawancara')->daftar_pending_komite();

        $this->view('wawancara/v_daftar_pending_komite', $data);
    }



    public function edit_pending_komite($id)
    {

        $data['judul'] = 'Proses Pending Komite';
        $data['title'] = $data['judul'];

        $data['data_cs'] = $this->model('m_tbl_permohonan_kredit')->get_data_where_no_permohonan_kerdit($id);

        $data['data_wawancara'] = $this->model('m_wawancara')->data_sudah_wawancara_no_permohonan_kredit($id);

        // $data['get_daftar_sudah_wawancara'] = $this->model('m_wawancara')->daftar_sudah_wawancara();

        $data['hasil_ref_provisi_administrasi'] = $this->model('m_ref_provisi_administrasi')->get_all();

        $data['ref_pilihan_analisa']  = $this->model('m_ref_pilihan_analisa')->get_all();

        $data['ref_sistem_bunga'] = $this->model('m_ref_sistem_bunga')->get_all();


        $data['ref_golongan_debitur'] = $this->model('m_ref_golongan_debitur')->get_all();

        $data['ref_jenis_penggunaan'] = $this->model('m_ref_jenis_penggunaan')->get_all();
        $data['ref_sektor_ekonomi'] = $this->model('m_ref_sektor_ekonomi')->get_all();
        $data['ref_hubungan_debitur_dengan_bank'] = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_all();

        $data['ref_sistem_pembayaran'] = $this->model('m_ref_sistem_pembayaran')->get_all();

        $data['ref_pejabat'] = $this->model('m_ref_pejabat')->get_all();

        $data['daftar_slik_pemohon'] = $this->model('m_slik_daftar_sudah_slik')->ambil_daftar_slik_pemohon($id);
        $data['daftar_slik_pasangan'] = $this->model('m_slik_daftar_sudah_slik')->ambil_daftar_slik_pasangan($id);

        $data['kode_tujuan_penggunaan_kredit'] = $this->model('m_wawancara')->kode_tujuan_penggunaan_kredit();

        $data['nama_btn'] = "Ajukan";




        // get data pilihan untuk upload file
        $data['ref_jenis_file'] = $this->model('m_ref_jenis_file')->get_all();
        $data['tbl_wawancara_berkas'] = $this->model('m_file_wawancara')->get_tbl_wawancara_berkas_id($id);



        $this->view('wawancara/v_edit_data_pending_komite', $data);
    }



    public function get_data_daftar_sudah_wawancara()
    {

        $this->db = new Database;



        $columns = array(
            0 => 'id',
            1 => 'no_permohonan_kredit'
            // 2 => 'nama_pemohon',
            // 3 => 'nama_instansi',
            // 4 => 'plafond_dimohon',
            // 5 => 'jangka_waktu',
            // 6 => 'tanggal_wawancara',
            // 7 => 'id_analis',
        );


        $this->db->query('SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, B.plafond,B.jangka_waktu, B.status, A.tanggal_wawancara
        FROM tbl_permohon_kredit A
        JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE (B.status !=:status1 AND B.status !=:status2 AND B.status !=:status3 AND B.status !=:status4)   AND A.tanggal_wawancara IS NOT NULL  AND A.kode_cabang =:kode_cabang AND  A.id_analis=:id_analis');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $this->db->bind('id_analis', $_COOKIE['username']);
        $this->db->bind('status1', 'DITOLAK RO');
        $this->db->bind('status2', 'DIBATALKAN');
        $this->db->bind('status3', 'SETUJU BATAL');
        $this->db->bind('status4', 'SETUJU TOLAK');

        $total_data = count($this->db->resultSet());
        $total_filtered = $total_data;




        $limit = $_POST['length'];
        $start = $_POST['start'];
        $order = $columns[$_POST['order']['0']['column']];
        $dir = $_POST['order']['0']['dir'];


        if (empty($_POST['search']['value'])) {

            $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, B.plafond,B.jangka_waktu, B.status, A.tanggal_wawancara
            FROM tbl_permohon_kredit A
            JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE (B.status !=:status1 AND B.status !=:status2 AND B.status !=:status3 AND B.status !=:status4)  AND A.tanggal_wawancara IS NOT NULL  AND A.kode_cabang =:kode_cabang AND  A.id_analis=:id_analis ORDER BY A.tanggal_wawancara DESC,  $order $dir LIMIT $limit OFFSET $start");
            $this->db->bind('status1', 'DITOLAK RO');
            $this->db->bind('status2', 'DIBATALKAN');
            $this->db->bind('status3', 'SETUJU BATAL');
            $this->db->bind('status4', 'SETUJU TOLAK');
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            $this->db->bind('id_analis', $_COOKIE['username']);
            $query =  $this->db->resultSet();
        } else {
            $search = $_POST['search']['value'];
            $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, B.plafond,B.jangka_waktu, B.status, A.tanggal_wawancara
            FROM tbl_permohon_kredit A
            JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE (B.status !=:status1 AND B.status !=:status2 AND B.status !=:status3 AND B.status !=:status4)  AND A.tanggal_wawancara IS NOT NULL  AND A.kode_cabang =:kode_cabang AND  (A.id_analis=:id_analis AND A.no_permohonan_kredit LIKE '%$search%' OR A.nama_pemohon LIKE '%$search%' OR A.nama_instansi LIKE '%$search%') ORDER BY A.tanggal_wawancara DESC,  $order $dir LIMIT $limit OFFSET $start");
            $this->db->bind('status1', 'DITOLAK RO');
            $this->db->bind('status2', 'DIBATALKAN');
            $this->db->bind('status3', 'SETUJU BATAL');
            $this->db->bind('status4', 'SETUJU TOLAK');
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            $this->db->bind('id_analis', $_COOKIE['username']);
            $query =  $this->db->resultSet();


            $this->db->query("SELECT A.no_permohonan_kredit, A.nama_pemohon, A.nama_instansi, B.plafond,B.jangka_waktu, B.status, A.tanggal_wawancara
            FROM tbl_permohon_kredit A
            JOIN tbl_wawancara B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE (B.status !=:status1 AND B.status !=:status2 AND B.status !=:status3 AND B.status !=:status4)  AND A.tanggal_wawancara IS NOT NULL  AND  A.kode_cabang =:kode_cabang AND  (A.id_analis=:id_analis AND A.nama_pemohon LIKE '%$search%' OR A.nama_instansi LIKE '%$search%')");
            $this->db->bind('status1', 'DITOLAK RO');
            $this->db->bind('status2', 'DIBATALKAN');
            $this->db->bind('status3', 'SETUJU BATAL');
            $this->db->bind('status4', 'SETUJU TOLAK');
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            $this->db->bind('id_analis', $_COOKIE['username']);
            $query2 =  $this->db->resultSet();


            $total_filtered = count($query2);
        }

        $data = array();

        if (!empty($query)) {
            $no = $start + 1;

            foreach ($query as $i) {
                $res_data['id'] =  $no;
                $res_data['no_permohonan_kredit'] = $i['no_permohonan_kredit'];
                $res_data['nama_pemohon'] = $i['nama_pemohon'];
                $res_data['nama_instansi'] = $i['nama_instansi'];
                $res_data['tanggal_wawancara'] = isset($i['tanggal_wawancara']) ? date('d-m-Y', strtotime($i['tanggal_wawancara'])) : '';
                $res_data['plafond'] = number_format($i['plafond'], 0, ',', '.');
                $res_data['jangka_waktu'] = $i['jangka_waktu'];
                $res_data['status'] = $i['status'];


                // memubat pengecekan pada string status jika terdapat data dipending 
                // $data = explode(" ",  $res_data['status']);
                // $dipending = $data[0];










                // cek status jika terdapat kata di ajukan komite disetujui

                if ($i['status'] == "BELUM DIAJUKAN" || $i['status'] == "TIDAK SETUJU BATAL" || $i['status'] == "TIDAK SETUJU TOLAK") {
                    // $btn_pengajuan = "<a href='' class='btn btn-success btn-sm btn_pengajuan' data-toggle='modal' data-target='#modal_pengajuan' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false' >Pengajuan</a>";
                    $btn_edit = "<a href ='" . BASEURL . "/wawancara/edit_data_wawancara/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-primary' >Edit</a>";
                } else {
                    // $btn_pengajuan = "<a href='' style='pointer-events: none;' class='btn btn-secondary  btn-sm btn_pengajuan' data-toggle='modal' data-target='#modal_pengajuan' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false' >Pengajuan</a>";
                    $btn_edit = "<a href ='" . BASEURL . "/wawancara/edit_data_wawancara/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-secondary' style='pointer-events: none; '>Edit</a>";
                }

                if ($i['status'] == "BELUM DIAJUKAN" || $i['status'] == "DIAJUKAN" || $i['status'] == "KOMITE" || $i['status'] == "TIDAK SETUJU BATAL" || $i['status'] == "TIDAK SETUJU TOLAK") {
                    $btn_pengajuan = "<a href='' class='btn btn-success btn-sm btn_pengajuan' data-toggle='modal' data-target='#modal_pengajuan' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false' >Pengajuan</a>";
                } else {
                    $btn_pengajuan = "<a href='' style='pointer-events: none;' class='btn btn-secondary  btn-sm btn_pengajuan' data-toggle='modal' data-target='#modal_pengajuan' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false' >Pengajuan</a>";
                    // $btn_edit = "<a href ='" . BASEURL . "/wawancara/edit_data_wawancara/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-secondary' style='pointer-events: none; '>Edit</a>";
                }

                if ($i['status'] == 'DIAJUKAN' || $i['status'] == "DIAJUKAN TOLAK" || $i['status'] == "DIAJUKAN BATAL") {
                    $btn_batal_ajukan = " <button class='btn btn-danger btn-sm btn_batal_ajukan' data-id='" . $i['no_permohonan_kredit'] . "' >Batalkan Ajuan</button>";
                } else {
                    $btn_batal_ajukan = "<a href='' style='pointer-events: none;' class='btn btn-secondary  btn-sm btn_pengajuan' data-toggle='modal' data-target='#modal_pengajuan' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false'>Batalkan Ajuan</a>";
                }


                $btn_detail_komite = "<a href='' data-toggle='modal' data-target='#detail_komite' style='background: " . w_orange . " ;  color:white;' class='btn btn-sm detail_komite' data-id='" . $i['no_permohonan_kredit'] . "'  data-backdrop='static' data-keyboard='false'>Detail Komite</a>";

                $btn_cetak_analisa = "<button class='btn btn-sm modal_cetak_analisa'  data-id='" . $i['no_permohonan_kredit'] . "' data-status='" . $i['status'] . "' style='background-color:" . w_ungu . "; color: white'>" . "Cetak Analisa</button>";




                // if ($i['status'] == "BELUM DIAJUKAN" || $i['status'] == "DIAJUKAN") {

                //     $btn_detail_komite = "<a href='' data-toggle='modal' data-target='#detail_komite'  class='btn btn-sm btn-secondary detail_komite' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false' style='pointer-events: none;'>Detail Komite</a>";
                // } else {
                //     $btn_detail_komite = "<a href='' data-toggle='modal' data-target='#detail_komite' style='background: " . w_orange . " ;  color:white;' class='btn btn-sm detail_komite' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false'>Detail Komite</a>";
                // }





                // if ($i['status'] == "DIAJUKAN" || $i['status'] == "KOMITE") {

                //     $btn_pengajuan = "<a href='' class='btn btn-success btn-sm btn_pengajuan' data-toggle='modal' data-target='#modal_pengajuan' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false' >Pengajuan</a>";
                //     $btn_edit = "<a href ='" . BASEURL . "/wawancara/edit_data_wawancara/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-primary' >Edit</a>";
                // } else {
                //     $btn_pengajuan = "<a href='' style='pointer-events: none;' class='btn btn-secondary  btn-sm btn_pengajuan' data-toggle='modal' data-target='#modal_pengajuan' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false' >Pengajuan</a>";
                //     $btn_edit = "<a href ='" . BASEURL . "/wawancara/edit_data_wawancara/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-secondary' style='pointer-events: none; '>Edit</a>";
                // }





                // if ($i['status'] == "BELUM DIAJUKAN" || strpos($i['status'], 'DIPENDING OLEH') !== false) {

                //     $btn_edit = "<a href ='" . BASEURL . "/wawancara/edit_data_wawancara/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-primary' >Edit</a>";
                // } else {

                //     $btn_edit = "<a href ='" . BASEURL . "/wawancara/edit_data_wawancara/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-secondary' style='pointer-events: none; '>Edit</a>";
                // }


                // if (strpos($i['status'], 'DIPENDING OLEH') !== false) {
                //     $res_data['status'] = "<a href='' class='btn_catatan_pending' data-toggle='modal' data-target='#catatan_komite' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false' >" . $i['status'] . "</a>";
                // }

                // if ($i['status'] == "DISETUJUI" || $i['status'] == "KOMITE" || $i['status'] == "DITOLAK") {

                // } else {
                //     $btn_detail_komite = "<a href='" . BASEURL . "/cetak/cetak_sppk/" . $i['no_permohonan_kredit'] . "'  class='btn btn-secondary btn-sm' style='pointer-events: none;'>Detail Komite</a>";
                // }

                // if ($i['status'] == "DISETUJUI") {
                //     $btn_cetak_sppk = "<a href='" . BASEURL . "/cetak/cetak_sppk/" . $i['no_permohonan_kredit'] . "' style='background: " . w_ungu . " ;  color:white;' class='btn btn-sm'> Cetak SPPK</a>";
                // } else {
                //     $btn_cetak_sppk = "<a href='" . BASEURL . "/cetak/cetak_sppk/" . $i['no_permohonan_kredit'] . "'  class='btn btn-secondary btn-sm' style='pointer-events: none;'> Cetak SPPK</a>";
                // }



                // if ($i['status'] == "DIAJUKAN" or $i['status'] == "KOMITE" or $i['status'] == "DISETUJUI" or $i['status'] == "DITOLAK") {


                //     $btn_edit = "<a href ='" . BASEURL . "/wawancara/edit_data_wawancara/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-secondary' style='pointer-events: none; '>Edit</a>";
                //     $btn_pengajuan = "<a href='' class='btn btn-secondary btn-sm btn_pengajuan' data-toggle='modal' data-target='#modal_pengajuan' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false' style='pointer-events: none; '>Pengajuan</a>";

                //     if ($i['status'] == "DISETUJUI") {
                //         $btn_cetak_sppk = "<a href='" . BASEURL . "/cetak/cetak_sppk/" . $i['no_permohonan_kredit'] . "' style='background: " . w_ungu . " ;  color:white;' class='btn btn-sm'> Cetak SPPK</a>";
                //     } else {

                //         $btn_cetak_sppk = "<a href='" . BASEURL . "/cetak/cetak_sppk/" . $i['no_permohonan_kredit'] . "'  class='btn btn-secondary btn-sm' style='pointer-events: none;'> Cetak SPPK</a>";
                //     }
                // } else {
                //     if ($i['status'] == "BELUM DIAJUKAN") {
                //         $btn_edit = "<a href ='" . BASEURL . "/wawancara/edit_data_wawancara/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-primary'>Edit</a>";
                //         $btn_pengajuan = "<a href='' class='btn btn-success btn-sm btn_pengajuan' data-toggle='modal' data-target='#modal_pengajuan' data-id='" . $i['no_permohonan_kredit'] . "' data-backdrop='static' data-keyboard='false' >Pengajuan</a>";
                //     }
                //     $btn_cetak_sppk = "<a href='" . BASEURL . "/cetak/cetak_sppk/" . $i['no_permohonan_kredit'] . "'  class='btn btn-secondary btn-sm' style='pointer-events: none;'> Cetak SPPK</a>";
                // }





                // $btn_detail_slik = "<button type='button' style='background: " . w_orange . ";  color:white;' class='btn btn-sm mr-1 detail_slik' data-toggle='modal' data-target='#detail_slik' data-id='" . $i['id'] . "' data-no_permohonan_kredit='" . $i['no_permohonan_kredit'] . "'>DETAIL SLIK</button>";

                // $btn_edit = "<a href=' " . BASEURL . "/slik/input_data_slik/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-primary mr-1'>EDIT</a>";
                // $btn_cetak = "<a href='" . BASEURL . "/slik/cetak_daftar_sudah_slik/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm mr-1' style='background: " . w_ungu . " ;  color:white;' target='_blank'>CETAK</a>";
                // $btn_hapus = "<a onclick='hapus_all_slik_where_req(event); return false' href='" . BASEURL . "/slik/hapus_daftar_sudah_slik/" . $i['no_permohonan_kredit'] . "' class='btn btn-danger btn-sm'> HAPUS </a> ";

                // $res_data['aksi']   =  "$btn_edit" . "$btn_cetak" . "$btn_hapus";
                $batas_btn = "<span class='mr-0'> </span>";


                $res_data['btn_aksi'] = $btn_pengajuan . $batas_btn . $btn_batal_ajukan . $batas_btn . $btn_edit . $batas_btn . $btn_detail_komite . $batas_btn . $btn_cetak_analisa;
                $data[] = $res_data;
                $no++;
            }
        }

        $json_data = array(
            "draw"            => intval($_POST['draw']),
            "recordsTotal"    => intval($total_data),
            "recordsFiltered" => intval($total_filtered),
            "data"            => $data
        );

        echo json_encode($json_data);
    }




    public function cek_tombol_daftar_sudah_wawancara()
    {

        if (isset($_POST['tombol_pengajuan'])) {
            header('Location:' . BASEURL . '/wawancara/pengajuan_wawancara/');
            exit;
        } else if (isset($_POST['tombol_edit'])) {
            header('Location:' . BASEURL . '/wawancara/edit_data_wawancara/' . $_POST['tombol_edit']);
            exit;
        } else if (isset($_POST['tombol_hapus'])) {
            header('Location:' . BASEURL . '/wawancara/hapus_data_wawancara/' . $_POST['tombol_hapus']);
            exit;
        }
    }

    public function hapus_data_wawancara($id)
    {

        $data_hapus = $this->model('m_wawancara')->hapus_data_wawancara($id);

        if ($data_hapus > 0) {
            $this->model('m_log')->hapus_analisa();
            echo "berhasil hapus";
            header('Location:' . BASEURL . '/wawancara/daftar_sudah_wawancara/');
            exit;
        } else {
            echo "gagal hapus";
            header('Location:' . BASEURL . '/wawancara/daftar_sudah_wawancara/');
            exit;
        }
    }


    public function pengajuan_wawancara()
    {

        $data['judul'] = 'Pengajuan Wawancara';
        $data['title'] = $data['judul'];
        $data['no_permohonan_kredit'] = $_POST['no_permohonan_kredit'];


        // wawancara
        $data['get_tbl_wawancara'] = $this->model('m_wawancara')->detail_wawancara($_POST);



        $data['get_tbl_wawancara']['plafond'] = number_format(($data['get_tbl_wawancara']['plafond']), 0, ',', '.');
        $data['get_tbl_wawancara']['angsuran_perbulan'] = number_format(($data['get_tbl_wawancara']['angsuran_perbulan']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_provisi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_provisi_nominal']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_administrasi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_administrasi_nominal']), 0, ',', '.');
        $data['get_tbl_wawancara']['premi_asuransi'] = number_format(($data['get_tbl_wawancara']['premi_asuransi']), 0, ',', '.');
        $data['get_tbl_wawancara']['tabungan'] = number_format(($data['get_tbl_wawancara']['tabungan']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_notaris'] = number_format(($data['get_tbl_wawancara']['biaya_notaris']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_materai'] = number_format(($data['get_tbl_wawancara']['biaya_materai']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_apht'] = number_format(($data['get_tbl_wawancara']['biaya_apht']), 0, ',', '.');
        $data['get_tbl_wawancara']['asuransi_kerugian'] = number_format(($data['get_tbl_wawancara']['asuransi_kerugian']), 0, ',', '.');




        // detail tbl_permohon_kredit
        $data['get_tbl_permohon_kredit'] = $this->model('m_cs')->get_tbl_permohon_kredit($data['no_permohonan_kredit']);

        // slik

        $data['daftar_slik_pemohon'] = $this->model('m_slik')->daftar_slik_pemohon($data['no_permohonan_kredit']);
        $data['daftar_slik_pasangan'] = $this->model('m_slik')->daftar_slik_pasangan($data['no_permohonan_kredit']);
        $data['data_slik_single'] = $this->model('m_slik')->get_data_slik_single($data['no_permohonan_kredit']);





        $data['kode_golongan_debitur'] = $this->ref_kode_golongan_debitur($data['get_tbl_wawancara']['kode_golongan_debitur']);
        $data['kode_jenis_penggunaan'] = $this->ref_jenis_penggunaan($data['get_tbl_wawancara']['kode_jenis_penggunaan']);


        $data['kode_sektor_ekonomi'] = $this->ref_sektor_ekonomi($data['get_tbl_wawancara']['kode_sektor_ekonomi']);
        $data['kode_hubungan_debitur_dengan_bank'] = $this->ref_hubungan_debitur_dengan_bank($data['get_tbl_wawancara']['kode_hubungan_debitur_dengan_bank']);

        $data['get_tbl_wawancara_berkas_id'] = $this->model('m_file_wawancara')->get_tbl_wawancara_berkas_id($data['no_permohonan_kredit']);





        $this->view('wawancara/v_pengajuan_wawancara', $data);
    }


    public function input_data_wawancara($id)
    {
        $data['judul'] = 'Input Data Wawancara';
        $data['title'] = $data['judul'];

        $_POST['no_permohonan_kredit'] = $id;
        $data['data_wawancara_where_noreg'] = $this->model('m_wawancara')->get_data_tbl_cs_where_noreg($_POST);

        //ambil data biaya dari tabel permohonan kredit 
        $data['data_tabel_permohonan_kredit'] = $this->model('m_wawancara')->data_input_cs($id);


        // ambil data daftar slik pemohon pasangan

        $data['daftar_slik_pemohon'] = $this->model('m_slik_daftar_sudah_slik')->ambil_daftar_slik_pemohon($id);

        $data['daftar_slik_pasangan'] = $this->model('m_slik_daftar_sudah_slik')->ambil_daftar_slik_pasangan($id);



        $data['hasil_ref_provisi_administrasi'] = $this->model('m_ref_provisi_administrasi')->get_all();

        $data['ref_pilihan_analisa']  = $this->model('m_ref_pilihan_analisa')->get_all();

        $data['ref_sistem_bunga'] = $this->model('m_ref_sistem_bunga')->get_all();


        $data['ref_golongan_debitur'] = $this->model('m_ref_golongan_debitur')->get_all();

        $data['ref_jenis_penggunaan'] = $this->model('m_ref_jenis_penggunaan')->get_all();

        $data['ref_sektor_ekonomi'] = $this->model('m_ref_sektor_ekonomi')->get_all();
        $data['ref_hubungan_debitur_dengan_bank'] = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_all();

        $data['ref_sistem_pembayaran'] = $this->model('m_ref_sistem_pembayaran')->get_all();

        $data['ref_pejabat'] = $this->model('m_ref_pejabat')->get_all();


        $data['kode_tujuan_penggunaan_kredit'] = $this->model('m_wawancara')->kode_tujuan_penggunaan_kredit();



        $cek_tbl_pencairan = $this->model('m_pencairan')->cek_tbl_pencairan();

        if ($cek_tbl_pencairan > 0) {
            $data['cek_tbl_jaminan'] = $cek_tbl_pencairan;
            $data['jaminan'] = $this->model('m_pencairan')->get_data_pencairan();
        } else {
            $data['cek'] = "0";
        }




        // get data pilihan untuk upload file
        $data['ref_jenis_file'] = $this->model('m_ref_jenis_file')->get_all();
        $data['tbl_wawancara_berkas'] = $this->model('m_file_wawancara')->get_tbl_wawancara_berkas_id($id);

        $this->view('wawancara/v_input_wawancara', $data);
    }




    public function mapping_sektor_ekonomi()
    {

        $jenisPenggunaan = $this->model('m_ref_sektor_ekonomi')->mapping_sektor_ekonomi();

        echo json_encode($jenisPenggunaan);
    }








    public function edit_data_wawancara($id)
    {


        $data['judul'] = 'Edit Data Wawancara';
        $data['title'] = $data['judul'];


        $data['data_cs'] = $this->model('m_tbl_permohonan_kredit')->get_data_where_no_permohonan_kerdit($id);

        $data['data_wawancara'] = $this->model('m_wawancara')->data_sudah_wawancara_no_permohonan_kredit($id);

        // ambil file dari tabel wawancara berkas

        $data['get_tbl_wawancara_berkas_id'] = $this->model('m_file_wawancara')->get_tbl_wawancara_berkas_id($id);

        // $data['get_daftar_sudah_wawancara'] = $this->model('m_wawancara')->daftar_sudah_wawancara();





        $data['hasil_ref_provisi_administrasi'] = $this->model('m_ref_provisi_administrasi')->get_all();

        $data['ref_pilihan_analisa']  = $this->model('m_ref_pilihan_analisa')->get_all();

        $data['ref_sistem_bunga'] = $this->model('m_ref_sistem_bunga')->get_all();


        $data['ref_golongan_debitur'] = $this->model('m_ref_golongan_debitur')->get_all();

        $data['ref_jenis_penggunaan'] = $this->model('m_ref_jenis_penggunaan')->get_all();
        $data['ref_sektor_ekonomi'] = $this->model('m_ref_sektor_ekonomi')->get_all();
        $data['ref_hubungan_debitur_dengan_bank'] = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_all();

        $data['ref_sistem_pembayaran'] = $this->model('m_ref_sistem_pembayaran')->get_all();

        $data['ref_pejabat'] = $this->model('m_ref_pejabat')->get_all();

        $data['daftar_slik_pemohon'] = $this->model('m_slik_daftar_sudah_slik')->ambil_daftar_slik_pemohon($id);
        $data['daftar_slik_pasangan'] = $this->model('m_slik_daftar_sudah_slik')->ambil_daftar_slik_pasangan($id);

        $data['kode_tujuan_penggunaan_kredit'] = $this->model('m_wawancara')->kode_tujuan_penggunaan_kredit();


        // get data pilihan untuk upload file
        $data['ref_jenis_file'] = $this->model('m_ref_jenis_file')->get_all();
        $data['tbl_wawancara_berkas'] = $this->model('m_file_wawancara')->get_tbl_wawancara_berkas_id($id);

        $this->view('wawancara/v_edit_data_wawancara', $data);
    }


    public function cetak_hasil_wawancara()
    {

        $data['hasil_wawancara'] = $this->model('m_wawancara')->cetak_hasil_wawancara();
        $this->view('wawancara/v_cetak_wawancara', $data);
    }

    public function detail_data_kredit()
    {

        $data['data_kredit'] = $this->model('m_wawancara')->detail_data_kredit($_POST);
        echo $data['data_kredit'];
        // json_encode($data['data_kredit']);
    }

    public function get_opsi_upload_file()
    {

        $data = $this->model('m_wawancara')->get_opsi_upload_file();
        // $data = $data['nama_bank'];

        // header("Content-type: application/json");
        echo json_encode($data);
    }

    public function simpan_data_wawancara()
    {


        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['jangka_waktu'] = str_replace(".", "", $_POST['jangka_waktu']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['biaya_provisi_nominal'] = str_replace(".", "", $_POST['biaya_provisi_nominal']);
        $_POST['biaya_administrasi_nominal'] = str_replace(".", "", $_POST['biaya_administrasi_nominal']);
        $_POST['premi_asuransi'] = str_replace(".", "", $_POST['premi_asuransi']);
        $_POST['tabungan'] = str_replace(".", "", $_POST['tabungan']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_materai'] = str_replace(".", "", $_POST['biaya_materai']);
        $_POST['biaya_apht'] = str_replace(".", "", $_POST['biaya_apht']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);

        $_POST['os_sebelumnya'] = str_replace(".", "", $_POST['os_sebelumnya']);
        $_POST['penambahan'] = str_replace(".", "", $_POST['penambahan']);

        // ambil data dari tabel cabang 
        // cek session dari login dan bandingkan dengan tbl_cabang



        $data_cabang =   $this->model('m_cabang')->get_data($_COOKIE['kode_cabang']);



        $plafond = $_POST['plafond'];
        $limit = $data_cabang['limit'];
        $aturan_jumlah_komite = $data_cabang['aturan_jumlah_komite'];

        if ($plafond > $limit) {
            $_POST['tipe_komite'] = "PUSAT";
        } else if ($plafond <= $limit) {
            $_POST['tipe_komite'] = "CABANG";
        }

        $_POST['aturan_jumlah_komite'] = $aturan_jumlah_komite;




        $_POST['penghasilan_pemohon_perbulan'] = str_replace(".", "", $_POST['penghasilan_pemohon_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pemohon_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pemohon_tambahan_' . $a]);
        }
        $_POST['penghasilan_pasangan_perbulan'] = str_replace(".", "", $_POST['penghasilan_pasangan_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pasangan_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pasangan_tambahan_' . $a]);
        }
        $_POST['biaya_hidup_sebulan'] = str_replace(".", "", $_POST['biaya_hidup_sebulan']);
        $_POST['biaya_pendidikan'] = str_replace(".", "", $_POST['biaya_pendidikan']);
        $_POST['biaya_pam_listrik_telepon'] = str_replace(".", "", $_POST['biaya_pam_listrik_telepon']);
        $_POST['biaya_transport'] = str_replace(".", "", $_POST['biaya_transport']);
        $_POST['biaya_lainnya'] = str_replace(".", "", $_POST['biaya_lainnya']);
        $_POST['angsuran_kredit_sebelumnya'] = str_replace(".", "", $_POST['angsuran_kredit_sebelumnya']);

        for ($a = 1; $a <= 7; $a++) {
            $_POST['angsuran_pemohon_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pemohon_lainnya_' . $a]);
            $_POST['pemohon_lunasi_' . $a] = isset($_POST['pemohon_lunasi_' . $a]) ? '0' : '1';
            $_POST['angsuran_pasangan_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pasangan_lainnya_' . $a]);
            $_POST['pasangan_lunasi_' . $a] = isset($_POST['pasangan_lunasi_' . $a]) ? '0' : '1';
        }

        $_POST['saldo_tabungan_terakhir'] = str_replace(".", "", $_POST['saldo_tabungan_terakhir']);


        $_POST['kemampuan_membayar_angsuran'] = str_replace(".", "", $_POST['kemampuan_membayar_angsuran']);

        $persentase_angsuran = $_POST['persentase_angsuran'];

        if ($persentase_angsuran >= 0 && $persentase_angsuran <= 50) {
            $_POST['keterangan_persentase_angsuran'] = "DISARANKAN";
        } else if ($persentase_angsuran >= 51 && $persentase_angsuran <= 70) {
            $_POST['keterangan_persentase_angsuran'] = "DIPERTIMBANGKAN";
        } else if ($persentase_angsuran >= 71 && $persentase_angsuran <= 80) {
            $_POST['keterangan_persentase_angsuran'] = "KURANG DISARANKAN";
        } else if ($persentase_angsuran > 80) {
            $_POST['keterangan_persentase_angsuran'] = "DITOLAK";
        }
        $_POST['user_create'] = $_COOKIE['username'];
        $_POST['tgl_create'] = date('Y-m-d H:i:s');

        $_POST['tanggal_wawancara'] = date('Y-m-d H:i:s');
        $_POST['tanggal_tolak'] = date('Y-m-d H:i:s');
        $_POST['lokasi_berkas'] = "ANALIS";


        $data['simpan'] = $this->model('m_wawancara')->simpan_data_wawancara($_POST);
        $data['update'] = $this->model('m_wawancara')->update_tbl_permohonan_kredit($_POST);


        if ($data['simpan'] > 0  and $data['update'] > 0) {
            $this->model('m_log')->simpan_analisa();
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }



    public function simpan_tolak_analisa()
    {
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['jangka_waktu'] = str_replace(".", "", $_POST['jangka_waktu']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['biaya_provisi_nominal'] = str_replace(".", "", $_POST['biaya_provisi_nominal']);
        $_POST['biaya_administrasi_nominal'] = str_replace(".", "", $_POST['biaya_administrasi_nominal']);
        $_POST['premi_asuransi'] = str_replace(".", "", $_POST['premi_asuransi']);
        $_POST['tabungan'] = str_replace(".", "", $_POST['tabungan']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_materai'] = str_replace(".", "", $_POST['biaya_materai']);
        $_POST['biaya_apht'] = str_replace(".", "", $_POST['biaya_apht']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);

        $_POST['os_sebelumnya'] = str_replace(".", "", $_POST['os_sebelumnya']);
        $_POST['penambahan'] = str_replace(".", "", $_POST['penambahan']);

        // ambil data dari tabel cabang 
        // cek session dari login dan bandingkan dengan tbl_cabang



        $data_cabang =   $this->model('m_cabang')->get_data($_COOKIE['kode_cabang']);



        $plafond = $_POST['plafond'];
        $limit = $data_cabang['limit'];
        $aturan_jumlah_komite = $data_cabang['aturan_jumlah_komite'];

        if ($plafond > $limit) {
            $_POST['tipe_komite'] = "PUSAT";
        } else if ($plafond <= $limit) {
            $_POST['tipe_komite'] = "CABANG";
        }

        $_POST['aturan_jumlah_komite'] = $aturan_jumlah_komite;




        $_POST['penghasilan_pemohon_perbulan'] = str_replace(".", "", $_POST['penghasilan_pemohon_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pemohon_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pemohon_tambahan_' . $a]);
        }
        $_POST['penghasilan_pasangan_perbulan'] = str_replace(".", "", $_POST['penghasilan_pasangan_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pasangan_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pasangan_tambahan_' . $a]);
        }
        $_POST['biaya_hidup_sebulan'] = str_replace(".", "", $_POST['biaya_hidup_sebulan']);
        $_POST['biaya_pendidikan'] = str_replace(".", "", $_POST['biaya_pendidikan']);
        $_POST['biaya_pam_listrik_telepon'] = str_replace(".", "", $_POST['biaya_pam_listrik_telepon']);
        $_POST['biaya_transport'] = str_replace(".", "", $_POST['biaya_transport']);
        $_POST['biaya_lainnya'] = str_replace(".", "", $_POST['biaya_lainnya']);
        $_POST['angsuran_kredit_sebelumnya'] = str_replace(".", "", $_POST['angsuran_kredit_sebelumnya']);

        for ($a = 1; $a <= 7; $a++) {
            $_POST['angsuran_pemohon_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pemohon_lainnya_' . $a]);
            $_POST['pemohon_lunasi_' . $a] = isset($_POST['pemohon_lunasi_' . $a]) ? '0' : '1';
            $_POST['angsuran_pasangan_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pasangan_lainnya_' . $a]);
            $_POST['pasangan_lunasi_' . $a] = isset($_POST['pasangan_lunasi_' . $a]) ? '0' : '1';
        }

        $_POST['saldo_tabungan_terakhir'] = str_replace(".", "", $_POST['saldo_tabungan_terakhir']);


        $_POST['kemampuan_membayar_angsuran'] = str_replace(".", "", $_POST['kemampuan_membayar_angsuran']);

        $persentase_angsuran = $_POST['persentase_angsuran'];

        if ($persentase_angsuran >= 0 && $persentase_angsuran <= 50) {
            $_POST['keterangan_persentase_angsuran'] = "DISARANKAN";
        } else if ($persentase_angsuran >= 51 && $persentase_angsuran <= 70) {
            $_POST['keterangan_persentase_angsuran'] = "DIPERTIMBANGKAN";
        } else if ($persentase_angsuran >= 71 && $persentase_angsuran <= 80) {
            $_POST['keterangan_persentase_angsuran'] = "KURANG DISARANKAN";
        } else if ($persentase_angsuran > 80) {
            $_POST['keterangan_persentase_angsuran'] = "DITOLAK";
        }
        $_POST['user_create'] = $_COOKIE['username'];
        $_POST['tgl_create'] = date('Y-m-d H:i:s');

        $_POST['tanggal_wawancara'] = date('Y-m-d H:i:s');
        $_POST['tanggal_tolak'] = date('Y-m-d H:i:s');
        $_POST['lokasi_berkas'] = "ANALIS";





        $data['simpan'] = $this->model('m_wawancara')->simpan_data_wawancara($_POST);
        $data['update'] = $this->model('m_wawancara')->update_tbl_permohonan_kredit_tanggal_tolak($_POST);


        if ($data['simpan'] >= 0  and $data['update'] >= 0) {
            $this->model('m_log')->simpan_analisa();
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }


    public function simpan_batal_analisa()
    {

        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['jangka_waktu'] = str_replace(".", "", $_POST['jangka_waktu']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['biaya_provisi_nominal'] = str_replace(".", "", $_POST['biaya_provisi_nominal']);
        $_POST['biaya_administrasi_nominal'] = str_replace(".", "", $_POST['biaya_administrasi_nominal']);
        $_POST['premi_asuransi'] = str_replace(".", "", $_POST['premi_asuransi']);
        $_POST['tabungan'] = str_replace(".", "", $_POST['tabungan']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_materai'] = str_replace(".", "", $_POST['biaya_materai']);
        $_POST['biaya_apht'] = str_replace(".", "", $_POST['biaya_apht']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);

        $_POST['os_sebelumnya'] = str_replace(".", "", $_POST['os_sebelumnya']);
        $_POST['penambahan'] = str_replace(".", "", $_POST['penambahan']);

        // ambil data dari tabel cabang 
        // cek session dari login dan bandingkan dengan tbl_cabang



        $data_cabang =   $this->model('m_cabang')->get_data($_COOKIE['kode_cabang']);



        $plafond = $_POST['plafond'];
        $limit = $data_cabang['limit'];
        $aturan_jumlah_komite = $data_cabang['aturan_jumlah_komite'];

        if ($plafond > $limit) {
            $_POST['tipe_komite'] = "PUSAT";
        } else if ($plafond <= $limit) {
            $_POST['tipe_komite'] = "CABANG";
        }

        $_POST['aturan_jumlah_komite'] = $aturan_jumlah_komite;




        $_POST['penghasilan_pemohon_perbulan'] = str_replace(".", "", $_POST['penghasilan_pemohon_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pemohon_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pemohon_tambahan_' . $a]);
        }
        $_POST['penghasilan_pasangan_perbulan'] = str_replace(".", "", $_POST['penghasilan_pasangan_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pasangan_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pasangan_tambahan_' . $a]);
        }
        $_POST['biaya_hidup_sebulan'] = str_replace(".", "", $_POST['biaya_hidup_sebulan']);
        $_POST['biaya_pendidikan'] = str_replace(".", "", $_POST['biaya_pendidikan']);
        $_POST['biaya_pam_listrik_telepon'] = str_replace(".", "", $_POST['biaya_pam_listrik_telepon']);
        $_POST['biaya_transport'] = str_replace(".", "", $_POST['biaya_transport']);
        $_POST['biaya_lainnya'] = str_replace(".", "", $_POST['biaya_lainnya']);
        $_POST['angsuran_kredit_sebelumnya'] = str_replace(".", "", $_POST['angsuran_kredit_sebelumnya']);

        for ($a = 1; $a <= 7; $a++) {
            $_POST['angsuran_pemohon_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pemohon_lainnya_' . $a]);
            $_POST['pemohon_lunasi_' . $a] = isset($_POST['pemohon_lunasi_' . $a]) ? '0' : '1';
            $_POST['angsuran_pasangan_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pasangan_lainnya_' . $a]);
            $_POST['pasangan_lunasi_' . $a] = isset($_POST['pasangan_lunasi_' . $a]) ? '0' : '1';
        }

        $_POST['saldo_tabungan_terakhir'] = str_replace(".", "", $_POST['saldo_tabungan_terakhir']);


        $_POST['kemampuan_membayar_angsuran'] = str_replace(".", "", $_POST['kemampuan_membayar_angsuran']);

        $persentase_angsuran = $_POST['persentase_angsuran'];

        if ($persentase_angsuran >= 0 && $persentase_angsuran <= 50) {
            $_POST['keterangan_persentase_angsuran'] = "DISARANKAN";
        } else if ($persentase_angsuran >= 51 && $persentase_angsuran <= 70) {
            $_POST['keterangan_persentase_angsuran'] = "DIPERTIMBANGKAN";
        } else if ($persentase_angsuran >= 71 && $persentase_angsuran <= 80) {
            $_POST['keterangan_persentase_angsuran'] = "KURANG DISARANKAN";
        } else if ($persentase_angsuran > 80) {
            $_POST['keterangan_persentase_angsuran'] = "DITOLAK";
        }
        $_POST['user_create'] = $_COOKIE['username'];
        $_POST['tgl_create'] = date('Y-m-d H:i:s');

        $_POST['tanggal_wawancara'] = date('Y-m-d H:i:s');
        $_POST['tanggal_batal'] = date('Y-m-d H:i:s');
        $_POST['lokasi_berkas'] = "ANALIS";




        $data['simpan'] = $this->model('m_wawancara')->simpan_data_wawancara($_POST);
        $data['update'] = $this->model('m_wawancara')->update_tbl_permohonan_kredit_tanggal_batal($_POST);


        if ($data['simpan'] >= 0  and $data['update'] >= 0) {
            $this->model('m_log')->simpan_analisa();
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }






    public function update_data_wawancara()
    {



        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['os_sebelumnya'] = str_replace(".", "", $_POST['os_sebelumnya']);
        $_POST['jangka_waktu'] = str_replace(".", "", $_POST['jangka_waktu']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['biaya_provisi_nominal'] = str_replace(".", "", $_POST['biaya_provisi_nominal']);
        $_POST['biaya_administrasi_nominal'] = str_replace(".", "", $_POST['biaya_administrasi_nominal']);
        $_POST['premi_asuransi'] = str_replace(".", "", $_POST['premi_asuransi']);
        $_POST['tabungan'] = str_replace(".", "", $_POST['tabungan']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_materai'] = str_replace(".", "", $_POST['biaya_materai']);
        $_POST['biaya_apht'] = str_replace(".", "", $_POST['biaya_apht']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);
        $_POST['penambahan'] = str_replace(".", "", $_POST['penambahan']);




        $data_cabang =   $this->model('m_cabang')->get_data($_COOKIE['kode_cabang']);



        $plafond = $_POST['plafond'];
        $limit = $data_cabang['limit'];
        $aturan_jumlah_komite = $data_cabang['aturan_jumlah_komite'];

        if ($plafond > $limit) {
            $_POST['tipe_komite'] = "PUSAT";
            $_POST['aturan_jumlah_komite'] = '3';
        } else if ($plafond <= $limit) {
            $_POST['tipe_komite'] = "CABANG";
            $_POST['aturan_jumlah_komite'] = $aturan_jumlah_komite;
        }




        $_POST['penghasilan_pemohon_perbulan'] = str_replace(".", "", $_POST['penghasilan_pemohon_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pemohon_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pemohon_tambahan_' . $a]);
        }
        $_POST['penghasilan_pasangan_perbulan'] = str_replace(".", "", $_POST['penghasilan_pasangan_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pasangan_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pasangan_tambahan_' . $a]);
        }
        $_POST['biaya_hidup_sebulan'] = str_replace(".", "", $_POST['biaya_hidup_sebulan']);
        $_POST['biaya_pendidikan'] = str_replace(".", "", $_POST['biaya_pendidikan']);
        $_POST['biaya_pam_listrik_telepon'] = str_replace(".", "", $_POST['biaya_pam_listrik_telepon']);
        $_POST['biaya_transport'] = str_replace(".", "", $_POST['biaya_transport']);
        $_POST['biaya_lainnya'] = str_replace(".", "", $_POST['biaya_lainnya']);
        $_POST['angsuran_kredit_sebelumnya'] = str_replace(".", "", $_POST['angsuran_kredit_sebelumnya']);

        for ($a = 1; $a <= 7; $a++) {
            $_POST['angsuran_pemohon_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pemohon_lainnya_' . $a]);
            $_POST['pemohon_lunasi_' . $a] = isset($_POST['pemohon_lunasi_' . $a]) ? '0' : '1';
            $_POST['angsuran_pasangan_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pasangan_lainnya_' . $a]);
            $_POST['pasangan_lunasi_' . $a] = isset($_POST['pasangan_lunasi_' . $a]) ? '0' : '1';
        }

        $_POST['saldo_tabungan_terakhir'] = str_replace(".", "", $_POST['saldo_tabungan_terakhir']);


        $_POST['kemampuan_membayar_angsuran'] = str_replace(".", "", $_POST['kemampuan_membayar_angsuran']);

        $persentase_angsuran = $_POST['persentase_angsuran'];



        if ($persentase_angsuran >= 0 && $persentase_angsuran <= 50) {
            $_POST['keterangan_persentase_angsuran'] = "DISARANKAN";
        } else if ($persentase_angsuran >= 51 && $persentase_angsuran <= 70) {
            $_POST['keterangan_persentase_angsuran'] = "DIPERTIMBANGKAN";
        } else if ($persentase_angsuran >= 71 && $persentase_angsuran <= 80) {
            $_POST['keterangan_persentase_angsuran'] = "Kurang Disarankan";
        } else if ($persentase_angsuran > 80) {
            $_POST['keterangan_persentase_angsuran'] = "DITOLAK";
        }
        $_POST['user_edit'] = $_COOKIE['username'];
        $_POST['tgl_edit'] = date('Y-m-d H:i:s');
        $_POST['tanggal_wawancara'] = date('Y-m-d H:i:s');



        $data_update['1'] = $this->model('m_wawancara')->update_tbl_wawancara();
        $data_update['2'] = $this->model('m_wawancara')->update_tgl_wawancara(); // update tgl wawancara di tbl_permohonan_kredit



        if ($data_update['1'] > 0 && $data_update['2'] > 0) {
            $this->model('m_log')->update_analisa();

            if (isset($_POST['ajukan_komite_analisa_pending'])) {

                $this->model('m_log')->ajukan_komite_analisa_yg_pending();
            }
            echo 'berhasil';
        } else {
            echo "gagal";
        }
    }



    public function update_data_wawancara_tolak()
    {

        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['os_sebelumnya'] = str_replace(".", "", $_POST['os_sebelumnya']);
        $_POST['jangka_waktu'] = str_replace(".", "", $_POST['jangka_waktu']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['biaya_provisi_nominal'] = str_replace(".", "", $_POST['biaya_provisi_nominal']);
        $_POST['biaya_administrasi_nominal'] = str_replace(".", "", $_POST['biaya_administrasi_nominal']);
        $_POST['premi_asuransi'] = str_replace(".", "", $_POST['premi_asuransi']);
        $_POST['tabungan'] = str_replace(".", "", $_POST['tabungan']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_materai'] = str_replace(".", "", $_POST['biaya_materai']);
        $_POST['biaya_apht'] = str_replace(".", "", $_POST['biaya_apht']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);





        $data_cabang =   $this->model('m_cabang')->get_data($_COOKIE['kode_cabang']);



        $plafond = $_POST['plafond'];
        $limit = $data_cabang['limit'];
        $aturan_jumlah_komite = $data_cabang['aturan_jumlah_komite'];

        if ($plafond > $limit) {
            $_POST['tipe_komite'] = "PUSAT";
            $_POST['aturan_jumlah_komite'] = '3';
        } else if ($plafond <= $limit) {
            $_POST['tipe_komite'] = "CABANG";
            $_POST['aturan_jumlah_komite'] = $aturan_jumlah_komite;
        }




        $_POST['penghasilan_pemohon_perbulan'] = str_replace(".", "", $_POST['penghasilan_pemohon_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pemohon_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pemohon_tambahan_' . $a]);
        }
        $_POST['penghasilan_pasangan_perbulan'] = str_replace(".", "", $_POST['penghasilan_pasangan_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pasangan_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pasangan_tambahan_' . $a]);
        }
        $_POST['biaya_hidup_sebulan'] = str_replace(".", "", $_POST['biaya_hidup_sebulan']);
        $_POST['biaya_pendidikan'] = str_replace(".", "", $_POST['biaya_pendidikan']);
        $_POST['biaya_pam_listrik_telepon'] = str_replace(".", "", $_POST['biaya_pam_listrik_telepon']);
        $_POST['biaya_transport'] = str_replace(".", "", $_POST['biaya_transport']);
        $_POST['biaya_lainnya'] = str_replace(".", "", $_POST['biaya_lainnya']);
        $_POST['angsuran_kredit_sebelumnya'] = str_replace(".", "", $_POST['angsuran_kredit_sebelumnya']);

        for ($a = 1; $a <= 7; $a++) {
            $_POST['angsuran_pemohon_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pemohon_lainnya_' . $a]);
            $_POST['pemohon_lunasi_' . $a] = isset($_POST['pemohon_lunasi_' . $a]) ? '0' : '1';
            $_POST['angsuran_pasangan_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pasangan_lainnya_' . $a]);
            $_POST['pasangan_lunasi_' . $a] = isset($_POST['pasangan_lunasi_' . $a]) ? '0' : '1';
        }

        $_POST['saldo_tabungan_terakhir'] = str_replace(".", "", $_POST['saldo_tabungan_terakhir']);


        $_POST['kemampuan_membayar_angsuran'] = str_replace(".", "", $_POST['kemampuan_membayar_angsuran']);

        $persentase_angsuran = $_POST['persentase_angsuran'];



        if ($persentase_angsuran >= 0 && $persentase_angsuran <= 50) {
            $_POST['keterangan_persentase_angsuran'] = "DISARANKAN";
        } else if ($persentase_angsuran >= 51 && $persentase_angsuran <= 70) {
            $_POST['keterangan_persentase_angsuran'] = "DIPERTIMBANGKAN";
        } else if ($persentase_angsuran >= 71 && $persentase_angsuran <= 80) {
            $_POST['keterangan_persentase_angsuran'] = "KURANG DISARANKAN";
        } else if ($persentase_angsuran > 80) {
            $_POST['keterangan_persentase_angsuran'] = "DITOLAK";
        }
        $_POST['user_edit'] = $_COOKIE['username'];
        $_POST['tgl_edit'] = date('Y-m-d H:i:s');
        $_POST['tanggal_wawancara'] = date('Y-m-d H:i:s');
        $_POST['tanggal_tolak'] = date('Y-m-d H:i:s');





        $data['simpan_update'] = $this->model('m_wawancara')->update_tbl_wawancara();
        $data['update'] = $this->model('m_wawancara')->update_tbl_permohonan_kredit_tanggal_tolak($_POST);


        if ($data['simpan_update'] >= 0  and $data['update'] >= 0) {
            $this->model('m_log')->update_analisa();
            echo "berhasil";
        } else {
            echo "gagal";
        }

        // echo $_POST['lokas_berkas'];
    }


    public function update_data_wawancara_batal()
    {

        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['os_sebelumnya'] = str_replace(".", "", $_POST['os_sebelumnya']);
        $_POST['jangka_waktu'] = str_replace(".", "", $_POST['jangka_waktu']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['biaya_provisi_nominal'] = str_replace(".", "", $_POST['biaya_provisi_nominal']);
        $_POST['biaya_administrasi_nominal'] = str_replace(".", "", $_POST['biaya_administrasi_nominal']);
        $_POST['premi_asuransi'] = str_replace(".", "", $_POST['premi_asuransi']);
        $_POST['tabungan'] = str_replace(".", "", $_POST['tabungan']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_materai'] = str_replace(".", "", $_POST['biaya_materai']);
        $_POST['biaya_apht'] = str_replace(".", "", $_POST['biaya_apht']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);





        $data_cabang =   $this->model('m_cabang')->get_data($_COOKIE['kode_cabang']);



        $plafond = $_POST['plafond'];
        $limit = $data_cabang['limit'];
        $aturan_jumlah_komite = $data_cabang['aturan_jumlah_komite'];

        if ($plafond > $limit) {
            $_POST['tipe_komite'] = "PUSAT";
            $_POST['aturan_jumlah_komite'] = '3';
        } else if ($plafond <= $limit) {
            $_POST['tipe_komite'] = "CABANG";
            $_POST['aturan_jumlah_komite'] = $aturan_jumlah_komite;
        }




        $_POST['penghasilan_pemohon_perbulan'] = str_replace(".", "", $_POST['penghasilan_pemohon_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pemohon_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pemohon_tambahan_' . $a]);
        }
        $_POST['penghasilan_pasangan_perbulan'] = str_replace(".", "", $_POST['penghasilan_pasangan_perbulan']);
        for ($a = 1; $a <= 3; $a++) {
            $_POST['penghasilan_pasangan_tambahan_' . $a] = str_replace(".", "", $_POST['penghasilan_pasangan_tambahan_' . $a]);
        }
        $_POST['biaya_hidup_sebulan'] = str_replace(".", "", $_POST['biaya_hidup_sebulan']);
        $_POST['biaya_pendidikan'] = str_replace(".", "", $_POST['biaya_pendidikan']);
        $_POST['biaya_pam_listrik_telepon'] = str_replace(".", "", $_POST['biaya_pam_listrik_telepon']);
        $_POST['biaya_transport'] = str_replace(".", "", $_POST['biaya_transport']);
        $_POST['biaya_lainnya'] = str_replace(".", "", $_POST['biaya_lainnya']);
        $_POST['angsuran_kredit_sebelumnya'] = str_replace(".", "", $_POST['angsuran_kredit_sebelumnya']);

        for ($a = 1; $a <= 7; $a++) {
            $_POST['angsuran_pemohon_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pemohon_lainnya_' . $a]);
            $_POST['pemohon_lunasi_' . $a] = isset($_POST['pemohon_lunasi_' . $a]) ? '0' : '1';
            $_POST['angsuran_pasangan_lainnya_' . $a] = str_replace(".", "", $_POST['angsuran_pasangan_lainnya_' . $a]);
            $_POST['pasangan_lunasi_' . $a] = isset($_POST['pasangan_lunasi_' . $a]) ? '0' : '1';
        }

        $_POST['saldo_tabungan_terakhir'] = str_replace(".", "", $_POST['saldo_tabungan_terakhir']);


        $_POST['kemampuan_membayar_angsuran'] = str_replace(".", "", $_POST['kemampuan_membayar_angsuran']);

        $persentase_angsuran = $_POST['persentase_angsuran'];



        if ($persentase_angsuran >= 0 && $persentase_angsuran <= 50) {
            $_POST['keterangan_persentase_angsuran'] = "DISARANKAN";
        } else if ($persentase_angsuran >= 51 && $persentase_angsuran <= 70) {
            $_POST['keterangan_persentase_angsuran'] = "DIPERTIMBANGKAN";
        } else if ($persentase_angsuran >= 71 && $persentase_angsuran <= 80) {
            $_POST['keterangan_persentase_angsuran'] = "KURANG DISARANKAN";
        } else if ($persentase_angsuran > 80) {
            $_POST['keterangan_persentase_angsuran'] = "DITOLAK";
        }
        $_POST['user_edit'] = $_COOKIE['username'];
        $_POST['tgl_edit'] = date('Y-m-d H:i:s');

        $_POST['tanggal_wawancara'] = date('Y-m-d H:i:s');
        $_POST['tanggal_batal'] = date('Y-m-d H:i:s');



        $data['simpan_update'] = $this->model('m_wawancara')->update_tbl_wawancara();
        $data['update'] = $this->model('m_wawancara')->update_tbl_permohonan_kredit_tanggal_batal($_POST);


        if ($data['simpan_update'] >= 0  and $data['update'] >= 0) {
            $this->model('m_log')->update_analisa();
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }









    // daftar sudah wawancara 

    public function data_sudah_wawancara_no_permohonan_kredit($no_permohonan_kredit)
    {

        $hasil = $this->model('m_wawancara')->data_sudah_wawancara_no_permohonan_kredit($no_permohonan_kredit);

        return $hasil;
    }

    public function btn_ajukan_komite($id)
    {


        $data = explode('|', $id);

        $nopeg = $data[0];
        $tipe_komite = $data[1];

        $cs = new cs();
        $_POST['no_permohonan_kredit'] = $nopeg;
        $_POST['nama_pemohon'] = $cs->get_nama_pemohon_where_id()['nama_pemohon'];


        // echo $_POST['nama_pemohon'];


        $data['get_tbl_wawancara_where_id'] = $this->model('m_wawancara')->get_tbl_wawancara_where_id();
        $tolak_batal = $data['get_tbl_wawancara_where_id']['tolak_batal'];


        if ($tolak_batal == "TOLAK") {
            $_POST['status'] = "DIAJUKAN TOLAK";
        } else if ($tolak_batal == "BATAL") {
            $_POST['status'] = "DIAJUKAN BATAL";
        } else {
            $_POST['status'] = "DIAJUKAN";
        }







        if ($tipe_komite == "PUSAT") {
            $this->model('m_log')->ajukan_komite_pusat();
            $data_ajukan = $this->model('m_wawancara')->btn_ajukan_komite_pusat($id);
        } else {
            $this->model('m_log')->ajukan_komite();
            $data_ajukan = $this->model('m_wawancara')->btn_ajukan_komite($id);
        }


        // unutk update lokasi berkas di tabel permohon_kredit
        $_POST['lokasi_berkas'] = "KOMITE";
        $this->model("m_cs")->update_lokasi_berkas();







        if ($data_ajukan > 0) {
            echo 'berhasil';
        } else {
            echo 'gagal';
        }
    }


    public function cek_status_debitur()
    {
        $data = $this->model('m_wawancara')->cek_status_debitur();

        echo $data['status'];
    }



    public function btn_batalkan_ajuan($id)
    {

        $data = $this->model('m_wawancara')->btn_batalkan_ajuan($id);


        if ($data > 0) {
            header('Location:' . BASEURL . '/wawancara/daftar_sudah_wawancara');
            exit;
        } else {
            header('Location:' . BASEURL . '/wawancara/daftar_sudah_wawancara');
            exit;
        }
    }



    public function btn_ajukan_pusat($id)
    {
        $data = $this->model('m_wawancara')->btn_ajukan_pusat($id);

        if ($data > 0) {
            $cs = new cs();
            $_POST['no_permohonan_kredit'] = $id;
            $_POST['nama_pemohon'] = $cs->get_nama_pemohon_where_id()['nama_pemohon'];
            $this->model('m_log')->ajukan_komite_pusat();
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }





    // ambil data detail dari detail wawancara
    public function ref_kode_golongan_debitur($kode)
    {

        $hasil = $this->model('m_ref_golongan_debitur')->get_data_where_kode($kode);
        return $hasil;
    }

    public function ref_jenis_penggunaan($kode)
    {

        $hasil = $this->model('m_ref_jenis_penggunaan')->get_data_where_kode($kode);
        return $hasil;
    }

    public function ref_sektor_ekonomi($kode)
    {
        $hasil = $this->model('m_ref_sektor_ekonomi')->get_data_where_kode($kode);
        return $hasil;
    }

    public function ref_hubungan_debitur_dengan_bank($kode)
    {
        $hasil = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_data_where_kode($kode);
        return $hasil;
    }

    public function detail_tbl_permohonan($no_permohonan_kredit)
    {
        $hasil = $this->model('m_tbl_permohonan_kredit')->get_data_where_no_permohonan_kerdit($no_permohonan_kredit);

        return $hasil;
    }

    public function ref_tujuan_penggunaan_kredit($kode)
    {
        $hasil = $this->model('m_ref_tujuan_penggunaan_kredit')->get_data_where_kode($kode);

        return $hasil;
    }


    public function detail_wawancara()
    {

        $detail = $this->model('m_wawancara')->detail_wawancara($_POST);
        $detail_permohonan_kredit  = $this->detail_tbl_permohonan($detail['no_permohonan_kredit']);

        $ref_tujuan_penggunaan_kredit = $this->ref_tujuan_penggunaan_kredit($detail_permohonan_kredit['tujuan_penggunaan_kredit']);

        $daftar_slik_pemohon = $this->model('m_slik_daftar_slik')->daftar_slik_pemohon($detail['no_permohonan_kredit']);

        $daftar_slik_pasangan = $this->model('m_slik_daftar_slik')->daftar_slik_pasangan($detail['no_permohonan_kredit']);









        $detail['plafond'] = number_format(($detail['plafond']), 0, ',', '.');
        $detail['angsuran_perbulan'] = number_format(($detail['angsuran_perbulan']), 0, ',', '.');
        $detail['biaya_provisi_nominal'] = number_format(($detail['biaya_provisi_nominal']), 0, ',', '.');
        $detail['biaya_administrasi_nominal'] = number_format(($detail['biaya_administrasi_nominal']), 0, ',', '.');
        $detail['premi_asuransi'] = number_format(($detail['premi_asuransi']), 0, ',', '.');
        $detail['tabungan'] = number_format(($detail['tabungan']), 0, ',', '.');
        $detail['biaya_notaris'] = number_format(($detail['biaya_notaris']), 0, ',', '.');
        $detail['biaya_materai'] = number_format(($detail['biaya_materai']), 0, ',', '.');
        $detail['biaya_apht'] = number_format(($detail['biaya_apht']), 0, ',', '.');
        $detail['asuransi_kerugian'] = number_format(($detail['asuransi_kerugian']), 0, ',', '.');





        $kode_golongan_debitur = $this->ref_kode_golongan_debitur($detail['kode_golongan_debitur']);
        $kode_jenis_penggunaan = $this->ref_jenis_penggunaan($detail['kode_jenis_penggunaan']);

        $kode_sektor_ekonomi = $this->ref_sektor_ekonomi($detail['kode_sektor_ekonomi']);
        $kode_hubungan_debitur_dengan_bank = $this->ref_hubungan_debitur_dengan_bank($detail['kode_hubungan_debitur_dengan_bank']);





        for ($a = 1; $a <= 3; $a++) {

            $penghasilan_pemohon_ket[$a] = $detail['penghasilan_pemohon_tambahan_' . $a . '_ket'] != '' ? $detail['penghasilan_pemohon_tambahan_' . $a . '_ket'] : '-';
            $penghasilan_pasangan_ket[$a] = $detail['penghasilan_pasangan_tambahan_' . $a . '_ket'] != '' ? $detail['penghasilan_pasangan_tambahan_' . $a . '_ket'] : '-';
        }





        $biaya_hidup_sebulan_ket = $detail['biaya_hidup_sebulan_ket'] != '' ? $detail['biaya_hidup_sebulan_ket'] : '-';
        $biaya_pendidikan_ket    = $detail['biaya_pendidikan_ket'] != '' ? $detail['biaya_pendidikan_ket'] : '-';

        $biaya_pam_listrik_telepon_ket = $detail['biaya_pam_listrik_telepon_ket'] != '' ? $detail['biaya_pam_listrik_telepon_ket'] : '-';
        $biaya_transport_ket = $detail['biaya_transport_ket'] != '' ? $detail['biaya_transport_ket'] : '-';

        $biaya_lainnya_ket = $detail['biaya_lainnya_ket'] != '' ? $detail['biaya_lainnya_ket'] : '-';





        for ($a = 1; $a <= 7; $a++) {
            if ($a == 1) {
                $detail['angsuran_kredit_sebelumnya'] = number_format(($detail['angsuran_kredit_sebelumnya'] * 1000), 0, ',', '.');
                $detail['saldo_tabungan_terakhir'] = number_format(($detail['saldo_tabungan_terakhir'] * 1000), 0, ',', '.');
            }
            $detail['angsuran_pemohon_lainnya_' . $a] =  number_format(($detail['angsuran_pemohon_lainnya_' . $a] * 1000), 0, ',', '.');
        }


        for ($a = 1; $a <= 7; $a++) {

            $detail['angsuran_pasangan_lainnya_' . $a] =  number_format(($detail['angsuran_pasangan_lainnya_' . $a] * 1000), 0, ',', '.');
        }


        $detail['kemampuan_membayar_angsuran'] = number_format(($detail['kemampuan_membayar_angsuran'] * 1000), 0, ',', '.');



        for ($a = 1; $a <= 7; $a++) {

            if ($detail['pemohon_lunasi_' . $a] == "0") {
                $angsuran_pemohon[$a] = "<span style='color:red'>" . $detail['angsuran_pemohon_lainnya_' . $a] . "</span>";
                $ket_angsuran_pemohon[$a] = "<span style='color:red'>" . $detail['angsuran_pemohon_lainnya_' . $a . '_ket'] . "-----Dilunasi" . "</span>";
            } else if ($detail['pemohon_lunasi_' . $a] == "1") {
                $angsuran_pemohon[$a] = "<span>" . $detail['angsuran_pemohon_lainnya_' . $a] . "</span>";
                $ket_angsuran_pemohon[$a] = "<span>" . $detail['angsuran_pemohon_lainnya_' . $a . '_ket'] . "-----Dilanjutkan" . "</span>";
            }

            if ($detail['pasangan_lunasi_' . $a] == "0") {
                $angsuran_pasangan[$a] = "<span style='color:red'>" . $detail['angsuran_pasangan_lainnya_' . $a] . "</span>";
                $ket_angsuran_pasangan[$a] = "<span style='color:red'>" . $detail['angsuran_pasangan_lainnya_' . $a . '_ket'] . "-----Dilunasi" . "</span>";
            } else if ($detail['pasangan_lunasi_' . $a] == "1") {
                $angsuran_pasangan[$a] = "<span>" . $detail['angsuran_pasangan_lainnya_' . $a] . "</span>";
                $ket_angsuran_pasangan[$a] = "<span>" . $detail['angsuran_pasangan_lainnya_' . $a . '_ket'] . "-----Dilanjutkan" . "</span>";
            }
        }



        if ($detail['keterangan_persentase_angsuran'] = "DISARANKAN" or $detail['keterangan_persentase_angsuran'] = "DIPERTIMBANGKAN") {
            $detail['keterangan_persentase_angsuran'] = "<span style='color:blue'>" . $detail['keterangan_persentase_angsuran'] . "</span>";
        } else if ($detail['keterangan_persentase_angsuran'] == "DITOLAK" or $detail['keterangan_persentase_angsuran'] = "KURANG DISARANKAN") {
            $detail['keterangan_persentase_angsuran'] = "<span style='color:red'>" . $detail['keterangan_persentase_angsuran'] . "</span>";
        }








        echo

        "
        
    <div class='row mb-3'>

    <div class='d-flex'>

    <div class='ml-auto'>
        <div class='d-flex'>

        
            
        
        ";




        if ($detail['status'] == 'DIAJUKAN' || $detail['status'] == 'KOMITE') {
            echo

            "

            

            <div class='mr-2'><a style='background-color: #EC994B; color:white; ' onclick='btn_batalkan_ajuan(event); return false' href=' " . BASEURL . '/wawancara/btn_batalkan_ajuan/' . $detail_permohonan_kredit['no_permohonan_kredit'] . "' class='btn'>Batalkan Ajuan</a></div>
            <div class='mr-2'><a style='background-color: #EC994B; color:white; ' onclick='btn_ajukan_pusat(event); return false' href=' " . BASEURL . '/wawancara/btn_ajukan_pusat/' . $detail_permohonan_kredit['no_permohonan_kredit'] . "' class='bt'>Ajukan Komite Pusat</a></div>
            
            ";
        } else  if ($detail['status'] == 'BELUM DIAJUKAN') {

            echo

            "
            <div class='mr-2'><a style='background-color: #EC994B; color:white; ' onclick='btn_ajukan_komite(event); return false' href=' " . BASEURL . '/wawancara/btn_ajukan_komite/' . $detail_permohonan_kredit['no_permohonan_kredit'] . "' class='btn'>Ajukan Komite</a></div>
            ";
        }






        echo "




    
            
        </div>
    </div>

    </div>
    </div>

        <div class='row'>
        <div class='col-6'>

        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket'>No. Permohonan Kredit</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['no_permohonan_kredit'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Tgl. Wawancara</td>
                <td id='td_tabel_modal'>" . date('d-m-Y', strtotime($detail_permohonan_kredit['tanggal_wawancara'])) . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Nama RO</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['user_wawancara'] . "</td>
            </tr>

        </table>

    </div>
    <div class='col-6'>


        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket'>Nama Pemohon</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_pemohon'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Instansi</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_instansi'] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Alamat Instansi</td>
                <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_instansi'] . "</td>
            </tr>

        </table>

    </div>
</div>



        <ul class='nav nav-tabs mt-3' id='tab_detail_wawancara' role='tablist'>
            
            <li class='nav-item'>
                <a class='nav-link ' id='li_detail_pemohon' data-toggle='tab' href='#detail_pemohon'>Detail Pemohonan</a>
            </li>

            
            <li class='nav-item'>
                <a class='nav-link' id='li_detail_slik' data-toggle='tab' href='#detail_slik'>Detail SLIK</a>
            </li>


            <li class='nav-item'>
                <a class='nav-link active ' id='li_detail_wawancara' data-toggle='tab' href='#detail_wawancara'>Detail Wawancara </a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' id='li_rekomendasi_komite' data-toggle='tab' href='#rekomendasi_komite'>Rekomendasi Komite</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' id='li_keputusan_komite' data-toggle='tab' href='#keputusan_komite'>Keputusan Komite</a>
            </li>
        </ul>


<style>
    .hidden-table:hover {
        background-color: white !important;
    }
</style>


<div class='tab-content'>


    <div class='tab-pane' id='detail_pemohon'>

    <h1 class='h3 mt-3 mb-3 text-center'><strong> Detail Pemohon</strong> </h1>


       <div class='row mt-2'>


                <div class='col-6'>
                    <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                        <tr>
                            <td id='td_tabel_modal_ket' colspan='2'><b>Data Pemohon</b></td>
                        </tr>

                        <tr>
                        <td id='td_tabel_modal_ket'>No. Permohonan </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['no_permohonan_kredit'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Nama Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_pemohon'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Tempat Lahir </td>
                        <td id='td_tabel_modal'>" .  $detail_permohonan_kredit['tempat_lahir_pemohon'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Tanggal Lahir Pemohon </td>
                        <td id='td_tabel_modal'>" . date('d-m-Y', strtotime($detail_permohonan_kredit['tgl_lahir_pemohon'])) . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Jenis Kelamin Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_kelamin_pemohon'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Nama Ibu Kandung Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_ibu_kandung_pemohon'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>No. KTP Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['no_ktp_pemohon'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>NPWP Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['npwp_pemohon'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Alamat Sesuai KTP Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_ktp_pemohon'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Alamat Sekarang Pemhohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_sekarang_pemohon'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Telepon Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_pemohon'] . "</td>
                        </tr>

                        
                        <tr>
                        <td id='td_tabel_modal_ket'>Media Sosial Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['media_sosial'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Status Kepemilikan Rumah Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['status_kepemilikan_rumah_pemohon'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Pendidikan Terakhir Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['pendidikan_terakhir_pemohon'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Gelar Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['gelar_pemohon'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Status Perkawinan Pemohon</td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['status_perkawinan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Jumlah Tanggungan Pemohon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jumlah_tanggungan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Nama Keluarga Yang Dapat Dihubungi</td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_keluarga_dapat_dihubungi'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Alamat </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_keluarga_dapat_dihubungi'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Hubungan </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['hubungan_keluarga_dapat_dihubungi'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Telepon/Hp Yang Dapat Dihubngi </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_keluarga_dapat_dihubungi'] . "</td>
                        </tr>



                    </table>
                </div>



                <div class='col-6'>
                    <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                        <tr>
                            <td id='td_tabel_modal_ket' colspan='2'><b>Data Pekerjaan</b></td>
                        </tr>

                        
                        <tr>
                        <td id='td_tabel_modal_ket'>Jenis Pekerjaan </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_pekerjaan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Nama Instansi </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_instansi'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Alamat </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_instansi'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Telepon </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_instansi'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Tahun Mulai Bekerja	 </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tahun_mulai_bekerja'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Jabatan Saat Ini </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jabatan_saat_ini'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Atasan Langsung</td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['atasan_langsung'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Telp/Hp Bendahara </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_bendahara'] . "</td>
                        </tr>

                    </table>
                </div> 

       
        </div>


        <div class='row mt-2'>

                <div class='col-6'>
                    <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                        <tr>
                            <td id='td_tabel_modal_ket' colspan='2'><b>Data Pasangan</b></td>
                        </tr>

                        
                        <tr>
                        <td id='td_tabel_modal_ket'>Nama Pasangan</td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_pasangan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Tempat Lahir Pasangan </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tempat_lahir_pasangan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Tanggal Lahir Pasangan </td>
                        <td id='td_tabel_modal'>" . date('d-m-Y', strtotime($detail_permohonan_kredit['tgl_lahir_pasangan']))  . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>No. KTP Pasangan</td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['no_ktp_pasangan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Alamat KTP</td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_ktp_pasangan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Alamat Sekarang</td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_sekarang_pasangan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Telepon/HP</td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_pasangan'] . "</td>
                        </tr>

                    </table>
                </div>



                <div class='col-6'>
                    <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                        <tr>
                            <td id='td_tabel_modal_ket' colspan='2'><b>Data Pekerjaan Pasangan</b></td>
                        </tr>

                        
                        <tr>
                        <td id='td_tabel_modal_ket'>Jenis Pekerjaan </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_pekerjaan_pasangan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Nama Instansi </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_instansi_pasangan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Tahun Mulai Bekerja </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tahun_mulai_bekerja_pasangan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Jabatan Saat Ini </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jabatan_saat_ini_pasangan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Alamat Kantor </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_kantor_pasangan'] . "</td>
                        </tr>
                        <tr>
                        <td id='td_tabel_modal_ket'>Telepon Kantor </td>
                        <td id='td_tabel_modal'>" . $detail_permohonan_kredit['telepon_kantor_pasangan'] . "</td>
                        </tr>

                    </table>
                </div> 

        
        </div>


        <div class='row mt-2'>

                <div class='col-6'>
                    <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                    <tr>
                    <td id='td_tabel_modal_ket' colspan='2'><b>Data Kredit</b></td>
                    </tr>


                    <tr>
                    <td id='td_tabel_modal_ket'>Tanggal Permohonan </td>
                    <td id='td_tabel_modal'>" . date('d-m-Y', strtotime($detail_permohonan_kredit['tanggal_permohonan'])) . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Perjanjian Kerjasama </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['perjanjian_kerjasama'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Jenis Permohonan </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_permohonan'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Jumlah Kredit Yang Dimohon  </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['plafond_dimohon']), 0, ',', '.') . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Jangka Waktu (Bln) </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jangka_waktu'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Tujuan Penggunaan Kredit </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tujuan_penggunaan_kredit'] . ' - ' . $ref_tujuan_penggunaan_kredit['keterangan'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Jenis Jaminan </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_jaminan'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Nilai Perkiraan Jaminan </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['nilai_jaminan']), 0, ',', '.')   . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Nama Marketing </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['id_marketing'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Nama Analis </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['id_analis'] . "</td>
                    </tr>


                    </table>
                </div>





        </div>

                





         <div class='row mt-2'>

                <div class='col-6'>
                    <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                    <tr>
                    <td id='td_tabel_modal_ket' colspan='2'><b>Penghasilan Perbulan</b></td>
                    </tr>

                    
                    <tr>
                    <td id='td_tabel_modal_ket'>Penghasilan Pemohon  </td>
                    <td id='td_tabel_modal'>" .  number_format(($detail_permohonan_kredit['penghasilan_pemohon']), 0, ',', '.')   . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Penghasilan Pasangan  </td>
                    <td id='td_tabel_modal'>" .  number_format(($detail_permohonan_kredit['penghasilan_pasangan']), 0, ',', '.')   . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Penghasilan Tambahan  </td>
                    <td id='td_tabel_modal'>" .  number_format(($detail_permohonan_kredit['penghasilan_tambahan']), 0, ',', '.')   . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Penghasilan Tambahan Lainnya  </td>
                    <td id='td_tabel_modal'>" .  number_format(($detail_permohonan_kredit['penghasilan_tambahan_lainnya']), 0, ',', '.')   . "</td>
                    </tr>




                    </table>
                </div>



                <div class='col-6'>
                    <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                    <tr>
                    <td id='td_tabel_modal_ket' colspan='2'><b>Pengeluaran Perbulan</b></td>
                    </tr>

                    <tr>
                    <td id='td_tabel_modal_ket'>Biaya Hidup </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['biaya_hidup_perbulan']), 0, ',', '.')  . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Biaya Pendidikan  </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['biaya_pendidikan']), 0, ',', '.')  . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Biaya PAM/Listrik/Tlp/Hp  </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['biaya_pam_listrik_telepon']), 0, ',', '.')  . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Biaya Transport  </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['biaya_transport']), 0, ',', '.')  . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Angsuran Bang Lain  </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['angsuran_bank_lain']), 0, ',', '.')  . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Angsuran Perumahan  </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['angsuran_perumahan']), 0, ',', '.')  . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Angsuran Kendaraan  </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['angsuran_kendaraan']), 0, ',', '.')  . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Angsuran Barang Elektronik  </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['angsuran_barang_elektronik']), 0, ',', '.')  . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Angsuran Koperasi </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['angsuran_koperasi']), 0, ',', '.')  . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Biaya Lainnya </td>
                    <td id='td_tabel_modal'>" . number_format(($detail_permohonan_kredit['biaya_lainnya']), 0, ',', '.')  . "</td>
                    </tr>




                    </table>
                </div>





        </div>



        <div class='row mt-2'>

                <div class='col-6'>
                    <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                    <tr>
                    <td id='td_tabel_modal_ket' colspan='2'><b>Data Aset Yang Dimiliki</b></td>
                    </tr>

                    <tr>
                    <td id='td_tabel_modal_ket'>Aset Yang Dimiliki </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['aset_yang_dimiliki'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Alamat Aset </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_aset'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Jenis Sertifikat</td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jenis_sertifikat'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Jumlah Kendaraan </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['jumlah_kendaraan'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Merk Kendaraan </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['merek_kendaraan'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Tahun Kendaraan</td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tahun_kendaraan'] . "</td>
                    </tr>
                    <tr>
                    <td id='td_tabel_modal_ket'>Atas Nama Kendaraan </td>
                    <td id='td_tabel_modal'>" . $detail_permohonan_kredit['atas_nama_kendaraan'] . "</td>
                    </tr>




                    </table>
                </div>
        </div>


        <div class='row mt-2'>

        <div class='col-6'>
            <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

           

            <tr>
            <td id='td_tabel_modal_ket'>Catatan CS</td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['catatan_cs'] . "</td>
            </tr>
            <tr>
            <td id='td_tabel_modal_ket'>Lokasi Berkas </td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['lokasi_berkas'] . "</td>
            </tr>
           



            </table>
        </div>



        <div class='col-6'>
            <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

           

            <tr>
            <td id='td_tabel_modal_ket'>Diinput Oleh</td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['user_create'] . "</td>
            </tr>
            <tr>
            <td id='td_tabel_modal_ket'>Tanggal Input   </td>
            <td id='td_tabel_modal'>" . date('d-m-Y', strtotime($detail_permohonan_kredit['tgl_create']))  . "</td>
            </tr>
           



            </table>
        </div>




</div>


    </div> ";



        // slikk

        // slik pemohon
        echo

        "
    <div class='tab-pane ' id='detail_slik'>

    

    <h1 class='h3 mt-3 mb-3 text-center'><strong> Detail SLIK</strong> </h1>




    <div class='card  '>
            <div class='card-header'>
                Daftar SLIK Pemohon
            </div>

        <div class='card-body'>




        <div class='row'>
        <div class='col-6'>


        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

           

            <tr>
            <td id='td_tabel_modal_ket'>Nama Pemohon</td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_pemohon'] . "</td>
            </tr>

            <tr>
            <td id='td_tabel_modal_ket'>Nama Instansi </td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_instansi'] . "</td>
            </tr>

            <tr>
            <td id='td_tabel_modal_ket'>No. KTP</td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['no_ktp_pemohon'] . "</td>
            </tr>
        

            </table>


        </div>



        <div class='col-6'>


        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

           

            <tr>
            <td id='td_tabel_modal_ket'>Tempat Tanggal Lahir </td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tempat_lahir_pemohon'] . ', ' . date('d-m-Y', strtotime($detail_permohonan_kredit['tgl_lahir_pemohon']))  . "</td>
            </tr>

            <tr>
            <td id='td_tabel_modal_ket'>Alamat KTP </td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_ktp_pemohon']  . "</td>
            </tr>

            <tr>
            <td id='td_tabel_modal_ket'>Alamat saat ini </td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_sekarang_pemohon']  . "</td>
            </tr>
            </table>


        </div>


        
        <div class='col-12'>

        <div class='table-responsive mt-3'>
        <table id='daftar_slik' class='table cell-border table-striped table-hover first display nowrap'>
            <thead>
                <tr>
                    
                    <td>
                        Nama Bank
                    </td>
    
                    <td>
                        Jenis Fasilitas
                    </td>
                    <td>
                        Plafond
                    </td>
                    <td>
                        Bakidebet
                    </td>
                    <td>
                        Kolektibilitas
                    </td>
    
                    <td>
                        Jangka Waktu
                    </td>
                    <td>
                        Suku Bunga
                    </td>
                    <td>
                        Jenis Jaminan
                    </td>
                    <td>
                        Nilai Jaminan
                    </td>
                    <td>
                        Pemilik Jaminan
                    </td>
                    <td>
                        Alamat Jaminan
                    </td>
                    <td>
                        Pengikatan
                    </td>
                    <td>
                        Keterangan
                    </td>
                </tr>
            </thead>
            <tbody>";


        foreach ($daftar_slik_pemohon as $row) :
            echo "<tr>";
            echo "<td>" . $row['nama_bank'] . "</td>";
            echo "<td>" . $row['jenis_fasilitas'] . "</td>";
            echo "<td>" . number_format($row['plafond'], 0, ',', '.') . "</td>";
            echo "<td>" . number_format($row['bakidebet'], 0, ',', '.') . "</td>";
            echo "<td>" .  $row['kolektibilitas'] . "</td>";
            echo "<td>" .  date('d-m-Y', strtotime($row['waktu_awal'])) . ' s/d ' . date('d-m-Y', strtotime($row['waktu_akhir'])) . "</td>";
            echo "<td>" . $row['suku_bunga'] . "</td>";
            echo "<td>" . $row['jenis_jaminan'] . "</td>";
            echo "<td>" . number_format($row['nilai_jaminan'], 0, ',', '.') . "</td>";
            echo "<td>" . $row['pemilik_jaminan'] . "</td>";
            echo "<td>" . $row['alamat_jaminan'] . "</td>";
            echo "<td>" . $row['pengikatan'] . "</td>";
            echo "<td>" . $row['keterangan'] . "</td>";
            echo "</tr>";

        endforeach;


        // akhir table slik pemohon
        echo "
            
            
            </tbody>
            </table>
        </div>
        </div>
        </div>
        </div>
        </div>
            
            ";


        //slik pasangan

        echo
        "

        <div class='card  mt-1'>
            <div class='card-header'>
                Daftar SLIK PASANGAN
            </div>

        <div class='card-body'>
        


        <div class='row'>

        <div class='col-6'>


        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

           

            <tr>
            <td id='td_tabel_modal_ket'>Nama Pasangan</td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_pasangan'] . "</td>
            </tr>

            <tr>
            <td id='td_tabel_modal_ket'>Nama Instansi </td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['nama_instansi'] . "</td>
            </tr>

            <tr>
            <td id='td_tabel_modal_ket'>No. KTP</td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['no_ktp_pasangan'] . "</td>
            </tr>
           
            </table>


        </div>





        <div class='col-6'>


        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

           

           
            <tr>
            <td id='td_tabel_modal_ket'>Tempat Tanggal Lahir </td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['tempat_lahir_pasangan'] . ', ' . date('d-m-Y', strtotime($detail_permohonan_kredit['tgl_lahir_pemohon']))  . "</td>
            </tr>

            <tr>
            <td id='td_tabel_modal_ket'>Alamat KTP </td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_ktp_pasangan']  . "</td>
            </tr>

            <tr>
            <td id='td_tabel_modal_ket'>Alamat saat ini </td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['alamat_sekarang_pasangan']  . "</td>
            </tr>
    
            </table>


        </div>







        </div>



            <div class='table-responsive mt-3'>
        <table id='daftar_slik_pasangann' class='table cell-border table-striped table-hover first display nowrap' style='width:100%'>
            <thead>
                <tr>

                
                    
                    <td>
                        Nama Bank
                    </td>
    
                    <td>
                        Jenis Fasilitas
                    </td>
                    <td>
                        Plafond
                    </td>
                    <td>
                        Bakidebet
                    </td>
                    <td>
                        Kolektibilitas
                    </td>
    
                    <td>
                        Jangka Waktu
                    </td>
                    <td>
                        Suku Bunga
                    </td>
                    <td>
                        Jenis Jaminan
                    </td>
                    <td>
                        Nilai Jaminan
                    </td>
                    <td>
                        Pemilik Jaminan
                    </td>
                    <td>
                        Alamat Jaminan
                    </td>
                    <td>
                        Pengikatan
                    </td>
                    <td>
                        Keterangan
                    </td>
                </tr>
            </thead>
            <tbody>
            
            ";

        foreach ($daftar_slik_pasangan as $row) :
            echo "<tr>";
            echo "<td>" . $row['nama_bank'] . "</td>";
            echo "<td>" . $row['jenis_fasilitas'] . "</td>";
            echo "<td>" . number_format($row['plafond'], 0, ',', '.') . "</td>";
            echo "<td>" . number_format($row['bakidebet'], 0, ',', '.') . "</td>";
            echo "<td>" .  $row['kolektibilitas'] . "</td>";
            echo "<td>" .  date('d-m-Y', strtotime($row['waktu_awal'])) . ' s/d ' . date('d-m-Y', strtotime($row['waktu_akhir'])) . "</td>";
            echo "<td>" . $row['suku_bunga'] . "</td>";
            echo "<td>" . $row['jenis_jaminan'] . "</td>";
            echo "<td>" . number_format($row['nilai_jaminan'], 0, ',', '.') . "</td>";
            echo "<td>" . $row['pemilik_jaminan'] . "</td>";
            echo "<td>" . $row['alamat_jaminan'] . "</td>";
            echo "<td>" . $row['pengikatan'] . "</td>";
            echo "<td>" . $row['keterangan'] . "</td>";
            echo "</tr>";

        endforeach;


        // akhir table slik pasangan
        echo
        "

            </tbody>
            </table>
        </div>


        </div>
        </div>
            
            ";







        echo " 
            
            <div class='row'>
            <div class='col-6'>
            <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>
            <tr>
            <td id='td_tabel_modal_ket'>Diinput Oleh</td>
            <td id='td_tabel_modal'>" . $detail_permohonan_kredit['user_slik'] . "</td>
            </tr>
            <tr>
            <td id='td_tabel_modal_ket'>Tanggal Input   </td>
            <td id='td_tabel_modal'>" . date('d-m-Y', strtotime($detail_permohonan_kredit['tgl_slik']))  . "</td>
            </tr>
            </table>
            </div>
            </div>
        
        ";






        // akhir tab slik
        echo "</div>";













        echo "
    


    

    <div class='tab-pane active ' id='detail_wawancara'>
        <h1 class='h3 mt-3 mb-3 text-center'><strong> Detail Wawancara</strong> </h1>


        <ul class='nav nav-tabs mt-2' id='tab_detail_wawancara_2' role='tablist'>
            <li class='nav-item'>
                <a class='nav-link active' id='li_anallisa_dan_usulan_analis' data-toggle='tab' href='#anallisa_dan_usulan_analis'>Analisa dan Usulan Analis </a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' id='li_daftar_jaminan' data-toggle='tab' href='#daftar_jaminan'>Daftar Jaminan</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' id='li_analisa_kemampuan' data-toggle='tab' href='#analisa_kemampuan'>Analisa Kemampuan</a>
            </li>


            <li class='nav-item'>
                <a class='nav-link' id='li_sandi_sandi' data-toggle='tab' href='#sandi_sandi'>Sandi-Sandi</a>
            </li>
        </ul>




        <div class='tab-content'>

            <div class='tab-pane active' id='anallisa_dan_usulan_analis'>
                <div class='row mt-3'>
                    <div class='col-6'>
                        <div class=''>
                            <!-- table detail -->

                            <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>
                                <tr>
                                    <td id='td_tabel_modal_ket'>Karakter</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['karakter'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Pertimbangan Karakter</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['pertimbangan_karakter'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Kemampuan</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['kemampuan'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Pertimbangan Kemampuan</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['pertimbangan_kemampuan'] . "</td>
                                </tr>


                                <tr>
                                    <td id='td_tabel_modal_ket'>Kekayaan</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['kekayaan'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Pertimbangan Kekayaan</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['pertimbangan_kekayaan'] . "</td>
                                </tr>



                                 <tr>
                                    <td id='td_tabel_modal_ket'>Jaminan</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['jaminan'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Pertimbangan Jaminan</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['pertimbangan_jaminan'] . "</td>
                                </tr>

                                <tr>
                                <td id='td_tabel_modal_ket'>Kondsi</td>
                                
                                <td id='td_tabel_modal'>" . $detail['kondisi'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Pertimbangan Karakter</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['pertimbangan_kondisi'] . "</td>
                                </tr>

                                <tr>
                                <td id='td_tabel_modal_ket'>Tujuan Penggunaan Kredit</td>
                                
                                <td id='td_tabel_modal'>" . $detail['tujuan_penggunaan_kredit'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Jaminan Utama</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['jaminan_utama'] . "</td>
                                </tr>

                                <tr>
                                <td id='td_tabel_modal_ket'>Syarat Lainnya</td>
                                <td id='td_tabel_modal'>" . $detail['syarat_lainnya'] . "</td>
                                </tr>

                                <tr>
                                <td id='td_tabel_modal_ket'>Dasar Pertimbangan Analis</td>
                                <td ><textarea class='form-control h-25' rows='15'>" . $detail['dasar_pertimbangan_analis'] . "</textarea></td>
                                </tr>


                                

                            </table>
                            <!-- table detail -->

                        </div>
                    </div>


                    <div class='col-6'>
                        <div class=''>
                            <!-- table detail -->

                            <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>
                                <tr>
                                    <td id='td_tabel_modal_ket'>Plafond</td>
                                   
                                    <td id='td_tabel_modal'>" . $detail['plafond'] . "</td>
                                </tr>


                                <tr>
                                    <td id='td_tabel_modal_ket'>Jangka Waktu</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['jangka_waktu'] . ' Bulan' . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Suku Bunga </td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['suku_bunga'] . ' ' . '% p.a' . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Sistem Bunga</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['sistem_bunga'] . "</td>
                                </tr>

                                


                                <tr>
                                    <td id='td_tabel_modal_ket'>Angsuran Perbulan</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['angsuran_perbulan'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Biaya Provisi</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['biaya_provisi_nominal'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Biaya Administrasi</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['biaya_administrasi_nominal'] . "</td>
                                </tr>


                                <tr>
                                    <td id='td_tabel_modal_ket'>Premi Asuransi</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['premi_asuransi'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Tabungan</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['tabungan'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Biaya Notaris</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['biaya_notaris'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Biaya Materai</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['biaya_materai'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Biaya APHT</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['biaya_apht'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Asuransi Kerugian</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['asuransi_kerugian'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Sistem Pembayaraan</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['sistem_pembayaran'] . "</td>
                                </tr>

                                <tr>
                                    <td id='td_tabel_modal_ket'>Pejabat TTD SPPK</td>
                                    
                                    <td id='td_tabel_modal'>" . $detail['pejabat_ttd_sppk'] . "</td>
                                </tr>


                            </table>
                            <!-- table detail -->
                        </div>
                    </div>
                </div>
            </div>

            <div class='tab-pane' id='daftar_jaminan'>



            <div class='row mt-3'>
                <div class='col-6'>
                    <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                   


                        <tr>
                            <td id='td_tabel_modal_ket'>Jaminan 1</td>
                            <td id='td_tabel_modal'>" . $detail['jaminan_1'] . "</td>
                        </tr>
                         <tr>
                            <td id='td_tabel_modal_ket'>Jaminan 2</td>
                            <td id='td_tabel_modal'>" . $detail['jaminan_2'] . "</td>
                        </tr>
                        <tr>
                            <td id='td_tabel_modal_ket'>Jaminan 3</td>
                            <td id='td_tabel_modal'>" . $detail['jaminan_3'] . "</td>
                        </tr>
                        <tr>
                            <td id='td_tabel_modal_ket'>Jaminan 4</td>
                            <td id='td_tabel_modal'>" . $detail['jaminan_4'] . "</td>
                        </tr>
                        <tr>
                            <td id='td_tabel_modal_ket'>Jaminan 5</td>
                            <td id='td_tabel_modal'>" . $detail['jaminan_5'] . "</td>
                        </tr>
                        <tr>
                            <td id='td_tabel_modal_ket'>Jaminan 6</td>
                            <td id='td_tabel_modal'>" . $detail['jaminan_6'] . "</td>
                        </tr>
                        <tr>
                            <td id='td_tabel_modal_ket'>Jaminan 7</td>
                            <td id='td_tabel_modal'>" . $detail['jaminan_7'] . "</td>
                        </tr>
                      
                   


                    </table>
                </div>
            <div class='col-6'>


        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

                        <tr>
                        <td id='td_tabel_modal_ket'>Jaminan 8</td>
                        <td id='td_tabel_modal'>" . $detail['jaminan_8'] . "</td>
                    </tr>
                    <tr>
                        <td id='td_tabel_modal_ket'>Jaminan 9</td>
                        <td id='td_tabel_modal'>" . $detail['jaminan_9'] . "</td>
                    </tr>
                    <tr>
                        <td id='td_tabel_modal_ket'>Jaminan 10</td>
                        <td id='td_tabel_modal'>" . $detail['jaminan_10'] . "</td>
                    </tr>
                    <tr>
                        <td id='td_tabel_modal_ket'>Jaminan 11</td>
                        <td id='td_tabel_modal'>" . $detail['jaminan_11'] . "</td>
                    </tr>
                    <tr>
                        <td id='td_tabel_modal_ket'>Jaminan 12</td>
                        <td id='td_tabel_modal'>" . $detail['jaminan_12'] . "</td>
                    </tr>
                    <tr>
                        <td id='td_tabel_modal_ket'>Jaminan 13</td>
                        <td id='td_tabel_modal'>" . $detail['jaminan_13'] . "</td>
                    </tr>
                    <tr>
                        <td id='td_tabel_modal_ket'>Jaminan 14</td>
                        <td id='td_tabel_modal'>" . $detail['jaminan_14'] . "</td>
                    </tr>

        </table>

    </div>
</div>
 
</div>



            <div class='tab-pane' id='analisa_kemampuan'>


            <div class='row mt-3'>
    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Pemohon Perbulan</td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['penghasilan_pemohon_perbulan'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $detail['penghasilan_pemohon_perbulan_ket'] . "</td>
            </tr>


            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pemohon 1 </td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['penghasilan_pemohon_tambahan_1'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $penghasilan_pemohon_ket[1] . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pemohon 2 </td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['penghasilan_pemohon_tambahan_2'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $penghasilan_pemohon_ket[2] . "</td>
            </tr>




            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pemohon 3 </td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['penghasilan_pemohon_tambahan_3'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $penghasilan_pemohon_ket[3] . "</td>
            </tr>



        </table>
    </div>




    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Pasangan Perbulan</td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['penghasilan_pasangan_perbulan'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $detail['penghasilan_pasangan_perbulan_ket'] . "</td>
            </tr>


            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pasangan 1 </td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['penghasilan_pasangan_tambahan_1'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $penghasilan_pasangan_ket[1] . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pasangan 2 </td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['penghasilan_pasangan_tambahan_2'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $penghasilan_pasangan_ket[2] . "</td>
            </tr>
            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Penghasilan Tambahan Pasangan 3 </td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['penghasilan_pasangan_tambahan_3'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $penghasilan_pasangan_ket[3] . "</td>
            </tr>

        </table>
    </div>
</div>


<div class='row mt-3'>

    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Biaya Rumah Tangga Sebulan </td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['biaya_hidup_sebulan'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $biaya_hidup_sebulan_ket . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Biaya Pendidikan Sebulan </td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['biaya_pendidikan'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $biaya_pendidikan_ket . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Biaya Listrik/Pam/Telepon Sebulan </td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['biaya_pam_listrik_telepon'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $biaya_pam_listrik_telepon_ket . "</td>
            </tr>
        </table>
    </div>


    <div class='col-6'>
        <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Biaya Transport Sebulan </td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['biaya_transport'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $biaya_transport_ket . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal_ket' rowspan='2'>Biaya Lain-lain Sebulan </td>
                <td id='td_tabel_modal' colspan='1'>" . number_format(($detail['biaya_lainnya'] * 1000), 0, ',', '.') . "</td>
            </tr>

            <tr>
                <td id='td_tabel_modal' colspan='1'>" . $biaya_lainnya_ket . "</td>
            </tr>
        </table>
    </div>
</div>

          

<div class='row mt-3' >
<div class='col-6'>

<table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

<tr>
    <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Hasamitra sebelumnya </td>
    <td id='td_tabel_modal'>" . $detail['angsuran_kredit_sebelumnya'] . "</td>

</tr>
<tr>
    <td id='td_tabel_modal'>" . $detail['angsuran_kredit_sebelumnya_ket'] . "</td>
</tr>

</table>

</div>

</div>



<div class='row mt-3'>
<div class='col-6'>

       

  


    <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>
        

        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 1 </td>
            <td id='td_tabel_modal'>" . $angsuran_pemohon[1] . "</td>
            
            
            
        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pemohon[1] . "</td>
        </tr>

        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 2 </td>
            <td id='td_tabel_modal'>" . $angsuran_pemohon[2] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pemohon[2] . "</td>
        </tr>



        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 3 </td>
            <td id='td_tabel_modal'>" . $angsuran_pemohon[3] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pemohon[3] . "</td>
        </tr>


        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 4 </td>
            <td id='td_tabel_modal'>" . $angsuran_pemohon[4] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pemohon[4] . "</td>
        </tr>

        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 5 </td>
            <td id='td_tabel_modal'>" . $angsuran_pemohon[5] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pemohon[5] . "</td>
        </tr>

        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 6 </td>
            <td id='td_tabel_modal'>" . $angsuran_pemohon[6] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pemohon[6] . "</td>
        </tr>

        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pemohon 7 </td>
            <td id='td_tabel_modal'>" . $angsuran_pemohon[7] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pemohon[7] . "</td>
        </tr>



    </table>

</div>

<div class='col-6'>

<table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>


        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 1 </td>
            <td id='td_tabel_modal'>" . $angsuran_pasangan[1] . "</td>
            

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pasangan[1] . "</td>
        </tr>

        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 2 </td>
            <td id='td_tabel_modal'>" . $angsuran_pasangan[2] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pasangan[2] . "</td>
        </tr>



        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 3 </td>
            <td id='td_tabel_modal'>" . $angsuran_pasangan[3] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pasangan[3] . "</td>
        </tr>


        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 4 </td>
            <td id='td_tabel_modal'>" . $angsuran_pasangan[4] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pasangan[4] . "</td>
        </tr>

        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 5 </td>
            <td id='td_tabel_modal'>" . $angsuran_pasangan[5] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pasangan[5] . "</td>
        </tr>

        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 6 </td>
            <td id='td_tabel_modal'>" . $angsuran_pasangan[6] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pasangan[6] . "</td>
        </tr>

        <tr>
            <td id='td_tabel_modal_ket' rowspan='2'>Angsuran Lain Pasangan 7 </td>
            <td id='td_tabel_modal'>" . $angsuran_pasangan[7] . "</td>

        </tr>
        <tr>
            <td id='td_tabel_modal'>" . $ket_angsuran_pasangan[7] . "</td>
        </tr>



    </table>



</div>

</div>



            <div class='row mt-3' >
            <div class='col-6'>

            <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket'>Kemampuan Membayar </td>
                <td id='td_tabel_modal'>" . $detail['kemampuan_membayar_angsuran'] . "</td>

            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Persentase Angsuran </td>
                <td id='td_tabel_modal'>" . $detail['persentase_angsuran'] . ' % ' . $detail['keterangan_persentase_angsuran'] . "</td>

            </tr>
           

            </table>

            </div>

            </div>



            
            </div>

            




            <div class='tab-pane' id='sandi_sandi'>


            <div class='row mt-3' >
            <div class='col-6'>

            <table class='table-hover' cellpadding=5 cellspacing=15 id='tabel_modal'>

            <tr>
                <td id='td_tabel_modal_ket'>Golongan Debitur </td>
                <td id='td_tabel_modal'>" . $detail['kode_golongan_debitur'] . ' - ' . $kode_golongan_debitur['golongan_debitur'] . "</td>

            </tr>
            <tr>
                <td id='td_tabel_modal_ket'>Jenis Penggunaan </td>
                <td id='td_tabel_modal'>" . $detail['kode_jenis_penggunaan'] . ' - ' . $kode_jenis_penggunaan['jenis_penggunaan'] . "</td>

            </tr>

            <tr>
            <td id='td_tabel_modal_ket'>Sektor Ekonomi </td>
            <td id='td_tabel_modal'>" . $detail['kode_sektor_ekonomi'] . ' - ' . $kode_sektor_ekonomi['sektor_ekonomi'] .   "</td>

            </tr>

            <tr>
            <td id='td_tabel_modal_ket'>Hubungan Debitur Dengan Bank </td>
            <td id='td_tabel_modal'>" . $detail['kode_hubungan_debitur_dengan_bank'] . ' - ' . $kode_hubungan_debitur_dengan_bank['hubungan_debitur_dengan_bank'] . "</td>

            </tr>
           

            </table>

            </div>

            </div>
               


           
            </div>

        </div>

    </div>

    <div class='tab-pane' id='rekomendasi_komite'>
        <h1 class='h3 mt-3 mb-3 text-center'><strong> Rekomendasi Komite </strong> </h1>

    </div>


    <div class='tab-pane' id='keputusan_komite'>
        <h1 class='h3 mt-3 mb-3 text-center'><strong> Keputusan Komite</strong> </h1>

    </div>
</div>
        
        
        
    
    
    
    ";
    }


    public function tolak_wawancara($id)
    {

        if ($this->model('m_wawancara')->tolak_wawancara($id) > 0) {
            // header('Location:' . BASEURL . '/wawancara/daftar_belum_wawancara/');
            // exit;
            echo "success";
        } else {

            echo "gagal tolak";
        }
    }




    public function batal_wawancara($id)
    {

        if ($this->model('m_wawancara')->batal_wawancara($id) > 0) {
            header('Location:' . BASEURL . '/wawancara/daftar_belum_wawancara/');
            exit;
        } else {

            echo "gagal batal";
        }
    }





    public function aktifkan_wawancara_tolak($id)
    {

        // cek data di tabel wawancara apakah ada atau tidak
        $_POST['no_permohonan_kredit'] = $id;
        $data = $this->model('m_wawancara')->cek_tbl_wawancara();


        $res_1 = $this->model('m_wawancara')->aktifkan_wawancara_tolak($id);
        $res_2 = $this->model('m_wawancara')->aktifkan_wawancara_tolak_tbl_wawancara($id);
        $res_3 = $this->model('m_wawancara')->hapus_record_tbl_komite($id);

        $hasil_res = $res_1 . $res_2 . $res_3;

        if ($hasil_res == 111) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function aktifkan_wawancara_batal($id)
    {


        // cek data di tabel wawancara apakah ada atau tidak
        $_POST['no_permohonan_kredit'] = $id;
        $data = $this->model('m_wawancara')->cek_tbl_wawancara();




        $res_1 = $this->model('m_wawancara')->aktifkan_wawancara_batal($id);
        $res_2 = $this->model('m_wawancara')->aktifkan_wawancara_tolak_tbl_wawancara($id);
        $res_3 = $this->model('m_wawancara')->hapus_record_tbl_komite($id);

        $hasil_res = $res_1 . $res_2 . $res_3;

        if ($hasil_res == 111) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function tes_simpan()
    {
        echo "ok : " . $_POST['tes'];
    }

    public function catatan_pending()
    {

        $data['status_catatan_pending'] =  $this->model('m_wawancara')->getCatatanPending();

        $this->view('wawancara/v_catatan_pending', $data);
    }



    // fungsi untuk halaman daftar sudah analisa tombol detail komite

    public function modal_proses_komite_hal_analis()
    {


        $data['detail'] = $this->model('m_cs')->modal_detail();

        // handel bagian tab

        $data['get_tbl_wawancara'] = $this->model('m_wawancara')->detail_wawancara($_POST);

        $data['get_tbl_wawancara']['plafond'] = number_format(($data['get_tbl_wawancara']['plafond']), 0, ',', '.');
        $data['get_tbl_wawancara']['angsuran_perbulan'] = number_format(($data['get_tbl_wawancara']['angsuran_perbulan']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_provisi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_provisi_nominal']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_administrasi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_administrasi_nominal']), 0, ',', '.');
        $data['get_tbl_wawancara']['premi_asuransi'] = number_format(($data['get_tbl_wawancara']['premi_asuransi']), 0, ',', '.');
        $data['get_tbl_wawancara']['tabungan'] = number_format(($data['get_tbl_wawancara']['tabungan']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_notaris'] = number_format(($data['get_tbl_wawancara']['biaya_notaris']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_materai'] = number_format(($data['get_tbl_wawancara']['biaya_materai']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_apht'] = number_format(($data['get_tbl_wawancara']['biaya_apht']), 0, ',', '.');
        $data['get_tbl_wawancara']['asuransi_kerugian'] = number_format(($data['get_tbl_wawancara']['asuransi_kerugian']), 0, ',', '.');



        // penghasilan pemohon
        for ($a = 1; $a <= 3; $a++) {

            $data['penghasilan_pemohon_ket'][$a] = $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_' . $a . '_ket'] != '' ? $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_' . $a . '_ket'] : '-';
            $data['penghasilan_pasangan_ket'][$a] = $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_' . $a . '_ket'] != '' ? $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_' . $a . '_ket'] : '-';
        }



        $data['biaya_hidup_sebulan_ket'] = $data['get_tbl_wawancara']['biaya_hidup_sebulan_ket'] != '' ? $data['get_tbl_wawancara']['biaya_hidup_sebulan_ket'] : '-';
        $data['biaya_pendidikan_ket']    = $data['get_tbl_wawancara']['biaya_pendidikan_ket'] != '' ? $data['get_tbl_wawancara']['biaya_pendidikan_ket'] : '-';
        $data['biaya_pam_listrik_telepon_ket'] = $data['get_tbl_wawancara']['biaya_pam_listrik_telepon_ket'] != '' ? $data['get_tbl_wawancara']['biaya_pam_listrik_telepon_ket'] : '-';
        $data['biaya_transport_ket'] = $data['get_tbl_wawancara']['biaya_transport_ket'] != '' ? $data['get_tbl_wawancara']['biaya_transport_ket'] : '-';

        $data['biaya_lainnya_ket'] = $data['get_tbl_wawancara']['biaya_lainnya_ket'] != '' ? $data['get_tbl_wawancara']['biaya_lainnya_ket'] : '-';






        // detail tbl_permohon_kredit
        $data['no_permohonan_kredit'] = $_POST['no_permohonan_kredit'];
        $data['get_tbl_permohon_kredit'] = $this->model('m_cs')->get_tbl_permohon_kredit($data['no_permohonan_kredit']);

        // slik

        $data['daftar_slik_pemohon'] = $this->model('m_slik')->daftar_slik_pemohon($data['no_permohonan_kredit']);
        $data['daftar_slik_pasangan'] = $this->model('m_slik')->daftar_slik_pasangan($data['no_permohonan_kredit']);
        $data['data_slik_single'] = $this->model('m_slik')->get_data_slik_single($data['no_permohonan_kredit']);





        $data['kode_golongan_debitur'] =  $this->model('m_ref_golongan_debitur')->get_data_where_kode($data['get_tbl_wawancara']['kode_golongan_debitur']);
        $data['kode_jenis_penggunaan'] =   $this->model('m_ref_jenis_penggunaan')->get_data_where_kode($data['get_tbl_wawancara']['kode_jenis_penggunaan']);


        $data['kode_sektor_ekonomi'] = $this->model('m_ref_sektor_ekonomi')->get_data_where_kode($data['get_tbl_wawancara']['kode_sektor_ekonomi']);
        $data['kode_hubungan_debitur_dengan_bank'] = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_data_where_kode($data['get_tbl_wawancara']['kode_hubungan_debitur_dengan_bank']);
        $data['rekomendasi_komite'] = $this->model('m_komite')->rekomendasi_komite($data['no_permohonan_kredit']);

        $data['keputusan_komite'] = $this->model('m_komite')->keputusan_komite($data['no_permohonan_kredit']);



        // handel bagian tab







        // ambil data dari table referensi tabel referensi
        $data['nama_cabang'] = $this->model('m_ref_cabang')->get_data_where_kode($data['detail']['kode_cabang']);




        // tab keputusan komite
        // cek tgl_tolak jika tidak null maka telah ditolak

        $data['cek_tgl_tolak'] = $this->model('m_wawancara')->cek_tgl_tolak();

        $this->view('wawancara/v_isi_modal_proses_komite_2', $data);
    }


    public function modal_pending_pencairan()
    {


        $data['detail'] = $this->model('m_cs')->modal_detail();

        // handel bagian tab

        $data['get_tbl_wawancara'] = $this->model('m_wawancara')->detail_wawancara($_POST);

        $data['get_tbl_wawancara']['plafond'] = number_format(($data['get_tbl_wawancara']['plafond']), 0, ',', '.');
        $data['get_tbl_wawancara']['angsuran_perbulan'] = number_format(($data['get_tbl_wawancara']['angsuran_perbulan']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_provisi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_provisi_nominal']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_administrasi_nominal'] = number_format(($data['get_tbl_wawancara']['biaya_administrasi_nominal']), 0, ',', '.');
        $data['get_tbl_wawancara']['premi_asuransi'] = number_format(($data['get_tbl_wawancara']['premi_asuransi']), 0, ',', '.');
        $data['get_tbl_wawancara']['tabungan'] = number_format(($data['get_tbl_wawancara']['tabungan']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_notaris'] = number_format(($data['get_tbl_wawancara']['biaya_notaris']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_materai'] = number_format(($data['get_tbl_wawancara']['biaya_materai']), 0, ',', '.');
        $data['get_tbl_wawancara']['biaya_apht'] = number_format(($data['get_tbl_wawancara']['biaya_apht']), 0, ',', '.');
        $data['get_tbl_wawancara']['asuransi_kerugian'] = number_format(($data['get_tbl_wawancara']['asuransi_kerugian']), 0, ',', '.');



        // penghasilan pemohon
        for ($a = 1; $a <= 3; $a++) {

            $data['penghasilan_pemohon_ket'][$a] = $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_' . $a . '_ket'] != '' ? $data['get_tbl_wawancara']['penghasilan_pemohon_tambahan_' . $a . '_ket'] : '-';
            $data['penghasilan_pasangan_ket'][$a] = $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_' . $a . '_ket'] != '' ? $data['get_tbl_wawancara']['penghasilan_pasangan_tambahan_' . $a . '_ket'] : '-';
        }



        $data['biaya_hidup_sebulan_ket'] = $data['get_tbl_wawancara']['biaya_hidup_sebulan_ket'] != '' ? $data['get_tbl_wawancara']['biaya_hidup_sebulan_ket'] : '-';
        $data['biaya_pendidikan_ket']    = $data['get_tbl_wawancara']['biaya_pendidikan_ket'] != '' ? $data['get_tbl_wawancara']['biaya_pendidikan_ket'] : '-';
        $data['biaya_pam_listrik_telepon_ket'] = $data['get_tbl_wawancara']['biaya_pam_listrik_telepon_ket'] != '' ? $data['get_tbl_wawancara']['biaya_pam_listrik_telepon_ket'] : '-';
        $data['biaya_transport_ket'] = $data['get_tbl_wawancara']['biaya_transport_ket'] != '' ? $data['get_tbl_wawancara']['biaya_transport_ket'] : '-';

        $data['biaya_lainnya_ket'] = $data['get_tbl_wawancara']['biaya_lainnya_ket'] != '' ? $data['get_tbl_wawancara']['biaya_lainnya_ket'] : '-';






        // detail tbl_permohon_kredit
        $data['no_permohonan_kredit'] = $_POST['no_permohonan_kredit'];
        $data['get_tbl_permohon_kredit'] = $this->model('m_cs')->get_tbl_permohon_kredit($data['no_permohonan_kredit']);

        // slik

        $data['daftar_slik_pemohon'] = $this->model('m_slik')->daftar_slik_pemohon($data['no_permohonan_kredit']);
        $data['daftar_slik_pasangan'] = $this->model('m_slik')->daftar_slik_pasangan($data['no_permohonan_kredit']);
        $data['data_slik_single'] = $this->model('m_slik')->get_data_slik_single($data['no_permohonan_kredit']);





        $data['kode_golongan_debitur'] =  $this->model('m_ref_golongan_debitur')->get_data_where_kode($data['get_tbl_wawancara']['kode_golongan_debitur']);
        $data['kode_jenis_penggunaan'] =   $this->model('m_ref_jenis_penggunaan')->get_data_where_kode($data['get_tbl_wawancara']['kode_jenis_penggunaan']);


        $data['kode_sektor_ekonomi'] = $this->model('m_ref_sektor_ekonomi')->get_data_where_kode($data['get_tbl_wawancara']['kode_sektor_ekonomi']);
        $data['kode_hubungan_debitur_dengan_bank'] = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_data_where_kode($data['get_tbl_wawancara']['kode_hubungan_debitur_dengan_bank']);
        $data['rekomendasi_komite'] = $this->model('m_komite')->rekomendasi_komite($data['no_permohonan_kredit']);

        $data['keputusan_komite'] = $this->model('m_komite')->keputusan_komite($data['no_permohonan_kredit']);



        // handel bagian tab







        // ambil data dari table referensi tabel referensi
        $data['nama_cabang'] = $this->model('m_ref_cabang')->get_data_where_kode($data['detail']['kode_cabang']);




        // tab keputusan komite
        // cek tgl_tolak jika tidak null maka telah ditolak

        $data['cek_tgl_tolak'] = $this->model('m_wawancara')->cek_tgl_tolak();

        $data['tbl_wawancara_berkas'] = $this->model('m_file_wawancara')->get_tbl_wawancara_berkas_id($data['no_permohonan_kredit']);

        $this->view('wawancara/v_isi_modal_pending_pencairan', $data);
    }


    public function btn_ajukan_kembali()
    {
        // echo "Halo Data : " . $_POST['no_permohonan_kredit'];
        // hapus data di tbl_komite
        $data['wawancara'] = $this->model('m_wawancara')->detail_wawancara();



        $data_cabang =   $this->model('m_cabang')->get_data($_COOKIE['kode_cabang']);


        // echo $data['wawancara']['plafond'];

        $plafond = $data['wawancara']['plafond'];
        $limit = $data_cabang['limit'];
        // $aturan_jumlah_komite = $data_cabang['aturan_jumlah_komite'];

        if ($plafond > $limit) {
            $_POST['tipe_komite'] = "PUSAT";
        } else if ($plafond <= $limit) {
            $_POST['tipe_komite'] = "CABANG";
        }

        // echo "sukses";

        $hapus_1 = $this->model('m_wawancara')->hapus_tbl_komite_where_id();
        // hapus data di tbl_keputusan_Kredit
        $hapus_2 = $this->model('m_wawancara')->hapus_tbl_keputusan_kredit_where_id();
        // update kosongkan nama komite di tbl_wawancara
        $update_1 = $this->model('m_wawancara')->update_wawancara();
        // update kosongkan tanggal_komite tanggal_tolak  tbl_permohonan_kredit
        $update_2 = $this->model('m_wawancara')->update_tbl_permohonan();

        if ($hapus_1 >= 1 && $hapus_2 >= 1 && $update_1 >= 1 && $update_2 >= 1) {
            $cs = new cs();
            $_POST['nama_pemohon'] = $cs->get_nama_pemohon_where_id()['nama_pemohon'];
            $this->model('m_log')->mengusulkan_analisa_kembali();
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function btn_lanjutkan()
    {




        $update = $this->model('m_wawancara')->btn_lanjutkan();


        $update_syarat_lainnya = $this->model('m_wawancara')->btn_lanjutkan_syarat_lainnya();

        if ($update >= 0) {
            $cs = new cs();
            $_POST['nama_pemohon'] = $cs->get_nama_pemohon_where_id()['nama_pemohon'];
            $this->model('m_log')->melanjutkan_pencairan_kredit();
            echo "sukses";
        } else {
            echo "gagal";
        }
    }




    public function cari_data_credit_all_2()
    {
        if (isset($_POST['btn_hari_ini'])) {
            $_SESSION['btn_hari_ini'] = 'btn_hari_ini';
            header('Location:' . BASEURL . '/wawancara/inquiry');
            exit;
        } else if (isset($_POST['btn_bulan_ini'])) {
            $_SESSION['btn_bulan_ini'] = 'btn_bulan_ini';
            header('Location:' . BASEURL . '/wawancara/inquiry');
            exit;
        } else if (isset($_POST['btn_tahun_ini'])) {

            $_SESSION['btn_tahun_ini'] = 'btn_tahun_ini';
            header('Location:' . BASEURL . '/wawancara/inquiry');
            exit;
        } else if (isset($_POST['btn_semuanya'])) {
            $_SESSION['btn_semuanya'] = 'btn_semuanya';
            header('Location:' . BASEURL . '/wawancara/inquiry');
            exit;
        } else if (isset($_POST['btn_pending'])) {
            $_SESSION['btn_pending'] = 'btn_pending';
            header('Location:' . BASEURL . '/wawancara/inquiry');
            exit;
        } else if (isset($_POST['btn_cari'])) {
            $_SESSION['data_cari'] = $_POST['data_cari'];
            $_SESSION['btn_cari'] = $_POST['btn_cari'];
            header('Location:' . BASEURL . '/wawancara/inquiry');
            exit;
        }
    }



    public function inquiry()
    {

        if (isset($_SESSION['btn_hari_ini'])) {
            $data['title'] = "Menu inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_hari_ini();
            $this->view('wawancara/v_inquiry', $data);
            unset($_SESSION['btn_hari_ini']);
        } else if (isset($_SESSION['btn_bulan_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_bulan_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_bulan_ini();
            $this->view('wawancara/v_inquiry', $data);
            unset($_SESSION['btn_bulan_ini']);
        } else if (isset($_SESSION['btn_tahun_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_tahun_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_tahun_ini();
            $this->view('wawancara/v_inquiry', $data);
            unset($_SESSION['btn_tahun_ini']);
        } else if (isset($_SESSION['btn_semuanya'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->lihat_data_kredit();
            $data['jumlah_record'] = $this->model('m_cs')->count_lihat_data_kredit();
            $this->view('wawancara/v_inquiry', $data);
            unset($_SESSION['btn_semuanya']);
        } else if (isset($_SESSION['btn_pending'])) {

            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();

            $this->view('wawancara/v_inquiry', $data);
            unset($_SESSION['btn_pending']);
        } else if (isset($_SESSION['btn_cari'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";

            if ($_SESSION['data_cari'] != '') {
                $data['data_kredit'] = $this->model('m_cs')->btn_cari();
                $data['jumlah_record'] = $this->model('m_cs')->count_btn_cari();
            }

            $this->view('wawancara/v_inquiry', $data);
            unset($_SESSION['btn_cari']);
        } else {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $this->view('wawancara/v_inquiry', $data);
        }
    }

    public function btn_batal_ajukan()
    {

        $cek_tipe_komite = $this->model('m_wawancara')->cek_tipe_komite();
        $tipe_komite = $cek_tipe_komite['tipe_komite'];
        // update tbl_permohon_kredit lokasi berkas
        $_POST['lokasi_berkas'] = "ANALISA";
        $this->model("m_cs")->update_lokasi_berkas();

        if ($tipe_komite  == 'DIAJUKAN PUSAT') {
            $_POST['tipe_komite'] = "CABANG";
        } else {
            $_POST['tipe_komite'] = $tipe_komite;
        }

        $data = $this->model('m_wawancara')->update_status_wawancara();
        if ($data  > 0) {
            echo 'berhasil';
        } else {
            echo "gagal";
        }
    }




    public function upload_file_wawancara()
    {

        // Batas ukuran file dalam bytes (1000MB)
        $maxFileSize = 1024 * 1024 * 1024; // 1000MB
        // Handle file upload
        if (isset($_FILES["file"]) && isset($_POST["jenis_file"])) {

            $fileName = $_FILES["file"]["name"];

            $fileSize = $_FILES["file"]["size"]; // Ukuran file dalam bytes
            $fileTmpName = $_FILES["file"]["tmp_name"];

            if ($fileSize <= $maxFileSize) {
                // Simpan file ke server
                $uploadDirectory = "upload/file_upload_wawancara/"; // Gantilah dengan direktori yang sesuai di server Anda
                $targetFile = $uploadDirectory . $fileName;

                if (move_uploaded_file($fileTmpName, $targetFile)) {
                    // Berhasil menyimpan file ke server

                    $response1 = $this->model('m_file_wawancara')->simpan_file_wawancara();
                    $response2 = $this->model('m_file_wawancara')->get_tbl_wawancara_berkas_id_single($_POST['no_permohonan_kredit']);
                    // $response = "Berhasil! File $fileName telah diunggah ke server.| dengan jenis file  $fileType";
                } else {
                    // Gagal menyimpan file ke server
                    $response1 = "Gagal mengunggah file ke server.";
                }
            } else {
                // File terlalu besar
                $response1 = "Ukuran file terlalu besar. Maksimum 1000MB diizinkan.";
            }
        } else {
            $response1 = "Permintaan tidak valid.";
        }

        // Membuat array yang berisi data dari $response1 dan $response2
        $data = [
            'response1' => $response1,
            'response2' => $response2,
        ];



        echo json_encode($data); // Mengirimkan pesan sebagai respons JSON
    }

    public function hapus_file()
    {

        $hapus_file = 0;
        $hapus_id_db = 0;

        // Validasi permintaan penghapusan, misalnya, apakah ID atau informasi lain yang diperlukan diterima dari permintaan POST
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"]) && isset($_POST["nama_file"])) {

            $fileId = $_POST["id"];
            $nama_file = $_POST["nama_file"];


            // Hapus file dari server
            $fileToDelete = "upload/file_upload_wawancara/" . $nama_file;
            if (file_exists($fileToDelete)) {
                unlink($fileToDelete); // Hapus file dari server
                $hapus_file = 1;
            }

            // hapus file dari database
            $query[1] = $this->model('m_file_wawancara')->hapus_file_id($fileId);
            if ($query[1] > 0) {
                $hapus_id_db = 1;
            }

            if ($hapus_file == 1 && $hapus_id_db == 1) {
                $response = ["message" => "File berhasil dihapus."];
            } else {
                $response = ["message" => "Error Hapus file server : $hapus_file atau hapus data database : $hapus_id_db"];
            }
            echo json_encode($response);
        } else {
            echo json_encode(["message" => "Permintaan tidak valid."]);
        }
    }

    // fungsi untuk update field syarat lainnya ketika ada komite yang approve dan reject di tombol approve atau reject
    public function update_syarat_lainnya()
    {

        $query = $this->model('m_wawancara')->update_syarat_lainnya();
        if ($query > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    // public function cek_isi_syarat_lainnya(){

    //     $query = $this->model('m_wawancara')->cek_isi_syarat_lainnya();

    //    if($query == true) {
    //     return $query['syarat_lainnya'];
    //    }else{
    //     return null;
    //    }


    // }
}
