<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $kode_doc = $_GET['kode_doc'];

    // Mencari data dokumen berdasarkan kode dokumen
    $query = "SELECT * FROM document WHERE kode_doc = '$kode_doc'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        // Dokumen ditemukan
        $row = $result->fetch_assoc();
        $file = 'download/' . $row['nama_file'];
        $filename = $row['nama_file'];
        $filesize = $row['ukuran_file'];

        // Mengirim file untuk di-download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $filename);
        header('Content-Length: ' . $filesize);
        readfile($file);
    } else {
        // Dokumen tidak ditemukan
        echo "Dokumen tidak ditemukan.";
    }
}

$koneksi->close();
?>
