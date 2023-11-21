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

                        <form style="width: 23rem;">

                            <h3 class="fw-normal mb-3 pb-3 d-flex align-items-center"
                                style="letter-spacing: 1px;font-weight: bold;">Sign-Up</h3>
                            <?php
                            session_start();
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $_SESSION['step1_data'] = $_POST; // Store Step 1 data
                            }
                            ?>
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">Gmail</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example28" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Phone number</label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-info btn-lg btn-block" type="button"
                                    href="step3.html">Next</button>
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
</body>

</html>