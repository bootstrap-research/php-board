<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <title>Edit info - Blog</title>
   <meta charset="utf-8">
</head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container-fluid">

                <a class="navbar-brand" href="/view/main.php">PHP-BOARD</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

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



        <form action="../auth/modifyAuth.php" method="post">

            <div style="min-width: 450px" class="rounded-3 border bordr-1 shadow-lg w-25 p-5 position-absolute top-50 start-50 translate-middle">

                <h3 class="mb-2">Edit info</h3>


                <?php 
                require "../config/db_connect.php";

                $stmt = $conn -> prepare("SELECT * FROM users");
                $stmt -> execute();
                $boardResult = $stmt -> fetch();
                ?>


                        <div class="form-floating mb-2">

                            <input type="text" class="form-control" name="username" 
                                id="floatingUserId" placeholder="UserId" 
                                value="<?php echo $boardResult['username'] ?>" >

                            <label for="floatingUserId">UserName</label>
                        </div>


                        <div class="form-floating mb-2">

                            <input type="email" class="form-control" name="email"
                                id="floatingInput" placeholder="name@example.com" 
                                value="<?php echo $boardResult['email'] ?>" > 

                            <label for="floatingInput">Email address</label>
                        </div>


                        <!-- <div class="form-floating mb-2">

                            <input type="password" class="form-control" name="password"
                                id="floatingPassword" placeholder="Password" required="required">

                            <label for="floatingPassword">Password</label>
                        </div> -->


                        <div class="form-floating mb-2">

                            <input type="password" class="form-control" name="newpassword"
                                id="floatingPassword" placeholder="Password" required="required">

                            <label for="floatingPassword"> New Password</label>
                        </div>


                        <div class="form-floating mb-1">

                            <input type="password" class="form-control" name="Confirmpassword"
                                id="floatingPassword" placeholder="Password" required="required" >

                            <label for="floatingConfirmPassword">Confirm Password</label>
                        </div>


                        <div class="row">
                                <button type="submit" class="btn btn-dark col ms-3" >Save</button>
                                <a href="../view/main.php" class="btn btn-dark col ms-2 me-3" id="liveAlertBtn">Cancle</a>
                        </div>

            </div>

        </form>

</body>
</html>