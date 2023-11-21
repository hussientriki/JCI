<?php

session_start();

include("connection.php");
include("function.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {


        //read from database
        $query = "select * from users where email = '$email' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['id'] = $user_data['id'];
                    header("Location: step1.php");
                    die;
                }
            }
        }

        echo "wrong username or password!";
    } else {
        echo "wrong username or password!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">


                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form method="POST" style="width: 23rem;">

                            <h3 class="fw-normal mb-3 pb-3 d-flex align-items-center"
                                style="letter-spacing: 1px;font-weight: bold;">Log in</h3>
                            <form method="post">
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" name="email" class="form-control form-control-lg"
                                        required />
                                    <label class="form-label" for="email">Email address</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password"
                                        class="form-control form-control-lg" required />

                                    <label class="form-label" for="password">Password</label>
                                </div>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-info btn-lg btn-block" id="button" type="submit"
                                        value="login">Login</button>

                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                                <p>Don't have an account? <a href="step1.php" class="link-info">Register here</a></p>
                            </form>
                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block" style="height:100vh;">
                    <img src="jci.jpg" alt="Login image" class="w-100 h-100" style="object-fit: cover;">
                </div>


            </div>
        </div>
    </section>
</body>

</html>
