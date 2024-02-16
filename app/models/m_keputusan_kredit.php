<?php


class m_keputusan_kredit
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Makassar');

        $this->db = new Database;
    }

    public function simpan_keputusan_kredit()
    {


        // echo "tes : " .
        //     $_POST['no_permohonan_kredit'] . " | " .
        //     $_POST['plafond_disetujui'] . " | " .
        //     $_POST['jangka_waktu'] . ' | ' .
        //     $_POST['suku_bunga'] . ' | ' .
        //     $_POST['penambahan'] . ' | ' .
        //     $_POST['provisi_kredit'] . ' | ' .
        //     $_POST['administrasi_kredit'] . ' | ' .
        //     $_POST['angsuran_perbulan'] . ' | ' .
        //     $_POST['tabungan'] . ' | ' .
        //     $_POST['biaya_notaris'] . ' | ' .
        //     $_POST['biaya_apht'] . ' | ' .
        //     $_POST['asuransi_kerugian'] . ' | ' .
        //     $_POST['dasar_pertimbangan_analis'];


        $query = "INSERT INTO tbl_keputusan_kredit 
        (
        no_permohonan_kredit,
        plafond,
        jangka_waktu,
        suku_bunga,
        status_cair,
        tgl_create
        ) 
        VALUES
        (
        :no_permohonan_kredit,               
        :plafond,
        :jangka_waktu,
        :suku_bunga,
        :status_cair,

        :tgl_create
        )";
        $this->db->query($query);
        $this->db->bind('no_permohonan_kredit',  $_POST['no_permohonan_kredit']);
        $this->db->bind('plafond',  $_POST['plafond']);
        $this->db->bind('jangka_waktu',  $_POST['jangka_waktu']);
        $this->db->bind('suku_bunga',  $_POST['suku_bunga']);
        $this->db->bind('status_cair',  'TIDAK');
        $this->db->bind('tgl_create',  date("Y-m-d H:i:s"));
        $this->db->execute();
        return $this->db->rowCount();
    }
}
