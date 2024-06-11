<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashing Alert</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS untuk animasi berkedip */
        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        .flashing-alert {
            animation: blink 3s infinite;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="alert alert-danger flashing-alert" role="alert">
            Permohonan pernah di tolak!!
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>