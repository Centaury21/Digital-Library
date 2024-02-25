<?php
include '../../src/conn.php';

$KategoriBukuID = $_POST['KategoriBukuID'];
$BukuID = $_POST['BukuID'];
$KategoriID = $_POST['KategoriID'];
 
// input ke db
mysqli_query($conn, "UPDATE kategoribuku_relasi SET KategoriID = '$KategoriID', BukuID = '$BukuID' WHERE KategoriBukuID = '$KategoriBukuID'");

// alihkan ke halaman kategori.php
header("Location: ../koleksi.php?pesan=update");

return mysqli_affected_rows($conn);


