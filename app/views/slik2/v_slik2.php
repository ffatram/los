<!DOCTYPE html>
<html>
<head>
    <title>Unggah File JSON</title>
</head>
<body>
    <form action="<?= BASEURL; ?>/slik2/baca_text" method="post" enctype="multipart/form-data">
        Pilih file JSON untuk diunggah:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Unggah File" name="submit">
    </form>
</body>
</html>