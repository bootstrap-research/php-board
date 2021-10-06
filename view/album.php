<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet" 
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
            crossorigin="anonymous">
    <title>Blog - Library</title>
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
    
</body>
</html>