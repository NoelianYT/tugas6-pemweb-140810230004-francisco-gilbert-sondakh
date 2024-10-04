<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="myStyle.css">
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <!-- Form untuk input data mahasiswa -->
    <h2>Form Input Data</h2>
    <form method="POST" action="insert.php">
        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" required><br><br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required><br><br>

        <label for="tgl_lhr">Tanggal Lahir:</label>
        <input type="date" id="tgl_lhr" name="tgl_lhr" required><br><br>

        <label for="jk">Jenis Kelamin (L/P):</label>
        <input type="text" id="jk" name="jk" maxlength="1" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit" class="btn">
    </form>

    <!-- Tabel menampilkan data mahasiswa -->
    <h2>Daftar Mahasiswa</h2>
    <?php include 'tampil.php'; ?>
</body>
</html>