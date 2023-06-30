<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "jualbeli";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
?>
