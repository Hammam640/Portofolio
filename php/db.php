<?php
$host = "localhost";
$user = "root";        // sesuaikan dengan hosting kamu
$pass = "";            // biasanya kosong di localhost
$db   = "portfolio";   // nama database

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
