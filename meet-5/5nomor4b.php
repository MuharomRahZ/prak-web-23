<?php
function pangkat($x, $y) {
    $hasil = 1; 
    for ($i=1; $i<=$y; $i++) {
      $hasil *= $x; 
    }
    return $hasil; 
  }
  $nilai_pangkat = pangkat(2, 3);
  echo $nilai_pangkat; 