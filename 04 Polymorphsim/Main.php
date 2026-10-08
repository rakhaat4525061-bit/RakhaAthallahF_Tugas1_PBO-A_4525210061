<?php

// Load semua class yang digunakan
require_once 'Handphone.php';    // jika ada class induk Handphone
require_once 'Smartphone.php';
require_once 'FeaturePhone.php'; // <--- Tambahkan baris ini!

// Membuat array dari Handphone
$daftarHandphone = [];

// Mengisi array dengan objek Smartphone dan FeaturePhone
$daftarHandphone[] = new Smartphone("Samsung", "Galaxy S21");
$daftarHandphone[] = new FeaturePhone("Nokia", "3310");

// Menggunakan loop untuk memanggil metode secara polimorfik
foreach ($daftarHandphone as $hp) {
    $hp->nyalakan();
    $hp->telepon("08123456789");
    $hp->matikan();
    echo "\n";
}

// Mengakses metode khusus dengan type checking (instanceof)
foreach ($daftarHandphone as $hp) {
    if ($hp instanceof Smartphone) {
        $hp->aksesInternet();
    } elseif ($hp instanceof FeaturePhone) {
        $hp->mainGameSnake();
    }
}

?>