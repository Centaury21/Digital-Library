<?php
include '../../src/conn.php';

$UserID = $_POST['UserID'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];
$Level = $_POST['Level'];
 
// enkripsi password
$Password = password_hash($Password, PASSWORD_DEFAULT);

if (!$Password ) {
    mysqli_query($conn, "UPDATE user SET Username = '$Username', Email = '$Email', NamaLengkap = '$NamaLengkap', Alamat = '$Alamat',  Level = '$Level' WHERE UserID = '$UserID'");
} else {
    mysqli_query($conn, "UPDATE user SET Username = '$Username', Password = '$Password', Email = '$Email', NamaLengkap = '$NamaLengkap', Alamat = '$Alamat', Level = '$Level' WHERE UserID = '$UserID'");
}
// alihkan ke halaman kategori.php
header("Location: ../users.php?pesan=update");

return mysqli_affected_rows($conn);


