<?php

// ==========================================
// 1. KELAS UNTUK ASOSIASI
// ==========================================

class Pasien {
    private string $nama;

    public function __construct(string $nama) {
        $this->nama = $nama;
    }

    public function getNama(): string {
        return $this->nama;
    }
}

class Dokter {
    private string $nama;

    public function __construct(string $nama) {
        $this->nama = $nama;
    }

    public function merawat(Pasien $pasien): void {
        echo "Dokter " . $this->nama . " merawat pasien " . $pasien->getNama() . "\n";
    }
}

// ==========================================
// 2. KELAS UNTUK AGREGASI
// ==========================================

class Pemain {
    private string $nama;

    public function __construct(string $nama) {
        $this->nama = $nama;
    }

    public function getNama(): string {
        return $this->nama;
    }
}

class Tim {
    private string $namaTim;
    /** @var Pemain[] */
    private array $daftarPemain;

    public function __construct(string $namaTim, array $daftarPemain) {
        $this->namaTim = $namaTim;
        $this->daftarPemain = $daftarPemain;
    }

    public function tampilkanPemain(): void {
        echo "Tim " . $this->namaTim . " memiliki pemain:\n";
        foreach ($this->daftarPemain as $pemain) {
            echo "- " . $pemain->getNama() . "\n";
        }
    }
}

// ==========================================
// 3. KELAS UNTUK KOMPOSISI
// ==========================================

class Bab {
    private string $judulBab;

    public function __construct(string $judulBab) {
        $this->judulBab = $judulBab;
    }

    public function getJudulBab(): string {
        return $this->judulBab;
    }
}

class Buku {
    private string $judulBuku;
    /** @var Bab[] */
    private array $daftarBab;

    public function __construct(string $judulBuku) {
        $this->judulBuku = $judulBuku;
        $this->daftarBab = [];
        $this->tambahBab();
    }

    private function tambahBab(): void {
        $this->daftarBab[] = new Bab("Pendahuluan");
        $this->daftarBab[] = new Bab("Isi");
        $this->daftarBab[] = new Bab("Penutup");
    }

    public function tampilkanBab(): void {
        echo "Buku " . $this->judulBuku . " memiliki bab:\n";
        foreach ($this->daftarBab as $bab) {
            echo "- " . $bab->getJudulBab() . "\n";
        }
    }
}

// ==========================================
// 4. KODE UTAMA / EKSEKUSI (Main)
// ==========================================

/**
 * ASOSIASI
 */
// object dokter
$dokter = new Dokter("Dr. Andi");
// object pasien
$pasien = new Pasien("Budi");

// asosiasi. Pak Dokter merawat Pasien
$dokter->merawat($pasien);

echo "\n";

/**
 * AGREGASI
 */
// object Pemain Eko
$pemain1 = new Pemain("Eko");
// object Pemain Dina
$pemain2 = new Pemain("Dina");

// Membuat Tim
$tim = new Tim("Garuda", [$pemain1, $pemain2]);
$tim->tampilkanPemain();

echo "\n";

/**
 * KOMPOSISI
 */
// object Buku
$buku = new Buku("Belajar Java");
$buku->tampilkanBab();

// Jika buku dihancurkan, bab juga ikut hilang
$buku = null;

?>