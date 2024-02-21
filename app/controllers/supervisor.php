<?php

date_default_timezone_set('Asia/Makassar');
if (!isset($_SESSION['level'])) {
    header('Location:' . BASEURL . '/login');
    exit;
}


include "ref.php";

class supervisor extends Controller
{


    public $get_level;
    public $daftar_cabang;
    public $tipe_komite;
    public $tipe_kredit;

    public $username;
    public $tipe_pejabat;

    public $ref_jenis_surat;

    public $get_sebutan_nama_pejabat;

    public $surat_kuasa_pencairan;
    public $checklist_berkas;


    public function __construct()
    {
        $data = new ref();
        $this->get_level = $data->get_level();
        $this->daftar_cabang = $data->get_daftar_cabang();
        $this->tipe_komite = $data->get_tipe_komite();
        $this->tipe_kredit = $data->get_tipe_kredit();
        $this->username = $data->get_username();
        $this->tipe_pejabat = $data->get_tipe_pejabat();
        $this->ref_jenis_surat = $data->get_ref_jenis_surat();
        $this->get_sebutan_nama_pejabat = $data->get_sebutan_nama_pejabat();
        $this->surat_kuasa_pencairan = $data->get_surat_kuasa_pencairan();
        $this->checklist_berkas  = $data->get_checklist_berkas();
    }


    public function index()
    {
        $this->view("supervisor/v_beranda");
    }

    public function user_home()
    {
        $data['title'] = "User";
        $data['nama_halaman'] = "User";

       
        $data['level'] = $this->get_level;
        $data['daftar_cabang'] = $this->daftar_cabang;
        $data['tipe_komite'] = $this->tipe_komite;
        $data['tipe_kredit'] = $this->tipe_kredit;


        $data['get_tbl_user'] = $this->model('m_user')->get_tbl_user();
        $this->view("supervisor/user/v_user_home", $data);
    }


    public function user_tambah()
    {


        $pass       = "bhm123";
        $pindef     = "bhm123";
        $password   = password_hash($pass, PASSWORD_DEFAULT);
        $pin        = password_hash($pindef, PASSWORD_DEFAULT);



        $_POST['password_default']  = $pass;
        $_POST['password']          = $password;
        $_POST['pin']               = $pin;


        $limit_direksi_awal = str_replace(".", "", $_POST['limit_direksi_awal']);
        $limit_direksi_akhir = str_replace(".", "", $_POST['limit_direksi_akhir']);

        $_POST['limit_direksi_awal'] = $limit_direksi_awal;
        $_POST['limit_direksi_akhir'] = $limit_direksi_akhir;


        if ($_POST['level'] != 'KOMITE') {
            $_POST['tipe_kredit'] = '-';
            $_POST['tipe_komite'] = '-';
            $_POST['limit_direksi_awal']  = 0;
            $_POST['limit_direksi_akhir'] = 0;
        }

        $_POST['date_create'] = date('Y-m-d H:i:s');

        $data_query = $this->model('m_supervisor')->user_simpan($_POST);
        if ($data_query > 0) {
            $this->log_simpan_user();
            echo "sukses";
        } else {
            echo "gagal";
        }
    }


