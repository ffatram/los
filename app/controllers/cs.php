


<?php

// if ($_SESSION['username'] != 'CS') {
//     header('Location:' . BASEURL . '/login');
// }

// session_start();

date_default_timezone_set('Asia/Makassar');
if (!isset($_SESSION['level'])) {
    // if ($_SESSION['level'] != 'CS') {
    //     header('Location:' . BASEURL . '/login');
    //     exit;
    // }

    header('Location:' . BASEURL . '/login');
    exit;
}



include 'ref_instansi.php';
include 'log.php';

include 'kreditonlineapi.php';

include 'ref_jaminan.php';

class cs extends Controller
{



    public function index()
    {
        header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
        exit;
    }




    public function simpan_data()
    {




        $data['nomor_urut'] = $this->model('m_cs')->get_nomor_urut_max();
        $no_permohonan_kredit  = $data['nomor_urut']['no_permohonan_kredit'];
        $urutan_terakhir = $data['nomor_urut']['urutan_terakhir'];
        $tahun_sebelumnya = substr($no_permohonan_kredit, 2, 2);

        $tahun_berikut = date('Y');
        $tahun_berikut = substr($tahun_berikut, 2);

        $_POST['kode_cabang'] = $_COOKIE['kode_cabang'];
        $_POST['user_create'] = $_COOKIE['username'];
        $_POST['tgl_create'] = date('Y-m-d H:i:s');


        if ($tahun_sebelumnya != $tahun_berikut) {
            $urutan_terakhir = 1;
            echo "<br>";
            echo "Beda : ";
            echo "<br>";
        } else {
            $urutan_terakhir = $urutan_terakhir + 1;
            echo "<br>";
            echo "Sama : ";
            echo "<br>";
        }


        $nomor_urut = sprintf('%05d', $urutan_terakhir);
        $no_permohonan_kredit_baru = $_COOKIE['kode_cabang'] . $tahun_berikut . $nomor_urut;



        $_POST['no_permohonan_kredit'] = $no_permohonan_kredit_baru;
        $_POST['urutan_terakhir'] = $urutan_terakhir;







        $_POST['plafond_dimohon'] = str_replace(".", "", $_POST['plafond_dimohon']);
        $_POST['nilai_jaminan'] = str_replace(".", "", $_POST['nilai_jaminan']);
        $_POST['penghasilan_pemohon'] = str_replace(".", "", $_POST['penghasilan_pemohon']);
        $_POST['penghasilan_pasangan'] = str_replace(".", "", $_POST['penghasilan_pasangan']);
        $_POST['penghasilan_tambahan'] = str_replace(".", "", $_POST['penghasilan_tambahan']);
        $_POST['penghasilan_tambahan_lainnya'] = str_replace(".", "", $_POST['penghasilan_tambahan_lainnya']);
        $_POST['biaya_hidup_perbulan'] = str_replace(".", "", $_POST['biaya_hidup_perbulan']);
        $_POST['biaya_pendidikan'] = str_replace(".", "", $_POST['biaya_pendidikan']);
        $_POST['biaya_pam_listrik_telepon'] = str_replace(".", "", $_POST['biaya_pam_listrik_telepon']);
        $_POST['biaya_transport'] = str_replace(".", "", $_POST['biaya_transport']);
        $_POST['angsuran_bank_lain'] = str_replace(".", "", $_POST['angsuran_bank_lain']);
        $_POST['angsuran_perumahan'] = str_replace(".", "", $_POST['angsuran_perumahan']);
        $_POST['angsuran_kendaraan'] = str_replace(".", "", $_POST['angsuran_kendaraan']);
        $_POST['angsuran_barang_elektronik'] = str_replace(".", "", $_POST['angsuran_barang_elektronik']);
        $_POST['angsuran_koperasi'] = str_replace(".", "", $_POST['angsuran_koperasi']);
        $_POST['biaya_lainnya'] = str_replace(".", "", $_POST['biaya_lainnya']);


        if ($_POST['status_perkawinan'] != 'MENIKAH') {
            $_POST['nama_pasangan'] = '';
            $_POST['tempat_lahir_pasangan'] = '';
            $_POST['tgl_lahir_pasangan'] = null;
            $_POST['no_ktp_pasangan'] = '';
            $_POST['alamat_ktp_pasangan'] = '';
            $_POST['alamat_sekarang_pasangan'] = '';
            $_POST['telepon_pasangan'] = '';
            $_POST['jenis_pekerjaan_pasangan'] = '';
            $_POST['nama_instansi_pasangan'] = '';
            $_POST['tahun_mulai_bekerja_pasangan'] = '';
            $_POST['jabatan_saat_ini_pasangan'] = '';
            $_POST['alamat_kantor_pasangan'] = '';
            $_POST['telepon_kantor_pasangan'] = '';
            $_POST['penghasilan_pasangan'] = 0;
        }



        if (isset($_POST['tgl_lahir_pasangan'])) {
            $a  = $_POST['tgl_lahir_pasangan'];
            $b = explode("/", $a);
            $_POST['tgl_lahir_pasangan'] = $b[2] . '-' . $b[1]  . '-' . $b[0];
        } else {
            $_POST['tgl_lahir_pasangan'] = null;
        }





        $a  = $_POST['tgl_lahir_pemohon'];
        $b = explode("/", $a);
        $_POST['tgl_lahir_pemohon'] = $b[2] . '-' . $b[1]  . '-' . $b[0];

        $a  = $_POST['tanggal_permohonan'];
        $b = explode("/", $a);
        $_POST['tanggal_permohonan'] = $b[2] . '-' . $b[1]  . '-' . $b[0];

        $a  = $_POST['kode_instansi'];
        $b = explode("##", $a);
        $_POST['kode_instansi'] = $b[0];

        $_POST['lokasi_berkas'] = "SLIK";


        $_POST['kredit_online'] = '';



        if ($this->model('m_cs')->simpan_data($_POST) > 0 && $this->model('m_log')->simpan_pemohon($_POST) > 0) {
            echo "berhasil";
            header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
            exit;
        } else {
            echo "gagal input data cs";
        }
    }

