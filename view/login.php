<?php
    session_start();
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet" 
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
            crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Login - Blog</title>
</head>
    <body>

        <form action="../auth/loginAuth.php" method="post">

            <div style="min-width: 450px" class="rounded-3 border border-1 shadow-lg w-25 p-5 position-absolute top-50 start-50 translate-middle">

                    <h3 class="mb-2">Log in</h3>

                        <div class="form-floating mb-2">
                            <input type="email" class="form-control rounded-3" required="required" 
                            id="floatingInput" placeholder="name@example.com" name="email">
                            <label for="floatingInput">Email address</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="password" class="form-control rounded-3" required="required" 
                            id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-dark col ms-3">Log in</button>
                            <a href="signup.php" class="btn btn-dark col ms-2 me-3">Sign up</a>
                        </div>

                        <div class="form-check mt-1">
                            <input class="form-check-input" type="checkbox"  id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Remember Me!</label>
                        </div>
                        
            </div>
                    
        </form>

</body>
</html>