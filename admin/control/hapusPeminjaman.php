<?php 
// koneksi database
include '../../src/conn.php';
 
// menangkap data id yang di kirim dari url
$PeminjamanID = $_GET['PeminjamanID'];
 
// menghapus data dari database
mysqli_query($conn, "DELETE FROM peminjaman WHERE PeminjamanID = '$PeminjamanID'");
 
// mengalihkan halaman kembali ke index.php
header("location: ../peminjaman.php?pesan=hapus");
 
