<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="mainStyle.css">
        <title>Main - Blog</title>
   <meta charset="utf-8">
</head>
<body class="">
    

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container-fluid">

                <a class="navbar-brand" href="/view/main.php">PHP-BOARD</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../view/modify.php">Modify</a>
                </li>

                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../view/album.php">Album</a>
                </li>

                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../view/library.php">Library</a>
                </li>

                </ul>



                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                    </ul>
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

            $stmt = $conn -> prepare("SELECT * FROM board");
            $stmt -> execute();
            $boardResult = $stmt -> fetchAll();
        ?>
        
        <div class="container-fluid">
            <div class="row g-col-15 p-5">

                <?php foreach($boardResult as $boardRow) { ?>
                
                <div class="card m-2 shadow-lg" style="width: 17.85rem; height: 220px;">

                    <div class="card-body ">

                        <h5 class="card-title fw-bold" id="card_title"><?php echo $boardRow['title'] ?></h5>
                        <p class="card-text lh-base" id="card_contents"><?php echo $boardRow['contents'] ?></p>
                        
                        <a href="detail.php?board_id=<?php echo $boardRow['user_id'] ?>" class="btn btn-dark">detail Page</a>

                        
                    </div>
                    
                    <!-- <ul class="list-group list-group-flush"> 
                    <li class="list-group-item">asdfghyujkl</li>
                    <ul> -->
                
                </div>
                
                <?php } ?>



            </div>
        </div>
        
</body>
</html>

