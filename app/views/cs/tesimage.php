<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
</head>

<body>
    <?php
    if (!empty($data)) {
    ?>

        <img src="<?= $data ?>" alt="" alt="Pratinjau Gambar" style="max-width: 100%; height: auto;">

    <?php } else { ?>
    
        <p>Tidak Ada Gambar</p>

    <?php } ?>


</body>

</html>