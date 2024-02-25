<?php include '../components/header.php' ?>

<?php
include "../src/conn.php";
$KategoriID = $_GET['KategoriID'];
$data = mysqli_query($conn, "SELECT * FROM kategoribuku WHERE KategoriID = '$KategoriID'");
while ($d = mysqli_fetch_array($data)) {
?>

<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form action="control/updateKategori.php" method="post">
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="hidden" name="KategoriID" value="<?= $d['KategoriID']; ?>">
                    <input type="text" name="NamaKategori" value="<?= $d['NamaKategori']; ?>" class="form-control">
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