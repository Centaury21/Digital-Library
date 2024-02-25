<?php
include '../../src/conn.php';

$BukuID = $_POST['BukuID'];
$KategoriID = $_POST['KategoriID'];

// input ke db
mysqli_query($conn, "INSERT INTO kategoribuku_relasi VALUES('', '$BukuID', '$KategoriID')");

// alihkan ke halaman kategori.php
header("Location: ../koleksi.php?pesan=simpan");

return mysqli_affected_rows($conn);


