<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['Level'] == "") {
    header("location: ../index.php?pesan=info_login");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="bg-dark-subtle">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/logo.png" alt="Logo" width="90" height="80" class="d-inline-block align-text-center">
            </a>
                <button id="btnMenu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarsNav" aria-expanded="false" aria-label="Toggle navigation">
                    MENU <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="btn">
                            <a class="nav-link" id="navbarAdm" href="index.php">Dashboard</a>
                        </li>
                        <li class="btn">
                            <a class="nav-link" id="navbarAdm" href="kategori.php">Kategori Buku</a>
                        </li>
                        <li class="btn">
                            <a class="nav-link" id="navbarAdm" href="buku.php">Buku</a>
                        </li>
                        <li class="btn">
                            <a class="nav-link" id="navbarAdm" href="koleksi.php">Koleksi</a>
                        </li>
                        <li class="btn">
                            <a class="nav-link" id="navbarAdm" href="users.php">Users</a>
                        </li>
                        <li class="btn">
                            <a class="nav-link" id="navbarAdm" href="peminjaman.php">Peminjaman</a>
                        </li>
                        <li class="btn">
                            <a class="nav-link" id="navbarAdm" href="laporan_peminjaman.php">Laporan Peminjaman</a>
                        </li>
                        <li class="btn">
                            <a class="nav-link" id="navbarAdm" href="../src/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>