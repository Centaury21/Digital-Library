<?php include '../components/header.php' ?>

<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form action="control/ulasan.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Buku</label>
                    <select class="form-control" name="BukuID">
                        <option>Silahkan Pilih</option>
                        <?php
                        include "../src/conn.php";
                        $data = mysqli_query($conn, "SELECT * FROM buku");
                        while ($d_buku = mysqli_fetch_array($data)) { ?>
                            <option value="<?= $d_buku['BukuID']; ?>"><?= $d_buku['Judul']; ?></option>
                        <?php } ?>
                    </select>
                    <label for="">Ulasan</label>
                    <textarea name="Ulasan" class="form-control"></textarea>
                    <label for="">Rating</label>
                    <select name="Rating" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
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

<?php include '../components/footer.php' ?>