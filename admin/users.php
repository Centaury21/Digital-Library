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
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "daftar_gagal") {
                    echo "<div class='alert alert-info'>Username sudah terdaftar!</div>";
                }
            }
            ?>
            <a href="addUsers.php" class="btn btn-primary btn-sm mt-2">Tambah Data</a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../src/conn.php";
                        $nomor = 1;
                        $data = mysqli_query($conn, "SELECT * FROM user");

                        while ($d = mysqli_fetch_array($data)) {
                            if ($d['Level'] == 'Peminjam') {
                            } else { ?>
                                <tr>
                                    <td><?= $nomor++; ?></td>
                                    <td><?= $d['Username']; ?></td>
                                    <td><?= $d['Email']; ?></td>
                                    <td><?= $d['NamaLengkap']; ?></td>
                                    <td><?= $d['Alamat']; ?></td>
                                    <td>
                                        <?php if ($d['Level'] == 'Admin') { ?>
                                            Admin
                                        <?php } else { ?>
                                            Petugas
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($_SESSION['login'] == $d['Level']) { ?>
                                            <a href="editUser.php?UserID=<?= $d['UserID']; ?>" class="btn btn-warning btn-sm mb-3">
                                                Edit
                                            </a>
                                        <?php } else { ?>
                                            <a href="editUser.php?UserID=<?= $d['UserID']; ?>" class="btn btn-warning btn-sm mb-3">
                                                Edit
                                            </a>
                                            <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="control/hapusUsers.php?UserID=<?= $d['UserID']; ?>" class="btn btn-danger btn-sm mb-3">
                                                Hapus
                                            </a>
                                        <?php } ?>

                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include '../components/footer.php' ?>