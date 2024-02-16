<?php


date_default_timezone_set('Asia/Makassar');
if (!isset($_SESSION['level'])) {
    header('Location:' . BASEURL . '/login');
    exit;
}


include 'ref_instansi.php';
class pencairan extends Controller
{

    public function index()
    {
        echo "ok";
    }

    public function beranda()
    {
        $data['update'] = $this->model("m_tbl_informasi")->getInformasi();
        $data['quote'] = $this->model("m_tbl_quote")->getQuote();

        
        $this->view('pencairan/v_beranda',$data);
    }


    public function daftar_belum_pencairan()
    {

        $data['daftar_belum_pencairan'] = $this->model('m_pencairan')->daftar_belum_pencairan();
        $this->view('pencairan/v_daftar_belum_pencairan', $data);
    }



    public function get_tes()
    {

        $data['data'] = $this->model('m_pencairan')->get_tes();
        $this->view('pencairan/v_get_tes', $data);
    }



    public function proses_pencairan($id)
    {

        $data['no_permohonan_kredit'] = $id;
        $_POST['no_permohonan_kredit'] = $id;
        $data['data'] = $this->model('m_pencairan')->get_data_komite_id($_POST);
        $data['data_wawancara'] = $this->model('m_pencairan')->get_data_wawancara_id($_POST);
        $data['jenis_pekerjaan'] = $this->model('m_jenis_pekerjaan')->get_all_jenis_pekerjaan();
        $data['data_kredit'] =  $this->model('m_cs')->lihat_data_kredit_id($_POST);
        $data['biaya_pro_adm'] = $this->model('m_ref_provisi_administrasi')->get_all();
        $data['ref_sistem_bunga'] = $this->model('m_ref_sistem_bunga')->get_all();

        $data['ref_pejabat'] = $this->model('m_ref_pejabat')->get_all();
        $data['ref_jenis_penggunaan'] = $this->model('m_ref_jenis_penggunaan')->get_all();
        $data['ref_sektor_ekonomi'] = $this->model('m_ref_sektor_ekonomi')->get_all();
        $data['tujuan_penggunaan_kredit'] = $this->model('m_ref_tujuan_penggunaan_kredit')->get_data_where_kode($data['data_wawancara']['tujuan_penggunaan_kredit']);

        $data['data_penambahan'] = $data['data']['plafond'] - $data['data_wawancara']['os_sebelumnya'];
        $data['data_tanggal_angsuran'] = $this->model('m_pencairan')->get_tanggal_angsuran();

        $data['ref_jenis_no_pk'] = $this->model('m_pencairan')->get_jenis_no_pk();

        $data['ref_jenis_kredit'] = $this->model('m_ref_jenis_kredit')->get_ref_jenis_kredit();

        $data['denda'] = $this->model('m_pencairan')->get_denda();




        $ref_instansi = new ref_instansi();
        $data['ref_instansi'] = $ref_instansi->get_all();


        $this->view('pencairan/v_proses_pencairan', $data);
    }


