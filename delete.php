<?php
include 'db_connect.php';

$npm = $_GET['npm'];

$sql = "DELETE FROM identitas WHERE npm='$npm'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Redirect kembali ke halaman utama setelah berhasil hapus
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