    public function simpan_data2()
    {
        $data['nomor_urut'] = $this->model('m_cs')->get_nomor_urut_max();
        $no_permohonan_kredit  = $data['nomor_urut']['no_permohonan_kredit'];
        $urutan_terakhir = $data['nomor_urut']['urutan_terakhir'];
        $tahun_sebelumnya = substr($no_permohonan_kredit, 2, 2);

        $tahun_berikut = date('Y');
        $tahun_berikut = substr($tahun_berikut, 2);

        $_POST['kode_cabang'] = $_COOKIE['kode_cabang'];
        $_POST['user_create'] = $_COOKIE['username'];
        $_POST['tgl_create'] = date('Y-m-d H:i:s');


        if ($tahun_sebelumnya != $tahun_berikut) {
            $urutan_terakhir = 1;
        } else {
            $urutan_terakhir = $urutan_terakhir + 1;
        }






        $nomor_urut = sprintf('%05d', $urutan_terakhir);
        $no_permohonan_kredit_baru = $_COOKIE['kode_cabang'] . $tahun_berikut . $nomor_urut;



        $_POST['no_permohonan_kredit'] = $no_permohonan_kredit_baru;
        $_POST['urutan_terakhir'] = $urutan_terakhir;

        $_POST['lokasi_berkas'] = "SLIK";





        $_POST['kredit_online'] = 'YA';

        if ($this->model('m_cs')->simpan_data($_POST) > 0 && $this->model('m_log')->simpan_pemohon($_POST) > 0) {
            $datas = json_encode(['message' => 'success', 'no_permohonan_kredit' => $no_permohonan_kredit_baru]);
        } else {
            $datas = json_encode(['message' => 'gagal', 'no_permohonan_kredit' => $no_permohonan_kredit_baru]);
        }


        echo $datas;
    }


    public function get_image()
    {

        $no_ktp = '7371122105920001_KK_20231222_161216.pdf';

        $flask_url = "http://192.168.51.91:5000/get-file/" . $no_ktp;

        $data = $flask_url;



        $this->view('cs/tesimage', $data);
    }


