<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <title>Sign up - Blog</title>
   <meta charset="utf-8">
</head>
    <body>
        <form action="../auth/sign_upAuth.php" method="post">

            <div style="min-width: 450px" class="rounded-3 border bordr-1 shadow-lg w-25 p-5 position-absolute top-50 start-50 translate-middle">

                <h3 class="mb-2">Sign up</h3>

                    <div class="form-floating mb-2">
                        <input type="UserId" class="form-control" name="UserId" 
                            id="floatingUserId" placeholder="UserId" required="required">
                        <label for="floatingUserId">User Id</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" name="email"
                            id="floatingInput" placeholder="name@example.com" required="required"> 
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" name="password"
                            id="floatingPassword" placeholder="Password" required="required">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-floating mb-1">
                        <input type="password" class="form-control" name="Confirmpassword"
                            id="floatingPassword" placeholder="Password" required="required">
                        <label for="floatingConfirmPassword">ConfirmPassword</label>
                    </div>

                <button type="submit" class="btn btn-dark w-100">Sign up</button>

                <p>Already have an account? <a href="/view/login.php">Login here</a>.</p>
            
            </div>

        </form>

</body>
</html>