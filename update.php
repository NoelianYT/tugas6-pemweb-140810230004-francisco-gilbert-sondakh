<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];

    $sql = "UPDATE identitas SET nama='$nama', alamat='$alamat', tgl_lhr='$tgl_lhr', jk='$jk', email='$email' WHERE npm='$npm'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect kembali ke halaman utama setelah berhasil update
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
} else {
    $npm = $_GET['npm'];
    $sql = "SELECT * FROM identitas WHERE npm='$npm'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mahasiswa</title>
    <link rel="stylesheet" href="myStyle.css">
</head>
<body>
    <h2>Update Data Mahasiswa</h2>
    <form method="POST" action="update.php">
        <input type="hidden" name="npm" value="<?php echo $row['npm']; ?>">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required><br><br>
        Tanggal Lahir: <input type="date" name="tgl_lhr" value="<?php echo $row['tgl_lhr']; ?>" required><br><br>
        Jenis Kelamin: <input type="text" name="jk" value="<?php echo $row['jk']; ?>" maxlength="1" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        <input type="submit" value="Update" class="btn">
    </form>
</body>
</html>
<?php
    } else {
        echo "Data tidak ditemukan";
    }
}
?>