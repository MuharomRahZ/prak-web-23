<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Barang</title>
</head>
<body>
    <h1>Pencarian Barang</h1>

    <form action="" method="GET">
        <label for="id_barang">ID Barang:</label>
        <input type="text" name="id_barang" id="id_barang">
        <input type="submit" value="Cari">
    </form>

    <?php
    include 'koneksi.php';
    if(isset($_GET['id_barang'])) {
        $id_barang = $_GET['id_barang'];

        // Mengambil data barang dari database
        $sql = "SELECT * FROM barang WHERE id_barang = $id_barang";
        $result = mysqli_query($koneksi, $sql);

        if(mysqli_num_rows($result) > 0) {
            $barang = mysqli_fetch_assoc($result);
            ?>


            <h2>Data Barang</h2>
            <table class="table">
                <tr>
                    <td>ID Barang</td>
                    <td>Nama Barang</td>
                    <td>Harga</td>
                    <td>Aksi</td>
                </tr>
                <tr>
                    <td><?php echo $barang['id_barang']; ?></td>
                    <td><?php echo $barang['nama_barang']; ?></td>
                    <td><?php echo $barang['harga']; ?></td>
                    <td><a href="editbarang.php?id_barang=<?php echo $barang['id_barang']; ?>">Edit</a></td>
                </tr>
            </table>
            <!-- <p>ID Barang: <?php echo $barang['id_barang']; ?></p>
            <p>Nama Barang: <?php echo $barang['nama_barang']; ?></p>
            <p>Harga: <?php echo $barang['harga']; ?></p>

            <a href="editbarang.php?id_barang=<?php echo $barang['id_barang']; ?>">Edit Barang</a> -->

            <?php
        } else {
            echo "<script>alert('Barang tidak ditemukan!');history.go(-1)</script>";
        }
    }
    ?>

</body>
</html>