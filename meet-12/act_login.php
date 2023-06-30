<?php
session_start();
include "koneksi.php";

$user = $_POST['username'];
$psw = md5($_POST['psw']);

$query_l = "SELECT * FROM register WHERE username='$user' AND password='$psw'";
$h_l = $koneksi->query($query_l);

if ($h_l->num_rows == 1) {
    $d_l = $h_l->fetch_array();
    $_SESSION['username'] = $d_l['username'];
    $_SESSION['level'] = $d_l['level']; 
    if ($d_l['level'] == "Admin" || $d_l['level'] == "Mahasiswa" || $d_l['level'] == "Dosen") {
        header("location: home.php");
        exit();
    } else {
        die("Level pengguna tidak valid");
    }
} else {
    die("Username atau password salah <a href=\"javascript:history.back()\">kembali</a>");
}
?>
