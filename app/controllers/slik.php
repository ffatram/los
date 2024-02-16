<?php


include 'cs.php';


date_default_timezone_set('Asia/Makassar');
if (!isset($_SESSION['level'])) {
    header('Location:' . BASEURL . '/login');
    exit;
}

class slik extends Controller
{



    public function index()
    {

        header('Location:' . BASEURL . '/slik/daftar_belum_slik');
        exit;
    }

    public function beranda()
    {
        $data['update'] = $this->model("m_tbl_informasi")->getInformasi();
        $data['quote'] = $this->model("m_tbl_quote")->getQuote();
        $this->view('slik/v_beranda', $data);
    }

    // halaman daftar belum slik
    public function daftar_belum_slik()
    {
        $data['judul'] = 'Daftar Belum SLIK';
        $data['title'] = 'Daftar Belum SLIK';
        $data['get_daftar_belum_slik'] = $this->model('m_slik')->daftar_belum_slik();

        $this->view('slik/v_daftar_belum_slik', $data);
    }

    public function daftar_sudah_slik()
    {

        // $data['get_daftar_sudah_slik'] = $this->model('m_slik')->daftar_sudah_slik();
        $this->view('slik/v_daftar_sudah_slik');
    }


    // data table serverside
    public function get_data_daftar_sudah_slik()
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


        $this->db->query('SELECT * FROM view_slik WHERE kode_cabang =:kode_cabang AND tanggal_slik IS NOT NULL');
        $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        $total_data = count($this->db->resultSet());
        $total_filtered = $total_data;




        $limit = $_POST['length'];
        $start = $_POST['start'];
        $order = $columns[$_POST['order']['0']['column']];
        $dir = $_POST['order']['0']['dir'];


