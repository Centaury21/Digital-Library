<?php include '../components/header.php' ?>

<?php
include "../src/conn.php";
$BukuID = $_GET['BukuID'];
$data = mysqli_query($conn, "SELECT * FROM buku WHERE BukuID = '$BukuID'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="content mt-3">
        <div class="card">
            <div class="card-body">
                <form action="control/updateBuku.php" method="post">
                    <div class="form-group">
                        <select class="form-control" name="KategoriID">
                            <label for="">Kategori</label>
                            <option>Silahkan Pilih</option>
                            <?php
                            include "../src/conn.php";
                            $d_kat = mysqli_query($conn, "SELECT * FROM kategoribuku");
                            while ($d_kategoribuku = mysqli_fetch_array($d_kat)) { ?>
                                <option <?php if ($d_kategoribuku['KategoriID'] == $d['KategoriID']) echo 'Selected'; ?> value="<?= $d_kategoribuku['KategoriID']; ?>"><?= $d_kategoribuku['NamaKategori']; ?></option>
                            <?php } ?>
                        </select>
                        <label>Judul</label>
                        <input type="hidden" name="BukuID" value="<?= $d['BukuID']; ?>">
                        <input type="text" name="Judul" value="<?= $d['Judul']; ?>" class="form-control">
                        <label>Penulis</label>
                        <input type="text" name="Penulis" value="<?= $d['Penulis']; ?>" class="form-control">
                        <label>Penerbit</label>
                        <input type="text" name="Penerbit" value="<?= $d['Penerbit']; ?>" class="form-control">
                        <label>Tahun Terbit</label>
                        <input type="number" name="TahunTerbit" value="<?= $d['TahunTerbit']; ?>" class="form-control">
                        <label>Stok</label>
                        <input type="number" name="Stok" value="<?= $d['Stok']; ?>" class="form-control">
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