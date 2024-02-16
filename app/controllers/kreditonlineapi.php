<?php


class kreditonlineapi extends Controller
{


    public function getpermohonanwherecabang($kode_cabang)
    {
        $api = API_KREDIT_ONLINE;

        $dataurl = $api . '/api-permohonan-cabang/' . $kode_cabang;
        $data = @file_get_contents($dataurl);

        return $data;
    }



    public function getpermohonanwhereid($id)
    {
        $api = API_KREDIT_ONLINE;

        $dataurl = $api . '/api-permohonan/' . $id;
        $data = @file_get_contents($dataurl);

        $data = array(
            'data' => json_decode($data),
            'message' => 'success'
        );

        echo json_encode($data);
    }


    public function getImages($no_ktp_pemohon)
    {
        $api = API_KREDIT_ONLINE;

        $dataurl = $api . '/api-image' . '/' . $no_ktp_pemohon;
        $data = @file_get_contents($dataurl);

        echo $data;
    }

    public function saveimages($no_ktp_pemohon)
    {
        $api = API_KREDIT_ONLINE;

        $dataurl = $api . '/api-image' . '/' . $no_ktp_pemohon;
        $data = @file_get_contents($dataurl);
        $pesan = '';

        if ($data !== false) {
            // Memparsing data JSON
            $jsonData = json_decode($data, true);

            if (isset($jsonData['image_paths']) && is_array($jsonData['image_paths'])) {
                $targetFolder = 'upload/file_upload_wawancara/';

                // Pastikan folder target ada, jika tidak, buat folder tersebut
                if (!file_exists($targetFolder)) {
                    mkdir($targetFolder, 0777, true);
                }

            
                // Loop melalui setiap URL dan simpan file ke folder target
                foreach ($jsonData['image_paths'] as $imagePath) {
                    // Mendapatkan nama file dari URL
                    $fileName = basename($imagePath);

                    // Menggabungkan folder target dengan nama file
                    $filePath = $targetFolder . $fileName;

                    // Unduh file dari URL dan simpan ke folder target
                    file_put_contents($filePath, file_get_contents($imagePath));

                    // Menampilkan pesan bahwa file berhasil disimpan
                    $pesan = 'success';
                }

                echo json_encode(['message' => $pesan]);
            } else {
                echo json_encode(['message' => 'error', 'data'=>'format data json salah']);
            }
        } else {
            echo json_encode(['message' => $pesan,'data'=>'Gagal mengambil data dari API']);
        }
    }

    public function fileberkas($no_ktp_pemohon)
    {
        $api = API_KREDIT_ONLINE;

        $dataurl = $api . '/api-file-berkas' . '/' . $no_ktp_pemohon;
        $data = @file_get_contents($dataurl);

        echo $data;
    }


    public function destroydata($no_ktp_pemohon)
    {
        $api = API_KREDIT_ONLINE;

        try {

            $dataurl = $api . '/api-destroy-data' . '/' . $no_ktp_pemohon;
            $data = file_get_contents($dataurl);
            echo $data;
        } catch (\Exception $e) {
            echo 'Terjadi kesalahan: ' . $e->getMessage();
        }
    }
}
