<?php include '../components/header.php' ?>

<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form action="control/peminjaman.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Buku</label>
                    <select class="form-control" name="BukuID">
                        <option>Silahkan Pilih  </option>
                        <?php
                        include "../src/conn.php";
                        $data = mysqli_query($conn, "SELECT * FROM buku");
                        while ($d_buku = mysqli_fetch_array($data)) { ?>
                            <option value="<?= $d_buku['BukuID']; ?>"><?= $d_buku['Judul']; ?></option>
                        <?php } ?>
                    </select>
                    <label for="">Tanggal Peminjaman</label>
                    <input type="date" name="TanggalPeminjaman" class="form-control">
                    <label for="">Tanggal Pengembalian</label>
                    <input type="date" name="TanggalPengembalian" class="form-control">
                    <label for="">Status Peminjaman</label>
                    <select name="StatusPeminjaman" class="form-control">
                        <option value="Dipinjam">Dipinjam</option>
                        <option value="Dikembalikan">Dikembalikan</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-sm btn-primary mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<?php include '../components/footer.php'  ?>