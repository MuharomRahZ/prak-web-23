<?php
$numberedString = "1234567890123456789012345678901234567890";
$fivePos = -1;
$fivePos2 = -1;

for ($i = 0; $i < strlen($numberedString); $i++) {
  if ($numberedString[$i] == "5") {
    if ($fivePos == -1) {
      $fivePos = $i;
    } else {
      $fivePos2 = $i;
      break;
    }
  }
}

echo "The position of 5 in our string was $fivePos";
echo "<br>The position of the second 5 was $fivePos2";

?>