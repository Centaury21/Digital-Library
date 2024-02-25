<?php
include '../../src/conn.php';

$KategoriID = $_POST['KategoriID'];
$NamaKategori = $_POST['NamaKategori'];
 
// input ke db
mysqli_query($conn, "UPDATE kategoribuku SET NamaKategori = '$NamaKategori' WHERE KategoriID = '$KategoriID'");

// alihkan ke halaman kategori.php
header("Location: ../kategori.php?pesan=update");

return mysqli_affected_rows($conn);


