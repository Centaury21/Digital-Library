<?php include '../components/header.php' ?>

<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form action="control/koleksi.php" method="post">
                <div class="form-group mt-2">
                    <label for="">Pilih Buku</label>
                    <select class="form-control" name="BukuID">
                        <option>Silahkan Pilih</option>
                        <?php
                        include "../src/conn.php";
                        $data = mysqli_query($conn, "SELECT * FROM buku");
                        while ($d_buku = mysqli_fetch_array($data)) { ?>
                            <option value="<?= $d_buku['BukuID']; ?>"><?= $d_buku['Judul']; ?></option>
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
                            <option value="<?= $d_kategoribuku['KategoriID']; ?>"><?= $d_kategoribuku['NamaKategori']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-sm btn-primary mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../components/footer.php' ?>