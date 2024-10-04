<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];

    $sql = "INSERT INTO identitas (npm, nama, alamat, tgl_lhr, jk, email)
            VALUES ('$npm', '$nama', '$alamat', '$tgl_lhr', '$jk', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>