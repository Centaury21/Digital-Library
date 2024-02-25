<?php include '../components/header.php' ?>

<div class="content mt-3">
  <div class="card">
    <div class="card-body">
      <?php
      if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "simpan") {
          echo "<div class='alert alert-success'>Data berhasil disimpan</div>";
        }
      }
      if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "update") {
          echo "<div class='alert alert-success'>Data berhasil diupdate</div>";
        }
      }
      if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "hapus") {
          echo "<div class='alert alert-success'>Data berhasil dihapus</div>";
        }
      }
      ?>
      <a href="add_kategori.php" class="btn btn-primary btn-sm mt-2">Tambah Data</a>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "../src/conn.php";
            $nomor = 1;
            $data = mysqli_query($conn, "SELECT * FROM kategoribuku");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $d['NamaKategori']; ?></td>
                <td>
                  <a href="edit_kategori.php?KategoriID=<?= $d['KategoriID']; ?>" class="btn btn-warning btn-sm mb-3">
                    Edit
                  </a>
                  <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="control/hapusKategori.php?KategoriID=<?= $d['KategoriID']; ?>" class="btn btn-danger btn-sm mb-3">
                    Hapus
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php include '../components/footer.php' ?>