<h3 align="center" >Laporan Peminjaman Buku</h3>
<table border="1" cellspacing="0" cellpading="5" class="table" width="100%" >
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
                <td><img src="../assets/img/upload/<?= $d['Cover']; ?>" width="100px" class="rounded"></td>
                <td><?= $d['Username']; ?></td>
                <td><?= $d['Judul']; ?></td>
                <td><?= $d['TanggalPeminjaman']; ?></td>
                <td><?= $d['TanggalPengembalian']; ?></td>
                <td><?= $d['StatusPeminjaman']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    window.print();
    setTimeout(function() {
        window.close();
    }, 100);
</script>