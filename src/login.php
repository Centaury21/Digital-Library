<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'conn.php';

// menangkap data yang dikirim dari form login
$Username = $_POST['Username'];
$Password = md5($_POST['Password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn, "SELECT * FROM user WHERE Username='$Username' AND Password ='$Password'");
$cek = mysqli_num_rows($login);

// cek apakah username
if ($cek > 0) {
	
	// $data = mysqli_fetch_assoc($login);
	// // Mengembalikan string yg sdh diacak
	// if (password_verify($Password, $data["Password"])) {
	$_SESSION['login'] = mysqli_fetch_array($login);
	header("Location: ../components/index.php");
} else {
	header("Location: ../index.php?pesan=gagal");
}
