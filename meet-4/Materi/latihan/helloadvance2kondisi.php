<?php
// if (kondisi) {
//     statemen yang dieksekusi
//     }

// if (kondisi) {
//     statemen yang dieksekusi
//     } else {
//     statemen lainnya
//     }

// if (kondisi1){
//     // statemen untuk kondisi 1;
//     } elseif (kondisi2){
//     // statemen untuk kondisi 2;
//     } elseif (kondisi3){
//     // statemen untuk kondisi 3;
//     }

switch ($bulan){
    case 1:
        echo "Januari";
        break;
    case 2:
        echo "Februari";
        break;
    case 3:
        echo "Maret";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "Mei";
        break;
    case 6:
        echo "Juni";
        break;
    case 7:
        echo "Juli";
        break;
    case 8:
        echo "Agustus";
        break;
    case 9:
        echo "September";
        break;
    case 10:
        echo "Oktober";
        break;
    case 11:
        echo "November";
        break;
    case 12:
        echo "Desember";
        break;
    default:
        echo "Ini default statemen";
    }
?>