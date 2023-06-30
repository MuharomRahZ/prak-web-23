<?php
$guestbookFile = "guestbook.txt";

file_put_contents($guestbookFile, '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];

    $data = $nama . ';' . $komentar . "\n";

    file_put_contents($guestbookFile, $data, FILE_APPEND | LOCK_EX);
}

$guestbookData = file_get_contents($guestbookFile);
$entries = explode("\n", $guestbookData);

foreach ($entries as $entry) {
    $data = explode(';', $entry);
    $nama = $data[0];
    $komentar = $data[1];

    // Tampilkan nama dan komentar
    echo "Nama: $nama<br>";
    echo "Komentar: $komentar<br><br>";
}
?>

<form method="POST">
    Nama: <input type="text" name="nama"><br>
    Komentar: <textarea name="komentar"></textarea><br>
    <input type="submit" value="Submit">
</form>
