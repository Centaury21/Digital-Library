<?php

$conn = mysqli_connect("localhost", "root", "", "digitallibrary2");

if (mysqli_connect_errno()){
    echo "Connect Failed!" . mysqli_connect_error();
}

