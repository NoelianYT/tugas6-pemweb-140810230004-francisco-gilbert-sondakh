<?php
$host = "127.0.0.1";
$port = "3307";
$username = "noelianyt";
$password = "Jkth1l4ng@D26";
$dbname = "mhs";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>