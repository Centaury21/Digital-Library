<?php
include '../../src/conn.php';

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];

// cek apakah username sdh ada atau blm
$result = mysqli_query($conn, "SELECT Username FROM user WHERE Username = '$Username'");

// jika username sdh ada
if (mysqli_fetch_assoc($result)) {
    header("Location: ../admin/addUsers.php?pesan=daftar_gagal");

  return false;
}

// jika username tdk ada
mysqli_query($conn, "INSERT INTO user VALUES('', '$Username', '$Password', '$Email', '$NamaLengkap', '$Alamat', '2')");

// alihkan ke halaman kategori.php
header("Location: ../users.php?pesan=simpan");

return mysqli_affected_rows($conn);


