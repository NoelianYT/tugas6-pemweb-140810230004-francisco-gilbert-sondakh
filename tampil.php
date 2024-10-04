<?php
include 'db_connect.php';

$sql = "SELECT * FROM identitas ORDER BY npm ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Update</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["npm"] . "</td>
                <td>" . $row["nama"] . "</td>
                <td>" . $row["alamat"] . "</td>
                <td>" . $row["tgl_lhr"] . "</td>
                <td>" . $row["jk"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>
                    <a href='update.php?npm=" . $row["npm"] . "' class='btn'>Edit</a>
                    <a href='delete.php?npm=" . $row["npm"] . "' class='btn btn-danger'>Hapus</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data.";
}

$conn->close();
?>