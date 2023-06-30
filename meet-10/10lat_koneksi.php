<html>
<head>
<title>Koneksi Database MySQL</title>
</head>
<body>
<h1>Demo koneksi database MySQL</h1> 

<?
$host = "localhost"; //untuk host
$username = "root";//untuk username
$password = ""; //untuk password
$database = "db_akademik";//untuk nama database
$koneksi = mysqli_connect($host, $username, $password, $database);
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
?>
</body>
</html>