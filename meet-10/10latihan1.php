<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Mata Kuliah</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        include "10lat_koneksi.php";
        $query = "SELECT * FROM matkul"; 
        $result = $koneksi->query($query);
        while ($row = $result->fetch_array()) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nm_matkul']; ?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>
