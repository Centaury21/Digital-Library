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
      <a href="print.php" target="_blank" class="btn btn-primary btn-sm mt-2"><i class="fa fa-print" ></i>Print Data</a>
      <div class="table-responsive">
        <table class="table">
          <thead class="">
            <tr>
              <th>No</th>
              <th>User</th>
              <th>Buku</th>
              <th>Tanggal Peminjaman</th>
              <th>Tanggal Pengembalian</th>
              <th>Status Peminjaman</th>
            </tr>
          </thead>
          <tbody class="">
            <?php
            include "../src/conn.php";
            $nomor = 1;
            $data = mysqli_query($conn, "SELECT * FROM peminjaman LEFT JOIN user ON user.UserID = peminjaman.UserID LEFT JOIN
            buku ON buku.BukuID = peminjaman.BukuID");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $d['Username']; ?></td>
                <td><?= $d['Judul']; ?></td>
                <td><?= $d['TanggalPeminjaman']; ?></td>
                <td><?= $d['TanggalPengembalian']; ?></td>
                <td><?= $d['StatusPeminjaman']; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php include '../components/footer.php' ?>