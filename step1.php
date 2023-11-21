<?php
session_start();
include("connection.php");
include("function.php");

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

                        <form method="post" action="step2.php" style="width: 23rem;">

                            <h3 class="fw-normal mb-3 pb-3 d-flex align-items-center"
                                style="letter-spacing: 1px;font-weight: bold;">Sign-Up</h3>

                            <div class="form-outline mb-4">
                                <input type="Fname" id="Fname" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">First name</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="Lname" id="Lname" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Last name</label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-info btn-lg btn-block" type="sumbit" value="sumbit">Next</button>
                            </div>



                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block" style="height:100vh;">
                    <img src="jci.jpg" alt="Login image" class="w-100 h-100" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </section>
    <script>
        // Basic client-side validation to ensure that both fields are filled in
        const form = document.querySelector('form');
        const usernameInput = document.querySelector('#username');
        const passwordInput = document.querySelector('#password');

        form.addEventListener('submit', event => {
            if (!usernameInput.value || !passwordInput.value) {
                event.preventDefault();
                alert('Please enter both a username and password.');
            }
        });
    </script>
</body>

</html>