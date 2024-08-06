<?php

$koneksi = mysqli_connect("localhost", "root", "", "artomoro");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>