<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootsrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="card mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="assets/img/login.png" width="400" alt="logo">
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <h2 style="text-align: center;">Login</h2>
                            <?php
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "gagal") {
                                    echo "<div class='alert alert-danger'>Username dan Password tidak sesuai !</div>";
                                }
                            }
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "info_login") {
                                    echo "<div class='alert alert-info'>Maaf anda belum login!!</div>";
                                }
                            }
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "info_logout") {
                                    echo "<div class='alert alert-success'>Anda berhasil logout!!</div>";
                                }
                            }
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "info_daftar") {
                                    echo "<div class='alert alert-success'>Anda berhasil daftar silahkan login</div>";
                                }
                            }
                            ?>
                            <form method="post" action="src/login.php">
                                <div class="form-group mt-4">
                                    <label>Username</label>
                                    <input type="text" name="Username" class="form-control" required>
                                </div>
                                <div class="form-group mt-4">
                                    <label>Password</label>
                                    <input type="password" name="Password" class="form-control" required>
                                </div>
                                <div class="form-group mt-4 d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Belum Punya Akun?</label>
                                    <a href="register.php" class="link-underline link-underline-opacity-0">Daftar Akun</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootsrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
</body>

</html>