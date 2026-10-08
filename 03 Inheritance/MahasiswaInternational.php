<?php

require_once 'Mahasiswa.php';
// Kelas MahasiswaInternational (Subclass) yang mewarisi Mahasiswa
class MahasiswaInternational extends Mahasiswa {
    // Variabel tambahan untuk mahasiswa internasional
    private string $negaraAsal;

    // Single Constructor dengan Default Value
    // Memanggil parent::__construct untuk menginisialisasi properti turunan dari parent
    public function __construct(
        string $nama = "Belum Diisi",
        string $nim = "Belum Diisi",
        int $umur = 0,
        string $negaraAsal = "Belum Diisi"
    ) {
        parent::__construct($nama, $nim, $umur);
        $this->negaraAsal = $negaraAsal;
    }

    // Getter dan Setter untuk negara asal
    public function getNegaraAsal(): string {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void {
        $this->negaraAsal = $negaraAsal;
    }

    // Override method tampilkanInfo untuk menampilkan informasi tambahan
    #[\Override] // Opsional di PHP 8.3+, menandakan method override
    public function tampilkanInfo(): void {
        parent::tampilkanInfo(); // Memanggil method tampilkanInfo dari parent class
        echo "Negara Asal: " . $this->negaraAsal . "\n";
    }
}

?>