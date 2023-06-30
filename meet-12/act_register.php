<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $psw = md5($_POST['psw']); //$_POST['psw'];
    $ulangpsw = md5($_POST['ulangpsw']); //$_POST['ulangpsw']; 
    $email = $_POST['email'];
    $nama = $_POST['namalengkap'];
    $level = $_POST['level'];

    if ($psw != $ulangpsw) {
        echo "<script>alert('Password tidak sesuai dengan konfirmasi password.');history.go(-1)</script>";
        exit;
    }

    $sql = "INSERT INTO register (username, password, email, namalengkap, level) VALUES ('$user', '$psw', '$email', '$nama', '$level')";

    if ($koneksi->query($sql) === TRUE) {
        // echo "Registrasi berhasil. Silakan <a href='formlogin.html'>login</a>.";
        echo "<script>alert('Anda Sukses Registrasi.');history.go(-1)</script>";
    } else {
        echo "Registrasi gagal. Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

}
$koneksi->close();
