<?php
$host = "sql103.infinityfree.com";
$user = "if0_42874302";
$pass = "hewjLQ0VQnM7S9";
$db   = "if0_42874302_hotel_reservasi";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>