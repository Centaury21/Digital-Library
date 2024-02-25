<?php
include '../../src/conn.php';

$BukuID = $_POST['BukuID'];
$KategoriID = $_POST['KategoriID'];
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];
$Stok = $_POST['Stok'];

mysqli_query($conn, "UPDATE buku SET KategoriID = '$KategoriID', Judul = '$Judul', Penulis = '$Penulis', Penerbit = '$Penerbit', TahunTerbit = '$TahunTerbit', Stok = '$Stok' WHERE BukuID = '$BukuID'");

// alihkan ke halaman kategori.php
header("Location: ../buku.php?pesan=update");

return mysqli_affected_rows($conn);
