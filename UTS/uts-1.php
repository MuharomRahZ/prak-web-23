<?php
// import fungsi meterToFeet dan cmToInch
function meterToFeet($meter) {
  return $meter * 3.28;
}

function cmToInch($cm) {
  return $cm * 0.393;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>UTS-Rahmat Zaki Muharom</title>
</head>

<body>
<h1>Selamat Datang di UTS-Rahmat Zaki Muharom</h1>
<p>Silahkan pilih salah satu konversi berikut:</p>

<?php
// ambil nilai dari form jika ada
if (isset($_POST['meter'])) {
    $meter = $_POST['meter'];
    $feet = meterToFeet($meter);
    echo "Hasil convert Meter to Feet: <br>";
    echo "{$meter} meter sama dengan {$feet} feet <br>";
} elseif (isset($_POST['cm'])) {
    $cm = $_POST['cm'];
    $inch = cmToInch($cm);
    echo "Hasil convert CM to Inch: <br>";
    echo "{$cm} cm sama dengan {$inch} inch <br>";
}
?>

<!-- form konversi meter to feet -->
<form method="post">
    <label for="meter">Meter:</label>
    <input type="number" name="meter" id="meter">
    <input type="submit" value="Convert">
</form>

<!-- form konversi cm to inch -->
<form method="post">
    <label for="cm">Cm:</label>
    <input type="number" name="cm" id="cm">
    <input type="submit" value="Convert">
</form>

</body>
</html>