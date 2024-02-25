<?php
session_start();
include '../../src/conn.php';

$PeminjamanID = $_POST['PeminjamanID'];
$UserID = $_SESSION['login']['UserID'];
$BukuID = $_POST['BukuID'];
$TanggalPeminjaman = $_POST['TanggalPeminjaman'];
$TanggalPengembalian = $_POST['TanggalPengembalian'];
$StatusPeminjaman = $_POST['StatusPeminjaman'];

// input ke db

mysqli_query($conn, "UPDATE peminjaman SET BukuID = '$BukuID' , TanggalPeminjaman = '$TanggalPeminjaman', TanggalPengembalian = '$TanggalPengembalian', StatusPeminjaman = '$StatusPeminjaman' 
WHERE PeminjamanID = '$PeminjamanID'");


// alihkan ke halaman kategori.php
header("Location: ../peminjaman.php?pesan=update");

return mysqli_affected_rows($conn);


