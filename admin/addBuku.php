<?php include '../components/header.php' ?>

<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form action="control/buku.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <!-- <label for="">Kategori</label>
                    <select class="form-control" name="KategoriID">
                        <option>Silahkan Pilih</option>
                        <?php
                        include "../src/conn.php";
                        $data = mysqli_query($conn, "SELECT * FROM kategoribuku");
                        while ($d_kategoribuku = mysqli_fetch_array($data)) { ?>
                            <option value="<?= $d_kategoribuku['KategoriID']; ?>"><?= $d_kategoribuku['NamaKategori']; ?></option>
                        <?php } ?> -->
                    </select>
                    <label for="">Judul</label>
                    <input type="text" name="Judul" class="form-control">
                    <label for="">Penulis</label>
                    <input type="text" name="Penulis" class="form-control">
                    <label for="">Penerbit</label>
                    <input type="text" name="Penerbit" class="form-control">
                    <label for="">Tahun Terbit</label>
                    <input type="text" name="TahunTerbit" class="form-control">
                    <label for="">Stok</label>
                    <input type="file" class="form-control" name="Stok">
                    <label for="">Cover</label>
                    <input type="file" class="form-control" name="Cover">
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-sm btn-primary mt-3">Simpan</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>

<?php include '../components/footer.php' ?>