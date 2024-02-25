<?php

include '../components/header.php';
include '../src/conn.php';

?>


<div class="content mt-3">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body bg-warning text-center">
                    <h4>Data Buku</h4>
                    <h3>
                        <?=

                        mysqli_num_rows(mysqli_query($conn, "SELECT * FROM buku"));

                        ?>
                    </h3>
                    <hr>
                    <a href="" class="btn btn-dark btn-sm">Lihat Data </a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body bg-danger text-center">
                    <h4>Kategori Buku</h4>
                    <h3>
                        <?=

                        mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kategoribuku"));

                        ?>
                    </h3>
                    <hr>
                    <a href="" class="btn btn-dark btn-sm">Lihat Data </a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body bg-info text-center">
                    <h4>Users</h4>
                    <h3>
                        <?=

                        mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user"));

                        ?>
                    </h3>
                    <hr>
                    <a href="" class="btn btn-dark btn-sm">Lihat Data </a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body bg-primary text-center">
                    <h4>Peminjaman</h4>
                    <h3>
                        <?=

                        mysqli_num_rows(mysqli_query($conn, "SELECT * FROM peminjaman"));

                        ?>
                    </h3>
                    <hr>
                    <a href="" class="btn btn-dark btn-sm">Lihat Data </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../components/footer.php' ?>