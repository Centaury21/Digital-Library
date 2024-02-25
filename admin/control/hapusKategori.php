<?php 
// koneksi database
include '../../src/conn.php';
 
// menangkap data id yang di kirim dari url
$KategoriID = $_GET['KategoriID'];
 
 
// menghapus data dari database
mysqli_query($conn,"DELETE FROM kategoribuku WHERE KategoriID = '$KategoriID'");
 
// mengalihkan halaman kembali ke index.php
header("location: ../kategori.php?pesan=hapus");
 
