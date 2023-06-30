<?php
function get_max(...$numbers) {
    return max($numbers); 
  }

  echo get_max(10, 20);
  echo "<br>";
  echo get_max(10, 20, 30);
  echo "<br>";
  echo get_max(10, 20, 30, 40);