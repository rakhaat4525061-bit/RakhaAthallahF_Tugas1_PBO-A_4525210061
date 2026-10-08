<?php

class Lingkaran extends BangunDatar {
    // r atau jari-jari
    private int $r;

    public function __construct(int $r) {
        $this->r = $r;
    }
    
    #[\Override] // Opsional di PHP 8.3+, menandakan method override
    public function luas(): float {
        return (float) (pi() * $this->r * $this->r);
    }
    
    #[\Override] // Opsional di PHP 8.3+, menandakan method override
    public function keliling(): float {
        return (float) (2 * pi() * $this->r);
    }
}

?>