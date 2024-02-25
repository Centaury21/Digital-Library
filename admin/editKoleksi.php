<?php include '../components/header.php' ?>

<?php
include "../src/conn.php";
$KategoriBukuID = $_GET['KategoriBukuID'];
$data = mysqli_query($conn, "SELECT * FROM kategoribuku_relasi WHERE KategoriBukuID = '$KategoriBukuID'");
while ($d_koleksi = mysqli_fetch_array($data)) {
?>

    <div class="content mt-3">
        <div class="card">
            <div class="card-body">
                <form action="../src/updateKoleksi.php" method="post">
                    <div class="form-group">
                        <label for="">Pilih Buku</label>
                        <input type="hidden" name="KategoriBukuID" value="<?= $d_koleksi['KategoriBukuID']; ?>">
                        <select class="form-control" name="BukuID">
                            <option>Silahkan Pilih</option>
                            <?php
                            include "../src/conn.php";
                            $data = mysqli_query($conn, "SELECT * FROM buku");
                            while ($d_buku = mysqli_fetch_array($data)) { ?>
                                <option value="<?= $d_buku['BukuID']; ?>" <?php if ($d_buku['BukuID'] == $d_koleksi['BukuID']) {
                                                                                echo 'selected';
                                                                            } ?>><?= $d_buku['Judul']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Pilih Kategori</label>
                        <select class="form-control" name="KategoriID">
                            <option>Silahkan Pilih</option>
                            <?php
                            include "../src/conn.php";
                            $data = mysqli_query($conn, "SELECT * FROM kategoribuku");
                            while ($d_kategoribuku = mysqli_fetch_array($data)) { ?>
                                <option value="<?= $d_kategoribuku['KategoriID']; ?>" <?php if ($d_kategoribuku['KategoriID'] == $d_koleksi['KategoriID']) {
                                                                                            echo 'selected';
                                                                                        } ?>><?= $d_kategoribuku['NamaKategori']; ?></option>
                            <?php } ?>
                        </select>
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