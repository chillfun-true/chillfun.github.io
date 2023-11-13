<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "resume";

$conn = mysqli_connect($host, $username, $password);

if (!$conn) die ("Koneksi gagal");
mysqli_select_db($conn, $database) or die ("Database tidak ditemukan");
?>