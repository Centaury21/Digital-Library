<?php include '../components/header.php' ?>

<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form action="control/kategori.php" method="post">
                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" name="NamaKategori" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-sm btn-primary mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../components/footer.php' ?>