<?php

class iPhone {
    // Properties
    /*
     * warna/color
     * storage/kapasitas penyimpanan
     */
    private string $color;
    private string $storage;

    // Konstruktor
    /*
     * Di PHP, konstruktor menggunakan nama khusus yaitu __construct()
     * Setiap objek yang dibentuk dari class harus memberikan nilai/value
     * terhadap beberapa properties
     */
    public function __construct(string $color, string $storage) {
        $this->color = $color;
        $this->storage = $storage;
    }

    // public -> bisa diakses dari umum
    // string -> tipe data kembalian/output dari method
    // getColor() -> adalah nama method
    public function getColor(): string {
        return $this->color;
    }

    public function getStorage(): string {
        return $this->storage;
    }
}

// Contoh penggunaan:
$myPhone = new iPhone("Space Gray", "256GB");
echo $myPhone->getColor();   // Output: Space Gray
echo $myPhone->getStorage(); // Output: 256GB

?>