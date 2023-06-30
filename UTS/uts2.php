<?php
function meterToFeet($meter) {
	return $meter * 3.28;
}

function cmToInch($cm) {
	return $cm * 0.393;
}

$meter = 10;
$feet = meterToFeet($meter);
echo $meter . " meter = " . $feet . " feet<br>";

$cm = 20;
$inch = cmToInch($cm);
echo $cm . " cm = " . $inch . " inch<br>";
?>
