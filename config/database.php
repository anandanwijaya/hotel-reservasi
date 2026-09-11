<?php
$host = "sql203.infinityfree.com";
$user = "if0_42891755";
$pass = "Vtp0ziW5blp";
$db   = "if0_42891755_hotel_reservasi";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>