<?php 
// koneksi database
include '../../src/conn.php';
 
// menangkap data id yang di kirim dari url
$BukuID = $_GET['BukuID'];
 
 
// menghapus data dari database
mysqli_query($conn,"DELETE FROM buku WHERE BukuID = '$BukuID'");
 
// mengalihkan halaman kembali ke index.php
header("location: ../buku.php?pesan=hapus");
 
