<?php
// session_start();
include 'koneksi.php';

if (isset($_POST['tgl']) && isset($_POST['deskripsi']) && isset($_FILES['file'])) {
    $tgl = $_POST['tgl'];
    $deskripsi = $_POST['deskripsi'];
    $file = $_FILES['file'];

    // Mendapatkan informasi file yang diunggah
    $nama_file = $file['name'];
    $tipe_file = $file['type'];
    $ukuran_file = $file['size'];
    $tmp_file = $file['tmp_name'];

    // Generate kode_doc dengan nilai integer random
    $kode_doc = rand(100000, 999999);

    // Menyiapkan data file untuk disimpan ke database
    $data_file = addslashes(file_get_contents($tmp_file));

    // Upload file ke server
    $folder = "upload/";
    $target_file = $folder . basename($nama_file);
    move_uploaded_file($tmp_file, $target_file);

    // Menyimpan data file ke database
    $sql = "INSERT INTO document (kode_doc, tgl, deskripsi, file, nama_file, tipe_file, ukuran_file) 
              VALUES ('$kode_doc', '$tgl', '$deskripsi', '$data_file', '$nama_file', '$tipe_file', '$ukuran_file')";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        echo "<script>alert('File berhasil diunggah ke database.');history.go(-1)</script>";
    } else {
        echo "File gagal diunggah. Error: " . mysqli_error($koneksi);
    }
}else {
    echo "<script>alert('Harap lengkapi semua field.');history.go(-1)</script>";
}

// $koneksi->close();
?>
