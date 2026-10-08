<?php

class Smartphone extends Handphone {

    public function __construct(string $merk, string $model) {
        parent::__construct($merk, $model);
    }

    #[\Override] // Opsional di PHP 8.3+, menandakan method override
    public function nyalakan(): void {
        echo "Smartphone " . $this->merk . " " . $this->model . " sedang booting.\n";
    }

    #[\Override]
    public function matikan(): void {
        echo "Smartphone " . $this->merk . " " . $this->model . " sedang shutdown.\n";
    }

    #[\Override]
    public function telepon(string $nomor): void {
        echo "Melakukan panggilan video ke nomor " . $nomor . "\n";
    }

    public function aksesInternet(): void {
        echo "Mengakses internet melalui Smartphone.\n";
    }
}

?>