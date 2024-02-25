<?php include '../components/header.php' ?>

<?php
include "../src/conn.php";
$PeminjamanID = $_GET['PeminjamanID'];
$data = mysqli_query($conn, "SELECT * FROM peminjaman WHERE PeminjamanID = '$PeminjamanID'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="content mt-3">
        <div class="card">
            <div class="card-body">
                <form action="control/updatePeminjam.php" method="post">
                    <div class="form-group">
                        <input type="hidden" name="PeminjamanID" value="<?= $d['PeminjamanID']; ?>">
                        <label for="">Buku</label>
                        <select class="form-control" name="BukuID">
                            <option>Silahkan Pilih</option>
                            <?php
                            include "../src/conn.php";
                            $data = mysqli_query($conn, "SELECT * FROM buku");
                            while ($d_buku = mysqli_fetch_array($data)) { ?>
                                <option <?php if ($d_buku['BukuID'] == $d['BukuID']) echo 'selected'; ?> value="<?= $d_buku['BukuID']; ?>"><?= $d_buku['Judul']; ?></option>
                            <?php } ?>
                        </select>
                        <label for="">Tanggal Peminjaman</label>
                        <input type="date" name="TanggalPeminjaman" class="form-control" value="<?= $d['TanggalPeminjaman']; ?>">
                        <label for="">Tanggal Pengembalian</label>
                        <input type="date" name="TanggalPengembalian" class="form-control" value="<?= $d['TanggalPengembalian']; ?>">
                        <label for="">Status Peminjaman</label>
                        <select name="StatusPeminjaman" class="form-control">
                            <option value="Dipinjam" <?php if ($d['StatusPeminjaman'] == 'Dipinjam') echo 'selected'; ?>>Dipinjam</option>
                            <option value="Dikembalikan" <?php if ($d['StatusPeminjaman'] == 'Dipinjam') echo 'selected'; ?>>Dikembalikan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-sm btn-primary mt-3">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

<?php } ?>

<?php include '../components/footer.php' ?>