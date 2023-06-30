<?php
include "10nomor3_koneksi.php";

$query = "SELECT * FROM bukutamu";
$result = $koneksi->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku Tamu</title>
</head>
<body>
    <h1>Data Buku Tamu</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Komentar</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id_bukutamu']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['komentar']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
