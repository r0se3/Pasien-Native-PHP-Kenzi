<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Login</title>
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<script type='text/javascript'>alert('Login gagal, Username atau password salah');</script>";
        } else if ($_GET['pesan'] == "logout") {
            echo "<script type='text/javascript'>alert('Anda Telah Logout');</script>";
        }
    }
    ?>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="1310.jpg" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Selamat Datang</h4>
                                    </div>

                                    <form action="process_login.php" method="POST">


                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Username</label>
                                            <input type="text" id="InputUsername" name="username" class="form-control" placeholder="Username" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password</label>
                                            <input type="password" name="password" id="InputPassword" class="form-control" placeholder="Password" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="submit" type="submit">Log in</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style="background-color: #006CFF;">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="assets/js/bootstrap.js"></script>

</html>