<?php
session_start();
include '../../src/conn.php';

$UserID = $_SESSION['login']['UserID'];
$BukuID = $_POST['BukuID'];
$TanggalPeminjaman = $_POST['TanggalPeminjaman'];
$TanggalPengembalian = $_POST['TanggalPengembalian'];
$StatusPeminjaman = $_POST['StatusPeminjaman'];

// input ke db
mysqli_query($conn, "INSERT INTO peminjaman VALUES('', '$UserID', '$BukuID', '$TanggalPeminjaman', '$TanggalPengembalian', '$StatusPeminjaman')");

// alihkan ke halaman kategori.php
header("Location: ../peminjaman.php?pesan=simpan");

return mysqli_affected_rows($conn);


