<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet" 
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
            crossorigin="anonymous">
            <link rel="stylesheet" href="Style.css">
    <title>Blog - Gallery</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">

            <a class="navbar-brand" href="/view/main.php">PHP-BOARD</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../view/modify.php">Modify</a>
                </li>

                <li class="nav-item">
                <a class="nav-link active fw-bold" aria-current="page" href="../view/gallery.php">Gallery</a>
                </li>

                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../view/library.php">Library</a>
                </li>

                </ul>



                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                </ul>

                <form action="/view/img_upload.php" class="d-flex" style="margin-right: 1%;">
                <button class="btn btn-dark" type="submit">Upload</button>
                </form> 

                <form action="/view/write.php" class="d-flex" style="margin-right: 1%;">
                <button class="btn btn-dark" type="submit">Write</button>
                </form>
        
                <form action="../auth/logout.php" class="d-flex" >
                <button class="btn btn-dark" type="submit">Logout</button>
                </form>

            </div>

        </div>

    </nav>
    
    <?php 
            require "../config/db_connect.php";

            $stmt = $conn -> prepare("SELECT * FROM gallery");
            $stmt -> execute();
            $fileResult = $stmt -> fetchAll();
        ?>
        
        <div class="container-fluid">
            <div class="row g-col-15 p-5">

                <?php foreach($fileResult as $fileRow) { ?>
                    
                <div class="card m-3 shadow-lg py-2 ps-2" style="width: 15rem; height: 240px;">

                    <img src="../file.svg" class="card-img-top" style="width: 14rem; height: 150px;">

                    <h6 class="card-title fw-bold lh-base" style="max-hight 20px;" id="card_title"><?php echo $fileRow['ori_name'] ?></h6>
                    <a href="../auth/img_downloadAuth.php?file_id=<?php echo $fileRow['img_name'] ?>" class="btn btn-dark mt-1s">Download</a>

                </div>
                                        
                <?php } ?>



            </div>
        </div>
    
</body>
</html>