<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <title>Edit info - Blog</title>
   <meta charset="utf-8">
</head>
    <body>
        <form action="../auth/modifyAuth.php" method="post">

            <div style="min-width: 450px" class="rounded-3 border bordr-1 shadow-lg w-25 p-5 position-absolute top-50 start-50 translate-middle">

                <h3 class="mb-2">Edit info</h3>


                <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="username" 
                            id="floatingUserId" placeholder="UserId" required="required">
                        <label for="floatingUserId">UserName</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" name="email"
                            id="floatingInput" placeholder="name@example.com" > 
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" name="password"
                            id="floatingPassword" placeholder="Password" required="required">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" name="newpassword"
                            id="floatingPassword" placeholder="Password" ">
                        <label for="floatingPassword"> New Password</label>
                    </div>

                    <div class="form-floating mb-1">
                        <input type="password" class="form-control" name="Confirmpassword"
                            id="floatingPassword" placeholder="Password" ">
                        <label for="floatingConfirmPassword">ConfirmPassword</label>
                    </div>

                    <div class="row">
                            <button type="submit" class="btn btn-dark col ms-3" >Save</button>
                            <a href="../view/main.php" class="btn btn-dark col ms-2 me-3" id="liveAlertBtn">Cancle</a>
                    </div>
            
            </div>

        </form>

</body>
</html>