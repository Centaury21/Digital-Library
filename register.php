<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/bootsrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>

<body class="bg-dark-subtle">
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
  </svg>
  </div>
  <div class="container">
    <div class="content">
      <div class="card mt-5 mb-5">
        <div class="row">
          <div class="col-sm-6 text-center">
            <img src="assets/img/daftar.png" width="500" height="488" alt="logo">
          </div>
          <div class="col-sm-6">
            <div class="card-body">
              <h2 style="text-align: center;">Register</h2>
              <?php
              if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "daftar_gagal") {
                  echo "<div class='alert alert-info'>Username sudah terdaftar!</div>";
                }
              }
              ?>
              <form method="post" action="src/register.php">
                <div class="form-group mt-3">
                  <input type="text" name="Username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group mt-3">
                  <input type="password" name="Password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" name="Email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" name="NamaLengkap" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group mt-3">
                  <textarea name="Alamat" class="form-control" placeholder="Alamat" required></textarea>
                </div>
                <div class="form-group mt-3">
                  <select name="Level" required class="form-control">
                    <option value="#">Level</option>
                    <option value="Peminjam">Peminjam</option>
                    <option value="Admin">Admin</option>
                  </select>
                </div>
                <div class="form-group mt-3 d-grid gap-2">
                  <button type="submit" class="btn btn-primary" name="register">Register</button>
                </div>
                <div class="form-group mt-2">
                  <label>Sudah Punya Akun?</label>
                  <a href="index.php" class="link-underline link-underline-opacity-0">index</a>
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