<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table border="1">
    <tr>
        <thead>
            <th>No.</th>
            <th>Nama Mata Kuliah</th>
        </thead>
    </tr>
    <tbody>
    <?php 
    $no = 1;
    include "10lat_koneksi.php"; 
    $query = "SELECT * FROM matkul";
    $result = $koneksi->query($query);
    while ($row = $result->fetch_row()) { ?>
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
