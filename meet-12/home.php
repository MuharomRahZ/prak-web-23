<?php
session_start();
include "koneksi.php"; 
error_reporting (E_ALL^(E_NOTICE |E_WARNING)); 
if(!isset($_SESSION['username'])){
    die("Anda belum login");
} 
$username=$_SESSION['username']; 
$level=$_SESSION['level'];
if ($level=='Admin') {
echo "Anda Masuk Sebagai ".$level;
} elseif ($level == 'Mahasiswa') { 
    echo "Anda Masuk Sebagai ".$level;
} elseif ($level == 'Dosen') { 
    echo "Anda Masuk Sebagai ".$level; 
}
?>
<h2>Selamat Datang di Upload & Downlod Document/File</h2>
<p>Harap pilih salah satu di antara opsi-opsi berikut:</p>
<table>
    <tr>
        <td>Upload document/ file:</td>
        <td><button><a href="formupload.html">Upload</a></button></td>
    </tr>
    <tr>
        <td>Download document/file:</td>
        <td><button><a href="formdownload.html">Download</a></button></td>
    </tr>
</table>