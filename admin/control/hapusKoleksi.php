<?php 
// koneksi database
include '../../src/conn.php';
 
// menangkap data id yang di kirim dari url
$KategoriBukuID = $_GET['KategoriBukuID'];
 
 
// menghapus data dari database
mysqli_query($conn,"DELETE FROM kategoribuku_relasi WHERE KategoriBukuID = '$KategoriBukuID'");
 
// mengalihkan halaman kembali ke index.php
header("location: ../koleksi.php?pesan=hapus");
 