        if (empty($_POST['search']['value'])) {
            $this->db->query("SELECT * FROM view_slik WHERE kode_cabang =:kode_cabang AND tanggal_slik IS NOT NULL 
            ORDER BY tanggal_slik DESC,  $order $dir LIMIT $limit OFFSET $start");
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            $query =  $this->db->resultSet();
        } else {
            $search = $_POST['search']['value'];
            $this->db->query("SELECT * FROM view_slik WHERE kode_cabang =:kode_cabang AND tanggal_slik IS NOT NULL AND (no_permohonan_kredit 
            LIKE '%$search%' OR nama_pemohon LIKE '%$search%' OR nama_instansi LIKE '%$search%') ORDER BY tanggal_slik DESC,  $order $dir LIMIT $limit OFFSET $start");
            $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
            $query =  $this->db->resultSet();


            $this->db->query("SELECT * FROM view_slik WHERE kode_cabang =:kode_cabang AND tanggal_slik IS NOT NULL AND (no_permohonan_kredit 
            LIKE '%$search%' OR nama_pemohon LIKE '%$search%' OR nama_instansi LIKE '%$search%')");
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
                $res_data['nama_pemohon'] = $i['nama_pemohon'];
                $res_data['nama_instansi'] = $i['nama_instansi'];
                $res_data['plafond'] = number_format($i['plafond_dimohon'], 0, ',', '.');
                $res_data['jangka_waktu'] = $i['jangka_waktu'];
                $res_data['tanggal_slik'] = isset($i['tanggal_slik']) ? date('d-m-Y', strtotime($i['tanggal_slik'])) : '';
                $res_data['user_create'] = $i['user_create'];


                $btn_detail_slik = "<button type='button' style='background: " . w_orange . ";  color:white;' class='btn btn-sm mr-1 detail_slik' data-toggle='modal' data-target='#detail_slik' data-id='" . $i['id'] . "' data-no_permohonan_kredit='" . $i['no_permohonan_kredit'] . "'>Detail SLIK</button>";
                $btn_edit = "<a href=' " . BASEURL . "/slik/input_data_slik/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-primary mr-1'>Edit</a>";
                $btn_cetak = "<a href='" . BASEURL . "/slik/cetak_daftar_sudah_slik/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm mr-1' style='background: " . w_ungu . " ;  color:white;' target='_blank'>Cetak</a>";
                $btn_hapus = "<button type='button' class='btn btn-danger btn-sm btn_hapus_slik'  data-no_permohonan_kredit='" . $i['no_permohonan_kredit'] . "' data-nama_pemohon='" . $i['nama_pemohon'] . "  '  data-nama_instansi='" . $i['nama_instansi'] . "  '>Hapus</button>";





                // $batas_btn = "<span class='mr-0'> </span>";


                $res_data['aksi']   = "$btn_detail_slik" . "$btn_edit" . "$btn_cetak" . "$btn_hapus";
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




        // $this->db = new Database;
        // $columns = array(
        //     0 => 'id',
        //     1 => 'no_permohonan_kredit',
        //     2 => 'nama_pemohon',
        //     3 => 'nama_instansi',
        //     4 => 'plafond_dimohon',
        //     5 => 'jangka_waktu',
        //     6 => 'tanggal_slik',
        //     7 => 'user_create',
        // );


        // $this->db->query('SELECT no_permohonan_kredit,kode_cabang,tanggal_slik FROM tbl_permohon_kredit WHERE kode_cabang =:kode_cabang AND tanggal_slik IS NOT NULL');
        // $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        // $total_data = count($this->db->resultSet());
        // $total_filtered = $total_data;

        // $limit = $_POST['length'];
        // $start = $_POST['start'];
        // $order = $columns[$_POST['order']['0']['column']];
        // $dir = $_POST['order']['0']['dir'];

        // if (empty($_POST['search']['value'])) {
        //     $this->db->query("SELECT DISTINCT A.*,B.user_create AS user_create_slik FROM tbl_permohon_kredit A INNER JOIN tbl_slik B ON B.no_permohonan_kredit = A.no_permohonan_kredit  WHERE A.kode_cabang =:kode_cabang AND A.tanggal_slik IS NOT NULL ORDER BY A.tanggal_slik DESC, $order $dir LIMIT $limit OFFSET $start");
        //     $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        //     $query =  $this->db->resultSet();
        // } else {
        //     $search = $_POST['search']['value'];
        //     $this->db->query("SELECT * FROM tbl_permohon_kredit INNER JOIN WHERE kode_cabang =:kode_cabang AND tanggal_slik IS NOT NULL AND nama_pemohon LIKE '%$search%'OR nama_instansi LIKE '%$search%' ORDER BY tanggal_slik DESC, $order $dir LIMIT $limit OFFSET $start");
        //     $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        //     $query =  $this->db->resultSet();


        //     $this->db->query("SELECT * FROM tbl_permohon_kredit WHERE kode_cabang =:kode_cabang AND tanggal_slik IS NOT NULL AND nama_pemohon LIKE '%$search%' OR nama_instansi LIKE '%$search%'");
        //     $this->db->bind('kode_cabang', $_COOKIE['kode_cabang']);
        //     $query2 =  $this->db->resultSet();


        //     $total_filtered = count($query2);
        // }

        // $data = array();

        // if (!empty($query)) {
        //     $no = $start + 1;

        //     foreach ($query as $i) {
        //         $res_data['id'] =  $no;
        //         $res_data['no_permohonan_kredit'] = $i['no_permohonan_kredit'];
        //         $res_data['nama_pemohon'] = $i['nama_pemohon'];
        //         $res_data['nama_instansi'] = $i['nama_instansi'];
        //         $res_data['plafond'] = number_format($i['plafond_dimohon'], 0, ',', '.');
        //         $res_data['jangka_waktu'] = $i['jangka_waktu'];
        //         $res_data['tanggal_slik'] = isset($i['tanggal_slik']) ? date('d-m-Y', strtotime($i['tanggal_slik'])) : '';
        //         $res_data['user_create'] = $i['user_create_slik'];

        //         $btn_detail_slik = "<button type='button' style='background: " . w_orange . ";  color:white;' class='btn btn-sm mr-1 detail_slik' data-toggle='modal' data-target='#detail_slik' data-id='" . $i['id'] . "' data-no_permohonan_kredit='" . $i['no_permohonan_kredit'] . "'>Detail SLIK</button>";

        //         $btn_edit = "<a href=' " . BASEURL . "/slik/input_data_slik/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-primary mr-1'>Edit</a>";
        //         $btn_cetak = "<a href='" . BASEURL . "/slik/cetak_daftar_sudah_slik/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm mr-1' style='background: " . w_ungu . " ;  color:white;' target='_blank'>Cetak</a>";
        //         // $btn_hapus = "<a onclick='hapus_all_slik_where_req(event); return false' href='" . BASEURL . "/slik/hapus_daftar_sudah_slik/" . $i['no_permohonan_kredit'] . "' class='btn btn-danger btn-sm'> Hapus </a> ";
        //         // $btn_hapus =  "<button type='button' class='btn btn-danger btn-sm btn_hapus_slik' data-no_permohonan_kredit='" . $i['no_permohonan_kredit'] . "' data-nama_pemohon='" . $i['nama_pemohon'] . "'>Hapus</button>";

        //         $btn_hapus = "<button type='button' class='btn btn-danger btn-sm btn_hapus_slik'  data-no_permohonan_kredit='" . $i['no_permohonan_kredit'] . "' data-nama_pemohon='" . $i['nama_pemohon'] . "  '  data-nama_instansi='" . $i['nama_instansi'] . "  '>Hapus</button>";

        //         $res_data['aksi']   = "$btn_detail_slik" . "$btn_edit" . "$btn_cetak" . "$btn_hapus";
        //         $data[] = $res_data;
        //         $no++;
        //     }
        // }

        // $json_data = array(
        //     "draw"            => intval($_POST['draw']),
        //     "recordsTotal"    => intval($total_data),
        //     "recordsFiltered" => intval($total_filtered),
        //     "data"            => $data
        // );

        // echo json_encode($json_data);
    }







    public function get_daftar_sudah_slik()
    {

        $data = $this->model('m_slik')->get_daftar_sudah_slik();


        $rows2 = array();
        foreach ($data as $i) :

            $res_data['no_permohonan_kredit'] = $i['no_permohonan_kredit'];
            $res_data['nama_pemohon'] = $i['nama_pemohon'];
            $res_data['nama_instansi'] = $i['nama_instansi'];
            $res_data['plafond'] = number_format($i['plafond_dimohon'], 0, ',', '.');
            $res_data['jangka_waktu'] = $i['jangka_waktu'];
            $res_data['tanggal_slik'] = isset($i['tanggal_slik']) ? date('d-m-Y', strtotime($i['tanggal_slik'])) : '';
            $res_data['user_create'] = $i['user_create'];

            $btn_detail_slik = "<button type='button' style='background: " . w_orange . ";  color:white;' class='btn btn-sm mr-1 detail_slik' data-toggle='modal' data-target='#detail_slik' data-id='" . $i['id'] . "' data-no_permohonan_kredit='" . $i['no_permohonan_kredit'] . "'>Detail SLIK</button>";
            $btn_edit = "<a href=' " . BASEURL . "/slik/input_data_slik/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm btn-primary mr-1'>Edit</a>";
            $btn_cetak = "<a href='" . BASEURL . "/slik/cetak_daftar_sudah_slik/" . $i['no_permohonan_kredit'] . "' class='btn btn-sm mr-1' style='background: " . w_ungu . " ;  color:white;' target='_blank'>Cetak</a>";
            $btn_hapus = "<button type='button' class='btn btn-danger btn-sm btn_hapus_slik'  data-no_permohonan_kredit='" . $i['no_permohonan_kredit'] . "' data-nama_pemohon='" . $i['nama_pemohon'] . "  '  data-nama_instansi='" . $i['nama_instansi'] . "  '>Hapus</button>";

            $res_data['aksi']   = "$btn_detail_slik" . "$btn_edit" . "$btn_cetak" . "$btn_hapus";
            $rows2[] = $res_data;


        endforeach;
        echo json_encode($rows2);
    }


    // halaman input data slik

    public function input_data_slik($id)
    {

        $data['judul'] = 'Input Data SLIK';
        $data['title'] = 'Input Data SLIK';
        $_POST['no_permohonan_kredit'] = $id;
        $_SESSION['no_permohonan_kredit'] = $id;
        $data['get_data_cs_where_no_req'] = $this->model('m_slik')->get_data_cs_where_no_req($_POST);
        $data['get_jumlah_data_slik_pemohon'] = $this->model('m_slik')->get_jumlah_data_slik_pemohon($_POST);
        $data['get_jumlah_data_slik_pasangan'] = $this->model('m_slik')->get_jumlah_data_slik_pasangan($_POST);
        $data['get_daftar_slik_pemohon_where_no_req'] = $this->model('m_slik')->get_daftar_slik_pemohon_where_no_req($_POST);
        $data['get_daftar_slik_pasangan_where_no_req'] = $this->model('m_slik')->get_daftar_slik_pasangan_where_no_req($_POST);

        // bank
        $data['nama_bank'] = $this->model('m_bank')->get_all_bank();
        // fasilitas 
        $data['nama_fasilitas'] = $this->model('m_fasilitas')->get_all_fasilitas();
        // jaminan
        $data['nama_jaminan'] = $this->model('m_jaminan')->get_all_jaminan();
        // pengikatan
        $data['nama_pengikatan'] = $this->model('m_pengikatan')->get_all_pengikatan();


        $this->view('slik/v_input_data_slik', $data);
    }

    public function simpan_slik_pemohon()
    {
        $id = $_POST['no_permohonan_kredit'];
        $_POST['tanggal_slik']          = date('Y-m-d H:i:s');
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['bakidebet'] = str_replace(".", "", $_POST['bakidebet']);
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['nilai_jaminan'] = str_replace(".", "", $_POST['nilai_jaminan']);
        $_POST['pemohon_pasangan'] = 'PEMOHON';

        $a  = $_POST['waktu_awal'];
        $b = explode("/", $a);
        echo $b[0]; // piece1
        echo $b[1]; // piece2
        echo $b[2]; // piece2

        $_POST['waktu_awal'] = $b[2] . '-' . $b[1]  . '-' . $b[0];

        $c  = $_POST['waktu_akhir'];
        $d = explode("/", $c);
        echo $d[0]; // piece1
        echo $d[1]; // piece2
        echo $d[2]; // piece2

        $_POST['waktu_akhir'] = $d[2] . '-' . $d[1]  . '-' . $d[0];

        // // lakukan cek kolom tanggal_slik pada tabel cs jika ada maka jangan lakukan update
        $cek_daftar_belum_slik = $this->model('m_slik')->cek_daftar_belum_slik($_POST);
        // // jika bernilai lebih 0 maka kolom tabel cs masih kosong

        // // tambahan
        $_POST['user_create'] = $_COOKIE['username'];
        $_POST['tgl_create'] = date('Y-m-d H:i:s');
        $_POST['lokasi_berkas'] = "ANALISA";





        if ($cek_daftar_belum_slik > 0) {

            if (($this->model('m_slik')->simpan_slik_pemohon($_POST) > 0) and ($this->model('m_slik')->update_tgl_slik_tbl_permohon_kredit($_POST) > 0)) {
                $this->model('m_log')->simpan_slik();
                header('Location:' . BASEURL . '/slik/input_data_slik/' . $id);
                exit;
            } else {
                echo "gagal input data cs";
            }
        } else {
            if ($this->model('m_slik')->simpan_slik_pemohon($_POST) > 0) {
                $this->model('m_log')->simpan_slik();
                header('Location:' . BASEURL . '/slik/input_data_slik/' . $id);
                exit;
            } else {
                echo "gagal input data cs";
            }
        }
    }

    public function simpan_slik_pasangan()
    {
        // $data['get_daftar_belum_slik_id'] = $this->model('m_slik')->get_daftar_belum_slik_id($_SESSION['id_slik']);
        // $_POST['no_permohonan_kredit']      = $_SESSION['no_permohonan_kredit'];
        $id = $_POST['no_permohonan_kredit'];
        $_POST['tanggal_slik']          = date('Y-m-d H:i:s');
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['bakidebet'] = str_replace(".", "", $_POST['bakidebet']);
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['nilai_jaminan'] = str_replace(".", "", $_POST['nilai_jaminan']);

        // tambahan

        $_POST['user_create'] = $_COOKIE['username'];
        $_POST['tgl_create'] = date('Y-m-d H:i:s');
        $_POST['lokasi_berkas'] = "ANALISA";


        $a  = $_POST['waktu_awal'];
        $b = explode("/", $a);
        echo $b[0]; // piece1
        echo $b[1]; // piece2
        echo $b[2]; // piece2

        $_POST['waktu_awal'] = $b[2] . '-' . $b[1]  . '-' . $b[0];

        $c  = $_POST['waktu_akhir'];
        $d = explode("/", $c);
        echo $d[0]; // piece1
        echo $d[1]; // piece2
        echo $d[2]; // piece2

        $_POST['waktu_akhir'] = $d[2] . '-' . $d[1]  . '-' . $d[0];


        $cek_daftar_belum_slik = $this->model('m_slik')->cek_daftar_belum_slik($_POST);
        if ($cek_daftar_belum_slik > 0) {

            if (($this->model('m_slik')->simpan_slik_pasangan($_POST) > 0) and ($this->model('m_slik')->update_tgl_slik_tbl_pasangan_kredit($_POST) > 0)) {
                $this->model('m_log')->simpan_slik();
                header('Location:' . BASEURL . '/slik/input_data_slik/' . $id);
                exit;
            } else {
                echo "gagal menambahkan data";
            }
        } else {
            if ($this->model('m_slik')->simpan_slik_pasangan($_POST) > 0) {
                $this->model('m_log')->simpan_slik();
                header('Location:' . BASEURL . '/slik/input_data_slik/' . $id);
                exit;
            } else {
                echo "gagal menambahkan data";
            }
        }
    }

    public function edit_data_slik_pemohon($id)



    {

        $data['judul'] = 'Edit Data SLIK';
        $data['title'] = 'Edit Data SLIK';

        $noreg_id  = $id;
        $array_noreg_id = explode("-", $noreg_id);
        $no_permohonan_kredit = $array_noreg_id[0];
        $no_id = $array_noreg_id[1];


        $_POST['no_permohonan_kredit'] = $no_permohonan_kredit;
        $_POST['id'] = $no_id;






        // bank
        $data['nama_bank'] = $this->model('m_bank')->get_all_bank();
        // fasilitas 
        $data['nama_fasilitas'] = $this->model('m_fasilitas')->get_all_fasilitas();
        // jaminan
        $data['nama_jaminan'] = $this->model('m_jaminan')->get_all_jaminan();
        // pengikatan
        $data['nama_pengikatan'] = $this->model('m_pengikatan')->get_all_pengikatan();

        $data['get_data_cs_where_no_req'] = $this->model('m_slik')->get_data_cs_where_no_req($_POST);
        $data['get_jumlah_data_slik_pemohon'] = $this->model('m_slik')->get_jumlah_data_slik_pemohon($_POST);
        $data['get_jumlah_data_slik_pasangan'] = $this->model('m_slik')->get_jumlah_data_slik_pasangan($_POST);
        $data['edit_data_pemohon_where_id'] = $this->model('m_slik')->edit_data_pemohon_where_id($_POST);
        $data['no_permohonan_kredit'] = $no_permohonan_kredit;
        $data['id'] = $no_id;

        $this->view('slik/v_edit_slik_pemohon', $data);
    }

    public function edit_data_slik_pasangan($id)
    {

        $data['judul'] = 'Edit Data SLIK';
        $data['title'] = 'Edit Data SLIK';

        $noreg_id  = $id;
        $array_noreg_id = explode("-", $noreg_id);
        $no_permohonan_kredit = $array_noreg_id[0];
        $no_id = $array_noreg_id[1];

        $_POST['no_permohonan_kredit'] = $no_permohonan_kredit;
        $_POST['id'] = $no_id;





        // bank
        $data['nama_bank'] = $this->model('m_bank')->get_all_bank();
        // fasilitas 
        $data['nama_fasilitas'] = $this->model('m_fasilitas')->get_all_fasilitas();
        // jaminan
        $data['nama_jaminan'] = $this->model('m_jaminan')->get_all_jaminan();
        // pengikatan
        $data['nama_pengikatan'] = $this->model('m_pengikatan')->get_all_pengikatan();

        $data['get_data_cs_where_no_req'] = $this->model('m_slik')->get_data_cs_where_no_req($_POST);
        $data['get_jumlah_data_slik_pasangan'] = $this->model('m_slik')->get_jumlah_data_slik_pasangan($_POST);
        $data['edit_data_pasangan_where_id'] = $this->model('m_slik')->edit_data_pasangan_where_id($_POST);
        $data['no_permohonan_kredit'] =  $no_permohonan_kredit;
        $data['id'] = $no_id;


        $this->view('slik/v_edit_slik_pasangan', $data);
    }



    public function update_slik_pemohon()
    {


        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['bakidebet'] = str_replace(".", "", $_POST['bakidebet']);
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['nilai_jaminan'] = str_replace(".", "", $_POST['nilai_jaminan']);

        // tambahan
        $_POST['user_create'] = $_COOKIE['username'];
        $_POST['tgl_create'] = date('Y-m-d H:i:s');

        $a  = $_POST['waktu_awal'];
        $b = explode("/", $a);
        echo $b[0]; // piece1
        echo $b[1]; // piece2
        echo $b[2]; // piece2

        $_POST['waktu_awal'] = $b[2] . '-' . $b[1]  . '-' . $b[0];

        $c  = $_POST['waktu_akhir'];
        $d = explode("/", $c);
        echo $d[0]; // piece1
        echo $d[1]; // piece2
        echo $d[2]; // piece2

        $_POST['waktu_akhir'] = $d[2] . '-' . $d[1]  . '-' . $d[0];


        if (!isset($_POST['jenis_jaminan'])) {
            $_POST['jenis_jaminan'] = "";
        }

        if (!isset($_POST['pengikatan'])) {
            $_POST['pengikatan'] = "";
        }

        if ($this->model('m_slik')->update_slik_pemohon($_POST) > 0) {
            $this->model('m_log')->update_slik();
            header('Location:' . BASEURL . '/slik/input_data_slik/' . $_POST['no_permohonan_kredit']);
            exit;
        } else {
            echo "Gagal Update";
            header('Location:' . BASEURL . '/slik/input_data_slik/' . $_POST['no_permohonan_kredit']);
            exit;
        }
    }

    public function update_slik_pasangan()
    {

        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['bakidebet'] = str_replace(".", "", $_POST['bakidebet']);
        $_POST['plafond'] = str_replace(".", "", $_POST['plafond']);
        $_POST['nilai_jaminan'] = str_replace(".", "", $_POST['nilai_jaminan']);





        // tambahan
        $_POST['user_create'] = $_COOKIE['username'];
        $_POST['tgl_create'] = date('Y-m-d H:i:s');


        $a  = $_POST['waktu_awal'];
        $b = explode("/", $a);
        echo $b[0]; // piece1
        echo $b[1]; // piece2
        echo $b[2]; // piece2

        $_POST['waktu_awal'] = $b[2] . '-' . $b[1]  . '-' . $b[0];

        $c  = $_POST['waktu_akhir'];
        $d = explode("/", $c);
        echo $d[0]; // piece1
        echo $d[1]; // piece2
        echo $d[2]; // piece2

        $_POST['waktu_akhir'] = $d[2] . '-' . $d[1]  . '-' . $d[0];

        if (!isset($_POST['jenis_jaminan'])) {
            $_POST['jenis_jaminan'] = "";
        }

        if (!isset($_POST['pengikatan'])) {
            $_POST['pengikatan'] = "";
        }


        if ($this->model('m_slik')->update_slik_pasangan($_POST) > 0) {
            $this->model('m_log')->update_slik();
            header('Location:' . BASEURL . '/slik/input_data_slik/' .  $_POST['no_permohonan_kredit']);
            exit;
        } else {
            echo "Gagal Updatesd";
            header('Location:' . BASEURL . '/slik/input_data_slik/' .  $_POST['no_permohonan_kredit']);
            exit;
        }
    }


    public function hapus_pemohon_slik()
    {




        $data['get_jumlah_data_slik_pemohon'] = $this->model('m_slik')->get_jumlah_data_slik_pemohon($_POST);
        $data['get_jumlah_data_slik_pasangan'] = $this->model('m_slik')->get_jumlah_data_slik_pasangan($_POST);

        $data['hapus'] = $this->model('m_slik')->hapus_pemohon_slik();

        if ($data['hapus'] > 0) {
            $this->model('m_log')->hapus_slik();
            echo "sukses";
        } else {

            echo "gagal";
        }


        $data['get_jumlah_data_slik_pemohon']  = $data['get_jumlah_data_slik_pemohon'] - 1;

        if (($data['get_jumlah_data_slik_pemohon'] == 0) && ($data['get_jumlah_data_slik_pasangan'] == 0)) {
            if ($this->model('m_slik')->update_tbl_cs_hapus_slik($_POST) > 0) {
            } else {
            }
        }
    }

    public function hapus_pasangan_slik()
    {



        $data['get_jumlah_data_slik_pemohon'] = $this->model('m_slik')->get_jumlah_data_slik_pemohon($_POST);
        $data['get_jumlah_data_slik_pasangan'] = $this->model('m_slik')->get_jumlah_data_slik_pasangan($_POST);

        $data['hapus'] = $this->model('m_slik')->hapus_pasangan_slik();

        if ($data['hapus'] > 0) {
            $this->model('m_log')->hapus_slik();
            echo "sukses";
        } else {

            echo "gagal";
        }


        $data['get_jumlah_data_slik_pasangan']  = $data['get_jumlah_data_slik_pasangan'] - 1;

        if (($data['get_jumlah_data_slik_pemohon'] == 0) && ($data['get_jumlah_data_slik_pasangan'] == 0)) {
            if ($this->model('m_slik')->update_tbl_cs_hapus_slik($_POST) > 0) {
            } else {
            }
        }


        // // tambahan
        // $_POST['lokasi_berkas'] = "SLIK";


        // $data['get_jumlah_data_slik_pemohon'] = $this->model('m_slik')->get_jumlah_data_slik_pemohon($_POST);
        // $data['get_jumlah_data_slik_pasangan'] = $this->model('m_slik')->get_jumlah_data_slik_pasangan($_POST);


        // if ($this->model('m_slik')->hapus_pasangan_slik($_POST) > 0) {
        //     $this->model('m_log')->hapus_slik();
        //     $data['get_jumlah_data_slik_pasangan']  = $data['get_jumlah_data_slik_pasangan'] - 1;
        //     if (($data['get_jumlah_data_slik_pemohon'] == 0) && ($data['get_jumlah_data_slik_pasangan'] == 0)) {
        //         echo "nilai 00";
        //         if ($this->model('m_slik')->update_tbl_cs_hapus_slik($_POST) > 0) {
        //             // header('Location:' . BASEURL . '/slik/daftar_belum_slik/');
        //             // exit;
        //         } else {
        //             echo "gagal update tgl_slik =null tbl_permohon_kredit";
        //         }
        //     }
        //     header('Location:' . BASEURL . '/slik/input_data_slik/' . $no_permohonan_kredit);
        //     exit;
        //     echo "gagal update tbl_permohon_kredit";
        // } else {
        //     echo "gagal delete data";
        // }
    }

    public function hapus_daftar_sudah_slik()
    {




        if (($this->model('m_slik')->hapus_pemohon_slik_all($_POST) >= 0)) {
            $this->model('m_log')->hapus_slik();
            if ($this->model('m_slik')->update_tbl_cs_hapus_slik($_POST) > 0) {
                echo "sukses";
            } else {
                echo "gagal";
            }
        } else {
            echo "gagal delete data tbl pemohon tbl pasangan";
        }
    }

    public function detail_slik_cs()
    {
        $data['detail_slik_cs'] = $this->model('m_slik')->detail_slik_cs($_POST);
        $data['daftar_slik_pemohon'] = $this->model('m_slik')->daftar_slik_pemohon($_POST);
        $data['daftar_slik_pasangan'] = $this->model('m_slik')->daftar_slik_pasangan($_POST);
        // $data['no_permohonan_kredit'] = $_POST['no_permohonan_kredit'];
        echo "<table class='table-hover' cellpadding=5 cellspacing=15><tbody>";
        echo "<tr><td>No. Permohonan Kredit</td><td>:</td><td>" . $data['detail_slik_cs']['no_permohonan_kredit'] . "</td></tr>";
        echo "<tr><td>Tanggal Permohonan</td><td>:</td><td>" . date("d-m-Y", strtotime($data['detail_slik_cs']['tanggal_permohonan']))  . "</td></tr>";
        echo "<tr><td>Tanggal SLIK</td><td>:</td><td>" . date("d-m-Y", strtotime($data['detail_slik_cs']['tanggal_slik']))  . "</td></tr>";
        echo "</tbody></table>";



        echo "<div class='card mt-2'><div class='card-body'>"; //card
        echo "<table class='table-hover' cellpadding=5 cellspacing=15><tbody>";
        echo "<tr><td>Nama Pemohon</td><td>:</td><td>" . $data['detail_slik_cs']['nama_pemohon'] . "</td></tr>";
        echo "<tr><td>Nama Instansi</td><td>:</td><td>" . $data['detail_slik_cs']['nama_instansi'] . "</td></tr>";
        echo "<tr><td>No. KTP</td><td>:</td><td>" . $data['detail_slik_cs']['no_ktp_pemohon'] . "</td></tr>";
        echo "<tr><td>Tempat Tanggal Lahir</td><td>:</td><td>" . $data['detail_slik_cs']['tempat_lahir_pemohon'] . ", " . date("d F Y", strtotime($data['detail_slik_cs']['tgl_lahir_pemohon'])) . "</td></tr>";
        echo "<tr><td>Alamat KTP</td><td>:</td><td>" . $data['detail_slik_cs']['alamat_ktp_pemohon'] . "</td></tr>";
        echo "<tr><td>Alamat saat ini</td><td>:</td><td>" . $data['detail_slik_cs']['alamat_sekarang_pemohon'] . "</td></tr>";
        echo "</tbody></table>";

        echo "<div class='table-responsive mt-5'>
        <table id='daftar_slik' class='table table-striped table-hover first display nowrap'>
            <thead>
                <tr>
                    
                    <th>
                        Nama Bank
                    </th>
    
                    <th>
                        Jenis Fasilitas
                    </th>
                    <th>
                        Plafond
                    </th>
                    <th>
                        Bakidebet
                    </th>
                    <th>
                        Kolektibilitas
                    </th>
    
                    <th>
                        Jangka Waktu
                    </th>
                    <th>
                        Suku Bunga
                    </th>
                    <th>
                        Jenis Jaminan
                    </th>
                    <th>
                        Nilai Jaminan
                    </th>
                    <th>
                        Pemilik Jaminan
                    </th>
                    <th>
                        Alamat Jaminan
                    </th>
                    <th>
                        Pengikatan
                    </th>
                    <th>
                        Keterangan
                    </th>
                </tr>
            </thead>
            <tbody>";

        $a = 1;

        foreach ($data['daftar_slik_pemohon'] as $row) :
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



        echo "</tbody>
            </table>
        </div>";


        echo "</div></div>"; //akhir card





        echo "<div class='card mt-2'><div class='card-body'>"; //card
        echo "<table class='table-hover' cellpadding=5 cellspacing=15><tbody>";
        echo "<tr><td>Nama Pasangan</td><td>:</td><td>" . $data['detail_slik_cs']['nama_pasangan'] . "</td></tr>";
        echo "<tr><td>Instansi Pasangan</td><td>:</td><td>" . $data['detail_slik_cs']['nama_instansi_pasangan'] . "</td></tr>";
        echo "<tr><td>No. KTP Pasangan</td><td>:</td><td>" . $data['detail_slik_cs']['no_ktp_pasangan'] . "</td></tr>";
        echo "<tr><td>Tempat Tanggal Lahir</td><td>:</td><td>" . $data['detail_slik_cs']['tempat_lahir_pasangan'] . ", " . date("d F Y", strtotime($data['detail_slik_cs']['tgl_lahir_pasangan'])) . "</td></tr>";
        echo "<tr><td>Alamat KTP Pasangan</td><td>:</td><td>" . $data['detail_slik_cs']['alamat_ktp_pasangan'] . "</td></tr>";
        echo "<tr><td>Alamat saat ini Pasangan</td><td>:</td><td>" . $data['detail_slik_cs']['alamat_sekarang_pasangan'] . "</td></tr>";
        echo "</tbody></table>";

        echo "<div class='table-responsive mt-5'>
        <table id='daftar_slik_pasangan' class='table table-striped table-hover first display nowrap'>
            <thead>
                <tr>
                    
                    <th>
                        Nama Bank
                    </th>
    
                    <th>
                        Jenis Fasilitas
                    </th>
                    <th>
                        Plafond
                    </th>
                    <th>
                        Bakidebet
                    </th>
                    <th>
                        Kolektibilitas
                    </th>
    
                    <th>
                        Jangka Waktu
                    </th>
                    <th>
                        Suku Bunga
                    </th>
                    <th>
                        Jenis Jaminan
                    </th>
                    <th>
                        Nilai Jaminan
                    </th>
                    <th>
                        Pemilik Jaminan
                    </th>
                    <th>
                        Alamat Jaminan
                    </th>
                    <th>
                        Pengikatan
                    </th>
                    <th>
                        Keterangan
                    </th>
                </tr>
            </thead>
            <tbody>";

        $a = 1;

        foreach ($data['daftar_slik_pasangan'] as $row) :
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



        echo "</tbody>
            </table>
        </div>";


        echo "</div></div>"; //akhir card
    }

    public function slik_pemohon_tidak_ditemukan()
    {


        $_POST['tanggal_slik'] = date("Y-m-d H:i:s");
        $_POST['lokasi_berkas'] = "ANALISA";

        $req['1'] = $this->model('m_slik')->slik_pemohon_tidak_ditemukan();



        $req['2'] = $this->model('m_slik')->slik_pemohon_tidak_ditemukan_2();



        if ($req['1'] > 0 && $req['2'] > 0) {
            $this->model('m_log')->simpan_slik();
            echo 'sukses';
        } else {
            echo "gagal";
        }
    }




    public function simpannnn()
    {
        $data['daftar_slik_pemohon'] = "";
    }

    public function cetak_slik()
    {

        $this->view('slik/cetak');
    }

    public function tombol()
    {
        $this->view('slik/nav');
        $this->view('slik/tombol');
        $this->view('slik/foot');
    }

    public function cetak_daftar_sudah_slik($id)
    {


        $_POST['no_permohonan_kredit'] = $id;
        $data['detail_slik_cs'] = $this->model('m_slik')->detail_slik_cs($_POST);
        $data['daftar_slik_pemohon'] = $this->model('m_slik')->daftar_slik_pemohon($_POST);
        $data['daftar_slik_pasangan'] = $this->model('m_slik')->daftar_slik_pasangan($_POST);

        // $this->view('slik/nav');
        $this->view('slik/v_cetak_daftar_sudah_slik', $data);
        // $this->view('slik/foot');
    }


    public function tes_cari()
    {

        $_POST['kode_cabang'] = $_COOKIE['kode_cabang'];
        $data['tes_cari'] = $this->model('m_slik')->tes_cari($_POST);
        $a = 0;
        foreach ($data['tes_cari'] as $i) {

            if ($i['no_ktp'] == $_POST['no_ktp']) {
                $data['dataok'][$a] = $i;
            } else {
                echo "keterangan";
            }

            $a++;
        }


        if (isset($_POST['no_ktp'])) {
            $this->view('slik/nav', $data);
            $this->view('slik/v_tes_cari', $data);
            $this->view('slik/foot');
        } else {
            header('Location:' . BASEURL . '/slik/tes');
            exit;
        }
    }

    public function tes()
    {
        $data['judul'] = 'Daftar Sudah SLIK';
        $data['title'] = 'Daftar Sudah SLIK';

        $this->view('slik/nav', $data);
        $this->view('slik/v_tes_cari', $data);
        $this->view('slik/foot');
    }


    public function cari_data_credit_all_2()
    {
        if (isset($_POST['btn_hari_ini'])) {
            $_SESSION['btn_hari_ini'] = 'btn_hari_ini';
            header('Location:' . BASEURL . '/slik/inquiry');
            exit;
        } else if (isset($_POST['btn_bulan_ini'])) {
            $_SESSION['btn_bulan_ini'] = 'btn_bulan_ini';
            header('Location:' . BASEURL . '/slik/inquiry');
            exit;
        } else if (isset($_POST['btn_tahun_ini'])) {

            $_SESSION['btn_tahun_ini'] = 'btn_tahun_ini';
            header('Location:' . BASEURL . '/slik/inquiry');
            exit;
        } else if (isset($_POST['btn_semuanya'])) {
            $_SESSION['btn_semuanya'] = 'btn_semuanya';
            header('Location:' . BASEURL . '/slik/inquiry');
            exit;
        } else if (isset($_POST['btn_pending'])) {
            $_SESSION['btn_pending'] = 'btn_pending';
            header('Location:' . BASEURL . '/slik/inquiry');
            exit;
        } else if (isset($_POST['btn_cari'])) {
            $_SESSION['data_cari'] = $_POST['data_cari'];
            $_SESSION['btn_cari'] = $_POST['btn_cari'];
            header('Location:' . BASEURL . '/slik/inquiry');
            exit;
        }
    }



    public function inquiry()
    {

        if (isset($_SESSION['btn_hari_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_hari_ini();
            $this->view('slik/v_inquiry', $data);
            unset($_SESSION['btn_hari_ini']);
        } else if (isset($_SESSION['btn_bulan_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_bulan_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_bulan_ini();
            $this->view('slik/v_inquiry', $data);
            unset($_SESSION['btn_bulan_ini']);
        } else if (isset($_SESSION['btn_tahun_ini'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_tahun_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_tahun_ini();
            $this->view('slik/v_inquiry', $data);
            unset($_SESSION['btn_tahun_ini']);
        } else if (isset($_SESSION['btn_semuanya'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->lihat_data_kredit();
            $data['jumlah_record'] = $this->model('m_cs')->count_lihat_data_kredit();
            $this->view('slik/v_inquiry', $data);
            unset($_SESSION['btn_semuanya']);
        } else if (isset($_SESSION['btn_pending'])) {

            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();

            $this->view('slik/v_inquiry', $data);
            unset($_SESSION['btn_pending']);
        } else if (isset($_SESSION['btn_cari'])) {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";

            if ($_SESSION['data_cari'] != '') {
                $data['data_kredit'] = $this->model('m_cs')->btn_cari();
                $data['jumlah_record'] = $this->model('m_cs')->count_btn_cari();
            }

            $this->view('slik/v_inquiry', $data);
            unset($_SESSION['btn_cari']);
        } else {
            $data['title'] = "Menu Inquiry";
            $data['judul'] = "Menu Inquiry";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $this->view('slik/v_inquiry', $data);
        }
    }

    public function panggil()
    {


        $this->cs = new cs();
        echo $this->cs->tesss();
    }
}