    public function simpan_proses_pencairan()
    {



        $_POST['kode_cabang'] = $_COOKIE['kode_cabang'];
        $data['sk'] = $this->model('m_pencairan')->get_id_sk();
        $_POST['id_sk'] = $data['sk']['id_sk'];

        // untuk tanggal mask harus di balik dlu unutuk dapat simpan data ke database
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['os_sebelumnya'] = str_replace(".", "", $_POST['os_sebelumnya']);
        $_POST['penambahan'] = str_replace(".", "", $_POST['penambahan']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['biaya_provisi'] = str_replace(".", "", $_POST['biaya_provisi']);
        $_POST['biaya_administrasi'] = str_replace(".", "", $_POST['biaya_administrasi']);
        $_POST['asuransi_jiwa'] = str_replace(".", "", $_POST['asuransi_jiwa']);
        $_POST['asuransi_kredit'] = str_replace(".", "", $_POST['asuransi_kredit']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_materai'] = str_replace(".", "", $_POST['biaya_materai']);
        $_POST['bunga_berjalan'] = str_replace(".", "", $_POST['bunga_berjalan']);
        $_POST['tabungan_simitra'] = str_replace(".", "", $_POST['tabungan_simitra']);
        $_POST['angsuran_pertama'] = str_replace(".", "", $_POST['angsuran_pertama']);




        $a  = $_POST['tgl_lahir_debitur'];
        $b = explode("/", $a);
        $_POST['tgl_lahir_debitur'] = $b[2] . '-' . $b[1]  . '-' . $b[0];

        if ($_POST['tgl_lahir_pasangan'] != '') {
            $a  = $_POST['tgl_lahir_pasangan'];
            $b = explode("/", $a);
            $_POST['tgl_lahir_pasangan'] = $b[2] . '-' . $b[1]  . '-' . $b[0];
        } else {
            $_POST['tgl_lahir_pasangan'] = null;
        }



        if ($_POST['tgl_surat_kuasa_pasangan'] != '') {
            $a  = $_POST['tgl_surat_kuasa_pasangan'];
            $b = explode("/", $a);
            $_POST['tgl_surat_kuasa_pasangan'] = $b[2] . '-' . $b[1]  . '-' . $b[0];
        } else {
            $_POST['tgl_surat_kuasa_pasangan'] = null;
        }


        // $a  = $_POST['tgl_surat_kuasa_pasangan'];
        // $b = explode("/", $a);
        // $_POST['tgl_surat_kuasa_pasangan'] = $b[2] . '-' . $b[1]  . '-' . $b[0];





        $a  = $_POST['tgl_mulai_jw'];
        $b = explode("/", $a);
        $_POST['tgl_mulai_jw'] = $b[2] . '-' . $b[1]  . '-' . $b[0];

        $a  = $_POST['tgl_akhir_jw'];
        $b = explode("/", $a);
        $_POST['tgl_akhir_jw'] = $b[2] . '-' . $b[1]  . '-' . $b[0];


        $a  = $_POST['tgl_mulai_angsuran'];
        $b = explode("/", $a);
        $_POST['tgl_mulai_angsuran'] = $b[2] . '-' . $b[1]  . '-' . $b[0];


        $a  = $_POST['tgl_akhir_angsuran'];
        $b = explode("/", $a);
        $_POST['tgl_akhir_angsuran'] = $b[2] . '-' . $b[1]  . '-' . $b[0];

        // print_r($_POST);

        $simpan = $this->model('m_pencairan')->simpan_proses_pencairan();
        if ($simpan > 0) {
            echo "berhasil";
            // update tanggal pencairan

            $this->model('m_pencairan')->update_tbl_permohonan_kredit();


            $_POST['nama_pemohon'] = $_POST['nama_debitur'];
            $this->model('m_log')->input_pencairan();
        } else {
            echo "gagal";
        }
    }


    public function update_proses_pencairan()
    {


        $_POST['kode_cabang'] = $_COOKIE['kode_cabang'];




        $data['sk'] = $this->model('m_pencairan')->get_id_sk();


        $_POST['id_sk'] = $data['sk']['id_sk'];

        // untuk tanggal mask harus di balik dlu unutuk dapat simpan data ke database

        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['os_sebelumnya'] = str_replace(".", "", $_POST['os_sebelumnya']);
        $_POST['penambahan'] = str_replace(".", "", $_POST['penambahan']);
        $_POST['angsuran_perbulan'] = str_replace(".", "", $_POST['angsuran_perbulan']);
        $_POST['biaya_provisi'] = str_replace(".", "", $_POST['biaya_provisi']);
        $_POST['biaya_administrasi'] = str_replace(".", "", $_POST['biaya_administrasi']);
        $_POST['asuransi_jiwa'] = str_replace(".", "", $_POST['asuransi_jiwa']);
        $_POST['asuransi_kredit'] = str_replace(".", "", $_POST['asuransi_kredit']);
        $_POST['asuransi_kerugian'] = str_replace(".", "", $_POST['asuransi_kerugian']);
        $_POST['biaya_notaris'] = str_replace(".", "", $_POST['biaya_notaris']);
        $_POST['biaya_materai'] = str_replace(".", "", $_POST['biaya_materai']);
        $_POST['bunga_berjalan'] = str_replace(".", "", $_POST['bunga_berjalan']);
        $_POST['tabungan_simitra'] = str_replace(".", "", $_POST['tabungan_simitra']);
        $_POST['angsuran_pertama'] = str_replace(".", "", $_POST['angsuran_pertama']);

        $_POST['user_edit'] = $_COOKIE['username'];
        $_POST['tgl_edit'] = date("Y-m-d H:i:s");






        $a  = $_POST['tgl_lahir_debitur'];
        $b = explode("/", $a);
        $_POST['tgl_lahir_debitur'] = $b[2] . '-' . $b[1]  . '-' . $b[0];




        if ($_POST['tgl_surat_kuasa_pasangan'] != '') {
            $a  = $_POST['tgl_surat_kuasa_pasangan'];
            $b = explode("/", $a);
            $_POST['tgl_surat_kuasa_pasangan'] = $b[2] . '-' . $b[1]  . '-' . $b[0];
        } else {
            $_POST['tgl_surat_kuasa_pasangan'] = null;
        }



        if ($_POST['tgl_lahir_pasangan'] != '') {
            $a  = $_POST['tgl_lahir_pasangan'];
            $b = explode("/", $a);
            $_POST['tgl_lahir_pasangan'] = $b[2] . '-' . $b[1]  . '-' . $b[0];
        } else {
            $_POST['tgl_lahir_pasangan'] = null;
        }








        $a  = $_POST['tgl_mulai_jw'];
        $b = explode("/", $a);
        $_POST['tgl_mulai_jw'] = $b[2] . '-' . $b[1]  . '-' . $b[0];

        $a  = $_POST['tgl_akhir_jw'];
        $b = explode("/", $a);
        $_POST['tgl_akhir_jw'] = $b[2] . '-' . $b[1]  . '-' . $b[0];


        $a  = $_POST['tgl_mulai_angsuran'];
        $b = explode("/", $a);
        $_POST['tgl_mulai_angsuran'] = $b[2] . '-' . $b[1]  . '-' . $b[0];


        $a  = $_POST['tgl_akhir_angsuran'];
        $b = explode("/", $a);
        $_POST['tgl_akhir_angsuran'] = $b[2] . '-' . $b[1]  . '-' . $b[0];


        $update = $this->model('m_pencairan')->update_proses_pencairan();
        if ($update > 0) {
            echo "berhasil";
            // update tanggal pencairan
            $this->model('m_pencairan')->update_tbl_permohonan_kredit();
            $_POST['nama_pemohon'] = $_POST['nama_debitur'];
            $this->model('m_log')->update_pencairan();
        } else {
            echo "belum_update";
        }
    }

    public function daftar_sudah_pencairan()
    {

        // $data['data'] = $this->model('m_pencairan')->get_daftar_sudah_pencairan();

        $this->view('pencairan/v_daftar_sudah_pencairan');
    }


    public function get_data_daftar_sudah_pencairan()
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


        $this->db->query('SELECT * FROM tbl_pencairan_kredit A join tbl_permohon_kredit B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE B.kode_cabang =:kode_cabang');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);

        $total_data = count($this->db->resultSet());
        $total_filtered = $total_data;




        $limit = $_POST['length'];
        $start = $_POST['start'];
        $order = $columns[$_POST['order']['0']['column']];
        $dir = $_POST['order']['0']['dir'];


        if (empty($_POST['search']['value'])) {

            $this->db->query("SELECT * FROM tbl_pencairan_kredit A join tbl_permohon_kredit B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE B.kode_cabang =:kode_cabang ORDER BY B.tanggal_pencairan DESC,  $order $dir LIMIT $limit OFFSET $start");
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            $query =  $this->db->resultSet();
        } else {
            $search = $_POST['search']['value'];
            $this->db->query("SELECT * FROM tbl_pencairan_kredit A join tbl_permohon_kredit B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE B.kode_cabang =:kode_cabang  AND (A.no_permohonan_kredit LIKE '%$search%' OR A.nama_debitur LIKE '%$search%' OR A.instansi_debitur LIKE '%$search%') ORDER BY B.tanggal_pencairan DESC,  $order $dir LIMIT $limit OFFSET $start");
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            $query =  $this->db->resultSet();


            $this->db->query("SELECT * FROM tbl_pencairan_kredit A join tbl_permohon_kredit B ON A.no_permohonan_kredit = B.no_permohonan_kredit WHERE B.kode_cabang =:kode_cabang  AND (A.no_permohonan_kredit LIKE '%$search%' OR A.nama_debitur LIKE '%$search%' OR A.instansi_debitur LIKE '%$search%')");
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            $query2 =  $this->db->resultSet();


            $total_filtered = count($query2);
        }

        $data = array();

        if (!empty($query)) {
            $no = $start + 1;

            foreach ($query as $i) {
                $res_data['id'] =  $no;
                $res_data['no_permohonan_kredit'] = $i['no_permohonan_kredit'];
                $res_data['nama_debitur'] = $i['nama_debitur'];
                $res_data['instansi'] = $i['instansi_debitur'];
                $res_data['no_pk'] = $i['no_pk'];
                $res_data['plafond'] = number_format($i['plafond'], 0, ',', '.');
                $res_data['jw'] = $i['jangka_waktu'];
                $res_data['tgl_masuk'] = isset($i['tanggal_permohonan']) ?  date('d-m-Y', strtotime($i['tanggal_permohonan'])) : '';
                $res_data['tgl_pencairan'] = isset($i['tgl_mulai_jw']) ?  date('d-m-Y', strtotime($i['tgl_mulai_jw'])) : "";


                $batas_btn = "<span class='mr-0'> </span>";
                $btn_cetak_berkas_kredit = "<button class='btn btn-sm btn-success' data-toggle='modal' data-target='#modal_cetak' data-no_permohonan_kredit='" . $i['no_permohonan_kredit'] . "' >Cetak Berkas Kredit</button>";
                $btn_edit = "<a href=" . BASEURL . "/pencairan/edit_pencairan/" . $i['no_permohonan_kredit'] . " class='btn btn-primary btn-sm'>Edit </a>";
                $btn_hapus = "<button class='btn btn-sm btn-danger btn_hapus' data-id='" . $i['no_permohonan_kredit'] . "'  data-nama_pemohon='" . $i['nama_pemohon'] . "'  data-nama_instansi='" . $i['nama_instansi'] . "'>Hapus</button>";

                $btn_detail = "<button class='btn btn-sm detail' data-toggle='modal' data-target='#detail' style='background-color:" . w_orange . "; color: white' data-id='" . $i['no_permohonan_kredit'] . "'>Detail</button>";
                $res_data['btn_aksi'] = $btn_cetak_berkas_kredit . $batas_btn . $btn_edit . $batas_btn . $btn_hapus . $batas_btn . $btn_detail;


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

    public function edit_pencairan($id)
    {
        $data['no_permohonan_kredit'] = $id;
        $_POST['no_permohonan_kredit'] = $id;
        $data['data'] = $this->model('m_pencairan')->get_data_pencairan();
        $data['data_wawancara'] = $this->model('m_pencairan')->get_data_wawancara_id();
        $data['jenis_pekerjaan'] = $this->model('m_jenis_pekerjaan')->get_all_jenis_pekerjaan();
        $data['data_kredit'] =  $this->model('m_cs')->lihat_data_kredit_id();
        $data['biaya_pro_adm'] = $this->model('m_ref_provisi_administrasi')->get_all();
        $data['ref_sistem_bunga'] = $this->model('m_ref_sistem_bunga')->get_all();

        $data['ref_pejabat'] = $this->model('m_ref_pejabat')->get_all();
        $data['ref_jenis_penggunaan'] = $this->model('m_ref_jenis_penggunaan')->get_all();
        $data['ref_sektor_ekonomi'] = $this->model('m_ref_sektor_ekonomi')->get_all();
        // $data['tujuan_penggunaan_kredit'] = $this->model('m_ref_tujuan_penggunaan_kredit')->get_data_where_kode($data['data_wawancara']['tujuan_penggunaan_kredit']);

        // $data['data_penambahan'] = $data['data']['plafond'] - $data['data_wawancara']['os_sebelumnya'];
        $data['data_tanggal_angsuran'] = $this->model('m_pencairan')->get_tanggal_angsuran();

        $data['ref_jenis_no_pk'] = $this->model('m_pencairan')->get_jenis_no_pk();
        $data['ref_jenis_kredit'] = $this->model('m_ref_jenis_kredit')->get_ref_jenis_kredit();





        $ref_instansi = new ref_instansi();
        $data['ref_instansi'] = $ref_instansi->get_all();


        $this->view('pencairan/v_edit_pencairan', $data);
    }

    public function update_pencairan()
    {

        $update = $this->model("m_pencairan")->update_pencairan($_POST);

        if ($update > 0) {
            echo $_POST['no_permohonan_kredit'];
        } else {
            echo "gagal_update";
        }
    }

    public function hapus($id)
    {

        $data = $this->model('m_pencairan')->hapus($id);
        if ($data > 0) {
            $data = $this->model('m_pencairan')->update_hapus_pencairan($id);
            if ($data > 0) {
                header('Location:' . BASEURL . '/pencairan/daftar_belum_pencairan');
                exit;
            } else {
                echo "gagal update hapus";
            }
        } else {
            echo "gagal hapus";
        }
    }

    public function cek_no_inkaso($data = '')
    {

        $pdo = $this->model('m_pencairan')->cek_no_inkaso($data);

        if (isset($pdo['no_pk_terakhir'])) {

            echo ($pdo['no_pk_terakhir'] + 1) . '/' . $data . '/' . date('m') . date('y');
        } else {
            echo  '1' . '/' . $data . '/' . date('m') . date('y');
        }
    }


    public function cek_urutan_inkaso()
    {

        $data['cek_urutan_inkaso'] = $this->model('m_pencairan')->cek_urutan_inkaso();

        if (isset($data['cek_urutan_inkaso']['no_pk_terakhir'])) {
            echo $data['cek_urutan_inkaso']['no_pk_terakhir'];
        } else {
            echo '0';
        }
    }

    function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }




    public function cari_data_credit_all_2()
    {
        if (isset($_POST['btn_hari_ini'])) {
            $_SESSION['btn_hari_ini'] = 'btn_hari_ini';
            header('Location:' . BASEURL . '/pencairan/inquiry');
            exit;
        } else if (isset($_POST['btn_bulan_ini'])) {
            $_SESSION['btn_bulan_ini'] = 'btn_bulan_ini';
            header('Location:' . BASEURL . '/pencairan/inquiry');
            exit;
        } else if (isset($_POST['btn_tahun_ini'])) {

            $_SESSION['btn_tahun_ini'] = 'btn_tahun_ini';
            header('Location:' . BASEURL . '/pencairan/inquiry');
            exit;
        } else if (isset($_POST['btn_semuanya'])) {
            $_SESSION['btn_semuanya'] = 'btn_semuanya';
            header('Location:' . BASEURL . '/pencairan/inquiry');
            exit;
        } else if (isset($_POST['btn_pending'])) {
            $_SESSION['btn_pending'] = 'btn_pending';
            header('Location:' . BASEURL . '/pencairan/inquiry');
            exit;
        } else if (isset($_POST['btn_cari'])) {
            $_SESSION['data_cari'] = $_POST['data_cari'];
            $_SESSION['btn_cari'] = $_POST['btn_cari'];
            header('Location:' . BASEURL . '/pencairan/inquiry');
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
            $this->view('pencairan/v_inquiry', $data);
            unset($_SESSION['btn_hari_ini']);
        } else if (isset($_SESSION['btn_bulan_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_bulan_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_bulan_ini();
            $this->view('pencairan/v_inquiry', $data);
            unset($_SESSION['btn_bulan_ini']);
        } else if (isset($_SESSION['btn_tahun_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_tahun_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_tahun_ini();
            $this->view('pencairan/v_inquiry', $data);
            unset($_SESSION['btn_tahun_ini']);
        } else if (isset($_SESSION['btn_semuanya'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->lihat_data_kredit();
            $data['jumlah_record'] = $this->model('m_cs')->count_lihat_data_kredit();
            $this->view('pencairan/v_inquiry', $data);
            unset($_SESSION['btn_semuanya']);
        } else if (isset($_SESSION['btn_pending'])) {

            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();

            $this->view('pencairan/v_inquiry', $data);
            unset($_SESSION['btn_pending']);
        } else if (isset($_SESSION['btn_cari'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";

            if ($_SESSION['data_cari'] != '') {
                $data['data_kredit'] = $this->model('m_cs')->btn_cari();
                $data['jumlah_record'] = $this->model('m_cs')->count_btn_cari();
            }

            $this->view('pencairan/v_inquiry', $data);
            unset($_SESSION['btn_cari']);
        } else {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $this->view('pencairan/v_inquiry', $data);
        }
    }



    public function btn_batal_pencairan()
    {



        $hasil = $this->model('m_pencairan')->btn_batal_pencairan();

        if ($hasil > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function btn_hapus()
    {

        $data = $this->model('m_pencairan')->btn_hapus();
        if ($data > 0) {
            $this->model('m_log')->hapus_pencairan();
            $this->model('m_pencairan')->btn_hapus_update_tanggal_pencairan();
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }
}
