<?php
session_start();
include '../../src/conn.php';

$UserID = $_SESSION['login']['UserID'];
$BukuID = $_POST['BukuID'];
$Ulasan = $_POST['Ulasan'];
$Rating = $_POST['Rating'];

// input ke db
mysqli_query($conn, "INSERT INTO ulasanbuku VALUES('', '$UserID', '$BukuID', '$Ulasan', '$Rating')");

// alihkan ke halaman kategori.php
header("Location: ../ulasan.php?pesan=simpan");

return mysqli_affected_rows($conn);


