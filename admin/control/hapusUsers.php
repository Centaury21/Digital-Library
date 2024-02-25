<?php 
// koneksi database
include '../../src/conn.php';
 
// menangkap data id yang di kirim dari url
$UserID = $_GET['UserID'];
 
 
// menghapus data dari database
mysqli_query($conn,"DELETE FROM user WHERE UserID = '$UserID'");
 
// mengalihkan halaman kembali ke index.php
header("location: ../users.php?pesan=hapus");
 
