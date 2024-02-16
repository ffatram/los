<!-- <!DOCTYPE html>
<html>

<head>
    <title>File Upload using Dropzone.js</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Upload a File</h1>
        <form action="<?= BASEURL; ?>/wawancara/upload" class="dropzone" id="myDropzone"></form>
        <div id="uploadStatus" class="mt-3"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script>
        Dropzone.options.myDropzone = {
            paramName: "uploadedFile",
            maxFilesize: 5, // Max filesize in MB
            maxFiles: 1, // Limit number of files
            acceptedFiles: ".jpg, .jpeg, .png, .gif", // Allowed file extensions
            init: function() {
                this.on("success", function(file, response) {
                    document.querySelector("#uploadStatus").innerHTML = response;
                });
            }
        };
    </script>
</body>

</html> -->


<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Upload a File</h1>
        <form id="uploadForm" action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="uploadedFile">Select File</label>
                <input type="file" class="form-control-file" id="uploadedFile" name="uploadedFile">
            </div>
            <button type="submit" class="btn btn-primary">Upload File</button>
        </form>
        <div class="progress mt-3" style="display: none;">
            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
        </div>
        <div id="uploadStatus" class="mt-3"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#uploadForm').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: '<?= BASEURL; ?>/uploadfile/upload',
                    type: 'POST',
                    data: formData,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = (evt.loaded / evt.total) * 100;
                                $('.progress').show();
                                $('.progress-bar').width(percentComplete + '%').html(percentComplete.toFixed(2) + '%');
                            }
                        }, false);
                        return xhr;
                    },
                    success: function(response) {
                        $('#uploadStatus').html(response);
                        $('.progress').hide();
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        });
    </script>
</body>
</html>




<!-- <!DOCTYPE html>
<html>

<head>
    <title>File Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Upload a File</h1>
        <form id="uploadForm" action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="uploadedFile">Select File</label>
                <input type="file" class="form-control-file" id="uploadedFile" name="uploadedFile">
            </div>
            <button type="submit" class="btn btn-primary">Upload File</button>
        </form>
        <div id="uploadStatus" class="mt-3"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#uploadForm').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: '<?= BASEURL; ?>/wawancara/upload',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#uploadStatus').html(response);
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        });
    </script>
</body>

</html> -->