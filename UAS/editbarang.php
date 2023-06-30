<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
</head>
<body>
    <h1>Edit Barang</h1>

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

            <form action="" method="POST">
                <label for="id_barang"><p>ID Barang: <?php echo $barang['id_barang']; ?></p></label>
                <input type="hidden" name="id_barang" value="<?php echo $barang['id_barang']; ?>">

                <label for="nama_barang"><p>Nama Barang: <?php echo $barang['nama_barang']; ?></p></label>
                <input type="hidden" name="nama_barang" id="nama_barang" value="<?php echo $barang['nama_barang']; ?>">

                <label for="harga">Harga:</label>
                <input type="text" name="harga" id="harga" value="<?php echo $barang['harga']; ?>">

                <input type="submit" value="Ubah">
            </form>

            <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nama_barang = $_POST['nama_barang'];
                $harga = $_POST['harga'];

                // Update data barang ke database
                $update_sql = "UPDATE barang SET nama_barang = '$nama_barang', harga = '$harga' WHERE id_barang = $id_barang";
                if(mysqli_query($koneksi, $update_sql)) {
                    echo "Data barang berhasil diperbarui.";
                } else {
                    echo "Terjadi kesalahan saat memperbarui data barang: " . mysqli_error($koneksi);
                    // echo "<script>alert('Terjadi kesalahan saat memperbarui data barang:')". mysqli_error($conn);"history.go(-1)</script>";
                }
            }
        } else {
            echo "<script>alert('Barang tidak ditemukan!');history.go(-1)</script>";
        }
    }
    ?>

</body>
</html>