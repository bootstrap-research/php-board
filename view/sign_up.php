<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <title>Sign up - Blog</title>
   <meta charset="utf-8">
</head>
    <body>
        <form action="../auth/sign_upAuth.php" method="post">

            <div style="min-width: 450px" class="rounded-3 border bordr-3 border-dark w-25 p-5 position-absolute top-50 start-50 translate-middle">

                <h3 class="mb-2">Sign up</h3>

                <div class="form-floating mb-2">
                    <input type="UserId" class="form-control rounded-3" id="floatingUserId" placeholder="Password">
                    <label for="floatingUserId">User Id</label>
                </div>

                <div class="form-floating mb-2">
                    <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating mb-2">
                        <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                </div>

                <div class="form-floating mb-1">
                        <input type="Confirmpassword" class="form-control rounded-3" id="floatingConfirmPassword" placeholder="Password">
                        <label for="floatingConfirmPassword">Confirm Password</label>
                </div>

                <button type="submit" class="btn btn-dark w-100">Sign up</button>
            
            </div>

        </form>


</body>
</html>