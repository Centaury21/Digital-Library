<?php include '../components/header.php' ?>

<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "daftar_gagal") {
        echo "<div class='alert alert-info'>Username sudah terdaftar!</div>";
    }
}
?>

<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form action="control/users.php" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="Username" class="form-control" required>
                    <label for="">Password</label>
                    <input type="password" name="Password" class="form-control" required>
                    <label for="">Email</label>
                    <input type="text" name="Email" class="form-control" required>
                    <label for="">NamaLengkap</label>
                    <input type="text" name="NamaLengkap" class="form-control" required>
                    <label for="">Alamat</label>
                    <input type="text" name="Alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-sm btn-primary mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../components/footer.php' ?>