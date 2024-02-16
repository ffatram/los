<?php

class uploadfile extends Controller
{


    public function index()
    {
        $this->view("wawancara/upload_file");
    }

    public function upload()
    {


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $targetDir = "upload/";
            $originalFileName = $_FILES["uploadedFile"]["name"];
            $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));

            // Generate a unique filename to avoid overwriting existing files
            $newFileName = uniqid() . '.' . $fileExtension;
            $targetFile = $targetDir . $newFileName;

            $uploadOk = 1;

            // Check file size (1 GB)
            $maxFileSize = 1024 * 1024 * 1024; // 5 MB in bytes
            if ($_FILES["uploadedFile"]["size"] > $maxFileSize) {
                echo '<div class="alert alert-danger">Ukuran file terlalu besar. Ukuran maksimum yang diizinkan adalah 5 MB.</div>';
                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($targetFile)) {
                echo '<div class="alert alert-danger">Maaf, file dengan nama yang sama sudah ada.</div>';
                $uploadOk = 0;
            }

            // ... (kode lainnya)

            if ($uploadOk == 0) {
                echo '<div class="alert alert-danger">Maaf, file Anda tidak dapat diunggah.</div>';
            } else {
                if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $targetFile)) {
                    echo '<div class="alert alert-success">File ' . $originalFileName . ' berhasil diunggah dengan nama ' . $newFileName . '.</div>';
                } else {
                    echo '<div class="alert alert-danger">Maaf, terjadi kesalahan saat mengunggah file Anda.</div>';
                }
            }
        }
    }
}
