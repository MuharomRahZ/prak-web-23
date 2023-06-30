<?php
function cari($array, $cari): bool {
    // lakukan pencarian dengan loop pada setiap elemen dalam array
    foreach($array as $nilai) {
        // jika nilai yang dicari ditemukan, return true
        if ($nilai == $cari) {
            return true;
        }
    }
    // jika tidak ditemukan, return false
    return false;
}

// contoh penggunaan fungsi cari()
$angka = array(2, 8, 10, 5, 1, 7, 9);
$cari = 7;
if (cari($angka, $cari)) {
    echo "Nilai $cari ditemukan dalam array";
} else {
    echo "Nilai $cari tidak ditemukan dalam array";
}
?>