    public function get_image2()
    {
        // Mendapatkan nama file dari parameter query string
        $filename = '122222_KK_20231222_145501.png';

        // Ganti 'path_to_flask_app' dengan path ke direktori Flask app
        $flask_app_path = './files/';

        // Konstruksi URL endpoint Flask
        $flask_endpoint = 'http://localhost:5000/get_file/' . $filename;

        // Baca konten file dari Flask menggunakan cURL
        $ch = curl_init($flask_endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $file_content = curl_exec($ch);
        curl_close($ch);

        // Menampilkan konten file gambar dalam halaman HTML
        echo '<html>';
        echo '<head><title>Image Viewer</title></head>';
        echo '<body>';
        echo '<h1>Image:</h1>';
        // Menampilkan gambar menggunakan elemen <img>
        echo '<img src="data:image/jpeg;base64,' . base64_encode($file_content) . '" alt="Image">';
        echo '</body>';
        echo '</html>';
    }




    public function update()
    {

        // mengubah angka menjadi format uang

        $plafond_dimohon = $_POST['plafond_dimohon'];
        $plafond_dimohon = str_replace(".", "", $plafond_dimohon);
        $_POST['plafond_dimohon'] = $plafond_dimohon;
        $_POST['nilai_jaminan'] = str_replace(".", "", $_POST['nilai_jaminan']);
        $_POST['penghasilan_pemohon'] = str_replace(".", "", $_POST['penghasilan_pemohon']);
        $_POST['penghasilan_pasangan'] = str_replace(".", "", $_POST['penghasilan_pasangan']);
        $_POST['penghasilan_tambahan'] = str_replace(".", "", $_POST['penghasilan_tambahan']);
        $_POST['penghasilan_tambahan_lainnya'] = str_replace(".", "", $_POST['penghasilan_tambahan_lainnya']);
        $_POST['biaya_hidup_perbulan'] = str_replace(".", "", $_POST['biaya_hidup_perbulan']);
        $_POST['biaya_pendidikan'] = str_replace(".", "", $_POST['biaya_pendidikan']);
        $_POST['biaya_pam_listrik_telepon'] = str_replace(".", "", $_POST['biaya_pam_listrik_telepon']);
        $_POST['biaya_transport'] = str_replace(".", "", $_POST['biaya_transport']);
        $_POST['angsuran_bank_lain'] = str_replace(".", "", $_POST['angsuran_bank_lain']);
        $_POST['angsuran_perumahan'] = str_replace(".", "", $_POST['angsuran_perumahan']);
        $_POST['angsuran_kendaraan'] = str_replace(".", "", $_POST['angsuran_kendaraan']);
        $_POST['angsuran_barang_elektronik'] = str_replace(".", "", $_POST['angsuran_barang_elektronik']);
        $_POST['angsuran_koperasi'] = str_replace(".", "", $_POST['angsuran_koperasi']);
        $_POST['biaya_lainnya'] = str_replace(".", "", $_POST['biaya_lainnya']);

        // tambahan

        $_POST['user_edit'] = $_COOKIE['username'];
        $_POST['tgl_edit'] = date('Y-m-d H:i:s');


        // if (isset($_POST['batal_permohonan'])) {
        //     $_POST['tanggal_batal'] = date('Y-m-d H:i:s');
        // } else {
        //     $_POST['tanggal_batal'] = null;
        // }






        if ($_POST['status_perkawinan'] != 'MENIKAH') {
            $_POST['nama_pasangan'] = '';
            $_POST['tempat_lahir_pasangan'] = '';
            $_POST['tgl_lahir_pasangan'] = null;
            $_POST['no_ktp_pasangan'] = '';
            $_POST['alamat_ktp_pasangan'] = '';
            $_POST['alamat_sekarang_pasangan'] = '';
            $_POST['telepon_pasangan'] = '';
            $_POST['jenis_pekerjaan_pasangan'] = '';
            $_POST['nama_instansi_pasangan'] = '';
            $_POST['tahun_mulai_bekerja_pasangan'] = '';
            $_POST['jabatan_saat_ini_pasangan'] = '';
            $_POST['alamat_kantor_pasangan'] = '';
            $_POST['telepon_kantor_pasangan'] = '';
            $_POST['penghasilan_pasangan'] = 0;
        }



        $a  = $_POST['tgl_lahir_pemohon'];
        $b = explode("/", $a);
        $_POST['tgl_lahir_pemohon'] = $b[2] . '-' . $b[1]  . '-' . $b[0];



        if ($_POST['tgl_lahir_pasangan'] != '') {
            $a  = $_POST['tgl_lahir_pasangan'];
            $b = explode("/", $a);
            $_POST['tgl_lahir_pasangan'] = $b[2] . '-' . $b[1]  . '-' . $b[0];
        }



        $a  = $_POST['tanggal_permohonan'];
        $b = explode("/", $a);
        $_POST['tanggal_permohonan'] = $b[2] . '-' . $b[1]  . '-' . $b[0];

        $a  = $_POST['kode_instansi'];
        $b = explode("##", $a);
        $_POST['kode_instansi'] = $b[0];




        // $update['1'] = $this->model('m_cs')->update();
        // $update['2'] = $this->model('m_log')->update();



        if ($this->model('m_cs')->update($_POST) > 0 && $this->model('m_log')->update_pemohon($_POST) > 0) {
            header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
            exit;
        } else {
            header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
            exit;
        }
    }





    function lihat_data()
    {
        $data['lihat_data'] = $this->model('m_cs')->lihat_data();
        return $data['lihat_data'];
    }

    public function cari_data_credit_all()
    {


        if (isset($_POST['btn_hari_ini'])) {
            $_SESSION['btn_hari_ini'] = 'btn_hari_ini';

            header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
            exit;
        } else if (isset($_POST['btn_bulan_ini'])) {
            $_SESSION['btn_bulan_ini'] = 'btn_bulan_ini';
            header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
            exit;
        } else if (isset($_POST['btn_tahun_ini'])) {

            $_SESSION['btn_tahun_ini'] = 'btn_tahun_ini';
            header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
            exit;
        } else if (isset($_POST['btn_semuanya'])) {
            $_SESSION['btn_semuanya'] = 'btn_semuanya';
            header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
            exit;
        } else if (isset($_POST['btn_pending'])) {
            $_SESSION['btn_pending'] = 'btn_pending';
            header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
            exit;
        } else if (isset($_POST['btn_cari'])) {
            $_SESSION['data_cari'] = $_POST['data_cari'];
            $_SESSION['btn_cari'] = $_POST['btn_cari'];
            header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
            exit;
        }
    }


    // menu enquery

    public function cari_data_credit_all_2()
    {
        if (isset($_POST['btn_hari_ini'])) {
            $_SESSION['btn_hari_ini'] = 'btn_hari_ini';
            header('Location:' . BASEURL . '/cs/enquery');
            exit;
        } else if (isset($_POST['btn_bulan_ini'])) {
            $_SESSION['btn_bulan_ini'] = 'btn_bulan_ini';
            header('Location:' . BASEURL . '/cs/enquery');
            exit;
        } else if (isset($_POST['btn_tahun_ini'])) {

            $_SESSION['btn_tahun_ini'] = 'btn_tahun_ini';
            header('Location:' . BASEURL . '/cs/enquery');
            exit;
        } else if (isset($_POST['btn_semuanya'])) {
            $_SESSION['btn_semuanya'] = 'btn_semuanya';
            header('Location:' . BASEURL . '/cs/enquery');
            exit;
        } else if (isset($_POST['btn_pending'])) {
            $_SESSION['btn_pending'] = 'btn_pending';
            header('Location:' . BASEURL . '/cs/enquery');
            exit;
        } else if (isset($_POST['btn_cari'])) {
            $_SESSION['data_cari'] = $_POST['data_cari'];
            $_SESSION['btn_cari'] = $_POST['btn_cari'];
            header('Location:' . BASEURL . '/cs/enquery');
            exit;
        }
    }




    // json lihat detail

    public function detail_data_kredit()
    {
        // $data = $_POST['no_permohonan_kredit'];


        $data['data_kredit'] = $this->model('m_cs')->detail_data_kredit($_POST);
        echo $data['data_kredit'];
        // json_encode($data['data_kredit']);
    }

    // modal detail yang fix
    public function modal_detail()
    {

        $data['detail'] = $this->model('m_cs')->modal_detail($_POST);
        $this->view('cs/v_modal_detail', $data);
    }

    public function data_debitu()
    {
        $data['detail'] = $this->model('m_cs')->modal_detail($_POST);
        $this->view('cs/v_modal_detail', $data);
    }


    public function edit($id)
    {
        echo $id;

        $_SESSION["edit_cs"] = "1";
        $_SESSION['id']     = $id;

        header('Location:' . BASEURL . '/cs');
        exit;
    }


    public function delete()
    {
        // $_POST['id'] = $id;
        $_POST['no_permohonan_kredit'];


        if ($this->model('m_cs')->delete($_POST) > 0 && $this->model('m_log')->hapus_pemohon($_POST) > 0) {
            echo "sukses";
        } else {
            echo "gagal";
        }
    }


    // ubah nama function

    public function input_permohonan_kredit()
    {

        $data['title'] = "Input Permohonan Kredit";
        $data['judul'] = "Input Permohonan Kredit";
        // tabel tujuan penggunaan kredit
        $data['get_all_tujuan_penggunaan_kredit'] = $this->model('m_cs')->get_all_tujuan_penggunaan_kredit();

        // ro
        $data['nama_ro'] = $this->model('m_ro')->get_all_ro();
        // marketing
        $data['nama_marketing'] = $this->model('m_marketing')->get_all_marketing();
        $data['jenis_pekerjaan'] = $this->model('m_jenis_pekerjaan')->get_all_jenis_pekerjaan();

        // type_kredit
        $data['tipe_kredit'] = $this->model('m_tipe_kredit')->get_all_tipe_kredit();


        // ref_instansi
        $ref_instansi = new ref_instansi();
        $data['ref_instansi'] = $ref_instansi->get_all();

        $ref_jaminan = new ref_jaminan();
        $data['ref_jaminan'] = $ref_jaminan->getAll();


        $this->view('cs/v_input_permohonan_kredit', $data);
    }

    public function edit_permohonan_kredit($id)
    {
        $data['title'] = "Edit Permohonan Kredit";
        $data['judul'] = "Edit Permohonan Kredit";
        $_POST['no_permohonan_kredit'] =  $id;
        // ro
        $data['nama_ro'] = $this->model('m_ro')->get_all_ro();
        // marketing
        $data['nama_marketing'] = $this->model('m_marketing')->get_all_marketing();
        $data['jenis_pekerjaan'] = $this->model('m_jenis_pekerjaan')->get_all_jenis_pekerjaan();

        // type_kredit
        $data['tipe_kredit'] = $this->model('m_tipe_kredit')->get_all_tipe_kredit();


        $data['data_kredit'] =  $this->model('m_cs')->lihat_data_kredit_id($_POST);
        $data['get_all_tujuan_penggunaan_kredit'] = $this->model('m_cs')->get_all_tujuan_penggunaan_kredit();


        $ref_instansi = new ref_instansi();
        $data['ref_instansi'] = $ref_instansi->get_all();

        
        $ref_jaminan = new ref_jaminan();
        $data['ref_jaminan'] = $ref_jaminan->getAll();



        $this->view('cs/v_edit_permohonan_kredit', $data);
    }

    public function daftar_permohonan_kredit()
    {



        if (isset($_SESSION['btn_hari_ini'])) {
            $data['title'] = "Daftar Permohonan Kredit";
            $data['judul'] = "Daftar Permohonan Kredit";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_hari_ini();
            $this->view('cs/v_daftar_permohonan_kredit', $data);
            unset($_SESSION['btn_hari_ini']);
        } else if (isset($_SESSION['btn_bulan_ini'])) {
            $data['title'] = "Daftar Permohonan Kredit";
            $data['judul'] = "Daftar Permohonan Kredit";
            $data['data_kredit'] = $this->model('m_cs')->btn_bulan_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_bulan_ini();
            $this->view('cs/v_daftar_permohonan_kredit', $data);
            unset($_SESSION['btn_bulan_ini']);
        } else if (isset($_SESSION['btn_tahun_ini'])) {
            $data['title'] = "Daftar Permohonan Kredit";
            $data['judul'] = "Daftar Permohonan Kredit";
            $data['data_kredit'] = $this->model('m_cs')->btn_tahun_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_tahun_ini();
            $this->view('cs/v_daftar_permohonan_kredit', $data);
            unset($_SESSION['btn_tahun_ini']);
        } else if (isset($_SESSION['btn_semuanya'])) {
            $data['title'] = "Daftar Permohonan Kredit";
            $data['judul'] = "Daftar Permohonan Kredit";
            $data['data_kredit'] = $this->model('m_cs')->lihat_data_kredit();
            $data['jumlah_record'] = $this->model('m_cs')->count_lihat_data_kredit();
            $this->view('cs/v_daftar_permohonan_kredit', $data);
            unset($_SESSION['btn_semuanya']);
        } else if (isset($_SESSION['btn_pending'])) {

            $data['title'] = "Daftar Permohonan Kredit";
            $data['judul'] = "Daftar Permohonan Kredit";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();

            $this->view('cs/v_daftar_permohonan_kredit', $data);
            unset($_SESSION['btn_pending']);
        } else if (isset($_SESSION['btn_cari'])) {
            $data['title'] = "Daftar Permohonan Kredit";
            $data['judul'] = "Daftar Permohonan Kredit";

            if ($_SESSION['data_cari'] != '') {
                $data['data_kredit'] = $this->model('m_cs')->btn_cari();
                $data['jumlah_record'] = $this->model('m_cs')->count_btn_cari();
            }

            $this->view('cs/v_daftar_permohonan_kredit', $data);
            unset($_SESSION['btn_cari']);
        } else {
            $data['title'] = "Daftar Permohonan Kredit";
            $data['judul'] = "Daftar Permohonan Kredit";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $this->view('cs/v_daftar_permohonan_kredit', $data);
        }
    }

    public function cari_ktp()
    {

        $data['judul'] = 'Cari No KTP PEMOHON';
        $data['title'] = 'Cari No KTP PEMOHON';


        if (isset($_COOKIE['no_ktp'])) {
            // echo  $_COOKIE['no_ktp'];
            $_POST['no_ktp'] =  $_COOKIE['no_ktp'];
            $data['m_cari_ktp'] = $this->model('m_cs')->cari_ktp($_POST);
            $data['hasil'] = $this->model('m_cs')->rowCount_cari_ktp($_POST);
            // setcookie('no_ktp',  "kosong", time() + (60 * 60 * 60), '/');

            $this->view('cs/v_cari_ktp', $data);
        } else {
            setcookie('no_ktp',  "kosong", time() + (60 * 60 * 60), '/');
            $this->view('template/nav_cs', $data);
            $this->view('cs/v_cari_ktp', $data);
            $this->view('template/foot_cs');
        }
    }

    public function hasil_cari_ktp()
    {


        if ($_POST['no_ktp'] != "") {
            setcookie('no_ktp',  $_POST['no_ktp'], time() + (60 * 60 * 60), '/');
            header('Location:' . BASEURL . '/cs/cari_ktp');
            exit;
        } else {
            setcookie('no_ktp',  "kosong", time() + (60 * 60 * 60), '/');
            header('Location:' . BASEURL . '/cs/cari_ktp');
            exit;
        }
    }

    public function input_permohonan_kredit_lama()
    {


        $data['judul'] = "Input Permohonan Kredit";
        $_POST['no_ktp_pemohon'] = $_COOKIE['no_ktp'];
        $data['nama_ro'] = $this->model('m_ro')->get_all_ro();
        $data['nama_marketing'] = $this->model('m_marketing')->get_all_marketing();
        $data['get_all_tujuan_penggunaan_kredit'] = $this->model('m_cs')->get_all_tujuan_penggunaan_kredit();
        $data['jenis_pekerjaan'] = $this->model('m_jenis_pekerjaan')->get_all_jenis_pekerjaan();
        $data['tipe_kredit'] = $this->model('m_tipe_kredit')->get_all_tipe_kredit();
        $data['data_kredit'] =  $this->model('m_cs')->get_pemohon_where_no_ktp($_POST);

        $ref_instansi = new ref_instansi();
        $data['ref_instansi'] = $ref_instansi->get_all();

        $ref_jaminan = new ref_jaminan();
        $data['ref_jaminan'] = $ref_jaminan->getAll();

        $this->view('cs/v_input_permohonan_kredit_lama', $data);
    }

    public function simpan_input_permohonan_kredit_lama()
    {
        $data['nomor_urut'] = $this->model('m_cs')->get_nomor_urut_max();

        $no_permohonan_kredit  = $data['nomor_urut']['no_permohonan_kredit'];
        $urutan_terakhir = $data['nomor_urut']['urutan_terakhir'];

        $tahun_sebelumnya = substr($no_permohonan_kredit, 2, 2);
        $kode_cabang_sebelum   = $data['nomor_urut']['kode_cabang'];

        $tahun_berikut = date('Y');
        $tahun_berikut = substr($tahun_berikut, 2);



        $_POST['kode_cabang'] = $_COOKIE['kode_cabang'];
        $_POST['user_create'] = $_COOKIE['username'];
        $_POST['tgl_create'] = date('Y-m-d H:i:s');


        if ($tahun_sebelumnya != $tahun_berikut) {
            $urutan_terakhir = 1;
            echo "<br>";
            echo "Beda : ";
            echo "<br>";
        } else {
            $urutan_terakhir = $urutan_terakhir + 1;
            echo "<br>";
            echo "Sama : ";
            echo "<br>";
        }


        $nomor_urut = sprintf('%05d', $urutan_terakhir);

        $no_permohonan_kredit_baru = $_COOKIE['kode_cabang'] . $tahun_berikut . $nomor_urut;



        $_POST['no_permohonan_kredit_baru'] = $no_permohonan_kredit_baru;
        $_POST['urutan_terakhir'] = $urutan_terakhir;




        $_POST['plafond_dimohon'] = str_replace(".", "", $_POST['plafond_dimohon']);
        $_POST['nilai_jaminan'] = str_replace(".", "", $_POST['nilai_jaminan']);
        $_POST['penghasilan_pemohon'] = str_replace(".", "", $_POST['penghasilan_pemohon']);
        $_POST['penghasilan_pasangan'] = str_replace(".", "", $_POST['penghasilan_pasangan']);
        $_POST['penghasilan_tambahan'] = str_replace(".", "", $_POST['penghasilan_tambahan']);
        $_POST['penghasilan_tambahan_lainnya'] = str_replace(".", "", $_POST['penghasilan_tambahan_lainnya']);
        $_POST['biaya_hidup_perbulan'] = str_replace(".", "", $_POST['biaya_hidup_perbulan']);
        $_POST['biaya_pendidikan'] = str_replace(".", "", $_POST['biaya_pendidikan']);
        $_POST['biaya_pam_listrik_telepon'] = str_replace(".", "", $_POST['biaya_pam_listrik_telepon']);
        $_POST['biaya_transport'] = str_replace(".", "", $_POST['biaya_transport']);
        $_POST['angsuran_bank_lain'] = str_replace(".", "", $_POST['angsuran_bank_lain']);
        $_POST['angsuran_perumahan'] = str_replace(".", "", $_POST['angsuran_perumahan']);
        $_POST['angsuran_kendaraan'] = str_replace(".", "", $_POST['angsuran_kendaraan']);
        $_POST['angsuran_barang_elektronik'] = str_replace(".", "", $_POST['angsuran_barang_elektronik']);
        $_POST['angsuran_koperasi'] = str_replace(".", "", $_POST['angsuran_koperasi']);
        $_POST['biaya_lainnya'] = str_replace(".", "", $_POST['biaya_lainnya']);


        if ($_POST['status_perkawinan'] != 'MENIKAH') {
            $_POST['nama_pasangan'] = '';
            $_POST['tempat_lahir_pasangan'] = '';
            $_POST['tgl_lahir_pasangan'] = null;
            $_POST['no_ktp_pasangan'] = '';
            $_POST['alamat_ktp_pasangan'] = '';
            $_POST['alamat_sekarang_pasangan'] = '';
            $_POST['telepon_pasangan'] = '';
            $_POST['jenis_pekerjaan_pasangan'] = '';
            $_POST['nama_instansi_pasangan'] = '';
            $_POST['tahun_mulai_bekerja_pasangan'] = '';
            $_POST['jabatan_saat_ini_pasangan'] = '';
            $_POST['alamat_kantor_pasangan'] = '';
            $_POST['telepon_kantor_pasangan'] = '';
            $_POST['penghasilan_pasangan'] = 0;
        }

        $_POST['lokasi_berkas'] = "SLIK";





        if ($this->model('m_cs')->simpan_data($_POST) > 0 && $this->model('m_log')->simpan_pemohon($_POST) > 0) {
            header('Location:' . BASEURL . '/cs/daftar_permohonan_kredit');
            exit;
        } else {
            echo "gagal input data cs";
        }
    }

    public function laporan_cs()
    {

        $data['judul'] = 'Cetak Laporan Permohonan Kredit';
        $data['title'] = 'Cetak Laporan Permohonan Kredit';


        $data['cabang'] = $this->model('m_cabang')->daftar_cabang();




        $this->view('cs/v_laporan_cs', $data);
    }


    public function cek_laporan_cs()
    {

        if (isset($_POST['btn_cetak_rekap'])) {

            $data['dari_sampai']    = $_POST['dari_tanggal'];
            $data['sampai_tanggal'] = $_POST['sampai_tanggal'];
            $data['hasil_laporan_cs'] = $this->model('m_cs')->cek_laporan_cs($_POST);
            $this->view('cs/v_cetak_laporan_kredit', $data);
        } else if (isset($_POST['btn_cetak_cair'])) {
            $data['dari_sampai']    = $_POST['dari_tanggal'];
            $data['sampai_tanggal'] = $_POST['sampai_tanggal'];

            $data['hasil_laporan_cs'] = $this->model('m_cs')->cetak_cair_cs($_POST);

            $this->view('cs/v_cetak_cair_cs', $data);
        } else if (isset($_POST['btn_cetak_tolak'])) {

            $data['dari_sampai']    = $_POST['dari_tanggal'];
            $data['sampai_tanggal'] = $_POST['sampai_tanggal'];

            $data['hasil_laporan_cs'] = $this->model('m_cs')->cetak_tolak_cs($_POST);

            $this->view('cs/v_cetak_tolak_cs', $data);
        } else if (isset($_POST['btn_cetak_batal'])) {

            $data['dari_sampai']    = $_POST['dari_tanggal'];
            $data['sampai_tanggal'] = $_POST['sampai_tanggal'];

            $data['hasil_laporan_cs'] = $this->model('m_cs')->cetak_batal_cs($_POST);

            $this->view('cs/v_cetak_batal_cs', $data);
        } else if (isset($_POST['btn_cetak_pending'])) {

            $data['dari_sampai']    = $_POST['dari_tanggal'];
            $data['sampai_tanggal'] = $_POST['sampai_tanggal'];

            $data['hasil_laporan_cs'] = $this->model('m_cs')->cetak_pending_cs($_POST);

            $this->view('cs/v_cetak_pending_cs', $data);
        }
    }

    public function temp()
    {

        $_POST['dari_tanggal']   = $_COOKIE['dari_tanggal'];
        $_POST['sampai_tanggal'] = $_COOKIE['sampai_tanggal'];
        $data['hasil_laporan_cs'] = $this->model('m_cs')->cek_laporan_cs($_POST);
        if (isset($_POST['dari_tanggal']) and isset($_POST['sampai_tanggal'])) {


            $data['dari_sampai']    = $_POST['dari_tanggal'];
            $data['sampai_tanggal'] = $_POST['sampai_tanggal'];
            $data['hasil_laporan_cs'] = $this->model('m_cs')->cek_laporan_cs($_POST);


            // $this->view('template/nav_cs', $data);
            $this->view('cs/v_cetak_laporan_kredit', $data);
            // $this->view('template/foot_cs');
        }
    }


    public function modal_log_cs()
    {
        // $data['modal_log'] = $this->model('m_cs')->modal_log($_POST);
        // $this->view('cs/v_modal_log', $data);

        $data = new log();
        $data->index();
    }



    public function beranda()
    {

        $data['permohonan_bulan_ini'] = $this->model('m_cs')->permohonan_bulan_ini();
        $data['pencairan_bulan_ini'] = $this->model('m_cs')->pencairan_bulan_ini();
        $data['batal_bulan_ini'] = $this->model('m_cs')->batal_bulan_ini();
        $data['tolak_bulan_ini'] = $this->model('m_cs')->tolak_bulan_ini();
        $data['pending_bulan_ini'] = $this->model('m_cs')->pending_bulan_ini();
        $data['update'] = $this->model("m_tbl_informasi")->getInformasi();
        $data['quote'] = $this->model("m_tbl_quote")->getQuote();
        $this->view('cs/v_beranda', $data);
    }




    public function hasil_export_csv()
    {


        // $result = $this->model('m_cs')->export_csv($_POST);

        // $filename = 'DAFTAR-PERMOHONAN_KREDIT' . date('d-m-Y') . '.xls';
        // $delimiter = '|';

        // header("Content-type: application/vnd-ms-excel");
        // header('Content-Disposition: attachment; filename=' . $filename);


        // header('Pragma: no-cache');
        // header("Expires: 0");

        // $file = fopen('php://output', 'wb');


        // fputcsv($file,  array_keys($result[0]), $delimiter);
        // foreach ($result as $line) {
        //     fputcsv($file,  $line, $delimiter);
        // }
        // fclose($file);
        // exit;

        $data = $this->model('m_cs')->export_csv($_POST);
        $this->view('export/csv/cs_csv', $data);
    }


    public function laporan_log_user()
    {


        $this->view('cs/v_laporan_log_user');
    }


    public function log_user()
    {

        $data['log'] = $this->model('m_cs')->log_user($_POST);
        $this->view('cs/v_log_user', $data);
    }

    public function modal_riwayat()
    {

        $_POST['no_ktp'] = $_POST['id'];

        $data['modal_riwayat'] = $this->model('m_cs')->cari_ktp();

        $this->view('cs/v_modal_riwayat', $data);
    }

    public function enquery()
    {

        if (isset($_SESSION['btn_hari_ini'])) {
            $data['title'] = "Menu Enquery";
            $data['judul'] = "Menu Enquery";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_hari_ini();
            $this->view('cs/v_enquery', $data);
            unset($_SESSION['btn_hari_ini']);
        } else if (isset($_SESSION['btn_bulan_ini'])) {
            $data['title'] = "Menu Enquery";
            $data['judul'] = "Menu Enquery";
            $data['data_kredit'] = $this->model('m_cs')->btn_bulan_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_bulan_ini();
            $this->view('cs/v_enquery', $data);
            unset($_SESSION['btn_bulan_ini']);
        } else if (isset($_SESSION['btn_tahun_ini'])) {
            $data['title'] = "Menu Enquery";
            $data['judul'] = "Menu Enquery";
            $data['data_kredit'] = $this->model('m_cs')->btn_tahun_ini();
            $data['jumlah_record'] = $this->model('m_cs')->count_btn_tahun_ini();
            $this->view('cs/v_enquery', $data);
            unset($_SESSION['btn_tahun_ini']);
        } else if (isset($_SESSION['btn_semuanya'])) {
            $data['title'] = "Menu Enquery";
            $data['judul'] = "Menu Enquery";
            $data['data_kredit'] = $this->model('m_cs')->lihat_data_kredit();
            $data['jumlah_record'] = $this->model('m_cs')->count_lihat_data_kredit();
            $this->view('cs/v_enquery', $data);
            unset($_SESSION['btn_semuanya']);
        } else if (isset($_SESSION['btn_pending'])) {

            $data['title'] = "Menu Enquery";
            $data['judul'] = "Menu Enquery";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();

            $this->view('cs/v_enquery', $data);
            unset($_SESSION['btn_pending']);
        } else if (isset($_SESSION['btn_cari'])) {
            $data['title'] = "Menu Enquery";
            $data['judul'] = "Menu Enquery";

            if ($_SESSION['data_cari'] != '') {
                $data['data_kredit'] = $this->model('m_cs')->btn_cari();
                $data['jumlah_record'] = $this->model('m_cs')->count_btn_cari();
            }

            $this->view('cs/v_enquery', $data);
            unset($_SESSION['btn_cari']);
        } else {
            $data['title'] = "Menu Enquery";
            $data['judul'] = "Menu Enquery";
            $data['data_kredit'] = $this->model('m_cs')->btn_hari_ini();
            $this->view('cs/v_enquery', $data);
        }
    }

    public function tesss()
    {
    }



    // bagian fungsi ini untuk cek apakah data yang dihapus ada di tbl slik
    public function  cek_btn_hapus()
    {

        $data['1'] = $this->model('m_cs')->cek_btn_hapus();
        if ($data['1'] > 0) {
            echo '1';
        } else {
            echo "0";
        }
    }


    public function get_nama_pemohon_where_id()
    {
        $data = $this->model('m_cs')->get_nama_pemohon_where_id();

        return $data;
    }

    public function export_csv()
    {

        if ($_COOKIE['level'] == "SKAI" || $_COOKIE['level'] == "KOMITE") {
            $data['cabang'] = $this->model('m_cabang')->daftar_cabang();
            $this->view('cs/v_export_csv', $data);
        } else {
            $data = $this->model('m_ro')->get_all_ro();
            $this->view('cs/v_export_csv', $data);
        }
    }



    public function get_load_csv()
    {

        $data = $this->model('m_cs')->export_csv();
        $rows = array();
        $rows2 = array();
        foreach ($data as $row) :
            $rows['no_permohonan_kredit'] = $row['no_permohonan_kredit'];
            $rows['nama_pemohon'] = $row['nama_pemohon'];
            $rows['instansi'] = $row['nama_instansi'];
            $rows['plafond'] = number_format(($row['plafond_dimohon']), 0, ",", ".");
            $rows['jangka_waktu'] = $row['jangka_waktu'];
            $rows['jenis_permohonan'] =  $row['jenis_permohonan'];
            $rows['id_analis'] =  $row['id_analis'];
            $rows['marketing'] =  $row['id_marketing'];
            $rows['tanggal_permohonan'] = isset($row['tanggal_permohonan']) ? date('d-m-Y', strtotime($row['tanggal_permohonan'])) : '';
            $rows['tgl_slik'] = isset($row['tanggal_slik']) ? date('d-m-Y', strtotime($row['tanggal_slik'])) : '';
            $rows['tgl_wwc'] = isset($row['tanggal_wawancara']) ? date('d-m-Y', strtotime($row['tanggal_wawancara'])) : '';
            $rows['tanggal_komite'] = isset($row['tanggal_komite']) ? date('d-m-Y', strtotime($row['tanggal_komite'])) : '';
            $rows['tanggal_pencairan'] = isset($row['tanggal_pencairan']) ? date('d-m-Y', strtotime($row['tanggal_pencairan'])) : '';
            $rows['tanggal_tolak'] = isset($row['tanggal_tolak']) ? date('d-m-Y', strtotime($row['tanggal_tolak'])) : '';
            $rows['tanggal_batal'] = isset($row['tanggal_batal']) ? date('d-m-Y', strtotime($row['tanggal_batal'])) : '';

            if (isset($row['tanggal_pencairan'])) {
                $rows['status'] = "CAIR";
            } else if (isset($row['tanggal_tolak'])) {
                $rows['status'] = "TOLAK";
            } else if (isset($row['tanggal_batal'])) {
                $rows['status'] = "BATAL";
            } else {
                $rows['status'] = "PENDING";
            }
            $rows['lokasi_berkas'] =  $row['lokasi_berkas'];

            $rows2[] = $rows;
        endforeach;
        echo json_encode($rows2);
    }



    public function get_load_csv_all()
    {

        $data = $this->model('m_cs')->export_csv_all();
        $rows = array();
        $rows2 = array();
        foreach ($data as $row) :
            $rows['no_permohonan_kredit'] = $row['no_permohonan_kredit'];
            $rows['nama_pemohon'] = $row['nama_pemohon'];
            $rows['instansi'] = $row['nama_instansi'];
            $rows['plafond'] = $row['plafond_dimohon'];
            $rows['jangka_waktu'] = $row['jangka_waktu'];
            $rows['jenis_permohonan'] =  $row['jenis_permohonan'];
            $rows['id_analis'] =  $row['id_analis'];
            $rows['marketing'] =  $row['id_marketing'];
            $rows['tanggal_permohonan'] = isset($row['tanggal_permohonan']) ? date('d-m-Y', strtotime($row['tanggal_permohonan'])) : '';
            $rows['tgl_slik'] = isset($row['tanggal_slik']) ? date('d-m-Y', strtotime($row['tanggal_slik'])) : '';
            $rows['tgl_wwc'] = isset($row['tanggal_wawancara']) ? date('d-m-Y', strtotime($row['tanggal_wawancara'])) : '';
            $rows['tanggal_komite'] = isset($row['tanggal_komite']) ? date('d-m-Y', strtotime($row['tanggal_komite'])) : '';
            $rows['tanggal_pencairan'] = isset($row['tanggal_pencairan']) ? date('d-m-Y', strtotime($row['tanggal_pencairan'])) : '';
            $rows['tanggal_tolak'] = isset($row['tanggal_tolak']) ? date('d-m-Y', strtotime($row['tanggal_tolak'])) : '';
            $rows['tanggal_batal'] = isset($row['tanggal_batal']) ? date('d-m-Y', strtotime($row['tanggal_batal'])) : '';

            if (isset($row['tanggal_pencairan'])) {
                $rows['status'] = "CAIR";
            } else if (isset($row['tanggal_tolak'])) {
                $rows['status'] = "TOLAK";
            } else if (isset($row['tanggal_batal'])) {
                $rows['status'] = "BATAL";
            } else {
                $rows['status'] = "PENDING";
            }
            $rows['lokasi_berkas'] =  $row['lokasi_berkas'];

            $rows2[] = $rows;
        endforeach;
        echo json_encode($rows2);
    }

    public function save_storage()
    {

        $this->view('cs/save_storage');
    }





    // kredit online

    public function daftar_permohonan_kredit_online()
    {
        // Menampilkan view dengan data yang telah diambil dari API
        $this->view('cs/v_daftar_permohonan_kredit_online', $this->getdatatodaftar_permohonan_kredit_online());
    }

    function getdatatodaftar_permohonan_kredit_online()
    {
        $api = new kreditonlineapi();

        $datapermohonan = $api->getpermohonanwherecabang($_COOKIE['kode_cabang']);


        if ($datapermohonan === FALSE) {
            // echo "gagal";
            $data_api = [];
            $jumlahData = 0;
        } else {
            $data_api = json_decode($datapermohonan, TRUE);
            $jumlahData = count($data_api);
        }

        $data =
            [
                'title' => 'Kredit Online',
                'api' => $data_api
            ];

        // Menambahkan informasi jumlah data ke tampilan
        $data['jumlahData'] = $jumlahData;


        $data['get_all_tujuan_penggunaan_kredit'] = $this->model('m_cs')->get_all_tujuan_penggunaan_kredit();

        // ro
        $data['nama_ro'] = $this->model('m_ro')->get_all_ro();
        // marketing
        $data['nama_marketing'] = $this->model('m_marketing')->get_all_marketing();
        $data['jenis_pekerjaan'] = $this->model('m_jenis_pekerjaan')->get_all_jenis_pekerjaan();

        // type_kredit
        $data['tipe_kredit'] = $this->model('m_tipe_kredit')->get_all_tipe_kredit();


        // ref_instansi

        $ref_jaminan = new ref_jaminan();
        $data['ref_jaminan'] = $ref_jaminan->getAll();

        $ref_instansi = new ref_instansi();
        $data['ref_instansi'] = $ref_instansi->get_all();

        return $data;
    }



    public function datatojson_getdatatodaftar_permohonan_kredit_online()
    {

        header('Content-Type: application/json');
        echo json_encode($this->getdatatodaftar_permohonan_kredit_online());
    }


    public function cek_ktp_tbl_permohoan()
    {

        $data = $this->model('m_cs')->cari_ktp();
        echo count($data);
    }
}
