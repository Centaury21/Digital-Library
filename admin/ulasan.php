<?php include '../components/header.php' ?>

<div class="content mt-3 table-responsive">
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
      <a href="addUlasan.php" class="btn btn-primary btn-sm mt-2">Tambah Data</a>
      <div class="table-responsive">
        <table class="table">
          <thead class="">
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Buku</th>
              <th>Ulasan</th>
              <th>Rating</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="">
            <?php
            include "../src/conn.php";
            $nomor = 1;
            $data = mysqli_query($conn, "SELECT * FROM ulasanbuku LEFT JOIN user ON user.UserID = ulasanbuku.UserID LEFT JOIN
            buku ON buku.BukuID = ulasanbuku.BukuID");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $d['Username']; ?></td>
                <td><?= $d['Judul']; ?></td>
                <td><?= $d['Ulasan']; ?></td>
                <td><?= $d['Rating']; ?></td>
                <td>
                  <a href="editUlasan.php?BukuID=<?= $d['UlasanID']; ?>" class="btn btn-warning btn-sm mb-3">
                    Edit
                  </a>
                  <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="control/hapusUlasan.php"<?= $d['UlasanID']; ?>" class="btn btn-danger btn-sm mb-3">
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