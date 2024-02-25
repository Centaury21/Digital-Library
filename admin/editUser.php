<?php include '../components/header.php' ?>

<?php
include "../src/conn.php";
$UserID = $_GET['UserID'];
$data = mysqli_query($conn, "SELECT * FROM user WHERE UserID = '$UserID'");
while ($d = mysqli_fetch_array($data)) {
?>

<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form action="../src/updateUsers.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="hidden" name="UserID" value="<?= $d['UserID']; ?>">
                    <input type="text" name="Username" value="<?= $d['Username']; ?>" class="form-control">
                    <label>Password</label>
                    <input type="password" name="Password"class="form-control">
                    <label>Email</label>
                    <input type="text" name="Email" value="<?= $d['Email']; ?>" class="form-control">
                    <label>Nama Lengkap</label>
                    <input type="text" name="NamaLengkap" value="<?= $d['NamaLengkap']; ?>" class="form-control">
                    <label>Alamat</label>
                    <input type="text" name="Alamat" value="<?= $d['Alamat']; ?>" class="form-control">
                    <label>Level</label>
                    <input type="text" name="Level" value="<?= $d['Level']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-sm btn-primary mt-3">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php } ?>

<?php include '../components/footer.php' ?>