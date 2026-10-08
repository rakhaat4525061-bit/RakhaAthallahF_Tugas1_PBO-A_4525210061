<?php

// Subclass dari Vehicle yang mengimplementasikan Fuelable dan Movable
class Motor extends Vehicle implements Fuelable, Movable {
    use DefaultFuelable; // Menggunakan implementasi default refuel() dari trait

    public function __construct(string $name) {
        parent::__construct($name);
    }

    // Implementasi method abstract dari Vehicle / Movable
    #[\Override]
    public function move(): void {
        echo $this->name . " bergerak di tanah gravel.\n";
    }
}

?>