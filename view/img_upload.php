<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet" 
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
            crossorigin="anonymous">
            <link rel="stylesheet" href="Style.css">
    <title>Blog - Upload Image</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">

            <a class="navbar-brand" href="/view/main.php">PHP-BOARD</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                </ul>

            </div>

        </div>
    </nav>

    <div style="min-width: 500px " class="rounded-3 border bordr-1 shadow-lg p-5 position-absolute top-50 start-50 translate-middle">

    <h4>Image upload</h4>

        <div class="m-1" id="file_upload">

            <form enctype="multipart/form-data" action="../auth/img_uploadAuth.php" method="post">

            <input name="img_upload" type="file" class="btn btn-dark col" />
            <button name="upload_submit" class="btn btn-dark col m-1 p-2">Submit</button>

            </form>
        </div>

    </div>

    

    
</body>
</html>