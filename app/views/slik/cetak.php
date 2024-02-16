<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/css/print.css" media="print">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Table cetak </h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Nama
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Nama
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                halo
                            </td>
                            <td>
                                halo
                            </td>
                            <td>
                                halo
                            </td>
                        </tr>
                        <tr>
                            <td>
                                halo
                            </td>
                            <td>
                                halo
                            </td>
                            <td>
                                halo
                            </td>
                        </tr>
                        <tr>
                            <td>
                                halo
                            </td>
                            <td>
                                halo
                            </td>
                            <td>
                                halo
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <button onclick="doprint();" id="print-btn">Print</button>



    <script>
        function doprint() {
            var baseurl = "http://192.168.51.145/los/";
            var urlslik = "slik/cetak_slik";
            var urlcs = "cs";
            window.print();
            window.location = baseurl + urlcs;
        }
    </script>


</body>

</html>