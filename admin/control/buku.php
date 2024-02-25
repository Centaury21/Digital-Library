<?php
include '../../src/conn.php';

$KategoriID = $_POST['KategoriID'];
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];
$Stok = $_POST['Stok'];

// upload foto cover buku
$rand = rand(); //menyisipkan angka random
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif'); //ekstensi yang diperbolehkan
$filename = $_FILES['Cover']['name'];
$ukuran = $_FILES['Cover']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION); //cek ekstensi yang diupload

if (!in_array($ext, $ekstensi)) {
    header("Location: ../admin/addBuku.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 1044070) {
        $newFilename = $rand . '_' . $filename;
        move_uploaded_file($_FILES['Cover']['tmp_name'], '../../assets/img/upload/' . $rand . '_' . $filename);
        mysqli_query($conn, "INSERT INTO buku VALUES('', '$KategoriID', '$Judul', '$Penulis', '$Penerbit', '$TahunTerbit', '$Stok', '$newFilename')");
        header("Location: ../buku.php?pesan=simpan");
    } else {
        header("Location: ../buku.php?pesan=gagal");
    }
} 

return mysqli_affected_rows($conn);
