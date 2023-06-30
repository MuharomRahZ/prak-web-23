<?php
$str1 = "BAPAK PRESIDEN JOKO WIDODO";
echo "Sebelum diubah: $str1 <br>";
$str1 = strtolower($str1);
$str1 = ucwords($str1);
echo "Sesudah diubah: $str1";
?>