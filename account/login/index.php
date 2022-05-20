<?php 
    session_start();
    include "config.php";

    $connectionDB = mysqli_connect("localhost", "root", "", "admin");
    
    if(isset($_POST["submit"])){
        if(isset($_POST["email"]) && isset($_POST["password"])){
            $emailSubmit = mysqli_real_escape_string($connectionDB, htmlspecialchars($_POST["email"]));
            $passwordSubmit = mysqli_real_escape_string($connectionDB, htmlspecialchars($_POST["password"]));

            $querySql = "SELECT * FROM user_login 
                WHERE email = '$emailSubmit'";

            $resultData = configurationDB($querySql);

            // pengecek login
            confirmAccount($resultData, $emailSubmit, $passwordSubmit);
        };
    };
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">

    <title>Login</title>
</head>

<body style="background-color: #e9ecef;">

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <article>
                        <h1 class="font-weight-bold">Sign in Account Admin<span class="text-primary"> Make
                                freely.</span>
                        </h1>
                    </article>
                    <div class="image d-flex justify-content-center">
                        <img src="../../img/mobileLogin.svg" class="img-fluid" width="90%">
                    </div>
                </div>
                <div class="col-md-7 my-5 my-md-5 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="content-form rounded bg-light p-4 shadow mb-5 mb-md-5">
                        <form action="index.php" method="post">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input placeholder="@email.com" type="email" id="form1Example13"
                                    class="form-control form-control-lg" name="email" />
                                <label class="form-label" for="form1Example13">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input placeholder="******" type="password" id="form1Example23"
                                    class="form-control form-control-lg" name="password" />
                                <label class="form-label" for="form1Example23">Password</label>
                            </div>

                            <div class="d-flex justify-content-around align-items-center mb-4">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3"
                                        checked />
                                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                                </div>
                                <a href="#!">Forgot password?</a>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign
                                in</button>

                            <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                            </div>

                            <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                                role="button">
                                <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                            </a>
                            <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                                role="button">
                                <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>