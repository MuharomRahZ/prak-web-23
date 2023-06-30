<?php
function convertToFeet($meter) {
  $feet = $meter * 3.28;
  return $feet;
}

function convertToInch($cm) {
  $inch = $cm * 0.393;
  return $inch;
}
?>

<?php
// konversi dari meter ke feet
$meter = 5;
$feet = convertToFeet($meter);
echo $meter . " meter = " . $feet . " feet";

echo ("<br>");

// konversi dari cm ke inch
$cm = 50;
$inch = convertToInch($cm);
echo $cm . " cm = " . $inch . " inch";
?>