    public function user_cek_username()
    {

        $data_query = $this->model('m_supervisor')->user_cek_username();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function get_data_user_edit_id()
    {

        $data = $this->model('m_supervisor')->get_data_user_edit_id();
        echo json_encode($data);
    }


    public function user_update()
    {

        $limit_direksi_awal = str_replace(".", "", $_POST['limit_direksi_awal']);
        $limit_direksi_akhir = str_replace(".", "", $_POST['limit_direksi_akhir']);

        $_POST['limit_direksi_awal'] = $limit_direksi_awal;
        $_POST['limit_direksi_akhir'] = $limit_direksi_akhir;


        if ($_POST['level'] != 'KOMITE') {
            $_POST['tipe_kredit'] = '-';
            $_POST['tipe_komite'] = '-';
            $_POST['limit_direksi_awal']  = 0;
            $_POST['limit_direksi_akhir'] = 0;
        }

        $data_query = $this->model('m_supervisor')->user_update($_POST);
        if ($data_query > 0) {
            $this->model('m_log')->log_update_user();
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function user_reset_password()
    {

        $pass       = "bhm123";
        // $pindef     = "bhm123";
        $password   = password_hash($pass, PASSWORD_DEFAULT);
        // $pin        = password_hash($pindef, PASSWORD_DEFAULT);



        // $_POST['password_default']  = $pass;
        $_POST['password']          = $password;
        // $_POST['pin']               = $pin;

        $data_query = $this->model('m_supervisor')->user_reset_password();
        if ($data_query > 0) {
            $this->model('m_log')->log_reset_password();
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function user_reset_pin()
    {

        $pass       = "bhm123";
        $pin   = password_hash($pass, PASSWORD_DEFAULT);
        $_POST['pin']          = $pin;

        $data_query = $this->model('m_supervisor')->user_reset_pin();
        if ($data_query > 0) {
            $this->model('m_log')->log_reset_pin();
            echo "sukses";
        } else {
            echo "gagal";
        }
    }




    public function user_hapus()
    {

        $data_query = $this->model('m_supervisor')->user_hapus();
        if ($data_query > 0) {
            $this->model('m_log')->log_hapus_user();
            echo "sukses";
        } else {
            echo "gagal";
        }
    }



    public function log_home()
    {

        $data['title'] = "Log";
        $data['nama_halaman'] = "Log";
        $data['username'] = $this->username;

        $this->view('supervisor/log/v_log_home', $data);
    }


    public function log_get_data()
    {


        if ($_POST['username'] == "ALL") {
            $data = $this->model('m_log')->get_tbl_log_all();
        } else {
            $data = $this->model('m_log')->get_tbl_log();
        }

        $rows = array();
        $rows2 = array();
        foreach ($data as $row) :
            $rows['no_permohonan_kredit'] = $row['no_permohonan_kredit'];
            $rows['nama_pemohon'] = $row['nama_pemohon'];
            $rows['keterangan'] = $row['keterangan'];
            $rows['username'] = $row['username'];
            $rows['kode_cabang'] = $row['kode_cabang'];
            $rows['update_date'] = $row['update_date'];
            $rows2[] = $rows;
        endforeach;
        echo json_encode($rows2);
    }



    public function bank_home()
    {

        $data['title'] = "Bank";
        $data['nama_halaman'] = "Bank";
        $data['get_data'] = $this->model('m_bank')->get_all_bank();
        $this->view('supervisor/bank/v_bank_home', $data);
    }

    public function bank_cek_nama_bank()
    {

        $data_query = $this->model('m_supervisor')->bank_cek_nama_bank();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function bank_tambah()
    {

        $data_query = $this->model('m_supervisor')->bank_simpan($_POST);
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function get_data_bank_edit_id()
    {

        $data = $this->model('m_supervisor')->get_data_bank_edit_id();
        echo json_encode($data);
    }

    public function bank_update()
    {

        $data_query = $this->model('m_supervisor')->bank_update();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function bank_hapus()
    {

        $data_query = $this->model('m_supervisor')->bank_hapus();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }


    public function instansi_home()
    {

        $data['title'] = "Instansi";
        $data['nama_halaman'] = "Instansi";
        $data['daftar_cabang'] = $this->daftar_cabang;

        $data['get_data'] = $this->model('m_ref_instansi')->get_all_supervisor();

        $this->view('supervisor/instansi/v_instansi_home', $data);
    }


    public function instansi_cek_data()
    {
        $data_query  = $this->model('m_supervisor')->instansi_cek_data();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function instansi_tambah()
    {

        $data_query = $this->model('m_supervisor')->instansi_simpan();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function get_data_instansi_edit_id()
    {
        $data = $this->model('m_supervisor')->get_data_instansi_edit_id();
        echo json_encode($data);
    }


    public function instansi_update()
    {

        $data_query = $this->model('m_supervisor')->instansi_update();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function instansi_hapus()
    {

        $data_query = $this->model('m_supervisor')->instansi_hapus();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }


    public function pejabat_home()
    {

        $data['title'] = "Pejabat Bank";
        $data['nama_halaman'] = "Pejabat Bank";
        $data['daftar_cabang'] = $this->daftar_cabang;

        $data['get_data'] = $this->model('m_ref_pejabat')->get();
        $data['tipe_pejabat'] = $this->tipe_pejabat;
        $data['ref_jenis_surat'] = $this->ref_jenis_surat;
        $data['sebutan'] = $this->get_sebutan_nama_pejabat;

        $this->view('supervisor/pejabat/v_pejabat_home', $data);
    }

    public function tipe_pejabat_tambah()
    {
        $data_query = $this->model('m_supervisor')->tipe_pejabat_simpan();
        if ($data_query > 0) {
            $this->model('m_log')->log_simpan_pejabat();
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function get_data_pejabat_edit_id()
    {

        $data = $this->model('m_supervisor')->get_data_pejabat_edit_id();
        echo json_encode($data);
    }

    public function pejabat_bank_update()
    {

        $data_query = $this->model('m_supervisor')->pejabat_bank_update();
        if ($data_query > 0) {
            $this->model('m_log')->log_update_pejabat();
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function pejabat_bank_hapus()
    {

        $data_query = $this->model('m_supervisor')->pejabat_bank_hapus();
        if ($data_query > 0) {

            $this->model('m_log')->log_hapus_pejabat();
            echo "sukses";
        } else {
            echo "gagal";
        }
    }


    public function sk_limit_kewenangan_home()
    {

        $data['title'] = "SK Limit Kewenangan";
        $data['nama_halaman'] = "SK Limit Kewenangan";


        $data['get_data'] = $this->model('m_ref_sk_limit_kewenangan')->get();

        $this->view('supervisor/limit/v_ref_sk_limit_kewenangan_home', $data);
    }

    public function get_data_sk_limit_edit_id()
    {

        $data = $this->model('m_supervisor')->get_data_sk_limit_edit_id();

        echo json_encode($data);
    }


    public function sk_limit_kewenangan_update()
    {

        $data_query = $this->model('m_supervisor')->sk_limit_kewenangan_update();

        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }


    public function provisi_adm_kredit_home()
    {

        $data['title'] = "Provisi Administrasi Kredit";
        $data['nama_halaman'] = "Provisi Administrasi Kredit";

        $data['get_data'] = $this->model('m_ref_provisi_adm_kredit')->get();
        $this->view('supervisor/provisiadm/v_provisi_adm_kredit', $data);
    }


    public function get_provisiadm_edit_id()
    {
        $data = $this->model('m_supervisor')->get_provisiadm_edit_id();

        echo json_encode($data);
    }

    public function provisiadm_update()
    {


        $data_query = $this->model('m_supervisor')->provisiadm_update();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }




    public function denda_home()
    {

        $data['title'] = "Denda";
        $data['nama_halaman'] = "Denda";

        $data['get_data'] = $this->model('m_ref_denda')->get();
        $this->view('supervisor/denda/v_denda_home', $data);
    }


    public function get_data_denda_edit_id()
    {

        $data = $this->model('m_supervisor')->get_data_denda_edit_id();

        echo json_encode($data);
    }

    public function denda_update()
    {

        $data_query = $this->model('m_supervisor')->denda_update();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function fasilitas_kredit_home()
    {

        $data['title'] = "Fasilitas Kredit";
        $data['nama_halaman'] = "Fasilitas Kredit";

        $data['get_data'] = $this->model('m_ref_fasilitas_kredit')->get();
        $this->view('supervisor/fasilitas/v_fasilitas_kredit', $data);
    }


    public function get_cek_data_nama_fasilitas()
    {

        $data_query = $this->model('m_ref_fasilitas_kredit')->get_data_where_nama_fasilitas();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function fasilitas_kredit_tambah()
    {
        $data_query = $this->model('m_supervisor')->fasilitas_kredit_simpan();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }


    public function get_data_faslitas_kredit_edit_id()
    {

        $data = $this->model('m_supervisor')->get_data_faslitas_kredit_edit_id();

        echo json_encode($data);
    }

    public function fasilitas_kredit_update()
    {

        $data_query = $this->model('m_supervisor')->fasilitas_kredit_update();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }


    public function fasilitas_kredit_hapus()
    {
        $data_query = $this->model('m_supervisor')->fasilitas_kredit_hapus();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }


    public function golongan_debitur_home()
    {

        $data['title'] = "Golongan Debitur";
        $data['nama_halaman'] = "Golongan Debitur";

        $data['get_data'] = $this->model('m_ref_golongan_debitur')->get_all();
        $this->view('supervisor/goldeb/v_golongan_debitur', $data);
    }

    public function get_cek_data_golongan_debitur()
    {

        $data_query = $this->model('m_ref_golongan_debitur')->get_cek_data_golongan_debitur();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function golongan_debitur_tambah()
    {
        $data_query = $this->model('m_supervisor')->golongan_debitur_tambah();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function get_data_golongan_debitut_edit_id()
    {

        $data = $this->model('m_supervisor')->get_data_golongan_debitut_edit_id();
        echo json_encode($data);
    }

    public function golongan_debitur_update()
    {

        $data_query = $this->model('m_supervisor')->golongan_debitur_update();


        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function golongan_debitur_hapus()
    {
        $data_query = $this->model('m_supervisor')->golongan_debitur_hapus();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }



    public function hubungan_debitur_home()
    {
        $data['title'] = "Hubungan Debitur Dengan Bank";
        $data['nama_halaman'] = "Hubungan Debitur Dengan Bank";

        $data['get_data'] = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_all();
        $this->view('supervisor/hubungandebitur/v_hubungan_debitur', $data);
    }

    public function get_cek_data_hubungan_debitur()
    {

        $data_query = $this->model('m_ref_hubungan_debitur_dengan_bank')->get_cek_data_hubungan_debitur();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function hubungan_debitur_tambah()
    {

        $data_query = $this->model('m_supervisor')->hubungan_debitur_tambah();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function get_data_hubungan_debitur_edit_id()
    {
        $data = $this->model('m_supervisor')->get_data_hubungan_debitur_edit_id();
        echo json_encode($data);
    }

    public function hubungan_debitur_update()
    {

        $data_query = $this->model('m_supervisor')->hubungan_debitur_update();


        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function hubungan_debitur_hapus()
    {
        $data_query = $this->model('m_supervisor')->hubungan_debitur_hapus();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function jaminan_home()
    {
        $data['title'] = "Jaminan";
        $data['nama_halaman'] = "Jaminan";
        $data['get_data'] = $this->model('m_ref_jaminan')->get_all();
        $this->view('supervisor/jaminan/v_jaminan', $data);
    }

    public function get_cek_data_ref_all_one_kolom()
    {


        $data_query = $this->model('m_ref_all')->get_cek_data_ref_all_one_kolom();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function data_ref_all_one_kolom_tambah()
    {

        $data_query = $this->model('m_supervisor')->data_ref_all_one_kolom_tambah();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }



    public function data_ref_all_2_kolom_tambah()
    {



        $data_query = $this->model('m_supervisor')->data_ref_all_2_kolom_tambah();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }




    public function data_ref_all_3_kolom_tambah()
    {

        if (empty($_POST['data2'])) {
            $_POST['data2'] = '-';
        }

        if (empty($_POST['data3'])) {
            $_POST['data3'] = '-';
        }

        $data_query = $this->model('m_supervisor')->data_ref_all_3_kolom_tambah();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function get_data_ref_all_edit_id()
    {

        $data = $this->model('m_supervisor')->get_data_ref_all_edit_id();
        echo json_encode($data);
    }

    public function data_ref_all_one_kolom_update()
    {
        $data_query = $this->model('m_supervisor')->data_ref_all_one_kolom_update();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }



    public function data_ref_all_2_kolom_update()
    {
        $data_query = $this->model('m_supervisor')->data_ref_all_2_kolom_update();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }


    public function data_ref_all_3_kolom_update()
    {
        $data_query = $this->model('m_supervisor')->data_ref_all_3_kolom_update();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }


    public function data_ref_all_one_kolom_hapus()
    {

        $data_query = $this->model('m_supervisor')->data_ref_all_one_kolom_hapus();
        if ($data_query > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }

    public function jenis_kredit_home()
    {
        $data['title'] = "Jenis Kredit";
        $data['nama_halaman'] = "Jenis Kredit";
        $data['get_data'] = $this->model('m_ref_jenis_kredit')->get_all();
        $this->view('supervisor/jeniskredit/v_jenis_kredit', $data);
    }

    public function jenis_pekerjaan_home()
    {
        $data['title'] = "Jenis Pekerjaan";
        $data['nama_halaman'] = "Jenis Pekerjaan";
        $data['get_data'] = $this->model('m_jenis_pekerjaan')->get_all();
        $data['data2']  = $this->surat_kuasa_pencairan;
        $data['data3'] = $this->checklist_berkas;
        $this->view('supervisor/jenispekerjaan/v_jenis_pekerjaan', $data);
    }


    public function jenis_penggunaan_home()
    {
        $data['title'] = "Jenis Penggunaan";
        $data['nama_halaman'] = "Jenis Penggunaan";
        $data['get_data'] = $this->model('m_ref_jenis_penggunaan')->get_all();
        $this->view('supervisor/jenispenggunaan/v_jenis_penggunaan', $data);
    }

    public function sektor_ekonomi_home()
    {
        $data['title'] = "Sektor Ekonomi";
        $data['nama_halaman'] = "Sektor Ekonomi";
        $data['get_data'] = $this->model('m_ref_sektor_ekonomi')->get_all();
        $this->view('supervisor/sektorekonomi/v_sektor_ekonomi', $data);
    }

    public function sistem_bunga_home()
    {
        $data['title'] = "Sistem Bunga";
        $data['nama_halaman'] = "Sistem Bunga";
        $data['get_data'] = $this->model('m_ref_sistem_bunga')->get_all();
        $this->view('supervisor/sistembunga/v_sistem_bunga', $data);
    }


    public function sistem_pembayaran_home()
    {
        $data['title'] = "Sistem Pembayaran";
        $data['nama_halaman'] = "Sistem Pembayaran";
        $data['get_data'] = $this->model('m_ref_sistem_pembayaran')->get_all();
        $this->view('supervisor/sistempembayaran/v_sistem_pembayaran', $data);
    }

    public function tujuan_penggunaan_kredit_home()
    {
        $data['title'] = "Tujuan Penggunaan Kredit";
        $data['nama_halaman'] = "Tujuan Penggunaan Kredit";
        $data['get_data'] = $this->model('m_ref_tujuan_penggunaan_kredit')->get_all();
        $this->view('supervisor/tujuanpenggunaankredit/v_tujuan_penggunaan_kredit', $data);
    }


    public function pengikatan_home()
    {
        $data['title'] = "Pengikatan";
        $data['nama_halaman'] = "Pengikatan";
        $data['get_data'] = $this->model('m_pengikatan')->get_all();
        $this->view('supervisor/pengikatan/v_pengikatan', $data);
    }


    public function marketing_create()
    {
        $data['title'] = "Marketing";
        $data['nama_halaman'] = "Marketing";


        $data['get_data'] = $this->model('m_marketing')->get_all_marketing_supervisor();

        $data['daftar_cabang'] = $this->daftar_cabang;
        $this->view('supervisor/marketing/v_marketing', $data);
    }



    // log supervisor


    public function log_simpan_user()
    {


        return $this->model('m_log')->log_simpan_user();
    }
}
