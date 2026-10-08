<?php

require_once 'Mahasiswa.php';
require_once 'MahasiswaInternational.php';
// Menggunakan constructor tanpa parameter di MahasiswaInternational
$mhsInt1 = new MahasiswaInternational();
$mhsInt1->setNama("Paolo Dicanio");
$mhsInt1->setNim("INT12345");
$mhsInt1->setUmur(21);
$mhsInt1->setNegaraAsal("Italy");
$mhsInt1->tampilkanInfo();

echo "\n";

// Menggunakan constructor dengan 3 parameter (nama, nim, negara)
// Karena di PHP 8+ kita bisa menentukan parameter secara spesifik, 
// kita bisa mengisi nama, nim, dan negaraAsal tanpa harus menyertakan umur secara berurutan.
$mhsInt2 = new MahasiswaInternational(nama: "Sarah", nim: "INT67890", negaraAsal: "Australia");
$mhsInt2->setUmur(22); // Mengatur umur menggunakan setter
$mhsInt2->tampilkanInfo();

echo "\n";

// Menggunakan constructor dengan 4 parameter (nama, nim, umur, negara)
$mhsInt3 = new MahasiswaInternational("David", "INT54321", 23, "UK");
$mhsInt3->tampilkanInfo();

?>