<?php
include_once 'conn.php';

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];
$Level = $_POST['Level'];

// cek apakah username sdh ada atau blm
$result = mysqli_query($conn, "SELECT Username FROM user WHERE Username = '$Username'");

// jika username sdh ada
if (mysqli_fetch_assoc($result)) {
    header("Location: ../register.php?pesan=daftar_gagal");

  return false;
}
// enkripsi password
// $Password = password_hash($Password, PASSWORD_DEFAULT);

// jika username tidak ada, maka masukkan ke db
mysqli_query($conn, "INSERT INTO user VALUES('', '$Username', '$Password', '$Email', '$NamaLengkap', '$Alamat', '$Level')");

header("Location: ../index.php?pesan=info_daftar");

return mysqli_affected_rows($conn);
// Level 3 untuk peminjam buku


