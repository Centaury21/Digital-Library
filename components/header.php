<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if (!isset($_SESSION['login'])) {
    header("location: ../index.php?pesan=info_login");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/d6922c2b72.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark-subtle">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../assets/img/DigitalLibrary.png" alt="Logo" width="120" height="95" class="d-inline-block align-text-center">
                </a>
                <button id="btnMenu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarsNav" aria-expanded="false" aria-label="Toggle navigation">
                    MENU <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="btn">
                            <a class="nav-link" id="navbarAdm" href="../admin/index.php">Dashboard</a>
                        </li>
                        <?php
                        if ($_SESSION['login']['Level'] !== 'Peminjam') {
                        ?>
                            <li class="btn">
                                <a class="nav-link" id="navbarAdm" href="../admin/kategori.php">Kategori Buku</a>
                            </li>
                            <li class="btn">
                                <a class="nav-link" id="navbarAdm" href="../admin/buku.php">Buku</a>
                            </li>
                            <li class="btn">
                                <a class="nav-link" id="navbarAdm" href="../admin/koleksi.php">Koleksi</a>
                            </li>
                            <li class="btn">
                                <a class="nav-link" id="navbarAdm" href="../admin/users.php">Users</a>
                            </li>

                        <?php

                        } else {

                        ?>
                            <li class="btn">
                                <a class="nav-link" id="navbarAdm" href="../admin/peminjaman.php">Peminjaman</a>
                            </li>
                        <?php

                        }

                        ?>
                        <?php
                        if ($_SESSION['login']['Level'] !== 'Peminjam') {
                        ?>
                            <li class="btn">
                                <a class="nav-link" id="navbarAdm" href="../admin/laporan_peminjaman.php">Laporan Peminjaman</a>
                            </li>
                        <?php } ?>
                        <li class="btn">
                            <a class="nav-link" id="navbarAdm" href="../admin/ulasan.php">Ulasan</a>
                        </li>
                        <li class="btn">
                            <a class="nav-link" id="navbarAdm" href="../src/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>