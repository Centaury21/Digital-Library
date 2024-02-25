<?php
include '../../src/conn.php';

$NamaKategori = $_POST['NamaKategori'];
 
// input ke db
mysqli_query($conn, "INSERT INTO kategoribuku VALUES('', '$NamaKategori')");

// alihkan ke halaman kategori.php
header("Location: ../kategori.php?pesan=simpan");

return mysqli_affected_rows($conn);


