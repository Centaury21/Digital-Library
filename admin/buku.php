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
      <a href="addBuku.php" class="btn btn-primary btn-sm mt-2">Tambah Data</a>
      <div class="table-responsive">
        <table class="table">
          <thead class="">
            <tr>
              <th>No</th>
              <th>Cover</th>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>Stok</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="">
            <?php
            include "../src/conn.php";
            $nomor = 1;
            $data = mysqli_query($conn, "SELECT * FROM buku");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <td><?= $nomor++; ?></td>
                <td><img src="../assets/img/upload/<?= $d['Cover']; ?>" width="100px" class="rounded"></td>
                <td><?= $d['Judul']; ?></td>
                <td><?= $d['Penulis']; ?></td>
                <td><?= $d['Penerbit']; ?></td>
                <td><?= $d['TahunTerbit']; ?></td>
                <td><?= $d['Stok']; ?></td>
                <td>
                  <a href="editBuku.php?BukuID=<?= $d['BukuID']; ?>" class="btn btn-warning btn-sm mb-3">
                    Edit
                  </a>
                  <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="control/hapusBuku.php?BukuID=<?= $d['BukuID']; ?>" class="btn btn-danger btn-sm mb-3">
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