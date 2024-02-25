<?php 
// koneksi database
include '../../src/conn.php';
 
// menangkap data id yang di kirim dari url
$UlasanID = $_GET['UlasanID'];
 
 
// menghapus data dari database
mysqli_query($conn,"DELETE FROM ulasanbuku WHERE UlasanID = '$UlasanID'");
 
// mengalihkan halaman kembali ke index.php
header("location: ../ulasan.php?pesan=hapus");
 
