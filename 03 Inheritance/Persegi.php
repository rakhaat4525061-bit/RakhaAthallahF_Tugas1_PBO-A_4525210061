<?php

class Persegi extends BangunDatar {
    private int $sisi;

    public function __construct(int $sisi) {
        $this->sisi = $sisi;
    }

    #[\Override] // Opsional di PHP 8.3+, menandakan method override
    public function luas(): float {
        return (float) ($this->sisi * $this->sisi);
    }

    #[\Override] // Opsional di PHP 8.3+, menandakan method override
    public function keliling(): float {
        return (float) ($this->sisi * 4);
    }
}

?>